@php
    $list = collect();
    $list->put('showContent', $page->settings->show_content ?? true);
    $list->put('gridSize', $page->settings->list_grid ?? 3);
    $list->put('chunkSize', ceil(12 / $list->get('gridSize')));
    $list->put('columnSize', is_float(12/$list->get('gridSize')) ? $list->get('gridSize') : $list->get('gridSize'));
    $list->put('hasColumn', (int)ceil(12 % $list->get('gridSize')));
    $list->put('listPage', $page->settings->list_page ?? false);
    $list->put('listShowContent', $page->settings->list_show_content ?? false);
    $list->put('listShowContentLimit', $page->settings->list_show_content_limit ?? 500);

    function colSize($colSize, $colDiv, $loop) {
        if($loop->first) {
            return $colSize;
        } elseif ($loop->last && $colDiv) {
            return $colDiv;
        } else {
            return $colSize;
        }
    }

    $width   = $page->settings->image_width ?? 600;
    $height  = $page->settings->image_height ?? 200;
    $mode    = $page->settings->image_mode ?? 'fit';
    $quality = $page->settings->image_quality ?? 80;
    $hasImg  = $page->settings->show_cover ?? false;
@endphp

@foreach($children->chunk($list->get('chunkSize')) as $chunks)
    <div class="row">
        @foreach($chunks as $child)
            <div class="col-md-{{ colSize($list->get('columnSize'), $list->get('hasColumn'), $loop) }}">
                <div class="thumbnail">
                    <a href="{{ $child->url }}">
                        @if(($image = $child->present()->firstImage($width,$height,$mode,$quality)) && $hasImg)
                            <img style="width: 100%;" class="img-responsive" src="{{ $image }}" alt="{{ $child->title }}" />
                        @endif
                        <div class="caption">
                            <h4>{{ $child->title }}</h4>
                            @if($list->get('listShowContent'))
                                <div class="info">{{ str_limit(strip_tags($child->body), $list->get('listShowContentLimit')) }}</div>
                            @endif
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endforeach

{!! $children->links('partials.pagination') !!}