<?php get_header(); ?>
    <div class="col-8">
        <div id="primary" class="site-content">
            <div id="content" class="main" role="main">
                <?php
                while ( have_posts() ) : the_post(); 
                get_template_part('template-parts/page/content', get_post_format()); 
                endwhile;
                ?>
            </div><!-- content -->
        </div><!-- primary -->
    </div>
    <!-- sidebar.php -->
    <div class="col-4 ">
        <div class=""><?php get_sidebar(); ?></div>
    </div>	 
<?php get_footer(); ?>