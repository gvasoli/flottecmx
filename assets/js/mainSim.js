
var counter = 0;
var timeleft = 960;
var marcha = 0 ;
var counterH = 0;
var timemuestreo = 0;

var alturaCamaEspumante = 0;
var airePerdido = 0;

var txtDiametroAgitador = document.getElementById("txtDiametroAgitador").value;
var txtDiametroCelda = document.getElementById("txtDiametroCelda").value;
var txtAlturaCelda = document.getElementById("txtAlturaCelda").value;
var txtAreaEfectiva = document.getElementById("txtAreaEfectiva").value;
var txtPerimetroCelda = document.getElementById("txtPerimetroCelda").value;
var txtVolEfectivo = document.getElementById("txtVolEfectivo").value;
var txtVolReal = document.getElementById("txtVolReal").value;
var txtGravedadEspecifica = document.getElementById("txtGravedadEspecifica").value;

var txtColectorCR = document.getElementById("txtColectorCR").value;
var txtEspumanteCR = document.getElementById("txtEspumanteCR").value;
var txtSulfatoZincCR = document.getElementById("txtSulfatoZincCR").value;
var txtCianuroCR = document.getElementById("txtCianuroCR").value;


var txtAguaHora = document.getElementById("txtAguaHora").value;
var txtAguaTurno = document.getElementById("txtAguaTurno").value;
var txtPSolidos = document.getElementById("txtPSolidos").value;
var txtPSolidosDisabled = document.getElementById("txtPSolidosDisabled").value;
var txtVolumenPulpaHora = document.getElementById("txtVolumenPulpaHora").value;
var txtVolumenPulpaTurno = document.getElementById("txtVolumenPulpaTurno").value;
var txtTiempoResidencia = document.getElementById("txtTiempoResidencia").value;

var txtAire = document.getElementById("txtAire").value;
var txtAireDisabled = document.getElementById("txtAireDisabled").value;
var txtNivel = document.getElementById("txtNivel").value;
var txtNivelDisabled = document.getElementById("txtNivelDisabled").value;
var txtColectorVC = document.getElementById("txtColectorVC").value;
var txtColectorVCDisabled = document.getElementById("txtColectorVCDisabled").value;
var txtEspumanteVC = document.getElementById("txtEspumanteVC").value;
var txtEspumanteVCDisabled = document.getElementById("txtEspumanteVCDisabled").value;
var txtSulfatoZincVC = document.getElementById("txtSulfatoZincVC").value;
var txtSulfatoZincVCDisabled = document.getElementById("txtSulfatoZincVCDisabled").value;
var txtCianuroVC = document.getElementById("txtCianuroVC").value;
var txtCianuroVCDisabled = document.getElementById("txtCianuroVCDisabled").value;

var txtVelocidadDerrame = document.getElementById("txtVelocidadDerrame").value;
var txtAireRetenido = document.getElementById("txtAireRetenido").value;
var txtRecuperacionAgua = document.getElementById("txtRecuperacionAgua").value;
var txtVelocidadSuperficial = document.getElementById("txtVelocidadSuperficial").value;
var txtFlujoSuperficial = document.getElementById("txtFlujoSuperficial").value;
var txtDiametroBurbujas = document.getElementById("txtDiametroBurbujas").value;
var txtAireRecuperado = document.getElementById("txtAireRecuperado").value;
var txtJb = document.getElementById("txtJb").value;
var txtAlturaCama = document.getElementById("txtAlturaCama").value;
var txtColectorVR = document.getElementById("txtColectorVR").value;
var txtEspumanteVR = document.getElementById("txtEspumanteVR").value;
var txtSulfatoZincVR = document.getElementById("txtSulfatoZincVR").value;
var txtCianuroVR = document.getElementById("txtCianuroVR").value;

var plomoCabeza = 1.24;
var cabezaOro = 0;
var cabezaPlata = 0;
var cabezaZinc = 0;
var cabezaFierro = 0;
var cabezaInsoluble = 0;
var contenidoOro = 0;
var contenidoPlata = 0;
var contenidoPlomo = 0;
var contenidoZinc = 0;
var contenidoFierro = 0;
var contenidoInsoluble = 0;

var leyConcOro = 0;
var leyConcPlata = 0;
var leyConcPlomo = 0;
var leyConcZinc = 0;
var leyConcFierro = 0;
var leyConcInsoluble = 0;

var colaOro = 0;
var colaPlata = 0;
var colaZinc = 0;
var colaFierro = 0;
var colaInsoluble = 0;
var colaPlomo = 0;

var colaPlomoOro = 0;
var colaPlomoPlata = 0;
var colaPlomoZinc = 0;
var colaPlomoFierro = 0;
var colaPlomoInsoluble = 0;
var colaPlomoPlomo = 0;




//CALCULOS DE LA PLATA
var lineaBaseContPlata = 0.329;
var lineaBaseEspumantePlata = 0.329;
var lineaBaseColectorPlata = 0.329;
var lineaBaseNivelPlata = 0.329;
var lineaBaseJgPlata = 0.329;
var lineaActualContenidosAg = 0;
var lineaBaseContenidosAgContAg = 0;
var lineaActualEspumanteAg = 0;
var lineaBaseContenidosAgEspumanteAg = 0;
var lineaActualColectorAg = 0;
var lineaBaseColectorAg = 0;
var lineaActualNivelAg = 0;
var lineaBaseNivelAg = 0;
var lineaActualJgAg = 0;
var lineaBaseJgAg = 0;
var kAg = 0;
var recuperacionPlataPulpa = 0;
var recuperacionPlata = 0;
var contenidosPlataConc = 0;
var contenidosPlataCabeza = 0;
var contenidosPlataCola = 0;
var efectoZNS04Plata = 0;
var efectoCianuroPlata = 0;
var efectoDepresoresPlata = 0;
var plataCola = 0;

//CALCULOS DEL ORO
var lineaBaseContOro = 0.387;
var lineaBaseEspumanteOro = 0.387;
var lineaBaseColectorOro = 0.387;
var lineaBaseNivelOro = 0.387;
var lineaBaseJgOro = 0.387;
var lineaActualContenidosAu = 0;
var lineaBaseContenidosAuContAu = 0;
var lineaActualEspumanteAu = 0;
var lineaBaseContenidosAuEspumanteAu = 0;
var lineaActualColectorAu = 0;
var lineaBaseColectorAu = 0;
var lineaActualNivelAu = 0;
var lineaBaseNivelAu = 0;
var lineaActualJgAu = 0;
var lineaBaseJgAu = 0;
var kAu = 0;
var recuperacionOroPulpa = 0;
var recuperacionOro = 0;
var contenidosOroConc = 0;
var contenidosOroCabeza = 0;
var contenidosOroCola = 0;
var oroCola = 0;
var efectoZNS04Oro = 0;
var efectoCianuroOro = 0;
var efectoDepresoresOro = 0;

//CALCULOS DEL PLOMO
var lineaBaseContPlomo = 0.260;
var lineaBaseEspumantePlomo = 0.260;
var lineaBaseColectorPlomo = 0.260;
var lineaBaseNivelPlomo = 0.260;
var lineaBaseJgPlomo = 0.260;
var lineaActualContenidosPb = 0;
var lineaBaseContenidosPbContPb = 0;
var lineaActualEspumantePb = 0;
var lineaBaseContenidosPbEspumantePb = 0;
var lineaActualColectorPb = 0;
var lineaBaseColectorPb = 0;
var lineaActualNivelPb = 0;
var lineaBaseNivelPb = 0;
var lineaActualJgPb = 0;
var lineaBaseJgPb = 0;
var kPb = 0;
var recuperacionPlomoPulpa = 0;
var recuperacionPlomo = 0;
var contenidosPlomoConc = 0;
var contenidosPlomoCabeza = 0;
var contenidosPlomoCola = 0;
var plomoCola = 0;
var efectoZNS04Plomo = 0;
var efectoCianuroPlomo = 0;
var efectoDepresoresPlomo = 0;

//CALCULOS DEL ZINC
var lineaBaseContZinc = 0.086;
var lineaBaseEspumanteZinc = 0.086;
var lineaBaseColectorZinc = 0.086;
var lineaBaseNivelZinc = 0.086;
var lineaBaseJgZinc = 0.086;
var lineaActualContenidosZn = 0;
var lineaBaseContenidosZnContZn = 0;
var lineaActualEspumanteZn = 0;
var lineaBaseContenidosZnEspumanteZn = 0;
var lineaActualColectorZn = 0;
var lineaBaseColectorZn = 0;
var lineaActualNivelZn = 0;
var lineaBaseNivelZn = 0;
var lineaActualJgZn = 0;
var lineaBaseJgZn = 0;
var kZn = 0;
var recuperacionZincPulpa = 0;
var recuperacionZinc = 0;
var contenidosZincConc = 0;
var contenidosZincCabeza = 0;
var contenidosZincCola = 0;
var ZincCola = 0;
var efectoZNS04Zinc = 0;
var efectoCianuroZinc = 0;
var efectoDepresoresZinc = 0;

//CALCULOS DEL FIERRO
var lineaBaseContFierro = 0.088;
var lineaBaseEspumanteFierro = 0.088;
var lineaBaseColectorFierro = 0.088;
var lineaBaseNivelFierro = 0.088;
var lineaBaseJgFierro = 0.088;
var lineaActualContenidosFe = 0;
var lineaBaseContenidosFeContFe = 0;
var lineaActualEspumanteFe = 0;
var lineaBaseContenidosFeEspumanteFe = 0;
var lineaActualColectorFe = 0;
var lineaBaseColectorFe = 0;
var lineaActualNivelFe = 0;
var lineaBaseNivelFe = 0;
var lineaActualJgFe = 0;
var lineaBaseJgFe = 0;
var kFe = 0;
var recuperacionFierroPulpa = 0;
var recuperacionFierro = 0;
var contenidosFierroConc = 0;
var contenidosFierroCabeza = 0;
var contenidosFierroCola = 0;
var FierroCola = 0;
var efectoZNS04Fierro = 0;
var efectoCianuroFierro = 0;
var efectoDepresoresFierro = 0;

//CALCULOS DEL INSOLUBLE
var lineaBaseContInsoluble = 0.140;
var lineaBaseEspumanteInsoluble = 0.140;
var lineaBaseColectorInsoluble = 0.140;
var lineaBaseNivelInsoluble = 0.140;
var lineaBaseJgInsoluble = 0.140;
var lineaActualContenidosIn = 0;
var lineaBaseContenidosInContIn = 0;
var lineaActualEspumanteIn = 0;
var lineaBaseContenidosInEspumanteIn = 0;
var lineaActualColectorIn = 0;
var lineaBaseColectorIn = 0;
var lineaActualNivelIn = 0;
var lineaBaseNivelIn = 0;
var lineaActualJgIn = 0;
var lineaBaseJgIn = 0;
var kIn = 0;
var recuperacionInsolublePulpa = 0;
var recuperacionInsoluble = 0;
var contenidosInsolubleConc = 0;
var contenidosInsolubleCabeza = 0;
var contenidosInsolubleCola = 0;
var InsolubleCola = 0;
var efectoZNS04Insoluble = 0;
var efectoCianuroInsoluble = 0;
var efectoDepresoresInsoluble = 0;
var verificarInsoluble = 0;

var toneladasConcentrado = 0;
var toneladasConcentradoUno = 0;
var toneladasConcentradoDos = 0;
var toneladasConcentradoTres = 0; 

var toneladaCola = 0;

var toneladaMineral = 0;
var porcentajeSolidos = 0;  
var vuelta = 2;



var txtTonelaje = document.getElementById("txtTonelaje").value;

