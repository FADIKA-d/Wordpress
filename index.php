<?php get_header(); ?>
        <div class="col-8">
        <?php
            if ( have_posts() ) : // S'il y a des articles 
                while ( have_posts() ) : the_post() 
                   get_template_part('template-parts/page/content', get_post_format());
                endwhile;              
            else :
                
                get_template_part( 'template-parts/page/content', 'none' );
    
            endif;
        ?>
        </div>

	    <!-- sidebar.php -->
        <div class="col-4 ">
            <div class=""><?php get_sidebar(); ?></div>
        </div>	 
      
<?php get_footer(); ?>