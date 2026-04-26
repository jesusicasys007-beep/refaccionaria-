@extends('administrador.plantilla')

@section('title', 'CarModel - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>CarModel</h1>
    <a href="{{ route('admin.carmodels.create') }}" class="btn btn-primary">Crear Nuevo</a>
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
                        <th>Brand id</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Year from</th>
                        <th>Year to</th>
                        <th>Description</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($carmodels as $item)
                        <tr>
                            <td>{{ $item->brand_id ? $item-> : 'N/A' }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->slug }}</td>
                            <td>{{ $item->year_from }}</td>
                            <td>{{ $item->year_to }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <a href="{{ route('admin.carmodels.show', $item) }}" class="btn btn-sm btn-info">Ver</a>
                                <a href="{{ route('admin.carmodels.edit', $item) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form method="POST" action="{{ route('admin.carmodels.destroy', $item) }}" class="d-inline" onsubmit="return confirm('¿Estás seguro?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No hay registros</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $carmodels->links() }}
    </div>
</div>
@endsection
