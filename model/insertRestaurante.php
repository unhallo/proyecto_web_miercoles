<?php

    include "../DAL/restaurantes.php";
    include "../DAL/direccion_rest.php";

    if(isset($_POST["enviar_restaurante"])){ 
        $rest = insertRestaurante($_POST["menu"], $_POST["nombre"], $_POST["provincia"], $_POST["canton"], $_POST["distrito"], $_POST["dir"]);

        if($rest){ 
            header("Location: ../View/gestionRestaurante.php");
        } else {
            echo "Hubo un problema a la hora de crear la direccion";
        }
    }

?>