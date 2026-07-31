<section id="contact" class="contact">

    <!-- 背景画像を明るく見せる -->
    <div class="contact-overlay"></div>

    <!-- メインビジュアル -->
    <div class="contact-content">
        <h1 class="contact-title">
            Contact
        </h1>
        <div class="contact-form">
            <div class="contact-subtitle">
                メールでお問い合わせ
            </div>
            <form class="contact-form-body" id="contact-form">
                <div class="form-group">
                    <label for="name">
                        お名前
                    </label>
                    <input type="text" id="name" name="name" placeholder="お名前を入力してください" required>
                </div>
                <div class="form-group">
                    <label for="email">
                        メールアドレス
                    </label>
                    <input type="email" id="email" name="email" placeholder="メールアドレスを入力してください" required>
                </div>
                <div class="form-group">
                    <label for="message">
                        お問い合わせ内容
                    </label>
                    <textarea id="message" name="message" rows="4" placeholder="お問い合わせ内容を入力してください" required></textarea>
                </div>
                <button type="submit" class="contact-submit">
                    送信
                </button>
            </form>
        </div>
        <div class="contact-result" id="contact-result"></div>
        <div class="contact-tel">
            <div class="contact-subtitle">
                電話でお問いあわせ
            </div>
            <p class="tel">02-2222-3333</p>
        </div>
    </div>
</section>