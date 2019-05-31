<!DOCTYPE html>
<html lang="pl">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141140984-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-141140984-1');
        </script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Warsztaty Retoryczne \\\ Dominik Mazur</title>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/style.css' ?>" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600&amp;subset=latin-ext" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container">
<!-- top menu -->
    <div class="top-nav">
    <nav>
        <a id="top-logo" class="no-hover" href="<?php echo esc_url( home_url( '/' )); ?>"><img src="<?php echo get_template_directory_uri() . '/img/logo.png' ?>" class="WR-logo" alt="logo-WR"></a>
        <div class="dropdown-icon">&#9776;</div>
         <ul class="top-menu">
            <li><a id="kursy-nav" href="">kursy</a></li>
            <li><a id="opinions-nav" href="">opinie</a></li>
            <li><a id="kontakt-nav" href="">kontakt</a></li>
            <li><a href="https://www.facebook.com/warsztatyretoryczne/" target="_blank">fb</a></li>
            <li><a href="https://www.linkedin.com/in/dominik-mazur-4a077bb3/" target="_blank">li</a></li>
            <li><div class="line"></div></li>
         </ul>
    </nav>
    <div class="hr"></div>
    </div>