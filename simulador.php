<?php
    require_once "privado/Usuario.php";
    require_once "privado/DB.php";
    $conexion = Bd::obtenerConexion();
   
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

    <nav class="navbar navbar-expand-lg navbar-light bg-primary sticky-top shadow">
        <a class="navbar-brand" href="page_eventos.php">
            <img src="assets/img/logoflotteclight.png" width="220"  class="d-inline-block align-top" alt="" loading="lazy">
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      
          <div class="col" >
                    <div class="card-header bg-primary text-white">
                        <span class="align-middle text-center" id="">Tiempo restante</span>
                    <p class="align-middle text-center m-0 p-0 " style="font-size: 30px;" id="reloj">00 00 00</p>

                    </div>                   
                </div>
                <div class="col" >
                    <div class="card-header bg-primary text-white">
                        <span class="align-middle text-center">Horas de operacion</span>
                            <p class="align-middle text-center m-0 p-0 " style="font-size: 30px;" id="relojHora">00 00 00</p>
                    </div>               
                </div>
                <div class="col">
                        <input type="button" id="btnEmpezar"  value="Empezar" name="boton1" class="btn btn-success btn-lg"  style="width: 100%;" />
                    </div>
                    <div class="col">
                        <input type="button" id="btnParar" value="Parar" name="boton2" class="btn btn-danger btn-lg" style="width: 100%;"   />
                    </div>
                    
                 <div class="col">
                <input type="button" id="btnResetTiempo" value="Reset Tiempo" name="boton2" class="btn btn-secondary btn-lg" style="width: 100%;" />
                    
                </div>
                 <div class="col">
                    <button type="button" class="btn btn-secondary btn-lg" style="width: 100%;">Reset muestreo</button>
                </div>

      
    </nav>
   

    <div class="jumbotron m-0 p-4">
        <div class="card mt-2">
            <div class="card-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Diseño</a>
                    <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-files" role="tab" aria-controls="nav-contact" aria-selected="false">Proceso</a>
                    <a class="nav-link" id="nav-res-tab" data-toggle="tab" href="#nav-res" role="tab" aria-controls="nav-res" aria-selected="false">Resultado</a>
                    </div>
                </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <div class="card-body" style="border: 1px solid #dee2e6;">

<div class="card mt-2">
    <div class="card-header bg-primary bg-gradient text-white">
    Dimensiones de la celda
  </div>
    <div class="card-body">
        <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-2">
            <label for="validationCustom01" class="form-label fs-6">Diametro del agitador</label>
            <input type="text" class="form-control" id="validationCustom01" required placeholder="m">
            
    </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Diametro de la celda</label>
    <input type="text" class="form-control" id="validationCustom02" required placeholder="m">
    
  </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Altura de la celda</label>
    <input type="text" class="form-control" id="validationCustom02" required placeholder="m">
    
  </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Area efectiva</label>
    <input type="text" class="form-control" id="validationCustom02" required placeholder="m">
    
  </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Perimetro de la celda</label>
    <input type="text" class="form-control" id="validationCustom02"  required placeholder="m"> 
    
  </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Vol. efectivo de la celda</label>
    <input type="text" class="form-control" id="validationCustom02"  required placeholder="m">
    
  </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Volumen Rel de operacion</label>
    <input type="text" class="form-control" id="validationCustom02" required placeholder="m">
    
  </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Gravedad efectiva</label>
    <input type="text" class="form-control" id="validationCustom02" required placeholder="m">

  </div>
</form>
    </div>
    
</div> 
<div class="card mt-2">
    <div class="card-header bg-secondary bg-gradient text-white">
    Presupuestos
  </div>
    <div class="card-body">
        <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-2">
            <label for="validationCustom01" class="form-label">Presupuestos de costo</label>
            <input type="text" class="form-control" id="validationCustom01" required placeholder="m">
            
    </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Presupuestos de ganancias</label>
    <input type="text" class="form-control" id="validationCustom02" required placeholder="m">
    
  </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Costo por tonelada molida</label>
    <input type="text" class="form-control" id="validationCustom02" required placeholder="m">
    
  </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Precio depresor</label>
    <input type="text" class="form-control" id="validationCustom02" required placeholder="m">
    
  </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Precio colector</label>
    <input type="text" class="form-control" id="validationCustom02"  required placeholder="m"> 
    
  </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Precio espumante</label>
    <input type="text" class="form-control" id="validationCustom02"  required placeholder="m">
    
  </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Precio cianuro</label>
    <input type="text" class="form-control" id="validationCustom02" required placeholder="m">
    
  </div>