function keyTonelaje(){
    txtTonelaje = document.getElementById("txtTonelaje").value;
    txtTonelajeDisabled = document.getElementById("txtTonelajeDisabled").value;
    if (txtTonelaje>390) {
        txtTonelaje = 390;
    } else if (txtTonelaje<320){
        txtTonelaje = 320;
    }
    
    document.getElementById("txtTonelajeDisabled").value = txtTonelaje;
    var txtTonelajeDisabled = document.getElementById("txtTonelajeDisabled").value;
    //dimensionesCelda();
    //txtTonelajeDisabled = txtTonelaje;
    txtAguaHora = (txtTonelajeDisabled)*((100-txtPSolidos)/txtPSolidos);
    document.getElementById("txtAguaHora").value = txtAguaHora.toFixed(2);
    txtVolumenPulpaHora = txtAguaHora+(txtTonelajeDisabled/txtGravedadEspecifica);
    document.getElementById("txtVolumenPulpaHora").value = txtVolumenPulpaHora.toFixed(2);
    
    dimensionesCelda();
    keySulfato();
    
   /* txtTiempoResidencia = (txtVolReal/txtVolumenPulpaHora)*60;
    alert(txtVolReal);
    document.getElementById("txtTiempoResidencia").value = txtTiempoResidencia;*/
    //variablesAlimentacion();
    
    cabezaOro = -0.4686+(1.501*plomoCabeza);
    document.getElementById("txtCabezaOro").value = cabezaOro.toFixed(2);
    cabezaPlata = 195.1+(15.12*plomoCabeza);
    document.getElementById("txtCabezaPlata").value = cabezaPlata.toFixed(2);
    cabezaZinc = 0.3444+(1.226*plomoCabeza);
    document.getElementById("txtCabezaZinc").value = cabezaZinc.toFixed(2);
    cabezaFierro = 3.878+(0.5452*plomoCabeza);
    document.getElementById("txtCabezaFierro").value = cabezaFierro.toFixed(2);
    cabezaInsoluble = 69.32-(3.799*plomoCabeza);
    document.getElementById("txtCabezaInsoluble").value = cabezaInsoluble.toFixed(2);


    
    contenidoOro = ((cabezaOro*txtTonelajeDisabled)/1000);
    contenidoPlata = ((cabezaPlata*txtTonelajeDisabled)/1000);
    contenidoPlomo = ((plomoCabeza*txtTonelajeDisabled)/100);
    contenidoZinc = ((cabezaZinc*txtTonelajeDisabled)/100);
    contenidoFierro = ((cabezaFierro*txtTonelajeDisabled)/100);
    contenidoInsoluble = ((cabezaInsoluble*txtTonelajeDisabled)/100);
    keyColector();
    keyEspumante();
    variablesRespuesta();
    toneladasConcentrados();

    //alert(contenidoPlomo);
    
    
}

function keyDiametroAgitador(){
    var txtDiametroAgitador  = document.getElementById("txtDiametroAgitador").value;
    txtAreaEfectiva = (3.1416*Math.pow(txtDiametroCelda/2,2))-(3.1416*Math.pow(txtDiametroAgitador/2,2));
    document.getElementById("txtAreaEfectiva").value = txtAreaEfectiva.toFixed(2);
    txtVolEfectivo = txtAlturaCelda * ((3.1416*Math.pow(txtDiametroCelda/2,2))-(3.1416*Math.pow(txtDiametroAgitador/2,2)))-txtNivelDisabled*((3.1416*Math.pow(txtDiametroCelda/2,2))-(3.1416*Math.pow(txtDiametroAgitador/2,2)));
    document.getElementById("txtVolEfectivo").value = txtVolEfectivo.toFixed(2);
    txtVolReal = txtVolEfectivo - (((txtAireRetenido)*(txtVolEfectivo))/100);
    document.getElementById("txtVolReal").value = txtVolReal.toFixed(2);
   
}

function keyDiametroCelda(){
    var txtDiametroAgitador  = document.getElementById("txtDiametroAgitador").value;
    var txtDiametroCelda  = document.getElementById("txtDiametroCelda").value;
    txtAreaEfectiva = (3.1416*Math.pow(txtDiametroCelda/2,2))-(3.1416*Math.pow(txtDiametroAgitador/2,2));
    document.getElementById("txtAreaEfectiva").value = txtAreaEfectiva.toFixed(2);
    txtPerimetroCelda = 2 * 3.1416 *(txtDiametroCelda/2);
    document.getElementById("txtPerimetroCelda").value = txtPerimetroCelda.toFixed(2);
    txtVolEfectivo = txtAlturaCelda * ((3.1416*Math.pow(txtDiametroCelda/2,2))-(3.1416*Math.pow(txtDiametroAgitador/2,2)))-txtNivelDisabled*((3.1416*Math.pow(txtDiametroCelda/2,2))-(3.1416*Math.pow(txtDiametroAgitador/2,2)));
    document.getElementById("txtVolEfectivo").value = txtVolEfectivo.toFixed(2);
    txtVolReal = txtVolEfectivo - (((txtAireRetenido)*(txtVolEfectivo))/100);
    document.getElementById("txtVolReal").value = txtVolReal.toFixed(2);
   
}

function keyPSolidos(){
    txtTonelaje = document.getElementById("txtTonelaje").value;
    txtPSolidos = document.getElementById("txtPSolidos").value;
    if (txtTonelaje>390) {
        txtTonelaje = 390;
    } else if (txtTonelaje<320){
        txtTonelaje = 320;
    }
    
    document.getElementById("txtTonelajeDisabled").value = txtTonelaje;
    txtAguaHora = (txtTonelaje)*((100-txtPSolidos)/txtPSolidos);
    document.getElementById("txtAguaHora").value = txtAguaHora.toFixed(2);
    txtVolumenPulpaHora = txtAguaHora+(txtTonelaje/txtGravedadEspecifica);
    document.getElementById("txtVolumenPulpaHora").value = txtVolumenPulpaHora.toFixed(2);
    txtTiempoResidencia = (txtVolReal/txtVolumenPulpaHora)*60;
    document.getElementById("txtTiempoResidencia").value = txtTiempoResidencia.toFixed(2);
    if (txtPSolidos>36) {
        txtPSolidosDisabled = 36;
    } else if ( txtPSolidos<30){
        txtPSolidosDisabled = 30;
    } else {
        txtPSolidosDisabled = txtPSolidos;
    }

    document.getElementById("txtPSolidosDisabled").value = txtPSolidosDisabled;
    keyTonelaje();
    variablesRespuesta();
    /*efectoDepresores();
    lineasActualesBases();
    toneladasConcentrados();*/
    
}

function keyAlturaCelda(){
    var txtDiametroAgitador  = document.getElementById("txtDiametroAgitador").value;
    var txtDiametroCelda  = document.getElementById("txtDiametroCelda").value;
    var txtAlturaCelda  = document.getElementById("txtAlturaCelda").value;
    txtAreaEfectiva = (3.1416*Math.pow(txtDiametroCelda/2,2))-(3.1416*Math.pow(txtDiametroAgitador/2,2));

    txtPerimetroCelda = 2 * 3.1416 *(txtDiametroCelda/2);
    
    txtVolEfectivo = txtAlturaCelda * ((3.1416*Math.pow(txtDiametroCelda/2,2))-(3.1416*Math.pow(txtDiametroAgitador/2,2)))-txtNivelDisabled*((3.1416*Math.pow(txtDiametroCelda/2,2))-(3.1416*Math.pow(txtDiametroAgitador/2,2)));
    document.getElementById("txtVolEfectivo").value = txtVolEfectivo.toFixed(2);
    txtVolReal = txtVolEfectivo - (((txtAireRetenido)*(txtVolEfectivo))/100);
    document.getElementById("txtVolReal").value = txtVolReal.toFixed(2);
   
}

function keyAire(){
    txtAire = document.getElementById("txtAire").value;

    if(txtAire<1){
        txtAireDisabled = 0;
    } else if (txtAire>19){
        txtAireDisabled = 19;
    } else {
        txtAireDisabled=txtAire;

    } 

    document.getElementById("txtAireDisabled").value = txtAireDisabled;
    txtEspumanteVR = document.getElementById("txtEspumanteVR").value;
    txtVelocidadSuperficial = document.getElementById("txtVelocidadSuperficial").value;
    txtNivelDisabled = document.getElementById("txtNivelDisabled").value;

    txtAireRetenido = 1.77+0.714*(txtEspumanteVR)-2.18*(txtVelocidadSuperficial)-12.29*(txtNivelDisabled);

    document.getElementById("txtAireRetenido").value = txtAireRetenido.toFixed(2);
    variablesRespuesta();
    efectoDepresores();
    lineasActualesBases();
    toneladasConcentrados();
}

function keyNivel(){
    var txtNivel = document.getElementById("txtNivel").value;

    if (txtNivel>-0.03) {
        txtNivelDisabled = -0.03;
    } else if (txtNivel<-0.5){
        txtNivelDisabled = -0.5;
    } else {
        txtNivelDisabled = txtNivel;
    }
    document.getElementById("txtNivelDisabled").value = txtNivelDisabled;
    variablesRespuesta();
    efectoDepresores();
    lineasActualesBases();
    toneladasConcentrados();
}

function keyColector(){
    var txtColectorVC = document.getElementById("txtColectorVC").value;
    if (txtColectorVC<0) {
        txtColectorVCDisabled = txtColectorVC;
    } else if (txtColectorVC>1200){
        txtColectorVCDisabled = 1200;
    } else {
        txtColectorVCDisabled = txtColectorVC;
    }

    document.getElementById("txtColectorVCDisabled").value = txtColectorVCDisabled;

    var txtColectorVCDisabled = document.getElementById("txtColectorVCDisabled").value;
    var txtColectorCR = document.getElementById("txtColectorCR").value;
    var txtTonelajeDisabled = document.getElementById("txtTonelajeDisabled").value;

    txtColectorVR = (txtColectorVCDisabled*(60)*(txtColectorCR/100))/txtTonelajeDisabled;

    document.getElementById("txtColectorVR").value = txtColectorVR.toFixed(2);

    variablesRespuesta();
    efectoDepresores();
    lineasActualesBases();
    toneladasConcentrados();


}

function keyEspumante(){
    var txtEspumanteVC = document.getElementById("txtEspumanteVC").value;
    if (txtEspumanteVC<0) {
        txtEspumanteVCDisabled = 0;
    } else if (txtEspumanteVC>240){
        txtEspumanteVCDisabled = 240;
    } else {
        txtEspumanteVCDisabled = txtEspumanteVC;
    }

    document.getElementById("txtEspumanteVCDisabled").value = txtEspumanteVCDisabled;


    
    //txtEspumanteVCDisabled = document.getElementById("txtEspumanteVCDisabled").value;
    txtEspumanteCR = document.getElementById("txtEspumanteCR").value;
    txtAguaTurno = document.getElementById("txtAguaTurno").value;

    txtEspumanteVR = (txtEspumanteVCDisabled*(60)*(txtEspumanteCR/100))/txtAguaHora;

    document.getElementById("txtEspumanteVR").value = txtEspumanteVR.toFixed(2);
    variablesRespuesta();
    efectoDepresores();
    lineasActualesBases();
    toneladasConcentrados();


}

