<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

<div class="aside">
       <header class="entry-header">
              <?php the_post_thumbnail(); ?>
              <?php if (is_single()) : ?>
                     <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="home"><?php the_title(); ?></a></h2>  
              <?php elseif ( is_front_page() && is_home() ) : ?>
                     <h2 class="entry-title"><a href="<?php echo the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="home"><?php the_title(); ?></a></h2>  
              <?php else : ?>
                     <h2 class="entry-title"><a href="<?php echo the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="home"><?php the_title(); ?></a></h2>  
              <?php endif;?>
       </header> 
       <?php if (is_search()) : ?>
              <div class="entry-summary"><?php the_excerpt(); ?></div>
       <?php else : ?>
              <div class="entry-content">
                     <?php the_content(); ?>    
                     <!-- <?php wp_link_pages( array( 'before' => '<div class="page-links">' .__( 'Pages:', 'youpi' ), 'after' => '</div>'));  ?> -->
              </div>
       <?php endif; //is_search() ?>

                     <!-- <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>                          -->
                     <!-- <div><?php the_excerpt() ?></div>; -->
       <footer>
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo get_the_date(); ?></a>
              <?php if(comments_open()) : ?>
                     <div class="comments-link">
                     <?php comments_popup_link('<span class="Leave-reply">' . __('laisser un message', 'youpi') . '</span>', __('1 message', 'youpi'), __( '% messages', 'youpi')); ?>
                     </div>
              <?php endif; //comments_open() ?>
       </footer>
</div>
</article>

