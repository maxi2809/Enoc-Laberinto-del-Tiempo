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
                    <!-- El envío es visual; cuando el proyecto avance se puede procesar
                         con CodeIgniter (form_validation, CSRF, etc.). -->
                    <form>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="tu@email.com" required>
                        </div>

                        <div class="form-group">
                            <label for="asunto">Asunto</label>
                            <select class="form-control" id="asunto" name="asunto">
                                <option>Información general</option>
                                <option>Colaboraciones</option>
                                <option>Prensa</option>
                                <option>Otro</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="5" placeholder="Cuéntanos tu idea..." required></textarea>
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
                                <i class="fa-solid fa-location-dot" aria-hidden="true"></i>Ciudad, País
                            </p>
                            <p class="dato-contacto">
                                <i class="fa-solid fa-envelope" aria-hidden="true"></i>hola@velastudio.com
                            </p>
                            <p class="dato-contacto">
                                <i class="fa-solid fa-phone" aria-hidden="true"></i>+34 600 000 000
                            </p>
                            <hr style="border-color: #3a4364;">
                            <p class="dato-contacto">
                                <i class="fa-brands fa-instagram" aria-hidden="true"></i>@velastudio
                            </p>
                            <p class="dato-contacto">
                                <i class="fa-brands fa-youtube" aria-hidden="true"></i>Vela Studio
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
