<?php get_header(); ?>
<div class="container recipecontent">
    <div class="row">
        <div class="twelve columns">
            <p><a href="http://margots.heatherlaude.com/recipes/" alt="back to the recipes page">&#8592; Back to Recipe Page</a></p>
        <!-- BEGIN SINGLE PHP -->
            <?php
                if (have_posts()) : 
                    /* OUR DATA CONTEXT IS DEFINED  */
                while (have_posts()) : the_post(); ?>
                    <h4><?php the_category(', ') ?></h4>
                    <h3><?php the_title(); ?></h3>
                    <div class="metainfo">
                        <?php the_time('F jS, Y') ?>
                    <span class="meta-glyph">|</span>
                    </div> 
                    <?php the_content();
                    endwhile;
                endif; ?>
        <!-- END SINGLE PHP -->
        </div>
    </div>
</div>
<?php get_footer(); ?>