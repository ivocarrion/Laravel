@extends('layout')

@section('title', 'Alumnos')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between align-item-center">
            <h1 class="display-4 mb-0">Alumnos</h1>



                <a href="{{ route('alumnos.create') }}"
                class="btn btn-primary btn-lg">Alta alumnos</a>



         </div>
            <hr>
            <p class="lead text-secondary">Listado de alumnos</p>
            <ul class="list-group">


                    @forelse ($alumnos as $alumno)

                        <li class="list-group-item border-0 mb-3 shadow-sm">
                            <a class="d-flex justify-content-between" href="{{ route('alumnos.show', $alumno) }}">

                                <span class="text-secondary font-weight-bold">{{ $alumno->nombre }} </span>
                                <span class="text-secondary ">{{ $alumno->apellidos }} </span>
                                <span class="text-secondary ">{{ $alumno->fecha_nac }} </span>
                                <span class="text-secondary ">{{ $alumno->ciudad }} </span>
                                <span class="text-secondary ">{{ $alumno->escuela->nombre }} </span>
                            </a>
                        </li>

                    @empty

                        <li class="list-group-item border-0 mb-3 shadow-sm">No hay alumnos</li>

                    @endforelse

                    {{ $alumnos->links() }}
            </ul>
    </div>
@endsection
