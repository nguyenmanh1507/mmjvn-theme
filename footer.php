<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package mmjvn-theme
 */

?>

    <!-- FOOTER
  ================================================== -->
  
  <footer id="footer">
    
    <h2 class="show-for-sr">Footer</h2>

    <div class="row">
      <div class="small-12 medium-6 large-3 columns">

        <?php if ( function_exists( 'ot_get_option' ) ) : ?>      
        <div class="widget-footer" id="widget-footer-1">

          <?php echo ot_get_option( 'company_info' ); ?>

        </div>
        <!-- /.widget-1 -->
        <?php endif; ?>

      </div>
      <div class="small-12 medium-6 large-3 columns">
        
        <div class="widget-footer" id="widget-footer-2">

          <?php
          if ( function_exists( 'ot_get_option' ) ) :
            $socials = ot_get_option( 'company_social' );
          ?>        
          <h3 class="widget-title"><?php _e( 'Social', 'mmjvn-theme' ); ?></h3>

          <ul class="widget-list no-bullet">
            <?php 
            foreach ( $socials as $social ) :
            ?>
            <li>
              <a href="<?php echo esc_url( $social['href'] ); ?>" target="_blank">
                <?php 
                switch ( strtolower( $social['name'] ) ) {
                  case 'facebook':
                    echo '<i class="fa fa-facebook"></i>' . $social['title'];
                    break;

                  case 'google+':
                    echo '<i class="fa fa-google-plus"></i>' . $social['title'];
                    break;

                  case 'twitter':
                    echo '<i class="fa fa-twitter"></i>' . $social['title'];
                    break;

                  case 'youtube':
                    echo '<i class="fa fa-youtube"></i>' . $social['title'];
                    break;

                  case 'ask.fm':
                    echo '<i class="fa-ask-footer"></i>' . $social['title'];
                    break;

                  default:
                    echo $social['name'];
                    break;
                }
                ?>
              </a>
            </li>
            <?php endforeach; ?>
          </ul>
          <!-- /.widget-list -->
          <?php endif; ?>

        </div>
        <!-- /.widget-2 -->

      </div>
      <div class="small-12 medium-6 large-3 columns">
        
        <div class="widget-footer" id="widget-footer-3">

          <?php if ( function_exists( 'ot_get_option' ) ) : ?>          
          <h3 class="widget-title"><?php _e( 'Liên hệ', 'mmjvn-theme' ); ?></h3>
          <?php echo ot_get_option( 'footer_contact' ); ?>
          <?php endif; ?>

        </div>
        <!-- /.widget-3 -->

      </div>
      <div class="small-12 medium-6 large-3 columns">
        
        <div class="widget-footer" id="widget-footer-4">
          
          <h3 class="widget-title"><?php _e( 'Bản đồ', 'mmjvn-theme' ); ?></h3>
          
          <?php 
          $args = array(
              'pagename' => 'lien-he'
            );

          $the_query = new WP_Query( $args );
          ?>

          <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <?php $google_map = urlencode_deep(get_field( 'cu_hn_location' )['address']); ?>
          <div id="map-canvas">
            <a href="https://www.google.com/maps/dir//<?php echo $google_map; ?>/" target="_blank"><img src="http://maps.googleapis.com/maps/api/staticmap?center=<?php echo $google_map; ?>&amp;zoom=18&amp;scale=false&amp;size=600x300&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:red%7Clabel:1%7C<?php echo $google_map; ?>" alt="<?php echo $google_map; ?>"></a>
          </div>
          <?php endwhile; endif; ?>
          <?php wp_reset_postdata(); ?>

        </div>
        <!-- /.widget-4 -->

      </div>
    </div>
    <!-- /.row -->

    <div class="footer-extra-info">
      <div class="row">
        <div class="small-12 medium-5 columns">
          <?php 
          if ( function_exists( 'ot_get_option' ) ) :
            $copyright = ot_get_option( 'opt_ft_copyright' );
            echo $copyright;
          endif;
          ?>
        </div>
        <div class="small-12 medium-7 columns">
        <?php 
          $options = array( 
            'container' => false,
            'depth' => 1,
            'menu_class' => 'footer-nav inline-list right',
            'theme_location' => 'footer-menu'
            );
          wp_nav_menu( $options );
        ?>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.footer-nav -->
  </footer>
  <!-- /#footer -->
    
  <!-- END FOOTER
  ================================================== -->

<?php wp_footer(); ?>

</body>
</html>
