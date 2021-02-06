<div class="video-latest owl-carousel">
    @foreach($albums as $album)
        <div class="item">
            <a href="{{ $album->url }}">
                <img class="owl-lazy" data-src="{{ $album->present()->firstImage(600,350,'fit',80) }}" alt="{{ $album->title }}"/>
            </a>
            <div class="date-meta">{{ $album->created_at->formatLocalized('%d %B %Y') }}</div>
            <a href="{{ $album->url }}"><h4>{{ $album->title }}</h4></a>
            <p>{{ str_limit(strip_tags($album->content), 150) }}</p>
        </div>
    @endforeach
</div>