@extends('layouts.master')

@section('content')
    <!--Hero Section-->
    @include('page::section.home.hero')
    <!--Welcome Message and Product Carousal-->
    @include('page::section.home.welcome')
    <!--Company Profile Tab and Accordion-->
    @include('page::section.home.company')
@stop


@section('popup')
    @php
        $popup = collect(app(\Modules\Popup\Repositories\PopupRepository::class)->getPopups('home'))->first();
    @endphp
    @if($popup)
        @include('popup::popup', ['popup'=>$popup])
    @endif
@endsection