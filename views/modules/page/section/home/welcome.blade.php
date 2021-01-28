<div class="row">
    <div class="col-md-3 col-lg-4 less-pad-right">
    @if(isset($page->settings->show_welcome))
        @findPage($page->settings->show_welcome, 'home.welcome')
    @endif
    </div>
    <!-- .col-md-5 -->

    <div class="col-md-9 col-lg-8">
        @newsLatestPosts(6, 'home.latest')
    </div>
    <!-- .col-md-7 -->
</div>
<!-- .row -->