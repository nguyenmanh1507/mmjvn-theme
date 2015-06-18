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
          <li>
            <div class="row">
              <div class="small-12 medium-6 columns">
                
                <div class="branch-address">
                  <h3 class="branch-address__name">Hanoi Office</h3>
                  <p class="branch-address__detail"><span>Address</span> 17 Floor, HL Tower, 82 Duy Tan, Hanoi</p>
                  <p class="branch-address__detail"><span>Phone</span> <a href="tel:0466873572">0466873572</a></p>
                  <p class="branch-address__detail"><span>Mail</span> <a href="mailto:contact@mmj.vn">contact@mmj.vn</a></p>
                  <p class="branch-address__detail"><span>Social</span> <a href="#" class="social"><i class="fa fa-facebook"></i></a><a href="#" class="social"><i class="fa fa-google-plus"></i></a><a href="#" class="social"><i class="fa fa-twitter"></i></a><a href="#" class="social"><i class="fa fa-youtube"></i></a></p>
                </div>
                <!-- /.branch-address -->

              </div>
              
              <div class="small-12 medium-6 columns">
                
                <div class="branch-map">
                  <div id="branch-map-1"></div>
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
                  <h3 class="branch-address__name">Hanoi Office</h3>
                  <p class="branch-address__detail"><span>Address</span> 17 Floor, HL Tower, 82 Duy Tan, Hanoi</p>
                  <p class="branch-address__detail"><span>Phone</span> <a href="tel:0466873572">0466873572</a></p>
                  <p class="branch-address__detail"><span>Mail</span> <a href="mailto:contact@mmj.vn">contact@mmj.vn</a></p>
                  <p class="branch-address__detail"><span>Social</span> <a href="#" class="social"><i class="fa fa-facebook"></i></a><a href="#" class="social"><i class="fa fa-google-plus"></i></a><a href="#" class="social"><i class="fa fa-twitter"></i></a><a href="#" class="social"><i class="fa fa-youtube"></i></a></p>
                </div>
                <!-- /.branch-address -->

              </div>
              
              <div class="small-12 medium-6 columns">
                
                <div class="branch-map">
                  <div id="branch-map-2"></div>
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
                  <h3 class="branch-address__name">Hanoi Office</h3>
                  <p class="branch-address__detail"><span>Address</span> 17 Floor, HL Tower, 82 Duy Tan, Hanoi</p>
                  <p class="branch-address__detail"><span>Phone</span> <a href="tel:0466873572">0466873572</a></p>
                  <p class="branch-address__detail"><span>Mail</span> <a href="mailto:contact@mmj.vn">contact@mmj.vn</a></p>
                  <p class="branch-address__detail"><span>Social</span> <a href="#" class="social"><i class="fa fa-facebook"></i></a><a href="#" class="social"><i class="fa fa-google-plus"></i></a><a href="#" class="social"><i class="fa fa-twitter"></i></a><a href="#" class="social"><i class="fa fa-youtube"></i></a></p>
                </div>
                <!-- /.branch-address -->

              </div>
              
              <div class="small-12 medium-6 columns">
                
                <div class="branch-map">
                  <div id="branch-map-3"></div>
                </div>
                <!-- /.branch-map -->  

              </div>
            </div>
            <!-- /.row -->
          </li>
        </ul>
        <!-- /.address-list -->

  </section>
  <!-- /.company-address -->


  <!-- END MAIN CONTENT
  ================================================== -->


<?php get_footer(); ?>