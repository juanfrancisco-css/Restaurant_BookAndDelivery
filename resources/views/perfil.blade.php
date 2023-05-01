<!DOCTYPE html>
<html>
    
@include('conexion.head')
<body class="sub_page">

<div class="hero_area">
            <div class="bg-box">
            <img src="images/hero-bg.jpg" alt="">
            </div>
    <!-- header section strats -->
    @include('layouts.navbar')
    <!-- end header section -->
</div>

<!-- Navegador Vertical del Usuario Autenticado -->
@include('users.navbar')
<!-- fin -->

  <!--  section contenido de usuario autenticado -->
@yield('content')
  <!--  section fin  -->

  <!-- footer section -->
  @include('layouts.footer')
  <!-- footer section -->

 @include('conexion.file_js')

</body>

</html>