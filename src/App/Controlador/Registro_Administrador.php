<?php

include("../Modelo/Sentencias.php");

if(isset ($_REQUEST['enviar'])){

    $usu = $_REQUEST['usuario'];
    $contra = $_REQUEST['contrasena'];

    $pass = password_hash($contra,PASSWORD_DEFAULT);

    $objeto = new Administrador;

    $res = $objeto -> Validar_Administrador($usu);

    if($res->num_rows == 1){
        header("location:../Vista/Registro_Aministrador.php?res1=no");
    } else {
        $res = $objeto -> Registro_Administrador($usu,$pass);
        /*header("location:../Vista/Formulario_registro.php?res=no");*/
        header("location:../Vista/Iniciar_Sesion.php");
    }
}


?>