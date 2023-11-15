    @if (flash()->message)
        <div role="alert" class="alert alert-{{ flash()->class }}">
            @if (flash()->class === 'success')
                <i class="me-2 bi bi-check-circle-fill"></i>
            @endif
            @if (flash()->class === 'warning' || flash()->class === 'danger')
                <i class="me-2 bi bi-exclamation-triangle-fill"></i>
            @endif
            @if (flash()->class === 'info')
                <i class="me-2 bi bi-info-circle-fill"></i>
            @endif
            <span>
                {{ flash()->message }}
            </span>
        </div>
    @endif
