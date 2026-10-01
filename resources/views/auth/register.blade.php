<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register - Perpustakaan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#F7F8FC]">

    <div class="min-h-screen flex items-center justify-center px-4 py-8">

        <div class="w-full max-w-5xl bg-white rounded-3xl shadow-xl overflow-hidden">

            <div class="grid md:grid-cols-2 min-h-[650px]">

                <!-- BAGIAN KIRI -->
                <div class="hidden md:flex bg-[#2C3F70] relative overflow-hidden items-center justify-center p-12">

                    <div class="absolute w-72 h-72 bg-[#A5231C] rounded-full -top-32 -left-32 opacity-80"></div>

                    <div class="absolute w-64 h-64 bg-[#8089D2] rounded-full -bottom-32 -right-24 opacity-50"></div>

                    <div class="relative z-10 text-white text-center">

                        <div class="w-24 h-24 mx-auto mb-6 bg-white rounded-3xl flex items-center justify-center shadow-lg">

                            <svg class="w-14 h-14 text-[#2C3F70]" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M4 19.5A2.5 2.5 0 016.5 17H20" />

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z" />

                            </svg>

                        </div>

                        <h1 class="text-3xl font-bold mb-3">
                            Perpustakaan
                        </h1>

                        <p class="text-white/80 text-sm leading-relaxed">
                            Sistem Informasi Perpustakaan<br>
                            SMK Negeri 2 Surakarta
                        </p>

                        <div class="mt-8 w-16 h-1 bg-[#A5231C] rounded-full mx-auto"></div>

                    </div>

                </div>


                <!-- BAGIAN KANAN -->
                <div class="flex items-center justify-center p-8 sm:p-12">

                    <div class="w-full max-w-md">

                        <!-- HEADER -->
                        <div class="mb-7">

                            <div class="md:hidden w-16 h-16 mb-5 bg-[#2C3F70] rounded-2xl flex items-center justify-center">

                                <svg class="w-9 h-9 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                        d="M4 19.5A2.5 2.5 0 016.5 17H20" />

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                        d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z" />

                                </svg>

                            </div>

                            <h2 class="text-3xl font-bold text-[#2C3F70]">
                                Buat Akun
                            </h2>

                            <p class="mt-2 text-gray-500">
                                Daftarkan akun untuk mengakses perpustakaan.
                            </p>

                        </div>


                        <!-- ERROR -->
                        @if ($errors->any())

                            <div class="mb-5 rounded-xl bg-red-50 border border-red-200 px-4 py-3 text-sm text-red-700">

                                <p class="font-semibold mb-1">
                                    Terjadi kesalahan
                                </p>

                                <ul class="list-disc list-inside">

                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach

                                </ul>

                            </div>

                        @endif


                        <!-- FORM REGISTER -->
                        <form method="POST" action="{{ route('register') }}" class="space-y-4">

                            @csrf


                            <!-- NAMA -->
                            <div>

                                <label
                                    for="name"
                                    class="block text-sm font-semibold text-gray-700 mb-2"
                                >
                                    Nama
                                </label>

                                <input
                                    id="name"
                                    type="text"
                                    name="name"
                                    value="{{ old('name') }}"
                                    required
                                    autofocus
                                    autocomplete="name"
                                    placeholder="Masukkan nama lengkap"
                                    class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 text-gray-700 outline-none transition focus:border-[#2C3F70] focus:ring-2 focus:ring-[#2C3F70]/10"
                                >

                            </div>


                            <!-- EMAIL -->
                            <div>

                                <label
                                    for="email"
                                    class="block text-sm font-semibold text-gray-700 mb-2"
                                >
                                    Email
                                </label>

                                <input
                                    id="email"
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="username"
                                    placeholder="Masukkan email"
                                    class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 text-gray-700 outline-none transition focus:border-[#2C3F70] focus:ring-2 focus:ring-[#2C3F70]/10"
                                >

                            </div>


                            <!-- PASSWORD -->
                            <div>

                                <label
                                    for="password"
                                    class="block text-sm font-semibold text-gray-700 mb-2"
                                >
                                    Password
                                </label>

                                <input
                                    id="password"
                                    type="password"
                                    name="password"
                                    required
                                    autocomplete="new-password"
                                    placeholder="Buat password"
                                    class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 text-gray-700 outline-none transition focus:border-[#2C3F70] focus:ring-2 focus:ring-[#2C3F70]/10"
                                >

                            </div>


                            <!-- KONFIRMASI PASSWORD -->
                            <div>

                                <label
                                    for="password_confirmation"
                                    class="block text-sm font-semibold text-gray-700 mb-2"
                                >
                                    Konfirmasi Password
                                </label>

                                <input
                                    id="password_confirmation"
                                    type="password"
                                    name="password_confirmation"
                                    required
                                    autocomplete="new-password"
                                    placeholder="Ulangi password"
                                    class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 text-gray-700 outline-none transition focus:border-[#2C3F70] focus:ring-2 focus:ring-[#2C3F70]/10"
                                >

                            </div>


                            <!-- BUTTON -->
                            <button
                                type="submit"
                                class="w-full mt-2 rounded-xl bg-[#A5231C] px-5 py-3.5 text-sm font-semibold text-white shadow-md transition hover:bg-[#8F1E18] active:scale-[0.99]"
                            >
                                Daftar
                            </button>

                        </form>


                        <!-- LOGIN -->
                        <p class="mt-6 text-center text-sm text-gray-500">

                            Sudah memiliki akun?

                            <a
                                href="{{ route('login') }}"
                                class="font-semibold text-[#2C3F70] hover:underline"
                            >
                                Masuk sekarang
                            </a>

                        </p>


                        <!-- FOOTER -->
                        <div class="mt-7 pt-5 border-t border-gray-100 text-center">

                            <p class="text-xs text-gray-400">
                                Sistem Informasi Perpustakaan
                            </p>

                            <p class="text-xs text-gray-400 mt-1">
                                SMK Negeri 2 Surakarta
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>
</html>