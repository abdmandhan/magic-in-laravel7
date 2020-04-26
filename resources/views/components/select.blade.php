<div class="form-group row">
    @if ($label!=null)
    <label class="col-sm-2 col-form-label">{{ $label }}</label>
    @endif
    <div class="col-sm-10">
        <select class="custom-select" name="{{ $name }}" id="{{ $name }}">
            @foreach ($selectData as $key => $item)
            <option value="{{ $item->id }}" {{ $isSelected($item->id) ? 'selected="selected"' : '' }}
                class="text-{{ $item->name }}">
                {{ ucfirst($item->name) }}
            </option>
            @endforeach
        </select>
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