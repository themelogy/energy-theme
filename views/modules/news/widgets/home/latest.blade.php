<div class="equal-column latest-news-area mt-15 box-wrapper sm-mrgright-15 xs-mrgright-15">

    <div class="box-title">
        <h2>@lang('themes::news.widgets.latest')</h2>
    </div>
    <div class="latest-news owl-carousel">
        @foreach($posts as $post)
        <div class="item">
            <a href="{{ $post->url }}">
                <img class="owl-lazy" data-src="{{ $post->present()->firstImage(223,82,'fit',80) }}" alt="{{ $post->title }}"/>
            </a>
            <div class="date-meta">{{ $post->created_at->formatLocalized('%d %B %Y') }}</div>
            <a href="{{ $post->url }}"><h4>{{ $post->title }}</h4></a>
            <p>{{ strip_tags($post->intro) }}</p>
        </div>
            <div class="item">
                <a href="{{ $post->url }}">
                    <img class="owl-lazy" data-src="{{ $post->present()->firstImage(223,82,'fit',80) }}" alt="{{ $post->title }}"/>
                </a>
                <div class="date-meta">{{ $post->created_at->formatLocalized('%d %B %Y') }}</div>
                <a href="{{ $post->url }}"><h4>{{ $post->title }}</h4></a>
                <p>{{ strip_tags($post->intro) }}</p>
            </div>
        @endforeach
    </div>

</div>