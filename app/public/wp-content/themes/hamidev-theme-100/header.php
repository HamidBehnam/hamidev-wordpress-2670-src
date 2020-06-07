<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>
<body>

<section class="header-container">
    <h6>This is going to be the header section!</h6>
    <div>
        <ul class="header-navigation">
            <li><a href="<?php echo site_url(); ?>">Home</a></li>
            <li><a href="<?php echo site_url('/hamidev-the-first-page'); ?>">First Page</a></li>
            <li><a href="<?php echo site_url('/about-us'); ?>">About Us</a></li>
            <li><a href="<?php echo site_url('/privacy-policy-2'); ?>">Privacy Policy</a></li>
        </ul>
    </div>
</section>