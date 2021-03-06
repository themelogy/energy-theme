@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'news'])
        {{ trans('themes::news.title') }}
    @endcomponent
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
            <div class="box-wrapper mt-15">
                @foreach($posts as $post)
                    @includeIf('news::partials._post')
                @endforeach
                <div style="padding: 0 20px">
                    {!! $posts->links('partials.pagination') !!}
                </div>
            </div>
        </div>
        @includeIf('news::partials.sidebar')
    </div>
@endsection
