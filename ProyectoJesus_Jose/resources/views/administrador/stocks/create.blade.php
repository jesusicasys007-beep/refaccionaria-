@extends('administrador.plantilla')

@section('title', 'Crear Stock - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Crear Stock</h1>
    <a href="{{ route('admin.stocks.index') }}" class="btn btn-secondary">Volver</a>
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
        <form method="POST" action="{{ route('admin.stocks.store') }}">
            @csrf
            <div class="mb-3">
                <label for="warehouse_id" class="form-label">Warehouse id</label>
                <select name="warehouse_id" id="warehouse_id" class="form-select" required>
                    <option value="">Seleccionar...</option>
                    @foreach($warehouses as $rel)
                        <option value="{{ $rel->id }}">{{ $rel->name ?? $rel->id }}</option>
                    @endforeach
                </select>
            </div>
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
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" name="quantity" id="quantity" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="reserved" class="form-label">Reserved</label>
                <input type="text" name="reserved" id="reserved" class="form-control" >
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
</div>
@endsection
