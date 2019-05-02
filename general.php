<?php
	class scfClassGeneral
	{
		public function scf_add_new_custom_fields( $taxonomy_slug ) 
			{
				$options = get_option( 'metaseo_settings_options' );
				$options_title = $options['metaseo_options_title'];
				$options_description = $options['metaseo_options_description']; ?>
				<script type="text/javascript">
					jQuery(document).ready(function($){
						var maxSymbol = "<?php echo $options_title ?>";
						var Percent = 0;
						$('.limit').keyup(function(){
							var CountSymbol = $(this).val().length;
							Percent = (CountSymbol/maxSymbol)*90;
							
							$('.seo-bar1').text(CountSymbol);
							if(Percent <= 70)
							{
								$('.success-limit1').css('width', Percent + '%');
							}
							else if(Percent > 70 && Percent <= 90)
							{
								var PercentWarning = Percent - 70;
								$('.warning-limit1').css('width', PercentWarning + '%');
							}
							else if(Percent > 90 && Percent <= 100)
							{
								var PercentDanger = Percent - 90;
								$('.danger-limit1').css('width', PercentDanger + '%');
							}
						});
					});

				</script>

				<script type="text/javascript">
					jQuery(document).ready(function($){
						var maxSymbol = "<?php echo $options_description ?>";
						var Percent = 0;
						$('#limit2').keyup(function(){
							var CountSymbol = $(this).val().length;
							Percent = (CountSymbol/maxSymbol)*90;
							
							$('.seo-bar2').text(CountSymbol);
							if(Percent <= 70)
							{
								$('.success-limit2').css('width', Percent + '%');
							}
							else if(Percent > 70 && Percent <= 90)
							{
								var PercentWarning = Percent - 70;
								$('.warning-limit2').css('width', PercentWarning + '%');
							}
							else if(Percent > 90 && Percent <= 100)
							{
								var PercentDanger = Percent - 90;
								$('.danger-limit2').css('width', PercentDanger + '%');
							}
						});
					});

				</script>

				<div class="form-field">
					<label for="tag-title">Category Title</label>
					<input name="extra[title]" id="tag-title" type="text" class="limit" value="" />
					<p>Enter category title here</p>

					<div class="progress" style="width: 95%;">
					  <div class="progress-bar progress-bar-success success-limit1" style="width: 0%">
						<span class="seo-bar1"></span>
					  </div>
					  <div class="progress-bar progress-bar-warning progress-bar-striped warning-limit1" style="width: 0%">
						<span></span>
					  </div>
					  <div class="progress-bar progress-bar-danger danger-limit1" style="width: 0%">
						<span></span>
					  </div>
					</div>
				</div>

				<div class="form-field">
					<label for="limit2">Category Description</label>
					<textarea name="extra[description]" id="limit2"></textarea>
					<p>Enter category description here</p>

					<div class="progress" style="width: 95%;">
					  <div class="progress-bar progress-bar-success success-limit2" style="width: 0%">
						<span class="seo-bar2"></span>
					  </div>
					  <div class="progress-bar progress-bar-warning progress-bar-striped warning-limit2" style="width: 0%">
						<span></span>
					  </div>
					  <div class="progress-bar progress-bar-danger danger-limit2" style="width: 0%">
						<span></span>
					  </div>
					</div>
				</div>

				<div class="form-field">
					<label for="tag-keywords">Category Keywords</label>
					<input name="extra[keywords]" id="tag-keywords" type="text" value="" />
					<p>Enter category keywords here</p>
				</div>
			<?php
			}


		function scf_edit_new_custom_fields( $term ) 
		{ 
			$options = get_option( 'metaseo_settings_options' );
				$options_title = $options['metaseo_options_title'];
				$options_description = $options['metaseo_options_description']; ?>
				<script type="text/javascript">
					jQuery(document).ready(function($){
						var maxSymbol = "<?php echo $options_title ?>";
						var Percent = 0;
						$('.limit').keyup(function(){
							var CountSymbol = $(this).val().length;
							Percent = (CountSymbol/maxSymbol)*90;
							
							$('.seo-bar1').text(CountSymbol);
							if(Percent <= 70)
							{
								$('.success-limit1').css('width', Percent + '%');
							}
							else if(Percent > 70 && Percent <= 90)
							{
								var PercentWarning = Percent - 70;
								$('.warning-limit1').css('width', PercentWarning + '%');
							}
							else if(Percent > 90 && Percent <= 100)
							{
								var PercentDanger = Percent - 90;
								$('.danger-limit1').css('width', PercentDanger + '%');
							}
						});
					});

				</script>

				<script type="text/javascript">
					jQuery(document).ready(function($){
						var maxSymbol = "<?php echo $options_description ?>";
						var Percent = 0;
						$('#limit2').keyup(function(){
							var CountSymbol = $(this).val().length;
							Percent = (CountSymbol/maxSymbol)*90;
							
							$('.seo-bar2').text(CountSymbol);
							if(Percent <= 70)
							{
								$('.success-limit2').css('width', Percent + '%');
							}
							else if(Percent > 70 && Percent <= 90)
							{
								var PercentWarning = Percent - 70;
								$('.warning-limit2').css('width', PercentWarning + '%');
							}
							else if(Percent > 90 && Percent <= 100)
							{
								var PercentDanger = Percent - 90;
								$('.danger-limit2').css('width', PercentDanger + '%');
							}
						});
					});

				</script>

			<tr class="form-field">
				<th scope="row" valign="top"><label for="category-title">Category Title</label></th>
				<td>
					<input type="text" name="extra[title]" class="limit" id="category-title" value="<?php echo esc_html( esc_attr( get_term_meta( $term->term_id, 'title', 1 ) ) ) ?>"><br />
					<span class="description">Enter category title here</span>
					<div class="progress" style="width: 95%;">
					  <div class="progress-bar progress-bar-success success-limit1" style="width: 0%">
						<span class="seo-bar1"></span>
					  </div>
					  <div class="progress-bar progress-bar-warning progress-bar-striped warning-limit1" style="width: 0%">
						<span></span>
					  </div>
					  <div class="progress-bar progress-bar-danger danger-limit1" style="width: 0%">
						<span></span>
					  </div>
					</div>
				</td>
				
			</tr>
			<tr class="form-field">
				<th scope="row" valign="top"><label for="limit2">Category Description</label></th>
				<td>
					<textarea name="extra[description]" id="limit2"><?php echo esc_textarea( get_term_meta( $term->term_id, 'description', 1 ) ) ?></textarea><br />
					<span class="description">Enter category description here</span>
					<div class="progress" style="width: 95%;">
					  <div class="progress-bar progress-bar-success success-limit2" style="width: 0%">
						<span class="seo-bar2"></span>
					  </div>
					  <div class="progress-bar progress-bar-warning progress-bar-striped warning-limit2" style="width: 0%">
						<span></span>
					  </div>
					  <div class="progress-bar progress-bar-danger danger-limit2" style="width: 0%">
						<span></span>
					  </div>
					</div>
				</td>
			</tr>
			<tr class="form-field">
				<th scope="row" valign="top"><label for="category-keywords">Category Keywords</label></th>
				<td>
					<input type="text" name="extra[keywords]" id="category-keywords" value="<?php echo esc_html( esc_attr( get_term_meta( $term->term_id, 'keywords', 1 ) ) ) ?>"><br />
					<span class="keywords">Enter category keywrds</span>
				</td>
			</tr>
		<?php
		}


		public function scf_action_function_addtag( $tag )
		{
			$options = get_option( 'metaseo_settings_options' );
				$options_title = $options['metaseo_options_title'];
				$options_description = $options['metaseo_options_description']; ?>
				<script type="text/javascript">
					jQuery(document).ready(function($){
						var maxSymbol = "<?php echo $options_title ?>";
						var Percent = 0;
						$('.limit').keyup(function(){
							var CountSymbol = $(this).val().length;
							Percent = (CountSymbol/maxSymbol)*90;
							
							$('.seo-bar1').text(CountSymbol);
							if(Percent <= 70)
							{
								$('.success-limit1').css('width', Percent + '%');
							}
							else if(Percent > 70 && Percent <= 90)
							{
								var PercentWarning = Percent - 70;
								$('.warning-limit1').css('width', PercentWarning + '%');
							}
							else if(Percent > 90 && Percent <= 100)
							{
								var PercentDanger = Percent - 90;
								$('.danger-limit1').css('width', PercentDanger + '%');
							}
						});
					});

				</script>

				<script type="text/javascript">
					jQuery(document).ready(function($){
						var maxSymbol = "<?php echo $options_description ?>";
						var Percent = 0;
						$('#limit2').keyup(function(){
							var CountSymbol = $(this).val().length;
							Percent = (CountSymbol/maxSymbol)*90;
							
							$('.seo-bar2').text(CountSymbol);
							if(Percent <= 70)
							{
								$('.success-limit2').css('width', Percent + '%');
							}
							else if(Percent > 70 && Percent <= 90)
							{
								var PercentWarning = Percent - 70;
								$('.warning-limit2').css('width', PercentWarning + '%');
							}
							else if(Percent > 90 && Percent <= 100)
							{
								var PercentDanger = Percent - 90;
								$('.danger-limit2').css('width', PercentDanger + '%');
							}
						});
					});

				</script>

			<div class="form-field">
				<label for="tag-title">Tag Title</label>
				<input name="extra[title]" id="tag-title" type="text" class="limit" value="" />
				<p>Enter tag title here</p>

				<div class="progress" style="width: 95%;">
					  <div class="progress-bar progress-bar-success success-limit1" style="width: 0%">
						<span class="seo-bar1"></span>
					  </div>
					  <div class="progress-bar progress-bar-warning progress-bar-striped warning-limit1" style="width: 0%">
						<span></span>
					  </div>
					  <div class="progress-bar progress-bar-danger danger-limit1" style="width: 0%">
						<span></span>
					  </div>
					</div>
			</div>
			<div class="form-field">
				<label for="limit2">Tag Description</label>
				<textarea name="extra[description]" id="limit2"></textarea>
				<p>Enter tag description here</p>

				<div class="progress" style="width: 95%;">
				  <div class="progress-bar progress-bar-success success-limit2" style="width: 0%">
					<span class="seo-bar2"></span>
				  </div>
				  <div class="progress-bar progress-bar-warning progress-bar-striped warning-limit2" style="width: 0%">
					<span></span>
				  </div>
				  <div class="progress-bar progress-bar-danger danger-limit2" style="width: 0%">
					<span></span>
				  </div>
				</div>
			</div>
			<div class="form-field">
				<label for="tag-keywords">Tag Keywords</label>
				<input name="extra[keywords]" id="tag-keywords" type="text" value="" />
				<p>Enter tag keywords here</p>
			</div>
			<?php
		}


		function scf_action_function_edittag( $term )
		{
			$options = get_option( 'metaseo_settings_options' );
				$options_title = $options['metaseo_options_title'];
				$options_description = $options['metaseo_options_description']; ?>
				<script type="text/javascript">
					jQuery(document).ready(function($){
						var maxSymbol = "<?php echo $options_title ?>";
						var Percent = 0;
						$('.limit').keyup(function(){
							var CountSymbol = $(this).val().length;
							Percent = (CountSymbol/maxSymbol)*90;
							
							$('.seo-bar1').text(CountSymbol);
							if(Percent <= 70)
							{
								$('.success-limit1').css('width', Percent + '%');
							}
							else if(Percent > 70 && Percent <= 90)
							{
								var PercentWarning = Percent - 70;
								$('.warning-limit1').css('width', PercentWarning + '%');
							}
							else if(Percent > 90 && Percent <= 100)
							{
								var PercentDanger = Percent - 90;
								$('.danger-limit1').css('width', PercentDanger + '%');
							}
						});
					});

				</script>

				<script type="text/javascript">
					jQuery(document).ready(function($){
						var maxSymbol = "<?php echo $options_description ?>";
						var Percent = 0;
						$('#limit2').keyup(function(){
							var CountSymbol = $(this).val().length;
							Percent = (CountSymbol/maxSymbol)*90;
							
							$('.seo-bar2').text(CountSymbol);
							if(Percent <= 70)
							{
								$('.success-limit2').css('width', Percent + '%');
							}
							else if(Percent > 70 && Percent <= 90)
							{
								var PercentWarning = Percent - 70;
								$('.warning-limit2').css('width', PercentWarning + '%');
							}
							else if(Percent > 90 && Percent <= 100)
							{
								var PercentDanger = Percent - 90;
								$('.danger-limit2').css('width', PercentDanger + '%');
							}
						});
					});

				</script>

			<tr class="form-field">
				<th scope="row" valign="top"><label for="tag-title">Tag Title</label></th>
				<td>
					<input type="text" name="extra[title]" class="limit" id="tag-title" value="<?php echo esc_html( esc_attr( get_term_meta( $term->term_id, 'title', 1 ) ) ) ?>"><br />
					<span class="description">Enter tag title here</span>
					<div class="progress" style="width: 95%;">
						  <div class="progress-bar progress-bar-success success-limit1" style="width: 0%">
							<span class="seo-bar1"></span>
						  </div>
						  <div class="progress-bar progress-bar-warning progress-bar-striped warning-limit1" style="width: 0%">
							<span></span>
						  </div>
						  <div class="progress-bar progress-bar-danger danger-limit1" style="width: 0%">
							<span></span>
						  </div>
					</div>
				</td>
			</tr>
			<tr class="form-field">
				<th scope="row" valign="top"><label for="limit2">Tag Description</label></th>
				<td>
					<textarea name="extra[description]" id="limit2"><?php echo esc_textarea( get_term_meta( $term->term_id, 'description', 1 ) ) ?></textarea><br />
					<span class="description">Enter tag description here</span>
					<div class="progress" style="width: 95%;">
					  <div class="progress-bar progress-bar-success success-limit2" style="width: 0%">
						<span class="seo-bar2"></span>
					  </div>
					  <div class="progress-bar progress-bar-warning progress-bar-striped warning-limit2" style="width: 0%">
						<span></span>
					  </div>
					  <div class="progress-bar progress-bar-danger danger-limit2" style="width: 0%">
						<span></span>
					  </div>
					</div>
				</td>
			</tr>
			<tr class="form-field">
				<th scope="row" valign="top"><label for="tag-keywords">Tag Keywords</label></th>
				<td>
					<input type="text" name="extra[keywords]" id="tag-keywords" value="<?php echo esc_html( esc_attr( get_term_meta( $term->term_id, 'keywords', 1 ) ) ) ?>"><br />
					<span class="keywords">Enter tag keywords here</span>
				</td>
			</tr>
		<?php
		}


		public function scf_save_custom_taxonomy_meta( $term_id ) 
		{
			if ( ! isset($_POST['extra']) )
				return;

			$extra = array_map('sanitize_text_field', $_POST['extra']);

			foreach( $extra as $key => $value ){
				if( empty($value) ){
					delete_term_meta( $term_id, $key );
					continue;
				}

				update_term_meta( $term_id, $key, $value );
			}

			return $term_id;
		}

	}


 ?>