<?php
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');
if (!empty($post->post_password)) {
    if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {
?>
<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
<?php
        return;
    }
}
?>

<?php if ($comments) : ?>
<h2 id="comments"><?php comments_number('No Comments', 'Comments', 'Comments' );?></h2>

<div class="small">
    <span class="feedlink"><?php post_comments_feed_link('Feed'); ?></span>
    <?php if ('open' == $post-> ping_status) { ?><span class="trackbacklink"><a href="<?php trackback_url() ?>" title="Copy this URI to trackback this entry.">Trackback Address</a></span><?php } ?>
</div>

<div class="comments">

    <?php foreach ($comments as $comment) : ?>

    <div id="comment-<?php comment_ID() ?>">
        <cite><?php comment_author_link() ?></cite> says:
        <?php if ($comment->comment_approved == '0') : ?>
        <em>Your comment is awaiting moderation.</em>
        <?php endif; ?>
        <br />
        <p><?php the_time(get_option('date_format')) ?>&nbsp;@&nbsp;<?php the_time(get_option('time_format')) ?> (<a href="#comment-<?php comment_ID() ?>" title="">#</a>) <?php edit_comment_link('Edit','[ ',' ]'); ?></p>
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

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
    <?php if ( $user_ID ) : ?>

    <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>

    <?php else : ?>

    <p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
        <label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label></p>

    <p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
        <label for="email"><small>Email (will not be published) <?php if ($req) echo "(required)"; ?></small></label></p>

    <p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
        <label for="url"><small>Website</small></label></p>

    <?php endif; ?>

    <!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

    <p><textarea name="comment" id="comment" cols="50" rows="20" tabindex="4"></textarea></p>

    <p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
        <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
    </p>
    <?php do_action('comment_form', $post->ID); ?>
</form>
<?php endif; ?>
<?php endif; ?>