@extends('administrador.plantilla')

@section('title', 'Usuarios - Panel Admin')

@section('content')
<div class="bg-white shadow rounded-xl p-6">
    <div class="mb-4 flex items-center justify-between">
        <h3 class="text-lg font-semibold">Lista de usuarios</h3>
        <a href="{{ route('users.create') }}" class="inline-flex items-center rounded-xl bg-slate-900 px-4 py-2 text-sm text-white hover:bg-slate-700">Crear usuario</a>
    </div>

    @if(session('success'))
        <div class="mb-4 rounded-xl bg-green-50 border border-green-200 p-4">
            <div class="text-sm text-green-800">{{ session('success') }}</div>
        </div>
    @endif

    <div class="mb-4">
        <form method="GET" class="flex gap-2">
            <input type="text" name="search" class="flex-1 rounded-xl border-slate-300 shadow-sm focus:border-sky-500 focus:ring-sky-500" placeholder="Buscar por email" value="{{ request('search') }}">
            <button type="submit" class="inline-flex items-center rounded-xl bg-slate-600 px-4 py-2 text-sm text-white hover:bg-slate-700">Buscar</button>
        </form>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-100 text-slate-700">
                    <th class="px-4 py-3">ID</th>
                    <th class="px-4 py-3">Nombre</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr class="border-t">
                        <td class="px-4 py-3">{{ $user->id }}</td>
                        <td class="px-4 py-3">{{ $user->name }}</td>
                        <td class="px-4 py-3">{{ $user->email }}</td>
                        <td class="px-4 py-3 space-x-2">
                            <a href="{{ route('users.show', $user) }}" class="text-sky-600 hover:text-sky-800">Ver</a>
                            <a href="{{ route('users.edit', $user) }}" class="text-amber-600 hover:text-amber-800">Editar</a>
                            <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Estás seguro de eliminar este usuario?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-rose-600 hover:text-rose-800">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr class="border-t">
                        <td colspan="4" class="px-4 py-3 text-center text-slate-500">No hay usuarios registrados</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $users->links() }}
    </div>
</div>
@endsection
