        <div class="row">
            <div class="column col-ab">
                <div class="cell">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer left') ) : ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="column col-cd">
                <div class="cell">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer middle') ) : ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="column col-ef">
                <div class="cell">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer right') ) : ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column col-abcdef">
                <div class="cell" id="copyright">
                    &copy; 2014 jankos
                </div>
            </div>
        </div>
    </div>
<?php wp_footer(); ?>
</body>
</html>