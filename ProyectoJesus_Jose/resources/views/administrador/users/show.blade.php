@extends('administrador.plantilla')

@section('title', 'Detalles del Usuario - Panel Admin')

@section('content')
<div class="bg-white shadow rounded-xl p-6">
    <div class="mb-6 flex items-center justify-between">
        <h3 class="text-xl font-semibold text-slate-900">Detalles del Usuario</h3>
        <div class="space-x-2">
            <a href="{{ route('users.edit', $user) }}" class="inline-flex items-center rounded-xl bg-amber-600 px-4 py-2 text-sm text-white hover:bg-amber-700">Editar</a>
            <a href="{{ route('users.index') }}" class="inline-flex items-center rounded-xl bg-slate-600 px-4 py-2 text-sm text-white hover:bg-slate-700">Volver a la Lista</a>
        </div>
    </div>

    <div class="space-y-4">
        <div class="flex border-b border-slate-200 pb-2">
            <div class="w-1/3 font-medium text-slate-700">ID</div>
            <div class="w-2/3 text-slate-900">{{ $user->id }}</div>
        </div>
        <div class="flex border-b border-slate-200 pb-2">
            <div class="w-1/3 font-medium text-slate-700">Nombre</div>
            <div class="w-2/3 text-slate-900">{{ $user->name }}</div>
        </div>
        <div class="flex border-b border-slate-200 pb-2">
            <div class="w-1/3 font-medium text-slate-700">Correo Electrónico</div>
            <div class="w-2/3 text-slate-900">{{ $user->email }}</div>
        </div>
        <div class="flex border-b border-slate-200 pb-2">
            <div class="w-1/3 font-medium text-slate-700">Creado</div>
            <div class="w-2/3 text-slate-900">{{ $user->created_at->format('d/m/Y H:i') }}</div>
        </div>
        <div class="flex border-b border-slate-200 pb-2">
            <div class="w-1/3 font-medium text-slate-700">Actualizado</div>
            <div class="w-2/3 text-slate-900">{{ $user->updated_at->format('d/m/Y H:i') }}</div>
        </div>
    </div>
</div>
@endsection
