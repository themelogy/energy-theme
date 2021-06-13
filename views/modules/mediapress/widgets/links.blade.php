@if(isset($digitals))
    <div class="table-responsive">
        <table class="table">
            @foreach($digitals as $digital)
                <tr>
                    <td>{{ $digital['date'] }}</td>
                    <td>{{ $digital['author'] }}</td>
                    <td><a target="_blank" href="{{ $digital['website'] }}">{{ $digital['title'] }}</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endif

@if(isset($physicals))
    <div class="table-responsive">
        <table class="table">
            @foreach($physicals as $physical)
                <tr>
                    <td>{{ $physical['date'] }}</td>
                    <td>{{ $physical['author'] }}</td>
                    <td><a href="{{ @$physical['image'] }}" data-lightbox="{{ $physical['title'] }}" data-title="{{ $physical['title'] }}">{{ $physical['title'] }}</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endif


@push('js-stack')
    {!! Theme::script('plugins/lightbox2/js/lightbox.min.js') !!}
@endpush

@push('css-stack')
    {!! Theme::style('plugins/lightbox2/css/lightbox.min.css') !!}
@endpush