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

        <!-- BANDA SONORA -->
        <section class="container px-5 mt-4">
            <div class="tarjeta">
                <div class="cuerpo-tarjeta text-center">
                    <div class="hexa mb-3"><i class="fa-solid fa-music" aria-hidden="true"></i></div>
                    <h3>Banda sonora</h3>
                    <p class="texto-cuerpo mb-3">Tema principal de Enoc en el Laberinto del Tiempo.</p>
                    <audio controls loop preload="none" src="<?php echo base_url('img/Enoc- Banda sonora1.mp3'); ?>" style="width: 100%; max-width: 520px;">
                        Tu navegador no soporta el elemento de audio.
                    </audio>
                </div>
            </div>
        </section>

        <!-- STORYBOARD -->
        <section class="container px-5 mt-4">
            <div class="tarjeta">
                <div class="cuerpo-tarjeta text-center">
                    <div class="hexa mb-3"><i class="fa-solid fa-pencil-ruler" aria-hidden="true"></i></div>
                    <h3>Storyboard</h3>
                    <p class="texto-cuerpo mb-3">El storyboard completo del proyecto: portada, sinopsis y el desarrollo escena por escena (18 páginas).</p>
                    <a class="btn btn-principal" href="<?php echo base_url('docs/Storyboard.pdf'); ?>" target="_blank" rel="noopener"><i class="fa-solid fa-file-pdf" aria-hidden="true"></i> Ver storyboard (PDF)</a>
                </div>
            </div>
        </section>
    </main>
