<div class="form-group row">
    @if ($label!=null)
    <label class="col-sm-2 col-form-label">{{ $label }}</label>
    @endif
    <div class="col-sm-10">
        <input type="text" class="form-control" id="{{ $name }}" placeholder="{{ $label }}" name="{{ $name }}"
            value="{{ $value }}" {{ $disabled ? 'disabled':''}} {{ $hidden ? 'hidden':''}}>
    </div>

    @if ($errors->has($name))
    <div class=" col-2"></div>
    <div class="col-8">
        <span class="help-block">
            <strong class="text-danger">{{ $errors->first($name) }}</strong>
        </span>
    </div>
    @endif
</div>