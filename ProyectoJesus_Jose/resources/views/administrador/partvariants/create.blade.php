@extends('administrador.plantilla')

@section('title', 'Crear PartVariant - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Crear PartVariant</h1>
    <a href="{{ route('admin.partvariants.index') }}" class="btn btn-secondary">Volver</a>
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
        <form method="POST" action="{{ route('admin.partvariants.store') }}">
            @csrf
            <div class="mb-3">
                <label for="part_id" class="form-label">Part id</label>
                <select name="part_id" id="part_id" class="form-select" required>
                    <option value="">Seleccionar...</option>
                    @foreach($parts as $rel)
                        <option value="{{ $rel->id }}">{{ $rel->name ?? $rel->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="car_variant_id" class="form-label">Car variant id</label>
                <select name="car_variant_id" id="car_variant_id" class="form-select" required>
                    <option value="">Seleccionar...</option>
                    @foreach($carvariants as $rel)
                        <option value="{{ $rel->id }}">{{ $rel->name ?? $rel->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="fitment_notes" class="form-label">Fitment notes</label>
                <input type="text" name="fitment_notes" id="fitment_notes" class="form-control" >
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="direct_fit" id="direct_fit" class="form-check-input" value="1">
                <label for="direct_fit" class="form-check-label">Direct fit</label>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
</div>
@endsection
