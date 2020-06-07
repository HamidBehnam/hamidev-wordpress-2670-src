<?php
get_header();
the_post(); ?>

<section class="page-content-container">

    <?php
    $parentID = wp_get_post_parent_id(get_the_ID());

    if ($parentID) { ?>

    <ul class="page-internal-navigation">
        <li><?php the_title() ?></li>

    <?php
    }

    while ($parentID) { ?>

        <li><a href="<?php echo get_permalink($parentID) ?>"><?php echo get_the_title($parentID) ?></a></li>

    <?php
        $parentID = wp_get_post_parent_id($parentID);
    }
    ?>
    </ul>

    <div class="loader-button-container">
        <button id="page-module-loader">Lazy Loading the page module, check the console!</button>
    </div>
    <h1><?php the_title(); ?></h1>
    <div><?php the_content(); ?></div>
</section>

<?php
get_footer();
?>

