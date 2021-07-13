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

					<div class="col-lg-12 mb-5">

						<?php while (have_posts()) : the_post(); ?>

							<div class="single-blog-item">
								<?php if (has_post_thumbnail()) : the_post_thumbnail('blog_image', array('class' => 'img-fluid'));
								endif; ?>

								<div class="blog-item-content mt-5">
									<div class="blog-item-meta mb-3">
										<span class="text-color-2 text-capitalize mr-3">
											<i class="icofont-book-mark mr-2"></i>
											<?php the_author(); ?>
										</span>
										<span class="text-muted text-capitalize mr-3">
											<i class="icofont-comment mr-2"></i>
											<?php comments_number(); ?>
											<?php esc_html_e('Yorum', 'novena') ?>
										</span>
										<span class="text-black text-capitalize mr-3">
											<i class="icofont-calendar mr-2"></i>
											<?php echo get_the_date('d M Y'); ?>
										</span>
									</div>

									<h2 class="mb-4 text-md">
										<?php echo the_title(); ?>
									</h2>

									<?php the_content(); ?>

									<div class="mt-5 clearfix list-inline tag-option">
										<?php the_tags(' ', ' '); ?>
									</div>
								</div>
							</div>

						<?php endwhile;  ?>

					</div>

					<div class="col-lg-12">
						<div class="comment-area mt-4 mb-5">
							<?php if (comments_open() || get_comments_number(' ')) :
								comments_template();
							endif; ?>
						</div>
					</div>

				</div>
			</div>

			<div class="col-lg-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>