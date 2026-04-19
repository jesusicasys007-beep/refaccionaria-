@extends('cliente.plantilla')

@section('title', 'Nosotros - AutoPremium')

@section('content')
<section class="bg-gray-50 py-20">
    <div class="max-w-5xl mx-auto px-6">
        <h2 class="text-4xl font-bold text-blue-900 mb-6">Sobre AutoPremium</h2>
        <p class="text-gray-600 mb-6">Somos una refaccionaria automotriz dedicada a ofrecer vehículos y repuestos con atención especializada. Este proyecto forma parte del trabajo final de ICASYS y está diseñado para ser intuitivo, funcional y moderno.</p>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-3xl shadow-lg p-8">
                <h3 class="text-2xl font-semibold mb-4">Misión</h3>
                <p class="text-gray-600">Brindar una plataforma confiable para la compra y venta de vehículos y piezas automotrices.</p>
            </div>
            <div class="bg-white rounded-3xl shadow-lg p-8">
                <h3 class="text-2xl font-semibold mb-4">Visión</h3>
                <p class="text-gray-600">Ser la refaccionaria preferida por su variedad, transparencia y calidad de servicio.</p>
            </div>
        </div>
    </div>
</section>
@endsection
