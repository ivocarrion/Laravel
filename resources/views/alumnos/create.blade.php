@extends('layout')

@section('title', 'Alta alumno')

@section('content')
     <div class="container">
        <div class="row">
             <div class=" col-sm-12 col-md-10 col-lg-6 mx-auto">
                    <h1>Alta alumno</h1>

                    @include('partials.validation-errors')

                    <form  class="white-bg shadow rounded  py-3 px-4"  enctype="multipart/form-data" method="post" action="{{ route('alumnos.store')}}">

                         @csrf

                         <div class="form-group">
                            <label>Nombre alumno </label>
                                <input  class="form-control bg-light shadow-sm  border-0"
                                type="text" name="nombre" value="{{ old('nombre') }}">

                        </div>
                        <div class="form-group">
                            <label>Apellidos</label>
                                <input  class="form-control bg-light shadow-sm  border-0" type="text" name="apellidos"
                                value="{{ old('apellidos') }}">

                        </div>
                        <div class="form-group">
                                <label>Fecha nacimiento</label><br/>
                                    <input  class="form-control bg-light shadow-sm  border-0" type="date" name="fecha_nac" value="{{  old('fecha_nac') }}">

                        </div>
                            <div class="form-group">
                                <label>Ciudad</label>
                                    <input  class="form-control bg-light shadow-sm  border-0" type="text" name="ciudad" value="{{  old('email')}}">

                        </div>

                        <div class="form-group">
                            <label>Escuela</label>
                            <select name="escuela_id" class="form-control" required>
                                <option value=""> -- Selecciona --</option>
                                @foreach($escuelas as $escuela)
                                    <option value="{{ $escuela->id }}">
                                        {{ $escuela->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <button class="btn btn-primary btn-lg">Guardar</button>


                    </form>
               </div>
          </div>
     </div>
@endsection
