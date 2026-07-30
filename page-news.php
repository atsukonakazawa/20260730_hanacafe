<?php get_header(); ?>

<main class="news-page">
    <div class="news-page-content">
        <h1 class="news-page-title">
            News
        </h1>
        <div class="news-list">
            <?php
            // 現在何ページ目か取得
            $paged = max(1, get_query_var('paged'));

            //ニュースを取得
            $news_query = new WP_Query([
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'category_name'  => 'news',
                'paged'          => $paged,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ]);
            ?>

            <?php if ($news_query->have_posts()) : ?>

                <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>

                    <article class="news-item">
                        <div class="first-group">
                            <p class="news-date">
                                <?php echo esc_html(get_the_date('Y.m.d')); ?>
                            </p>
                            <p class="news-item-title">
                                <?php the_title(); ?>
                            </p>
                        </div>
                        <div class="news-item-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>

                <!-- ページネーション -->
                <div class="news-pagination">
                    <?php
                    echo paginate_links([
                        'total'     => $news_query->max_num_pages,
                        'current'   => $paged,
                        'mid_size'  => 1,
                        'prev_text' => '<',
                        'next_text' => '>',
                    ]);
                    ?>
                </div>
            <?php else : ?>
                <p>現在、お知らせはありません。</p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>