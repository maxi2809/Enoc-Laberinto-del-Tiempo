<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($titulo) ? $titulo : 'Vela Studio'; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/styles.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/all.min.css'); ?>">
</head>

<body>

    <!-- CABECERA -->
    <header class="cabecera">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="image-container logo-hover logo-principal">
                <div class="logo-mecha">
                    <img class="img-fluid d-block" src="<?php echo base_url('assets/img/logo_s_f.svg'); ?>" alt="Vela Studio">
                    <div class="faro" aria-hidden="true"><span class="destello"></span></div>
                </div>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Mostrar u ocultar la navegación">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuPrincipal">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link<?php echo $vista_actual === 'index' ? ' activo' : ''; ?>" href="<?php echo base_url(); ?>">Vela Studio <span class="sr-only">(página actual)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php echo $vista_actual === 'juego' ? ' activo' : ''; ?>" href="<?php echo base_url('el-juego'); ?>">El juego</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle<?php echo $vista_actual === 'personajes' ? ' activo' : ''; ?>" href="<?php echo base_url('personajes'); ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Personajes</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo base_url('personajes'); ?>#enoc">Enoc</a>
                            <a class="dropdown-item" href="<?php echo base_url('personajes'); ?>#mistico">Místico</a>
                            <a class="dropdown-item" href="<?php echo base_url('personajes'); ?>#aviador">Aviador</a>
                            <a class="dropdown-item" href="<?php echo base_url('personajes'); ?>#griego">Griego</a>
                            <a class="dropdown-item" href="<?php echo base_url('personajes'); ?>#vikingo">Vikingo</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php echo $vista_actual === 'videos' ? ' activo' : ''; ?>" href="<?php echo base_url('videos'); ?>">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php echo $vista_actual === 'tienda' ? ' activo' : ''; ?>" href="<?php echo base_url('tienda'); ?>">Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php echo $vista_actual === 'usuario' ? ' activo' : ''; ?>" href="<?php echo base_url('usuario'); ?>">Área de Usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php echo $vista_actual === 'contacto' ? ' activo' : ''; ?>" href="<?php echo base_url('contacto'); ?>">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
