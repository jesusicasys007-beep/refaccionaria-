@extends('cliente.plantilla')

@section('title', 'Publicar - AutoPremium')

@section('content')
<section class="bg-gray-50 py-20">
    <div class="max-w-4xl mx-auto px-6">
        <div class="bg-white rounded-3xl shadow-lg p-10">
            <h2 class="text-4xl font-bold text-blue-900 mb-6">Publicar vehículo o pieza</h2>
            <p class="text-gray-600 mb-8">Agrega tu vehículo o refacción al catálogo en pocos pasos. Completa la información y nuestro equipo revisará tu publicación.</p>
            <div class="grid gap-6 sm:grid-cols-2">
                <div class="rounded-3xl border border-gray-200 p-6">
                    <h3 class="font-semibold text-xl mb-2">Vehículo</h3>
                    <p class="text-gray-600">Publica autos, camionetas y SUV actuales o semi nuevos.</p>
                </div>
                <div class="rounded-3xl border border-gray-200 p-6">
                    <h3 class="font-semibold text-xl mb-2">Pieza</h3>
                    <p class="text-gray-600">Vende piezas originales o compatibles para todas las marcas.</p>
                </div>
            </div>
            <a href="{{ route('registro') }}" class="mt-8 inline-flex items-center justify-center rounded-full bg-yellow-400 px-8 py-3 text-blue-900 font-semibold hover:bg-yellow-300 transition">Crear cuenta para publicar</a>
        </div>
    </div>
</section>
@endsection
