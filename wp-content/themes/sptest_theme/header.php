<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="UTF-8">
	<meta HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">   <!-- IEの互換表示無効 -->
	<meta name="format-detection" content="telephone=no">   <!-- 電話番号自動リンク無効 -->
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">   <!-- Skypeによる電話番号置換無効 -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" />
	<div id="fb-root"></div>
	<?php wp_head();?>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper" class="clearfix">
		<div class="common_notice">
			<i class="_icon"></i>
			<p class="_txt">見出しが入ります。見出しが入ります。</p>
		</div>
		<header id="header" class="l-header">
			<div class="container-wd">
				<div class="l-header--main">
					<div class="h-logo">
						<?php
							if(is_home() || is_front_page()) {
								?>
								<h1>
									<a href="<?php echo home_url(); ?>">
										<figure>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
										</figure>
									</a>
								</h1>
								<?php
							}else{
								?>
								<a href="<?php echo home_url(); ?>">
									<figure>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
									</figure>
								</a>
								<?php
							}
						?>
					</div>
					<div class="h-menu">
						<ul>
							<li class="_close">
								<i class="fas fa-times"></i>
								<span>メニューを閉じる</span>
							</li>
							<li>
								<a href="<?php echo home_url('mission'); ?>">
									私たちの使命
								</a>
							</li>
							<li>
								<a href="<?php echo home_url('member'); ?>">
									税理士・会計士紹介
								</a>
							</li>
							<li>
								<a href="<?php echo home_url('service'); ?>">
									事業内容
								</a>
							</li>
							<li>
								<a href="<?php echo home_url('company'); ?>">
									会社概要
								</a>
							</li>
							<li>
								<a href="<?php echo home_url('recruit'); ?>">
									採用情報
								</a>
							</li>
							<li>
								<a href="<?php echo home_url('consultation'); ?>">
									無料相談
								</a>
							</li>
							<li class="_btn">
								<a href="<?php echo home_url('contact'); ?>">お問い合わせ</a>
							</li>
						</ul>
					</div>
					<div class="menu_sp">
						<a href="#" class="menu_icon menu_icon__phone">
							<div class="menu_icon__inner">
								<i class="fas fa-phone-alt"></i>
							</div>
							<span class="menu_icon_txt">Phone</span>
						</a>
						<div class="menu_icon menu_icon__menu">
							<div class="menu_icon__inner menu_icon_line">
								<span></span>
								<span></span>
							</div>
							<span class="menu_icon_txt">MENU</span>
						</div>
					</div>
				</div>
			</div>
		</header>
