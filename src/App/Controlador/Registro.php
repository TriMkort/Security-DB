<?php

include("../Modelo/Sentencias.php");

$tipo_documento = $_POST['Tipo_Documento'];
$documento = $_POST['identificacion'];
$primer_nombre = $_POST['1_Nombre'];
$segundo_nombre = $_POST['2_Nombre'];
$primer_apellido = $_POST['1_Apellido'];
$segundo_apellido = $_POST['2_Apellido'];
$tipo_sangre = $_POST['Tipo_Sangre'];
$direccion = $_POST['Direccion'];
$fecha_nacimiento = $_POST['Fecha_Naci'];
$telefono = $_POST['Tel'];
$correo = $_POST['Correo'];
$rol = $_POST['Tipo_roles'];


$matchDocument = preg_match("/([a-z]+)/", $documento);
$matchTelefono = preg_match("/([a-z]+)/", $telefono);

$matchNombre1 = preg_match("/([0-9]+)/", $primer_nombre);
$matchNombre2 = preg_match("/([0-9]+)/", $segundo_apellido);
$matchApellido1 = preg_match("/([0-9]+)/", $primer_apellido);
$matchApellido2 = preg_match("/([0-9]+)/", $segundo_apellido);

//$matchCorreo = preg_match("/\S+@\S+\.\S+/", $correo);

//var_dump($tipo_documento);

if (
     $tipo_documento === '' || $documento === '' || $primer_nombre === '' || $segundo_nombre === '' ||
     $primer_apellido === '' || $segundo_apellido === '' || $tipo_sangre === '' || $direccion === '' ||
     $fecha_nacimiento === '' || $telefono === '' || $correo === ''
) {
     echo json_encode('error');
} else if ($matchDocument || $matchTelefono) {
     echo json_encode('error_letras');
} else if (strlen($documento) >= 11 || strlen($telefono) >= 11) {
     echo json_encode('error_cantidad');
} else if ($matchNombre1 || $matchNombre2 || $matchApellido1 || $matchApellido2) {
     echo json_encode('error_numeros');
} else if (!preg_match("/\S+@\S+\.\S+/", $correo)) {
     echo json_encode('aceptable');
} else {
     $objeto = new Usuario;
     $res = $objeto->Usuario_validacion($documento);

     if ($res->num_rows == 1) {
          echo json_encode('validacion_usuario');
     } else {
          echo json_encode('datos correctos');
          $objeto->Usuario_registro($tipo_documento, $documento, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $tipo_sangre, $direccion, $fecha_nacimiento, $telefono, $correo, $rol);
     }
}
