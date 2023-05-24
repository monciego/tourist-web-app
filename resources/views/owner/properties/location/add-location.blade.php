<form class="p-4" action="{{ route('store-location') }}" method="POST">
    @csrf
    <input name="property_id" type="hidden" value="{{ $properties->id }}">
    <div class="flex gap-4">
        <div class="w-full">
            <x-label for="latitude" :value="__('Latitude')" />
            @if(empty($properties->properties_details->latitude))
            <x-input id="latitude" class="block mt-1 w-full" type="text" name="latitude" readonly required autofocus />
            @else
            <x-input id="latitude" class="block mt-1 w-full" type="text" name="latitude"
                :value="old('latitude', $properties->properties_details->latitude)" readonly required autofocus />
            @endif
        </div>
        <div class="w-full">
            <x-label for="longitude" :value="__('Longitude')" />
            @if(empty($properties->properties_details->longitude))
            <x-input id="longitude" class="block mt-1 w-full" type="text" name="longitude" readonly required
                autofocus />
            @else
            <x-input id="longitude" class="block mt-1 w-full" type="text" name="longitude"
                :value="old('longitude', $properties->properties_details->longitude)" readonly required autofocus />
            @endif
        </div>
    </div>
    <div id="map" class="w-full my-4 h-[400px]"></div>

    <button
        class="mt-4 bg-indigo-500 hover:bg-indigo-600 inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest  active:bg-indigo-900 focus:outline-none focus:border-v-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
        {{ __('Yes, Create it') }}
    </button>
</form>

<script>
     var longitude = {!! json_encode($properties->properties_details->longitude, JSON_NUMERIC_CHECK ) !!};
     var latitude = {!! json_encode($properties->properties_details->latitude, JSON_NUMERIC_CHECK ) !!};

   
     console.log(`longitude ${longitude}`)
     console.log(`latitude ${latitude}`)

     let dasol = { 
            lat: 15.962587, 
            lng: 119.904659 
        };

    if (longitude === null && latitude === null) {
        console.log(dasol)
    } else {
        dasol = { 
            lat: latitude, 
            lng: longitude 
        };
    }

    let map;
    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: 15.962587, lng: 119.904659 },
        zoom: 8,
        scrollwheel: true,
    });
  /*       const dasol = { 
            lat: 15.962587, 
            lng: 119.904659 
        }; */
        let marker = new google.maps.Marker({
            position: dasol,
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
</script>

<script async defer type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap"></script>
