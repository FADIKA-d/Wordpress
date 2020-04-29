<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title>
<!-- <?php echo get_bloginfo('title');?> -->
<?php if ( is_404() ) : ?>
    <?php _e('Not Found'); ?>
<?php elseif ( is_home() || is_front_page() ) : ?>
   <?php bloginfo('description'); ?>
<?php elseif ( is_category() ) : ?>
    <?php single_cat_title(); ?>
<?php else : ?>
    <?php wp_title(); ?>
<?php endif; ?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="<?php echo get_bloginfo('description');?>">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta name='robots' content='noindex,follow' />
<?php wp_head(); ?>
</head>