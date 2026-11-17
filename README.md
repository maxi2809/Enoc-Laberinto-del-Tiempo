# Vela Studio — Enoc: Laberinto del Tiempo

Sitio web del videojuego **Enoc en el Laberinto del Tiempo**, primer gran proyecto de *Vela Studio*, desarrollado como trabajo final de HTML/CSS con **CodeIgniter 3**.

Enoc descubre un laberinto antiguo cuyas puertas conducen a distintas eras. Guiado por el Guardián del Tiempo y una llave ancestral, encarna a héroes legendarios para recuperar los fragmentos de la **Roca de la Sabiduría** — valentía, honor, sacrificio, memoria, amor, compasión y amistad — y revertir el destino apocalíptico que amenaza a la humanidad.

## Estructura del sitio

| Página | Contenido |
|---|---|
| **Principal** | Portada cinematográfica, tarjeta del videojuego, secciones destacadas del estudio y CTAs (¡Jugar ahora!, Ver tráilers) |
| **El juego** | Descripción completa, historia, características, mecánicas y requisitos del sistema |
| **Personajes** | Enoc, Místico, Aviador, Griego y Vikingo, con retratos y descripciones |
| **Videos** | Tráilers del juego con portadas y banda sonora oficial |
| **Tienda** | Sección de compra del juego |
| **Área de Usuario** | Inicio de sesión, registro y recuperación de cuenta |
| **Contacto** | Formulario de contacto, redes sociales y comunidad (Discord, foro, boletín) |

## Tecnologías

- **HTML5 + CSS3** con **Bootstrap 4** (recursos locales) y **Font Awesome** (local)
- **CodeIgniter 3** (PHP) para el sitio dinámico, con rutas amigables
- Efectos CSS propios: faro en el logo, intercambio de escenas, chispas de vela animadas
- Espejos estáticos en `page/` para la entrega sin servidor

## Cómo ejecutarlo

### Con XAMPP (sitio dinámico)

1. Copia la carpeta `Enoc/` a `C:\xampp\htdocs\`
2. Inicia Apache (puerto 8080 en este proyecto)
3. Abre `http://localhost:8080/Enoc/`
4. Para habilitar el formulario de contacto, configura `ENOC_SMTP_HOST`, `ENOC_SMTP_USER` y `ENOC_SMTP_PASSWORD` en el entorno de PHP/Apache y reinicia Apache. Opcionalmente, configura `ENOC_SMTP_PORT` (por defecto `587`) y `ENOC_SMTP_CRYPTO` (por defecto `tls`). Los mensajes se envían a `maxicorreaavalos@gmail.com`; no guardes las credenciales SMTP en el repositorio. Para Gmail, usa `smtp.gmail.com`, puerto `587`, cifrado `tls` y una contraseña de aplicación.

### Versión estática

Abre `page/index.html` directamente en el navegador.

## Autor

**Maxi Correa** — Vela Studio · 2026

> © 2026 · Vela Studio — Enoc: Laberinto del Tiempo
