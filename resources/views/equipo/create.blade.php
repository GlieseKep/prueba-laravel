@extends('layouts.app')
@section('titulo', 'Nuevo Vehículo')
@section('contenido')
    <h1>Registrar Vehículo</h1>
    <form action="{{ route('vehiculos.store') }}" method="POST">
        @csrf
        <!-- Campo de tipo -->
        <div class="mb-3">
            <label class="form-label">Tipo *</label>
            <select name="tipo" class="form-select" required>
                <option value="">Seleccione...</option>
                <option value="Teléfono">Teléfono</option>
                <option value="Tablet">Tablet</option>
            </select>
        </div>
        <!-- Campo de marca -->
        <div class="mb-3">
            <label class="form-label">Marca *</label>
            <input type="marca" name="placa" class="form-control" required maxlength="25">
        </div>
        <!-- Campo de defecto -->
        <div class="mb-3">
            <label class="form-label">Defecto</label>
            <textarea name="defecto" class="form-control"
                      rows="3"></textarea>
        </div>
        <!-- Campo de nombre_duenio -->
        <div class="mb-3">
            <label class="form-label">Nombre del dueño *</label>
            <input type="text" name="nombre_duenio" class="form-control" required maxlength="50">
        </div>
        <!-- Campo de telefono_duenio -->
        <div class="mb-3">
            <label class="form-label">Teléfono del dueño *</label>
            <input type="number" name="telefono_duenio" class="form-control" required maxlength="10">
        </div>
        <!-- Campo de estado -->
        <div class="mb-3">
            <label class="form-label">Estado *</label>
            <select name="estado" class="form-select" required>
                <option value="">Seleccione...</option>
                <option value="Revisado">Revisado</option>
                <option value="En reparación">En reparación</option>
                <option value="Reparado">Reparado</option>
                <option value="No necesitó arreglo">No necesitó arreglo</option>
            </select>
        </div>

    </form>
@endsection
