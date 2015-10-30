<?php
</article>
/*Template Name: About Page*/

get_header(); ?>

    <div class="container">
        <section class="row">
            <div class="twelve columns">
            <!-- BEGIN LOOP -->
                <?php if (have_posts()) : 
                    /* OUR DATA CONTEXT IS DEFINED  */
                    while (have_posts()) : the_post(); ?> 
                        <?php the_content();
                    endwhile;
                endif; ?>
            <!-- END LOOP -->
            </div>
        </section>
    </div>
<?php get_footer(); ?>

