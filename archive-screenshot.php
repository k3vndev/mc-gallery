<main class="w-full p-4 grid xl:grid-cols-2 grid-cols-1 gap-6 lg:mt-16 mt-8 lg:mb-64 content-center">
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