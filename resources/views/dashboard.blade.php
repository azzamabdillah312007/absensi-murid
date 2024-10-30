<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}

    <main class=" mt-7 mx-auto w-[90%]">
        <section class="flex items-center w-full h-28 rounded-md bg-white shadow px-20">
            <div>
                <h1 class="text-3xl font-semibold text-gray-800 w-full">Selamat datang di kelas kita , <span
                        class="text-indigo-600">{{ $teacher->name }}</span> </h1>
                <p class=" text-gray-800">Jika mau menambahkan atau mengelola absensi segera mengarah ke halaman kelas saya</p>
            </div>
        </section>

        <section class="py-10">

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
                        </tr>

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
                            </tr>
                        @endforeach



                    </tbody>
                </table>
            </div>

        </section>

    </main>


</x-app-layout>
