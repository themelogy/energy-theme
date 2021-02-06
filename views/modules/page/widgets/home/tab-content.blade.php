@foreach($pages as $page)
    <div class="tab-pane clearfix" id="{{ $page->slug }}">
        @if($image = $page->present()->coverImage(300,240,'fit',80))
            <img class="pull-left lazy" data-src="{{ $image }}" alt="{{ $page->title }}"/>
        @endif
        <h4>{{ $page->title }}</h4>
        {!! str_limit(strip_tags($page->body),500) !!}
        <div class="readmore">
            <a href="{{ $page->url }}">@lang('global.buttons.read more')</a>
        </div>
    </div>
@endforeach