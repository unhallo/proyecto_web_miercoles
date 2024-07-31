<?php 
    require_once("../DB/conexion.php");

    function getDireccion( $id ) {
        $conexion = Conecta();
        $sql = "SELECT * FROM DIRECCION_REST WHERE COD_POST = :cod";

        $resultado = $conexion->prepare($sql);
        $resultado->execute(array(":cod" => $id));
        $registros = $resultado->fetchAll(PDO::FETCH_OBJ);

        return $registros;
    }

    function insertDireccion( $provincia, $canton, $distrito, $dir ) {
        $conexion = Conecta();
        $sql = "INSERT INTO DIRECCION_REST (PROVINCIA, CANTON, DISTRITO, DIRECC_EXACTA) VALUES(:prov, :canton, :dist, :dir)";

        $resultado = $conexion->prepare($sql);
        $resultado->execute(array(":prov"=> $provincia, ":canton"=> $canton,":dist"=> $distrito, ":dir"=> $dir));

        if ($resultado->rowCount() > 0) {
            $resultado->closeCursor();
            return true;
        } else {
            $resultado->closeCursor();
            return false;
        }
    }

    function getLastId() {
        $conexion = Conecta();
        return $conexion->lastInsertId();
    }

    function updateDireccion( $id, $provincia, $canton, $distrito, $dir ) {
        $conexion = Conecta();
        $sql = "UPDATE DIRECCION_REST SET PROVINCIA = :prov, CANTON = :canton, DISTRITO = :dist, DIRECC_EXACTA = :dir WHERE COD_POST = :cod";

        $resultado = $conexion->prepare($sql);
        $resultado->execute(array(":prov"=> $provincia, ":canton"=> $canton,":dist"=> $distrito, ":dir"=> $dir, ":cod"=> $id));

        if ($resultado->rowCount() > 0) {
            $resultado->closeCursor();
            return true;
        } else {
            $resultado->closeCursor();
            return false;
        }
    }

    function deleteDireccion($id) {
        $conexion = Conecta();
        $sql = "DELETE FROM DIRECCION_REST WHERE COD_POST = :cod";

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