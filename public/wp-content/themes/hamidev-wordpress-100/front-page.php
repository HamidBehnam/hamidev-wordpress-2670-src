<?php
get_header();
the_post();
?>

<div>This is going to be the Home/Landing page!</div>

<p><?php the_title(); ?></p>
<div><?php the_content(); ?></div>

<div>The List or Organizations:</div>

<?php
$organizations = new WP_Query([
    'posts_per_page' => 2,
    'post_type' => 'organization'
]);

while ($organizations->have_posts()) {
    $organizations->the_post(); ?>

    <div class="organization-container">
        <div><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></div>
        <div><?php the_content() ?></div>
    </div>

    <?php
}

wp_reset_postdata();
?>

<?php
get_footer();
