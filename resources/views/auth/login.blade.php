@extends('auth.index')
@section('content')


<!-- formulario de login -->
<section class="form-login  ">
<form action="{{ route('login') }} " method="POST">
  @csrf
  <h1>Iniciar Sesión</h1>
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
  <input type="text" class="form-control"  name="username" id="username" placeholder="Email o Username">
  <label for="username">Email o Username</label>
</div>
<div class="form-floating mb-3">
  <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  <label for="password">Password</label>
</div>

  <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
<hr>
<button type="button" class="btn btn-success"><a href=" {{ route ('registrarse')}}" class="btn-register" >Crear una cuenta </a></button>

</form>
</section>
<!-- fin del formulario login -->

@endsection