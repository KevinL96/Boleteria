<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salas</title>
</head>

<body>
    <br>
    <h2 class="well text-center">Gestion de Salas</h2>

    <div class="row">
        <div class="col-md-4">

        </div>
        <!-- <div class="col-md-4 text-center">
        <a href="<?php echo site_url("Salas/nuevo"); ?>" class="btn btn-success">
                    <i class="glyphicon glyphicon-plus"></i>
                Nueva Pelicula
                </a>
        </div> -->
        <div class="col-md-4 text-center">
            <button type="button" class="btn btn-primary btn-success" data-toggle="modal"
                data-target="#modalNuevaSala">
                <i class="glyphicon glyphicon-plus"></i>
                Nueva Sala
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
                <th class="text-center">Numero de sala </th>
                <th class="text-center">Asientos</th>
                <th class="text-center">Sucursal</th>
                <th class="text-center">Tipo</th>
                <th class="text-center">Acciones</th>
            </thead>
            <tbody>
                <?php if ($listadoSalas): ?>
                <?php foreach ($listadoSalas->result() as $salaTemporal): ?>
                <tr>
                    <td class="textcenter">
                        <?php echo $salaTemporal->id_sal; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $salaTemporal->numero_sal; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $salaTemporal->asientos_sal; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $salaTemporal->sucursal_sal; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $salaTemporal->tipo_sal; ?>
                    </td>
                    
                    <td class="textcenter">
                        <button type="button" class="btn btn-primary btn-success" data-toggle="modal"
                            data-target="#modalActualizarSala" href="/<?php echo $salaTemporal->id_sal; ?>">
                            <i class="glyphicon glyphicon-pencil"></i>

                        </button>

                        <a class="btn btn-primary glyphicon glyphicon-pencil" tooltip=""
                            href="<?php echo site_url("Salas/actualizar"); ?>/<?php echo $salaTemporal->id_sal; ?>"></a>
                        <a onclick="return confirm('Esta seguro de eliminar?')"
                            class="btn btn-danger glyphicon glyphicon-trash"
                            href="<?php echo site_url("Salas/borrar"); ?>/<?php echo $salaTemporal->id_sal; ?>"></a>

                    </td>
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <h3 class="text-center">No existen Salas </h3>
                <?php endif; ?>


            </tbody>

        </table>
    </div>
    <div class="col-md-4">

    </div>

    <hr>


    <!-- Modal -->
    <div class="modal fade" id="modalNuevaSala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Sala</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formNuevaPelicula" class="" action="<?php echo site_url("Salas/guardarSala"); ?>"
                        method="post">
                        <!-- utilziar metodo post para mas seguridad  -->
                        <div class="row">
                            <div class="col-md-4 text-right">
                                <label for="">Numero de sala:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control " placeholder="Ingrese el numero de la sala"
                                    name="numero_sal" required>
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
                                <input type="number" class="form-control " placeholder="Ingrese el nnumero de Asientos"
                                    name="asientos_sal" required>
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
                                <input type="text" class="form-control " placeholder="Ingrese la Sucursal"
                                    name="sucursal_sal" required>
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
                                <select id="inputState" class="form-control" name="tipo_sal"
                                    id="tipo_sal" required>
                                    <option selected>Elegir el Tipo:</option>

                                    <option value="Pantalla Gigante">Pantalla Gigante</option>
                                    <option value="D-BOX">D-BOX</option>
                                    <option value="IMAX">IMAX</option>
                                    <option value="Real-3D">Real-3D</option>
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


                    <a href="<?php echo site_url("Salas/index"); ?>" class="btn btn-danger" data-dismiss="modal">
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