@extends('administrador.plantilla')

@section('title', 'CarVariant - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>CarVariant</h1>
    <a href="{{ route('admin.carvariants.index') }}" class="btn btn-secondary">Volver</a>
</div>

<div class="card">
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-3">Car model id</dt>
            <dd class="col-sm-9">{{ $->car_model_id ? $-> : 'N/A' }}</dd>
            <dt class="col-sm-3">Name</dt>
            <dd class="col-sm-9">{{ $->name }}</dd>
            <dt class="col-sm-3">Trim</dt>
            <dd class="col-sm-9">{{ $->trim }}</dd>
            <dt class="col-sm-3">Engine</dt>
            <dd class="col-sm-9">{{ $->engine }}</dd>
            <dt class="col-sm-3">Transmission</dt>
            <dd class="col-sm-9">{{ $->transmission }}</dd>
            <dt class="col-sm-3">Fuel type</dt>
            <dd class="col-sm-9">{{ $->fuel_type }}</dd>
            <dt class="col-sm-3">Doors</dt>
            <dd class="col-sm-9">{{ $->doors }}</dd>
            <dt class="col-sm-3">Notes</dt>
            <dd class="col-sm-9">{{ $->notes }}</dd>
            <dt class="col-sm-3">Creado</dt>
            <dd class="col-sm-9">{{ $->created_at->format('d/m/Y H:i') }}</dd>
            <dt class="col-sm-3">Actualizado</dt>
            <dd class="col-sm-9">{{ $->updated_at->format('d/m/Y H:i') }}</dd>
        </dl>
    </div>
</div>
@endsection
