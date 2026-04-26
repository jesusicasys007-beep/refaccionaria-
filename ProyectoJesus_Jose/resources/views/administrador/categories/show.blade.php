@extends('administrador.plantilla')

@section('title', 'Categorie - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Categorie</h1>
    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Volver</a>
</div>

<div class="card">
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-3">Name</dt>
            <dd class="col-sm-9">{{ $->name }}</dd>
            <dt class="col-sm-3">Slug</dt>
            <dd class="col-sm-9">{{ $->slug }}</dd>
            <dt class="col-sm-3">Parent id</dt>
            <dd class="col-sm-9">{{ $->parent_id ? $-> : 'N/A' }}</dd>
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
