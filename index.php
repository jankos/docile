<?php get_header(); ?>
<div class="row row-abcd-ef">
    <div class="col col-abcd">
        <div class="cell content">
        <?php
        if ( is_front_page() && is_home() ) {
            get_template_part( 'templates/index' );
        } elseif ( is_front_page() ) {
            get_template_part( 'templates/page' );
        } elseif ( is_home() ) {
            get_template_part( 'templates/index' );
        } elseif ( is_search() ) {
            get_template_part( 'templates/search' );
        } elseif ( is_single() ) {
            get_template_part( 'templates/single' );
        } elseif ( is_page() ) {
            get_template_part( 'templates/page' );
        } elseif ( is_category() ) {
            get_template_part( 'templates/category' );
        } elseif ( is_archive() ) {
            get_template_part( 'templates/archive' );
        } elseif ( is_tag() ) {
            get_template_part( 'templates/tag' );
        } elseif ( is_author() ) {
            get_template_part( 'templates/author' );
        } elseif ( is_attachment() ) {
            get_template_part( 'templates/attachment' );
        } elseif ( is_404() ) {
            get_template_part( 'templates/404' );
        }
        ?>
        </div>
    </div>
    <div class="col col-ef">
        <div class="cell sidebar">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widgets') ) : ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer();