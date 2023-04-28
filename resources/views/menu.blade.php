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

  <!-- food section -->
@include('layouts.food_module')

  <!-- end food section -->

  <!-- footer section -->
  @include('layouts.footer')
  <!-- footer section -->

  @include('conexion.file_js')

</body>

</html>