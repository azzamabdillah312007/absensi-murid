{{-- <section class="py-14 lg:py-24 relative z-0 bg-gray-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative text-center">
        <h1
            class="max-w-2xl mx-auto text-center font-manrope font-bold text-4xl  text-gray-900 mb-5 md:text-5xl md:leading-normal">
            Control your Finances with our <span class="text-indigo-600">Smart Tool </span>
        </h1>
        <p class="max-w-sm mx-auto text-center text-base font-normal leading-7 text-gray-500 mb-9">Invest
            intelligently
            and discover a better way to manage your entire wealth easily.</p>


    </div>
</section> --}}


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <main class=" mt-7 mx-auto w-[90%]">
        <section class="py-14 lg:py-24 relative z-0 bg-gray-50">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative text-center">
                <h1
                    class="max-w-2xl mx-auto text-center font-manrope font-bold text-4xl  text-gray-900 mb-5 md:text-5xl md:leading-normal">
                    Control your Finances with our <span class="text-indigo-600">Smart Tool </span>
                </h1>
                <p class="max-w-sm mx-auto text-center text-base font-normal leading-7 text-gray-500 mb-9">Invest
                    intelligently
                    and discover a better way to manage your entire wealth easily.</p>


            </div>
        </section>


        <section class="py-14 lg:py-24 relative">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative ">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-9">
                    <div class="img-box">
                        <img src="https://pagedone.io/asset/uploads/1702034769.png" alt="About Us tailwind page"
                            class="max-lg:mx-auto object-cover">
                    </div>
                    <div class="lg:pl-[100px] flex items-center">
                        <div class="data w-full">
                            <h2
                                class="font-manrope font-bold text-4xl lg:text-5xl text-black mb-9 max-lg:text-center relative">
                                About
                                Us </h2>
                            <p class="font-normal text-xl leading-8 text-gray-500 max-lg:text-center max-w-2xl mx-auto">
                                Driven by a passion for seamless user experiences, we've meticulously curated pagedone
                                to empower creators, designers, and developers alike. Our mission is to provide a
                                comprehensive toolkit,
                                enabling you to build intuitive, beautiful interfaces that resonate with users on every
                                interaction.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="py-14 lg:py-24 relative">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative ">
                <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-9 ">

                    <div class="lg:pr-24 flex items-center">
                        <div class="data w-full">
                            <img src="https://pagedone.io/asset/uploads/1702034785.png" alt="About Us tailwind page"
                                class="block lg:hidden mb-9 mx-auto object-cover">
                            <h2 class="font-manrope font-bold text-4xl lg:text-5xl text-black mb-9 max-lg:text-center">
                                We
                                are Creative Since 2005</h2>
                            <p class="font-normal text-xl leading-8 text-gray-500 max-lg:text-center max-w-2xl mx-auto">
                                Pagedone isn’t just a collection of components and guidelines; it's a philosophy. We go
                                beyond aesthetics, prioritizing accessibility, scalability, and usability. Every
                                element,
                                from the tiniest
                                detail to the grandest layout, is meticulously crafted to enhance functionality and
                                elevate
                                user
                                satisfaction.
                            </p>
                        </div>
                    </div>
                    <div class="img-box ">
                        <img src="https://pagedone.io/asset/uploads/1702034785.png" alt="About Us tailwind page"
                            class="hidden lg:block object-cover">
                    </div>
                </div>
            </div>
        </section>


        <section class="py-14 lg:py-24 relative">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative ">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-9">
                    <div class="form">
                        <div class="flex items-center justify-center p-12">
                            <div class="mx-auto w-full max-w-[550px] bg-white p-6 rounded-md">
                                <form>
                                    <div class="mb-5">
                                        <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
                                            E-mail
                                        </label>
                                        <input type="text" name="phone" id="phone"
                                            placeholder="Enter your phone number"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    </div>
                                    <div class="mb-5">
                                        <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                                            Masalah/Kendala
                                        </label>
                                        <textarea type="email" name="email" id="email"
                                            placeholder="Enter your email"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" /></textarea />
                                    </div>

                                    <div>
                                        <button
                                            class="hover:shadow-form w-full rounded-md bg-indigo-600 py-3 px-8 text-center text-base font-semibold text-white outline-none">
                                            Laporkan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="lg:pl-[100px] flex items-center">
                        <div class="data w-full">
                            <h2
                                class="font-manrope font-bold text-4xl lg:text-5xl text-black mb-9 max-lg:text-center relative">
                                Laporkan Masalah</h2>
                            <p
                                class="font-normal text-xl leading-8 text-gray-500 max-lg:text-center max-w-2xl mx-auto">
                               Jika kamu mempunyai maslaha di dalam aplikasi ini segera laporkan , caranya adalah dengan mengisi form di sini , lalu tekan tombol dan tunggu , kami akan se-segara mungkin memproses masalah anda sesuai dengan apa yang anda laporkan .
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>





</x-app-layout>
