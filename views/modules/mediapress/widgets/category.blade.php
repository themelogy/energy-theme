<div class="widget_pages">
{{--    <h2>@lang('themes::news.titles.categories')</h2>--}}
    <ul>
        <li>
            <a href="{{ route('video.media.index') }}">@lang('themes::video.meta.title')</a>
        </li>
        <li>
            <a href="{{ route('gallery.album.index') }}">@lang('themes::gallery.titles.gallery')</a>
        </li>
        @foreach($categories as $category)
            <li>
                <a class="{{ Request::segment(3) == $category->slug || Request::segment(4) == $category->slug ? 'active' : '' }}" href="{{ $category->url }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>
    @if(Request::segment(3) == $category->slug)
        @mediapressYearsByCategory($category, 'category-years')
    @endif
</div>