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
            <div class="vertical_band">
                <div class="left_zone">
                    <div class="container_zone">
                        <div class="ad_number">
                        </div>
                        <h1 class="container_zone_text_position">
                            エリア
                        </h1>
                        <div class="ad_text">
                            <?php
                            $page_id = get_the_ID();
                            $content = get_post($page_id);
                            echo get_post_meta($content->ID, 'エリア', true)
                            ?>
                        </div>
                    </div>
                </div>
                <div class="right_zone">
                    <div class="container_zone">
                        <?php
                        $attachment_id = get_field('エリア写真', $post->ID);
                        echo wp_get_attachment_image($attachment_id, array(400, 400));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="horizontal_bond band_color_mouse">
        <div class="vertical_band">
            <div class="left_zone">
                <div class="container_zone image_fixed">
                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div>
                                    <?php
                                    $attachment_id = get_field('美しい四季の変化春写真', $post->ID);
                                    echo wp_get_attachment_image($attachment_id, array(500, 500));
                                    ?>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <?php
                                $attachment_id = get_field('美しい四季の変化夏写真', $post->ID);
                                echo wp_get_attachment_image($attachment_id, array(500, 500));
                                ?>
                            </div>
                            <div class="carousel-item">
                                <?php
                                $attachment_id = get_field('美しい四季の変化秋写真', $post->ID);
                                echo wp_get_attachment_image($attachment_id, array(500, 500));
                                ?>
                            </div>
                            <div class="carousel-item">
                                <?php
                                $attachment_id = get_field('美しい四季の変化冬写真', $post->ID);
                                echo wp_get_attachment_image($attachment_id, array(500, 500));
                                ?>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="right_zone">
                <div class="container_zone">
                    <div class="ad_number">
                    </div>
                    <div class="ad_text">
                        <h2 class="container_zone_text_position">
                            美しい四季の変化
                        </h2>
                        <h6>
                            <?php
                            $page_id = get_the_ID();
                            $content = get_post($page_id);
                            echo get_post_meta($content->ID, '美しい四季の変化', true)
                            ?>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="horizontal_bond band_color_gray">
        <div class="vertical_band">
            <div class="left_zone">
                <div class="container_zone">
                    <div class="ad_number">
                    </div>
                    <div class="ad_text">
                        <h2 class="container_zone_text_position">
                            アクティビティ
                        </h2>
                        <h6>
                            <?php
                            $page_id = get_the_ID();
                            $content = get_post($page_id);
                            echo get_post_meta($content->ID, 'アクティビティ', true)
                            ?>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="right_zone">
                <div class="container_zone">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <?php
                                $attachment_id = get_field('アクティビティ1写真', $post->ID);
                                echo wp_get_attachment_image($attachment_id, array(500, 500));
                                ?>
                            </div>
                            <div class="carousel-item">
                                <?php
                                $attachment_id = get_field('アクティビティ2写真', $post->ID);
                                echo wp_get_attachment_image($attachment_id, array(500, 500));
                                ?>
                            </div>
                            <div class="carousel-item">
                                <?php
                                $attachment_id = get_field('アクティビティ3写真', $post->ID);
                                echo wp_get_attachment_image($attachment_id, array(500, 500));
                                ?>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="horizontal_bond band_color_gray">
        <div class="vertical_band">
            <div class="left_zone band_color_white">
                <div class="container_zone image_fixed">
                    <?php
                    $attachment_id = get_field('サーフィン写真', $post->ID);
                    echo wp_get_attachment_image($attachment_id, array(400, 400));
                    ?>
                </div>
            </div>
            <div class="right_zone band_color_white">
                <div class="container_zone">
                    <div class="ad_number">
                        01
                    </div>
                    <div class="ad_text">
                        <h2 class="container_zone_text_position">
                            サーフィン
                        </h2>
                        <h6>
                            <?php
                            $page_id = get_the_ID();
                            $content = get_post($page_id);
                            echo get_post_meta($content->ID, 'サーフィン', true)
                            ?>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="horizontal_bond band_color_gray">
        <div class="vertical_band">
            <div class="left_zone band_color_white">
                <div class="container_zone">
                    <div class="ad_number">
                        02
                    </div>
                    <div class="ad_text">
                        <h2 class="container_zone_text_position">
                            ゴルフ
                        </h2>
                        <h6>
                            <?php
                            $page_id = get_the_ID();
                            $content = get_post($page_id);
                            echo get_post_meta($content->ID, 'ゴルフ', true)
                            ?>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="right_zone band_color_white">
                <div class="container_zone">
                    <?php
                    $attachment_id = get_field('ゴルフ写真', $post->ID);
                    echo wp_get_attachment_image($attachment_id, array(400, 400));
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="horizontal_bond band_color_gray">
        <div class="vertical_band">
            <div class="left_zone band_color_white">
                <div class="container_zone image_fixed">
                    <?php
                    $attachment_id = get_field('スキー写真', $post->ID);
                    echo wp_get_attachment_image($attachment_id, array(400, 400));
                    ?>
                </div>
            </div>
            <div class="right_zone band_color_white">
                <div class="container_zone">
                    <div class="ad_number">
                        03
                    </div>
                    <div class="ad_text">
                        <h2 class="container_zone_text_position">
                            スキー
                        </h2>
                        <h6>
                            <?php
                            $page_id = get_the_ID();
                            $content = get_post($page_id);
                            echo get_post_meta($content->ID, 'スキー', true)
                            ?>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php get_footer(); ?>