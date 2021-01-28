<!--Start script-->
{{--{!! Theme::script('js/jquery.min.js') !!}--}}
{{--{!! Theme::script('js/bootstrap.min.js') !!}--}}
{{--{!! Theme::script('js/jquery.scrollUp.js') !!}--}}
{{--{!! Theme::script('js/offcanvas.js') !!}--}}
{{--{!! Theme::script('js/jquery.prettyPhoto.js') !!}--}}
{{--{!! Theme::script('js/owl.carousel.js') !!}--}}
{{--{!! Theme::script('js/jquery.matchHeight.js') !!}--}}
<!--End script    -->
@stack('css-stack')
@stack('css-inline')
<script src="{{ mix('/themes/energy/js/combined.js') }}"></script>
<script src="{{ mix('/themes/energy/js/script.min.js') }}"></script>
@stack('js-stack')
@stack('js-inline')