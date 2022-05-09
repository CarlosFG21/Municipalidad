<?php

class Pago{ 

    public $forma;
    public $descripcion;
    public $id_planilla;
    public $id_usuario;
    public $id_pago;
    public $fecha;
    public $estado;

    //Pagos empleadoge
    public  $nombres;
    public  $apellidos;
    public  $cargo;
    public  $dependencia;

    //planilla
    public $mes;
    public $anio;
    public $sueldo;


    //----------------------------------------------------------------------------------------------------------------
    //Creacion de metodos get y set--------------------
    //forma
    public function getForma(){
        return $this->forma;
     }

     public function setForma($forma_p){
         $this->forma = $forma_p;
     }


     //descripcion
     public function getDescripcion(){
         return $this->descripcion;
     }

     public function setDescripcion($descripcion_p){
         $this->descripcion = $descripcion_p;
     }

     //id planilla
     public function getIdplanilla(){
         return $this->id_planilla;
     }

     public function setIdplanilla($id_planilla_p){
         $this->id_planilla = $id_planilla_p;
     }

     //id usuario
     public function getIdusuario(){
         return $this->id_usuario;
     }

     public function setIdusuario($id_usuario_p){
             $this->id_usuario = $id_usuario_p;
     }

     //id pago
     public function getIdpago(){
         return $this->id_pago;
     }

     public function setIdpago($id_pago_p){
         $this->id_pago = $id_pago_p;
     }

     //fecha
     public function getFecha(){
         return $this->fecha;
     }

     public function setFecha($fecha_p){
         $this->fecha =  $fecha_p;
     }

     //estado
     public function getEstado(){
         return $this->estado;
     }

     public function setEstado($estado_p){
         $this->estado =  $estado_p;
     }
     
     //nombre empleado
     public function getNombres(){
         return $this->nombres;
     }

     public function setNombres($nombres_p){
         $this->nombres =  $nombres_p;
     }

     //apellido empleado
     public function getApellido(){
         return $this->apellidos;
     }

     public function setApellido($apellidos_p){
         $this->apellidos = $apellidos_p;
     }

     //cargo
     public function getCargo(){
         return $this->cargo;
     }

     public function setCargo($cargo_p){
          $this->cargo  = $cargo_p;
     }

     //dependencia
     public function getDependencia(){
         return $this->dependencia;
     }

     public function setDependencia($dependencia_p){
         $this->dependencia = $dependencia_p;
     }

     //planilla
     public function getMes(){
         return $this->mes;
     }

     public function setMes($mes_p){
         $this->mes = $mes_p;
     }

     public function getAnio(){
         return $this->anio;
     }

     public function setAnio($anio_p){
        $this->anio =  $anio_p;
     }

     public function getSueldo(){
         return $this->sueldo;
     }

     public function setSueldo($sueldo_p){
         $this->sueldo = $sueldo_p;
     }

     //Funcion guardar pago
     public function Guardarpago($forma,$descripcion,$id_planilla,$id_usuario){
         //se efectua la instancia de la base de datos
         $conexion = new Conexion();
         //nos conectamos a la base de datos mediante la funcion conectar
         $conexion->conectar();
         //realizamos el sql donde se ingresaran los datos
         $sql = "insert into pago(forma_pago,descripcion,id_planilla,id_usuario) values(?,?,?,?)";
         //preparamos la base de datos para hacer el insert
         $ejecutar = $conexion->db->prepare($sql);
         //ingresamos la cantidad de caracteres
         $ejecutar->bind_param('ssii',$forma,$descripcion,$id_planilla,$id_usuario);
         //efecuatmos el execute
         $ejecutar->execute();
         //nos desconectamos de la base de datos
         $conexion->desconectar();
     }

     //funcion validad pago
     public function ValidarPago($idPlanilla){
         //instanciamos la conexion
         $conexion = new Conexion();
         //nos conectamos a la base de datos mediante la funcion conectar
         $conexion->conectar();
         //destinamos una variable estado para su validacion
         $estado=0;
         //efectuamos el sql para hacer la consultla base de dato
         $sql = "select id_planilla from pago where id_planilla='".$idPlanilla."'";
        //hacemos la consulta enviandola a la base de datos
        $resultado = mysqli_query($conexion->db,$sql);
        //recorremos la consulta mediante un ciclo while
        while($fila = mysqli_fetch_array($resultado)){
            if(strcmp($fila[0],$idPlanilla)===0){
                $estado=1;
                break;
            }

        }
        
        $conexion->desconectar();
        return $estado;

     }