function keySulfato(){
    txtSulfatoZincVC = document.getElementById("txtSulfatoZincVC").value;
    if (txtSulfatoZincVC>7000) {
        txtSulfatoZincVCDisabled = 7000;
    } else if (txtSulfatoZincVC<0){
        txtSulfatoZincVCDisabled = 0;
    } else {
        txtSulfatoZincVCDisabled = txtSulfatoZincVC;
    }

    document.getElementById("txtSulfatoZincVCDisabled").value = txtSulfatoZincVCDisabled;

    txtSulfatoZincCR = document.getElementById("txtSulfatoZincCR").value;
    txtTonelajeDisabled = document.getElementById("txtTonelajeDisabled").value;
    txtSulfatoZincVR = (txtSulfatoZincVCDisabled*(60)*(txtSulfatoZincCR/100))/txtTonelajeDisabled;
    document.getElementById("txtSulfatoZincVR").value = txtSulfatoZincVR.toFixed(2);
    variablesRespuesta();
    efectoDepresores();
    lineasActualesBases();
    toneladasConcentrados();
}

function keyCianuro(){
    txtCianuroVC = document.getElementById("txtCianuroVC").value;
    //alert();
    if (txtCianuroVC>900) {
        txtCianuroVCDisabled = 900;
    } else if (txtCianuroVC<0){
        txtCianuroVCDisabled = 0;
    } else {
        txtCianuroVCDisabled = txtCianuroVC;
    }

    document.getElementById("txtCianuroVCDisabled").value = txtCianuroVCDisabled;

    txtCianuroCR = document.getElementById("txtCianuroCR").value;
    txtTonelajeDisabled = document.getElementById("txtTonelajeDisabled").value;
    txtCianuroVR = (txtCianuroVCDisabled*(60)*(txtCianuroCR/100))/txtTonelajeDisabled;
    document.getElementById("txtCianuroVR").value = txtCianuroVR.toFixed(2);
    variablesRespuesta();
    efectoDepresores();
    lineasActualesBases();
    toneladasConcentrados();
}



function tonelajeTurno(){
    txtTonelajeDisabled = document.getElementById("txtTonelajeDisabled").value;
    if (timeleft==0){
        txtTonelajeTurnoDisabled = 0;
    } else {
        txtTonelajeTurnoDisabled = (txtTonelajeDisabled * counterH) /60;

    }
    document.getElementById("txtTonelajeTurnoDisabled").value = txtTonelajeTurnoDisabled;
}

function aguaTurno(){
    txtTonelajeTurnoDisabled = document.getElementById("txtTonelajeTurnoDisabled").value;
    txtPSolidosDisabled = document.getElementById("txtPSolidosDisabled").value;
    txtAguaTurno = txtTonelajeTurnoDisabled*(100-txtPSolidosDisabled)/txtPSolidosDisabled;
    document.getElementById("txtAguaTurno").value = txtAguaTurno.toFixed(2);
}

function volumenPulpa(){
    /*txtAguaTurno = document.getElementById("txtAguaTurno").value; 
    txtTonelajeTurnoDisabled = document.getElementById("txtTonelajeTurnoDisabled").value
    txtGravedadEspecifica = document.getElementById("txtGravedadEspecifica").value;*/
    txtVolumenPulpaTurno =txtAguaTurno+(txtTonelajeTurnoDisabled/txtGravedadEspecifica);
    

    document.getElementById("txtVolumenPulpaTurno").value = txtVolumenPulpaTurno.toFixed(2);
}

function efectoDepresores(){
    txtSulfatoZincVR = document.getElementById("txtSulfatoZincVR").value
    txtCianuroVR = document.getElementById("txtCianuroVR").value


    efectoZNS04Plata = (-4 ) * (1-Math.exp(-0.03*txtSulfatoZincVR));
    efectoCianuroPlata = (-10) * (1-Math.exp(-0.1*txtCianuroVR));
    efectoDepresoresPlata = efectoZNS04Plata + efectoCianuroPlata;
    efectoCianuroOro = (-15) * (1-Math.exp(-0.09*txtCianuroVR));
    efectoDepresoresOro = efectoZNS04Oro + efectoCianuroOro;
    efectoZNS04Zinc = (-13 ) * (1-Math.exp(-0.055*txtSulfatoZincVR));
    efectoCianuroZinc = (-6) * (1-Math.exp(-0.12*txtCianuroVR));
    efectoDepresoresZinc = efectoZNS04Zinc + efectoCianuroZinc;
    //alert(efectoCianuroZinc);
    efectoCianuroFierro = (-7) * (1-Math.exp(-0.3*txtCianuroVR));
    efectoDepresoresFierro = efectoZNS04Fierro + efectoCianuroFierro;
    
    
}

