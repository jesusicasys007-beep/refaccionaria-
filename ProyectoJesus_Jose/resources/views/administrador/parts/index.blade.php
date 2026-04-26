@extends('administrador.plantilla')

@section('title', 'Part - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Part</h1>
    <a href="{{ route('admin.parts.create') }}" class="btn btn-primary">Crear Nuevo</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card">
    <div class="card-body">
<div class="mb-3">
            <form method="GET" class="d-flex">
                <input type="text" name="search" class="form-control me-2" placeholder="Buscar por sku" value="{{ request('search') }}">
                <button type="submit" class="btn btn-outline-secondary">Buscar</button>
            </form>
        </div>
<div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Sku</th>
                        <th>Name</th>
                        <th>Category id</th>
                        <th>Manufacturer id</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Currency</th>
                        <th>Weight</th>
                        <th>Dimensions</th>
                        <th>Stock</th>
                        <th>Active</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($parts as $item)
                        <tr>
                            <td>{{ $item->sku }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->category_id ? $item-> : 'N/A' }}</td>
                            <td>{{ $item->manufacturer_id ? $item-> : 'N/A' }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->currency }}</td>
                            <td>{{ $item->weight }}</td>
                            <td>{{ $item->dimensions }}</td>
                            <td>{{ $item->stock }}</td>
                            <td>{{ $item->active }}</td>
                            <td>
                                <a href="{{ route('admin.parts.show', $item) }}" class="btn btn-sm btn-info">Ver</a>
                                <a href="{{ route('admin.parts.edit', $item) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form method="POST" action="{{ route('admin.parts.destroy', $item) }}" class="d-inline" onsubmit="return confirm('¿Estás seguro?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="12" class="text-center">No hay registros</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $parts->links() }}
    </div>
</div>
@endsection
