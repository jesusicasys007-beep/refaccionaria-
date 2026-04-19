@extends('cliente.plantilla')

@section('title', 'Contacto - AutoPremium')

@section('content')
<section class="bg-white py-20">
    <div class="max-w-3xl mx-auto px-6">
        <h2 class="text-4xl font-bold text-blue-900 mb-6">Contacto</h2>
        <p class="text-gray-600 mb-8">Si tienes dudas sobre nuestras piezas, vehículos o servicios, escríbenos y te responderemos lo antes posible.</p>

        <div class="space-y-6">
            <div class="rounded-3xl border border-gray-200 p-8 shadow-sm bg-gray-50">
                <p class="text-gray-700"><span class="font-semibold">Correo:</span> info@autopremium.com</p>
                <p class="text-gray-700 mt-2"><span class="font-semibold">Teléfono:</span> +52 55 1234 5678</p>
                <p class="text-gray-700 mt-2"><span class="font-semibold">Ubicación:</span> Ciudad de México, México</p>
            </div>
            <a href="mailto:info@autopremium.com" class="inline-flex items-center justify-center rounded-full bg-blue-900 px-8 py-3 text-white font-semibold hover:bg-blue-800 transition">Enviar correo</a>
        </div>
    </div>
</section>
@endsection