function lineasActualesBases(){
    txtTonelajeDisabled = document.getElementById("txtTonelajeDisabled").value;
    txtEspumanteVR = document.getElementById("txtEspumanteVR").value;
    txtColectorVR = document.getElementById("txtColectorVR").value;
    txtNivelDisabled = document.getElementById("txtNivelDisabled").value;
    txtVelocidadSuperficial = document.getElementById("txtVelocidadSuperficial").value;
    txtTiempoResidencia = document.getElementById("txtTiempoResidencia").value;

    lineaActualContenidosAg = (-0.182)*(Math.log(contenidoPlomo))+0.6751;
    lineaBaseContenidosAgContAg = (lineaActualContenidosAg-lineaBaseContPlata)/(lineaBaseContPlata);
    lineaActualEspumanteAg = (0.0346*txtEspumanteVR)+(-0.0870);
    lineaBaseContenidosAgEspumanteAg = (lineaActualEspumanteAg - lineaBaseEspumantePlata)/lineaBaseEspumantePlata;
    lineaActualColectorAg = (0.0126*txtColectorVR)+0.0602;
    lineaBaseColectorAg = (lineaActualColectorAg-lineaBaseColectorPlata)/lineaBaseColectorPlata;
    lineaActualNivelAg = (1.2381*txtNivelDisabled)+0.56;
    lineaBaseNivelAg = (lineaActualNivelAg-lineaBaseNivelPlata)/lineaBaseNivelPlata;
    lineaActualJgAg = (-0.3365*Math.pow(txtVelocidadSuperficial,2))+(0.5839*txtVelocidadSuperficial)+0.0861;
    lineaBaseJgAg = (lineaActualJgAg-lineaBaseJgPlata)/lineaBaseJgPlata;
    diferenciaAg = lineaBaseContenidosAgContAg+lineaBaseContenidosAgEspumanteAg+lineaBaseColectorAg+lineaBaseNivelAg+lineaBaseJgAg+1; 
    kAg = ((lineaBaseContPlata+lineaBaseEspumantePlata+lineaBaseColectorPlata+lineaBaseNivelPlata+lineaBaseJgPlata)/5)*(diferenciaAg);
    
    if (kAg < 0.01) {
        kAg = 0.01;
    }

    recuperacionPlataPulpa = (89.94)*(1-(1/(kAg*txtTiempoResidencia))*(1-Math.exp(-kAg*txtTiempoResidencia)))+efectoDepresoresPlata;
    recuperacionPlata = ((recuperacionPlataPulpa/100)*txtAireRecuperado)/(1-recuperacionPlataPulpa/100*(1-txtAireRecuperado));
    contenidosPlataCabeza = (txtTonelajeDisabled * cabezaPlata)/1000;
    contenidosPlataConc = contenidosPlataCabeza * recuperacionPlata;
    contenidosPlataCola = contenidosPlataCabeza-contenidosPlataConc;
   
    //plataCola = (contenidosPlataCola)

    lineaActualContenidosAu = (-0.124)*(Math.log(contenidoPlomo))+0.5904;
    lineaBaseContenidosAuContAu = (lineaActualContenidosAu-lineaBaseContOro)/lineaBaseContOro;
    lineaActualEspumanteAu = (0.0540*txtEspumanteVR)+(-0.2503);
    lineaBaseContenidosAuEspumanteAu = (lineaActualEspumanteAu - lineaBaseEspumanteOro)/lineaBaseEspumanteOro;
    lineaActualColectorAu = 0.0005*Math.pow(txtColectorVR,2)+0.0271*txtColectorVR+0.0004;
    lineaBaseColectorAu = (lineaActualColectorAu-lineaBaseColectorOro)/lineaBaseColectorOro;
    lineaActualNivelAu = (1.5018*txtNivelDisabled)+0.6513;
    lineaBaseNivelAu = (lineaActualNivelAu-lineaBaseNivelOro)/lineaBaseNivelOro;
    lineaActualJgAu = (-0.4367*Math.pow(txtVelocidadSuperficial,2))+(0.7584*txtVelocidadSuperficial)+0.0678;
    lineaBaseJgAu = (lineaActualJgAu-lineaBaseJgOro)/lineaBaseJgOro;
    diferenciaAu = lineaBaseContenidosAuContAu+lineaBaseContenidosAuEspumanteAu+lineaBaseColectorAu+lineaBaseNivelAu+lineaBaseJgAu+1; 
    kAu = ((lineaBaseContOro+lineaBaseEspumanteOro+lineaBaseColectorOro+lineaBaseNivelOro+lineaBaseJgOro)/5)*(diferenciaAu);
    
    if (kAu < 0.01) {
        kAu = 0.01;
    }

    recuperacionOroPulpa = (86)*(1-(1/(kAu*txtTiempoResidencia))*(1-Math.exp(-kAu*txtTiempoResidencia)))+efectoDepresoresOro;
    recuperacionOro = ((recuperacionOroPulpa/100)*txtAireRecuperado)/(1-recuperacionOroPulpa/100*(1-txtAireRecuperado));
    contenidosOroCabeza = (txtTonelajeDisabled * cabezaOro)/1000;
    contenidosOroConc = contenidosOroCabeza * recuperacionOro;
    contenidosOroCola = contenidosOroCabeza-contenidosOroConc;

    //print('contenido '+contenidosOroCabeza);
    
    //plataCola = (contenidosPlataCola)

    lineaActualContenidosPb = (0.7723)*(Math.pow(contenidoPlomo,-0.617));
    lineaBaseContenidosPbContPb = (lineaActualContenidosPb-lineaBaseContPlomo)/lineaBaseContPlomo;
    lineaActualEspumantePb = (0.0383*txtEspumanteVR)+(-0.1941);
    lineaBaseContenidosPbEspumantePb = (lineaActualEspumantePb - lineaBaseEspumantePlomo)/lineaBaseEspumantePlomo;
    lineaActualColectorPb = 0.0004*Math.pow(txtColectorVR,2)+0.0149*txtColectorVR+0.01;
    lineaBaseColectorPb = (lineaActualColectorPb-lineaBaseColectorPlomo)/lineaBaseColectorPlomo;
    lineaActualNivelPb = (1.3131*txtNivelDisabled)+0.5134;
    lineaBaseNivelPb = (lineaActualNivelPb-lineaBaseNivelPlomo)/lineaBaseNivelPlomo;
    lineaActualJgPb = (-0.4506*Math.pow(txtVelocidadSuperficial,2))+(0.6986*txtVelocidadSuperficial)+0.0113;
    lineaBaseJgPb = (lineaActualJgPb-lineaBaseJgPlomo)/lineaBaseJgPlomo;
    diferenciaPb = lineaBaseContenidosPbContPb+lineaBaseContenidosPbEspumantePb+lineaBaseColectorPb+lineaBaseNivelPb+lineaBaseJgPb+1; 
    kPb = ((lineaBaseContPlomo+lineaBaseEspumantePlomo+lineaBaseColectorPlomo+lineaBaseNivelPlomo+lineaBaseJgPlomo)/5)*(diferenciaPb);
    
    if (kPb < 0.03) {
        kPb = 0.03;
    }

    recuperacionPlomoPulpa = (95)*(1-(1/(kPb*txtTiempoResidencia))*(1-Math.exp(-kPb*txtTiempoResidencia)))+efectoDepresoresPlomo;
    recuperacionPlomo = ((recuperacionPlomoPulpa/100)*txtAireRecuperado)/(1-recuperacionPlomoPulpa/100*(1-txtAireRecuperado));
    contenidosPlomoCabeza = (txtTonelajeDisabled * plomoCabeza)/100;
    contenidosPlomoConc = contenidosPlomoCabeza * recuperacionPlomo;
    contenidosPlomoCola = contenidosPlomoCabeza-contenidosPlomoConc;
    //plataCola = (contenidosPlataCola)


   

    lineaActualContenidosZn = (-0.0051)*contenidoPlomo+0.1184;
    lineaBaseContenidosZnContZn = (lineaActualContenidosZn-lineaBaseContZinc)/lineaBaseContZinc;
    lineaActualEspumanteZn = (0.0093*txtEspumanteVR)+(-0.0277);
    lineaBaseContenidosZnEspumanteZn = (lineaActualEspumanteZn - lineaBaseEspumanteZinc)/lineaBaseEspumanteZinc;
    lineaActualColectorZn = 0.0137*Math.pow(2.71828,0.1437*txtColectorVR);
    lineaBaseColectorZn = (lineaActualColectorZn-lineaBaseColectorZinc)/lineaBaseColectorZinc;
    lineaActualNivelZn = (0.2210*txtNivelDisabled)+0.1243;
    lineaBaseNivelZn = (lineaActualNivelZn-lineaBaseNivelZinc)/lineaBaseNivelZinc;
    lineaActualJgZn = (-0.1033*Math.pow(txtVelocidadSuperficial,2))+(0.1785*txtVelocidadSuperficial)+0.0119;
    lineaBaseJgZn = (lineaActualJgZn-lineaBaseJgZinc)/lineaBaseJgZinc;
    diferenciaZn = lineaBaseContenidosZnContZn+lineaBaseContenidosZnEspumanteZn+lineaBaseColectorZn+lineaBaseNivelZn+lineaBaseJgZn+1; 
    kZn = ((lineaBaseContZinc+lineaBaseEspumanteZinc+lineaBaseColectorZinc+lineaBaseNivelZinc+lineaBaseJgZinc)/5)*(diferenciaZn);
    
    if (kZn < 0.01) {
        kZn = 0.01;
    }

    recuperacionZincPulpa = (80)*(1-(1/(kZn*txtTiempoResidencia))*(1-Math.exp(-kZn*txtTiempoResidencia)))+efectoDepresoresZinc;
    recuperacionZinc = ((recuperacionZincPulpa/100)*txtAireRecuperado)/(1-recuperacionZincPulpa/100*(1-txtAireRecuperado));
    contenidosZincCabeza = (txtTonelajeDisabled * cabezaZinc)/100;
    contenidosZincConc = contenidosZincCabeza * recuperacionZinc;
    contenidosZincCola = contenidosZincCabeza-contenidosZincConc;
    //plataCola = (contenidosPlataCola)

    lineaActualContenidosFe = (-0.052)*Math.log(contenidoPlomo)+0.1805;
    lineaBaseContenidosFeContFe = (lineaActualContenidosFe-lineaBaseContFierro)/lineaBaseContFierro;
    lineaActualEspumanteFe = (0.0114*txtEspumanteVR)+(-0.0525);
    lineaBaseContenidosFeEspumanteFe = (lineaActualEspumanteFe - lineaBaseEspumanteFierro)/lineaBaseEspumanteFierro;
    lineaActualColectorFe = 0.0198*Math.pow(2.71828,0.1222*txtColectorVR);
    lineaBaseColectorFe = (lineaActualColectorFe-lineaBaseColectorFierro)/lineaBaseColectorFierro;
    lineaActualNivelFe = (0.3806*txtNivelDisabled)+0.1564;
    lineaBaseNivelFe = (lineaActualNivelFe-lineaBaseNivelFierro)/lineaBaseNivelFierro;
    lineaActualJgFe = (-0.1385*Math.pow(txtVelocidadSuperficial,2))+(0.2403*txtVelocidadSuperficial)-0.0121;
    lineaBaseJgFe = (lineaActualJgFe-lineaBaseJgFierro)/lineaBaseJgFierro;
    diferenciaFe = lineaBaseContenidosFeContFe+lineaBaseContenidosFeEspumanteFe+lineaBaseColectorFe+lineaBaseNivelFe+lineaBaseJgFe+1; 
    kFe = ((lineaBaseContFierro+lineaBaseEspumanteFierro+lineaBaseColectorFierro+lineaBaseNivelFierro+lineaBaseJgFierro)/5)*(diferenciaFe);
    
    if (kFe < 0.057) {
        kFe = 0.057;
    }

    recuperacionFierroPulpa = (38)*(1-(1/(kFe*txtTiempoResidencia))*(1-Math.exp(-kFe*txtTiempoResidencia)))+efectoDepresoresFierro;
    recuperacionFierro = ((recuperacionFierroPulpa/100)*txtAireRecuperado)/(1-recuperacionFierroPulpa/100*(1-txtAireRecuperado));
    contenidosFierroCabeza = (txtTonelajeDisabled * cabezaFierro)/100;
    contenidosFierroConc = contenidosFierroCabeza * recuperacionFierro;
    contenidosFierroCola = contenidosFierroCabeza-contenidosFierroConc;
    //plataCola = (contenidosPlataCola)

    lineaActualContenidosIn = (-0.0040)*(contenidoPlomo)+0.1625;
    lineaBaseContenidosInContIn = (lineaActualContenidosIn-lineaBaseContInsoluble)/lineaBaseContInsoluble;
    lineaActualEspumanteIn = (0.0093*Math.pow(2.71828,0.2307*txtEspumanteVR));
    lineaBaseContenidosInEspumanteIn = (lineaActualEspumanteIn - lineaBaseEspumanteInsoluble)/lineaBaseEspumanteInsoluble;
    lineaActualColectorIn = 0.0543*Math.pow(2.71828,0.0804*txtColectorVR);
    lineaBaseColectorIn = (lineaActualColectorIn-lineaBaseColectorInsoluble)/lineaBaseColectorInsoluble;
    lineaActualNivelIn = (0.5327*Math.pow(2.71828,7.5329*txtNivelDisabled));
    lineaBaseNivelIn = (lineaActualNivelIn-lineaBaseNivelInsoluble)/lineaBaseNivelInsoluble;
    lineaActualJgIn = (0.0167*Math.pow(2.71828,3.0436*txtVelocidadSuperficial));
    lineaBaseJgIn = (lineaActualJgIn-lineaBaseJgInsoluble)/lineaBaseJgInsoluble;
    diferenciaIn = lineaBaseContenidosInContIn+lineaBaseContenidosInEspumanteIn+lineaBaseColectorIn+lineaBaseNivelIn+lineaBaseJgIn+1; 
    kIn = ((lineaBaseContInsoluble+lineaBaseEspumanteInsoluble+lineaBaseColectorInsoluble+lineaBaseNivelInsoluble+lineaBaseJgInsoluble)/5)*(diferenciaIn);
    
    if (kIn < 0.057) {
        kIn = 0.057;
    }

    

    verificarInsoluble = ((0.0452+0.2687*txtNivelDisabled+0.0537*txtVelocidadSuperficial+0.00284*txtEspumanteVR-0.00526*txtColectorVR+0.00202*contenidosPlomoCabeza)/txtAireRecuperado)*100;
    //plataCola = (contenidosPlataCola)
    if (verificarInsoluble < 0) {
        verificarInsoluble = 0.48; 
    }

    recuperacionInsolublePulpa = verificarInsoluble;
    recuperacionInsoluble = ((recuperacionInsolublePulpa/100)*txtAireRecuperado)/(1-recuperacionInsolublePulpa/100*(1-txtAireRecuperado));
    
    //CONTENIDOS CABEZA
    contenidosInsolubleCabeza = (txtTonelajeDisabled * cabezaInsoluble)/100;
    //CONTENIDOS DE PLOMO
    contenidosInsolubleConc = contenidosInsolubleCabeza * recuperacionInsoluble;
    contenidosInsolubleCola = contenidosInsolubleCabeza-contenidosInsolubleConc;

    //COLAS PLOMO
    colaPlomoOro = (contenidosOroCola*1000)/toneladaCola;
    colaPlomoPlata = (contenidosPlataCola*1000)/toneladaCola;
    colaPlomoZinc = (contenidosZincCola*100)/toneladaCola;
    colaPlomoFierro = (contenidosFierroCola*100)/toneladaCola;
    colaPlomoInsoluble = (contenidosInsolubleCola*100)/toneladaCola;
    colaPlomoPlomo = (contenidosPlomoCola*100)/toneladaCola;


    //alert(contenidosInsolubleConc);
    
}

function valoresContenidos(){
    var txtTonelajeDisabled = document.getElementById("txtTonelajeDisabled").value;
    cabezaOro = -0.4686+(1.501*plomoCabeza);
    document.getElementById("txtCabezaOro").value = cabezaOro.toFixed(2);
    cabezaPlata = 195.1+(15.12*plomoCabeza);
    document.getElementById("txtCabezaPlata").value = cabezaPlata.toFixed(2);
    cabezaZinc = 0.3444+(1.226*plomoCabeza);
    document.getElementById("txtCabezaZinc").value = cabezaZinc.toFixed(2);
    cabezaFierro = 3.878+(0.5452*plomoCabeza);
    document.getElementById("txtCabezaFierro").value = cabezaFierro.toFixed(2);
    cabezaInsoluble = 69.32-(3.799*plomoCabeza);
    document.getElementById("txtCabezaInsoluble").value = cabezaInsoluble.toFixed(2);

    document.getElementById("txtCabezaPlomo").value = plomoCabeza.toFixed(2);






    
    contenidoOro = ((cabezaOro*txtTonelajeDisabled)/1000);
    contenidoPlata = ((cabezaPlata*txtTonelajeDisabled)/1000);
    contenidoPlomo = ((plomoCabeza*txtTonelajeDisabled)/100);
    contenidoZinc = ((cabezaZinc*txtTonelajeDisabled)/100);
    contenidoFierro = ((cabezaFierro*txtTonelajeDisabled)/100);
    contenidoInsoluble = ((cabezaInsoluble*txtTonelajeDisabled)/100);


}

