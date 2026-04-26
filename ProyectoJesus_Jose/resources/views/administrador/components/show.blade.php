@extends('administrador.plantilla')

@section('title', 'Component - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Component</h1>
    <a href="{{ route('admin.components.index') }}" class="btn btn-secondary">Volver</a>
</div>

<div class="card">
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-3">Name</dt>
            <dd class="col-sm-9">{{ $->name }}</dd>
            <dt class="col-sm-3">Part number</dt>
            <dd class="col-sm-9">{{ $->part_number }}</dd>
            <dt class="col-sm-3">Description</dt>
            <dd class="col-sm-9">{{ $->description }}</dd>
            <dt class="col-sm-3">Creado</dt>
            <dd class="col-sm-9">{{ $->created_at->format('d/m/Y H:i') }}</dd>
            <dt class="col-sm-3">Actualizado</dt>
            <dd class="col-sm-9">{{ $->updated_at->format('d/m/Y H:i') }}</dd>
        </dl>
    </div>
</div>
@endsection
