<?php

class Renglon{

     public $idrenglon;
     public $nombre_renglon;
     public $descripcion;
     public $estado;
     public $fecha;
     public $hora;


     //creacion de metodos get y set de idrenglon
     public function getidRenglon(){
         return $this->idrenglon;
     }

     public function setidRenglon($id_r){
         $this->idrenglon = $id_r;
     }

     //creacion de metodos get y set de nombre renglon
     public function getNombrer(){
         return $this->nombre_renglon;
     }

     public function setNombrer($nombre_r){
         $this->nombre_renglon = $nombre_r;
     }

     //creacion de metodo get y set de descripcion
     public function getDescripcion(){
         return $this->descripcion;
     }

     public function setDescripcion($descripcion_r){
          $this->descripcion = $descripcion_r;
     }

     //creacion metodo get y set estado
     public function getEstado(){
         return $this->estado;
     }

     public function setEstado($estado_r){
         $this->estado = $estado_r;
     }

     //creacion metodo get y set fecha
     public function getFecha(){
         return $this->estado;
     }

     public function setFecha($fecha_r){
        $this->fecha = $fecha_r;
     }

     //creacion metodo get y set hora
     public function getHora(){
         return $this->hora;
     }

     public function setHora($hora_r){
         $this->hora = $hora_r;
     }

     //-------------------------------------/////////////-----------------------------------------------------------------------------------
     //Creacion funcion guardar rengon
     public function guardarRenglon($nombregr,$descripciongr){
         //instanciamos la clase conexion
         $conexion = new Conexion();
         //nos conectamos a la base de datos mediante la funcion conectar
         $conexion->conectar();
         //ingresamos una sentencia sql para el registro de los datos
         $sql = "insert into renglon(nombre,descripcion) values(?,?)";
         //preparacion de insert
         $ejecutar = $conexion->db->prepare($sql);
         //ingrear la cantidad de parametros
         $ejecutar->bind_param('ss',$nombregr,$descripciongr);
         //efectuamos a excepcion
         $ejecutar->execute();
         //desconectamos de la base de datos
         $conexion->desconectar();
     }

     //-----------------------------------------///------------------------------------------
     //Funcion validar si el renglo existe--------------------------------
     public function validarRenglon($renglonv){
         //instanciamos la clase conexionde 
         $conexion = new Conexion();
         //nos conectamos a la base de datos mediante la funcion conectar
         $conexion->conectar();
         //destinamos una variable en valor 0 por si se encuentra el renglon cambia a estado 1
         $estado=0;
         //efectuamos el scrip para la verificacion del renglon
         $sql = "select nombre from renglon where nombre='".$renglonv."'";
         //realizamos la consulta mediante la funcion sqli_query
         $resultado = mysqli_query($conexion->db,$sql);
         //recorremos la consulta mediante un ciclo while
         while($fila =  mysqli_fetch_array($resultado)){
             if(strcmp($fila[0],$renglonv)===0){
                 $estado=1;
                 break;
             }
         }

         //nos desconectamos de la base de datos
         $conexion->desconectar();
         //retornamos el valor de la variable
         return $estado;
     }

     //--------------------------------------------///----------------------------------------------------------------------------------------------------
     //Funcion mostrar los renglones registrado------------------------------
     public function mostrarRenglones(){
         //instanciamos la clase conexion
         $conexion = new Conexion();
         //nos conectamos a la base de datos mediante la funcion conectar
         $conexion->conectar();
         //destinamos una variable de tipo array la cual se estara retornando con los datos obtenidos
         $renglonArray = array();
         //efectuamos la consulta mediante codigo sql
         $sql = "select * from renglon";
         //la realizamos mediante mysqli_query
         $resultado = mysqli_query($conexion->db,$sql);

         while($fila = mysqli_fetch_array($resultado)){

             $indexMostrar = new Renglon();

             $indexMostrar->setidRenglon($fila[0]);
             $indexMostrar->setNombrer($fila[1]);
             $indexMostrar->setDescripcion($fila[2]);
             $indexMostrar->setEstado($fila[3]);
             $indexMostrar->setFecha($fila[4]);
             $indexMostrar->setHora($fila[5]);
             
             array_push($renglonArray,$indexMostrar);
         }

        //nos desconectamos de la base de datos;
        $conexion->desconectar();

         return $renglonArray;
     }

