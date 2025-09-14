@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Nuevo empleado</h1>

    <form action="{{ route('employee.store') }}" method="POST" class="space-y-4">
        @csrf
        <input type="text" name="first_name" placeholder="Nombre" class="border p-2 w-full" required>
        <input type="text" name="last_name" placeholder="Apellido" class="border p-2 w-full" required>
        <input type="email" name="email" placeholder="Correo" class="border p-2 w-full" required>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
        <a href="{{ route('employee.index') }}" class="ml-2">Cancelar</a>
    </form>
@endsection
