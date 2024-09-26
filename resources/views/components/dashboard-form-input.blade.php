@props(['name' ,'placeholder','type','value','label'])

<div class="form-group">
    <label for="exampleInputUsername1">{{ $label }}</label>
    <input type="{{$type ?? 'text'}}" value="{{ $value ?? null }}" class="form-control" name="{{ $name }}"
    id="exampleInputUsername1" placeholder="{{ $placeholder ?? null }}">
    @if($errors->has($name))
    <p class="text-danger">{{ $errors->first($name) }}</p>
    @endif
</div>
