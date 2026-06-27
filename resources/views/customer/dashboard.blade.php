@extends('layouts.admin.app')

@section('title', 'Dashboard Customer')

@section('content')
<!-- Breadcrumbs -->
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 w-full shrink-0">
    <div>
        <h1 class="text-xl lg:text-2xl font-bold font-heading text-slate-900 tracking-tight">
            Dashboard Customer
        </h1>
        <p class="text-xs text-slate-400 mt-0.5">
            Kelola detail undangan digital pernikahan Anda, pantau data konfirmasi RSVP tamu, dan lihat analitik kunjungan.
        </p>
    </div>

    <nav
        class="flex items-center gap-2 text-xs font-medium text-slate-400 bg-white/60 border border-slate-100 px-3 py-1.5 rounded-xl shadow-sm self-start sm:self-center">
        <a href="#"
            class="hover:text-[#2C5EAD] transition-colors flex items-center gap-1 text-slate-400 no-underline">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
            </svg>
            <span>Home</span>
        </a>
        <svg class="w-2.5 h-2.5 text-slate-300" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
        </svg>
        <span class="text-slate-600 font-semibold">Dashboard</span>
    </nav>
</div>
<!-- End Breadcrumbs -->

<!-- Content -->
<div class="w-full flex-1 space-y-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- Card: Total Undangan -->
        <div
            class="glass-card bg-white rounded-2xl p-5 shadow-sm border border-slate-100 flex flex-col justify-between">
            <div class="flex items-center justify-between">
                <span class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Total Undangan</span>
                <div
                    class="h-8 w-8 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                </div>
            </div>
            <div class="mt-3">
                <h3 class="text-xl font-bold text-slate-900 tracking-tight font-heading">2</h3>
                <span
                    class="text-[10px] font-semibold text-[#2C5EAD] bg-blue-50 px-2 py-0.5 rounded-full mt-1 inline-block">Aktif</span>
            </div>
        </div>

        <!-- Card: Undangan Aktif -->
        <div
            class="glass-card bg-white rounded-2xl p-5 shadow-sm border border-slate-100 flex flex-col justify-between">
            <div class="flex items-center justify-between">
                <span class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Undangan Aktif</span>
                <div
                    class="h-8 w-8 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </div>
            </div>
            <div class="mt-3">
                <h3 class="text-xl font-bold text-slate-900 tracking-tight font-heading">1</h3>
                <span
                    class="text-[10px] font-semibold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full mt-1 inline-block">50.0% Rasio</span>
            </div>
        </div>

        <!-- Card: Total RSVP -->
        <div
            class="glass-card bg-white rounded-2xl p-5 shadow-sm border border-slate-100 flex flex-col justify-between">
            <div class="flex items-center justify-between">
                <span class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Konfirmasi RSVP</span>
                <div
                    class="h-8 w-8 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z">
                        </path>
                    </svg>
                </div>
            </div>
            <div class="mt-3">
                <h3 class="text-xl font-bold text-slate-900 tracking-tight font-heading">142 Hadir</h3>
                <span
                    class="text-[10px] font-semibold text-purple-600 bg-purple-50 px-2 py-0.5 rounded-full mt-1 inline-block">↑ 12.4% tren</span>
            </div>
        </div>

        <!-- Card: Total Pengunjung -->
        <div
            class="glass-card bg-white rounded-2xl p-5 shadow-sm border border-slate-100 flex flex-col justify-between">
            <div class="flex items-center justify-between">
                <span class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Pengunjung Unik</span>
                <div
                    class="h-8 w-8 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                        </path>
                    </svg>
                </div>
            </div>
            <div class="mt-3">
                <h3 class="text-xl font-bold text-slate-900 tracking-tight font-heading">1,280</h3>
                <span
                    class="text-[10px] font-semibold text-amber-600 bg-amber-50 px-2 py-0.5 rounded-full mt-1 inline-block">↑ 23.1% tren</span>
            </div>
        </div>
    </div>

    <!-- Recent Invitations Table Card -->
    <div class="glass-card bg-white rounded-3xl p-4 lg:p-6 shadow-sm border border-slate-100">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
            <div>
                <h3 class="text-sm font-bold font-heading text-slate-900">Daftar Undangan Anda</h3>
                <p class="text-xs text-slate-400">Kelola rincian data undangan pernikahan digital Anda</p>
            </div>

            <div class="flex items-center gap-2">
                <button id="exportExcelBtn"
                    class="bg-white hover:bg-slate-50 text-[#2C5EAD] px-3.5 py-1.5 rounded-xl text-[11px] font-semibold border border-slate-200 transition-all shadow-sm flex items-center gap-2 cursor-pointer h-9">
                    <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                    <span>Excel</span>
                </button>
                <button id="exportPdfBtn"
                    class="bg-white hover:bg-slate-50 text-[#2C5EAD] px-3.5 py-1.5 rounded-xl text-[11px] font-semibold border border-slate-200 transition-all shadow-sm flex items-center gap-2 cursor-pointer h-9">
                    <svg class="w-4 h-4 text-rose-600 shrink-0" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                        </path>
                    </svg>
                    <span>PDF</span>
                </button>
            </div>
        </div>

        <div class="overflow-x-auto w-full border border-slate-100 rounded-2xl bg-white">
            <table id="recentInvitationsTable"
                class="w-full text-left border-collapse table-border text-xs">
                <thead>
                    <tr
                        class="border-b border-slate-100 text-slate-500 uppercase tracking-wider text-[10px] font-semibold bg-slate-50/50">
                        <th class="py-3.5 px-4">Kode Undangan</th>
                        <th class="py-3.5 px-4">Nama Acara</th>
                        <th class="py-3.5 px-4">Paket</th>
                        <th class="py-3.5 px-4">Tautan Undangan</th>
                        <th class="py-3.5 px-4">Status</th>
                        <th class="py-3.5 px-4">Total RSVP</th>
                        <th class="py-3.5 px-4">Tanggal Acara</th>
                        <th class="py-3.5 px-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-slate-600 divide-y divide-slate-50">
                    <!-- Row 1 -->
                    <tr class="hover:bg-[#C4E2F5]/10 transition-colors duration-150">
                        <td class="py-3.5 px-4 font-medium text-slate-900">DC-INV-001</td>
                        <td class="py-3.5 px-4 font-semibold text-slate-900">Pernikahan Alex & Emily</td>
                        <td class="py-3.5 px-4 text-slate-500">Gold (Premium)</td>
                        <td class="py-3.5 px-4 text-blue-600 font-medium">duacerita.com/alex-emily</td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center gap-1 bg-emerald-50 text-emerald-700 px-2.5 py-0.5 rounded-full text-[10px] font-semibold">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>Aktif
                            </span>
                        </td>
                        <td class="py-3.5 px-4 font-semibold text-slate-750">84 Hadir</td>
                        <td class="py-3.5 px-4 text-slate-400">2026-08-15</td>
                        <td class="py-3.5 px-4">
                            <div class="flex items-center justify-center gap-1">
                                <button
                                    @click="activeModal = 'view'; selectedApplicant = {id: 'DC-INV-001', name: 'Pernikahan Alex & Emily', faculty: 'Gold (Premium)', path: 'duacerita.com/alex-emily', date: '2026-08-15'}"
                                    class="h-7 w-7 text-[#2C5EAD] hover:bg-blue-50 rounded-lg flex items-center justify-center transition-colors cursor-pointer">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg>
                                </button>
                                <button
                                    @click="activeModal = 'edit'; selectedApplicant = {id: 'DC-INV-001', name: 'Pernikahan Alex & Emily', faculty: 'Gold (Premium)', path: 'duacerita.com/alex-emily', date: '2026-08-15'}"
                                    class="h-7 w-7 text-amber-600 hover:bg-amber-50 rounded-lg flex items-center justify-center transition-colors cursor-pointer">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                        </path>
                                    </svg>
                                </button>
                                <button
                                    @click="activeModal = 'delete'; selectedApplicant = {id: 'DC-INV-001', name: 'Pernikahan Alex & Emily'}"
                                    class="h-7 w-7 text-rose-600 hover:bg-rose-50 rounded-lg flex items-center justify-center transition-colors cursor-pointer">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 2 -->
                    <tr class="hover:bg-[#C4E2F5]/10 transition-colors duration-150">
                        <td class="py-3.5 px-4 font-medium text-slate-900">DC-INV-002</td>
                        <td class="py-3.5 px-4 font-semibold text-slate-900">Pertunangan David & Sarah</td>
                        <td class="py-3.5 px-4 text-slate-500">Silver</td>
                        <td class="py-3.5 px-4 text-blue-600 font-medium">duacerita.com/david-sarah</td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center gap-1 bg-slate-100 text-slate-700 px-2.5 py-0.5 rounded-full text-[10px] font-semibold">
                                <span class="h-1.5 w-1.5 rounded-full bg-slate-400"></span>Draft
                            </span>
                        </td>
                        <td class="py-3.5 px-4 font-semibold text-slate-750">58 Hadir</td>
                        <td class="py-3.5 px-4 text-slate-400">2026-10-12</td>
                        <td class="py-3.5 px-4">
                            <div class="flex items-center justify-center gap-1">
                                <button
                                    @click="activeModal = 'view'; selectedApplicant = {id: 'DC-INV-002', name: 'Pertunangan David & Sarah', faculty: 'Silver', path: 'duacerita.com/david-sarah', date: '2026-10-12'}"
                                    class="h-7 w-7 text-[#2C5EAD] hover:bg-blue-50 rounded-lg flex items-center justify-center transition-colors cursor-pointer">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg>
                                </button>
                                <button
                                    @click="activeModal = 'edit'; selectedApplicant = {id: 'DC-INV-002', name: 'Pertunangan David & Sarah', faculty: 'Silver', path: 'duacerita.com/david-sarah', date: '2026-10-12'}"
                                    class="h-7 w-7 text-amber-600 hover:bg-amber-50 rounded-lg flex items-center justify-center transition-colors cursor-pointer">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                        </path>
                                    </svg>
                                </button>
                                <button
                                    @click="activeModal = 'delete'; selectedApplicant = {id: 'DC-INV-002', name: 'Pertunangan David & Sarah'}"
                                    class="h-7 w-7 text-rose-600 hover:bg-rose-50 rounded-lg flex items-center justify-center transition-colors cursor-pointer">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End Content -->
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        var table = $('#recentInvitationsTable').DataTable({
            responsive: true,
            dom: 'lfrtip',
            pageLength: 5,
            lengthMenu: [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Cari undangan...",
                paginate: {
                    next: '→',
                    previous: '←'
                }
            }
        })
        new $.fn.dataTable.Buttons(table, {
            buttons: [{
                extend: 'excelHtml5'
            },
            {
                extend: 'pdfHtml5'
            }
            ]
        })
        $('#exportExcelBtn').on('click', function () {
            table.button('.buttons-excel').trigger();
        })
        $('#exportPdfBtn').on('click', function () {
            table.button('.buttons-pdf').trigger();
        })
        table.buttons().container().appendTo('#dtButtonsContainer')
    });
</script>
@endpush
