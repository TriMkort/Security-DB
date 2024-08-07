<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>IDENTIFICACION</th>
                <th>NOMBRE1</th>
                <th>NOMBRE2</th>
                <th>APELLIDO1</th>
                <th>APELLIDO2</th>
                <th>TIPO DE RH</th>
                <th>DIRECCION</th>
                <th>FECHA DE NACIMIENTO</th>
                <th>TELEFONO</th>
                <th>CORREO</th>
            </tr>
        </thead>
        <tbody>
                <?php
                    include("../Modelo/Sentencias.php");

                    $objeto = new Usuario;
                    $res = $objeto->Datos_Usuario();

                    while($row = $res->fetch_array()){
                        echo"<tr>";
                            echo"<td>";
                                echo $row['identificacion'];
                            echo"</td>"; 

                            echo"<td>";
                                echo $row['1_Nombre'];
                            echo"</td>";

                            echo"<td>";
                                echo $row['2_Nombre'];
                            echo"</td>";

                            echo"<td>";
                                echo $row['1_Apellido'];
                            echo"</td>";

                            echo"<td>";
                                echo$row['2_Apellido'];
                            echo"</td>";

                            echo"<td>";
                                echo $row['Tipo_RH'];
                            echo"</td>";

                            echo"<td>";
                                echo $row['Direccion'];
                            echo"</td>";

                            echo"<td>";
                                echo $row['Fecha_Naci'];
                            echo"</td>";

                            echo"<td>";
                                echo $row['Tel'];
                            echo"</td>";

                            echo"<td>";
                                echo $row['Correo'];
                            echo"</td>";
                        echo"</tr>";
                    }
                ?>
        </tbody>
    </table>
</body>
</html>


