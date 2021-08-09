<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese Locación">
    </div>

    @if ($locations->count())
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
                @foreach ($locations as $location)
                <tr>
                    <td>{{$location->id}}</td>
                    <td>{{$location->name}}</td>
                    <td  width="10px">
                        <a class="btn btn-primary btn-sm d-inline-flex d-flex align-items-center" href="{{route('config.locations.edit', $location)}}"><i class="fas fa-edit"></i>Editar</a>
                    </td>
                    <td width="10px">  
                        <form action="{{route('config.locations.destroy', $location)}}"  method="POST">
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
        {{$locations->links()}}
    </div>

 @else
    <div class="card-body">
        <strong>No Hay Locaciones ...</strong>
    </div>
 @endif
    



</div>
