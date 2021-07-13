<?php

if (!defined('ABSPATH')) {
    return;
}

if (!class_exists('Kirki')) {
    return;
}

Kirki::add_config('novena', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
));

// Header Ayarları
Kirki::add_section('novena_header_section', array(
    'title'          => esc_html__('Header', 'novena'),
    'priority'       => 1,
    'icon'           => 'dashicons-align-wide',
));

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'header_mail',
    'label'    => esc_html__('Header E-Posta', 'novena'),
    'section'  => 'novena_header_section',
    'default'  => esc_html__('support@novena.com', 'novena'),
    'priority' => 1,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'header_address',
    'label'    => esc_html__('Header Adres', 'novena'),
    'section'  => 'novena_header_section',
    'default'  => esc_html__('Kadıköy - İstanbul', 'novena'),
    'priority' => 1,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'header_phone',
    'label'    => esc_html__('Header Telefon', 'novena'),
    'section'  => 'novena_header_section',
    'default'  => esc_html__('+90 216 000 00 00', 'novena'),
    'priority' => 1,
]);

Kirki::add_field('novena', [
    'type'        => 'switch',
    'settings'    => 'header_switch',
    'label'       => esc_html__('Üst Bar Göster / Gizle', 'novena'),
    'section'     => 'novena_header_section',
    'default'     => 'on',
    'priority'    => 1,
    'choices'     => [
        'on'  => esc_html__('Göster', 'novena'),
        'off' => esc_html__('Gizle', 'novena'),
    ],
]);

// Ana Sayfa Ayarları
Kirki::add_panel('home_settings', array(
    'priority'    => 2,
    'title'       => esc_html__('Ana Sayfa', 'novena'),
    'description' => esc_html__('Ana Sayfayı Düzenleyin', 'novena'),
    'icon' => 'dashicons-admin-home',
));

// Banner Bölümü
Kirki::add_section('banner_section', array(
    'title'          => esc_html__('Banner', 'novena'),
    'description'    => esc_html__('Banner Bölümünü Ayarlayın', 'novena'),
    'panel'          => 'home_settings',
    'priority'       => 1,
));

Kirki::add_field('novena', [
    'type'        => 'image',
    'settings'    => 'banner_image',
    'label'       => esc_html__('Banner Görseli', 'kirki'),
    'description' => esc_html__('Banner Görseli Ekleyin', 'kirki'),
    'section'     => 'banner_section',
    'priority'    => 1,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'banner_little_title',
    'label'    => esc_html__('Banner Küçük Başlık', 'novena'),
    'section'  => 'banner_section',
    'default'  => esc_html__('TOTAL HEALTH CARE SOLUTİON', 'novena'),
    'priority' => 2,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'banner_big_title',
    'label'    => esc_html__('Banner Büyük Başlık', 'novena'),
    'section'  => 'banner_section',
    'default'  => esc_html__('Your Most Trusted Health Partner', 'novena'),
    'priority' => 3,
]);

Kirki::add_field('novena', [
    'type'     => 'textarea',
    'settings' => 'banner_text',
    'label'    => esc_html__('Banner Açıklama', 'novena'),
    'section'  => 'banner_section',
    'default'  => esc_html__('A repudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam aperiam maiores sunt fugit, deserunt rem suscipit placeat.', 'novena'),
    'priority' => 4,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'banner_button_title',
    'label'    => esc_html__('Banner Buton Başlık', 'novena'),
    'section'  => 'banner_section',
    'default'  => esc_html__('Make appoinment ', 'novena'),
    'priority' => 5,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'banner_button_link',
    'label'    => esc_html__('Banner Buton Link', 'novena'),
    'section'  => 'banner_section',
    'default'  => esc_html__('#', 'novena'),
    'priority' => 6,
]);

// Randevu Sistemi
Kirki::add_section('feature_section', array(
    'title'          => esc_html__('Randevu Sistemi', 'novena'),
    'description'    => esc_html__('Randevu Sistemini Ayarlayın', 'novena'),
    'panel'          => 'home_settings',
    'priority'       => 1,
));

// 1.Bölüm
Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'appointment_litle_title',
    'label'    => esc_html__('1.Bölüm Küçük Başlık', 'novena'),
    'section'  => 'feature_section',
    'default'  => esc_html__('24 Saat Hizmet', 'novena'),
    'priority' => 1,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'appointment_big_title',
    'label'    => esc_html__('1.Bölüm Büyük Başlık', 'novena'),
    'section'  => 'feature_section',
    'default'  => esc_html__('Online Randevu', 'novena'),
    'priority' => 2,
]);

