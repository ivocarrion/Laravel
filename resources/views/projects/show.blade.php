@extends('layout')

@section('title', 'Porfolio | ' . $project->title)

@section('content')

     <div class="container">
        <div class="bg-white p-5 shadow rounded">
             <div class=" col-sm-12 col-md-10 col-lg-6 mx-auto">
                    <h1> {{ $project->title }}</h1>
                    <p class="lead text-secondary"> {{ $project->description }} </p>
                    <p class="text-secondary"> {{ $project->created_at->diffForHumans() }}</p>

                    @include('partials.session-status')
                    <div class="d-flex justify-content-between align-items-vertically">
                            <a href="{{ route('projects.index') }}">Volver</a>
                            @auth

                            <div class="btn-group">

                                <a class="btn btn-info"  href="{{ route('projects.edit', $project)}}">
                                Editar</a>

                                <a class="btn btn-danger" href="#" onclick="document.getElementById=
                                ('delete-project').submit()">Eliminar</a>

                                <form id="delete-project" method="POST" 
                                action="{{ route('projects.destroy', $project) }}">

                                    @csrf   @method('DELETE')

                                </form>
                            </div>
                    </div>
                    @endauth
            </div>
        </div>
    </div>
@endsection