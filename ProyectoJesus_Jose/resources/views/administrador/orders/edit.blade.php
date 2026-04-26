@extends('administrador.plantilla')

@section('title', 'Editar Order - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Editar Order</h1>
    <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">Volver</a>
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
        <form method="POST" action="{{ route('admin.orders.update', $) }}">
            @csrf
            @method('PUT')
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
                <label for="order_number" class="form-label">Order number</label>
                <input type="text" name="order_number" id="order_number" class="form-control" value="{{ $->order_number }}" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" name="status" id="status" class="form-control" value="{{ $->status }}" >
            </div>
            <div class="mb-3">
                <label for="total" class="form-label">Total</label>
                <input type="number" name="total" id="total" class="form-control" value="{{ $->total }}" >
            </div>
            <div class="mb-3">
                <label for="currency" class="form-label">Currency</label>
                <input type="text" name="currency" id="currency" class="form-control" value="{{ $->currency }}" >
            </div>
            <div class="mb-3">
                <label for="shipping_address" class="form-label">Shipping address</label>
                <input type="text" name="shipping_address" id="shipping_address" class="form-control" value="{{ $->shipping_address }}" >
            </div>
            <div class="mb-3">
                <label for="notes" class="form-label">Notes</label>
                <input type="text" name="notes" id="notes" class="form-control" value="{{ $->notes }}" >
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