Kirki::add_field('novena', [
    'type'     => 'textarea',
    'settings' => 'appointment_text_content',
    'label'    => esc_html__('1.Bölüm Açıklama', 'novena'),
    'section'  => 'feature_section',
    'default'  => esc_html__('Acil durumlar için her zaman destek alın. Aile hekimliği desteğimiz başladı.', 'novena'),
    'priority' => 3,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'appointment_button_title',
    'label'    => esc_html__('1.Bölüm Buton Başlık', 'novena'),
    'section'  => 'feature_section',
    'default'  => esc_html__('Randevu al', 'novena'),
    'priority' => 4,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'appointment_button_link',
    'label'    => esc_html__('1.Bölüm Buton Link', 'novena'),
    'section'  => 'feature_section',
    'default'  => esc_html__('#', 'novena'),
    'priority' => 5,
]);

// 2.Bölüm
Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'appointment_litle_title_2',
    'label'    => esc_html__('2.Bölüm Küçük Başlık', 'novena'),
    'section'  => 'feature_section',
    'default'  => esc_html__('24 Saat Hizmet', 'novena'),
    'priority' => 6,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'appointment_big_title_2',
    'label'    => esc_html__('2.Bölüm Büyük Başlık', 'novena'),
    'section'  => 'feature_section',
    'default'  => esc_html__('Online Randevu', 'novena'),
    'priority' => 7,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'appointment_hour_1',
    'label'    => esc_html__('2.Bölüm Saat Ayarları', 'novena'),
    'section'  => 'feature_section',
    'default'  => esc_html__('8:00 - 17:00', 'novena'),
    'priority' => 8,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'appointment_hour_2',
    'label'    => esc_html__('2.Bölüm Saat Ayarları', 'novena'),
    'section'  => 'feature_section',
    'default'  => esc_html__('9:00 - 17:00', 'novena'),
    'priority' => 9,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'appointment_hour_3',
    'label'    => esc_html__('2.Bölüm Saat Ayarları', 'novena'),
    'section'  => 'feature_section',
    'default'  => esc_html__('10:00 - 17:00', 'novena'),
    'priority' => 10,
]);

// 3.Bölüm
Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'appointment_litle_title_3',
    'label'    => esc_html__('3.Bölüm Küçük Başlık', 'novena'),
    'section'  => 'feature_section',
    'default'  => esc_html__('Acil durumlar İçin', 'novena'),
    'priority' => 11,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'appointment_big_title_3',
    'label'    => esc_html__('3.Bölüm Büyük Başlık', 'novena'),
    'section'  => 'feature_section',
    'default'  => esc_html__('+90 216 000 00 00', 'novena'),
    'priority' => 12,
]);

Kirki::add_field('novena', [
    'type'     => 'textarea',
    'settings' => 'appointment_text_content_2',
    'label'    => esc_html__('3.Bölüm Açıklama', 'novena'),
    'section'  => 'feature_section',
    'default'  => esc_html__('Acil durumlar için her zaman destek alın. Aile hekimliği desteğimiz başladı. Herhangi bir aciliyet için bizimle iletişime geçin.', 'novena'),
    'priority' => 13,
]);

Kirki::add_field('novena', [
    'type'        => 'switch',
    'settings'    => 'appointment_switch',
    'label'       => esc_html__('Üst Bar Göster / Gizle', 'novena'),
    'section'     => 'feature_section',
    'default'     => 'on',
    'priority'    => 14,
    'choices'     => [
        'on'  => esc_html__('Göster', 'novena'),
        'off' => esc_html__('Gizle', 'novena'),
    ],
]);


// Ana Sayfa Hakkımızda
Kirki::add_section('about_section', array(
    'title'          => esc_html__('Ana Sayfa About', 'novena'),
    'description'    => esc_html__('Ana Sayfa About Ayarlayın', 'novena'),
    'panel'          => 'home_settings',
    'priority'       => 1,
));

Kirki::add_field('novena', [
    'type'        => 'image',
    'settings'    => 'about_image_1',
    'label'       => esc_html__('Hakkımzda 1. Görseli', 'novena'),
    'description' => esc_html__('Hakkımzda 1. Görseli Ekleyin', 'novena'),
    'section'     => 'about_section',
    'priority'    => 1,
]);

Kirki::add_field('novena', [
    'type'        => 'image',
    'settings'    => 'about_image_2',
    'label'       => esc_html__('Hakkımzda 2. Görseli', 'novena'),
    'description' => esc_html__('Hakkımzda 2. Görseli Ekleyin', 'novena'),
    'section'     => 'about_section',
    'priority'    => 2,
]);

