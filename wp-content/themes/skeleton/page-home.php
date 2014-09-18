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
st_before_content($columns='');

   
$args = array(
  'taxonomy' => 'products-category',
  'orderby' => 'name',
  'order' => 'ASC',
  'hide_empty' => 0
  );
$categoriesList = get_categories($args);
$categories = array(	$categoriesList[1],
						$categoriesList[5],
						$categoriesList[4],
						$categoriesList[0],
						$categoriesList[2],
						$categoriesList[3] );
?>
</div><!-- end content -->
</div><!-- end wrap -->

<?php putRevSlider( "slider1" );?>
<div id="wrap" class="container">
	<div id="ca-container" class="ca-container">
		<div class="ca-wrapper">  
<?php $caItemCount=1; ?>          
<?php foreach($categories as $category): ?>

			<div class="ca-item ca-item-<?php echo $caItemCount; ?>">
				<div class="ca-item-main">
					<a href="<?php echo esc_attr(get_term_link($category, 'products-category') )?>"><?php echo s8_get_taxonomy_image($category, "ca-item"); ?></a>
					<h2 class="ca-product-title"><a href="<?php echo esc_attr(get_term_link($category, 'products-category') ) ?>" title="<?php echo sprintf( __( "View all posts in %s" ), $category->name ); ?>" rel="bookmark"><?php echo $category->name; ?></a></h2>
				</div>
			</div>
	<?php $caItemCount++;?>
<?php endforeach; // End the products-category loop. ?>
		</div>
	</div>  
<div class="sixteen columns">
	<div class="intro-mobile">
		<h2 class="intro-heading">Welcome To<br />Harry's Fresh Foods</h2>
		<p class="intro-content">We believe that the food you eat should be made with love &mdash; even if you don't have time to make it yourself. Fortunately, when you reach for one of our fresh artisan soups, entr&eacute;es, sauces, sides or desserts, rest assured that it was made from scratch with only the finest ingredients in a small, perfectly cooked batch.</p>
	</div>
<?php
st_after_content();
get_footer();
?>