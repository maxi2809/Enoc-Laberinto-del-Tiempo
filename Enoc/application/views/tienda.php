<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Productos de ejemplo. Cuando haya un panel de administración, esta lista
 * puede venir de la base de datos.
 */
$productos = array(
    array('Póster · El encuentro', '$1000.00', 'encuentro.jpg'),
    array('Póster · El olímpico', '$1000.00', 'olimpico.jpg'),
    array('Póster · El aviador', '$1200.00', 'piloto.jpg'),
    array('Póster · El vikingo', '$1500.00', 'vikingo.jpg'),
);

?>

    <!-- CUERPO -->
    <main>
        <section class="seccion-hero">
            <h1 class="titulo-principal">Tienda y Comunidad</h1>
            <p class="slogan">Lleva el Laberinto contigo y únete a la comunidad de viajeros del tiempo.</p>
        </section>

        <section class="container px-5 mt-4">
            <h2 class="titulo-seccion text-center">Tienda</h2>

            <!-- NOTA: el carrito es solo visual; la lógica de compras se agregará más adelante. -->
            <div class="row">
                <?php foreach ($productos as $producto) : ?>
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="tarjeta h-100 text-center">
                            <img class="imagen-tarjeta" src="<?php echo base_url('assets/img/' . $producto[2]); ?>" alt="<?php echo $producto[0]; ?>">
                            <div class="cuerpo-tarjeta">
                                <h3 class="producto-nombre"><?php echo $producto[0]; ?></h3>
                                <p class="precio"><?php echo $producto[1]; ?></p>
                                <button type="button" class="btn btn-principal btn-sm mt-1">
                                    <i class="fa-solid fa-cart-shopping" aria-hidden="true"></i>
                                    Añadir al carrito
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="container px-5 mt-4">
            <h2 class="titulo-seccion text-center">Comunidad</h2>
            <div class="row text-center">

                <div class="col-12 col-md-4 mb-4">
                    <div class="tarjeta h-100">
                        <div class="cuerpo-tarjeta">
                            <div class="hexa"><i class="fa-solid fa-comments" aria-hidden="true"></i></div>
                            <h3>Chat del Laberinto</h3>
                            <p class="texto-cuerpo">Habla en directo con otros viajeros mientras exploras las puertas del tiempo.</p>
                            <a class="btn btn-principal btn-sm mt-2" href="#">Entrar al chat</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 mb-4">
                    <div class="tarjeta h-100">
                        <div class="cuerpo-tarjeta">
                            <div class="hexa"><i class="fa-solid fa-users" aria-hidden="true"></i></div>
                            <h3>Foro de viajeros</h3>
                            <p class="texto-cuerpo">Comparte teorías de la historia, guías y estratégias o tus escenas favoritas.</p>
                            <a class="btn btn-principal btn-sm mt-2" href="#">Visitar el foro</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 mb-4">
                    <div class="tarjeta h-100">
                        <div class="cuerpo-tarjeta">
                            <div class="hexa"><i class="fa-solid fa-calendar" aria-hidden="true"></i></div>
                            <h3>Eventos</h3>
                            <p class="texto-cuerpo">Transmisiones, torneos y presentaciones del estudio con la comunidad.</p>
                            <a class="btn btn-principal btn-sm mt-2" href="#">Ver eventos</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
