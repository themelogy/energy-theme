<div class="widget_pages">
{{--    <h2>@lang('themes::news.titles.categories')</h2>--}}
    <ul>
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