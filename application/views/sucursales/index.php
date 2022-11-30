<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucursales</title>
</head>

<body>
    <br>
    <h2 class="well text-center">Sucursales</h2>

    <div class="row">
        <div class="col-md-4">

        </div>
        
        <div class="col-md-4 text-center">
            <button type="button" class="btn btn-primary btn-success" data-toggle="modal"
                data-target="#modalNuevaSucursal">
                <i class="glyphicon glyphicon-plus"></i>
                Nueva Sucursal
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
                <th class="text-center">Encargado</th>
                <th class="text-center">Acciones</th>
            </thead>
            <tbody>
                <?php if ($listadoSucursales): ?>
                <?php foreach ($listadoSucursales->result() as $sucursalTemporal): ?>
                <tr>
                    <td class="textcenter">
                        <?php echo $sucursalTemporal->id_sc; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $sucursalTemporal->nombre_sc; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $sucursalTemporal->direccion_sc; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $sucursalTemporal->telefono_sc; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $sucursalTemporal->encargado_sc; ?>
                    </td>
                    <td class="textcenter">
                        

                        <a class="btn btn-primary glyphicon glyphicon-pencil" tooltip=""
                            href="<?php echo site_url("sucursales/actualizar"); ?>/<?php echo $sucursalTemporal->id_sc; ?>"></a>
                        <a onclick="return confirm('Esta seguro de eliminar?')"
                            class="btn btn-danger glyphicon glyphicon-trash"
                            href="<?php echo site_url("sucursales/borrar"); ?>/<?php echo $sucursalTemporal->id_sc; ?>"></a>

                    </td>
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <h3 class="text-center">No existen Sucursales </h3>
                <?php endif; ?>


            </tbody>

        </table>
    </div>
    <div class="col-md-4">

    </div>

    <hr>


    <!-- Modal -->
    <div class="modal fade" id="modalNuevaSucursal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Sucursal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formNuevaPelicula" class="" action="<?php echo site_url("sucursales/guardarSucursal"); ?>"
                        method="post">
                        <!-- utilziar metodo post para mas seguridad  -->
                        <div class="row">
                            <div class="col-md-4 text-right">
                                <label for="">Nombre:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control " placeholder="Ingrese el nombre de la sucursal"
                                    name="nombre_sc" required>
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
                                    name="direccion_sc" required>
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
                                <input type="text" class="form-control " placeholder="Ingrese el Telefono "
                                    name="telefono_sc" required>
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
                                    name="encargado_sc" required>
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


                    <a href="<?php echo site_url("sucursales/index"); ?>" class="btn btn-danger" data-dismiss="modal">
                        <i class="glyphicon glyphicon-remove"></i>
                        Cancelar
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal actualizar -->
    
</body>

</html>