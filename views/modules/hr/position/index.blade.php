@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumb'=>'hr.position.index'])
        <h1 class="title">{{ trans_choice('hr::positions.title.positions',1) }}</h1>
    @endcomponent

    <div class="about-content-area mt-20">
        <div class="row">
            <div class="col-md-12">
                <div class="page-content box-wrapper">
                    <section class="page-article-content clearfix" id="app">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ trans('hr::positions.form.reference_no') }}</th>
                            <th>{{ trans('hr::positions.form.name') }}</th>
                            <th>{{ trans('hr::positions.form.personal_number') }}</th>
                            <th>{{ trans('hr::positions.form.position.city') }}</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($positions as $position)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $position->reference_no }}</td>
                                <td>{{ $position->name }}</td>
                                <td>{{ $position->personal_number }}</td>
                                <td>{{ $position->present()->position('city') }}</td>
                                <td><a class="btn btn-primary btn-sm waves-effect waves-light" href="{{ route('hr.position.view', [$position->slug]) }}">İncele</a>  <a class="btn btn-primary btn-sm waves-effect waves-light" href="{{ route('hr.application.form', ['position_id'=>$position->id]) }}">Başvuru Yap</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </section>
                </div>
            </div>
        </div>
    </div>

@endsection