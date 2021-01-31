<!--Top Header-->
<div class="header">
    <div class="header-top">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo">
                    <a title="@setting('theme::company-name')" href="@homepage">
                        <img alt="@setting('theme::company-name')" src="{{ Theme::url('img/logo/logo.svg') }}" class="logo-img">
                    </a>
                </div>
                <!-- //logo -->
            </div>
            <!-- //col-md-3 -->

            <div class="col-sm-offset-5 col-sm-3 header-right">
                @include('components.social')
                <div>
                    <ul>
                        <li>
                            <div class="dropdown language" style="position: relative;z-index: 9999;">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <a href="#"><span class="flag-icon flag-icon-{{ LaravelLocalization::getCurrentLocale() == "en" ? "gb" : LaravelLocalization::getCurrentLocale() }}"></span> {{ mb_strtoupper(LaravelLocalization::getCurrentLocaleNative()) }} </a>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="position: absolute;">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $locale => $supportedLocale)
                                        <li><a href="{{ url($locale) }}"><span class="flag-icon flag-icon-{{ $locale == "en" ? "gb" : $locale }}"></span> {{ mb_strtoupper($supportedLocale['native']) }} </a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- //col-md-9 -->
        </div>
        <!-- //row -->
    </div>
    <!-- //header-top -->

    <!-- Navigation Area -->
    <div class="navbar navbar-default mainnav">

        <!-- NAVBAR HEADER -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target="#myNavmenu"
                    data-canvas="#myNavmenuCanvas" data-placement="left">
                <i class="fa fa-bars"></i>
            </button>

            <!-- HEAD SEARCH -->
            <div class="head-search">
                <form method="post" action="#" class="form-search">
                    <div class="search">
                        <i class="fa fa-search"></i><input type="text" size="20" class="form-control " maxlength="20" name="searchword">
                    </div>
                </form>
            </div>
            <!-- //HEAD SEARCH -->
        </div>
        <!-- //NAVBAR HEADER -->

        <!-- NAVBAR MAIN -->
        <nav class="navbar-collapse collapse">
            {!! Menu::render('header', \Themes\Energy\Presenter\HeaderMenuPresenter::class) !!}
        </nav>
        <!-- //navbar-collapse -->
    </div>
    <!-- //navbar -->
</div>