@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'mediapress.year'])
        <h1 class="title">{{ $category->name . ' ' . $year }}</h1>
    @endcomponent
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
            <div class="page-content box-wrapper mt-15">
                <ul class="list-style">
                    @foreach($medias as $media)
                        <li>
                            <a href="{{ $media->url }}"><i class="fa fa-dot-circle-o"></i> {{ $media->title }} - {{ @$media->brand->title }} {{ $media->release_at->formatLocalized('%d %B %Y') }} </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @include('mediapress::partials.sidebar')
    </div>
@endsection
