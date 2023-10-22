<form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="search-container">
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="كلمة البحث..." />
        <button type="submit" id="searchsubmit" class="search-button">
            <span>بحث</span>
            <i class="fas fa-search fa-sm"></i>
        </button>
    </div>
</form>
