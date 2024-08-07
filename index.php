<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Finger-Plus</title>
    <script src="https://kit.fontawesome.com/ed1d75c9d5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="src/assets/CSS/index/estilosjk.css">
</head>

<body>

    <body>
        <header>
            <div class="contenido">
                <div class="btn"><a href="src/App/Vista/Contenido/Registro_Aministrador.php">Inicio</a></div>
                <div class="btn"><a href="src/assets/Quienes somos.html">Información</a></div>
                <div class="btn"><a href="src/assets/contactenos.html">Contactos</a></div>
            </div>
        </header>
        <div class="logo">
            <img src="src/assets/imagenes/LogoEnd.png">
        </div>
        <a href="#" class="btn-neon">
            <span id="span1"></span>
            <span id="span2"></span>
            <span id="span3"></span>
            <span id="span4"></span>
            <p style="color:rgb(161, 163, 172)" id="iniciar">Iniciar</p>
        </a>
    </body>
    <div class="overlay" id="overlay">
        <div class="popup" id="popup">
        </div>
        <div class="login-box">
            <div class="cerrar">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></i></a>
            </div>
            <img src="src/assets/imagenes/LogoEnd.png" class="avatar" alt="Avatar Image" />
            <h1>Iniciar Sesion</h1>
            <div>
                <?php
                echo "<link rel=stylesheet href=src/App/Vista/css/Inicio_sesion/Login_Style.css>";
                if (isset($_REQUEST['error'])) {
                    echo "<div class='errorrojo'>" . "Usuario o Contraseña incorrecta." . "</div>";
                }
                ?>
            </div>
            <form action="src/App/Controlador/Inicio_sesion.php" method="POST">
                <label for="username">Usuario</label>
                <input id="identificacion" type="text" name="identificacion">
                <label for="password">Contraseña</label>
                <input id="Contrasena" type="password" name="Contrasena">
                <input type="submit" name="enviar" id="enviar" value="Iniciar">
                <!--<a href="#">¿Olvidaste contraseña?</a><br>-->
            </form>
        </div>
</body>
<script src="src/assets/Scripts/popup.js"></script>
<script type="text/javascript">
</script>

</html>
</div>
</div>
</body>

</html>