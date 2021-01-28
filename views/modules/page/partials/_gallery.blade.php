<div class="row">
    <div class="col-md-5">
        <div id="imageGallery">
            @foreach($page->present()->images(600,400,'fit',80) as $image)
                <a data-thumb="{{ $image }}" data-src="{{ $image }}" href="{{ $image }}">
                    <img src="{{ $image }}" alt="{{ $page->title }}" />
                </a>
            @endforeach
        </div>
    </div>
    <div class="col-md-7">
        {!! $page->body !!}
    </div>
</div>

@push('js-stack')
    {!! Theme::script('plugins/lightslider/js/lightslider.min.js') !!}
    {!! Theme::script('plugins/lightgallery/js/lightgallery-all.min.js') !!}
@endpush

@push('css-stack')
    {!! Theme::style('plugins/lightslider/css/lightslider.min.css') !!}
    {!! Theme::style('plugins/lightgallery/css/lightgallery.min.css') !!}
@endpush

@push('js-inline')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#imageGallery').lightSlider({
                gallery:true,
                item:1,
                loop:true,
                thumbItem:9,
                auto: true,
                slideMargin:0,
                enableDrag: false,
                currentPagerPosition:'left',
                onSliderLoad: function(el) {
                    el.lightGallery({
                        selector: '#imageGallery .lslide',
                        thumbnail:true
                    });
                    //lazyload
                    var showActiveSlides = function (entries) {
                        entries.forEach(function (entry) {
                            if (entry.isIntersecting) {
                                entry.target.src = entry.target.dataset.src;
                                observer.unobserve(entry.target);
                            }
                        });
                    };

                    var imageWidth = el.find("li").outerWidth() + "px";
                    var observer = new window.IntersectionObserver(showActiveSlides, {
                        root: el.parent()[0],
                        rootMargin: "0px "+ imageWidth + " 0px " + imageWidth
                    });
                    el.find("li img").each(function () {
                        observer.observe(this);
                    });
                }
            });
        });
    </script>
@endpush