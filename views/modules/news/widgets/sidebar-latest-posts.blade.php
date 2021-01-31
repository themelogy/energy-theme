<div class="widget_recent_entries">
    <h2>@lang('themes::news.titles.latest posts')</h2>
    <ul class="thumb-list">
        @foreach($posts as $post)
            <p><a href="{{ $post->url }}">{{ $post->title }}</a><br/>{{ $post->created_at->formatLocalized('%d %B %Y') }}</p>
        @endforeach
    </ul>
</div>