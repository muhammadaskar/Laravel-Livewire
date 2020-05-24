<div>

    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    <livewire:contact-create>
    </livewire:contact-create>

    <hr>

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
                    <button class="btn btn-success text-white">edit</button>
                    <button class="btn btn-danger text-white">hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
