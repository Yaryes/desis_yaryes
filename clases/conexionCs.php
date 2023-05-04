<?php
class Conexion {
    private $server = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "desis";
    protected $conexion;
    protected $secured;
    function __construct()
    {
        $this->conexion= new mysqli($this->server,$this->user,$this->pass,$this->db);
        if($this->conexion->connect_errno){
            die("Error al conectar con MySql: (".$this->conexion->connect_errno.") - ".$this->conexion->connect_errno);
        }
    } 
    //***METODOS 2 Y 4 DE LAS CSENTENCIA PERPARADAS
    protected function prepare($consulta){
        if(!($consulta = $this->conexion->prepare($consulta))){
            die("Error al preparar la consulta: (".$this->conexion->connect_errno.") - ".$this->conexion->connect_errno);
        }
        return $consulta;
    }
    protected function execute($sentencia){
        if(!$sentencia->execute()){
            die("Fallo la ejecucion de la consulta: (".$this->conexion->connect_errno.") - ".$this->conexion->connect_errno);
        }
        return $sentencia;
    }
}
$conexion = new Conexion;
?>