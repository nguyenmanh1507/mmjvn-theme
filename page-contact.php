<?php
/**
 * Template Name: Contact Page
 * The template for displaying contact page.
 *
 * This is the template that displays recruitment page.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package mmjvn-theme
 */

get_header(); ?>


  <!-- BREADCRUMB
  ================================================== -->
        
  <?php get_template_part( 'template-parts/content', 'breadcrumb' ); ?>
  
  <!-- END BREADCRUMB
  ================================================== -->


  <!-- MAIN CONTENT
  ================================================== -->

  <section class="contact-us">
  	<?php while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?> 

    <?php endwhile; // End of the loop. ?>
  </section>
  <!-- /.contact-us -->

  <section class="company-address">
    <h2 class="show-for-sr">Company Address</h2>
        
        <ul class="no-bullet address-list">

          <?php while ( have_posts() ) : the_post(); ?>
          <li>
            <div class="row">
              <div class="small-12 medium-6 columns">
                
                <div class="branch-address">
                  <h3 class="branch-address__name"><?php _e( 'Văn phòng Hà Nội', 'mmjvn-theme' ); ?></h3>
                  <p class="branch-address__detail"><span><?php _e( 'Địa chỉ', 'mmjvn-theme' ); ?></span> <?php the_field( 'cu_hn_address' ); ?></p>
                  <p class="branch-address__detail"><span><?php _e( 'Điện thoại', 'mmjvn-theme' ); ?></span> <a href="tel:<?php the_field( 'cu_hn_phone' ); ?>"><?php the_field( 'cu_hn_phone' ) ?></a></p>
                  <p class="branch-address__detail"><span><?php _e( 'Email', 'mmjvn-theme' ); ?></span> <a href="mailto:<?php the_field( 'cu_hn_email' ); ?>"><?php the_field( 'cu_hn_email' ); ?></a></p>
                  <!-- <p class="branch-address__detail"><span><?php _e( 'Social', 'mmjvn-theme' ); ?></span> <a href="#" class="social"><i class="fa fa-facebook"></i></a><a href="#" class="social"><i class="fa fa-google-plus"></i></a><a href="#" class="social"><i class="fa fa-twitter"></i></a><a href="#" class="social"><i class="fa fa-youtube"></i></a></p> -->
                </div>
                <!-- /.branch-address -->

              </div>
              
              <div class="small-12 medium-6 columns">
                <?php 
                $google_map = get_field( 'cu_hn_location' );
                $lat = $google_map['lat'];
                $lng = $google_map['lng'];
                ?>
                <div class="branch-map">
                  <div id="branch-map-1" data-lat="<?php echo $lat; ?>" data-lng="<?php echo $lng; ?>"></div>
                </div>
                <!-- /.branch-map -->  

              </div>
            </div>
            <!-- /.row -->
          </li>
        
          <li>
            <div class="row">
              <div class="small-12 medium-6 columns">
                
                <div class="branch-address">
                  <h3 class="branch-address__name"><?php _e( 'Văn phòng Kyoto', 'mmjvn-theme' ); ?></h3>
                  <p class="branch-address__detail"><span><?php _e( 'Địa chỉ', 'mmjvn-theme' ); ?></span> <?php the_field( 'cu_kyoto_address' ) ?></p>
                  <p class="branch-address__detail"><span><?php _e( 'Điện thoại', 'mmjvn-theme' ); ?></span> <a href="tel:<?php the_field( 'cu_kyoto_phone' ); ?>"><?php the_field( 'cu_kyoto_phone' ); ?></a></p>
                  <p class="branch-address__detail"><span><?php _e( 'Email', 'mmjvn-theme' ); ?></span> <a href="mailto:<?php the_field( 'cu_kyoto_email' ); ?>"><?php the_field( 'cu_kyoto_email' ); ?></a></p>
                  <!-- <p class="branch-address__detail"><span><?php _e( 'Social', 'mmjvn-theme' ); ?></span> <a href="#" class="social"><i class="fa fa-facebook"></i></a><a href="#" class="social"><i class="fa fa-google-plus"></i></a><a href="#" class="social"><i class="fa fa-twitter"></i></a><a href="#" class="social"><i class="fa fa-youtube"></i></a></p> -->
                </div>
                <!-- /.branch-address -->

              </div>
              
              <div class="small-12 medium-6 columns">
                <?php
                $kyoto_map = urlencode_deep(get_field( 'cu_kyoto_location' )['address']); 
                ?>

                <div class="branch-map">
                  <div id="branch-map-2">
                    <a href="https://www.google.com/maps/place/<?php echo $kyoto_map; ?>/" target="_blank">
                      <img src="http://maps.googleapis.com/maps/api/staticmap?center=<?php echo $kyoto_map; ?>&amp;zoom=18&amp;scale=1&amp;size=600x300&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:red%7Clabel:1%7C<?php echo $kyoto_map; ?>" alt="<?php echo $kyoto_map; ?>">
                    </a>
                  </div>
                </div>
                <!-- /.branch-map -->  

              </div>
            </div>
            <!-- /.row -->
          </li>

          <li>
            <div class="row">
              <div class="small-12 medium-6 columns">
                
                <div class="branch-address">
                  <h3 class="branch-address__name"><?php _e( 'Văn phòng Tokyo', 'mmjvn-theme' ); ?></h3>
                  <p class="branch-address__detail"><span><?php _e( 'Địa chỉ', 'mmjvn-theme' ); ?></span> <?php the_field( 'cu_tokyo_address' ) ?></p>
                  <p class="branch-address__detail"><span><?php _e( 'Điện thoại', 'mmjvn-theme' ); ?></span> <a href="tel:<?php the_field( 'cu_tokyo_phone' ); ?>"><?php the_field( 'cu_tokyo_phone' ); ?></a></p>
                  <p class="branch-address__detail"><span><?php _e( 'Email', 'mmjvn-theme' ); ?></span> <a href="mailto:<?php the_field( 'cu_tokyo_email' ); ?>"><?php the_field( 'cu_tokyo_email' ); ?></a></p>
                  <!-- <p class="branch-address__detail"><span><?php _e( 'Social', 'mmjvn-theme' ); ?></span> <a href="#" class="social"><i class="fa fa-facebook"></i></a><a href="#" class="social"><i class="fa fa-google-plus"></i></a><a href="#" class="social"><i class="fa fa-twitter"></i></a><a href="#" class="social"><i class="fa fa-youtube"></i></a></p> -->
                </div>
                <!-- /.branch-address -->

              </div>
              
              <div class="small-12 medium-6 columns">
                <?php
                $tokyo_map = urlencode_deep(get_field( 'cu_tokyo_location' )['address']); 
                ?>

                <div class="branch-map">
                  <div id="branch-map-3">
                    <a href="https://www.google.com/maps/place/<?php echo $tokyo_map; ?>/" target="_blank">
                      <img src="http://maps.googleapis.com/maps/api/staticmap?center=<?php echo $tokyo_map; ?>&amp;zoom=18&amp;scale=1&amp;size=600x300&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:red%7Clabel:2%7C<?php echo $tokyo_map; ?>" alt="<?php echo $tokyo_map; ?>">
                    </a>
                  </div>
                </div>
                <!-- /.branch-map -->  

              </div>
            </div>
            <!-- /.row -->
          </li>
          <?php endwhile; ?>

        </ul>
        <!-- /.address-list -->

  </section>
  <!-- /.company-address -->


  <!-- END MAIN CONTENT
  ================================================== -->


<?php get_footer(); ?>