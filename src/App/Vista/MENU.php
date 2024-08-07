<?php

include("../Controlador/seguridad.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Menu</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Contenido/Responsive.css">
    <link rel="stylesheet" href="css/Contenido/Perfil_links.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <div class="Responsive">
        <header>
            <nav class="lista-perfil">
                <img src="img/LogoEnd.png" alt="">
                <ul id="lista-salida">
                    <li><a href="../Controlador/salir.php"> Cerrar Sesion </a></li>
                </ul>
            </nav>
        </header>
        <div class="contenido-lista-datos">
            <nav id="lista-datos">
                <li> <a href="Contenido/Formulario_registro.php"> Registro del Personal </a></li>
                <li> <a href="Contenido/Modificacion_datos.php"> Modificacion de datos </a></li>
                <!--<li> <a href="Contenido/Calendario_datos.php"> Calendario datos </a></li> -->
                <li> <a href="Contenido/buscar_usuario.php"> Consulta </a></li>
            </nav>
            <section>
                Aca va el contenido
            </section>
        </div>

    </div>
</body>

</html>

<!--<ul>
                    <li>Registro de datos</li>
                    <li>Vista de los datos</li>
                </ul>-->

<!--<script src="scripts/MENU.js"></script>-->

<!--

    -->