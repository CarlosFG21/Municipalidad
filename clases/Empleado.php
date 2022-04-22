<?php

class Empleado{


    public $idEmpleado;
    public $nombre;
    public $apellido;
    public $dpi;
    public $nit;
    public $fecha_nacimiento;
    public $no_cuenta;
    public $no_igss;
    public $no_expediente;
    public $forma_pago;
    public $telefono;
    public $salario_base;
    public $otros;
    public $bonificacion;
    public $salario_isr;
    public $isr_dieta;
    public $estado;
    public $fecha_ingreso;
    public $fecha_egreso;
    public $hora;
    public $idmunicipio;
    public $nombre_municipio;
    public $id_renglon;
    public $nombre_renglon;
    public $id_cargo;
    public $nombre_cargo;
    public $id_dependencia;
    public $nombre_dependencia;
    public $id_usuario;
    public $igss;
    public $fianza;
    public $judicial;
    public $timbre;
    public $plan;
    public $id_departamento;
    public $departamento;
    public $isrdietasd;

    //--------------------------------------------------------/////////////----------------------------------------------------------------------------
    //Creacion de metodos get y set-----------------------------------------------
    //Creacion metodo get y set id empleado
    public function getidEmpleado(){
        return $this->idEmpleado;
    }

    public function setidEmpleado($idEmpleado_e){
        $this->idEmpleado = $idEmpleado_e;
    }

