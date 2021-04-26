@extends('layout')

@section('title', 'Editar Escuela')

@section('content')
     <div class="container">
        <div class="row">
             <div class=" col-sm-12 col-md-10 col-lg-6 mx-auto">
                    <h1>Editar Escuela</h1>

                    @include('partials.validation-errors')

                    <form  class="white-bg shadow rounded  py-3 px-4"  enctype="multipart/form-data" method="post" action="{{ route('escuelas.update', $escuela)}}">

                         @csrf @method('PATCH')

                         @include('escuelas._form')
                        <button class="btn btn-primary btn-lg">Actualizar</button>


                    </form>
               </div>
          </div>
     </div>
@endsection
