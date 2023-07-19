<?php
class Cps_Ranking_Widget extends WP_Widget {
	
	public function __construct() {
		$widget_options = array(
			'classname'                     => 'widget-ranking',
			'customize_selective_refresh'   => FALSE,
		);

		parent::__construct(
			'styled_post_list1_widget',// ID
			__('人気トップ3位ランキング', 'spth_w'),
			array(
				'classname' => 'widget-ranking',
				'description' => __('人気トップ3位を任意にランキングすることができます。', 'spth_w')
			)
		);
	}
	
	public function widget( $args, $instance ) {
		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		$cps_ranking_style = apply_filters( 'widget_radio', empty( $instance['cps_ranking_style'] ) ? 'have-rank' : $instance['cps_ranking_style'], $instance, $this->id_base );

		$cps_ranking01_adtag = apply_filters( 'widget_body', empty( $instance['cps_ranking01_adtag'] ) ? '' : $instance['cps_ranking01_adtag'], $instance, $this->id_base );
		$cps_ranking01_url = apply_filters( 'widget_body', empty( $instance['cps_ranking01_url'] ) ? 'http://example.com' : $instance['cps_ranking01_url'], $instance, $this->id_base );
		$cps_ranking01_info = apply_filters( 'widget_body', empty( $instance['cps_ranking01_info'] ) ? 'ここに説明文を入力してください。' : $instance['cps_ranking01_info'], $instance, $this->id_base );
		$cps_ranking01_title = apply_filters( 'widget_text', empty( $instance['cps_ranking01_title'] ) ? 'タイトルを入力してください' : $instance['cps_ranking01_title'], $instance, $this->id_base );
		$cps_ranking01_btn = apply_filters( 'widget_text', empty( $instance['cps_ranking01_btn'] ) ? '詳細ページ' : $instance['cps_ranking01_btn'], $instance, $this->id_base );
		$cps_ranking01_btn_ocl = apply_filters( 'widget_text', empty( $instance['cps_ranking01_btn_ocl'] ) ? '公式ページ' : $instance['cps_ranking01_btn_ocl'], $instance, $this->id_base );
		$cps_ranking01_url_ocl = apply_filters( 'widget_body', empty( $instance['cps_ranking01_url_ocl'] ) ? 'http://example.com' : $instance['cps_ranking01_url_ocl'], $instance, $this->id_base );

		$cps_ranking02_adtag = apply_filters( 'widget_body', empty( $instance['cps_ranking02_adtag'] ) ? '' : $instance['cps_ranking02_adtag'], $instance, $this->id_base );
		$cps_ranking02_url = apply_filters( 'widget_body', empty( $instance['cps_ranking02_url'] ) ? 'http://example.com' : $instance['cps_ranking02_url'], $instance, $this->id_base );
		$cps_ranking02_info = apply_filters( 'widget_body', empty( $instance['cps_ranking02_info'] ) ? 'ここに説明文を入力してください。' : $instance['cps_ranking02_info'], $instance, $this->id_base );
		$cps_ranking02_title = apply_filters( 'widget_text', empty( $instance['cps_ranking02_title'] ) ? 'タイトルを入力してください' : $instance['cps_ranking02_title'], $instance, $this->id_base );
		$cps_ranking02_btn = apply_filters( 'widget_text', empty( $instance['cps_ranking02_btn'] ) ? '詳細ページ' : $instance['cps_ranking02_btn'], $instance, $this->id_base );
		$cps_ranking02_btn_ocl = apply_filters( 'widget_text', empty( $instance['cps_ranking02_btn_ocl'] ) ? '公式ページ' : $instance['cps_ranking02_btn_ocl'], $instance, $this->id_base );
		$cps_ranking02_url_ocl = apply_filters( 'widget_body', empty( $instance['cps_ranking02_url_ocl'] ) ? 'http://example.com' : $instance['cps_ranking02_url_ocl'], $instance, $this->id_base );
		
		$cps_ranking03_adtag = apply_filters( 'widget_body', empty( $instance['cps_ranking03_adtag'] ) ? '' : $instance['cps_ranking03_adtag'], $instance, $this->id_base );
		$cps_ranking03_url = apply_filters( 'widget_body', empty( $instance['cps_ranking03_url'] ) ? 'http://example.com' : $instance['cps_ranking03_url'], $instance, $this->id_base );
		$cps_ranking03_info = apply_filters( 'widget_body', empty( $instance['cps_ranking03_info'] ) ? 'ここに説明文を入力してください。' : $instance['cps_ranking03_info'], $instance, $this->id_base );
		$cps_ranking03_title = apply_filters( 'widget_text', empty( $instance['cps_ranking03_title'] ) ? 'タイトルを入力してください' : $instance['cps_ranking03_title'], $instance, $this->id_base );
		$cps_ranking03_btn = apply_filters( 'widget_text', empty( $instance['cps_ranking03_btn'] ) ? '詳細ページ' : $instance['cps_ranking03_btn'], $instance, $this->id_base );
		$cps_ranking03_btn_ocl = apply_filters( 'widget_text', empty( $instance['cps_ranking03_btn_ocl'] ) ? '公式ページ' : $instance['cps_ranking03_btn_ocl'], $instance, $this->id_base );
		$cps_ranking03_url_ocl = apply_filters( 'widget_body', empty( $instance['cps_ranking03_url_ocl'] ) ? 'http://example.com' : $instance['cps_ranking03_url_ocl'], $instance, $this->id_base );

		echo $args['before_widget'];
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title'];
		} ?>
		<?php

