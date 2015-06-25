<?php
/**
 * Template Name: Recruitment Page
 * The template for displaying recruitment page.
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
  <div class="row show-for-medium-up">
    <div class="small-11 small-offset-1 columns">
      <div class="recruitment-intro padding-big">
      <?php 
      if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
      endwhile;
        else : 
          echo 'no post';
      endif;
      ?>
      </div>
      <!-- /.recruitment-intro -->
    </div>
  </div>
  <!-- /.row -->
  
  <div class="polygon-bg padding-big">

    <section class="recruitment">

      <div class="row">
        <div class="medium-6 medium-centered columns text-center">
          <?php 
          if ( function_exists( 'ot_get_option' ) ) $rc_intro = ot_get_option( 'rc_intro' );
          echo $rc_intro;
          ?>
        </div>
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="small-12 columns">
          
          <ul class="position-list">

            <?php 
            $args = array(
            		'category_name' => 'tuyen-dung',
                'posts_per_page' => 12
            	);

            $the_query = new WP_Query( $args );

            if ( $the_query->have_posts() ) : 
            	while ( $the_query->have_posts() ) : 
            		$the_query->the_post();
            ?>
						<li>
              <div class="position <?php echo ( get_field( 'rec_available' ) ) ? 'is-available' : ''; ?>">
                <h3 class="position__name"><?php the_title() ?></h3>
                <div class="position__status"></div>
                <a href="<?php echo get_permalink(); ?>" class="button button--black">Detail</a>
              </div>
              <!-- /.position -->
            </li>
            <?php 
            	endwhile;
            else :
            	echo 'No post';
            endif;

            wp_reset_postdata();
            ?>
          </ul>

        </div>
      </div>
      <!-- /.row -->

    </section>
    <!-- /.recruitment -->

  </div>
  <!-- /.polygon-bg -->

  <!-- END MAIN CONTENT
  ================================================== -->



<?php get_footer(); ?>