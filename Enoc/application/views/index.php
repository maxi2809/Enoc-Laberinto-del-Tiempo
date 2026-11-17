<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    <!-- CUERPO -->
    <main>
        <section class="seccion-hero">
            <h1 class="titulo-principal">Vela Studio</h1>
            <p class="slogan">Somos un estudio de animación y juegos que busca contar historias que inspiren y emocionen a las personas.</p>

            <h2 class="titulo-seccion">Enoc en el Laberinto del Tiempo</h2>
            <p class="slogan">Es un viaje a través del tiempo para salvar a la humanidad de una catástrofe.</p>
        </section>

        <section class="container-fluid px-5">
            <div class="row align-items-center">

                <div class="col-12 col-md-6">
                    <div class="text-center">
                        <img class="personaje-home" src="<?php echo base_url('img/Enoc_s_f2.svg'); ?>" alt="Enoc, el viajero del tiempo">
                    </div>
                    <div class="presentacion-enoc">
                        <h3>Sé Enoc en el Laberinto del Tiempo</h3>
                        <p>Descubre qué se encuentra detrás de cada puerta.</p>
                        <p>Sé el héroe de tu propia historia.</p>
                        <p>Explora mundos desconocidos y enfrenta desafíos épicos.</p>
                        <a class="btn btn-principal mt-2" href="<?php echo base_url('personajes'); ?>">Conoce los personajes</a>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="feature-image-container">
                        <img src="<?php echo base_url('img/encuentro.jpg'); ?>" alt="Escena: El encuentro">
                        <img src="<?php echo base_url('img/olimpico.jpg'); ?>" class="feature-image-hover" alt="Escena: El olímpico">
                    </div>
                    <p class="text-center pie-foto">Pasa el ratón por la imagen para cambiar de escena</p>
                </div>

            </div>
        </section>

        <!-- EL ESTUDIO (antes en Inicio) -->
        <section class="container px-5 mt-4">
            <h2 class="titulo-seccion text-center">El estudio</h2>
            <div class="row text-center">

                <div class="col-12 col-md-4 mb-4">
                    <i class="fa-solid fa-film fa-3x mb-3" style="color: #08c6e7;"></i>
                    <h3 class="titulo-seccion" style="margin-top: 10px; font-size: 1.5rem;">Animación</h3>
                    <p class="texto-cuerpo">Damos vida a personajes y mundos con animación 2D y 3D, desde el boceto hasta la escena final.</p>
                </div>

                <div class="col-12 col-md-4 mb-4">
                    <i class="fa-solid fa-gamepad fa-3x mb-3" style="color: #08c6e7;"></i>
                    <h3 class="titulo-seccion" style="margin-top: 10px; font-size: 1.5rem;">Videojuegos</h3>
                    <p class="texto-cuerpo">Diseñamos juegos donde el jugador es el héroe de su propia historia, como Enoc en el Laberinto del Tiempo.</p>
                </div>

                <div class="col-12 col-md-4 mb-4">
                    <i class="fa-solid fa-pen-nib fa-3x mb-3" style="color: #08c6e7;"></i>
                    <h3 class="titulo-seccion" style="margin-top: 10px; font-size: 1.5rem;">Ilustración</h3>
                    <p class="texto-cuerpo">Creamos concept art, personajes y escenarios que definen la identidad visual de cada proyecto.</p>
                </div>

            </div>
        </section>

        <!-- NUESTRO PRIMER GRAN VIAJE (antes en Inicio) -->
        <section class="container px-5 mt-4">
            <div class="row align-items-center">

                <div class="col-12 col-md-6 mb-4">
                    <h2 class="titulo-seccion" style="margin-top: 0;">Nuestro primer gran viaje</h2>
                    <p class="texto-cuerpo">
                        <strong>Enoc en el Laberinto del Tiempo</strong> es el proyecto insignia del estudio: una aventura
                        donde cada puerta conduce a una época distinta y cada decisión cambia el destino de la humanidad.
                    </p>
                    <p class="texto-cuerpo">
                        Detrás de este proyecto hay bocetos, prototipos y un equipo que sueña con emocionar a quien juegue
                        o vea nuestras historias.
                    </p>
                    <a class="btn btn-principal" href="<?php echo base_url('personajes'); ?>">Descubre los personajes</a>
                </div>

                <div class="col-12 col-md-6 mb-4">
                    <img class="img-fluid" src="<?php echo base_url('img/encuentro.jpg'); ?>" alt="Escena del encuentro entre personajes" style="border: 3px solid #08c6e7;">
                </div>

            </div>
        </section>
    </main>