</form>
    </div>
    
</div> 
<div class="card mt-2">
    <div class="card-header bg-info bg-gradient text-white">
    Concentracion de rectivos
  </div>
    <div class="card-body">
        <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-2">
            <label for="validationCustom01" class="form-label">Colector</label>
            <input type="text" class="form-control" id="validationCustom01" required placeholder="m">
            
    </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Espumante</label>
    <input type="text" class="form-control" id="validationCustom02" required placeholder="m">
    
  </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Sulfato de zinc</label>
    <input type="text" class="form-control" id="validationCustom02" required placeholder="m">
    
  </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Cianuro</label>
    <input type="text" class="form-control" id="validationCustom02" required placeholder="m">
    
  </div>
</form>
    </div>
    
</div> 
<div class="card mt-2">
    <div class="card-header bg-dark bg-gradient text-white">
    Parametros venta de concentrado
  </div>
    <div class="card-body">
        <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-1">
            <label for="validationCustom01" class="form-label">Onza oro</label>
            <input type="text" class="form-control" id="validationCustom01" required placeholder="m">
            
    </div>
  <div class="col-md-1">
    <label for="validationCustom02" class="form-label">Onza plata</label>
    <input type="text" class="form-control" id="validationCustom02" required placeholder="m">
    
  </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Libra plomo</label>
    <input type="text" class="form-control" id="validationCustom02" required placeholder="m">
    
  </div>
  <div class="col-md-3">
    <label for="validationCustom02" class="form-label">% Humedad del concentrado</label>
    <input type="text" class="form-control" id="validationCustom02" required placeholder="m">
    
  </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Costo del flete ($/TM)</label>
    <input type="text" class="form-control" id="validationCustom02"  required placeholder="m"> 
    
  </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Maquila ($/TM)</label>
    <input type="text" class="form-control" id="validationCustom02"  required placeholder="m">
    
  </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Precio cianuro</label>
    <input type="text" class="form-control" id="validationCustom02" required placeholder="m">
    
  </div>
</form>
    </div>
    
</div>     

          </div>
      </div>
      <div class="tab-pane fade" id="nav-files" role="tabpanel" aria-labelledby="nav-contact-tab">
          <div class="card-body" style="border: 1px solid #dee2e6;">
                <div class="card mt-2">
    <div class="card-header bg-secondary bg-gradient text-white">
    Variables de alimentacion
  </div>
    <div class="card-body">
        <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-2">
            <label for="validationCustom02" class="form-label">Tonelaje</label>
            <div class="input-group">
                
  <input type="text" class="form-control" placeholder="t/hr" aria-label="Username">
  <input type="text" class="form-control" placeholder="t/turno" aria-label="Server" disabled="">
</div>
            
    </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Gravedad Especifica</label>
    <input type="text" class="form-control" id="validationCustom02" required placeholder="t/m^3">
    
  </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Agua</label>
    <div class="input-group">
                
  <input type="text" class="form-control" placeholder="t/hr" aria-label="Username" disabled="">
  <input type="text" class="form-control" placeholder="t/turno" aria-label="Server" disabled="">
</div>
    
  </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">% de solidos</label>
    <div class="input-group">
                
  <input type="text" class="form-control" placeholder="t/hr" aria-label="Username">
  <input type="text" class="form-control" placeholder="t/turno" aria-label="Server" disabled="">
</div>
    
  </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Volumen de pulpa</label>
    <div class="input-group">
                
  <input type="text" class="form-control" placeholder="t/hr" aria-label="Username" disabled="">
  <input type="text" class="form-control" placeholder="t/turno" aria-label="Server" disabled="">
</div>
    
  </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Tiempo de residencia</label>
    <input type="text" class="form-control" id="validationCustom02"  required placeholder="m">
  </div>
