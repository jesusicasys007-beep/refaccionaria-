@extends('administrador.plantilla')

@section('title', 'Order - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Order</h1>
    <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">Volver</a>
</div>

<div class="card">
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-3">User id</dt>
            <dd class="col-sm-9">{{ $->user_id ? $-> : 'N/A' }}</dd>
            <dt class="col-sm-3">Order number</dt>
            <dd class="col-sm-9">{{ $->order_number }}</dd>
            <dt class="col-sm-3">Status</dt>
            <dd class="col-sm-9">{{ $->status }}</dd>
            <dt class="col-sm-3">Total</dt>
            <dd class="col-sm-9">{{ $->total }}</dd>
            <dt class="col-sm-3">Currency</dt>
            <dd class="col-sm-9">{{ $->currency }}</dd>
            <dt class="col-sm-3">Shipping address</dt>
            <dd class="col-sm-9">{{ $->shipping_address }}</dd>
            <dt class="col-sm-3">Notes</dt>
            <dd class="col-sm-9">{{ $->notes }}</dd>
            <dt class="col-sm-3">Creado</dt>
            <dd class="col-sm-9">{{ $->created_at->format('d/m/Y H:i') }}</dd>
            <dt class="col-sm-3">Actualizado</dt>
            <dd class="col-sm-9">{{ $->updated_at->format('d/m/Y H:i') }}</dd>
        </dl>
    </div>
</div>
@endsection
