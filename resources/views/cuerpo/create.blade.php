@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Crear denominacion del cuerpo de Ejército</h3>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('cuerpo.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="denomination" class="form-label">Numero de la denominacion del Cuerpo de Ejército</label>
                    <input type="text" class="form-control" id="denomination" name="denomination" required>
                </div>

                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{ url('/') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection
