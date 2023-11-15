<div wire:ignore.self class="modal fade" id="delete" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" >Delete Confirmation</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4>Are you sure want to delete this record?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancel</button>
                <button wire:click="delete" type="button" class="btn btn-danger" data-bs-dismiss="modal">Yes, I do</button>
            </div>
        </div>
    </div>
</div>
