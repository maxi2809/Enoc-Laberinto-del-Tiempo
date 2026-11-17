<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    <!-- CUERPO -->
    <main>
        <section class="seccion-hero">
            <h1 class="titulo-principal">Videos</h1>
            <p class="slogan">Tráilers, animaciones y escenas del Laberinto del Tiempo.</p>
        </section>

        <!-- TRÁILERS DEL JUEGO -->
        <section class="container px-5 mt-4">
            <h2 class="titulo-seccion text-center">Tráilers del juego</h2>
            <div class="row">

                <div class="col-12 col-md-4 mb-4">
                    <a href="<?php echo base_url('img/TrailerEnoc1.mp4'); ?>" target="_blank" rel="noopener" class="tarjeta position-relative d-block">
                        <img class="imagen-tarjeta" src="<?php echo base_url('img/Portada del juego.png'); ?>" alt="Tráiler del juego: portada oficial">
                        <i class="fa-solid fa-play icono-play" aria-hidden="true"></i>
                        <div class="cuerpo-tarjeta text-center">
                            <h3 class="mb-2">Tráiler del juego</h3>
                            <span class="duracion">0:25</span>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-4 mb-4">
                    <a href="<?php echo base_url('img/TrailerEnoc2.mp4'); ?>" target="_blank" rel="noopener" class="tarjeta position-relative d-block">
                        <img class="imagen-tarjeta" src="<?php echo base_url('img/Portada alternativa.png'); ?>" alt="Tráiler alternativo del juego">
                        <i class="fa-solid fa-play icono-play" aria-hidden="true"></i>
                        <div class="cuerpo-tarjeta text-center">
                            <h3 class="mb-2">Tráiler alternativo</h3>
                            <span class="duracion">0:10</span>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-4 mb-4">
                    <a href="<?php echo base_url('img/TrailerEnoc3.mp4'); ?>" target="_blank" rel="noopener" class="tarjeta position-relative d-block">
                        <img class="imagen-tarjeta" src="<?php echo base_url('img/Enoc y las eras del tiempo.png'); ?>" alt="Tráiler: Enoc y las eras del tiempo">
                        <i class="fa-solid fa-play icono-play" aria-hidden="true"></i>
                        <div class="cuerpo-tarjeta text-center">
                            <h3 class="mb-2">Enoc y las eras del tiempo</h3>
                            <span class="duracion">0:10</span>
                        </div>
                    </a>
                </div>

            </div>
        </section>
    </main>
