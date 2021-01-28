<div class="showcase-right">
    <div class="top-service-box">
        @foreach($pages as $page)
        <div style="background-image: url({{ $page->present()->coverImage(500,500,'fit',80) }})">
            <a href="{{ $page->url }}"><h2>{{ $page->title }}</h2>
            <p>{{ strip_tags($page->settings->slogan->{locale()}) }}</p>
            </a>
        </div>
        @endforeach
    </div>
</div>