<main class="max-w-6xl mx-auto p-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part('content', 'screenshot');
        }
    } else {
        echo '<p class="text-white">No screenshots found 😩</p>';
    }
    wp_reset_postdata();
    ?>
</main>