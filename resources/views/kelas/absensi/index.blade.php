<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <main class=" mt-7 mx-auto w-[90%]">

        <section class="py-10">
            <div class=" bg-white rounded-full shadow-md flex justify-between items-center py-5 px-8 mb-4">
                <div class="w-full max-w-sm min-w-[200px]">
                    <h2 class="text-2xl text-gray-800 font-semibold">Absensi tanggal {{ $absensi->tanggal }}</h2>
                </div>

                {{-- <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    <a href="" class="flex items-center gap-2"> <x-letsicon-user class="w-4 h-4" />Tambah Murid

                    </a></button> --}}
            </div>

            {{-- table --}}
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-6">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-6">
                                Nis
                            </th>
                            <th scope="col" class="px-6 py-6">
                                No Hp
                            </th>
                            <th scope="col" class="px-6 py-6">
                                Jenis Kelamin
                            </th>
                            <th scope="col" class="px-6 py-6">
                                Orang Tua
                            </th>
                            <th scope="col" class="px-6 py-6">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($murid as $murid)
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $murid->nama }}
                                </th>
                                <td class="px-6 py-6">
                                    {{ $murid->nis }}
                                </td>
                                <td class="px-6 py-6">
                                    {{ $murid->no_hp }}
                                </td>
                                <td class="px-6 py-6">
                                    @if ($murid->jenis_kelamin == 'P')
                                        Perempuan
                                    @elseif ($murid->jenis_kelamin == 'L')
                                        Laki-Laki
                                    @endif
                                </td>
                                <td class="px-6 py-6">
                                    {{ $murid->orang_tua }}
                                </td>
                                <td class="px-6 py-6 flex gap-5">
                                    <a href=""
                                        class="flex items-center gap-2 text-white  bg-emerald-500  px-3 py-2 rounded-md">Hadir</a>
                                    <a href=""
                                        class="flex items-center gap-2 text-white bg-amber-400 px-3 py-2 rounded-md">Izin</a>
                                    <a href=""
                                        class="flex items-center gap-2 text-white bg-red-500 px-3 py-2 rounded-md">Alpha</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </section>



    </main>
</x-app-layout>
