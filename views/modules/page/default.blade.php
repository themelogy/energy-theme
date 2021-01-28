@if(@$page->parent->settings->show_menu && !($page->settings->full_page ?? false))
    @include('page::menu')
@else
    @include('page::fullwidth')
@endif