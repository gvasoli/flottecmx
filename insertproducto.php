<?php

require_once 'privado/DB.php';
$conexion = Bd::obtenerConexion();


if(isset($_POST['insertdata']))
{
    $categoria = $_POST['categorias'];
    $clave_producto = $_POST['clave_producto'];
    $nombre_producto = $_POST['nombre_producto'];
    $clasificacion = $_POST['clasificacion'];
    $fam_quimica = $_POST['fam_quimica'];
    $uso = $_POST['uso'];
    $descripcion = $_POST['descripcion'];
    $img = $_POST['img'];

    $edo_fisico = $_POST['edo_fisico'];
    $color = $_POST['color'];
    $densidad = $_POST['densidad'];
    $inflamabilidad = $_POST['inflamabilidad'];
    $ph = $_POST['ph'];
    $riesgo_transporte = $_POST['riesgo_transporte'];
    $riesgos = $_POST['riesgos'];
    $codigo_un = $_POST['codigo_un'];

    $picto_uno = $_POST['picto_uno'];
    $picto_dos = $_POST['picto_dos'];
    $picto_tres = $_POST['picto_tres'];
    $picto_cuatro = $_POST['picto_cuatro'];
    $picto_cinco = $_POST['picto_cinco'];

    $archivoesp = $_FILES['archivoesp']['name'];
    $archivoespGuardado = $_FILES['archivoesp']['tmp_name'];
    $archivoeng = $_FILES['archivoeng']['name'];
    $archivoengGuardado = $_FILES['archivoeng']['name'];
    $archivoht = $_FILES['archivoht']['name'];
    $archivohtGuardado = $_FILES['archivoht']['name'];

    $unidad_uno = $_POST['unidad_uno'];
    $unidad_dos = $_POST['unidad_dos'];
    $unidad_tres = $_POST['unidad_tres'];
    $unidad_cuatro = $_POST['unidad_cuatro'];

    $nombreCarpeta = strtr($categoria, " ", "_");
    $carpeta = strtolower($nombreCarpeta);

    $nombreArchivoConvert = strtr($clave_producto, " ", "_");
    $str = strtolower($carpeta."/".$nombreArchivoConvert.".php");
    //$carpeta = strtolower($nombreArchivoConvert);

    $select = $conexion->query("SELECT clave_cat from categorias where nombre_cat='$categoria'");
    $clave = $select->fetch_row();
    
    /*INSERT A TABLA PRODUCTOS*/

    $query = "INSERT INTO productos (`clave_producto`,`clave_categoria`,`clasificacion`,`nombre`,`fam_quimica`,`uso`,`des_general`,`img_principal`,`ruta_archivo`) VALUES ('$clave_producto','$clave[0]','$clasificacion','$nombre_producto','$fam_quimica','$uso','$descripcion','$img','".$str."')";
    $query_run = $conexion->query($query);

    /*INSERT A TABLA PRODUCTOS_CATEGORIAS*/



    $queryInsertProductoCat = "INSERT INTO productos_categorias (`clave_producto`, `clave_categoria`) VALUES ('$clave_producto', '$clave[0]')";
    $queryInsertProductoCat_run = $conexion->query($queryInsertProductoCat);

    /*INSERT A TABLA SEGURIDAD*/

    $queryInsert = "INSERT INTO info_seguridad (`clave_producto`,`edo_fisico`,`color`,`densidad`,`inflamabilidad`,`ph`,`ries_transporte`,`riesgos`,`codigo_un`) VALUES ('$clave_producto','$edo_fisico','$color','$densidad','$inflamabilidad','$ph','$riesgo_transporte','$riesgos','$codigo_un')";

    $queryInsert_run = $conexion->query($queryInsert);

    /*INSERT A TABLA PICTOGRAMAS*/

    if (!empty($picto_uno)) {
    $queryInsertPicto = "INSERT INTO info_pictogramas (`clave_producto`,`ruta_pictograma`) VALUES ('$clave_producto','$picto_uno')";
    $queryInsertPicto_run = $conexion->query($queryInsertPicto);
    } 
    if (!empty($picto_dos)) {
    $queryInsertPicto = "INSERT INTO info_pictogramas (`clave_producto`,`ruta_pictograma`) VALUES ('$clave_producto','$picto_dos')";
    $queryInsertPicto_run = $conexion->query($queryInsertPicto);
    }
    if (!empty($picto_tres)) {
     $queryInsertPicto = "INSERT INTO info_pictogramas (`clave_producto`,`ruta_pictograma`) VALUES ('$clave_producto','$picto_tres')";
    $queryInsertPicto_run = $conexion->query($queryInsertPicto);
    }
    if (!empty($picto_cuatro)) {
     $queryInsertPicto = "INSERT INTO info_pictogramas (`clave_producto`,`ruta_pictograma`) VALUES ('$clave_producto','$picto_cuatro')";
    $queryInsertPicto_run = $conexion->query($queryInsertPicto);
    }
    if (!empty($picto_cinco)) {
     $queryInsertPicto = "INSERT INTO info_pictogramas (`clave_producto`,`ruta_pictograma`) VALUES ('$clave_producto','$picto_cinco')";
    $queryInsertPicto_run = $conexion->query($queryInsertPicto);
    }

    /*INSERT A TABLA UNIDADES*/

    $queryInsertUni = "INSERT INTO info_unidades (`clave_producto`,`descripcion_uno`,`descripcion_dos`,`descripcion_tres`,`descripcion_cuatro`) VALUES ('$clave_producto','$unidad_uno','$unidad_dos','$unidad_tres','$unidad_cuatro')";
    $queryInsertUni_run = $conexion->query($queryInsertUni);

    
    /*INSERT A TABLA ARCHIVOS*/

    $nombre=$_FILES['archivoesp']['name'];
    $guardado=$_FILES['archivoesp']['tmp_name'];

    $nombredos=$_FILES['archivoeng']['name'];
    $guardadodos=$_FILES['archivoeng']['tmp_name'];

    $nombretres=$_FILES['archivoht']['name'];
    $guardadotres=$_FILES['archivoht']['tmp_name'];

    if (!file_exists('archivos')) {
      mkdir("archivos",0777,true);
      if (file_exists('archivos')) {
        if (move_uploaded_file($guardado, 'archivos/'.$nombre)) {
          $existe = $conexion->query("select clave_producto from rutas_archivos where tipo_archivo='Hoja de Seguridad' and clave_producto='$clave_producto'");
          $id = $existe->fetch_assoc();
        if (!isset($id)) {
          $sql = "INSERT INTO rutas_archivos (clave_producto,nombre_archivo,tipo_archivo,ruta_archivo) values ('$clave_producto','".$nombre."','Hoja de Seguridad','archivos/".$nombre."')";
             $resultado = $conexion->query($sql);
        } else {
          $sql = "update rutas_archivos set nombre_archivo='".$nombre."', ruta_archivo='archivos/".$nombre."' where clave_producto='$clave_producto' and tipo_archivo='Hoja de Seguridad'";
             $resultado = $conexion->query($sql);
        }
             
          //echo '<script> alert("Regitros guardados"); </script>';
            header('Location: page_productos.php');
        } else{
          //echo '<script> alert("No se guardaron registros/archivos Hoja de Seguridad"); </script>';
        }
      }
    } else {
      if (move_uploaded_file($guardado, 'archivos/'.$nombre)) {

        $existe = $conexion->query("select clave_producto from rutas_archivos where tipo_archivo='Hoja de Seguridad' and clave_producto='$clave_producto'");
        
        $id = $existe->fetch_assoc();
        if (!isset($id)) {
          $sql = "INSERT INTO rutas_archivos (clave_producto,nombre_archivo,tipo_archivo,ruta_archivo) values ('$clave_producto','".$nombre."','Hoja de Seguridad','archivos/".$nombre."')";
             $resultado = $conexion->query($sql);
        } else {
          $sql = "update rutas_archivos set nombre_archivo='".$nombre."', ruta_archivo='archivos/".$nombre."' where clave_producto='$clave_producto' and tipo_archivo='Hoja de Seguridad'";
             $resultado = $conexion->query($sql);
        }
          
          //echo '<script> alert("Regitros guardados"); </script>';
            header('Location: page_productos.php');
        } else{
          //echo '<script> alert("No se guardaron registros/archivos Hoja de Seguridad"); </script>';
        }
    }

    if (!file_exists('archivos')) {
      mkdir("archivos",0777,true);
      if (file_exists('archivos')) {
        if (move_uploaded_file($guardadodos, 'archivos/'.$nombredos)) {
          
          $existe = $conexion->query("select clave_producto from rutas_archivos where tipo_archivo='Secure Data Sheet' and clave_producto='$clave_producto'");
          $id = $existe->fetch_assoc();
        if (!isset($id)) {
          $sql = "INSERT INTO rutas_archivos (clave_producto,nombre_archivo,tipo_archivo,ruta_archivo) values ('$clave_producto','".$nombredos."','Secure Data Sheet','archivos/".$nombredos."')";
             $resultado = $conexion->query($sql);
        } else {
          $sql = "update rutas_archivos set nombre_archivo='".$nombredos."', ruta_archivo='archivos/".$nombredos."' where clave_producto='$clave_producto' and tipo_archivo='Secure Data Sheet'";
             $resultado = $conexion->query($sql);
        }
          //echo '<script> alert("Regitros guardados"); </script>';
            header('Location: page_productos.php');
        } else{
          //echo '<script> alert("No se guardaron registros/archivos Secure Data Sheet"); </script>';
        }
      }
    } else {
      if (move_uploaded_file($guardadodos, 'archivos/'.$nombredos)) {
          
          $existe = $conexion->query("select clave_producto from rutas_archivos where tipo_archivo='Secure Data Sheet' and clave_producto='$clave_producto'");
          $id = $existe->fetch_assoc();
        if (!isset($id)) {
          $sql = "INSERT INTO rutas_archivos (clave_producto,nombre_archivo,tipo_archivo,ruta_archivo) values ('$clave_producto','".$nombredos."','Secure Data Sheet','archivos/".$nombredos."')";
             $resultado = $conexion->query($sql);
        } else {
          $sql = "update rutas_archivos set nombre_archivo='".$nombredos."', ruta_archivo='archivos/".$nombredos."' where clave_producto='$clave_producto' and tipo_archivo='Secure Data Sheet'";
             $resultado = $conexion->query($sql);
        }
          //echo '<script> alert("Regitros guardados"); </script>';
            header('Location: page_productos.php');
        } else{
          //echo '<script> alert("No se guardaron registros/archivos Secure Data Sheet"); </script>';
        }
    }
    if (!file_exists('archivos')) {
      mkdir("archivos",0777,true);
      if (file_exists('archivos')) {
        if (move_uploaded_file($guardadotres, 'archivos/'.$nombretres)) {
          $existe = $conexion->query("select clave_producto from rutas_archivos where tipo_archivo='Hoja Tecnica' and clave_producto='$clave_producto'");
          $id = $existe->fetch_assoc();
        if (!isset($id)) {
          $sql = "INSERT INTO rutas_archivos (clave_producto,nombre_archivo,tipo_archivo,ruta_archivo) values ('$clave_producto','".$nombretres."','Hoja Tecnica','archivos/".$nombretres."')";
             $resultado = $conexion->query($sql);
        } else {
          $sql = "update rutas_archivos set nombre_archivo='".$nombretres."', ruta_archivo='archivos/".$nombretres."' where clave_producto='$clave_producto' and tipo_archivo='Hoja Tecnica'";
             $resultado = $conexion->query($sql);
        }
             
          //echo '<script> alert("Regitros guardados"); </script>';
            header('Location: page_productos.php');
        } else{
          //echo '<script> alert("No se guardaron registros/archivos Hoja Tecnica"); </script>';
        }
      }
    } else {
      if (move_uploaded_file($guardadotres, 'archivos/'.$nombretres)) {

        $existe = $conexion->query("select clave_producto from rutas_archivos where tipo_archivo='Hoja Tecnica' and clave_producto='$clave_producto'");
        
        $id = $existe->fetch_assoc();
        if (!isset($id)) {
          $sql = "INSERT INTO rutas_archivos (clave_producto,nombre_archivo,tipo_archivo,ruta_archivo) values ('$clave_producto','".$nombretres."','Hoja Tecnica','archivos/".$nombretres."')";
             $resultado = $conexion->query($sql);
        } else {
          $sql = "update rutas_archivos set nombre_archivo='".$nombretres."', ruta_archivo='archivos/".$nombretres."' where clave_producto='$clave_producto' and tipo_archivo='Hoja Tecnica'";
        }
          
          //echo '<script> alert("Regitros guardados"); </script>';
            header('Location: page_productos.php');
        } else{
          //echo '<script> alert("No se guardaron registros/archivos Hoja Tecnica"); </script>';
        }
    }

    $contenido = "<?php
require_once \"../privado/DB.php\";
\$conexion = Bd::obtenerConexion();
?>
<!DOCTYPE html>
<html lang=\"es\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
<title>Flottec - $clave_producto</title>

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

<!-- Fuentes  -->

<link href=\"https://fonts.googleapis.com/css2?family=Noto+Sans+SC&family=Roboto&display=swap\" rel=\"stylesheet\">

<link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
<script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

</head>
<body>
<!-- Nav Lateral -->
<section class=\"NavLateral full-width\">
        <div class=\"NavLateral-FontMenu full-width ShowHideMenu\"></div>
        <div class=\"NavLateral-content full-width\">
            <header class=\"NavLateral-title full-width center-align\">
                <a href=\"https://flottec.cl/\" target=\"_blank\"><img src=\"../assets/icons/chile.png\" style=\"width: 40px;\"></a>
                <a href=\"http://flottec.com/\" target=\"_blank\"><img src=\"../assets/icons/usa.png\" style=\"width: 40px;\"></a>
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
                    <a href=\"#\" class=\"NavLateral-DropDown  waves-effect waves-light\"><i class=\"zmdi zmdi-chevron-down NavLateral-CaretDown\"></i> Productos</a>
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
                    <a href=\"\" class=\"NavLateral-DropDown  waves-effect waves-light\"><i class=\"zmdi zmdi-chevron-down NavLateral-CaretDown\"></i> Acerca de</a>
                    <ul class=\"full-width\">
                        <li><a href=\"../acerca.php\" class=\"waves-effect waves-light\">Nosotros</a></li>
                        <li><a href=\"../clientes.php\" class=\"waves-effect waves-light\">Clientes</a></li>
                    </ul>
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

<!-- Modal Structure -->
  <div id=\"modal1\" class=\"modal\">
    <form id=\"formulario\" action=\"busqueda.php\" method=\"POST\">
    <div class=\"modal-content\">
      <label for=\"input_buscar\">Busqueda</label>
      <input id=\"input_buscar\" name=\"input_buscar\" type=\"text\" class=\"validate\">
      
    </div>
    <div class=\"modal-footer\">
      <button id=\"btnBuscar\" type=\"submit\" name=\"enviar_busqueda\" class=\"modal-close waves-effect waves-green btn blue darken-4\">Buscar</button>
    </div>
    </form>
  </div>

<!-- Page content -->
<section class=\"ContentPage full-width\">
    <!-- Nav Info -->
    <div class=\"ContentPage-Nav full-width\">
        <ul class=\"full-width\">
            <li class=\"btn-MobileMenu ShowHideMenu\"><a href=\"#\" class=\"tooltipped waves-effect waves-light\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Menu\"><i class=\"zmdi zmdi-more-vert\"></i></a></li>
            <li><a href=\"https://www.youtube.com/channel/UCZmlc1PO87ju-B5w6e9_7wA\" target=\"_blank\" class=\"youtube\"><i class=\"fa fa-youtube-square\"></i></a></li>
            <li><a href=\"https://www.facebook.com/FlottecMexico\" target=\"_blank\" class=\"facebook\"><i class=\"fa fa-facebook-square\"></i></a></li>
            <li ><a href=\"#modal1\" data-target=\"modal1\" class=\"tooltipped waves-effect waves-light modal-trigger buscador\" id=\"buscador\" name=\"buscador\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Busqueda\"><i class=\"zmdi zmdi-search\"></i></a>
            </li>    
        </ul>
    </div>

    <!-- Notifications area -->

    <!-- Banner Area -->
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
            <?php
        \$consulta = \$conexion->query(\"select * from categorias where clave_cat='$clave[0]'\");
        while (\$datos = \$consulta->fetch_assoc()){
        ?>
            <a href=\"../<?php echo \$datos['ruta_archivo']?>\" class=\"breadcrumb\"><?php echo \$datos['nombre_cat']?></a>
            <?php
        }
    ?>
        </div>
    </div>
  </nav>
</div>
    <!-- Tabs Area -->     
<section class=\"section\">
    <div class=\"section valign-wrapper\">
        <?php
        \$consulta = \$conexion->query(\"select * from productos where clave_producto='$clave_producto'\");
        while (\$datos = \$consulta->fetch_assoc()){
        ?>
    <h4 class=\"has-text-weight-semibold\"><?php echo \$datos['nombre']?></h4>
    <?php
        }
    ?>
    </div>

    <div class=\"section\">
        <?php
            \$consulta = \$conexion->query(\"select * from info_unidades where clave_producto='$clave_producto'\");
            while (\$datos = \$consulta->fetch_assoc()){
        ?>
        <div class=\"columns\" >
            <div class=\"column\" >
                <img src=\"../assets/img/garrafonicon.png\" class=\"image light-blue darken-4 is-centered\">
                <div class=\"column has-text-weight-semibold light-blue-text text-darken-4\" style=\"border: 1px solid #A0A0A0;\"><?php echo \$datos['descripcion_uno']?></div>
            </div>
            <div class=\"column\">
                <img src=\"../assets/img/barrilicon.png\" class=\"image light-blue darken-4\">
                <div class=\"column has-text-weight-semibold light-blue-text text-darken-4\" style=\"border: 1px solid #A0A0A0;\"><?php echo \$datos['descripcion_dos']?></div>
            </div>
            <div class=\"column\">
                <img src=\"../assets/img/tanque.png\" class=\"image  light-blue darken-4\">
                <div class=\"column has-text-weight-semibold light-blue-text text-darken-4\" style=\"border: 1px solid #A0A0A0;\"><?php echo \$datos['descripcion_tres']?></div>
            </div>
            <div class=\"column\">
                <img src=\"../assets/img/cisterna.png\" class=\"image  light-blue darken-4\">
                <div class=\"column has-text-weight-semibold light-blue-text text-darken-4\" style=\"border: 1px solid #A0A0A0;\"><?php echo \$datos['descripcion_cuatro']?></div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
<div class=\"section\"> 
    <div class=\"divider\"></div>
    <div class=\"section\">
        <div class=\"columns rigth-align\">
            <?php
                \$consulta = \$conexion->query(\"select * from rutas_archivos where clave_producto='$clave_producto'\");
                while (\$datos = \$consulta->fetch_assoc()){
            ?>
        <div class=\"column is-2 valign-wrapper has-text-weight-semibold \">
            <?php echo \$datos['tipo_archivo']?>
        </div>
        <div class=\"column is-2\">
            <a class=\"waves-effect waves-light btn blue darken-4\" href=\"../<?php echo \$datos['ruta_archivo']?>\" download=\"\"><i class=\"material-icons\">archive</i></a>
        </div>
        <?php
            }
        ?>
        </div>
    </div>
    <div class=\"divider\"></div>
    <div class=\"section\">  
    </div>

    <div class=\"row\" style=\"border: 1px solid #A0A0A0;\">
    <div >
    <div class=\"\">
      <ul class=\"tabs\">
        <li class=\"tab col s6\"><a href=\"#test1\" class=\"active has-text-weight-semibold\">Informacion</a></li>
        <li class=\"tab col s6\"><a href=\"#test2\" class= \"has-text-weight-semibold\" >Seguridad</a></li>
      </ul>
    </div>
    <div id=\"test1\" class=\"col s12\">
        <?php
        \$consulta = \$conexion->query(\"select * from productos where clave_producto='$clave_producto'\");
        while (\$datos = \$consulta->fetch_assoc()){
        ?>
            <div class=\"columns is-gapless \">
                <div class=\"column\">
                    <div class=\"column  has-text-weight-semibold\">Clasificacion:</div>
                    <div class=\" column\"><?php echo \$datos['clasificacion']?></div>
                </div>
                <div class=\"column\">
                    <div class=\"column  has-text-weight-semibold\">Familia quimica:</div>
                    <div class=\" column \"><?php echo \$datos['fam_quimica']?></div>
                </div>
                <div class=\"column\">
                    <div class=\"column  has-text-weight-semibold\">Uso:</div>
                    <div class=\" column\"><?php echo \$datos['uso']?></div>
                </div>
            </div>
            <div class=\"columns is-gapless\">
                <div class=\"column\">
                    <div class=\"column has-text-weight-semibold\">Descripción:</div>
                    <div class=\" column\"><?php echo \$datos['des_general']?></div>
                </div>
            </div>
        <?php
            }
        ?>
    </div>
    <div id=\"test2\" class=\"col s12\">
        <?php
        \$consulta = \$conexion->query(\"select * from info_seguridad where clave_producto='$clave_producto'\");
        while (\$datos = \$consulta->fetch_assoc()){
        ?>
        <div class=\"columns is-gapless\">
            <div class=\"column is-2\">
                <div class='column  has-text-weight-semibold'>Estado fisico:</div>
                <div class=\" column \"><?php echo \$datos['edo_fisico']?></div>
            </div>
        <div class=\"column is-2\">
            <div class='column has-text-weight-semibold'>Color:</div>
            <div class=\" column\"><?php echo \$datos['color']?></div>
        </div>

        <div class=\"column is-2\">
            <div class='column has-text-weight-semibold'>Densidad</div>
            <div class=\" column\"><?php echo \$datos['densidad']?></div>
        </div>
        <div class=\"column is-2\">
            <div class='column  has-text-weight-semibold'>pH:</div>
            <div class=\" column\"><?php echo \$datos['ph']?></div>
        </div>
        <div class=\"column\">
            <div class='column has-text-weight-semibold'>Punto de inflamabilidad:</div>
            <div class=\" column\"><?php echo \$datos['inflamabilidad']?></div>
        </div>
        </div>

    
    <div class=\"columns is-gapless\">
        <div class=\"column\">
            <div class='column has-text-weight-semibold'>Riesgos:</div>
            <div class=\" column\">
                <p><?php echo \$datos['riesgos']?></p>
        </div>
    </div>

        <div class=\"column\">
            <div class='column  has-text-weight-semibold'>Riesgo de transporte:</div>
            <div class=\" column \"><?php echo \$datos['ries_transporte']?></div>
        </div>
        <div class=\"column\">
            <div class='column  has-text-weight-semibold'>Codigo UN:</div>
            <div class=\" column \"><?php echo \$datos['codigo_un']?></div>
        </div>
 
    </div>

    <?php
        }
    ?>
    
    <div class=\"columns is-gapless\">
        <div class=\"column\">
        <div class='column  has-text-weight-semibold'>Pictogramas:</div>
        <div class=\"columns is-centered\">
        <?php
        \$consulta = \$conexion->query(\"select * from info_pictogramas where clave_producto='$clave_producto'\");
        while (\$datos = \$consulta->fetch_assoc()){
        ?>
        <div class=\"column is-narrow\"><img class=\"image is-96x96\" src=\"<?php echo \$datos['ruta_pictograma']?>\"></div>
        <?php
        }
    ?>
        </div>
        
        </div>

    </div>
            

    </div>
    
    </div>
  </div>
        
</section>    

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

<script>
    $(document).ready(function(){
    $('.tabs').tabs();
  });
</script>

<script>

$(document).ready(function () {

    $('#btnBuscar').on('click', function() {
        var url = \"busqueda.php\";
        $.ajax({                        
           type: \"POST\",                 
           url: url,                     
           data: $(\"#formulario\").serialize(), 
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
</html>";

    file_put_contents($str, $contenido);

    if (!file_exists($carpeta)) {
        mkdir($carpeta, 0777, true);
    }
    
    if($query_run)
    {
        //echo '<script> alert("Regitros guardados"); </script>';
        header('Location: page_productos.php');
    }
    else
    {
        //echo '<script> alert("No se guardaron registros"); </script>';
        
    }
} else {
    //echo '<script> alert("Campos Vacios"); </script>';
}

?>