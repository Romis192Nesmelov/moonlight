@if (isset($label))
    <label>{{ $label }}</label>
@endif
<textarea class="form-control" name="{{ $name }}" placeholder="{{ isset($placeholder) ? $placeholder : '' }}">{{ isset($value) ? $value : (count($errors) ? old($name) : '') }}</textarea>
@if (count($errors) && $errors->has($name))
    <div class="help-block error {{ $name }}">{!! $errors->first($name) !!}</div>
@endif