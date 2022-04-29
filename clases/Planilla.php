<?php

class Planilla{

    public $idPlanilla;
    public $idEmpleado;
    public $mes;
    public $anio;
    public $salario;
    public $bonip;
    public $otrosp;
    public $igssp;
    public $planp;
    public $fianzap;
    public $judicialp;
    public $timbrep;
    public $isrdietap;
    public $isrsalariop;
    public $ingresotp;
    public $totaldp;
    public $sueldor;
    public $estado;
    public $nombrep;
    public $apellidop;
    public $id_cargop;
    public $nombre_cargop;
    public $id_dependenciap;
    public $nombre_dependenciap;
    public $dietapp;
    public $fechaingreso;
    

    //Empleado variables
    public $dpip;
    public $nitp;
    public $fecha_nacimientop;
    public $no_cuentap;
    public $no_igssp;
    public $no_expedientep;
    public $forma_pagop;
    public $telefonop;
    public $id_municipiop;
    public $nombre_municipiop;
    public $id_renglonp;
    public $nombre_renglonp;
    public $nombredeparta;


    //-----------------------------------------//////////////////////////////---------------------------------------------------------------------
    //Creacion metodos get y set de variables de planillas


    //id planilla
    public function getidPlanill(){
        return $this->idPlanilla;
    }

    public function setidPlanill($idPlanilla_p){
        $this->idPlanilla =  $idPlanilla_p;
    }

    //id empleado 

    public function getidEmpleado(){
        return $this->idEmpleado;
    }

    public function setidEmpleado($idEmpleado_p){
        $this->idEmpleado = $idEmpleado_p;
    }

    //mes
    public function setMes(){
        return $this->mes;
    }

    public function getMes($mes_p){
         $this->mes =  $mes_p;
    }

    //anio

    public function getAnio(){
        return $this->anio;
    }

    public function setAnio($anio_p){
        $this->anio =  $anio_p;
    }

    //salario
    public function getSalario(){
        return $this->salario;
    }

    public function  setSalario($salario_p){
        $this->salario = $salario_p;
    }

    //bonificacion
    public function getBonip(){
        return $this->bonip;
    }

    public function  setBonip($bonip_p){
        $this->bonip = $bonip_p;
    }

    //otros
    public function getOtrosp(){
        return $this->otrosp;
    }

    public function  setOtrosp($otrosp_p){
        $this->otrosp = $otrosp_p;
    }

    //igss
    public function getIgssp(){
        return $this->igssp;
    }

    public function  setIgssp($igssp_p){
        $this->igssp = $igssp_p;
    }

    //plan
    public function getPlanp(){
        return $this->planp;
    }

    public function  setPlanp($planp_p){
        $this->planp = $planp_p;
    }

    //fianza
    public function getFianzap(){
        return $this->fianzap;
    }

    public function  setFianzap($fianzap_p){
        $this->fianzap = $fianzap_p;
    }

    //judicial
    public function getJudicialp(){
        return $this->judicialp;
    }

    public function  setJudicialp($judicialp_p){
        $this->judicialp = $judicialp_p;
    }

    //timbre
    public function getTimbrep(){
        return $this->timbrep;
    }

    public function  setTimbrep($timbrep_p){
        $this->timbrep = $timbrep_p;
    }

    //dietas
    public function getDieta_isrp(){
        return $this->isrdietap;
    }

    public function  setDieta_isrp($isrdietap_p){
        $this->isrdietap = $isrdietap_p;
    }

    //salario isr
    public function getSalario_isrp(){
        return $this->isrsalariop;
    }

    public function  setSalario_isrp($isrsalariop_p){
        $this->isrsalariop = $isrsalariop_p;
    }

    //ingreso total

    public function getIngresot(){
        return $this->ingresotp;
    }

    public function setIngresot($ingresotp_p){
     
        $this->ingresotp =  $ingresotp_p;
    }

    //total descuento
    public function getTotald(){
        return $this->totaldp;
    }

    public function setTotald($totaldp_p){
        $this->totaldp =  $totaldp_p;
    }

    //sueldo recibido
    public function getSarioreci(){
        return $this->sueldor;
    }

    public function setSarioreci($sueldor_p){
        $this->sueldor =  $sueldor_p;
    }

    //estado
    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($estado_p){
        $this->estado =  $estado_p;
    }
   
    //nombre
    public function getNombrep(){
        return $this->nombrep;
    }

    public function setNombrep($nombrep_p){
        $this->nombrep = $nombrep_p;
    }

    //apellido
    public function getApellidop(){
        return $this->apellidop;
    }

    public function setApellidop($apellidop_p){
        $this->apellidop = $apellidop_p;
    }

    //cargo
    public function getidCargop(){
        return $this->id_cargop;
    }

