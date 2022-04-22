<?php

include("../db/Conexion.php");

class Usuario{

     public $idUsuario;
     public $nombre;
     public $apellido;
     public $rol;
     public $nickname;
     public $contrasena;
     public $estado;
     public $fecha;
     public $hora;

     //metodo get id_usuario

     public function getIdUsuario(){
         return $this->idUsuario;
     }

     //metodo set id_usurio
     public function setIdUsuario($_id){
         $this->idUsuario = $_id;
     }

     //metodo get usuario
     public function getNombre(){
        return $this->nombre;
    }

    //metodo set nombre
    public function setNombre($_nombre){
        $this->nombre = $_nombre;
    }

    //metodo get apellido
    public function getApellido(){
        return $this->apellido;
    }

    //metodo set apellido
    public function setApellido($_apellido){
        $this->apellido = $_apellido;
    }

    //Metodo get rol
    public function getRol(){
        return $this->rol;
    }
    //metodo set apeliido
    public function setRol($_rol){
        $this->rol = $_rol;
    }
    //metodo get nickname
    public function getNickname(){
        return $this->nickname;
    }

    //metodo set nickname
    public function setNickname($_nickname){
        $this->nickname = $_nickname;
    }

    //metodo get contrasenia
    public function getContrasena(){
        return $this->contrasena;
    }

    //metodo set contrasena
    public function setContrasena($_contrasena){
        $this->contrasena = $_contrasena;
    }

    //Metodo get estado
    public function getEstado(){
        return $this->estado;
    }
    //Metodo set estado
    public function setEstado($_estado){
        $this->estado = $_estado;
    }
    //metodo get fecha
    public function getFecha(){
        return $this->fecha;
    }
    //metodo set fecha
    public function setFecha($_fecha){
        $this->fecha = $_fecha;
    }
    //metodo get hora
    public function getHora(){
        return $this->hora;
    }
    //metodo set hora
    public function setHora($_hora){
        $this->hora = $_hora;
    }

    //-----------------------Función para validar usuario y contraseña (Inicio de sesión)-----------------

       //Devuelve 0 si el usuario no existe y 1 cuando si existe y crea automaticamente la variable de sesión del usuario "usuario"
       
       public function validarUsuario($nick_user, $password_user){
        //Instanciamos la clase conexión
        $conexion = new Conexion();
        //Nos conectamos a la base de datos
        $conexion->conectar();
        //Variable validadora de credenciales correctos
        $validador=0;
        //Instanciamos la clase usuario
        $usuario = new Usuario();
        //Sentencia sql
        $sql = "select *from usuario where nickname='" . $nick_user . "'" . " and contrasena='" . $password_user . "'" . "and estado=1";

        $ejecutar = mysqli_query($conexion->db, $sql);
         //Recorremos los resultados de la consulta
         while($fila = mysqli_fetch_array($ejecutar)){
          //Validamos si el usuario y contraseña existe
          if(strcmp($fila[4], $nick_user) === 0 && strcmp($fila[5],$password_user)===0){
     
             $validador=1;//Si existe el usuario

             //Llenamos los datos del usuario

             $usuario->setIdUsuario($fila[0]);
             $usuario->setNombre($fila[1]);
             $usuario->setApellido($fila[2]);
             $usuario->setRol($fila[3]);
             $usuario->setNickname($fila[4]);
             $usuario->setContrasena($fila[5]);
             $usuario->setEstado($fila[6]);
             $usuario->setFecha($fila[7]);
             $usuario->setHora($fila[8]);

             break;//Rompemos ciclo debido a que no sirve de nada seguir buscando debido a que ya hay primera coincidencia
          }
     }

     //---Guardamos en variable de sesión el usuario
     
     //Guardamos el objeto usuario en sesión
     if($validador==1){
         //---Inicializamos la sesión
          session_start();
         $_SESSION['usuario']=$usuario;
     
     }
     //Desconectamos la base de datos
     $conexion->desconectar();
     //Devolvemos resultados
     return $validador;
    }


