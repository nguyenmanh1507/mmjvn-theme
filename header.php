<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package mmjvn-theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- HEADER
  ================================================== -->
  
  <header id="site-header">
    
    <div class="top-header">
    
      <div class="row">
        
        <div class="medium-6 columns">
          
          <ul class="socials-list inline-list">
            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          </ul>
          <!-- /.socials-list -->

        </div>

        <div class="medium-6 columns">
          
          <div class="lang-and-search">
            <div class="search-form-wrap">
              <form action="/" class="search-form">
                <input type="text" name="s" id="s" class="search-form__field" placeholder="Search on MMJVietnam..." required>
                <button type="submit" class="search-form__btn"><i class="fa fa-search"></i></button>
                <span class="search-form__icon"><i class="fa fa-search"></i></span>
              </form>
            </div>
            <!-- /.search-form-wrap -->

            <!-- <ul class="language-list inline-list right">
              <li><a href="#">English</a></li>
              <li><a href="#">Vietnamese</a></li>
            </ul> -->
          </div>
          <!-- /.lang-and-search -->

        </div>

      </div>

    </div>
    <!-- /.top-header -->

    <div class="site-navigation">

      <div class="row">
        <div class="small-12 columns">
        
          <nav class="top-bar" data-topbar role="navigation">
            <ul class="title-area">
              <li class="name">
                <h1>
                  <span class="show-for-sr">MMJ Viet Nam</span>
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="<?php echo get_template_directory_uri() . '/images/logo.png' ?>" class="logo-big" alt="Logo MMJ Viet Nam">
                    <img src="<?php echo get_template_directory_uri() . '/images/logo-small.png' ?>" class="logo-small" alt="Logo MMJ Viet Nam">
                  </a>
                </h1>
              </li>
               <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
              <li class="toggle-topbar menu-icon"><a href="#"><span><?php esc_html_e( 'Menu', 'mmjvn-theme' ); ?></span></a></li>
            </ul>
          
            <section class="top-bar-section">
              <h2 class="show-for-sr">Main Navigation</h2>
              <!-- Right Nav Section -->

              <?php 
              	$options = array( 
              		'container' => false,
						    	'menu_class' => 'right',
						    	'theme_location' => 'primary',
						      'walker' => new F5_TOP_BAR_WALKER(),
              		);
              	wp_nav_menu( $options );
              ?>
          
            </section>
          </nav>
        
        </div>
      </div>

    </div>
    <!-- /.site-navigation -->

  </header>
  <!-- /#site-header -->
  
  <!-- END HEADER
  ================================================== -->
