<?php

class Pago{ 

    public $forma;
    public $descripcion;
    public $id_planilla;
    public $id_usuario;
    public $id_pago;
    public $fecha;
    public $estado;

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
     
}

?>