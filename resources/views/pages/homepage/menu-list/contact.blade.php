<x-app-layout>
    @section('title', 'Dasol Tourism - Home')

    <div class="bg-white py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Municipal Tourism Office</p>
            </div>
            <img class="h-24 w-24 mx-auto mt-4" src="{{ asset('assets/images/logo.png') }}" alt="">

            <div class="text-center my-4">
                <h2>Experienced Dasol ... and bedazzled</h2>
                <p>#garantisadongSerbisyoSaTurismo</p>
            </div>

            <div class="flex items-center justify-center">
                <div class="inline ">
                    <div class="text-base flex gap-4 mt-2  leading-7 text-gray-900">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                        </div>
                        <div>
                            <a class="underline text-indigo-700 block" href="tel:(075) 636 9558">(075) 636 9558</a>
                            <a class="underline text-indigo-700 " href="tel:(075) 636 9558">(075) 636 9558</a>
                        </div>
                    </div>
                    <div class="text-base flex gap-4 mt-2 leading-7 text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        <a class="underline text-indigo-700 "
                            href="mailto:turismodasol@gmail.com">turismodasol@gmail.com</a>

                    </div>
                    <div class="text-base flex gap-4 mt-2 leading-7 text-gray-900">
                        <a target="__blank" href="https://www.facebook.com/dasolbfp.pangasinan.9">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z"
                                    fill="#2E3A59"></path>
                            </svg>
                        </a>
                        <a class="underline text-indigo-700 " href="https://www.facebook.com/dasolpangasinan.gov.ph1"
                            target="__blank">Facebook</a>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center">
                <img src="{{ asset('assets/images/about/discover-explore-love.png') }}" alt=""
                    class="h-[20rem] w-[30rem] mt-4">
            </div>


        </div>
    </div>
</x-app-layout>