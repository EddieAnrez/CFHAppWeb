<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese Trámite o Servicio">
    </div>

    @if ($permissions->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th colspan="2"></th>
                </tr>

            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td>{{$permission->id}}</td>
                    <td>{{$permission->name}}</td>
                    <td  width="10px">
                        <a class="btn btn-primary btn-sm d-inline-flex d-flex align-items-center" href="{{route('config.permissions.edit', $permission)}}"><i class="fas fa-edit"></i>Editar</a>
                    </td>
                    <td width="10px"> 
                        <form action="{{route('config.permissions.destroy', $permission)}}"  method="POST">
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
        {{$permissions->links()}}
    </div>

 @else
    <div class="card-body">
        <strong>No Hay Trámites o Servicios ...</strong>
    </div>
 @endif
    



</div>


