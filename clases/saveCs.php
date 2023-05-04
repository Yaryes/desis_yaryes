<?php
require 'ConexionCs.php';

class Save extends Conexion
{

    function __construct()
    {
        parent::__construct();
        return $this;
    }
    public function saveform()
    {
    $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();
    $data 
    }

}
$save = new Save;
?>