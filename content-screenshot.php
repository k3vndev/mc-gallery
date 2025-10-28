<article class="
    bg-zinc-500/5 py-8 sm:px-12 px-4 rounded-xl shadow-md border 
    border-white/5 flex flex-col gap-4 xl:even:translate-y-1/4 group
    hover:border-white/10 not-md:w-full
  ">
  <h2 class="text-white sm:text-3xl text-xl text-pretty font-bold mb-2"><?= get_the_title(); ?></h2>

  <?php if (has_post_thumbnail()):
    $alt_text = get_post_meta(
      get_post_thumbnail_id(),
      '_wp_attachment_image_alt',
      true
    );
    ?>
    <div class="relative">
      <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= esc_attr($alt_text); ?>"
        class="rounded mb-2 not-md:w-full">

      <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= esc_attr($alt_text); ?>"
        class="absolute -z-10 top-0 left-0 blur-2xl opacity-50 scale-110 transition group-hover:opacity-75">
    </div>
  <?php endif; ?>

  <p class="text-gray-300"><?= get_the_excerpt(); ?></p>
</article>