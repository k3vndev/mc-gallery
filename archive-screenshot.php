<main class="w-full p-4 grid lg:grid-cols-2 grid-cols-1 gap-6 lg:mt-16 lg:mb-64">
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