<?php
  require_once "privado/DB.php";
  $conexion = Bd::obtenerConexion();

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Flottec - Categorias</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
    <!-- Bulma CSS -->
    <link rel="stylesheet" href='bulma-0.9.0/css/bulma.css'>
    
     <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    
     <!-- Materialize CSS -->
    <link rel="stylesheet" href="css/materialize.min.css">
    
     <!-- Material Design Iconic Font CSS -->
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    
    <!-- Malihu jQuery custom content scroller CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="css/sweetalert.css">
    
    <!-- MaterialDark CSS -->
    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC&family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Nav Lateral -->
    <section class="NavLateral full-width">
        <div class="NavLateral-FontMenu full-width ShowHideMenu"></div>
        <div class="NavLateral-content full-width">
            <header class="NavLateral-title full-width center-align">
                <a href="https://flottec.cl/" target="_blank"><img src="assets/icons/chile.png" style="width: 40px;"></a>
                <a href="http://flottec.com/" target="_blank"><img src="assets/icons/usa.png" style="width: 40px;"></a>
               <i class="zmdi zmdi-close NavLateral-title-btn ShowHideMenu"></i>
           </header>
           <figure class="full-width NavLateral-logo">
            <img src="assets/img/logoflottec.png" alt="material-logo" class="responsive-img center-box">
            <figcaption class="center-align"></figcaption>
        </figure>
        <div class="NavLateral-Nav">
            <ul class="full-width">
                <li>
                    <a href="index.php" class="waves-effect waves-light"> Inicio</a>
                </li>
                <li class="NavLateralDivider"></li>
                <li>
                    <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Productos</a>
                    <ul class="full-width">
                        <li><a href="categorias.php" class="waves-effect waves-light">Categorias</a></li>
                    </ul>
                </li>
                <li class="NavLateralDivider"></li>
                <li>
                    <a href="eventos.php" class="waves-effect waves-light"> Eventos</a>
                </li>
                <li class="NavLateralDivider"></li>
                <li>
                    <a href="" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Acerca de</a>
                    <ul class="full-width">
                        <li><a href="acerca.php" class="waves-effect waves-light">Nosotros</a></li>
                        <li><a href="clientes.php" class="waves-effect waves-light">Clientes</a></li>
                    </ul>
                </li>
                <li class="NavLateralDivider"></li>
                <li>
                    <a href="contacto.php" class="waves-effect waves-light"> Contacto</a>
                </li>
                <li class="NavLateralDivider"></li>
                <li>
                    <a href="simulador.php" class="waves-effect waves-light">Simulador</a>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Modal Structure -->
  <div id="modal1" class="modal">
    <form id="formulario" action="busqueda.php" method="POST">
    <div class="modal-content">
      <label for="input_buscar">Busqueda</label>
      <input id="input_buscar" name="input_buscar" type="text" class="validate">
      
    </div>
    <div class="modal-footer">
      <button id="btnBuscar" type="submit" name="enviar_busqueda" class="modal-close waves-effect waves-green btn blue darken-4">Buscar</button>
    </div>
    </form>
  </div>

<!-- Page content -->
<section class="ContentPage full-width">
    <!-- Nav Info -->
    <div class="ContentPage-Nav full-width">
        <ul class="full-width">
            <li class="btn-MobileMenu ShowHideMenu"><a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Menu"><i class="zmdi zmdi-more-vert"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCZmlc1PO87ju-B5w6e9_7wA" target="_blank" class="youtube"><i class="fa fa-youtube-square"></i></a></li>
            <li><a href="https://www.facebook.com/FlottecMexico" target="_blank" class="facebook"><i class="fa fa-facebook-square"></i></a></li>
            <li ><a href="#modal1" data-target="modal1" class="tooltipped waves-effect waves-light modal-trigger buscador" id="buscador" name="buscador" data-position="bottom" data-delay="50" data-tooltip="Busqueda"><i class="zmdi zmdi-search"></i></a>
            </li>    
        </ul>
    </div>
<!-- Notifications area -->
<section class="hero has-background-link">
  <div class="hero-body has-text-white" >
    <div class="container is-fluid">
      <h1 class="title has-text-white">
        Busqueda
      </h1>
    </div>
  </div>
</section>
<div class="row">
<nav>
  <div class="nav-wrapper light-blue darken-4">
      <div class="col s12">
        <a href="index.php" class="breadcrumb">Inicio</a>
        <a href="busqueda.php" class="breadcrumb">Resultados</a>
      </div>
    </div>
  </nav>
 </div>
