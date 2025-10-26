<?php get_header(); ?>

<?php
$query = new WP_Query(['post_type' => 'screenshot']);
?>

<div id="page" class="w-page-content mx-auto">
  <?php get_template_part('archive', 'screenshot') ?>
</div>

<?php get_footer(); ?>