			$luxe01 = get_template_directory_uri().'/assets/img/rank01.png';
			$luxe02 = get_template_directory_uri().'/assets/img/rank02.png';
			$luxe03 = get_template_directory_uri().'/assets/img/rank03.png';

			$girly01 = get_template_directory_uri().'/assets/img/rank01no.png';
			$girly02 = get_template_directory_uri().'/assets/img/rank02no.png';
			$girly03 = get_template_directory_uri().'/assets/img/rank03no.png';
		?>
            <div class="wide-layout">
				<ul class="simple-style">
					<li>
						<p class="side-ranking-title" itemprop="headline">
							<?php if( $cps_ranking_style == 'have-rank' ) : ?>
								<?php echo '<img class="ranking-number-luxe" src="'.$luxe01.'" />'; ?>
							<?php elseif( $cps_ranking_style == 'no-rank' ) : ?>
								<?php echo '<img class="ranking-number-girly" src="'.$girly01.'" />'; ?>
							<?php endif; ?>
							<?php echo $cps_ranking01_title; ?>
						</p>
						<div class="side-ranking-meta" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
							<figure class="side-ranking-img">
								<?php echo $cps_ranking01_adtag; ?>
							</figure>
							<div class="side-ranking-info">
								<?php echo $cps_ranking01_info; ?>
							</div>
						</div>
						<div class="side-btn-box">
							<?php if( ! empty($cps_ranking01_url) ): ?>
								<div class="color-button01 side-ranking-btn">
									<a href="<?php echo $cps_ranking01_url; ?>"><?php echo $cps_ranking01_btn; ?></a>
								</div>
							<?php elseif( empty($cps_ranking01_url) ): ?>
								<?php echo $cps_ranking01_btn; ?>
							<?php endif; ?>
							<?php if( ! empty($cps_ranking01_url_ocl) ): ?>
								<div class="color-button02 side-ranking-btn">
									<a href="<?php echo $cps_ranking01_url_ocl; ?>" target="_blank"><?php echo $cps_ranking01_btn_ocl; ?></a>
								</div>
							<?php elseif( empty($cps_ranking01_url_ocl) ): ?>
								<?php echo $cps_ranking01_btn_ocl; ?>
							<?php endif; ?>
						</div>
					</li>

