@extends('layout')

@section('title', 'Escuelas')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between align-item-center">
            <h1 class="display-4 mb-0">Escuelas</h1>



                <a href="{{ route('escuelas.create') }}"
                class="btn btn-primary btn-lg">Alta escuelas</a>



         </div>




            <ul class="list-group">


                @forelse ($escuelas as $escuela)

                    <li class="list-group-item border-0 mb-3 shadow-sm">
                        <a class="d-flex justify-content-between" href="{{ route('escuelas.show', $escuela) }}">

                            <span class="text-secondary font-weight-bold">{{ $escuela->nombre }} </span> <img style="width:50px;heigth:50px" src="{{ Storage::url($escuela->logotipo) }}" name="{{ $escuela->nombre}}"/>
                        </a>
                    </li>

                @empty

                    <li class="list-group-item border-0 mb-3 shadow-sm">No hay escuelas</li>

                @endforelse

                {{ $escuelas->links() }}
        </ul>



    </div>
@endsection
