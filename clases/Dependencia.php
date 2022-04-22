<?php

//include("../db/Conexion.php");

class Dependencia{

    //Declaramos la variables de la case dependencia
    public $idDependencia;
    public $codigo;
    public $nombre;
    public $descripcion;
    public $estado;
    public $fecha;
    public $hora;

    //Definicmos metodo get de Id_dependencia
    public function getIdDependencia(){
        return $this->idDependencia;
    }

    //Definimos metodo set Id_dependencia
    public function setIdDependencia($id){
        $this->idDependencia = $id;
    }
  

    //Definimos metodo get codigo
    public function getCodigo(){
        return $this->codigo;
    }

    //Definimos metodo set codigo
    public function setCodigo($codigo_d){
        $this->codigo = $codigo_d;
    }

    //Definimos el metodo get de nombre
    public function getNombre(){
        return $this->nombre;
    }

    //Definimos el metodo set de nombre
    public function setNombre($nombre_d){
        $this->nombre =  $nombre_d;
    }

    //Definimos metodo get descripcion
    public function getDescripcion(){
        return $this->descripcion;
    }

    //Definimos metodo set descripcion
    public function setDescripcion($descripcion_d){
        $this->descripcion =  $descripcion_d;
    }

    //Definimos metodo get estado
    public function getEstado(){
        return $this->estado;
    }

    //Definimos el metodo set
    public function setEstado($estado_d){
        $this->estado =  $estado_d;
    }

    //Definimos el metodo get fecha
    public function getFecha(){
        return $this->fecha;
    }

    //Definimos el metodo set fecha
    public function setFecha($fecha_d){
        $this->fecha = $fecha_d;
    }

    //Definimos el metodo get de hora
    public function getHora(){
        return $this->hora;
    }

    //Definimos el metodo set de hora
    public function setHora($hora_d){
        $this->hora = $hora_d;
    }

    //---------------------------------------------------------------------//------------------------------------------------

    //Funcion mostrar datos de dependencias de la base de datos

    public function mostrarDependencia(){
      
        //declaramos variable conexion e instanciamos
        $conexion = new Conexion();
        //efectuamos la conexion con la BD a traves de la funcion conectar de la clase conexion
        $conexion->conectar();
        //Destinamos una variable de tipo array 
        $mostrarArray = array();
        //realizamos la consulta a la base de datos mediante la siguiente sentencia sql
        $sql = "SELECT * FROM dependencia";
        //Hacemos la peticion sql mediante mysql_query
        $resultado = mysqli_query($conexion->db,$sql);

        //mediante un ciclo while recorremos la variable resultado
        while($fila = mysqli_fetch_array($resultado)){

            $mostrarIndex = new Dependencia();

            $mostrarIndex->setIdDependencia($fila[0]);
            $mostrarIndex->setNombre($fila[1]);
            $mostrarIndex->setCodigo($fila[2]);
            $mostrarIndex->setDescripcion($fila[3]);
            $mostrarIndex->setEstado($fila[4]);
            $mostrarIndex->setFecha($fila[5]);
            $mostrarIndex->setHora($fila[6]);

            array_push($mostrarArray,$mostrarIndex);

        }

        $conexion->desconectar();

        return $mostrarArray;

    }

    //------------------------------------------------------//------------------------------------------
    //Funcion guardar datos de dependenica 
    public function guardarDependencia($nombreg,$codigog,$descripciong){

        //hacemos una instancia de la clase conexion
        $conexion = new Conexion();

        //efectuamos la conexion mediante la funcion conectar
        $conexion->conectar();

        //Realizamos el script para insertar los datos de dependencia
        $sql = "insert into dependencia(nombre,codigo,descripcion) values(?,?,?)";

        //efecuatos el escrip de preparacion de datos para el envio del insert
        $ejecutar = $conexion->db->prepare($sql);

        $ejecutar->bind_param('sss',$nombreg,$codigog,$descripciong);

        $ejecutar->execute();
        //Nos desconectamos de la base de datos
        $conexion->desconectar();


    }

    //-----------------------------------------//-----------------------------------------------------------------------------------------------------
    //Funcion validacion de dependencia---------------------------------------

    public function validaDependencia($nombred){
        //instanciamos la clase conexion
        $conexion = new Conexion();
         //Nos conectamos a la base de datos por medio de la funcion conectar
        $conexion->conectar();
        //declaramos una variable en 0 
        $res=0;
        //Efectuamos la consulta mediante sentencias mysql
        $sql = "select nombre from dependencia where nombre='".$nombred."'";
        //Realizamos la consulta a la base de datos
        $resultado = mysqli_query($conexion->db,$sql);
        //Recorremos la consulta y guardamos la informacion mediante mysqli_fetch_array
        while($fila = mysqli_fetch_array($resultado)){
            if(strcmp($fila[0],$nombred)===0){
                $res=1;
                break;
            }
        }

        $conexion->desconectar();
        return $res;
    }

