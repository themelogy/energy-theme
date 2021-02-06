@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'mediapress.view'])
        <h1 class="title">{{ $media->title }}</h1>
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
                                <h1 class="article-title">
                                    {{ $media->title }}
                                    <span class="badge"><i class="fa fa-paperclip"></i> {{ $media->brand }}</span>
                                    <span class="badge"><i class="fa fa-calendar"></i> {{ $media->created_at->formatLocalized('%d %B %Y') }}</span>
                                </h1>
                                <div class="post-article">
                                    @if($image = $media->present()->firstImage(800,null,'resize',80))
                                        <img class="img-thumbnail mb-20 mrg-20 floatleft lazy" data-src="{{ $image }}" alt="{{ $media->title }}">
                                    @endif
                                    {!! $media->description !!}

                                    @if($media->media_desc)
                                    <hr/>
                                    {{ $media->media_desc }}
                                    @endif
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
