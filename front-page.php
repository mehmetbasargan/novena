<?php get_header(); ?>

<!-- Slider Start -->
<?php echo get_template_part('template-parts/content', 'banner'); ?>

<!-- Features -->
<?php if (true == get_theme_mod('appointment_switch', true)) : ?>
    <?php echo get_template_part('template-parts/content', 'features'); ?>
<?php endif; ?>

<!-- About -->
<?php if (true == get_theme_mod('about_switch', true)) : ?>
    <?php echo get_template_part('template-parts/content', 'about'); ?>
<?php endif; ?>

<!-- Counter -->
<?php if (true == get_theme_mod('counter_switch', true)) : ?>
    <?php echo get_template_part('template-parts/content', 'counter'); ?>
<?php endif; ?>

<!-- Service -->
<?php if (true == get_theme_mod('services_switch', true)) : ?>
    <?php echo get_template_part('template-parts/content', 'service'); ?>
<?php endif; ?>

<!-- Appoinment -->
<?php if (true == get_theme_mod('appointment_switch', true)) : ?>
    <?php echo get_template_part('template-parts/content', 'appoinment') ?>
<?php endif; ?>

<!-- Testimonial -->
<?php if (true == get_theme_mod('testimonial_switch', true)) : ?>
    <?php echo get_template_part('template-parts/content', 'testimonial'); ?>
<?php endif; ?>

<!-- Clients -->
<?php if (true == get_theme_mod('clients_switch', true)) : ?>
    <?php echo get_template_part('template-parts/content', 'clients'); ?>
<?php endif; ?>

<?php get_footer(); ?>