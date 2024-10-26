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
                <h1 class="text-3xl font-semibold text-gray-800 w-full">Selamat Datang Di Kelas Kita , <span
                        class="text-indigo-600">Risna Fania</span> </h1>
                <p class=" text-gray-800">Segera buat kelas anda sekarang dan manfaatkan fitur yang kami sediakan untuk
                    mengelola data murid anda</p>
            </div>
        </section>

        <section class="py-10">
            <div class="flex justify-between pb-5">
                <div class="w-full max-w-sm min-w-[200px]">
                    <input
                        class="w-full bg-white placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                        placeholder="Cari kelas">
                </div>

                {{-- <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah
                    Kelas</button> --}}
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
                                Kode Kelas
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


                        

                    </tbody>
                </table>
            </div>

        </section>

    </main>


</x-app-layout>
