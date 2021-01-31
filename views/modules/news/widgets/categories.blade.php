<div class="widget_pages">
    <h2>@lang('themes::news.titles.categories')</h2>
    <ul>
        @foreach($categories as $category)
        <li><a href="{{ $category->url }}">{{ $category->name }} <small >({{ $category->posts()->count() }})</small></a></li>
        @endforeach
    </ul>
</div>