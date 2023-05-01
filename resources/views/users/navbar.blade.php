<!--
<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><a href="{{ route('perfil-contacto') }}">Perfil</a></li>
    <li class="list-group-item"><a href=" {{ route('perfil-direccion') }} ">Direccion</a></li>
    <li class="list-group-item">Salir </li>
  </ul>
</div>
-->
<div class="menu">
  <ul>
    <li><a href="{{ route('perfil-contacto') }}">Mi cuenta</a>
      <ul>
        <li><a href="{{ route('perfil-contacto') }}">Perfil</a></li>
        <li><a href="{{ route('perfil-direccion') }}">Dirección  </a></li>
        
      </ul>
    </li>
    <li><a href="#">Reservas</a>
      <ul>
        <li><a href="#">Mis Reservas</a></li>
        <li><a href="#">Mis Pedidos</a></li>
        <li><a href="#">Mis Facturas</a></li>
      </ul>
    </li>
    <li><a href="#">Carrito</a>
    <ul>
        <li><a href="#">Añadidos</a></li>
      </ul>
    </li>
    <li><a href="#">Ayuda y Soporte</a>
      <ul>
        <li><a href="#">Centro de ayuda</a></li>
        <li><a href="#">Reportar un problema</a></li>
        <li><a href="#">Contactar al soporte técnico</a></li>
      </ul>
    </li>
    <li><a href="{{ route('logout') }} ">Cerrar sesión</a></li>
  </ul>
</div>
