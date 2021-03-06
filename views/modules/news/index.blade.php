@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'news'])
        <h1 class="title">{{ trans('themes::news.title') }}</h1>
    @endcomponent
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
            <div class="page-content box-wrapper mt-15">
                @forelse($posts as $post)
                    @includeIf('news::partials._post')
                @empty
                    @lang('theme::errors.content not found')
                @endforelse
                <div style="padding: 0 20px">
                    {!! $posts->links('partials.pagination') !!}
                </div>
            </div>
        </div>
        @includeIf('news::partials.sidebar')
    </div>
@endsection
