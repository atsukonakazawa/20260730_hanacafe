<?php get_header(); ?>

<!-- オープニング -->
<div class="opening">

    <video id="opening-video" autoplay muted playsinline>
        <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/opening.mp4" type="video/mp4">
    </video>

</div>

<!-- サイト本体 -->
<div class="site-content">
    <main>

        <?php get_template_part('template-parts/section', 'hero'); ?>

        <?php get_template_part('template-parts/section', 'concept'); ?>

        <?php get_template_part('template-parts/section', 'news'); ?>

        <?php get_template_part('template-parts/section', 'menu'); ?>

        <?php get_template_part('template-parts/section', 'access'); ?>

        <?php get_template_part('template-parts/section', 'gallery'); ?>

        <?php get_template_part('template-parts/section', 'contact'); ?>

    </main>
</div>

<?php get_footer(); ?>