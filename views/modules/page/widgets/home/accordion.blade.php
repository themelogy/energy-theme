<div class="accordion-area mt-15 box-wrapper">
    <div class="box-title">
        <h2>@lang('themes::theme.home.widgets.accordion.title')</h2>
    </div>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
        @foreach($pages as $page)
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#{{ $page->slug }}" aria-expanded="false" aria-controls="collapseOne">
                        {{ $page->title }}
                    </a>
                </h4>
            </div>
            <div id="{{ $page->slug }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    {{ $page->settings->sub_title->{locale()} }}
                    <div class="readmore">
                        <a href="{{ $page->url }}">@lang('global.buttons.read more')</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!--.panel-group-->
    {!! Block::get('akordiyon') !!}
</div>
<!-- accordion-area -->
