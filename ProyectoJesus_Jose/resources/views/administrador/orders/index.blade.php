@extends('administrador.plantilla')

@section('title', 'Order - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Order</h1>
    <a href="{{ route('admin.orders.create') }}" class="btn btn-primary">Crear Nuevo</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card">
    <div class="card-body">
<div class="mb-3">
            <form method="GET" class="d-flex">
                <input type="text" name="search" class="form-control me-2" placeholder="Buscar por order_number" value="{{ request('search') }}">
                <button type="submit" class="btn btn-outline-secondary">Buscar</button>
            </form>
        </div>
<div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>User id</th>
                        <th>Order number</th>
                        <th>Status</th>
                        <th>Total</th>
                        <th>Currency</th>
                        <th>Shipping address</th>
                        <th>Notes</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orders as $item)
                        <tr>
                            <td>{{ $item->user_id ? $item-> : 'N/A' }}</td>
                            <td>{{ $item->order_number }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->total }}</td>
                            <td>{{ $item->currency }}</td>
                            <td>{{ $item->shipping_address }}</td>
                            <td>{{ $item->notes }}</td>
                            <td>
                                <a href="{{ route('admin.orders.show', $item) }}" class="btn btn-sm btn-info">Ver</a>
                                <a href="{{ route('admin.orders.edit', $item) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form method="POST" action="{{ route('admin.orders.destroy', $item) }}" class="d-inline" onsubmit="return confirm('¿Estás seguro?')">
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

        {{ $orders->links() }}
    </div>
</div>
@endsection
