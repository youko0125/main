<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta property="og:locale" content="ja_JP">
	<meta property="og:type" content="article">
    <meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
    <meta property="og:url" content="<?php bloginfo( 'url' ); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="https://kit.fontawesome.com/055b8d114c.js" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <?php if ( is_page() ): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
        <?php endif; ?>
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
 <div class="l-module">
        <div class="l-content">
            <header class="l-header">
                <div class="p-header">
                <h1 class="p-header_title l-header_title_color"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <div class="o-button">Menu</div>
                    <?php get_search_form(); ?>
            </header>