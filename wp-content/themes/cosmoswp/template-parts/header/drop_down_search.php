<?php
$dd_search_icon_align  = cosmoswp_get_theme_options('dd-search-icon-align');
$dd_search_placeholder = cosmoswp_get_theme_options('dd-search-placeholder');
$dd_search_placeholder = apply_filters('cosmoswp_dropdown_search_placeholder', $dd_search_placeholder);
$dd_search_placeholder = ($dd_search_placeholder) ? $dd_search_placeholder : '';
?>
<!-- Start of .cwp-search-dropdown -->
<div class="search cwp-search-dropdown <?php echo esc_attr($dd_search_icon_align); ?>">

	<span id="search-icon" class="search-icon">
		<i class="fas fa-search"></i>
	</span>

    <div class="cwp-search-form-wrapper">
        <form action="<?php echo home_url('/'); ?>" class="search-form">
            <input type="search" class="search-field" name='s'
                   placeholder="<?php echo esc_attr($dd_search_placeholder); ?>"
                   value="<?php echo get_search_query(); ?>">
            <button class="search-submit" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
</div>
<!-- End of .cwp-search-dropdown -->