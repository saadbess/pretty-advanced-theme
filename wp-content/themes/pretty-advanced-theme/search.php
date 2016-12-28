<?php get_header(); ?>

        <div class="container content">
            <div class="main block">

                <h1 class="page-header">
                    Search Results
                </h1>

                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <?php get_template_part('content', get_post_format()); ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php echo apautop('Sorry, no posts were found'); ?>
                <?php endif; ?>
            </div>

            <div class="side">
                <div class="block">
                    <h3>Sidebar Head</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam convallis nibh non lacinia fermentum. Morbi finibus, magna in laoreet congue, velit risus vulputate dui, sed scelerisque dui neque ut velit.</p>
                    <a class="button">More</a>
                </div>
            </div>
        </div>
<?php get_footer(); ?>
