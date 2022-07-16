<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <a class="navbar-brand" href="<?php echo base_url() ?>">Vivienda</a>
        <!-- collapsable button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav ms-3">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url() ?>index.php/vivienda_controller/c_create_view_vivienda">Crear Vivienda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url() ?>index.php/vivienda_controller/c_get_viviendas">Mostrar Viviendas</a>
                </li>

                <!-- drop down estadisticas -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
                        Estadisticas
                    </a>
                    <ul class="dropdown-menu">
                        <!-- cantidad viviendas -->
                        <li class="dropdown-item">
                            <a class="nav-link" href="<?php echo base_url() ?>index.php/vivienda_controller/c_get_viviendas_cantidad">Cantidad Viviendas</a>
                        </li>
                        <!-- viviendas nuevas -->
                        <li class="dropdown-item">
                            <a class="nav-link" href="<?php echo base_url() ?>index.php/vivienda_controller/c_get_viviendas_nuevas">Viviendas Nuevas</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
