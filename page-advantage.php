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
                            強み
                        </h1>
                        <div class="ad_text">
                            <div>
                                <h6>
                                    <?php
                                    $page_id = get_the_ID();
                                    $content = get_post($page_id);
                                    echo get_post_meta($content->ID, '強み', true)
                                    ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right_zone">
                    <div class="container_zone">
                        <?php
                        $attachment_id = get_field('強み写真', $post->ID);
                        echo wp_get_attachment_image($attachment_id, array(500, 500));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="horizontal_bond band_color_mouse">
        <div class="vertical_band">
            <div class="left_zone">
                <div class="container_zone">
                    <div class="ad_number">
                        01
                    </div>
                    <div class="ad_text">
                        <h2 class="container_zone_text_position">
                            木へのこだわり
                        </h2>
                        <h6>
                            <?php
                            $page_id = get_the_ID();
                            $content = get_post($page_id);
                            echo get_post_meta($content->ID, '木へのこだわり', true)
                            ?>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="right_zone">
                <div class="container_zone">
                    <?php
                    $attachment_id = get_field('木へのこだわり写真', $post->ID);
                    echo wp_get_attachment_image($attachment_id, array(500, 500));
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="horizontal_bond band_color_gray">
        <div class="vertical_band">
            <div class="left_zone">
                <div class="container_zone image_fixed">
                    <?php
                    $attachment_id = get_field('北欧住宅写真', $post->ID);
                    echo wp_get_attachment_image($attachment_id, array(500, 500));
                    ?>
                </div>
            </div>
            <div class="right_zone">
                <div class="container_zone">
                    <div class="ad_number">
                        02
                    </div>
                    <div class="ad_text">
                        <h2 class="container_zone_text_position">
                            北欧住宅
                        </h2>
                        <h6>
                            <?php
                            $page_id = get_the_ID();
                            $content = get_post($page_id);
                            echo get_post_meta($content->ID, '北欧住宅', true)
                            ?>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="horizontal_bond band_color_green">
        <div class="vertical_band">
            <div class="left_zone">
                <div class="container_zone">
                    <div class="ad_number">
                        03
                    </div>
                    <div class="ad_text">
                        <h2 class="container_zone_text_position">
                            手厚い対応
                        </h2>
                        <h6>
                            <?php
                            $page_id = get_the_ID();
                            $content = get_post($page_id);
                            echo get_post_meta($content->ID, '手厚い対応', true)
                            ?>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="right_zone">
                <div class="container_zone">
                    <?php
                    $attachment_id = get_field('手厚い対応写真', $post->ID);
                    echo wp_get_attachment_image($attachment_id, array(500, 500));
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <a name="scroll"></a>
</body>
<?php get_footer(); ?>