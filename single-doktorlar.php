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

<section class="section doctor-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="doctor-img-block">
                    <img src="<?php echo the_post_thumbnail_url('doctors_image'); ?>" class="img-fluid w-100" alt="" />
                    <div class="info-block mt-4">
                        <h4 class="mb-0"><?php the_title(); ?></h4>
                        <p>
                            <?php $taxonomys = get_the_terms(get_the_id(), 'filters');
                            foreach ($taxonomys as $taxonomy) {
                                echo $taxonomy->name, ' ';
                            } ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-6">
                <div class="doctor-details mt-4 mt-lg-0">
                    <h2 class="text-md"><?php the_title(); ?></h2>
                    <div class="divider my-4"></div>
                    <?php the_content(); ?>

                    <a href="<?php echo site_url('/randevu'); ?>" class="btn btn-main-2 btn-round-full mt-3">
                        <?php esc_html_e('Randevu Al', 'novena'); ?>
                        <i class="icofont-simple-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>