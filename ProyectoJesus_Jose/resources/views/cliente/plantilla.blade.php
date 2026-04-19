 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name', 'Refaccionaria Automotriz'))</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-gradient-blue-silver { background: linear-gradient(135deg, #2563eb, #d1d5db); }
        .bg-gradient-silver-gold { background: linear-gradient(135deg, #d1d5db, #eab308); }
        .text-gold { color: #eab308; }
    </style>
</head>
<body class="bg-gray-100 font-sans">
    <header class="bg-gradient-blue-silver text-white shadow-lg">
        <div class="container mx-auto px-4 py-6 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-4">
                <div>
                    <h1 class="text-2xl font-bold text-gold">Refaccionaria Automotriz</h1>
                    <span class="text-sm">Proyecto ICASYS</span>
                </div>
            </div>

            <nav class="hidden md:flex space-x-6 text-sm font-medium">
                <a href="{{ route('home') }}" class="hover:text-gold transition">Inicio</a>
                <a href="{{ route('vehiculos') }}" class="hover:text-gold transition">Vehículos</a>
                <a href="{{ route('piezas') }}" class="hover:text-gold transition">Piezas</a>
                <a href="{{ route('nosotros') }}" class="hover:text-gold transition">Nosotros</a>
                <a href="{{ route('contacto') }}" class="hover:text-gold transition">Contacto</a>
            </nav>

            <div>
                <a href="{{ route('publicar') }}" class="bg-gold text-blue-900 px-5 py-2 rounded-lg font-semibold hover:bg-yellow-300 transition">Publicar</a>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <footer class="bg-gradient-blue-silver text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p class="text-gold">&copy; 2026 Refaccionaria Automotriz - Proyecto ICASYS. Todos los derechos reservados.</p>
            <p class="mt-2">Desarrollado en Laravel con Tailwind CSS.</p>
        </div>
    </footer>
</body>
</html>
