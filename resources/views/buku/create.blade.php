<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Buku - Perpustakaan</title>

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


        <!-- MENU -->
        <nav class="px-4">

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


        <div class="mx-7 my-6 border-t border-white/15"></div>


        <!-- LAINNYA -->
        <div class="px-4">

            <p class="mb-3 px-4 text-xs font-semibold uppercase tracking-wider text-[#C8D4E5]">
                Lainnya
            </p>


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
                        d="M15 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM4 21a8 8 0 0 1 16 0" />

                </svg>

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

        </div>


        <!-- GAMBAR SIDEBAR -->
        <div class="-mt-[85px] translate-x-3 px-5 pb-4">

            <img
                src="{{ asset('assets/elemen-bawah.png') }}"
                alt="Ilustrasi buku"
                class="block h-auto max-h-50 w-full object-contain object-bottom">

        </div>

    </aside>


    <!-- MAIN -->
    <main class="lg:ml-64">


        <!-- TOPBAR -->
        <header class="sticky top-0 z-30 border-b border-[#C8D4E5] bg-white/95 backdrop-blur">

            <div class="flex h-20 items-center justify-between gap-5 px-5 sm:px-8">

                <!-- SEARCH -->
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
                        type="text"
                        placeholder="Cari buku, anggota, atau peminjaman..."
                        class="w-full rounded-xl border-0 bg-[#E8EBED] py-3 pl-12 pr-20 text-sm text-[#2C3F70] outline-none placeholder:text-gray-400 focus:ring-2 focus:ring-[#8089D2]">

                    <span
                        class="absolute right-3 top-1/2 -translate-y-1/2 rounded-md bg-white px-2 py-1 text-xs text-gray-400">
                        Ctrl + K
                    </span>

                </div>


                <!-- USER -->
                <div class="ml-auto flex items-center gap-4">

                    <button
                        class="relative flex h-10 w-10 items-center justify-center rounded-xl text-[#2C3F70] hover:bg-[#E8EBED]">

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

                        <span class="absolute right-2 top-2 h-2 w-2 rounded-full bg-[#A5231C]"></span>

                    </button>


                    <div class="flex items-center gap-3">

                        <div class="flex h-10 w-10 items-center justify-center rounded-full bg-[#8089D2] font-bold text-white">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </div>

                        <div class="hidden leading-tight sm:block">

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

                    </div>

                </div>

            </div>

        </header>


        <!-- CONTENT -->
        <div class="px-5 py-7 sm:px-8">


            <!-- BREADCRUMB -->
            <div class="mb-6 flex items-center gap-2 text-sm">

                <a
                    href="{{ route('dashboard') }}"
                    class="text-gray-500 transition hover:text-[#2C3F70]">
                    Dashboard
                </a>

                <span class="text-gray-400">›</span>

                <a
                    href="{{ route('buku.index') }}"
                    class="text-gray-500 transition hover:text-[#2C3F70]">
                    Buku
                </a>

                <span class="text-gray-400">›</span>

                <span class="font-medium text-[#2C3F70]">
                    Tambah Buku
                </span>

            </div>


            <!-- TITLE -->
            <div class="mb-6">

                <p class="text-sm font-medium text-gray-500">
                    Data Buku
                </p>

                <h2 class="text-3xl font-bold text-[#2C3F70]">
                    Tambah Buku
                </h2>

                <p class="mt-1 text-sm text-gray-500">
                    Tambahkan data buku baru ke dalam perpustakaan.
                </p>

            </div>


            <!-- FORM CARD -->
            <section class="overflow-hidden rounded-2xl border border-[#C8D4E5] bg-white shadow-sm">

                <!-- HEADER -->
                <div class="border-b border-[#E8EBED] bg-[#EEF3FA] px-6 py-5 sm:px-8">

                    <div class="flex items-center gap-4">

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#2C3F70] text-white">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6"
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

                        <div>

                            <h3 class="text-lg font-bold text-[#2C3F70]">
                                Informasi Buku
                            </h3>

                            <p class="text-sm text-gray-500">
                                Isi semua data buku dengan lengkap.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- FORM -->
                <form
                    action="{{ route('buku.store') }}"
                    method="POST"
                    class="p-6 sm:p-8">

                    @csrf


                    @if($errors->any())

                        <div class="mb-6 rounded-xl border border-red-200 bg-red-50 px-5 py-4">

                            <p class="mb-2 font-semibold text-red-700">
                                Periksa kembali data yang dimasukkan.
                            </p>

                            <ul class="list-inside list-disc text-sm text-red-600">

                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach

                            </ul>

                        </div>

                    @endif


                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">


                        <!-- KODE BUKU -->
                        <div>

                            <label
                                for="kode_buku"
                                class="mb-2 block text-sm font-semibold text-[#2C3F70]">
                                Kode Buku
                            </label>

                            <input
                                type="text"
                                id="kode_buku"
                                name="kode_buku"
                                value="{{ old('kode_buku') }}"
                                placeholder="Contoh: B001"
                                required
                                class="w-full rounded-xl border border-[#C8D4E5] bg-white px-4 py-3 text-sm text-[#2C3F70] outline-none transition placeholder:text-gray-400 focus:border-[#8089D2] focus:ring-4 focus:ring-[#8089D2]/10">

                        </div>


                        <!-- JUDUL -->
                        <div>

                            <label
                                for="judul"
                                class="mb-2 block text-sm font-semibold text-[#2C3F70]">
                                Judul Buku
                            </label>

                            <input
                                type="text"
                                id="judul"
                                name="judul"
                                value="{{ old('judul') }}"
                                placeholder="Masukkan judul buku"
                                required
                                class="w-full rounded-xl border border-[#C8D4E5] bg-white px-4 py-3 text-sm text-[#2C3F70] outline-none transition placeholder:text-gray-400 focus:border-[#8089D2] focus:ring-4 focus:ring-[#8089D2]/10">

                        </div>


                        <!-- PENGARANG -->
                        <div>

                            <label
                                for="pengarang"
                                class="mb-2 block text-sm font-semibold text-[#2C3F70]">
                                Pengarang
                            </label>

                            <input
                                type="text"
                                id="pengarang"
                                name="pengarang"
                                value="{{ old('pengarang') }}"
                                placeholder="Masukkan nama pengarang"
                                required
                                class="w-full rounded-xl border border-[#C8D4E5] bg-white px-4 py-3 text-sm text-[#2C3F70] outline-none transition placeholder:text-gray-400 focus:border-[#8089D2] focus:ring-4 focus:ring-[#8089D2]/10">

                        </div>


                        <!-- PENERBIT -->
                        <div>

                            <label
                                for="penerbit"
                                class="mb-2 block text-sm font-semibold text-[#2C3F70]">
                                Penerbit
                            </label>

                            <input
                                type="text"
                                id="penerbit"
                                name="penerbit"
                                value="{{ old('penerbit') }}"
                                placeholder="Masukkan nama penerbit"
                                required
                                class="w-full rounded-xl border border-[#C8D4E5] bg-white px-4 py-3 text-sm text-[#2C3F70] outline-none transition placeholder:text-gray-400 focus:border-[#8089D2] focus:ring-4 focus:ring-[#8089D2]/10">

                        </div>


                        <!-- TAHUN -->
                        <div>

                            <label
                                for="tahun_terbit"
                                class="mb-2 block text-sm font-semibold text-[#2C3F70]">
                                Tahun Terbit
                            </label>

                            <input
                                type="number"
                                id="tahun_terbit"
                                name="tahun_terbit"
                                value="{{ old('tahun_terbit') }}"
                                placeholder="Contoh: 2026"
                                min="1000"
                                max="9999"
                                required
                                class="w-full rounded-xl border border-[#C8D4E5] bg-white px-4 py-3 text-sm text-[#2C3F70] outline-none transition placeholder:text-gray-400 focus:border-[#8089D2] focus:ring-4 focus:ring-[#8089D2]/10">

                        </div>


                        <!-- STOK -->
                        <div>

                            <label
                                for="stok"
                                class="mb-2 block text-sm font-semibold text-[#2C3F70]">
                                Stok Buku
                            </label>

                            <input
                                type="number"
                                id="stok"
                                name="stok"
                                value="{{ old('stok', 0) }}"
                                placeholder="Contoh: 5"
                                min="0"
                                required
                                class="w-full rounded-xl border border-[#C8D4E5] bg-white px-4 py-3 text-sm text-[#2C3F70] outline-none transition placeholder:text-gray-400 focus:border-[#8089D2] focus:ring-4 focus:ring-[#8089D2]/10">

                        </div>

                    </div>


                    <!-- BUTTON -->
                    <div class="mt-8 flex flex-col-reverse gap-3 border-t border-[#E8EBED] pt-6 sm:flex-row sm:justify-end">

                        <a
                            href="{{ route('buku.index') }}"
                            class="inline-flex items-center justify-center rounded-xl border border-[#C8D4E5] bg-white px-5 py-3 text-sm font-semibold text-[#2C3F70] transition hover:bg-[#E8EBED]">

                            Batal

                        </a>


                        <button
                            type="submit"
                            class="inline-flex items-center justify-center gap-2 rounded-xl bg-[#A5231C] px-5 py-3 text-sm font-semibold text-white transition hover:opacity-90">

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

                            Simpan Buku

                        </button>

                    </div>

                </form>

            </section>

        </div>

    </main>

</div>

</body>
</html>