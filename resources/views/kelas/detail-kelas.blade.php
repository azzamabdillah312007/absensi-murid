<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <main class=" mt-7 mx-auto w-[90%]">
        <section class="flex items-center w-full h-28 rounded-md bg-white shadow px-20">
            <div>
                <h1 class="text-3xl font-semibold text-gray-800 w-full">Selamat datang di kelas anda <span
                        class="text-indigo-600"> {{ $detailKelas->nama_kelas }}
                    </span> </h1>
                <p class=" text-gray-800">{{ $detailKelas->deskripsi }}</p>
            </div>
        </section>

        <section class="flex justify-center items-center gap-4">
            <!-- Div untuk Tugas Kelas -->
            <div class="flex flex-col items-center bg-white text-white rounded-lg shadow-md w-1/2 my-9">
                <img src="https://img.freepik.com/free-vector/female-student-listening-webinar-online_74855-6461.jpg"
                    alt="Gambar Tugas Kelas" class="w-full h-64 object-cover rounded-md mb-4">
                <div class="px-5 py-8">
                    <div class="flex justify-between items-center">
                        <a href="/kelas-saya/detail-kelas/{{ $detailKelas->id }}/tugas" class="text-2xl font-semibold mb-2 text-indigo-600 underline">Tugas Kelas</a>
                        <span class=" text-base font-semibold text-gray-700 mb-2">{{ $teacher->name }}</span>
                    </div>
                    <p class="text-justify text-gray-700">Di sini kamu dapat melihat dan mengelola seluruh tugas yang
                        telah diberikan untuk kelas ini.
                        Pastikan untuk selalu memeriksa tugas-tugas yang ada agar tidak terlewat, dan kerjakan dengan
                        sungguh-sungguh untuk mencapai hasil yang maksimal. Akses detail setiap tugas, tanggal
                        pengumpulan,
                        dan panduan pengerjaan langsung dari halaman ini.</p>
                </div>
            </div>

            <!-- Div untuk Absensi Kelas -->
            <div class="flex flex-col items-center bg-white text-white rounded-lg shadow-md w-1/2 my-9">
                <img src="https://img.freepik.com/free-vector/education-learning-concept-love-reading-people-reading-students-studying-preparing-examination-library-book-lovers-readers-modern-literature-flat-cartoon-vector-illustration_1150-61140.jpg"
                    alt="Gambar Absensi Kelas" class="w-full h-64 object-cover rounded-md mb-4">
                <div class="px-2 py-8">
                    <div class="flex justify-between items-center">
                        <a href="/kelas-saya/detail-kelas/{{ $detailKelas->id }}/absensi" class="text-2xl font-semibold mb-2 text-indigo-600 underline">Absensi Kelas</a>
                        <span class=" text-base font-semibold text-gray-700 mb-2">{{ $teacher->name }}</span>
                    </div>
                    <p class="text-justify text-gray-700"> Pantau dan kelola kehadiran siswa di kelas ini secara
                        langsung. Fitur ini memungkinkan kamu untuk
                        melihat siapa saja yang hadir atau tidak hadir, dan mencatat kehadiran dengan mudah. Dengan data
                        absensi yang lengkap, kamu bisa mendapatkan gambaran tentang keterlibatan siswa dan memastikan
                        bahwa semua siswa mengikuti proses belajar dengan baik.</p>
                </div>
            </div>
        </section>



    </main>
</x-app-layout>
