<?php if (have_posts()) : ?>

<h1 class="pagetitle">Search Results for "<?php echo $s ?>"</h1>

<div>
    <span class="previous"><?php next_posts_link('&laquo; Previous') ?></span>
    <span class="next"><?php previous_posts_link('Next &raquo;') ?></span>
</div>

<div class="clear"></div>

<?php while (have_posts()) : the_post(); ?>

<?php get_template_part( '/templates/post' ); ?>

<?php endwhile; ?>

<div>
    <span class="previous"><?php next_posts_link('&laquo; Previous') ?></span>
    <span class="next"><?php previous_posts_link('Next &raquo;') ?></span>
</div>

<?php else : ?>

<h2 class="center">No posts found. Try a different search?</h2>

<?php endif; ?>


