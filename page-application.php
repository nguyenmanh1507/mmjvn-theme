<?php
/**
 * Template Name: Application Form Page
 * The template for displaying application form.
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

  <div class="polygon-bg padding-big">
    <div class="row">
      <div id="select-position" class="small-12 columns" data-pos="<?php echo isset( $_GET['pos'] )? $_GET['pos'] : ''; ?>">

        <?php the_content(); ?>

      </div>
    </div>
    <!-- /.row -->
  </div>

  <!-- END MAIN CONTENT
  ================================================== -->



<?php get_footer(); ?>
