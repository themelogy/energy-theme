@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="page-content box-wrapper mt-15">
        {!! Form::open(['route' => 'search.index', 'method'=>'post', 'class' => 'form-horizontal']) !!}
        <div class="search">
          <div class="form-group">
            <div class="col-md-10">
              <input value="{{ $query }}" type="text" size="20" class="form-control " maxlength="20" name="s" placeholder="ara" />
            </div>
            <div class="col-md-2">
              <button class="btn btn-block" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </div>
        {!! Form::close() !!}
        @if($query)
          <div class="alert alert-info">Arama Sonuçları: {{ $pages->count() }} sonuç bulundu.</div>
        @endif
        <ul class="search-list">
        @foreach($pages as $page)
          <li>
            <div class="">
              {{ $page->url }}<br/>
              <a href="{{ $page->url }}">
                {{ $page->title }}
              </a>
            </div>
          </li>
        @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection

@push('css-inline')
  <style>
    .search-list li {
        border-bottom: 1px solid #ebebeb;
        padding: 5px 0px;
    }
    .search-list li:last-child {
        border-bottom: none;
    }
  </style>
@endpush