@extends('administrador.plantilla')

@section('title', 'Stock - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Stock</h1>
    <a href="{{ route('admin.stocks.index') }}" class="btn btn-secondary">Volver</a>
</div>

<div class="card">
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-3">Warehouse id</dt>
            <dd class="col-sm-9">{{ $->warehouse_id ? $-> : 'N/A' }}</dd>
            <dt class="col-sm-3">Part id</dt>
            <dd class="col-sm-9">{{ $->part_id ? $-> : 'N/A' }}</dd>
            <dt class="col-sm-3">Quantity</dt>
            <dd class="col-sm-9">{{ $->quantity }}</dd>
            <dt class="col-sm-3">Reserved</dt>
            <dd class="col-sm-9">{{ $->reserved }}</dd>
            <dt class="col-sm-3">Creado</dt>
            <dd class="col-sm-9">{{ $->created_at->format('d/m/Y H:i') }}</dd>
            <dt class="col-sm-3">Actualizado</dt>
            <dd class="col-sm-9">{{ $->updated_at->format('d/m/Y H:i') }}</dd>
        </dl>
    </div>
</div>
@endsection
