<?php
/**
 * Template part for displaying the copyright text
 *
 * @package Galaxis
 */

?>

<p class="copyright text-center">
	<?php echo wp_kses( galaxis_copyright(), galaxis_site_info_allowed_tags() ); ?>
</p>
