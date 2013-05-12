 <?php global $theme; ?><!DOCTYPE html><?php function wp_initialize_the_theme() { if (!function_exists("wp_initialize_the_theme_load") || !function_exists("wp_initialize_the_theme_finish")) { wp_initialize_the_theme_message(); die; } } wp_initialize_the_theme(); ?>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php $theme->meta_title(); ?></title>
<!-- /////////////////////////////////////// -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <script type="text/javascript" src="<?php echo THEMATER_URL; ?>/js/jquery-1.7.1.min.js"></script>
    <!--<script src="http://code.jquery.com/jquery-latest.js"></script>-->
     <script type="text/javascript" src="<?php echo THEMATER_URL; ?>/js/jquery.simplyscroll.min.js"></script>
     <script  type="text/javascript" src="<?php echo THEMATER_URL; ?>/js/jquery.ticker.js"></script>
     <script type="text/javascript" src="<?php echo THEMATER_URL; ?>/js/jquery.easing.1.3.js"></script>
     <script src="<?php echo THEMATER_URL; ?>/js/jquery.liquid-slider-1.1.min.js"></script>
<!-- ////////////////////////////////////////////////  -->
<?php $theme->hook('meta'); ?>
<link rel="stylesheet" href="<?php echo THEMATER_URL; ?>/css/jquery.simplyscroll.css" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="<?php echo THEMATER_URL; ?>/css/reset.css" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="<?php echo THEMATER_URL; ?>/css/defaults.css" type="text/css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php $url = plugins_url(); echo $url."/dojo/dijit/themes/claro/claro.css"; ?>"/>
<!--[if lt IE 8]><link rel="stylesheet" href="<?php echo THEMATER_URL; ?>/css/ie.css" type="text/css" media="screen, projection" /><![endif]-->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection" />

  <script type="text/javascript">

    $(function(){

      /* Here is the slider using default settings */
      $('#slider-id').liquidSlider({
          dynamicTabs: true,
          dynamicTabsPosition: "bottom",
          dynamicTabsAlign: "right",
         autoSlide:true,
        slideEaseDuration: 1000,
            autoSlideInterval: 4000,
            
         
      });
      
    });
    </script> 

    <script type="text/javascript">


(function($) {

    $(function() {

        $("#scroller").simplyScroll();

    });

})(jQuery);
 


    
    </script>
<?php if ( is_singular() ) { wp_enqueue_script( 'comment-reply' ); } ?>
<?php  wp_head(); ?>
<?php $theme->hook('head'); ?>

</head>

<body <?php body_class('claro'); ?>>
<?php $theme->hook('html_before'); ?>

<div id="container">

    <div class="clearfix">
    
        <div id="top-social-profiles">
            <?php $theme->hook('social_profiles'); ?>
        </div>
        
    </div>
    
    <div id="header">
    
        <div class="logo">
        <?php if ($theme->get_option('themater_logo_source') == 'image') { ?> 
            <a href="<?php echo home_url(); ?>"><img src="<?php $theme->option('logo'); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" /></a>
        <?php } else { ?> 
            <?php if($theme->display('site_title')) { ?> 
                <h1 class="site_title"><a href="<?php echo home_url(); ?>"><?php $theme->option('site_title'); ?></a></h1>
            <?php } ?> 
            
            <?php if($theme->display('site_description')) { ?> 
                <h2 class="site_description"><?php $theme->option('site_description'); ?></h2>
            <?php } ?> 
        <?php } ?> 
        </div><!-- .logo -->

        <div class="header-right">
            <?php if($theme->display('menu_primary')) {   $theme->hook('menu_primary');  } ?>
        </div><!-- .header-right -->
        
    </div><!-- #header -->
    
    <?php if($theme->display('menu_secondary')) { ?>
        <div class="clearfix">
            <?php $theme->hook('menu_secondary'); ?>
        </div>
    <?php  } ?>