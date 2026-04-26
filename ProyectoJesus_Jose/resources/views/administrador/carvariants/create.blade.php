@extends('administrador.plantilla')

@section('title', 'Crear CarVariant - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Crear CarVariant</h1>
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
        <form method="POST" action="{{ route('admin.carvariants.store') }}">
            @csrf
            <div class="mb-3">
                <label for="car_model_id" class="form-label">Car model id</label>
                <select name="car_model_id" id="car_model_id" class="form-select" required>
                    <option value="">Seleccionar...</option>
                    @foreach($carmodels as $rel)
                        <option value="{{ $rel->id }}">{{ $rel->name ?? $rel->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="trim" class="form-label">Trim</label>
                <input type="text" name="trim" id="trim" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="engine" class="form-label">Engine</label>
                <input type="text" name="engine" id="engine" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="transmission" class="form-label">Transmission</label>
                <input type="text" name="transmission" id="transmission" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="fuel_type" class="form-label">Fuel type</label>
                <input type="text" name="fuel_type" id="fuel_type" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="doors" class="form-label">Doors</label>
                <input type="text" name="doors" id="doors" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="notes" class="form-label">Notes</label>
                <input type="text" name="notes" id="notes" class="form-control" >
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
</div>
@endsection
