<?php

class Conexion{

    public $hostname="localhost";
    public $username="root";
    public $password="";
    public $dbname="mydb";
    public $db;

    //metodos get

    //obtencion de nombre del host de la base de datos para
    public function getHostname(){
        return $this->hostname;
    }
    //obtencion de usuario de la base de datos
    public function getUsername(){
        return $this->username;
    }
    //obtencion de la contrase de la base de datos
    public function getPassword(){

        return $this->password;
    }
// Obtencion de la conexion de la base de datos
    public function getDbName(){

        return $this->dbname;
    }

    //Funcion de conexion con la base de datos

    public function conectar(){
        $this->db = mysqli_connect($this->getHostname(),$this->getUsername(),$this->getPassword())
        or die("<html><script language='JavaScript'>alert('¡No es posible conectarse a la base de datos! Vuelve a intentarlo más tarde.'),history.go(-1)</script></html>");

        mysqli_select_db($this->db,$this->getDbName());
    }

    //Funcion para desconectar la base de datos
    public function desconectar(){
        mysqli_close($this->db);
    }
}


?>