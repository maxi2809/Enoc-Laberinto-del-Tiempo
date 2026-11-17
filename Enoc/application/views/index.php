<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    <!-- CUERPO -->
    <main>
        <!-- PORTADA -->
        <section class="portada-hero">
            <div class="portada-fondo" aria-hidden="true"></div>
            <div class="portada-particulas" aria-hidden="true"><span></span><span></span><span></span><span></span><span></span><span></span></div>
            <div class="portada-contenido">
                <h1 class="titulo-principal"><img class="logo-wordmark" src="<?php echo base_url('img/vela studio2.png'); ?>" alt="Vela Studio"></h1>
                <p class="portada-intro">Somos un estudio de animación y juegos que busca contar historias que inspiren, emocionen y eduquen a las personas.</p>
                <h2 class="titulo-portada-juego">
                    <img class="lettering-enoc" src="<?php echo base_url('img/TipografiaEnoc-oro.png'); ?>" alt="Enoc">
                    <img class="lettering-laberinto" src="<?php echo base_url('img/Tarjetas de Enoc en el laberinto del Tiempo.png'); ?>" alt="en el Laberinto del Tiempo">
                </h2>
                <p class="portada-eslogan">Un viaje a través del tiempo para salvar a la humanidad de una catástrofe, donde cada puerta guarda un destino diferente.</p>
                <p><span class="duracion">Aventura y Plataforma en 2D</span></p>
                <div class="portada-cta">
                    <a class="btn btn-principal btn-lg mr-2 mb-2" href="<?php echo base_url('tienda'); ?>"><i class="fa-solid fa-gamepad" aria-hidden="true"></i> ¡Jugar ahora!</a>
                    <a class="btn btn-outline-light btn-lg mr-2 mb-2" href="<?php echo base_url('videos'); ?>"><i class="fa-solid fa-clapperboard" aria-hidden="true"></i> Ver tráilers</a>
                    <a class="btn btn-outline-light btn-lg mb-2" href="<?php echo base_url('personajes'); ?>"><i class="fa-solid fa-users" aria-hidden="true"></i> Personajes</a>
                </div>
            </div>
        </section>

        <section class="container-fluid px-5">
            <div class="row align-items-center">

                <div class="col-12 col-md-6">
                    <div class="text-center">
                        <img class="personaje-home" src="<?php echo base_url('img/Enoc_s_f2.svg'); ?>" alt="Enoc, el viajero escogido para salvar a la humanidad" style="max-width: auto; height: 500px;">
                    </div>
                    <div class="presentacion-enoc">
                        <h3>Sumergete en la vida de Enoc en el Laberinto del Tiempo</h3>
                        <p>Descubre qué se encuentra detrás de cada puerta.</p>
                        <p>Sé el héroe de tu propia historia y toma las decisiones que definirán el destino del mundo.</p>
                        <p>Explora mundos desconocidos y enfrenta desafíos épicos.</p>
                        <a class="btn btn-principal mt-2" href="<?php echo base_url('personajes'); ?>">Conoce los personajes</a>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div id="galeriaInicio" class="carousel slide feature-image-container" data-ride="carousel" data-interval="3000" data-pause="hover" role="region" aria-label="Galería de escenas de Enoc">
                        <ol class="carousel-indicators">
                            <li data-target="#galeriaInicio" data-slide-to="0" class="active" aria-label="Escena 1"></li>
                            <li data-target="#galeriaInicio" data-slide-to="1" aria-label="Escena 2"></li>
                            <li data-target="#galeriaInicio" data-slide-to="2" aria-label="Escena 3"></li>
                            <li data-target="#galeriaInicio" data-slide-to="3" aria-label="Escena 4"></li>
                            <li data-target="#galeriaInicio" data-slide-to="4" aria-label=" Escena 5"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <img class="carousel-image-contain" src="<?php echo base_url('img/TipografiaEnoc.png'); ?>" alt="Tipografía de Enoc">
                            </div>
                            <div class="carousel-item">
                                <img class="carousel-image-contain" src="<?php echo base_url('img/Tarjetas de Enoc en el laberinto del Tiempo.png'); ?>" alt="Tarjetas de Enoc en el laberinto del Tiempo">
                            </div>
                            <div class="carousel-item active">
                                <img src="<?php echo base_url('img/encuentro.jpg'); ?>" alt="Enoc conoce al Guardián del Tiempo en el laberinto">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo base_url('img/olimpico.jpg'); ?>" alt="Desafío de ritmo olímpico en la antigua Grecia">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo base_url('img/piloto.jpg'); ?>" alt="Desafío aéreo en la época de la Segunda Guerra Mundial">
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#galeriaInicio" role="button" data-slide="prev" aria-label="Imagen anterior">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#galeriaInicio" role="button" data-slide="next" aria-label="Imagen siguiente">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <!-- TARJETA DEL VIDEOJUEGO -->
        <section class="container px-5 mt-4">
            <div class="tarjeta">
                <div class="row no-gutters align-items-center">

                    <div class="col-12 col-md-4">
                        <img class="img-fluid" src="<?php echo base_url('img/Portada del juego.png'); ?>" alt="Portada de Enoc en el Laberinto del Tiempo">
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="cuerpo-tarjeta">
                            <h2 class="titulo-seccion" style="margin-top: 0;">Enoc en el Laberinto del Tiempo</h2>
                            <p><span class="duracion">Aventura y Plataforma en 2D</span></p>
                            <p class="texto-cuerpo">
                                Enoc descubre un laberinto, en donde sus puertas conducen a distintas eras. Encarna a héroes
                                legendarios, supera sus desafíos y reúne los fragmentos de la Roca de la Sabiduría antes de que el mundo caiga.
                            </p>
                            <a class="btn btn-principal mr-2" href="<?php echo base_url('el-juego'); ?>"><i class="fa-solid fa-circle-info" aria-hidden="true"></i> Ver más</a>
                            <a class="btn btn-outline-light" href="<?php echo base_url('tienda'); ?>"><i class="fa-solid fa-gamepad" aria-hidden="true"></i> ¡Jugar ahora!</a>
                        </div>
                    </div>

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
