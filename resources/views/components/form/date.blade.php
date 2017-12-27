<div class="form-group">
    {{ Form::label($name, null) }}
    {{ Form::date($name, $value, array_merge(['class' => $errors->has($name) ? ' form-control is-invalid' : ' form-control'], $attributes)) }}
    @if ($errors->has($name))
        <span class="invalid-feedback">
            {{ $errors->first($name) }}
        </span>
    @endif
</div>