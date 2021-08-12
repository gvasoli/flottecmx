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
    <title>Flottec App - Categorias</title>
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
            <a class="nav-link" href="page_eventos.php">Eventos</span></a>
          </li>
          <li class="nav-item active">
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
        <h5 class="modal-title" id="exampleModalLabel">Agregar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="insertcategoria.php" method="POST">

            <div class="modal-body">
                <div class="form-group">
                    <label>Clave Categoria</label>
                    <input type="text" id="clave_categoria" name="clave_categoria" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                    <label>Nombre Categoria</label>
                    <input type="text" id="nombre_categoria" name="nombre_categoria" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                    <label>Imagen</label>
                    <input type="text" id="imagen" name="imagen" class="form-control" placeholder="">
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

<!-- ####################################################################################################################### -->

<!-- EDIT POP UP FORM (Bootstrap MODAL) -->

<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="updatecategoria.php" method="POST">

            <input type="hidden" name="update_id" id="update_id">
            <div class="modal-body">
                <div class="form-group">
                    <label>Clave Categoria</label>
                    <input type="text" id="uclave_categoria" name="uclave_categoria" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                    <label>Nombre Categoria</label>
                    <input type="text" id="unombre_categoria" name="unombre_categoria" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                    <label>Imagen</label>
                    <input type="text" id="uimagen" name="uimagen" class="form-control" placeholder="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
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
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="deleteCategoria.php" method="POST">

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

<!-- #################################################################################################### -->

    <div class="jumbotron bg-white">  
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                    Agregar Categoria
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-body">

        
                <table id="datatableid" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Clave Categoria</th>
                            <th>Nombre Categoria</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
            <?php
                $consulta = $conexion->query("SELECT * FROM categorias");
                while ($row = $consulta->fetch_assoc()) {
                ?>
                    <tbody>
                        <tr>
                            <td><?php echo $row['id'];?></td>  
                            <td><?php echo $row['clave_cat'];?></td>                            
                            <td><?php echo $row['nombre_cat'];?></td>                          
                            <td><img src="<?php echo $row['img_cat'];?>" width="120"></td> 
                            
                            <td> 
                                <button type="button" class="btn btn-success editbtn"><i class="fa fa-edit"></i></button>
                                <button type="button" class="btn btn-danger deletebtn"><i class="fa fa-times-circle"></i></button>
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
              url:"editcategoria.php",
              method:"POST",
              data:{id:dataE[0]},
              dataType:"json",
              success:function(data){
               $('#update_id').val(data.id);
               $('#uclave_categoria').val(data.clave_cat);
               $('#unombre_categoria').val(data.nombre_cat);
               $('#uimagen').val(data.img_cat);
               
               $('#editmodal').modal('show');
             }

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

            $('#delete_id').val(data[0]);
      
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
            $('#uclave_categoria').val(data[1]);
            $('#unombre_categoria').val(data[2]);
            $('#uimagen').val(data[3]);
        
    });
});
*/
</script>


</body>
</html>

