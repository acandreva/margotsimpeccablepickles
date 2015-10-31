<?php

/*Template Name: Home Page*/

get_header(); ?>
	<article class="home_photo">
        <img src="http://margots.heatherlaude.com/wp-content/themes/margotstheme/images/covertext.png" class="covertext" />
    </article>
    <div class="stitched">
        <a href="#"><p>Shop Now</p></a>
    </div>
    <div class="container home_content">
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
            <div class="stitched">
                <a href="#"><p>Sell Our Pickles</p></a>
            </div>
        </section>
    </div>
<?php get_footer(); ?>

