@extends('administrador.plantilla')

@section('title', 'Editar CarModel - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Editar CarModel</h1>
    <a href="{{ route('admin.carmodels.index') }}" class="btn btn-secondary">Volver</a>
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
        <form method="POST" action="{{ route('admin.carmodels.update', $) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="brand_id" class="form-label">Brand id</label>
                <select name="brand_id" id="brand_id" class="form-select" required>
                    <option value="">Seleccionar...</option>
                    @foreach($brands as $rel)
                        <option value="{{ $rel->id }}" {{ $->brand_id == $rel->id ? 'selected' : '' }}>{{ $rel->name ?? $rel->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $->name }}" required>
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control" value="{{ $->slug }}" >
            </div>
            <div class="mb-3">
                <label for="year_from" class="form-label">Year from</label>
                <input type="text" name="year_from" id="year_from" class="form-control" value="{{ $->year_from }}" >
            </div>
            <div class="mb-3">
                <label for="year_to" class="form-label">Year to</label>
                <input type="text" name="year_to" id="year_to" class="form-control" value="{{ $->year_to }}" >
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
