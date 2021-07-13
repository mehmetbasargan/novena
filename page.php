<?php get_header(); ?>

<?php $images = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
<section class="page-title" style="background: url(<?php echo $images['0']; ?>);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block text-center">
					<span class="text-white">
						<?php echo the_title(); ?>
					</span>
					<h1 class="text-capitalize mb-5 text-lg">
						<?php echo the_title(); ?>
					</h1>
					<ul class="list-inline breadcumb-nav">
						<li class="list-inline-item">
							<a href="<?php echo home_url('/'); ?>" class="text-white">
								<?php esc_html_e('Ana Sayfa'); ?>
							</a>
						</li>
						<li class="list-inline-item">
							<span class="text-white"><i class="icofont-simple-right"></i></span>
						</li>
						<li class="list-inline-item">
							<span class="text-white-50"><?php echo the_title(); ?></span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="page mt-5">

	<main id="primary" class="site-main ">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php while (have_posts()) : the_post();
						get_template_part('template-parts/content', 'page');
					endwhile; ?>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</section>
<?php get_footer(); ?>