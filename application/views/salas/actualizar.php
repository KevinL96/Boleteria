<div class="row">
    <div class="col-md-12 text-center ">
        <h3>Actualizar Datos</h3>
    </div>
</div>
<div class="text-center">
    <a href="<?php echo site_url("Salas/index"); ?>" class="btn btn-primary">
        <i class="glyphicon glyphicon-menu-left"></i>
        Volver
    </a>
</div>
<br>

<div class="row">
    <div class="col-md-12">
        <?php if ($salaEditar): ?>
        <form action="<?php echo site_url("salas/procesarActualizacion"); ?>" method="post">


            <center>
                <input value="<?php echo $salaEditar->id_sal; ?>" type="hidden" name="id_sal" method="post">

            </center>


            <br>
            <div class="row">
                <div class="col-md-4 text-right">
                    <label for="">Numero de sala:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control " placeholder="Ingrese el numero de la sala"
                        name="numero_sal"  value="<?php echo $salaEditar->numero_sal; ?> "required>
                </div>
                <div class="col-md-4">

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 text-right">
                    <label for="">Asientos</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control " placeholder="Ingrese el numero de Asientos"
                        name="asientos_sal" value="<?php echo $salaEditar->asientos_sal; ?> " required>
                </div>
                <div class="col-md-4">

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 text-right">
                    <label for="">Sucursal:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control " placeholder="Ingrese la Sucursal" name="sucursal_sal"
                    value="<?php echo $salaEditar->sucursal_sal; ?> " required>
                </div>
                <div class="col-md-4">

                </div>
            </div>
            <br>

            <br>
            <div class="row">
                <div class="col-md-4 text-right">
                    <label for="">Tipo:</label>
                </div>
                <div class="form-group col-md-4">
                    <select id="inputState" class="form-control" name="tipo_sal" id="tipo_sal" required>
                        <option selected><?php echo $salaEditar->tipo_sal; ?> </option>

                        <option value="Pantalla Gigante">Pantalla Gigante</option>
                        <option value="D-BOX">D-BOX</option>
                        <option value="IMAX">IMAX</option>
                        <option value="Real-3D">Real-3D</option>
                    </select>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-4">

                    </div>
                    
                    <div class="col-md-4">
                        <button type="submit" name="button" class="btn btn-warning">
                            <i class="glyphicon glyphicon-floppy-open"></i>
                            Actualizar
                        </button>

                        <a href="<?php echo site_url("Salas/index"); ?>" class="btn btn-danger">
                            <i class="glyphicon glyphicon-remove"></i>
                            Cancelar
                        </a>
                    </div>
                    <div class="col-md-4">

                    </div>
                    
        </form>
        <?php else: ?>
        <div class="alert alert-danger">
            <b>No se encontro la sala</b>

        </div>
        <?php endif; ?>
    </div>
</div>