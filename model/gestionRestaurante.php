<?php

    include "../DAL/restaurantes.php";

    $restaurantes = getAllRestaurantes();

    if(isset($_GET["id"])){
        $valido = deleteRestaurante($_GET["id"]);

        if($valido) {
            header("Location: ../View/gestionRestaurante.php");
        } else {
            echo "Hubo un error a la hora de eliminar el registro";
        }
    }

?>