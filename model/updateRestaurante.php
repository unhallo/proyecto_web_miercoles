<?php

    include "../DAL/restaurantes.php";

    $restaurante = getRestaurante($_GET["id"]);

    if(isset($_POST["actualizar"])){
        $valido = updateRestaurante($_POST["id"], $_POST["menu"], $_POST["nombre"]);

        if($valido) {
            header("Location: ../View/gestionRestaurante.php");
        } else {
            echo "Hubo un error a la hora de actualizar el restaurante";
        }
    }

?>