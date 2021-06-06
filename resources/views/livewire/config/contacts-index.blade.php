<div>
   
<div class="card">
    @if ($contacts->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr></tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Status</th>
                <th>Fecha Creado</th>
                <th>Fecha Actualizado</th>
                <th colspan="2"></th>

            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    @if($contact->status=='Sin Leer')
                    <tr class="text-danger">
                    @else 
                    <tr>
                     @endif
                         <td>{{ $contact->id }}</td>
                        
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->status }}</td>
                        <td>{{ $contact->created_at }}</td>
                        <td>{{ $contact->updated_at }}</td> 
                        <td width="10px">
                            <a class="btn btn-primary btn-sm d-inline-flex d-flex align-items-center" href="{{ route('config.contacts.edit', $contact) }}"><i class="far fa-comment-dots mr-1"></i>Revisar</a>
                        </td>
                        <td width="10px">
                            <form action="{{ route('config.contacts.destroy', $contact) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm d-inline-flex d-flex align-items-center"><i class="fas fa-trash-alt mr-1"></i>Eliminar</button> 
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>
</div>




<div class="card-footer text-center">
    {{ $contacts->links() }}
  </div>

  @else
    <div class="card-body">
        <strong>No Hay Mensajes ...</strong>
    </div>
 @endif
 
</div>