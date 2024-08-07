<?php

include("../Modelo/Sentencias.php");

$documento = $_REQUEST ['identificacion'];
$primer_nombre = $_REQUEST ['primer_nombre'];
$segundo_nombre = $_REQUEST ['segundo_nombre'];
$primer_apellido = $_REQUEST ['primer_apellido'];
$segundo_apellido = $_REQUEST ['segundo_apellido'];
$tipo_sangre = $_REQUEST ['tipo_sangre'];
$direccion = $_REQUEST ['direccion'];
$fecha_nacimiento = $_REQUEST ['fecha_nacimiento'];
$telefono = $_REQUEST ['telefono'];
$correo = $_REQUEST ['correo'];

$bdusu = new Usuario;

    if(isset($_REQUEST['modificar'])){

        $bdusu->modificar_datos_usuario($documento ,$primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $tipo_sangre, $direccion, $fecha_nacimiento, $telefono, $correo);
        header("Location:../Vista/Contenido/Modificacion_datos.php?bien=si");
        
    } else {
        header("Location:../Vista/Contenido/Modificacion_datos.php?prob=si");
    }

?>