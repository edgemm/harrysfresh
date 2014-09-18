<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage skeleton
 * @since skeleton 0.1
 */

get_header();
st_before_content($columns='sixteen');
get_template_part( 'loop', 'hff-product' );
st_after_content();
get_footer();
?>