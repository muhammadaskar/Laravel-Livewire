<div>
    <form wire:submit.prevent="store">
        <div class="form-group">
            <div class="form-row">
                <div class="col">
                    <input wire:model="name" type="text" name="" id="" class="form-control" placeholder="Name">
                </div>
                <div class="col">
                    <input wire:model="phone" type="text" name="" id="" class="form-control" placeholder="Phone">
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">submit</button>
    </form>
</div>
