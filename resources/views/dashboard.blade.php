<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - Perpustakaan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#E8EBED] text-[#2C3F70]">

<div class="min-h-screen">


    <!-- SIDEBAR -->
    <aside class="fixed inset-y-0 left-0 z-40 hidden w-64 flex-col bg-[#2C3F70] text-white lg:flex">

        <!-- Logo -->
        <div class="flex items-center gap-3 px-7 py-7">

            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-white/10">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-7 w-7"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="1.7">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4 5.5C6.5 4 9 4 12 5.5v14C9 18 6.5 18 4 19.5v-14ZM20 5.5C17.5 4 15 4 12 5.5v14c3-1.5 5.5-1.5 8 0v-14ZM12 5.5v14" />

                </svg>

            </div>

            <div>
                <h1 class="text-base font-bold">
                    Perpustakaan
                </h1>

                <p class="text-xs text-[#C8D4E5]">
                    SMK N 2 Surakarta
                </p>
            </div>

        </div>


        <!-- Menu -->
        <nav class="px-4">

            <!-- Dashboard -->
            <a
                href="{{ route('dashboard') }}"
                class="mb-2 flex items-center gap-4 rounded-xl bg-white/15 px-4 py-3 font-semibold">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M3 11.5 12 4l9 7.5M5.5 10v9h13v-9M9 19v-5h6v5" />

                </svg>

                Dashboard

            </a>


            <!-- Buku -->
            <a
                href="{{ route('buku.index') }}"
                class="mb-2 flex items-center gap-4 rounded-xl px-4 py-3 text-[#C8D4E5] transition hover:bg-white/10 hover:text-white">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M5 4.5A2.5 2.5 0 0 1 7.5 2H20v17H7.5A2.5 2.5 0 0 0 5 21.5v-17ZM5 4.5v17M8 6h8M8 10h8" />

                </svg>

                Buku

            </a>


            <!-- Anggota -->
            <a
                href="{{ route('anggota.index') }}"
                class="mb-2 flex items-center gap-4 rounded-xl px-4 py-3 text-[#C8D4E5] transition hover:bg-white/10 hover:text-white">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M16 20v-1a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v1M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8ZM22 20v-1a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" />

                </svg>

                Anggota

            </a>


            <!-- Peminjaman -->
            <a
                href="{{ route('peminjaman.index') }}"
                class="mb-2 flex items-center gap-4 rounded-xl px-4 py-3 text-[#C8D4E5] transition hover:bg-white/10 hover:text-white">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M7 3v3M17 3v3M4 9h16M5 5h14a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1ZM8 13h3M8 17h3" />

                </svg>

                Peminjaman

            </a>

        </nav>


        <!-- Divider -->
        <div class="mx-7 my-6 border-t border-white/15"></div>


        <!-- Lainnya -->
        <div class="px-4">

            <p class="mb-3 px-4 text-xs font-semibold uppercase tracking-wider text-[#C8D4E5]">
                Lainnya
            </p>


            <a
                href="{{ route('profile.edit') }}"
                class="mb-2 flex items-center gap-4 rounded-xl px-4 py-3 text-[#C8D4E5] transition hover:bg-white/10 hover:text-white">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M15 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM4 21a8 8 0 0 1 16 0" />

                </svg>

                Profil

            </a>


            <form method="POST" action="{{ route('logout') }}" class="mt-2">
                @csrf

                <button
                    type="submit"
                    class="flex w-full items-center gap-4 rounded-xl px-4 py-3 text-[#C8D4E5] transition hover:bg-white/10 hover:text-white">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 5h4a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-4M10 8l-4 4 4 4M6 12h9" />

                    </svg>

                    Logout

                </button>
            </form>

        </div>

        <!-- Elemen gambar Sidebar -->
        <div class="-mt-[85px] translate-x-3 px-5 pb-4">

            <img
                src="{{ asset('assets/elemen-bawah.png') }}"
                alt="Ilustrasi buku"
                class="block h-auto max-h-50 w-full object-contain object-bottom">

        </div>

    </aside>

    <!-- MOBILE SIDEBAR -->
    <div
        id="mobileSidebar"
        class="fixed inset-0 z-50 hidden lg:hidden">

        <!-- Overlay -->
        <div
            id="mobileOverlay"
            class="absolute inset-0 bg-black/40">
        </div>

        <!-- Menu -->
        <aside class="absolute left-0 top-0 h-full w-72 bg-[#2C3F70] text-white shadow-xl">

            <div class="flex items-center justify-between px-6 py-6">

                <div>
                    <h1 class="text-base font-bold">
                        Perpustakaan
                    </h1>

                    <p class="text-xs text-[#C8D4E5]">
                        SMK N 2 Surakarta
                    </p>
                </div>

                <button
                    id="closeMobileMenu"
                    type="button"
                    class="flex h-9 w-9 items-center justify-center rounded-lg hover:bg-white/10">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18 18 6M6 6l12 12" />

                    </svg>

                </button>

            </div>


            <nav class="px-4">

                <a
                    href="{{ route('dashboard') }}"
                    class="mb-2 flex items-center gap-4 rounded-xl bg-white/15 px-4 py-3 font-semibold">

                    Dashboard

                </a>

                <a
                    href="{{ route('buku.index') }}"
                    class="mb-2 flex items-center gap-4 rounded-xl px-4 py-3 text-[#C8D4E5] hover:bg-white/10">

                    Buku

                </a>

                <a
                    href="{{ route('anggota.index') }}"
                    class="mb-2 flex items-center gap-4 rounded-xl px-4 py-3 text-[#C8D4E5] hover:bg-white/10">

                    Anggota

                </a>

                <a
                    href="{{ route('peminjaman.index') }}"
                    class="mb-2 flex items-center gap-4 rounded-xl px-4 py-3 text-[#C8D4E5] hover:bg-white/10">

                    Peminjaman

                </a>

                <div class="my-6 border-t border-white/15"></div>

                <a
                    href="{{ route('profile.edit') }}"
                    class="mb-2 flex items-center gap-4 rounded-xl px-4 py-3 text-[#C8D4E5] hover:bg-white/10">

                    Profil

                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button
                        type="submit"
                        class="flex w-full items-center gap-4 rounded-xl px-4 py-3 text-[#C8D4E5] transition hover:bg-white/10 hover:text-white">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 5h4a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-4M10 8l-4 4 4 4M6 12h9" />

                        </svg>

                        Logout

                    </button>
                </form>

            </nav>

        </aside>

    </div>

    <!-- MAIN -->
    <main class="lg:ml-64">


        <!-- TOPBAR -->
        <header class="sticky top-0 z-30 border-b border-[#C8D4E5] bg-white/95 backdrop-blur">

            <div class="flex h-20 items-center justify-between gap-5 px-5 sm:px-8">

            <!-- MOBILE MENU BUTTON -->
            <button
                type="button"
                id="mobileMenuButton"
                class="relative z-[60] flex h-10 w-10 items-center justify-center rounded-xl text-[#2C3F70] hover:bg-[#E8EBED] lg:hidden">

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />

                </svg>

            </button>


                <!-- Search -->
                <div class="relative hidden max-w-xl flex-1 md:block">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-gray-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="m21 21-4.5-4.5m2-5.5a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Z" />

                    </svg>

                    <input
                        id="dashboardSearch"
                        type="text"
                        placeholder="Cari buku, anggota, atau peminjaman..."
                        class="w-full rounded-xl border-0 bg-[#E8EBED] py-3 pl-12 pr-20 text-sm text-[#2C3F70] outline-none placeholder:text-gray-400 focus:ring-2 focus:ring-[#8089D2]">

                    <span
                        class="absolute right-3 top-1/2 -translate-y-1/2 rounded-md bg-white px-2 py-1 text-xs text-gray-400">
                        Ctrl + K
                    </span>

                </div>

                <!-- MOBILE SEARCH -->
                <div class="px-5 pb-4 md:hidden">
                    <div class="relative">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-gray-400"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="m21 21-4.5-4.5m2-5.5a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Z" />

                        </svg>

                        <input
                            id="dashboardSearchMobile"
                            type="text"
                            placeholder="Cari buku, anggota, atau peminjaman..."
                            class="w-full rounded-xl border-0 bg-[#E8EBED] py-3 pl-12 pr-4 text-sm text-[#2C3F70] outline-none focus:ring-2 focus:ring-[#8089D2]">
                    </div>
                </div>


                <!-- USER -->
                <div class="ml-auto flex items-center gap-3">

                    <!-- NOTIFICATION -->
                    <div class="relative">

                        <button
                            id="notificationButton"
                            type="button"
                            class="relative flex h-10 w-10 items-center justify-center rounded-xl text-[#2C3F70] transition hover:bg-[#E8EBED]">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9M10 21h4" />

                            </svg>

                            @php
                                $notificationCount = 0;

                                if (isset($latestBuku) && $latestBuku) {
                                    $notificationCount++;
                                }

                                if (isset($latestAnggota) && $latestAnggota) {
                                    $notificationCount++;
                                }

                                if (isset($latestPeminjaman) && $latestPeminjaman) {
                                    $notificationCount++;
                                }
                            @endphp

                            @if($notificationCount > 0)
                                <span
                                    class="absolute -right-0.5 -top-0.5 flex h-5 min-w-5 items-center justify-center rounded-full bg-[#A5231C] px-1 text-[10px] font-bold text-white">
                                    {{ $notificationCount }}
                                </span>
                            @endif

                        </button>


                        <!-- DROPDOWN NOTIFIKASI -->
                        <div
                            id="notificationDropdown"
                            class="absolute right-0 top-14 z-50 hidden w-80 overflow-hidden rounded-2xl border border-[#C8D4E5] bg-white shadow-xl">

                            <!-- Header -->
                            <div class="flex items-center justify-between border-b border-[#E8EBED] px-5 py-4">

                                <div>
                                    <h3 class="font-bold text-[#2C3F70]">
                                        Notifikasi
                                    </h3>

                                    <p class="text-xs text-gray-500">
                                        Aktivitas terbaru di sistem
                                    </p>
                                </div>

                                @if($notificationCount > 0)
                                    <span class="rounded-full bg-[#FCF0EF] px-2.5 py-1 text-xs font-semibold text-[#A5231C]">
                                        {{ $notificationCount }} baru
                                    </span>
                                @endif

                            </div>


                            <!-- Isi -->
                            <div class="max-h-80 overflow-y-auto">

                                @if(isset($latestBuku) && $latestBuku)

                                    <a
                                        href="{{ route('buku.index') }}"
                                        class="flex gap-3 border-b border-[#E8EBED] px-5 py-4 transition hover:bg-[#F7F8FC]">

                                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-[#EEF3FA] text-[#2C3F70]">

                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor">

                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="1.8"
                                                    d="M5 4.5A2.5 2.5 0 0 1 7.5 2H20v17H7.5A2.5 2.5 0 0 0 5 21.5v-17ZM5 4.5v17M8 6h8M8 10h8" />

                                            </svg>

                                        </div>

                                        <div class="min-w-0">

                                            <p class="text-sm font-semibold text-[#2C3F70]">
                                                Buku terbaru ditambahkan
                                            </p>

                                            <p class="mt-1 truncate text-xs text-gray-500">
                                                {{ $latestBuku->judul }}
                                            </p>

                                        </div>

                                    </a>

                                @endif


                                @if(isset($latestAnggota) && $latestAnggota)

                                    <a
                                        href="{{ route('anggota.index') }}"
                                        class="flex gap-3 border-b border-[#E8EBED] px-5 py-4 transition hover:bg-[#F7F8FC]">

                                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-[#F0EFFB] text-[#8089D2]">

                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor">

                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="1.8"
                                                    d="M16 20v-1a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v1M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8ZM22 20v-1a4 4 0 0 0-3-3.87" />

                                            </svg>

                                        </div>

                                        <div class="min-w-0">

                                            <p class="text-sm font-semibold text-[#2C3F70]">
                                                Anggota terbaru ditambahkan
                                            </p>

                                            <p class="mt-1 truncate text-xs text-gray-500">
                                                {{ $latestAnggota->nama }}
                                            </p>

                                        </div>

                                    </a>

                                @endif


                                @if(isset($latestPeminjaman) && $latestPeminjaman)

                                    <a
                                        href="{{ route('peminjaman.index') }}"
                                        class="flex gap-3 px-5 py-4 transition hover:bg-[#F7F8FC]">

                                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-[#FCF0EF] text-[#A5231C]">

                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor">

                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="1.8"
                                                    d="M7 3v3M17 3v3M4 9h16M5 5h14a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z" />

                                            </svg>

                                        </div>

                                        <div class="min-w-0">

                                            <p class="text-sm font-semibold text-[#2C3F70]">
                                                Peminjaman terbaru
                                            </p>

                                            <p class="mt-1 truncate text-xs text-gray-500">
                                                {{ $latestPeminjaman->buku->judul ?? '-' }}
                                            </p>

                                        </div>

                                    </a>

                                @endif


                                @if($notificationCount === 0)

                                    <div class="px-5 py-8 text-center">

                                        <p class="text-sm font-medium text-gray-500">
                                            Belum ada notifikasi
                                        </p>

                                        <p class="mt-1 text-xs text-gray-400">
                                            Aktivitas baru akan muncul di sini.
                                        </p>

                                    </div>

                                @endif

                            </div>

                        </div>

                    </div>


                    <!-- PROFILE DROPDOWN -->
                    <div class="relative">

                        <button
                            type="button"
                            id="profileButton"
                            class="flex items-center gap-3 rounded-xl px-2 py-1.5 hover:bg-[#E8EBED]">

                            <!-- Avatar -->
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-[#8089D2] font-bold text-white">

                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}

                            </div>

                            <!-- Nama -->
                            <div class="hidden text-left leading-tight sm:block">

                                <p class="text-sm font-semibold text-[#2C3F70]">
                                    {{ Auth::user()->name }}
                                </p>

                                <p class="text-xs text-gray-500">
                                    Admin
                                </p>

                            </div>

                            <!-- Panah -->
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="hidden h-4 w-4 text-gray-500 sm:block"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m6 9 6 6 6-6" />

                            </svg>

                        </button>


                        <!-- PROFILE DROPDOWN -->
                        <div
                            id="profileDropdown"
                            class="absolute right-0 top-14 z-50 hidden w-60 overflow-hidden rounded-2xl border border-[#C8D4E5] bg-white shadow-lg">

                            <!-- User Info -->
                            <div class="border-b border-[#E8EBED] px-4 py-4">

                                <p class="text-sm font-semibold text-[#2C3F70]">
                                    {{ Auth::user()->name }}
                                </p>

                                <p class="mt-1 text-xs text-gray-500">
                                    Admin
                                </p>

                            </div>


                            <!-- Profile -->
                            <a
                                href="{{ route('profile.edit') }}"
                                class="flex items-center gap-3 px-4 py-3 text-sm text-[#2C3F70] hover:bg-[#E8EBED]">

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-[#8089D2]"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M15 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM4 21a8 8 0 0 1 16 0" />

                                </svg>

                                Profil

                            </a>


                            <!-- Logout -->
                            <form
                                method="POST"
                                action="{{ route('logout') }}">

                                @csrf

                                <button
                                    type="submit"
                                    class="flex w-full items-center gap-3 px-4 py-3 text-sm text-[#2C3F70] hover:bg-[#E8EBED]">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 text-[#A5231C]"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor">

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15 5h4a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-4M10 8l-4 4 4 4M6 12h9" />

                                    </svg>

                                    Logout

                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </header>


        <!-- CONTENT -->
        <div class="px-5 py-7 sm:px-8">


            <!-- Title -->
            <div class="mb-6">

                <p class="text-sm font-medium text-gray-500">
                    Sistem Informasi Perpustakaan
                </p>

                <h2 class="text-3xl font-bold text-[#2C3F70]">
                    Dashboard
                </h2>

            </div>


            <!-- WELCOME -->
            <section class="relative mb-7 overflow-hidden rounded-2xl bg-[#C8D4E5]">

                <div class="relative z-10 px-7 py-8 sm:px-10 md:max-w-[58%] lg:max-w-[57%]">

                    <p class="text-sm font-semibold text-[#2C3F70]">
                        Selamat datang kembali 👋
                    </p>

                    <h1 class="mt-2 text-3xl font-bold text-[#2C3F70]">
                        Halo, {{ Auth::user()->name }}!
                    </h1>

                    <p class="mt-2 max-w-xl text-sm leading-6 text-[#2C3F70]/75">
                        Kelola data buku, anggota, dan peminjaman
                        perpustakaan dengan mudah melalui dashboard ini.
                    </p>

                    <a
                        href="{{ route('buku.index') }}"
                        class="mt-5 inline-flex items-center gap-2 rounded-xl bg-[#A5231C] px-5 py-3 text-sm font-semibold text-white transition hover:opacity-90">

                        Lihat Koleksi Buku

                        <span>→</span>

                    </a>

                </div>


                <!-- Elemen gambar Welcome -->
                <div class="pointer-events-none absolute bottom-[-20px] right-[-110px] hidden h-full w-[70%] md:block">

                    <img
                        src="{{ asset('assets/elemen-atas.png') }}"
                        alt="Ilustrasi perpustakaan"
                        class="h-full w-full object-contain object-right-bottom">

                </div>

            </section>


            <!-- STATISTICS -->
            <div class="mb-7 grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">


                <!-- Total Buku -->
                <div class="rounded-2xl border border-[#C8D4E5] bg-white p-5 shadow-sm">

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="text-sm text-gray-500">
                                Total Buku
                            </p>

                            <p class="mt-2 text-3xl font-bold text-[#2C3F70]">
                                {{ $totalBuku }}
                            </p>

                            <p class="mt-1 text-xs text-gray-400">
                                Koleksi perpustakaan
                            </p>

                        </div>

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#C8D4E5]">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[#2C3F70]"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M5 4.5A2.5 2.5 0 0 1 7.5 2H20v17H7.5A2.5 2.5 0 0 0 5 21.5v-17ZM5 4.5v17M8 6h8M8 10h8" />

                            </svg>

                        </div>

                    </div>

                </div>


                <!-- Total Anggota -->
                <div class="rounded-2xl border border-[#C8D4E5] bg-white p-5 shadow-sm">

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="text-sm text-gray-500">
                                Total Anggota
                            </p>

                            <p class="mt-2 text-3xl font-bold text-[#2C3F70]">
                                {{ $totalAnggota }}
                            </p>

                            <p class="mt-1 text-xs text-gray-400">
                                Anggota terdaftar
                            </p>

                        </div>

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#E7E5FA]">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[#8089D2]"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M16 20v-1a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v1M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8ZM22 20v-1a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" />

                            </svg>

                        </div>

                    </div>

                </div>


                <!-- Sedang Dipinjam -->
                <div class="rounded-2xl border border-[#C8D4E5] bg-white p-5 shadow-sm">

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="text-sm text-gray-500">
                                Sedang Dipinjam
                            </p>

                            <p class="mt-2 text-3xl font-bold text-[#2C3F70]">
                                {{ $sedangDipinjam }}
                            </p>

                            <p class="mt-1 text-xs text-gray-400">
                                Buku aktif dipinjam
                            </p>

                        </div>

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FBE1DE]">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[#A5231C]"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">

                                <circle
                                    cx="12"
                                    cy="12"
                                    r="8"
                                    stroke-width="1.8" />

                                <path
                                    stroke-linecap="round"
                                    stroke-width="1.8"
                                    d="M12 8v4l2.5 2" />

                            </svg>

                        </div>

                    </div>

                </div>


                <!-- Sudah Dikembalikan -->
                <div class="rounded-2xl border border-[#C8D4E5] bg-white p-5 shadow-sm">

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="text-sm text-gray-500">
                                Sudah Dikembalikan
                            </p>

                            <p class="mt-2 text-3xl font-bold text-[#2C3F70]">
                                {{ $sudahDikembalikan }}
                            </p>

                            <p class="mt-1 text-xs text-gray-400">
                                Riwayat pengembalian
                            </p>

                        </div>

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FBE1DE]">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-[#A5231C]"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m6 12 4 4 8-8" />

                            </svg>

                        </div>

                    </div>

                </div>

            </div>


            <!-- BOTTOM -->
            <div class="grid grid-cols-1 gap-6 xl:grid-cols-5">


                <!-- MENU CEPAT -->
                <section class="rounded-2xl border border-[#C8D4E5] bg-white p-6 shadow-sm xl:col-span-3">

                    <div class="mb-5">

                        <h2 class="text-xl font-bold text-[#2C3F70]">
                            Menu Cepat
                        </h2>

                        <p class="mt-1 text-sm text-gray-500">
                            Akses fitur yang paling sering digunakan.
                        </p>

                    </div>


                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">


                        <!-- Buku -->
                        <a
                            href="{{ route('buku.index') }}"
                            class="rounded-xl bg-[#EEF3FA] p-5 transition hover:-translate-y-1 hover:shadow-md">

                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-[#2C3F70] text-white">

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.8"
                                        d="M5 4.5A2.5 2.5 0 0 1 7.5 2H20v17H7.5A2.5 2.5 0 0 0 5 21.5v-17ZM5 4.5v17M8 6h8" />

                                </svg>

                            </div>

                            <h3 class="mt-4 font-semibold text-[#2C3F70]">
                                Kelola Buku
                            </h3>

                            <p class="mt-1 text-xs leading-5 text-gray-500">
                                Tambah, ubah, dan hapus data buku.
                            </p>

                            <span class="mt-4 inline-block font-bold text-[#2C3F70]">
                                →
                            </span>

                        </a>


                        <!-- Anggota -->
                        <a
                            href="{{ route('anggota.index') }}"
                            class="rounded-xl bg-[#F0EFFB] p-5 transition hover:-translate-y-1 hover:shadow-md">

                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-[#8089D2] text-white">

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.8"
                                        d="M16 20v-1a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v1M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8ZM22 20v-1a4 4 0 0 0-3-3.87" />

                                </svg>

                            </div>

                            <h3 class="mt-4 font-semibold text-[#2C3F70]">
                                Kelola Anggota
                            </h3>

                            <p class="mt-1 text-xs leading-5 text-gray-500">
                                Kelola data anggota perpustakaan.
                            </p>

                            <span class="mt-4 inline-block font-bold text-[#8089D2]">
                                →
                            </span>

                        </a>


                        <!-- Peminjaman -->
                        <a
                            href="{{ route('peminjaman.index') }}"
                            class="rounded-xl bg-[#FCF0EF] p-5 transition hover:-translate-y-1 hover:shadow-md">

                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-[#A5231C] text-white">

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.8"
                                        d="M7 3v3M17 3v3M4 9h16M5 5h14a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z" />

                                </svg>

                            </div>

                            <h3 class="mt-4 font-semibold text-[#2C3F70]">
                                Peminjaman
                            </h3>

                            <p class="mt-1 text-xs leading-5 text-gray-500">
                                Kelola peminjaman dan pengembalian.
                            </p>

                            <span class="mt-4 inline-block font-bold text-[#A5231C]">
                                →
                            </span>

                        </a>

                    </div>

                </section>


                <!-- AKTIVITAS -->
                <section class="rounded-2xl border border-[#C8D4E5] bg-white p-6 shadow-sm xl:col-span-2">

                    <div class="mb-5 flex items-center justify-between">

                        <div>

                            <h2 class="text-xl font-bold text-[#2C3F70]">
                                Aktivitas Terbaru
                            </h2>

                            <p class="mt-1 text-sm text-gray-500">
                                Data terbaru di sistem.
                            </p>

                        </div>

                    </div>


                    <div class="space-y-4">


                        @if(isset($latestBuku) && $latestBuku)

                            <a
                                href="{{ route('buku.index') }}"
                                class="flex items-center gap-3 border-b border-[#E8EBED] pb-4 rounded-lg px-2 -mx-2 transition hover:bg-[#F7F8FC]"
                            >

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-[#EEF3FA] text-[#2C3F70]">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor">

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="1.8"
                                            d="M5 4.5A2.5 2.5 0 0 1 7.5 2H20v17H7.5A2.5 2.5 0 0 0 5 21.5v-17Z" />

                                    </svg>

                                </div>

                                <div class="min-w-0">

                                    <p class="truncate text-sm font-semibold text-[#2C3F70]">
                                        Buku "{{ $latestBuku->judul }}" tersedia
                                    </p>

                                    <p class="text-xs text-gray-500">
                                        {{ $latestBuku->kode_buku }}
                                    </p>

                                </div>

</a>

                        @endif


                        @if(isset($latestAnggota) && $latestAnggota)

                            <a
                                href="{{ route('anggota.index') }}"
                                class="flex items-center gap-3 border-b border-[#E8EBED] pb-4 rounded-lg px-2 -mx-2 transition hover:bg-[#F7F8FC]"
                            >

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-[#F0EFFB] text-[#8089D2]">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor">

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="1.8"
                                            d="M16 20v-1a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v1M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8ZM22 20v-1a4 4 0 0 0-3-3.87" />

                                    </svg>

                                </div>

                                <div class="min-w-0">

                                    <p class="truncate text-sm font-semibold text-[#2C3F70]">
                                        Anggota "{{ $latestAnggota->nama }}"
                                    </p>

                                    <p class="text-xs text-gray-500">
                                        {{ $latestAnggota->nis }} · {{ $latestAnggota->kelas }}
                                    </p>

                                </div>

</a>

                        @endif


                        @if(isset($latestPeminjaman) && $latestPeminjaman)

                            <a
                                href="{{ route('peminjaman.index') }}"
                                class="flex items-center gap-3 rounded-lg px-2 -mx-2 transition hover:bg-[#F7F8FC]"
                            >

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-[#FCF0EF] text-[#A5231C]">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor">

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="1.8"
                                            d="M7 3v3M17 3v3M4 9h16M5 5h14a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z" />

                                    </svg>

                                </div>

                                <div class="min-w-0">

                                    <p class="truncate text-sm font-semibold text-[#2C3F70]">
                                        Peminjaman buku diproses
                                    </p>

                                    <p class="truncate text-xs text-gray-500">
                                        {{ $latestPeminjaman->buku->judul ?? '-' }}
                                    </p>

                                </div>

</a>

                        @endif


                        @if(
                            (!isset($latestBuku) || !$latestBuku) &&
                            (!isset($latestAnggota) || !$latestAnggota) &&
                            (!isset($latestPeminjaman) || !$latestPeminjaman)
                        )

                            <div class="py-8 text-center text-sm text-gray-500">
                                Belum ada aktivitas terbaru.
                            </div>

                        @endif

                    </div>

                </section>

            </div>

        </div>

    </main>

</div>

    <script>
        const dashboardSearch = document.getElementById('dashboardSearch');

        // Ctrl + K
        document.addEventListener('keydown', function (event) {
            if ((event.ctrlKey || event.metaKey) && event.key.toLowerCase() === 'k') {
                event.preventDefault();
                dashboardSearch.focus();
            }
        });

        // Tekan Enter untuk mencari
        dashboardSearch.addEventListener('keydown', function (event) {
            if (event.key === 'Enter') {
                event.preventDefault();

                const keyword = this.value.trim();

                if (keyword === '') {
                    return;
                }

                window.location.href =
                    "{{ route('dashboard') }}?search=" +
                    encodeURIComponent(keyword);
            }
        });
    </script>

    <script>
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const mobileSidebar = document.getElementById('mobileSidebar');
        const mobileOverlay = document.getElementById('mobileOverlay');
        const closeMobileMenu = document.getElementById('closeMobileMenu');

        if (mobileMenuButton && mobileSidebar) {
            mobileMenuButton.addEventListener('click', function () {
                mobileSidebar.classList.remove('hidden');
            });
        }

        if (mobileOverlay && mobileSidebar) {
            mobileOverlay.addEventListener('click', function () {
                mobileSidebar.classList.add('hidden');
            });
        }

        if (closeMobileMenu && mobileSidebar) {
            closeMobileMenu.addEventListener('click', function () {
                mobileSidebar.classList.add('hidden');
            });
        }
    </script>

    <script>
        // NOTIFICATION DROPDOWN
        const notificationButton = document.getElementById('notificationButton');
        const notificationDropdown = document.getElementById('notificationDropdown');

        // PROFILE DROPDOWN
        const profileButton = document.getElementById('profileButton');
        const profileDropdown = document.getElementById('profileDropdown');

        if (notificationButton && notificationDropdown) {
            notificationButton.addEventListener('click', function (event) {
                event.stopPropagation();

                notificationDropdown.classList.toggle('hidden');

                // Tutup profile jika sedang terbuka
                if (profileDropdown) {
                    profileDropdown.classList.add('hidden');
                }
            });
        }

        if (profileButton && profileDropdown) {
            profileButton.addEventListener('click', function (event) {
                event.stopPropagation();

                profileDropdown.classList.toggle('hidden');

                // Tutup notification jika sedang terbuka
                if (notificationDropdown) {
                    notificationDropdown.classList.add('hidden');
                }
            });
        }

        // Klik di luar dropdown → tutup
        document.addEventListener('click', function () {
            if (notificationDropdown) {
                notificationDropdown.classList.add('hidden');
            }

            if (profileDropdown) {
                profileDropdown.classList.add('hidden');
            }
        });

        // Supaya klik isi dropdown tidak langsung menutupnya
        if (notificationDropdown) {
            notificationDropdown.addEventListener('click', function (event) {
                event.stopPropagation();
            });
        }

        if (profileDropdown) {
            profileDropdown.addEventListener('click', function (event) {
                event.stopPropagation();
            });
        }
    </script>

</body>
</html>