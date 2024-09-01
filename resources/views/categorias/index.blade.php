{{-- resources/views/categorias/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Listado de Categorías')

@section('content')
<div class="container">
    <h1 class="text-4xl font-semibold mb-4">Listado de Categorías</h1>
    <a href="{{ route('categorias.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Agregar Categoría</a>
    <table class="table-auto w-full mt-4">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Descripción</th>
                <th class="px-4 py-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr>
                <td class="border px-4 py-2">{{ $categoria->id }}</td>
                <td class="border px-4 py-2">{{ $categoria->nombre }}</td>
                <td class="border px-4 py-2">{{ $categoria->descripcion }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('categorias.show', $categoria->id) }}" class="btn btn-info bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ver</a>
                    <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-warning bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                    <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display:inline;">
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
        {{ $categorias->links() }} 
    </div>
</div>
@endsection
