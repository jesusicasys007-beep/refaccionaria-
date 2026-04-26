@extends('administrador.plantilla')

@section('title', 'Editar ComponentPart - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Editar ComponentPart</h1>
    <a href="{{ route('admin.componentparts.index') }}" class="btn btn-secondary">Volver</a>
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
        <form method="POST" action="{{ route('admin.componentparts.update', $) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="part_id" class="form-label">Part id</label>
                <select name="part_id" id="part_id" class="form-select" required>
                    <option value="">Seleccionar...</option>
                    @foreach($parts as $rel)
                        <option value="{{ $rel->id }}" {{ $->part_id == $rel->id ? 'selected' : '' }}>{{ $rel->name ?? $rel->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="component_id" class="form-label">Component id</label>
                <select name="component_id" id="component_id" class="form-select" required>
                    <option value="">Seleccionar...</option>
                    @foreach($components as $rel)
                        <option value="{{ $rel->id }}" {{ $->component_id == $rel->id ? 'selected' : '' }}>{{ $rel->name ?? $rel->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <input type="text" name="role" id="role" class="form-control" value="{{ $->role }}" >
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $->quantity }}" >
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
