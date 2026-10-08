<div class="mt-5">

    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-3">
        <input type="text" wire:model.live='search' placeholder="Pesquisar..." class="form-control">
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Ambiente</th>
                <th scope="col">Código</th>
                <th scope="col">Tipo</th>
                <th scope="col">Descrição</th>
                <th scope="col">Status</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sensors as $s)
                <tr>
                    <th scope="row">{{ $s->ambiente_id}}</th>
                    <td>{{ $s->codigo }}</td>
                    <td>{{ $s->tipo }}</td>
                    <td>{{ $s->descricao }}</td>
                    <td>
                    <td><input class="form-check-input" type="checkbox"
                    role="switch" id="status- {{$sensor->id}}"
                    wire:click="status({{$sensor->id}})"
                    @checked($sensor->status)>

                    <span class="badge bg-{{$sensor->status ? 'success': 'danger'}}">
                        {{$sensor->status ? 'ATIVO' : 'INATIVO'}}
                    </span>
                </td>

                <td>
                    <a href="{{ route('sensor.edit', $sensor->id) }}"
                        class="btn btn-sm btn-outline-success me-1" data-bs-toggles='
                        title="editar'>
<i class="bi bi-pencil"></i>


                </tr>
            @endforeach
        </tbody>
    </table>
</div>