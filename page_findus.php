<?php 

/*Template Name: Find Us Page*/

get_header(); ?>
<div class="container page_content">
    <div class="row">
<!-- BEGIN PAGE PHP -->
        <div class="findus_content">
            <div class="twelve columns">
                <?php if (have_posts()) : 
                    /* OUR DATA CONTEXT IS DEFINED  */
                    while (have_posts()) : the_post(); ?> 
                        <div class="hide"><?php the_title(); ?></div>
                        <?php the_content();
                    endwhile;
                endif; ?>
                <!-- END LOOP -->
    
                <a class="findus-sell-now-link" href="http://margots.heatherlaude.com/contact/" alt="link to sell pickles">
                    <div class="findus-sell-now">
                            <h3>Sell Our Pickles</h3>
                    </div>
                </a> 
             
            </div>
        </div>
<!-- END PAGE PHP -->
    </div>
</div>
<?php get_footer(); ?>