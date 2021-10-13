<div class="col-12 mt-3">
    <div class="card">
        <center>
            <h2 class="ml-4">Alumnos en acceso</h2>
        </center>
        <div class="card-body">
            <!-- <h1 class="header-title">Usuarios</h1> -->
            <div class=" datatable-primary">
                <table class="text-center tablaES">
                    <thead class="text-capitalize">
                        <tr>
                            <!-- SELECT id,nocontrol,nombre,carrera, entrada ,enhora,sahora FROM alumnos  -->
                            <th>#</th>
                            <th>No. Control</th>
                            <th>Nombre</th>
                            <th>Carrera</th>
                            <th>Fecha</th>
                            <th>Hora entrada</th>
                            <th>Hora salida</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $VerResidentes = new ControladorMostrarAlunmos();
                        $VerResidentes->ctrMostrarAlumnos();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>