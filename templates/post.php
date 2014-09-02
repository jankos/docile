<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

<div>
    <span class="datetime"><?php the_time(get_option('date_format')) ?>&nbsp;@&nbsp;<?php the_time(get_option('time_format')) ?></span>
    <span class="author"><?php the_author_posts_link() ?></span>
    <span class="category"><?php the_category(', '); ?></span>
    <span class="commentlink">
        <?php if($post->comment_count > 0): ?>
        <?php if($post->comment_count > 1): ?>
        <a href="<?php the_permalink() ?>#comments"><?php echo $post->comment_count; ?> Comments</a>
        <?php else: ?>
        <a href="<?php the_permalink() ?>#comments">1 Comment</a>
        <?php endif; ?>
        <?php endif; ?>
    </span>
    <span class="editlink"><?php edit_post_link('Edit', '[ ', ' ]'); ?></span>
</div>

<div>
    <?php the_content(); ?>
</div>