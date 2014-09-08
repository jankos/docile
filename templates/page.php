<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<div>
    <?php the_content(); ?>
</div>
<?php endwhile; endif; ?>
<?php edit_post_link('<i class="fa fa-border fa-pencil-square-o"></i>', '', ''); ?>