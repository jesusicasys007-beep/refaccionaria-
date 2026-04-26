@extends('administrador.plantilla')

@section('title', 'Editar Usuario - Panel Admin')

@section('content')
<div class="bg-white shadow rounded-xl p-6">
    <div class="mb-6 flex items-center justify-between">
        <h3 class="text-xl font-semibold text-slate-900">Editar Usuario</h3>
        <a href="{{ route('users.index') }}" class="inline-flex items-center rounded-xl bg-slate-600 px-4 py-2 text-sm text-white hover:bg-slate-700">Volver a la Lista</a>
    </div>

    @if($errors->any())
        <div class="mb-6 rounded-xl bg-rose-50 border border-rose-200 p-4">
            <div class="text-sm text-rose-800">
                <ul class="list-disc list-inside space-y-1">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <form method="POST" action="{{ route('users.update', $user) }}" class="space-y-6">
        @csrf
        @method('PUT')
        <div>
            <label for="name" class="block text-sm font-medium text-slate-700">Nombre</label>
            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="mt-1 block w-full rounded-xl border-slate-300 shadow-sm focus:border-sky-500 focus:ring-sky-500" required>
        </div>
        <div>
            <label for="email" class="block text-sm font-medium text-slate-700">Correo Electrónico</label>
            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="mt-1 block w-full rounded-xl border-slate-300 shadow-sm focus:border-sky-500 focus:ring-sky-500" required>
        </div>
        <div>
            <label for="password" class="block text-sm font-medium text-slate-700">Contraseña (dejar vacío para no cambiar)</label>
            <input type="password" name="password" id="password" class="mt-1 block w-full rounded-xl border-slate-300 shadow-sm focus:border-sky-500 focus:ring-sky-500">
        </div>
        <div class="flex justify-end">
            <button type="submit" class="inline-flex items-center rounded-xl bg-sky-600 px-4 py-2 text-sm text-white hover:bg-sky-700">Actualizar Usuario</button>
        </div>
    </form>
</div>
@endsection
