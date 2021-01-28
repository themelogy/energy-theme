<div class="row">
    <div class="col-md-12">
        <div class="box-wrapper">
            <div class="page-title lazy" data-src="{{ $coverImage }}">
                <h1>{{ $slot }}</h1>
            </div>
            {!! Breadcrumbs::renderIfExists($breadcrumbs ?? "") !!}
        </div>
    </div>
</div>