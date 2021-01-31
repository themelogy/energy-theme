@isset($tags)
    @if($tags->count()>0)
        <div class="widget_tag_cloud clearfix">
            <h2>{{ trans('tag::tags.tag') }}</h2>
            <ul>
            @foreach($tags as $tag)
                <a href="{{ route('blog.tag', $tag->slug) }}">{{ $tag->name }}</a>
            @endforeach
            </ul>
        </div>
    @endif
@endisset