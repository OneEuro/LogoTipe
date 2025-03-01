<?php
get_header();?>

    <section class="content">
        <?php
        $categories = get_categories();
        usort($categories, function($a, $b) {
            $order_a = get_field('custom_order', 'category_' . $a->term_id);
            $order_b = get_field('custom_order', 'category_' . $b->term_id);
            return $order_a - $order_b;
        });
        if (!empty($categories)) {
        foreach ($categories as $category) {
        $image_url = get_term_meta($category->term_id, 'category-image', true);
        ?>
        <div id="category-<?php echo esc_html($category->term_id); ?>" class="menu-section">
            <div class="menu-section__title rounded"><?php echo esc_html($category->name); ?> </div>
            <div class="menu-section__img">
                <img src="<?php echo $image_url; ?>" alt="">
            </div>
            <div class="menu-section__listbox menu-section__listbox_margin-top">
                <?php
                $query = new WP_Query(array(
                    'post_type'      => 'post',
                    'posts_per_page' => -1,
                    'cat'            => $category->term_id,
                ));
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        ?>
                        <div id="post-<?php the_ID(); ?>" class="listbox__card">
                            <div class="card__img"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt=""></div>
                            <div class="card-description">
                                <div class="card-description__inner">
                                    <div class="card-description__title"><?php the_title(); ?></div>
                                    <div class="card-description__text font-gray-s"><?php echo get_field('meal_description'); ?></div>
                                    <div class="card-description__weight"><?php echo get_field('weight');?> г</div>
                                </div>
                                <div class="card-description__order">
                                    <div class="card-description__price"><?php echo get_field('price');?><span class="price-symbol">&#8381;</span></div>
                                    <button data-id="<?php the_ID();?>" class="card-description__button add-to-cart rounded rounded_font-small">в корзину</button>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo '<p>Нет постов в этой рубрике.</p>';
                }
                wp_reset_postdata(); ?>
            </div>
            <?php }
            } else {
                echo '<p>Рубрики не найдены.</p>';
            } ?>

        </div>
    </section>
    </body>

<?php get_footer(); ?>