<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../../Controlador/Registro_Administrador.php" method="POST">
        <input type="text" name="usuario" id="">
        <input type="password" name="contrasena" id="">
        <input type="submit" value="enviar" name="enviar">
    </form>
    <div>
        <?php
        echo "<link rel=stylesheet href=css/Formulario/Registro_formulario.css>";
        if (isset($_REQUEST['res1'])) {
            echo "<div class='alertaroja'>" . "USUARIO YA EXISTE EN EL SISTEMA" . "</div>";
        }
        ?>
    </div>
</body>

</html>