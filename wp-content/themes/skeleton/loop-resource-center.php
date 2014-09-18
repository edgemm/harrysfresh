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
 
  $backgroundImage = get_bloginfo('template_directory').'/images/resource-center-background.jpg'; ?>
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

#rc-table {
	display:table;
	width:100%;
}

#rc-buttons {
	display:table-row;
	}

#rc-buttons a {
	display:table-cell;
	color:#fefdf5;
	height:35px;
	width:156px;
	margin-left:auto;
	margin-right:auto;
	text-decoration:none;
	text-align:center;
	vertical-align:middle;
	font-size:.8em;
	position:relative;
	
/*	-moz-box-shadow: 3px 3px 5px 1px rgba(0,0,0,.38);
	-webkit-box-shadow: 3px 3px 5px 1px rgba(0,0,0,.38);
	box-shadow: 3px 3px 5px 1px rgba(0,0,0,.38);*/
}

.page-id-270 .entry-content {
	padding:0;
}

#post-270 {
	padding:0;
}

.recipe-container {
	width:814px;
}

.recipe {
	background:rgba(255,255,255,.75);
	overflow:auto;
	margin-bottom:10px;
	padding-top:20px;
	padding-left:20px;
	
	font-size:.9em;
	
	-moz-box-shadow: 3px 0px 5px 1px rgba(0,0,0,.38);
	-webkit-box-shadow: 3px 3px 5px 1px rgba(0,0,0,.38);
	box-shadow: 3px 3px 5px 1px rgba(0,0,0,.38);
}
.recipe p {
	color:#a82200;
	font-weight:bold;
	margin-bottom:5px;
}

.recipe ul {
	color:#561100;
}

/*#rc-buttons a:before {
	background: none;
}
#rc-buttons a:hover:before {
	content: "";
	display: block;
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	max-width:156px;
	background: rgba(0,0,0, 0.2);
	-moz-transition: background .1s linear;
	-webkit-transition: background .1s linear;
	-o-transition: background .1s linear;
	transition: background .1s linear;
}*/
#downloadable-pos {
	background:url(<?php echo get_bloginfo('template_directory');?>/images/downloadable-pos-button.png) center center no-repeat;
}

#how-to-prepare {
	background:url(<?php echo get_bloginfo('template_directory');?>/images/how-to-prepare-button.png) center center no-repeat;
}

#profitability-calculator {
	background:url(<?php echo get_bloginfo('template_directory');?>/images/profitability-calculator-button.png) center center no-repeat;
}

#recipe-suggestions {
	background:url(<?php echo get_bloginfo('template_directory');?>/images/recipe-suggestions-button.png) center center no-repeat;
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
							<h1 class="page-title">Ingredients</h1>
                          <h2 class="page-title">For Success</h2>
						<?php else: ?>
                        <h1 class="page-title"><?php the_title() ?></h1>
                        <?php endif;?>
						

					<div class="entry-content">
						<?php the_content(); ?>
						
                        <?php if(get_post_custom_values('custom_title_above')): ?>
                        <div id="rc-table">
                        <div id="rc-buttons">
                            <a id="downloadable-pos" class="btn-resources" href="marketing-materials">Marketing Materials</a>
                            <!--<a id="how-to-prepare" href="how-to-prepare">How to Prepare</a>-->
                            <a id="recipe-suggestions" class="btn-resources" href="recipe-suggestions">Recipe Suggestions</a>
                            <a id="profitability-calculator" class="btn-resources" href="profitability-calculator">Profitability Calculator</a>
                         </div>
                       </div>
                       <?php endif;?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

<?php endwhile; // end of the loop. ?>

</div><!--end columns-->