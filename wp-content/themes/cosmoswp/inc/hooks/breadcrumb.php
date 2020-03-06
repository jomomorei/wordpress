<?php
if (!defined('ABSPATH')) {
    exit;
}


if (!function_exists('cosmoswp_breadcrumb_options')):

    /**
     * Add in action hook breadcrumb hook
     * @return void
     */
    function cosmoswp_breadcrumb_options() {
        if (!is_front_page()) {
            if (function_exists('yoast_breadcrumb') && 'yoast' == $breadcrumb_options) {
                echo "<div class='breadcrumbs init-animate'><div id='cwp-breadcrumbs' class='cwp-breadcrumbs'>";
                yoast_breadcrumb();
                echo "</div></div>";
            } else if (function_exists('bcn_display') && 'bcn' == $breadcrumb_options) {
                echo "<div class='breadcrumbs init-animate'><div id='cwp-breadcrumbs' class='cwp-breadcrumbs'>";
                bcn_display();
                echo "</div></div>";
            } else if (class_exists('WooCommerce') && 'woocommerce' == $breadcrumb_options) {
                echo "<div class='breadcrumbs init-animate'><div id='cwp-breadcrumbs' class='cwp-breadcrumbs'>";
                woocommerce_breadcrumb();
                echo "</div></div>";
            }
        }
    }

endif;



if (!function_exists('cosmoswp_breadcrumb_structure')):

    /**
     * Add in action hook breadcrumb hook
     * @return void
     */
    function cosmoswp_breadcrumb_structure() {
        $breadcrumb_options = cosmoswp_get_theme_options('cosmoswp-breadcrumb-options');
        if ('disable' != $breadcrumb_options) {
            if (!is_front_page()) {
                if (function_exists('yoast_breadcrumb') && 'yoast' == $breadcrumb_options) {
                    echo "<div class='breadcrumbs init-animate'><div id='cwp-breadcrumbs' class='cwp-breadcrumbs'>";
                    yoast_breadcrumb();
                    echo "</div></div>";
                } else if (function_exists('bcn_display') && 'bcn' == $breadcrumb_options) {
                    echo "<div class='breadcrumbs init-animate'><div id='cwp-breadcrumbs' class='cwp-breadcrumbs'>";
                    bcn_display();
                    echo "</div></div>";
                } else if (class_exists('WooCommerce') && 'woocommerce' == $breadcrumb_options) {
                    echo "<div class='breadcrumbs init-animate'><div id='cwp-breadcrumbs' class='cwp-breadcrumbs'>";
                    woocommerce_breadcrumb();
                    echo "</div></div>";
                }
            }
        }
    }

    add_action('cosmoswp_action_breadcrumb', 'cosmoswp_breadcrumb_structure');
endif;

if (!function_exists('cosmoswp_before_content_breadcrumb_structure')):

    /**
     * Compatible with Gutentor
     * Add in action hook breadcrumb hook
     * @return void
     */
    function cosmoswp_before_content_breadcrumb_structure() {
        $breadcrumb_options = cosmoswp_get_theme_options('cosmoswp-breadcrumb-options');
        $before_content     = cosmoswp_get_theme_options('breadcrumb-before-content');
        if ('disable' != $breadcrumb_options && $before_content) {
            echo '<div class="grid-container">';
            if (!is_front_page()) {
                if (function_exists('yoast_breadcrumb') && 'yoast' == $breadcrumb_options) {
                    echo "<div class='breadcrumbs init-animate'><div id='cwp-breadcrumbs' class='cwp-breadcrumbs'>";
                    yoast_breadcrumb();
                    echo "</div></div>";
                } else if (function_exists('bcn_display') && 'bcn' == $breadcrumb_options) {
                    echo "<div class='breadcrumbs init-animate'><div id='cwp-breadcrumbs' class='cwp-breadcrumbs'>";
                    bcn_display();
                    echo "</div></div>";
                } else if (class_exists('WooCommerce') && 'woocommerce' == $breadcrumb_options) {
                    echo "<div class='breadcrumbs init-animate'><div id='cwp-breadcrumbs' class='cwp-breadcrumbs'>";
                    woocommerce_breadcrumb();
                    echo "</div></div>";
                }
            }
            echo '</div>';
        }
    }

    add_action('gutentor_template_before_loop', 'cosmoswp_before_content_breadcrumb_structure');
endif;

