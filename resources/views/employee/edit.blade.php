@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Editar empleado</h1>

    <form action="{{ route('employee.update', $employee) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <input type="text" name="first_name" value="{{ $employee->first_name }}" class="border p-2 w-full" required>
        <input type="text" name="last_name" value="{{ $employee->last_name }}" class="border p-2 w-full" required>
        <input type="email" name="email" value="{{ $employee->email }}" class="border p-2 w-full" required>

        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Actualizar</button>
        <a href="{{ route('employee.index') }}" class="ml-2">Cancelar</a>
    </form>
@endsection
