<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                {{ ucfirst($title) }}
            </div>
            @if ($modalId)
            <div class="col-md-6 text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{ $modalId }}">
                    {{ $buttonText }}
                </button>
            </div>
            @endif
        </div>
    </div>

    <div class="card-body">
        {{ $slot }}
    </div>
</div>