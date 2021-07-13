<?php get_header(); ?>
<main id="primary" class="site-main-404">

	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<section class="error-404 not-found text-center">

					<div class="error-404-text">
						<header class="page-header">
							<h1 class="error-404-content">404</h1>
							<h1 class="page-title" style="padding: 0;"><?php esc_html_e('Hata! O sayfa bulunamıyor.', 'novena'); ?></h1>
						</header>

						<div class="page-content">
							<p>
								<?php esc_html_e('Bu konumda hiçbir şey bulunamadı gibi görünüyor. Aşağıdaki bağlantıdan Ana Sayfaya dönebilirsin.', 'novena'); ?>
							</p>
							<a href="<?php echo home_url('/'); ?>" class="btn-home">
								<?php esc_html_e('Ana Sayfa', 'novena') ?>
							</a>
						</div>
					</div>

				</section>

			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>