<?php
    require_once "privado/Usuario.php";
    require_once "privado/DB.php";
    $conexion = Bd::obtenerConexion();
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: login.php");
    exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flottec App - Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="page_eventos.php">
            <img src="assets/img/logoflottec.png" width="120"  class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="page_eventos.php">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page_categorias.php">Categorias</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="page_productos.php">Productos<span class="sr-only"></span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sesion</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="logout.php">Salir</a>
                </div>
                </li>
            </ul>
      </div>
    </nav>
        
    <!-- MODAL PARA INSERTAR PRODUCTO COMPLETO -->
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="card-body">
                    <div class="nav nav-pills" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-home-tab-modal" data-toggle="tab" href="#nav-home-modal" role="tab" aria-controls="nav-home" aria-selected="true">Informacion General</a>
                        <a class="nav-link" id="nav-profile-tab-modal" data-toggle="tab" href="#nav-profile-modal" role="tab" aria-controls="nav-profile" aria-selected="false">Informacion Seguridad</a>
                        <a class="nav-link" id="nav-contact-tab-modal" data-toggle="tab" href="#nav-contact-modal" role="tab" aria-controls="nav-contact" aria-selected="false">Pictogramas</a>
                        <a class="nav-link" id="nav-files-tab-modal" data-toggle="tab" href="#nav-files-modal" role="tab" aria-controls="nav-contact" aria-selected="false">Archivos</a>
                        <a class="nav-link" id="nav-files-tab-modal" data-toggle="tab" href="#nav-unit-modal" role="tab" aria-controls="nav-contact" aria-selected="false">Unidades</a>
                  </div>
                </div>
                <form action="insertproducto.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home-modal" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="form-group">
                                    <select class="form-control" id="categorias" name="categorias">
                                        <?php
                                        $consulta = $conexion->query("select * from categorias");
                                        while ($datos = $consulta->fetch_assoc()){
                                        ?>
                                        <option value='<?php echo $datos['nombre_cat']?>'><?php echo $datos['nombre_cat']; ?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>                        
                                </div>
                                <div class="form-group">
                                    <label>Clave Producto</label>
                                    <input type="text" id="clave_producto" name="clave_producto" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Nombre Producto</label>
                                    <input type="text" id="nombre_producto" name="nombre_producto" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Clasificacion</label>
                                    <input type="text" id="clasificacion" name="clasificacion" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Familia Quimica</label>
                                    <input type="text" id="fam_quimica" name="fam_quimica" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Uso</label>
                                    <input type="text" id="uso" name="uso" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Descripcion</label>
                                    <textarea id="descripcion" name="descripcion" class="form-control" placeholder="" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Imagen Principal</label>
                                    <textarea id="img" name="img" class="form-control" placeholder="" rows="3"></textarea>
                                </div>
                                  </div>
                      <div class="tab-pane fade" id="nav-profile-modal" role="tabpanel" aria-labelledby="nav-profile-tab">
                          <div class="form-group">
                        <label>Estado Fisico</label>
                        <input type="text" id="edo_fisico" name="edo_fisico" class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Color</label>
                        <input type="text" id="color" name="color" class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Densidad</label>
                        <input type="text" id="densidad" name="densidad" class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Inflamabilidad</label>
                        <input type="text" id="inflamabilidad" name="inflamabilidad" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>pH</label>
                        <input type="text" id="ph" name="ph" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Riesgo Transporte</label>
                        <textarea id="riesgo_transporte" name="riesgo_transporte" class="form-control" placeholder="" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Riesgos</label>
                        <textarea id="riesgos" name="riesgos" class="form-control" placeholder="" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Codigo UN</label>
                        <input type="text" id="codigo_un" name="codigo_un" class="form-control" placeholder="">
                    </div>
                      </div>
                      <div class="tab-pane fade" id="nav-contact-modal" role="tabpanel" aria-labelledby="nav-contact-tab">
                          <div class="form-group">
                        <label>Pictograma Uno</label>
                        <input type="text" id="picto_uno" name="picto_uno" class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Pictograma Dos</label>
                        <input type="text" id="picto_dos" name="picto_dos" class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Pictograma Tres</label>
                        <input type="text" id="picto_tres" name="picto_tres" class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Pictograma Cuatro</label>
                        <input type="text" id="picto_cuatro" name="picto_cuatro" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Pictograma Cinco</label>
                        <input type="text" id="picto_cinco" name="picto_cinco" class="form-control" placeholder="">
                    </div>
                      </div>
                      <div class="tab-pane fade" id="nav-files-modal" role="tabpanel" aria-labelledby="nav-contact-tab">
                           
                        <div class="form-group">
                        <label>Hoja de Seguridad Espa;ol</label>
                        <input type="file"  name="archivoesp" id="SDSESP" >
                        </div>             
                        <div class="form-group">                       
                        <label>Hoja de Seguridad Ingles</label>
                        <input type="file" name="archivoeng" id="SDSENG">                                  
                        </div>       
                        <div class="form-group"> 
                        <label>Hoja Tecnica</label>
                        <br> 
                        <input type="file" name="archivoht" id="HT">                               
                        </div>
                                    

                      </div>
                      <div class="tab-pane fade" id="nav-unit-modal" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="form-group">
                                <label>Unidad Uno</label>
                                <input type="text" id="unidad_uno" name="unidad_uno" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Unidad Dos</label>
                                <input type="text" id="unidad_dos" name="unidad_dos" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Unidad Tres</label>
                                <input type="text" id="unidad_tres" name="unidad_tres" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Unidad Cuatro</label>
                                <input type="text" id="unidad_cuatro" name="unidad_cuatro" class="form-control" placeholder="">
                            </div>
                      </div>
            </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="insertdata" class="btn btn-primary">Guardar</button>
                </div>
            </form>

        </div>
      </div>
    </div>
    <!-- MODAL PARA INSERTAR PICTOGRAMA -->
    <div class="modal fade" id="studentaddmodal_picto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Pictograma</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <form action="insertpictograma.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                    <div class="form-group">
                        <label>Producto</label>
                        <select class="form-control" id="clave_producto_picto" name="clave_producto_picto">
                            <?php
                            $consulta = $conexion->query("select clave_producto from productos");
                            while ($datos = $consulta->fetch_assoc()){
                            ?>
                            <option value='<?php echo $datos['clave_producto']?>'><?php echo $datos['clave_producto']; ?></option>
                            <?php
                            }
                            ?>
                        </select>                        
                    </div>   
                    <div class="form-group">
                        <label>Pictograma</label>
                        <input type="text" id="insertpicto_uno" name="insertpicto_uno" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="insertdata_picto" class="btn btn-primary">Guardar</button>
                </div>
                </form>
        </div>
      </div>
    </div>
    <!-- MODAL PARA INSERTAR ARCHIVO -->
    <div class="modal fade" id="studentaddmodal_arch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Archivo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <form action="insertarchivo.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                    <div class="form-group">
                        <label>Producto</label>
                        <select class="form-control" id="clave_producto_arch" name="clave_producto_arch">
                            <?php
                            $consulta = $conexion->query("select clave_producto from productos");
                            while ($datos = $consulta->fetch_assoc()){
                            ?>
                            <option value='<?php echo $datos['clave_producto']?>'><?php echo $datos['clave_producto']; ?></option>
                            <?php
                            }
                            ?>
                        </select>                        
                    </div>
                    <div class="form-group">
                        <label>Producto</label>
                        <select class="form-control" id="tipo_archivo_arch" name="tipo_archivo_arch">
                            <option value="Hoja de Seguridad">Hoja de Seguridad</option>
                            <option value="Secure Data Sheet">Secure Data Sheet</option>
                            <option value="Hoja Tecnica">Hoja Tecnica</option>
                        </select>                        
                    </div>   
                    <div class="form-group">
                        <label>Archivo</label>
                        <br>
                        <input type="file" id="file_arch" name="file_arch" class="" placeholder="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="insertdata_arch" class="btn btn-primary">Guardar</button>
                </div>
                </form>
        </div>
      </div>
    </div>
    <!-- MODAL PARA INSERTAR UNIDADES -->
    <div class="modal fade" id="studentaddmodal_uni" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Archivo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <form action="insertunidades.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                    <div class="form-group">
                        <label>Producto</label>
                        <select class="form-control" id="clave_producto_uni" name="clave_producto_uni">
                            <?php
                            $consulta = $conexion->query("select clave_producto from productos");
                            while ($datos = $consulta->fetch_assoc()){
                            ?>
                            <option value='<?php echo $datos['clave_producto']?>'><?php echo $datos['clave_producto']; ?></option>
                            <?php
                            }
                            ?>
                        </select>                        
                    </div>   
                    <div class="form-group">
                        <label>Unidad Uno</label>
                        <input type="text" id="insertuni_uno" name="insertuni_uno" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Unidad Dos</label>
                        <input type="text" id="insertuni_dos" name="insertuni_dos" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Unidad Tres</label>
                        <input type="text" id="insertuni_tres" name="insertuni_tres" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Unidad Cuatro</label>
                        <input type="text" id="insertuni_cuatro" name="insertuni_cuatro" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="insertdata_uni" class="btn btn-primary">Guardar</button>
                </div>
                </form>
        </div>
      </div>
    </div>

    <!-- ####################################################################################################################### -->
    <!-- EDITAR INFORMACION GENERAL MODAL-->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modificar Informacion General</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <form action="updateinfo_general.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="update_id" id="update_id">

                    <div class="form-group">
                        <label>Categoria</label>
                        <input type="text" id="ucategoria" name="ucategoria" class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Clave Producto</label>
                        <input type="text" id="uclave_producto" name="uclave_producto" class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" id="unombre" name="unombre" class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Clasificacion</label>
                        <input type="text" id="uclasificacion" name="uclasificacion" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Fam. Quimica</label>
                        <input type="" id="ufam_quimica"  name="ufam_quimica" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Uso</label>
                        <input type="" id="uuso"  name="uuso" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Descripcion</label>
                        <textarea id="udescripcion" name="udescripcion" class="form-control" placeholder="" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Img. Principal</label>
                        <input type="text" id="uimg_principal" name="uimg_principal" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="updatedata_general" class="btn btn-primary">Actualizar Informacion</button>
                </div>
            </form>
        </div>
      </div>
    </div>
    <!-- EDITAR SEGURIDAD MODAL-->
    <div class="modal fade" id="editmodalseguridad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modificar Informacion Seguridad</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <form action="updateinfo_seguridad.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="update_id_seg" id="update_id_seg">
                    <div class="form-group">
                        <label>Clave Producto</label>
                        <input type="text" id="uclave_producto_seg" name="uclave_producto_seg" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Estado Fisico</label>
                        <input type="text" id="uedo_fisico" name="uedo_fisico" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Color</label>
                        <input type="text" id="ucolor" name="ucolor" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Densidad</label>
                        <input type="text" name="udensidad"  id="udensidad" name="uclasificacion" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Inflamabilidad</label>
                        <input type="text" name="uinflamabilidad" id="uinflamabilidad" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>pH</label>
                        <input type="text" name="uph" id="uph" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Riesgos de Transporte</label>
                        <input type="text" id="uries_transporte" name="uries_transporte" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Riesgos</label>
                        <textarea type="text" id="uriesgos" name="uriesgos" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Codigo UN</label>
                        <input type="text"  id="ucodigo_un" name="ucodigo_un" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="updatedata_seguridad" class="btn btn-primary">Actualizar Informacion</button>
                </div>
            </form>
        </div>
      </div>
    </div>
    <!--EDITAR MODAL PICTOGRAMA -->
    <div class="modal fade" id="editmodalpictograma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modificar Informacion General</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

            <form action="updateinfo_picto.php" method="POST">

                <div class="modal-body">

                    <input type="hidden" name="update_id_picto" id="update_id_picto">

                    <div class="form-group">
                        <label>Clave Producto</label>
                        <input type="text" id="uclave_producto_picto" name="uclave_producto_picto" class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Pictograma</label>
                        <input type="text" id="upictograma" name="upictograma" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="updatedata_picto" class="btn btn-primary">Actualizar Informacion</button>
                </div>
            </form>

        </div>
      </div>
    </div>
    <!--EDITAR MODAL ARCHIVO -->
    <div class="modal fade" id="editmodalarchivo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modificar Informacion General</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

            <form action="updateinfo_arch.php" method="POST" enctype="multipart/form-data">

                <div class="modal-body">

                    <input type="hidden" name="update_id_arch" id="update_id_arch">

                    <div class="form-group">
                        <label>Clave Producto</label>
                        <input type="text" id="uclave_producto_arch" name="uclave_producto_arch" class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Tipo de Archivo</label>
                        <input type="text" id="utipo" name="utipo" class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Archivo</label>
                        <input type="file" id="ufile" name="ufile" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="updatedata_arch" class="btn btn-primary">Actualizar Informacion</button>
                </div>
            </form>

        </div>
      </div>
    </div>
    <!-- EDITAR UNIDAD MODAL-->
    <div class="modal fade" id="editmodalunidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modificar Informacion General</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <form action="updateinfo_uni.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="update_id_uni" id="update_id_uni">
                    <div class="form-group">
                        <label>Clave Producto</label>
                        <input type="text" id="uclave_producto_uni" name="uclave_producto_uni" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Unidad uno</label>
                        <input type="text" id="uunidad_uno" name="uunidad_uno" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Unidad dos</label>
                        <input type="text" id="uunidad_dos" name="uunidad_dos" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Unidad tres</label>
                        <input type="text" name="uunidad_tres"  id="uunidad_tres" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Unidad cuatro</label>
                        <input type="text" name="uunidad_cuatro" id="uunidad_cuatro" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="updatedata_uni" class="btn btn-primary">Actualizar Informacion</button>
                </div>
            </form>
        </div>
      </div>
    </div>
    <!-- ####################################################################################################################### -->
    <!-- DELETE TODA LA INFORMACION -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Eliminar Evento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <form action="deleteproducto.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="delete_id" id="delete_id">
                    <h4> Quieres eliminar este producto?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancelar</button>
                    <button type="submit" name="deletedata" class="btn btn-primary"> Eliminar</button>
                </div>
            </form>
        </div>
      </div>
    </div>
    <!-- DELETE PICTOGRAMA -->
    <div class="modal fade" id="deletemodal_picto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Eliminar Evento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <form action="deleteinfo_picto.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="delete_id_picto" id="delete_id_picto">
                    <h4> Quieres eliminar este pictograma?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancelar</button>
                    <button type="submit" name="deletedata_picto" class="btn btn-primary"> Eliminar</button>
                </div>
            </form>
        </div>
      </div>
    </div>
    <!-- DELETE ARCHIVO -->
    <div class="modal fade" id="deletemodal_arch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Eliminar Evento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <form action="deleteinfo_arch.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="delete_id_arch" id="delete_id_arch">
                    <h4> Quieres eliminar este archivo?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancelar</button>
                    <button type="submit" name="deletedata_arch" class="btn btn-primary"> Eliminar</button>
                </div>
            </form>
        </div>
      </div>
    </div>
    <!-- DELETE UNIDADES -->
    <div class="modal fade" id="deletemodal_uni" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Eliminar Evento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <form action="deleteinfo_uni.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="delete_id_uni" id="delete_id_uni">
                    <h4> Quieres eliminar este archivo?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancelar</button>
                    <button type="submit" name="deletedata_uni" class="btn btn-primary"> Eliminar</button>
                </div>
            </form>
        </div>
      </div>
    </div>
    <!-- ####################################################################################################################### -->

    <div class="jumbotron bg-white">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                        Agregar Producto
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal_picto">
                        Agregar Pictograma
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal_arch">
                        Agregar Archivo
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal_uni">
                        Agregar Unidades
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Informacion General</a>
        <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Informacion Seguridad</a>
        <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Pictogramas</a>
        <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-files" role="tab" aria-controls="nav-contact" aria-selected="false">Archivos</a>
        <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-unit" role="tab" aria-controls="nav-contact" aria-selected="false">Unidades</a>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <div class="card-body" style="border: 1px solid #dee2e6;">
                    <table id="datatableid" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Categoria</th>
                                <th>Clave Producto</th>
                                <th>Nombre</th>
                                <th>Clasificacion</th>
                                <th>Fam. Quimica</th>
                                <th>Uso</th>
                                <th>Descripcion</th>
                                <th>Img. Principal</th>
                                <th>Acciones</th>
                                
                            </tr>
                        </thead>
                   <tbody>
                    <?php
                    $consulta = $conexion->query("SELECT a.*, b.nombre_cat FROM productos a
                        left join categorias b on b.clave_cat=a.clave_categoria");
                    while ($row = $consulta->fetch_assoc()) {
                    ?>
                            <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['nombre_cat'];?></td>                             
                                <td><?php echo $row['clave_producto'];?></td>                                     
                                <td><?php echo $row['nombre'];?></td>
                                <td><?php echo $row['clasificacion'];?></td>                             
                                <td><?php echo $row['fam_quimica'];?></td>
                                <td><?php echo $row['uso'];?></td> 
                                <td><?php echo $row['des_general'];?></td>
                                <td><img src="<?php echo $row['img_principal'];?>" width="120"></td>   
                                <td> 
                                    <button type="button" class="btn btn-success editbtn" style="margin: 5px;"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger deletebtn" style="margin: 5px;"><i class="fa fa-times-circle"></i></button>
                                </td> 
                            </tr>
                        </tbody>
                    <?php           
                        }
                    ?>
                    </table>
          </div>
      </div>
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          <div class="card-body" style="border: 1px solid #dee2e6;">
                    <table id="datatableid_seg" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Clave Producto</th>
                                <th>Estado Fisico</th>
                                <th>Color</th>
                                <th>Densidad</th>
                                <th>Inflamabilidad</th>
                                <th>pH</th>
                                <th>Riesgos de Transporte</th>
                                <th>Riesgos</th>
                                <th>Codigo UN</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                   <tbody>
                    <?php
                    $consulta = $conexion->query("SELECT * FROM info_seguridad");
                    while ($row = $consulta->fetch_assoc()) {
                    ?>
                            <tr>
                                <td><?php echo $row['id_info'];?></td>
                                <td><?php echo $row['clave_producto'];?></td>                                
                                <td><?php echo $row['edo_fisico'];?></td>                            
                                <td><?php echo $row['color'];?></td>                            
                                <td><?php echo $row['densidad'];?></td> 
                                <td><?php echo $row['inflamabilidad'];?></td>
                                <td><?php echo $row['ph'];?></td>
                                <td><?php echo $row['ries_transporte'];?></td> 
                                <td><?php echo $row['riesgos'];?></td>
                                <td><?php echo $row['codigo_un'];?></td>      
                                <td> 
                                    <button type="button" class="btn btn-success editbtnseguridad" style="margin: 5px;"><i class="fa fa-edit"></i></button>
                                </td> 
                            </tr>
                        </tbody>
                    <?php           
                        }
                    ?>
                    </table>
          </div>
      </div>
      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
          <div class="card-body" style="border: 1px solid #dee2e6;">
                    <table id="datatableid_picto" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Clave Producto</th>
                                <th>Pictograma</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                   <tbody>
                    <?php
                    $consulta = $conexion->query("SELECT * from info_pictogramas");
                    while ($row = $consulta->fetch_assoc()) {
                    ?>
                            <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['clave_producto'];?></td>                             
                                <td><img src="<?php echo $row['ruta_pictograma'];?>" width="50"></td>           
                                <td> 
                                    <button type="button" class="btn btn-success editbtnpictograma" style="margin: 5px;"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger deletebtnpictograma" style="margin: 5px;"><i class="fa fa-times-circle"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    <?php           
                        }
                    ?>
                    </table>
          </div>
      </div>
      <div class="tab-pane fade" id="nav-files" role="tabpanel" aria-labelledby="nav-contact-tab">
          <div class="card-body" style="border: 1px solid #dee2e6;">
                    <table id="datatableid_arch" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Clave Producto</th>
                                <th>Nombre del Archivo</th>
                                <th>Tipo del Archivo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                   <tbody>
                    <?php
                    $consulta = $conexion->query("SELECT * from rutas_archivos");
                    while ($row = $consulta->fetch_assoc()) {
                    ?>
                            <tr>
                                <td><?php echo $row['id_ruta'];?></td>
                                <td><?php echo $row['clave_producto'];?></td>                             
                                <td><?php echo $row['nombre_archivo'];?></td>                                     
                                <td><?php echo $row['tipo_archivo'];?></td>                           
                                <td> 
                                    <button type="button" class="btn btn-success editbtnarchivo" style="margin: 5px;"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger deletebtnarchivo" style="margin: 5px;"><i class="fa fa-times-circle"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    <?php           
                        }
                    ?>
                    </table>
          </div>
      </div>
      <div class="tab-pane fade" id="nav-unit" role="tabpanel" aria-labelledby="nav-contact-tab">
          <div class="card-body" style="border: 1px solid #dee2e6;">
                    <table id="datatableid_uni" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Clave Producto</th>
                                <th>Unidad uno</th>
                                <th>Unidad dos</th>
                                <th>Unidad tres</th>
                                <th>Unidad cuatro</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                   <tbody>
                    <?php
                    $consulta = $conexion->query("SELECT * from info_unidades");
                    while ($row = $consulta->fetch_assoc()) {
                    ?>
                            <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['clave_producto'];?></td>                             
                                <td><?php echo $row['descripcion_uno'];?></td>                                     
                                <td><?php echo $row['descripcion_dos'];?></td> 
                                <td><?php echo $row['descripcion_tres'];?></td> 
                                <td><?php echo $row['descripcion_cuatro'];?></td>                           
                                <td> 
                                    <button type="button" class="btn btn-success editbtnunidad" style="margin: 5px;"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger deletebtnunidad" style="margin: 5px;"><i class="fa fa-times-circle"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    <?php           
                        }
                    ?>
                    </table>
          </div>
      </div>
    </div>
</div>
</div> 
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"> </script>

    <script>

    $(document).ready(function() {

        $('#datatableid').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Buscar Registros",
            }
        });

    });

    $(document).ready(function() {

        $('#datatableid_seg').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Buscar Registros",
            }
        });

    });

    $(document).ready(function() {

        $('#datatableid_picto').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Buscar Registros",
            }
        });

    });

    $(document).ready(function() {

        $('#datatableid_arch').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Buscar Registros",
            }
        });

    });

    $(document).ready(function() {

        $('#datatableid_uni').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Buscar Registros",
            }
        });

    });

    </script>

    <script>
    $(document).ready(function () {

        $('.deletebtn').on('click', function() {
            
            $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                console.log(data);
                $('#delete_id').val(data[2]);
          
        });
    });
    </script>
    <script>
    $(document).ready(function () {

        $('.deletebtnpictograma').on('click', function() {
            
            $('#deletemodal_picto').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                console.log(data);
                $('#delete_id_picto').val(data[0]);
          
        });
    });
    </script>
    <script>
    $(document).ready(function () {

        $('.deletebtnarchivo').on('click', function() {
            
            $('#deletemodal_arch').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                console.log(data);
                $('#delete_id_arch').val(data[0]);
          
        });
    });
    </script>
    <script>
    $(document).ready(function () {

        $('.deletebtnunidad').on('click', function() {
            
            $('#deletemodal_uni').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                console.log(data);
                $('#delete_id_uni').val(data[0]);
          
        });
    });
    </script>

    <script>
    $(document).on('click', '.editbtn', function(){
             //var id = $(this).attr("id");
             $tr = $(this).closest('tr');

            var dataE = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            //$('#editmodal').modal('show');

            console.log(dataE);
             //console.log(employee_id);

             $.ajax({
              url:"editinfo_general.php",
              method:"POST",
              data:{id:dataE[0]},
              dataType:"json",
              success:function(data){
               $('#update_id').val(data.id);
               $('#uclave_producto').val(data.clave_producto);
               $('#ucategoria').val(data.nombre_cat);
               $('#unombre').val(data.nombre);
               $('#uclasificacion').val(data.clasificacion);
               $('#ufam_quimica').val(data.fam_quimica);
               $('#uuso').val(data.uso);
               $('#udescripcion').val(data.des_general);
               $('#uimg_principal').val(data.img_principal);
               $('#editmodal').modal('show');
             }

           });
           });
