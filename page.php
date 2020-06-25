<?php
get_header();
the_post(); ?>

<section class="page-content-container">

    <?php
    $parentID = wp_get_post_parent_id(get_the_ID());

    if ($parentID) { ?>

    <ul class="page-breadcrumb">
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


    <?php

    $internalPages = wp_list_pages([
        'title_li' => null,
        'child_of' => get_the_ID(),
        'echo' => 0,
    ]);

    if ($internalPages) {
        echo '<h3>2 Ways to show the internal pages:</h3>';
        echo '<h4>using the pre-generated elements:</h4>'; ?>

        <div class="internal-pages-container">
            <div class="internal-pages-header">***Internal Pages for <?php the_title() ?>***</div>
            <div class="internal-pages-items">
                <?php echo $internalPages; ?>
            </div>
        </div>

    <?php
    }

    $internalPagesRaw = get_pages([
        'child_of' => get_the_ID()
    ]);

    if (count($internalPagesRaw)) {
        echo '<h4>manually generating the elements:</h4>';
        echo '<div>***Internal Pages for' . get_the_title() . '***</div>';

        foreach ($internalPagesRaw as $index=>$page) {
            echo '<div>' . $page->post_title . ' - index: ' . $index. '</div>';
        }

        echo '<div>***Internal Pages for' . get_the_title() . '***</div>';
        foreach ($internalPagesRaw as $page) { ?>

            <div>
                <a href="<?php echo get_page_link($page->ID) ?>">
                    <?php echo $page->post_title ?>
                </a>
            </div>

        <?php
        }
    }
    ?>

    <h1><?php the_title(); ?></h1>
    <div><?php the_content(); ?></div>
</section>

<?php
get_footer();
?>

