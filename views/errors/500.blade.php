@extends('layouts.master')

@php
    seo_helper()->setTitle('500 - Bir hata oluştu.');
@endphp

@section('content')
    <div class="not-found box-wrapper">
        <h1><span>500</span> Bir hata oluştu!</h1>

        <p>Sayfada bir hata oluştu.</p>
        <a class="btn btn-primary" href="@homepage">Anasayfa'ya geri dön</a>
    </div>
@endsection