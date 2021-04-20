@extends('layout')

@section('title', 'Editar  proyecto')

@section('content')

     <div class="container">
        <div class="row">
             <div class=" col-sm-12 col-md-10 col-lg-6 mx-auto">
                <h1>Editar proyecto</h1>

                    @include('partials.session-status')

                     @include('partials.validation-errors')

                    <form method="POST" action="{{ route('projects.update', $project) }}">
                            
                            @method('PATCH')
                            
                            @include('projects._form', ['btnText' => 'Actualizar'])

                    </form>
            </div>
        </div>
    </div>
@endsection