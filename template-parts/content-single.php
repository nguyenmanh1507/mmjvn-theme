<?php
/**
 * Template part for displaying single posts.
 *
 * @package mmjvn-theme
 */

?>

<article class="blog-post clearfix" role="main">
  <div class="blog-post__content blog-post__content--single">
  	<?php the_title( '<h3 class="blog-post-title blog-post-title--single">', '</h3>' ); ?>

    <p class="blog-info">by <?php the_author(); ?> | <?php echo the_time( 'j M, Y' ); ?></p>
    <?php get_template_part( 'template-parts/content', 'meta-data' ); ?>

    <?php the_content(); ?>

  </div>
</article>
<!-- /.blog-post -->


