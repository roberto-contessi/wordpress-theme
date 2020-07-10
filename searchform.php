<?php
/**
 * The template for displaying the search form.
 *
 * @package WordPress
 * @subpackage Rob_Theme
 * @since 1.0.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
<label>
  <input type="search" class="search-field" placeholder="Cerca nel sito…" value="" name="s" title="Cerca:" />
</label>
<input type="submit" class="btn btn-primary text-uppercase rounded-0 mt-5 mb-5 bnt-search" value="Cerca" />
</form>