function ensaye(){

    txtVelocidadDerrame = document.getElementById("txtVelocidadDerrame").value;
    txtTonelajeConcentrado = document.getElementById("txtTonelajeConcentrado").value;

    if(toneladasConcentradoDos=0) {
        leyConcOro = 0;
        leyConcPlata = 0;
        leyConcPlomo = 0;
        leyConcZinc = 0;
        leyConcFierro = 0;
        leyConcInsoluble = 0;
    } else {
        leyConcOro = contenidosOroConc*1000/toneladasConcentradoTres;
        //print("LEY:"+contenidosPlataConc+" "+toneladasConcentradoTres);
        leyConcPlata = (contenidosPlataConc*1000)/toneladasConcentradoTres;
        //print("LEY: "+leyConcPlata+" "+contenidosPlataConc+" "+toneladasConcentradoTres);
        leyConcPlomo = contenidosPlomoConc*100/toneladasConcentradoTres;
        leyConcZinc = contenidosZincConc*100/toneladasConcentradoTres;
        leyConcFierro = contenidosFierroConc*100/toneladasConcentradoTres;
        leyConcInsoluble = contenidosInsolubleConc*100/toneladasConcentradoTres;
    }



    if (txtVelocidadDerrame = 0) {
        colaOro = cabezaOro;
    } else {
        colaOro = colaPlomoOro;
    }

    if (velocidadDerrameDos = 0){
        colaPlata = cabezaPlata;
        colaPlomo = cabezaPlata;
        colaZinc = cabezaPlata;
        colaFierro = cabezaPlata;
        colaInsoluble = cabezaPlata;
    } else {
        colaPlata = colaPlomoPlata;
        colaPlomo = colaPlomoPlomo;
        colaZinc = colaPlomoZinc;
        colaFierro = colaPlomoFierro;
        colaInsoluble = colaPlomoInsoluble;
    }

    if (isNaN(leyConcOro)) {
        leyConcOro = 0;
    }
    if (isNaN(leyConcPlata)) {
        leyConcPlata = 0;
    }
    if (isNaN(leyConcPlomo)) {
        leyConcPlomo = 0;
    }
    if (isNaN(leyConcZinc)) {
        leyConcZinc = 0;
    }
    if (isNaN(leyConcFierro)) {
        leyConcFierro = 0;
    }
    if (isNaN(leyConcInsoluble)) {
        leyConcInsoluble = 0;
    }

    document.getElementById("txtConcOro").value = leyConcOro.toFixed(2);
    document.getElementById("txtConcPlata").value = leyConcPlata.toFixed(2);
    document.getElementById("txtConcPlomo").value = leyConcPlomo.toFixed(2);
    document.getElementById("txtConcZinc").value = leyConcZinc.toFixed(2);
    document.getElementById("txtConcFierro").value = leyConcFierro.toFixed(2);
    document.getElementById("txtConcInsoluble").value = leyConcInsoluble.toFixed(2);
    print("SSSSS "+txtTonelajeConcentrado);

    if (isNaN(colaOro)) {
        colaOro = cabezaOro;
    }
    if (isNaN(colaPlata)) {
        colaPlata = cabezaPlata;
    }
    if (isNaN(colaPlomo)) {
        colaPlomo = plomoCabeza;
    }
    if (isNaN(colaZinc)) {
        colaZinc = cabezaZinc;
    }
    if (isNaN(colaFierro)) {
        colaFierro = cabezaFierro;
    }
    if (isNaN(colaInsoluble)) {
        colaInsoluble = cabezaInsoluble;
    }
    document.getElementById("txtColaOro").value = colaOro.toFixed(2);
    document.getElementById("txtColaPlata").value = colaPlata.toFixed(2);
    document.getElementById("txtColaPlomo").value = colaPlomo.toFixed(2);
    document.getElementById("txtColaZinc").value = colaZinc.toFixed(2);
    document.getElementById("txtColaFierro").value = colaFierro.toFixed(2);
    document.getElementById("txtColaInsoluble").value = colaInsoluble.toFixed(2);



}

function dimensionesCelda(){
    txtAreaEfectiva = (3.1416*Math.pow(txtDiametroCelda/2,2))-(3.1416*Math.pow(txtDiametroAgitador/2,2));
    document.getElementById("txtAreaEfectiva").value = txtAreaEfectiva.toFixed(2);
    txtPerimetroCelda = 2 * 3.1416 *(txtDiametroCelda/2);
    document.getElementById("txtPerimetroCelda").value = txtPerimetroCelda.toFixed(2);
    txtVolEfectivo = (txtAlturaCelda * ((3.1416*Math.pow(txtDiametroCelda/2,2))-(3.1416*Math.pow(txtDiametroAgitador/2,2))))-(txtNivelDisabled*((3.1416*Math.pow(txtDiametroCelda/2,2))-(3.1416*Math.pow(txtDiametroAgitador/2,2))));
    document.getElementById("txtVolEfectivo").value = txtVolEfectivo.toFixed(2);
    //print('alerta '+txtVolEfectivo+' '+txtAireRetenido);
    txtVolReal = txtVolEfectivo - (((txtAireRetenido)*(txtVolEfectivo))/100);
    document.getElementById("txtVolReal").value = txtVolReal.toFixed(2);
    txtVolumenPulpaHora = document.getElementById("txtVolumenPulpaHora").value;
    txtTiempoResidencia = (txtVolReal/txtVolumenPulpaHora)*60;
    //alert(txtVolReal);
    document.getElementById("txtTiempoResidencia").value = txtTiempoResidencia.toFixed(2);
    
}

function variablesAlimentacion(){
    //var txtPSolidosDisabled = document.getElementById("txtPSolidosDisabled").value;
    /*txtAguaHora = (txtTonelajeDisabled)*((100-txtPSolidos)/txtPSolidos);
    txtVolumenPulpaHora = txtAguaHora+(txtTonelajeDisabled/txtGravedadEspecifica);
    txtTiempoResidencia = (txtVolReal/txtVolumenPulpaHora)*60;*/
    txtPSolidos = document.getElementById("txtPSolidos").value;
    if (txtPSolidos>36) {
        txtPSolidosDisabled = 36;
    } else if ( txtPSolidos<30){
        txtPSolidosDisabled = 30;
    } else {
        txtPSolidosDisabled = txtPSolidos;
    }

    document.getElementById("txtPSolidosDisabled").value = txtPSolidosDisabled;


    
    
}

var velocidadDerrameDos = 0;

function variablesRespuesta(){
    /*txtColectorVR = (txtColectorVCDisabled*(60)*(txtColectorCR/100))/txtTonelaje;
    txtEspumanteVR = (txtEspumanteVCDisabled*(60)*(txtEspumanteCR/100))/txtAguaTurno;
    txtSulfatoZincVR = (txtSulfatoZincVCDisabled*(60)*(txtSulfatoZincCR/100))/txtTonelaje;
    txtCianuroVR = (txtCianuroVCDisabled*(60)*(txtCianuroCR/100))/txtTonelaje;*/

    txtVelocidadSuperficial = ((txtAireDisabled*Math.pow(100,3))/60)/(txtAreaEfectiva*Math.pow(100,2));
    document.getElementById("txtVelocidadSuperficial").value = txtVelocidadSuperficial.toFixed(2);
    txtAireRetenido = 1.77+0.714*(txtEspumanteVR)-2.18*(txtVelocidadSuperficial)-12.29*(txtNivelDisabled);
    document.getElementById("txtAireRetenido").value = txtAireRetenido.toFixed(2);
    txtFlujoSuperficial = txtAireRetenido * 5.59;
    document.getElementById("txtFlujoSuperficial").value = txtFlujoSuperficial.toFixed(2);
    txtDiametroBurbujas = (6*txtVelocidadSuperficial*10)/txtFlujoSuperficial.toFixed(2);
    document.getElementById("txtDiametroBurbujas").value = txtDiametroBurbujas.toFixed(2);

    
    //txtRecuperacionAgua = 
    alturaCamaEspumante = -105-(408.3*txtNivelDisabled)+(1.734*txtColectorVR)+(1.83*txtEspumanteVR)+(173.3*txtVelocidadSuperficial)-(4.95*contenidoPlomo)-(535*Math.pow(txtNivelDisabled,2))-(0.0449*Math.pow(txtColectorVR,2))-(0.0059*Math.pow(txtEspumanteVR,2))-(60.3*Math.pow(txtVelocidadSuperficial,2))-(0.0503*Math.pow(contenidoPlomo,2))+((5.99)*(txtNivelDisabled)*(txtColectorVR))-((6.06)*(txtNivelDisabled)*(txtEspumanteVR))+((403)*(txtNivelDisabled)*(txtVelocidadSuperficial))-((11.13)*(txtNivelDisabled)*(contenidoPlomo))+((0.0493)*(txtColectorVR)*(txtEspumanteVR))-((2.5)*(txtEspumanteVR)*(txtVelocidadSuperficial))+((0.0113)*(txtEspumanteVR)*(contenidoPlomo))+((4.63)*(txtVelocidadSuperficial)*(contenidoPlomo));
    //document.getElementById("alturaCamaEspumante").value = alturaCamaEspumante;
    txtVelocidadDerrame = 6.29+(23.88*txtNivelDisabled)+(9.06*txtVelocidadSuperficial)+(0.204*txtEspumanteVR)-(0.587*txtColectorVR)+(0.456*contenidoPlomo);
    if (txtVelocidadDerrame<0) {
        txtVelocidadDerrame = 0;
    }
    document.getElementById("txtVelocidadDerrame").value = txtVelocidadDerrame.toFixed(2);
    airePerdido = (((txtAireDisabled*Math.pow(100,3))/60)-((txtVelocidadDerrame*txtPerimetroCelda*100*alturaCamaEspumante)))/(Math.pow(100,3))*60
    document.getElementById("txtJb").value = airePerdido.toFixed(2);
    txtAlturaCama = (-36.6-(175.4*txtNivelDisabled)+(0.94*txtColectorVR)+(1.95*txtEspumanteVR)
        +(68.3*txtVelocidadSuperficial)-(7.17*contenidoPlomo)-(390*Math.pow(txtNivelDisabled,2))
        -(0.02542*Math.pow(txtColectorVR,2))-(0.0331*Math.pow(txtEspumanteVR,2))
        -(28.9*Math.pow(txtVelocidadSuperficial,2))-(0.059*Math.pow(contenidoPlomo,2))
        +(4.937*txtNivelDisabled*txtColectorVR)-(6.4*txtNivelDisabled*txtEspumanteVR)
        +(194*txtNivelDisabled*txtVelocidadSuperficial)-(18.36*txtNivelDisabled*contenidoPlomo)
        +(0.011*txtColectorVR*txtEspumanteVR)-(1.01*txtColectorVR*txtVelocidadSuperficial)
        +(0.2231*txtColectorVR*contenidoPlomo)-(0.238*txtEspumanteVR*txtVelocidadSuperficial)
        -(0.198*txtEspumanteVR*contenidoPlomo)+(5.09*txtVelocidadSuperficial*contenidoPlomo))*1.1;
    document.getElementById("txtAlturaCama").value = txtAlturaCama.toFixed(2);
    txtAireRecuperado = (txtVelocidadDerrame*txtPerimetroCelda*100*txtAlturaCama)/((txtAireDisabled*Math.pow(100,3))/60);
    if (txtAireRecuperado<0) {
    txtAireRecuperado = 0;
    }
    document.getElementById("txtAireRecuperado").value = txtAireRecuperado.toFixed(2);
     document.getElementById("txtAireRecuperadoP").value = (txtAireRecuperado.toFixed(2)*100)+" %";

    /*if (txtVelocidadDerrame<=0){
        txtRecuperacionAgua = 0;
    } else {
        txtRecuperacionAgua = toneladasConcentradoUno;
    }*/

    txtRecuperacionAgua = ((toneladasConcentrado)*100/porcentajeSolidos)-toneladasConcentradoUno;
    if (isNaN(txtRecuperacionAgua)) {
        txtRecuperacionAgua = 0;
    }
    document.getElementById("txtRecuperacionAgua").value = txtRecuperacionAgua.toFixed(2);
    //print("PORCENTAJE SOLIDOS"+porcentajeSolidos);

    txtAireDisabled = document.getElementById("txtAireDisabled").value
    txtNivelDisabled = document.getElementById("txtNivelDisabled").value
    txtPSolidosDisabled = document.getElementById("txtPSolidosDisabled").value
    txtEspumanteVCDisabled = document.getElementById("txtEspumanteVCDisabled").value

    if (toneladaMineral < 0.001) {
        velocidadDerrameDos = 0;
    } else {
        velocidadDerrameDos = -21.48+0.5134*txtAireDisabled+25.8*txtNivelDisabled+0.0574*txtFlujoSuperficial+0.452*txtPSolidosDisabled+0.0353*txtEspumanteVCDisabled;
    }
    
    
    
}
 

function convertSeconds(s){
    var min = floor(s / 60);
    var sec = s % 60;
    return nf(min,2) + ':'+ nf(sec,2);

}

