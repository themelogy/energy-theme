@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'mediapress.category.year'])
        <h1 class="title">{{ $title }}</h1>
    @endcomponent
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
            <div class="page-content box-wrapper mt-15">
                <div class="d-flex press-years">
                    @foreach($types as $slug => $type)
                        <div class="press-year">
                            <a href="{{ localize_trans_url(locale(), "mediapress::routes.category.type", ['mediapressCategory'=>$category->slug, 'year'=>$year, 'type'=>$slug]) }}">
                                <div class="thumbnail">
                                    {{ $type }}
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
