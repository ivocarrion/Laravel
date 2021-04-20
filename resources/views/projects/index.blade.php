@extends('layout')

@section('title', 'Porfolio')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between align-item-center">
            <h1 class="display-4 mb-0">Proyectos</h1>
            
      
            @include('partials.session-status')
            @auth
                <a href="{{ route('projects.create') }}"  
                class="btn btn-primary btn-lg">Crear proyecto</a>
        
            @endauth 
         
         </div> 
            <hr>   
            <p class="lead text-secondary">Proyectos realizados</p>
            <ul class="list-group">
            

                    @forelse ($projects as $project)
                        
                        <li class="list-group-item border-0 mb-3 shadow-sm">
                        <a class="d-flex justify-content-between" href="{{ route('projects.show', $project) }}"> 
                        
                            <span class="text-secondary font-weight-bold">{{ $project->title }} </span>
                            <span class="text-black-50">{{ $project->created_at->format('d/m/Y') }}</span>
                        </a></li>
                
                    @empty

                        <li class="list-group-item border-0 mb-3 shadow-sm">No hay proyectos</li>
                        
                    @endforelse

                    {{ $projects->links() }}
            </ul>
    </div>
@endsection