<div class="section">
  <form action="" method="POST">
  <div class="row mt-3">
    <div class="section">
      <div class="columns">
        
          <div class="column is-10">
          <input type="text" placeholder="Buscar" id="buscar" name="buscar">
        </div>
        <div class="column is-2 valign-wrapper">
          <button id="btnBuscar" type="submit" name="env_busc" class="waves-effect waves-green btn blue darken-4">Buscar</button>
        </div>
        
        
      </div>
      
      
    </div>  
  </div>
  </form>
</div> 

<div class="divider"></div>

<div class="section">
  <?php
  $idL;
  if (isset($_POST['env_busc'])) {
    $idL = $_POST['buscar'];
  } elseif (isset($_POST['enviar_busqueda'])) {
    $idL = $_POST['input_buscar'];
  } 
    $consulta = $conexion->query("SELECT a.*,b.nombre_cat FROM productos a 
      left join categorias b on b.clave_cat=a.clave_categoria
      where a.nombre like '%$idL%' or b.nombre_cat like '%$idL%' ");
    while ($row = $consulta->fetch_assoc()) {
    ?>
    <div class="columns is-centered">
        <div class="column is-narrow">
          <h4> Mostrando resultados de " <?php echo "$idL"; ?> "</h4>
        </div>
      </div>
  <div class="row mt-3">
    <div class="section grey lighten-4 ml-3 mr-3 z-depth-1" style="border-left: 8px solid #0d47a1;">
      <div class="columns">
          <div class="column is-size-5 has-text-weight-bold">
            <a href="<?php echo $row['ruta_archivo'];?>"><?php echo $row['nombre_cat'];?> - <?php echo $row['nombre'];?></a>
          </div>
      </div>
    </div>
  </div>
<?php           
  }

  
  ?>
  
</div>
<!-- Footer -->
<footer class="footer-MaterialDark">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Direccion Oficinas</h5>
                <ul>
                  <li>
                    <a class="white-text text-lighten-4" href="https://www.google.com.mx/maps/place/Calle+Rub%C3%A9n+Dar%C3%ADo+150,+Col+del+Valle,+78200+San+Luis,+S.L.P./@22.1498458,-101.0107519,17z/data=!3m1!4b1!4m5!3m4!1s0x842a98cb50a53661:0x9d711cb9f21eb2dc!8m2!3d22.1498458!4d-101.0085632" target="_blank"><i class="zmdi zmdi-pin"></i>
                    Ruben Dario #150 Col. Polanco San Luis Potosi, San Luis Potosi
                    CP 78220</a>
                  </li>
                </ul> 
                <h5 class="white-text">Direccion Almacen</h5>
                <ul>
                  <li>
                    <a class="white-text text-lighten-4" href="https://www.google.com/maps/place//data=!4m2!3m1!1s0x868253edeedf0c2d:0x390e397cb4118cea?utm_source=mstt_1" target="_blank"><i class="zmdi zmdi-pin"></i>
                    Boulevard las Pilas Carretera Federal 45 Km 13 #22 Las Pilas Morelos Zacatecas CP 98100 Parque Industrial Pyme 100</a>
                  </li>
                </ul>            
            </div>
            <div class="col l6 s12">
                <h5 class="white-text">Contacto</h5>
                <h6 class="white-text">Teléfono:</h6>   
                <a class="white-text text-lighten-4"><i class="zmdi zmdi-phone"></i>
                    Oficina (444) 271-06-42</a>
                <br>
                <a class="white-text text-lighten-4"><i class="zmdi zmdi-phone"></i>
                    Oficina (444) 243-02-19</a>
                <h6 class="white-text">Correo:</h6>           
                <a class="white-text text-lighten-4"><i class="zmdi zmdi-email"></i>
                    hesmeralda@flottec.com</a>
                <br>
                <a class="white-text text-lighten-4"><i class="zmdi zmdi-email"></i>
                    jonathan.tapia@flottec.com</a>
            </div>    
        </div>
    </div>
    <div class="NavLateralDivider"></div>
    <div class="footer-copyright">
        <div class="container center-align">
            © 2020 SIC WS
        </div>
    </div>
</footer>
</section>

<script src="js/sweetalert.min.js"></script>
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
    
    <!-- Materialize JS -->
    <script src="js/materialize.min.js"></script>
    
    <!-- Malihu jQuery custom content scroller JS -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- MaterialDark JS -->
    <script src="js/main.js"></script>

<script >
     document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems, {
        indicators:false,height:420,duration: 800
    });
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.slider').slider();
  });
</script>
<script>

$(document).ready(function () {

    $('#btnBuscar').on('click', function() {
        var url = "busqueda.php";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data: $("#formulario").serialize(), 
           success: function(data)             
           {
             //$('#resp').html(data);               
           }
       });
      
    });
});


  // Or with jQuery

  $(document).ready(function(){
    $('.modal').modal();
  });

</script>

</body>
</html>