</form>
    </div>
    
</div>

<div class="card mt-2">
    <div class="card-header bg-secondary bg-gradient text-white">
    Variables de Control
  </div>
    <div class="card-body">
        <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-2">
            <label for="validationCustom02" class="form-label">Aire</label>
            <div class="input-group">     
  <input type="text" class="form-control" placeholder="t/hr" aria-label="Username">
  <input type="text" class="form-control" placeholder="t/turno" aria-label="Server" disabled="">
</div>
            
    </div>
  <div class="col-md-2">
            <label for="validationCustom02" class="form-label">Nivel</label>
            <div class="input-group">     
  <input type="text" class="form-control" placeholder="t/hr" aria-label="Username">
  <input type="text" class="form-control" placeholder="t/turno" aria-label="Server" disabled="">
</div>
            
    </div>
  <div class="col-md-2">
            <label for="validationCustom02" class="form-label">Colector</label>
            <div class="input-group">     
  <input type="text" class="form-control" placeholder="t/hr" aria-label="Username">
  <input type="text" class="form-control" placeholder="t/turno" aria-label="Server" disabled="">
</div>
            
    </div>
  <div class="col-md-2">
            <label for="validationCustom02" class="form-label">Espumante</label>
            <div class="input-group">     
  <input type="text" class="form-control" placeholder="t/hr" aria-label="Username">
  <input type="text" class="form-control" placeholder="t/turno" aria-label="Server" disabled="">
</div>
            
    </div>
  <div class="col-md-2">
            <label for="validationCustom02" class="form-label">Sulfato de Zinc</label>
            <div class="input-group">     
  <input type="text" class="form-control" placeholder="t/hr" aria-label="Username">
  <input type="text" class="form-control" placeholder="t/turno" aria-label="Server" disabled="">
</div>
            
    </div>
  <div class="col-md-2">
            <label for="validationCustom02" class="form-label">Cianuro</label>
            <div class="input-group">     
  <input type="text" class="form-control" placeholder="t/hr" aria-label="Username">
  <input type="text" class="form-control" placeholder="t/turno" aria-label="Server" disabled="">
</div>
            
    </div>
    <div class="col-md-2">
            <label for="validationCustom02" class="form-label">Colector</label>
            <div class="input-group">     
  <input type="text" class="form-control" placeholder="t/hr" aria-label="Username">
  <input type="text" class="form-control" placeholder="t/turno" aria-label="Server" disabled="">
</div>
            
    </div>
    <div class="col-md-2">
            <label for="validationCustom02" class="form-label">Espumante</label>
            <div class="input-group">     
  <input type="text" class="form-control" placeholder="t/hr" aria-label="Username">
  <input type="text" class="form-control" placeholder="t/turno" aria-label="Server" disabled="">
</div>
            
    </div>
    <div class="col-md-2">
            <label for="validationCustom02" class="form-label">Sulfato de Zinc</label>
            <div class="input-group">     
  <input type="text" class="form-control" placeholder="t/hr" aria-label="Username">
  <input type="text" class="form-control" placeholder="t/turno" aria-label="Server" disabled="">
</div>
            
    </div>
    <div class="col-md-2">
            <label for="validationCustom02" class="form-label">Cianuro</label>
            <div class="input-group">     
  <input type="text" class="form-control" placeholder="t/hr" aria-label="Username">
  <input type="text" class="form-control" placeholder="t/turno" aria-label="Server" disabled="">
</div>
            
    </div>
</form>
    </div>
    
</div>
<div class="card mt-2">
    <div class="card-header bg-secondary bg-gradient text-white">
    Variables de Respuesta
  </div>
    <div class="card-body">
        <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-2">
            <label for="validationCustom02" class="form-label">Velocidad de Respuesta</label>
            <div class="input-group">     
  <input type="text" class="form-control" placeholder="t/turno" aria-label="Server" disabled="">
</div>
            
    </div>
  <div class="col-md-2">
            <label for="validationCustom02" class="form-label">Aire retenido</label>
            <div class="input-group">     
  <input type="text" class="form-control" placeholder="t/turno" aria-label="Server" disabled="">
