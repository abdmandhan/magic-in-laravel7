<div class="form-group row has-feedback {{ $errors->has($name) ? ' has-error ' : '' }}">
    <label for="example-{{ $name }}-input" class="col-2 col-form-label">{{ $label }}</label>
    <div class="col-10">
        <textarea id="{{ $name }}" class="form-control" name="{{ $name }}" cols="30"
            rows="10">{{ $value  ?? Request::old($name) }}</textarea>
    </div>
    @if ($errors->has($name))
    <div class="col-2"></div>
    <div class="col-8">
        <span class="help-block">
            <strong class="text-danger">{{ $errors->first($name) }}</strong>
        </span>
    </div>
    @endif
</div>