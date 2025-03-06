@extends('welcome')

@section('content')
    <!-- Botón para mostrar el modal de creación -->
    <div class="container">
        
        @auth
        <button type="button" class="btn btn-primary mt-3 mb-3 w-25" data-bs-toggle="modal" data-bs-target="#createSala">
            Nuevo
        </button>
        @endauth
    </div>

    {{-- Título de la sección --}}
    <h1 class="text-center mb-4">Listado de reuniones</h1>

    {{-- Tabla con las salas --}}
    <table class="table text-center container">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Sala</th>
                <th>Fecha</th>
                @auth
                
                @if (auth()->user()->isAdmin())
                <th colspan="2">Acciones</th>
                @endif
                @endauth
            </tr>
        </thead>
        <tbody>
            @foreach ($reuniones as $reunion)
                <tr>
                    <td>{{ $reunion->cliente->name ?? 'No asignado' }}</td>
                    <td>{{ $reunion->sala->nombre ?? 'No asignado' }}</td>
                    <td>{{ $reunion->fecha}}</td>
                    
                    @auth
                    
                    @if (auth()->user()->isAdmin())
                    
                    <td>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{ $reunion->id }}">
                            Editar
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $reunion->id }}">
                            Eliminar
                        </button>
                    </td>
                </tr>
                @endif
                @endauth
                <!-- Incluir modal de edición y eliminación para cada reunion -->
                {{-- @include('reunions.info') --}}
            @endforeach
        </tbody>
    </table>

    <!-- Modal para crear una nueva reunion -->
    {{-- @include('reunions.create') --}}
@endsection
