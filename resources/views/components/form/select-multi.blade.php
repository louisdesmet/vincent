<div class="form-group">
    {{ Form::label($name, null) }}
    {{ Form::select($name, $options, $value, array_merge(['class' => $errors->has($name) ? ' form-control is-invalid' : ' form-control', 'multiple' => 'multiple', 'name' => $name . '[]'], $attributes)) }}
    @if ($errors->has($name))
        <span class="invalid-feedback">
            {{ $errors->first($name) }}
        </span>
    @endif
</div>