@extends('layouts.master')

@section('content')
    <!-- Project area -->
    <div class="project mt-15">
        <div class="row">
            <div class="col-md-12">
                <div class="box-wrapper mt-15">
                    <div class="clearfix">
                        <ul id="filter">
                            <li><a class="active" href="#" data-group="all">@lang('themes::gallery.titles.gallery')</a></li>
                            @foreach($albums as $album)
                            <li><a href="#" data-group="{{ $album->slug }}">{{ $album->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div id="grid">

                        @foreach($albums as $album)
                        @foreach($album->present()->images(null,500,'resize',80) as $image)
                        <div class="item blue col-md-4 col-sm-6 col-xs-12 fix"  data-groups='["all", "{{ $album->slug }}"]'>
                            <div class="project-item">
                                <div class="project-image-container">
                                    <div class="thumbnail">
                                        <a data-title="{{ $album->title }}" href="{{ $image }}" data-lightbox="{{ $album->slug }}">
                                            <img src="{{ $image }}" alt="{{ $album->title }}">
                                        </a>
                                        <div class="caption">
                                            <h5>{{ $album->title }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        @endforeach
                        @endforeach

                    </div> <!-- /grid -->
                </div> <!-- /box-wrapper -->

            </div>
        </div>
    </div>
    <!--	//shuffle  our project	-->
@endsection

@push('js-stack')
    {!! Theme::script('plugins/lightbox2/js/lightbox.min.js') !!}
    {!! Theme::script('js/jquery.shuffle.min.js') !!}
    {!! Theme::script('js/imagesloaded.js') !!}
    {!! Theme::script('js/shuffle.js') !!}
@endpush

@push('css-stack')
    {!! Theme::style('plugins/lightbox2/css/lightbox.min.css') !!}
@endpush
