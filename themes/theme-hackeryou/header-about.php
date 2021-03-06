<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700,300italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header class="aboutHeader">
  <div class="nav">  
    <div class="container">
      <h1>
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
        </a>
      </h1>

      <span class="socialmedia"><?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>
        </span>

      <?php wp_nav_menu( array(
        'container' => false,
        'theme_locations' => 'primary'
        // 'link_before' => '<span>fart</span>'
      )); ?>
      <?php ?>

    </div>
  </div> <!-- /.container -->
</header><!--/.header-->


<!-- <div class="container">
  <div class="party">
    <ul class="posts">
    <?php //get_template_part( 'loop', 'top' ); ?>
    </ul>
  
  </div>
</div> -->

