<?php get_header(); ?>

<body>
    <div class="front">
        <div class="front_overview">
            <div class="vertical_band">
                <div class="front_intro text_white font_size">
                    <?php
                    $get_page_id = get_page_by_path("front-page");
                    $content = get_post($get_page_id);
                    echo nl2br(get_post_meta($content->ID, '会社概要', true))
                    ?>
                </div>
                <div class="front_logo">
                    <img class="logo" src="<?= get_template_directory_uri(); ?>/image/logo_white.png">
                    <h3 class="text_white font_size">since 1956</h3>
                    <div>
                        <a href="#scroll" class="font_size">Scroll</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="horizontal_bond band_color_white">
            <div class="vertical_band">
                <div class="left_zone">
                    <div class="container_zone">
                        <img class="image_size" src="<?= get_template_directory_uri(); ?>/image/toppage_image1.png">
                    </div>
                </div>
                <div class="right_zone">
                    <div class="container_zone">
                        <h2 class="font_size">コンセプト</h2>
                        <h3 class="font_size">誰のための建築か</h3>
                        <h6 class="font_size">
                            <?php
                            $get_page_id = get_page_by_path("concept");
                            $content = get_post($get_page_id);
                            echo nl2br(get_post_meta($content->ID, '誰のための建築か', true))
                            ?>
                        </h6>
                        <p class="detail_position">
                            <a class="btn_change band_color_darkgreen" href="<?= home_url() ?>/concept">詳しく見る➡︎</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="horizontal_bond band_color_mouse">
        <div class="vertical_band reverse_container">
            <div class="left_zone reverse_item1">
                <div class="container_zone">
                    <img class="image_size" src="<?= get_template_directory_uri(); ?>/image/toppage_image2.png">
                </div>
            </div>
            <div class="right_zone reverse_item2">
                <div class="container_zone">
                    <h2 class="font_size">事業内容</h2>
                    <h3 class="font_size">棚板一枚から別荘まで取り扱います</h3>
                    <h6 class="font_size">
                        <?php
                        $get_page_id = get_page_by_path("works");
                        $content = get_post($get_page_id);
                        echo nl2br(get_post_meta($content->ID, '事業内容', true))
                        ?>
                    </h6>
                    <p class="detail_position">
                        <a class="btn_change" href="<?= home_url() ?>/works">詳しく見る➡︎</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="horizontal_bond band_color_white">
        <div class="vertical_band">
            <div class="left_zone">
                <div class="container_zone">
                    <img class="image_size" src="<?= get_template_directory_uri(); ?>/image/toppage_image3.png">
                </div>
            </div>
            <div class="right_zone">
                <div class="container_zone">
                    <h2 class="font_size_strength">強み</h2>
                    <h3 class="font_size_strength">木へのこだわり</h3>
                    <h6 class="font_size_strength">
                        <?php
                        $get_page_id = get_page_by_path("front-page");
                        $content = get_post($get_page_id);
                        echo nl2br(get_post_meta($content->ID, '木へのこだわり文章', true))
                        ?>
                    </h6>
                    <h3 class="font_size_strength">手厚い対応</h3>
                    <h6 class="font_size_strength">
                        <?php
                        $get_page_id = get_page_by_path("front-page");
                        $content = get_post($get_page_id);
                        echo nl2br(get_post_meta($content->ID, '手厚い対応文章', true))
                        ?>
                    </h6>
                    <p class="detail_position">
                        <a class="btn_change" href="<?= home_url() ?>/advantage">詳しく見る➡︎</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="horizontal_bond band_color_gray">
        <div class="vertical_band reverse_container">
            <div class="left_zone reverse_item1">
                <div class="container_zone">
                    <img class="image_size" src="<?= get_template_directory_uri(); ?>/image/toppage_image4.png">
                </div>
            </div>
            <div class="right_zone reverse_item2">
                <div class="container_zone">
                    <h2 class="font_size">エリア</h2>
                    <h3 class="font_size">充実した田舎暮らしを味わう</h3>
                    <h6 class="font_size">
                        <?php
                        $get_page_id = get_page_by_path("front-page");
                        $content = get_post($get_page_id);
                        echo nl2br(get_post_meta($content->ID, 'エリア文章', true))
                        ?>
                    </h6>
                    <p class="detail_position">
                        <a class="btn_change" href="<?= home_url() ?>/area">詳しく見る➡︎</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <a name="scroll"></a>
    <div class="horizontal_bond_footer">
        <div class="contact_form">
            <h1 class="font_size">お問い合わせ</h1>
            <div class="contact-form-inner">
                <?= do_shortcode('[contact-form-7 id="50" title="お問い合わせ"]'); ?>
            </div>
        </div>
    </div>
</body>
<?php get_footer(); ?>