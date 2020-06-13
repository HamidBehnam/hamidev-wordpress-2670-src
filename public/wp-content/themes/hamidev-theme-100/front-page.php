<?php
get_header();
the_post();
?>

<div>This is going to be the Home/Landing page!</div>

<p><?php the_title(); ?></p>
<div><?php the_content(); ?></div>

<?php
get_footer();
