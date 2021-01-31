@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'mediapress.index'])
        <h1 class="title">{{ trans('themes::mediapress.titles.mediapress') }}</h1>
    @endcomponent
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
            <div class="box-wrapper mt-15">
                <div class="single-page-item">
                    <!-- row -->
                    <div class="row">
                        <!-- col-md-12 -->
                        <div class="col-md-12">
                            <div class="post">
                                <h1 class="article-title">{{ $media->title }}</h1>
                                <div class="post-meta clearfix">
                                    <ul class="post-meta">
                                        <li><i class="fa fa-paperclip"></i> <a href="{{ $media->desc }}">{{ $media->brand }}</a></li>
                                        <li><i class="fa fa-calendar"></i> <a href="#">{{ $media->created_at->formatLocalized('%d %B %Y') }}</a></li>
                                    </ul>
                                </div>

                                <div class="post-article">
                                    <img class="img-thumbnail mb-20 mrg-20 floatleft lazy" data-src="{{ $media->present()->firstImage(800,null,'resize',80) }}" alt="{{ $media->title }}">
                                    {!! $media->description !!}
                                </div>
                            </div>
                        </div>
                        <!-- /col-md-12 -->
                    </div>
                    <!-- /row -->

                </div>
            </div>
        </div>
        @include('mediapress::partials.sidebar')
    </div>
@endsection
