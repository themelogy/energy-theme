<div class="box box-primary">
    <div class="box-body">
        {!! Form::normalSelect('category_id', trans('gallery::albums.form.category_id'), $errors, $selectCategories, $album ?? null) !!}

        <div class="form-group{{ $errors->has("sorting") ? ' has-error' : '' }}">
            {!! Form::label("sorting", trans('gallery::albums.form.sorting').':') !!}
            {!! Form::input("text", "sorting", old("sorting", $album->sorting ?? '0'), ['class'=>'form-control']) !!}
            {!! $errors->first("sorting", '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group">
            {!! Form::hidden('status', 0) !!}
            {!! Form::checkbox('status', 1, old('status', $album->status ?? false), ['class'=>'flat-blue']) !!}
            {!! Form::label('status', trans('gallery::albums.form.status')) !!}
        </div>

        <div class="form-group{{ $errors->has("settings[slider_delay]") ? ' has-error' : '' }}">
            {!! Form::label("settings[slider_delay]", trans('themes::gallery.form.slider_delay').':') !!}
            {!! Form::input("text", "settings[slider_delay]", old("settings[slider_delay]", @$album->settings->slider_delay ?? '5'), ['class'=>'form-control']) !!}
            {!! $errors->first("settings[slider_delay]", '<span class="help-block">:message</span>') !!}
        </div>
    </div>
</div>
