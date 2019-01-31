<!-- *****BEGIN WP HEADER***** -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Affordable and professional web design">
	<meta name="keywords" content="affordable, professional, web design, web, design, pablo, vargas">
	<meta name="author" content="Pablo Vargas">
	<title><?php wp_title(''); ?></title> 
	<link rel="stylesheet" type="text/css" href="./Style.css">
<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="container">
			<div id="brand">
			<h1><span class="highlight"> Web Design </span> Logo</h1>
			</div>
		<!-- <nav>
			<a class="current" href="index.html">Home</a>
			<a href="about.html">About</a>
			<a href="services.html">Services</a>
		</nav> -->
        <?php wp_nav_menu(); ?>
		</div>
	</header>
<!-- *****END WP HEADER***** -->