<?php

class ControladorMostrarAlunmos
{

    /*=============================================
    MOSTRAR TODOS LOS ALUMNOS
    =============================================*/
    public static function ctrMostrarAlumnos()
    {

        $Object = new DateTime();
        $Object->setTimezone(new DateTimeZone('America/Mexico_City'));
        $DateEntrada = $Object->format("d-m-Y");
        $tabla = "alumnos";

        // $tabla = "residentes";
        $item = null;
        $valor = "";

        $respuesta = ModeloMostrarAlumnos::MdlMostrarAlumnos($tabla, $item, $valor);

        foreach ($respuesta as $key => $value) {
            echo ' <tr class="table-success">
                            <td>' . $value["id"] . '</td>
                            <td>' . $value["nocontrol"] . '</td>
                            <td>' . $value["nombre"] . '</td>
                            <td>' . $value["carrera"] . '</td>
                            <td>' . $value["entrada"] . '</td>
                            <td>' . $value["enhora"] . '</td>
                            <td>'?>
                                 <?php
                                    if (empty($value["sahora"])) {
                                        echo "Dentro del Tec";
                                    } else {
                                        echo $value["sahora"];
                                    }
                                ?>
                                <?php
                            '</td>
                    </tr>';
        }
    }
}
