<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    <!-- CUERPO -->
    <main>
        <section class="seccion-hero">
            <h1 class="titulo-principal">Contacto</h1>
            <p class="slogan">¿Quieres saber más del proyecto, colaborar o contarnos tu historia? Escríbenos.</p>
        </section>

        <section class="container px-5 mt-4">
            <div class="row">

                <!-- FORMULARIO -->
                <div class="col-12 col-md-7 mb-4">
                    <?php if (!empty($estado_contacto)): ?>
                        <div class="alert alert-<?php echo html_escape($tipo_estado_contacto); ?>" role="alert">
                            <?php echo html_escape($estado_contacto); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($errores_formulario)): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $errores_formulario; ?>
                        </div>
                    <?php endif; ?>

                    <form id="formulario" method="post" action="<?php echo base_url('contacto'); ?>">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" value="<?php echo html_escape(set_value('nombre')); ?>" maxlength="100" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="tu@email.com" value="<?php echo html_escape(set_value('email')); ?>" maxlength="254" required>
                        </div>

                        <div class="form-group">
                            <label for="asunto">Asunto</label>
                            <select class="form-control" id="asunto" name="asunto">
                                <option value="general" <?php echo set_select('asunto', 'general', TRUE); ?>>Información general</option>
                                <option value="colaboraciones" <?php echo set_select('asunto', 'colaboraciones'); ?>>Colaboraciones</option>
                                <option value="prensa" <?php echo set_select('asunto', 'prensa'); ?>>Prensa</option>
                                <option value="otro" <?php echo set_select('asunto', 'otro'); ?>>Otro</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="5" placeholder="Cuéntanos tu idea..." maxlength="5000" required><?php echo html_escape(set_value('mensaje')); ?></textarea>
                        </div>

                        <button type="submit" class="btn btn-principal mt-2">
                            <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                            Enviar mensaje
                        </button>
                    </form>
                </div>

                <!-- DATOS DE CONTACTO -->
                <div class="col-12 col-md-5 mb-4">
                    <div class="tarjeta">
                        <div class="cuerpo-tarjeta">
                            <h3>Vela Studio</h3>
                            <p class="dato-contacto">
                                <i class="fa-solid fa-location-dot" aria-hidden="true"></i>San Luis, Argentina
                            </p>
                            <p class="dato-contacto">
                                <i class="fa-solid fa-envelope" aria-hidden="true"></i>contactos@velastudio.com
                            </p>
                            <p class="dato-contacto">
                                <i class="fa-solid fa-phone" aria-hidden="true"></i>+54 266 5102058
                            </p>
                            <hr style="border-color: #3a4364;">
                            <p class="dato-contacto">
                                <i class="fa-brands fa-instagram" aria-hidden="true"></i>@velastudiosl
                            </p>
                            <p class="dato-contacto">
                                <i class="fa-brands fa-youtube" aria-hidden="true"></i>Vela Studio SL
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- COMUNIDAD -->
        <section class="container px-5 mt-4">
            <h2 class="titulo-seccion text-center">Comunidad</h2>
            <div class="row text-center">

                <div class="col-12 col-md-4 mb-4">
                    <div class="hexa"><i class="fa-brands fa-discord" aria-hidden="true"></i></div>
                    <h3 class="titulo-seccion" style="margin-top: 10px; font-size: 1.5rem;">Discord</h3>
                    <p class="texto-cuerpo">Chat en vivo con otros viajeros del tiempo, eventos y juegos online.</p>
                    <button class="btn btn-principal" disabled aria-disabled="true"><i class="fa-solid fa-hourglass-half" aria-hidden="true"></i> Próximamente</button>
                </div>

                <div class="col-12 col-md-4 mb-4">
                    <div class="hexa"><i class="fa-solid fa-comments" aria-hidden="true"></i></div>
                    <h3 class="titulo-seccion" style="margin-top: 10px; font-size: 1.5rem;">Foro del laberinto</h3>
                    <p class="texto-cuerpo">Teorías, guías de las eras y acertijos que la comunidad resuelve junta.</p>
                    <a class="btn btn-principal" href="https://github.com/maxi2809/Enoc-Laberinto-del-Tiempo/discussions" target="_blank" rel="noopener"><i class="fa-brands fa-github" aria-hidden="true"></i> Visitar el foro</a>
                </div>

                <div class="col-12 col-md-4 mb-4">
                    <div class="hexa"><i class="fa-solid fa-newspaper" aria-hidden="true"></i></div>
                    <h3 class="titulo-seccion" style="margin-top: 10px; font-size: 1.5rem;">Boletín</h3>
                    <p class="texto-cuerpo">Tráilers, fechas y bocetos del juego antes que nadie, directo a tu correo.</p>
                    <a class="btn btn-principal" href="#formulario"><i class="fa-solid fa-envelope-open-text" aria-hidden="true"></i> Suscribirme</a>
                </div>

            </div>
        </section>
    </main>
