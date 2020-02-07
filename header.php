<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-shadow">
        <?php
          if( has_custom_logo() ) {
            the_custom_logo();
          } else {
          ?>
            <a class="navbar-brand" href="<?php echo home_url( '/' ) ?>"><?php bloginfo('name'); ?></a>
          <?php } ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
              if( has_nav_menu( 'primary' ) ){
                    wp_nav_menu([
                      'theme_location' => 'primary',
                      'menu_class' => 'navbar-nav ml-auto mr-3',
                      'container' => false,
                      'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                      'depth' => 2,
                      'walker' => new WP_Bootstrap_Navwalker()
                  ]);
                }
            ?>
            </div>
          </nav>
    </header>