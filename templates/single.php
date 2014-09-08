<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div>
    <span class="previous"><?php previous_post_link('&laquo; %link') ?></span>
    <span class="next"><?php next_post_link('%link &raquo;') ?></span>
</div>

<h1><?php the_title(); ?></h1>

<div>
    <span class="datetime"><?php the_time(get_option('date_format')) ?>&nbsp;@&nbsp;<?php the_time(get_option('time_format')) ?></span>
    <span class="author"><?php the_author_posts_link() ?></span>
    <span class="category"><?php the_category(', '); ?></span>
    <span class="commentlink">
        <?php if($post->comment_count > 0): ?>
        <?php if($post->comment_count > 1): ?>
        <a href="#comments"><?php echo $post->comment_count; ?> Comments</a>
        <?php else: ?>
        <a href="#comments">1 Comment</a>
        <?php endif; ?>
        <?php endif; ?>
    </span>
    <span class="editlink"><?php edit_post_link('Edit', '[ ', ' ]'); ?></span>
</div>

<div>
    <?php the_content(); ?>
</div>

<?php comments_template( '/templates/comments.php' ); ?>

<?php endwhile; else: ?>

<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>