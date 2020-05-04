<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title>
<?php echo get_bloginfo('title');?>
<!-- <?php if ( is_404() ) : ?>
    <?php _e('Not Found'); ?>
<?php elseif ( is_home() || is_front_page() ) : ?>
   <?php bloginfo('description'); ?>
<?php elseif ( is_category() ) : ?>
    <?php single_cat_title(); ?>
<?php elseif ( is_single() ) : ?>
    <?php single_cat_title(); ?>
<?php else : ?>
    <?php wp_title(); ?>
<?php endif; ?> -->
</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="<?php echo get_bloginfo('description');?>">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta name='robots' content='noindex,follow' />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="container" id="body">
    <header class="site-header">
        <hgroup>
            <div class="d-flex">

                <!-- LOGO -->
                <div class="logo col-4">
                    <?php
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

                <!-- DESCRIPTION -->
                <div class="titre col-6 mt-3">
                    <!-- <h1 class="site-title"><a href="<?php echo esc_url(home_url('/'));?>" title="<?php echo esc_attr(get_bloginfo('name'));?>" rel="home"><?php bloginfo('name'); ?></a></h1> -->
                    <h2 class="site-description"><?php bloginfo('description'); ?></h2>
                </div>

            </div>
        </hgroup>
        <!-- NAVBARRE -->
    <?php get_template_part('template-parts/page/partnav'); ?>
    </header>
    <div class="wrapper row" id="wrapper">
