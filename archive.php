<?php get_header(); ?>
<div class="col-8">
	<div id="primary" class="site-content">
		<div id="content" class="main" role="main">
        
		<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header><!-- .page-header -->
    
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );

            endwhile;
            
        else :
                
            get_template_part( 'template-parts/page/content', 'none' );
    
        endif;
        ?>
        </div><!-- content -->
        </div><!-- primary -->
        </div>
    <!-- sidebar.php -->
    <div class="col-4 ">
        <div class=""><?php get_sidebar(); ?></div>
    </div>	 
    
    <?php get_footer(); ?>