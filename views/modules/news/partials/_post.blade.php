<div class="blog-item ">
    <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="post-thumb floatleft">
            <img class="lazy" data-src="{{ $post->present()->firstImage(249,176,'fit',80) }}" alt="{{ $post->title }}">
        </div>
    </div>
    <div class="col-md-8">
        <div class="post">
            <h2 class="article-title"><a href="{{ $post->url }}">{{ $post->title }}</a>
            </h2>

            <div class="post-meta clearfix">
                <ul>
                    <li><a href="{{ $post->category->url }}">{{ $post->category->name }}</a></li>
                    <li><i class="fa fa-calendar"></i> {{ $post->created_at->formatLocalized('%d %B %Y') }}</li>
                </ul>
            </div>
            <div class="post-article">
                <p>{{ strip_tags($post->intro) }}</p>
            </div>
            <div class="readmore"><a href="{{ $post->url }}">@lang('global.buttons.read more')</a></div>
        </div>
    </div>
</div>