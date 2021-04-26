@extends('layout')

@section('title', 'Alumnos')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between align-item-center">
            <h1 class="display-4 mb-0">Alumnos</h1>



                <a href="{{ route('alumnos.create') }}"
                class="btn btn-primary btn-lg">Alta alumnos</a>



         </div>
         <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Fecha nacimiento</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    @forelse ($alumnos as $alumno)

                        <tr>
                            <td scope="row">{{ $alumno->nombre }}</td>
                            <td>{{ $alumno->apellidos }}</td>
                            <td>{{ $alumno->fecha_nac }}</td>
                            <td>{{ $alumno->ciudad }}</td>
                            <td> <a class="d-flex justify-content-between" href="{{ route('alumnos.show', $alumno) }}">Ver</a></td>
                        </tr>

                    @empty

                        <td colspan="4">No hay alumnos</li>

                    @endforelse

                </tbody>
            </table>
        </div>
                {{ $alumnos->links() }}

    </div>
@endsection
