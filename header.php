<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700|Open+Sans+Condensed:700&subset=latin,latin-ext,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/grido.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/docile.css" />
    <!--<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="grid">
        <div class="row row-abcdef">
            <div class="col col-abcdef">
                <div class="cell" id="header">
                    <h1><a href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                    <p><?php bloginfo( 'description' ); ?></p>
                </div>
            </div>
        </div>
        <div class="row row-abcdef">
            <div class="col col-abcdef">
                <div class="cell" id="mainmenu">
                    <?php wp_nav_menu(); ?>
                </div>
            </div>
        </div>
