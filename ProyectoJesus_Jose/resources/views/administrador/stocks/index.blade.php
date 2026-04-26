@extends('administrador.plantilla')

@section('title', 'Stock - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Stock</h1>
    <a href="{{ route('admin.stocks.create') }}" class="btn btn-primary">Crear Nuevo</a>
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
                        <th>Warehouse id</th>
                        <th>Part id</th>
                        <th>Quantity</th>
                        <th>Reserved</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($stocks as $item)
                        <tr>
                            <td>{{ $item->warehouse_id ? $item-> : 'N/A' }}</td>
                            <td>{{ $item->part_id ? $item-> : 'N/A' }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->reserved }}</td>
                            <td>
                                <a href="{{ route('admin.stocks.show', $item) }}" class="btn btn-sm btn-info">Ver</a>
                                <a href="{{ route('admin.stocks.edit', $item) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form method="POST" action="{{ route('admin.stocks.destroy', $item) }}" class="d-inline" onsubmit="return confirm('¿Estás seguro?')">
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

        {{ $stocks->links() }}
    </div>
</div>
@endsection
