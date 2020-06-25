<?php
get_header();

while (have_posts()) {
    the_post(); ?>

    <div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
    <small><?php the_content(); ?></small>
    <hr/>
<?php
}

get_footer();