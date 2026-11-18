<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    <!-- CUERPO -->
    <main>
        <section class="seccion-hero">
            <h1 class="titulo-principal">Personajes</h1>
            <p class="slogan">Los héroes y guardianes del Laberinto del Tiempo. Haz clic en el menú para saltar a tu favorito.</p>
        </section>

        <section class="container px-5 mt-4">
            <div class="row">

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div id="enoc" class="tarjeta">
                        <img class="imagen-tarjeta" src="<?php echo base_url('img/personaje-vista-frente.jpg'); ?>" alt="Enoc">
                        <div class="cuerpo-tarjeta">
                            <h3>Enoc</h3>
                            <p>El protagonista es un explorador curioso y valiente que viaja a través de las puertas del tiempo para salvar a la humanidad.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div id="mistico" class="tarjeta">
                        <img class="imagen-tarjeta" src="<?php echo base_url('img/mistico.png'); ?>" alt="Místico">
                        <div class="cuerpo-tarjeta">
                            <h3>Místico</h3>
                            <p>El guardián del laberinto es el encargado de asignar los objetivos y ayudar a abrirpuertas. Solo revela el camino a quien demuestre sabiduría.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div id="aviador" class="tarjeta">
                        <img class="imagen-tarjeta" src="<?php echo base_url('img/avidor-vista de frente.jpg'); ?>" alt="Aviador">
                        <div class="cuerpo-tarjeta">
                            <h3>Aviador</h3>
                            <p>Intrépido piloto de los cielos. Domina los cielos, derriba enemigos y recupera valores.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div id="griego" class="tarjeta">
                        <img class="imagen-tarjeta" src="<?php echo base_url('img/atleta-vista-frente.jpg'); ?>" alt="Griego">
                        <div class="cuerpo-tarjeta">
                            <h3>Griego</h3>
                            <p>Campeón olímpico de la antigua Grecia. Su fuerza y estrategia son claves para superar las pruebas físicas.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div id="vikingo" class="tarjeta">
                        <img class="imagen-tarjeta" src="<?php echo base_url('img/vikingo (2).jpg'); ?>" alt="Vikingo">
                        <div class="cuerpo-tarjeta">
                            <h3>Vikingo</h3>
                            <p>Guerrero del norte. Navega entre tormentas y leyendas, conquista territorios y protege a su gente.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
