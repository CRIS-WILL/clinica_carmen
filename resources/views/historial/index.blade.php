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
    <h1>Lista de Historiales</h1>

    <div class="button-group">
        <a href="{{ route('historial.create') }}" class="btn btn-outline-primary px-4 py-2">
            <i class="fas fa-file-medical"></i> Agregar
        </a>
        <a href="{{ route('historial.showAll') }}" class="btn btn-outline-secondary px-4 py-2">
            <i class="fas fa-table"></i> Tabla completa
        </a>
    </div>

    <div class="">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID Historial</th>
                    <th>Fecha</th>
                    <th>Alergias</th>
                    <th>Notas</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($historiales as $historial)
                    <tr>
                        <td>{{ $historial->id }}</td>
                        <td>{{ $historial->id_hist }}</td>
                        <td>{{ $historial->fecha }}</td>
                        <td>{{ $historial->alergias ?? 'N/A' }}</td>
                        <td>{{ Str::limit($historial->notas, 50) ?? 'N/A' }}</td>
                        <td>
                            <a href="{{ route('historial.edit', $historial->id) }}" class="btn btn-warning btn-sm" title="Editar historial">
                                <i class="fas fa-edit"></i> Editar
                            </a>

                            <form action="{{ route('historial.destroy', $historial->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Eliminar historial" onclick="return confirm('¿Estás seguro de eliminar este historial?')">
                                    <i class="fas fa-trash-alt"></i> Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
@endsection
