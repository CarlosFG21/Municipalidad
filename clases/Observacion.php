<?php

class Observacion{

    public $idObservacion;
    public $descripcion;
    public $estado;
    public $fecha;
    public $hora;
    public $id_empleado;
    public $id_tipo;
    public $nombre_empleado;
    public $apellido_empleado;
    public $nombre_observacion;

    //creacion de metodos get y set_error_handler
    //id observacion 
    public function getidObservacion(){
        return $this->idObservacion;
    }

    public function setidObservacion($idObservacion_o){
        $this->idObservacion =  $idObservacion_o;
    } 

    //descripcion
    public function getDescripcion(){
        return $this->descripcion;
    }

    public function setDescripcion($descripcion_o){
       $this->descripcion = $descripcion_o;
    }

    //estado
    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado_o){
        $this->estado =  $estado_o;
    }

    //hora
    public function getHora(){
        return $this->hora;
    }

    public function setHora($hora_o){
        $this->hora = $hora_o;
    }

    //empleado
    public function getIdempleado(){
        return $this->id_empleado;
    }

    public function setIdempleado($id_empleado_o){
        $this->id_empleado = $id_empleado_o;
    }

    //tipo de observacion
    public function getidTipo(){
        return $this->id_tipo;
    }

    public function setidTipo($id_tipo_o){
        $this->id_tipo = $id_tipo_o;
    }

    //nombre empleado
    public function getNempleado(){
        return $this->nombre_empleado;
    }

    public function setNempleado($nombre_empleado_o){
        $this->nombre_empleado = $nombre_empleado_o;
    }

    public function getAempleado(){
        return $this->apellido_empleado;
    }

    public function setAempleado($apellido_empleado_o){
        $this->apellido_empleado = $apellido_empleado_o;
    }
    //nombre observacion
    public function getNobservacion(){
        return $this->nombre_observacion;
    }

    public function setNobservacion($nombre_observacion_o){
        $this->nombre_observacion = $nombre_observacion_o;
    }

    //--------------------------------------------------------///---------------------------------------------------------------------------------
    //Creacion de funcion obtener observaciones de un empleado

    public function obtenerObservacionEmpleado($id_empleado){

        //instanciamos la clase conexion
        $conexion = new Conexion();
        //nos conectamos a la base de datos mediante la funcion conectar
        $conexion->conectar();
        //declaramos una variable de tipo array
        $observacionArray = array();
        //realizamos la consulta 
        $sql = "select observacion.id_observacion,observacion.descripcion,observacion.estado,observacion.id_empleado,observacion.id_tipo_observacion,empleado.nombres,empleado.apellidos,tipo_observacion.nombre from observacion INNER JOIN empleado on observacion.id_empleado = empleado.id_empleado INNER JOIN tipo_observacion on observacion.id_tipo_observacion = tipo_observacion.id_tipo_observacion where observacion.id_empleado='".$id_empleado."'";
        //ejecutamos la consulta que se realizo
        $ejecutar = mysqli_query($conexion->db,$sql);
        //recorremos la consulta mediante un ciclo while
        while($fila = mysqli_fetch_array($ejecutar)){

            $index = new Observacion();

            $index->setidObservacion($fila['id_observacion']);
            $index->setDescripcion($fila['descripcion']);
            $index->setEstado($fila['estado']);
            $index->setIdempleado($fila['id_empleado']);
            $index->setidTipo($fila['id_tipo_observacion']);
            $index->setNempleado($fila['nombres']);
            $index->setAempleado($fila['apellidos']);
            $index->setNobservacion($fila['nombre']);
            
           array_push($observacionArray,$index);
        }

        //nos desconectamos de la base de datos
        $conexion->desconectar();

        //retornamos los resultados obtenido
        return $observacionArray;
    }

    //------------------------------------------///------------------------------------------------------------------------------------------------
    //Funcion ingresar observacion del empleado
    public function observacionIngresar($descripciono,$id_empleadoo,$id_tipoo){

        //intanciamos la clase conexion
        $conexion = new Conexion();
        //nos conectamos a la base de datos mediante la funcion conectar
        $conexion->conectar();
        //realizamos el script para ingresar los datos del insert
        $sql = "insert into observacion(descripcion,id_empleado,id_tipo_observacion) values(?,?,?)";
        //preparo la consulta
        $ejecutar = $conexion->db->prepare($sql);
        //ingreso la cantidad de caracteres
        $ejecutar->bind_param('sii',$descripciono,$id_empleadoo,$id_tipoo);
        //realizo el execute
        $ejecutar->execute();
        //nos desconectamos de la base de datos
        $conexion->desconectar();
    }

    public function verObservacion($id_observacion){
        //instanciamos la clase conexion
        $conexion = new Conexion();
        //nos conectamos a la base de datos mediante la funcion conectar
        $conexion->conectar();
        //creamos un array de tipo clase 
        $observacionArray = new Observacion();
        //realizamos el scrip sql para obtener los datos 
        $sql = "SELECT observacion.id_tipo_observacion,observacion.descripcion,tipo_observacion.nombre,observacion.estado,observacion.hora_commit from observacion INNER JOIN tipo_observacion on observacion.id_tipo_observacion = tipo_observacion.id_tipo_observacion where observacion.id_observacion='".$id_observacion."'";
        //efectuamos la consulta mediante la funcion mysqli_query
        $ejecutar = mysqli_query($conexion->db,$sql);
        //recorremos la consulta mediante un ciclo while
        while($fila = mysqli_fetch_array($ejecutar)){
            
            $observacionArray->setidTipo($fila[0]);
            $observacionArray->setDescripcion($fila[1]);
            $observacionArray->setNobservacion($fila[2]);
            $observacionArray->setEstado($fila[3]);
            $observacionArray->setHora($fila[4]);

        }

        //nos desconectamos de la base de datos
        $conexion->desconectar();
        //retornamos los valores obtenidos
        return  $observacionArray; 
    }

    //--------------------------------------------///----------------------------------------------------------------------------------------------------
    //Funcion eliminar observacion-----------------------
    public function eliminarObservacion($id){
        //instanciamos la clase conexion
        $conexion = new Conexion();
        //nos conectamos a la base de datos mediante la funcion conectar
        $conexion->conectar();
        //destinamos una variable estado para cambiar el estado de la observacion
        $estado=0;
        //realizamos la consulta sql 
        $sql = "update observacion set estado=? where id_observacion=?"; 
        //preparamos la consultatabla 
        $ejecutar = $conexion->db->prepare($sql);
        //ingresamos la cantidad de caracteres
        $ejecutar->bind_param('ss',$estado,$id);
        //realizamos el execute
        $ejecutar->execute();
    }

    //Funcion reactivar observacion
    public function reactivarObservacion($id){
        //instanciamos la clase conexion
        $conexion = new Conexion();
        //nos conectamos a la base de datos mediante la funcion conectar
        $conexion->conectar();
        //destinamos una variable estado para cambiar el estado de la observacion
        $estado=1;
        //realizamos la consulta sql 
        $sql = "update observacion set estado=? where id_observacion=?"; 
        //preparamos la consultatabla 
        $ejecutar = $conexion->db->prepare($sql);
        //ingresamos la cantidad de caracteres
        $ejecutar->bind_param('ss',$estado,$id);
        //realizamos el execute
        $ejecutar->execute();
    }

    //-----------------------------------------------////----------------------------------------------------------------------------------------------------
    //Funcion editar observacion 
    public function editarObservacion($tipo,$descripcion,$id){
        //instanciamos la clase conexion
        $conexion = new Conexion();
        //nos conectamos a la base de datos mediante la funcion conectar
        $conexion->conectar();
        //realizamos la sentencia sql para editar los datos
        $sql = "update observacion set id_tipo_observacion=?, descripcion=? where id_observacion=?";
        //preparamos la consulta
        $ejecutar = $conexion->db->prepare($sql);
        //ingresamos la cantidad de caracteres
        $ejecutar->bind_param('isi',$tipo,$descripcion,$id);
        //execute
        $ejecutar->execute();
        //nos desconectamos de la base de datos
        $conexion->desconectar();
    }

    //--------------------------------------------------///////--------------------------------------------------------------------------------------
    //Obtener id de observacion-------------------------------------------
    public function obtenerIdOb(){
        //instanciamos la clase conexion---------------------------------------------
        $conexion = new Conexion();
        //nos conectamos a la base de datos mediante la funcion conectar
        $conexion->conectar();
        //destinamos una variable de tipo observacion
        $idObservacion = new Observacion();
        //relizamos el scrip 
        $sql = "select id_observacion from observacion order by id_observacion desc limit 1";
        //efectuamos la consulta
        //destinamos una variable que nos devolvera el resultado
        $res=0;
        $resultado = mysqli_query($conexion->db,$sql);
        //recorremos la consulta mediante un ciclo while
        while($fila = mysqli_fetch_array($resultado)){
             $res = $fila['id_observacion'];
        }

        //nos desconectamos de la base de datos
        $conexion->desconectar();
        //retornamos el dato obtenido
        return $res;
    }

    //---------------------///-----------------------------------------------------------------------------------------------------------------------------
    //Funcion buscar por id----------------------------------------------------
    public function buscarId($id_observacion){
        //instanciamos la clase conexion
        $conexion = new Conexion();
        //nos conectamos a la base de datos mediante la funcion conectar
        $conexion->conectar();
        //creamos un array de tipo clase 
        $observacionArray = new Observacion();
        //realizamos el scrip sql para obtener los datos 
        $sql = "SELECT observacion.id_tipo_observacion,observacion.descripcion,tipo_observacion.nombre,observacion.estado,empleado.nombres,empleado.apellidos from observacion INNER JOIN tipo_observacion on observacion.id_tipo_observacion = tipo_observacion.id_tipo_observacion INNER JOIN empleado on observacion.id_empleado= empleado.id_empleado where observacion.id_observacion='".$id_observacion."'";
        //efectuamos la consulta mediante la funcion mysqli_query
        $ejecutar = mysqli_query($conexion->db,$sql);
        //recorremos la consulta mediante un ciclo while
        while($fila = mysqli_fetch_array($ejecutar)){
            
            $observacionArray->setidTipo($fila['id_tipo_observacion']);
            $observacionArray->setDescripcion($fila['descripcion']);
            $observacionArray->setNobservacion($fila['nombre']);
            $observacionArray->setEstado($fila['estado']);
            $observacionArray->setNempleado($fila['nombres']);
            $observacionArray->setAempleado($fila['apellidos']);

        }

        //nos desconectamos de la base de datos
        $conexion->desconectar();
        //retornamos los valores obtenidos
        return  $observacionArray; 
    }

}


?>