<?php if ( have_posts() ): ?>
<?php while ( have_posts() ): ?>
<?php the_post(); ?>

<div class="navigation">
    <div class="left">&nbsp;</div>
    <div class="right">&nbsp;</div>
</div>

<?php $attachment_link = get_the_attachment_link($post->ID, true, array(450, 800)); ?>
<?php $_post = &get_post($post->ID); $classname = ($_post->iconsize[0] <= 128 ? 'small' : '') . 'attachment'; ?>
<div class="post" id="post-<?php the_ID(); ?>">
    <h2><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
    <div class="entry">
        <p class="<?php echo $classname; ?>"><?php echo $attachment_link; ?><br /><?php echo basename($post->guid); ?></p>

        <?php the_content('Read the rest of this entry &raquo;'); ?>

        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

        <p>
            This entry was posted on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?> and is filed under <?php the_category(', ') ?>.
            You can follow any responses to this entry through the <?php comments_rss_link('RSS 2.0'); ?> feed.
            <?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)): ?>
                You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(true); ?>" rel="trackback">trackback</a> from your own site.
            <?php elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)): ?>
                Responses are currently closed, but you can <a href="<?php trackback_url(true); ?> " rel="trackback">trackback</a> from your own site.
            <?php elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)): ?>
                You can skip to the end and leave a response. Pinging is currently not allowed.
            <?php elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)): ?>
                Both comments and pings are currently closed.
            <?php edit_post_link('Edit this entry.','',''); ?>
            <?php endif; ?>
        </p>

    </div>
</div>

<?php comments_template(); ?>

<?php endwhile; ?>
<?php else: ?>

<p>Sorry, no attachments matched your criteria.</p>

<?php endif; ?>