<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajadores</title>
</head>

<body>
    <br>
    <h2 class="well text-center">Gestion de Trabajadores</h2>

    <div class="row">
        <div class="col-md-4">

        </div>

        <div class="col-md-4 text-center">
            <button type="button" class="btn btn-primary btn-success" data-toggle="modal"
                data-target="#modalNuevoTrabajador">
                <i class="glyphicon glyphicon-plus"></i>
                Nuevo Trabajador
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
                <th class="text-center">Direccion</th>
                <th class="text-center">Telefono</th>
                <th class="text-center">Genero</th>
                <th class="text-center">Sucursal</th>
                <th class="text-center">Acciones</th>
            </thead>
            <tbody>
                <?php if ($listadoTrabajadores): ?>
                <?php foreach ($listadoTrabajadores->result() as $trabajadorTemporal): ?>
                <tr>
                    <td class="textcenter">
                        <?php echo $trabajadorTemporal->id_tr; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $trabajadorTemporal->nombre_tr; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $trabajadorTemporal->direccion_tr; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $trabajadorTemporal->telefono_tr; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $trabajadorTemporal->genero_tr; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $trabajadorTemporal->sucursal_tr; ?>
                    </td>

                    <td class="textcenter">


                        <a class="btn btn-primary glyphicon glyphicon-pencil" tooltip=""
                            href="<?php echo site_url("trabajadores/actualizar"); ?>/<?php echo $trabajadorTemporal->id_tr; ?>"></a>
                        <a onclick="return confirm('Esta seguro de eliminar?')"
                            class="btn btn-danger glyphicon glyphicon-trash"
                            href="<?php echo site_url("trabajadores/borrar"); ?>/<?php echo $trabajadorTemporal->id_tr; ?>"></a>

                    </td>
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <h3 class="text-center">No existen Trabajadores </h3>
                <?php endif; ?>


            </tbody>

        </table>
    </div>
    <div class="col-md-4">

    </div>

    <hr>


    <!-- Modal -->
    <div class="modal fade" id="modalNuevoTrabajador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Trabajador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formNuevoTrabajador" class=""
                        action="<?php echo site_url("trabajadores/guardarTrabajador"); ?>" method="post">
                        <!-- utilziar metodo post para mas seguridad  -->
                        <div class="row">
                            <div class="col-md-4 text-right">
                                <label for="">Nombre:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control " placeholder="Ingrese el nombre del Trabajador"
                                    name="nombre_tr" required>
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
                                <input type="text" class="form-control " placeholder="Ingrese la direccion"
                                    name="direccion_tr" required>
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
                                    name="telefono_tr" required>
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
                                    <option selected>Elegir el Genero :</option>

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
                                <select id="inputState" class="form-control" name="sucursal_tr" id="sucursal_tr" required>
                                    <option selected>Elegir Sucursal</option>
                                    <?php if ($listadoSucursales): ?>
                                    <?php foreach ($listadoSucursales->result() as $sucursalTemporal): ?>
                                    <option value="<?php echo $sucursalTemporal->nombre_sc; ?>">
                                        <?php echo $sucursalTemporal->nombre_sc; ?> [<?php echo $sucursalTemporal->encargado_sc; ?>]
                                        
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


                    <a href="<?php echo site_url("trabajadores/index"); ?>" class="btn btn-danger" data-dismiss="modal">
                        <i class="glyphicon glyphicon-remove"></i>
                        Cancelar
                    </a>
                </div>
            </div>
        </div>
    </div>



</body>

</html>