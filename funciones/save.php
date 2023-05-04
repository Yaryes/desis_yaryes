<?php
include('../clases/conexionCs.php');
if (isset($_POST['btnIngresar'])){
    var_dump($_POST);exit;
    $fullname = $_POST['fullname'];
    $alia = $_POST['alias'];
    $rut = $_POST['rut'];
    $region = $_POST['region'];
    $comuna = $_POST['comuna'];
    $candidato = $_POST['candidato'];
    $marketing = $_POST['marketing'];
if (  
    empty($fullname) || empty($alia) || empty($rut) || empty($region) || 
    empty($comuna) || empty($candidato) || empty($marketing) ) { 
        header('location: ../index.html');
    }else{
        $ArregloFormulario = array(
            'fullname' => $fullname,
            'alia' => $alia,
            'rut' => $rut,
            'region' => $region,
            'comuna' => $comuna,
            'candidato' => $candidato,
            'marketing' => $marketing,
        );
        
        $verificar = json_decode($save->saveform($ArregloFormulario));
        var_dump($verificar);exit;
    }
}
