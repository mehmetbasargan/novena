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

<section class="section service-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h2>Branşlar</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                </div>
            </div>
        </div>

        <div class="row">

            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : -1;
            $custom_args = array('paged' => $paged, 'post_type' => 'branslar', 'order' => 'DESC', 'pagename=branslar');
            $custom_query = new WP_Query($custom_args); ?>
            <?php if ($custom_query->have_posts()) : ?>

                <!-- the loop -->
                <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

                    <div class="col-lg-4 col-md-6 ">
                        <div class="department-block mb-5">
                            <img src="<?php echo the_post_thumbnail_url(''); ?>" alt="" class="img-fluid w-100">
                            <div class="content">
                                <h4 class="mt-4 mb-2 title-color">
                                    <?php echo the_title(); ?>
                                </h4>
                                <p class="mb-4">
                                    <?php echo the_excerpt(); ?>
                                </p>
                                <a href="<?php echo the_permalink(); ?>" class="read-more">
                                    Daha Fazlası
                                    <i class="icofont-simple-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
                <!-- end of the loop -->

                <?php wp_reset_postdata(); ?>
            <?php else :  ?>
                <p><?php _e('Üzgünüz, gönderi yok.'); ?></p>
            <?php endif; ?>

            <!--   <div class="col-lg-4 col-md-6">
                <div class="department-block mb-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/service-2.jpg" alt="" class="img-fluid w-100">
                    <div class="content">
                        <h4 class="mt-4 mb-2  title-color">Kardiyoloji</h4>
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        <a href="department-single.html" class="read-more">Daha Fazlası <i class="icofont-simple-right ml-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="department-block mb-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/service-3.jpg" alt="" class="img-fluid w-100">
                    <div class="content">
                        <h4 class="mt-4 mb-2 title-color">Diş Bakımı</h4>
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        <a href="department-single.html" class="read-more">Daha Fazlası <i class="icofont-simple-right ml-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 ">
                <div class="department-block  mb-5 mb-lg-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/service-4.jpg" alt="" class="img-fluid w-100">
                    <div class="content">
                        <h4 class="mt-4 mb-2 title-color">Çocuk Bakımı</h4>
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        <a href="department-single.html" class="read-more">Daha Fazlası <i class="icofont-simple-right ml-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="department-block mb-5 mb-lg-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/service-6.jpg" alt="" class="img-fluid w-100">
                    <div class="content">
                        <h4 class="mt-4 mb-2 title-color">Üroloji</h4>
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        <a href="department-single.html" class="read-more">Daha Fazlası <i class="icofont-simple-right ml-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="department-block mb-5 mb-lg-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/service-8.jpg" alt="" class="img-fluid w-100">
                    <div class="content">
                        <h4 class="mt-4 mb-2 title-color">jinekoloji</h4>
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        <a href="department-single.html" class="read-more">Daha Fazlası <i class="icofont-simple-right ml-2"></i></a>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</section>


<?php get_footer(); ?>