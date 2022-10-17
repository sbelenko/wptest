<?php $placeholder = get_search_query() ?? __('Enter search terms&hellip;', 'base') ?>
<form method="get" class="search-form" action="<?php echo home_url() ?>">
    <fieldset>
        <input type="search" name="s" placeholder="<?php echo $placeholder ?>" value="<?php echo get_search_query() ?>">
        <input type="submit" value="<?php _e('Search', 'base') ?>">
    </fieldset>
</form>
