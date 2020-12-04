<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php  ?></title>
    
</head>

<body>
<div class="loader-body" id="loader">
	<div class="loader"></div>
</div>
<div class="container-all">

<header>
  
<nav class="navbar navbar-expand-md navbar-light" role="navigation">
  <div class="container-menu">
    <!-- Brand and toggle get grouped for better mobile display -->
    <a class="navbar-brand" href="/oncomedic"> <img src="<?php echo get_template_directory_uri().'/assets/src/img/Oncomedic-01.png'; ?> " alt="<?php wp_title(); ?>" title="<?php wp_title(); ?>"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'header-menu',
            'depth'             => 3,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
        <div class="social-buttons">
        <div class="table">
          <div class="table-cell">
            <img src="<?php echo get_template_directory_uri().'/assets/src/img/Icon awesome-facebook.svg'?>" alt="">
          </div>
          <div class="table-cell">
            <img src="<?php echo get_template_directory_uri().'/assets/src/img/Icon awesome-whatsapp.svg'?>" alt="">
          </div>
          <div class="table-cell">
           <img src="<?php echo get_template_directory_uri().'/assets/src/img/Icon material-email.svg'?>" alt="">
          </div>
        </div>
      </div>
  </div>

</nav>

</header>

 



