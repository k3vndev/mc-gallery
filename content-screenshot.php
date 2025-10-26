<article class="
    bg-zinc-500/5 py-8 px-12 rounded-xl shadow-md border 
    border-white/5 flex flex-col gap-4 lg:even:translate-y-1/4 group
    hover:border-white/10
  ">
  <h2 class="text-white text-3xl font-bold mb-2"><?= get_the_title(); ?></h2>

  <?php if (has_post_thumbnail()):
    $alt_text = get_post_meta(
      get_post_thumbnail_id(),
      '_wp_attachment_image_alt',
      true
    );
    ?>

    <div class="relative">
      <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= esc_attr($alt_text); ?>" class="rounded mb-2">

      <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= esc_attr($alt_text); ?>"
        class="absolute -z-10 top-0 left-0 blur-2xl opacity-50 transition group-hover:opacity-75">
    </div>
  <?php endif; ?>

  <p class="text-gray-300"><?= get_the_excerpt(); ?></p>
</article>