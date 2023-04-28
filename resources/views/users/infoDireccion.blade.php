@extends('perfil')
@section('content')

<section class="section-perfil">
<h1>Dirección </h1>
<form  class="form-table form-address">

    <div class="row g-3 needs-validation" novalidate>
  <div class=" col-3 col-sm-4">
    <label for="validationCustom01" class="form-label">Calle  </label>
    <input type="text" class="form-control" id="validationCustom01" value="  " >
  </div>
  <div class=" col-3 col-sm-4">
    <label for="validationCustom01" class="form-label">Numero  </label>
    <input type="text" class="form-control" id="validationCustom01" value="  " >
  </div>
  <div class=" col-3 col-sm-2">
    <label for="validationCustom01" class="form-label">Codigo Postal </label>
    <input type="text" class="form-control" id="validationCustom01" value="  " >
  </div>
</div>
<div class="row g-3 needs-validation" novalidate>
  <div class=" col-3 col-sm-2">
    <label for="validationCustom01" class="form-label">Piso </label>
    <input type="text" class="form-control" id="validationCustom01" value="  " >
  </div>
  <div class=" col-3 col-sm-2">
    <label for="validationCustom01" class="form-label">Puerta </label>
    <input type="text" class="form-control" id="validationCustom01" value="  " >
  </div>
  
</div>

<div class="col-12">
  <button class="btn btn-primary" type="submit">Guardar</button>
  <button class="btn btn-danger" type="submit">Cancelar</button>
 
  </div>

</form>
</section>
@endsection