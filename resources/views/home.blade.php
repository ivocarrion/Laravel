@extends('layout')

@section('title', 'Inicio')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-6">
                    <h1 class="display-4 text-primary">Desarrollo web</h1>
                    <p class="lead text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consectetur facilisis suscipit. Proin maximus turpis at ex blandit tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam erat volutpat.</p>
                    <a class="btn btn-primary btn-block" href="{{ route('contact') }}">Contáctame</a>
                    <a class="btn btn-outline-primary btn-block"  href="{{ route('projects.index') }}">Portafolio</a>                 
            </div>
            <div class="col-sm-12 col-md-6">
                <img class="img-fluid mb-4" src="/svg/home.svg" alt="desarrollo web laravel">
            </div>
        </div>
    </div>

@endsection