     ///-----------------------------------///-----------------------------------------------------------------------
     //Funcion ver datos del renglon seleccionado----------------------------------------------------
     public function obtenerRenglonvista($id_renglon){
         //instanciamos la clase conexion
         $conexion = new Conexion();
         //nos conectamos a la base de datos mediante la funcion conectar
         $conexion->conectar();
         //instanciamos la clase renglon
         $arrayrenglon = new Renglon();
         //realizamos el codigo sql para la consulta a la base de datos
         $sql = "select * from renglon where id_renglon='".$id_renglon."'";
         //efectuamos la consulta mediante la funcion mysqli_query
         $resultado = mysqli_query($conexion->db,$sql);
         //recorremos el resultado mediante un ciclo while
         while($fila = mysqli_fetch_array($resultado)){

             $arrayrenglon->setidRenglon($fila[0]);
             $arrayrenglon->setNombrer($fila[1]);
             $arrayrenglon->setDescripcion($fila[2]);
             $arrayrenglon->setEstado($fila[3]);
             $arrayrenglon->setFecha($fila[4]);
             $arrayrenglon->setHora($fila[5]);
         }

         //nos desconectamos de la base de datos
         $conexion->desconectar();
         //retornamos la variable renglon
         return $arrayrenglon;
     }

     //----------------------------------------------///------------------------------------------------------------------------------------------------
     //Funcion editar datos del renglon

     public function editarRenglon($nombree,$descripcione,$ide){
         //instanciamos la clase conexion
         $conexion = new Conexion();
         //nos conectamos a la base de datos mediante la funcion conectar
         $conexion->conectar();
         //realizamos el scrip para la edicion de los datos
         $sql = "update renglon set nombre=?, descripcion=? where id_renglon=?";
         //preparamos la consulta
         $ejecutar = $conexion->db->prepare($sql);
         //ingresamos la cantidad caracteres
         $ejecutar->bind_param('ssi',$nombree,$descripcione,$ide);
         //execute
         $ejecutar->execute();
         //nos desconectamos de la base de datosdatos
         $conexion->desconectar();        
     }

     //---------------------------------///-----------------------------------------------
     //Funcion eliminar renglon--------------------------
     public function eliminarRenglon($id_renglon){

        //instanciamos la clase conexion
        $conexion = new Conexion();
        //nos conectamos a la base de datos por medio de la funcion conectar
        $conexion->conectar();
        //destinamos una variable estado de tipo 0 que cambiara el estado del renglon
        $estado=0;
        //realizamos el scrip de update de los datos que queremos moficar en este caso estado
        $sql = "update renglon set estado=? where id_renglon=?";
        //efecutamos la repreparacion de la consulta a la base de datos
        $ejecutar =$conexion->db->prepare($sql);

        //ingresamos la cantidad de parametros
        $ejecutar->bind_param('ii',$estado,$id_renglon);
        //realizamos el execute
        $ejecutar->execute();
        //nos desconectamos de la base de datos

     }

     //Funcion devolver renglon--------------------------
     public function devolverRenglon($id_renglonv){

        //instanciamos la clase conexion
        $conexion = new Conexion();
        //nos conectamos a la base de datos por medio de la funcion conectar
        $conexion->conectar();
        //destinamos una variable estado de tipo 0 que cambiara el estado del renglon
        $estado=1;
        //realizamos el scrip de update de los datos que queremos moficar en este caso estado
        $sql = "update renglon set estado=? where id_renglon=?";
        //efecutamos la repreparacion de la consulta a la base de datos
        $ejecutar =$conexion->db->prepare($sql);

        //ingresamos la cantidad de parametros
        $ejecutar->bind_param('ii',$estado,$id_renglonv);
        //realizamos el execute
        $ejecutar->execute();
        //nos desconectamos de la base de datos

     }
}


?>