<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
<?php

while ( have_posts() ) : the_post() // Tant qu'il y a des articles, alors pour chaque article on affiche : 
?>
<div class="aside">
    <header class="entry-header">

    <?php if (is_single()) : ?>
        <h2 class="entry-title"><?php the_title(); ?></h2>
    <?php else : ?>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr(sprintf( __( 'Permalink to %s', 'youpi' ) , the_title_attribute( 'echo=0'))); ?>" rel="bookmark"><?php the_title(); ?></a></h2>  
    <?php endif; //is_single() ?>
    <?php if(comments_open()) : ?>
        <div class="comments-link">
            <?php comments_popup_link('<span class="Leave-reply">' . __('laisser un message', 'youpi') . '</span>', __('1 message', 'youpi'), __( '% messages', 'youpi')); ?>
        </div>
    <?php endif; //comments_open() ?>
    </header> 
        <div class="entry-content">
    <?php the_content( __( 'Lire la suite', 'youpi' ) ); ?>    
        </div>
    </header>
</div>
<footer>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo get_the_date(); ?></a>
</footer>
<?php
endwhile;
?>
</article>