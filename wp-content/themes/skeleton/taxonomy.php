<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage skeleton
 * @since skeleton 0.1
 */

get_header();
st_before_content($columns='');
?>
<div class="breadcrumbs">
<?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
                        </div>
<div id="archive-title">
	<h1><?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo $term->name; ?></h1>
	<p><?php $taxonomy = get_query_var( 'taxonomy' ); echo term_description( $term->term_id, $taxonomy ) ?></p>
</div>
<div class="breadcrumbs">
						
</div>
<?php
get_template_part( 'loop', 'products' );
st_after_content();
get_footer();
?>