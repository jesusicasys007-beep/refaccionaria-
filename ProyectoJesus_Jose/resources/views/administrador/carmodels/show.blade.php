@extends('administrador.plantilla')

@section('title', 'CarModel - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>CarModel</h1>
    <a href="{{ route('admin.carmodels.index') }}" class="btn btn-secondary">Volver</a>
</div>

<div class="card">
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-3">Brand id</dt>
            <dd class="col-sm-9">{{ $->brand_id ? $-> : 'N/A' }}</dd>
            <dt class="col-sm-3">Name</dt>
            <dd class="col-sm-9">{{ $->name }}</dd>
            <dt class="col-sm-3">Slug</dt>
            <dd class="col-sm-9">{{ $->slug }}</dd>
            <dt class="col-sm-3">Year from</dt>
            <dd class="col-sm-9">{{ $->year_from }}</dd>
            <dt class="col-sm-3">Year to</dt>
            <dd class="col-sm-9">{{ $->year_to }}</dd>
            <dt class="col-sm-3">Description</dt>
            <dd class="col-sm-9">{{ $->description }}</dd>
            <dt class="col-sm-3">Creado</dt>
            <dd class="col-sm-9">{{ $->created_at->format('d/m/Y H:i') }}</dd>
            <dt class="col-sm-3">Actualizado</dt>
            <dd class="col-sm-9">{{ $->updated_at->format('d/m/Y H:i') }}</dd>
        </dl>
    </div>
</div>
@endsection