var vuelta = 1;
var totalToneladaMineral = 0;
var totalPSolidos = 0;
var totalTiempoResidencia = 0;
var totalCabezaOro = 0;
var totalCabezaPlata = 0;
var totalCabezaPlomo = 0;
var totalCabezaZinc = 0;
var totalCabezaFierro = 0;
var totalCabezaInsoluble = 0;

var totalToneladaConc = 0;
var totalConcOro = 0;
var totalConcPlata = 0;
var totalConcPlomo = 0;
var totalConcZinc = 0;
var totalConcFierro = 0;
var totalConcInsoluble = 0;
var totalAireRecuperado = 0;
var totalRecuparacionOro = 0;
var totalRecuperacionPlata = 0;
var totalRecuperacionPlomo = 0;
var totalRecuperacionZinc = 0;
var totalRecuperacionFierro = 0;
var totalRecuperacionInsoluble = 0;

var totalColaPlomoOro = 0;
var totalColaPlomoPlata = 0;
var totalColaPlomoPlomo = 0;
var totalColaPlomoZinc = 0;
var totalColaPlomoFierro = 0;
var totalColaPlomoInsoluble = 0;

var totalZNSO4 = 0;
var totalColector = 0;
var totalEspumante = 0;
var totalNaCN = 0;
var totalAire = 0;
var totalJg = 0;
var totalNivel = 0;
var totalAireRetenido = 0;
var totalTamañoBurbujas = 0;
var totalVelocidadDerrame = 0;

var totalOro = 0;
var totalPlata = 0;
var totalPlomo = 0;
var totalZinc = 0;
var totalInsoluble = 0;
var totalFlete = 0;
var totalMaquila = 0;
var totalPresupuesto = 0;
var totalGanancias = 0;


function llenarTablaCabeza(){
    tabla = document.getElementById("tablaResultado");
    table = document.getElementById("tablaCabeza");
    print("tonelada mineral "+toneladaMineral);
    
    for(var i = 1; i < 2 ; i++)
        {
          // cells
          /*-for(var j = 1; j < table.rows[i].cells.length; j++)
          {
              table.rows[i].cells[j].innerHTML ="mensaje";
          }*/

          tabla.rows[vuelta].cells[1].innerHTML =document.getElementById("txtTonelajeDisabled").value;
          tabla.rows[vuelta].cells[2].innerHTML =document.getElementById("txtPSolidosDisabled").value;
          tabla.rows[vuelta].cells[3].innerHTML =txtTiempoResidencia;
          table.rows[vuelta].cells[1].innerHTML =document.getElementById("txtCabezaOro").value;
          table.rows[vuelta].cells[2].innerHTML =document.getElementById("txtCabezaPlata").value;
          table.rows[vuelta].cells[3].innerHTML =document.getElementById("txtCabezaPlomo").value;
          table.rows[vuelta].cells[4].innerHTML =document.getElementById("txtCabezaZinc").value;
          table.rows[vuelta].cells[5].innerHTML =document.getElementById("txtCabezaFierro").value;
          table.rows[vuelta].cells[6].innerHTML =document.getElementById("txtCabezaInsoluble").value;

        }

        
vuelta++;


}
function llenarTablaLeyConc(){
    tabla = document.getElementById("tablaLeyRec");
    table = document.getElementById("tablaLeyConc");
    print("tonelada mineral "+toneladaMineral);
    
    for(var i = 1; i < 2 ; i++)
        {
          // cells
          /*-for(var j = 1; j < table.rows[i].cells.length; j++)
          {
              table.rows[i].cells[j].innerHTML ="mensaje";
          }*/

          table.rows[vuelta].cells[1].innerHTML =document.getElementById("txtTonelajeConcentrado").value;
          table.rows[vuelta].cells[2].innerHTML =document.getElementById("txtConcOro").value;
          table.rows[vuelta].cells[3].innerHTML =document.getElementById("txtConcPlata").value;
          table.rows[vuelta].cells[4].innerHTML =document.getElementById("txtConcPlomo").value;
          table.rows[vuelta].cells[5].innerHTML =document.getElementById("txtConcZinc").value;
          table.rows[vuelta].cells[6].innerHTML =document.getElementById("txtConcFierro").value;
          table.rows[vuelta].cells[7].innerHTML =document.getElementById("txtConcInsoluble").value;
          tabla.rows[vuelta].cells[1].innerHTML =document.getElementById("txtAireRecuperado").value;
          tabla.rows[vuelta].cells[2].innerHTML =(recuperacionOro*100).toFixed(2);
          tabla.rows[vuelta].cells[3].innerHTML =(recuperacionPlata*100).toFixed(2);
          tabla.rows[vuelta].cells[4].innerHTML =(recuperacionPlomo*100).toFixed(2);
          tabla.rows[vuelta].cells[5].innerHTML =(recuperacionZinc*100).toFixed(2);
          tabla.rows[vuelta].cells[6].innerHTML =(recuperacionFierro*100).toFixed(2);
          tabla.rows[vuelta].cells[7].innerHTML =(recuperacionInsoluble*100).toFixed(2);

        }

        



}
function llenarTablaColasPlomo(){
    table = document.getElementById("tablaColasPlomo");
    for(var i = 1; i < 2 ; i++)
        {
          // cells
          /*-for(var j = 1; j < table.rows[i].cells.length; j++)
          {
              table.rows[i].cells[j].innerHTML ="mensaje";
          }*/

          table.rows[vuelta].cells[1].innerHTML =colaPlomoOro.toFixed(2);
          table.rows[vuelta].cells[2].innerHTML =colaPlomoPlata.toFixed(2);
          table.rows[vuelta].cells[3].innerHTML =colaPlomoPlomo.toFixed(2);
          table.rows[vuelta].cells[4].innerHTML =colaPlomoZinc.toFixed(2);
          table.rows[vuelta].cells[5].innerHTML =colaPlomoFierro.toFixed(2);
          table.rows[vuelta].cells[6].innerHTML =colaPlomoInsoluble.toFixed(2);
          

        }

        



}

function llenarTablaHistorico(){
    tabla = document.getElementById("tablaAire");
    table = document.getElementById("tablaHistorico");
    for(var i = 1; i < 2 ; i++)
        {

          table.rows[vuelta].cells[1].innerHTML =document.getElementById("txtSulfatoZincVR").value;
          table.rows[vuelta].cells[2].innerHTML =document.getElementById("txtColectorVR").value;
          table.rows[vuelta].cells[3].innerHTML =document.getElementById("txtEspumanteVR").value;
          table.rows[vuelta].cells[4].innerHTML =document.getElementById("txtCianuroVR").value;
          tabla.rows[vuelta].cells[1].innerHTML =document.getElementById("txtVelocidadSuperficial").value;
          tabla.rows[vuelta].cells[2].innerHTML =document.getElementById("txtNivel").value;
          tabla.rows[vuelta].cells[3].innerHTML =document.getElementById("txtAireRetenido").value;
          tabla.rows[vuelta].cells[4].innerHTML =document.getElementById("txtDiametroBurbujas").value;
          tabla.rows[vuelta].cells[5].innerHTML =document.getElementById("txtVelocidadDerrame").value;
        }

}




var dividendo = 1;
function calcularTablaCabeza(){
    tabla = document.getElementById("tablaResultado");
    table = document.getElementById("tablaCabeza");
    totalToneladaMineral = 0;
    totalPSolidos = 0;
    totalTiempoResidencia = 0;
    totalCabezaOro = 0;
    totalCabezaPlata = 0;
    totalCabezaPlomo = 0;
    totalCabezaZinc = 0;
    totalCabezaFierro = 0;
    totalCabezaInsoluble = 0;
    var valor = 0;
    
    for(var j = 1; j < vuelta; j++)
        
          {
              valor = parseFloat(tabla.rows[j].cells[1].innerHTML);
              totalToneladaMineral = totalToneladaMineral+valor;
              valor = parseFloat(tabla.rows[j].cells[2].innerHTML);
              totalPSolidos = totalPSolidos + valor;
              valor = parseFloat(tabla.rows[j].cells[3].innerHTML);
              totalTiempoResidencia = totalTiempoResidencia + valor;
              valor = parseFloat(table.rows[j].cells[1].innerHTML);
              totalCabezaOro = totalCabezaOro + valor;
              valor = parseFloat(table.rows[j].cells[2].innerHTML);
              totalCabezaPlata = totalCabezaPlata + valor;
              valor = parseFloat(table.rows[j].cells[3].innerHTML);
              totalCabezaPlomo = totalCabezaPlomo + valor;
              valor = parseFloat(table.rows[j].cells[4].innerHTML);
              totalCabezaZinc = totalCabezaZinc + valor;
              valor = parseFloat(table.rows[j].cells[5].innerHTML);
              totalCabezaFierro = totalCabezaFierro + valor;
              valor = parseFloat(table.rows[j].cells[6].innerHTML);
              totalCabezaInsoluble = totalCabezaInsoluble + valor;
          }

          tabla.rows[9].cells[1].innerHTML =(totalToneladaMineral/dividendo).toFixed(2);
          tabla.rows[9].cells[2].innerHTML =(totalPSolidos/dividendo).toFixed(2);
          tabla.rows[9].cells[3].innerHTML =(totalTiempoResidencia/dividendo).toFixed(2);
          table.rows[9].cells[1].innerHTML =(totalCabezaOro/dividendo).toFixed(2);
          table.rows[9].cells[2].innerHTML =(totalCabezaPlata/dividendo).toFixed(2);
          table.rows[9].cells[3].innerHTML =(totalCabezaPlomo/dividendo).toFixed(2);
          table.rows[9].cells[4].innerHTML =(totalCabezaZinc/dividendo).toFixed(2);
          table.rows[9].cells[5].innerHTML =(totalCabezaFierro/dividendo).toFixed(2);
          table.rows[9].cells[6].innerHTML =(totalCabezaInsoluble/dividendo).toFixed(2);

          dividendo++;

}

