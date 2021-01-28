<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
<head>
    @include('partials.metadata')
</head>
<body>
<div class="wrapper">
    <div class="row row-offcanvas row-offcanvas-left">
        <div class="inner-wrapper">
            <div class="container">
                @include('partials.header')
                @yield('content')
                @include('partials.footer')
            </div>
        </div>
        @include('partials.mobile-menu')
    </div>
</div>
@include('partials.scripts')
</body>
</html>