@extends('administrador.plantilla')

@section('title', 'Warehouse - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Warehouse</h1>
    <a href="{{ route('admin.warehouses.index') }}" class="btn btn-secondary">Volver</a>
</div>

<div class="card">
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-3">Name</dt>
            <dd class="col-sm-9">{{ $->name }}</dd>
            <dt class="col-sm-3">Address</dt>
            <dd class="col-sm-9">{{ $->address }}</dd>
            <dt class="col-sm-3">Manager</dt>
            <dd class="col-sm-9">{{ $->manager }}</dd>
            <dt class="col-sm-3">Phone</dt>
            <dd class="col-sm-9">{{ $->phone }}</dd>
            <dt class="col-sm-3">Email</dt>
            <dd class="col-sm-9">{{ $->email }}</dd>
            <dt class="col-sm-3">Capacity</dt>
            <dd class="col-sm-9">{{ $->capacity }}</dd>
            <dt class="col-sm-3">Creado</dt>
            <dd class="col-sm-9">{{ $->created_at->format('d/m/Y H:i') }}</dd>
            <dt class="col-sm-3">Actualizado</dt>
            <dd class="col-sm-9">{{ $->updated_at->format('d/m/Y H:i') }}</dd>
        </dl>
    </div>
</div>
@endsection
