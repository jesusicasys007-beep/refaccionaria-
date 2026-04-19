@extends('cliente.plantilla')

@section('title', 'Registro - AutoPremium')

@section('content')
<section class="bg-white py-20">
    <div class="max-w-3xl mx-auto px-6">
        <div class="bg-blue-900 text-white rounded-3xl shadow-lg p-10">
            <h2 class="text-4xl font-bold mb-4">Crear cuenta</h2>
            <p class="text-blue-100 mb-8">Regístrate para comenzar a publicar y contactar vendedores. Esta es una vista de demostración para tu flujo de registro.</p>
            <div class="space-y-4">
                <div class="rounded-3xl bg-white p-6 text-blue-900">
                    <p class="font-semibold">Nombre completo</p>
                    <p class="text-sm text-gray-600">Introduce tus datos para completar el registro.</p>
                </div>
                <div class="rounded-3xl bg-white p-6 text-blue-900">
                    <p class="font-semibold">Correo electrónico</p>
                    <p class="text-sm text-gray-600">Usa una dirección válida para recibir confirmaciones.</p>
                </div>
            </div>
            <a href="{{ route('home') }}" class="mt-8 inline-flex items-center justify-center rounded-full bg-yellow-400 px-8 py-3 text-blue-900 font-semibold hover:bg-yellow-300 transition">Volver al inicio</a>
        </div>
    </div>
</section>
@endsection
