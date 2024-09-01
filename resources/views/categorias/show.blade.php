{{-- resources/views/categorias/show.blade.php --}}
@extends('layouts.app')

@section('title', 'Detalles de la Categoría')

@section('content')
<div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold mb-6 text-blue-600">{{ $categoria->nombre }}</h1>

    <div class="mb-4">
        <h2 class="text-xl font-semibold text-gray-800">Detalles:</h2>
        <ul class="list-disc list-inside">
            <li><strong>ID:</strong> {{ $categoria->id }}</li>
            <li><strong>Descripción:</strong> {{ $categoria->descripcion }}</li>
        </ul>
    </div>

    <div class="flex justify-center mt-6">
        <a href="{{ route('categorias.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Volver al Listado</a>
    </div>
</div>
@endsection
