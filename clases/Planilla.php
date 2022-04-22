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


    //-----------------------------------------//////////////////////////////---------------------------------------------------------------------
    //Creacion metodos get y set de variables de planillas


    //id planilla
    public function setidPlanill(){
        return $this->idPlanilla;
    }

    public function getidPlanill($idPlanilla_p){
        $this->idPlanilla =  $idPlanilla_p;
    }

    //id empleado 

    public function setidEmpleado(){
        return $this->idEmpleado;
    }

    public function getidEmpleado($idEmpleado_p){
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

    public function setAnio(){
        return $this->anio;
    }

    public function getAnio($anio_p){
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
    public function setIngresot(){
        return $this->ingresotp;
    }

    public function getIngresot($ingresotp_p){
        $this->ingresotp =  $ingresotp_p;
    }

    //total descuento
    public function setTotali(){
        return $this->totaldp;
    }

    public function getTotali($totaldp_p){
        $this->totaldp =  $totaldp_p;
    }

    //sueldo recibido
    public function setSueldod(){
        return $this->sueldor;
    }

    public function getSueldod($sueldor_p){
        $this->sueldor =  $sueldor_p;
    }

    //estado
    public function setEstado(){
        return $this->estado;
    }

    public function getEstado($estado_p){
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
        $this->apellidop = $apellido_p;
    }

    //cargo
    public function getidCargop(){
        return $this->id_cargop;
    }

    public function  setidCargop($id_cargop_p){
        $this->id_cargop = $id_cargo_p;
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


}

?>