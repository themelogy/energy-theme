@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'news.show'])
        {{ $post->title }}
    @endcomponent
    <div class="row">
        <!-- col-md-9 -->
        <div class="col-md-9">
            <!-- box-wrapper -->
            <div class="box-wrapper mt-15">
                <!-- single-page-item -->
                <div class="single-page-item">
                    <!-- row -->
                    <div class="row">
                        <!-- col-md-12 -->
                        <div class="col-md-12">
                            <div class="post">
                                <h1 class="article-title">{{ $post->title }}</h1>
                                <div class="post-meta clearfix">
                                    <ul class="post-meta">
                                        <li><i class="fa fa-th-large"></i> <a href="{{ $post->category->url }}">{{ $post->category->name }}</a></li>
                                        <li><i class="fa fa-calendar"></i> <a href="#">{{ $post->created_at->formatLocalized('%d %B %Y') }}</a></li>
                                    </ul>
                                </div>

                                <div class="post-article">
                                    @if($post->files('newsImage')->count()>1)
                                       <div id="imageGallery">
                                            @foreach($post->files("newsImage")->get() as $image)
                                                <a data-thumb="{{ \Imagy::getImage($image->filename, "pageImage", ['width' => 90, 'height' => 60, 'mode' => 'fit', 'quality' => 80]) }}"
                                                   data-src="{{ \Imagy::getImage($image->filename, "pageImage", ['width' => 1100, 'height' => 800, 'mode' => 'fit', 'quality' => 80]) }}"
                                                   href="{{ \Imagy::getImage($image->filename, "pageImage", ['width' => 1100, 'height' => 800, 'mode' => 'fit', 'quality' => 80]) }}">
                                                    <img src="{{ \Imagy::getImage($image->filename, "pageImage", ['width' => 800, 'height' => 500, 'mode' => 'fit', 'quality' => 80]) }}" alt="{{ $post->title }}" />
                                                </a>
                                            @endforeach
                                       </div>
                                       <div class="clearfix" style="margin-bottom: 20px;"></div>
                                    @else
                                    <a href="{{ $post->present()->firstImage(800,null,'resize',80) }}" data-lightbox="{{ $post->slug }}">
                                    <img class="img-thumbnail mb-20 mrg-20 floatleft lazy" data-src="{{ $post->present()->firstImage(400,null,'resize',80) }}" alt="{{ $post->title }}">
                                    </a>
                                    @endif
                                    {!! $post->content !!}
                                </div>
                            </div>
                        </div>
                        <!-- /col-md-12 -->
                    </div>
                    <!-- /row -->

                </div>
                <!-- /single-page-item -->
            </div>
            <!-- /box-wrapper -->
        </div>
        <!-- /col-md-9 -->

        <!-- col-md-3 -->
        @include('news::partials.sidebar')
        <!-- /col-md-3 -->

    </div>
@endsection

@if($post->files('newsImage')->count()>1)
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
                pause: 7000,
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
@else
@push('js-stack')
    {!! Theme::script('plugins/lightbox2/js/lightbox.min.js') !!}
@endpush

@push('css-stack')
    {!! Theme::style('plugins/lightbox2/css/lightbox.min.css') !!}
@endpush
@endif
