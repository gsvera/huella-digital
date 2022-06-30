<?php
/**
 * Template part for displaying the footer text and menu.
 *
 * @package Galaxis
 */

?>

<section class="site-footer__text">
	<div class="wrapper">
		<div class="columns columns--gutters-large v-center-mdl">

			<div class="columns__md-12 columns__md-12--larger">
				<?php get_template_part( 'template-parts/footer/copyright' ); ?>
			</div>

			<?php if ( has_nav_menu( 'footer' ) ) { ?>
			<div class="columns__md-12 columns__md-12--smaller">
				<nav class="footer-menu">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'depth'          => 1,
							'menu_id'        => 'footer-menu',
						)
					);
					?>
				</nav>
			</div>
			<?php } ?>

		</div>
	</div>
</section>
