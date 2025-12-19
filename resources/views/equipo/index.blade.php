@extends('layouts.app')
@section('titulo', 'Vehículos')
@section('contenido')
    <div class="d-flex justify-content-between mb-3">
        <h1>Equipos</h1>
        <a href="{{ route('equipo.create') }}" class="btn btn-primary">Nuevo</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Tipo</th>
                <th>Marca</th>
                <th>Defecto</th>
                <th>Nomobre dueño</th>
                <th>Teléfono dueño</th>
                <th>Estado</th>
                <th>Fecha ingreso</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($equipo as $equipo)
                <tr>
                    <td>{{ $equipo->tipo }}</td>
                    <td>{{ $equipo->marca }}</td>
                    <td>{{ $equipo->defecto}}</td>
                    <td>{{ $equipo->nombre_duenio}}</td>
                    <td>{{ $equipo->telefono_duenio}}</td>
                    <td>{{ $equipo->estado}}</td>

                    <td>{{ $equipo->created_at->format('d/m/Y H:i') }}</td>

                    <td>
                        <a href="{{ route('vehiculos.edit', $vehiculo) }}"
                           class="btn btn-sm btn-warning">Editar</a>
                        <!--
                        <form action="{{ route('vehiculos.destroy', $vehiculo)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar?')">Eliminar</button>
                        </form>
                        -->

                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
