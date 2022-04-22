<?php

class Cargo{

    //Definimos la variables de la clase cargo
    public $idcargo;
    public $nombre;
    public $descripcion;
    public $idependencia;
    public $nombredep;
    public $estado;
    public $fecha;
    public $hora;
    
    //---------------------------------------------------///-----------------------------------------------------------------------
    //Creamos metodos get y set de la clase cargo

    //metodo get id_cargo
    public function getIdcargo(){
        return $this->idcargo;
    }

    //metodo set de id_cargo
    public function setIdcargo($id_c){
       $this->idcargo = $id_c;
    }

    //metodo get nombre cargos
    public function getNombre(){
        return $this->nombre;
    }

    //metodo set nombre cargo
    public function setNombre($nombre_c){
        $this->nombre = $nombre_c;
    }

    //metodo get descripcion
    public function getDescripcion(){
        return $this->descripcion;
    }

    //metodo set descripcion
    public function setDescripcion($descripcion_c){
        $this->descripcion = $descripcion_c;
    }

    //metodo get id_dependencia
    public function getIdependencia(){
        return $this->idependencia;
    }

    //metodo set id_dependencia
    public function setIdependencia($id_d){
        $this->idependencia = $id_d;
    }

    //metodo get nombre dependencia
    public function getNombredep(){
        return $this->nombredep;
    }

    //metodo set nombre dependencia
    public function setNombredep($nombre_d){
        $this->nombredep =  $nombre_d;
    }

    //metodo get estado
    public function getEstado(){
        return $this->estado;
    }

    //metodo set estado
    public function setEstado($estado_c){
        $this->estado =  $estado_c;
    }
    
    //metodo get fecha
    public function getFecha(){
        return $this->fecha;
    }

    //metodo set fecha
    public function setFecha($fecha_c){
         $this->fecha = $fecha_c;
    }

    //metodo get hora
    public function getHora(){
        return $this->hora;
    }

    //metodo set hora
    public function setHora($hora_c){
        $this->hora = $hora_c;
    }

    //-----------------------------------------------//----------------------------------------------------------------------------------------------------
    //Funcion guardar datos del cargo----------------------

    public function guardarCargo($nombrec,$descripcionc,$idd){
       //instanciamos la clase conexion
       $conexion = new Conexion();
       //nos conectamos a la base de datos mediante la funcion conectar
       $conexion->conectar();
       //realizamos escript sql de guardado de datos;
       $sql = "insert into cargo(nombre,descripcion,id_dependencia) values(?,?,?)";
       //preparalamos la variable para el ingreso de la insercionfuncion
       $ejecutar = $conexion->db->prepare($sql);
       //ingresamos la cantidad de parametros
       $ejecutar->bind_param('ssi',$nombrec,$descripcionc,$idd);
       //efectuamos el execute de la variable ejecutar
       $ejecutar->execute();
       //nos desconectamos de la base de datos
       $conexion->desconectar();


    }
     //-----------------------------------------------////////////////////-------------------------------------------
    //Funcion mostrar cargos
    public function mostrarCargo(){
        //instanaciamos la clase conexion---------------------------------
        $conexion = new Conexion();
        //nos conectamos a la base de datos por medio de la funcion conectar
        $conexion->conectar();
        //Creamos una variable de tipo array
        $cargoArray = array();
        //realizamos la sentencia sql para obtener los cargos
        $sql = "SELECT cargo.id_cargo, dependencia.nombre,cargo.nombre, cargo.descripcion, cargo.estado, cargo.fecha_commit, cargo.hora_commit, cargo.id_dependencia FROM cargo INNER JOIN dependencia ON cargo.id_dependencia = dependencia.id_dependencia";
        //efectuamos la consulta sqld
        $resultado = mysqli_query($conexion->db,$sql);
        //recorremos la consulta mediante un ciclo while
        while($fila = mysqli_fetch_array($resultado)){
            $mostraIndex = new Cargo();

            $mostraIndex->setIdcargo($fila[0]);
            $mostraIndex->setNombredep($fila[1]);
            $mostraIndex->setNombre($fila[2]);
            $mostraIndex->setDescripcion($fila[3]);
            $mostraIndex->setEstado($fila[4]);
            $mostraIndex->setFecha($fila[5]);
            $mostraIndex->setHora($fila[6]);
            $mostraIndex->setIdependencia($fila[7]);

            array_push($cargoArray,$mostraIndex);
        }

        //nos desconectamos de la base de datos
        $conexion->desconectar();
        //retornamos el array
        return  $cargoArray;

    }
     //---------------------------------------------///-------------------------------------------------------
    //Funcion ver datos del cargo----------------------
    public function obtenerDatos($id_c){
        //instanciamos la clase conexion
        $conexion = new Conexion();
        //nos conectamos a la base de datos mediante la funcion conectar
        $conexion->conectar();
        //instanciamos la clase cargo
        $cargoArray = new Cargo();
        //efectuamos la consulta sql
        $sql = "select cargo.id_cargo, dependencia.nombre,cargo.nombre, cargo.descripcion, cargo.estado, cargo.fecha_commit, cargo.hora_commit, cargo.id_dependencia FROM cargo INNER JOIN dependencia ON cargo.id_dependencia = dependencia.id_dependencia where cargo.id_cargo='".$id_c."'";
        //realizamos la consulta sql 
        $ejecutar = mysqli_query($conexion->db,$sql);
        //recorremos el resultado obtenido mediante un ciclo while
        while($fila = mysqli_fetch_array($ejecutar)){

            $cargoArray->setIdcargo($fila[0]);
            $cargoArray->setNombredep($fila[1]);
            $cargoArray->setNombre($fila[2]);
            $cargoArray->setDescripcion($fila[3]);
            $cargoArray->setEstado($fila[4]);
            $cargoArray->setFecha($fila[5]);
            $cargoArray->setHora($fila[6]);
            $cargoArray->setIdependencia($fila[7]);
        }

        //nos desconectamos de la base de datos
        $conexion->desconectar();
        //retornamos los datos obtenidos
        return $cargoArray;

    }

