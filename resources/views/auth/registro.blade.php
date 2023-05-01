@extends('auth.index')
@section('content')


  <!-- Formulario de Registro -->
  <section class="form-register">

<form action="{{ route('registrarse') }}" method="POST">
  @csrf  <!-- Token es necesario -->

<h1>Create una cuenta rápida y fácil</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <p>Por favor, corrige los siguientes errores:</p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-floating mb-3">
  <input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
  <label for="username">Nombre</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control"  name="surname" id="surname" placeholder="Apellidos">
  <label for="surname">Apellidos</label>
</div>
<div class="form-floating mb-3">
  <input type="email" class="form-control"  name="email" id="email" placeholder="Email">
  <label for="email">Email</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control"   name="username" id="username" placeholder="Nombre de Usuario">
  <label for="username">Nombre de Usuario</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control"   name="phone" id="phone" placeholder="Telefono">
  <label for="username">Telefono</label>
</div>
<div class="form-floating mb-3">
  <input type="password" class="form-control"  name="password" id="password" placeholder="Password">
  <label for="password">Password</label>
</div>
<div class="form-floating mb-3">
  <input type="password" class="form-control"   name="password_confirmation" id="password" placeholder="Verificar Password">
  <label for="password">Verificar Password</label>
</div>

  <button type="submit" class="btn btn-primary">Craer Cuenta</button>
  <hr>
<button type="button" class="btn btn-success"><a href="{{ route ('login')}}" class="btn-register">Ya tienes una cuenta </a></button>

</form>
</section>
<!-- fin del registro-->

@endsection