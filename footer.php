        <div class="row row-ab-cd-ef">
            <div class="col col-ab">
                <div class="cell">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer left') ) : ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col col-cd">
                <div class="cell">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer middle') ) : ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col col-ef">
                <div class="cell">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer right') ) : ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row row-abcdef">
            <div class="col col-abcdef">
                <div class="cell copyright">
                    &copy; 2014 jankos
                </div>
            </div>
        </div>
    </div>
<?php wp_footer(); ?>
</body>
</html>