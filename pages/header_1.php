<header>
	<div class="container">
		<a href="/" class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class='img-responsive'>
			<span>Back 2 Health</span>
		</a>
		<?php wp_nav_menu( array('theme_location' => 'header_menu')); ?>
		<ul class="social">
			<li><a href="#facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><a href="#instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			<li><a href="#twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		</ul>
		<div class="mobile-menu"><i class="fa fa-bars" aria-hidden="true"></i></div>
	</div>
</header>