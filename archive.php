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

<section class="section blog-wrap">
	<div class="container">
		<div class="row">

			<div class="col-lg-8">
				<div class="row">



					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>

							<div class="col-lg-12 col-md-12 mb-5">
								<div class="blog-item">

									<div class="blog-thumb">
										<?php if (has_post_thumbnail()) : the_post_thumbnail('blog_image', array('class' => 'img-fluid'));
										endif; ?>
									</div>

									<div class="blog-item-content">

										<div class="blog-item-meta mb-3 mt-4">

											<span class="text-muted text-capitalize mr-3">
												<i class="icofont-comment mr-2"></i>
												<?php comments_number(); ?>
												<?php esc_html_e('Yorum', 'novena') ?>
											</span>

											<span class="text-black text-capitalize mr-3">
												<i class="icofont-calendar mr-1"></i>
												<?php echo get_the_date('d / M / Y'); ?>
											</span>

											<span class="text-black text-capitalize mr-3">
												<i class="icofont-tags mr-1"></i>
												<?php echo the_category(', ', ' '); ?>
											</span>

										</div>

										<h2 class="mt-3 mb-3">
											<a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
										</h2>

										<p class="mb-4"><?php the_excerpt(); ?></p>

										<a href="<?php the_permalink(); ?>" class="btn btn-main btn-icon btn-round-full">
											<?php esc_html_e('Devamı', 'novena') ?>
											<i class="icofont-simple-right ml-2"></i>
										</a>
									</div>
								</div>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
					<?php get_sidebar(); ?>
				</div>
			</div>

		</div>
	</div>
	<?php get_footer(); ?>