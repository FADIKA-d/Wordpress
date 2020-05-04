<?php get_header(); ?>
<section class="site-content" id="primary">
    <div id="content" role="main">
        <?php if (have_posts()) : ?>
            <?php youpi_content_nav('nav-above'); ?>
            <header class="page-header">
                    <h1 class="page-title"><?php printf( __( 'Résultat pour : %s','youpi'),'<span>'.get_search_query(). '</span>'); ?> </h1>
            </header>   
            <?php
            while ( have_posts() ) : the_post() // Tant qu'il y a des articles, alors pour chaque article on affiche : 
                get_template_part('template-parts/page/content', get_post_format());
            endwhile;
         else : ?>
            <article id="post-0" class="post error404 no-results not-found">
                <header class="entry-header">
                    <h1 class="entry-title"><?php e_('Aucun article trouvé','youpi'); ?> </h1>
                </header>
                <div class="entry-content">
                    <p><?php _e('Il semblerait que nous ne soyons pas en mesure de trouver votre contenu . Essayer en lançant une recherche', 'youpi'); ?></p>
                    <?php get_search_form(); ?>
                </div>
            </article>  
        <?php endif; ?>
    </div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>