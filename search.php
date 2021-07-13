<?php get_header(); ?>
<?php $images = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
<section class="page-title" style="background: url(<?php echo $images['0']; ?>);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block text-center">
					<header class="page-header">
						<h1 class="page-title" style="padding: 0;">
							<?php
							/* translators: %s: search query. */
							printf(esc_html__('Arama sonuçları: %s', 'novena'), '<span>' . get_search_query() . '</span>');
							?>
						</h1>
					</header><!-- .page-header -->
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

					<?php
						/* Start the Loop */
						while (have_posts()) : the_post();
							get_template_part('template-parts/content', 'search');
						endwhile;
						the_posts_navigation();
					else :
						get_template_part('template-parts/content', 'none');
					endif;
					?>


				</div>
			</div>

			<div class="col-lg-4">
				<div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
					<?php get_sidebar(); ?>
				</div>
			</div>

		</div>

	</div>
</section>




<?php get_footer(); ?>