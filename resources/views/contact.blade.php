@extends('layout')

@section('title', 'Contact')

@section('content')

    <div class="container">
        <div class="row">
            <div class=" col-sm-12 col-md-10 col-lg-6 mx-auto">
                
                @include('partials.session-status')

                <form class="white-bg shadow rounded  py-3 px-4" method="post" action="{{ route('contact') }}">
                    @csrf
                    <h1 class="display-4">@lang('Contact')</h1>
                    <hr>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                            <input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror " type="" 
                            name="name" placeholder="Nombre..." 
                            id="name" value="{{ old('name')}}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                            <input type="text" class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror " 
                            ID="email" name="email" placeholder="Email..." value="{{ old('email')}}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">  
                        <label for="subject">Asunto</label> 
                        <input type="" name="subject" placeholder="Asunto..." {{ old('subject')}} value="esto es el asunto"
                        class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror ">
                        @error('subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">  
                        <label for="content">Mensaje</label>
                        <textarea name="content" placeholder="Mensaje..." {{ old('content')}}
                        class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror ">esto es el mensaje</textarea>
                        @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">   
                        <button class="btn btn-primary btn-lg btn-block">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection