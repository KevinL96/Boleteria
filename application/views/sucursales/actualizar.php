<div class="row">
    <div class="col-md-12 text-center ">
        <h3>Actualizar Datos</h3>
    </div>
</div>
<div class="text-center">
    <a href="<?php echo site_url("sucursales/index"); ?>" class="btn btn-primary">
        <i class="glyphicon glyphicon-menu-left"></i>
        Volver
    </a>
</div>
<br>

<div class="row">
    <div class="col-md-12">
        <?php if ($sucursalEditar): ?>
        <form action="<?php echo site_url("sucursales/procesarActualizacion"); ?>" method="post">


            <center>
                <input value="<?php echo $sucursalEditar->id_sc; ?>" type="hidden" name="id_sc" method="post">

            </center>


            <br>
            <div class="row">
                <div class="col-md-4 text-right">
                    <label for="">Nombre:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control " placeholder="Ingrese el nombre de la sucursal"
                        name="nombre_sc" value="<?php echo $sucursalEditar->nombre_sc; ?>" required>
                </div>
                <div class="col-md-4">

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 text-right">
                    <label for="">Direccion:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control " placeholder="Ingrese la direccion de la sucursal "
                        name="direccion_sc" value="<?php echo $sucursalEditar->direccion_sc; ?>" required>
                </div>
                <div class="col-md-4">

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 text-right">
                    <label for="">Telefono:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control " placeholder="Ingrese el Telefono " name="telefono_sc"
                    value="<?php echo $sucursalEditar->telefono_sc; ?>" required>
                </div>
                <div class="col-md-4">

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 text-right">
                    <label for="">Encargado:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control " placeholder="Ingrese el nombre del Encargado "
                        name="encargado_sc" value="<?php echo $sucursalEditar->encargado_sc; ?>"required>
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

                    <a href="<?php echo site_url("sucursales/index"); ?>" class="btn btn-danger">
                        <i class="glyphicon glyphicon-remove"></i>
                        Cancelar
                    </a>
                </div>
                <br>
        </form>
        <?php else: ?>
        <div class="alert alert-danger">
            <b>No se encontro la Sucursal</b>

        </div>
        <?php endif; ?>
    </div>
</div>