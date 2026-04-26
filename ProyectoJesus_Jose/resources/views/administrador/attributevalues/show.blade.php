@extends('administrador.plantilla')

@section('title', 'AttributeValue - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>AttributeValue</h1>
    <a href="{{ route('admin.attributevalues.index') }}" class="btn btn-secondary">Volver</a>
</div>

<div class="card">
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-3">Attribute id</dt>
            <dd class="col-sm-9">{{ $->attribute_id ? $-> : 'N/A' }}</dd>
            <dt class="col-sm-3">Value</dt>
            <dd class="col-sm-9">{{ $->value }}</dd>
            <dt class="col-sm-3">Unit</dt>
            <dd class="col-sm-9">{{ $->unit }}</dd>
            <dt class="col-sm-3">Creado</dt>
            <dd class="col-sm-9">{{ $->created_at->format('d/m/Y H:i') }}</dd>
            <dt class="col-sm-3">Actualizado</dt>
            <dd class="col-sm-9">{{ $->updated_at->format('d/m/Y H:i') }}</dd>
        </dl>
    </div>
</div>
@endsection
