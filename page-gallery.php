<?php get_header(); ?>


<main class="gallery-page">
    <div class="gallery-page-content">
        <h1 class="gallery-page-title">
            Gallery
        </h1>
        <div class="gallery-grid">
            <?php
            $gallery_query = new WP_Query([
                'post_type'      => 'post',
                'posts_per_page' => -1,
                'category_name'  => 'gallery',
                'orderby'        => 'date',
                'order'          => 'DESC',
            ]);
            ?>

            <?php if ($gallery_query->have_posts()) : ?>

                <?php while ($gallery_query->have_posts()) : $gallery_query->the_post(); ?>
                    <article class="gallery-card">
                        <div class="gallery-card-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <button class="gallery-image-button" type="button">
                                    <?php the_post_thumbnail('large'); ?>
                                </button>
                            <?php endif; ?>

                        </div>
                        <h2 class="gallery-card-title">
                            <?php the_title(); ?>
                        </h2>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>

    <div class="gallery-modal">
        <button class="gallery-modal-close" aria-label="画像を閉じる">
            <span></span>
            <span></span>
        </button>

        <button class="gallery-modal-prev" type="button">
            ＜
        </button>

        <div class="gallery-modal-content">
            <img src="" alt="">
        </div>

        <button class="gallery-modal-next" type="button">
            ＞
        </button>
    </div>

</main>

<?php get_footer(); ?>