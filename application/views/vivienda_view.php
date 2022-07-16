<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<html>
<?php $this->load->view('includes/head'); ?>

<body>
    <?php $this->load->view('includes/navbar') ?>
    <main>
        <?php

        if ($view_type == 'default') {

            $this->load->view('includes/form', $data = array(
                'form_action' => 'vivienda_controller/c_create_vivienda',
            ));

        ?>


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

                                            <a href="<?php echo base_url() ?>index.php/vivienda_controller/c_get_vivienda/<?php echo $vivienda['id_vivienda'] ?>" class="btn btn-secondary">Ver</a>

                                            <a href="<?php echo base_url() ?>index.php/vivienda_controller/c_update_view_vivienda?id_vivienda=<?php echo $vivienda['id_vivienda'] ?>" class="btn btn-warning">Editar</a>

                                            <a href="<?php echo base_url() ?>index.php/vivienda_controller/c_delete_vivienda?id_vivienda=<?php echo $vivienda['id_vivienda'] ?>" class="btn btn-danger">Eliminar</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                </div>
            </div>
        <?php } else if ($view_type == 'update') {
            $this->load->view('includes/form', $data = array(
                'form_action' => 'vivienda_controller/c_update_vivienda',
                'id_vivienda' => $vivienda['id_vivienda'],
                'direccion' => $vivienda['direccion'],
                'numero' => $vivienda['numero'],
                'tipo' => $vivienda['tipo'],
                'estado' => $vivienda['estado'],
            ));
        }

        ?>


    </main>
</body>

</html>