@extends('layout')

@section('title', 'Escuelas | ' . $escuela->nombre)

@section('content')

     <div class="container">
        <div class="bg-white p-5 shadow rounded">
             <div class=" col-sm-12 col-md-10 col-lg-6 mx-auto">
                    <h1> {{ $escuela->nombre }}</h1>

                                        @include('partials.validation-errors')

                    <p class="lead text-secondary"> {{ $escuela->direccion }} </p>
                    <p class="text-secondary"> <img style="width:200px;heigth:200px" src="{{ Storage::url($escuela->logotipo) }}" name="{{ $escuela->nombre}}"/> </p>
                    <p class="text-secondary"> {{ $escuela->email }} </p>
                    <p class="text-secondary"> {{ $escuela->telefono }}</p>
                    <p class="text-secondary"> {{ $escuela->web }}</p>
                    <div class="d-flex justify-content-between align-items-vertically">
                            <a href="{{ route('escuelas.index') }}">Volver</a>

                            <div class="btn-group">

                                <a class="btn btn-info"  href="{{ route('escuelas.edit', $escuela) }}">
                                Editar</a>

                                <a class="btn btn-danger" href="#" onclick="event.preventDefault();document.getElementById('delete-escuela').submit()">Eliminar</a>

                                <form id="delete-escuela" method="POST"
                                action="{{ route('escuelas.destroy', $escuela) }}">

                                    @csrf   @method('DELETE')

                                </form>
                            </div>
                    </div>

            </div>
        </div>
    </div>
@endsection
