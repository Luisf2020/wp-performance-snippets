# wp-performance-snippets

Coleccion de ajustes de rendimiento para WordPress (emojis, defer de scripts, comentarios).

> Proyecto de portafolio de Luis Felipe Zuniga Leon. Desarrollado con asistencia de IA
> (generacion de codigo, revision y documentacion); el codigo fue revisado y probado manualmente.
> No declara clientes, metricas ni resultados no verificables.

## Stack

- WordPress
- PHP
- Core Hooks

## Como ejecutar

```bash
# Copiar en wp-content/mu-plugins/
```

## Estructura

```
mu-plugins/lz-performance.php  # ajustes
```

## Que cambia

- Elimina la deteccion de emojis (menos peticiones).
- Anade `defer` a los scripts no administrados.
- Limpia la configuracion del formulario de comentarios.

> Medir siempre con Lighthouse / Query Monitor antes y despues; los ajustes no garantizan una mejora por si solos.

## Estado

Muestra tecnica de portafolio. Sin datos de produccion.
