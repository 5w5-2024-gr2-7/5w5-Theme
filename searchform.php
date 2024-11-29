<?php
?>
<form class="search-form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <label for="search-input" class="search-label">
        <input class="search-input" type="search" id="search-input" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <button class="search-button" type="submit" aria-label="Search">
        <span class="search-icon">&#x1F50D;</span>
    </button>
</form>