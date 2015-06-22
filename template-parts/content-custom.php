<?php
/**
 * Template part for displaying category post.
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
    <div class="meta-data">
    	<?php 
      if ( is_category() ) :
      	$cat = get_category( get_query_var('cat') );
      	$cat_link = get_category_link( $cat->term_id );
      endif;
      
    	$tags = get_the_tags();
    	?>
 
      <ul>
        <?php if ( $cat ) : ?>
        <li><i class="fa fa-folder-open"></i> <a href="<?php echo esc_url( $cat_link ); ?>"><?php echo $cat->name; ?></a></li>
        <?php endif; ?>
        <?php if ( $tags ) : ?>
        <li>
        	<i class="fa fa-tags"></i> 
        	<?php foreach ( $tags as $tag ) : ?>
        	<a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>"><?php echo $tag->name; ?></a>,
        	<?php endforeach; ?>
        </li>
      	<?php endif; ?>
      </ul>
    </div>
    <p><?php the_excerpt(); ?></p>
  </div>
</article>
<!-- /.blog-post -->