<div class="row">
    <div class="col-md-5">
        <div id="imageGallery">
            @foreach($page->files("pageImage")->get() as $image)
                <a data-thumb="{{ \Imagy::getImage($image->filename, "pageImage", ['width' => 45, 'height' => 30, 'mode' => 'fit', 'quality' => 80]) }}"
                   data-src="{{ \Imagy::getImage($image->filename, "pageImage", ['width' => 1100, 'height' => 800, 'mode' => 'fit', 'quality' => 80]) }}"
                   href="{{ \Imagy::getImage($image->filename, "pageImage", ['width' => 1100, 'height' => 800, 'mode' => 'fit', 'quality' => 80]) }}">
                    <img src="{{ \Imagy::getImage($image->filename, "pageImage", ['width' => 600, 'height' => 400, 'mode' => 'fit', 'quality' => 80]) }}" alt="{{ $page->title }}" />
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