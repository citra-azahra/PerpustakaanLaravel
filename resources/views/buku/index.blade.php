<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Buku - Perpustakaan</title>

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
                    stroke-width="2">

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


        <!-- MENU -->
        <nav class="px-4">

            <!-- Dashboard -->
            <a
                href="{{ route('dashboard') }}"
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
                        d="M3 11.5 12 4l9 7.5M5.5 10v9h13v-9M9 19v-5h6v5" />

                </svg>

                Dashboard

            </a>


            <!-- BUKU ACTIVE -->
            <a
                href="{{ route('buku.index') }}"
                class="mb-2 flex items-center gap-4 rounded-xl bg-[#A5231C] px-4 py-3 font-semibold text-white">

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


            <!-- Profil -->
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


            <!-- Logout -->
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

                <!-- Dashboard -->
                <a
                    href="{{ route('dashboard') }}"
                    class="mb-2 flex items-center gap-4 rounded-xl px-4 py-3 text-[#C8D4E5] hover:bg-white/10">

                    Dashboard

                </a>


                <!-- Buku AKTIF -->
                <a
                    href="{{ route('buku.index') }}"
                    class="mb-2 flex items-center gap-4 rounded-xl bg-[#A5231C] px-4 py-3 font-semibold text-white">

                    Buku

                </a>


                <!-- Anggota -->
                <a
                    href="{{ route('anggota.index') }}"
                    class="mb-2 flex items-center gap-4 rounded-xl px-4 py-3 text-[#C8D4E5] hover:bg-white/10">

                    Anggota

                </a>


                <!-- Peminjaman -->
                <a
                    href="{{ route('peminjaman.index') }}"
                    class="mb-2 flex items-center gap-4 rounded-xl px-4 py-3 text-[#C8D4E5] hover:bg-white/10">

                    Peminjaman

                </a>


                <!-- Divider -->
                <div class="my-6 border-t border-white/15"></div>


                <!-- Profil -->
                <a
                    href="{{ route('profile.edit') }}"
                    class="mb-2 flex items-center gap-4 rounded-xl px-4 py-3 text-[#C8D4E5] hover:bg-white/10">

                    Profil

                </a>


                <!-- Logout -->
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


                    <!-- PROFILE -->
                    <div class="relative">

                        <button
                            type="button"
                            id="profileButton"
                            class="flex items-center gap-3 rounded-xl px-2 py-1.5 hover:bg-[#E8EBED]">

                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-[#8089D2] font-bold text-white">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </div>

                            <div class="hidden text-left leading-tight sm:block">

                                <p class="text-sm font-semibold text-[#2C3F70]">
                                    {{ Auth::user()->name }}
                                </p>

                                <p class="text-xs text-gray-500">
                                    Admin
                                </p>

                            </div>

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

                            <div class="border-b border-[#E8EBED] px-4 py-4">

                                <p class="text-sm font-semibold text-[#2C3F70]">
                                    {{ Auth::user()->name }}
                                </p>

                                <p class="mt-1 text-xs text-gray-500">
                                    Admin
                                </p>

                            </div>


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


            <!-- TITLE -->
            <div class="mb-6">

                <p class="text-sm font-medium text-gray-500">
                    Sistem Informasi Perpustakaan
                </p>

                <h2 class="text-3xl font-bold text-[#2C3F70]">
                    Data Buku
                </h2>

                <p class="mt-1 text-sm text-gray-500">
                    Kelola data buku perpustakaan dengan mudah.
                </p>

            </div>


            <!-- HEADER CARD -->
            <section class="relative mb-6 overflow-hidden rounded-2xl bg-[#C8D4E5]">

                <div class="relative z-10 px-7 py-6 sm:px-8">

                    <div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-center">

                        <div>

                            <p class="text-sm font-semibold text-[#2C3F70]">
                                Koleksi Perpustakaan
                            </p>

                            <h1 class="mt-1 text-2xl font-bold text-[#2C3F70]">
                                Daftar Buku
                            </h1>

                            <p class="mt-1 text-sm text-[#2C3F70]/70">
                                Total {{ $buku->count() }} buku terdaftar.
                            </p>

                        </div>


                        <a
                            href="{{ route('buku.create') }}"
                            class="inline-flex w-fit items-center gap-2 rounded-xl bg-[#A5231C] px-5 py-3 text-sm font-semibold text-white transition hover:opacity-90">

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
                                    d="M12 5v14M5 12h14" />

                            </svg>

                            Tambah Buku

                        </a>

                    </div>

                </div>


                <!-- Decorative -->
                <div class="pointer-events-none absolute bottom-[-10px] right-[110px] hidden h-full w-[450px] md:block">

                    <img
                        src="{{ asset('assets/elemen-atas.png') }}"
                        alt="Ilustrasi buku"
                        class="h-full w-full object-contain object-right-bottom">

                </div>

            </section>


            <!-- ALERT SUCCESS -->
            @if(session('success'))

                <div class="mb-5 rounded-xl border border-green-200 bg-green-50 px-5 py-4 text-sm text-green-700">
                    {{ session('success') }}
                </div>

            @endif


            <!-- ALERT ERROR -->
            @if(session('error'))

                <div class="mb-5 rounded-xl border border-red-200 bg-red-50 px-5 py-4 text-sm text-red-700">
                    {{ session('error') }}
                </div>

            @endif


            <!-- TABLE -->
            <section class="overflow-hidden rounded-2xl border border-[#C8D4E5] bg-white shadow-sm">

                <!-- TABLE HEADER -->
                <div class="flex flex-col gap-4 border-b border-[#E8EBED] px-6 py-5 sm:flex-row sm:items-center sm:justify-between">

                    <div>

                        <h2 class="text-xl font-bold text-[#2C3F70]">
                            Data Buku
                        </h2>

                        <p class="mt-1 text-sm text-gray-500">
                            Kelola data buku yang tersedia di perpustakaan.
                        </p>

                    </div>

                    <!-- SEARCH -->
                    <div class="relative w-full sm:w-64">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="absolute left-3 top-1/2 z-10 h-4 w-4 -translate-y-1/2 text-gray-400"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="m21 21-4.5-4.5m2-5.5a7.5 7.5 0 1 1-15 0Z" />
                        </svg>

                        <input
                            type="text"
                            id="tableSearch"
                            value="{{ $search ?? '' }}"
                            placeholder="Cari data buku..."
                            class="w-full rounded-xl border border-[#C8D4E5] py-2.5 pl-9 pr-4 text-sm outline-none focus:border-[#8089D2] focus:ring-2 focus:ring-[#8089D2]/20">

                    </div>

                </div>


                <!-- TABLE -->
                <div class="overflow-x-auto">

                    <table class="w-full min-w-[1000px] text-sm">

                        <thead class="bg-[#EEF1F4]">

                            <tr>

                                <th class="px-5 py-4 text-left font-semibold text-[#2C3F70]">
                                    No
                                </th>

                                <th class="px-5 py-4 text-left font-semibold text-[#2C3F70]">
                                    Kode Buku
                                </th>

                                <th class="px-5 py-4 text-left font-semibold text-[#2C3F70]">
                                    Judul Buku
                                </th>

                                <th class="px-5 py-4 text-left font-semibold text-[#2C3F70]">
                                    Pengarang
                                </th>

                                <th class="px-5 py-4 text-left font-semibold text-[#2C3F70]">
                                    Penerbit
                                </th>

                                <th class="px-5 py-4 text-center font-semibold text-[#2C3F70]">
                                    Tahun
                                </th>

                                <th class="px-5 py-4 text-center font-semibold text-[#2C3F70]">
                                    Stok
                                </th>

                                <th class="px-5 py-4 text-center font-semibold text-[#2C3F70]">
                                    Status
                                </th>

                                <th class="px-5 py-4 text-center font-semibold text-[#2C3F70]">
                                    Aksi
                                </th>

                            </tr>

                        </thead>


                        <tbody id="bukuTable" class="divide-y divide-[#E8EBED]">

                            @forelse($buku as $item)

                                <tr class="buku-row transition hover:bg-[#F8F9FB]">

                                    <td class="px-5 py-4 text-gray-500">
                                        {{ $loop->iteration }}
                                    </td>


                                    <td class="px-5 py-4">

                                        <span class="font-semibold text-[#8089D2]">
                                            {{ $item->kode_buku }}
                                        </span>

                                    </td>


                                    <td class="max-w-[220px] px-5 py-4">

                                        <p class="truncate font-semibold text-[#2C3F70]">
                                            {{ $item->judul }}
                                        </p>

                                    </td>


                                    <td class="px-5 py-4 text-gray-600">
                                        {{ $item->pengarang }}
                                    </td>


                                    <td class="px-5 py-4 text-gray-600">
                                        {{ $item->penerbit }}
                                    </td>


                                    <td class="px-5 py-4 text-center text-gray-600">
                                        {{ $item->tahun_terbit }}
                                    </td>


                                    <td class="px-5 py-4 text-center">

                                        <span class="font-bold text-[#2C3F70]">
                                            {{ $item->stok }}
                                        </span>

                                    </td>


                                    <td class="px-5 py-4 text-center">

                                        @if($item->stok > 0)

                                            <span class="inline-flex rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">
                                                Tersedia
                                            </span>

                                        @else

                                            <span class="inline-flex rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-700">
                                                Habis
                                            </span>

                                        @endif

                                    </td>


                                    <td class="px-5 py-4">

                                        <div class="flex items-center justify-center gap-2">

                                            <!-- EDIT -->
                                            <a
                                                href="{{ route('buku.edit', $item->id) }}"
                                                class="flex h-9 w-9 items-center justify-center rounded-lg bg-[#F0EFFB] text-[#2C3F70] transition hover:bg-[#E7E5FA]"
                                                title="Edit">

                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="h-4 w-4"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor">

                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L9.75 16.902 6 18l1.098-3.75 9.764-9.763ZM14.5 6.85l2.65 2.65" />

                                                </svg>

                                            </a>


                                            <!-- DELETE -->
                                            <form
                                                action="{{ route('buku.destroy', $item->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Yakin ingin menghapus buku ini?')">

                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="flex h-9 w-9 items-center justify-center rounded-lg bg-[#FCF0EF] text-[#A5231C] transition hover:bg-[#FBE1DE]"
                                                    title="Hapus">

                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="h-4 w-4"
                                                        fill="none"
                                                        viewBox="0 0 24 24"
                                                        stroke="currentColor">

                                                        <path
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M6 7h12M9 7V4h6v3m-8 0 1 13h8l1-13M10 11v5M14 11v5" />

                                                    </svg>

                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="9" class="px-5 py-14 text-center">

                                        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-xl bg-[#EEF3FA] text-[#2C3F70]">

                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-7 w-7"
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
                                            Belum ada data buku
                                        </h3>

                                        <p class="mt-1 text-sm text-gray-500">
                                            Tambahkan buku pertama ke perpustakaan.
                                        </p>

                                        <a
                                            href="{{ route('buku.create') }}"
                                            class="mt-5 inline-flex items-center gap-2 rounded-xl bg-[#A5231C] px-5 py-3 text-sm font-semibold text-white transition hover:opacity-90">

                                            <span>+</span>
                                            Tambah Buku

                                        </a>

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </section>

        </div>

    </main>

</div>

<script>
    const tableSearch = document.getElementById('tableSearch');

    tableSearch.addEventListener('keyup', function () {
        const keyword = this.value.toLowerCase();

        document.querySelectorAll('.buku-row').forEach(row => {
            const text = row.innerText.toLowerCase();

            row.style.display = text.includes(keyword) ? '' : 'none';
        });
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

    // Buka / tutup notifikasi
    if (notificationButton && notificationDropdown) {
        notificationButton.addEventListener('click', function (event) {
            event.stopPropagation();

            notificationDropdown.classList.toggle('hidden');

            if (profileDropdown) {
                profileDropdown.classList.add('hidden');
            }
        });
    }

    // Buka / tutup profile
    if (profileButton && profileDropdown) {
        profileButton.addEventListener('click', function (event) {
            event.stopPropagation();

            profileDropdown.classList.toggle('hidden');

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

    // Klik isi dropdown tidak menutup
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