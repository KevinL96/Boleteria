<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>

<body>
    <br>
    <h2 class="well text-center">Snacks</h2>

    <div class="row">
        <div class="col-md-4">

        </div>
        
        <div class="col-md-4 text-center">
            <button type="button" class="btn btn-primary btn-success" data-toggle="modal"
                data-target="#modalNuevoSnack">
                <i class="glyphicon glyphicon-plus"></i>
                Nuevo Snack
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
                <th class="text-center">Precio</th>
                <th class="text-center">Acciones</th>
            </thead>
            <tbody>
                <?php if ($listadoSnacks): ?>
                <?php foreach ($listadoSnacks->result() as $snackTemporal): ?>
                <tr>
                    <td class="textcenter">
                        <?php echo $snackTemporal->id_snk; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $snackTemporal->nombre_snk; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $snackTemporal->precio_snk; ?>
                    </td>
                    
                    <td class="textcenter">
                        

                        <a class="btn btn-primary glyphicon glyphicon-pencil" tooltip=""
                            href="<?php echo site_url("snacks/actualizar"); ?>/<?php echo $snackTemporal->id_snk; ?>"></a>
                        <a onclick="return confirm('Esta seguro de eliminar?')"
                            class="btn btn-danger glyphicon glyphicon-trash"
                            href="<?php echo site_url("snacks/borrar"); ?>/<?php echo $snackTemporal->id_snk; ?>"></a>

                    </td>
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <h3 class="text-center">No existen Snacks </h3>
                <?php endif; ?>


            </tbody>

        </table>
    </div>
    <div class="col-md-4">

    </div>

    <hr>


    <!-- Modal -->
    <div class="modal fade" id="modalNuevoSnack" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Snack</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formNuevaPelicula" class="" action="<?php echo site_url("snacks/guardarSnack"); ?>"
                        method="post">
                        <!-- utilziar metodo post para mas seguridad  -->
                        <div class="row">
                            <div class="col-md-4 text-right">
                                <label for="">Nombre:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control " placeholder="Ingrese el nombre del Snack"
                                    name="nombre_snk" required>
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
                                <input type="text" class="form-control " placeholder="Ingrese el precio del Snack"
                                    name="precio_snk" required>
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


                    <a href="<?php echo site_url("snacks/index"); ?>" class="btn btn-danger" data-dismiss="modal">
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