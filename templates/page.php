<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<?php if ( has_post_thumbnail() ): ?>
<div class="page-image">
    <?php the_post_thumbnail( 'large' ); ?>
</div>
<?php endif; ?>
<div>
    <?php the_content(); ?>
</div>
<?php endwhile; endif; ?>
<?php edit_post_link('<i class="fa fa-border fa-pencil-square-o"></i>', '', ''); ?>