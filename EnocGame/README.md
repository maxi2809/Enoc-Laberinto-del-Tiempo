# Enoc - Laberinto del Tiempo (Godot 4)

Prototipo del juego en Godot 4. Abre `project.godot` con Godot 4.x.

## Escenas
- `scenes/main_menu.tscn` — menú de inicio (puerta + llave girando).
- `scenes/laberinto.tscn` — hub del laberinto (placeholder).

## Paleta (respetada del sitio web)
- Fondo: `#161c34`
- Turquesa: `#08c6e7`
- Dorado: `#e6b55a`
- Ciruela oscura: `#332b36`

## Tipografía
`assets/font/SourceSans3-Variable.ttf` — arrastrala al campo `theme_override_fonts/font` de los Label/Button en el editor para aplicarla.

## Recursos
- `assets/img/TipografiaEnoc-oro.png` y `vela studio2.png` (logo) copiados del proyecto web.
- La llave y la puerta son placeholders (ColorRect). Reemplazalos por sprites reales: arrastrá un PNG al nodo y cambiá el tipo de `ColorRect` a `TextureRect` (o `Sprite2D`).

## Flujo
Menú → (Jugar) llave gira → puerta se abre → carga `laberinto.tscn` → (Volver) regresa al menú.

## Exportación web
Project → Export → Web (HTML5). Subí el resultado a GitHub Pages o itch.io y enlazalo desde el botón "¡Jugar ahora!" del sitio.
