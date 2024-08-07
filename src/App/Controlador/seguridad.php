<?php
session_start();
/*/unset($_SESSION["validar"]);*/
if ($_SESSION["validar"] != "true") {
    echo "si";
    exit();
    header("location:../Vista/index.php");
}
