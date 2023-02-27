<x-app-layout>
    @section('title', 'Dasol Tourism - Home')

    <div class="bg-white py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-lg font-semibold leading-8 tracking-tight text-indigo-600">Municipality of Dasol</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Emergency Hotlines</p>
                <p class="mt-6 text-lg font-bold leading-8 text-gray-600">
                    Philippine National Hotline:
                    <a href="tel:911" class="text-red-600 underline">911</a>
                </p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-16 lg:max-w-4xl">
                <dl class="grid max-w-xl grid-cols-1 gap-y-6 gap-x-8 lg:max-w-none lg:grid-cols-2 lg:gap-y-10">
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute top-0 left-0 flex h-12 w-12 items-center justify-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/42/Bureau_of_Fire_Protection.png/210px-Bureau_of_Fire_Protection.png"
                                    alt="BFP">
                            </div>
                            Bureau of Fire Protection
                        </dt>
                        <a href="tel:09102516212"
                            class="mt-2 text-base leading-7 text-indigo-600 underline">09102516212</a>
                        <span>/</span>
                        <a href="tel:09171858611"
                            class="mt-2 text-base leading-7 text-indigo-600 underline">09171858611</a>
                        <div class="flex mt-2 gap-3">
                            <a target="__blank" href="https://www.facebook.com/dasolbfp.pangasinan.9">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z"
                                        fill="#2E3A59"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute top-0 left-0 flex h-12 w-12 items-center justify-center">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="Municipal Tourism Office">
                            </div>
                            Municipal Tourism Office
                        </dt>
                        <a href="tel:09705784701"
                            class="mt-2 text-base leading-7 text-indigo-600 underline">09705784701</a>
                        <span>/</span>
                        <a href="tel:09451245700"
                            class="mt-2 text-base leading-7 text-indigo-600 underline">09451245700</a>
                        <div class="flex mt-2 gap-3">
                            <a target="__blank" href="https://www.facebook.com/dasolpangasinan.gov.ph">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z"
                                        fill="#2E3A59"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute top-0 left-0 flex h-12 w-12 items-center justify-center">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="Office of the Mayor">
                            </div>
                            Office of the Mayor
                        </dt>
                        <a href="tel:09998541255"
                            class="mt-2 text-base leading-7 text-indigo-600 underline">09998541255</a>
                        <div class="flex mt-2 gap-3">
                            <a target="__blank" href="https://www.facebook.com/dasolmytownyourtown">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z"
                                        fill="#2E3A59"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute top-0 left-0 flex h-12 w-12 items-center justify-center">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="SPASS">
                            </div>
                            SPASS
                        </dt>
                        <a href="tel:09209614296"
                            class="mt-2 text-base leading-7 text-indigo-600 underline">09209614296</a>
                        <div class="flex mt-2 gap-3">
                            <a target="__blank" href="https://www.facebook.com/dasolmytownyourtown">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z"
                                        fill="#2E3A59"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute top-0 left-0 flex h-12 w-12 items-center justify-center">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="Rural Health Unit">
                            </div>
                            Dasol Rural Health Unit
                        </dt>
                        <a href="tel:09394608329"
                            class="mt-2 text-base leading-7 text-indigo-600 underline">09394608329</a>
                        <div class="flex mt-2 gap-3">
                            <a target="__blank" href="https://www.facebook.com/rhu.dasol.7">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z"
                                        fill="#2E3A59"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute top-0 left-0 flex h-12 w-12 items-center justify-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Philippine_National_Police_seal.svg/210px-Philippine_National_Police_seal.svg.png"
                                    alt="PNP">
                            </div>
                            Dasol PNP
                        </dt>
                        <a href="tel:09985985100"
                            class="mt-2 text-base leading-7 text-indigo-600 underline">09985985100</a>
                        <div class="flex mt-2 gap-3">
                            <a target="__blank" href="https://www.facebook.com/dasolmytownyourtown">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z"
                                        fill="#2E3A59"></path>
                                </svg>
                            </a>
                        </div>
                    </div>


                </dl>
            </div>
            <div id="map" class="w-full my-16 rounded-md h-[400px]"></div>
        </div>
    </div>


    <script type="text/javascript">
        function initMap() {
                const myLatLng = { lat: 15.962587, lng: 119.904659 };
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 11,
                    center: myLatLng,
                });

                var locations = {{ Js::from($locations) }};

                var infowindow = new google.maps.InfoWindow();

                var marker, i;

                for (i = 0; i < locations.length; i++) {
                      marker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        map: map
                      });

                      google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                          infowindow.setContent(locations[i][0]);
                          infowindow.open(map, marker);
                        }
                      })(marker, i));

                }
            }

            window.initMap = initMap;
    </script>
    {{-- <script>
        let map;
    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: 15.962587, lng: 119.904659 },
        zoom: 8,
        scrollwheel: true,
    });
        const uluru = { lat: 15.962587, lng: 119.904659 };
        let marker = new google.maps.Marker({
            position: uluru,
            map: map,
            draggable: true,
        });
        google.maps.event.addListener(marker, "position_changed", function () {
            let lat = marker.position.lat();
            let lng = marker.position.lng();
            $("#latitude").val(lat);
            $("#longitude").val(lng);
        });
        google.maps.event.addListener(map, "click", function (event) {
            pos = event.latLng;
            marker.setPosition(pos);
        });
    }
    </script> --}}

    <script async defer type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap"></script>

</x-app-layout>