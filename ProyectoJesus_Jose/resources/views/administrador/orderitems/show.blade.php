@extends('administrador.plantilla')

@section('title', 'OrderItem - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>OrderItem</h1>
    <a href="{{ route('admin.orderitems.index') }}" class="btn btn-secondary">Volver</a>
</div>

<div class="card">
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-3">Order id</dt>
            <dd class="col-sm-9">{{ $->order_id ? $-> : 'N/A' }}</dd>
            <dt class="col-sm-3">Item id</dt>
            <dd class="col-sm-9">{{ $->item_id }}</dd>
            <dt class="col-sm-3">Item type</dt>
            <dd class="col-sm-9">{{ $->item_type }}</dd>
            <dt class="col-sm-3">Description</dt>
            <dd class="col-sm-9">{{ $->description }}</dd>
            <dt class="col-sm-3">Quantity</dt>
            <dd class="col-sm-9">{{ $->quantity }}</dd>
            <dt class="col-sm-3">Unit price</dt>
            <dd class="col-sm-9">{{ $->unit_price }}</dd>
            <dt class="col-sm-3">Total</dt>
            <dd class="col-sm-9">{{ $->total }}</dd>
            <dt class="col-sm-3">Creado</dt>
            <dd class="col-sm-9">{{ $->created_at->format('d/m/Y H:i') }}</dd>
            <dt class="col-sm-3">Actualizado</dt>
            <dd class="col-sm-9">{{ $->updated_at->format('d/m/Y H:i') }}</dd>
        </dl>
    </div>
</div>
@endsection
