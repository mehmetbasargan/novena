<?php
class Novena_Son_Yazlar_Widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            'novena_son_yazlar_widget',
            esc_html__('#Novena Son Yazılar', 'nevena'),
            array('description' => esc_html__('Yazıları Düzenle', 'nevena'),) // Args
        );
    }

    public function fields()
    {
        return array(
            array(
                'label'   => esc_html__('Yazı Adeti', 'novena'),
                'id'      => 'count',
                'default' => '3',
                'type'    => 'text',
            ),
        );
    }

    public function widget($args, $instance)
    {
        echo $args['before_widget'];

        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        // Output generated fields
        $count = !empty($instance['count']) ? $instance['count'] : 3;

        $widgets_query_args = array(
            'orderby'   => 'rand',
            'order' => 'DESC',
            'posts_per_page' => $count,

        );
        $widget_query = new WP_Query($widgets_query_args);

        if ($widget_query->have_posts()) {

            while ($widget_query->have_posts()) {
                $widget_query->the_post();
                get_template_part('template-parts/widget', 'posts');
            }
        } else {
            if (current_user_can('manage_options')) {
?>

                <div class="alert alert-danger">
                    <?php esc_html_e('Yazı Bulunamadı. ( Post Slider )', "accounting") ?>
                </div>

        <?php
            }
        }
        wp_reset_postdata();




        echo $args['after_widget'];
    }

    public function field_generator($instance)
    {
        $output = '';
        foreach ($this->fields() as $widget_field) {
            $default = '';
            if (isset($widget_field['default'])) {
                $default = $widget_field['default'];
            }
            $widget_value = !empty($instance[$widget_field['id']]) ? $instance[$widget_field['id']] : esc_html__($default, 'nevena');
            switch ($widget_field['type']) {
                default:
                    $output .= '<p>';
                    $output .= '<label for="' . esc_attr($this->get_field_id($widget_field['id'])) . '">' . esc_attr($widget_field['label'], 'nevena') . ':</label> ';
                    $output .= '<input class="widefat" id="' . esc_attr($this->get_field_id($widget_field['id'])) . '" name="' . esc_attr($this->get_field_name($widget_field['id'])) . '" type="' . $widget_field['type'] . '" value="' . esc_attr($widget_value) . '">';
                    $output .= '</p>';
            }
        }
        echo $output;
    }

    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : esc_html__('', 'nevena');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_attr_e('Title:'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
<?php
        $this->field_generator($instance);
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        foreach ($this->fields() as $widget_field) {
            switch ($widget_field['type']) {
                default:
                    $instance[$widget_field['id']] = (!empty($new_instance[$widget_field['id']])) ? strip_tags($new_instance[$widget_field['id']]) : '';
            }
        }
        return $instance;
    }
}

function novena_register_son_yazlar_widget()
{
    register_widget('Novena_Son_Yazlar_Widget');
}
add_action('widgets_init', 'novena_register_son_yazlar_widget');
