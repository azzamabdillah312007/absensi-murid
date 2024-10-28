<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <main class="mt-7 mx-auto w-[90%] py-6  ">
        <section>
            <!-- component -->

            <div class="w-[70%] mx-auto bg-white p-8 shadow-md rounded-md">
                <div class="">
                    <form action="{{ route('kelas.create-kelas') }}" method="POST">
                        @csrf
                        <div class="formbold-form-title">
                            <h2 class="">Baut Kelas Baru</h2>
                            <p>
                                Buat kelas anda dan kelola data murid nya 
                            </p>
                        </div>

                        <div class="formbold-input-flex">
                            <div>
                                <label for="Nama kelas" class="formbold-form-label">
                                    Nama Kelas
                                </label>
                                <input type="text" name="nama_kelas" id="nama_kelas" class="formbold-form-input"
                                    placeholder="Kelas Kita" />
                            </div>
                            <div>
                                <label for="tingkatan" class="formbold-form-label">Tingkatan</label>
                                <input type="text" name="tingkatan" id="tingkatan" class="formbold-form-input"
                                    placeholder="SD/SMP/SMA/SMK" />
                            </div>
                        </div>


                        <div class="formbold-mb-3">
                            <label for="mapel" class="formbold-form-label">
                                Mapel
                            </label>
                            <input type="text" name="mapel" id="mapel" class="formbold-form-input"
                                placeholder="Matematika" />
                        </div>

                        <div class="formbold-mb-3">
                            <label for="class_code" class="formbold-form-label">
                                Kode Kelas
                            </label>
                            <input type="number" name="kode_kelas" id="class_code" class="formbold-form-input"
                                placeholder="090909" />
                        </div>

                        <div class="formbold-mb-3">
                            <label for="room" class="formbold-form-label">
                                Ruang Kelas
                            </label>
                            <input type="text" name="ruangan" id="room" class="formbold-form-input"
                                placeholder="Ruang 07" />
                        </div>

                        <div class="formbold-mb-3">
                            <label for="description" class="formbold-form-label">
                                Deskripsi Kelas
                            </label>
                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="w-full border-gray-300 rounded-md text-gray-600"></textarea>
                        </div>

                        <button type="submit"
                            class=" w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Buat Kelas</button>
                    </form>
                </div>
            </div>
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }

                body {
                    font-family: 'Inter', sans-serif;
                }

                .formbold-mb-3 {
                    margin-bottom: 15px;
                }

                .formbold-relative {
                    position: relative;
                }

                .formbold-opacity-0 {
                    opacity: 0;
                }

                .formbold-stroke-current {
                    stroke: currentColor;
                }

                #supportCheckbox:checked~div span {
                    opacity: 1;
                }

                .formbold-main-wrapper {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 48px;
                }

                .formbold-form-wrapper {
                    margin: 0 auto;
                    max-width: 570px;
                    width: 100%;
                    background: white;
                    padding: 40px;
                }

                .formbold-img {
                    margin-bottom: 45px;
                }

                .formbold-form-title {
                    margin-bottom: 30px;
                }

                .formbold-form-title h2 {
                    font-weight: 600;
                    font-size: 28px;
                    line-height: 34px;
                    color: #07074d;
                }

                .formbold-form-title p {
                    font-size: 16px;
                    line-height: 24px;
                    color: #536387;
                    margin-top: 12px;
                }

                .formbold-input-flex {
                    display: flex;
                    gap: 20px;
                    margin-bottom: 15px;
                }

                .formbold-input-flex>div {
                    width: 50%;
                }

                .formbold-form-input {
                    text-align: center;
                    width: 100%;
                    padding: 13px 22px;
                    border-radius: 5px;
                    border: 1px solid #dde3ec;
                    background: #ffffff;
                    font-weight: 500;
                    font-size: 16px;
                    color: #536387;
                    outline: none;
                    resize: none;
                }

                .formbold-form-input:focus {
                    border-color: #6a64f1;
                    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
                }

                .formbold-form-label {
                    color: #536387;
                    font-size: 14px;
                    line-height: 24px;
                    display: block;
                    margin-bottom: 10px;
                }

                .formbold-checkbox-label {
                    display: flex;
                    cursor: pointer;
                    user-select: none;
                    font-size: 16px;
                    line-height: 24px;
                    color: #536387;
                }

                .formbold-checkbox-label a {
                    margin-left: 5px;
                    color: #6a64f1;
                }

                .formbold-input-checkbox {
                    position: absolute;
                    width: 1px;
                    height: 1px;
                    padding: 0;
                    margin: -1px;
                    overflow: hidden;
                    clip: rect(0, 0, 0, 0);
                    white-space: nowrap;
                    border-width: 0;
                }

                .formbold-checkbox-inner {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    width: 20px;
                    height: 20px;
                    margin-right: 16px;
                    margin-top: 2px;
                    border: 0.7px solid #dde3ec;
                    border-radius: 3px;
                }

                .formbold-btn {
                    font-size: 16px;
                    border-radius: 5px;
                    padding: 14px 25px;
                    border: none;
                    font-weight: 500;
                    background-color: #6a64f1;
                    color: white;
                    cursor: pointer;
                    margin-top: 25px;
                }

                .formbold-btn:hover {
                    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
                }
            </style>

        </section>
    </main>

</x-app-layout>
