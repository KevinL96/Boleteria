<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletos</title>
</head>

<body>
    <br>
    <h2 class=" text-center">Generar Boleto</h2>

    <div class="row">
        <div class="col-md-4">

        </div>

        <div class="col-md-4 text-center">
            <button type="button" class="btn btn-primary btn-success" data-toggle="modal"
                data-target="#modalNuevoBoleto">
                <i class="glyphicon glyphicon-plus"></i>
                Nuevo Boleto
            </button>
        </div>

        <div class="col-md-4">

        </div>

    </div>
    <br>
    <div class="col-md-4">

    </div>
    <div class="col-md-4 text-center">
        <table class=" table table-stripped table-bordered table-hover">
            <thead>
                <th class="text-center">ID</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Cedula</th>
                <th class="text-center">Fecha</th>
                <th class="text-center">Pelicula</th>
                <th class="text-center">Sala</th>
                <th class="text-center">Acciones</th>
            </thead>
            <tbody>
                <?php if ($listadoBoletos): ?>
                <?php foreach ($listadoBoletos->result() as $boletoTemporal): ?>
                <tr>
                    <td class="textcenter">
                        <?php echo $boletoTemporal->id_bol; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $boletoTemporal->nombre_bol; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $boletoTemporal->cedula_bol; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $boletoTemporal->fecha_bol; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $boletoTemporal->pelicula_bol; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $boletoTemporal->sala_bol; ?>
                    </td>

                    <td class="textcenter">


                        <a onclick="return confirm('Esta seguro de eliminar?')"
                            class="btn btn-danger glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Eliminar"
                            href="<?php echo site_url("boletos/borrar"); ?>/<?php echo $boletoTemporal->id_bol; ?>"></a>

                    </td>
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <h3 class="text-center">No existen Boletos Generados </h3>
                <?php endif; ?>


            </tbody>

        </table>
    </div>
    <div class="col-md-4">

    </div>

    <hr>


    <!-- Modal -->
    <div class="modal fade" id="modalNuevoBoleto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Generar Boleto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formNuevoTrabajador" class=""
                        action="<?php echo site_url("boletos/guardarBoleto"); ?>" method="post">
                        <!-- utilziar metodo post para mas seguridad  -->
                        <div class="row">
                            <div class="col-md-4 text-right">
                                <label for="">Nombre:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control " placeholder="Ingrese el nombre del cliente"
                                    name="nombre_bol" required>
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4 text-right">
                                <label for="">Cedula:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control " placeholder="Ingrese la cedula del cliente"
                                    name="cedula_bol" required>
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4 text-right">
                                <label for="">Fecha:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="date" class="form-control " placeholder=""
                                    name="fecha_bol" value="<?php echo date('Y-m-d'); ?>" readonly required>
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4 text-right">
                                <label for="">Pelicula:</label>
                            </div>
                            <div class="form-group col-md-4">
                                <select id="inputState" class="form-control" name="pelicula_bol" id="pelicula_bol" required>
                                    <option selected>Elegir Pelicula</option>
                                    <?php if ($listadoPeliculas): ?>
                                    <?php foreach ($listadoPeliculas->result() as $peliculaTemporal): ?>
                                    <option value="<?php echo $peliculaTemporal->nombre_pel; ?>">
                                        <?php echo $peliculaTemporal->nombre_pel; ?> [Genero : <?php echo $peliculaTemporal->genero_pel; ?>] ,[Clasificacion : <?php echo $peliculaTemporal->clasificacion_pel; ?>]
                                        
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
                            <div class="col-md-4 text-right">
                                <label for="">Sala:</label>
                            </div>
                            <div class="form-group col-md-4">
                                <select id="inputState" class="form-control" name="sala_bol" id="sala_bol" required>
                                    <option selected>Elegir Sala</option>
                                    <?php if ($listadoSalas): ?>
                                    <?php foreach ($listadoSalas->result() as $salaTemporal): ?>
                                    <option value="<?php echo $salaTemporal->numero_sal; ?>">
                                        <?php echo $salaTemporal->numero_sal; ?> [<?php echo $salaTemporal->tipo_sal; ?>]
                                        
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
                                <button type="submit" name="button" class="btn btn-primary">
                                    <i class="glyphicon glyphicon-floppy-saved"></i>
                                    Guardar
                                </button>
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>


                    </form>


                </div>
                <div class="modal-footer">


                    <a href="<?php echo site_url("boletos/index"); ?>" class="btn btn-danger" data-dismiss="modal">
                        <i class="glyphicon glyphicon-remove"></i>
                        Cancelar
                    </a>
                </div>
            </div>
        </div>
    </div>



</body>

</html>