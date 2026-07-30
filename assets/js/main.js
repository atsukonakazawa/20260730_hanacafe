// オープニング
const opening = document.querySelector(".opening");
const siteContent = document.querySelector(".site-content");
const video = document.getElementById("opening-video");

if (video) {
    // このタブですでにオープニングを再生したか確認
    const openingPlayed = sessionStorage.getItem("hanacafeOpeningPlayed");

    if (openingPlayed) {
        // 2回目以降はオープニングを表示しない
        opening.style.display = "none";
        siteContent.classList.add("show");

    } else {
        // 初回だけオープニング動画を再生
        video.addEventListener("loadeddata", () => {
            video.style.opacity = "1";
        });

        let started = false;

        video.addEventListener("timeupdate", () => {
            // 残り1.5秒になったら
            if (!started && video.duration - video.currentTime <= 1.5) {
                started = true;
                // オープニングフェードアウト開始
                opening.classList.add("fade-out");
                // 0.8秒後にサイト表示
                setTimeout(() => {
                    siteContent.classList.add("show");
                }, 800);
                // このタブではオープニング再生済みにする
                sessionStorage.setItem(
                    "hanacafeOpeningPlayed",
                    "true"
                );
            }
        });
    }
}


//サイドメニュー
const menuButton = document.querySelector(".menu-button");
const closeButton = document.querySelector(".close-button");
const sideMenu = document.querySelector(".side-menu");

menuButton.addEventListener("click", () => {
    sideMenu.classList.add("open");
});

closeButton.addEventListener("click", () => {
    sideMenu.classList.remove("open");
});

document.body.addEventListener("click", (event) => {
    //サイドメニュー内でもメニューボタンでもない所をクリックしたらsideMenuが閉じる
    if (
        !sideMenu.contains(event.target) &&
        !menuButton.contains(event.target)
    ) {
        sideMenu.classList.remove("open");
    }
});


// スマホ用 Menu サブメニュー開閉
const menuToggle = document.querySelector(".menu-toggle");
const submenu = document.querySelector(".submenu");

if (menuToggle && submenu) {
    menuToggle.addEventListener("click", (event) => {
        event.preventDefault();
        submenu.classList.toggle("is-open");
    });
}


//画像スライダー
const heroSlider = document.querySelector(".hero-slider");

let currentSlide = 0;

if (heroSlider) {
    setInterval(() => {
        currentSlide++;
        heroSlider.style.transform =
            `translateX(-${currentSlide * 25}%)`;
        // 複製したhero01まで到達したら
        // アニメーションが終わる1.2秒後に
        // アニメーションを一旦オフ
        // 1枚目の画像に瞬間移動
        // 50m秒後にアニメーションをオン
        if (currentSlide === 3) {
            setTimeout(() => {
                heroSlider.style.transition = "none";
                currentSlide = 0;
                heroSlider.style.transform = "translateX(0)";
                // 次のスライドでtransitionを戻す
                setTimeout(() => {
                    heroSlider.style.transition = "transform 1.2s ease";
                }, 50);
            }, 1200);
        }
    }, 7000);
}

//コンセプトセクション
const conceptContent = document.querySelector(".concept-content");

if (conceptContent) {
    //concept-content要素が画面に入ってきたか監視
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                //画面に入ったらis-visibleを追加
                conceptContent.classList.add("is-visible");
            }
        });
    }, {
        //concept-contentの20%が画面内にきたら「表示された」と判断
        threshold: 0.2
    });
    observer.observe(conceptContent);
}

//ニュースセクション
const newsContent = document.querySelector(".news-content");

if (newsContent) {
    //news-content要素が画面に入ってきたか監視
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                //画面に入ったらis-visibleを追加
                newsContent.classList.add("is-visible");
            }
        });
    }, {
        //news-contentの20%が画面内にきたら「表示された」と判断
        threshold: 0.2
    });
    observer.observe(newsContent);
}

//メニューセクション
const menuContent = document.querySelector(".menu-content");

if (menuContent) {
    //menu-content要素が画面に入ってきたか監視
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                //画面に入ったらis-visibleを追加
                menuContent.classList.add("is-visible");
            }
        });
    }, {
        //menu-contentの20%が画面内にきたら「表示された」と判断
        threshold: 0.2
    });
    observer.observe(menuContent);
}

//アクセスセクション
const accessContent = document.querySelector(".access-content");

if (accessContent) {
    //access-content要素が画面に入ってきたか監視
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                //画面に入ったらis-visibleを追加
                accessContent.classList.add("is-visible");
            }
        });
    }, {
        //menu-contentの20%が画面内にきたら「表示された」と判断
        threshold: 0.2
    });
    observer.observe(accessContent);
}

//ギャラリーセクション
const galleryContent = document.querySelector(".gallery-content");

