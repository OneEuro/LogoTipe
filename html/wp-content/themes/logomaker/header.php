<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LogoMaker
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open();
$theme_path = get_template_directory_uri();
$assets_path = $theme_path . '/assets'; ?>

<div class="header-wrapper">
    <header class="header">
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <img class="logo_img-icon"src="<?php echo $assets_path; ?>/img/logoIcon.png" alt="Logo">
                <img class="logo_img-text" src="<?php echo $assets_path; ?>/img/logoText.png" alt="CHICHA">
            </a>
        </div>
        <div class="cart-container">
            <a href="<?php echo site_url('cart'); ?>"><span class="cart-container__title ">КОРЗИНА</span>
                <img src="<?php echo $assets_path; ?>/img/cartIcon.png" alt="Cart" class="cart-icon">
                <div class="indicator"<?php if (empty($_SESSION['cart'])) : ?> style="display: none;" <?php endif; ?> id="indicator"></div>
            </a>
        </div>
    </header>

    <nav class="nav-bar">
        <?php
        $categories = get_categories();

        usort($categories, function($a, $b) {
            $order_a = get_field('custom_order', 'category_' . $a->term_id);
            $order_b = get_field('custom_order', 'category_' . $b->term_id);
            return $order_a - $order_b;
        });

        if (!empty($categories)) {
            foreach ($categories as $category) { ?>
                <button id="<?php echo esc_html($category->term_id); ?>"><?php echo esc_html($category->name); ?></button>
            <?php }
        } else {
            echo '<p>Рубрики не найдены.</p>';
        } ?>
    </nav>
</div>
