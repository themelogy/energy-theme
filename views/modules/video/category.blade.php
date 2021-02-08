@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'video.category'])
        <h1 class="title">{{ $category->title }}</h1>
    @endcomponent
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
            <div class="page-content box-wrapper mt-15">
                <div class="row">
                @foreach($medias as $media)
                    <div class="col-md-6">
                        <a href="{{ $media->url }}">
                            <div class="thumbnail">
                                <img src="{{ $media->present()->firstImage(600,400,'fit',80) }}" alt="{{ $media->title }}" />
                                <div class="caption">
                                    <h3>{{ $media->title }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                </div>
                {!! $medias->links('partials.pagination') !!}
            </div>
        </div>
        @include('news::partials.sidebar')
    </div>
@endsection
