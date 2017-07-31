<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<title><?php bloginfo('name'); wp_title(); ?></title>

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" />
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:700" rel="stylesheet">

			<!--[if lt IE 9]>
			<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
			<![endif]-->
				<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php get_template_part('pages/header_1'); ?>