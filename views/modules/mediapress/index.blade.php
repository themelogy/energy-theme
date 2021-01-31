@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'mediapress.index'])
        <h1 class="title">{{ trans('themes::mediapress.titles.mediapress') }}</h1>
    @endcomponent
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
            <div class="box-wrapper mt-15">
                @foreach($medias as $media)
                    <div class="blog-item ">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="post-thumb floatleft">
                                <img class="lazy" data-src="{{ $media->present()->firstImage(249,176,'fit',80) }}" alt="{{ $media->title }}">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="post">
                                <h2 class="article-title"><a href="{{ $media->url }}">{{ $media->title }}</a>
                                </h2>

                                <div class="post-meta clearfix">
                                    <ul>
                                        <li><i class="fa fa-paperclip"></i> <a href="{{ $media->desc }}">{{ $media->brand }}</a></li>
                                        <li><i class="fa fa-calendar"></i> {{ $media->created_at->formatLocalized('%d %B %Y') }}</li>
                                    </ul>
                                </div>
                                <div class="post-article">
                                    <p>{!! str_limit(strip_tags($media->description), 200) !!}</p>
                                </div>
                                <div class="readmore"><a href="{{ $media->url }}">@lang('global.buttons.read more')</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @include('mediapress::partials.sidebar')
    </div>
@endsection
