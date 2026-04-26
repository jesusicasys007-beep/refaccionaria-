@extends('administrador.plantilla')

@section('title', 'Image - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Image</h1>
    <a href="{{ route('admin.images.index') }}" class="btn btn-secondary">Volver</a>
</div>

<div class="card">
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-3">Path</dt>
            <dd class="col-sm-9">{{ $->path }}</dd>
            <dt class="col-sm-3">Disk</dt>
            <dd class="col-sm-9">{{ $->disk }}</dd>
            <dt class="col-sm-3">Mime type</dt>
            <dd class="col-sm-9">{{ $->mime_type }}</dd>
            <dt class="col-sm-3">Imageable id</dt>
            <dd class="col-sm-9">{{ $->imageable_id }}</dd>
            <dt class="col-sm-3">Imageable type</dt>
            <dd class="col-sm-9">{{ $->imageable_type }}</dd>
            <dt class="col-sm-3">Alt</dt>
            <dd class="col-sm-9">{{ $->alt }}</dd>
            <dt class="col-sm-3">Order</dt>
            <dd class="col-sm-9">{{ $->order }}</dd>
            <dt class="col-sm-3">Creado</dt>
            <dd class="col-sm-9">{{ $->created_at->format('d/m/Y H:i') }}</dd>
            <dt class="col-sm-3">Actualizado</dt>
            <dd class="col-sm-9">{{ $->updated_at->format('d/m/Y H:i') }}</dd>
        </dl>
    </div>
</div>
@endsection
