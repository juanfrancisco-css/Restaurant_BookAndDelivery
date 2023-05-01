<!DOCTYPE html>
<html>
  <!-- conexion con el head y las conexiones con los fichero .css -->
@include('conexion.head')
<!-- fin -->
<body>
    
<body class="sub_page">

<div class="hero_area">
  <div class="bg-box">
    <img src="images/hero-bg.jpg" alt="">
  </div>
  <!-- header section strats -->
  @include('layouts.navbar')
  <!-- end header section -->
</div>

<!-- section formularios -->
@yield('content')
<!-- fin de section -->

  <!-- footer section -->
  @include('layouts.footer')
  <!-- footer section -->

  <!-- conexiones js -->
  @include('conexion.file_js')
  <!-- fin de la conexion-->
</body>
</html>