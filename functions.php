<?php
function mc_enqueue_styles() {
  wp_enqueue_style(
    'mc-google-fonts',
    'https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Poppins:wght@400;700&display=swap',
    [] 
  );

  wp_enqueue_style(
    'mc-style',
    get_stylesheet_uri()
  );

   wp_enqueue_style(
    'mc-tailwind',
    get_template_directory_uri() . '/dist/output.css',
    [],
    filemtime( get_template_directory() . '/dist/output.css' )
  );
}

add_action('wp_enqueue_scripts', 'mc_enqueue_styles');
