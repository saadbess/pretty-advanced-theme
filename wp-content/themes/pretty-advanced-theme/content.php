<article class="post">
    <h2><?php the_title(); ?></h2>
    <p class="meta">
        Posted at
        <?php the_time('F j, Y g: i a'); ?>
        by
        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
            <?php the_author(); ?>
        </a> |
        Posted In
        <?php
            $categories = get_the_category();
            $separator = ", ";
            $output = '';

            if($categories) {
                foreach($categories as $category) {
                    $output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>'. $seperator;
                }
            }

            echo trim($output, $seperator);
        ?>
    </p>

    <?php if(has_post_thumbnail()) : ?>
        <div class="post-thumbnail">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>
    <?php the_excerpt(); ?> <!-- previously the_content(); -->

    <a class="button" href="<?php the_permalink(); ?>">Read More</a>
</article>