    //Creacion metodo get y set nombre
    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre_e){
        $this->nombre = $nombre_e;
    }

    //Creacion metodo get y set apellido
    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido($apellido_e){
        $this->apellido = $apellido_e;
    }

    //Creacion metodo get y set dpi
    public function getDpi(){
        return $this->dpi;
    }

    public function setDpi($dpi_e){
        $this->dpi = $dpi_e;
    }

    //Creacion metodo get y set nit 
    public function getNit(){
        return $this->nit;
    }

    public function setNit($nit_e){
        $this->nit = $nit_e;
    }
    ///creacion metodo get y set fecha fecha_nacimiento
    public function getFecha_nacimiento(){
        return $this->fecha_nacimiento;
    }

    public function  setFecha_nacimiento($fecha_nacimiento_e){
        $this->fecha_nacimiento = $fecha_nacimiento_e;
    }

    //creacion de metodo get y set numero de no_cuenta
    public function getNocuenta(){
        return $this->no_cuenta;
    }

    public function  setNocuenta($no_cuenta_e){
        $this->no_cuenta = $no_cuenta_e;
    }

    //creacion de metodo get y set numero de igss
    public function getNoigss(){
        return $this->no_igss;
    }

    public function  setNoigss($no_igss_e){
        $this->no_igss = $no_igss_e;
    }

    //creacion metodo get y set numero de expediente
    public function getNoexpediente(){
        return $this->no_expediente;
    }

    public function  setNoexpediente($no_expediente_e){
        $this->no_expediente = $no_expediente_e;
    }

    //creacion metodo get y set forma de pago
    public function getFopago(){
        return $this->forma_pago;
    }

    public function  setFopago($forma_pago_e){
        $this->forma_pago = $forma_pago_e;
    }

    //creacion metodo get y set telefono
    public function getTelefono(){
        return $this->telefono;
    }

    public function  setTelefono($telefono_e){
        $this->telefono = $telefono_e;
    }

    //creacion metodo get y set salario
    public function getSalario(){
        return $this->salario_base;
    }

    public function  setSalario($salario_base_e){
        $this->salario_base = $salario_base_e;
    }

    //creacion metodo get y set otros
    public function getOtros(){
        return $this->otros;
    }

    public function  setOtros($otros_e){
        $this->otros = $otros_e;
    }

    //creacion metodo get y set bonificacion
    public function getBonificacion(){
        return $this->bonificacion;
    }

    public function  setBonificacion($bonificacion_e){
        $this->bonificacion = $bonificacion_e;
    }

    //creacion de metodo get y post salario isr
    public function getSalario_isr(){
        return $this->salario_isr;
    }

    public function  setSalario_isr($salario_isr_e){
        $this->salario_isr = $salario_isr_e;
    }

    //creacion metodo get y set dieta isr
    public function getDieta_isr(){
        return $this->isr_dieta ;
    }

    public function  setDieta_isr($isr_dieta_e){
        $this->isr_dieta = $isr_dieta_e;
    }

    //creacion metodo get y set estado
    public function getEstado(){
        return $this->estado;
    }

    public function  setEstado($estado_e){
        $this->estado = $estado_e;
    }

    //Creacion metodo get y set fecha ingreso
    public function getFingreso(){
        return $this->fecha_ingreso;
    }

    public function  setFingreso($fecha_ingreso_e){
        $this->fecha_ingreso = $fecha_ingreso_e;
    }

    //creacion metodo get y set fecha egreso
    public function getFegreso(){
        return $this->fecha_egreso;
    }

    public function  setFegreso($fecha_egreso_e){
        $this->fecha_egreso = $fecha_egreso_e;
    }

    //creacion metodo get y set hora
    public function getHora(){
        return $this->hora;
    }

    public function  setHora($hora_e){
        $this->hora = $hora_e;
    }
    
    //creacion de metodo get y set id y nombre municipio
    public function getidMuncipio(){
        return $this->idmunicipio;
    }

    public function  setidMuncipio($idmunicipio_e){
        $this->idmunicipio = $idmunicipio_e;
    }
    
    public function getNombremu(){
        return $this->nombre_municipio;
    }

    public function  setNombremu($nombre_municipio_e){
        $this->nombre_municipio = $nombre_municipio_e;
    }

    //creacion metodo get y set id y nombre renglon
    public function getidRenglon(){
        return $this->id_renglon;
    }

    public function  setidRenglon($id_renglon_e){
        $this->id_renglon = $id_renglon_e;
    }
    
    public function getNombrere(){
        return $this->nombre_renglon;
    }

    public function  setNombrere($nombre_renglon_e){
        $this->nombre_renglon = $nombre_renglon_e;
    }

    //creacion metodo get y set id y nombre cargo
    public function getidCargo(){
        return $this->id_cargo;
    }

    public function  setidCargo($id_cargo_e){
        $this->id_cargo = $id_cargo_e;
    }
    
    public function getNombrecar(){
        return $this->nombre_cargo;
    }

    public function  setNombrecar($nombre_cargo_e){
        $this->nombre_cargo = $nombre_cargo_e;
    }

    //creacion metodo get y set id y nombre dependencia
    public function getidDependencia(){
        return $this->id_dependencia;
    }

    public function setidDependencia($id_dependencia_e){
        $this->id_dependencia = $id_dependencia_e;
    }
    
    public function getNombrede(){
        return $this->nombre_dependencia;
    }

    public function  setNombrede($nombre_dependencia_e){
        $this->nombre_dependencia = $nombre_dependencia_e;
    }

    //creacion metodo get y set usuario
    public function getidUsuario(){
        return $this->id_usuario;
    }

    public function  setidUsuario($id_usuario_e){
        $this->id_usuario = $id_usuario_e;
    }
   
    //creacion metodo get y set no_igss
    public function getIgss(){
        return $this->igss;
    }

    public function  setIgss($igss_e){
        $this->igss = $igss_e;
    }

    //creacion metodo get y set fianza fianza
    public function getFianza(){
        return $this->fianza;
    }

    public function  setFianza($fianza_e){
        $this->fianza = $fianza_e;
    }

    //creacion metodo get y set judicial
    public function getJudicial(){
        return $this->judicial;
    }

    public function  setJudicial($judicial_e){
        $this->judicial = $judicial_e;
    }

    ///creacion metodo get y set timbre
    public function getTimbre(){
        return $this->timbre;
    }

    public function  setTimbre($timbre_e){
        $this->timbre = $timbre_e;
    }
    
    //creacion metodo get y set plan
    public function getPlan(){
        return $this->plan;
    }

    public function  setPlan($plan_e){
        $this->plan = $plan_e;
    }

    //creacion metodo get y set departamento
    public function getIdepartamento(){
        return $this->id_departamento;
    }

    public function  setIdepartamento($id_departamento_e){
        $this->id_departamento = $id_departamento_e;
    }

    //creacion metodo get y set departamento
    public function getNombred(){
        return $this->departamento;
    }

    public function  setNombred($departamento_e){
        $this->departamento = $departamento_e;
    }

    //isr dietas descuento
    public function getIsrDietasd(){
        return $this->isrdietasd;
    }

    public function setIsrDietasd($isrdietasd_d){
        $this->isrdietasd = $isrdietasd_d;
    }

    
    
   //------------------------------------------------//------------------------------------------------------
   //Creacion funcion guardar empleado

   public function guardarEmpleado($nombre,$pellido,$dpi,$nit,$fechan,$cuenta,$noigss,$noexp,$pago,
   $telefono,$salario,$otros,$boni,$sisr,$isrd,$fechai,$idm,$idr,$idc,$idu,$igss,$fianza,$judicial,
   $timbre,$plan,$isrdietasdd){

    //instanciamos la clase conexion
    $conexion = new Conexion();
    //nos conectamos a la base de datos mediante la funcion conectar
    $conexion->conectar();
    //efectuamos el codigo sql para la insercion de los datos del empleado
    $sql_empleado = "insert into empleado(nombres,apellidos,dpi,nit,fecha_nacimiento,no_cuenta,no_igss,no_expediente,forma_pago,telefono,salario_base,otros,bonificacion,salario_isr,isr_dieta,fecha_ingreso,id_municipio,id_renglon,id_cargo,id_usuario) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    //efecutamos el codigo sql para l insercion de los datos de descuentos obtenidos
    $sql_descuento = "insert into descuento(igss,fianza,judicial,timbre,plan,id_empleado,id_usuario,isrdieta) values(?,?,?,?,?,?,?,?)";

    //preparamos la insercion de empleados
    $ejecutar_empleado = $conexion->db->prepare($sql_empleado);
    $ejecutar_descuento = $conexion->db->prepare($sql_descuento);
    //ingresamos la cantidad de caracteres de empleado
    $ejecutar_empleado->bind_param('ssssssssssddddisiiii',$nombre,$pellido,$dpi,$nit,$fechan,$cuenta,$noigss,$noexp,$pago,
    $telefono,$salario,$otros,$boni,$sisr,$isrd,$fechai,$idm,$idr,$idc,$idu);
    $ejecutar_empleado->execute();
    //obtenemos el id del insert
    $lastid = mysqli_insert_id($conexion->db); 
    $resultado = 0;
    if($lastid === 0){      
    $resultado = $lastid + 1;  
    }else{
        $resultado = $lastid;
    }
    //ingresamos la cantidad de caracteres de descuentos
    $ejecutar_descuento->bind_param('iiiiiiii',$igss,$fianza,$judicial,
    $timbre,$plan,$resultado,$idu,$isrdietasdd);

    //ejecutamos el execute
    $ejecutar_descuento->execute();

    //nos desconectamos de la base de datos
    $conexion->desconectar();


   }

   //------------------------------------------------//---------------------------------------------------------------------------------------------
   //Funcion mostrar datos del empleado ----------------
   public function mostraEmpleados(){

    //instanciamos la clase conexion
    $conexion = new Conexion();
    //nos conectamos a la base de datos mediante la funcion conectar()
    $conexion->conectar();
    //destinamos una variable de tipo array 
    $empleadoArray = array();
    //realizamos la consulta mediante codigo sql
    $sql = "SELECT empleado.id_empleado,empleado.nombres,empleado.apellidos,empleado.dpi,empleado.nit,empleado.fecha_nacimiento,empleado.no_cuenta,empleado.no_igss,empleado.no_expediente,empleado.forma_pago,empleado.telefono,empleado.salario_base,empleado.otros,empleado.bonificacion,empleado.salario_isr,empleado.isr_dieta,empleado.estado,empleado.fecha_ingreso,empleado.fecha_egreso,empleado.id_municipio,empleado.id_renglon,empleado.id_cargo,municipio.nombre,renglon.nombre,cargo.nombre,descuento.igss,descuento.fianza,descuento.judicial,descuento.timbre,descuento.plan,departamento.id_departamento,departamento.nombre,dependencia.id_dependencia,dependencia.nombre FROM empleado INNER JOIN municipio on empleado.id_municipio = municipio.id_municipio INNER JOIN renglon on empleado.id_renglon = renglon.id_renglon INNER JOIN cargo on empleado.id_cargo=cargo.id_cargo INNER JOIN descuento on empleado.id_empleado=descuento.id_empleado INNER JOIN departamento on departamento.id_departamento=municipio.id_departamento INNER JOIN dependencia on dependencia.id_dependencia=cargo.id_dependencia";
    //realizamos la consulta mediante mysqli_query
    $resultado = mysqli_query($conexion->db,$sql);
    //recorremos la consulta mediante un ciclo while
    while($fila = mysqli_fetch_array($resultado)){

        $mostrarIndex = new Empleado();

        $mostrarIndex->setidEmpleado($fila[0]);
        $mostrarIndex->setNombre($fila[1]);
        $mostrarIndex->setApellido($fila[2]);
        $mostrarIndex->setDpi($fila[3]);
        $mostrarIndex->setNit($fila[4]);
        $mostrarIndex->setFecha_nacimiento($fila[5]);
        $mostrarIndex->setNocuenta($fila[6]);
        $mostrarIndex->setNoigss($fila[7]);
        $mostrarIndex->setNoexpediente($fila[8]);
        $mostrarIndex->setFopago($fila[9]);
        $mostrarIndex->setTelefono($fila[10]);
        $mostrarIndex->setSalario($fila[11]);
        $mostrarIndex->setOtros($fila[12]);
        $mostrarIndex->setBonificacion($fila[13]);
        $mostrarIndex->setSalario_isr($fila[14]);
        $mostrarIndex->setDieta_isr($fila[15]); //
        $mostrarIndex->setEstado($fila[16]);
        $mostrarIndex->setFingreso($fila[17]);
        $mostrarIndex->setFegreso($fila[18]);
        $mostrarIndex->setidMuncipio($fila[19]);
        $mostrarIndex->setidRenglon($fila[20]);
        $mostrarIndex->setidCargo($fila[21]);
        $mostrarIndex->setNombremu($fila[22]);
        $mostrarIndex->setNombrere($fila[23]);
        $mostrarIndex->setNombrecar($fila[24]);
        $mostrarIndex->setIgss($fila[25]);
        $mostrarIndex->setFianza($fila[26]);
        $mostrarIndex->setJudicial($fila[27]);
        $mostrarIndex->setTimbre($fila[28]);
        $mostrarIndex->setPlan($fila[29]);
        $mostrarIndex->setIdepartamento($fila[30]);
        $mostrarIndex->setNombred($fila[31]);
        $mostrarIndex->setidDependencia($fila[32]);
        $mostrarIndex->setNombrede($fila[33]);

        array_push($empleadoArray,$mostrarIndex);

    }

    //nos desconectamos de la base de datos
    $conexion->desconectar();
    //retornamos el array
    return  $empleadoArray;

   }

   //-----------------------------------------------------------//------------------------------------------------
   //funcion mostrar empleado2 solo activos------------------
   public function mostraEmpleados2(){

    //instanciamos la clase conexion
    $conexion = new Conexion();
    //nos conectamos a la base de datos mediante la funcion conectar()
    $conexion->conectar();
    //destinamos una variable de tipo array 
    $empleadoArray = array();
    //realizamos la consulta mediante codigo sql
    $sql = "SELECT empleado.id_empleado,empleado.nombres,empleado.apellidos,empleado.dpi,empleado.nit,empleado.fecha_nacimiento,empleado.no_cuenta,empleado.no_igss,empleado.no_expediente,empleado.forma_pago,empleado.telefono,empleado.salario_base,empleado.otros,empleado.bonificacion,empleado.salario_isr,empleado.isr_dieta,empleado.estado,empleado.fecha_ingreso,empleado.fecha_egreso,empleado.id_municipio,empleado.id_renglon,empleado.id_cargo,municipio.nombre,renglon.nombre,cargo.nombre,descuento.igss,descuento.fianza,descuento.judicial,descuento.timbre,descuento.plan,departamento.id_departamento,departamento.nombre,dependencia.id_dependencia,dependencia.nombre FROM empleado INNER JOIN municipio on empleado.id_municipio = municipio.id_municipio INNER JOIN renglon on empleado.id_renglon = renglon.id_renglon INNER JOIN cargo on empleado.id_cargo=cargo.id_cargo INNER JOIN descuento on empleado.id_empleado=descuento.id_empleado INNER JOIN departamento on departamento.id_departamento=municipio.id_departamento INNER JOIN dependencia on dependencia.id_dependencia=cargo.id_dependencia WHERE empleado.estado=1";
    //realizamos la consulta mediante mysqli_query
    $resultado = mysqli_query($conexion->db,$sql);
    //recorremos la consulta mediante un ciclo while
    while($fila = mysqli_fetch_array($resultado)){

        $mostrarIndex = new Empleado();

        $mostrarIndex->setidEmpleado($fila[0]);
        $mostrarIndex->setNombre($fila[1]);
        $mostrarIndex->setApellido($fila[2]);
        $mostrarIndex->setDpi($fila[3]);
        $mostrarIndex->setNit($fila[4]);
        $mostrarIndex->setFecha_nacimiento($fila[5]);
        $mostrarIndex->setNocuenta($fila[6]);
        $mostrarIndex->setNoigss($fila[7]);
        $mostrarIndex->setNoexpediente($fila[8]);
        $mostrarIndex->setFopago($fila[9]);
        $mostrarIndex->setTelefono($fila[10]);
        $mostrarIndex->setSalario($fila[11]);
        $mostrarIndex->setOtros($fila[12]);
        $mostrarIndex->setBonificacion($fila[13]);
        $mostrarIndex->setSalario_isr($fila[14]);
        $mostrarIndex->setDieta_isr($fila[15]); //
        $mostrarIndex->setEstado($fila[16]);
        $mostrarIndex->setFingreso($fila[17]);
        $mostrarIndex->setFegreso($fila[18]);
        $mostrarIndex->setidMuncipio($fila[19]);
        $mostrarIndex->setidRenglon($fila[20]);
        $mostrarIndex->setidCargo($fila[21]);
        $mostrarIndex->setNombremu($fila[22]);
        $mostrarIndex->setNombrere($fila[23]);
        $mostrarIndex->setNombrecar($fila[24]);
        $mostrarIndex->setIgss($fila[25]);
        $mostrarIndex->setFianza($fila[26]);
        $mostrarIndex->setJudicial($fila[27]);
        $mostrarIndex->setTimbre($fila[28]);
        $mostrarIndex->setPlan($fila[29]);
        $mostrarIndex->setIdepartamento($fila[30]);
        $mostrarIndex->setNombred($fila[31]);
        $mostrarIndex->setidDependencia($fila[32]);
        $mostrarIndex->setNombrede($fila[33]);

        array_push($empleadoArray,$mostrarIndex);

    }

    //nos desconectamos de la base de datos
    $conexion->desconectar();
    //retornamos el array
    return  $empleadoArray;

   }

   //--------------------------------------------//-----------------------------------------------------------------------------------------------------
   //Funcion ver datos del empleado---------------------------------
   public function empleadoVer($id_empleado){
        //instanciamos la clase conexion
        $conexion = new Conexion();
        //nos conectamos a la base de datos mediante la funcion conectar
        $conexion->conectar();
        //declaramos una variable de tipo clase empleado
        $empleadoArray = new Empleado();
        //realizamos la consulta sql mediante un select
        $sql = "select empleado.id_empleado,empleado.nombres,empleado.apellidos,empleado.dpi,empleado.nit,empleado.fecha_nacimiento,empleado.no_cuenta,empleado.no_igss,empleado.no_expediente,empleado.forma_pago,empleado.telefono,empleado.salario_base,empleado.otros,empleado.bonificacion,empleado.salario_isr,empleado.isr_dieta,empleado.estado,empleado.fecha_ingreso,empleado.fecha_egreso,empleado.id_municipio,empleado.id_renglon,empleado.id_cargo,municipio.nombre,renglon.nombre,cargo.nombre,descuento.igss,descuento.fianza,descuento.judicial,descuento.timbre,descuento.plan,departamento.id_departamento,departamento.nombre,dependencia.id_dependencia,dependencia.nombre,descuento.isrdieta FROM empleado INNER JOIN municipio on empleado.id_municipio = municipio.id_municipio INNER JOIN renglon on empleado.id_renglon = renglon.id_renglon INNER JOIN cargo on empleado.id_cargo=cargo.id_cargo INNER JOIN descuento on empleado.id_empleado=descuento.id_empleado INNER JOIN departamento on departamento.id_departamento=municipio.id_departamento INNER JOIN dependencia on dependencia.id_dependencia=cargo.id_dependencia WHERE empleado.id_empleado='".$id_empleado."'";
        //efectuamos la consulta mediante la funcion mysqli_query
        $resultado = mysqli_query($conexion->db,$sql);
        //recorremos la consulta mediante un ciclo while
        while($fila =  mysqli_fetch_array($resultado)){

        $empleadoArray->setidEmpleado($fila[0]);
        $empleadoArray->setNombre($fila[1]);
        $empleadoArray->setApellido($fila[2]);
        $empleadoArray->setDpi($fila[3]);
        $empleadoArray->setNit($fila[4]);
        $empleadoArray->setFecha_nacimiento($fila[5]);
        $empleadoArray->setNocuenta($fila[6]);
        $empleadoArray->setNoigss($fila[7]);
        $empleadoArray->setNoexpediente($fila[8]);
        $empleadoArray->setFopago($fila[9]);
        $empleadoArray->setTelefono($fila[10]);
        $empleadoArray->setSalario($fila[11]);
        $empleadoArray->setOtros($fila[12]);
        $empleadoArray->setBonificacion($fila[13]);
        $empleadoArray->setSalario_isr($fila[14]);
        $empleadoArray->setDieta_isr($fila[15]); //
        $empleadoArray->setEstado($fila[16]);
        $empleadoArray->setFingreso($fila[17]);
        $empleadoArray->setFegreso($fila[18]);
        $empleadoArray->setidMuncipio($fila[19]);
        $empleadoArray->setidRenglon($fila[20]);
        $empleadoArray->setidCargo($fila[21]);
        $empleadoArray->setNombremu($fila[22]);
        $empleadoArray->setNombrere($fila[23]);
        $empleadoArray->setNombrecar($fila[24]);
        $empleadoArray->setIgss($fila[25]);
        $empleadoArray->setFianza($fila[26]);
        $empleadoArray->setJudicial($fila[27]);
        $empleadoArray->setTimbre($fila[28]);
        $empleadoArray->setPlan($fila[29]);
        $empleadoArray->setIdepartamento($fila[30]);
        $empleadoArray->setNombred($fila[31]);
        $empleadoArray->setidDependencia($fila[32]);
        $empleadoArray->setNombrede($fila[33]);
        $empleadoArray->setIsrDietasd($fila[34]);

        }
        
        //nos deconectamos de la base de datos
        $conexion->desconectar();
        //retornamos el array obtenido
        return $empleadoArray;
   }

   //------------------------------------///-----------------------------------------------------------------------------------
   //Funcion editar empleado
   public function editarEmpleado($nombre,$apellido,$dpi,$nit,$fechan,$cuenta,$noigss,$noexp,$pago,
   $telefono,$salario,$otros,$boni,$sisr,$isrd,$fechai,$idm,$idr,$idc,$igss,$fianza,$judicial,
   $timbre,$plan,$isrdietasd,$idd){

    //instanciamos la clase conexion 
    $conexion = new Conexion();
    //nos conectamos a la base de datos mediante la funcion conectar
    $conexion->conectar();
    //realizamos la sentencia sql para editar los datos del empleado
    $sql_empleado = "update empleado set nombres=?, apellidos=?, dpi=?, nit=?, fecha_nacimiento=?, no_cuenta=?, no_igss=?,
    no_expediente=?, forma_pago=?, telefono=?, salario_base=?, otros=?, bonificacion=?, salario_isr=?, isr_dieta=?, fecha_ingreso=?,
    id_municipio=?, id_renglon=?, id_cargo=? where id_empleado=?";
    //realizamos la sentencia sql para editar los datos del descuento
    $sql_descuento = "update descuento set igss=?, fianza=?, judicial=?, timbre=?, plan=?, isrdieta=? where id_descuento=?";
    //preparamos las consultas
    //empleado
    $ejecutar_empleado = $conexion->db->prepare($sql_empleado);
    //descuento
    $ejecutar_descuento = $conexion->db->prepare($sql_descuento);
    //insertamos la cantidad de parametros que llevara la consulta
    //empleado 
    $ejecutar_empleado->bind_param('ssssssssssdddddsiiii',$nombre,$apellido,$dpi,$nit,$fechan,$cuenta,$noigss,$noexp,$pago,
    $telefono,$salario,$otros,$boni,$sisr,$isrd,$fechai,$idm,$idr,$idc,$idd);
    //descuento
    $ejecutar_descuento->bind_param('iiiiiii',$igss,$fianza,$judicial,$timbre,$plan,$isrdietasd,$idd);
    //realizamos el execute de ambos
    //empleado
    $ejecutar_empleado->execute();
    //descuento
    $ejecutar_descuento->execute();
    //nos desconectamos de la base de datosdatos
    $conexion->desconectar();

   }

   public function eliminarEmpleado($id_empleado,$fecha){
       //instanciamos la clase conexion
       $conexion = new Conexion();
       //nos conectamos a la base de datos mediante la funcion conectar
       $conexion->conectar();
       //destinamos una variable de estado inicializada en 0 para cambiar el estado del usuario
       $estado=0;
       //realizamos la consulta sql para el update de datos o eliminar empleado
       $sql = "update empleado inner join descuento on descuento.id_empleado = empleado.id_empleado set empleado.estado=?, descuento.estado=?, empleado.fecha_egreso=? 
       where empleado.id_empleado=? and empleado.estado=1";
       //preparamos la consulta
       $ejecutar = $conexion->db->prepare($sql);
       //insertamos la cantidad de caracteres
       $ejecutar->bind_param('iisi',$estado,$estado,$fecha,$id_empleado);
       //realizamos el execute
       $ejecutar->execute();
       //nos desconectamos de la base de datos
       $conexion->desconectar();
   }

   public function devolverEmpleado($id_empleado,$fecha){
    //instanciamos la clase conexion
    $conexion = new Conexion();
    //nos conectamos a la base de datos mediante la funcion conectar
    $conexion->conectar();
    //destinamos una variable de estado inicializada en 0 para cambiar el estado del usuario
    $estado=1;
    //realizamos la consulta sql para el update de datos o eliminar empleado
    $sql = "update empleado inner join descuento on descuento.id_empleado = empleado.id_empleado set empleado.estado=?, descuento.estado=?, empleado.fecha_ingreso=? 
    where empleado.id_empleado=? and empleado.estado=0";
    //preparamos la consulta
    $ejecutar = $conexion->db->prepare($sql);
    //insertamos la cantidad de caracteres
    $ejecutar->bind_param('iisi',$estado,$estado,$fecha,$id_empleado);
    //realizamos el execute
    $ejecutar->execute();
    //nos desconectamos de la base de datos
    $conexion->desconectar();
}

