@extends('administrador.plantilla')

@section('title', 'Editar PriceHistory - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Editar PriceHistory</h1>
    <a href="{{ route('admin.pricehistorys.index') }}" class="btn btn-secondary">Volver</a>
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
        <form method="POST" action="{{ route('admin.pricehistorys.update', $) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="priceable_id" class="form-label">Priceable id</label>
                <input type="number" name="priceable_id" id="priceable_id" class="form-control" value="{{ $->priceable_id }}" >
            </div>
            <div class="mb-3">
                <label for="priceable_type" class="form-label">Priceable type</label>
                <input type="number" name="priceable_type" id="priceable_type" class="form-control" value="{{ $->priceable_type }}" >
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ $->price }}" >
            </div>
            <div class="mb-3">
                <label for="currency" class="form-label">Currency</label>
                <input type="text" name="currency" id="currency" class="form-control" value="{{ $->currency }}" >
            </div>
            <div class="mb-3">
                <label for="user_id" class="form-label">User id</label>
                <select name="user_id" id="user_id" class="form-select" required>
                    <option value="">Seleccionar...</option>
                    @foreach($users as $rel)
                        <option value="{{ $rel->id }}" {{ $->user_id == $rel->id ? 'selected' : '' }}>{{ $rel->name ?? $rel->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="effective_at" class="form-label">Effective at</label>
                <input type="text" name="effective_at" id="effective_at" class="form-control" value="{{ $->effective_at }}" >
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