function calcularTablaLeyConc(){
    tabla = document.getElementById("tablaLeyRec");
    table = document.getElementById("tablaLeyConc");
    totalToneladaConc = 0;
    totalConcOro = 0;
    totalConcPlata = 0;
    totalConcPlomo = 0;
    totalConcZinc = 0;
    totalConcFierro = 0;
    totalConcInsoluble = 0;
    totalAireRecuperado = 0;
    totalRecuperacionOro = 0;
    totalRecuperacionPlata = 0;
    totalRecuperacionPlomo = 0;
    totalRecuperacionZinc = 0;
    totalRecuperacionFierro = 0;
    totalRecuperacionInsoluble = 0;
    var valor = 0;
    
    for(var j = 1; j < vuelta; j++)
        
          {
              valor = parseFloat(table.rows[j].cells[1].innerHTML);
              totalToneladaConc = totalToneladaConc+valor;
              valor = parseFloat(table.rows[j].cells[2].innerHTML);
              totalConcOro = totalConcOro + valor;
              valor = parseFloat(table.rows[j].cells[3].innerHTML);
              totalConcPlata = totalConcPlata + valor;
              valor = parseFloat(table.rows[j].cells[4].innerHTML);
              totalConcPlomo = totalConcPlomo + valor;
              valor = parseFloat(table.rows[j].cells[5].innerHTML);
              totalConcZinc = totalConcZinc + valor;
              valor = parseFloat(table.rows[j].cells[6].innerHTML);
              totalConcFierro = totalConcFierro + valor;
              valor = parseFloat(table.rows[j].cells[7].innerHTML);
              totalConcInsoluble = totalConcInsoluble + valor;
              valor = parseFloat(tabla.rows[j].cells[1].innerHTML);
              totalAireRecuperado = totalAireRecuperado + valor;
              valor = parseFloat(tabla.rows[j].cells[2].innerHTML);
              totalRecuperacionOro = totalRecuperacionOro + valor;
              valor = parseFloat(tabla.rows[j].cells[3].innerHTML);
              totalRecuperacionPlata = totalRecuperacionPlata + valor;
              valor = parseFloat(tabla.rows[j].cells[4].innerHTML);
              totalRecuperacionPlomo = totalRecuperacionPlomo + valor;
              valor = parseFloat(tabla.rows[j].cells[5].innerHTML);
              totalRecuperacionZinc = totalRecuperacionZinc + valor;
              valor = parseFloat(tabla.rows[j].cells[6].innerHTML);
              totalRecuperacionFierro = totalRecuperacionFierro + valor;
              valor = parseFloat(tabla.rows[j].cells[7].innerHTML);
              totalRecuperacionInsoluble = totalRecuperacionInsoluble + valor;
          }

          table.rows[9].cells[1].innerHTML =(totalToneladaConc/dividendo).toFixed(2);
          table.rows[9].cells[2].innerHTML =(totalConcOro/dividendo).toFixed(2);
          table.rows[9].cells[3].innerHTML =(totalConcPlata/dividendo).toFixed(2);
          table.rows[9].cells[4].innerHTML =(totalConcPlomo/dividendo).toFixed(2);
          table.rows[9].cells[5].innerHTML =(totalConcZinc/dividendo).toFixed(2);
          table.rows[9].cells[6].innerHTML =(totalConcFierro/dividendo).toFixed(2);
          table.rows[9].cells[7].innerHTML =(totalConcInsoluble/dividendo).toFixed(2);
          tabla.rows[9].cells[1].innerHTML =(totalAireRecuperado/dividendo).toFixed(2);
          tabla.rows[9].cells[2].innerHTML =(totalRecuperacionOro/dividendo).toFixed(2);
          tabla.rows[9].cells[3].innerHTML =(totalRecuperacionPlata/dividendo).toFixed(2);
          tabla.rows[9].cells[4].innerHTML =(totalRecuperacionPlomo/dividendo).toFixed(2);
          tabla.rows[9].cells[5].innerHTML =(totalRecuperacionZinc/dividendo).toFixed(2);
          tabla.rows[9].cells[6].innerHTML =(totalRecuperacionFierro/dividendo).toFixed(2);
          tabla.rows[9].cells[7].innerHTML =(totalRecuperacionInsoluble/dividendo).toFixed(2);
        
}

function calcularTablaColasPlomo(){
    table = document.getElementById("tablaColasPlomo");
    totalColaPlomoOro = 0;
    totalColaPlomoPlata = 0;
    totalColaPlomoPlomo = 0;
    totalColaPlomoZinc = 0;
    totalColaPlomoFierro = 0;
    totalColaPlomoInsoluble = 0;
    var valor = 0;
    
    for(var j = 1; j < vuelta; j++)
        
          {
              valor = parseFloat(table.rows[j].cells[1].innerHTML);
              totalColaPlomoOro= totalColaPlomoOro+valor;
              valor = parseFloat(table.rows[j].cells[2].innerHTML);
              totalColaPlomoPlata = totalColaPlomoPlata + valor;
              valor = parseFloat(table.rows[j].cells[3].innerHTML);
              totalColaPlomoPlomo = totalColaPlomoPlomo + valor;
              valor = parseFloat(table.rows[j].cells[4].innerHTML);
              totalColaPlomoZinc = totalColaPlomoZinc + valor;
              valor = parseFloat(table.rows[j].cells[5].innerHTML);
              totalColaPlomoFierro = totalColaPlomoFierro + valor;
              valor = parseFloat(table.rows[j].cells[6].innerHTML);
              totalColaPlomoInsoluble = totalColaPlomoInsoluble + valor;
          }

          table.rows[9].cells[1].innerHTML =totalColaPlomoOro/dividendo;
          table.rows[9].cells[2].innerHTML =totalColaPlomoPlata/dividendo;
          table.rows[9].cells[3].innerHTML =totalColaPlomoPlomo/dividendo;
          table.rows[9].cells[4].innerHTML =totalColaPlomoZinc/dividendo;
          table.rows[9].cells[5].innerHTML =totalColaPlomoFierro/dividendo;
          table.rows[9].cells[6].innerHTML =totalColaPlomoInsoluble/dividendo;
          
}
function calcularTablaHistorico(){
    tabla = document.getElementById("tablaAire");
    table = document.getElementById("tablaHistorico");
    totalZNSO4 = 0;
    totalColector = 0;
    totalEspumante = 0;
    totalNaCN = 0;
    totalAire = 0;
    totalJg = 0;
    totalNivel = 0;
    totalAireRetenido = 0;
    totalTamañoBurbujas = 0;
    totalVelocidadDerrame = 0;
    var valor = 0;
    
    for(var j = 1; j < vuelta; j++)
        
          {
              valor = parseFloat(table.rows[j].cells[1].innerHTML);
              totalZNSO4= totalZNSO4+valor;
              valor = parseFloat(table.rows[j].cells[2].innerHTML);
              totalColector = totalColector + valor;
              valor = parseFloat(table.rows[j].cells[3].innerHTML);
              totalEspumante = totalEspumante + valor;
              valor = parseFloat(table.rows[j].cells[4].innerHTML);
              totalNaCN = totalNaCN + valor;
              
              valor = parseFloat(tabla.rows[j].cells[1].innerHTML);
              totalJg = totalJg + valor;
              valor = parseFloat(tabla.rows[j].cells[2].innerHTML);
              totalNivel = totalNivel + valor;
              valor = parseFloat(tabla.rows[j].cells[3].innerHTML);
              totalAireRetenido = totalAireRetenido + valor;
              valor = parseFloat(tabla.rows[j].cells[4].innerHTML);
              totalTamañoBurbujas = totalTamañoBurbujas + valor;
              valor = parseFloat(tabla.rows[j].cells[5].innerHTML);
              totalVelocidadDerrame = totalVelocidadDerrame + valor;
          }

          table.rows[9].cells[1].innerHTML =(totalZNSO4/dividendo).toFixed(2);
          table.rows[9].cells[2].innerHTML =(totalColector/dividendo).toFixed(2);
          table.rows[9].cells[3].innerHTML =(totalEspumante/dividendo).toFixed(2);
          table.rows[9].cells[4].innerHTML =(totalNaCN/dividendo).toFixed(2);
          
          tabla.rows[9].cells[1].innerHTML =(totalJg/dividendo).toFixed(2);
          tabla.rows[9].cells[2].innerHTML =(totalNivel/dividendo).toFixed(2);
          tabla.rows[9].cells[3].innerHTML =(totalAireRetenido/dividendo).toFixed(2);
          tabla.rows[9].cells[4].innerHTML =(totalTamañoBurbujas/dividendo).toFixed(2);
          tabla.rows[9].cells[5].innerHTML =(totalVelocidadDerrame/dividendo).toFixed(2);
          
}

function calcularTablaFinancieros(){
    table = document.getElementById("tablaFinancieros");
    totalOro = 0;
    totalPlata = 0;
    totalPlomo = 0;
    totalZinc = 0;
    totalInsoluble = 0;
    totalFlete = 0;
    totalMaquila = 0;
    totalPresupuesto = 0;
    totalGanancias = 0;
    var valor = 0;
    
    for(var j = 1; j < vuelta; j++)
        
          {
              valor = parseFloat(table.rows[j].cells[1].innerHTML);
              totalOro= totalOro+valor;
              valor = parseFloat(table.rows[j].cells[2].innerHTML);
              totalPlata = totalPlata + valor;
              valor = parseFloat(table.rows[j].cells[3].innerHTML);
              totalPlomo = totalPlomo + valor;
              valor = parseFloat(table.rows[j].cells[4].innerHTML);
              totalZinc = totalZinc + valor;
              valor = parseFloat(table.rows[j].cells[5].innerHTML);
              totalInsoluble = totalInsoluble + valor;
              valor = parseFloat(table.rows[j].cells[6].innerHTML);
              totalFlete = totalFlete + valor;
              valor = parseFloat(table.rows[j].cells[7].innerHTML);
              totalMaquila = totalMaquila + valor;
              valor = parseFloat(table.rows[j].cells[8].innerHTML);
              totalPresupuesto = totalPresupuesto + valor;
              valor = parseFloat(table.rows[j].cells[9].innerHTML);
              totalGanancias = totalGanancias + valor;
              
          }

          table.rows[9].cells[1].innerHTML =(totalOro/dividendo).toFixed();
          table.rows[9].cells[2].innerHTML =(totalPlata/dividendo).toFixed();
          table.rows[9].cells[3].innerHTML =(totalPlomo/dividendo).toFixed();
          table.rows[9].cells[4].innerHTML =(totalZinc/dividendo).toFixed();
          table.rows[9].cells[5].innerHTML =(totalInsoluble/dividendo).toFixed();
          table.rows[9].cells[6].innerHTML =(totalFlete/dividendo).toFixed();
          table.rows[9].cells[7].innerHTML =(totalMaquila/dividendo).toFixed();
          table.rows[9].cells[8].innerHTML =(totalPresupuesto/dividendo).toFixed();
          table.rows[9].cells[9].innerHTML =(totalGanancias/dividendo).toFixed();
          
}



function toneladasMineral(){
   /* txtTonelajeDisabled = document.getElementById("txtTonelajeDisabled").value;
    
    print("TONELADA MINERAL "+toneladaMineral);*/
}

function toneladasConcentrados(){
    var txtTonelajeDisabled = document.getElementById("txtTonelajeDisabled").value; 
    toneladaMineral = (counterH*txtTonelajeDisabled)/60;
    if (toneladaMineral=0){
        toneladasConcentradoUno = 0;
    } else {
        toneladasConcentradoUno = toneladasConcentradoTres;
    }
    
    if (txtVelocidadDerrame=0) {
        toneladasConcentradoDos = 0;
    } else {
        toneladasConcentradoDos = toneladasConcentradoUno;
    }
    
    print("CONTENIDOS: "+contenidosOroConc+" "+contenidosPlataConc+" "+contenidosPlomoConc+" "+contenidosZincConc+" "+contenidosFierroConc+" "+contenidosInsolubleConc); 
    toneladasConcentradoTres = 7.3*contenidosOroConc+0.0053*contenidosPlataConc+0.273*contenidosPlomoConc+1.04*contenidosZincConc+3.46*contenidosFierroConc+1.2383*contenidosInsolubleConc;

    if (toneladasConcentradoTres<0) {
        toneladasConcentradoTres = 0;
    }

    if (txtVelocidadDerrame<=0) {
        toneladasConcentrado = toneladasConcentradoUno;
    }

    porcentajeSolidos = 27.05 + 55 *contenidosOroConc + 0.0536*contenidosPlataConc - 3.61*contenidosPlomoConc- 9.12*contenidosZincConc + 5.73*contenidosFierroConc- 0.369*contenidosInsolubleConc
    toneladaMineral = (counterH*txtTonelajeDisabled)/60;
    print("TONELADA MINERAL "+toneladaMineral);
    toneladaCola = txtTonelajeDisabled - toneladasConcentradoUno;
    
    if(isNaN(toneladasConcentrado)){
        toneladasConcentrado = 0;
    }

    document.getElementById("txtTonelajeConcentrado").value = toneladasConcentrado.toFixed(2);

    
    print('TONELAJE UNO : '+toneladasConcentradoUno);
    print('TONELAJE DOS: '+toneladasConcentradoDos);
    print('TONELAJE TRES: '+toneladasConcentradoTres);
    print('PORCENTAJE : '+porcentajeSolidos);
}

