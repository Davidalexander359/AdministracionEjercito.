@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Crear Compañía</h3>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('compania.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="activity_company" class="form-label">Actividad de la Compañía</label>
                    <input type="text" class="form-control" id="activity_company" name="activity_company" required>
                </div>

                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{ url('/') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection
