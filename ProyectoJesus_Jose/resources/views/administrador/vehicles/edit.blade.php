@extends('administrador.plantilla')

@section('title', 'Editar Vehicle - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Editar Vehicle</h1>
    <a href="{{ route('admin.vehicles.index') }}" class="btn btn-secondary">Volver</a>
</div>

@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('admin.vehicles.update', $) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="car_variant_id" class="form-label">Car variant id</label>
                <select name="car_variant_id" id="car_variant_id" class="form-select" required>
                    <option value="">Seleccionar...</option>
                    @foreach($carvariants as $rel)
                        <option value="{{ $rel->id }}" {{ $->car_variant_id == $rel->id ? 'selected' : '' }}>{{ $rel->name ?? $rel->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="vin" class="form-label">Vin</label>
                <input type="text" name="vin" id="vin" class="form-control" value="{{ $->vin }}" required>
            </div>
            <div class="mb-3">
                <label for="stock_code" class="form-label">Stock code</label>
                <input type="text" name="stock_code" id="stock_code" class="form-control" value="{{ $->stock_code }}" >
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="text" name="year" id="year" class="form-control" value="{{ $->year }}" >
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Color</label>
                <input type="text" name="color" id="color" class="form-control" value="{{ $->color }}" >
            </div>
            <div class="mb-3">
                <label for="mileage" class="form-label">Mileage</label>
                <input type="text" name="mileage" id="mileage" class="form-control" value="{{ $->mileage }}" >
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ $->price }}" >
            </div>
            <div class="mb-3">
                <label for="condition" class="form-label">Condition</label>
                <input type="text" name="condition" id="condition" class="form-control" value="{{ $->condition }}" >
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control" value="{{ $->description }}" >
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
