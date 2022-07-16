<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php

if (isset($form_action) && $form_action == 'vivienda_controller/c_create_vivienda') {
    $id_vivienda = '';
    $direccion = '';
    $numero = '';
    $tipo = '';
    $estado = '';
}

?>

<div class="container">

    <div class="row">
        <form class="form-horizontal" action="<?php echo base_url() ?>index.php/<?php echo $form_action ?>" method="post">


            <fieldset <?php if ($form_action == 'readonly') echo 'disabled' ?> class="col-md-6">



                <input type="hidden" class="form-control" id="id_vivienda" name="id_vivienda" placeholder="ID" value="<?php echo $id_vivienda ?>">

                <div class="form-group">
                    <label for="direccion" class="col-sm-2 control-label">Direccion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" value="<?php echo $direccion ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="numero" class="col-sm-2 control-label">Numero</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="numero" name="numero" placeholder="Numero" value="<?php echo $numero ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="tipo" class="col-sm-2 control-label">Tipo</label>
                    <div class="col-sm-10">
                        <select class="form-select form-control" id="tipo" name="tipo">
                            <option value="1" <?php if ($tipo == 1) { ?> selected <?php } ?>>Casa</option>
                            <option value="2" <?php if ($tipo == 2) { ?> selected <?php } ?>>Departamento</option>
                            <option value="3" <?php if ($tipo == 3) { ?> selected <?php } ?>>Oficina</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="estado" class="col-sm-2 control-label">Estado</label>
                    <div class="col-sm-10">
                        <input type="radio" name="estado" value="1" id="1" <?php if ($estado == 1) { ?> checked <?php } ?>>
                        <label for="1">Nuevo</label>
                        <input type="radio" name="estado" value="2" id="2" <?php if ($estado == 2) { ?> checked <?php } ?>>
                        <label for="2">Usado</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary <?php if ($form_action=='readonly') echo 'invisible' ?>">Guardar</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>