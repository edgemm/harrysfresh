<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-page.php.
 *
 * @package Skeleton WordPress Theme Framework
 * @subpackage skeleton
 * @author Simple Themes - www.simplethemes.com
 */
 
  $backgroundImage = get_bloginfo('template_directory').'/images/custom-background.jpg'; ?>
<style>
body {	
	background: url('<?php echo $backgroundImage; ?>') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $backgroundImage; ?>', sizingMethod='scale');
-ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $backgroundImage; ?>', sizingMethod='scale')";
}
</style>

<div class="fourteen columns offset-by-one">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="breadcrumbs">
						<?php if ( !get_post_custom_values('custom_title_above') ) {
							if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }
						}?>
                    </div> 
						<?php if ( get_post_custom_values('custom_title_above') ) : ?>
							<h1 class="page-title">Your Request</h1>
                          <h2 class="page-title">Made to Order</h2>
						<?php else: ?>
                        <h1 class="page-title"><?php the_title() ?></h1>
                        <?php endif;?>
						

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'skeleton' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

<?php endwhile; // end of the loop. ?>

</div><!--end columns-->