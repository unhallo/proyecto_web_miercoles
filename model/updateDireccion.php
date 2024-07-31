<?php

    include "../DAL/direccion_rest.php";

    $direccion = getDireccion($_GET["id"]);

    if(isset($_POST["actualizar"])){
        $valido = updateDireccion($_POST["id"], $_POST["provincia"], $_POST["canton"], $_POST["distrito"], $_POST["dir"]);

        if($valido) {
            header("Location: ../View/gestionRestaurante.php");
        } else {
            echo "Hubo un error a la hora de actualizar la direccion del restaurante";
        }
    }

?>