<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <main class=" mt-7 mx-auto w-[90%]">
        <section class="flex items-center w-full h-28 rounded-md bg-white shadow px-20">
            <div>
                <h1 class="text-3xl font-semibold text-gray-800 w-full">Daftar task yang anda berikan kepada murid anda
                    <span class="text-indigo-600"> Risna Fania
                    </span>
                </h1>
                <p class=" text-gray-800">Jika belum ada tugas , segera berikan tugas kepada muridmu </p>
            </div>
        </section>

        <section class="container mx-auto py-8">

            <!-- List of Tasks -->
            <div class="bg-white rounded-lg shadow-md p-4">
                <!-- Task Item -->
                <div class="border-b border-gray-200 pb-4 mb-4">
                    <h2 class="text-lg font-semibold">Tugas 1: Judul Tugas</h2>
                    <p class="text-sm text-gray-600">Deskripsi singkat dari tugas ini untuk memberikan pemahaman lebih
                        lanjut kepada siswa.</p>
                    <div class="flex justify-between items-center mt-2">
                        <span class="text-xs text-gray-500">Batas Waktu: 2024-12-01</span>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-1 rounded">Lihat tugas</span>
                    </div>
                </div>

                <!-- Task Item -->
                <div class="border-b border-gray-200 pb-4 mb-4">
                    <h2 class="text-lg font-semibold">Tugas 2: Judul Tugas</h2>
                    <p class="text-sm text-gray-600">Deskripsi singkat dari tugas ini untuk memberikan pemahaman lebih
                        lanjut kepada siswa</p>
                    <div class="flex justify-between items-center mt-2">
                        <span class="text-xs text-gray-500">Batas Waktu: 2024-12-02</span>
                        <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2 py-1 rounded">Lihat tugas
                            </span>
                    </div>
                </div>

                <!-- Task Item -->
                <div class="border-b border-gray-200 pb-4 mb-4">
                    <h2 class="text-lg font-semibold">Tugas 3: Judul Tugas</h2>
                    <p class="text-sm text-gray-600">Deskripsi singkat dari tugas ini untuk memberikan pemahaman lebih
                        lanjut kepada siswa</p>
                    <div class="flex justify-between items-center mt-2">
                        <span class="text-xs text-gray-500">Batas Waktu: 2024-12-03</span>
                        <span
                            class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded">Lihat tugas</span>
                    </div>
                </div>

                <!-- Task Item -->
                <div>
                    <h2 class="text-lg font-semibold">Tugas 4: Judul Tugas</h2>
                    <p class="text-sm text-gray-600">Deskripsi singkat dari tugas ini untuk memberikan pemahaman lebih
                        lanjut kepada siswa</p>
                    <div class="flex justify-between items-center mt-2">
                        <span class="text-xs text-gray-500">Batas Waktu: 2024-12-04</span>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-1 rounded">Lihat tugas</span>
                    </div>
                </div>
            </div>
        </section>






    </main>
</x-app-layout>
