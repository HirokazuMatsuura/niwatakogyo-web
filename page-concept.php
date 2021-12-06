<?php get_header(); ?>

<body>
    <div class="front">
        <div class="concept_overview">
            <div class="vertical_band">
                <h1>コンセプト</h1>
            </div>
        </div>
        <div class="horizontal_bond band_color_white">
            <div class="vertical_band">
                <div class="left_zone">
                    <div class="container_zone font_size">
                        <div class="ad_number">
                        </div>
                        <h1 class="container_zone_text_position">
                            コンセプト
                        </h1>
                        <div class="ad_text">
                            <h2>誰のための建築か</h2>
                            <div>
                                <?php
                                $page_id = get_the_ID();
                                $content = get_post($page_id);
                                echo get_post_meta($content->ID, '誰のための建築か', true)
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right_zone">
                    <div class="container_zone">
                        <?php
                        $attachment_id = get_field('コンセプト写真', $post->ID); // 添付ID
                        $image_attributes = wp_get_attachment_image_src($attachment_id, 'medium'); // returns an array
                        if ($image_attributes) {
                            ?>
                            <img src="<?php echo $image_attributes[0]; ?>">
                        <?php }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="horizontal_bond band_color_green">
        <div class="vertical_band">
            <div class="left_zone">
                <div class="container_zone font_size">
                    <div class="ad_number">
                    </div>
                    <div class="ad_text">
                        <h2 class="container_zone_text_position">
                            関係は一度きりではなく、長きに渡ります
                        </h2>
                        <?php
                        $page_id = get_the_ID();
                        $content = get_post($page_id);
                        echo get_post_meta($content->ID, '関係は一度きりではなく、長きに渡ります', true)
                        ?>
                    </div>
                </div>
            </div>
            <div class="right_zone">
                <div class="container_zone">
                </div>
            </div>
        </div>
    </div>
    <div class="horizontal_bond band_color_green">
        <div class="vertical_band">
            <div class="left_zone">
                <div class="container_zone image_fixed">
                    <?php
                    $attachment_id = get_field('庭田謙写真', $post->ID); // 添付ID
                    $image_attributes = wp_get_attachment_image_src($attachment_id, 'medium'); // returns an array
                    if ($image_attributes) {
                        ?>
                        <img src="<?php echo $image_attributes[0]; ?>">
                    <?php }
                    ?>
                </div>
            </div>
            <div class="right_zone">
                <div class="container_zone font_size">
                    <div class="ad_number">
                    </div>
                    <div class="ad_text">
                        <h2 class="container_zone_text_position">
                            庭田謙
                        </h2>
                        <h3>
                            <?php
                            $page_id = get_the_ID();
                            $content = get_post($page_id);
                            echo get_post_meta($content->ID, '庭田謙', true)
                            ?>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php get_footer(); ?>