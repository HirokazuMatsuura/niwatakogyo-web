<?php get_header(); ?>

<body>
    <div class="front">
        <div class="about_overview">
            <div class="about_tab">
                <h2>About</h2>
                <div class="about_tab_list">
                    <ul>
                        <li>
                            <a class="nav-link" href="<?= home_url() ?>/works">事業内容</a>
                        </li>
                        <li>|</li>
                        <li>
                            <a class="nav-link" href="<?= home_url() ?>/area">エリア</a>
                        </li>
                        <li>|</li>
                        <li>
                            <a class="nav-link" href="<?= home_url() ?>/advantage">強み</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="horizontal_bond band_color_white">
            <div class="vertical_band column_container">
                <div class="left_zone">
                    <div class="container_zone">
                        <div class="ad_number">
                        </div>
                        <h1 class="container_zone_text_position">
                            事業内容
                        </h1>
                        <div class="ad_text">
                            <div>
                                <h6>
                                    <?php
                                    $page_id = get_the_ID();
                                    $content = get_post($page_id);
                                    echo get_post_meta($content->ID, '事業内容', true)
                                    ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right_zone">
                    <div class="container_zone">
                        <?php
                        $attachment_id = get_field('事業内容写真', $post->ID);
                        echo wp_get_attachment_image($attachment_id, array(500, 500));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="horizontal_bond band_color_mouse large_band">
        <div class="vertical_band icon_position">
            <ul class="icon_list">
                <li>
                    <div>
                        <?php
                        $attachment_id = get_field('戸建て住宅写真', $post->ID);
                        echo wp_get_attachment_image($attachment_id, array(200, 200));
                        ?>
                        <h3>戸建て住宅</h3>
                        <h6>
                            <?php
                            $page_id = get_the_ID();
                            $content = get_post($page_id);
                            echo get_post_meta($content->ID, '戸建て住宅', true)
                            ?>
                        </h6>
                    </div>
                </li>
                <li>
                    <div>
                        <?php
                        $attachment_id = get_field('別荘写真', $post->ID);
                        echo wp_get_attachment_image($attachment_id, array(200, 200));
                        ?>
                        <h3>別荘</h3>
                        <h6>
                            <?php
                            $page_id = get_the_ID();
                            $content = get_post($page_id);
                            echo get_post_meta($content->ID, '別荘', true)
                            ?>
                        </h6>
                    </div>
                </li>
                <li>
                    <div>
                        <?php
                        $attachment_id = get_field('リフォーム写真', $post->ID);
                        echo wp_get_attachment_image($attachment_id, array(200, 200));
                        ?>
                        <h3>リフォーム</h3>
                        <h6>
                            <?php
                            $page_id = get_the_ID();
                            $content = get_post($page_id);
                            echo get_post_meta($content->ID, 'リフォーム', true)
                            ?>
                        </h6>
                    </div>
                </li>
                <li>
                    <div>
                        <?php
                        $attachment_id = get_field('エクステリア写真', $post->ID);
                        echo wp_get_attachment_image($attachment_id, array(200, 200));
                        ?>
                        <h3>エクステリア</h3>
                        <h6>
                            <?php
                            $page_id = get_the_ID();
                            $content = get_post($page_id);
                            echo get_post_meta($content->ID, 'エクステリア', true)
                            ?>
                        </h6>
                    </div>
                </li>
                <li>
                    <div>
                        <?php
                        $attachment_id = get_field('輸入住宅写真', $post->ID);
                        echo wp_get_attachment_image($attachment_id, array(200, 200));
                        ?>
                        <h3>輸入住宅</h3>
                        <h6>
                            <?php
                            $page_id = get_the_ID();
                            $content = get_post($page_id);
                            echo get_post_meta($content->ID, '輸入住宅', true)
                            ?>
                        </h6>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="horizontal_bond band_color_green large_band2">
        <div class="vertical_band">
            <h2>お引き渡しまでの流れ</h2>
            <h3>
                <?php
                $page_id = get_the_ID();
                $content = get_post($page_id);
                echo get_post_meta($content->ID, 'お引き渡しまでの流れ', true)
                ?>
            </h3>
            <ul class="icon_list">
                <li>
                    <div>
                        <?php
                        $attachment_id = get_field('01 打ち合わせ', $post->ID);
                        echo wp_get_attachment_image($attachment_id, array(200, 200));
                        ?>
                    </div>
                </li>
                <li>
                    <div>
                        <?php
                        $attachment_id = get_field('02 敷地調査', $post->ID);
                        echo wp_get_attachment_image($attachment_id, array(200, 200));
                        ?>
                    </div>
                </li>
                <li>
                    <div>
                        <?php
                        $attachment_id = get_field('03 設計', $post->ID);
                        echo wp_get_attachment_image($attachment_id, array(200, 200));
                        ?>
                    </div>
                </li>
                <li>
                    <div>
                        <?php
                        $attachment_id = get_field('04 工事着工', $post->ID);
                        echo wp_get_attachment_image($attachment_id, array(200, 200));
                        ?>
                    </div>
                </li>
                <li>
                    <div>
                        <?php
                        $attachment_id = get_field('05 完工', $post->ID);
                        echo wp_get_attachment_image($attachment_id, array(200, 200));
                        ?>
                    </div>
                </li>
                <li>
                    <div>
                        <?php
                        $attachment_id = get_field('06 お引き渡し', $post->ID);
                        echo wp_get_attachment_image($attachment_id, array(200, 200));
                        ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</body>
<?php get_footer(); ?>