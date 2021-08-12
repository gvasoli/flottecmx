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
    <title>Flottec App - Eventos</title>
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
          <li class="nav-item active">
            <a class="nav-link" href="page_eventos.php">Eventos</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="page_categorias.php">Categorias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="page_productos.php">Productos<span class="sr-only"></span></a>
          </li>
           <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sesion
                </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="logout.php">Salir</a>
            </div>
            </li>
        </ul>
      </div>
    </nav>
    

<!-- Modal -->
<div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Evento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="inserteventos.php" method="POST" enctype="multipart/form-data">

            <div class="modal-body">
                <div class="form-group">
                    <label>Clave Evento</label>
                    <input type="text" id="clave_evento" name="clave_evento" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label>Titulo del Evento </label>
                    <input type="text" id="titulo_evento" name="titulo_evento" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                    <label>Fecha</label>
                    <input type="text" id="fecha" name="fecha" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                    <label>Lugar</label>
                    <input type="text" id="lugar" name="lugar" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                    <label>Descripcion</label>
                    <textarea  id="descripcion" name="descripcion" class="form-control" placeholder="" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Contenido Principal</label>
                    <textarea id="ruta_img_principal"  name="ruta_img_principal" class="form-control" placeholder="" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <select class="form-control" id="contenido" name="contenido">
                        <option value="video">Video</option>
                        <option value="imagen">Imagen</option>
                    </select>                        
                </div>
                <div class="form-group">
                    <label>Contenido Secundario</label>
                    <textarea id="ruta_img_secundario" name="ruta_img_secundario" class="form-control" placeholder="" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Archivo</label>
                    <br>
                    <input type="file" id="archivo_evt" name="archivo_evt">
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
                <form action="insertarchivo_eventos.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                    <div class="form-group">
                        <label>Producto</label>
                        <select class="form-control" id="clave_evento_arch" name="clave_evento_arch">
                            <?php
                            $consulta = $conexion->query("select clave_evento from eventos");
                            while ($datos = $consulta->fetch_assoc()){
                            ?>
                            <option value='<?php echo $datos['clave_evento']?>'><?php echo $datos['clave_evento']; ?></option>
                            <?php
                            }
                            ?>
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

<!-- ####################################################################################################################### -->

<!-- EDIT POP UP FORM (Bootstrap MODAL) -->

<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Evento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="updateeventos.php" method="POST">

            <div class="modal-body">

                <input type="hidden" name="update_id" id="update_id">

                <div class="form-group">
                    <label>Titulo del Evento </label>
                    <input type="text" id="utitulo_evento" name="utitulo_evento" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                    <label>Fecha</label>
                    <input type="text" id="ufecha" name="ufecha" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                    <label>Lugar</label>
                    <input type="text" id="ulugar" name="ulugar" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                    <label>Descripcion</label>
                    <textarea  id="udescripcion" name="udescripcion" class="form-control" placeholder="" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Contenido Principal</label>
                    <textarea id="uruta_img_principal"  name="uruta_img_principal" class="form-control" placeholder="" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <select class="form-control" id="ucontenido" name="ucontenido">
                        <option value="video">Video</option>
                        <option value="imagen">Imagen</option>
                    </select>                        
                </div>
                <div class="form-group">
                    <label>Contenido Secundario</label>
                    <textarea id="uruta_img_secundario" name="uruta_img_secundario" class="form-control" placeholder="" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="updatedata" name="updatedata" class="btn btn-primary">Update Data</button>
            </div>
        </form>

    </div>
  </div>
</div>
<!-- EDIT ARCHIVOS -->
<div class="modal fade" id="editmodalarchivo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modificar Informacion General</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

            <form action="updateinfo_arch_eventos.php" method="POST" enctype="multipart/form-data">

                <div class="modal-body">

                    <input type="hidden" name="update_id_arch" id="update_id_arch">

                    <div class="form-group">
                        <label>Clave Producto</label>
                        <input type="text" id="uclave_producto_arch" name="uclave_producto_arch" class="form-control" placeholder="">
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

<!-- #################################################################################################### -->





