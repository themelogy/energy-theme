<div id="hero-slider-1" class="carousel slide slider-style-1 lazy-load" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @foreach($slides as $slide)
        <li data-target="#hero-slider-1" data-slide-to="{{ $loop->iteration }}" class="{{ $loop->first ? "active" : "" }}"></li>
        @endforeach
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        @foreach($slides as $slide)
        <div class="item active">
            <img data-src="{{ $slide->present()->firstImage(665,470,'fit',80) }}" alt="{{ $slide->sub_title }}" class="lazy">

            <div class="carousel-caption">
                <h2 class="slider-title" style="color: {{ $slide->settings->title_color }};">{{ $slide->sub_title }}</h2>

                <div class="slider-small-text" style="color: {{ $slide->settings->content_color }};">
                    {{ $slide->content }}
                </div>

            </div>
        </div>
        @endforeach

    </div>

    <!-- Controls -->

    <a class="left carousel-control" href="#hero-slider-1" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">@lang('themes::theme.buttons.previous')</span>
    </a>
    <a class="right carousel-control" href="#hero-slider-1" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">@lang('themes::theme.buttons.next')</span>
    </a>

</div>