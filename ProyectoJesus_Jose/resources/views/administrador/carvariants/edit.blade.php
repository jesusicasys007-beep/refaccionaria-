@extends('administrador.plantilla')

@section('title', 'Editar CarVariant - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Editar CarVariant</h1>
    <a href="{{ route('admin.carvariants.index') }}" class="btn btn-secondary">Volver</a>
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
        <form method="POST" action="{{ route('admin.carvariants.update', $) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="car_model_id" class="form-label">Car model id</label>
                <select name="car_model_id" id="car_model_id" class="form-select" required>
                    <option value="">Seleccionar...</option>
                    @foreach($carmodels as $rel)
                        <option value="{{ $rel->id }}" {{ $->car_model_id == $rel->id ? 'selected' : '' }}>{{ $rel->name ?? $rel->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $->name }}" required>
            </div>
            <div class="mb-3">
                <label for="trim" class="form-label">Trim</label>
                <input type="text" name="trim" id="trim" class="form-control" value="{{ $->trim }}" >
            </div>
            <div class="mb-3">
                <label for="engine" class="form-label">Engine</label>
                <input type="text" name="engine" id="engine" class="form-control" value="{{ $->engine }}" >
            </div>
            <div class="mb-3">
                <label for="transmission" class="form-label">Transmission</label>
                <input type="text" name="transmission" id="transmission" class="form-control" value="{{ $->transmission }}" >
            </div>
            <div class="mb-3">
                <label for="fuel_type" class="form-label">Fuel type</label>
                <input type="text" name="fuel_type" id="fuel_type" class="form-control" value="{{ $->fuel_type }}" >
            </div>
            <div class="mb-3">
                <label for="doors" class="form-label">Doors</label>
                <input type="text" name="doors" id="doors" class="form-control" value="{{ $->doors }}" >
            </div>
            <div class="mb-3">
                <label for="notes" class="form-label">Notes</label>
                <input type="text" name="notes" id="notes" class="form-control" value="{{ $->notes }}" >
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
