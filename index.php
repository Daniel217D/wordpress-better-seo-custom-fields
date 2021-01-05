<?php
/*
Plugin Name: Better SEO Custom Fields
Description: Better SEO Custom Fields plugin allows you to add custom meta tags for category (woocommerce) and tag pages. You can override the title and set meta description and meta keywords for category and tag pages.
Plugin URI: https://github.com/Daniel217D/wordpress-seo-custom-fields
Author: Daniil Dubchenko
Version: 3.0.0
License: GPL2
*/

/*

    Copyright (C) 2019 Daniil Dubchenko  (email: daniel217032001@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


define('SEO_Custom_Fields', true);
define('SCF_PLAGIN_PATH', plugin_dir_path(__FILE__));

include_once('scfClassGeneral.php');
include_once('scfClassView.php');

add_filter('aioseo_disable_title_rewrites', '__return_true');

add_action('wp_head', ['scfClassView', 'print_meta_fields']);
add_action('document_title_parts', ['scfClassView', 'title_filter']);

if(is_admin()) {
    $taxnames = ['category', 'post_tag'];

    if (class_exists('WooCommerce')) {
        $taxnames[] = 'product_cat';
    }

    foreach ($taxnames as $taxname) {
        add_action("{$taxname}_add_form_fields", ['scfClassGeneral', 'print_adding_fields']);
        add_action("{$taxname}_edit_form_fields", ['scfClassGeneral', 'print_editing_fields']);

        add_action("create_{$taxname}", ['scfClassGeneral', 'save_data']);
        add_action("edited_{$taxname}", ['scfClassGeneral', 'save_data']);
    }
}