Kirki::add_field('novena', [
    'type'        => 'image',
    'settings'    => 'about_image_3',
    'label'       => esc_html__('Hakkımzda 3. Görseli', 'novena'),
    'description' => esc_html__('Hakkımzda 3. Görseli Ekleyin', 'novena'),
    'section'     => 'about_section',
    'priority'    => 3,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'about_big_title',
    'label'    => esc_html__('Hakkımızda Büyük Başlık', 'novena'),
    'section'  => 'about_section',
    'default'  => esc_html__('Kişisel bakım ve sağlıklı yaşam', 'novena'),
    'priority' => 4,
]);

Kirki::add_field('novena', [
    'type'     => 'textarea',
    'settings' => 'about_text_content',
    'label'    => esc_html__('Hakkımızda Açıklama', 'novena'),
    'section'  => 'about_section',
    'default'  => esc_html__('En iyi tıbbi hizmeti sunuyoruz.', 'novena'),
    'priority' => 5,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'about_button_title',
    'label'    => esc_html__('Hakkımızda Buton Başlık', 'novena'),
    'section'  => 'about_section',
    'default'  => esc_html__('Servisler', 'novena'),
    'priority' => 6,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'about_button_link',
    'label'    => esc_html__('Hakkımızda Buton Link', 'novena'),
    'section'  => 'about_section',
    'default'  => esc_html__('#', 'novena'),
    'priority' => 7,
]);

Kirki::add_field('novena', [
    'type'        => 'switch',
    'settings'    => 'about_switch',
    'label'       => esc_html__('Üst Bar Göster / Gizle', 'novena'),
    'section'     => 'about_section',
    'default'     => 'on',
    'priority'    => 8,
    'choices'     => [
        'on'  => esc_html__('Göster', 'novena'),
        'off' => esc_html__('Gizle', 'novena'),
    ],
]);


// Sayaç
Kirki::add_section('counter_section', array(
    'title'          => esc_html__('Sayaç', 'novena'),
    'description'    => esc_html__('Sayaç Ayarlayın', 'novena'),
    'panel'          => 'home_settings',
    'priority'       => 1,
));

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'counter_number_1',
    'label'    => esc_html__('1. Sayaç Rakamı', 'novena'),
    'section'  => 'counter_section',
    'default'  => esc_html__('58', 'novena'),
    'priority' => 1,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'counter_text_1',
    'label'    => esc_html__('1. Sayaç Başlık', 'novena'),
    'section'  => 'counter_section',
    'default'  => esc_html__('Mutlu Müşteriler', 'novena'),
    'priority' => 2,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'counter_number_2',
    'label'    => esc_html__('2. Sayaç Rakamı', 'novena'),
    'section'  => 'counter_section',
    'default'  => esc_html__('700', 'novena'),
    'priority' => 3,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'counter_text_2',
    'label'    => esc_html__('2. Sayaç Başlık', 'novena'),
    'section'  => 'counter_section',
    'default'  => esc_html__('Ameliyat Tamamlandı', 'novena'),
    'priority' => 4,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'counter_number_3',
    'label'    => esc_html__('3. Sayaç Rakamı', 'novena'),
    'section'  => 'counter_section',
    'default'  => esc_html__('40', 'novena'),
    'priority' => 5,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'counter_text_3',
    'label'    => esc_html__('3. Sayaç Başlık', 'novena'),
    'section'  => 'counter_section',
    'default'  => esc_html__('Uzman Doktorlar', 'novena'),
    'priority' => 6,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'counter_number_4',
    'label'    => esc_html__('4. Sayaç Rakamı', 'novena'),
    'section'  => 'counter_section',
    'default'  => esc_html__('20', 'novena'),
    'priority' => 7,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'counter_text_4',
    'label'    => esc_html__('4. Sayaç Başlık', 'novena'),
    'section'  => 'counter_section',
    'default'  => esc_html__('Dünya Çapındaki Şubeler', 'novena'),
    'priority' => 8,
]);

Kirki::add_field('novena', [
    'type'        => 'switch',
    'settings'    => 'counter_switch',
    'label'       => esc_html__('Üst Bar Göster / Gizle', 'novena'),
    'section'     => 'counter_section',
    'default'     => 'on',
    'priority'    => 14,
    'choices'     => [
        'on'  => esc_html__('Göster', 'novena'),
        'off' => esc_html__('Gizle', 'novena'),
    ],
]);


// Hizmetler
Kirki::add_section('services_section', array(
    'title'          => esc_html__('Hizmetler', 'novena'),
    'description'    => esc_html__('Hizmetler Bölümü Ayarlayın', 'novena'),
    'panel'          => 'home_settings',
    'priority'       => 1,
));

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'services_title',
    'label'    => esc_html__('Hizmetler Başlık', 'novena'),
    'section'  => 'services_section',
    'default'  => esc_html__('Hizmetlerimiz', 'novena'),
    'priority' => 1,
]);

