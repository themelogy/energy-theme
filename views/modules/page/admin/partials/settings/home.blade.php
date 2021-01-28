<div class="row">
    <fieldset>
        <legend>Anasayfa Başlık Ayarları</legend>
        <div class="col-md-12 form-inline">
            <div class="form-group" style="margin-right: 10px;">
                <label>
                    {!! Form::checkbox("settings[show_service_box]", 1, old('settings.show_service_box', isset($page->settings->show_service_box) ? $page->settings->show_service_box : 0), ['class'=>'flat-blue']) !!}
                    &nbsp; Ansayfa Kutu'da Göster
                </label>
            </div>
            <div class="form-group" style="margin-right: 10px;">
                <label>
                    {!! Form::checkbox("settings[show_service_tab]", 1, old('settings.show_service_tab', isset($page->settings->show_service_tab) ? $page->settings->show_service_tab : 0), ['class'=>'flat-blue']) !!}
                    &nbsp; Anasayfa Tab'da Göster
                </label>
            </div>
            <div class="form-group" style="margin-right: 10px;">
                <label>
                    {!! Form::checkbox("settings[show_service_accordion]", 1, old('settings.show_service_accordion', isset($page->settings->show_service_accordion) ? $page->settings->show_service_accordion : 0), ['class'=>'flat-blue']) !!}
                    &nbsp; Anasayfa Accordion'da Göster
                </label>
            </div>
            <div class="form-group" style="margin-right: 10px;">
                @if($pages = app(\Modules\Page\Repositories\PageRepository::class)->allRootsForPage()->pluck('title', 'slug')->toArray())
                    {!! Form::normalSelect("settings[show_welcome]", "Anasayfa Giriş", $errors, [null => 'Seçiniz']+$pages, isset($page->settings->show_welcome) ? $page->settings->show_welcome : null) !!}
                @endif
            </div>
        </div>

    </fieldset>
</div>