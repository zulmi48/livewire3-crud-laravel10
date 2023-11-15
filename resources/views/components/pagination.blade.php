<div class="row justify-content-between">
    <div class="col-md-6">
        Showing {{ $items->firstItem() }} to {{ $items->lastItem() }} out of {{ $items->total() }} items
        <br>
        <div class="row">
            <div class="col-md-3 mt-1">
                <select wire:model.live="page" class="form-select form-select-sm">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="d-flex justify-content-end">
            {{ $items->links() }}
        </div>
    </div>
</div>
