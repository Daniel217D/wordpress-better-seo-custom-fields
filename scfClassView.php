<?php

class scfClassView {
    static public function print_meta_fields() {
        if (self::should_print()) {
            $term = get_queried_object();
            $description = get_term_meta($term->term_id, 'description', true);
            $keywords = get_term_meta($term->term_id, 'keywords', true);

            if (!empty($description)) {
                echo '<meta name="description" content="' . esc_html($description) . '">' . "\n";
            }

            if (!empty($keywords)) {
                echo '<meta name="keywords" content="' . esc_html($keywords) . '">' . "\n";
            }
        }
    }

    static public function title_filter($title_parts) {
        if (self::should_print()) {
            $new_title = get_term_meta(get_queried_object()->term_id, 'title', true);

            if (!empty($new_title)) {
                $title_parts['title'] = $new_title;
            }
        }

        return $title_parts;
    }

    static public function should_print() {
        return is_category() || is_tag() || self::check_woocommerce();
    }

    static public function check_woocommerce() {
        return (class_exists('WooCommerce') && is_product_category());
    }
}