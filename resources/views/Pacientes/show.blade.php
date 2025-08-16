@extends('layouts.app')

@section('content')
<style>
    

    table {
        border-collapse: separate !important;
        border-spacing: 0 12px !important;
        min-width: 800px;
    }



    tbody tr {
        background: #f9fafd;
        border-radius: 12px;
        transition: transform 0.15s ease, box-shadow 0.15s ease;
        box-shadow: 0 1px 4px rgba(83, 83, 83, 0.05);
        cursor: default;
    }

    tbody tr:hover {
        background: #e6f0ff;
        box-shadow: 0 6px 18px rgba(0,0,0,0.12);
        transform: translateY(-3px);
    }

    tbody td {
        vertical-align: middle !important;
        padding: 14px 20px;
        text-align: center;
        font-size: 0.95rem;
        color: #444;
    }

    

    .btn i {
        margin-right: 6px;
        vertical-align: middle;
    }

    /* Encabezado */
    h1 {
        font-weight: 700;
        font-size: 2.3rem;
        margin-bottom: 1.8rem;
        color: #0c0b0bff;
        text-align: center;
        letter-spacing: 1.2px;
    }

   
</style>

<div class="container">
    <h1>Pacientes generales</h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ route('pacientes.index') }}" class="btn btn-secondary me-md-2">Volver</a>
    </div>
    

    <div class="">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Fecha Nacimiento</th>
                    <th>Sexo</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($pacientes as $paciente)
                    <tr>
                        <td>{{ $paciente->id }}</td>
                        <td>{{ $paciente->nombre }}</td>
                        <td>{{ $paciente->apellido }}</td>
                        <td>{{ $paciente->correo }}</td>
                        <td>{{ $paciente->telefono }}</td>
                        <td>{{ $paciente->fecha_nacimiento }}</td>
                        <td>{{ $paciente->sexo }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    
</div>
@endsection