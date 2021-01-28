<div class="row">
    <div class="col-md-12 locations">
        @foreach($locations as $location)
            <div class="location">
                <h5>{{ $location->name }}</h5>
                <ul>
                    <li><i class="fa fa-map-marker"></i> {{ $location->present()->address }}</li>
                    <li><i class="fa fa-phone"></i> {{ $location->phone1 }}</li>
                    <li><i class="fa fa-fax"></i> {{ $location->fax }}</li>
                </ul>
            </div>
        @endforeach
    </div>
</div>