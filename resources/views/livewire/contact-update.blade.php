<div>
    <form wire:submit.prevent="update">
        <input type="hidden" wire:model="contactId">
        <div class="form-group">
            <div class="form-row">
                <div class="col">
                    <input wire:model="name" type="text" name="" id="" class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                    @error('name')
                    <span class="invalid-feedback">
                        <strong> {{ $message }} </strong>
                    </span>
                    @enderror
                </div>
                <div class="col">
                    <input wire:model="phone" type="text" name="" id="" class="form-control @error('phone')
                        is-invalid
                    @enderror " placeholder="Phone">
                    @error('phone')
                    <span class="invalid-feedback">
                        <strong> {{ $message }} </strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">submit</button>
    </form>
</div>
