@extends('administrador.plantilla')

@section('title', 'Editar Vendor - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Editar Vendor</h1>
    <a href="{{ route('admin.vendors.index') }}" class="btn btn-secondary">Volver</a>
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
        <form method="POST" action="{{ route('admin.vendors.update', $) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $->name }}" required>
            </div>
            <div class="mb-3">
                <label for="contact_person" class="form-label">Contact person</label>
                <input type="text" name="contact_person" id="contact_person" class="form-control" value="{{ $->contact_person }}" >
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $->email }}" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ $->phone }}" >
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ $->address }}" >
            </div>
            <div class="mb-3">
                <label for="tax_id" class="form-label">Tax id</label>
                <input type="text" name="tax_id" id="tax_id" class="form-control" value="{{ $->tax_id }}" >
            </div>
            <div class="mb-3">
                <label for="notes" class="form-label">Notes</label>
                <input type="text" name="notes" id="notes" class="form-control" value="{{ $->notes }}" >
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
