<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="theme-color" content="#252627" />
<title>
	<?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class("dark-theme"); ?>>


<header class="header">
    <span class="header__inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<div class="logo">
				<span class="logo__mark">>$</span>
				<span class="logo__text"><?php bloginfo( 'name' ); ?></span>
				<span class="logo__cursor"></span>
			</div>
		</a>
        <span class="header__right">
			<nav class="menu">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'ul', 'menu_class' => 'menu__inner' ) ); ?>
			</nav>
			<span class="menu-trigger">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
					<path d="M0 0h24v24H0z" fill="none"/>
					<path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
				</svg>
			</span>
            <span class="theme-toggle unselectable">
				<svg class="theme-toggler" width="24" height="24" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M22 41C32.4934 41 41 32.4934 41 22C41 11.5066 32.4934 3 22
					3C11.5066 3 3 11.5066 3 22C3 32.4934 11.5066 41 22 41ZM7 22C7
					13.7157 13.7157 7 22 7V37C13.7157 37 7 30.2843 7 22Z"/>
				</svg>
			</span>
        </span>
    </span>
</header>
