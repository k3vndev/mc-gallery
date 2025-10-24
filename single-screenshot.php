<main class="max-w-5xl mx-auto p-4">
  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();
      get_template_part('content', 'screenshot');
    }
  }
  wp_reset_postdata();
  ?>
</main>