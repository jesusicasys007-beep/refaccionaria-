@extends('administrador.plantilla')

@section('title', 'Crear Order - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Crear Order</h1>
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
        <form method="POST" action="{{ route('admin.orders.store') }}">
            @csrf
            <div class="mb-3">
                <label for="user_id" class="form-label">User id</label>
                <select name="user_id" id="user_id" class="form-select" required>
                    <option value="">Seleccionar...</option>
                    @foreach($users as $rel)
                        <option value="{{ $rel->id }}">{{ $rel->name ?? $rel->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="order_number" class="form-label">Order number</label>
                <input type="text" name="order_number" id="order_number" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" name="status" id="status" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="total" class="form-label">Total</label>
                <input type="number" name="total" id="total" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="currency" class="form-label">Currency</label>
                <input type="text" name="currency" id="currency" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="shipping_address" class="form-label">Shipping address</label>
                <input type="text" name="shipping_address" id="shipping_address" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="notes" class="form-label">Notes</label>
                <input type="text" name="notes" id="notes" class="form-control" >
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
</div>
@endsection
