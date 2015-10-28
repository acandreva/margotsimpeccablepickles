<?php get_header(); ?>
<div class="container">
    <div class="row">
<!-- BEGIN PAGE PHP -->
        <div class="twelve columns">
            <?php if (have_posts()) : 
                /* OUR DATA CONTEXT IS DEFINED  */
                while (have_posts()) : the_post(); ?> 
                    <h3><?php the_title(); ?></h3>
                    <?php the_content();
                endwhile;
            endif; ?>
        </div>
<!-- END PAGE PHP -->
    </div>
</div>
<?php get_footer(); ?>