<?php
/**
 * Template part for displaying all posts.
 *
 * @package mmjvn-theme
 */

?>
     
<article class="blog-post clearfix">
	<?php if ( has_post_thumbnail() ) : ?>
  <a href="<?php the_permalink(); ?>" class="blog-post__featured-img">
    <?php the_post_thumbnail(); ?>
  </a>
	<?php else : ?>
	<hr>
	<?php endif; ?>
  <div class="blog-post__publish-time">
    <div>
      <span><?php the_time( 'j' ); ?></span><?php the_time( 'M, Y' ); ?>
    </div>
  </div>
  <div class="blog-post__content">
    <h3 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php get_template_part( 'template-parts/content', 'meta-data' ); ?>
    <p><?php the_excerpt(); ?></p>
  </div>
</article>
<!-- /.blog-post -->