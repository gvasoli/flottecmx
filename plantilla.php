  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <title>Flottec Simulador</title>
      <!-- MDB icon -->
      <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
      <!-- Google Fonts Roboto -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
      <!-- MDB -->
      <link rel="stylesheet" href="css/mdb.min.css" />
    </head>
    <body>
      <div class="sticky-top shadow" style="background-color: #1A237E;">
        <nav class="navbar navbar-expand-lg navbar-light shadow-0 pb-0 pt-0" >
          <a class="navbar-brand m-3" href="page_eventos.php">
              <img src="assets/img/logoflotteclight.png" width="220"  class="d-inline-block align-top" alt="" loading="lazy">
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


            
                      <div class="card-header indigo text-white border-bottom-0">
                          <span class="align-middle text-center" id="">Tiempo restante</span>
                      <p class="align-middle text-center m-0 p-0 " style="font-size: 30px;" id="reloj">00 00 00</p>

                      </div>
                  
                  <div class="" >
                      <div class="card-header text-white border-bottom-0">
                          <span class="align-middle text-center">Horas de operacion</span>
                              <p class="align-middle text-center m-0 p-0 " style="font-size: 30px;" id="relojHora">00 00 00</p>
                      </div>
                  </div>
                  <div class="m-1">
                          <input type="button" id="btnEmpezar"  value="Empezar" name="boton1" class="btn btn-success btn-rounded"  style="width: 100%;" />
                      </div>
                      <div class="m-1">
                          <input type="button" id="btnParar" value="Parar" name="boton2" class="btn btn-danger btn-rounded" style="width: 100%;"   />
                      </div>

                   <div class="m-1">
                  <input type="button" id="btnResetTiempo" value="Reset Tiempo" name="boton2" class="btn btn-secondary btn-rounded" style="width: 100%;" />

                  </div>
                  <div class="m-1 text-white">
                    <label for="validationCustom02">Tonelaje de concentrado producido</label>     
                  </div>
                  <div class="col-md-1 m-1">
                        <input type="text" class="form-control" id="txtTonelajeConcentrado" placeholder="t" disabled>
                  </div>



      </nav>
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="p-4 pt-0 pb-0">
      <div class=" m-0">
           <div class="">
               <form class="row needs-validation text-white" novalidate>
               <div class="col-md-2 text-center">
                   <label for="validationCustom01" class="">Oro</label>
                   <div class="row">
                     <div class="col pe-0 px-1">
                        <label for="" class="" style="font-size: 0.9rem">Cabeza</label>
                        <input type="text" class="form-control p-1 text-center" id="txtCabezaOro" name="txtCabezaOro" required placeholder="gr/t" disabled="true">
                      </div>
                      <div class="col-md-4 pe-0 px-1">
                        <label for="validationCustom02" class="" style="font-size: 0.9rem">Ley Conc.</label>
                          <input type="text" class="form-control p-1 text-center" id="txtConcOro" name="txtConcOro" required placeholder="gr/t" disabled="true">
                      </div>
                     <div class="col pe-0 px-1">
                      <label for="validationCustom02" class="" style="font-size: 0.9rem">Cola</label>
                        <input type="text" class="form-control p-1 text-center" id="txtColaOro" name="txtColaOro" required placeholder="gr/t" disabled="true">
                      </div>
                   </div>
                </div>
                <div class="col-md-2 text-center">
                   <label for="validationCustom01" class="">Plata</label>
                   <div class="row">
                     <div class="col pe-0 px-1"><label for="validationCustom02" class="" style="font-size: 0.9rem">Cabeza</label>
                        <input type="text" class="form-control p-1 text-center" id="txtCabezaPlata" name="txtCabezaPlata" required placeholder="gr/t" disabled="true">
                      </div>
                      <div class="col-md-4 pe-0 px-1">
                        <label for="validationCustom02" class="" style="font-size: 0.9rem">Ley Conc.</label>
                          <input type="text" class="form-control p-1 text-center" id="txtConcPlata" name="txtConcPlata" required placeholder="gr/t" disabled="true">
                      </div>
                     <div class="col pe-0 px-1"><label for="validationCustom02" class="" style="font-size: 0.9rem">Cola</label>
                        <input type="text" class="form-control p-1 text-center" id="txtColaPlata" name="txtColaPlata" required placeholder="gr/t" disabled="true">
                      </div>
                   </div>
                </div>
                <div class="col-md-2 text-center">
                   <label for="validationCustom01" class="">Plomo</label>
                   <div class="row">
                     <div class="col pe-0 px-1"><label for="validationCustom02" class="" style="font-size: 0.9rem">Cabeza</label>
                        <input type="text" class="form-control p-1 text-center" id="txtCabezaPlomo" name="txtCabezaPlomo" required placeholder="%" disabled="true">
                      </div>
                      <div class="col-md-4 pe-0 px-1">
                        <label for="validationCustom02" class="" style="font-size: 0.9rem">Ley Conc.</label>
                          <input type="text" class="form-control p-1 text-center" id="txtConcPlomo" name="txtConcPlomo" required placeholder="%" disabled="true">
                      </div>
                     <div class="col pe-0 px-1"><label for="validationCustom02" class="" style="font-size: 0.9rem">Cola</label>
                        <input type="text" class="form-control p-1 text-center" id="txtColaPlomo" name="txtColaPlomo" required placeholder="%" disabled="true">
                      </div>
                   </div>
                </div>
                <div class="col-md-2 text-center">
                   <label for="validationCustom01" class="">Zinc</label>
                   <div class="row">
                     <div class="col pe-0 px-1"><label for="validationCustom02" class="" style="font-size: 0.9rem">Cabeza</label>
                        <input type="text" class="form-control p-1 text-center" id="txtCabezaZinc" name="txtCabezaZinc" required placeholder="%" disabled="true">
                      </div>
                      <div class="col-md-4 pe-0 px-1">
                        <label for="validationCustom02" class="" style="font-size: 0.9rem">Ley Conc.</label>
                          <input type="text" class="form-control p-1 text-center" id="txtConcZinc" name="txtConcZinc" required placeholder="%" disabled="true">
                      </div>
                     <div class="col pe-0 px-1"><label for="validationCustom02" class="" style="font-size: 0.9rem">Cola</label>
                        <input type="text" class="form-control p-1 text-center" id="txtColaZinc" name="txtColaZinc" required placeholder="%" disabled="true">
                      </div>
                   </div>
                </div>
                <div class="col-md-2 text-center">
                   <label for="validationCustom01" class="">Fierro</label>
                   <div class="row">
                     <div class="col pe-0 px-1"><label for="validationCustom02" class="" style="font-size: 0.9rem">Cabeza</label>
                        <input type="text" class="form-control p-1 text-center" id="txtCabezaFierro" name="txtCabezaFierro" required placeholder="%" disabled="true">
                      </div>
                      <div class="col-md-4 pe-0 px-1">
                        <label for="validationCustom02" class="" style="font-size: 0.9rem">Ley Conc.</label>
                          <input type="text" class="form-control p-1 text-center" id="txtConcFierro" name="txtConcFierro" required placeholder="%" disabled="true">
                      </div>
                     <div class="col pe-0 px-1"><label for="validationCustom02" class="" style="font-size: 0.9rem">Cola</label>
                        <input type="text" class="form-control p-1 text-center" id="txtColaFierro" name="txtColaFierro" required placeholder="%" disabled="true">
                      </div>
                   </div>
                </div>
                <div class="col-md-2 text-center">
                   <label for="validationCustom01" class="" >Insoluble</label>
                   <div class="row">
                     <div class="col pe-0 px-1"><label for="validationCustom02" class="" style="font-size: 0.9rem">Cabeza</label>
                        <input type="text" class="form-control p-1 text-center" id="txtCabezaInsoluble" name="txtCabezaInsoluble" required placeholder="%" disabled="true">
                      </div>
                      <div class="col-md-4 pe-0 px-1">
                        <label for="validationCustom02" class="" style="font-size: 0.9rem">Ley Conc.</label>
                          <input type="text" class="form-control p-1 text-center" id="txtConcInsoluble" name="txtConcInsoluble" required placeholder="%" disabled="true">
                      </div>
                     <div class="col pe-0 px-1"><label for="validationCustom02" class="" style="font-size: 0.9rem">Cola</label>
                        <input type="text" class="form-control p-1 text-center" id="txtColaInsoluble" name="txtColaInsoluble" required placeholder="%" disabled="true">
                      </div>
                   </div>
                </div>
              </form>
           </div>
       </div>
    </div>
  </div>
  <nav class="navbar">
    <div class="container-fluid text-center">
      <div class="row w-100">
        <div class="col">
          <button
        class="navbar-toggler text-white"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarToggleExternalContent"
        aria-controls="navbarToggleExternalContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-chevron-down"></i>
      </button>
        </div>
      </div>
      
    </div>
  </nav>
      </div>
      

      <!-- Start your project here-->
      <div class="jumbotron">
        <div class="card mt-2">
                   <div class="card-body">
                       <nav>
                           <div class="nav nav-tabs" id="nav-tab" role="tablist">
                           <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Diseño</a>
                           <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-files" role="tab" aria-controls="nav-contact" aria-selected="false">Proceso</a>
                           <a class="nav-link" id="nav-res-tab" data-toggle="tab" href="#nav-res" role="tab" aria-controls="nav-res" aria-selected="false">Resultado</a>
                           <a class="nav-link" id="nav-rec-tab" data-toggle="tab" href="#nav-reslr" role="tab" aria-controls="nav-rec" aria-selected="false">Resultado Ley Recuperacion</a>
                           <a class="nav-link" id="nav-res-tab" data-toggle="tab" href="#nav-resf" role="tab" aria-controls="nav-res" aria-selected="false">Resultados Financieros</a>
                           <a class="nav-link" id="nav-res-tab" data-toggle="tab" href="#nav-reshv" role="tab" aria-controls="nav-res" aria-selected="false">Historico de Variable de Procesos</a>
                           <a class="nav-link" id="nav-res-tab" data-toggle="tab" href="#nav-rese" role="tab" aria-controls="nav-res" aria-selected="false">Resultado de Ensaye</a>
                           </div>
                       </nav>
           <div class="tab-content" id="nav-tabContent">
             <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                 <div class="card-body" style="border: 1px solid #dee2e6;">

       <div class="card mt-2">
           <div class="card-header bg-primary text-white">
           Dimensiones de la celda
         </div>
           <div class="card-body">
               <form class="row g-3 needs-validation" novalidate>
               <div class="col-md-2">
                   <label for="validationCustom01" class="form-label fs-6">Diametro del agitador</label>
                   <input type="text" class="form-control" id="txtDiametroAgitador" name="txtDiametroAgitador" required placeholder="m" value="0.6" onchange="keyDiametroAgitador()">

           </div>
         <div class="col-md-2">
           <label for="validationCustom02" class="form-label">Diametro de la celda</label>
           <input type="text" class="form-control" id="txtDiametroCelda" name="txtDiametroCelda" required placeholder="m" value="6" onchange="keyDiametroCelda()">

         </div>
         <div class="col-md-2">
           <label for="txtAlturaCelda" class="form-label">Altura de la celda</label>
           <input type="text" class="form-control" id="txtAlturaCelda" name="txtAlturaCelda" required placeholder="m" value="7" onchange="keyAlturaCelda()">

         </div>
         <div class="col-md-2">
           <label for="validationCustom02" class="form-label">Area efectiva</label>
           <input type="text" class="form-control" id="txtAreaEfectiva" name="txtAreaEfectiva" required placeholder="m^2"
           disabled="">

         </div>
         <div class="col-md-2">
           <label for="validationCustom02" class="form-label">Perimetro de la celda</label>
           <input type="text" class="form-control" id="txtPerimetroCelda" name="txtPerimetroCelda"  required placeholder="m"
            disabled=""
           >

         </div>
         <div class="col-md-2">
           <label for="validationCustom02" class="form-label">Vol. efectivo de la celda</label>
           <input type="text" class="form-control" id="txtVolEfectivo" name="txtVolEfectivo"  required placeholder="m^3" disabled="">
         </div>
         <div class="col-md-2">
           <label for="validationCustom02" class="form-label">Volumen Real de operacion</label>
           <input type="text" class="form-control" id="txtVolReal" name="txtVolReal" required placeholder="m^3" disabled="">

         </div>
         <div class="col-md-2">
           <label for="validationCustom02" class="form-label">Gravedad especifica</label>
           <input type="text" class="form-control" id="txtGravedadEspecifica" name="txtGravedadEspecifica" required placeholder="kg/l" value="2.8">
         </div>
       </form>
      </div>

       </div>
       <div class="card mt-2">
           <div class="card-header bg-primary text-white">
           Presupuestos
         </div>
           <div class="card-body">
               <form class="row g-3 needs-validation" novalidate>
               <div class="col-md-2">
                   <label for="validationCustom01" class="form-label">Presupuestos de costo</label>
                   <input type="text" class="form-control" id="validationCustom01" required placeholder="dlls">

           </div>
         <div class="col-md-2">
           <label for="validationCustom02" style = "font-size: 0.99rem"class="form-label">Presupuestos de ganancias</label>
           <input type="text" class="form-control" id="validationCustom02" required placeholder="dlls">

         </div>
         <div class="col-md-2">
           <label for="validationCustom02" class="form-label">Costo por tonelada molida</label>
           <input type="text" class="form-control" id="validationCustom02" required placeholder="dlls/t">

         </div>
         <div class="col-md-2">
           <label for="validationCustom02" class="form-label">Precio depresor</label>
           <input type="text" class="form-control" id="validationCustom02" required placeholder="dlls/kg">

         </div>
         <div class="col-md-2">
           <label for="validationCustom02" class="form-label">Precio colector</label>
           <input type="text" class="form-control" id="validationCustom02"  required placeholder="dlls/kg">

         </div>
         <div class="col-md-2">
           <label for="validationCustom02" class="form-label">Precio espumante</label>
           <input type="text" class="form-control" id="validationCustom02"  required placeholder="dlls/kg">

         </div>
         <div class="col-md-2">
           <label for="validationCustom02" class="form-label">Precio cianuro</label>
           <input type="text" class="form-control" id="validationCustom02" required placeholder="dlls/kg">

         </div>
       </form>
           </div>

       </div>
       <div class="card mt-2">
           <div class="card-header bg-primary text-white">
           Concentracion de reactivos
         </div>
           <div class="card-body">
               <form class="row g-3 needs-validation" novalidate>
               <div class="col-md-2">
                   <label for="validationCustom01" class="form-label">Colector</label>
                   <input type="text" class="form-control" id="txtColectorCR" name="txtColectorCR" value="10" required placeholder="%">

           </div>
         <div class="col-md-2">
           <label for="validationCustom02" class="form-label">Espumante</label>
           <input type="text" class="form-control" id="txtEspumanteCR" name="txtEspumanteCR" required placeholder="%" value="100">

         </div>
         <div class="col-md-2">
           <label for="validationCustom02" class="form-label">Sulfato de zinc</label>
           <input type="text" class="form-control" id="txtSulfatoZincCR" name="txtSulfatoZincCR" required placeholder="%" value="10">

         </div>
         <div class="col-md-2">
           <label for="validationCustom02" class="form-label">Cianuro</label>
           <input type="text" class="form-control" id="txtCianuroCR" name="txtCianuroCR" required placeholder="%" value="20">

         </div>
       </form>
           </div>

       </div>
       <div class="card mt-2">
           <div class="card-header bg-primary text-white">
           Parametros venta de concentrado
         </div>
           <div class="card-body">
               <form class="row g-3 needs-validation" novalidate>
               <div class="col-md-1">
                   <label for="validationCustom01" class="form-label">Onza oro</label>
                   <input type="text" class="form-control" id="validationCustom01" required placeholder="dlls">

           </div>
         <div class="col-md-1">
           <label for="validationCustom02" class="form-label">Onza plata</label>
           <input type="text" class="form-control" id="validationCustom02" required placeholder="dlls">

         </div>
         <div class="col-md-2">
           <label for="validationCustom02" class="form-label">Libra plomo</label>
           <input type="text" class="form-control" id="validationCustom02" required placeholder="dlls">

         </div>
         <div class="col-md-3">
           <label for="validationCustom02" class="form-label">% Humedad del concentrado</label>
           <input type="text" class="form-control" id="validationCustom02" required placeholder="%">

         </div>
         <div class="col-md-2">
           <label for="validationCustom02" class="form-label">Costo del flete ($/TM)</label>
           <input type="text" class="form-control" id="validationCustom02"  required placeholder="dlls/t">

         </div>
         <div class="col-md-2">
           <label for="validationCustom02" class="form-label">Maquila ($/TM)</label>
           <input type="text" class="form-control" id="validationCustom02"  required placeholder="dlls/t">

         </div>
         <div class="col-md-2">
           <label for="validationCustom02" class="form-label">Precio cianuro</label>
           <input type="text" class="form-control" id="validationCustom02" required placeholder="dlls/kg">

         </div>
       </form>
           </div>

       </div>

                 </div>
             </div>
             <div class="tab-pane fade" id="nav-files" role="tabpanel" aria-labelledby="nav-contact-tab">

                 <div class="card-body" style="border: 1px solid #dee2e6;">
                       <div class="card mt-2">
           <div class="card-header bg-primary text-white">
           Variables de alimentacion
         </div>
           <div class="card-body">
               <form class="row g-3 needs-validation" novalidate>
               <div class="col-md-3">
                   <label for="validationCustom02" class="form-label">Tonelaje</label>
                   <div class="input-group">

         <input type="text" class="form-control" placeholder="t/hr" id="txtTonelaje" name="txtTonelaje" value="360" onchange="keyTonelaje()">
         <input type="text" class="form-control" placeholder="t/hr" id="txtTonelajeDisabled" name="txtTonelajeDisabled" disabled value="">
         <input type="text" class="form-control" placeholder="t/turno" id="txtTonelajeTurnoDisabled" name="txtTonelajeTurnoDisabled" disabled value="0">
       </div>

           </div>
         <div class="col-md-2">
           <label for="validationCustom02" class="form-label">Agua</label>
           <div class="input-group">

         <input type="text" class="form-control" placeholder="m^3/hr" id="txtAguaHora" name="txtAguaHora" disabled="">
         <input type="text" class="form-control" placeholder="m^3/turno" id="txtAguaTurno" name="txtAguaTurno" value="0" disabled="">
       </div>

         </div>
         <div class="col-md-2">
           <label for="validationCustom02" class="form-label">% de solidos</label>
           <div class="input-group">

         <input type="text" class="form-control" placeholder="%" id="txtPSolidos" name="txtPSolidos" value="30" onchange="keyPSolidos()">
         <input type="text" class="form-control" placeholder="%" id="txtPSolidosDisabled" name="txtPSolidosDisabled" disabled="">
       </div>

         </div>
         <div class="col-md-2">
           <label for="validationCustom02" class="form-label">Volumen de pulpa</label>
           <div class="input-group">

         <input type="text" class="form-control" placeholder="m^3/hr" id="txtVolumenPulpaHora" name="txtVolumenPulpaHora" disabled="">
         <input type="text" class="form-control" placeholder="m^3/turno" id="txtVolumenPulpaTurno" name="txtVolumenPulpaTurno" disabled="" value="0">
       </div>

         </div>
         <div class="col-md-2">
           <label for="validationCustom02" class="form-label">Tiempo de residencia</label>
           <input type="text" class="form-control" id="txtTiempoResidencia" name="txtTiempoResidencia"  required placeholder="min" value="11" disabled="">
         </div>
       </form>
           </div>

       </div>

       <div class="card mt-2">
           <div class="card-header bg-primary text-white">
           Variables de Control
         </div>
           <div class="card-body">
               <form class="row g-3 needs-validation" novalidate>
               <div class="col-md-2">
                   <label for="validationCustom02" class="form-label">Aire</label>
                   <div class="input-group">
         <input type="text" class="form-control" placeholder="m^3/min" id="txtAire" name="txtAire" onchange="keyAire();" value="12">
         <input type="text" class="form-control" placeholder="m^3/min" id="txtAireDisabled" name="txtAireDisabled" value="" disabled="">
       </div>

           </div>
         <div class="col-md-2">
                   <label for="validationCustom02" class="form-label">Nivel</label>
                   <div class="input-group">
         <input type="text" class="form-control" placeholder="-m" id="txtNivel" onchange="keyNivel()" value="-0.17">
         <input type="text" class="form-control" placeholder="-m" id="txtNivelDisabled" name="txtNivelDisabled" disabled="">
       </div>

           </div>
         <div class="col-md-2">
                   <label for="validationCustom02" class="form-label">Colector</label>
                   <div class="input-group">
         <input type="text" class="form-control" placeholder="ml/min" id="txtColectorVC" name="txtColectorVC" onchange="keyColector()" value="1200">
         <input type="text" class="form-control" placeholder="ml/min" id="txtColectorVCDisabled"
         name="txtColectorVCDisabled" disabled="">
       </div>

           </div>
        <div class="col-md-2">
          <label for="validationCustom02" class="form-label">Espumante</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="ml/min" id="txtEspumanteVC" name="txtEspumanteVC" value="170" onchange="keyEspumante()">
              <input type="text" class="form-control" placeholder="ml/min" id="txtEspumanteVCDisabled" name="txtEspumanteVCDisabled"disabled="">
            </div>

           </div>
         <div class="col-md-2">
                   <label for="validationCustom02" class="form-label">Sulfato de Zinc</label>
                   <div class="input-group">
         <input type="text" class="form-control" placeholder="ml/min" id="txtSulfatoZincVC" name="txtSulfatoZincVC" value="2000" onchange="keySulfato()">
         <input type="text" class="form-control" placeholder="ml/min" id="txtSulfatoZincVCDisabled" name="txtSulfatoZincVCDisabled" disabled="">
       </div>

           </div>
        <div class="col-md-2">
          <label for="validationCustom02" class="form-label">Cianuro</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="ml/min" id="txtCianuroVC" name="txtCianuroVC" value="200" onchange="keyCianuro()">
              <input type="text" class="form-control" placeholder="ml/min" id="txtCianuroVCDisabled" name="txtCianuroVCDisabled" disabled="">
            </div>
        </div>
           
       </form>
           </div>

       </div>
       <div class="card mt-2">
           <div class="card-header bg-primary text-white">
           Variables de Respuesta
         </div>
           <div class="card-body">
               <form class="row g-3 needs-validation" novalidate>
               <div class="col-md-2">
                   <label for="validationCustom02" class="form-label">Velocidad de Derrame</label>
                   <div class="input-group">
         <input type="text" class="form-control" placeholder="cm/s" id="txtVelocidadDerrame" name="txtVelocidadDerrame" disabled="">
       </div>

           </div>
         <div class="col-md-2">
                   <label for="validationCustom02" class="form-label">Aire retenido</label>
                   <div class="input-group">
         <input type="text" class="form-control" placeholder="%" id="txtAireRetenido" name="txtAireRetenido" value="10.97" disabled="">
       </div>

           </div>
         <div class="col-md-2">
                   <label for="validationCustom02" class="form-label">Recuperacion de agua</label>
                   <div class="input-group">
         <input type="text" class="form-control" placeholder="m^3" id="txtRecuperacionAgua" disabled="">
       </div>

           </div>
         <div class="col-md-2">
                   <label for="validationCustom02" class="form-label">Velocidad superficial jg</label>
                   <div class="input-group">
         <input type="text" class="form-control" placeholder="cm/s" id="txtVelocidadSuperficial" name="txtVelocidadSuperficial" disabled="">
       </div>

           </div>
         <div class="col-md-2">
                   <label for="validationCustom02" class="form-label">Flujo superficial de gas</label>
                   <div class="input-group">
         <input type="text" class="form-control" placeholder="s^-1" id="txtFlujoSuperficial" name="txtFlujoSuperficial" disabled="">
       </div>

           </div>
         <div class="col-md-2">
                   <label for="validationCustom02" class="form-label">Diametro de las burbujas</label>
                   <div class="input-group">
         <input type="text" class="form-control" placeholder="mm" id="txtDiametroBurbujas" name="txtDiametroBurbujas" disabled="">
       </div>

           </div>
          <div class="col-md-2">
                   <label for="validationCustom02" class="form-label">Aire recuperado</label>
                   <div class="input-group">
         <input type="text" class="form-control" placeholder="%" id="txtAireRecuperado" name="txtAireRecuperado" disabled="">
         <input type="text" class="form-control" placeholder="%" id="txtAireRecuperadoP" name="txtAireRecuperadoP" disabled="">
       </div>

           </div>
           <div class="col-md-2">
                   <label for="validationCustom02" class="form-label">jb</label>
                   <div class="input-group">
         <input type="text" class="form-control" placeholder="m^3/min" id="txtJb" name="txtJb" disabled="">
       </div>

           </div>
           <div class="col-md-2">
                   <label for="validationCustom02" class="form-label">Altura cama sobre labio</label>
                   <div class="input-group">
         <input type="text" class="form-control" placeholder="cm" id="txtAlturaCama" name="txtAlturaCama" disabled="">
       </div>

           </div>
           <div class="col-md-2">
                   <label for="validationCustom02" class="form-label">Colector</label>
                   <div class="input-group">
         <input type="text" class="form-control" placeholder="gr/t" id="txtColectorVR" name="txtColectorVR" disabled="">
        <input type="text" class="form-control" placeholder="ppm" id="" name="" value="gr/t" disabled="">
       </div>

           </div>
           <div class="col-md-2">
                   <label for="validationCustom02" class="form-label">Espumante</label>
                   <div class="input-group">
                      <input type="text" class="form-control" placeholder="ppm" id="txtEspumanteVR" name="txtEspumanteVR" value="10.93" disabled="">
                      <input type="text" class="form-control" placeholder="ppm" id="" name="" value="PPM" disabled="">
                </div>

           </div>
           <div class="col-md-2">
                   <label for="validationCustom02" class="form-label">Sulfato de Zinc</label>
                   <div class="input-group">
         <input type="text" class="form-control" placeholder="gr/t" id="txtSulfatoZincVR" name="txtSulfatoZincVR" disabled="">
         <input type="text" class="form-control" placeholder="ppm" id="" name="" value="gr/t" disabled="">
         
       </div>

           </div>
           <div class="col-md-2">
                   <label for="validationCustom02" class="form-label">Cianuro</label>
                   <div class="input-group">
         <input type="text" class="form-control" placeholder="gr/t" id="txtCianuroVR" name="txtCianuroVR" disabled="">
         <input type="text" class="form-control" placeholder="ppm" id="" name="" value="gr/t" disabled="">
         
       </div>

           </div>
       </form>
           </div>

       </div>
                 </div>
             </div>
             <div class="tab-pane fade" id="nav-res" role="tabpanel" aria-labelledby="nav-res-tab">
                 <div class="card-body" style="border: 1px solid #dee2e6;">
                  <div class="row">
                <div class="col"></div>
                <div class="col text-center"><h5>Cabeza</h5></div>
              </div>
                     <div class="card mt-2">
                         <div class="row">
                             <div class="col">
                                 <table class="table table-bordered border-primary mb-0" id="tablaCabeza">
                                 <thead>
                                   <tr class="bg-primary text-white">
                                     <th scope="col">Hora</th>
                                     <th scope="col">TON Mineral</th>
                                     <th scope="col">% Solidos</th>
                                     <th scope="col">Tiempo de Residencia (min)</th>
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
                                     <th>1:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>

                                   </tr>
                                   <tr>
                                     <th>2:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>3:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>4:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>5:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>6:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>7:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>8:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr class="bg-primary text-white">
                                     <th>Resultado</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>


                                 </tbody>
                               </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="tab-pane fade" id="nav-reslr" role="tabpanel" aria-labelledby="nav-res-tab">
                 <div class="card-body" style="border: 1px solid #dee2e6;">
                  <div class="row">
                    <div class="col text-center"><h5>Ley de Concentrado</h5></div>
                <div class="col text-center"><h5>Recuperacion</h5></div>
                  </div>
                     <div class="card mt-2">
                         <div class="row">
                             <div class="col">
                                 <table class="table table-bordered border-primary mb-0" id="tablaLeyConc">
                                 <thead>
                                   <tr class="bg-primary text-white">
                                     <th scope="col">Hora</th>
                                     <th scope="col">TON Mineral</th>
                                     <th scope="col">Oro</th>
                                     <th scope="col">Plata</th>
                                     <th scope="col">Plomo</th>
                                     <th scope="col">Zinc</th>
                                     <th scope="col">Fierro</th>
                                     <th scope="col">Insoluble</th>
                                     <th scope="col">Aire</th>
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
                                     <th>1:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     

                                   </tr>
                                   <tr>
                                     <th>2:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     
                                   </tr>
                                   <tr>
                                     <th>3:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     
                                   </tr>
                                   <tr>
                                     <th>4:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     
                                   </tr>
                                   <tr>
                                     <th>5:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     
                                   </tr>
                                   <tr>
                                     <th>6:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     
                                   </tr>
                                   <tr>
                                     <th>7:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     
                                   </tr>
                                   <tr>
                                     <th>8:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     
                                   </tr>
                                   <tr class="bg-primary text-white">
                                     <th>Resultado</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     
                                   </tr>


                                 </tbody>
                               </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="tab-pane fade" id="nav-resf" role="tabpanel" aria-labelledby="nav-res-tab">
                 <div class="card-body" style="border: 1px solid #dee2e6;">
                  <div class="row">
                    <div class="col text-center"><h5>Ingresos por elemento</h5></div>
                <div class="col text-center"><h5></h5></div>
                  </div>
                     <div class="card mt-2">
                         <div class="row">
                             <div class="col">
                                 <table class="table table-bordered border-primary mb-0">
                                 <thead>
                                   <tr class="bg-primary text-white">
                                     <th scope="col">Hora</th>
                                     <th scope="col">TON Mineral</th>
                                     <th scope="col">% Solidos</th>
                                     <th scope="col">Tiempo de Residencia (min)</th>
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
                                     <th>1:00</th>
                                     <td></td>
                                     <td></td>
                                     <th></th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>

                                   </tr>
                                   <tr>
                                     <th>2:00</th>
                                     <td></td>
                                     <td></td>
                                     <th></th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>3:00</th>
                                     <td></td>
                                     <td></td>
                                     <th></th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>4:00</th>
                                     <td></td>
                                     <td></td>
                                     <th></th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>5:00</th>
                                     <td></td>
                                     <td></td>
                                     <th></th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>6:00</th>
                                     <td></td>
                                     <td></td>
                                     <th></th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>7:00</th>
                                     <td></td>
                                     <td></td>
                                     <th></th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>8:00</th>
                                     <td></td>
                                     <td></td>
                                     <th></th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr class="bg-primary text-white">
                                     <th>Resultado</th>
                                     <td></td>
                                     <td></td>
                                     <th></th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>


                                 </tbody>
                               </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="tab-pane fade" id="nav-reshv" role="tabpanel" aria-labelledby="nav-res-tab">
                 <div class="card-body" style="border: 1px solid #dee2e6;">
                  <div class="row">
                    <div class="col text-center"><h5>Reactivos</h5></div>
                <div class="col text-center"><h5>Aire</h5></div>
                  </div>
                     <div class="card mt-2">
                         <div class="row">
                             <div class="col">
                                 <table class="table table-bordered border-primary mb-0" id="tablaHistorico">
                                 <thead>
                                   <tr class="bg-primary text-white">
                                     <th scope="col">Hora</th>
                                     <th scope="col">ZnSO4</th>
                                     <th scope="col">Colector</th>
                                     <th scope="col">Espumante</th>
                                     <th scope="col">NaCN</th>
                                     <th scope="col">m3/min</th>
                                     <th scope="col">Jg</th>
                                     <th scope="col">Nivel</th>
                                     <th scope="col">Aire Retenido</th>
                                     <th scope="col">Tamaño de Burbujas</th>
                                     <th scope="col">Velocidad de Derrame</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   <tr>
                                     <th>1:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>2:00</th>
                                     <td></td>
                                     <td></td>
                                     <th></th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>3:00</th>
                                     <td></td>
                                     <td></td>
                                     <th></th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>4:00</th>
                                     <td></td>
                                     <td></td>
                                     <th></th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>5:00</th>
                                     <td></td>
                                     <td></td>
                                     <th></th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>6:00</th>
                                     <td></td>
                                     <td></td>
                                     <th></th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>7:00</th>
                                     <td></td>
                                     <td></td>
                                     <th></th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>8:00</th>
                                     <td></td>
                                     <td></td>
                                     <th></th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr class="bg-primary text-white">
                                     <th>Resultado</th>
                                     <td></td>
                                     <td></td>
                                     <th></th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>


                                 </tbody>
                               </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="tab-pane fade" id="nav-rese" role="tabpanel" aria-labelledby="nav-res-tab">
                 <div class="card-body" style="border: 1px solid #dee2e6;">
                  <div class="row">
                    <div class="col text-center"><h5>Colas de Plomo</h5></div>
                  </div>
                     <div class="card mt-2">
                         <div class="row">
                             <div class="col">
                                 <table class="table table-bordered border-primary mb-0" id="tablaColasPlomo">
                                 <thead>
                                   <tr class="bg-primary text-white">
                                     <th scope="col">Hora</th>
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
                                     <th>1:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>2:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>3:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>4:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>5:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>6:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>7:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <th>8:00</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                   </tr>
                                   <tr class="bg-primary text-white">
                                     <th>Resultado</th>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
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
      <!-- End your project here-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"> </script>
  <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"> </script>
  <script src="assets/js/mainSim.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.2.0/p5.min.js" language="javascript" ></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.2.0/p5.js" language="javascript" ></script>

  <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
  ></script>

    </body>
  </html>
