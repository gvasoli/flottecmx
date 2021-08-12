<?php
require_once "../privado/DB.php";
$conexion = Bd::obtenerConexion();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Flottec - F120</title>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Bulma CSS -->
<link rel="stylesheet" href='../bulma-0.9.0/css/bulma.css'>

<!-- Normalize CSS -->
<link rel="stylesheet" href="../css/normalize.css">

<!-- Materialize CSS -->
<link rel="stylesheet" href="../css/materialize.min.css">

<!-- Material Design Iconic Font CSS -->
<link rel="stylesheet" href="../css/material-design-iconic-font.min.css">

<!-- Malihu jQuery custom content scroller CSS -->
<link rel="stylesheet" href="../css/jquery.mCustomScrollbar.css">

<!-- Sweet Alert CSS -->
<link rel="stylesheet" href="../css/sweetalert.css">

<!-- MaterialDark CSS -->
<link rel="stylesheet" href="../css/style.css">

<!-- Fuentes  -->

<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC&family=Roboto&display=swap" rel="stylesheet">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>
<!-- Nav Lateral -->
<section class="NavLateral full-width">
        <div class="NavLateral-FontMenu full-width ShowHideMenu"></div>
        <div class="NavLateral-content full-width">
            <header class="NavLateral-title full-width center-align">
                <a href="https://flottec.cl/" target="_blank"><img src="../assets/icons/chile.png" style="width: 40px;"></a>
                <a href="http://flottec.com/" target="_blank"><img src="../assets/icons/usa.png" style="width: 40px;"></a>
               <i class="zmdi zmdi-close NavLateral-title-btn ShowHideMenu"></i>
           </header>
           <figure class="full-width NavLateral-logo">
            <img src="../assets/img/logoflottec.png" alt="material-logo" class="responsive-img center-box">
            <figcaption class="center-align"></figcaption>
        </figure>
        <div class="NavLateral-Nav">
            <ul class="full-width">
                <li>
                    <a href="../index.php" class="waves-effect waves-light"> Inicio</a>
                </li>
                <li class="NavLateralDivider"></li>
                <li>
                    <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Productos</a>
                    <ul class="full-width">
                        <li><a href="../categorias.php" class="waves-effect waves-light">Categorias</a></li>
                    </ul>
                </li>
                <li class="NavLateralDivider"></li>
                <li>
                    <a href="../eventos.php" class="waves-effect waves-light"> Eventos</a>
                </li>
                <li class="NavLateralDivider"></li>
                <li>
                    <a href="" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Acerca de</a>
                    <ul class="full-width">
                        <li><a href="../acerca.php" class="waves-effect waves-light">Nosotros</a></li>
                        <li><a href="../clientes.php" class="waves-effect waves-light">Clientes</a></li>
                    </ul>
                </li>
                <li class="NavLateralDivider"></li>
                <li>
                    <a href="../contacto.php" class="waves-effect waves-light"> Contacto</a>
                </li>
                <li class="NavLateralDivider"></li>
                <li>
                    <a href="../simulador.php" class="waves-effect waves-light">Simulador</a>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Page content -->
<section class="ContentPage full-width">
    <!-- Nav Info -->
    <div class="ContentPage-Nav full-width">
        <ul class="full-width">
            <li class="btn-MobileMenu ShowHideMenu"><a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Menu"><i class="zmdi zmdi-more-vert"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCZmlc1PO87ju-B5w6e9_7wA" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a></li>
            <li><a href="https://www.facebook.com/FlottecMexico" target="_blank" class="facebook"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#" class="tooltipped waves-effect waves-light btn-Search" data-position="bottom" data-delay="50" data-tooltip="Search"><i class="zmdi zmdi-search"></i></a></li>
            <input id="buscador" type="" name="" style="">

        </ul>
    </div>

    <!-- Notifications area -->

    <!-- Banner Area -->
<section class="bannerP">
        <div class="bannerP-content">
        </div>
</section>
<div class="row">
<nav>
    <div class="nav-wrapper light-blue darken-4">
        <div class="col s12">

            <a href="" class="breadcrumb">Productos</a>
            <a href="../categorias.php" class="breadcrumb">Categorias</a>
            <?php
            $consulta = $conexion->query("select * from categorias where clave_cat='101'");
            while ($datos = $consulta->fetch_assoc()){
            ?>
            <a href="../<?php echo $datos['ruta_archivo']?>" class="breadcrumb"><?php echo $datos['nombre_cat']?></a>
            <?php
        }
    ?>
        </div>
    </div>
  </nav>
</div>
    <!-- Tabs Area -->
