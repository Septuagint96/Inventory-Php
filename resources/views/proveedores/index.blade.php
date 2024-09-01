{{-- resources/views/proveedores/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Listado de Proveedores')

@section('content')
<div class="container">
    <h1 class="text-4xl font-semibold mb-4">Listado de Proveedores</h1>
    <a href="{{ route('proveedores.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Agregar Proveedor</a>
    <table class="table-auto w-full mt-4">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Dirección</th>
                <th class="px-4 py-2">Teléfono</th>
                <th class="px-4 py-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proveedores as $proveedor)
            <tr>
                <td class="border px-4 py-2">{{ $proveedor->id }}</td>
                <td class="border px-4 py-2">{{ $proveedor->nombre }}</td>
                <td class="border px-4 py-2">{{ $proveedor->direccion }}</td>
                <td class="border px-4 py-2">{{ $proveedor->telefono }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('proveedores.show', $proveedor->id) }}" class="btn btn-info bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ver</a>
                    <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="btn btn-warning bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                    <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="POST" style="display:inline;">
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
        {{ $proveedores->links() }} 
    </div>
</div>
@endsection
