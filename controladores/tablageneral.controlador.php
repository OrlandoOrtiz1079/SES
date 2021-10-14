<?php

class ControladorMostrarAlunmosG
{
    /*=============================================
    MOSTRAR TODOS LOS ALUMNOS GENERAL
    =============================================*/
    public static function ctrMostrarAlumnos()
    {

        $Object = new DateTime();
        $Object->setTimezone(new DateTimeZone('America/Mexico_City'));
        $DateEntrada = $Object->format("d-m-Y");
        $tabla = "alumnos";
        $item = null;
        $valor = "";

        $respuesta = ModeloMostrarAlumnosG::MdlMostrarAlumnos($tabla, $item, $valor, $DateEntrada);

        foreach ($respuesta as $key => $value) {
            echo ' <tr class="table-success">
                            <td>' . $value["id"] . '</td>
                            <td>' . $value["nocontrol"] . '</td>
                            <td>' . $value["nombre"] . '</td>
                            <td>' . $value["carrera"] . '</td>
                            <td>' . $value["entrada"] . '</td>
                            <td>' . $value["enhora"] . '</td>
                            <td>' ?>
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