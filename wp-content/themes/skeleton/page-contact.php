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

	 $backgroundImage = get_bloginfo('template_directory').'/images/contact-background.jpg'; 
?>
    
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

h1.page-title-med {
	font-size:4em;
}

.entry-content {
	width:814px;
}

.contact-form {
	background-color:#2e1b12;	
	padding:10px;
	color:#ffffff;
}

#post-119 {
	padding:0;
}

input {
	width:100%;
}

input[type="submit"], input[type="checkbox"] {
	width:auto;
}

form p {
	padding-left:10px;
	padding-right:10px;
}

.entry-content {
	margin-top:20px;
}

.first-copy {
 margin-left:auto;
 margin-right:auto;
 max-width:500px;
 margin-top:10px;
 margin-bottom:20px;
}

.five.columns {
	margin-left:10px;
}
</style>

<div class="fourteen columns offset-by-one">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						
							<h1 class="page-title page-title-med">Contact Info</h1>
					<div class="entry-content">
                    	<div class="container">
                        	<div class="fourteen columns">
                            
								<?php the_content(); ?>
                          </div>
                      </div>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

<?php endwhile; // end of the loop. ?>

</div><!--end columns-->
 
<?php
st_after_content();
get_footer();
?>