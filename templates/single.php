        <div class="row row-abcd-ef">
            <div class="col col-abcd">
                <div class="cell" id="article">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

                    <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
                    
                    <div class="entry">
                    <?php the_content(); ?>
                    </div>
                    
                    <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
                    </div>
                    <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>
                </div>
                <?php  ?>
            </div>
            <div class="col col-ef">
                <div class="cell" id="sidebar">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widgets') ) : ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>