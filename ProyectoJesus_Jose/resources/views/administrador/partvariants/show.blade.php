@extends('administrador.plantilla')

@section('title', 'PartVariant - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>PartVariant</h1>
    <a href="{{ route('admin.partvariants.index') }}" class="btn btn-secondary">Volver</a>
</div>

<div class="card">
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-3">Part id</dt>
            <dd class="col-sm-9">{{ $->part_id ? $-> : 'N/A' }}</dd>
            <dt class="col-sm-3">Car variant id</dt>
            <dd class="col-sm-9">{{ $->car_variant_id ? $-> : 'N/A' }}</dd>
            <dt class="col-sm-3">Fitment notes</dt>
            <dd class="col-sm-9">{{ $->fitment_notes }}</dd>
            <dt class="col-sm-3">Direct fit</dt>
            <dd class="col-sm-9">{{ $->direct_fit }}</dd>
            <dt class="col-sm-3">Creado</dt>
            <dd class="col-sm-9">{{ $->created_at->format('d/m/Y H:i') }}</dd>
            <dt class="col-sm-3">Actualizado</dt>
            <dd class="col-sm-9">{{ $->updated_at->format('d/m/Y H:i') }}</dd>
        </dl>
    </div>
</div>
@endsection
