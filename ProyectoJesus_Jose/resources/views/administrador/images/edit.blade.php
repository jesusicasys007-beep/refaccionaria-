@extends('administrador.plantilla')

@section('title', 'Editar Image - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Editar Image</h1>
    <a href="{{ route('admin.images.index') }}" class="btn btn-secondary">Volver</a>
</div>

@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('admin.images.update', $) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="path" class="form-label">Path</label>
                <input type="text" name="path" id="path" class="form-control" value="{{ $->path }}" >
            </div>
            <div class="mb-3">
                <label for="disk" class="form-label">Disk</label>
                <input type="text" name="disk" id="disk" class="form-control" value="{{ $->disk }}" >
            </div>
            <div class="mb-3">
                <label for="mime_type" class="form-label">Mime type</label>
                <input type="text" name="mime_type" id="mime_type" class="form-control" value="{{ $->mime_type }}" >
            </div>
            <div class="mb-3">
                <label for="imageable_id" class="form-label">Imageable id</label>
                <input type="text" name="imageable_id" id="imageable_id" class="form-control" value="{{ $->imageable_id }}" >
            </div>
            <div class="mb-3">
                <label for="imageable_type" class="form-label">Imageable type</label>
                <input type="text" name="imageable_type" id="imageable_type" class="form-control" value="{{ $->imageable_type }}" >
            </div>
            <div class="mb-3">
                <label for="alt" class="form-label">Alt</label>
                <input type="text" name="alt" id="alt" class="form-control" value="{{ $->alt }}" >
            </div>
            <div class="mb-3">
                <label for="order" class="form-label">Order</label>
                <input type="text" name="order" id="order" class="form-control" value="{{ $->order }}" >
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