    public function  setidCargop($id_cargop_p){
        $this->id_cargop = $id_cargop_p;
    }

    public function getNombrecarp(){
        return $this->nombre_cargop;
    }

    public function  setNombrecarp($nombre_cargop_p){
        $this->nombre_cargop = $nombre_cargop_p;
    }

    //dependencia
    public function getidDependenciap(){
        return $this->id_dependenciap;
    }

    public function setidDependenciap($id_dependenciap_p){
        $this->id_dependenciap = $id_dependenciap_p;
    }

    public function getNombredep(){
        return $this->nombre_dependenciap;
    }

    public function  setNombredep($nombre_dependenciap_p){
        $this->nombre_dependenciap = $nombre_dependenciap_p;
    }

    public function getDietapp(){
        return $this->dietapp;
    }

    public function setDietapp($dietapp_p){
        
        $this->dietapp  =  $dietapp_p;
    }

    

    //-------------------------
    //Empleado
   
    //Creacion metodo get y set dpi
    public function getDpip(){
        return $this->dpip;
    }

    public function setDpip($dpi_ep){
        $this->dpip = $dpi_ep;
    }

    //Creacion metodo get y set nit 
    public function getNitp(){
        return $this->nitp;
    }

    public function setNitp($nit_ep){
        $this->nitp = $nit_ep;
    }
    ///creacion metodo get y set fecha fecha_nacimiento
    public function getFecha_nacimientop(){
        return $this->fecha_nacimientop;
    }

    public function  setFecha_nacimientop($fecha_nacimiento_ep){
        $this->fecha_nacimientop = $fecha_nacimiento_ep;
    }

    //creacion de metodo get y set numero de no_cuenta
    public function getNocuentap(){
        return $this->no_cuentap;
    }

    public function  setNocuentap($no_cuenta_ep){
        $this->no_cuentap = $no_cuenta_ep;
    }

    //creacion de metodo get y set numero de igss
    public function getNoigssp(){
        return $this->no_igssp;
    }

    public function  setNoigssp($no_igss_ep){
        $this->no_igssp = $no_igss_ep;
    }

    //creacion metodo get y set numero de expediente
    public function getNoexpedientep(){
        return $this->no_expedientep;
    }

    public function  setNoexpedientep($no_expediente_ep){
        $this->no_expedientep = $no_expediente_ep;
    }

    //creacion metodo get y set forma de pago
    public function getFopagop(){
        return $this->forma_pagop;
    }

    public function  setFopagop($forma_pago_ep){
        $this->forma_pagop = $forma_pago_ep;
    }

    //creacion metodo get y set telefono
    public function getTelefonop(){
        return $this->telefonop;
    }

    public function setTelefonop($telefonop_p){
        $this->telefonop = $telefonop_p;
    }

    public function getidMuncipiop(){
        return $this->idmunicipiop;
    }

    public function  setidMuncipiop($idmunicipio_ep){
        $this->idmunicipiop = $idmunicipio_ep;
    }
    
    public function getNombremup(){
        return $this->nombre_municipiop;
    }

    public function  setNombremup($nombre_municipio_ep){
        $this->nombre_municipiop = $nombre_municipio_ep;
    }

    //creacion metodo get y set id y nombre renglon
    public function getidRenglonp(){
        return $this->id_renglonp;
    }

    public function  setidRenglonp($id_renglon_ep){
        $this->id_renglonp = $id_renglon_ep;
    }
    
    public function getNombrerep(){
        return $this->nombre_renglonp;
    }

    public function  setNombrerep($nombre_renglon_ep){
        $this->nombre_renglonp = $nombre_renglon_ep;
    }

    public function getFechaIngreso(){
        return $this->fechaingreso;
    }

    public function setFechaIngreso($fechaingreso_p){
        $this->fechaingreso =  $fechaingreso_p;
    }

    public function getNombreDept(){
        return $this->nombredeparta;
    }

    public function setNombreDept($nombredep_p){
        $this->nombredeparta =  $nombredep_p;
    }

