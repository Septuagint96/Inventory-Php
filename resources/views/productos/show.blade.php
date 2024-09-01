{{-- resources/views/productos/show.blade.php --}}
@extends('layouts.app')

@section('title', 'Detalles del Producto')

@section('content')
<div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold mb-6 text-blue-600">{{ $producto->nombre }}</h1>

    <div class="mb-4">
        <h2 class="text-xl font-semibold text-gray-800">Detalles:</h2>
        <ul class="list-disc list-inside">
            <li><strong>ID:</strong> {{ $producto->id }}</li>
            <li><strong>Descripción:</strong> {{ $producto->descripcion }}</li>
            <li><strong>Precio:</strong> ${{ number_format($producto->precio, 2) }}</li>
            <li><strong>Stock:</strong> {{ $producto->stock }}</li>
            <li><strong>Categoría:</strong> {{ $producto->categoria->nombre }}</li>
            <li><strong>Proveedor:</strong> {{ $producto->proveedor->nombre }}</li>
        </ul>
    </div>

    <div class="flex justify-center mt-6">
        <a href="{{ route('productos.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Volver al Listado</a>
    </div>
</div>
@endsection
