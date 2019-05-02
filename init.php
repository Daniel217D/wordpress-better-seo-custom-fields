<?php 

	include_once (SCF_PLAGIN_PATH.'general.php');

	class scfClassInitialization
	{
		public static function scf_add_menu_seo()
		{
			add_options_page( 'Add SEO Custom Fields', 'SEO Custom Fields', 'manage_options', 'metaseo_settings_options', array(__CLASS__,'scf_add_pluginpage') );
		}

		public static function scf_metaseo_admin_settings()
		{
			register_setting( 'metaseo_settings_options_group', 'metaseo_settings_options', array(__CLASS__,'scf_meataseo_options_sanitize') );
			add_settings_section( 'metaseo_options_id', 'SEO Custom Fields Options', '', 'metaseo_settings_options' );
			add_settings_field( 'metaseo_options_title', 'Number symbols of title', array(__CLASS__,'scf_number_symbol_title'), 'metaseo_settings_options', 'metaseo_options_id', array('label_for' => 'metaseo_options_title') );
			add_settings_field( 'metaseo_options_description', 'Number symbols of description', array(__CLASS__,'scf_number_symbol_description'), 'metaseo_settings_options', 'metaseo_options_id', array('label_for' => 'metaseo_options_description') );
			add_action('admin_enqueue_scripts', array(__CLASS__, 'scf_seo_plugin_scrit'));

		}

		public static function scf_seo_plugin_scrit()
		{
			if(is_admin())
			{
				if(!wp_style_is('bootstrap-main'))
				{
					wp_register_style('bootstrap', plugins_url('/view/source/css/bootstrap.min.css', __FILE__));
					wp_enqueue_style('bootstrap');
					wp_register_script('bootstrap', plugins_url('/view/source/js/bootstrap.min.js', __FILE__), array('jquery'), null, true);
					wp_enqueue_script('bootstrap');
				}
			}
		}

		function scf_number_symbol_title()
		{
			$options = get_option( 'metaseo_settings_options' );
			?>
			<input type="number" min="0" max="300" name="metaseo_settings_options[metaseo_options_title]" id="metaseo_options_title" value="<?php echo (int)esc_attr( $options['metaseo_options_title'] ); ?>"> <?php
		}

		public static function scf_number_symbol_description()
		{
			$options = get_option( 'metaseo_settings_options' );
			?>
			<input type="number" min="0" max="300" name="metaseo_settings_options[metaseo_options_description]" id="metaseo_options_description" value="<?php echo (int)esc_attr( $options['metaseo_options_description'] ); ?>"> <?php
		}

		public static function scf_meataseo_options_sanitize($options)
		{
			$clean_options = array();
			foreach($options as $k => $v)
			{
				$clean_options[$k] = (int)sanitize_text_field($v);
				if($clean_options[$k] <= 0 || $clean_options[$k] > 300)
				{
					wp_die( 'Not correct input, return back and try again!' );
				}
			}
			return $clean_options;
		}

		public static function scf_add_pluginpage()
		{
			$options = get_option( 'metaseo_settings_options' ); ?>

			<div class="wrap">
				<h2>SEO Custom Fields Settings</h2>
				<p>Enter max. number of symbols of the fields title, description for categories and tags</p>
				<form action="options.php" method="post">
					<?php settings_fields( 'metaseo_settings_options_group' ); ?>
					<?php do_settings_sections( 'metaseo_settings_options' ); ?>
					<?php submit_button( ); ?>
				</form>
			</div> <?php
		}

		public static function scf_seo_activation()
		{
			return true;
		}

		public static function scf_seo_deactivation()
		{
			delete_option( 'metaseo_settings_options' );
		}
	}




?>