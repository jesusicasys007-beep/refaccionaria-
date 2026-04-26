@extends('administrador.plantilla')

@section('title', 'CarVariant - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>CarVariant</h1>
    <a href="{{ route('admin.carvariants.create') }}" class="btn btn-primary">Crear Nuevo</a>
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
                        <th>Car model id</th>
                        <th>Name</th>
                        <th>Trim</th>
                        <th>Engine</th>
                        <th>Transmission</th>
                        <th>Fuel type</th>
                        <th>Doors</th>
                        <th>Notes</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($carvariants as $item)
                        <tr>
                            <td>{{ $item->car_model_id ? $item-> : 'N/A' }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->trim }}</td>
                            <td>{{ $item->engine }}</td>
                            <td>{{ $item->transmission }}</td>
                            <td>{{ $item->fuel_type }}</td>
                            <td>{{ $item->doors }}</td>
                            <td>{{ $item->notes }}</td>
                            <td>
                                <a href="{{ route('admin.carvariants.show', $item) }}" class="btn btn-sm btn-info">Ver</a>
                                <a href="{{ route('admin.carvariants.edit', $item) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form method="POST" action="{{ route('admin.carvariants.destroy', $item) }}" class="d-inline" onsubmit="return confirm('¿Estás seguro?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="text-center">No hay registros</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $carvariants->links() }}
    </div>
</div>
@endsection
