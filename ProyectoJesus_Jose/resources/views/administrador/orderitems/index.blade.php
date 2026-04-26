@extends('administrador.plantilla')

@section('title', 'OrderItem - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>OrderItem</h1>
    <a href="{{ route('admin.orderitems.create') }}" class="btn btn-primary">Crear Nuevo</a>
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
                        <th>Order id</th>
                        <th>Item id</th>
                        <th>Item type</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Unit price</th>
                        <th>Total</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orderitems as $item)
                        <tr>
                            <td>{{ $item->order_id ? $item-> : 'N/A' }}</td>
                            <td>{{ $item->item_id }}</td>
                            <td>{{ $item->item_type }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->unit_price }}</td>
                            <td>{{ $item->total }}</td>
                            <td>
                                <a href="{{ route('admin.orderitems.show', $item) }}" class="btn btn-sm btn-info">Ver</a>
                                <a href="{{ route('admin.orderitems.edit', $item) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form method="POST" action="{{ route('admin.orderitems.destroy', $item) }}" class="d-inline" onsubmit="return confirm('¿Estás seguro?')">
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

        {{ $orderitems->links() }}
    </div>
</div>
@endsection
