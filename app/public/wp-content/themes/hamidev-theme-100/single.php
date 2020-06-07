<?php
get_header();
the_post();

function load_internal_resources() {
    wp_enqueue_style("hamidev-single-styles", get_theme_file_uri("/resources/dist/single.css"));
}

add_action("wp_enqueue_scripts", "load_internal_resources");
?>

<div class="single-content-container">
    <div class="loader-button-container">
        <button id="single-module-loader">Lazy Loading the single module, check the console!</button>
    </div>
    <small>Here's more information about the post:</small>

    <div>
        <?php the_title(); ?>
    </div>

    <div>
        <?php the_content(); ?>
    </div>
</div>

<div class="general-info-container">
    <div><a href="<?php the_permalink(); ?>"><?php bloginfo('name'); ?></a></div>
    <div><?php bloginfo('description'); ?></div>
</div>

<?php
get_footer();
?>

