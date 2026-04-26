@extends('administrador.plantilla')

@section('title', 'Crear Part - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Crear Part</h1>
    <a href="{{ route('admin.parts.index') }}" class="btn btn-secondary">Volver</a>
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
        <form method="POST" action="{{ route('admin.parts.store') }}">
            @csrf
            <div class="mb-3">
                <label for="sku" class="form-label">Sku</label>
                <input type="text" name="sku" id="sku" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Category id</label>
                <select name="category_id" id="category_id" class="form-select" required>
                    <option value="">Seleccionar...</option>
                    @foreach($categories as $rel)
                        <option value="{{ $rel->id }}">{{ $rel->name ?? $rel->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="manufacturer_id" class="form-label">Manufacturer id</label>
                <select name="manufacturer_id" id="manufacturer_id" class="form-select" required>
                    <option value="">Seleccionar...</option>
                    @foreach($manufacturers as $rel)
                        <option value="{{ $rel->id }}">{{ $rel->name ?? $rel->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="currency" class="form-label">Currency</label>
                <input type="text" name="currency" id="currency" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="weight" class="form-label">Weight</label>
                <input type="text" name="weight" id="weight" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="dimensions" class="form-label">Dimensions</label>
                <input type="text" name="dimensions" id="dimensions" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="text" name="stock" id="stock" class="form-control" >
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="active" id="active" class="form-check-input" value="1">
                <label for="active" class="form-check-label">Active</label>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
</div>
@endsection
