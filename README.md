# wp-performance-snippets

![stack: WordPress](https://img.shields.io/badge/stack--WordPress-0d9488?style=flat-square) ![stack: PHP](https://img.shields.io/badge/stack--PHP-0d9488?style=flat-square) ![stack: Core Hooks](https://img.shields.io/badge/stack--Core%20Hooks-0d9488?style=flat-square)
![IA: asistido](https://img.shields.io/badge/IA--asistido-6366f1?style=flat-square)

- Elimina la deteccion de emojis (menos peticiones).
- Anade `defer` a los scripts no administrados.
- Limpia la configuracion del formulario de comentarios.

> **Transparencia sobre IA:** este proyecto se desarrollo con asistencia de inteligencia artificial (generacion de codigo, revision y documentacion). El codigo fue leido, ejecutado y probado manualmente antes de publicarse. No declara clientes, metricas ni resultados que no puedan verificarse.

## Problema que resuelve

Reducir peticiones y bloqueo de render en un WordPress sin instalar un plugin de cache completo.

## Solucion implementada

Coleccion de ajustes: desactiva la deteccion de emojis, anade defer a los scripts no administrados y limpia el formulario de comentarios.

### Funcionalidades principales

- Eliminacion de la deteccion de emojis
- defer en scripts no criticos
- Ajustes del formulario de comentarios
- Instalacion como mu-plugin

## Stack

- WordPress
- PHP
- Core Hooks

## Estructura

```
mu-plugins/lz-performance.php  # ajustes
```

## Puesta en marcha

```bash
# Copiar en wp-content/mu-plugins/
```

## Complejidad del proyecto

**Nivel: Principiante** — Ajustes puntuales mediante filtros; sin arquitectura propia.

El nivel describe la complejidad tecnica del proyecto, no el grado de dominio de quien lo escribio.

## Despliegue

Fragmentos para WordPress; requieren una instalacion con PHP.  
El codigo fuente si esta disponible en este repositorio.

## Autor

**Luis Felipe Zuniga Leon** — Desarrollador de software asistido por IA

- GitHub: <https://github.com/Luisf2020>

---

_Proyecto de portafolio. El desarrollo se apoyo en herramientas de IA bajo revision tecnica humana._
