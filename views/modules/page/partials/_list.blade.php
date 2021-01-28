@if($page->settings->show_content)
    @include('page::partials._image')
@endif
@pageChildren($page, 'page.children', 100, $page->settings->list_per_page ?? 6)