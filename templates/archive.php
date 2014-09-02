<?php if (have_posts()): ?>

<?php $post = $posts[0]; ?>
<?php if (is_category()): ?>
<h2 class="pagetitle"><?php single_cat_title(); ?></h2>

<?php elseif (is_day()): ?>
<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>

<?php elseif (is_month()): ?>
<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>

<?php elseif (is_year()): ?>
<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>

<?php elseif (is_author()): ?>
<h2 class="pagetitle">Author Archive</h2>

<?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])): ?>
<h2 class="pagetitle">Blog Archives</h2>

<?php endif; ?>

<div>
    <span class="previous"><?php next_posts_link('&laquo; Previous') ?></span>
    <span class="next"><?php previous_posts_link('Next &raquo;') ?></span>
</div>

<?php while (have_posts()) : the_post(); ?>

<?php getPost(); ?>

<?php endwhile; ?>

<div>
    <span class="previous"><?php next_posts_link('&laquo; Previous') ?></span>
    <span class="next"><?php previous_posts_link('Next &raquo;') ?></span>
</div>

<?php else : ?>

<h1>Not Found</h1>

<?php include (TEMPLATEPATH . '/searchform.php'); ?>

<?php endif; ?>