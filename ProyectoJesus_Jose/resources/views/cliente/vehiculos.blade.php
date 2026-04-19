@extends('cliente.plantilla')

@section('title', 'Vehículos - AutoPremium')

@section('content')
<section class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl font-bold text-blue-900 mb-6">Vehículos</h2>
        <p class="text-gray-600 mb-10 max-w-3xl">Explora nuestro inventario de vehículos disponibles. Cada opción cuenta con historia, estado y precios claros.</p>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8" class="h-56 w-full object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-2">Toyota Corolla 2022</h3>
                    <p class="text-gray-600 mb-4">Automático · Gasolina · 15,000 km</p>
                    <span class="text-yellow-500 font-bold text-lg">$18,500</span>
                </div>
            </div>
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d" class="h-56 w-full object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-2">Ford Mustang 2021</h3>
                    <p class="text-gray-600 mb-4">Manual · Deportivo · 8,000 km</p>
                    <span class="text-yellow-500 font-bold text-lg">$32,900</span>
                </div>
            </div>
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="https://images.unsplash.com/photo-1583267746897-2cf415887172" class="h-56 w-full object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-2">BMW X5 2023</h3>
                    <p class="text-gray-600 mb-4">SUV · Automático · 5,000 km</p>
                    <span class="text-yellow-500 font-bold text-lg">$45,000</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
