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
        <?php 
        if ( function_exists( 'ot_get_option' ) ) {
          echo ot_get_option( 'why_viet_nam' );
        }

        ?>
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
          <?php 
          if ( function_exists( 'ot_get_option' ) ) {
            $accs = ot_get_option( 'accordion' );
          }
          ?>
    
          <ul class="accordion" data-accordion>
          <?php if ( !empty( $accs ) ) : ?>
          <?php $count = 1; ?>
          <?php foreach ( $accs as $acc ) : ?>

            <li class="accordion-navigation <?php echo ( $count === 1 ) ? 'active' : ''; ?>">
              <a href="#activity<?php echo $count; ?>"><?php echo $acc['title']; ?></a>
              <div id="activity<?php echo $count; ?>" class="content <?php echo ( $count === 1 ) ? 'active' : ''; ?>">
                <?php echo $acc['acc_content']; ?>
              </div>
            </li>
          <?php $count += 1; ?>
          <?php endforeach; ?>
          <?php endif; ?>
          </ul>
    
        </div>
        <!-- /.activity -->
    
      </div>
      <div class="medium-12 large-8 columns">
        
        <div class="company-info">
        <?php 
        if ( function_exists( 'ot_get_option' ) ) :
            $tabs = ot_get_option( 'tabs' );
          ?>
          <?php if ( !empty( $tabs ) ) : ?>
          <?php $count = 1; ?>

          <ul class="tabs" data-tab>
            <?php foreach ( $tabs as $tab ) : ?>
            <li class="tab-title <?php echo ( $count === 1 ) ? 'active' : ''; ?>"><a href="#info<?php echo $count; ?>"><?php echo $tab['title']; ?></a></li>
            <?php $count +=1; ?>
            <?php endforeach; ?>
          </ul>
          <div class="tabs-content">
            <?php $count = 1; ?>
            <?php foreach ( $tabs as $tab ) : ?>
            <div class="content clearfix <?php echo ( $count === 1 ) ? 'active' : ''; ?>" id="info<?php echo $count; ?>">
              <?php if ( !empty( $tab['tab_image'] ) ) : ?>
              <img src="<?php echo esc_url( $tab['tab_image'] ); ?>" alt="<?php echo $tab['title']; ?>">
              <?php endif; ?>
              <?php echo $tab['tab_content']; ?>
            </div>
            <?php $count += 1; ?>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
        <?php endif; ?>
    
        </div>
        <!-- /.company-info -->
    
      </div>
    
      <?php 
      if ( function_exists( 'ot_get_option' ) ) :
        $page_id = ot_get_option( 'view_more_link' );
        $view_more_link = get_page_link( $page_id );
      ?>
      <div class="small-12 columns text-center">
        <a href="<?php echo esc_url( $view_more_link ); ?>" class="button radius button--brief-info"><?php _e( 'Xem thêm' ); ?></a>
      </div>
      <?php endif; ?>
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
              <?php if ( function_exists( 'ot_get_option' ) ) : ?>
                <?php echo ot_get_option( 'join_us' ); ?>
              <?php endif; ?>
            </div>
          </div>
          <!-- /.row -->

          <ul class="infographic-tab" data-tab>
            <li class="tab-title active"><a href="#ifg-1"><?php _e( 'Recruitment Process', 'mmjvn-theme' ); ?></a></li>
            <li class="tab-title"><a href="#ifg-2"><?php _e( 'Career Path', 'mmjvn-theme' ); ?></a></li>
          </ul>
          <div class="tabs-content">
            <div class="content active" id="ifg-1">
              <?php if ( function_exists( 'ot_get_option' ) ) : ?>
              <?php $infographic = ot_get_option( 'recruitment_process' ); ?>
              <?php $infographic_small = ot_get_option( 'recruitment_process_mobile' ); ?>
              <img src="<?php echo esc_url( $infographic ); ?>" class="show-for-medium-up" alt="infographic">
              <img src="<?php echo esc_url( $infographic_small ) ?>" class="show-for-small-only" alt="infographic">
              <?php endif; ?>
            </div>
            <div class="content" id="ifg-2">
              <?php if ( function_exists( 'ot_get_option' ) ) : ?>
              <?php $infographic = ot_get_option( 'career_path' ); ?>
              <?php $infographic_small = ot_get_option( 'career_path_mobile' ); ?>
              <img src="<?php echo esc_url( $infographic ); ?>" class="show-for-medium-up" alt="infographic">
              <img src="<?php echo esc_url( $infographic_small ) ?>" class="show-for-small-only" alt="infographic">
              <?php endif; ?>
            </div>
          </div>
          <?php 
          if ( function_exists( 'ot_get_option' ) ) :
            $page_id = ot_get_option( 'lets_go_link' );
            $lets_go_link = get_page_link( $page_id );
          ?>
          <a href="<?php echo esc_url( $lets_go_link ); ?>" class="button button--black"><?php _e( "Let's go", "mmjvn-theme" ); ?></a>
          <?php endif; ?>

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
          <?php 
          if ( function_exists( 'ot_get_option' ) ) {
            $recent_news = ot_get_option( 'recent_news' );
            echo $recent_news;
          } 
          ?>
        </div>
        <!-- /.recent-news-description -->
        <div class="recent-news-navigation">
          <a href="#" class="rnn-prev"><i class="fa fa-angle-left"></i></a>
          <a href="#" class="rnn-next"><i class="fa fa-angle-right"></i></a>
        </div>

      </div>
      <div class="small-12 medium-8 medium-pull-4 columns">
        <?php 
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6
          );

        $the_query = new WP_Query( $args );
        ?>
        <div id="news-recent-slider" class="owl-carousel owl-theme">
          
          <?php if ( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="item">
            <article class="news">
              <a href="<?php the_permalink(); ?>">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'medium' ); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri() . '/images/placeholder-img.jpg' ?>" alt="news">
              <?php endif; ?>
              </a>
              <div class="news-content">
                <?php 
                $title = get_the_title();
                $excerpt = get_the_excerpt();
                ?>
                <header>
                  <h2 class="news-content__title">
                    <a href="<?php the_permalink(); ?>"><?php echo short_text( $title, 35, '...' ); ?></a>
                  </h2>
                  <div class="news-content__meta">
                    by <?php the_author(); ?> | <time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'j M, Y' ); ?></time>
                  </div>
                </header>
                <p><?php echo short_text( $excerpt, 250, '...' ); ?></p>
              </div>
              <!-- /.news-content -->
            </article>
            <!-- /.news -->
          </div>
          <?php endwhile; endif; ?>
          <?php wp_reset_postdata(); ?>

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

        <h2><?php _e( 'Đăng ký nhận tin', 'mmjvn-theme' ); ?></h2>
        <?php echo do_shortcode( '[contact-form-7 id="1656" html_class="form-newsletter" title="Frontpage subscribe"]' ) ?>     
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
