@extends('administrador.plantilla')

@section('title', 'PartVariant - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>PartVariant</h1>
    <a href="{{ route('admin.partvariants.create') }}" class="btn btn-primary">Crear Nuevo</a>
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
                        <th>Car variant id</th>
                        <th>Fitment notes</th>
                        <th>Direct fit</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($partvariants as $item)
                        <tr>
                            <td>{{ $item->part_id ? $item-> : 'N/A' }}</td>
                            <td>{{ $item->car_variant_id ? $item-> : 'N/A' }}</td>
                            <td>{{ $item->fitment_notes }}</td>
                            <td>{{ $item->direct_fit }}</td>
                            <td>
                                <a href="{{ route('admin.partvariants.show', $item) }}" class="btn btn-sm btn-info">Ver</a>
                                <a href="{{ route('admin.partvariants.edit', $item) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form method="POST" action="{{ route('admin.partvariants.destroy', $item) }}" class="d-inline" onsubmit="return confirm('¿Estás seguro?')">
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

        {{ $partvariants->links() }}
    </div>
</div>
@endsection
