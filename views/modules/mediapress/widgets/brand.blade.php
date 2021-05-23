<div class="widget_pages">
    <h2>@lang('themes::mediapress.titles.brands')</h2>
    <ul>
        @foreach($brands as $brand)
            <li>
                <a class="{{ Request::segment(3) == $brand->slug || Request::segment(4) == $brand->slug ? 'active' : '' }}" href="{{ $brand->url }}">{{ $brand->title }}</a>
            </li>
        @endforeach
    </ul>
</div>