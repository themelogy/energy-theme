<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        @foreach(LaravelLocalization::getSupportedLocales() as $locale => $language)
                <li class="{{ $loop->first ? 'active' : '' }}"><a href="#text_field_{{ $locale }}" data-toggle="tab">{{ $language['native'] }}</a></li>
        @endforeach
    </ul>
    <div class="tab-content">
        @foreach(LaravelLocalization::getSupportedLocales() as $locale => $language)
                <div class="tab-pane {{ $loop->first ? 'active' : '' }}" id="text_field_{{ $locale }}">
                    @foreach($fields as $field)
                        @if($field['type']=='text')
                            <div class="form-group{{ $errors->has("settings.slogan") ? ' has-error' : '' }}">
                                {!! Form::label("settings.{$field['name']}.{$locale}", $field['label'].':') !!}
                                {!! Form::input('text', 'settings['.$field['name'].']['.$locale.']', old('settings.'.$field['name'].'.'.$locale, $page->settings->{$field['name']}->{$locale} ?? ''), ['class'=>'form-control']) !!}
                                {!! $errors->first("settings.".$field['name'].".".$locale, '<span class="help-block">:message</span>') !!}
                            </div>
                        @endif
                    @if($field['type']=='textarea')
                            <div class="form-group{{ $errors->has("settings.slogan") ? ' has-error' : '' }}">
                                {!! Form::label("settings.{$field['name']}.{$locale}", $field['label'].':') !!}
                                {!! Form::textarea('settings['.$field['name'].']['.$locale.']', old('settings.'.$field['name'].'.'.$locale, $page->settings->{$field['name']}->{$locale} ?? ''), ['class'=>'form-control']) !!}
                                {!! $errors->first("settings.".$field['name'].".".$locale, '<span class="help-block">:message</span>') !!}
                            </div>
                        @endif
                    @endforeach
                </div>
        @endforeach
    </div>
</div>