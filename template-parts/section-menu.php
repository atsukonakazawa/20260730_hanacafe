<section id="menu" class="menu">

    <!-- 最初に見せる動画 -->
    <video class="menu-video" autoplay muted loop playsinline>
        <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/menu2.mp4" type="video/mp4">
    </video>

    <!-- 背景画像を明るく見せる -->
    <div class="menu-overlay"></div>

    <!-- メインビジュアル -->
    <div class="menu-content">
        <h1 class="menu-title">
            Menu
        </h1>
        <ul class="menu-ul">
            <li class="menu-li">
                <a href="<?php echo esc_url(home_url('/coffee/')); ?>">
                    Coffee
                </a>
            </li>
            <li class="menu-li">
                <a href="<?php echo esc_url(home_url('/tea/')); ?>">
                    Tea
                </a>
            </li>
            <li class="menu-li">
                <a href="<?php echo esc_url(home_url('/bakery/')); ?>">
                    Bakery
                </a>
            </li>
            <li class="menu-li">
                <a href="<?php echo esc_url(home_url('/chocolate/')); ?>">
                    Chocolate
                </a>
            </li>
        </ul>
    </div>
</section>