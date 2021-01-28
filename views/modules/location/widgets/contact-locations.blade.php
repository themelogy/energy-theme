<div class="contact-locations">
    @foreach($locations as $location)
        <div class="location">
            <h4>{{ $location->name }}</h4>
            <div class="d-flex">
                <div class="icon m-r-10">
                    <i class="fa fa-map-marker"></i>
                </div>
                <div class="info">
                    {{ $location->present()->address }}
                </div>
            </div>
            <div class="d-flex">
                <div class="icon m-r-10">
                    <i class="fa fa-phone"></i>
                </div>
                <div class="info">
                    {{ $location->phone1 }}
                </div>
            </div>
            <div class="d-flex">
                <div class="icon m-r-10">
                    <i class="fa fa-fax"></i>
                </div>
                <div class="info">
                    {{ $location->fax }}
                </div>
            </div>
        </div>
    @endforeach
</div>

@push('js-inline1')
    <div id="map{{ $location->id }}" style="height: 200px;"></div>
    <script>
        function initMap() {
            @foreach($locations as $location)
            var coordinate{{ $location->id }} = {lat: {{ $location->lat }}, lng: {{ $location->long }} };
            var map{{ $location->id }} = new google.maps.Map(document.getElementById('map{{ $location->id }}'), {
                zoom: 15,
                center: coordinate{{ $location->id }},
                zoomControl: false,
                scaleControl: false,
                mapTypeControl: false,
                streetViewControl: false
            });
            var marker{{ $location->id }} = new google.maps.Marker({
                position: coordinate{{ $location->id }},
                map: map{{ $location->id }}
            });
            @endforeach
        }
    </script>
    <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpvcV4WyemrP7OUfrDuXTkEaazIzwqe1U&callback=initMap&libraries=&v=weekly"
            defer
    ></script>
@endpush