@extends('administrador.plantilla')

@section('title', 'PriceHistory - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>PriceHistory</h1>
    <a href="{{ route('admin.pricehistorys.index') }}" class="btn btn-secondary">Volver</a>
</div>

<div class="card">
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-3">Priceable id</dt>
            <dd class="col-sm-9">{{ $->priceable_id }}</dd>
            <dt class="col-sm-3">Priceable type</dt>
            <dd class="col-sm-9">{{ $->priceable_type }}</dd>
            <dt class="col-sm-3">Price</dt>
            <dd class="col-sm-9">{{ $->price }}</dd>
            <dt class="col-sm-3">Currency</dt>
            <dd class="col-sm-9">{{ $->currency }}</dd>
            <dt class="col-sm-3">User id</dt>
            <dd class="col-sm-9">{{ $->user_id ? $-> : 'N/A' }}</dd>
            <dt class="col-sm-3">Effective at</dt>
            <dd class="col-sm-9">{{ $->effective_at }}</dd>
            <dt class="col-sm-3">Creado</dt>
            <dd class="col-sm-9">{{ $->created_at->format('d/m/Y H:i') }}</dd>
            <dt class="col-sm-3">Actualizado</dt>
            <dd class="col-sm-9">{{ $->updated_at->format('d/m/Y H:i') }}</dd>
        </dl>
    </div>
</div>
@endsection
