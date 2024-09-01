{{-- resources/views/productos/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Listado de Productos')

@section('content')
<div class="container">
    <h1 class="text-4xl font-semibold mb-4">Listado de Productos</h1>
    <a href="{{ route('productos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Agregar Producto</a>
    <table class="table-auto w-full mt-4">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Precio</th>
                <th class="px-4 py-2">Cantidad en Stock</th>
                <th class="px-4 py-2">Categoría</th>
                <th class="px-4 py-2">Proveedor</th>
                <th class="px-4 py-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
            <tr>
                <td class="border px-4 py-2">{{ $producto->id }}</td>
                <td class="border px-4 py-2">{{ $producto->nombre }}</td>
                <td class="border px-4 py-2">${{ number_format($producto->precio, 2) }}</td>
                <td class="border px-4 py-2">{{ $producto->stock }}</td>
                <td class="border px-4 py-2">{{ $producto->categoria->nombre }}</td>
                <td class="border px-4 py-2">{{ $producto->proveedor->nombre }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-info bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ver</a>
                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        {{ $productos->links() }} 
    </div>
</div>
@endsection
