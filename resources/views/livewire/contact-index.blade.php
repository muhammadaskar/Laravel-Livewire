<div>

    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif


    @if($statusUpdate)
    <livewire:contact-update>
    </livewire:contact-update>
    @else
    <livewire:contact-create>
    </livewire:contact-create>
    @endif

    <hr>

    <div class="form-group col-md-5" style="float:right;">
        <input wire:model="cari" class="form-control" placeholder="cari...">
    </div>

    <table class="table">
        <thead class="table-dark">
            <tr>
                <td scope="col">
                    NO
                </td>
                <td scope="col">
                    Nama
                </td>
                <td scope="col">
                    Phone
                </td>
                <td scope="col"></td>
            </tr>
        </thead>
        <tbody>
            <?php $i = 0; ?>
            @foreach ($contacts as $c)
            <?php $i++; ?>
            <tr>
                <td class="row">{{ $i }}</td>
                <td>{{ $c->name }}</td>
                <td>{{ $c->phone }}</td>
                <td>
                    <button wire:click="getContact({{ $c->id }})" class="btn btn-success text-white">edit</button>
                    <button wire:click="deleteContact({{ $c->id }})" class="btn btn-danger text-white">hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $contacts->links() }}
</div>
