<div class="widget_pages">
    <h2>@lang('themes::news.titles.categories')</h2>
    <ul>
        @foreach($categories as $category)
        <li><a href="{{ $category->url }}">{{ $category->name }} <small >({{ $category->posts()->count() }})</small></a></li>
        @endforeach
        <li>
            <a href="{{ route('video.media.index') }}">@lang('themes::video.meta.title')</a>
        </li>
        <li>
            <a href="{{ route('gallery.album.index') }}">@lang('themes::gallery.titles.gallery')</a>
        </li>
    </ul>
</div>