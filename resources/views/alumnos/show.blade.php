@extends('layout')

@section('title', 'Alumnos | ' . $alumno->nombre)

@section('content')

     <div class="container">
        <div class="bg-white p-5 shadow rounded">
             <div class=" col-sm-12 col-md-10 col-lg-6 mx-auto">
                    <h1> {{ $alumno->nombre }}</h1>

                                        @include('partials.validation-errors')

                    <p class="lead text-secondary">Apellidos: {{ $alumno->apellidos }} </p>
                    <p class="text-secondary"> Fecha de nacimiento: {{ \Carbon\Carbon::parse($alumno->fecha_nac)->format('d/m/Y')  }} </p>
                    <p class="text-secondary">Ciudad de residencia:  {{ $alumno->ciudad }} </p>
                    <p class="text-secondary">Escuela:  {{ $alumno->escuela->nombre }}</p>
                    <div class="d-flex justify-content-between align-items-vertically">
                            <a href="{{ route('alumnos.index') }}">Volver</a>

                            <div class="btn-group">

                                <a class="btn btn-info"  href="{{ route('alumnos.edit', $alumno) }}">
                                Editar</a>

                                <a class="btn btn-danger" href="#" onclick="event.preventDefault();document.getElementById('delete-alumno').submit()">Eliminar</a>

                                <form id="delete-alumno" method="POST"
                                action="{{ route('alumnos.destroy', $alumno) }}">

                                    @csrf   @method('DELETE')

                                </form>
                            </div>
                    </div>

            </div>
        </div>
    </div>
@endsection
