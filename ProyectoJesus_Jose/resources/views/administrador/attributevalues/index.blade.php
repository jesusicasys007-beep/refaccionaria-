@extends('administrador.plantilla')

@section('title', 'AttributeValue - Panel Admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>AttributeValue</h1>
    <a href="{{ route('admin.attributevalues.create') }}" class="btn btn-primary">Crear Nuevo</a>
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
                        <th>Attribute id</th>
                        <th>Value</th>
                        <th>Unit</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($attributevalues as $item)
                        <tr>
                            <td>{{ $item->attribute_id ? $item-> : 'N/A' }}</td>
                            <td>{{ $item->value }}</td>
                            <td>{{ $item->unit }}</td>
                            <td>
                                <a href="{{ route('admin.attributevalues.show', $item) }}" class="btn btn-sm btn-info">Ver</a>
                                <a href="{{ route('admin.attributevalues.edit', $item) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form method="POST" action="{{ route('admin.attributevalues.destroy', $item) }}" class="d-inline" onsubmit="return confirm('¿Estás seguro?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No hay registros</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $attributevalues->links() }}
    </div>
</div>
@endsection
