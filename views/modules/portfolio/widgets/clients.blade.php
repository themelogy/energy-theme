<div class="row">
    <div class="col-md-12">
        <div class="logo-slider-area mt-15 box-wrapper ">
            <div class="box-title">
                <h2>@lang('themes::theme.our partners')</h2>
            </div>
            <div class="logo-slider owl-carousel">
                @foreach($brands as $brand)
                <div class="item" style="padding: 0 10px">
                    <a target="_blank" rel="nofollow" href="{{ $brand->website }}"><img class="owl-lazy" data-src="{{ $brand->present()->firstImage(null,60,'resize',100) }}" alt="{{ $brand->title }}"/></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>