<article id="post-0" class="post no-results not-found">
<?php if (is_home() && current_user_can('edit_posts')): ?>
    <header class="entry-header">
        <h1 class="entry-title"><?php e_('Aucun article édité','youpi'); ?> </h1>
    </header>
    <div class="entry-content">
        <p><?php printf( __( 'Ecrire un premier article ? <a href="%s">Commencer ici</a>','youpi'), admin_url( 'post-new.php')); ?></p>
    </div>
<?php elseif (is_search()) : ?>
    <header class="entry-header">
        <h1 class="entry-title"><?php e_('Aucun article trouvé','youpi'); ?> </h1>
    </header>
    <div class="entry-content">
        <p><?php _e('Il semblerait que nous ne soyons pas en mesure de trouver votre contenu . Essayer en lançant une recherche', 'youpi'); ?></p>
        <?php get_search_form(); ?>
    </div>

</article>