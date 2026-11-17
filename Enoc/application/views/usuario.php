<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    <!-- CUERPO -->
    <main>
        <section class="seccion-hero">
            <h1 class="titulo-principal">Área de Usuario</h1>
            <p class="slogan">Accede a tu cuenta para guardar tu progreso, tus logros y la configuración de tu viaje.</p>
        </section>

        <section class="container px-5 mt-4">
            <div class="row">

                <!-- INICIO DE SESIÓN -->
                <div class="col-12 col-md-7 mb-4">
                    <div class="tarjeta">
                        <div class="cuerpo-tarjeta">
                            <h3>Iniciar sesión</h3>
                            <!-- NOTA: el acceso es visual; la validación con sesiones de CodeIgniter se agregará después. -->
                            <form>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="tu@email.com" required>
                                </div>

                                <div class="form-group">
                                    <label for="clave">Contraseña</label>
                                    <input type="password" class="form-control" id="clave" name="clave" placeholder="Tu contraseña" required>
                                </div>

                                <button type="submit" class="btn btn-principal mt-2">
                                    <i class="fa-solid fa-right-to-bracket" aria-hidden="true"></i>
                                    Iniciar sesión
                                </button>

                                <p class="mt-3 mb-0">¿Aún no tienes cuenta? <a href="#registro">Crea una aquí</a> y empieza tu viaje en el tiempo.<br>¿Olvidaste tu contraseña? <a href="#recuperar">Recupérala aquí</a>.</p>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- ZONA DE USUARIO -->
                <div class="col-12 col-md-5 mb-4">
                    <div class="tarjeta">
                        <div class="cuerpo-tarjeta">
                            <div class="hexa"><i class="fa-solid fa-user" aria-hidden="true"></i></div>
                            <h3 class="text-center">Zona de usuario</h3>
                            <ul class="lista-enlaces">
                                <li>
                                    <a href="#"><i class="fa-solid fa-user" aria-hidden="true"></i>Perfil</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa-solid fa-trophy" aria-hidden="true"></i>Logros y progreso</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa-solid fa-gear" aria-hidden="true"></i>Ajustes</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa-solid fa-right-from-bracket" aria-hidden="true"></i>Cerrar sesión</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- REGISTRO Y RECUPERACIÓN DE CUENTA -->
        <section class="container px-5 mt-4">
            <div class="row">

                <!-- REGISTRO -->
                <div class="col-12 col-md-7 mb-4" id="registro">
                    <div class="tarjeta">
                        <div class="cuerpo-tarjeta">
                            <h3>Crear una cuenta</h3>
                            <!-- NOTA: registro visual; la validación con form_validation se agregará después. -->
                            <form>
                                <div class="form-group">
                                    <label for="registro-nombre">Nombre de viajero</label>
                                    <input type="text" class="form-control" id="registro-nombre" name="registro-nombre" placeholder="Tu nombre" required>
                                </div>

                                <div class="form-group">
                                    <label for="registro-email">Email</label>
                                    <input type="email" class="form-control" id="registro-email" name="registro-email" placeholder="tu@email.com" required>
                                </div>

                                <div class="form-group">
                                    <label for="registro-clave">Contraseña</label>
                                    <input type="password" class="form-control" id="registro-clave" name="registro-clave" placeholder="Elige una contraseña" required>
                                </div>

                                <div class="form-group">
                                    <label for="registro-clave2">Repetir contraseña</label>
                                    <input type="password" class="form-control" id="registro-clave2" name="registro-clave2" placeholder="Repite la contraseña" required>
                                </div>

                                <button type="submit" class="btn btn-principal mt-2">
                                    <i class="fa-solid fa-user-plus" aria-hidden="true"></i>
                                    Crear cuenta
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- RECUPERACIÓN -->
                <div class="col-12 col-md-5 mb-4" id="recuperar">
                    <div class="tarjeta">
                        <div class="cuerpo-tarjeta">
                            <div class="hexa"><i class="fa-solid fa-key" aria-hidden="true"></i></div>
                            <h3 class="text-center">Recuperar cuenta</h3>
                            <p class="texto-cuerpo text-center">Escribe tu email y te enviaremos un enlace para restaurar tu contraseña.</p>
                            <form>
                                <div class="form-group">
                                    <label for="recuperar-email">Email</label>
                                    <input type="email" class="form-control" id="recuperar-email" name="recuperar-email" placeholder="tu@email.com" required>
                                </div>

                                <button type="submit" class="btn btn-principal mt-2">
                                    <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                                    Enviar enlace
                                </button>

                                <p class="mt-3 mb-0 text-center"><a href="#registro">Volver al registro</a></p>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
