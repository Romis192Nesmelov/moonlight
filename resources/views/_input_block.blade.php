<div class="form-group has-feedback has-feedback-left {{ isset($addClass) ? $addClass : '' }} {{ $errors && $errors->has($name) ? 'has-error' : '' }}">
    <input {{ isset($min) && $min ? 'min='.$min : '' }} {{ isset($max) && $max ? 'max='.$max : '' }} name="{{ $name }}" type="{{ $type }}" class="form-control" placeholder="{{ isset($placeholder) && $placeholder ? $placeholder : '' }}" value="{!! isset($value) && !count($errors) ? $value : old($name) !!}">
    @if (count($errors) && $errors->has($name))
        <div class="help-block error {{ $name }}">{!! $errors->first($name) !!}</div>
    @endif
</div>