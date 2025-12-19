@extends('layouts.app')
@section('titulo', 'Editar Equipo')
@section('contenido')
    <h1>Editar Equipo</h1>
    <form action="{{ route('equipos.update', $equipo) }}" method="POST">
        @csrf
        @method('PUT')
        @csrf
        <!-- Campo de tipo -->
        <div class="mb-3">
            <label class="form-label">Tipo *</label>
            <select name="tipo" class="form-select" required>
                <option value="Teléfono" {{ $equipo->tipo == 'Teléfono' ? 'selected' : ''}}>Teléfono</option>
                <option value="Tablet" {{ $equipo->tipo == 'Tablet' ? 'selected' : ''}}>Tablet</option>
            </select>
        </div>
        <!-- Campo de marca -->
        <div class="mb-3">
            <label class="form-label">Marca *</label>
            <input type="text" name="marca" class="form-control" required maxlength="25" value="{{ $equipo->marca}}">
        </div>
        <!-- Campo de defecto -->
        <div class="mb-3">
            <label class="form-label">Defecto</label>
            <textarea name="defecto" class="form-control" rows="3">{{ $equipo->defecto}}</textarea>
        </div>
        <!-- Campo de nombre_duenio -->
        <div class="mb-3">
            <label class="form-label">Nombre del dueño *</label>
            <input type="text" name="nombre_duenio" class="form-control" required maxlength="50" value="{{ $equipo->nombre_duenio}}">
        </div>
        <!-- Campo de telefono_duenio -->
        <div class="mb-3">
            <label class="form-label">Teléfono del dueño *</label>
            <input type="number" name="telefono_duenio" class="form-control" required maxlength="10" value="{{ $equipo->telefono_duenio}}">
        </div>
        <!-- Campo de estado -->
        <div class="mb-3">
            <label class="form-label">Estado *</label>
            <select name="estado" class="form-select" required>
                <option value="Revisado" {{ $equipo->estado == 'Revisado' ? 'selected' : ''}}>Revisado</option>
                <option value="En reparación" {{ $equipo->estado == 'En reparación' ? 'selected' : ''}}>En reparación</option>
                <option value="Reparado" {{ $equipo->estado == 'Reparado' ? 'selected' : ''}}>Reparado</option>
                <option value="No necesitó arreglo" {{ $equipo->estado == 'No necesritó arreglo' ? 'selected' : ''}}>No necesitó arreglo</option>
            </select>
        </div>
        </div>
        <a href="{{ route('equipos.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
