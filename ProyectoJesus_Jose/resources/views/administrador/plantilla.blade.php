<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Panel Administrador')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 text-slate-900">
    <div class="min-h-screen flex">
        <aside class="w-72 bg-slate-900 text-slate-100 flex flex-col shadow-lg">
            <div class="px-6 py-5 border-b border-slate-800">
                <h1 class="text-xl font-semibold">Admin Panel</h1>
                <p class="text-sm text-slate-400">Gestión de catálogo</p>
            </div>

            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="block rounded-xl px-4 py-3 text-sm font-medium hover:bg-slate-700">Dashboard</a>
                <a href="{{ route('attributes.index') }}" class="block rounded-xl px-4 py-3 text-sm font-medium hover:bg-slate-700">Atributos</a>
                <a href="{{ route('attribute-values.index') }}" class="block rounded-xl px-4 py-3 text-sm font-medium hover:bg-slate-700">Valores de Atributos</a>
                <a href="{{ route('brands.index') }}" class="block rounded-xl px-4 py-3 text-sm font-medium hover:bg-slate-700">Marcas</a>
                <a href="{{ route('car-models.index') }}" class="block rounded-xl px-4 py-3 text-sm font-medium hover:bg-slate-700">Modelos de Carro</a>
                <a href="{{ route('car-variants.index') }}" class="block rounded-xl px-4 py-3 text-sm font-medium hover:bg-slate-700">Variantes de Carro</a>
                <a href="{{ route('categories.index') }}" class="block rounded-xl px-4 py-3 text-sm font-medium hover:bg-slate-700">Categorías</a>
                <a href="{{ route('components.index') }}" class="block rounded-xl px-4 py-3 text-sm font-medium hover:bg-slate-700">Componentes</a>
                <a href="{{ route('component-parts.index') }}" class="block rounded-xl px-4 py-3 text-sm font-medium hover:bg-slate-700">Partes de Componentes</a>
                <a href="{{ route('images.index') }}" class="block rounded-xl px-4 py-3 text-sm font-medium hover:bg-slate-700">Imágenes</a>
                <a href="{{ route('manufacturers.index') }}" class="block rounded-xl px-4 py-3 text-sm font-medium hover:bg-slate-700">Fabricantes</a>
                <a href="{{ route('orders.index') }}" class="block rounded-xl px-4 py-3 text-sm font-medium hover:bg-slate-700">Órdenes</a>
                <a href="{{ route('order-items.index') }}" class="block rounded-xl px-4 py-3 text-sm font-medium hover:bg-slate-700">Ítems de Órdenes</a>
                <a href="{{ route('parts.index') }}" class="block rounded-xl px-4 py-3 text-sm font-medium hover:bg-slate-700">Piezas</a>
                <a href="{{ route('part-variants.index') }}" class="block rounded-xl px-4 py-3 text-sm font-medium hover:bg-slate-700">Variantes de Piezas</a>
                <a href="{{ route('price-histories.index') }}" class="block rounded-xl px-4 py-3 text-sm font-medium hover:bg-slate-700">Historial de Precios</a>
                <a href="{{ route('stocks.index') }}" class="block rounded-xl px-4 py-3 text-sm font-medium hover:bg-slate-700">Inventario</a>
                <a href="{{ route('users.index') }}" class="block rounded-xl px-4 py-3 text-sm font-medium hover:bg-slate-700">Usuarios</a>
                <a href="{{ route('vehicles.index') }}" class="block rounded-xl px-4 py-3 text-sm font-medium hover:bg-slate-700">Vehículos</a>
                <a href="{{ route('vendors.index') }}" class="block rounded-xl px-4 py-3 text-sm font-medium hover:bg-slate-700">Proveedores</a>
                <a href="{{ route('warehouses.index') }}" class="block rounded-xl px-4 py-3 text-sm font-medium hover:bg-slate-700">Almacenes</a>
            </nav>

            <div class="px-6 py-4 border-t border-slate-800 text-slate-400 text-sm">
                Acceso libre sin sesión.
            </div>
        </aside>

        <main class="flex-1 p-6">
            <header class="mb-6 flex items-center justify-between gap-4">
                <div>
                    <h2 class="text-2xl font-semibold">@yield('title', 'Panel Administrador')</h2>
                    <p class="text-sm text-slate-500">Gestione los datos del sistema sin autenticación</p>
                </div>
            </header>

            <section class="space-y-6">
                @yield('content')
            </section>
        </main>
    </div>
</body>
</html>