var oroEnsaye = 0;
var plataEnsaye = 0;
var plomoEnsaye = 0;
var ensayeNetoOro = 0;
var ensayeNetoPlata = 0;
var ensayeNetoPlomo = 0;
var txtHumedadConcentrado = document.getElementById("txtHumedadConcentrado").value;
var toneladasHumedas = 0;
var humedadPorcentaje = 0;
var cotizacionPromedioOro = 0;
var cotizacionPromedioPlata = 0;
var cotizacionPromedioPlomo = 0;
var txtPresupuestoCosto = 0;
var txtPresupuestoGanancias = 0;

var txtOnzaOro = 0;
var txtOnzaPlata = 0;
var txtLibraPlomo = 0;

var valorToneladasOro = 0;
var valorToneladasPlata = 0;
var valorToneladasPlomo = 0;
var valorTotalOro = 0;
var valorTotalPlata = 0;
var valorTotalPlomo = 0;

var sumaValorToneladas = 0;
var sumaValorTotal = 0;
var txtMaquila = 0;
var tratamiento = 0;

var castigoZinc = 0;
var castigoInsoluble = 0;
var sumaCastigos = 0;
var totalCastigos = 0;

var fleteOrigenDestino = 0;
var fleteOrigenDestinoToneladas = 0;
var fleteOrigenDestinoTotal = 0;

var sumaTotalDeduccionesToneladas = 0;
var sumaTotalDeduccionesTotal = 0;

var valorNetoLiquidacionToneladas = 0;
var valorNetoLiquidacionTotal = 0;


function presupuestos(){
    oroEnsaye = document.getElementById("txtConcOro").value;
    plataEnsaye = document.getElementById("txtConcPlata").value;
    plomoEnsaye = document.getElementById("txtConcPlomo").value;
    txtHumedadConcentrado = document.getElementById("txtHumedadConcentrado").value;
    txtTonelajeConcentrado = document.getElementById("txtTonelajeConcentrado").value;
    txtOnzaOro = document.getElementById("txtOnzaOro").value;
    txtOnzaPlata = document.getElementById("txtOnzaPlata").value;
    txtLibraPlomo = document.getElementById("txtLibraPlomo").value;
    txtMaquila = document.getElementById("txtMaquila").value;
    leyConcZinc = document.getElementById("txtConcZinc").value;
    leyConcInsoluble = document.getElementById("txtConcInsoluble").value;
    fleteOrigenDestino = document.getElementById("txtCostoFlete").value;


    if (oroEnsaye<=1) {
        ensayeNetoOro = 0;
    } else if (oroEnsaye<=20){
        ensayeNetoOro = ensayeNetoOro-1;
    } else {
        ensayeNetoOro = oroEnsaye * 0.95;
    }

    if (plataEnsaye<=50) {
        ensayeNetoPlata = 0;
    } else if (plataEnsaye<=1000){
        ensayeNetoPlata = ((plataEnsaye-50)/1000);
    } else {
        ensayeNetoPlata = (plataEnsaye*0.95)/1000;
    }

    if ((plomoEnsaye*0.95)<(plomoEnsaye-3)) {
        ensayeNetoPlomo = plomoEnsaye*0.95;
    }  else {
        ensayeNetoPlomo = ((plomoEnsaye-3)/100)*1000;
    }

    //txtTonelajeConcentrado = document.getElementById("txtTonelajeConcentrado").value;

    toneladasHumedas  = (txtTonelajeConcentrado*100)/(100-txtHumedadConcentrado);
    humedadPorcentaje = ((toneladasHumedas - txtTonelajeConcentrado) / toneladasHumedas);

    cotizacionPromedioOro = txtOnzaOro/32.1507432;
    cotizacionPromedioPlata = txtOnzaPlata*32.1507432 

    if (txtLibraPlomo<=0) {
        cotizacionPromedioPlomo = 0;
    } else {
        cotizacionPromedioPlomo = (txtLibraPlomo-0.01)*2.20462;
    }

    valorToneladasOro = ensayeNetoOro*cotizacionPromedioOro;
    valorToneladasPlata = ensayeNetoPlata*cotizacionPromedioPlata;
    valorToneladasPlomo = ensayeNetoPlomo*cotizacionPromedioPlomo;

    sumaValorToneladas = valorToneladasOro+valorToneladasPlata+valorToneladasPlomo;

    valorTotalOro = valorToneladasOro*txtTonelajeConcentrado;
    valorTotalPlata = valorToneladasPlata*txtTonelajeConcentrado;
    valorTotalPlomo = valorToneladasPlomo*txtTonelajeConcentrado;

    sumaValorTotal = valorTotalOro+valorTotalPlata+valorTotalPlomo;

    tratamiento = txtMaquila * txtTonelajeConcentrado;

    

    if (leyConcZinc<=3) {
        castigoZinc = 0;
    } else if (leyConcZinc<=11){
        castigoZinc = (leyConcZinc-5)*40;
    } else {
        castigoZinc = ((leyConcZinc-8)*80)+(3*2.5);
    }

    if (leyConcInsoluble<=10) {
        castigoInsoluble = 0;
    } else if (leyConcInsoluble<=15){
        castigoInsoluble = (leyConcInsoluble-5)*5;
    } else {
        castigoInsoluble = ((leyConcInsoluble-8)*10)+(3*2.5);
    }

    sumaCastigos = castigoZinc + castigoInsoluble;
    totalCastigos = sumaCastigos * txtTonelajeConcentrado;

    fleteOrigenDestinoToneladas = fleteOrigenDestino/((txtHumedadConcentrado/100)/(1-(humedadPorcentaje/100)));
//txtTonelajeConcentrado = document.getElementById("txtTonelajeConcentrado").value;
    
    if (txtTonelajeConcentrado==0) {
        fleteOrigenDestinoTotal = 0;
    } else {
        fleteOrigenDestinoTotal = fleteOrigenDestinoToneladas * txtTonelajeConcentrado;
    }
//alert("PRESUPUESSS "+fleteOrigenDestinoTotal);
    sumaTotalDeduccionesToneladas = txtMaquila+sumaCastigos+fleteOrigenDestinoToneladas;
    sumaTotalDeduccionesTotal = tratamiento+totalCastigos+fleteOrigenDestinoTotal;

    valorNetoLiquidacionToneladas = sumaValorToneladas - sumaTotalDeduccionesToneladas;
    valorNetoLiquidacionTotal = sumaValorTotal - sumaTotalDeduccionesTotal;
    

}

function llenarTablaFinanciero(){
    tabla = document.getElementById("tablaFinancieros");
    var tds = tabla.getElementsByTagName("td");
    for(var i = 1; i < 2 ; i++)
        {
            txtPresupuestoGanancias = document.getElementById("txtPresupuestoGanancias").value
          tabla.rows[vuelta].cells[1].innerHTML =valorTotalOro.toFixed();
          tabla.rows[vuelta].cells[2].innerHTML =valorTotalPlata.toFixed();
          tabla.rows[vuelta].cells[3].innerHTML =valorTotalPlomo.toFixed();
          tabla.rows[vuelta].cells[4].innerHTML =castigoZinc.toFixed();
          tabla.rows[vuelta].cells[5].innerHTML =castigoInsoluble.toFixed();
          tabla.rows[vuelta].cells[6].innerHTML =fleteOrigenDestinoTotal.toFixed();
          tabla.rows[vuelta].cells[7].innerHTML =tratamiento.toFixed();
          tabla.rows[vuelta].cells[8].innerHTML =txtPresupuestoGanancias;
          tabla.rows[vuelta].cells[9].innerHTML =valorNetoLiquidacionTotal.toFixed();

          if (valorNetoLiquidacionTotal<0) {
            tabla.rows[vuelta].cells[9].style.color = "#F93154";
          } else {
            tabla.rows[vuelta].cells[9].style.color = "#00B74A";
            //tds[9].style.color = "#99C78A";
            //tabla.rows[vuelta].cells[9].addClass('text-danger');
          }
          /*tabla.rows[vuelta].cells[2].innerHTML =document.getElementById("txtNivel").value;
          tabla.rows[vuelta].cells[3].innerHTML =document.getElementById("txtAireRetenido").value;
          tabla.rows[vuelta].cells[4].innerHTML =document.getElementById("txtDiametroBurbujas").value;
          tabla.rows[vuelta].cells[5].innerHTML =document.getElementById("txtVelocidadDerrame").value;*/
        }

        //alert("mensaj");

} 




function setup(){
    keyTonelaje();
    keyAire();
    keyNivel();
    keyColector();
    keyEspumante();
    keySulfato();
    keyCianuro();
    valoresContenidos();
    //dimensionesCelda();
    //keyTonelaje();
    toneladasConcentrados();
    variablesAlimentacion();
    variablesRespuesta();
    dimensionesCelda();
    ensaye();
    presupuestos();
    noCanvas();
    var timer = select('#reloj');
    var timerH = select('#relojHora');
    timer.html(convertSeconds(timeleft - counter));
    timerH.html(convertSeconds(counterH));
        
    document.getElementById('btnEmpezar').onclick = function() {
        var x = document.getElementById("btnEmpezar").value;
        
        //dimensionesCelda();
        //variablesAlimentacion();
        //ensaye();
        //efectoDepresores();
       // lineasActualesBases();
        //llenarTablaCabeza();
        //llenarTablaFinanciero();
        if (x=='Empezar') {
            if (marcha==1) {
                marcha = 0;
            } else {
                print('Empezar');
            setInterval(timeIt,1000); 
            timeIt();
            print(counter);
            
            }
            
            
        } else if (x=='Continuar') {
            marcha = 0;
            print('Continuar');
        }
        

    };

    document.getElementById('btnParar').onclick = function() {
        marcha = 1;
        stopReloj();
        document.getElementById("btnEmpezar").value = "Continuar";
        print('Parar');

    };

    document.getElementById('btnResetTiempo').onclick = function() {
        /*marcha = 1;
        counterH = 0;
        counter = 0;
        timemuestreo = 0;
        timeleft = 960;
        stopReloj();
        document.getElementById("btnEmpezar").value = "Empezar";
        timer.html(convertSeconds(timeleft));
        timerH.html(convertSeconds(0));
        print('Resetsstts'+counter);*/
        location.reload(true);
       
    };


        
    function timeIt(){
        if (marcha==0) {
            timemuestreo++;
            counter++;
            print(counter);
            counterH=counterH+0.5;
            tonelajeTurno();
            aguaTurno();
            volumenPulpa();
            valoresContenidos();
            efectoDepresores();
            lineasActualesBases();
            
            variablesRespuesta();
            toneladasMineral();
            toneladasConcentrados();
            presupuestos();
            ensaye();
            if (!(counterH % 1)) {
                timerH.html(convertSeconds(counterH));
            }
            timer.html(convertSeconds(timeleft - counter));
            if (timeleft-counter==0) {
                marcha = 1;
                stopReloj();
                alert('Reloj Terminado');
            }

            if (timemuestreo==120) {
                llenarTablaLeyConc();
                llenarTablaColasPlomo();
                llenarTablaHistorico();
                llenarTablaFinanciero();
                llenarTablaCabeza();
                calcularTablaColasPlomo();
                calcularTablaLeyConc();
                calcularTablaHistorico();
                calcularTablaCabeza();
                calcularTablaFinancieros();

                //alert('Muestra');
                timemuestreo = 0;
                
                
            }    
        }
    }

    var vuelta = 2;

    function timeItH(){
        if (marcha==0) {
            counterH=counterH+10;
            timerH.html(convertSeconds(counterH));
        }
    }

    function stopReloj() {
        clearInterval(timeleft); 
    }        
} 


     
