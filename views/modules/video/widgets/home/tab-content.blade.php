<div class="video-latest owl-carousel">
    @foreach($medias as $media)
        <div class="item">
            <a href="{{ $media->url }}">
                <img class="owl-lazy" data-src="{{ $media->present()->firstImage(223,82,'fit',80) }}" alt="{{ $media->title }}"/>
            </a>
            <div class="date-meta">{{ $media->created_at->formatLocalized('%d %B %Y') }}</div>
            <a href="{{ $media->url }}"><h4>{{ $media->title }}</h4></a>
            <p>{{ str_limit(strip_tags($media->content), 150) }}</p>
        </div>
    @endforeach
</div>