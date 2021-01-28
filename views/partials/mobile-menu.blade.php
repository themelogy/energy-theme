<div class="offcanvas-wrapper hidden-lg hidden-md hidden-sm sidebar-offcanvas">
    <div class="sidebar-nav">
        <div class="sidebar-header">
            <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas">&times;</button>
            <div class="mobile-logo">
                <a href="@homepage"><img src="{{ Theme::url('img/logo/logo.png') }}" alt="@setting('theme::company-name')"/></a>
            </div>
        </div>
        {!! Menu::render('header', \Themes\Energy\Presenter\MobileMenuPresenter::class) !!}
    </div>
</div>