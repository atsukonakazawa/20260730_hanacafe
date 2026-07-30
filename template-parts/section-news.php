<section id="news" class="news">

    <!-- 背景画像を明るく見せる -->
    <div class="news-overlay"></div>

    <!-- メインビジュアル -->
    <div class="news-content">
        <div class="news-text">
            <h1 class="news-title">
                news
            </h1>
            <!-- 投稿からニュースを4件取得 -->
            <?php
            $news_query = new WP_Query([
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'category_name'  => 'news',
                'orderby'        => 'date',
                'order'          => 'DESC',
            ]);
            ?>

            <?php if ($news_query->have_posts()) : ?>
                <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>

                    <article class="news-item">

                        <p class="news-date">
                            <?php echo esc_html(get_the_date('Y.m.d')); ?>
                        </p>

                        <p class="news-subtitle">
                            <?php the_title(); ?>
                        </p>

                        <div class="news-content-text">
                            <?php the_content(); ?>
                        </div>

                    </article>

                <?php endwhile; ?>

                <!-- もっと見る -->
                <div class="news-more">
                    <a href="<?php echo esc_url(home_url('/news/')); ?>">
                        もっと見る
                    </a>
                </div>

            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

        </div>
    </div>
</section>