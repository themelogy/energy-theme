@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'gallery.show'])
        <h1 class="title">{{ $album->title }}</h1>
    @endcomponent

    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
            <div class="page-content box-wrapper mt-15">
                <div id="imageGallery">
                    @foreach($album->files("albumImage")->get() as $image)
                        <a data-thumb="{{ \Imagy::getImage($image->filename, "albumImage", ['width' => 90, 'height' => 60, 'mode' => 'fit', 'quality' => 80]) }}"
                           data-src="{{ \Imagy::getImage($image->filename, "albumImage", ['width' => null, 'height' => 800, 'mode' => 'fit', 'quality' => 80]) }}"
                           href="{{ \Imagy::getImage($image->filename, "albumImage", ['width' => null, 'height' => 800, 'mode' => 'resize', 'quality' => 80]) }}">
                            <img src="{{ \Imagy::getImage($image->filename, "albumImage", ['width' => 800, 'height' => 500, 'mode' => 'fit', 'quality' => 80]) }}" alt="{{ $album->title }}" />
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        @include('mediapress::partials.sidebar')
    </div>
@endsection

@push('js-stack')
    {!! Theme::script('plugins/lightslider/js/lightslider.min.js') !!}
    {!! Theme::script('plugins/lightgallery/js/lightgallery-all.min.js') !!}
@endpush

@push('css-stack')
    {!! Theme::style('plugins/lightslider/css/lightslider.min.css') !!}
    {!! Theme::style('plugins/lightgallery/css/lightgallery.min.css') !!}
@endpush

@push('js-inline')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#imageGallery').lightSlider({
                gallery:true,
                item:1,
                loop:true,
                thumbItem:9,
                auto: true,
                slideMargin:0,
                enableDrag: false,
                currentPagerPosition:'left',
                onSliderLoad: function(el) {
                    el.lightGallery({
                        selector: '#imageGallery .lslide',
                        thumbnail:true
                    });
                    //lazyload
                    var showActiveSlides = function (entries) {
                        entries.forEach(function (entry) {
                            if (entry.isIntersecting) {
                                entry.target.src = entry.target.dataset.src;
                                observer.unobserve(entry.target);
                            }
                        });
                    };

                    var imageWidth = el.find("li").outerWidth() + "px";
                    var observer = new window.IntersectionObserver(showActiveSlides, {
                        root: el.parent()[0],
                        rootMargin: "0px "+ imageWidth + " 0px " + imageWidth
                    });
                    el.find("li img").each(function () {
                        observer.observe(this);
                    });
                }
            });
        });
    </script>
@endpush