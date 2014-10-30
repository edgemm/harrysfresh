<?php
/* Template Name: Page - Print */

get_header( 'print' );

$image = $_GET['i'];

?>

<div class="print-content">
<?php
	echo wp_get_attachment_image( $image, 'full' );
?>
</div> <!-- end .print-content -->

</body>
</html>