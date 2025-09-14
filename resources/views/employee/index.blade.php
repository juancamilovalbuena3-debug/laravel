@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Listado de empleados</h1>

    <a href="{{ route('employee.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Nuevo empleado</a>

    @if(session('success'))
        <p class="mt-4 text-green-600">{{ session('success') }}</p>
    @endif

    <table class="mt-6 w-full border-collapse border">
        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Nombre</th>
                <th class="border px-4 py-2">Apellido</th>
                <th class="border px-4 py-2">Email</th>
                <th class="border px-4 py-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($employees as $employee)
                <tr>
                    <td class="border px-4 py-2">{{ $employee->id }}</td>
                    <td class="border px-4 py-2">{{ $employee->first_name }}</td>
                    <td class="border px-4 py-2">{{ $employee->last_name }}</td>
                    <td class="border px-4 py-2">{{ $employee->email }}</td>
                    <td class="border px-4 py-2 flex space-x-2">
                        <a href="{{ route('employee.edit', $employee) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Editar</a>
                        <form action="{{ route('employee.destroy', $employee) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-500 text-white px-2 py-1 rounded" onclick="return confirm('¿Eliminar este empleado?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center p-4">No hay empleados registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
