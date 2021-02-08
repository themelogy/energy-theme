<div class="row">
    <div class="col-md-8 col-sm-12 col-xs-12 less-pad-right">
        <div class="equal-column tab-area mt-15 box-wrapper  sm-mrgright-15 xs-mrgright-15">
            <div id="tabs" class="home-tab">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    @videoLatest(6, 'home.tab-head')
                    @galleryByCategory("basin-odasi", 6, "home.tab-head")
{{--                     @mediapressLatest(6,"home.tab-head") --}}
                    @pageFindByOptions('settings.show_service_tab', 'home.tab-head')
                </ul>
                <!-- Tab panes -->
                <div class="tab_container">
                    <div class="tab-content">
                        <div class="tab-pane clearfix active" id="video">
                            @videoLatest(6, 'home.tab-content')
                        </div>
                        <div class="tab-pane clearfix" id="galeri">
                            @galleryLatest(6, "home.tab-content")
                        </div>
{{--                         <div class="tab-pane clearfix" id="basin-odasi">
                            @mediapressLatest(6,"home.tab-content")
                        </div> --}}
                        @pageFindByOptions('settings.show_service_tab', 'home.tab-content')
                    </div>
                    <!-- .tab-content -->
                </div>
                <!-- .tab_container -->
            </div>
            <!-- .home-tab -->
        </div>
        <!-- .tab-area -->
    </div>
    <!-- .col-md-8 -->

    <div class="col-md-4 col-sm-12 col-xs-12">
        @pageFindByOptions('settings.show_service_accordion', 'home.accordion')
    </div>
    <!-- col-md-4 -->
</div>
<!-- .row -->