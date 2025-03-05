@extends('welcome')

@section('content')
    <!-- Button trigger modal -->
    <div class="container">
        @auth

            <button type="button" class="btn btn-primary mt-3 mb-3 w-25" data-bs-toggle="modal" data-bs-target="#createAgenda">
                Nuevo
            </button>
        @endauth

        
    </div>
    <h1 class="text-center mb-4">Usuarios registrados</h1>
    <div class="table-responsive">


        <table class="table text-center container">
            <thead class="table table-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Fecha</th>
                    @auth
                    @if (auth()->user()->isAdmin())
                    
                    <th colspan="2" scope="col">Acciones</th>
                    @endif
                    @endauth
                </tr>
            </thead>
            <tbody>


                @foreach ($agendas as $row)
                    <tr class="">
                        <td scope="row">{{ $row->nombre }}</td>
                        <td>{{ $row->telefono }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->fecha }}</td>
                        @auth
                        @if (auth()->user()->isAdmin())
                        
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#edit{{ $row->id }}">
                                    Editar
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete{{ $row->id }}">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                        @endif
                        @endauth

                    @include('agendas.info')
                @endforeach
            </tbody>
        </table>
    </div>
    @include('agendas.create')
@endsection
