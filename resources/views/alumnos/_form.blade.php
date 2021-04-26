<div class="form-group">
    <label>Nombre alumno </label>
        <input  class="form-control bg-light shadow-sm  border-0"
        type="text" name="nombre" value="{{ old('nombre', $alumno->nombre) }}">

</div>
<div class="form-group">
    <label>Apellidos</label>
        <input  class="form-control bg-light shadow-sm  border-0" type="text" name="apellidos"
        value="{{ old('apellidos', $alumno->apellidos) }}">

</div>
<div class="form-group">
        <label>Fecha nacimiento</label><br/>
            <input  class="form-control bg-light shadow-sm  border-0" type="date" name="fecha_nac" value="{{  old('fecha_nac',$alumno->fecha_nac) }}">

</div>
    <div class="form-group">
        <label>Ciudad</label>
            <input  class="form-control bg-light shadow-sm  border-0" type="text" name="ciudad" value="{{  old('email', $alumno->ciudad)}}">

</div>
<div class="form-group">
    <label>Escuela</label>
    <select name="escuela_id" class="form-control" required>
        <option value=" {{ $alumno->escuela->id }}">  {{ $alumno->escuela->nombre }}</option>
        @foreach($escuelas as $escuela)
            <option value="{{ $escuela->id }}">
                {{ $escuela->nombre }}
            </option>
        @endforeach
    </select>
</div>
