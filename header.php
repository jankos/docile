<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic|Roboto+Condensed:400italic,700italic,400,700&subset=latin,latin-ext,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/grido.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/docile.css" />
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="grid">
        <div class="row slim">
            <div class="column col-abcdef">
                <div class="cell" id="header">
                    <h1><?php bloginfo( 'name' ); ?></h1>
                    <p><?php bloginfo( 'description' ); ?></p>
                </div>
            </div>
        </div>
        <div class="row slim">
            <div class="column col-abcdef">
                <div class="cell" id="menu">
                    <?php wp_nav_menu(); ?>
                </div>
            </div>
        </div>
