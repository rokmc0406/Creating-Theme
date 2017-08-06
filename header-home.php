<!DOCTYPE html>
<html <?php language_attributes(); ?> class="my-theme">
    <head>
        <meta name="viewport" content="width=device-width">
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <div class="container">
            <header class="site-header">

                <nav class="navbar navbar-default">

                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-menu" aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo home_url(); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
                      </div>

                            <?php
                              $args = array(
                                'theme_location' => 'primary',
                                'depth' => 0,
                                'container' => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'primary-menu',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                              );
                             ?>

                            <?php wp_nav_menu( $args ); ?>

                </nav>
                <div class="main-image">
                    <img src="./wp-content/themes/my-theme/img/main-image-4-adjust.jpg" alt="">
                        <div class="left-bracket">
                            <img src="./wp-content/themes/my-theme/img/left-bracket.svg" alt="">
                        </div>
                        <div class="typewrite title" data-period="2000" data-type='[ "Design.", "Development.", "Wordpress." ]'>
                            <div class="bracket-left"></div>
                            <span class="wrap"></span>
                            <div class="bracket-right"></div>
                        </div>
                        <div class="right-bracket">
                            <img src="./wp-content/themes/my-theme/img/right-bracket.svg" alt="">
                        </div>
                        <div class="control">
                            <div class="play-button"><div class="arrow-right"></div></div>
                            <div class="pause-button"></div>
                        </div>
                </div>
                <div class="separator"></div>
          </header>