if (galleryContent) {
    //gallery-content要素が画面に入ってきたか監視
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                //画面に入ったらis-visibleを追加
                galleryContent.classList.add("is-visible");
            }
        });
    }, {
        //gallery-contentの20%が画面内にきたら「表示された」と判断
        threshold: 0.2
    });
    observer.observe(galleryContent);
}


//コンタクトセクション
const contactContent = document.querySelector(".contact-content");

if (contactContent) {
    //contact-content要素が画面に入ってきたか監視
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                //画面に入ったらis-visibleを追加
                contactContent.classList.add("is-visible");
            }
        });
    }, {
        //contact-contentの20%が画面内にきたら「表示された」と判断
        threshold: 0.2
    });
    observer.observe(contactContent);
}

//お問い合わせフォーム
const contactForm = document.querySelector("#contact-form");
const contactTel = document.querySelector("#contact-tel");
const contactResult = document.querySelector("#contact-result");

if (contactForm) {

    contactForm.addEventListener("submit", async(event) => {

        // 通常のフォーム送信を一旦止める
        event.preventDefault();

        // フォームの入力内容を取得
        const formData = new FormData(contactForm);

        // WordPress AJAXに処理内容を伝える
        formData.append("action", "hanacafe_contact");

        console.log("送信先:", hanacafeData.ajaxUrl);
        console.log("action:", formData.get("action"));
        console.log("name:", formData.get("name"));
        console.log("email:", formData.get("email"));
        console.log("message:", formData.get("message"));

        // WordPress AJAX機能を使ってみる
        // form→main.js→WordPressAJAX→functions.php→PHPで受取
        try {
            const response = await fetch(hanacafeData.ajaxUrl,  {
                method: "POST",
                body: formData
            });

            console.log("HTTPステータス:", response.status);
            const data = await response.json();
            console.log("PHPからの返答:", data);

            if (data.success) {
                contactResult.style.display = "block";
                contactResult.innerHTML = `
                    <p>
                        お問い合わせありがとうございます。送信しました。
                    </p>
                    <p>
                        送信内容
                    </p>
                    <p>
                        お名前：${formData.get("name")}
                    </p>
                    <p>
                        メールアドレス：${formData.get("email")}
                    </p>
                    <p>
                        お問い合わせ内容：
                    </p>
                    <p>
                        ${formData.get("message")}
                    </p>
                `;
                contactForm.reset();
                contactForm.style.display = "none";
            } else {
                console.error("メール送信に失敗しました");
            }
        } catch (error) {
            console.error("エラー:", error);
        }
    });
}

//メニュー固定ページ
const menuItems = document.querySelectorAll(".menu-item");

if (menuItems.length) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("is-visible");
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.2
    });
    menuItems.forEach((item) => {
        observer.observe(item);
    });
}

// Gallery モーダル
const galleryButtons = document.querySelectorAll(".gallery-image-button");
const galleryModal = document.querySelector(".gallery-modal");
const galleryModalImage = document.querySelector(".gallery-modal-content img");
const galleryModalClose = document.querySelector(".gallery-modal-close");
const galleryPrev = document.querySelector(".gallery-modal-prev");
const galleryNext = document.querySelector(".gallery-modal-next");

if (galleryModal) {
    // 写真一覧を保存
    const galleryImages = [];

    galleryButtons.forEach((button) => {
        const image = button.querySelector("img");
        if (image) {
            galleryImages.push({
                src: image.src,
                alt: image.alt
            });
        }
    });

    // 現在表示している番号
    let currentGalleryIndex = 0;
    // 写真クリック
    galleryButtons.forEach((button, index) => {
        button.addEventListener("click", () => {
            currentGalleryIndex = index;
            showGalleryImage();
            galleryModal.classList.add("is-open");
        });
    });

    // 表示する画像
    function showGalleryImage() {
        galleryModalImage.src =
            galleryImages[currentGalleryIndex].src;
        galleryModalImage.alt =
            galleryImages[currentGalleryIndex].alt;
    }

    // 次の写真
    galleryNext.addEventListener("click", () => {
        currentGalleryIndex++;
        if (currentGalleryIndex >= galleryImages.length) {
            currentGalleryIndex = 0;
        }
        showGalleryImage();
    });

    // 前の写真
    galleryPrev.addEventListener("click", () => {
        currentGalleryIndex--;
        if (currentGalleryIndex < 0) {
            currentGalleryIndex = galleryImages.length - 1;
        }
        showGalleryImage();
    });

    // 閉じるボタン
    galleryModalClose.addEventListener("click", () => {
        galleryModal.classList.remove("is-open");
    });

    // 背景クリックで閉じる
    galleryModal.addEventListener("click", (event) => {
        if (event.target === galleryModal) {
            galleryModal.classList.remove("is-open");
        }
    });
}