Kirki::add_field('novena', [
    'type'     => 'textarea',
    'settings' => 'services_text',
    'label'    => esc_html__('Hizmetler Açıklama', 'novena'),
    'section'  => 'services_section',
    'default'  => esc_html__('Sizin için en iyi tıbbi hizmetleri sunuyoruz.', 'novena'),
    'priority' => 2,
]);

Kirki::add_field('novena', [
    'type'        => 'repeater',
    'label'       => esc_html__('Hizmetler Bülümü Listesi', 'novena'),
    'section'     => 'services_section',
    'priority'    => 3,
    'row_label' => [
        'type'  => 'text',
        'value' => esc_html__('Bölüm', 'novena'),
    ],
    'button_label' => esc_html__('Yeni Ekle', 'novena'),
    'settings'     => 'home_services_repeater_setting',

    'fields' => [
        'services_icon' => [
            'type'        => 'text',
            'label'       => esc_html__('Hizmetler İkon', 'novena'),
            'description' => esc_html__('Hizmet Bölümü İçin İkon Ekleyin', 'novena'),
            'default'     => 'icofont-laboratory',
        ],
        'services_title'  => [
            'type'        => 'text',
            'label'       => esc_html__('Hizmet Başlık', 'novena'),
            'description' => esc_html__('Hizmet Bölümü İçin Başlık Ekleyin', 'novena'),
            'default'     => 'Hizmet Başlık',
        ],
        'services_text'  => [
            'type'        => 'textarea',
            'label'       => esc_html__('Hizmet Açıklama', 'novena'),
            'description' => esc_html__('Hizmet Bölümü İçin Açıklama Ekleyin', 'novena'),
            'default'     => 'Hizmet Açıklama',
        ],
    ]
]);

Kirki::add_field('novena', [
    'type'        => 'switch',
    'settings'    => 'services_switch',
    'label'       => esc_html__('Hizmetleri Bölümü Göster / Gizle', 'novena'),
    'section'     => 'services_section',
    'default'     => 'on',
    'priority'    => 4,
    'choices'     => [
        'on'  => esc_html__('Göster', 'novena'),
        'off' => esc_html__('Gizle', 'novena'),
    ],
]);

// Online Randevu Sistemi
Kirki::add_section('appointment_section', array(
    'title'          => esc_html__('Online Randevu', 'novena'),
    'description'    => esc_html__('Online Randevu Bölümü Ayarları', 'novena'),
    'panel'          => 'home_settings',
    'priority'       => 1,
));

Kirki::add_field('novena', [
    'type'        => 'image',
    'settings'    => 'appointment_image',
    'label'       => esc_html__('Online Randevu Bölümü Görseli', 'novena'),
    'section'     => 'appointment_section',
    'priority'    => 1,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'appointment_phone',
    'label'    => esc_html__('Online Randevu Bölümü Telefon', 'novena'),
    'section'  => 'appointment_section',
    'default'  => esc_html__('+90 216 000 00 00', 'novena'),
    'priority' => 2,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'appointment_title',
    'label'    => esc_html__('Online Randevu Bölümü Başlık', 'novena'),
    'section'  => 'appointment_section',
    'default'  => esc_html__('Online Randevu Başlık', 'novena'),
    'priority' => 3,
]);

Kirki::add_field('novena', [
    'type'     => 'textarea',
    'settings' => 'appointment_text',
    'label'    => esc_html__('Online Randevu Bölümü Açıklama', 'novena'),
    'section'  => 'appointment_section',
    'default'  => esc_html__('Duis scelerisque sem erat, eget scelerisque nisi mollis quis', 'novena'),
    'priority' => 4,
]);

Kirki::add_field('novena', [
    'type'        => 'switch',
    'settings'    => 'appointment_switch',
    'label'       => esc_html__('Online Randevu Bölümünü Göster / Gizle', 'novena'),
    'section'     => 'appointment_section',
    'default'     => 'on',
    'priority'    => 5,
    'choices'     => [
        'on'  => esc_html__('Göster', 'novena'),
        'off' => esc_html__('Gizle', 'novena'),
    ],
]);

// Referanslar
Kirki::add_section('testimonial_section', array(
    'title'          => esc_html__('Referanslar', 'novena'),
    'description'    => esc_html__('Referanslar Bölümü Ayarları', 'novena'),
    'panel'          => 'home_settings',
    'priority'       => 1,
));

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'testimonial_title',
    'label'    => esc_html__('Referanslar Bölümü Başlık', 'novena'),
    'section'  => 'testimonial_section',
    'default'  => esc_html__('Referanslar Başlık', 'novena'),
    'priority' => 2,
]);

