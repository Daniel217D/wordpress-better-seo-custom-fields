<?php 
	class scfClassView
	{
		public static function scf_filter_function_tagtitle( $title )
		{
			if( !is_category() && !is_tag() ) return $title;
			$term = get_queried_object();
			$title = get_metadata('term', $term->term_id, 'title', 1 );

			return esc_html( $title );
		}


		static function scf_add_taxseo_head_meta_fields()
		{
//			if( !is_category() && !is_tag() ) return;

			if(is_category() || (function_exists('is_product_category') && is_product_category()) )
			{
				$term = get_queried_object();
				$description = get_term_meta( $term->term_id, 'description', true );
				$keywords = get_term_meta( $term->term_id, 'keywords', true );

				if(!empty($description))
				{
					echo '<meta name="description" content="'.esc_html( $description ).'">'. "\n";
				}
				if(!empty($keywords))
				{
					echo '<meta name="keywords" content="'.esc_html( $keywords ).'">'. "\n";
				}
			}
			else if(is_tag())
			{
				$term = get_queried_object();
				$description = get_metadata('term', $term->term_id, 'description', 1 );
				$keywords = get_metadata('term', $term->term_id, 'keywords', 1 );
				
				if(!empty($description))
				{
					echo '<meta name="description" content="'.esc_html( $description ).'">'. "\n";
				}
				if(!empty($keywords))
				{
					echo '<meta name="keywords" content="'.esc_html( $keywords ).'">'. "\n";
				}
			}
		}
	}


?>