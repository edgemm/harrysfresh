<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package Skeleton WordPress Theme Framework
 * @subpackage skeleton
 * @author Simple Themes - www.simplethemes.com
 */

?>

<?php
	/* Start the Loop.
	 *
	 * In Skeleton we use the same loop in multiple contexts.
	 * It is broken into three main parts: when we're displaying
	 * posts that are in the gallery category, when we're displaying
	 * posts in the asides category, and finally all other posts.
	 *
	 * Additionally, we sometimes check for whether we are on an
	 * archive page, a search page, etc., allowing for small differences
	 * in the loop on each template without actually duplicating
	 * the rest of the loop that is shared.
	 *
	 * Without further ado, the loop:
	 */ ?>
<?php //try to pull in term images
/*	$terms = apply_filters( 'taxonomy-images-get-terms', '' );
if ( ! empty( $terms ) ) {
    print '<ul>';
    foreach( (array) $terms as $term ) {
        print '<li><a href="' . esc_url( get_term_link( $term, $term->taxonomy ) ) . '">' . wp_get_attachment_image( $term->image_id, 'detail' ) . '</li>';
    }
	
    print '</ul>';
}else print '<p>Taxonomy Images not found</p>';*/
?>

     <?php $postCount = 1; $specialtyCount = 1;$brandCount = 1;?>
<?php     
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
						$categoriesList[2],
						$categoriesList[0],
						$categoriesList[3] );

$specialty_args = array(
  'taxonomy' => 'products-specialty',
  'orderby' => 'name',
  'order' => 'ASC',
  'hide_empty' => 0
  );
$specialtiesList = get_categories($specialty_args);
$specialties = array( $specialtiesList[0],
			$specialtiesList[1],
			$specialtiesList[3],
			$specialtiesList[2] );
			
$brand_args = array(
  'taxonomy' => 'special-brand',
  'orderby' => 'name',
  'order' => 'ASC',
  'hide_empty' => 0
  );
$brands = get_categories($brand_args);
?>

<div id="archive-title">
			<h1>Products</h1>
            <p>Though they run the gamut from trendy to traditional, all of our scratch-made dishes have one thing in common — they’re cooked in small batches by our team of talented chefs and prepared with only the best, freshest ingredients. We put our hearts into every kettle-cooked item in the hopes that you’ll always find something to love.</p>
            
</div>

<?php foreach($categories as $category): ?>


	<div class="product-item product-item-<?php echo $postCount; ?> one-third column<?php if ($postCount % 3 == 1): echo ' alpha'; elseif ($postCount%3 == 0): echo ' omega';endif; ?>" <?php post_class(); ?>>
        <a href="<?php echo esc_attr(get_term_link($category, 'products-category') )?>" title="<?php echo sprintf( __( "View all posts in %s" ), $category->name ); ?>" rel="bookmark">
			<h2 class="product-title">
            	<?php echo $category->name;?>
           </h2>
			<?php echo s8_get_taxonomy_image($category, 'medium'); ?>
       </a>
			

	</div><!-- #post-## -->

	<?php $postCount++;?>
<?php endforeach; // End the products-category loop. ?>

<!--start specialties--> 
<?php foreach($specialties as $specialty): ?>


	<div class="product-item specialty-item-<?php echo $specialtyCount; ?> one-third column<?php if ($postCount % 3 == 1): echo ' alpha'; elseif ($postCount%3 == 0): echo ' omega';endif; ?>" <?php post_class(); ?>>
        <a href="<?php echo esc_attr(get_term_link($specialty, 'products-specialty') )?>" title="<?php echo sprintf( __( "View all posts in %s" ), $specialty->name ); ?>" rel="bookmark">
			<h2 class="product-title">
            	<?php echo $specialty->name;?>
           </h2>
			<?php echo s8_get_taxonomy_image($specialty, 'medium'); ?>
       </a>
			

	</div><!-- #post-## -->

	<?php $specialtyCount++;?>
<?php $postCount++;?>
<?php endforeach; // End the products-category loop. ?>


<!--start brands--> 
<?php foreach($brands as $brand): ?>


	<div class="product-item brand-item-<?php echo $brandCount; ?> one-third column<?php if ($postCount % 3 == 1): echo ' alpha'; elseif ($postCount%3 == 0): echo ' omega';endif; ?>" <?php post_class(); ?>>
        <a href="<?php echo esc_attr(get_term_link($brand, 'special-brand') )?>" title="<?php echo sprintf( __( "View all posts in %s" ), $brand->name ); ?>" rel="bookmark">
			<h2 class="product-title">
            	<?php echo $brand->name;?>
           </h2>
			<?php echo s8_get_taxonomy_image($brand, 'medium'); ?>
       </a>
			

	</div><!-- #post-## -->

	<?php $brandCount++;?>
<?php $postCount++;?>
<?php endforeach; // End the products-category loop. ?>