@extends('administrador.plantilla')

@section('title', 'PriceHistory - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>PriceHistory</h1>
    <a href="{{ route('admin.pricehistorys.create') }}" class="btn btn-primary">Crear Nuevo</a>
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
                        <th>Priceable id</th>
                        <th>Priceable type</th>
                        <th>Price</th>
                        <th>Currency</th>
                        <th>User id</th>
                        <th>Effective at</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pricehistorys as $item)
                        <tr>
                            <td>{{ $item->priceable_id }}</td>
                            <td>{{ $item->priceable_type }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->currency }}</td>
                            <td>{{ $item->user_id ? $item-> : 'N/A' }}</td>
                            <td>{{ $item->effective_at }}</td>
                            <td>
                                <a href="{{ route('admin.pricehistorys.show', $item) }}" class="btn btn-sm btn-info">Ver</a>
                                <a href="{{ route('admin.pricehistorys.edit', $item) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form method="POST" action="{{ route('admin.pricehistorys.destroy', $item) }}" class="d-inline" onsubmit="return confirm('¿Estás seguro?')">
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

        {{ $pricehistorys->links() }}
    </div>
</div>
@endsection
