<?php
/**
 * The template for displaying home page.
 *
 *
 * @package mmjvn-theme
 */

get_header(); ?>

  <!-- SLIDESHOW
  ================================================== -->
  
  <section id="slideshow" class="show-for-medium-up">

    <h2 class="show-for-sr">Slideshow section</h2>
    
    <div id="slider" class="flexslider">
      <ul class="slides">

				<?php 

		    // The Query
		    $args = array(
		    		'post_type' => 'hompage_slider',
		    		'posts_per_page' => 6
		    	);

				$the_query = new WP_Query( $args );

				// The Loop
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) : 
						$the_query->the_post();
						$img = get_field( 'hs_slideshow_image' );
						$url = $img['url'];
						$alt = $img['alt'];
						$content = get_field( 'hs_slideshow_description' );
				?>

        <li>
          <div class="slider-item">
            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
            <div class="slider-item__info">
              <?php echo $content; ?>
            </div>
          </div>
        </li>

				<?php
					endwhile;
				else:
					echo '<p>You don\'t have any slideshow';
				endif;

		    ?>

      </ul>
    </div>
    <div id="carousel" class="flexslider">
      <ul class="slides">
      	<?php rewind_posts(); ?>
      	<?php 
    		while ($the_query->have_posts()) : $the_query->the_post();
    		$thumbnail = get_field( 'hs_thumbnail_image' );
      	?>
        <li>
          <img src="<?php echo $thumbnail; ?>" alt="thumbnail">
        </li>
        <?php 
      	endwhile;
      	/* Restore original Post Data */
				wp_reset_postdata();
        ?>
      </ul>
    </div>

  </section>
      <!-- /#slideshow -->    
  
  <!-- END SLIDESHOW
  ================================================== -->


  <!-- WHY VIET NAM       
  ================================================== -->
  
  <section class="why-vn text-center">
    <div class="row">
      <div class="small-12 medium-8 medium-centered columns">
        <h2>Why Viet Nam?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci magnam, cupiditate quam tenetur rem minus? Quibusdam veritatis cumque dolorum voluptatum amet assumenda tempore, provident nihil voluptate nemo ullam vel tempora.</p>
      </div>
    </div>
  </section>
  <!-- /.why-vn -->
  
  <!-- END WHY VIET NAM       
  ================================================== -->


  <!-- BRIEF INTRO
  ================================================== -->
  
  <section class="brief-info">

    <h2 class="show-for-sr">Brief Info</h2>

    <div class="row">
      <div class="medium-12 large-4 columns">
        
        <div class="activity">
    
          <ul class="accordion" data-accordion>
            <li class="accordion-navigation active">
              <a href="#activity1">Inhouse Solutions</a>
              <div id="activity1" class="content active">
                Panel 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </div>
            </li>
            <li class="accordion-navigation">
              <a href="#activity2">Web-Outsourcing Solutions</a>
              <div id="activity2" class="content">
                Panel 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </div>
            </li>
            <li class="accordion-navigation">
              <a href="#activity3">Web Marketing</a>
              <div id="activity3" class="content">
                Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </div>
            </li>
            <li class="accordion-navigation">
              <a href="#activity4">Web Design</a>
              <div id="activity4" class="content">
                Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </div>
            </li>
          </ul>
    
        </div>
        <!-- /.activity -->
    
      </div>
      <div class="medium-12 large-8 columns">
        
        <div class="company-info">
          
          <ul class="tabs" data-tab>
            <li class="tab-title active"><a href="#info1">Overview Info</a></li>
            <li class="tab-title"><a href="#info2">Vision</a></li>
            <li class="tab-title"><a href="#info3">Strategy</a></li>
            <li class="tab-title"><a href="#info4">Core Values</a></li>
          </ul>
          <div class="tabs-content">
            <div class="content clearfix active" id="info1">
              <img src="<?php echo get_template_directory_uri() . '/images/company/tab-content-img.jpg' ?>" alt="Company diccusion">
              <p>We use: Agile mindset to improve everything.</p>
              <p>We build: Products to “train” the market, not only market “choose” products.</p>
              <p>We build: “The real world for learning”.</p>
            </div>
            <div class="content clearfix" id="info2">
              <p>This is the second info of the basic tab example. This is the second info of the basic tab example.</p>
            </div>
            <div class="content clearfix" id="info3">
              <p>This is the third info of the basic tab example. This is the third info of the basic tab example.</p>
            </div>
            <div class="content clearfix" id="info4">
              <p>This is the fourth panel of the basic tab example. This is the fourth panel of the basic tab example.</p>
            </div>
          </div>
    
        </div>
        <!-- /.company-info -->
    
      </div>
    
      <div class="small-12 columns text-center">
        <a href="#" class="button radius button--brief-info">View more</a>
      </div>
    </div>
    <!-- /.row -->
  </section>
  
  <!-- END BRIEF INTRO
  ================================================== -->


  <!-- JOIN US
  ================================================== -->
  
  <div class="join-us polygon-bg">
    
    <div class="row">
      <div class="small-12 columns">
        
        <section class="infographic">

          <h2 class="show-for-sr">Infographic About Company Recruitment Process</h2>
          
          <div class="row">
            <div class="medium-6 medium-centered columns text-center">
              <h3>Join Us!</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus ratione, quibusdam dolores quod temporibus quidem hic esse. Minima labore a voluptatum.</p>
            </div>
          </div>
          <!-- /.row -->

          <ul class="infographic-tab" data-tab>
            <li class="tab-title active"><a href="#ifg-1">Recruitment Process</a></li>
            <li class="tab-title"><a href="#ifg-2">Career Path</a></li>
          </ul>
          <div class="tabs-content">
            <div class="content active" id="ifg-1">
              <img src="<?php echo get_template_directory_uri() . '/images/infographic/ifg-1.png' ?>" alt="infographic">
            </div>
            <div class="content" id="ifg-2">
              <img src="<?php echo get_template_directory_uri() . '/images/infographic/ifg-2.png' ?>" alt="infographic">
            </div>
          </div>

          <a href="#" class="button button--black">Let's go</a>

        </section>
        <!-- /.infographic -->

      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.join-us -->
  
  <!-- END JOIN US
  ================================================== -->


  <!-- RECENT NEWS
  ================================================== -->
  
  <section class="fp-recent-news">
    
    <h2 class="show-for-sr">Recent News</h2>
    
    <div class="row">
      <div class="small-12 medium-4 medium-push-8 columns">
        
        <div class="recent-news-description">
          <h3>Recent News</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam vitae ipsam, eveniet tempora dolor! Voluptates vero alias quis odit! Veniam animi, ipsum nihil asperiores illum eaque ex qui. A quidem odit, nihil eum!</p>
          <a href="#">View more</a>
        </div>
        <!-- /.recent-news-description -->
        <div class="recent-news-navigation">
          <a href="#" class="rnn-prev"><i class="fa fa-angle-left"></i></a>
          <a href="#" class="rnn-next"><i class="fa fa-angle-right"></i></a>
        </div>

      </div>
      <div class="small-12 medium-8 medium-pull-4 columns">
        <div id="news-recent-slider" class="owl-carousel owl-theme">
              
          <div class="item">
            <article class="news">
              <a href="#"><img src="<?php echo get_template_directory_uri() . '/images/news/news-1.jpg' ?>" alt="news"></a>
              <div class="news-content">
                <header>
                  <h2 class="news-content__title"><a href="#">[Company Trip] Danang - Where the love story begin</a></h2>
                  <div class="news-content__meta">
                    by <a href="#">Admin</a> | <time datetime="2015-06-25">25 Jun, 2015</time>
                  </div>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum quas in commodi minima iusto. Consequatur quas facilis saepe praesentium, fugit corrupti cumque, quo.</p>
              </div>
              <!-- /.news-content -->
            </article>
            <!-- /.news -->
          </div>
          
          <div class="item">
            <article class="news">
              <a href="#"><img src="<?php echo get_template_directory_uri() . '/images/news/news-2.jpg' ?>" alt="news"></a>
              <div class="news-content">
                <header>
                  <h2 class="news-content__title"><a href="#">Mr.Tasaki - Welcome to the real learning world</a></h2>
                  <div class="news-content__meta">
                    by <a href="#">Admin</a> | <time datetime="2015-06-25">25 Jun, 2015</time>
                  </div>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum quas in commodi minima iusto. Consequatur quas facilis saepe praesentium, fugit corrupti cumque, quo.</p>
              </div>
              <!-- /.news-content -->
            </article>
            <!-- /.news -->
          </div>

          <div class="item">
            <article class="news">
              <a href="#"><img src="<?php echo get_template_directory_uri() . '/images/news/news-1.jpg' ?>" alt="news"></a>
              <div class="news-content">
                <header>
                  <h2 class="news-content__title"><a href="#">Mr.Tasaki - Welcome to the real learning world</a></h2>
                  <div class="news-content__meta">
                    by <a href="#">Admin</a> | <time datetime="2015-06-25">25 Jun, 2015</time>
                  </div>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum quas in commodi minima iusto. Consequatur quas facilis saepe praesentium, fugit corrupti cumque, quo.</p>
              </div>
              <!-- /.news-content -->
            </article>
            <!-- /.news -->
          </div>

          <div class="item">
            <article class="news">
              <a href="#"><img src="<?php echo get_template_directory_uri() . '/images/news/news-1.jpg' ?>" alt="news"></a>
              <div class="news-content">
                <header>
                  <h2 class="news-content__title"><a href="#">Mr.Tasaki - Welcome to the real learning world</a></h2>
                  <div class="news-content__meta">
                    by <a href="#">Admin</a> | <time datetime="2015-06-25">25 Jun, 2015</time>
                  </div>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum quas in commodi minima iusto. Consequatur quas facilis saepe praesentium, fugit corrupti cumque, quo.</p>
              </div>
              <!-- /.news-content -->
            </article>
            <!-- /.news -->
          </div>

        </div>
        <!-- /#news-recent-slider -->
      </div>
    </div>
    <!-- /.row -->

  </section>
  <!-- /.fp-recent-news -->
  
  <!-- END RECENT NEWS
  ================================================== -->


  <!-- NEWSLETTER
  ================================================== -->
  
  <section class="newsletter">
    
    <div class="row">
      <div class="medium-12 columns">

        <h2>Subscribe To Our Newsletter</h2>
        <form action="/" class="form-newsletter">
          <div class="row">
            <div class="small-12 medium-9 columns">
              <input type="email" name="newsletter" id="newsletter" placeholder="Your email address">
            </div>
            <div class="small-12 medium-3 columns">
              <button type="submit">Subcribe</button>
            </div>
          </div>
        </form>     
      </div>
    </div>
    <!-- /.row -->

  </section>
  <!-- /.newsletter -->
  
  <!-- END NEWSLETTER
  ================================================== -->


  <!-- QUOTE
  ================================================== -->
  
  <section class="quote">

    <h2 class="show-for-sr">Company quote</h2>
    
    <div class="row">
      <div class="small-12 columns">
        
        <div id="quote-slider">
          <ul class="slides">
						<?php 
						$args = array (
								'post_type' => 'quotes',
								'posts_per_page' => 6
							);

						$the_query = new WP_Query( $args );

						if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();

							$img = get_field( 'q_avatar' );
							$url = $img['url'];
							$alt = $img['alt'];
						?>

            <li> 
              <div class="quote-content">
                <div class="row">
                  <div class="small-12 medium-8 medium-push-4 columns">
                    <blockquote>
                      <cite><?php the_title(); ?></cite>
                      <p><?php echo the_field( 'q_quote' ); ?></p>
                    </blockquote>
                  </div>
                  <div class="small-12 medium-4 medium-pull-8 columns text-center">
                    <div class="quote-img">
                      <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
                    </div>
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.quote-content -->
            </li>

            <?php 
            	endwhile;
            else :
            	echo 'You don\'t have quotes';
            endif;

            wp_reset_postdata();
            ?>

          </ul>
        </div>
        <!-- /#quote-slider -->

      </div>
    </div>
    <!-- /.row -->

  </section>
  <!-- /.quote -->
  
  <!-- END QUOTE
  ================================================== -->

<?php get_footer(); ?>
