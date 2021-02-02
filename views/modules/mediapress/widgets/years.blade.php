<div class="d-flex press-years">
    @foreach($medias as $media)
        <div class="press-year">
            <a href="{{ @$category ? $media->present()->yearurl($category->slug) : $media->yearurl }}">
                <div class="thumbnail">
                    {{ $media->years }}
                </div>
            </a>
        </div>
    @endforeach
</div>