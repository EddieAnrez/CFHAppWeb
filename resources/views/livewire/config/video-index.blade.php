<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Buscar Nombre Video">
    </div>


    @if ($videos->count())

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>CÓDIGO</th>
                        <th colspan="2"></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($videos as $video)
                        <tr>
                            <td>{{ $video->id }}</td>
                            <td>{{ $video->name }}</td>
                            <td>{{ $video->url }}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm d-inline-flex d-flex align-items-center" href="{{ route('config.videos.edit', $video) }}"><i class="fas fa-edit mr-1"></i>Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('config.videos.destroy', $video)}}"  method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm d-inline-flex d-flex align-items-center"><i class="fas fa-trash-alt mr-1"></i>Eliminar</button>
                                </form>
                            </td>
                        </tr>

                    @endforeach

                </tbody>
            </table>
        </div>

        <div class="card-footer text-center">
            {{ $videos->links() }}
        </div>

    @else
        <div class="card-body">
            <strong>No Hay Registro...</strong>
        </div>
    @endif
</div>

