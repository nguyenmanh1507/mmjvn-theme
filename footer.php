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
        
        <div class="widget-footer" id="widget-footer-1">
          
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-footer"><img src="<?php echo get_template_directory_uri() . '/images/logo-footer.png' ?>" alt="Company logo"></a>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae porro pariatur cumque magnam saepe dolore! Ullam neque repellendus quos doloribus earum sint beatae quibusdam ea.</p>
          <a href="#">Read more</a>

        </div>
        <!-- /.widget-1 -->

      </div>
      <div class="small-12 medium-6 large-3 columns">
        
        <div class="widget-footer" id="widget-footer-2">
          
          <h3 class="widget-title">Social</h3>

          <ul class="widget-list no-bullet">
            <li><a href="#"><i class="fa fa-facebook"></i> /mmjvietnam</a></li>
            <li><a href="#"><i class="fa fa-twitter"></i> @MMJVietnam</a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i> +MMJVietnam</a></li>
            <li><a href="#"><i class="fa fa-youtube"></i> /mmjvietnam</a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri() . '/images/social/ask.png' ?>" alt="ask social"> /MMJVietnam</a></li>
          </ul>
          <!-- /.widget-list -->

        </div>
        <!-- /.widget-2 -->

      </div>
      <div class="small-12 medium-6 large-3 columns">
        
        <div class="widget-footer" id="widget-footer-3">
          
          <h3 class="widget-title">Contact</h3>

          <ul class="widget-list no-bullet">
            <li><a href="#"><i class="fa fa-home"></i> 17 Floor, HL Tower, 82 Alley, Duy Tan Street, Cau Giay, Hanoi.</a></li>
            <li><a href="tel:0313888127"><i class="fa fa-phone"></i> (84-4) 3xxxxxxx</a></li>
            <li><a href="tel:0985555555"><i class="fa fa-mobile-phone"></i> 0985555555</a></li>
            <li><a href="mailto:contact@mmj.vn"><i class="fa fa-envelope"></i> contact@mmj.vn</a></li>
          </ul>
          <!-- /.widget-list -->

        </div>
        <!-- /.widget-3 -->

      </div>
      <div class="small-12 medium-6 large-3 columns">
        
        <div class="widget-footer" id="widget-footer-4">
          
          <h3 class="widget-title">Map</h3>

          <div id="map-canvas"></div>

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
