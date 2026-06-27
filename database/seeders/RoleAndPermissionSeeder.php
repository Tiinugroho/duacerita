<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Disable foreign key checks to allow truncating
        Schema::disableForeignKeyConstraints();
        
        // Truncate tables to prevent duplicates
        User::truncate();
        Role::truncate();
        Permission::truncate();
        
        Schema::enableForeignKeyConstraints();

        // 1. Create Permissions
        $permissions = [
            'view_dashboard' => 'View Dashboard',
            'manage_users' => 'Manage Users',
            'manage_settings' => 'Manage Settings',
            'create_invitations' => 'Create Invitations',
            'edit_invitations' => 'Edit Invitations',
        ];

        $createdPermissions = [];
        foreach ($permissions as $slug => $name) {
            $createdPermissions[$slug] = Permission::create([
                'name' => $name,
                'slug' => $slug,
            ]);
        }

        // 2. Create Roles
        $superadminRole = Role::create([
            'name' => 'Super Admin',
            'slug' => 'superadmin',
        ]);

        $adminRole = Role::create([
            'name' => 'Administrator',
            'slug' => 'admin',
        ]);

        $clientRole = Role::create([
            'name' => 'Client / Customer',
            'slug' => 'client',
        ]);

        // 3. Assign Permissions to Roles
        // Superadmin gets everything
        $superadminRole->permissions()->sync(
            Permission::pluck('id')->toArray()
        );

        // Admin gets dashboard, invitations, and users
        $adminRole->permissions()->sync([
            $createdPermissions['view_dashboard']->id,
            $createdPermissions['manage_users']->id,
            $createdPermissions['create_invitations']->id,
            $createdPermissions['edit_invitations']->id,
        ]);

        // Client gets dashboard and invitations
        $clientRole->permissions()->sync([
            $createdPermissions['view_dashboard']->id,
            $createdPermissions['create_invitations']->id,
            $createdPermissions['edit_invitations']->id,
        ]);

        // 4. Create and Seed Users
        // Super Admin User
        $superAdminUser = User::create([
            'name' => 'Super Admin DuaCerita',
            'email' => 'superadmin@duacerita.com',
            'password' => Hash::make('password'),
        ]);
        $superAdminUser->assignRole('superadmin');

        // Admin User
        $adminUser = User::create([
            'name' => 'Admin DuaCerita',
            'email' => 'admin@duacerita.com',
            'password' => Hash::make('password'),
        ]);
        $adminUser->assignRole('admin');

        // Client User
        $clientUser = User::create([
            'name' => 'Client Customer',
            'email' => 'client@duacerita.com',
            'password' => Hash::make('password'),
        ]);
        $clientUser->assignRole('client');
    }
}
