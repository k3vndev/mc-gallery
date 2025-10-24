<article class="bg-zinc-900 p-4 rounded-md shadow-md">
  <h2 class="text-white text-xl font-bold mb-2"><?= get_the_title(); ?></h2>

  <?php if (has_post_thumbnail()):
    $alt_text = get_post_meta(
      get_post_thumbnail_id(),
      '_wp_attachment_image_alt',
      true
    );
    ?>

    <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= esc_attr($alt_text); ?>" class="rounded mb-2">
  <?php endif; ?>

  <p class="text-gray-300"><?= get_the_excerpt(); ?></p>
</article>