Kirki::add_field('novena', [
    'type'     => 'textarea',
    'settings' => 'testimonial_text',
    'label'    => esc_html__('Referanslar Bölümü Açıklama', 'novena'),
    'section'  => 'testimonial_section',
    'default'  => esc_html__('Referanslar bölümü için açıklama ekleyin.', 'novena'),
    'priority' => 3,
]);

Kirki::add_field('novena', [
    'type'        => 'repeater',
    'label'       => esc_html__('Referanslar', 'novena'),
    'section'     => 'testimonial_section',
    'priority'    => 4,
    'row_label' => [
        'type'  => 'text',
        'value' => esc_html__('Referans', 'novena'),
    ],
    'button_label' => esc_html__('Yeni Ekle', 'novena'),
    'settings'     => 'testimonia_repeater_setting',
    'fields' => [
        'testimonial_img' => [
            'type'        => 'image',
            'label'       => esc_html__('Referans Görseli', 'novena'),
            'description' => esc_html__('Referans için görsel ekleyin.', 'novena'),
        ],
        'testimonial_title'  => [
            'type'        => 'text',
            'label'       => esc_html__('Referans Başlık', 'novena'),
            'description' => esc_html__('Referans için başlık ekleyin.', 'novena'),
            'default'     => 'Referans Başlık',
        ],
        'testimonial_name'  => [
            'type'        => 'text',
            'label'       => esc_html__('Referans Adı', 'novena'),
            'description' => esc_html__('Referansın adını ekleyin.', 'novena'),
            'default'     => 'Referans Adı',
        ],
        'testimonial_text'  => [
            'type'        => 'textarea',
            'label'       => esc_html__('Referans Acıklama', 'novena'),
            'description' => esc_html__('Referansı için açıklama ekleyin.', 'novena'),
            'default'     => 'Referans Acıklama',
        ],
    ]
]);

Kirki::add_field('novena', [
    'type'        => 'switch',
    'settings'    => 'testimonial_switch',
    'label'       => esc_html__('Referanslar Bölümünü Göster / Gizle', 'novena'),
    'section'     => 'testimonial_section',
    'default'     => 'on',
    'priority'    => 5,
    'choices'     => [
        'on'  => esc_html__('Göster', 'novena'),
        'off' => esc_html__('Gizle', 'novena'),
    ],
]);


// Müşteriler
Kirki::add_section('clients_section', array(
    'title'          => esc_html__('Müşteriler', 'novena'),
    'description'    => esc_html__('Müşteriler Bölümü Ayarları', 'novena'),
    'panel'          => 'home_settings',
    'priority'       => 1,
));

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'clients_title',
    'label'    => esc_html__('Müşteriler Bölümü Başlık', 'novena'),
    'section'  => 'clients_section',
    'default'  => esc_html__('Müşteriler Başlık', 'novena'),
    'priority' => 2,
]);

Kirki::add_field('novena', [
    'type'     => 'textarea',
    'settings' => 'clients_text',
    'label'    => esc_html__('Müşteriler Bölümü Açıklama', 'novena'),
    'section'  => 'clients_section',
    'default'  => esc_html__('Müşteriler bölümü için açıklama ekleyin.', 'novena'),
    'priority' => 3,
]);

Kirki::add_field('novena', [
    'type'        => 'repeater',
    'label'       => esc_html__('Müşteriler', 'novena'),
    'section'     => 'clients_section',
    'priority'    => 4,
    'row_label' => [
        'type'  => 'text',
        'value' => esc_html__('Müşteri', 'novena'),
    ],
    'button_label' => esc_html__('Yeni Ekle', 'novena'),
    'settings'     => 'clients_repeater_setting',
    'fields' => [
        'clients_img' => [
            'type'        => 'image',
            'label'       => esc_html__('Müşteriler Görseli', 'novena'),
            'description' => esc_html__('Müşteriler için görsel ekleyin.', 'novena'),
        ],
    ]
]);

Kirki::add_field('novena', [
    'type'        => 'switch',
    'settings'    => 'clients_switch',
    'label'       => esc_html__('Müşteriler Bölümünü Göster / Gizle', 'novena'),
    'section'     => 'clients_section',
    'default'     => 'on',
    'priority'    => 5,
    'choices'     => [
        'on'  => esc_html__('Göster', 'novena'),
        'off' => esc_html__('Gizle', 'novena'),
    ],
]);

