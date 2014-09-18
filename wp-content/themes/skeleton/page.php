<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package Skeleton WordPress Theme Framework
 * @subpackage skeleton
 * @author Simple Themes - www.simplethemes.com
 */
// You can override via functions.php conditionals or define:
// $columns = 'four';

get_header();
if ( get_post_custom_values('about-us') )
	get_template_part( 'loop', 'about-us' );
else if ( get_post_custom_values('resource-center') )
	get_template_part( 'loop', 'resource-center' );
else
	get_template_part( 'loop', 'page' );
st_after_content();
get_footer();
?>