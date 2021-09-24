<?php
if (!defined('ABSPATH')) {
    die();
}


function novena_demo_files()
{
    return array(
        array(
            'import_file_name'           => 'Demo 1',
            'import_file_url'            => 'https://kombineteknikservis.com/demo/import/novena/contents.xml',
            'import_widget_file_url'     => 'https://kombineteknikservis.com/demo/import/novena/widgets.wie',
            'import_customizer_file_url' => 'https://kombineteknikservis.com/demo/import/novena/settings.dat',
            'import_preview_image_url'   => 'https://kombineteknikservis.com/demo/import/novena/screenshot.png',
            'import_notice'              => esc_html__('Demo import yapmadan önce bütün önerilen eklentilerin yüklü ve etkin olduğundan emin olun!', 'novena'),
            'preview_url'                => 'http://localhost/novena/',
        ),
    );
}
add_filter('ocdi/import_files', 'novena_demo_files');


function novena_demo_import()
{
    $main_menu = get_term_by('name', 'Main Menu', 'nav_menu');
    $footer_menu1 = get_term_by('name', 'Footer Menu 1', 'nav_menu');
    $footer_menu2 = get_term_by('name', 'Footer Menu 2', 'nav_menu');

    set_theme_mod('nav_menu_locations', array(
        'main-menu'     => $main_menu->term_id,
        'footer-menu-1' => $footer_menu1->term_id,
        'footer-menu-2' => $footer_menu2->term_id,
    ));

    $front_page_object = get_page_by_title('Ana Sayfa');
    $blog_page_object = get_page_by_title('Blog');

    update_option('show_on_front', 'page');
    update_option('page_on_front', $front_page_object->ID);
    update_option('page_for_posts', $blog_page_object->ID);
}
add_action('ocdi/after_import', 'novena_demo_import');


function novena_before_widget_import()
{
    $widget_areas = array(
        'sidebar-1' => array(),
    );
    update_option('sidebars_widgets', $widget_areas);
}
add_action('ocdi/before_widgets_import', 'novena_before_widget_import');

function novena_before_content_import()
{
    $hello_world = get_page_by_title('Merhaba dünya', OBJECT, 'post');
    if (!empty($hello_world)) {
        $hello_world->post_status = 'draft';
        wp_update_post($hello_world);
    }
}
add_action('ocdi/before_content_import', 'novena_before_content_import');