					<li>
						<p class="side-ranking-title" itemprop="headline">
							<?php if( $cps_ranking_style == 'have-rank' ) : ?>
								<?php echo '<img class="ranking-number-luxe" src="'.$luxe02.'" />'; ?>
							<?php elseif( $cps_ranking_style == 'no-rank' ) : ?>
								<?php echo '<img class="ranking-number-girly" src="'.$girly02.'" />'; ?>
							<?php endif; ?>
							<?php echo $cps_ranking02_title; ?>
						</p>
						<div class="side-ranking-meta" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
							<figure class="side-ranking-img">
								<?php echo $cps_ranking02_adtag; ?>
							</figure>
							<div class="side-ranking-info">
								<?php echo $cps_ranking02_info; ?>
							</div>
						</div>
						<div class="side-btn-box">
							<?php if( ! empty($cps_ranking02_url) ): ?>
								<div class="color-button01 side-ranking-btn">
									<a href="<?php echo $cps_ranking02_url; ?>"><?php echo $cps_ranking02_btn; ?></a>
								</div>
							<?php elseif( empty($cps_ranking02_url) ): ?>
								<?php echo $cps_ranking02_btn; ?>
							<?php endif; ?>
							<?php if( ! empty($cps_ranking02_url_ocl) ): ?>
								<div class="color-button02 side-ranking-btn">
									<a href="<?php echo $cps_ranking02_url_ocl; ?>" target="_blank"><?php echo $cps_ranking02_btn_ocl; ?></a>
								</div>
							<?php elseif( empty($cps_ranking02_url_ocl) ): ?>
								<?php echo $cps_ranking02_btn_ocl; ?>
							<?php endif; ?>
						</div>
					</li>

