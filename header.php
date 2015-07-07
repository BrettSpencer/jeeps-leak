<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
<meta name="description" content="jeep,leaking jeep,jeep defects">
<meta name="viewport" content="width=device-width">
<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.ico" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php /* Hook for Plug-ins before the stylesheet so you can style the plug-in in css */ ?><?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" />
<!-- Remy Sharp Shim --> 
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<header>
    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span><?php bloginfo('name'); ?></span></a></h1>
    
    <nav id="nav-main">
        <?php wp_nav_menu( array( 
			'theme_location' => 'main-menu' ,
			'menu' => 'Main Menu' ,
			'container'  => 'ul', 
            'menu_id' => 'header-nav'

		) ); ?>
    </nav>
    
</header>
