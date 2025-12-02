<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-100 leading-tight tracking-wider">
            {{ __('LEO CINEMA DASHBOARD') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-2xl sm:rounded-xl border-t-4 border-red-600">
                <div class="p-6 sm:px-20 bg-gray-800 border-b border-gray-700">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                        </svg>
                        <h1 class="ml-4 text-4xl font-extrabold text-white">
                            Selamat Datang di Leo Cinema, {{ Auth::user()->name }}!
                        </h1>
                    </div>

                    <div class="mt-8 text-gray-300">
                        <!-- <p class="text-lg">
                            Kelola koleksi film Anda dengan mudah dan *stylish*. Kami menggunakan tema **Dark Mode** dan **Font Poppins** untuk pengalaman interaktif yang lebih baik.
                        </p> -->
                        <p class="mt-4 text-sm text-gray-500 italic">
                            Akses menu **Daftar Film** untuk memulai.
                        </p>
                    </div>
                </div>

                <div class="bg-gray-900 bg-opacity-50 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6 sm:p-12">
                    <div class="p-6 border-b border-gray-700 bg-gray-800 rounded-xl shadow-xl hover:bg-gray-700 transition duration-300">
                        <h3 class="text-xl font-bold mb-3 text-red-500">Tambah Film Baru</h3>
                        <p class="text-gray-300 mb-4">
                            Masukkan detail dan poster film yang ingin Anda tambahkan ke koleksi.
                        </p>
                        <a href="{{ route('film.create') }}" class="inline-flex items-center text-red-500 hover:text-red-300 font-bold">
                            Mulai Tambah Film &rarr;
                        </a>
                    </div>

                    <div class="p-6 border-b border-gray-700 bg-gray-800 rounded-xl shadow-xl hover:bg-gray-700 transition duration-300">
                        <h3 class="text-xl font-bold mb-3 text-red-500">Lihat Semua Film</h3>
                        <p class="text-gray-300 mb-4">
                            Tinjau, edit, atau hapus semua daftar film yang sudah ada.
                        </p>
                        <a href="{{ route('film.index') }}" class="inline-flex items-center text-red-500 hover:text-red-300 font-bold">
                            Akses Daftar Film &rarr;
                        </a>
                    </div>

                    <div class="p-6 border-b border-gray-700 bg-gray-800 rounded-xl shadow-xl hover:bg-gray-700 transition duration-300">
                        <h3 class="text-xl font-bold mb-3 text-red-500">Pengaturan Akun</h3>
                        <p class="text-gray-300 mb-4">
                            Kelola informasi profil dan keamanan akun Anda.
                        </p>
                        <a href="{{ route('profile.edit') }}" class="inline-flex items-center text-red-500 hover:text-red-300 font-bold">
                            Pergi ke Profil &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
