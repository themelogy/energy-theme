@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'mediapress.category'])
        <h1 class="title">{{ $category->name }}</h1>
    @endcomponent
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
            <div class="page-content box-wrapper mt-15">
                @mediapressYearsByCategory($category)
            </div>
        </div>
        @include('mediapress::partials.sidebar')
    </div>
@endsection
