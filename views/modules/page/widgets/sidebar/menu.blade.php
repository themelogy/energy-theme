<div class="widget_pages">
    <h2>{{ @$page->parent->title }}</h2>
    <ul>
        @foreach($children as $child)
        <li><a href="{{ $child->url }}">{{ $child->title }}</a></li>
        @endforeach
    </ul>
</div>