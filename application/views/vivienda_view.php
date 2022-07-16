<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<html>

<head>
    <title>Vivienda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php base_url() ?> assets/style.css">
</head>

<body>
    <?php include 'includes/navbar.php' ?>
    <main>



        <?php

        $id = 1;
        $direccion = 'Calle falsa 123';
        $numero = '123';
        $tipo = 'Casa';
        $estado = 'Nuevo';


        $this->load->library('parser');

        $data_form = array(
            'id' => $id,
            'direccion' => $direccion,
            'numero' => $numero,
            'tipo' => $tipo,
            'estado' => $estado
        );
        ?>


        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Crear Vivienda</h1>
                    <form action="<?php echo base_url() ?>index.php/vivienda_controller/c_create_vivienda" method="post">

                        <input type="hidden" name="id_vivienda" value="1">
                        <div class="form-group">
                            <label for="direccion">Direccion</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion">
                        </div>
                        <div class="form-group">
                            <label for="numero">Numero</label>
                            <input type="int" class="form-control" id="numero" name="numero" placeholder="Numero">
                        </div>
                        <div class="form-group">
                            <label for="tipo">Tipo</label>
                            <select class="form-control" id="tipo" name="tipo">
                                <option value="1">Casa</option>
                                <option value="2">Apartamento</option>
                                <option value="3">Cabaña</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Estado</label>

                            <div class="form-check">

                                <input type="radio" name="estado" id="1" value="1">
                                <label for="1">Nuevo</label>
                                <input type="radio" name="estado" id="2" value="2">
                                <label for="2">Usado</label>
                                <input type="radio" name="estado" id="3" value="3">
                                <label for="3">Renovado</label>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </form>
                </div>
            </div>
        </div>




        <hr />


        <div class="container">
            <div class="row">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Direccion</th>
                            <th>Numero</th>
                            <th>tipo</th>
                            <th>estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($viviendas as $vivienda) { ?>
                            <tr>
                                <td><?php echo $vivienda['id_vivienda'] ?></td>
                                <td><?php echo $vivienda['direccion'] ?></td>
                                <td><?php echo $vivienda['numero'] ?></td>
                                <td><?php echo $vivienda['tipo'] ?></td>
                                <td><?php echo $vivienda['estado'] ?></td>
                                <td>
                                    <div class="btn-group" role="group">

                                        <a href="<?php echo base_url() ?>vivienda/c_get_vivienda/<?php echo $vivienda['id_vivienda'] ?>" class="btn btn-secondary">Ver</a>

                                        <a href="<?php echo base_url() ?>vivienda/c_update_vivienda/<?php echo $vivienda['id_vivienda'] ?>" class="btn btn-warning">Editar</a>

                                        <a href="<?php echo base_url() ?>vivienda/c_delete_vivienda/<?php echo $vivienda['id_vivienda'] ?>" class="btn btn-danger">Eliminar</a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
            </div>
        </div>



    </main>
</body>

</html>