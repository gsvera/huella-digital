<?php
/**
 * Template part for displaying the main menu
 *
 * @package Galaxis
 */

?>

<div class="site-menu-content<?php echo esc_attr( galaxis_sticky_main_menu_class() ); ?>">
	<div class="site-menu-content__wrap wrapper">
		<div class="site-branding">
		<a href="https://huella-digital.mx/" class="custom-logo-link" rel="home" aria-current="page"><img width="1232" height="280" alt="Huella Digital" data-srcset="https://huella-digital.mx/blog/wp-content/uploads/2020/08/logo2.png 1232w, https://huella-digital.mx/blog/wp-content/uploads/2020/08/logo2-300x68.png 300w, https://huella-digital.mx/blog/wp-content/uploads/2020/08/logo2-1024x233.png 1024w, https://huella-digital.mx/blog/wp-content/uploads/2020/08/logo2-768x175.png 768w" data-src="https://huella-digital.mx/blog/wp-content/uploads/2020/08/logo2.png" data-sizes="(max-width: 1232px) 100vw, 1232px" class="custom-logo ls-is-cached lazyloaded" src="https://huella-digital.mx/blog/wp-content/uploads/2020/08/logo2.png" sizes="(max-width: 1232px) 100vw, 1232px" srcset="https://huella-digital.mx/blog/wp-content/uploads/2020/08/logo2.png 1232w, https://huella-digital.mx/blog/wp-content/uploads/2020/08/logo2-300x68.png 300w, https://huella-digital.mx/blog/wp-content/uploads/2020/08/logo2-1024x233.png 1024w, https://huella-digital.mx/blog/wp-content/uploads/2020/08/logo2-768x175.png 768w"><noscript><img width="1232" height="280" src="https://huella-digital.mx/blog/wp-content/uploads/2020/08/logo2.png" class="custom-logo" alt="Huella Digital" srcset="https://huella-digital.mx/blog/wp-content/uploads/2020/08/logo2.png 1232w, https://huella-digital.mx/blog/wp-content/uploads/2020/08/logo2-300x68.png 300w, https://huella-digital.mx/blog/wp-content/uploads/2020/08/logo2-1024x233.png 1024w, https://huella-digital.mx/blog/wp-content/uploads/2020/08/logo2-768x175.png 768w" sizes="(max-width: 1232px) 100vw, 1232px" /></noscript></a>
			
			<!-- .site-branding__title-wrap -->
		</div><!-- .site-branding -->

		<?php if ( has_nav_menu( 'menu-1' ) || class_exists( 'WooCommerce' ) ) { ?>
		<nav id="site-navigation" class="main-navigation">

			<?php if ( has_nav_menu( 'menu-1' ) ) { ?>
				<button type="button" class="menu-button menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<span class="screen-reader-text"><?php esc_html_e( 'Primary Menu', 'galaxis' ); ?></span>
					<span class="main-navigation__icon">
						<span class="main-navigation__icon__middle"></span>
					</span>
				</button>
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'menu-1',
						'depth'           => 3,
						'menu_id'         => 'primary-menu',
						'container_class' => 'primary-menu-container',
						'walker'          => new Galaxis_Primary_Walker_Nav_Menu(),
					)
				);
				?>
			<?php } ?>

			<?php if ( class_exists( 'WooCommerce' ) ) { ?>
				<div class="site-cart-account">
					<div class="site-cart">
						<?php galaxis_woocommerce_header_cart(); ?>
					</div><!-- .site-cart -->

					<ul class="site-account-links">
						<?php galaxis_woocommerce_account_links(); ?>
					</ul><!-- .site-account-links -->
				</div><!-- .site-cart-account -->
			<?php } ?>

		</nav><!-- #site-navigation -->
		<?php } ?>
	</div><!-- .site-menu-content__wrap -->
</div><!-- .site-menu-content -->
