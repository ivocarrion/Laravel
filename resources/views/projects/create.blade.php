@extends('layout')

@section('title', 'Crear proyecto')

@section('content')
     <div class="container">
        <div class="row">
             <div class=" col-sm-12 col-md-10 col-lg-6 mx-auto">
                    <h1>Crear proyecto</h1>

                    @include('partials.validation-errors')

                    <form  class="white-bg shadow rounded  py-3 px-4" method="post" action="{{ route('projects.store') }}">
                         
                         @include('projects._form', ['btnText' => 'Guardar'])

                         
                    </form>
               </div>
          </div>
     </div>
@endsection