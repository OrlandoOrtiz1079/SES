<?php

require_once "conexion.php";

class ModeloMostrarAlumnos
{

    /*=============================================
	MOSTRAR ALUMNOS EN TABLA PRINCIPAL
	=============================================*/

    static public function MdlMostrarAlumnos($tabla, $item, $valor)
    {

        if ($item != null) {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
            $stmt->execute();
            echo "1 " . $stmt->fetchAll();
            return $stmt->fetch();
        } else {
            $stmt = Conexion::conectar()->prepare("SELECT id, nocontrol, nombre, carrera, entrada ,enhora, sahora FROM $tabla ");
            $stmt->execute();
            return $stmt->fetchAll();
        }

        
        $stmt = null;
    }
}