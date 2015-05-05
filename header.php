<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Singolo Theme</title>
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>

	<body>

			<header class="header-footer-bg header-footer-bg--border">
				<div class="l-container l-container--relative nav-anchor">
					<div class="l-logo">
						<h1><a class="header__items logo" href="#">SINGOLO<span class="asterix">*</span></a></h1>
					</div>
					<a class="header__items--menu" href="index.html">
		                <p>
		                    Menu
		                    <img class="nav-icon" src="<?php bloginfo('template_url'); ?>/img/nav-icon.png" alt="nav-ion">
		                </p>
		            </a>
					<?php wp_nav_menu(array('theme_location'=>'primary')); ?>
				</div>
			</header>
			

