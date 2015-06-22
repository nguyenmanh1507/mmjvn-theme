<div class="meta-data">
  <?php 
  $cats = get_the_category();
  $tags = get_the_tags();
  ?>
  <ul>
    <li>
    <i class="fa fa-folder-open"></i> 
    <?php foreach ( $cats as $cat ) : ?>
      <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>"><?php echo $cat->name; ?></a>,
    <?php endforeach; ?>
    </li>
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
<!-- /.meta-data -->