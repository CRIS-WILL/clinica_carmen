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
    <h1>Historiales generales</h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ route('historial.index') }}" class="btn btn-secondary me-md-2">Volver</a>
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
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($historiales as $historial)
                    <tr>
                        <td>{{ $historial->id }}</td>
                        <td>{{ $historial->id_hist }}</td>
                        <td>{{ $historial->fecha }}</td>
                        <td>{{ $historial->alergias ?? 'N/A' }}</td>
                        <td>{{ $historial->notas ?? 'N/A' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
@endsection
