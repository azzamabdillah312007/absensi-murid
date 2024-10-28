<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <main class=" mt-7 mx-auto w-[90%]">
        <section class="flex items-center w-full h-28 rounded-md bg-white shadow px-20">
            <div>
                <h1 class="text-3xl font-semibold text-gray-800 w-full">Selamat datang di kelas anda<span
                        class="text-indigo-600"> {{ $detailKelas->nama_kelas }}
                    </span> </h1>
                <p class=" text-gray-800">{{ $detailKelas->deskripsi }}</p>
            </div>
        </section>


        <section class="py-10">
            <div class="flex justify-between pb-5">
                <div class="w-full max-w-sm min-w-[200px]">
                    <input
                        class="w-full bg-white placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                        placeholder="Cari kelas">
                </div>

                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    <a href="/kelas-saya/detail-kelas/{{ $detailKelas->id }}/tambah-murid">Tambah Murid</a></button>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-6">
                                Nama kelas
                            </th>
                            <th scope="col" class="px-6 py-6">
                                Tingkatan
                            </th>
                            <th scope="col" class="px-6 py-6">
                                Mapel
                            </th>
                            <th scope="col" class="px-6 py-6">
                                Guru
                            </th>
                            <th scope="col" class="px-6 py-6">
                                Ruang Kelas
                            </th>
                            <th scope="col" class="px-6 py-6">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Rpl Independent
                            </th>
                            <td class="px-6 py-6">
                                SMK
                            </td>
                            <td class="px-6 py-6">
                                Bahsa indonesia
                            </td>
                            <td class="px-6 py-6">
                                Rahasia
                            </td>
                            <td class="px-6 py-6">
                                090909
                            </td>
                            <td class="px-6 py-6">
                                <a href="" class="text-indigo-400">Edit</a>
                            </td>
                        </tr>


                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Rpl Independent
                            </th>
                            <td class="px-6 py-6">
                                SMK
                            </td>
                            <td class="px-6 py-6">
                                Bahsa indonesia
                            </td>
                            <td class="px-6 py-6">
                                Rahasia
                            </td>
                            <td class="px-6 py-6">
                                090909
                            </td>
                            <td class="px-6 py-6">
                                <a href="" class="text-indigo-400">Edit</a>

                            </td>
                        </tr>
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Rpl Independent
                            </th>
                            <td class="px-6 py-6">
                                SMK
                            </td>
                            <td class="px-6 py-6">
                                Bahsa indonesia
                            </td>
                            <td class="px-6 py-6">
                                Rahasia
                            </td>
                            <td class="px-6 py-6">
                                090909
                            </td>
                            <td class="px-6 py-6">
                                <a href="" class="text-indigo-400">Edit</a>

                            </td>
                        </tr>
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Rpl Independent
                            </th>
                            <td class="px-6 py-6">
                                SMK
                            </td>
                            <td class="px-6 py-6">
                                Bahsa indonesia
                            </td>
                            <td class="px-6 py-6">
                                Rahasia
                            </td>
                            <td class="px-6 py-6">
                                090909
                            </td>
                            <td class="px-6 py-6">
                                <a href="" class="text-indigo-400">Edit</a>

                            </td>
                        </tr>
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Rpl Independent
                            </th>
                            <td class="px-6 py-6">
                                SMK
                            </td>
                            <td class="px-6 py-6">
                                Bahsa indonesia
                            </td>
                            <td class="px-6 py-6">
                                Rahasia
                            </td>
                            <td class="px-6 py-6">
                                090909
                            </td>
                            <td class="px-6 py-6">
                                <a href="" class="text-indigo-400">Edit</a>

                            </td>
                        </tr>
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Rpl Independent
                            </th>
                            <td class="px-6 py-6">
                                SMK
                            </td>
                            <td class="px-6 py-6">
                                Bahsa indonesia
                            </td>
                            <td class="px-6 py-6">
                                Rahasia
                            </td>
                            <td class="px-6 py-6">
                                090909
                            </td>
                            <td class="px-6 py-6">
                                <a href="" class="text-indigo-400">Edit</a>

                            </td>
                        </tr>
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Rpl Independent
                            </th>
                            <td class="px-6 py-6">
                                SMK
                            </td>
                            <td class="px-6 py-6">
                                Bahsa indonesia
                            </td>
                            <td class="px-6 py-6">
                                Rahasia
                            </td>
                            <td class="px-6 py-6">
                                090909
                            </td>
                            <td class="px-6 py-6">
                                <a href="" class="text-indigo-400">Edit</a>

                            </td>
                        </tr>
{{-- 
                        @foreach ($classes as $kelas)
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $kelas->nama_kelas }}
                                </th>
                                <td class="px-6 py-6">
                                    {{ $kelas->tingkatan }}
                                </td>
                                <td class="px-6 py-6">
                                    {{ $kelas->mapel }}
                                </td>
                                <td class="px-6 py-6">
                                    {{ $teacher->name }}
                                </td>
                                <td class="px-6 py-6">
                                    {{ $kelas->ruangan }}
                                </td>
                                <td class="px-6 py-6">
                                    <a href="" class="text-indigo-400">Edit</a>

                                </td>
                            </tr>
                        @endforeach --}}



                    </tbody>
                </table>
            </div>





    </main>
</x-app-layout>
