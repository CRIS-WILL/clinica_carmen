@extends('layouts.app')

@section('content')

<style>
    
    .card-header {
        background: #4b6cb7;
        color: white;
        font-weight: 700;
        font-size: 1.5rem;
    
        padding: 1.2rem 2rem;
        
    }
    .card-footer {
        background: transparent;
        border-top: none;
        padding: 1rem 2rem;
    }
    .card-body {
        padding: 2rem;
        font-size: 1rem;
    }

    .card-title {
        font-weight: 550;
        font-size: 1.5rem;
    }
</style>

<div class="container md-4">
    <div class="card ">
        <form action="{{ route('pacientes.store') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-header">
                <h5 class="card-title mb-0">Editar Registro</h5>
            </div>
            <div class="card-body md-6">

                <div class="mb-4 row">
                    <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNombre" name="nombre" value="{{ old('nombre', $paciente->nombre) }}" required>
                    </div>
                </div>

                <div class="mb-4 row">
                    <label for="inputApellido" class="col-sm-2 col-form-label">Apellido</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputApellido" name="apellido" value="{{ old('apellido', $paciente->apellido) }}" required>
                    </div>
                </div>

                <div class="mb-4 row">
                    <label for="inputCorreo" class="col-sm-2 col-form-label">Correo</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputCorreo" name="correo" value="{{ old('correo', $paciente->correo) }}" required>
                    </div>
                </div>

                <div class="mb-4 row">
                    <label for="inputTelefono" class="col-sm-2 col-form-label">Teléfono</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTelefono" name="telefono" value="{{ old('telefono', $paciente->telefono) }}">
                    </div>
                </div>

                <div class="mb-4 row">
                    <label for="inputFechaNacimiento" class="col-sm-2 col-form-label">Fecha Nacimiento</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputFechaNacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $paciente->fecha_nacimiento) }}" required>
                    </div>
                </div>

                <div class="mb-4 row">
                    <label for="inputSexo" class="col-sm-2 col-form-label">Sexo</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="inputSexo" name="sexo" required>
                            <option value="">Seleccione</option>
                            <option value="Masculino" {{ old('sexo', $paciente->sexo) == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                            <option value="Femenino" {{ old('sexo', $paciente->sexo) == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                        </select>
                    </div>
                </div>

                <div class="mb-4 row">
                    <label for="inputDireccion" class="col-sm-2 col-form-label">Dirección</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputDireccion" name="direccion" value="{{ old('direccion', $paciente->direccion) }}">
                    </div>
                </div>

                <div class="mb-4 row">
                    <label for="inputAntecedentes" class="col-sm-2 col-form-label">Antecedentes Médicos</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="inputAntecedentes" name="antecedentes_medicos">{{ old('antecedentes_medicos', $paciente->antecedentes_medicos) }}</textarea>
                    </div>
                </div>

            </div>
            <div class="card-footer text-end">
                <a a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Cancelar</a>
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>

@endsection
