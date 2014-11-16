<?php
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');
if (!empty($post->post_password)) {
    if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {
?>
<p>This post is password protected. Enter the password to view comments.</p>
<?php
        return;
    }
}
?>

<?php if ($comments) : ?>
<h2 id="comments"><?php comments_number('No Comments', 'Comments', 'Comments' );?></h2>

<p>
    <span class="feedlink"><?php post_comments_feed_link('Feed'); ?></span>
    <?php if ('open' == $post-> ping_status) { ?><span class="trackbacklink"><a href="<?php trackback_url() ?>" title="Copy this URI to trackback this entry.">Trackback Address</a></span><?php } ?>
</p>

<div class="comments">
    <?php foreach ($comments as $comment) : ?>

    <div id="comment-<?php comment_ID() ?>">
        <i class="fa fa-user"></i> <?php comment_author_link() ?>
        <i class="fa fa-calendar"></i> <?php the_time(get_option('date_format')) ?>&nbsp;<i class="fa fa-clock-o"></i>&nbsp;<?php the_time(get_option('time_format')) ?> <a href="#comment-<?php comment_ID() ?>" title=""><i class="fa fa-link"></i></a> <?php edit_comment_link('<i class="fa fa-border fa-pencil-square-o"></i>','',''); ?></p>
        <?php if ($comment->comment_approved == '0') : ?>
        <p><em>Your comment is awaiting moderation.</em></p>
        <?php endif; ?>
        <?php comment_text() ?>
    </div>

    <?php endforeach; ?>
</div>

<?php else : ?>
<?php if ('open' == $post->comment_status) : ?>
<?php else : ?>
<p class="nocomments">Comments are closed.</p>
<?php endif; ?>
<?php endif; ?>
<?php if ('open' == $post->comment_status) : ?>

<h2 id="respond">Leave a Comment</h2>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" class="commentform">
    <?php if ( $user_ID ) : ?>

    <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>

    <?php else : ?>

    <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" />
    <label for="author">Name <?php if ($req) echo "(required)"; ?></label>

    <input type="email" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" />
    <label for="email">Email (will not be published) <?php if ($req) echo "(required)"; ?></label>

    <input type="url" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" />
    <label for="url">Website</label>

    <?php endif; ?>

    <!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

    <textarea name="comment" id="comment" tabindex="4"></textarea>

    <button name="submit" type="submit" id="submit" tabindex="5">Submit Comment</button>
    <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

    <?php do_action('comment_form', $post->ID); ?>
</form>
<?php endif; ?>
<?php endif; ?>