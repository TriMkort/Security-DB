<?php
include("../../Modelo/Sentencias.php");
$objeto = new Administrador;
$objeto1 = new usuario;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Consulta</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Contenido/Responsive.css">
    <link rel="stylesheet" href="../css/Contenido/Perfil_links.css">
    <link rel="stylesheet" href="../css/Consulta/Style_Consulta.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <div class="Responsive">

        <header>
            <nav class="lista-perfil">
                <img src="../img/LogoEnd.png" alt="">
                <ul id="lista-salida">
                    <li><a href="../../Controlador/salir.php"> Cerrar Sesion </a></li>
                </ul>
            </nav>

        </header>

        <div class="contenido-lista-datos">
            <nav id="lista-datos">
                <li> <a href="Formulario_registro.php"> Registro del Personal </a></li>
                <li> <a href="Modificacion_datos.php"> Modificacion de datos </a></li>
                <!--<li> <a href="Contenido/Calendario_datos.php"> Calendario datos </a></li> -->
                <li> <a href="buscar_usuario.php"> Consulta </a></li>
            </nav>
            <section>
                <p>
                <form method="POST" action="#" id="cdr">
                    <h2>Buscar Usuario </H2>
                    <?php
                    if (isset($_REQUEST['identificacion'])) {
                    ?>
                        <input type="text" name="identificacion" id="busqueda" placeholder="Numero del documento" value=" <?php echo $_REQUEST['identificacion'] ?>">
                    <?php
                    } else {
                    ?>
                        <input type="text" name="identificacion" id="busqueda" placeholder="Numero del documento">
                    <?php
                    }
                    ?>
                    <input type="submit" name="buscar" value="Buscar" class="btn_search">
                    </p>
                </form>
                <table width="805" border="1">
                    <tr>
                        <td width="75"> rol </td>
                        <td width="75"> identificacion </td>
                        <td width="135"> 1_Nombre </td>
                        <td width="135"> 2_Nombre </td>
                        <td width="135"> 1_Apellido </td>
                        <td width="135"> 2_Apellido </td>
                        <td width="245"> Correo </td>
                        <td width="88"> Tel </td>
                        <?php


                        ?>



                        <?php

                        if (isset($_REQUEST['buscar']) && !empty($_REQUEST['identificacion'])) {
                            $search = $_REQUEST['identificacion'];
                            $res = $objeto->buscar_datos($search);
                            if ($res->num_rows > 0) {
                                while ($row = $res->fetch_array()) {
                                    echo '<tr>';
                                    echo '<td>' . $row['rol'] . '</td>';
                                    echo '<td>' . $row['identificacion'] . '</td>';
                                    echo '<td>' . $row['1_Nombre'] . '</td>';
                                    echo '<td>' . $row['2_Nombre'] . '</td>';
                                    echo '<td>' . $row['1_Apellido'] . '</td>';
                                    echo '<td>' . $row['2_Apellido'] . '</td>';
                                    echo '<td>' . $row['Correo'] . '</td>';
                                    echo '<td>' . $row['Tel'] . '</td>';
                                    echo '</tr>';
                                }
                            } else {
                                echo "<div class=errorrojo>" . "Usuario no existe en el sistema." . "</div>";
                            }
                        } else {
                            $res = $objeto->traer_datos();
                            if ($res->num_rows > 0) {
                                while ($row = $res->fetch_array()) {
                                    echo '<tr>';
                                    echo '<td>' . $row['rol'] . '</td>';
                                    echo '<td>' . $row['identificacion'] . '</td>';
                                    echo '<td>' . $row['1_Nombre'] . '</td>';
                                    echo '<td>' . $row['2_Nombre'] . '</td>';
                                    echo '<td>' . $row['1_Apellido'] . '</td>';
                                    echo '<td>' . $row['2_Apellido'] . '</td>';
                                    echo '<td>' . $row['Correo'] . '</td>';
                                    echo '<td>' . $row['Tel'] . '</td>';
                                    echo '</tr>';
                                }
                            }
                        }
                        ?>
                </table>
            </section>
        </div>
</body>