@if(!@$page->settings->list_page)
    @include('page::partials._image')
@else
    @include('page::partials._list')
@endif