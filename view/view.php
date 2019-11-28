<?php
class scfClassView
{
    static function scf_add_taxseo_head_meta_fields()
    {
        $description = '';
        $keywords = '';

        if(is_category() || self::check_woocommerce() )
        {
            $term = get_queried_object();
            $description = get_term_meta( $term->term_id, 'description', true );
            $keywords = get_term_meta( $term->term_id, 'keywords', true );
        }
        else if(is_tag())
        {
            $term = get_queried_object();
            $description = get_metadata('term', $term->term_id, 'description', 1 );
            $keywords = get_metadata('term', $term->term_id, 'keywords', 1 );
        }

        if(!empty($description))
        {
            echo '<meta name="description" content="'.esc_html( $description ).'">'. "\n";
        }

        if(!empty($keywords))
        {
            echo '<meta name="keywords" content="'.esc_html( $keywords ).'">'. "\n";
        }
    }

    static function scf_add_taxseo_head_title($title_parts)
    {
        $new_title = "";

        if(is_category() || self::check_woocommerce() )
        {
            $new_title = get_term_meta(get_queried_object()->term_id, 'title', true );
        }
        else if(is_tag())
        {
            $new_title = get_metadata(get_queried_object()->term_id, 'title', true );
        }

        if(!empty($new_title))
        {
            $title_parts['title'] = $new_title;
            return $title_parts;
        }

        return $title_parts;
    }

    public static function check_woocommerce()
    {
        return (class_exists( 'WooCommerce' ) && is_product_category());
    }
}