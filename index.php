<?php get_header(); ?>
<body>
<div class="container" id="body">
    <header class="site-header">
        <hgroup>
            <div class="logo">
            <?php       
                // LOGO
                $custom_logo_id = get_theme_mod('custom_logo');
                $aLogo = wp_get_attachment_image_src($custom_logo_id , 'medium');
                if (has_custom_logo()) 
                { // Si un logo a été défini
                    echo'<a href="'.get_bloginfo('url').'" title="'.get_bloginfo('name').'"><img src="'.esc_url($aLogo[0]).'" alt="'.get_bloginfo('name').'" title="'.get_bloginfo('name').'" class="img-fluid"></a>';
                } 
                else 
                {   // Sinon on affiche le nom du site
                    echo '<h1>'.get_bloginfo('name').'</h1>';
                }
            ?>
            </div>

            <div class=" row">
                <div class="col-12">    
                    <img src="http://localhost/wordpress522/wp-content/uploads/youpi_logo.png" alt="Mon premier site Worpdress" class="class-fluid">     
                </div>   
            </div>

            <div class="titre row">
            <!-- <h1 class="site-title"><a href="<?php echo esc_url(home_url('/'));?>" title="<?php echo esc_attr(get_bloginfo('name'));?>" rel="home"><?php bloginfo('name'); ?></a></h1> -->
            <h2 class="site-description"><?php bloginfo('description'); ?></h2>
            </div>
        </hgroup>
    </header>
    <?php get_template_part('part_nav'); ?>
    <?php wp_nav_menu(); ?>
    <div class="wrapper row" id="wrapper">
        <div class="col-8">
        <?php
            if ( have_posts() ) : // S'il y a des articles 
                
                   get_template_part('template-parts/page/content', 'content');
                                    
                // echo"<div>".get_template_part('template-parts/page/content', get_post_format())."</div>"; -->
            else :

                get_template_part( 'template-parts/page/content', 'none' );
    
            endif;
        ?>
        </div>
	    <!-- sidebar.php -->
        <div class="col-4 border border-dark">
        <div class=""><?php get_sidebar(); ?></div>
            
        </div>	 
    </div>
</div> <!-- .container -->  
<?php get_footer(); ?>