					<li>
						<p class="side-ranking-title" itemprop="headline">
							<?php if( $cps_ranking_style == 'have-rank' ) : ?>
								<?php echo '<img class="ranking-number-luxe" src="'.$luxe03.'" />'; ?>
							<?php elseif( $cps_ranking_style == 'no-rank' ) : ?>
								<?php echo '<img class="ranking-number-girly" src="'.$girly03.'" />'; ?>
							<?php endif; ?>
							<?php echo $cps_ranking03_title; ?>
						</p>
						<div class="side-ranking-meta" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
							<figure class="side-ranking-img">
								<?php echo $cps_ranking03_adtag; ?>
							</figure>
							<div class="side-ranking-info">
								<?php echo $cps_ranking03_info; ?>
							</div>
						</div>
						<div class="side-btn-box">
							<?php if( ! empty($cps_ranking03_url) ): ?>
								<div class="color-button01 side-ranking-btn">
									<a href="<?php echo $cps_ranking03_url; ?>"><?php echo $cps_ranking03_btn; ?></a>
								</div>
							<?php elseif( empty($cps_ranking03_url) ): ?>
								<?php echo $cps_ranking03_btn; ?>
							<?php endif; ?>
							<?php if( ! empty($cps_ranking03_url_ocl) ): ?>
								<div class="color-button02 side-ranking-btn">
									<a href="<?php echo $cps_ranking03_url_ocl; ?>" target="_blank"><?php echo $cps_ranking03_btn_ocl; ?></a>
								</div>
							<?php elseif( empty($cps_ranking03_url_ocl) ): ?>
								<?php echo $cps_ranking03_btn_ocl; ?>
							<?php endif; ?>
						</div>
					</li>
				</ul>
			</div>
		<?php
		echo $args['after_widget'];
	}
	
	public function form( $instance ) {
		$defaults = array(
			'title' => '',
			'cps_ranking_style' => 'have-rank',
			'cps_ranking01_adtag' => '',
			'cps_ranking01_url' => 'http://example.com',
			'cps_ranking01_info' => 'ここに説明文を入力してください。',
			'cps_ranking01_title' => 'タイトルを入力してください',
			'cps_ranking01_btn' => '詳細ページ',
			'cps_ranking01_btn_ocl' => '公式ページ',
			'cps_ranking01_url_ocl' => 'http://example.com',
			'cps_ranking02_adtag' => '',
			'cps_ranking02_url' => 'http://example.com',
			'cps_ranking02_info' => 'ここに説明文を入力してください。',
			'cps_ranking02_title' => 'タイトルを入力してください',
			'cps_ranking02_btn' => '詳細ページ',
			'cps_ranking02_btn_ocl' => '公式ページ',
			'cps_ranking02_url_ocl' => 'http://example.com',
			'cps_ranking03_adtag' => '',
			'cps_ranking03_url' => 'http://example.com',
			'cps_ranking03_info' => 'ここに説明文を入力してください。',
			'cps_ranking03_title' => 'タイトルを入力してください',
			'cps_ranking03_btn' => '詳細ページ',
			'cps_ranking03_btn_ocl' => '公式ページ',
			'cps_ranking03_url_ocl' => 'http://example.com',
		);
		$instance   = wp_parse_args( (array) $instance, $defaults );
		$title  = sanitize_text_field( $instance['title'] );
		$cps_ranking_style  = $instance['cps_ranking_style'];
		
		$cps_ranking01_adtag  = $instance['cps_ranking01_adtag'];
		$cps_ranking01_url  = $instance['cps_ranking01_url'];
		$cps_ranking01_info  = $instance['cps_ranking01_info'];
		$cps_ranking01_title  = $instance['cps_ranking01_title'];
		$cps_ranking01_btn  = $instance['cps_ranking01_btn'];
		$cps_ranking01_btn_ocl  = $instance['cps_ranking01_btn_ocl'];
		$cps_ranking01_url_ocl  = $instance['cps_ranking01_url_ocl'];
		
		$cps_ranking02_adtag  = $instance['cps_ranking02_adtag'];
		$cps_ranking02_url  = $instance['cps_ranking02_url'];
		$cps_ranking02_info  = $instance['cps_ranking02_info'];
		$cps_ranking02_title  = $instance['cps_ranking02_title'];
		$cps_ranking02_btn  = $instance['cps_ranking02_btn'];
		$cps_ranking02_btn_ocl  = $instance['cps_ranking02_btn_ocl'];
		$cps_ranking02_url_ocl  = $instance['cps_ranking02_url_ocl'];
		
		$cps_ranking03_adtag  = $instance['cps_ranking03_adtag'];
		$cps_ranking03_url  = $instance['cps_ranking03_url'];
		$cps_ranking03_info  = $instance['cps_ranking03_info'];
		$cps_ranking03_title  = $instance['cps_ranking03_title'];
		$cps_ranking03_btn  = $instance['cps_ranking03_btn'];
		$cps_ranking03_btn_ocl  = $instance['cps_ranking03_btn_ocl'];
		$cps_ranking03_url_ocl  = $instance['cps_ranking03_url_ocl'];

		
		?>
		<style type="text/css">
			.caption label{
				font-weight: bold;
				font-size: 0.8rem!important;
			}
			#media{
				margin-top: 10px;
			}
			input, button, textarea, select {
				-webkit-appearance: none;
				-moz-appearance: none;
				appearance: none;
				cursor: pointer;
			}
			input[type="button"]{
				padding: 10px;
				font-size: 12px;
				background: #eee;
				border: 3px #aaa solid;
			}

		</style>
		<p class="caption">
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('ランキングタイトル'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
		</p>
		<p class="caption">
			<label for="<?php echo $this->get_field_id('cps_ranking_style'); ?>"><?php _e('スタイル'); ?></label><br>
			<div style="padding: 5px; margin-top: -12px; background: #eee;" >

				<input class="widefat" id="<?php echo $this->get_field_id('cps_ranking_style'); ?>" name="<?php echo $this->get_field_name('cps_ranking_style'); ?>" type="radio"<?php checked('have-rank', $cps_ranking_style); ?> value="have-rank" />順位有り&nbsp;&nbsp;&nbsp;

				<input class="widefat" id="<?php echo $this->get_field_id('cps_ranking_style'); ?>" name="<?php echo $this->get_field_name('cps_ranking_style'); ?>" type="radio"<?php checked('no-rank', $cps_ranking_style); ?> value="no-rank" />順位なし
			</div>
		</p>


		<div style="border-bottom: 2px dashed #888; height: 15px;"></div>
		<!--ランキング１-->

		<div style="background:#fcc800; font-size: 16px; font-weight: bold; color: #fff; margin-top: 30px!important; padding: 10px">ランキング１位</div>
		
		<p class="caption">
			<label for="<?php echo $this->get_field_id('cps_ranking01_title'); ?>"><?php _e('タイトル'); ?></label>
			<textarea class="widefat" id="<?php echo $this->get_field_id('cps_ranking01_title'); ?>" name="<?php echo $this->get_field_name('cps_ranking01_title'); ?>" type="text" rows="1"><?php echo $cps_ranking01_title; ?></textarea>
		</p>
		
		<p class="caption">
			<label for="<?php echo $this->get_field_id('cps_ranking01_adtag'); ?>"><?php _e('広告タグ'); ?></label>
			<textarea rows="5" class="widefat" id="<?php echo $this->get_field_id('cps_ranking01_adtag'); ?>" name="<?php echo $this->get_field_name('cps_ranking01_adtag'); ?>" type="text"><?php echo $cps_ranking01_adtag; ?></textarea>
		</p>
		
		<p class="caption">
			<label for="<?php echo $this->get_field_id('cps_ranking01_info'); ?>"><?php _e('説明'); ?></label>
			<textarea rows="5" class="widefat" id="<?php echo $this->get_field_id('cps_ranking01_info'); ?>" name="<?php echo $this->get_field_name('cps_ranking01_info'); ?>" type="text"><?php echo $cps_ranking01_info; ?></textarea>
		</p>

		<p class="caption">
			<label for="<?php echo $this->get_field_id('cps_ranking01_url'); ?>"><?php _e('詳細ページのURL'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('cps_ranking01_url'); ?>" name="<?php echo $this->get_field_name('cps_ranking01_url'); ?>" type="text" value="<?php echo $cps_ranking01_url; ?>" />
		</p>
		<p class="caption">
			<label for="<?php echo $this->get_field_id('cps_ranking01_btn'); ?>"><?php _e('詳細ページのボタン文字'); ?></label>
			<textarea class="widefat" id="<?php echo $this->get_field_id('cps_ranking01_btn'); ?>" name="<?php echo $this->get_field_name('cps_ranking01_btn'); ?>" type="text" rows="2"><?php echo $cps_ranking01_btn; ?></textarea>
		</p>
		<p class="caption">
			<label for="<?php echo $this->get_field_id('cps_ranking01_url_ocl'); ?>"><?php _e('公式ページのURL'); ?></label>
			<textarea class="widefat" id="<?php echo $this->get_field_id('cps_ranking01_url_ocl'); ?>" name="<?php echo $this->get_field_name('cps_ranking01_url_ocl'); ?>" type="text" rows="2"><?php echo $cps_ranking01_url_ocl; ?></textarea>
		</p>
		</p>
		<p class="caption">
			<label for="<?php echo $this->get_field_id('cps_ranking01_btn_ocl'); ?>"><?php _e('公式ページのボタン文字'); ?></label>
			<textarea class="widefat" id="<?php echo $this->get_field_id('cps_ranking01_btn_ocl'); ?>" name="<?php echo $this->get_field_name('cps_ranking01_btn_ocl'); ?>" type="text" rows="2"><?php echo $cps_ranking01_btn_ocl; ?></textarea>
		</p>


		<!--ランキング２-->

		<div style="background:#c9caca; font-size: 16px; font-weight: bold; color: #fff; margin-top: 30px!important; padding: 10px">ランキング２位</div>

		<p class="caption">
			<label for="<?php echo $this->get_field_id('cps_ranking02_title'); ?>"><?php _e('タイトル'); ?></label>
			<textarea class="widefat" id="<?php echo $this->get_field_id('cps_ranking02_title'); ?>" name="<?php echo $this->get_field_name('cps_ranking02_title'); ?>" type="text" rows="1"><?php echo $cps_ranking02_title; ?></textarea>
		</p>
		
		<p class="caption">
			<label for="<?php echo $this->get_field_id('cps_ranking02_adtag'); ?>"><?php _e('広告タグ'); ?></label>
			<textarea rows="5" class="widefat" id="<?php echo $this->get_field_id('cps_ranking02_adtag'); ?>" name="<?php echo $this->get_field_name('cps_ranking02_adtag'); ?>" type="text"><?php echo $cps_ranking02_adtag; ?></textarea>
		</p>
		
		<p class="caption">
			<label for="<?php echo $this->get_field_id('cps_ranking02_info'); ?>"><?php _e('説明'); ?></label>
			<textarea rows="5" class="widefat" id="<?php echo $this->get_field_id('cps_ranking02_info'); ?>" name="<?php echo $this->get_field_name('cps_ranking02_info'); ?>" type="text"><?php echo $cps_ranking02_info; ?></textarea>
		</p>
		
		<p class="caption">
			<label for="<?php echo $this->get_field_id('cps_ranking02_url'); ?>"><?php _e('詳細ページのURL'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('cps_ranking02_url'); ?>" name="<?php echo $this->get_field_name('cps_ranking02_url'); ?>" type="text" value="<?php echo $cps_ranking02_url; ?>" />
		</p>
		<p class="caption">
			<label for="<?php echo $this->get_field_id('cps_ranking02_btn'); ?>"><?php _e('詳細ページのボタン文字'); ?></label>
			<textarea class="widefat" id="<?php echo $this->get_field_id('cps_ranking02_btn'); ?>" name="<?php echo $this->get_field_name('cps_ranking02_btn'); ?>" type="text" rows="2"><?php echo $cps_ranking02_btn; ?></textarea>
		</p>
		<p class="caption">
			<label for="<?php echo $this->get_field_id('cps_ranking02_url_ocl'); ?>"><?php _e('公式ページのURL'); ?></label>
			<textarea class="widefat" id="<?php echo $this->get_field_id('cps_ranking02_url_ocl'); ?>" name="<?php echo $this->get_field_name('cps_ranking02_url_ocl'); ?>" type="text" rows="2"><?php echo $cps_ranking02_url_ocl; ?></textarea>
		</p>
		<p class="caption">
			<label for="<?php echo $this->get_field_id('cps_ranking02_btn_ocl'); ?>"><?php _e('公式ページのボタン文字'); ?></label>
			<textarea class="widefat" id="<?php echo $this->get_field_id('cps_ranking02_btn_ocl'); ?>" name="<?php echo $this->get_field_name('cps_ranking02_btn_ocl'); ?>" type="text" rows="2"><?php echo $cps_ranking02_btn_ocl; ?></textarea>
		</p>



		<!--ランキング３-->

		<div style="background:#ba8b40; font-size: 16px; font-weight: bold; color: #fff; margin-top: 30px!important; padding: 10px">ランキング３位</div>

		<p class="caption">
			<label for="<?php echo $this->get_field_id('cps_ranking03_title'); ?>"><?php _e('タイトル'); ?></label>
			<textarea class="widefat" id="<?php echo $this->get_field_id('cps_ranking03_title'); ?>" name="<?php echo $this->get_field_name('cps_ranking03_title'); ?>" type="text" rows="1"><?php echo $cps_ranking03_title; ?></textarea>
		</p>
		
		<p class="caption">
			<label for="<?php echo $this->get_field_id('cps_ranking03_adtag'); ?>"><?php _e('広告タグ'); ?></label>
			<textarea rows="5" class="widefat" id="<?php echo $this->get_field_id('cps_ranking03_adtag'); ?>" name="<?php echo $this->get_field_name('cps_ranking03_adtag'); ?>" type="text"><?php echo $cps_ranking03_adtag; ?></textarea>
		</p>
		
		<p class="caption">
			<label for="<?php echo $this->get_field_id('cps_ranking03_info'); ?>"><?php _e('説明'); ?></label>
			<textarea rows="5" class="widefat" id="<?php echo $this->get_field_id('cps_ranking03_info'); ?>" name="<?php echo $this->get_field_name('cps_ranking03_info'); ?>" type="text"><?php echo $cps_ranking03_info; ?></textarea>
		</p>
		
		<p class="caption">
			<label for="<?php echo $this->get_field_id('cps_ranking03_url'); ?>"><?php _e('詳細ページのURL'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('cps_ranking03_url'); ?>" name="<?php echo $this->get_field_name('cps_ranking03_url'); ?>" type="text" value="<?php echo $cps_ranking03_url; ?>" />
		</p>
		<p class="caption">
			<label for="<?php echo $this->get_field_id('cps_ranking03_btn'); ?>"><?php _e('詳細ページのボタン文字'); ?></label>
			<textarea class="widefat" id="<?php echo $this->get_field_id('cps_ranking03_btn'); ?>" name="<?php echo $this->get_field_name('cps_ranking03_btn'); ?>" type="text" rows="2"><?php echo $cps_ranking03_btn; ?></textarea>
		</p>
		<p class="caption">
			<label for="<?php echo $this->get_field_id('cps_ranking03_url_ocl'); ?>"><?php _e('公式ページのURL'); ?></label>
			<textarea class="widefat" id="<?php echo $this->get_field_id('cps_ranking03_url_ocl'); ?>" name="<?php echo $this->get_field_name('cps_ranking03_url_ocl'); ?>" type="text" rows="2"><?php echo $cps_ranking03_url_ocl; ?></textarea>
		</p>
		<p class="caption">
			<label for="<?php echo $this->get_field_id('cps_ranking03_btn_ocl'); ?>"><?php _e('公式ページのボタン文字'); ?></label>
			<textarea class="widefat" id="<?php echo $this->get_field_id('cps_ranking03_btn_ocl'); ?>" name="<?php echo $this->get_field_name('cps_ranking03_btn_ocl'); ?>" type="text" rows="2"><?php echo $cps_ranking03_btn_ocl; ?></textarea>
		</p>

		<?php
	}
	
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title']  = sanitize_text_field( $new_instance['title'] );
		$instance['cps_ranking_style'] = $new_instance['cps_ranking_style'];
		
		$instance['cps_ranking01_adtag'] = $new_instance['cps_ranking01_adtag'];
		$instance['cps_ranking01_url'] = $new_instance['cps_ranking01_url'];
		$instance['cps_ranking01_info'] = $new_instance['cps_ranking01_info'];
		$instance['cps_ranking01_title'] = $new_instance['cps_ranking01_title'];
		$instance['cps_ranking01_btn'] = $new_instance['cps_ranking01_btn'];
		$instance['cps_ranking01_btn_ocl'] = $new_instance['cps_ranking01_btn_ocl'];
		$instance['cps_ranking01_url_ocl'] = $new_instance['cps_ranking01_url_ocl'];

		$instance['cps_ranking02_adtag'] = $new_instance['cps_ranking02_adtag'];
		$instance['cps_ranking02_url'] = $new_instance['cps_ranking02_url'];
		$instance['cps_ranking02_info'] = $new_instance['cps_ranking02_info'];
		$instance['cps_ranking02_title'] = $new_instance['cps_ranking02_title'];
		$instance['cps_ranking02_btn'] = $new_instance['cps_ranking02_btn'];
		$instance['cps_ranking02_btn_ocl'] = $new_instance['cps_ranking02_btn_ocl'];
		$instance['cps_ranking02_url_ocl'] = $new_instance['cps_ranking02_url_ocl'];

		$instance['cps_ranking03_adtag'] = $new_instance['cps_ranking03_adtag'];
		$instance['cps_ranking03_url'] = $new_instance['cps_ranking03_url'];
		$instance['cps_ranking03_info'] = $new_instance['cps_ranking03_info'];
		$instance['cps_ranking03_title'] = $new_instance['cps_ranking03_title'];
		$instance['cps_ranking03_btn'] = $new_instance['cps_ranking03_btn'];
		$instance['cps_ranking03_btn_ocl'] = $new_instance['cps_ranking03_btn_ocl'];
		$instance['cps_ranking03_url_ocl'] = $new_instance['cps_ranking03_url_ocl'];

		return $instance;
	}
}

function theme_register_widget() {
	register_widget( 'Cps_Ranking_Widget' );
}
add_action( 'widgets_init', 'theme_register_widget' );
?>