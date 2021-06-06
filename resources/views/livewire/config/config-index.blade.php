@if ($configs->count())
@foreach ($configs as $config)
<div class="card">
  <div class="card-header">
    {{$config->created_at}} , <span class="text-muted">Por {{$config->user->name}}</span>
  </div>
  <div class="card-body">
    <h5 class="card-title font-weight-bold text-uppercase">{{$config->title}}</h5>
    <p class="card-text">{{$config->body}}.</p>
    
  </div>
</div> 
@endforeach
<div class="card-footer text-center">
  {{ $configs->links() }}
</div>


@else
        <div class="card-body">
            <strong>No Hay Registro...</strong>
        </div>
@endif