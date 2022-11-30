<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
</head>

<body>
    <br>
    <h2 class="well text-center">Gestion de Peliculas</h2>

    <div class="row">
        <div class="col-md-4">

        </div>
        <!-- <div class="col-md-4 text-center">
        <a href="<?php echo site_url("Peliculas/nuevo"); ?>" class="btn btn-success">
                    <i class="glyphicon glyphicon-plus"></i>
                Nueva Pelicula
                </a>
        </div> -->
        <div class="col-md-4 text-center">
            <button type="button" class="btn btn-primary btn-success" data-toggle="modal"
                data-target="#modalNuevaPelicula">
                <i class="glyphicon glyphicon-plus"></i>
                Nueva Pelicula
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
                <th class="text-center">Genero</th>
                <th class="text-center">Autor</th>
                <th class="text-center">Sinopsis</th>
                <th class="text-center">Clasificacion</th>
                <th class="text-center">Fecha Estreno</th>
                <th class="text-center">Acciones</th>
            </thead>
            <tbody>
                <?php if ($listadoPeliculas): ?>
                <?php foreach ($listadoPeliculas->result() as $peliculaTemporal): ?>
                <tr>
                    <td class="textcenter">
                        <?php echo $peliculaTemporal->id_pel; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $peliculaTemporal->nombre_pel; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $peliculaTemporal->genero_pel; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $peliculaTemporal->autor_pel; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $peliculaTemporal->sinopsis_pel; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $peliculaTemporal->clasificacion_pel; ?>
                    </td>
                    <td class="textcenter">
                        <?php echo $peliculaTemporal->fecha_estreno_pel; ?>
                    </td>
                    <td class="textcenter">
                        <button type="button" class="btn btn-primary btn-success" data-toggle="modal"
                            data-target="#modalActualizarPelicula" href="/<?php echo $peliculaTemporal->id_pel; ?>">
                            <i class="glyphicon glyphicon-pencil"></i>

                        </button>

                        <a class="btn btn-primary glyphicon glyphicon-pencil" tooltip=""
                            href="<?php echo site_url("peliculas/actualizar"); ?>/<?php echo $peliculaTemporal->id_pel; ?>"></a>
                        <a onclick="return confirm('Esta seguro de eliminar?')"
                            class="btn btn-danger glyphicon glyphicon-trash"
                            href="<?php echo site_url("peliculas/borrar"); ?>/<?php echo $peliculaTemporal->id_pel; ?>"></a>

                    </td>
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <h3 class="text-center">No existen Peliculas </h3>
                <?php endif; ?>


            </tbody>

        </table>
    </div>
    <div class="col-md-4">

    </div>

    <hr>


    <!-- Modal -->
    <div class="modal fade" id="modalNuevaPelicula" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Pelicula</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formNuevaPelicula" class="" action="<?php echo site_url("peliculas/guardarpelicula"); ?>"
                        method="post">
                        <!-- utilziar metodo post para mas seguridad  -->
                        <div class="row">
                            <div class="col-md-4 text-right">
                                <label for="">Nombre:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control " placeholder="Ingrese el nombre de la Pelicula"
                                    name="nombre_pel" required>
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
                                    name="genero_pel" required>
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
                                    name="autor_pel" required>
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
                                <input type="text" class="form-control " placeholder="Ingrese la sinopsis"
                                    name="sinopsis_pel" required>
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
                                <select id="inputState" class="form-control" name="clasificacion_pel"
                                    id="clasificacion_pel" required>
                                    <option selected>Elegir la Clasificacion:</option>

                                    <option value="A">G</option>
                                    <option value="PG">PG</option>
                                    <option value="PG-13">PG-13</option>
                                    <option value="PG-16">PG-16</option>
                                    <option value="R">R</option>
                                    <option value="17">17</option>
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
                                    name="fecha_estreno_pel" required>
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


                    <a href="<?php echo site_url("peliculas/index"); ?>" class="btn btn-danger" data-dismiss="modal">
                        <i class="glyphicon glyphicon-remove"></i>
                        Cancelar
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal actualizar -->
    <div class="modal fade" action="<?php echo site_url("peliculas/actualizar"); ?>" id="modalActualizarPelicula" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Pelicula</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if ($peliculaEditar): ?>
                            <form action="<?php echo site_url("peliculas/procesarActualizacion"); ?>" method="post">


                                <center>
                                    <input value="<?php echo $peliculaEditar->id_pel; ?>" type="hidden" name="id_pel"
                                        method="post">

                                </center>


                                <br>
                                <div class="row">
                                    <div class="col-md-4 text-right">
                                        <label for="">Nombre:</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control "
                                            placeholder="Ingrese el nombre de la Pelicula" name="nombre_pel"
                                            value="<?php echo $peliculaEditar->nombre_pel; ?> " required>
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
                                        <input type="text" class="form-control "
                                            placeholder="Ingrese el genero de la Pelicula" name="genero_pel"
                                            value="<?php echo $peliculaEditar->genero_pel; ?> " required>
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
                                        <input type="text" class="form-control "
                                            placeholder="Ingrese el autor de la pelicula" name="autor_pel"
                                            value="<?php echo $peliculaEditar->autor_pel; ?> " required>
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
                                        <input type="text" class="form-control " placeholder="Ingrese la sinopsis"
                                            name="sinopsis_pel" value="<?php echo $peliculaEditar->sinopsis_pel; ?> "
                                            required>
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
                                        <select id="inputState" class="form-control" name="clasificacion_pel"
                                            id="clasificacion_pel" required>
                                            <option selected>
                                                <?php echo $peliculaEditar->clasificacion_pel; ?>
                                            </option>

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
                                        <input type="date" class="form-control "
                                            placeholder="Ingrese la fecha de estreno" name="fecha_estreno_pel"
                                            value="<?php echo $peliculaEditar->fecha_estreno_pel; ?>" required>
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


                </div>
                <div class="modal-footer">


                    <a href="<?php echo site_url("peliculas/index"); ?>" class="btn btn-danger" data-dismiss="modal">
                        <i class="glyphicon glyphicon-remove"></i>
                        Cancelar
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>