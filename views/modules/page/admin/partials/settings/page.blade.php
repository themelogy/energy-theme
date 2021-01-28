<div class="row">
    <fieldset>
        <legend>Sayfa Gösterim Ayarları</legend>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[show_menu]", "Menü göster", $errors, [0=>'Hayır', 1=>'Evet'], isset($page->settings->show_menu) ? $page->settings->show_menu : 0) !!}
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[show_menu_location]", "Menü Gösterim Alanı", $errors, ['left'=>'Sol', 'right'=>'Sağ'], isset($page->settings->show_menu_location) ? $page->settings->show_menu_location : null) !!}
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[full_page]", "Tam Sayfa Göster", $errors, [0=>'Hayır', 1=>'Evet'], isset($page->settings->full_page) ? $page->settings->full_page : 0) !!}
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[show_content]", "İçerik Göster", $errors, [0=>'Hayır', 1=>'Evet'], isset($page->settings->show_content) ? $page->settings->show_content : 0) !!}
        </div>
    </fieldset>
</div>

<div class="row">
    <fieldset>
        <legend>Sayfa Listeleme Ayarları</legend>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[list_page]", "Alt Sayfaları göster", $errors, [0=>'Hayır', 1=>'Evet'], isset($page->settings->list_page) ? $page->settings->list_page : 0) !!}
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[list_per_page]", "Sayfalama", $errors, array(''=>'Seçiniz') + array_combine(range(1, 20, 1), range(1, 20, 1)), isset($page->settings->list_per_page) ? $page->settings->list_per_page : 6) !!}
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[list_type]", "Liste Türü", $errors, ['grid'=>'Grid', 'list'=>'Liste'], isset($page->settings->list_type) ? $page->settings->list_type : 6) !!}
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[list_grid]", "Grid", $errors, array(''=>'Seçiniz') + array_combine(range(1, 12, 1), range(1, 12, 1)), isset($page->settings->list_grid) ? $page->settings->list_grid : 6) !!}
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[list_show_content]", "Alt Sayfa İçerik göster", $errors, [0=>'Hayır', 1=>'Evet'], isset($page->settings->list_show_content) ? $page->settings->list_show_content : 0) !!}
        </div>
        <div class="col-md-3">
            <div class="form-group{{ $errors->has("settings.list_show_content_limit") ? ' has-error' : '' }}">
                {!! Form::label("settings.list_show_content_limit", "Alt Sayfa İçerik Limiti".':') !!}
                {!! Form::input('text', 'settings[list_show_content_limit]', !isset($page->settings->list_show_content_limit) ? 500 : $page->settings->list_show_content_limit, ['class'=>'form-control']) !!}
                {!! $errors->first("settings.list_show_content_limit", '<span class="help-block">:message</span>') !!}
            </div>
        </div>
    </fieldset>
</div>