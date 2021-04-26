@extends('layout')

@section('title', 'Inicio')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-6">
                    <h1 class="display-4 text-primary">Gestión Escuelas</h1>
                    @guest

                    <p class="lead">Accede para gestionar contenidos.</p>
                        <a class="btn btn-primary" href="{{ route('login') }}" >Entrar</a>

                        {{-- <a href="{{ route('register') }}" class="btn but-info">Registro</a> --}}
                    @else

                   <a href="#" class="btn btn-danger" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                        >Cerrar</a>
                    @endguest
            </div>

        </div>
    </div>

@endsection
