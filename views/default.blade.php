@extends('layouts.master')

@section('content')
    @component('page::components.title', [
        'breadcrumbs'   => 'page',
        'coverImage'    => $page->present()->coverImage(1100,200,'fit',80)
    ])
    {{ $page->title }}
    @endcomponent

    @include('page::default')
@stop