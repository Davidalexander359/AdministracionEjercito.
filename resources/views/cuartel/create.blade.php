@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Crear Cuartel</h3>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('cuartel.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name_quarter" class="form-label">Nombre del Cuartel</label>
                    <input type="text" class="form-control" id="name_quarter" name="name_quarter" required>
                </div>
                <div class="mb-3">
                    <label for="location">Ubicación</label>
                    <input type="text" id="location" name="location" required>
                </div>


                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{ url('/') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection
