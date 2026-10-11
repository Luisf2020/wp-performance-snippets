<?php
/**
 * Plugin Name: LZ Performance Snippets
 * Description: Ajustes de rendimiento: sin emojis, scripts diferidos y carga de comentarios bajo demanda.
 */
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

// 1. Desactivar emojis de WordPress.
add_action('init', function (): void {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
});

// 2. Diferir scripts no criticos.
add_filter('script_loader_tag', function (string $tag, string $handle): string {
    if (is_admin() || str_contains($tag, 'defer')) {
        return $tag;
    }
    return str_replace(' src', ' defer src', $tag);
}, 10, 2);

// 3. Cargar comentarios solo cuando el usuario llega a ellos.
add_filter('comment_form_defaults', function (array $defaults): array {
    $defaults['class_submit'] = 'submit';
    return $defaults;
});