<section class="section">
    <div class="section valign-wrapper">
        <?php
        $consulta = $conexion->query("select * from productos where clave_producto='F120'");
        while ($datos = $consulta->fetch_assoc()){
        ?>
    <h4 class="has-text-weight-semibold"><?php echo $datos['nombre']?></h4>
    <?php
        }
    ?>
    </div>

    <div class="section">
        <?php
            $consulta = $conexion->query("select * from info_unidades where clave_producto='F120'");
            while ($datos = $consulta->fetch_assoc()){
        ?>
        <div class="columns" >
            <div class="column" >
                <img src="../assets/img/garrafonicon.png" class="image light-blue darken-4 is-centered">
                <div class="column has-text-weight-semibold light-blue-text text-darken-4" style="border: 1px solid #A0A0A0;"><?php echo $datos['descripcion_uno']?></div>
            </div>
            <div class="column">
                <img src="../assets/img/barrilicon.png" class="image light-blue darken-4">
                <div class="column has-text-weight-semibold light-blue-text text-darken-4" style="border: 1px solid #A0A0A0;"><?php echo $datos['descripcion_dos']?></div>
            </div>
            <div class="column">
                <img src="../assets/img/tanque.png" class="image  light-blue darken-4">
                <div class="column has-text-weight-semibold light-blue-text text-darken-4" style="border: 1px solid #A0A0A0;"><?php echo $datos['descripcion_tres']?></div>
            </div>
            <div class="column">
                <img src="../assets/img/cisterna.png" class="image  light-blue darken-4">
                <div class="column has-text-weight-semibold light-blue-text text-darken-4" style="border: 1px solid #A0A0A0;"><?php echo $datos['descripcion_cuatro']?></div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
<div class="section">
    <div class="divider"></div>
    <div class="section">
        <div class="columns rigth-align">
            <?php
                $consulta = $conexion->query("select * from rutas_archivos where clave_producto='F120'");
                while ($datos = $consulta->fetch_assoc()){
            ?>
        <div class="column is-2 valign-wrapper has-text-weight-semibold ">
            <?php echo $datos['tipo_archivo']?>
        </div>
        <div class="column is-2">
            <a class="waves-effect waves-light btn blue darken-4" href="../<?php echo $datos['ruta_archivo']?>" download=""><i class="material-icons">archive</i></a>
        </div>
        <?php
            }
        ?>
        </div>
    </div>
    <div class="divider"></div>
    <div class="section">
    </div>

    <div class="row" style="border: 1px solid #A0A0A0;">
    <div >
    <div class="">
      <ul class="tabs">
        <li class="tab col s6"><a href="#test1" class="active has-text-weight-semibold">Informacion</a></li>
        <li class="tab col s6"><a href="#test2" class= "has-text-weight-semibold" >Seguridad</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
        <?php
        $consulta = $conexion->query("select * from productos where clave_producto='F120'");
        while ($datos = $consulta->fetch_assoc()){
        ?>
            <div class="columns is-gapless ">
                <div class="column">
                    <div class="column  has-text-weight-semibold">Clasificacion:</div>
                    <div class=" column"><?php echo $datos['clasificacion']?></div>
                </div>
                <div class="column">
                    <div class="column  has-text-weight-semibold">Familia quimica:</div>
                    <div class=" column "><?php echo $datos['fam_quimica']?></div>
                </div>
                <div class="column">
                    <div class="column  has-text-weight-semibold">Uso:</div>
                    <div class=" column"><?php echo $datos['uso']?></div>
                </div>
            </div>
            <div class="columns is-gapless">
                <div class="column">
                    <div class="column has-text-weight-semibold">Descripción:</div>
                    <div class=" column"><?php echo $datos['des_general']?></div>
                </div>
            </div>
        <?php
            }
        ?>
    </div>
    <div id="test2" class="col s12">
        <?php
        $consulta = $conexion->query("select * from info_seguridad where clave_producto='F120'");
        while ($datos = $consulta->fetch_assoc()){
        ?>
        <div class="columns is-gapless">
            <div class="column is-2">
                <div class='column  has-text-weight-semibold'>Estado fisico:</div>
                <div class=" column "><?php echo $datos['edo_fisico']?></div>
            </div>
        <div class="column is-2">
            <div class='column has-text-weight-semibold'>Color:</div>
            <div class=" column"><?php echo $datos['color']?></div>
        </div>

        <div class="column is-2">
            <div class='column has-text-weight-semibold'>Densidad</div>
            <div class=" column"><?php echo $datos['densidad']?></div>
        </div>
        <div class="column is-2">
            <div class='column  has-text-weight-semibold'>pH:</div>
            <div class=" column"><?php echo $datos['ph']?></div>
        </div>
        <div class="column">
            <div class='column has-text-weight-semibold'>Punto de inflamabilidad:</div>
            <div class=" column"><?php echo $datos['inflamabilidad']?></div>
        </div>
        </div>


    <div class="columns is-gapless">
        <div class="column">
            <div class='column has-text-weight-semibold'>Riesgos:</div>
            <div class=" column">
                <p><?php echo $datos['riesgos']?></p>
        </div>
    </div>

        <div class="column">
            <div class='column  has-text-weight-semibold'>Riesgo de transporte:</div>
            <div class=" column "><?php echo $datos['ries_transporte']?></div>
        </div>
        <div class="column">
            <div class='column  has-text-weight-semibold'>Codigo UN:</div>
            <div class=" column "><?php echo $datos['codigo_un']?></div>
        </div>

    </div>

    <?php
        }
    ?>

    <div class="columns is-gapless">
        <div class="column">
        <div class='column  has-text-weight-semibold'>Pictogramas:</div>
        <div class="columns is-centered">
        <?php
        $consulta = $conexion->query("select * from info_pictogramas where clave_producto='F120'");
        while ($datos = $consulta->fetch_assoc()){
        ?>
        <div class="column is-narrow"><img class="image is-96x96" src="<?php echo $datos['ruta_pictograma']?>"></div>
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

<!-- Sweet Alert JS -->
<script src="../js/sweetalert.min.js"></script>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>

<!-- Materialize JS -->
<script src="../js/materialize.min.js"></script>

<!-- Malihu jQuery custom content scroller JS -->
<script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- MaterialDark JS -->
<script src="../js/main.js"></script>

<script>
    $(document).ready(function(){
    $('.tabs').tabs();
  });
</script>

</body>
</html>
