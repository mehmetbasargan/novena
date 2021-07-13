<?php if (!defined('ABSPATH')) {
    die;
}


// Register Custom Galeri Start
function register_novena_doctors()
{
    $labels = array(
        'name'               => __('Doktorlar', 'novena'),
        'singular_name'      => __('doktorlar', 'novena'),
        'add_new'            => __('Yeni Ekle', 'novena'),
        'add_new_item'       => __('Yeni Ekle', 'novena'),
        'edit_item'          => __('Düzenle', 'novena'),
        'new_item'           => __('Yeni Ekle', 'novena'),
        'view_item'          => __('Görüntüle', 'novena'),
        'search_items'       => __('Doktor Ara', 'novena'),
        'not_found'          => __('Doktor Bulunamadı', 'novena'),
        'not_found_in_trash' => __('Çöpte Doktor Bulunamadı', 'novena'),
        'parent_item_colon'  => __('Ana iş:', 'novena'),
        'menu_name'          => __('Doktorlar', 'novena'),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical'     => true,
        'description'      => 'Çalışmaları Filre ile Gösterin',
        'supports'         => array('title', 'custom-fields', 'thumbnail', 'editor'),

        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => false,
        'publicly_queryable'  => true,
        'exclude_from_search' => true,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array('slug' => 'doktorlar'),
        'capability_type'     => 'page',
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-grid-view',

    );

    register_post_type('doktorlar',  $args);
}
add_action('init', 'register_novena_doctors');

// Filter Galeri Taxonomy 
function register_doctors_taxonomy_filters()
{
    $labels = array(
        'name'                       => __('Kategoriler', 'novena'),
        'singular_name'              => __('data', 'novena'),
        'search_items'               => __('Arama Filtreleri', 'novena'),
        'popular_items'              => __('Ençok Kullanılan Kategoriler', 'novena'),
        'all_items'                  => __('Tüm Filtreler', 'novena'),
        'parent_item'                => __('Ana Filtre', 'novena'),
        'parent_item_colon'          => __('Ana Filtre:', 'novena'),
        'edit_item'                  => __('Filtreyi Düzenle', 'novena'),
        'update_item'                => __('Filtreyi Güncelle', 'novena'),
        'add_new_item'               => __('Yeni Kategoriler Ekle', 'novena'),
        'new_item_name'              => __('Yeni Filtre', 'novena'),
        'separate_items_with_commas' => __('Filtreleri virgülle ayırın', 'novena'),
        'add_or_remove_items'        => __('Filtreleri ekleyin veya kaldırın', 'novena'),
        'choose_from_most_used'      => __('En çok kullanılan Filtreler arasından seçim yapın', 'novena'),
        'menu_name'                  => __('Kategoriler', 'novena'),
    );

    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'show_in_nav_menus' => false,
        'show_ui'           => true,
        'show_tagcloud'     => false,
        'hierarchical'      => true,
        'rewrite'           => true,
        'query_var'         => true,

    );

    register_taxonomy('filters', array('doktorlar'), $args);
}
add_action('init', 'register_doctors_taxonomy_filters');

// Adds terms from a custom taxonomy to post_class
add_filter('post_class', 'theme_taxonomy_post_class', 10, 3);
function theme_taxonomy_post_class($classes, $class, $ID)
{
    $taxonomy = 'filters';
    $terms = get_the_terms((int) $ID, $taxonomy);
    if (!empty($terms)) {
        foreach ((array) $terms as $order => $term) {
            if (!in_array($term->slug, $classes)) {
                $classes[] = $term->slug;
            }
        }
    }
    return $classes;
}
// Register Custom Galeri End