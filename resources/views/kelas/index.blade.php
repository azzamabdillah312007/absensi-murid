<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <main class=" mt-7 mx-auto w-[90%]">
        <section class="flex items-center w-full h-28 rounded-md bg-white shadow px-20">
            <div>
                <h1 class="text-3xl font-semibold text-gray-800 w-full">Selamat Datang Di Kelas Kita , <span
                        class="text-indigo-600">Risna Fania</span> </h1>
                <p class=" text-gray-800">Segera buat kelas anda sekarang dan manfaatkan fitur yang kami sediakan untuk
                    mengelola data murid anda</p>
            </div>
        </section>

        <section class="py-10">
            <!-- component -->

            <div class="flex flex-wrap gap-4">
                <div class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
                    <!-- Bagian gambar -->
                    <img class="w-full h-48 object-cover" src="https://via.placeholder.com/600x400" alt="Gambar Kelas">

                    <!-- Bagian konten card -->
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Nama Kelas</h2>
                        <p class="text-gray-600 mt-2">Tingkat: 10 | Mata Pelajaran: Matematika</p>

                        <p class="mt-4 text-gray-600">Deskripsi singkat kelas ini menjelaskan tentang tujuan dan materi
                            utama yang diajarkan kepada siswa.</p>

                        <!-- Informasi tambahan -->
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-gray-700 font-semibold">Kode Kelas:</span>
                            <span class="text-blue-500 font-semibold">MAT101</span>
                        </div>

                        <!-- Tombol aksi -->
                        <div class="flex justify-between mt-6">
                            <a href="#"
                                class="px-4 py-2 bg-blue-500 text-white text-xs font-semibold rounded hover:bg-blue-600">Lihat
                                Detail</a>
                            <a href="#"
                                class="px-4 py-2 bg-gray-200 text-gray-700 text-xs font-semibold rounded hover:bg-gray-300">Gabung
                                Kelas</a>
                        </div>
                    </div>
                </div>
                <div class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
                    <!-- Bagian gambar -->
                    <img class="w-full h-48 object-cover" src="https://via.placeholder.com/600x400" alt="Gambar Kelas">

                    <!-- Bagian konten card -->
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Nama Kelas</h2>
                        <p class="text-gray-600 mt-2">Tingkat: 10 | Mata Pelajaran: Matematika</p>

                        <p class="mt-4 text-gray-600">Deskripsi singkat kelas ini menjelaskan tentang tujuan dan materi
                            utama yang diajarkan kepada siswa.</p>

                        <!-- Informasi tambahan -->
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-gray-700 font-semibold">Kode Kelas:</span>
                            <span class="text-blue-500 font-semibold">MAT101</span>
                        </div>

                        <!-- Tombol aksi -->
                        <div class="flex justify-between mt-6">
                            <a href="#"
                                class="px-4 py-2 bg-blue-500 text-white text-xs font-semibold rounded hover:bg-blue-600">Lihat
                                Detail</a>
                            <a href="#"
                                class="px-4 py-2 bg-gray-200 text-gray-700 text-xs font-semibold rounded hover:bg-gray-300">Gabung
                                Kelas</a>
                        </div>
                    </div>
                </div>
                <div class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
                    <!-- Bagian gambar -->
                    <img class="w-full h-48 object-cover" src="https://via.placeholder.com/600x400" alt="Gambar Kelas">

                    <!-- Bagian konten card -->
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Nama Kelas</h2>
                        <p class="text-gray-600 mt-2">Tingkat: 10 | Mata Pelajaran: Matematika</p>

                        <p class="mt-4 text-gray-600">Deskripsi singkat kelas ini menjelaskan tentang tujuan dan materi
                            utama yang diajarkan kepada siswa.</p>

                        <!-- Informasi tambahan -->
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-gray-700 font-semibold">Kode Kelas:</span>
                            <span class="text-blue-500 font-semibold">MAT101</span>
                        </div>

                        <!-- Tombol aksi -->
                        <div class="flex justify-between mt-6">
                            <a href="#"
                                class="px-4 py-2 bg-blue-500 text-white text-xs font-semibold rounded hover:bg-blue-600">Lihat
                                Detail</a>
                            <a href="#"
                                class="px-4 py-2 bg-gray-200 text-gray-700 text-xs font-semibold rounded hover:bg-gray-300">Gabung
                                Kelas</a>
                        </div>
                    </div>
                </div>
                

            </div>

        </section>

    </main>




</x-app-layout>
