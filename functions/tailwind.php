<?php

function enqueue_tailwindcss() {
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/tailwind/dist/style.css', array(), null);
}
add_action('wp_enqueue_scripts', 'enqueue_tailwindcss');