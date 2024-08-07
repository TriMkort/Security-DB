<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Contenido/Responsive.css">
    <link rel="stylesheet" href="../css/Contenido/Perfil_links.css">
    <link rel="stylesheet" href="../css/Formulario/Registro_formulario.css">
    <title>Registro de datos </title>
</head>

<body>
    <div class="responsive">
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
                <div class="formulario">
                    <table>
                        <caption><strong> FORMULARIO DE REGISTRO</strong></caption>
                        <form id="form">
                            <tr>
                                <td>
                                    <label for="Tdoumento">Tipo de documento de identidad</label></br>
                                    <select class="controls" name="Tipo_Documento" id="tipo_documento">
                                        <option value="NN">Seleccione un tipo de documento</option>
                                        <option value="CC">Cedula de Ciudadania</option>
                                        <option value="TI">Tarjeta de Identidad</option>
                                    </select>
                                </td>
                                <td>
                                    <label for="Ndocumento">Numero de documento</label></br>
                                    <input class="controls" type="text" name="identificacion" id="numero_documento" placeholder="Numero de maximo 10 digitos">
                                    <p id="asterisco">*</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="Pnombre">Primer nombre</label></br>
                                    <input class="controls" type="text" name="1_Nombre" id="nombre1" placeholder="Primer nombre">
                                    <p id="asterisco">*</p>
                                </td>
                                <td>
                                    <label for="Snombre">Segundo nombre</label></br>
                                    <input class="controls" type="text" name="2_Nombre" id="nombre2" placeholder="Segundo Nombre">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="Papellido">Primer apellido</label></br>
                                    <input class="controls" type="text" name="1_Apellido" id="apellido1" placeholder="Primer apellido">
                                    <p id="asterisco">*</p>
                                </td>
                                <td>
                                    <label for="Sapellido">Segundo apellido</label></br>
                                    <input class="controls" type="text" name="2_Apellido" id="apellido2" placeholder="Segundo apellido">
                                    <p id="asterisco">*</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="Tsangre">Grupo Sanguineo</label></br>
                                    <select class="controls" name="Tipo_Sangre" id="Tipo_Sangre">
                                        <option value="NN">Seleccione su tipo de sangre</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                </td>
                                <td>
                                    <label for="Fnacimiento">Fecha de nacimiento</label></br>
                                    <input class="controls" type="date" name="Fecha_Naci" id="fecha" placeholder="Fecha de nacimiento">
                                    <p id="asterisco">*</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="Direccion">Direccion</label></br>
                                    <input class="controls" type="text" name="Direccion" id="direccion" placeholder="Direccion">
                                    <p id="asterisco">*</p>
                                </td>
                                <td>
                                    <label for="Telefono">Telefono</label></br>
                                    <input class="controls" type="tel" name="Tel" id="telefono" placeholder="000-000-0000">
                                    <p id="asterisco">*</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="Celectronico">Correo elecronico</label></br>
                                    <input class="controls" type="text" name="Correo" id="correo" placeholder="fingerplus@hotmail.com">
                                    <p id="asterisco">*</p>
                                </td>
                                <td>
                                    <label for="rol">Rol Institucional</label></br>
                                    <select class="controls" name="Tipo_roles" id="tipo_roles">
                                        <option value="rol">Seleccione su tipo de rol</option>
                                        <option value="Aprendiz">Aprendiz</option>
                                        <option value="Instructor">Instructor</option>
                                        <option value="Personal Administrativo">Personal Administrativo </option>
                                    </select>
                                    <p id="asterisco">*</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div id="respuesta">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input class="boton" type="submit" value=" Registrarse ">
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
            </section>
        </div>
    </div>
    <script src="../scripts/Validacion_formulario.js"></script>
</body>

</html>