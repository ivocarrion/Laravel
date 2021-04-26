<div class="form-group">
    <label>Nombre escuela </label>
        <input  class="form-control bg-light shadow-sm  border-0"
        type="text" name="nombre" value="{{ old('nombre', $escuela->nombre) }}">

</div>
<div class="form-group">
    <label>Dirección</label>
        <input  class="form-control bg-light shadow-sm  border-0" type="text" name="direccion"
        value="{{ old('direccion', $escuela->direccion) }}">

</div>
<div class="form-group">
        <label>Logotipo (min 200px * 200px)</label><br/>
    <img style="width:60px;heigth:60px" src="{{ Storage::url($escuela->logotipo) }}" name="{{ $escuela->nombre}}"/>

            <input  class="form-control bg-light shadow-sm  border-0" type="file" name="logotipo" value="{{  old('logotipo',Storage::url($escuela->logotipo)) }}">

</div>
    <div class="form-group">
        <label>Email</label>
            <input  class="form-control bg-light shadow-sm  border-0" type="email" name="email" value="{{  old('email', $escuela->email)}}">

</div>
<div class="form-group">
        <label>Teléfono</label>
            <input  class="form-control bg-light shadow-sm  border-0" type="text"  name="telefono" value="{{ old('telefono', $escuela->telefono) }}">

</div>
<div class="form-group">
        <label>Página web</label>
            <input  class="form-control bg-light shadow-sm  border-0" type="text"  name="web" value="{{ old('web', $escuela->web)}}">

</div>
