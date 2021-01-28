<div class="social-icon">
    <ul class="{{ $listClass ?? '' }}">
        @foreach(['facebook' => 'fa-facebook', 'instagram'=>'fa-instagram', 'twitter'=>'fa-twitter', 'google'=>'fa-google-plus', 'whatsapp'=>'fa-whatsapp', 'linkedin'=>'fa-linkedin', 'youtube'=>'fa-youtube-play', 'spotify' => 'fa-spotify'] as $sk => $sv)
            @if(setting('theme::'.$sk) && $sk == 'whatsapp')
                <li>
                    <a href="whatsapp:{{ setting('theme::'.$sk) }}"><i class="fa {{ $sv }} {{ $iconClass ?? '' }}"></i></a>
                </li>
            @elseif(setting('theme::'.$sk))
                <li>
                    <a target="_blank" href="{{ setting('theme::'.$sk) }}"><i
                                class="fa {{ $sv }} {{ $iconClass ?? '' }}"></i></a>
                </li>
            @endif
        @endforeach
    </ul>
</div>