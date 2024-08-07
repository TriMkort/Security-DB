<?php

include("../Modelo/Sentencias.php");

if(isset ($_REQUEST['enviar']))
{
    $dato2 = $_REQUEST['identificacion'];
    $dato12 = $_REQUEST['Contrasena'];

    $objeto = new Administrador;

    $res=$objeto -> valida($dato2);
    
    #Realizar la seguridad de cambio de etiqueta con los datos respectivos

    if($res -> num_rows == 0){
        header("location:../../../index.php?error=si");
    } else {
        $row = $res->fetch_array();

        if(password_verify($dato12,$row["contrasena"])){

            session_start(); 
            $_SESSION["validar"] = "true";

            if($row["usuario"] == "admin"){
                header("location:../Vista/MENU.php");
            } else {
                header("location:../Vista/Administrador.php");
            }

        } else {
            header("location:../../../index.php?error=si");
        }
    }

    /*$objeto = CloseDB();*/
}

?>
