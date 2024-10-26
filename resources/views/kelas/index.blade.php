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
                        class="text-indigo-600"> {{ $teacher->name }}
                    </span> </h1>
                <p class=" text-gray-800">Segera buat kelas anda sekarang dan manfaatkan fitur yang kami sediakan untuk
                    mengelola data murid anda</p>
            </div>
        </section>

        <section class="py-10">

            <div class="flex justify-between pb-3">
                <div class="w-full max-w-sm min-w-[200px]">
                    <input
                        class="w-full bg-white placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                        placeholder="Cari kelas">
                </div>

                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    <a href="/kelas-saya/tambah-kelas">Tambah Kelas</a></button>
            </div>

            <div class="flex flex-wrap gap-4">

                <div class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
                    <!-- Bagian gambar -->
                    <img class="w-full h-48 object-cover"
                        src="https://media.istockphoto.com/id/1329488860/id/vektor/ruang-kelas-desain-interior-sekolah-atau-perguruan-tinggi-auditorium-dengan-meja-dan-buku.jpg?s=612x612&w=0&k=20&c=OARrYacFS3sk9ngEnkvdM5V_sLy_6zI5FC-xq5FK3kg="
                        alt="Gambar Kelas">

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
                    <img class="w-full h-48 object-cover"
                        src="https://media.istockphoto.com/id/1329488860/id/vektor/ruang-kelas-desain-interior-sekolah-atau-perguruan-tinggi-auditorium-dengan-meja-dan-buku.jpg?s=612x612&w=0&k=20&c=OARrYacFS3sk9ngEnkvdM5V_sLy_6zI5FC-xq5FK3kg="
                        alt="Gambar Kelas">

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
                    <img class="w-full h-48 object-cover"
                        src="https://media.istockphoto.com/id/1329488860/id/vektor/ruang-kelas-desain-interior-sekolah-atau-perguruan-tinggi-auditorium-dengan-meja-dan-buku.jpg?s=612x612&w=0&k=20&c=OARrYacFS3sk9ngEnkvdM5V_sLy_6zI5FC-xq5FK3kg="
                        alt="Gambar Kelas">

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

                @foreach ($classes as $kelas)
                    <div class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
                        <!-- Bagian gambar -->
                        <img class="w-full h-48 object-cover"
                            src="https://media.istockphoto.com/id/1329488860/id/vektor/ruang-kelas-desain-interior-sekolah-atau-perguruan-tinggi-auditorium-dengan-meja-dan-buku.jpg?s=612x612&w=0&k=20&c=OARrYacFS3sk9ngEnkvdM5V_sLy_6zI5FC-xq5FK3kg="
                            alt="Gambar Kelas">

                        <!-- Bagian konten card -->
                        <div class="p-6">
                            <h2 class="text-xl font-semibold text-gray-800">{{ $kelas->nama_kelas }}</h2>
                            <p class="text-gray-600 mt-2">Tingkat: {{ $kelas->tingkatan }} | Mata Pelajaran:
                                {{ $kelas->mapel }}</p>

                            <p class="mt-4 text-gray-600">{{ $kelas->deskripsi }}</p>

                            <!-- Informasi tambahan -->
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-gray-700 font-semibold">Kode Kelas:</span>
                                <span class="text-blue-500 font-semibold">{{ $kelas->kode_kelas }}</span>
                            </div>

                            <!-- Tombol aksi -->
                            <div class="flex justify-between mt-6">
                                <a href="/kelas-saya/{{ $kelas->id }}"
                                    class="px-4 py-2 bg-blue-500 text-white text-xs font-semibold rounded hover:bg-blue-600">Lihat
                                    Kelas</a>
                                <a href="#"
                                    class="px-4 py-2 bg-gray-200 text-gray-700 text-xs font-semibold rounded hover:bg-gray-300">Gabung
                                    Kelas</a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

        </section>
    </main>
</x-app-layout>
