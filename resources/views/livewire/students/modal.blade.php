<div wire:ignore.self class="modal fade" id="{{ $id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">{{ $modalTitle }}</h1>
                <button wire:click="close" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <x-flash-message />
                <form>
                    <div class="mb-3">
                        <label class="form-label" for="name">Name : </label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" wire:model="name"
                            id="name" value="{{ $student->name ?? '' }}">
                        @error('name')
                            <small class="text-danger my-2">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email : </label>
                        <input class="form-control @error('email') is-invalid @enderror" type="text"
                            wire:model="email" id="email" value="{{ $student->email ?? '' }}">
                        @error('email')
                            <small class="text-danger my-2">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="address">Address : </label>
                        <input class="form-control @error('address') is-invalid @enderror" type="text"
                            wire:model="address" id="address" value="{{ $student->address ?? '' }}">
                        @error('address')
                            <small class="text-danger my-2">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="phone">Phone : </label>
                        <input class="form-control @error('phone') is-invalid @enderror" type="text"
                            wire:model="phone" id="phone" value="{{ $student->phone ?? '' }}">
                        @error('phone')
                            <small class="text-danger my-2">{{ $message }}</small>
                        @enderror
                    </div>
                </form>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary" wire:click="{{ $submit }}">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