<!-- ####################################################################################################################### -->

<!-- DELETE POP UP FORM (Bootstrap MODAL) -->

<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Evento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="deleteeventos.php" method="POST">
            <div class="modal-body">
                <input type="hidden" name="delete_id" id="delete_id">
                <h4> Quieres eliminar este evento</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancelar</button>
                <button type="submit" name="deletedata" class="btn btn-primary"> Eliminar</button>
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
            <form action="deleteinfo_arch_eventos.php" method="POST">
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

<!-- #################################################################################################### -->

    <div class="jumbotron bg-white mt-0 p-1">  
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                    Agregar Evento
                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal_arch">
                    Agregar Archivo
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Informacion General</a>
                    <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-files" role="tab" aria-controls="nav-contact" aria-selected="false">Archivos</a>
                    </div>
                </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <div class="card-body" style="border: 1px solid #dee2e6;">
                    <table id="datatableid" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Clave</th>
                            <th>Titulo del Evento</th>
                            <th>Fecha</th>
                            <th>Lugar</th>
                            <th>Descripcion</th>
                            <th>Contenido Principal</th>
                            <th>Contenido Secundario</th>
                            <th></th>
                        </tr>
                    </thead>
               <tbody>
                <?php
                $consulta = $conexion->query("SELECT * FROM eventos");
                while ($row = $consulta->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row['evento_id'];?></td>
                            <td><?php echo $row['clave_evento'];?></td>                             
                            <td><?php echo $row['titulo_evento'];?></td>                            
                            <td><?php echo $row['fecha'];?></td>                            
                            <td><?php echo $row['lugar'];?></td>                            
                            <td class="text-wrap"><?php echo $row['descripcion'];?></td> 
                            <td><img src="<?php echo $row['ruta_img_principal'];?>" width="80"></td>
                            <td><?php
                                if ($row['tipo_contenido']=="video") {
                                    echo $row['ruta_img_secundario'];
                                } else {
                                    ?>
                                    <img src="<?php echo $row['ruta_img_secundario'];?>" width="400">
                                    <?php
                                }

                                 ?></td>  
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
      <div class="tab-pane fade" id="nav-files" role="tabpanel" aria-labelledby="nav-contact-tab">
          <div class="card-body" style="border: 1px solid #dee2e6;">
                    <table id="datatableid_arch" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ID Evento</th>
                                <th>Nombre del Archivo</th>
                                <th>Acciones</th>

                            </tr>
                        </thead>
                   <tbody>
                    <?php
                    $consulta = $conexion->query("SELECT * from rutas_archivos_eventos");
                    while ($row = $consulta->fetch_assoc()) {
                    ?>
                            <tr>
                                <td><?php echo $row['id_ruta_evento'];?></td>
                                <td><?php echo $row['clave_evento'];?></td>                             
                                <td><?php echo $row['nombre_archivo'];?></td>                          
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
              url:"editevento.php",
              method:"POST",
              data:{id:dataE[0]},
              dataType:"json",
              success:function(data){
               $('#update_id').val(data.evento_id);
               $('#utitulo_evento').val(data.titulo_evento);
               $('#ufecha').val(data.fecha);
               $('#ulugar').val(data.lugar);
               $('#udescripcion').val(data.descripcion);
               $('#uruta_img_principal').val(data.ruta_img_principal);
               $('#ucontenido').val(data.tipo_contenido);
               $('#uruta_img_secundario').val(data.ruta_img_secundario);
               $('#editmodal').modal('show');
             }

           });
           });
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
                
                
                
                
        });
    });
    </script>



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

            $('#delete_id').val(data[1]);
      
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
/*
$(document).ready(function () {
    $('.editbtn').on('click', function() {
        
        $('#editmodal').modal('show');

        
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
            $('#utitulo_evento').val(data[1]);
            $('#ufecha').val(data[2]);
            $('#ulugar').val(data[3]);
            $('#udescripcion').val(data[4]);
            $('#uruta_img_principal').val(data[5]);
            $('#uruta_img_secundario').val(data[6]);
        
    });
});*/

</script>


</body>
</html>

