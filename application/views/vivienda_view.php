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

            if(isset($viviendas)){
                $this->load->view('includes/list', $data = array(
                    'viviendas' => $viviendas,
                ));
            }
       } elseif ($view_type == 'update') {
            $this->load->view('includes/form', $data = array(
                'form_action' => 'vivienda_controller/c_update_vivienda',
                'id_vivienda' => $vivienda['id_vivienda'],
                'direccion' => $vivienda['direccion'],
                'numero' => $vivienda['numero'],
                'tipo' => $vivienda['tipo'],
                'estado' => $vivienda['estado'],
            ));
        } elseif ($view_type == 'get_one') {
            $this->load->view('includes/form', $data = array(
                'form_action' => 'readonly',
                'id_vivienda' => $vivienda['id_vivienda'],
                'direccion' => $vivienda['direccion'],
                'numero' => $vivienda['numero'],
                'tipo' => $vivienda['tipo'],
                'estado' => $vivienda['estado'],
            ));
        } elseif ($view_type == 'insert'){
            $this->load->view('includes/form', $data = array(
                'form_action' => 'vivienda_controller/c_create_vivienda',
            ));
        } elseif ($view_type == 'get_all') {
            $this->load->view('includes/list', $data = array(
                'viviendas' => $viviendas,
            ));
        }elseif ($view_type == 'get_cantidad') {
            echo '<h1>Cantidad de Viviendas</h1>';
            echo '<p>La cantidad de viviendas es: ' . $viviendas . '</p>';
        } elseif ($view_type == 'get_nuevas') {
            $this->load->view('includes/list', $data = array(
                'viviendas' => $viviendas,
            ));
        }

        ?>


    </main>


    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>


</html>