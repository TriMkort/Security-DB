<?php

include("../../Modelo/Sentencias.php");


$objeto = new Usuario;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Menu</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Contenido/Responsive.css">
    <link rel="stylesheet" href="../css/Contenido/Perfil_links.css">
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
                <form action="#">
                    <input type="text" name="documento" id="">
                    <input type="submit" value="Buscar" name="buscar">
                    <?php
                    if (isset($_REQUEST['buscar'])) {
                        $identificacion = $_REQUEST['documento'];
                        $res = $objeto->validacion_usuario($identificacion);
                        if ($res->num_rows == 1) {
                            $row = $res->fetch_array();
                        } else {
                            echo "<div class=errorrojo>" . "Usuario no existe en el sistema." . "</div>";
                        }
                    }
                    ?>
                </form>
                <table>
                    <thead>
                        <tr>
                            <th>
                                Modificacion de documentacion
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="../../Controlador/modificacion_datos.php" method="POST">
                            <tr>
                                <td>
                                    <label for=""> Numero de Identificacion </label>
                                    <?php
                                    if (isset($row['identificacion'])) {
                                    ?>
                                        <input type="text" name="identificacion" id="" value="<?php echo $row['identificacion']; ?>">
                                    <?php
                                    } else {
                                    ?>
                                        <input type="text" name="identificacion" id="" value="">
                                    <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for=""> Primer Nombre </label>
                                    <?php
                                    if (isset($row['1_Nombre'])) {
                                    ?>
                                        <input type="text" name="primer_nombre" id="" value="<?php echo $row['1_Nombre']; ?>">
                                    <?php
                                    } else {
                                    ?>
                                        <input type="text" name="primer_nombre" id="" value="">
                                    <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for=""> Segundo Nombre </label>
                                    <?php
                                    if (isset($row['2_Nombre'])) {
                                    ?>
                                        <input type="text" name="segundo_nombre" id="" value="<?php echo $row['2_Nombre']; ?>">
                                    <?php
                                    } else {
                                    ?>
                                        <input type="text" name="segundo_nombre" id="" value="">
                                    <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for=""> Primer Apellido </label>
                                    <?php
                                    if (isset($row['1_Apellido'])) {
                                    ?>
                                        <input type="text" name="primer_apellido" id="" value="<?php echo $row['1_Apellido']; ?>">
                                    <?php
                                    } else {
                                    ?>
                                        <input type="text" name="primer_apellido" id="" value="">
                                    <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for=""> Segundo Apellido </label>
                                    <?php
                                    if (isset($row['2_Apellido'])) {
                                    ?>
                                        <input type="text" name="segundo_apellido" id="" value="<?php echo $row['2_Apellido']; ?>">
                                    <?php
                                    } else {
                                    ?>
                                        <input type="text" name="segundo_apellido" id="" value="">
                                    <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for=""> RH </label>
                                    <?php
                                    if (isset($row['Tipo_RH'])) {
                                    ?>
                                        <input type="text" name="tipo_sangre" id="" value="<?php echo $row['Tipo_RH']; ?>">
                                    <?php
                                    } else {
                                    ?>
                                        <input type="text" name="tipo_sangre" id="" value="">
                                    <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for=""> Direcccion </label>
                                    <?php
                                    if (isset($row['Direccion'])) {
                                    ?>
                                        <input type="text" name="direccion" id="" value="<?php echo $row['Direccion']; ?>">
                                    <?php
                                    } else {
                                    ?>
                                        <input type="text" name="direccion" id="" value="">
                                    <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for=""> Fecha Nacimiento </label>
                                    <?php
                                    if (isset($row['Fecha_Naci'])) {
                                    ?>
                                        <input type="date" name="fecha_nacimiento" id="" value="<?php echo $row['Fecha_Naci']; ?>">
                                    <?php
                                    } else {
                                    ?>
                                        <input type="date" name="fecha_nacimiento" id="" value="">
                                    <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for=""> Telefono </label>
                                    <?php
                                    if (isset($row['Tel'])) {
                                    ?>
                                        <input type="tel" name="telefono" id="" value="<?php echo $row['Tel']; ?>">
                                    <?php
                                    } else {
                                    ?>
                                        <input type="tel" name="telefono" id="" value="">
                                    <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for=""> Correo </label>
                                    <?php
                                    if (isset($row['Correo'])) {
                                    ?>
                                        <input type="text" name="correo" id="" value="<?php echo $row['Correo']; ?>">
                                    <?php
                                    } else {
                                    ?>
                                        <input type="text" name="correo" id="" value="">
                                    <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="modificar" value=" Modificar ">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <?php
                                        echo "<link rel=stylesheet href=../css/Contenido/Perfil_links.css>";
                                        if (isset($_REQUEST['bien'])) {
                                            echo "<div class='alertaverde'>" . "Modificacion existosa" . "</div>";
                                        }
                                        if (isset($_REQUEST['prob'])) {
                                            echo "<div class='alertaroja'>" . "Usuario no se pudo modificar." . "</div>";
                                        }
                                        ?>
                                    </div>
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</body>

</html>