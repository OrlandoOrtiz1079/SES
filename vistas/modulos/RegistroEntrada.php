<div class="container-fluid">
    <div class="row">
        <div class="py-5 col-12 col-sm col-lg-6 mx-auto">

            <!--Formulario de registro de visitas-->
            <form class="bg-white py-3 px-4" action="/registro" method="POST">
                <h1 style="background-color: #007BFF; padding: 10px;color: white;" class=" text-center">Formulario de registro</h1>


                <div class="form-floating mb-3">
                    <input onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="8" minlength="8" type="text" class="form-control" id="floatingInput" placeholder="Numero de control" autofocus autocomplete="on" name="nocontrol">
                    <label for="floatingInput">Numero de control</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" onkeyup="mayus(this);"  placeholder="Nombre" name="nombre">
                    <label for="floatingInput">Nombre</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" onkeyup="mayus(this);" placeholder="Carrera" name="carrera">
                    <label for="floatingInput">Carrera</label>
                </div>


                <div align="end">
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>