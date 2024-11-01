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
            <div class=" bg-white rounded-full shadow-md flex justify-between items-center py-5 px-8 mb-4">
                <div class="w-full max-w-sm min-w-[200px]">
                    <h2 class="text-2xl text text-gray-800 font-semibold">Daftar murid di kelas</h2>
                </div>

                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    <a href="/kelas-saya/detail-kelas/{{ $detailKelas->id }}/tambah-murid"
                        class="flex items-center gap-2"> <x-letsicon-user class="w-4 h-4" />Tambah Murid
                    </a></button>
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
                                        class="flex items-center gap-2 text-white bg-red-500 px-3 py-2 rounded-md"><x-monoicon-delete-alt
                                            class="w-4 h-4" />
                                        Hapus</a>
                                    <a href=""
                                        class="flex items-center gap-2 text-white bg-amber-400 px-3 py-2 rounded-md"><x-ri-edit-line
                                            class="w-4 h-4" />Edit</a>
                                    <a href=""
                                        class="flex items-center gap-2 text-white  bg-emerald-500  px-3 py-2 rounded-md"><x-letsicon-search
                                            class="w-4 h-4" />Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </section>

        <section class="py-10">
            <div class=" bg-white rounded-full shadow-md flex justify-between items-center py-5 px-8 mb-4">
                <div class="w-full max-w-sm min-w-[200px]">
                    <h2 class="text-2xl text text-gray-800 font-semibold">Daftar absensi kelas</h2>
                </div>

                <button
                    class="flex items-center gap-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                    type="button" onclick="toggleModal('modal-id')">
                    <x-clarity-list-line class="w-4 h-4" /> Tambah absensi
                </button>
                <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                    id="modal-id">
                    <div class="relative w-auto my-6 mx-auto max-w-3xl">
                        <!--content-->
                        <form action="{{ route('kelas.create-absensi', ['class_id' => $detailKelas->id]) }}"
                            method="POST"
                            class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">

                            @csrf
                            <!--header-->
                            <div
                                class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                                <h3 class="text-3xl font-semibold">
                                    Tanggal absensi
                                </h3>
                                <button
                                    class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                                    onclick="toggleModal('modal-id')">
                                    <span
                                        class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                                        ×
                                    </span>
                                </button>
                            </div>
                            <!--body-->
                            <div class="relative p-6 flex-auto">
                                <input type="date" name="tanggal" id="tanggal"
                                    class="formbold-form-input w-full rounded-md" placeholder="Masukan tanggal" />
                            </div>
                            <!--footer-->
                            <div
                                class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
                                <button
                                    class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                    type="button" onclick="toggleModal('modal-id')">
                                    Tutup
                                </button>
                                <button
                                    class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                    type="submit" onclick="toggleModal('modal-id')">
                                    Tambah
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
                <script type="text/javascript">
                    function toggleModal(modalID) {
                        document.getElementById(modalID).classList.toggle("hidden");
                        document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
                        document.getElementById(modalID).classList.toggle("flex");
                        document.getElementById(modalID + "-backdrop").classList.toggle("flex");
                    }
                </script>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-6">
                                Tanggal absensi
                            </th>
                            <th scope="col" class="px-6 py-6">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($absensi as $absensi)
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $absensi->tanggal }}
                                </th>
                                <td class="px-6 py-6 flex gap-5">
                                    <a href=""
                                        class="flex items-center gap-2 text-white bg-red-500 px-3 py-2 rounded-md"><x-monoicon-delete-alt
                                            class="w-4 h-4" />
                                        Hapus</a>
                                    <a href="/kelas-saya/detail-kelas/{{ $detailKelas->id }}/detail-absensi/{{ $absensi->id }}"
                                        class="flex items-center gap-2 text-white bg-emerald-500 px-3 py-2 rounded-md"><x-letsicon-search
                                            class="w-4 h-4" />Lihat</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</x-app-layout>
