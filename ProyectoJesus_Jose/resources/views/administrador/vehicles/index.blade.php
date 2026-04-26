@extends('administrador.plantilla')

@section('title', 'Vehicle - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Vehicle</h1>
    <a href="{{ route('admin.vehicles.create') }}" class="btn btn-primary">Crear Nuevo</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card">
    <div class="card-body">
<div class="mb-3">
            <form method="GET" class="d-flex">
                <input type="text" name="search" class="form-control me-2" placeholder="Buscar por vin" value="{{ request('search') }}">
                <button type="submit" class="btn btn-outline-secondary">Buscar</button>
            </form>
        </div>
<div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Car variant id</th>
                        <th>Vin</th>
                        <th>Stock code</th>
                        <th>Year</th>
                        <th>Color</th>
                        <th>Mileage</th>
                        <th>Price</th>
                        <th>Condition</th>
                        <th>Description</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($vehicles as $item)
                        <tr>
                            <td>{{ $item->car_variant_id ? $item-> : 'N/A' }}</td>
                            <td>{{ $item->vin }}</td>
                            <td>{{ $item->stock_code }}</td>
                            <td>{{ $item->year }}</td>
                            <td>{{ $item->color }}</td>
                            <td>{{ $item->mileage }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->condition }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <a href="{{ route('admin.vehicles.show', $item) }}" class="btn btn-sm btn-info">Ver</a>
                                <a href="{{ route('admin.vehicles.edit', $item) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form method="POST" action="{{ route('admin.vehicles.destroy', $item) }}" class="d-inline" onsubmit="return confirm('¿Estás seguro?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10" class="text-center">No hay registros</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $vehicles->links() }}
    </div>
</div>
@endsection
