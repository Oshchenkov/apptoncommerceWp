<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * 
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="mainHeader">
    <div class="mainHeader-nav" id="mainHeaderNav">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="mainHeader-nav-mobContainer">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="navbar-brand mainLogo mainHeader-nav-mobContainer__a">
              <img src="<?php echo get_template_directory_uri(); ?>/images/Logo/Logo.svg" alt="logo" class="mainLogo__icon ">
              <div class="mainLogo__text">
                <?php _e('Appton Commerce', 'apptoncommerce'); ?>
              </div><!-- /.mainLogo__text -->
            </a><!-- /.navbar-brand -->
            <div class="mainHeader-nav-mobContainer__btn">
              <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarMainHeaderNav" aria-controls="navbarMainHeaderNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div><!-- /.mainHeader-nav-mobContainer__btn -->

          </div><!-- /.mainHeader-nav-mobContainer -->
          <div class="mainHeader-nav-menuContainer collapse navbar-collapse" id="navbarMainHeaderNav">
            <?php
            wp_nav_menu(array(
              'menu_class'        => "mainHeader-nav-menuContainer__ul ",
              'container_class'   => "menu-main-container",
              'theme_location'    => "main",
            ));
            ?>

          </div><!-- /.mainHeader-nav-menuContainer -->
        </nav><!-- /.navbar navbar-expand-lg -->
      </div><!-- /.container -->
    </div><!-- /.mainHeader-nav -->
  </header><!-- /.mainHeader -->