    //--------------------------//----------------------------------------------------------------------------------------------------
    //Funcion eliminar cargo------------------------
    public function eliminarCargo($id_ec){

        //instanciamos la clase conexion
        $conexion = new Conexion();
        //nos conectamos a la base de datos mediante la funcion conectar
        $conexion->conectar();
        //detinamos una variables iniciada en 0
        $stado=0;
        //efectuamos la consulta sql donde vamos a ediatr los datos
        $sql = "update cargo set estado=? where id_cargo=?";
        //preparamos la consulta e ingresamos los datos
        $ejecutar = $conexion->db->prepare($sql);
        //ingresamos la cantidad de parametros 
        $ejecutar->bind_param('ii',$estado,$id_ec);
        //ejecutamos la funcionalidad mediante la funcion executar
        $ejecutar->execute();
        //nos desconectamos de la base de datos 
        $conexion->desconectar();

    }

    //------------------------------------//---------------------------------------------------------------------------------------------------
    //Funcion devolver cargo
    public function devolverCargo($id_dc){

        //instanciamos la clase conexion
        $conexion = new Conexion();
        //nos conectamos a la base de datos mediante la funcion conectar
        $conexion->conectar();
        //detinamos una variables iniciada en 0
        $estado=1;
        //efectuamos la consulta sql donde vamos a ediatr los datos
        $sql = "update cargo set estado=? where id_cargo=?";
        //preparamos la consulta e ingresamos los datos
        $ejecutar = $conexion->db->prepare($sql);
        //ingresamos la cantidad de parametros 
        $ejecutar->bind_param('ii',$estado,$id_dc);
        //ejecutamos la funcionalidad mediante la funcion executar
        $ejecutar->execute();
        //nos desconectamos de la base de datos 
        $conexion->desconectar();

    }

    //--------------------------------------//----------------------------------------------------------------------------------------------
    //Funcion editar datos--------------------------
    public function editarCargo($nombrec,$descripcionc,$id_dependenciac,$dicargo){
        //instanciamos la clase conexion
        $conexion = new Conexion();
        //nos conectamos a la base de datos mediante la funcion conectar
        $conexion->conectar();
        //efectuamos la consulta sql de editar datos
        $sql = "update cargo set nombre=?,descripcion=?,id_dependencia=? where id_cargo=?";
        //preparamos para el ingreso de la consulta
        $ejecute = $conexion->db->prepare($sql);
        //ingresamos la contidad de prametros
        $ejecute->bind_param('ssii',$nombrec,$descripcionc,$id_dependenciac,$dicargo);
        $ejecute->execute();
        //desconectamos de la base de datosdatos
        $conexion->desconectar();

         }
        //---------------------------------------------//------------------------------------------------------
        //Funcion evaluar si existe el cargo, juntamente con la dependencia

        public function validacionCargo($nombrev,$idv){
            //instanciamos la clase conexion
            $conexion = new Conexion();
            //nos conectamos a la base de datos por medio de la funcion conctar de la clase conexion
            $conexion->conectar();
            //declaramos una variable estado inicializada en 0 para cambiarla a valor 1 en caso sea encontrado el cargo
            $estado=0;
            //efectuamos el script para la verificacion de los datos
            $sql = "select nombre,id_dependencia from cargo where nombre='".$nombrev."'"."and id_dependencia='".$idv."'";
            //relizamos la consulta a la base de datos 
            $ejecutar = mysqli_query($conexion->db,$sql);
            //recorremos la consulta mediante un ciclo while
            while($fila = mysqli_fetch_array($ejecutar)){
                if(strcmp($fila[0],$nombrev)===0 && strcmp($fila[1],$idv)===0){
                    $estado=1;
                    break;
                }
            }
           //nos desconectamos de la base de datos
           $conexion->desconectar();
           //devolvemos el resultado
            return $estado;

        }


}


?>