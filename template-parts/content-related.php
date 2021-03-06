<?php
/**
 * The template used for related post in single.
 *
 * @package mmjvn-theme
 */

?>

<?php 
global $post;
$cats = get_the_category( $post->ID );
$cat_list = array();

foreach ( $cats as $cat ) :
  $cat_list[] = $cat->term_id;
endforeach;

?> 

<?php 
$args = array(
  'posts_per_page' => 6,
  'category__in' => $cat_list,
  'post__not_in' => array( $post->ID )
);

$the_query = new WP_Query( $args );

?>

<?php if ( $the_query->have_posts() ) : ?>

<section class="related-post">
  <h2><?php _e( 'Bài viết liên quan', 'mmjvn-theme' ); ?></h2>
  <div class="related-post-nav">
    <a href="#" class="rp-prev"><i class="fa fa-chevron-circle-left"></i></a>
    <a href="#" class="rp-next"><i class="fa fa-chevron-circle-right"></i></a>
  </div>
  <!-- /.related-post-nav -->

  <div id="related-post-slider" class="owl-carousel">

    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <div class="item">

      <article class="related-post-item">
        <a href="<?php the_permalink(); ?>">
        <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail( 'medium' ); ?>
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri() . '/images/placeholder-img.jpg' ?>" alt="MMJ Viet Nam">
        <?php endif; ?>
        </a>
        <div class="rpc-publish-date"><span><?php the_time( 'j' ); ?></span> <?php the_time( 'M' ); ?></div>
        <div class="related-post-content">
          <?php 
          $title = get_the_title();
          $excerpt = get_the_excerpt();
          ?>
          <header>
            <h3 class="rpc__title">
              <a href="<?php the_permalink(); ?>"><?php echo short_text( $title, 35, '...' ); ?></a>
            </h3>
            <div class="rpc__meta">
              by <?php the_author(); ?>
            </div>
          </header>
          <p><?php echo short_text( $excerpt, 250, '...' ); ?></p>
        </div>
        <!-- /.news-content -->
      </article>
      <!-- /.related-post__item -->

    </div>
    <!-- /.item -->

    <?php endwhile; ?>

  </div>
  <!-- /#related-post-slider -->
</section>
<!-- /.related-post -->

<?php endif; ?>
<?php wp_reset_postdata(); ?>