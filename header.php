<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>

  <?php wp_head(); ?>
</head>

<?php
  $query = new WP_Query([ 'post_type' => 'screenshot' ]);
?>


<body <?php body_class(); ?>>
  <header id="app-header">
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
    <?php get_template_part('archive', 'screenshot') ?>
  </header>

