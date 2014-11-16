<?php if (have_posts()): ?>

<?php $post = $posts[0]; ?>
<?php if (is_category()): ?>
<h1 class="pagetitle"><?php single_cat_title(); ?></h1>

<?php elseif (is_day()): ?>
<h1 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h1>

<?php elseif (is_month()): ?>
<h1 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h1>

<?php elseif (is_year()): ?>
<h1 class="pagetitle">Archive for <?php the_time('Y'); ?></h1>

<?php elseif (is_author()): ?>
<h1 class="pagetitle">Author Archive</h1>

<?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])): ?>
<h1 class="pagetitle">Blog Archives</h1>

<?php endif; ?>

<div>
    <span class="prev"><?php next_posts_link('&laquo; Previous') ?></span>
    <span class="next"><?php previous_posts_link('Next &raquo;') ?></span>
</div>

<?php while (have_posts()) : the_post(); ?>

<?php get_template_part( '/templates/post' ); ?>

<?php endwhile; ?>

<div>
    <span class="prev"><?php next_posts_link('&laquo; Previous') ?></span>
    <span class="next"><?php previous_posts_link('Next &raquo;') ?></span>
</div>

<?php else : ?>

<h1>Not Found</h1>

<?php include (TEMPLATEPATH . '/searchform.php'); ?>

<?php endif; ?>