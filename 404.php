<?php get_header(); ?>
<div class="site-content" id="primary">
    <div id="content" role="main">
        <article id="post-0" class="post error404 no-results not-found">
            <header class="entry-header">
                <h1 class="entry-title"><?php e_('Aucun article trouvé','youpi'); ?> </h1>
            </header>
            <div class="entry-content">
                <p><?php _e('Il semblerait que nous ne soyons pas en mesure de trouver votre contenu . Essayer en lançant une recherche', 'youpi'); ?></p>
                <?php get_search_form(); ?>
            </div>
        </article> 
    </div>
</div>
<?php get_footer(); ?>