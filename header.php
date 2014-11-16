<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="grid">
        <div class="row row-abcde-f">
            <div class="col col-abcde">
                <div class="cell header">
                    <h1><a href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                    <p><?php bloginfo( 'description' ); ?></p>
                </div>
            </div>
            <div class="col col-f">
                <div class="cell search">
                    <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
                        <input type="search" name="s" id="s" placeholder="search" />
                    </form>
                </div>
            </div>
        </div>
        <div class="row row-abcdef">
            <div class="col col-abcdef">
                <div class="cell mainmenu">
                    <?php wp_nav_menu(); ?>
                </div>
            </div>
        </div>