    //--------------------------------------------------------------//---------------------------------------------------------------------------------
    //Funcion guardar planilla en especifico-------------------------
    public function planillaEspecifico($idempleado,$mes,$anio,$salario,$bonificacion,$otros,$igss,$plan,$fianza,
    $judicial,$timbre,$dietas,$isrdieta,$sisr,$intotal,$totald,$suedor,$usuario){
        //instanciamos la clase conexion 
        $conexion = new Conexion();
        //nos conectamos a la base de datos mediante la funcion conectar
        $conexion->conectar();
        //efectuamos el sql de guardado
        $sql = "insert into planilla(id_empleado,mes,anio,salario_pago,bonificacion,otros,igss,plan,fianza,judicial,timbre,
        dietas,isr_dieta,salario_isr,ingreso_total,total_descuento,sueldo_recibido,id_usuario)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        //preparamos la consulta
        $ejecutar = $conexion->db->prepare($sql);
        //ingresamos la cantidad de caracteres
        $ejecutar->bind_param('issddddddddddddddi',$idempleado,$mes,$anio,$salario,$bonificacion,$otros,$igss,$plan,$fianza,
        $judicial,$timbre,$dietas,$isrdieta,$sisr,$intotal,$totald,$suedor,$usuario);
        //realizamos el execute
        $ejecutar->execute();
        //nos desconectamos de la base de datos
        $conexion->desconectar();

    }

    public function nominaEmpleadoPlanilla($idempleado){

        //Instanciamos la clase
        $conexion = new Conexion();

        //nos conectamos a la base de datos mediante la funcion conectar
        $conexion->conectar();

        //definimos un array de tipo planilla
        $datosPlanilla = new Planilla();

        //se efectua la consulta sql
        $sql = "select empleado.nombres,empleado.apellidos,empleado.dpi,empleado.nit,empleado.telefono,empleado.id_municipio,
        empleado.fecha_nacimiento,empleado.no_igss,empleado.no_cuenta,empleado.no_expediente,empleado.estado,
        renglon.nombre,empleado.id_cargo,empleado.fecha_ingreso,empleado.forma_pago,municipio.nombre,departamento.nombre,cargo.nombre,dependencia.nombre,planilla.anio,planilla.mes,
        planilla.salario_pago,planilla.bonificacion,planilla.otros,planilla.igss,planilla.plan,planilla.fianza,
        planilla.judicial,planilla.timbre,planilla.dietas,planilla.salario_isr,planilla.isr_dieta,planilla.ingreso_total,
        planilla.total_descuento,planilla.sueldo_recibido from empleado INNER JOIN planilla ON empleado.id_empleado = planilla.id_empleado INNER JOIN municipio ON municipio.id_municipio= empleado.id_municipio INNER JOIN cargo ON cargo.id_cargo = empleado.id_cargo INNER JOIN renglon ON renglon.id_renglon= empleado.id_renglon INNER JOIN departamento ON municipio.id_departamento = departamento.id_departamento INNER JOIN dependencia on cargo.id_dependencia = dependencia.id_dependencia WHERE planilla.mes =(SELECT MAX(planilla.mes) from planilla) AND planilla.anio = (SELECT MAX(planilla.anio) from planilla) AND planilla.id_empleado ='".$idempleado."'";

        //hacemos la consulta
        $resultado = mysqli_query($conexion->db,$sql);

        //reconrremos el resultado obtenido mediante un ciclo while

        while($fila = mysqli_fetch_array($resultado)){

            $datosPlanilla->setNombrep($fila[0]);
            $datosPlanilla->setApellidop($fila[1]);
            $datosPlanilla->setDpip($fila[2]);
            $datosPlanilla->setNitp($fila[3]);
            $datosPlanilla->setTelefonop($fila[4]);
            $datosPlanilla->setidMuncipiop($fila[5]);
            $datosPlanilla->setFecha_nacimientop($fila[6]);
            $datosPlanilla->setNoigssp($fila[7]);
            $datosPlanilla->setNocuentap($fila[8]);
            $datosPlanilla->setNoexpedientep($fila[9]);
            $datosPlanilla->setEstado($fila[10]);
            $datosPlanilla->setidRenglonp($fila[11]);
            $datosPlanilla->setidCargop($fila[12]);
            $datosPlanilla->setFechaIngreso($fila[13]);
            $datosPlanilla->setFopagop($fila[14]);
            $datosPlanilla->setNombremup($fila[15]);
            $datosPlanilla->setNombreDept($fila[16]);
            $datosPlanilla->setNombrecarp($fila[17]);
            $datosPlanilla->setNombredep($fila[18]);
            $datosPlanilla->setMes($fila[19]);
            $datosPlanilla->setAnio($fila[20]);
            $datosPlanilla->setSalario($fila[21]);
            $datosPlanilla->setBonip($fila[22]);
            $datosPlanilla->setOtrosp($fila[23]);
            $datosPlanilla->setIgssp($fila[24]);
            $datosPlanilla->setPlanp($fila[25]);
            $datosPlanilla->setFianzap($fila[26]);
            $datosPlanilla->setJudicialp($fila[27]);
            $datosPlanilla->setTimbrep($fila[28]);
            $datosPlanilla->setDietapp($fila[29]);
            $datosPlanilla->setSalario_isrp($fila[30]);
            $datosPlanilla->setDieta_isrp($fila[31]);
            $datosPlanilla->setIngresot($fila[32]);
            $datosPlanilla->setTotald($fila[33]);
            $datosPlanilla->setSarioreci($fila[34]);

            

        }

        $conexion->desconectar();

        return $datosPlanilla;

    }

    

}


?>