    //--------------- Funcion obtener usuario para la visualizacion de las tablas ----
    public function obtenerUsuarios(){

        $conexion = new Conexion();

        $conexion->conectar();

        $resultadoUsuario = array();

        $sql = "SELECT * FROM usuario";

        $ejecutar = mysqli_query($conexion->db,$sql);

        while($fila = mysqli_fetch_array($ejecutar)){

            $usuarioIndex = new Usuario();

            $usuarioIndex->setIdUsuario($fila[0]);
            $usuarioIndex->setNombre($fila[1]);
            $usuarioIndex->setApellido($fila[2]);
            $usuarioIndex->setRol($fila[3]);
            $usuarioIndex->setNickname($fila[4]);
            $usuarioIndex->setContrasena($fila[5]);
            $usuarioIndex->setEstado($fila[6]);
            $usuarioIndex->setFecha($fila[7]);
            $usuarioIndex->setHora($fila[8]);

            array_push($resultadoUsuario, $usuarioIndex);

        }

        $conexion->desconectar();

        return $resultadoUsuario; 
    }

    //Funcion buscar usuario por id para la visualizacion del mismo

    public function buscarUsuario($id_usuario_vista){

        $conexion = new Conexion();

        $conexion->conectar();

        $usuarioArray = new Usuario();

        $sql = "select *from usuario where id_usuario='".$id_usuario_vista."'";

        $ejecutar = mysqli_query($conexion->db,$sql);

        while($fila = mysqli_fetch_array($ejecutar)){

            $usuarioArray->setIdUsuario($fila[0]);
            $usuarioArray->setNombre($fila[1]);
            $usuarioArray->setApellido($fila[2]);
            $usuarioArray->setRol($fila[3]);
            $usuarioArray->setNickname($fila[4]);
            $usuarioArray->setContrasena($fila[5]);
            $usuarioArray->setEstado($fila[6]);
            $usuarioArray->setFecha($fila[7]);
            $usuarioArray->setHora($fila[8]);


        }

        $conexion->desconectar();

        return $usuarioArray;

    }

    //Funcion para eliminar el usuario poniendole estado 0
    
    public function eliminarUsuario($id_usuario){

        $conexion = new Conexion();

        $conexion->conectar();

        $estado = 0;

        $sql = "update usuario set estado=? where id_usuario=?";

        $ejecutar = $conexion->db->prepare($sql);

        $ejecutar->bind_param('ii',$estado, $id_usuario);

        $ejecutar->execute();

        $conexion->desconectar();

    }

    //Funcion reactivar usuario poniendole estado 1

    public function devolverUsuario($id_usuario_alta){

        $conexion = new Conexion();

        $conexion->conectar();

        $estado = 1;

        $sql = "update usuario set estado=? where id_usuario=?";

        $ejecutar = $conexion->db->prepare($sql);

        $ejecutar->bind_param('ii',$estado,$id_usuario_alta);

        $ejecutar->execute();

        $conexion->desconectar();
    }


    //Funcion edicion de usuario donde se modifica los campos ingresados de nuevo
    public function editarUsuario($nombre,$apellido,$rol,$nickname,$contrasenia,$id_usuario){

       $conexion = new Conexion();

       $conexion->conectar();

       $sql = "update usuario set nombres=?, apellidos=?, rol=?, nickname=?, contrasena=? where id_usuario=?";

       $ejecutar = $conexion->db->prepare($sql);

       $ejecutar->bind_param('sssssi',$nombre,$apellido,$rol,$nickname,$contrasenia,$id_usuario);

       $ejecutar->execute();

       $conexion->desconectar();


    }

    //Funcion ingrear usuario 

    public function guardar($nombreg, $apellidog, $rolg, $nicknameg, $contrasenag){

        $conexion =  new Conexion();

        $conexion->conectar();

        $sql = "insert into usuario(nombres,apellidos,rol,nickname,contrasena) values(?,?,?,?,?)";

        $ejecutar = $conexion->db->prepare($sql);

        $ejecutar->bind_param('sssss',$nombreg,$apellidog,$rolg,$nicknameg,$contrasenag);

        $ejecutar->execute();

        $conexion->desconectar();

    }

    //Funcion para validar si el usuario ya existe

    public function validarUsuarioExistente($usuairov){

        $conexion = new Conexion();

        $conexion->conectar();

        $res=0;

        $sql = "select nickname from usuario where nickname='".$usuairov."'";

        $resultado = mysqli_query($conexion->db,$sql);

        while($fila = mysqli_fetch_array($resultado)){
            if(strcmp($fila[0],$usuairov)===0){
                $res=1;
                break;
            }

        }

        $conexion->desconectar();
        return $res;

    }
}


?>