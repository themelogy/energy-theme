<!-- col-md-3 -->
<div class="less-pad-left col-md-3 col-sm-4 col-xs-12">
    <div class="sidebar box-wrapper equal-column mt-15">
        <div class="widget_pages">
            <h2>@lang('themes::news.titles.categories')</h2>
            <ul>
                @forelse($mediaTypes as $key => $type)
                    <li><a href="{{ route('mediapress.media.index').'/'.$key }}">{{ $type }}</a></li>
                @empty
                    <li>Media not found</li>
                @endforelse
            </ul>
        </div>
    </div>
</div>
<!-- /col-md-3 -->