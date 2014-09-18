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

h1.page-title {
	margin-top:20px;
}

.page-id-270 .entry-content {
	padding:0;
	padding-top:20px;
}

#post-270 {
	padding:0;
}

.recipe-container {
	max-width:814px;
}

.recipe-category {
	padding-left:20px;
	padding-right:20px;
}

.recipe-category h2 {
	font-weight:bold;
}

.recipe {
	background:rgba(255,255,255,.75);
	overflow:auto;
	margin-bottom:10px;
	padding:20px;
	padding-left:10px;
	
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
						
       						   <div class="recipe-category">
                               <h2>Soups</h2>
                               <p>There’s more to our delectable soups than you might think. Add some flair with choice toppings or create an entirely new dish with these flavorful ideas from our chefs.</p>
                            </div>
                            <div class="container recipe-container">
                                <div class="recipe">
                                    <div class="six columns">
                                        <img src="<?php echo get_bloginfo('template_directory');?>/images/soups-recipes/SavoryChili.jpg" width="350" />
                                    </div>
                                    <div class="six columns">
                                        <p>Dad’s Bathtub Savory Chili with Beans</p>
                                        <ul class="disc">
                                            <li>As a Topping: Pour over potatoes, burgers or nachos.</li>
                                            <li>As a Dip: Add cheese to make a chili con carne dip</li>
                                            <li>Make it Your Own: Incorporate hot sauce and top with shredded cheese and chopped onions for an added kick.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="recipe">
                                        <div class="six columns">
                                        <img src="<?php echo get_bloginfo('template_directory');?>/images/soups-recipes/FrenchOnion.jpg" width="350" />
                                    </div>
                                    <div class="six columns">
                                        <p>French Onion Soup</p>
                                        <ul class="disc">
                                            <li>For Braising: Braise boneless short ribs or saute beef tips.</li>
                                            <li>As a Sauce: Deglaze with French Onion for a instant pan sauce.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="recipe">
                                        <div class="six columns">
                                        
                                        <img src="<?php echo get_bloginfo('template_directory');?>/images/soups-recipes/ArtichokeBisque.jpg" width="350" />
                                    </div>
                                    <div class="six columns">
                                   		<p>Heart of Artichoke Bisque</p>
                                        <ul class="disc">
                                            <li>For Pasta: Reconstitute on the thick side for pasta sauce.</li>
                                            <li>Over Protein: Reduce with heavy cream and pour over chicken breast.</li>
                                            <li>For Dipping: Add canned artichokes and bake until golden and bubbly for a great Artichoke Spinach Dip</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="recipe">
                                        <div class="six columns">
                                        <img src="<?php echo get_bloginfo('template_directory');?>/images/soups-recipes/MushroomBrie.jpg" width="350" />
                                    </div>
                                    <div class="six columns">
                                        <p>Wild Mushroom &amp; Brie</p>
                                        <ul class="disc">
                                            <li>Over Protein: Deglaze pan, add parmesan and pour over chicken breast.</li>
                                            <li>For Pasta: Puree and pour over your favorite pasta for a savory dish.</li>
                                            <li>Brand-New Dish: Add chicken and rice for a new twist on traditional casserole.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                   
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

<?php endwhile; // end of the loop. ?>

</div><!--end columns-->