<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part( '/templates/post' ); ?>

<?php endwhile; else : ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<div>
    <span class="previous"><?php next_posts_link('&laquo; Previous Entries') ?></span>
    <span class="next"><?php previous_posts_link('Next Entries &raquo;') ?></span>
</div>