     //funcion mostrar pagos
     public function MostrarPagos(){
         //instanciamos la clase conexion
         $conexion = new Conexion();
         //nos conectamos a la base de datos mediante la funcion conectar
         $conexion->conectar();
         //declaramos una variable de tipo array
         $arrayPagos = array();
         //efectuamos el sql para obtener los datos 
         $sql = "select pago.id_pago,empleado.nombres,empleado.apellidos,cargo.nombre,dependencia.nombre,planilla.mes,planilla.anio,pago.forma_pago,pago.descripcion,pago.estado from pago INNER JOIN planilla on pago.id_planilla = planilla.id_planilla INNER JOIN empleado on planilla.id_empleado = empleado.id_empleado INNER JOIN cargo on empleado.id_cargo = cargo.id_cargo INNER JOIN dependencia on cargo.id_dependencia = dependencia.id_dependencia";
         //realizamos la consulta del sql consultado
         $resultado = mysqli_query($conexion->db,$sql);
          //recorremos la consulta mediante un ciclo while
          while($fila = mysqli_fetch_array($resultado)){
              $arrayIndex = new Pago();

              $arrayIndex->setIdpago($fila[0]);
              $arrayIndex->setNombres($fila[1]);
              $arrayIndex->setApellido($fila[2]);
              $arrayIndex->setCargo($fila[3]);
              $arrayIndex->setDependencia($fila[4]);
              $arrayIndex->setMes($fila[5]);
              $arrayIndex->setAnio($fila[6]);
              $arrayIndex->setForma($fila[7]);
              $arrayIndex->setDescripcion($fila[8]);
              $arrayIndex->setEstado($fila[9]);

              array_push($arrayPagos, $arrayIndex);
          }

          //nos desconectamos de la base de datos
          $conexion->desconectar();
          return $arrayPagos; 
     } 
     
     //funcion buscar por empleado
     public function MostrarporEmpleado($idempleado){
        //instanciamos la clase conexion
        $conexion = new Conexion();
        //nos conectamos a la base de datos mediante la funcion conectar
        $conexion->conectar();
        //declaramos una variable de tipo array
        $arrayPagos = array();
        //efectuamos el sql para obtener los datos 
        $sql = "select pago.id_pago,empleado.nombres,empleado.apellidos,cargo.nombre,dependencia.nombre,planilla.mes,planilla.anio,pago.forma_pago,pago.descripcion,pago.estado from pago INNER JOIN planilla on pago.id_planilla = planilla.id_planilla INNER JOIN empleado on planilla.id_empleado = empleado.id_empleado INNER JOIN cargo on empleado.id_cargo = cargo.id_cargo INNER JOIN dependencia on cargo.id_dependencia = dependencia.id_dependencia where empleado.id_empleado='".$idempleado."'";
        //realizamos la consulta del sql consultado
        $resultado = mysqli_query($conexion->db,$sql);
         //recorremos la consulta mediante un ciclo while
         while($fila = mysqli_fetch_array($resultado)){
             $arrayIndex = new Pago();

             $arrayIndex->setIdpago($fila[0]);
             $arrayIndex->setNombres($fila[1]);
             $arrayIndex->setApellido($fila[2]);
             $arrayIndex->setCargo($fila[3]);
             $arrayIndex->setDependencia($fila[4]);
             $arrayIndex->setMes($fila[5]);
             $arrayIndex->setAnio($fila[6]);
             $arrayIndex->setForma($fila[7]);
             $arrayIndex->setDescripcion($fila[8]);
             $arrayIndex->setEstado($fila[9]);

             array_push($arrayPagos, $arrayIndex);
         }

         //nos desconectamos de la base de datos
         $conexion->desconectar();
         return $arrayPagos; 
    }