// İletişim
Kirki::add_section('contact_section', array(
    'title'    => esc_html__('İletişim', 'novena'),
    'panel'    => 'footer_settings',
    'priority' => 1,
));

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'contact_text',
    'label'    => esc_html__('İletişim', 'novena'),
    'default'  => esc_html__('İletişim Bölümü Açıklama', 'novena'),
    'section'  => 'contact_section',
    'priority' => 1,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'contact_email',
    'label'    => esc_html__('E-posta', 'novena'),
    'default'  => esc_html__('İletişim Bölümü E-posta', 'novena'),
    'section'  => 'contact_section',
    'priority' => 2,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'contact_date',
    'label'    => esc_html__('Saat - Tarih', 'novena'),
    'default'  => esc_html__('İletişim Bölümü Saat - Tarih', 'novena'),
    'section'  => 'contact_section',
    'priority' => 3,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'contact_phone',
    'label'    => esc_html__('Telefon', 'novena'),
    'default'  => esc_html__('İletişim Bölümü Telefon', 'novena'),
    'section'  => 'contact_section',
    'priority' => 4,
]);


// Hakkımızda
Kirki::add_section('novena_about_section', array(
    'title'    => esc_html__('Hakkımızda', 'novena'),
    'priority' => 2,
    'icon'     => 'dashicons-align-wide',
));

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'about_title',
    'label'    => esc_html__('Hakkımızda Başlık', 'novena'),
    'default'  => esc_html__('Sağlıklı yaşam için kişisel bakım', 'novena'),
    'section'  => 'novena_about_section',
    'priority' => 1,
]);

Kirki::add_field('novena', [
    'type'     => 'textarea',
    'settings' => 'about_text',
    'label'    => esc_html__('Hakkımızda Açıklama', 'novena'),
    'default'  => esc_html__('Hakkımızda için açıklama', 'novena'),
    'section'  => 'novena_about_section',
    'priority' => 2,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'doctors_title',
    'label'    => esc_html__('Doktorlar Başlık', 'novena'),
    'default'  => esc_html__('Uzmanımızla Tanışın', 'novena'),
    'section'  => 'novena_about_section',
    'priority' => 3,
]);

Kirki::add_field('novena', [
    'type'     => 'textarea',
    'settings' => 'doctors_text',
    'label'    => esc_html__('Doktorlar Açıklama', 'novena'),
    'default'  => esc_html__('Doktorlar için açıklama', 'novena'),
    'section'  => 'novena_about_section',
    'priority' => 4,
]);

Kirki::add_field('novena', [
    'type'        => 'repeater',
    'label'       => esc_html__('Doktorlar', 'novena'),
    'section'     => 'novena_about_section',
    'priority'    => 5,
    'row_label' => [
        'type'  => 'text',
        'value' => esc_html__('Doktor', 'novena'),
    ],
    'button_label' => esc_html__('Yeni Ekle', 'novena'),
    'settings'     => 'doctors_repeater_setting',
    'fields' => [
        'doctors_img' => [
            'type'        => 'image',
            'label'       => esc_html__('Doktorun Fotoğrafı', 'novena'),
            'description' => esc_html__('Lütfen doktorun fotoğrafını ekleyiniz.', 'novena'),
        ],
        'doctors_name' => [
            'type'        => 'text',
            'label'       => esc_html__('Doktorun Adı', 'novena'),
            'description' => esc_html__('Lütfen doktorun adını giriniz.', 'novena'),
        ],
        'doctors_title'  => [
            'type'        => 'text',
            'label'       => esc_html__('Doktorun Bölümü', 'novena'),
            'description' => esc_html__('Lütfen doktorun bölümünü giriniz', 'novena'),
        ],
    ]
]);


// Servisler
Kirki::add_panel('services_settings', array(
    'priority'    => 3,
    'title'       => esc_html__('Servisler', 'novena'),
    'description' => esc_html__('Servis Sayfasını Düzenleyin', 'novena'),
    'icon' => 'dashicons-align-wide',
));

Kirki::add_section('novena_services_section', array(
    'title'    => esc_html__('Servisler', 'novena'),
    'panel'    => 'services_settings',
    'priority' => 1,
));

Kirki::add_field('novena', [
    'type'        => 'repeater',
    'label'       => esc_html__('Servisler', 'novena'),
    'section'     => 'novena_services_section',
    'priority'    => 1,
    'row_label' => [
        'type'  => 'text',
        'value' => esc_html__('Servis', 'novena'),
    ],
    'button_label' => esc_html__('Yeni Ekle', 'novena'),
    'settings'     => 'services_repeater_setting',
    'fields' => [
        'services_img' => [
            'type'        => 'image',
            'label'       => esc_html__('Servis Fotoğrafı', 'novena'),
            'description' => esc_html__('Lütfen servis fotoğrafını ekleyiniz.', 'novena'),
        ],
        'services_title' => [
            'type'        => 'text',
            'label'       => esc_html__('Servisin Başlık', 'novena'),
            'description' => esc_html__('Lütfen servisin başlığını giriniz.', 'novena'),
        ],
        'services_text'  => [
            'type'        => 'text',
            'label'       => esc_html__('Servis Açıklama', 'novena'),
            'description' => esc_html__('Lütfen servis açıklamasını giriniz', 'novena'),
        ],
    ]
]);

