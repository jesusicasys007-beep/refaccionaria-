@extends('administrador.plantilla')

@section('title', 'Image - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Image</h1>
    <a href="{{ route('admin.images.create') }}" class="btn btn-primary">Crear Nuevo</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card">
    <div class="card-body">
<div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Path</th>
                        <th>Disk</th>
                        <th>Mime type</th>
                        <th>Imageable id</th>
                        <th>Imageable type</th>
                        <th>Alt</th>
                        <th>Order</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($images as $item)
                        <tr>
                            <td>{{ $item->path }}</td>
                            <td>{{ $item->disk }}</td>
                            <td>{{ $item->mime_type }}</td>
                            <td>{{ $item->imageable_id }}</td>
                            <td>{{ $item->imageable_type }}</td>
                            <td>{{ $item->alt }}</td>
                            <td>{{ $item->order }}</td>
                            <td>
                                <a href="{{ route('admin.images.show', $item) }}" class="btn btn-sm btn-info">Ver</a>
                                <a href="{{ route('admin.images.edit', $item) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form method="POST" action="{{ route('admin.images.destroy', $item) }}" class="d-inline" onsubmit="return confirm('¿Estás seguro?')">
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

        {{ $images->links() }}
    </div>
</div>
@endsection
