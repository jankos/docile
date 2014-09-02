<?php if (have_posts()): ?>
<?php while (have_posts()): ?>
<?php the_post(); ?>
<div>
    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

    <div>
        <?php the_content(); ?>
    </div>

    <div><?php the_time(get_option('date_format')) ?> @ <?php the_time(get_option('time_format')) ?> by <?php the_author_posts_link() ?> in <?php the_category(', '); ?></div>
</div>
<?php endwhile; ?>
<?php else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<div class="left"><?php next_posts_link('&laquo; Previous Entries') ?></div>
<div class="right"><?php previous_posts_link('Next Entries &raquo;') ?></div>
