<div class="equal-column tab-area mt-15 box-wrapper  sm-mrgright-15 xs-mrgright-15">
    <div id="tabs" class="home-tab">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            @foreach($pages as $page)
            <li class="{{ $loop->first ? 'active' : '' }}"><a href="#{{ $page->slug }}" data-toggle="tab">{{ $page->title }}</a></li>
            @endforeach
            <li><a href="#duyurular" data-toggle="tab">@lang('themes::news.widgets.tabs')</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab_container">
            <div class="tab-content">
                @foreach($pages as $page)
                <div class="tab-pane clearfix {{ $loop->first ? 'active' : '' }}" id="{{ $page->slug }}">
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
                <div class="tab-pane clearfix" id="duyurular">
                    @newsFindByCategory("duyurular", 6,"home.tab-latest")
                </div>
            </div>
            <!-- .tab-content -->
        </div>
        <!-- .tab_container -->
    </div>
    <!-- .home-tab -->

</div>
<!-- .tab-area -->