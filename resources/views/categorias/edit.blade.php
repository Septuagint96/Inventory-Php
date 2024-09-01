{{-- resources/views/categorias/edit.blade.php --}}
@extends('layouts.app')

@section('title', 'Editar Categoría')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold mb-6 text-blue-600">Editar Categoría</h1>

    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 font-semibold mb-2">Nombre</label>
            <input type="text" name="nombre" value="{{ $categoria->nombre }}" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="descripcion" class="block text-gray-700 font-semibold mb-2">Descripción</label>
            <textarea name="descripcion" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ $categoria->descripcion }}</textarea>
        </div>
        <div class="flex justify-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Actualizar</button>
        </div>
    </form>
</div>
@endsection
