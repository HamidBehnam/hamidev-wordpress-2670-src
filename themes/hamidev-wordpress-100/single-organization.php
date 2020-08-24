<?php
get_header();
the_post();
?>

<div>this is going to show the single organization.</div>

<div>the size of this organization is: <?php the_field('organization_size'); ?></div>

<?php
get_footer();
?>
