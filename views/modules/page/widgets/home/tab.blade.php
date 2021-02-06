<div class="equal-column tab-area mt-15 box-wrapper  sm-mrgright-15 xs-mrgright-15">
    <div id="tabs" class="home-tab">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="active"><a href="#video" data-toggle="tab">@lang('themes::video.title.tab')</a></li>
            <li><a href="#galeri" data-toggle="tab">@lang('themes::gallery.titles.gallery')</a></li>
            <li><a href="#duyurular" data-toggle="tab">@lang('themes::news.widgets.tabs')</a></li>
            @foreach($pages as $page)
            <li><a href="#{{ $page->slug }}" data-toggle="tab">{{ $page->title }}</a></li>
            @endforeach
        </ul>
        <!-- Tab panes -->
        <div class="tab_container">
            <div class="tab-content">
                <div class="tab-pane clearfix active" id="video">
                    @videoLatest(6, 'home.latest')
                </div>
                <div class="tab-pane clearfix" id="galeri">
                    @galleryByCategory("basinda-biz", 6, "home.latest")
                </div>
                <div class="tab-pane clearfix" id="duyurular">
                    @newsFindByCategory("duyurular", 6,"home.tab-latest")
                </div>

                @foreach($pages as $page)
                <div class="tab-pane clearfix" id="{{ $page->slug }}">
                    @if($image = $page->present()->coverImage(300,240,'fit',80))
                    <img class="pull-left lazy" data-src="{{ $image }}" alt="{{ $page->title }}"/>
                    @endif
                    <h4>{{ $page->title }}</h4>
                    {!! str_limit(strip_tags($page->body),500) !!}
                    <div class="readmore">
                        <a href="{{ $page->url }}">@lang('global.buttons.read more')</a>
                    </div>
                </div>
                @endforeach

            </div>
            <!-- .tab-content -->
        </div>
        <!-- .tab_container -->
    </div>
    <!-- .home-tab -->
</div>
<!-- .tab-area -->