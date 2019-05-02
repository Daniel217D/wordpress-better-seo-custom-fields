<?php
/*
Plugin Name: Better SEO Custom Fields
Description: Better SEO Custom Fields plugin allows you to add custom meta tags for category (woocommerce) and tag pages. You can override the title and set meta description and meta keywords for category and tag pages.
Plugin URI: https://github.com/Daniel217D/wordpress-seo-custom-fields
Author: Daniil Dubchenko
Version: 2.0.0
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
    define('SCF_PLAGIN_PATH', plugin_dir_path( __FILE__ ));
    include_once ('init.php');
    include_once ('general.php');
    include_once ('view/view.php');
    $taxname1 = 'category';
	$taxname2 = 'post_tag';

    add_action( 'admin_menu', array('scfClassInitialization', 'scf_add_menu_seo'));
    add_action('admin_init', array('scfClassInitialization', 'scf_metaseo_admin_settings'));
	add_action("{$taxname1}_add_form_fields", array('scfClassGeneral', 'scf_add_new_custom_fields'));
	add_action("{$taxname1}_edit_form_fields", array('scfClassGeneral', 'scf_edit_new_custom_fields'));
	add_action("create_{$taxname1}", array('scfClassGeneral', 'scf_save_custom_taxonomy_meta'));
	add_action("edited_{$taxname1}", array('scfClassGeneral', 'scf_save_custom_taxonomy_meta'));
    add_action('add_tag_form_fields', array('scfClassGeneral', 'scf_action_function_addtag'));
    add_action('edit_tag_form_fields', array('scfClassGeneral', 'scf_action_function_edittag'));
    add_action("create_{$taxname2}", array('scfClassGeneral', 'scf_save_custom_taxonomy_meta'));
    add_action("edited_{$taxname2}", array('scfClassGeneral', 'scf_save_custom_taxonomy_meta'));
    add_action('wp_head', array('scfClassView', 'scf_add_taxseo_head_meta_fields'));
    register_activation_hook( __FILE__, array('scfClassInitialization', 'scf_seo_activation') );
    register_deactivation_hook( __FILE__, array('scfClassInitialization', 'scf_seo_deactivation'));

	if(class_exists( 'WooCommerce' )){
		$taxname3 = 'product_cat';
		add_action("create_{$taxname3}", array('scfClassGeneral', 'scf_save_custom_taxonomy_meta'));
		add_action("edited_{$taxname3}", array('scfClassGeneral', 'scf_save_custom_taxonomy_meta'));
	}
/*
Remove AIOSeoP from category page
Add this code to your theme if use AIOSeoP

function remove_AIOSeoP_from_category_page()
{
	if(is_category() || is_product_category()){
		global $aiosp;
		remove_action( 'wp_head', array( $aiosp, 'wp_head' ),1);
		remove_action( 'template_redirect', array( $aiosp, 'template_redirect' ),0);
	}
}

add_action( 'wp', __NAMESPACE__ . '\\remove_AIOSeoP_from_category_page' );
 */