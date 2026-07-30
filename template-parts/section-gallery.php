<section id="gallery" class="gallery">

    <!-- 背景画像を明るく見せる -->
    <div class="gallery-overlay"></div>

    <!-- メインビジュアル -->
    <div class="gallery-content">
        <div class="gallery-text">
            <h1 class="gallery-title">
                Gallery
            </h1>
            <!-- ギャラリーを4件取得 -->
            <?php
            $gallery_query = new WP_Query([
                'post_type'      => 'post',
                'posts_per_page' => 4,
                'category_name'  => 'gallery',
                'orderby'        => 'date',
                'order'          => 'DESC',
            ]);
            ?>

            <?php if ($gallery_query->have_posts()) : ?>
                <div class="gallery-articles">

                    <?php while ($gallery_query->have_posts()) : $gallery_query->the_post(); ?>

                        <article class="gallery-item">

                            <div class="gallery-image">
                                <?php if (has_post_thumbnail()) : ?>
                                    <button class="gallery-image-button" type="button">
                                        <?php the_post_thumbnail('large'); ?>
                                    </button>
                                <?php endif; ?>
                            </div>
                            <p class="gallery-subtitle">
                                <?php the_title(); ?>
                            </p>

                        </article>
                    <?php endwhile; ?>
                </div>

                <!-- もっと見る -->
                <div class="gallery-more">
                    <a href="<?php echo esc_url(home_url('/gallery/')); ?>">
                        もっと見る
                    </a>
                </div>

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
</section>