</script>



    <script>
    /*$(document).ready(function () {
        $('.editbtn').on('click', function() {
            
            $('#editmodal').modal('show');

            
                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
                $('#ucategoria').val(data[1]);
                $('#uclave_producto').val(data[2]);
                $('#unombre').val(data[3]);
                $('#uclasificacion').val(data[4]);
                $('#ufam_quimica').val(data[5]);
                $('#uuso').val(data[6]);
                $('#udescripcion').val(data[7]);
                $('#uimg_principal').val(data[8]);
        });
    });*/
    </script>

    <script>
    $(document).ready(function () {
        $('.editbtnseguridad').on('click', function() {
            
            $('#editmodalseguridad').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#update_id_seg').val(data[0]);
                $('#uclave_producto_seg').val(data[1]);
                $('#uedo_fisico').val(data[2]);
                $('#ucolor').val(data[3]);
                $('#udensidad').val(data[4]);
                $('#uinflamabilidad').val(data[5]);
                $('#uph').val(data[6]);
                $('#uries_transporte').val(data[7]);
                $('#uriesgos').val(data[8]);
                $('#ucodigo_un').val(data[9]);
        });
    });
    </script>

    <script>
    $(document).on('click', '.editbtnpictograma', function(){
             //var id = $(this).attr("id");
             $tr = $(this).closest('tr');

            var dataE = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            //$('#editmodal').modal('show');

            console.log(dataE);
             //console.log(employee_id);

             $.ajax({
              url:"editinfo_picto.php",
              method:"POST",
              data:{id:dataE[0]},
              dataType:"json",
              success:function(data){
               $('#update_id_picto').val(data.id);
               $('#uclave_producto_picto').val(data.clave_producto);
               $('#upictograma').val(data.ruta_pictograma);
               $('#editmodalpictograma').modal('show');
             }

           });
           });
</script>

    <script>
    /*$(document).ready(function () {
        $('.editbtnpictograma').on('click', function() {
            
            $('#editmodalpictograma').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#update_id_picto').val(data[0]);
                $('#uclave_producto_picto').val(data[1]);
                $('#upictograma').val(data[2]);
                
        });
    });*/
    </script>

    <script>
    $(document).ready(function () {
        $('.editbtnarchivo').on('click', function() {
            
            $('#editmodalarchivo').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#update_id_arch').val(data[0]);
                $('#uclave_producto_arch').val(data[1]);
                //$('#ufile').val(data[2]);
                $('#utipo').val(data[3]);
                
                
                
        });
    });
    </script>

    <script>
    $(document).ready(function () {
        $('.editbtnunidad').on('click', function() {
            
            $('#editmodalunidad').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#update_id_uni').val(data[0]);
                $('#uclave_producto_uni').val(data[1]);
                $('#uunidad_uno').val(data[2]);
                $('#uunidad_dos').val(data[3]);
                $('#uunidad_tres').val(data[4]);
                $('#uunidad_cuatro').val(data[5]);                
        });
    });
    </script>


    </body>
    </html>

