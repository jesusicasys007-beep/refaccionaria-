@extends('administrador.plantilla')

@section('title', 'Editar OrderItem - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Editar OrderItem</h1>
    <a href="{{ route('admin.orderitems.index') }}" class="btn btn-secondary">Volver</a>
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
        <form method="POST" action="{{ route('admin.orderitems.update', $) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="order_id" class="form-label">Order id</label>
                <select name="order_id" id="order_id" class="form-select" required>
                    <option value="">Seleccionar...</option>
                    @foreach($orders as $rel)
                        <option value="{{ $rel->id }}" {{ $->order_id == $rel->id ? 'selected' : '' }}>{{ $rel->name ?? $rel->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="item_id" class="form-label">Item id</label>
                <input type="text" name="item_id" id="item_id" class="form-control" value="{{ $->item_id }}" >
            </div>
            <div class="mb-3">
                <label for="item_type" class="form-label">Item type</label>
                <input type="text" name="item_type" id="item_type" class="form-control" value="{{ $->item_type }}" >
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control" value="{{ $->description }}" >
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $->quantity }}" >
            </div>
            <div class="mb-3">
                <label for="unit_price" class="form-label">Unit price</label>
                <input type="number" name="unit_price" id="unit_price" class="form-control" value="{{ $->unit_price }}" >
            </div>
            <div class="mb-3">
                <label for="total" class="form-label">Total</label>
                <input type="number" name="total" id="total" class="form-control" value="{{ $->total }}" >
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
