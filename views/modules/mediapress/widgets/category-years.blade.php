<ul>
    @foreach($medias as $media)
        <li>
            <a class="{{ Request::segment(4) == $media->years ? 'active' : '' }}" href="{{ $category ? $media->present()->yearurl($category->slug) : $media->yearurl }}">
                {{ $media->years }}
            </a>
        </li>
    @endforeach
</ul>