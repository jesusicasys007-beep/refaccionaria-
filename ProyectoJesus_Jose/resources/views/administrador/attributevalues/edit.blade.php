@extends('administrador.plantilla')

@section('title', 'Editar AttributeValue - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Editar AttributeValue</h1>
    <a href="{{ route('admin.attributevalues.index') }}" class="btn btn-secondary">Volver</a>
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
        <form method="POST" action="{{ route('admin.attributevalues.update', $) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="attribute_id" class="form-label">Attribute id</label>
                <select name="attribute_id" id="attribute_id" class="form-select" required>
                    <option value="">Seleccionar...</option>
                    @foreach($attributes as $rel)
                        <option value="{{ $rel->id }}" {{ $->attribute_id == $rel->id ? 'selected' : '' }}>{{ $rel->name ?? $rel->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="value" class="form-label">Value</label>
                <input type="text" name="value" id="value" class="form-control" value="{{ $->value }}" >
            </div>
            <div class="mb-3">
                <label for="unit" class="form-label">Unit</label>
                <input type="text" name="unit" id="unit" class="form-control" value="{{ $->unit }}" >
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
