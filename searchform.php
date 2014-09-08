<?php if (is_search()) { $search_text = "$s"; } ?>
<div id="search">
    <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
        <div>
            <input type="text" name="s" id="s" placeholder="search" />
            <button type="submit">search</button>
        </div>
    </form>
</div>