<footer class="footer section gray-bg site-footer" id="colophon">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">

					<div class="logo mb-4">
						<?php
						$logo_image_id = get_theme_mod('custom_logo');
						echo wp_get_attachment_image($logo_image_id, 'full');
						?>
					</div>
					<p>
						<?php echo get_theme_mod('about_text'); ?>
					</p>

					<ul class="list-inline footer-socials mt-4">
						<?php $settings = get_theme_mod('social_repeater_setting'); ?>
						<?php foreach ($settings as $setting) : ?>
							<li class="list-inline-item">
								<a href="<?php echo $setting['social_link']; ?>" target="_blank">
									<i class="<?php echo $setting['social_icon']; ?>"></i>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>

				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">
						<?php esc_html_e('Sayfalar', 'novena'); ?>
					</h4>
					<div class="divider mb-4"></div>

					<?php $footer_menu1_args = array(
						'menu' => 'footer-menu-1',
						'container' => 'ul',
						'menu_class' => 'list-unstyled footer-menu lh-35'
					);
					wp_nav_menu($footer_menu1_args); ?>

				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">
						<?php esc_html_e('Destek', 'novena'); ?>
					</h4>
					<div class="divider mb-4"></div>

					<?php $footer_menu2_args = array(
						'menu' => 'footer-menu-2',
						'container' => 'ul',
						'menu_class' => 'list-unstyled footer-menu lh-35'
					);
					wp_nav_menu($footer_menu2_args); ?>

				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget widget-contact mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">
						<?php esc_html_e('İletişim', 'novena') ?>
					</h4>
					<div class="divider mb-4"></div>

					<div class="footer-contact-block mb-4">
						<div class="icon d-flex align-items-center">
							<i class="icofont-email mr-3"></i>
							<span class="h6 mb-0">
								<?php echo get_theme_mod('contact_text'); ?>
							</span>
						</div>
						<h4 class="mt-2">
							<a href="mailto:<?php echo get_theme_mod('contact_email'); ?>">
								<?php echo get_theme_mod('contact_email'); ?>
							</a>
						</h4>
					</div>

					<div class="footer-contact-block">
						<div class="icon d-flex align-items-center">
							<i class="icofont-support mr-3"></i>
							<span class="h6 mb-0">
								<?php echo get_theme_mod('contact_date'); ?>
							</span>
						</div>
						<h4 class="mt-2">
							<a href="tel:<?php echo get_theme_mod('contact_phone'); ?>">
								<?php echo get_theme_mod('contact_phone'); ?>
							</a>
						</h4>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-btm py-4 mt-5">
			<div class="row align-items-center justify-content-between text-center">
				<div class="col-lg-12">
					<div class="copyright">
						Copyright &copy; <?php echo get_the_date('Y'); ?> Reserved to <span class="text-color">Novena</span> by
						<a href="https://themefisher.com/" target="_blank">Themefisher</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

<script>
	var mixer = mixitup(".portfolio-gallery");
</script>

</body>

</html>