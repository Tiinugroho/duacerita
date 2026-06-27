<?php

namespace App\Traits;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait HasRoles
{
    /**
     * The roles that belong to the user.
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'user_has_roles');
    }

    /**
     * Assign a role to the user.
     *
     * @param string|Role $role
     * @return $this
     */
    public function assignRole(string|Role $role): self
    {
        if (is_string($role)) {
            $role = Role::where('slug', $role)->firstOrFail();
        }

        $this->roles()->syncWithoutDetaching([$role->id]);

        return $this;
    }

    /**
     * Check if the user has a specific role.
     *
     * @param string|array $roles
     * @return bool
     */
    public function hasRole(string|array $roles): bool
    {
        if (is_array($roles)) {
            return $this->roles->pluck('slug')->intersect($roles)->count() > 0;
        }

        return $this->roles->contains('slug', $roles);
    }

    /**
     * Check if the user has a specific permission.
     *
     * @param string|Permission $permission
     * @return bool
     */
    public function hasPermissionTo(string|Permission $permission): bool
    {
        $slug = is_string($permission) ? $permission : $permission->slug;

        // Check permissions through user's assigned roles
        foreach ($this->roles as $role) {
            if ($role->permissions->contains('slug', $slug)) {
                return true;
            }
        }

        return false;
    }
}
