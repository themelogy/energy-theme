<div class="equal-column mt-15 box-wrapper sm-mrgright-15 xs-mrgright-15">
    <article>
        <header>
            <img alt="{{ $page->title }}" data-src="{{ $page->present()->coverImage(620,310,'fit',80) }}" class="img-responsive lazy">
        </header>

        <div class="welcome-text">
            <h2>{{ $page->title }}</h2>

            <p>{{ $page->settings->sub_title->{locale()} }}</p>

            <div class="readmore"><a href="{{ $page->url }}">@lang('global.buttons.read more')</a></div>
        </div>
        <!-- //welcome-text -->
    </article>
</div>