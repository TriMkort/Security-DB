<?php

include("Conexion.php");

$DB = new conexion;

class Administrador extends conexion
{
    public function Registro_Administrador($u, $p)
    {
        $OracleDB = "INSERT INTO Administrador VALUES('$u','$p')";
        $consulta = $this->con->query($OracleDB) or die('Error:' . $this->con->error);
        return $consulta;
    }
    public function Validar_Administrador($usu2)
    {
        $OracleDB = "SELECT usuario FROM Administrador WHERE usuario = '$usu2'";
        $consulta = $this->con->query($OracleDB) or die('Error:' . $this->con->error);
        return $consulta;
    }
    public function valida($dto2)
    {
        $OracleDB = "SELECT * FROM Administrador WHERE usuario='$dto2'";
        $consulta = $this->con->query($OracleDB) or die('Error:' . $this->con->error);
        return $consulta;
    }
    public function traer_datos()
    {
        $OracleDB = "SELECT ro.nombre_rol as rol,us.* FROM usuario as us LEFT JOIN Roles as ro on ro.identificacion = us.identificacion";
        $consulta = $this->con->query($OracleDB) or die('Error:' . $this->con->error);
        return $consulta;
    }
    public function buscar_datos($idsearch)
    {
        $OracleDB = "SELECT ro.nombre_rol as rol,us.* FROM usuario as us LEFT JOIN Roles as ro on us.identificacion = ro.identificacion WHERE us.identificacion LIKE '%$idsearch%'";
        $consulta = $this->con->query($OracleDB) or die('Error:' . $this->con->error);
        return $consulta;
    }
}

class Usuario extends conexion
{
    public function Usuario_registro($d1, $d2, $d3, $d4, $d5, $d6, $d7, $d8, $d9, $d10, $d11, $d12)
    {
        $OracleDB = "insert into usuario (tipo_identificacion, identificacion, 1_Nombre, 2_Nombre,  1_Apellido, 2_Apellido, Tipo_RH, Direccion, Fecha_Naci, Tel,  Correo, Huella) values ('$d1', '$d2', '$d3', '$d4', '$d5', '$d6', '$d7', '$d8', '$d9', '$d10', '$d11','')";
        $consulta = $this->con->query($OracleDB) or die('Error:' . $this->con->error);
        $this->registro_rol($d2, $d12);
        return $consulta;
    }
    public function registro_rol($identi, $rol)
    {
        $OracleDB = "insert into Roles (nombre_rol, identificacion) values ('$rol','$identi')";
        $consulta = $this->con->query($OracleDB) or die('Error:' . $this->con->error);
        return $consulta;
    }
    public function Datos_Usuario()
    {
        $OracleDB = "SELECT identificacion, 1_Nombre, 2_Nombre,  1_Apellido, 2_Apellido, Tipo_RH, Direccion, Fecha_Naci, Tel, Correo FROM usuario";
        $consulta = $this->con->query($OracleDB) or die('Error:' . $this->con->error);
        return $consulta;
    }
    public function Usuario_validacion($identidad)
    {
        $OracleDB = "SELECT identificacion FROM usuario WHERE identificacion = '$identidad'";
        $consulta = $this->con->query($OracleDB) or die('Error:' . $this->con->error);
        return $consulta;
    }
    public function validacion_usuario($identidad)
    {
        $OracleDB = "SELECT identificacion, 1_Nombre, 2_Nombre, 1_Apellido, 2_Apellido, Tipo_RH, Direccion, Fecha_Naci, Tel, Correo FROM usuario WHERE identificacion = '$identidad'";
        $consulta = $this->con->query($OracleDB) or die('Error:' . $this->con->error);
        return $consulta;
    }
    public function modificar_datos_usuario($ident, $nom1, $nom2, $ape1, $ape2, $tp_rh, $direc, $fec_nac, $tel, $cor)
    {
        $OracleDB = "UPDATE usuario SET 1_Nombre = '$nom1', 2_Nombre = '$nom2', 1_Apellido = '$ape1', 2_Apellido = '$ape2', Tipo_RH = '$tp_rh', Direccion = '$direc', Fecha_Naci = '$fec_nac', Tel = '$tel', Correo = '$cor' WHERE identificacion = '$ident'";
        $consulta = $this->con->query($OracleDB) or die('Error:' . $this->con->error);
        return $consulta;
    }
}
