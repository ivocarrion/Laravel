@extends('layout')

@section('title', 'Escuelas')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between align-item-center">
            <h1 class="display-4 mb-0">Escuelas</h1>



                <a href="{{ route('escuelas.create') }}"
                class="btn btn-primary btn-lg">Alta escuelas</a>



         </div>
         <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Escuela</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Email</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    @forelse ($escuelas as $escuela)

                        <tr>
                            <td scope="row">{{ $escuela->nombre }}</td>
                            <td>{{ $escuela->direccion }}</td>
                            <td>{{ $escuela->telefono }}</td>
                            <td>{{ $escuela->web }}</td>
                            <td> <a class="d-flex justify-content-between" href="{{ route('escuelas.show', $escuela) }}">Ver</a></td>
                        </tr>

                    @empty

                        <td colspan="4">No hay alumnos</li>

                    @endforelse

                </tbody>
            </table>

         </div>

         {{ $escuelas->links() }}
            {{-- <ul class="list-group">


                @forelse ($escuelas as $escuela)

                    <li class="list-group-item border-0 mb-3 shadow-sm">
                        <a class="d-flex justify-content-between" href="{{ route('escuelas.show', $escuela) }}">

                            <span class="text-secondary font-weight-bold">{{ $escuela->nombre }} </span> <img style="width:50px;heigth:50px" src="{{ Storage::url($escuela->logotipo) }}" name="{{ $escuela->nombre}}"/>
                        </a>
                    </li>

                @empty

                    <li class="list-group-item border-0 mb-3 shadow-sm">No hay escuelas</li>

                @endforelse


        </ul> --}}



    </div>
@endsection