// Randevu Al
Kirki::add_section('novena_get_appointment_section', array(
    'title'    => esc_html__('Randevu Al', 'novena'),
    'panel'    => 'services_settings',
    'priority' => 2,
));

Kirki::add_field('novena', [
    'type'        => 'image',
    'settings'    => 'get_appointment_img',
    'label'       => esc_html__('Randevu Al Blümü Görseli', 'novena'),
    'description' => esc_html__('Randevu al bölümü görseli ekleyin.', 'novena'),
    'section'     => 'novena_get_appointment_section',
    'priority' => 3,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'get_appointment_title',
    'label'    => esc_html__('Randeuve Bölümü Başlık', 'novena'),
    'default'  => esc_html__('Sağlıklı hizmetlerimizi size sunmaktan mutluluk duyuyoruz.', 'novena'),
    'section'  => 'novena_get_appointment_section',
    'priority' => 4,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'get_appointment_button',
    'label'    => esc_html__('Randeuve Bölümü Buton Başlık', 'novena'),
    'default'  => esc_html__('Randevu Al', 'novena'),
    'section'  => 'novena_get_appointment_section',
    'priority' => 5,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'get_appointment_button_link',
    'label'    => esc_html__('Randeuve Bölümü Buton Link', 'novena'),
    'default'  => esc_html__('#', 'novena'),
    'section'  => 'novena_get_appointment_section',
    'priority' => 6,
]);


// Doktorlar
Kirki::add_panel('doctors_page_settings', array(
    'priority'    => 4,
    'title'       => esc_html__('Doktorlar', 'novena'),
    'description' => esc_html__('Doktorlar Sayfasını Düzenleyin', 'novena'),
    'icon' => 'dashicons-align-wide',
));

Kirki::add_section('novena_doctors_page_section', array(
    'title'    => esc_html__('Doktorlar', 'novena'),
    'panel'    => 'doctors_page_settings',
    'priority' => 1,
    'icon' => 'dashicons-align-wide',
));

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'doctors_page_title',
    'label'    => esc_html__('Doktorlar Başlık', 'novena'),
    'default'  => esc_html__('Doktorlarımız', 'novena'),
    'section'  => 'novena_doctors_page_section',
    'priority' => 1,
]);

Kirki::add_field('novena', [
    'type'     => 'textarea',
    'settings' => 'doctors_page_text',
    'label'    => esc_html__('Doktorlar Açıklama', 'novena'),
    'default'  => esc_html__('Doktorlar için açıklama', 'novena'),
    'section'  => 'novena_doctors_page_section',
    'priority' => 1,
]);


// İletişim
Kirki::add_panel('contact_page_settings', array(
    'priority'    => 4,
    'title'       => esc_html__('İletişim', 'novena'),
    'description' => esc_html__('İletişim Sayfasını Düzenleyin', 'novena'),
    'icon' => 'dashicons-align-wide',
));

Kirki::add_section('novena_contact_page_section', array(
    'title'    => esc_html__('İletişim', 'novena'),
    'panel'    => 'contact_page_settings',
    'priority' => 1,
));

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'contact_phone_title',
    'label'    => esc_html__('Telefon Başlık', 'novena'),
    'default'  => esc_html__('Telefon', 'novena'),
    'section'  => 'novena_contact_page_section',
    'priority' => 1,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'contact_phone_number',
    'label'    => esc_html__('Telefon Numarası', 'novena'),
    'default'  => esc_html__('+90 216 000 00 00', 'novena'),
    'section'  => 'novena_contact_page_section',
    'priority' => 2,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'contact_email_title',
    'label'    => esc_html__('E-posta Başlık', 'novena'),
    'default'  => esc_html__('E-Posta', 'novena'),
    'section'  => 'novena_contact_page_section',
    'priority' => 3,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'contact_email_text',
    'label'    => esc_html__('E-Posta Text', 'novena'),
    'default'  => esc_html__('support@novena.com', 'novena'),
    'section'  => 'novena_contact_page_section',
    'priority' => 4,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'contact_address_title',
    'label'    => esc_html__('Adres Başlık', 'novena'),
    'default'  => esc_html__('Adres Başlık', 'novena'),
    'section'  => 'novena_contact_page_section',
    'priority' => 5,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'contact_address_text',
    'label'    => esc_html__('Adres Text', 'novena'),
    'default'  => esc_html__('North Main Street,Brooklyn Australia', 'novena'),
    'section'  => 'novena_contact_page_section',
    'priority' => 6,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'contact_page_title',
    'label'    => esc_html__('İletişim', 'novena'),
    'default'  => esc_html__('İletişim', 'novena'),
    'section'  => 'novena_contact_page_section',
    'priority' => 7,
]);