    //-----------------------------------///----------------------------------------------------------------------------------------
    //Funcion ver datos de dependencia

    public function buscarDependencia($id_d){

        //instanciamos la clase conexion
        $conexion = new Conexion();
        //Conectamos con la base de datos a traves de la funcion conectar
        $conexion->conectar();
        //instanciamos la clase dependencia
        $dependencia = new Dependencia();

        //efectuamos la consulta a la base de datos
        $sql = "select *from dependencia where id_dependencia='".$id_d."'";

        $ejecutar = mysqli_query($conexion->db,$sql);

        while($fila =  mysqli_fetch_array($ejecutar)){

            $dependencia->setIdDependencia($fila[0]);
            $dependencia->setNombre($fila[1]);
            $dependencia->setCodigo($fila[2]);
            $dependencia->setDescripcion($fila[3]);
            $dependencia->setEstado($fila[4]);
            $dependencia->setFecha($fila[5]);
            $dependencia->setHora($fila[6]);
        }

        $conexion->desconectar();

        return $dependencia;


    }

    //-------------------------------------//-------------------------------------------------
    //Funcion editar datos de dependencia-----------------------------

    public function editarDependencia($nombree,$codigoe,$descripcione,$ide){

        //instanciamos la clase conexion
        $conexion = new Conexion();
        //nos conectamos a la base de datos con la funcion conectar
        $conexion->conectar();
        //realizamos la consulta sql para el update de los datos
        $sql = "update dependencia set nombre=?, codigo=?, descripcion=? where id_dependencia=?";
        //efectuamos la consulta a la base de datosdatos y editamos los datos
        $ejecutar = $conexion->db->prepare($sql);
        //ingresamos la cantidad de parametros
        $ejecutar->bind_param('sssi',$nombree,$codigoe,$descripcione,$ide);
        $ejecutar->execute();
        //nos desconectamos de la base de datos
        $conexion->desconectar();
        
    }

    //-----------------------------///---------------------------------------------------------------------------------------------------------------
    //Funcion eliminar dependencia ------------------------------------------------------
    public function eliminarDependencia($id_d){
        //instanciamos la clase conexion
        $conexion = new Conexion();
        //nos conectamos a la base de datos a traves de la funcion conectar
        $conexion->conectar();
        //destinamos una varuable de estado con valor 0
        $estado=0;
        //realizamos una sentencia sql para cambiar de estado la variable 
        $sql = "update
        dependencia
        INNER JOIN
        cargo
        ON
        cargo.id_dependencia = dependencia.id_dependencia
        SET
        dependencia.estado = ?, cargo.estado = ?  WHERE dependencia.id_dependencia=? and dependencia.estado=1";
        //$sql = "update dependencia set estado=? where id_dependencia=?";
        //hacemos la preparacion de la secuencia sql
        $ejecutar = $conexion->db->prepare($sql);
        //ingresamos la cantidad de parametros
        $ejecutar->bind_param('iii',$estado,$estado,$id_d);
        $ejecutar->execute();
        //nos desconectamos de la base de datosde datos 
        $conexion->desconectar();

    }

    //-------------------------------------------------///----------------------------------------------------------------------------------------------
    //Funcion reactivacion de dependencia/////////////
    public function reactivarDependencia($id_rd){
        //instanciamos la clase conexionde 
        $conexion = new Conexion();
        //nos conectamos a la base de datos mediante la funcion conectar
        $conexion->conectar();
        //definimos una variable estamo la cual estara en valor 1 para el update y reactivacion
        $estado=1;
        //realizamos la consulta a la base de datos mediante una sentencia sql
        $sql = "update
        dependencia
        INNER JOIN
        cargo
        ON
        cargo.id_dependencia = dependencia.id_dependencia
        SET
        dependencia.estado = ?, cargo.estado = ?  WHERE dependencia.id_dependencia=? and dependencia.estado=0";
        //efetuamos la preparacion de la consulta sql
        $ejecutar = $conexion->db->prepare($sql);
        //ingresamos si, en base a la cantidad de parametros
        $ejecutar->bind_param('iii',$estado,$estado,$id_rd);
        $ejecutar->execute();
        //nos desconectamos de la base de datosde datos
        $conexion->desconectar();

    }


}


?>