//----------------------------------//-------------------------------------------------------------------------------------------------------------------------
//Funcion validar si ya existe el empleado--------------------------
public function validarEmpleado($nombre,$apellido,$nit,$dpi,$igss,$cuenta,$expediente,
$cargo){

    //instanciamos la clase conexion
    $conexion = new Conexion();
    //nos conectamos a la base de datos mediante la funcion conectar
    $conexion->conectar();
    //destinamos una variable estado en 0 para valuar si existe o no
    $estado=0;
    //realizamos la consulta sql 
    $sql = "select nombres,apellidos,nit,dpi,no_igss,no_cuenta,no_expediente,id_cargo from empleado where nombres='".$nombre."'".
    "and apellidos='".$apellido."'". "and nit='".$nit."'"."and dpi='".$dpi."'". "and no_igss='".$igss."'"."and no_cuenta='".$cuenta."'".
    "and no_expediente='".$expediente."'"."and id_cargo='".$cargo."'";

    //efectuamos la consulta
    $resultado = mysqli_query($conexion->db,$sql);

    while($fila = mysqli_fetch_array($resultado)){
        if(strcmp($fila[0],$nombre)===0 && strcmp($fila[1],$apellido)===0 && strcmp($fila[2],$nit)===0 && strcmp($fila[3],$dpi)===0 &&
        strcmp($fila[4],$igss)===0 && strcmp($fila[5],$cuenta)===0 && strcmp($fila[6],$expediente)===0 && strcmp($fila[7],$cargo)===0){
            $estado=1;
            break;
        }

    }    

    //nos desconectamos de la base de datos
    $conexion->desconectar();
    //retornamos la varaible estado
    return $estado;
    

}



}


?>