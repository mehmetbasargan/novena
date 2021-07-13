<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e('Hiçbirşey Bulunamadı', 'novena'); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if (is_home() && current_user_can('publish_posts')) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'novena'),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url(admin_url('post-new.php'))
			);

		elseif (is_search()) :
		?>

			<p><?php esc_html_e('Üzgünüz, ancak hiçbir şey arama terimlerinizle eşleşmedi. Lütfen farklı anahtar kelimelerle tekrar deneyin.', 'novena'); ?></p>
		<?php


		else :
		?>

			<p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'novena'); ?></p>
		<?php


		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->