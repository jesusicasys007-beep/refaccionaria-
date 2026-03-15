<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refaccionaria Automotriz - Proyecto ICASYS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-gradient-blue-silver { background: linear-gradient(135deg, #2563eb, #d1d5db); }
        .bg-gradient-silver-gold { background: linear-gradient(135deg, #d1d5db, #eab308); }
        .text-gold { color: #eab308; }
    </style>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Header -->
    <header class="bg-gradient-blue-silver text-white shadow-lg">
        <div class="container mx-auto px-4 py-6">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-gold">Refaccionaria Automotriz</h1>
                    <span class="ml-4 text-sm">Proyecto ICASYS</span>
                </div>
                <nav class="hidden md:flex space-x-6">
                    <a href="#inicio" class="hover:text-gold transition">Inicio</a>
                    <a href="#modelos" class="hover:text-gold transition">Modelos</a>
                    <a href="#contacto" class="hover:text-gold transition">Contacto</a>
                </nav>
                <div class="md:hidden">
                    <button class="text-white focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        @section('content')
        <section id="inicio" class="mb-12">
            <div class="bg-white rounded-lg shadow-md p-8 bg-gradient-silver-gold">
                <h2 class="text-3xl font-bold text-blue-600 mb-4">Bienvenido a la Refaccionaria Automotriz</h2>
                <p class="text-gray-700 text-lg leading-relaxed">
                    Este proyecto es una aplicación web desarrollada en Laravel para la gestión y venta de carros y refacciones automotrices.
                    Forma parte de mi trabajo final para completar mis estudios en ICASYS. La plataforma permite administrar inventarios,
                    vehículos, partes, órdenes de compra y más, con un enfoque en la eficiencia y la experiencia del usuario.
                </p>
                <p class="text-gray-700 text-lg leading-relaxed mt-4">
                    Utilizando tecnologías modernas como Laravel, Tailwind CSS y una base de datos relacional, el sistema está diseñado
                    para ser escalable y fácil de mantener. A continuación, presentamos los modelos principales que conforman la estructura
                    de datos de la aplicación.
                </p>
            </div>
        </section>

        <section id="modelos" class="mb-12">
            <h2 class="text-3xl font-bold text-blue-600 mb-6">Modelos del Sistema</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Attribute -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gold mb-2">Attribute</h3>
                    <p class="text-gray-600">Define atributos como color, tamaño, etc., para partes y componentes.</p>
                </div>
                <!-- AttributeValue -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gold mb-2">AttributeValue</h3>
                    <p class="text-gray-600">Valores específicos para los atributos, con unidades opcionales.</p>
                </div>
                <!-- Brand -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gold mb-2">Brand</h3>
                    <p class="text-gray-600">Marcas de vehículos, con información de país y sitio web.</p>
                </div>
                <!-- CarModel -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gold mb-2">CarModel</h3>
                    <p class="text-gray-600">Modelos de carros asociados a marcas, con años de producción.</p>
                </div>
                <!-- CarVariant -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gold mb-2">CarVariant</h3>
                    <p class="text-gray-600">Variantes de modelos, incluyendo motor, transmisión, etc.</p>
                </div>
                <!-- Categorie -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gold mb-2">Categorie</h3>
                    <p class="text-gray-600">Categorías jerárquicas para organizar partes y componentes.</p>
                </div>
                <!-- Component -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gold mb-2">Component</h3>
                    <p class="text-gray-600">Componentes que forman parte de las refacciones.</p>
                </div>
                <!-- ComponentPart -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gold mb-2">ComponentPart</h3>
                    <p class="text-gray-600">Relación entre componentes y partes, con roles y cantidades.</p>
                </div>
                <!-- Image -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gold mb-2">Image</h3>
                    <p class="text-gray-600">Imágenes asociadas a modelos polimórficamente.</p>
                </div>
                <!-- Manufacturer -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gold mb-2">Manufacturer</h3>
                    <p class="text-gray-600">Fabricantes de partes, con detalles de contacto.</p>
                </div>
                <!-- Order -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gold mb-2">Order</h3>
                    <p class="text-gray-600">Órdenes de compra con estado, total y dirección de envío.</p>
                </div>
                <!-- OrderItem -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gold mb-2">OrderItem</h3>
                    <p class="text-gray-600">Ítems de las órdenes, con cantidades y precios.</p>
                </div>
                <!-- Part -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gold mb-2">Part</h3>
                    <p class="text-gray-600">Refacciones con SKU, precio, stock y asociaciones.</p>
                </div>
                <!-- PartVariant -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gold mb-2">PartVariant</h3>
                    <p class="text-gray-600">Compatibilidad entre partes y variantes de carros.</p>
                </div>
                <!-- PriceHistory -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gold mb-2">PriceHistory</h3>
                    <p class="text-gray-600">Historial de precios para productos.</p>
                </div>
                <!-- Stock -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gold mb-2">Stock</h3>
                    <p class="text-gray-600">Inventario por almacén y parte.</p>
                </div>
                <!-- User -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gold mb-2">User</h3>
                    <p class="text-gray-600">Usuarios del sistema con autenticación.</p>
                </div>
                <!-- Vehicle -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gold mb-2">Vehicle</h3>
                    <p class="text-gray-600">Vehículos en inventario con VIN y detalles.</p>
                </div>
                <!-- Vendor -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gold mb-2">Vendor</h3>
                    <p class="text-gray-600">Proveedores con información de contacto.</p>
                </div>
                <!-- Warehouse -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gold mb-2">Warehouse</h3>
                    <p class="text-gray-600">Almacenes con ubicación y gestión de stock.</p>
                </div>
            </div>
        </section>

        <section id="contacto" class="mb-12">
            <div class="bg-white rounded-lg shadow-md p-8">
                <h2 class="text-3xl font-bold text-blue-600 mb-4">Contacto</h2>
                <p class="text-gray-700 text-lg">
                    Para más información sobre este proyecto, contacta a través de ICASYS o revisa la documentación en el repositorio.
                </p>
                <p class="text-gray-700 text-lg mt-4">
                    Desarrollado con ❤️ para completar mis estudios en ICASYS.
                </p>
            </div>
        </section>
        @endsection
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-blue-silver text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p class="text-gold">&copy; 2026 Refaccionaria Automotriz - Proyecto ICASYS. Todos los derechos reservados.</p>
            <p class="mt-2">Desarrollado en Laravel con Tailwind CSS.</p>
        </div>
    </footer>
</body>
</html>
