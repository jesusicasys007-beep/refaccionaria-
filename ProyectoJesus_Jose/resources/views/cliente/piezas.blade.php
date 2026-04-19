@extends('cliente.plantilla')

@section('title', 'Piezas - AutoPremium')

@section('content')
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold text-blue-900 mb-6">Piezas Automotrices</h2>
        <p class="text-gray-600 mb-12 max-w-3xl mx-auto">Encuentra repuestos originales y alternativos para todas las marcas. Calidad garantizada para mantener tu vehículo en marcha.</p>

        <div class="grid md:grid-cols-4 gap-6">
            <div class="bg-blue-900 text-white p-8 rounded-3xl hover:bg-blue-800 transition">
                <h3 class="font-semibold text-lg">Motores</h3>
            </div>
            <div class="bg-blue-900 text-white p-8 rounded-3xl hover:bg-blue-800 transition">
                <h3 class="font-semibold text-lg">Frenos</h3>
            </div>
            <div class="bg-blue-900 text-white p-8 rounded-3xl hover:bg-blue-800 transition">
                <h3 class="font-semibold text-lg">Suspensión</h3>
            </div>
            <div class="bg-blue-900 text-white p-8 rounded-3xl hover:bg-blue-800 transition">
                <h3 class="font-semibold text-lg">Accesorios</h3>
            </div>
        </div>
    </div>
</section>
@endsection
