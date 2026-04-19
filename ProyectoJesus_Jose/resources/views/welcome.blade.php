@extends('cliente.plantilla')

@section('title', 'AutoPremium | Inicio')

@section('content')
<section class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-700 text-white py-24 rounded-3xl overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 items-center gap-12">
        <div>
            <h2 class="text-5xl font-bold leading-tight mb-6">Encuentra tu <span class="text-yellow-400">Vehículo Ideal</span></h2>
            <p class="text-lg mb-8 text-blue-100">Compra vehículos y piezas automotrices de calidad garantizada. Seguridad, confianza y los mejores precios del mercado.</p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('vehiculos') }}" class="bg-yellow-400 text-blue-900 px-6 py-3 rounded-lg font-semibold hover:bg-yellow-300 transition">Ver Vehículos</a>
                <a href="{{ route('piezas') }}" class="border border-white px-6 py-3 rounded-lg hover:bg-white hover:text-blue-900 transition">Explorar Piezas</a>
            </div>
        </div>
        <div>
            <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70" class="rounded-2xl shadow-2xl w-full object-cover">
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50 rounded-3xl mt-10">
    <div class="max-w-7xl mx-auto px-6">
        <h3 class="text-3xl font-bold text-center mb-12">Vehículos Destacados</h3>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8" class="h-56 w-full object-cover">
                <div class="p-6">
                    <h4 class="text-xl font-bold mb-2">Toyota Corolla 2022</h4>
                    <p class="text-gray-600 mb-4">Automático · Gasolina · 15,000 km</p>
                    <div class="flex justify-between items-center">
                        <span class="text-yellow-500 font-bold text-lg">$18,500</span>
                        <a href="{{ route('vehiculos') }}" class="bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d" class="h-56 w-full object-cover">
                <div class="p-6">
                    <h4 class="text-xl font-bold mb-2">Ford Mustang 2021</h4>
                    <p class="text-gray-600 mb-4">Manual · Deportivo · 8,000 km</p>
                    <div class="flex justify-between items-center">
                        <span class="text-yellow-500 font-bold text-lg">$32,900</span>
                        <a href="{{ route('vehiculos') }}" class="bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="https://images.unsplash.com/photo-1583267746897-2cf415887172" class="h-56 w-full object-cover">
                <div class="p-6">
                    <h4 class="text-xl font-bold mb-2">BMW X5 2023</h4>
                    <p class="text-gray-600 mb-4">SUV · Automático · 5,000 km</p>
                    <div class="flex justify-between items-center">
                        <span class="text-yellow-500 font-bold text-lg">$45,000</span>
                        <a href="{{ route('vehiculos') }}" class="bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white rounded-3xl mt-10">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h3 class="text-3xl font-bold mb-6">Piezas Automotrices</h3>
        <p class="text-gray-600 mb-12 max-w-2xl mx-auto">Encuentra repuestos originales y alternativos para todas las marcas.</p>
        <div class="grid md:grid-cols-4 gap-6">
            <div class="bg-blue-900 text-white p-8 rounded-3xl hover:bg-blue-800 transition">
                <h4 class="font-semibold text-lg">Motores</h4>
            </div>
            <div class="bg-blue-900 text-white p-8 rounded-3xl hover:bg-blue-800 transition">
                <h4 class="font-semibold text-lg">Frenos</h4>
            </div>
            <div class="bg-blue-900 text-white p-8 rounded-3xl hover:bg-blue-800 transition">
                <h4 class="font-semibold text-lg">Suspensión</h4>
            </div>
            <div class="bg-blue-900 text-white p-8 rounded-3xl hover:bg-blue-800 transition">
                <h4 class="font-semibold text-lg">Accesorios</h4>
            </div>
        </div>
    </div>
</section>

<section class="bg-blue-900 text-white py-16 rounded-3xl mt-10 text-center">
    <h3 class="text-3xl font-bold mb-4">¿Listo para comprar o vender?</h3>
    <p class="mb-8 text-blue-200">Únete a miles de clientes satisfechos.</p>
    <a href="{{ route('registro') }}" class="bg-yellow-400 text-blue-900 px-8 py-3 rounded-lg font-semibold hover:bg-yellow-300 transition">Crear Cuenta</a>
</section>
@endsection
