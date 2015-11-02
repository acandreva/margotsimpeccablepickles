<?php 

/*Template Name: Contact Page*/

get_header(); ?>
<div class="container page_content">
    <div class="row">
<!-- BEGIN PAGE PHP -->
        <div class="contact_content">
            <div class="twelve columns">
                <?php if (have_posts()) : 
                    /* OUR DATA CONTEXT IS DEFINED  */
                    while (have_posts()) : the_post(); ?> 
                        <div class="hide"><?php the_title(); ?></div>
                        <?php the_content();
                    endwhile;
                endif; ?>
                <!-- END LOOP -->
                               
            </div>
        </div>
<!-- END PAGE PHP -->
    </div>
</div>
<?php get_footer(); ?>