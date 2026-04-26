@extends('administrador.plantilla')

@section('title', 'Brand - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Brand</h1>
    <a href="{{ route('admin.brands.create') }}" class="btn btn-primary">Crear Nuevo</a>
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
                        <th>Slug</th>
                        <th>Country</th>
                        <th>Description</th>
                        <th>Website</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($brands as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->slug }}</td>
                            <td>{{ $item->country }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->website }}</td>
                            <td>
                                <a href="{{ route('admin.brands.show', $item) }}" class="btn btn-sm btn-info">Ver</a>
                                <a href="{{ route('admin.brands.edit', $item) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form method="POST" action="{{ route('admin.brands.destroy', $item) }}" class="d-inline" onsubmit="return confirm('¿Estás seguro?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">No hay registros</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $brands->links() }}
    </div>
</div>
@endsection
