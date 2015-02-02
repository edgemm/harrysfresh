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
 
  $backgroundImage = get_bloginfo('template_directory').'/images/bg-potatoprep.jpg'; ?>
<style>
body {	
	background: url('<?php echo $backgroundImage; ?>') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $backgroundImage; ?>', sizingMethod='scale');
-ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $backgroundImage; ?>', sizingMethod='scale')";
}/*

#post-12 {
  background: rgba(255,255,255,.75) url(<?php echo get_bloginfo('template_directory'); ?>/images/about-us-chef-background.png) bottom no-repeat;
  padding-bottom:440px;
}

#post-8 {
  background: rgba(255,255,255,.75) url(<?php echo get_bloginfo('template_directory'); ?>/images/our-history-background.png) bottom no-repeat;
  padding-bottom:800px;
}

#post-10 {
  background: rgba(255,255,255,.75) url(<?php echo get_bloginfo('template_directory'); ?>/images/our-values-background.png) bottom no-repeat;
  padding-bottom:590px;
}

#post-14 {
  background: rgba(255,255,255,.75) url(<?php echo get_bloginfo('template_directory'); ?>/images/sustainability-background.png) bottom no-repeat;
  padding-bottom:615px;
}

#post-16 {
  background: rgba(255,255,255,.75) url(<?php echo get_bloginfo('template_directory'); ?>/images/careers-background.png) bottom no-repeat;
  padding-bottom:635px;
}*/

</style>

<div class="fourteen columns offset-by-one">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="breadcrumbs ">
						<?php if ( !get_post_custom_values('about_us_above') ) {
							if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }
						}?>
                    </div> 
						<?php if ( get_post_custom_values('about_us_above') ) : ?>
							<h1 class="page-title">Passion and Pride</h1>
                          <h2 class="page-title">Served Daily</h2>
						<?php else: ?>
                        <h1 class="page-title"><?php the_title() ?></h1>
                        <?php endif;?>
						

					<div class="entry-content">
						<?php the_content(); ?>
                        <?php
							if (get_the_ID()==16)
							{
								$rows = get_field('career');
									if($rows)
									{
										foreach($rows as $row)
										{
												echo '<p style="text-align: center;"><strong>'. $row['career_title'].'</strong></p>
<p style="text-align: center;"><span class="news_box" style="text-align: center;"><a href="'. $row['career_file'].'">Learn more</a></span></p>';
											}
										}
							}
							else if (get_the_ID()==18)
							{
								$rows = get_field('press_releases');
									if($rows)
									{
										foreach($rows as $row)
										{
												echo '<a href="'. $row['file'].'" target="_blank"><img class="alignleft size-full wp-image-220" alt="pdf-icon" src="http://www.harrysfresh.com/wp-content/uploads/2013/10/pdf-icon.png" width="54" height="50" /></a>'. $row['date_of_release'].' - '. $row['title'].'<br /><br /><br /><br />';
											}
										}
							}
							?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->


<?php endwhile; // end of the loop. ?>

</div><!--end columns-->