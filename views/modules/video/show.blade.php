@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'video.show'])
        <h1 class="title">{{ $media->title }}</h1>
    @endcomponent
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
            <div class="page-content box-wrapper mt-15">
                <div class="video-show">
                    <div id="player" data-plyr-provider="{{ strtolower($media->embed['provider']) }}" data-plyr-embed-id="{{ $media->embed['videoid'] }}"></div>
                    <div class="controls">
                        <button class="btn btn-default" onclick="player.play()"><i class="fa fa-play"></i></button>
                        <button class="btn btn-default" onclick="player.pause()"><i class="fa fa-pause"></i></button>
                        <button class="btn btn-default" onclick="player.fullscreen.toggle()"><i class="fa fa-expand"></i></button>
                    </div>
                </div>
            </div>
        </div>
        @include('news::partials.sidebar')
    </div>
@endsection

@push('css-stack')
    {!! Theme::style('plugins/plyr/plyr.css') !!}
@endpush

@push('js-stack')
    {!! Theme::script('plugins/plyr/plyr.min.js') !!}
    {!! Theme::script('plugins/plyr/plyr.polyfilled.min.js') !!}
    <script>
        const player = new Plyr('#player');
    </script>
@endpush
