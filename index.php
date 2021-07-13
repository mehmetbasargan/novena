<?php get_header(); ?>

<?php
$blog_page = get_option('page_for_posts');
$image = get_post_thumbnail_id($blog_page);
$image = wp_get_attachment_image_src($image, 'full');
?>

<section class="page-title" style="background: url(<?php echo $image['0']; ?>);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block text-center">
					<span class="text-white">
						<?php echo get_the_title($blog_page); ?>
					</span>
					<h1 class="text-capitalize mb-5 text-lg">
						<?php echo get_the_title($blog_page); ?>
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
							<span class="text-white-50"><?php echo get_the_title($blog_page); ?></span>
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

					<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array('posts_per_page' => 2, 'paged' => $paged);
					query_posts($args); ?>
					<!-- the loop -->
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

					<?php else : ?>
						<p><?php esc_html_e('Üzgünüz, kriterlerinize uygun gönderi yok.'); ?></p>
					<?php endif;
					wp_reset_postdata(); ?>

				</div>
			</div>

			<div class="col-lg-4">
				<div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
					<?php get_sidebar(); ?>
				</div>
			</div>

		</div>

		<div class="row">
			<div class="col-lg-8">
				<nav class="pagination py-2 d-inline-block">
					<div class="nav-links">

						<?php the_posts_pagination(array(
							'mid_size' => 1,
							'prev_text' => __('<i class="icofont-rounded-double-left"></i>', 'novena'),
							'next_text' => __('<i class="icofont-rounded-double-right"></i>', 'novena'),
						)); ?>

					</div>
				</nav>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>