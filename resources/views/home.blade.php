@extends('layout')

@section('title', 'Inicio')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-sm-5">
                    <h1 class="display-4 text-primary">Gestión Escuelas</h1>
                    <img class="img-fluid" name="Gestion escuelas" src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/exams_g4ow.svg" />
                    @guest

                    <p class="lead">Accede para gestionar contenidos.</p>
                        <a class="btn btn-primary btn-lg" href="{{ route('login') }}" >Entrar</a>

                        {{-- <a href="{{ route('register') }}" class="btn but-info">Registro</a> --}}
                    @else

                   <a href="#" class="btn btn-danger  btn-lg" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                        >Cerrar</a>
                    @endguest
            </div>

        </div>
    </div>

@endsection
