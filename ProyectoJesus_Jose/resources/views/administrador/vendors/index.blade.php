@extends('administrador.plantilla')

@section('title', 'Vendor - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Vendor</h1>
    <a href="{{ route('admin.vendors.create') }}" class="btn btn-primary">Crear Nuevo</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card">
    <div class="card-body">
<div class="mb-3">
            <form method="GET" class="d-flex">
                <input type="text" name="search" class="form-control me-2" placeholder="Buscar por name" value="{{ request('search') }}">
                <button type="submit" class="btn btn-outline-secondary">Buscar</button>
            </form>
        </div>
<div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Contact person</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Tax id</th>
                        <th>Notes</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($vendors as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->contact_person }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->tax_id }}</td>
                            <td>{{ $item->notes }}</td>
                            <td>
                                <a href="{{ route('admin.vendors.show', $item) }}" class="btn btn-sm btn-info">Ver</a>
                                <a href="{{ route('admin.vendors.edit', $item) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form method="POST" action="{{ route('admin.vendors.destroy', $item) }}" class="d-inline" onsubmit="return confirm('¿Estás seguro?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">No hay registros</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $vendors->links() }}
    </div>
</div>
@endsection
