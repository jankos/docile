<div>
    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

    <div>
        <span class="datetime"><i class="fa fa-calendar"></i> <?php the_time(get_option('date_format')) ?>&nbsp;<i class="fa fa-clock-o"></i>&nbsp;<?php the_time(get_option('time_format')) ?></span>
        <span class="author"><i class="fa fa-user"></i> <?php the_author_posts_link() ?></span>
        <span class="category"><i class="fa fa-folder"></i> <?php the_category(', '); ?></span>
        <span class="commentlink">
            <i class="fa fa-comments"></i>
            <?php if($post->comment_count == 0): ?>
            <a href="<?php the_permalink() ?>#comments">No Comments</a>
            <?php elseif($post->comment_count == 1): ?>
            <a href="<?php the_permalink() ?>#comments">1 Comment</a>
            <?php else: ?>
            <a href="<?php the_permalink() ?>#comments"><?php echo $post->comment_count; ?> Comments</a>
            <?php endif; ?>
        </span>
        <span class="editlink"><?php edit_post_link('<i class="fa fa-border fa-pencil-square-o"></i>', '', ''); ?></span>
    </div>

    <div>
        <?php the_content(); ?>
    </div>
</div>