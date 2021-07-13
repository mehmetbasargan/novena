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

<!-- Doctors -->
<section class="section doctors">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2><?php echo get_theme_mod('doctors_page_title', 'novena') ?></h2>
                    <div class="divider mx-auto my-4"></div>
                    <p><?php echo get_theme_mod('doctors_page_text', 'novena') ?></p>
                </div>
            </div>
        </div>

        <div class="col-xl-12">
            <div class="doctors-list">

                <?php if (!is_tax()) {
                    $terms = get_terms("filters");
                    $count = count($terms);
                    if ($count > 0) { ?>
                        <ul>
                            <li data-filter="all"><?php _e('Tüm Bölümler', 'novena'); ?></li>
                            <?php foreach ($terms as $term) {
                                echo '<li class="filter" data-filter=".' . $term->slug . '">' . $term->name . '</li>';
                            } ?>
                        </ul>
                <?php }
                } ?>
            </div>
        </div>

        <div class="portfolio-gallery">
            <div class="col-xl-12">
                <div class="row">

                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : -1;
                    $custom_args = array('paged' => $paged, 'post_type' => 'doktorlar', 'order' => 'DESC', 'pagename=doktorlar');
                    $custom_query = new WP_Query($custom_args); ?>
                    <?php if ($custom_query->have_posts()) : ?>

                        <!-- the loop -->
                        <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

                            <div class="col-lg-3 col-sm-6 col-md-6 mb-4 mix 
                                <?php $taxonomys = get_the_terms(get_the_id(), 'filters');
                                foreach ($taxonomys as $taxonomy) {
                                    echo $taxonomy->slug, ' ';
                                } ?>
                            ">

                                <div class="position-relative doctor-inner-box">
                                    <div class="doctor-profile">
                                        <div class="doctor-img">
                                            <img src="<?php echo the_post_thumbnail_url('doctors_image'); ?>" class="img-fluid w-100" alt="" />
                                        </div>
                                    </div>
                                    <div class="content mt-3">
                                        <h4 class="mb-0">
                                            <a href="<?php echo the_permalink(); ?>">
                                                <?php echo the_title(); ?>
                                            </a>
                                        </h4>
                                        <p><?php $taxonomys = get_the_terms(get_the_id(), 'filters');
                                            foreach ($taxonomys as $taxonomy) {
                                                echo $taxonomy->name, ' ';
                                            } ?></p>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                        <!-- end of the loop -->

                        <?php wp_reset_postdata(); ?>
                    <?php else :  ?>
                        <p><?php _e('Üzgünüz, gönderi yok.'); ?></p>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>