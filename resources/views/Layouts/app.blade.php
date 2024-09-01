<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Proveeduría')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    .nav-link {
        position: relative;
        text-transform: uppercase;
        font-size: 1rem;
        padding: 0.5rem 1rem;
        transition: background-color 0.3s, color 0.3s;
        border-radius: 0.25rem; 
    }
    
    .nav-link:hover {
        background-color: #2c5282 !important; 
    }
    
    .nav-link.active {
        background-color: #2c5282 !important; 
    }
    </style>
<body class="bg-gray-100 text-gray-900 flex flex-col min-h-screen">
    <nav class="bg-blue-600 p-4 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('productos.index') }}" class="text-3xl font-bold hover:text-gray-200">
                Proveeduría
            </a>
            <div class="flex space-x-8">
                <a href="{{ route('productos.index') }}" class="nav-link {{ request()->routeIs('productos.index') ? 'active' : '' }}">
                    Productos
                </a>
                <a href="{{ route('categorias.index') }}" class="nav-link {{ request()->routeIs('categorias.index') ? 'active' : '' }}">
                    Categorías
                </a>
                <a href="{{ route('proveedores.index') }}" class="nav-link {{ request()->routeIs('proveedores.index') ? 'active' : '' }}">
                    Proveedores
                </a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto flex-grow mt-6">
        @yield('content')
    </div>

    <footer class="bg-blue-600 p-4 text-white text-center">
        © 2024 Proveeduría. Todos los derechos reservados.
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
