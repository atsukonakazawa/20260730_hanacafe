<?php get_header(); ?>

<!-- 固定ページごとのclassをつける -->
<main class="page-content page-<?php echo esc_attr($post->post_name); ?>">

    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
    ?>

            <h1 class="page-title"><?php the_title(); ?></h1>

            <div class="page-body">
                <?php the_content(); ?>
            </div>

    <?php
        endwhile;
    endif;
    ?>

</main>

<?php get_footer(); ?>