</div>
            
    </div>
  <div class="col-md-2">
            <label for="validationCustom02" class="form-label">Recuperacion de agua</label>
            <div class="input-group">     
  <input type="text" class="form-control" placeholder="t/turno" aria-label="Server" disabled="">
</div>
            
    </div>
  <div class="col-md-2">
            <label for="validationCustom02" class="form-label">Velocidad superficial jg</label>
            <div class="input-group">     
  <input type="text" class="form-control" placeholder="t/turno" aria-label="Server" disabled="">
</div>
            
    </div>
  <div class="col-md-2">
            <label for="validationCustom02" class="form-label">Flujo superficial de gas</label>
            <div class="input-group">     
  <input type="text" class="form-control" placeholder="t/turno" aria-label="Server" disabled="">
</div>
            
    </div>
  <div class="col-md-2">
            <label for="validationCustom02" class="form-label">Diametro de las burbujas</label>
            <div class="input-group">     
  <input type="text" class="form-control" placeholder="t/turno" aria-label="Server" disabled="">
</div>
            
    </div>
   <div class="col-md-2">
            <label for="validationCustom02" class="form-label">Aire recuperado</label>
            <div class="input-group">     
  <input type="text" class="form-control" placeholder="t/turno" aria-label="Server" disabled="">
</div>
            
    </div>
    <div class="col-md-2">
            <label for="validationCustom02" class="form-label">jb</label>
            <div class="input-group">     
  <input type="text" class="form-control" placeholder="t/turno" aria-label="Server" disabled="">
</div>
            
    </div>
    <div class="col-md-2">
            <label for="validationCustom02" class="form-label">Altura cama sobre labio</label>
            <div class="input-group">     
  <input type="text" class="form-control" placeholder="t/turno" aria-label="Server" disabled="">
</div>
            
    </div>
</form>
    </div>
    
</div>   
          </div>
      </div>
      <div class="tab-pane fade" id="nav-res" role="tabpanel" aria-labelledby="nav-res-tab">
          <div class="card-body" style="border: 1px solid #dee2e6;">
              <div class="card mt-2">
                  <div class="row">
                      <div class="col">
                          <table class="table table-striped mb-0">
                          <thead>
                            <tr>
                              <th scope="col">Hora</th>
                              <th scope="col">TON Mineral</th>
                              <th scope="col">% Solidos</th>
                              <th scope="col">Tiempo de Residencia (min)</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1:00</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <th scope="row">2:00</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <th scope="row">3:00</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                            </tr>
                            <tr>
                              <th scope="row">4:00</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                            </tr>
                            <tr>
                              <th scope="row">5:00</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                            </tr>
                            <tr>
                              <th scope="row">6:00</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                            </tr>
                            <tr>
                              <th scope="row">7:00</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                            </tr>
                            <tr>
                              <th scope="row">8:00</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                            </tr>
                            <tr class="bg-primary text-white">
                              <th scope="row">Resultado</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                            </tr>


                          </tbody>
                        </table>
                      </div>
                      <div class="col">
                          <table class="table table-striped mb-0">
                          <thead>
                            <tr>
                              <th scope="col">Oro</th>
                              <th scope="col">Plata</th>
                              <th scope="col">Plomo</th>
                              <th scope="col">Zinc</th>
                              <th scope="col">Fierro</th>
                              <th scope="col">Insoluble</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1:00</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <th scope="row">2:00</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <th scope="row">3:00</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                            </tr>
                            <tr>
                              <th scope="row">4:00</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                            </tr>
                            <tr>
                              <th scope="row">5:00</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                            </tr>
                            <tr>
                              <th scope="row">6:00</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                            </tr>
                            <tr>
                              <th scope="row">7:00</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                            </tr>
                            <tr>
                              <th scope="row">8:00</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                            </tr>
                            <tr class="bg-primary text-white">
                              <th scope="row">Resultado</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                            </tr>


                          </tbody>
                        </table>
                      </div>

                  </div>
              </div>
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
<script src="assets/js/mainSim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.2.0/p5.min.js" language="javascript" ></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.2.0/p5.js" language="javascript" ></script>





</body>
</html>

