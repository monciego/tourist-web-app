<x-app-sidebar-layout>
    {{-- {{ $ownerProperties }} --}}
    <div class="bg-white">
        <div class="pt-6">
            <p class="px-8 pb-4 text-xl font-semibold">Dasoland</p>
            <nav aria-label="Breadcrumb">
                <ol role="list" class="max-w-2xl mx-auto px-4 flex items-center space-x-2 sm:px-6 lg:max-w-7xl lg:px-8">
                    <li>
                        <div class="flex items-center">
                            <a href="#" class="mr-2 text-sm font-medium text-gray-900"> Men </a>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-5 text-gray-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </div>
                    </li>

                    <li>
                        <div class="flex items-center">
                            <a href="#" class="mr-2 text-sm font-medium text-gray-900"> Clothing </a>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-5 text-gray-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </div>
                    </li>

                    <li class="text-sm">
                        <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600"> Basic Tee
                            6-Pack </a>
                    </li>
                </ol>
            </nav>

            <!-- Image gallery -->
            <div class="mt-6 max-w-2xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-x-4">
                <div
                    class="hidden aspect-w-3 aspect-h-4 rounded-lg overflow-hidden lg:block border-2 border-gray-300 border-dashed">
                    <div class="space-y-1 flex flex-col items-center justify-center text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                            viewBox="0 0 48 48" aria-hidden="true">
                            <path
                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                            <label for="file-upload"
                                class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                <span>Upload a file</span>
                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG up to 10MB</p>
                    </div>
                </div>
                <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8 ">
                    <div
                        class="border-2 border-gray-300 border-dashed space-y-1 flex flex-col items-center justify-center text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                            viewBox="0 0 48 48" aria-hidden="true">
                            <path
                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                            <label for="file-upload"
                                class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                <span>Upload a file</span>
                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG up to 10MB</p>
                    </div>
                    {{-- --}}
                    <div
                        class="border-2 border-gray-300 border-dashed space-y-1 flex flex-col items-center justify-center text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                            viewBox="0 0 48 48" aria-hidden="true">
                            <path
                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                            <label for="file-upload"
                                class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                <span>Upload a file</span>
                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG up to 10MB</p>
                    </div>
                </div>
                <div class="aspect-w-4 aspect-h-5 sm:rounded-lg sm:overflow-hidden lg:aspect-w-3 lg:aspect-h-4">
                    <div
                        class="border-2 border-gray-300 border-dashed space-y-1 flex flex-col items-center justify-center text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                            viewBox="0 0 48 48" aria-hidden="true">
                            <path
                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                            <label for="file-upload"
                                class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                <span>Upload a file</span>
                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG up to 10MB</p>
                    </div>
                </div>
            </div>

            <div class="flex items-end justify-end my-4 mx-8">
                <button
                    class="flex items-center gap-2 justify-center active:scale-[.98] text-sm rounded text-right text-white bg-indigo-600 hover:bg-indigo-800 px-4 py-2">
                    <svg class="w-3 h-3 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                        <path
                            d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    Add more photos
                </button>
            </div>

            <!-- Product info -->
            <div
                class="max-w-2xl mx-auto pt-10 pb-16 px-4 sm:px-6 lg:max-w-7xl lg:pt-16 lg:pb-24 lg:px-8 lg:grid lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8">
                <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:tracking-tight sm:text-3xl">Dasoland
                    </h1>
                </div>

                <!-- Options -->
                <div class="mt-4 lg:mt-0 lg:row-span-3">
                    <h2 class="sr-only">Product information</h2>
                    <p class="tracking-tight text-3xl text-gray-900">$192</p>

                    <!-- Reviews -->
                    <div class="mt-6">
                        <h3 class="sr-only">Reviews</h3>
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <!--
                    Heroicon name: solid/star

                    Active: "text-gray-900", Default: "text-gray-200"
                  -->
                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <!-- Heroicon name: solid/star -->
                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <!-- Heroicon name: solid/star -->
                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <!-- Heroicon name: solid/star -->
                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <!-- Heroicon name: solid/star -->
                                <svg class="text-gray-200 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <p class="sr-only">4 out of 5 stars</p>
                            <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117
                                reviews</a>
                        </div>
                    </div>

                    <form class="mt-10">
                        <!-- Colors -->
                        <div>
                            <h3 class="text-sm text-gray-900 font-medium">Color</h3>

                            <fieldset class="mt-4">
                                <legend class="sr-only">Choose a color</legend>
                                <div class="flex items-center space-x-3">
                                    <!--
                      Active and Checked: "ring ring-offset-1"
                      Not Active and Checked: "ring-2"
                    -->
                                    <label
                                        class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400">
                                        <input type="radio" name="color-choice" value="White" class="sr-only"
                                            aria-labelledby="color-choice-0-label">
                                        <span id="color-choice-0-label" class="sr-only"> White </span>
                                        <span aria-hidden="true"
                                            class="h-8 w-8 bg-white border border-black border-opacity-10 rounded-full"></span>
                                    </label>

                                    <!--
                      Active and Checked: "ring ring-offset-1"
                      Not Active and Checked: "ring-2"
                    -->
                                    <label
                                        class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400">
                                        <input type="radio" name="color-choice" value="Gray" class="sr-only"
                                            aria-labelledby="color-choice-1-label">
                                        <span id="color-choice-1-label" class="sr-only"> Gray </span>
                                        <span aria-hidden="true"
                                            class="h-8 w-8 bg-gray-200 border border-black border-opacity-10 rounded-full"></span>
                                    </label>

                                    <!--
                      Active and Checked: "ring ring-offset-1"
                      Not Active and Checked: "ring-2"
                    -->
                                    <label
                                        class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-900">
                                        <input type="radio" name="color-choice" value="Black" class="sr-only"
                                            aria-labelledby="color-choice-2-label">
                                        <span id="color-choice-2-label" class="sr-only"> Black </span>
                                        <span aria-hidden="true"
                                            class="h-8 w-8 bg-gray-900 border border-black border-opacity-10 rounded-full"></span>
                                    </label>
                                </div>
                            </fieldset>
                        </div>

                        <!-- Sizes -->
                        <div class="mt-10">
                            <div class="flex items-center justify-between">
                                <h3 class="text-sm text-gray-900 font-medium">Size</h3>
                                <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Size
                                    guide</a>
                            </div>

                            <fieldset class="mt-4">
                                <legend class="sr-only">Choose a size</legend>
                                <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <label
                                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-gray-50 text-gray-200 cursor-not-allowed">
                                        <input type="radio" name="size-choice" value="XXS" disabled class="sr-only"
                                            aria-labelledby="size-choice-0-label">
                                        <span id="size-choice-0-label"> XXS </span>

                                        <span aria-hidden="true"
                                            class="absolute -inset-px rounded-md border-2 border-gray-200 pointer-events-none">
                                            <svg class="absolute inset-0 w-full h-full text-gray-200 stroke-2"
                                                viewBox="0 0 100 100" preserveAspectRatio="none" stroke="currentColor">
                                                <line x1="0" y1="100" x2="100" y2="0"
                                                    vector-effect="non-scaling-stroke" />
                                            </svg>
                                        </span>
                                    </label>

                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <label
                                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                        <input type="radio" name="size-choice" value="XS" class="sr-only"
                                            aria-labelledby="size-choice-1-label">
                                        <span id="size-choice-1-label"> XS </span>

                                        <!--
                        Active: "border", Not Active: "border-2"
                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                      -->
                                        <span class="absolute -inset-px rounded-md pointer-events-none"
                                            aria-hidden="true"></span>
                                    </label>

                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <label
                                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                        <input type="radio" name="size-choice" value="S" class="sr-only"
                                            aria-labelledby="size-choice-2-label">
                                        <span id="size-choice-2-label"> S </span>

                                        <!--
                        Active: "border", Not Active: "border-2"
                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                      -->
                                        <span class="absolute -inset-px rounded-md pointer-events-none"
                                            aria-hidden="true"></span>
                                    </label>

                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <label
                                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                        <input type="radio" name="size-choice" value="M" class="sr-only"
                                            aria-labelledby="size-choice-3-label">
                                        <span id="size-choice-3-label"> M </span>

                                        <!--
                        Active: "border", Not Active: "border-2"
                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                      -->
                                        <span class="absolute -inset-px rounded-md pointer-events-none"
                                            aria-hidden="true"></span>
                                    </label>

                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <label
                                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                        <input type="radio" name="size-choice" value="L" class="sr-only"
                                            aria-labelledby="size-choice-4-label">
                                        <span id="size-choice-4-label"> L </span>

                                        <!--
                        Active: "border", Not Active: "border-2"
                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                      -->
                                        <span class="absolute -inset-px rounded-md pointer-events-none"
                                            aria-hidden="true"></span>
                                    </label>

                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <label
                                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                        <input type="radio" name="size-choice" value="XL" class="sr-only"
                                            aria-labelledby="size-choice-5-label">
                                        <span id="size-choice-5-label"> XL </span>

                                        <!--
                        Active: "border", Not Active: "border-2"
                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                      -->
                                        <span class="absolute -inset-px rounded-md pointer-events-none"
                                            aria-hidden="true"></span>
                                    </label>

                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <label
                                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                        <input type="radio" name="size-choice" value="2XL" class="sr-only"
                                            aria-labelledby="size-choice-6-label">
                                        <span id="size-choice-6-label"> 2XL </span>

                                        <!--
                        Active: "border", Not Active: "border-2"
                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                      -->
                                        <span class="absolute -inset-px rounded-md pointer-events-none"
                                            aria-hidden="true"></span>
                                    </label>

                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <label
                                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                        <input type="radio" name="size-choice" value="3XL" class="sr-only"
                                            aria-labelledby="size-choice-7-label">
                                        <span id="size-choice-7-label"> 3XL </span>

                                        <!--
                        Active: "border", Not Active: "border-2"
                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                      -->
                                        <span class="absolute -inset-px rounded-md pointer-events-none"
                                            aria-hidden="true"></span>
                                    </label>
                                </div>
                            </fieldset>
                        </div>

                        <button type="submit"
                            class="mt-10 w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add
                            to bag</button>
                    </form>
                </div>

                <div class="py-10 lg:pt-6 lg:pb-16 lg:col-start-1 lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                    <!-- Description and details -->
                    <div>
                        <h3 class="sr-only">Description</h3>

                        <div class="space-y-6">
                            <p class="text-base text-gray-900">Come and stay in this superb duplex T2, in the heart of
                                the historic center of Bordeaux.
                                Spacious and bright, in a real Bordeaux building in exposed stone, you will enjoy all
                                the charms of the city thanks to
                                its ideal location. Close to many shops, bars and restaurants, you can access the
                                apartment by tram A and C and bus
                                routes 27 and 44.
                                ...</p>
                        </div>
                    </div>

                    <div class="mt-10">
                        <h3 class="text-sm font-medium text-gray-900">What this place offers</h3>

                        <div class="mt-4">
                            <ul role="list" class="pl-4 list-disc text-sm space-y-2">
                                <li class="text-gray-400"><span class="text-gray-600">Hand cut and sewn locally</span>
                                </li>

                                <li class="text-gray-400"><span class="text-gray-600">Dyed with our proprietary
                                        colors</span></li>

                                <li class="text-gray-400"><span class="text-gray-600">Pre-washed &amp; pre-shrunk</span>
                                </li>

                                <li class="text-gray-400"><span class="text-gray-600">Ultra-soft 100% cotton</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-10">
                        <h2 class="text-sm font-medium text-gray-900">Details</h2>

                        <div class="mt-4 space-y-6">
                            <p class="text-sm text-gray-600">The 6-Pack includes two black, two white, and two heather
                                gray
                                Basic Tees. Sign up for our subscription service and be the first to get new, exciting
                                colors, like our upcoming &quot;Charcoal Gray&quot; limited release.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-sidebar-layout>
