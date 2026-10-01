<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Perpustakaan - SMK N 2 Surakarta</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#F7F8FC]">

    <div class="min-h-screen flex items-center justify-center p-6">

        <div class="w-full max-w-6xl bg-white rounded-3xl shadow-xl overflow-hidden">

            <div class="grid md:grid-cols-2 min-h-[600px]">

                <!-- BAGIAN KIRI -->
                <div class="bg-[#2C3F70] text-white p-10 md:p-14 flex flex-col justify-center">

                    <div class="mb-8">
                        <div class="w-16 h-16 rounded-2xl bg-[#A5231C] flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-9 h-9"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>

                        <p class="text-[#D8DDF0] text-sm font-medium mb-2">
                            SISTEM INFORMASI
                        </p>

                        <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4">
                            Perpustakaan
                        </h1>

                        <div class="w-20 h-1 bg-[#A5231C] rounded-full mb-6"></div>

                        <p class="text-[#D8DDF0] leading-relaxed">
                            Sistem informasi perpustakaan sekolah untuk
                            mengelola data buku, anggota, dan peminjaman
                            secara lebih mudah dan terstruktur.
                        </p>
                    </div>

                    <div class="flex items-center gap-3 text-sm text-[#D8DDF0]">
                        <div class="w-2 h-2 rounded-full bg-[#8089D2]"></div>
                        <span>SMK Negeri 2 Surakarta</span>
                    </div>

                </div>


                <!-- BAGIAN KANAN -->
                <div class="p-10 md:p-14 flex flex-col justify-center">

                    <div class="max-w-md mx-auto w-full">

                        <p class="text-[#A5231C] font-semibold text-sm mb-2">
                            SELAMAT DATANG
                        </p>

                        <h2 class="text-3xl font-bold text-gray-800 mb-4">
                            Kelola Perpustakaan
                        </h2>

                        <p class="text-gray-500 leading-relaxed mb-8">
                            Silakan masuk ke akun Anda untuk mengakses
                            sistem pengelolaan perpustakaan.
                        </p>


                        <!-- TOMBOL -->
                        <div class="space-y-4">

                            @auth

                                <a href="{{ route('dashboard') }}"
                                   class="w-full flex items-center justify-center gap-2
                                          bg-[#A5231C] hover:bg-[#8F1F19]
                                          text-white font-semibold
                                          py-3.5 px-6 rounded-xl
                                          transition duration-200">

                                    Masuk ke Dashboard

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="w-5 h-5"
                                         fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg>

                                </a>

                            @else

                                <a href="{{ route('login') }}"
                                   class="w-full flex items-center justify-center gap-2
                                          bg-[#A5231C] hover:bg-[#8F1F19]
                                          text-white font-semibold
                                          py-3.5 px-6 rounded-xl
                                          transition duration-200">

                                    Login

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="w-5 h-5"
                                         fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg>

                                </a>


                                <a href="{{ route('register') }}"
                                   class="w-full flex items-center justify-center
                                          border-2 border-[#8089D2]
                                          text-[#5962A8]
                                          hover:bg-[#8089D2]
                                          hover:text-white
                                          font-semibold
                                          py-3.5 px-6 rounded-xl
                                          transition duration-200">

                                    Buat Akun

                                </a>

                            @endauth

                        </div>


                        <!-- INFO -->
                        <div class="mt-10 pt-6 border-t border-gray-100">

                            <div class="flex items-start gap-3">

                                <div class="w-10 h-10 rounded-xl bg-[#F1F2FB]
                                            flex items-center justify-center
                                            flex-shrink-0">

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="w-5 h-5 text-[#8089D2]"
                                         fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="1.8"
                                              d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>

                                </div>

                                <div>
                                    <p class="font-semibold text-gray-700">
                                        Sistem Perpustakaan Sekolah
                                    </p>

                                    <p class="text-sm text-gray-500 mt-1">
                                        Pengelolaan buku, anggota, dan
                                        peminjaman dalam satu aplikasi.
                                    </p>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>
</html>