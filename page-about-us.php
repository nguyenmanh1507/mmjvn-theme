<?php
/**
 * Template Name: About Us Page
 * The template for displaying about us page.
 *
 * This is the template that displays about us page.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package mmjvn-theme
 */

get_header(); ?>

  <!-- BREADCRUMB
  ================================================== -->
  
  <div class="breadcrumb">
    <div class="row">
      <div class="small-12 columns">
        
        <ul class="bc">
          <li class="bc__item"><a href="#">Home</a></li>
          <li class="bc__item">About Us</li>
        </ul>
        <!-- /.bc -->

      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.breadcrumb -->
  
  <!-- END BREADCRUMB
  ================================================== -->

  <!-- MAIN CONTENT
  ================================================== -->

  <section class="about-us">

    <h2 class="show-for-sr">About Us Section</h2>
    
    <div class="row">
      <div class="small-12 medium-5 medium-push-7 columns">
        
        <div class="about-us__intro">
          <?php 
          if ( have_posts() ) : while ( have_posts() ) : the_post();
          	the_content();
          	endwhile;
          else : 
          	echo 'No content';
          endif;
          ?>
        </div>
        <!-- /.about-us__intro -->
  
      </div>
      <div class="small-12 medium-7 medium-pull-5 columns">
        
        <div class="about-us__slider flexslider">
          <ul class="slides">
            <?php 
            if ( function_exists( 'ot_get_option' ) ) :
						  $slides = ot_get_option( 'opt_au_slide' );
							foreach ( $slides as $slide ) :
						?>

						<li><img src="<?php echo $slide['opt_au_slide_img']; ?>" alt="slide image"></li>

						<?php
							endforeach;
						endif;
            ?>
          </ul>
        </div>
        <!-- /.about-us__slider -->

      </div>
    </div>
    <!-- /.row -->

  </section>
  <!-- /.about-us -->
  
  <div class="polygon-bg padding-big">
    <section class="ourteam">
      
      <h2><?php _e( 'Meet Our Amazing Team!', 'mmjvn-theme' ); ?></h2>

      <div class="timeline-wrap">
        <div class="row">
            
          <ul class="timeline no-bullet">
          	<?php 
          	if ( function_exists('ot_get_option') ) :
          		$timelines = ot_get_option( 'opt_au_team' );
          		foreach ( $timelines as $timeline ) :
          	?>

            <li class="timeline__item clearfix">
              <figure class="member">
                <div class="member__avatar" >
                  <img src="<?php echo $timeline['opt_au_team_avatar']; ?>" alt="member avatar">
                </div>
                <figcaption>
                  <h3 class="member__name"><?php echo $timeline['opt_au_team_name'] ?></h3>
                  <!-- /.member__name -->
                  <small class="member__role"><?php echo $timeline['opt_au_team_role'] ?></small>
                  <p class="member__descr"><?php echo $timeline['opt_au_team_desc'] ?></p>
                  <a href="<?php echo get_permalink( $timeline['opt_au_team_link'] ); ?>" class="button radius"><?php _e( 'Chi tiết', 'mmjvn-theme' ); ?></a>
                </figcaption>
              </figure>
              <!-- /.member -->
            </li>
            <!-- /.timeline__item -->

            <?php 
            	endforeach;
            endif;
            ?>

            <?php 
          	if ( function_exists('ot_get_option') ) :
          		$timelines = ot_get_option( 'opt_au_you' );
          	?>
            <li class="timeline__item clearfix">
              <?php echo $timelines; ?>
            </li>
            <!-- /.timeline__item -->

          	<?php endif; ?>
          </ul>
          <!-- /.timeline -->

        </div>
        <!-- /.row -->
        <div class="timeline-column"></div>
        <!-- /.timeline__column -->
      </div>
      <!-- /.timeline -->
			<?php 
			if ( function_exists('ot_get_option') ) :
          		$more_link = ot_get_option( 'opt_au_more_link' );
			?>
      <a href="<?php echo get_category_link( $more_link ); ?>" class="button button--black"><?php _e( 'More', 'mmjvn-theme' ); ?></a>
    	<?php endif; ?>

    </section>
    <!-- /.timeline -->
  </div>
  <!-- /.polygon-bg -->
  
  <!-- END MAIN CONTENT
  ================================================== -->


<?php get_footer(); ?>