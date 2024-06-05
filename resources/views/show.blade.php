extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles de accidente</h1>
        <div class="card">
            <div class="card-header">
                <h2>{{ $acciden->codigo }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Codigo:</strong> {{ $acciden->codigo }}</p>
                <p><strong>hora:</strong> {{ $acciden->hora }}</p>
                <p><strong>fecha:</strong> {{ $acciden->fecha }}</p>
            </div>
        </div>
        <a href="{{ route('accidente.index') }}" class="btn btn-primary mt-3">Volver a la lista de accidentes</a>
    </div>
@endsection