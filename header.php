<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<section class="header-container">
    <h6>This is going to be the header section!</h6>
    <div>
<!--        TODO: Dynamic Wordpress menu -->
        <?php wp_nav_menu([
                'theme_location' => 'headerMenuLocation'
        ]) ?>

<!--        TODO: Static custom menu-->
        <ul class="header-navigation">
            <li><a href="<?php echo site_url(); ?>">Home</a></li>
            <li><a href="<?php echo site_url('/first-page'); ?>">First Page</a></li>
            <li><a href="<?php echo site_url('/about-us'); ?>">About Us</a></li>
            <li><a href="<?php echo site_url('/privacy-policy-2'); ?>">Privacy Policy</a></li>
        </ul>
    </div>
</section>