<div class="row">
    <div class="col-md-12 text-center ">
        <h3>Actualizar Datos</h3>
    </div>
</div>
<div class="text-center">
    <a href="<?php echo site_url("peliculas/index"); ?>" class="btn btn-primary">
        <i class="glyphicon glyphicon-menu-left"></i>
        Volver
    </a>
</div>
<br>

<div class="row">
    <div class="col-md-12">
        <?php if ($peliculaEditar): ?>
        <form action="<?php echo site_url("peliculas/procesarActualizacion"); ?>" method="post">


            <center>
                <input value="<?php echo $peliculaEditar->id_pel; ?>" type="hidden" name="id_pel" method="post">

            </center>


            <br>
            <div class="row">
                <div class="col-md-4 text-right">
                    <label for="">Nombre:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control " placeholder="Ingrese el nombre de la Pelicula"
                        name="nombre_pel" value="<?php echo $peliculaEditar->nombre_pel; ?> "required>
                </div>
                <div class="col-md-4">

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 text-right">
                    <label for="">Genero:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control " placeholder="Ingrese el genero de la Pelicula"
                        name="genero_pel" value="<?php echo $peliculaEditar->genero_pel; ?> "required>
                </div>
                <div class="col-md-4">

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 text-right">
                    <label for="">Autor:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control " placeholder="Ingrese el autor de la pelicula"
                        name="autor_pel" value="<?php echo $peliculaEditar->autor_pel; ?> " required>
                </div>
                <div class="col-md-4">

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 text-right">
                    <label for="">Sinopsis</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control " placeholder="Ingrese la sinopsis" name="sinopsis_pel"
                    value="<?php echo $peliculaEditar->sinopsis_pel; ?> " required>
                </div>
                <div class="col-md-4">

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 text-right">
                    <label for="">Clasificacion:</label>
                </div>
                <div class="form-group col-md-4">
                    <select id="inputState" class="form-control" name="clasificacion_pel" id="clasificacion_pel"
                    required>
                        <option selected><?php echo $peliculaEditar->clasificacion_pel; ?></option>

                        <option value="A">G</option>
                        <option value="A">PG</option>
                        <option value="A">PG-13</option>
                        <option value="A">PG-16</option>
                        <option value="A">R</option>
                        <option value="A">17</option>
                    </select>
                </div>
                <div class="col-md-4">

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 text-right">
                    <label for="">Fecha de Estreno:</label>
                </div>
                <div class="col-md-4">
                    <input type="date" class="form-control " placeholder="Ingrese la fecha de estreno"
                        name="fecha_estreno_pel" value="<?php echo date($peliculaEditar->fecha_estreno_pel); ?>" required>
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

                    <a href="<?php echo site_url("peliculas/index"); ?>" class="btn btn-danger">
                        <i class="glyphicon glyphicon-remove"></i>
                        Cancelar
                    </a>
                </div>
                <br>
        </form>
        <?php else: ?>
        <div class="alert alert-danger">
            <b>No se encontro la pelicula</b>

        </div>
        <?php endif; ?>
    </div>
</div>