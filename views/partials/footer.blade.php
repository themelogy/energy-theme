@portfolioBrands(7, 'clients')
@inject("menuService", "Modules\Menu\Services\MenuService")
<div class="footer-widget box-wrapper ">
    <div class="row">
        <div class="col-md-3">
            <div class="custom-menu-widget">
                <h2 class="widget-title ">{{ $menuService->title('kurumsal') }}</h2>
                <div class="custom-widget">
                    {!! Menu::render("kurumsal", \Themes\Energy\Presenter\FooterMenuLinksPresenter::class) !!}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="custom-menu-widget">
                <h2 class="widget-title ">{{ $menuService->title('eys') }}</h2>
                <div class="custom-widget">
                    {!! Menu::render("eys", \Themes\Energy\Presenter\FooterMenuLinksPresenter::class) !!}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="custom-menu-widget">
                <h2 class="widget-title ">{{ $menuService->title('tanitim') }}</h2>
                <div class="custom-widget">
                    {!! Menu::render("tanitim", \Themes\Energy\Presenter\FooterMenuLinksPresenter::class) !!}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="custom-menu-widget">
                <h2 class="widget-title ">{{ $menuService->title('ik') }}</h2>
                <div class="custom-widget">
                    {!! Menu::render("ik", \Themes\Energy\Presenter\FooterMenuLinksPresenter::class) !!}
                </div>
            </div>
        </div>
    </div>
    <!-- //row -->

{{--    @locations('footer-locations')--}}

</div>
<!-- .footer-widget -->

<div class="copyright-text box-wrapper">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="left-copy-text">
                <p>Tüm hakları saklıdır. 2021 <a target="_blank" href="https://www.qbicom.com.tr/" title="Qbicom Digital">Qbicom Digital</a></p>
            </div>
            <!-- //left-copy-text -->
        </div>
        <!-- //col-md-6 -->

        <div class="col-md-6 col-sm-6 hidden-xs">
            <div class="footer-right">
                <div class="pull-right social-fix">
                    @includeIf('components.social')
                </div>
                <!-- //social-icon -->
            </div>
            <!-- //footer-right -->
        </div>
        <!-- //col-md-6 -->

    </div>
    <!-- //row -->
</div>
<!-- .copyright-text -->