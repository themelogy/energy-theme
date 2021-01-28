<div class="about-content-area mt-20">
    <div class="row">
        <div class="col-md-9">
            <div class="page-content box-wrapper equal-column">
                <section class="page-article-content clearfix">
                    @include('page::partials._body')
                </section>
            </div>
        </div>
        <div class="col-md-3">
            <div class="sidebar box-wrapper equal-column">
                @parentMenu($page,'sidebar.menu')
            </div>
        </div>
    </div>
</div>