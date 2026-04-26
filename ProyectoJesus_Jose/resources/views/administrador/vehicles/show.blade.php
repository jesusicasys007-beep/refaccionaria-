@extends('administrador.plantilla')

@section('title', 'Vehicle - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Vehicle</h1>
    <a href="{{ route('admin.vehicles.index') }}" class="btn btn-secondary">Volver</a>
</div>

<div class="card">
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-3">Car variant id</dt>
            <dd class="col-sm-9">{{ $->car_variant_id ? $-> : 'N/A' }}</dd>
            <dt class="col-sm-3">Vin</dt>
            <dd class="col-sm-9">{{ $->vin }}</dd>
            <dt class="col-sm-3">Stock code</dt>
            <dd class="col-sm-9">{{ $->stock_code }}</dd>
            <dt class="col-sm-3">Year</dt>
            <dd class="col-sm-9">{{ $->year }}</dd>
            <dt class="col-sm-3">Color</dt>
            <dd class="col-sm-9">{{ $->color }}</dd>
            <dt class="col-sm-3">Mileage</dt>
            <dd class="col-sm-9">{{ $->mileage }}</dd>
            <dt class="col-sm-3">Price</dt>
            <dd class="col-sm-9">{{ $->price }}</dd>
            <dt class="col-sm-3">Condition</dt>
            <dd class="col-sm-9">{{ $->condition }}</dd>
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
