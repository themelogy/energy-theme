@extends('layouts.master')

@section('content')
<div class="contact-page-area">
    <div class="row">
        <div class="col-md-8 less-pad-right">
            <div class="contact-address box-wrapper mt-15 sm-mrgright-15 xs-mrgright-15 equal-column">
                @includeIf('contact::map')
                <div class="location">
                    <h3>@setting('theme::company-name')</h3>
                    <a href="https://www.google.com/maps/dir/Current+Location/{{ setting('contact::contact-map-lat').','.setting('contact::contact-map-lng') }}" class="btn btn-default m-top-10 pull-right" target="_blank"><i class="fa fa-map-marker"></i> @lang('themes::contact.buttons.direction us')</a>
                    <div class="d-flex">
                        <div class="icon m-r-10">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="info">
                            @setting('theme::address')
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="icon m-r-10">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="info">
                            @setting('theme::phone')
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="icon m-r-10">
                            <i class="fa fa-fax"></i>
                        </div>
                        <div class="info">
                            @setting('theme::fax')
                        </div>
                    </div>
                </div>
                @locations('contact-locations')
            </div>
        </div>
        <div class="col-md-4">
            <div class="contact-page-sidebar box-wrapper mt-15 equal-column">
                @includeIf('contact::form')
            </div>
        </div>
    </div>
</div>
@endsection