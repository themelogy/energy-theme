@foreach($pages as $page)
    <li><a href="#{{ $page->slug }}" data-toggle="tab">{{ $page->title }}</a></li>
@endforeach