Kirki::add_field('novena', [
    'type'     => 'textarea',
    'settings' => 'contact_page_text',
    'label'    => esc_html__('İletişim Acıklama', 'novena'),
    'default'  => esc_html__('İletişim Acıklama', 'novena'),
    'section'  => 'novena_contact_page_section',
    'priority' => 8,
]);

Kirki::add_field('novena', [
    'type'        => 'code',
    'settings'    => 'contact_page_map',
    'label'       => esc_html__('Google Map', 'novena'),
    'description' => esc_html__('Google Map Ekleyin', 'novena'),
    'section'     => 'novena_contact_page_section',
    'choices'     => [
        'language' => 'css',
    ],
]);



// Randevu Al
Kirki::add_panel('appointment_page_settings', array(
    'priority'    => 4,
    'title'       => esc_html__('Randevu Al', 'novena'),
    'description' => esc_html__('Randevu Al Sayfasını Düzenleyin', 'novena'),
    'icon' => 'dashicons-align-wide',
));

Kirki::add_section('novena_appointmen_page_section', array(
    'title'    => esc_html__('Randevu Al', 'novena'),
    'panel'    => 'appointment_page_settings',
    'priority' => 1,
));

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'appointmen_page_title',
    'label'    => esc_html__('Randevu Al Başlık', 'novena'),
    'default'  => esc_html__('Randevu Al', 'novena'),
    'section'  => 'novena_appointmen_page_section',
    'priority' => 2,
]);

Kirki::add_field('novena', [
    'type'     => 'textarea',
    'settings' => 'appointmen_page_text',
    'label'    => esc_html__('Randevu Al Acıklama', 'novena'),
    'default'  => esc_html__('Randevu Al Acıklama', 'novena'),
    'section'  => 'novena_appointmen_page_section',
    'priority' => 3,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'appointmen_emergency_title',
    'label'    => esc_html__('Acil Servis Başlık', 'novena'),
    'default'  => esc_html__('Acil Servis!', 'novena'),
    'section'  => 'novena_appointmen_page_section',
    'priority' => 4,
]);

Kirki::add_field('novena', [
    'type'     => 'text',
    'settings' => 'appointmen_emergency_phone',
    'label'    => esc_html__('Acil Servis Telefon', 'novena'),
    'default'  => esc_html__('+90 216 000 00 00', 'novena'),
    'section'  => 'novena_appointmen_page_section',
    'priority' => 4,
]);

// Footer Ayarları
Kirki::add_panel('footer_settings', array(
    'priority'    => 5,
    'title'       => esc_html__('Footer', 'novena'),
    'description' => esc_html__('Footer Düzenleyin', 'novena'),
    'icon' => 'dashicons-align-wide',
));

// Hakkımızda
Kirki::add_section('aboot_section', array(
    'title'    => esc_html__('Hakkımızda', 'novena'),
    'panel'    => 'footer_settings',
    'priority' => 1,
));

Kirki::add_field('novena', [
    'type'        => 'image',
    'settings'    => 'footer_logo',
    'label'       => esc_html__('Footer Logo', 'novena'),
    'description' => esc_html__('Footer Bölümüne logo ekle.', 'novena'),
    'section'     => 'aboot_section',
    'priority' => 1,
]);

Kirki::add_field('novena', [
    'type'     => 'textarea',
    'settings' => 'about_text',
    'label'    => esc_html__('Hakkımızda', 'novena'),
    'default'  => esc_html__('Hakkımızda Bölümü Açıklama', 'novena'),
    'section'  => 'aboot_section',
    'priority' => 2,
]);

Kirki::add_field('novena', [
    'type'        => 'repeater',
    'label'       => esc_html__('Sosyal Medya İkonları', 'novena'),
    'section'     => 'aboot_section',
    'priority'    => 3,
    'row_label' => [
        'type'  => 'text',
        'value' => esc_html__('İkon', 'novena'),
    ],
    'button_label' => esc_html__('Yeni Ekle', 'novena'),
    'settings'     => 'social_repeater_setting',
    'fields' => [
        'social_icon' => [
            'type'        => 'text',
            'label'       => esc_html__('Sosyal Medya İkon', 'novena'),
            'description' => esc_html__('Sosyal medya ikonu ekle', 'novena'),
        ],
        'social_link'  => [
            'type'        => 'text',
            'label'       => esc_html__('Sosyal medya link', 'novena'),
            'description' => esc_html__('Sosyal medya linki ekleyin', 'novena'),
        ],
    ]
]);
