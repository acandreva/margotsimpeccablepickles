<?php

/*Template Name: Home Page*/

get_header(); ?>
    <article class="home_photo">
        <img src="http://margots.heatherlaude.com/wp-content/themes/margotstheme/images/covertext.png" class="covertext" />
        <div class="outer-shop-now">
            <div class="inner-shop-now">
                <h3>Shop Now</h3>
            </div>
        </div>
    </article>
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
            <div class="outer-sell-now">
                <div class="inner-sell-now">
                    <h3>Sell Our Pickles</h3>
                </div>
            </div>
            </div>
        </section>
    </div>
<?php get_footer(); ?>

