@extends('administrador.plantilla')

@section('title', 'Part - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Part</h1>
    <a href="{{ route('admin.parts.index') }}" class="btn btn-secondary">Volver</a>
</div>

<div class="card">
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-3">Sku</dt>
            <dd class="col-sm-9">{{ $->sku }}</dd>
            <dt class="col-sm-3">Name</dt>
            <dd class="col-sm-9">{{ $->name }}</dd>
            <dt class="col-sm-3">Category id</dt>
            <dd class="col-sm-9">{{ $->category_id ? $-> : 'N/A' }}</dd>
            <dt class="col-sm-3">Manufacturer id</dt>
            <dd class="col-sm-9">{{ $->manufacturer_id ? $-> : 'N/A' }}</dd>
            <dt class="col-sm-3">Description</dt>
            <dd class="col-sm-9">{{ $->description }}</dd>
            <dt class="col-sm-3">Price</dt>
            <dd class="col-sm-9">{{ $->price }}</dd>
            <dt class="col-sm-3">Currency</dt>
            <dd class="col-sm-9">{{ $->currency }}</dd>
            <dt class="col-sm-3">Weight</dt>
            <dd class="col-sm-9">{{ $->weight }}</dd>
            <dt class="col-sm-3">Dimensions</dt>
            <dd class="col-sm-9">{{ $->dimensions }}</dd>
            <dt class="col-sm-3">Stock</dt>
            <dd class="col-sm-9">{{ $->stock }}</dd>
            <dt class="col-sm-3">Active</dt>
            <dd class="col-sm-9">{{ $->active }}</dd>
            <dt class="col-sm-3">Creado</dt>
            <dd class="col-sm-9">{{ $->created_at->format('d/m/Y H:i') }}</dd>
            <dt class="col-sm-3">Actualizado</dt>
            <dd class="col-sm-9">{{ $->updated_at->format('d/m/Y H:i') }}</dd>
        </dl>
    </div>
</div>
@endsection
