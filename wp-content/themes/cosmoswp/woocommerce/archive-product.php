<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @version 3.4.0
 *
 * @package CosmosWP
 */
$breadcrumb_before_content = cosmoswp_get_theme_options('breadcrumb-before-content');
get_header();
do_action('cosmoswp_action_before_woocommerce_archive');
if ($breadcrumb_before_content) {
    echo '<div class="grid-container">';
    do_action('cosmoswp_action_breadcrumb');
    echo "</div>";
}
do_action('cosmoswp_action_woocommerce_archive');
do_action('cosmoswp_action_after_woocommerce_archive');
get_footer();