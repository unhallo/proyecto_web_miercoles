<?php 
    require_once("../DB/conexion.php");

    function insertRestaurante($menu, $nombre, $provincia, $canton, $distrito, $dir) {
        $conexion = Conecta();

        $sql = "INSERT INTO DIRECCION_REST (PROVINCIA, CANTON, DISTRITO, DIRECC_EXACTA) VALUES(:prov, :canton, :dist, :dir)";

        $resultado = $conexion->prepare($sql);
        $resultado->execute(array(":prov"=> $provincia, ":canton"=> $canton,":dist"=> $distrito, ":dir"=> $dir));

        $post = $conexion->lastInsertId();

        $stmt = "INSERT INTO RESTAURANTE (COD_POST, MENU_REST, NOM_REST) VALUES (:post, :menu, :nombre)";

        $respuesta = $conexion->prepare($stmt);
        $respuesta->execute(array(":menu"=>$menu,":nombre"=>$nombre, ":post"=> $post));

        if ($resultado->rowCount() > 0 && $respuesta->rowCount() > 0) {
            $resultado->closeCursor();
            return true;
        } else {
            $resultado->closeCursor();
            return false;
        }
    }

    function getAllRestaurantes() {
        $conexion = Conecta();
        $sql = "SELECT * FROM RESTAURANTE";
        $resultado = $conexion->prepare($sql);
        $resultado->execute(array());
        $registros = $resultado->fetchAll(PDO::FETCH_OBJ);

        return $registros;
    }

    function getRestaurante( $id ) {
        $conexion = Conecta();
        $sql = "SELECT * FROM RESTAURANTE WHERE COD_REST = :cod";

        $resultado = $conexion->prepare($sql);
        $resultado->execute(array(":cod" => $id));
        $registros = $resultado->fetchAll(PDO::FETCH_OBJ);

        return $registros;
    }

    function updateRestaurante($id, $menu, $nombre) {
        $conexion = Conecta();
        $sql = "UPDATE RESTAURANTE SET MENU_REST = :menu, NOM_REST = :nombre WHERE COD_REST = :cod";

        $resultado = $conexion->prepare($sql);
        $resultado->execute(array(":cod"=> $id, ":menu"=> $menu, ":nombre"=> $nombre));

        if ($resultado->rowCount() > 0) {
            $resultado->closeCursor();
            return true;
        } else {
            $resultado->closeCursor();
            return false;
        }
    }

    function deleteRestaurante($id) {
        $conexion = Conecta();
        $sql = "DELETE FROM RESTAURANTE WHERE COD_REST = :cod";

        $resultado = $conexion->prepare($sql);
        $resultado->execute(array(":cod"=> $id));

        if ($resultado->rowCount() > 0) {
            $resultado->closeCursor();
            return true;
        } else {
            $resultado->closeCursor();
            return false;
        }
    }