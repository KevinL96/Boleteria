<div class="row">
    <div class="col-md-12 text-center ">
        <h3>Actualizar Datos</h3>
    </div>
</div>
<div class="text-center">
    <a href="<?php echo site_url("trabajadores/index"); ?>" class="btn btn-primary">
        <i class="glyphicon glyphicon-menu-left"></i>
        Volver
    </a>
</div>
<br>

<div class="row">
    <div class="col-md-12">
        <?php if ($trabajadorEditar): ?>
        <form action="<?php echo site_url("trabajadores/procesarActualizacion"); ?>" method="post">


            <center>
                <input value="<?php echo $trabajadorEditar->id_tr; ?>" type="hidden" name="id_tr" method="post">

            </center>


            <br>
            <div class="row">
                <div class="col-md-4 text-right">
                    <label for="">Nombre:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control " placeholder="Ingrese el nombre del Trabajador"
                        name="nombre_tr" value="<?php echo $trabajadorEditar->nombre_tr; ?> " required>
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
                    <input type="text" class="form-control " placeholder="Ingrese la direccion" name="direccion_pel"
                    value="<?php echo $trabajadorEditar->direccion_tr; ?> " required>
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
                    <input type="text" class="form-control " placeholder="Ingrese telefono del Trabajador"
                        name="telefono_tr" value="<?php echo $trabajadorEditar->telefono_tr; ?> "required>
                </div>
                <div class="col-md-4">

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 text-right">
                    <label for="">Genero:</label>
                </div>
                <div class="form-group col-md-4">
                    <select id="inputState" class="form-control" name="genero_tr" id="genero_tr" required>
                        <option selected><?php echo $trabajadorEditar->genero_tr; ?> </option>

                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>

                    </select>
                </div>
                <div class="col-md-4">

                </div>
            </div>


            <br>
            <div class="row">
                <div class="col-md-4 text-right">
                    <label for="">Sucursal:</label>
                </div>
                <div class="form-group col-md-4">
                    <select id="inputState" class="form-control" name="fk_id_sc" id="fk_id_sc" required>
                        <option selected><?php echo $trabajadorEditar->sucursal_tr; ?> </option>
                        <?php if ($listadoSucursales): ?>
                        <?php foreach ($listadoSucursales->result() as $sucursalTemporal): ?>
                        <option value="<?php echo $sucursalTemporal->id_sc; ?>">
                            <?php echo $sucursalTemporal->nombre_sc; ?>
                            <?php echo $sucursalTemporal->encargado_sc; ?>
                        </option>
                        <?php endforeach ?>
                        <?php endif ?>

                    </select>
                </div>
                <div class="col-md-4">

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-7">
                    <button type="submit" name="button" class="btn btn-warning">
                        <i class="glyphicon glyphicon-floppy-open"></i>
                        Actualizar
                    </button>

                    <a href="<?php echo site_url("trabajadores/index"); ?>" class="btn btn-danger">
                        <i class="glyphicon glyphicon-remove"></i>
                        Cancelar
                    </a>
                </div>
                <br>
        </form>
        <?php else: ?>
        <div class="alert alert-danger">
            <b>No se encontro la trabajador</b>

        </div>
        <?php endif; ?>
    </div>
</div>