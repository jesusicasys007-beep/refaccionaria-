@extends('administrador.plantilla')

@section('title', 'Dashboard - Panel Administrador')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <div class="bg-white shadow rounded-xl p-6">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-lg font-semibold text-slate-900">Vehículos</h3>
                <p class="text-sm text-slate-500">Gestionar inventario de vehículos</p>
            </div>
            <div class="text-3xl text-sky-600">🚗</div>
        </div>
        <div class="mt-4">
            <a href="{{ route('vehicles.index') }}" class="inline-flex items-center rounded-xl bg-sky-600 px-4 py-2 text-sm text-white hover:bg-sky-700">Ver Vehículos</a>
        </div>
    </div>

    <div class="bg-white shadow rounded-xl p-6">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-lg font-semibold text-slate-900">Piezas</h3>
                <p class="text-sm text-slate-500">Administrar refacciones y componentes</p>
            </div>
            <div class="text-3xl text-green-600">🔧</div>
        </div>
        <div class="mt-4">
            <a href="{{ route('parts.index') }}" class="inline-flex items-center rounded-xl bg-green-600 px-4 py-2 text-sm text-white hover:bg-green-700">Ver Piezas</a>
        </div>
    </div>

    <div class="bg-white shadow rounded-xl p-6">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-lg font-semibold text-slate-900">Órdenes</h3>
                <p class="text-sm text-slate-500">Revisar pedidos y ventas</p>
            </div>
            <div class="text-3xl text-amber-600">📋</div>
        </div>
        <div class="mt-4">
            <a href="{{ route('orders.index') }}" class="inline-flex items-center rounded-xl bg-amber-600 px-4 py-2 text-sm text-white hover:bg-amber-700">Ver Órdenes</a>
        </div>
    </div>

    <div class="bg-white shadow rounded-xl p-6">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-lg font-semibold text-slate-900">Usuarios</h3>
                <p class="text-sm text-slate-500">Gestionar cuentas de usuario</p>
            </div>
            <div class="text-3xl text-rose-600">👥</div>
        </div>
        <div class="mt-4">
            <a href="{{ route('users.index') }}" class="inline-flex items-center rounded-xl bg-rose-600 px-4 py-2 text-sm text-white hover:bg-rose-700">Ver Usuarios</a>
        </div>
    </div>
</div>

<div class="mt-8 bg-white shadow rounded-xl p-6">
    <h3 class="text-xl font-semibold text-slate-900 mb-4">Resumen del Sistema</h3>
    <p class="text-slate-600">Bienvenido al panel de administración de la Refaccionaria Automotriz. Desde aquí puede gestionar todas las entidades del sistema sin necesidad de autenticación.</p>
    <div class="mt-4 grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="text-center">
            <div class="text-2xl font-bold text-slate-900">0</div>
            <div class="text-sm text-slate-500">Vehículos Registrados</div>
        </div>
        <div class="text-center">
            <div class="text-2xl font-bold text-slate-900">0</div>
            <div class="text-sm text-slate-500">Piezas en Inventario</div>
        </div>
        <div class="text-center">
            <div class="text-2xl font-bold text-slate-900">0</div>
            <div class="text-sm text-slate-500">Órdenes Pendientes</div>
        </div>
    </div>
</div>
@endsection