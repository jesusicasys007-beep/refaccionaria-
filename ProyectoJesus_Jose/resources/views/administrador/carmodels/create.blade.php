@extends('administrador.plantilla')

@section('title', 'Crear CarModel - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Crear CarModel</h1>
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
        <form method="POST" action="{{ route('admin.carmodels.store') }}">
            @csrf
            <div class="mb-3">
                <label for="brand_id" class="form-label">Brand id</label>
                <select name="brand_id" id="brand_id" class="form-select" required>
                    <option value="">Seleccionar...</option>
                    @foreach($brands as $rel)
                        <option value="{{ $rel->id }}">{{ $rel->name ?? $rel->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="year_from" class="form-label">Year from</label>
                <input type="text" name="year_from" id="year_from" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="year_to" class="form-label">Year to</label>
                <input type="text" name="year_to" id="year_to" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control" >
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
</div>
@endsection
