<?php
get_header();
the_post();
?>

<div class="single-content-container">
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

