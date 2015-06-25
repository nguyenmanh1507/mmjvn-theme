<?php
/**
 * The template for displaying search form.
 *
 * @package mmjvn-theme
 */
?>

<form action="<?php echo home_url( '/' ); ?>" method="get" class="search-form" role="search">
  <input type="search" name="s" class="search-form__field" placeholder="<?php echo esc_attr_x( 'Tìm kiếm...', 'mmjvn-theme' ) ?>" value="<?php get_search_query(); ?>" required>
  <button type="submit" class="search-form__btn"><i class="fa fa-search"></i></button>
  <span class="search-form__icon"><i class="fa fa-search"></i></span>
</form>