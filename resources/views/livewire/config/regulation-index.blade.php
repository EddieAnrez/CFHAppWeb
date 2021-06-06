<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese Ley o Reglamento">
    </div>

    @if ($regulations->count())
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
                @foreach ($regulations as $regulation)
                <tr>
                    <td>{{$regulation->id}}</td>
                    <td>{{$regulation->name}}</td>
                    <td  width="10px">
                        <a class="btn btn-primary btn-sm d-inline-flex d-flex align-items-center" href="{{route('config.regulations.edit', $regulation)}}"><i class="fas fa-edit"></i>Editar</a>
                    </td>
                    <td width="10px"> 
                        <form action="{{route('config.regulations.destroy', $regulation)}}"  method="POST">
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
        {{$regulations->links()}}
    </div>

 @else
    <div class="card-body">
        <strong>No Hay Locaciones ...</strong>
    </div>
 @endif
    



</div>

