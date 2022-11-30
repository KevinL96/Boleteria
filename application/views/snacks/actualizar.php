<div class="row">
    <div class="col-md-12 text-center ">
        <h3>Actualizar Datos</h3>
    </div>
</div>
<div class="text-center">
    <a href="<?php echo site_url("snacks/index"); ?>" class="btn btn-primary">
        <i class="glyphicon glyphicon-menu-left"></i>
        Volver
    </a>
</div>
<br>

<div class="row">
    <div class="col-md-12">
        <?php if ($snackEditar): ?>
        <form action="<?php echo site_url("snacks/procesarActualizacion"); ?>" method="post">


            <center>
                <input value="<?php echo $snackEditar->id_snk; ?>" type="hidden" name="id_snk" method="post">

            </center>


            <br>
            <div class="row">
                <div class="col-md-4 text-right">
                    <label for="">Nombre:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control " placeholder="Ingrese el nombre del Snack"
                        name="nombre_snk" value="<?php echo $snackEditar->nombre_snk; ?> "required>
                </div>
                <div class="col-md-4">

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 text-right">
                    <label for="">Precio:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control " placeholder="Ingrese el genero de la snack"
                        name="precio_snk" value="<?php echo $snackEditar->precio_snk; ?> "required>
                </div>
                <div class="col-md-4">

                </div>
            </div>
            <br>
            
            <br>
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-7">
                    <button type="submit" name="button" class="btn btn-warning">
                        <i class="glyphicon glyphicon-floppy-open"></i>
                        Actualizar
                    </button>

                    <a href="<?php echo site_url("snacks/index"); ?>" class="btn btn-danger">
                        <i class="glyphicon glyphicon-remove"></i>
                        Cancelar
                    </a>
                </div>
                <br>
        </form>
        <?php else: ?>
        <div class="alert alert-danger">
            <b>No se encontro el Snack</b>

        </div>
        <?php endif; ?>
    </div>
</div>