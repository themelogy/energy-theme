@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'gallery.index'])
        <h1 class="title">{{ trans('themes::gallery.meta.title') }}</h1>
    @endcomponent
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
            <div class="page-content box-wrapper mt-15">
                <div class="row">
                @foreach($albums as $album)
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <a href="{{ $album->url }}">
                            <div class="thumbnail">
                                <img src="{{ $album->present()->firstImage(600,400,'fit',80) }}" alt="{{ $album->title }}">
                                <div class="caption">
                                    <h5>{{ $album->title }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
        @include('mediapress::partials.sidebar')
    </div>
@endsection
