</div><!--end wrap-->

<?php st_before_footer();?>

<div class="sixteen columns">
	    <div class="four columns">
        <strong><a href="/about-us">About Us</a></strong>
        <?php 
			$args = array(
				'menu'    => 'HFF Menu',
				'submenu' => 'About Us',
			);
		
			wp_nav_menu( $args );
		?>
    </div>
    <div class="four columns alpha">
        <strong><a href="/products">Products</a></strong>
        <?php 
			$args = array(
				'menu'    => 'HFF Menu',
				'submenu' => 'Products',
			);
		
			wp_nav_menu( $args );
		?>
    </div>

    <div class="three columns">
        <strong><a href="/resource-center">Resource Center</a></strong>
        <?php 
			$args = array(
				'menu'    => 'HFF Menu',
				'submenu' => 'Resource Center',
			);
		
			wp_nav_menu( $args );
		?>
 
        <strong><a class="menu-header-omega" href="/co-pack">Co-pack</a></strong>
	<br />
	<a class="menu-item" href="/co-pack">Custom Products</a>
    </div>
    <div class="four columns offset-by-one omega">
        <span class="address">
        	<strong><a href="/contact">Harry's Fresh Foods</a></strong>
<br />
            <a href="https://goo.gl/maps/La5wy" target="_blank">17711 NE Riverside Parkway
            <br />
            Portland, OR 97230</a>
        </span>
    </div>
    
</div>
<div id="company-links" class="sixteen columns">
	    <img class="scale-with-grid round" src="/wp-content/themes/skeleton/images/harrys-logo.png" alt="Harry's Fresh Foods">
	<a href="http://www.cuizina.com"><img src="<?php echo get_bloginfo('template_url'); ?>/images/cuizina.png" /></a><br />
    &copy; <?php echo date( 'Y' ); ?> Harry's Fresh Foods, All rights reserved.
</div>

<?php wp_footer();?>

<?php st_after_footer();?>

</body>
</html>