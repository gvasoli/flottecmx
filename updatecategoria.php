<?php
require_once 'privado/DB.php';
$conexion = Bd::obtenerConexion();

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $clave_categoria = $_POST['uclave_categoria'];
        $nombre_categoria = $_POST['unombre_categoria'];
        $imagen = $_POST['uimagen'];

        $nombreArchivoConvert = strtr($nombre_categoria, " ", "_");
        $str = strtolower("categorias/".$nombreArchivoConvert.".php");
        $carpeta = strtolower($nombreArchivoConvert);


        $select = "SELECT nombre_cat,ruta_archivo from categorias where id='$id'";
        $res = $conexion->query($select);
        $var = $res->fetch_row();

        $file = $var[1];
       
        if ($nombre_categoria!=$var[0]) {
            $contenido = "<?php
  require_once \"../privado/DB.php\";
  \$conexion = Bd::obtenerConexion();
?>
<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <title>Flottec - $nombre_categoria </title>

    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">    
    <!-- Bulma CSS -->
    <link rel=\"stylesheet\" href='../bulma-0.9.0/css/bulma.css'>
    
     <!-- Normalize CSS -->
    <link rel=\"stylesheet\" href=\"../css/normalize.css\">
    
     <!-- Materialize CSS -->
    <link rel=\"stylesheet\" href=\"../css/materialize.min.css\">
    
     <!-- Material Design Iconic Font CSS -->
    <link rel=\"stylesheet\" href=\"../css/material-design-iconic-font.min.css\">
    
    <!-- Malihu jQuery custom content scroller CSS -->
    <link rel=\"stylesheet\" href=\"../css/jquery.mCustomScrollbar.css\">
    
    <!-- Sweet Alert CSS -->
    <link rel=\"stylesheet\" href=\"../css/sweetalert.css\">
    
    <!-- MaterialDark CSS -->
    <link rel=\"stylesheet\" href=\"../css/style.css\">

    <link href=\"https://fonts.googleapis.com/css2?family=Noto+Sans+SC&family=Roboto&display=swap\" rel=\"stylesheet\">

    <script src=\"https://kit.fontawesome.com/a076d05399.js\"></script>
</head>
<body>
    <!-- Nav Lateral -->
    <section class=\"NavLateral full-width\">
    <div class=\"NavLateral-FontMenu full-width ShowHideMenu\"></div>
    <div class=\"NavLateral-content full-width\">
        <header class=\"NavLateral-title full-width center-align\">
            <a href=\"https://flottec.cl/\"><img src=\"../assets/icons/chile.png\" style=\"width: 40px;\"></a>
            <a href=\"http://flottec.com/\"><img src=\"../assets/icons/usa.png\" style=\"width: 40px;\"></a>
            <i class=\"zmdi zmdi-close NavLateral-title-btn ShowHideMenu\"></i>
        </header>
        <figure class=\"full-width NavLateral-logo\">
            <img src=\"../assets/img/logoflottec.png\" alt=\"material-logo\" class=\"responsive-img center-box\">
            <figcaption class=\"center-align\"></figcaption>
        </figure>
         <div class=\"NavLateral-Nav\">
            <ul class=\"full-width\">
                <li>
                    <a href=\"../index.php\" class=\"waves-effect waves-light\"> Inicio</a>
                </li>
                <li class=\"NavLateralDivider\"></li>
                <li>
                    <a href=\"#\" class=\"NavLateral-DropDown  waves-effect waves-light\"> <i class=\"zmdi zmdi-chevron-down NavLateral-CaretDown\"></i> Productos</a>
                    <ul class=\"full-width\">
                        <li><a href=\"../categorias.php\" class=\"waves-effect waves-light\">Categorias</a></li>
                    </ul>
                </li>
                <li class=\"NavLateralDivider\"></li>
                <li>
                    <a href=\"../eventos.php\" class=\"waves-effect waves-light\"> Eventos</a>
                </li>
                <li class=\"NavLateralDivider\"></li>
                <li>
                    <a href=\"../nosotros.php\" class=\"waves-effect waves-light\"> Nosotros</a>
                </li>
                <li class=\"NavLateralDivider\"></li>
                <li>
                    <a href=\"../contacto.php\" class=\"waves-effect waves-light\"> Contacto</a>
                </li>
                <li class=\"NavLateralDivider\"></li>
                <li>
                    <a href=\"../simulador.php\" class=\"waves-effect waves-light\">Simulador</a>
                </li>
            </ul>
        </div>
    </div>
</section>

    <!-- Page content -->
    <section class=\"ContentPage full-width\">
        <!-- Nav Info -->
        <div class=\"ContentPage-Nav full-width\">
        <ul class=\"full-width\">
            <li class=\"btn-MobileMenu ShowHideMenu\"><a href=\"#\" class=\"tooltipped waves-effect waves-light\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Menu\"><i class=\"zmdi zmdi-more-vert\"></i></a></li>
            <li><a href=\"https://www.youtube.com/channel/UCZmlc1PO87ju-B5w6e9_7wA\" target=\"_blank\" class=\"youtube\"><i class=\"fab fa-youtube\"></i></a></li>
            <li><a href=\"https://www.facebook.com/FlottecMexico\" target=\"_blank\" class=\"facebook\"><i class=\"fab fa-facebook-square\"></i></a></li>
            <li><a href=\"#\" class=\"tooltipped waves-effect waves-light btn-Search\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Search\"><i class=\"zmdi zmdi-search\"></i></a></li>
            <input id=\"buscador\" type=\"\" name=\"\" style=\"\">

        </ul>
    </div>
<section class=\"bannerP\">
<div class=\"bannerP-content\">
</div>
</section>
<div class=\"row\">
<nav>
    <div class=\"nav-wrapper light-blue darken-4\">
        <div class=\"col s12\">
            <a href=\"../index.php\" class=\"breadcrumb\">Inicio</a>
            <a href=\"../categorias.php\" class=\"breadcrumb\">Categorias</a>
            <a href=\"../categorias/espumantes.php\" class=\"breadcrumb\">$nombre_categoria</a>
        </div>
    </div>
  </nav>
</div>
    
<div class=\"section\">
  <?php
  \$i = 0;
  \$consulta = \$conexion->query(\"SELECT * FROM productos where clave_categoria='$clave_categoria'\");
  echo \"<div class=\\\"columns\\\">\";
  foreach (\$consulta as \$row) {
    echo \"<div class=\\\"column is-3\\\">
      <div class=\\\"card\\\">
        <div class=\\\"card-image\\\">
          <img src=\\\"\".\$row['img_principal'].\"\\\">
          <span class=\\\"card-title full-width\\\">\".\$row['nombre'].\"</span>
        </div>
        <div class=\\\"card-action\\\">
          <a href=\\\"\".\$row['ruta_archivo'].\"\\\">Ver mas</a>
        </div>
      </div>
    </div>\";
    \$i++;
    if (\$i==4) {
       echo \"</div><div class=\\\"columns\\\">\";
       \$i=0;
    }
    //echo \"</div>\";
}
                ?>
  </div>
</div>

        <!-- Footer -->
<footer class=\"footer-MaterialDark\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col l6 s12\">
                <h5 class=\"white-text\">Direccion Oficinas</h5>
                <ul>
                  <li>
                    <a class=\"white-text text-lighten-4\" href=\"https://www.google.com.mx/maps/place/Calle+Rub%C3%A9n+Dar%C3%ADo+150,+Col+del+Valle,+78200+San+Luis,+S.L.P./@22.1498458,-101.0107519,17z/data=!3m1!4b1!4m5!3m4!1s0x842a98cb50a53661:0x9d711cb9f21eb2dc!8m2!3d22.1498458!4d-101.0085632\" target=\"_blank\"><i class=\"zmdi zmdi-pin\"></i>
                    Ruben Dario #150 Col. Polanco San Luis Potosi, San Luis Potosi
                    CP 78220</a>
                  </li>
                </ul> 
                <h5 class=\"white-text\">Direccion Almacen</h5>
                <ul>
                  <li>
                    <a class=\"white-text text-lighten-4\" href=\"https://www.google.com/maps/place//data=!4m2!3m1!1s0x868253edeedf0c2d:0x390e397cb4118cea?utm_source=mstt_1\" target=\"_blank\"><i class=\"zmdi zmdi-pin\"></i>
                    Boulevard las Pilas Carretera Federal 45 Km 13 #22 Las Pilas Morelos Zacatecas CP 98100 Parque Industrial Pyme 100</a>
                  </li>
                </ul>            
            </div>
            <div class=\"col l6 s12\">
                <h5 class=\"white-text\">Contacto</h5>
                <h6 class=\"white-text\">Teléfono:</h6>   
                <a class=\"white-text text-lighten-4\"><i class=\"zmdi zmdi-phone\"></i>
                    Oficina (444) 271-06-42</a>
                <br>
                <a class=\"white-text text-lighten-4\"><i class=\"zmdi zmdi-phone\"></i>
                    Oficina (444) 243-02-19</a>
                <h6 class=\"white-text\">Correo:</h6>           
                <a class=\"white-text text-lighten-4\"><i class=\"zmdi zmdi-email\"></i>
                    hesmeralda@flottec.com</a>
                <br>
                <a class=\"white-text text-lighten-4\"><i class=\"zmdi zmdi-email\"></i>
                    jonathan.tapia@flottec.com</a>
            </div>    
        </div>
    </div>
    <div class=\"NavLateralDivider\"></div>
    <div class=\"footer-copyright\">
        <div class=\"container center-align\">
            © 2020 SIC WS
        </div>
    </div>
</footer>
    </section>
    
    <!-- Sweet Alert JS -->
    <script src=\"../js/sweetalert.min.js\"></script>
    
    <!-- jQuery -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"js/jquery-2.2.0.min.js\"><\/script>')</script>
    
    <!-- Materialize JS -->
    <script src=\"../js/materialize.min.js\"></script>
    
    <!-- Malihu jQuery custom content scroller JS -->
    <script src=\"../js/jquery.mCustomScrollbar.concat.min.js\"></script>
    
    <!-- MaterialDark JS -->
    <script src=\"../js/main.js\"></script>

    <!--Script Menu Productos -->
<script >
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName(\"tabcontent\");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = \"none\";
}
tablinks = document.getElementsByClassName(\"tablinks\");
for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(\" active\", \"\");
}
document.getElementById(cityName).style.display = \"block\";
evt.currentTarget.className += \" active\";
}

// Get the element with id=\"defaultOpen\" and click on it
document.getElementById(\"defaultOpen\").click();

</script>
</body>
</html>";
        
        }
        file_put_contents($str, $contenido);
        if (!unlink($file)) {  
            //echo ("Error al eliminar archivo");  
        }  
        else {  
            //echo ("Archivo eliminado");  
        }
        

        $query = "UPDATE categorias SET clave_cat='$clave_categoria', nombre_cat='$nombre_categoria', img_cat='$imagen',
        ruta_archivo='$str', ruta_carpeta='$carpeta' WHERE id='$id'";
        $query_run = $conexion->query($query);

        if($query_run)
        {
            //echo '<script> alert("Data Updated"); </script>';
            header("Location:page_categorias.php");
        }
        else
        {
            //echo '<script> alert("Data Not Updated"); </script>';
        }
    
}
?>