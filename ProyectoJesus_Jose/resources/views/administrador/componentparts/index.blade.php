@extends('administrador.plantilla')

@section('title', 'ComponentPart - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>ComponentPart</h1>
    <a href="{{ route('admin.componentparts.create') }}" class="btn btn-primary">Crear Nuevo</a>
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
                        <th>Part id</th>
                        <th>Component id</th>
                        <th>Role</th>
                        <th>Quantity</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($componentparts as $item)
                        <tr>
                            <td>{{ $item->part_id ? $item-> : 'N/A' }}</td>
                            <td>{{ $item->component_id ? $item-> : 'N/A' }}</td>
                            <td>{{ $item->role }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>
                                <a href="{{ route('admin.componentparts.show', $item) }}" class="btn btn-sm btn-info">Ver</a>
                                <a href="{{ route('admin.componentparts.edit', $item) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form method="POST" action="{{ route('admin.componentparts.destroy', $item) }}" class="d-inline" onsubmit="return confirm('¿Estás seguro?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No hay registros</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $componentparts->links() }}
    </div>
</div>
@endsection
