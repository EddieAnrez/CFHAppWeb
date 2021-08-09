<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese nombre o correo de usuario">
        </div>
        @if ($users->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td width="40px">
                            <a class="btn btn-primary btn-sm d-inline-flex d-flex align-items-center" href="{{route('config.users.edit',$user)}}"><i class="fas fa-edit"></i>Editar</a>
                        </td>
                        
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{$users->links()}}
        </div>
        @else
        <div class="card-body">
            <strong>
                No Hay Registros...
            </strong>
        </div>
        @endif

    </div>
</div>
