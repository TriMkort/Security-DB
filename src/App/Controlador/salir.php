<?php

    session_start();

    if($_SESSION["validar"] == "true"){
        unset($_SESSION["validar"]);

        session_destroy();
        header("location:../../../index.php");
    }

?>