    //Funcion mostrar por dependencia
    public function MostrarporDependencia($nombred){
        //instanciamos la clase conexion
        $conexion = new Conexion();
        //nos conectamos a la base de datos mediante la funcion conectar
        $conexion->conectar();
        //declaramos una variable de tipo array
        $arrayPagos = array();
        //efectuamos el sql para obtener los datos 
        $sql = "select pago.id_pago,empleado.nombres,empleado.apellidos,cargo.nombre,dependencia.nombre,planilla.mes,planilla.anio,pago.forma_pago,pago.descripcion,pago.estado from pago INNER JOIN planilla on pago.id_planilla = planilla.id_planilla INNER JOIN empleado on planilla.id_empleado = empleado.id_empleado INNER JOIN cargo on empleado.id_cargo = cargo.id_cargo INNER JOIN dependencia on cargo.id_dependencia = dependencia.id_dependencia where dependencia.nombre='".$nombred."'";
        //realizamos la consulta del sql consultado
        $resultado = mysqli_query($conexion->db,$sql);
         //recorremos la consulta mediante un ciclo while
         while($fila = mysqli_fetch_array($resultado)){
             $arrayIndex = new Pago();

             $arrayIndex->setIdpago($fila[0]);
             $arrayIndex->setNombres($fila[1]);
             $arrayIndex->setApellido($fila[2]);
             $arrayIndex->setCargo($fila[3]);
             $arrayIndex->setDependencia($fila[4]);
             $arrayIndex->setMes($fila[5]);
             $arrayIndex->setAnio($fila[6]);
             $arrayIndex->setForma($fila[7]);
             $arrayIndex->setDescripcion($fila[8]);
             $arrayIndex->setEstado($fila[9]);

             array_push($arrayPagos, $arrayIndex);
         }

         //nos desconectamos de la base de datos
         $conexion->desconectar();
         return $arrayPagos; 
    }

    //funcion vista pagos
    public function verPago($idpago){
        //instanciamos con la clase conexion
        $conexion = new Conexion();
        //nos conectamos a la funcion conectar
        $conexion->conectar();
        //declaramos una variable de tipo pago
        $arrayPago = new Pago();
        //realizamos la consulta sql
        $sql = "select pago.id_pago,empleado.nombres,empleado.apellidos,cargo.nombre,dependencia.nombre,planilla.mes,planilla.anio,pago.forma_pago,pago.descripcion,pago.estado,planilla.sueldo_recibido,pago.fecha_commit from pago INNER JOIN planilla on pago.id_planilla = planilla.id_planilla INNER JOIN empleado on planilla.id_empleado = empleado.id_empleado INNER JOIN cargo on empleado.id_cargo = cargo.id_cargo INNER JOIN dependencia on cargo.id_dependencia = dependencia.id_dependencia where pago.id_pago='".$idpago."'";
        //efectuamos la consulta 
        $resultado = mysqli_query($conexion->db,$sql);
        //recorremos la consultala mediante un ciclo while
        while($fila = mysqli_fetch_array($resultado)){

            $arrayPago->setIdpago($fila[0]);
            $arrayPago->setNombres($fila[1]);
            $arrayPago->setApellido($fila[2]);
            $arrayPago->setCargo($fila[3]);
            $arrayPago->setDependencia($fila[4]);
            $arrayPago->setMes($fila[5]);
            $arrayPago->setAnio($fila[6]);
            $arrayPago->setForma($fila[7]);
            $arrayPago->setDescripcion($fila[8]);
            $arrayPago->setEstado($fila[9]);
            $arrayPago->setSueldo($fila[10]);
            $arrayPago->setFecha($fila[11]);

        }

        //nos desconectamos de la base de datos
        $conexion->desconectar();
        return $arrayPago;
    }

    //funcion editar pago
    public function editarPago($forma,$descripcion,$fecha,$id){
        //instanciamos la clase conexion
        $conexion = new Conexion();
        //nos conectamso a la base de datos mediante la funcion conectar
        $conexion->conectar();
        //realizamos la consulta sql
        $sql = "update pago set forma_pago=?, descripcion=?, fecha_commit=? where id_pago=?";
        //preparamos la consulta
        $ejecutar = $conexion->db->prepare($sql);
        //agregamos la cantidad de caracteres
        $ejecutar->bind_param('sssi',$forma,$descripcion,$fecha,$id);
        //realizamos el execute
        $ejecutar->execute();
        //nos desconectamos de la base de datos
        $conexion->desconectar();

    }

}

?>