<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema de administracion de comercios en la nube</title>
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="css/ionicons.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/rev.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  </head>
  <body>
  <header>
    <div class="contain-to-grid sticky">
        <nav class="top-bar" data-topbar role="navigation">
              <ul class="title-area">
                <li class="name">
                  <h1><a href="#">Tiena APP LOGO</a></h1>
                </li>
                 <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
              </ul>

              <section class="top-bar-section">
                <!-- Right Nav Section -->
                <ul class="right">
                  <li class="has-dropdown">
                    <a href="#">Mi tienda</a>
                    <ul class="dropdown">
                      <li><a href="#">Usuarios</a></li>
                      <li><a href="#">Configuración</a></li>
                      <!--<li class="active"><a href="#"> <i class="icon ion-loading-a"></i> Cerrar Sesion</a></li>-->
                      {{ HTML::clever_link("/", 'Cerrar Sesion' ) }}
                    </ul>
                  </li>
                </ul>

                <!-- Left Nav Section -->
                <ul class="left">
                  <li>{{ HTML::clever_link("/", 'Inicio' ) }}</li>
                  <li>{{ HTML::clever_link("proveedores", 'Proveedores' ) }}</li>
                  <li>{{ HTML::clever_link("clientes", 'Clientes' ) }}</li>
                  <li>{{ HTML::clever_link("punto_venta", 'Punto de Venta' ) }}</li>
                  <!--<li>{{ HTML::clever_link("compras", 'Compras' ) }}</li>
                  <li>{{ HTML::clever_link("ventas", 'Ventas' ) }}</li>-->
                   <li>{{ HTML::clever_link("productos", 'Productos' ) }}</li>
                    



                   <li class="has-dropdown">
                    <a href="#">Configuracion</a>
                    <ul class="dropdown">
                     <!-- <li ><a href="roles">Roles</a></li>-->
                      <li>{{ HTML::clever_link("roles", 'Roles' ) }}</li>
                    <!--  <li><a href="unidad_medida">Unidad de Medida</a></li>-->
                      <li>{{ HTML::clever_link("unidad_medida", 'Unidad de Medida' ) }}</li>
                     <!-- <li><a href="grupos">Grupos</a></li>-->
                      <li>{{ HTML::clever_link("grupos", 'Grupos' ) }}</li>
                      <!--<li><a href="sucursales">Sucursales</a></li>-->
                      <li>{{ HTML::clever_link("sucursales", 'Sucursales' ) }}</li>
                     <!-- <li><a href="usuarios">Usuarios</a></li> -->
                      <li>{{ HTML::clever_link("usuarios", 'Usuarios' ) }}</li>                     
                    </ul>
                  </li>
                </ul>

              </section>
       </nav>
    </div>
  </header>


    <div class="row">
      <div class="large-12 columns">
        <div class="panel">
              @yield('content')
        </div>
      </div>
    </div>

   
    <script src="bower_components/modernizr/modernizr.js"></script>
    <!-- <script src="bower_components/jquery/dist/jquery.min.js"></script> -->
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>


