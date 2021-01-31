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
                                    <a href="{{ $post->present()->firstImage(800,null,'resize',80) }}" data-lightbox="{{ $post->slug }}">
                                    <img class="img-thumbnail mb-20 mrg-20 floatleft lazy" data-src="{{ $post->present()->firstImage(400,null,'resize',80) }}" alt="{{ $post->title }}">
                                    </a>
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

@push('js-stack')
    {!! Theme::script('plugins/lightbox2/js/lightbox.min.js') !!}
@endpush

@push('css-stack')
    {!! Theme::style('plugins/lightbox2/css/lightbox.min.css') !!}
@endpush