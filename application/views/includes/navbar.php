<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo base_url() ?>">Vivienda</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>vivienda/c_get_viviendas">Viviendas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>vivienda/c_create_vivienda">Crear Vivienda</a>
            </li>
        </ul>
    </div>
</nav>