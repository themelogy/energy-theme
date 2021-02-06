@extends('layouts.master')

@php
    seo_helper()->setTitle('404 - Sayfa bulunamadı');
@endphp

@section('content')
    <div class="not-found box-wrapper">
        <h1><span>404</span> Sayfa bulunamadı!</h1>

        <p>Aradığınız sayfa mevcut değil ya da başka bir hata oluştu.</p>
        <a class="btn btn-primary" href="@homepage">Anasayfa'ya geri dön</a>
    </div>
@endsection