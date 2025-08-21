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
        <form action="{{ route('historial.store') }}" method="POST">
            @csrf
            <div class="card-header">
                <h5 class="card-title mb-0">Registro del Historial</h5>
            </div>
            <div class="card-body md-6">

                <div class="mb-4 row">
                    <label for="inputIdHist" class="col-sm-2 col-form-label">ID Historial</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputIdHist" name="id_hist" value="{{ old('id_hist') }}" required>
                    </div>
                </div>

                <div class="mb-4 row">
                    <label for="inputFecha" class="col-sm-2 col-form-label">Fecha</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputFecha" name="fecha" value="{{ old('fecha') }}" required>
                    </div>
                </div>

                <div class="mb-4 row">
                    <label for="inputAlergias" class="col-sm-2 col-form-label">Alergias</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputAlergias" name="alergias" value="{{ old('alergias') }}">
                    </div>
                </div>

                <div class="mb-4 row">
                    <label for="inputNotas" class="col-sm-2 col-form-label">Notas</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="inputNotas" name="notas" rows="4">{{ old('notas') }}</textarea>
                    </div>
                </div>

            </div>
            <div class="card-footer text-end">
                <a href="{{ route('historial.index') }}" class="btn btn-primary">Lista</a>
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
@endsection
