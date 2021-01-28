<div class="row">
    <div class="col-md-12">
        <div class="box-wrapper">
            @if(strlen($slot)>0)
            <div class="page-title lazy">
                <h1>{{ $slot }}</h1>
            </div>
            @endif
            {!! Breadcrumbs::renderIfExists($breadcrumbs ?? "") !!}
        </div>
    </div>
</div>