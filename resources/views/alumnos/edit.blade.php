@extends('layout')

@section('title', 'Editar Alumno')

@section('content')
     <div class="container">
        <div class="row">
             <div class=" col-sm-12 col-md-10 col-lg-6 mx-auto">
                    <h1>Editar Alumno</h1>

                    @include('partials.validation-errors')

                    <form  class="white-bg shadow rounded  py-3 px-4"  enctype="multipart/form-data" method="post" action="{{ route('alumnos.update', $alumno)}}">

                         @csrf @method('PATCH')

                         @include('alumnos._form')

                        <button class="btn btn-primary btn-lg">Actualizar</button>


                    </form>
               </div>
          </div>
     </div>
@endsection
