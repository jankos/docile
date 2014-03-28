        <div class="row row-ab-cd-ef">
            <div class="col col-ab">
                <div class="cell">
                    <h3>Lorem ipsum dolor sit amet</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="col col-cd">
                <div class="cell">
                    <h3>Lorem ipsum dolor sit amet</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="col col-ef">
                <div class="cell">
                    <h3>Lorem ipsum dolor sit amet</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        
        <div class="row row-abcd-ef">
            <div class="col col-abcd">
                <div class="cell" id="main">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div>
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
            </div>
            <div class="col col-ef">
                <div class="cell" id="sidebar">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widgets') ) : ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        
