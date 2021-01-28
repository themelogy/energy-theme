<!--Top Header-->
<div class="header">
    <div class="header-top">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo">
                    <a title="@setting('theme::company-name')" href="@homepage">
                        <img alt="@setting('theme::company-name')" src="{{ Theme::url('img/logo/logo.png') }}" class="logo-img">
                    </a>
                </div>
                <!-- //logo -->
            </div>
            <!-- //col-md-3 -->

            <div class="col-sm-8">
                <ul>
                    <li>
                        <div class="dropdown language" style="position: relative;z-index: 9999;">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <a href="#"><span class="flag-icon flag-icon-tr"></span> Türkçe </a>
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="position: absolute;">
                                <li><a href="#"><span class="flag-icon flag-icon-tr"></span> Türkçe </a></li>
                                <li><a href="#"><span class="flag-icon flag-icon-gb"></span> English </a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        @include('components.social')
                    </li>
                </ul>
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
                <form method="post" action="http://demo2.themehippo.com/html/industrix/search" class="form-search">
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