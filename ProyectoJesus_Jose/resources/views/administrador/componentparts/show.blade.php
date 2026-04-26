@extends('administrador.plantilla')

@section('title', 'ComponentPart - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>ComponentPart</h1>
    <a href="{{ route('admin.componentparts.index') }}" class="btn btn-secondary">Volver</a>
</div>

<div class="card">
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-3">Part id</dt>
            <dd class="col-sm-9">{{ $->part_id ? $-> : 'N/A' }}</dd>
            <dt class="col-sm-3">Component id</dt>
            <dd class="col-sm-9">{{ $->component_id ? $-> : 'N/A' }}</dd>
            <dt class="col-sm-3">Role</dt>
            <dd class="col-sm-9">{{ $->role }}</dd>
            <dt class="col-sm-3">Quantity</dt>
            <dd class="col-sm-9">{{ $->quantity }}</dd>
            <dt class="col-sm-3">Creado</dt>
            <dd class="col-sm-9">{{ $->created_at->format('d/m/Y H:i') }}</dd>
            <dt class="col-sm-3">Actualizado</dt>
            <dd class="col-sm-9">{{ $->updated_at->format('d/m/Y H:i') }}</dd>
        </dl>
    </div>
</div>
@endsection
