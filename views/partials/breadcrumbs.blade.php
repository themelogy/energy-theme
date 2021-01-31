@if ($breadcrumbs)
    <ul class="breadcrumb">
        <li><a href="{{ route('homepage') }}"><img style="height: 15px;" src="{!! Theme::url('img/logo/marker.svg') !!}" alt="{{ setting('theme::company-name') }} favicon logo" /></a></li>
        @foreach ($breadcrumbs as $crumb)
            <?php
            $icon = isset($crumb->icon) ? '<i class="' . $crumb->icon . '"></i> ' : '';
            ?>

            @if ($crumb->url && ! $crumb->last)
                <li>
                    <a href="{{ $crumb->url }}">{!! $icon !!}{!! Str::words($crumb->title, 6) !!}</a>
                </li>
            @else
                <li class="active">{!! $icon !!}{!! Str::words($crumb->title, 6) !!}</li>
            @endif
        @endforeach
    </ul>
@endif