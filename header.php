<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>

  <?php wp_head(); ?>
</head>

<body class="<?= body_class(); ?> w-screen">
  <header id="app-header" class="
      w-page-content mx-auto mt-20 flex flex-col 
      items-center gap-3 text-center text-pretty px-8
  ">
    <h1 class="font-bold text-white text-5xl"><?php bloginfo('name'); ?></h1>
    <p class="text-white text-xl"><?php bloginfo('description'); ?></p>
  </header>