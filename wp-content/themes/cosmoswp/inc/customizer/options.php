<?php
if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('cosmoswp_dynamic_css_option')) :

    /**
     * Site General Layout
     * This is apply for header, footer and site main content
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_dynamic_css_option
     *
     */
    function cosmoswp_dynamic_css_option() {
        $cosmoswp_dynamic_css_option = array(
            'wp-head' => esc_html__('WP Head', 'cosmoswp'),
            'file'    => esc_html__('File', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_dynamic_css_option', $cosmoswp_dynamic_css_option);
    }
endif;

if (!function_exists('cosmoswp_header_top_height_option')) :

    /**
     * Header Top Options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_header_top_height_option
     *
     */
    function cosmoswp_header_top_height_option() {
        $cosmoswp_header_top_height_option = array(
            'auto'   => esc_html__('Auto', 'cosmoswp'),
            'custom' => esc_html__('Custom', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_header_top_height_option', $cosmoswp_header_top_height_option);
    }
endif;

if (!function_exists('cosmoswp_footer_height_option')) :

    /**
     * Footer Top Options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_footer_height_option
     *
     */
    function cosmoswp_footer_height_option() {
        $cosmoswp_footer_height_option = array(
            'auto'   => esc_html__('Auto', 'cosmoswp'),
            'custom' => esc_html__('Custom', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_footer_height_option', $cosmoswp_footer_height_option);
    }
endif;

if (!function_exists('cosmoswp_site_main_general_layout_option')) :

    /**
     * General Setting->General Layout
     *
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_site_main_general_layout_option
     *
     */
    function cosmoswp_site_main_general_layout_option() {
        $cosmoswp_site_main_general_layout_option = array(
            'cwp-full-width-body'  => esc_html__('Full Width Body', 'cosmoswp'),
            'cwp-boxed-width-body' => esc_html__('Boxed Width Body', 'cosmoswp'),
            'cwp-fluid-width-body' => esc_html__('Fluid Width Body', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_site_main_general_layout_option', $cosmoswp_site_main_general_layout_option);
    }
endif;

if (!function_exists('cosmoswp_site_general_layout_option')) :

    /**
     * Site General Layout
     * This is apply for header, footer and site main content
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_site_general_layout_option
     *
     */
    function cosmoswp_site_general_layout_option($not_dependent = false) {
        $cosmoswp_site_general_layout_option = array(
            'cwp-full-width-header'  => esc_html__('Full Width Header', 'cosmoswp'),
            'cwp-boxed-width-header' => esc_html__('Boxed Width Header', 'cosmoswp'),
            'cwp-fluid-width-header' => esc_html__('Fluid Width Header', 'cosmoswp'),
        );
        if (!$not_dependent) {
            $dependent                           = array('inherit' => esc_html__('Inherit', 'cosmoswp'));
            $cosmoswp_site_general_layout_option = array_merge($dependent, $cosmoswp_site_general_layout_option);
        }
        return apply_filters('cosmoswp_site_general_layout_option', $cosmoswp_site_general_layout_option);
    }
endif;

if (!function_exists('cosmoswp_site_footer_layout_option')) :

    /**
     * Footer Layout
     * This is apply for footer
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_site_footer_layout_option
     *
     */
    function cosmoswp_site_footer_layout_option($not_dependent = false) {
        $cosmoswp_site_footer_layout_option = array(
            'cwp-full-width-footer'  => esc_html__('Full Width Footer', 'cosmoswp'),
            'cwp-boxed-width-footer' => esc_html__('Boxed Width Footer', 'cosmoswp'),
            'cwp-fluid-width-footer' => esc_html__('Fluid Width Footer', 'cosmoswp'),
        );
        if (!$not_dependent) {
            $dependent                           = array('inherit' => esc_html__('Inherit', 'cosmoswp'));
            $cosmoswp_site_footer_layout_option = array_merge($dependent, $cosmoswp_site_footer_layout_option);
        }
        return apply_filters('cosmoswp_site_footer_layout_option', $cosmoswp_site_footer_layout_option);
    }
endif;

if (!function_exists('cosmoswp_site_footer_display_style_option')) :

    /**
     * Footer style
     * This is apply for footer
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_site_footer_display_style_option
     *
     */
    function cosmoswp_site_footer_display_style_option() {
        $cosmoswp_site_footer_display_style_option = array(
            'cwp-normal-footer'   => esc_html__('Normal Footer', 'cosmoswp'),
            'cwp-parallax-footer' => esc_html__('Parallax Footer', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_site_footer_display_style_option', $cosmoswp_site_footer_display_style_option);
    }
endif;

if (!function_exists('cosmoswp_inherit_options')) :

    /**
     * Inherit Options
     * Inherit from previous options or want custom
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_inherit_options
     *
     */
    function cosmoswp_inherit_options() {
        $cosmoswp_inherit_options = array(
            'inherit' => esc_html__('Inherit', 'cosmoswp'),
            'custom'  => esc_html__('Custom', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_inherit_options', $cosmoswp_inherit_options);
    }
endif;

if (!function_exists('cosmoswp_header_bg_options')) :

    /**
     * Header Background options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_header_bg_options
     *
     */
    function cosmoswp_header_bg_options() {
        $cosmoswp_header_bg_options = array(
            'none'   => esc_html__('None', 'cosmoswp'),
            'custom' => esc_html__('Custom', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_header_bg_options', $cosmoswp_header_bg_options);
    }
endif;

if (!function_exists('cosmoswp_footer_bg_options')) :

    /**
     * Footer Background options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_footer_bg_options
     *
     */
    function cosmoswp_footer_bg_options() {
        $cosmoswp_footer_bg_options = array(
            'none'   => esc_html__('None', 'cosmoswp'),
            'custom' => esc_html__('Custom', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_footer_bg_options', $cosmoswp_footer_bg_options);
    }
endif;

if (!function_exists('cosmoswp_site_content_layout_option')) :

    /**
     * Main content layouyt
     * This does not apply on header and footer
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_site_content_layout_option
     *
     */
    function cosmoswp_site_content_layout_option() {
        $cosmoswp_site_content_layout_option = array(
            'separate-boxed'         => esc_html__('Separate Boxed', 'cosmoswp'),
            'content-boxed'          => esc_html__('Content Boxed', 'cosmoswp'),
            'wide-boxed'             => esc_html__('Wide Boxed', 'cosmoswp'),
            'sidebar-boxed'          => esc_html__('Sidebar Boxed', 'cosmoswp'),
            'sidebar-separate-boxed' => esc_html__('Sidebar Separate Boxed', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_site_content_layout_option', $cosmoswp_site_content_layout_option);
    }
endif;

if (!function_exists('cosmoswp_header_layout_options')) :

    /**
     * Header layout options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_header_layout_options
     *
     */
    function cosmoswp_header_layout_options() {
        $cosmoswp_header_layout_options = array(
            'normal'                => esc_html__('Normal', 'cosmoswp'),
            'cwp-overlay-fixed'         => esc_html__('Overlay Fixed Header', 'cosmoswp'),
            'cwp-overlay-transparent'   => esc_html__('Overlay Transparent Header', 'cosmoswp'),
            'cwp-vertical-header'       => esc_html__('Vertical Header', 'cosmoswp')
        );
        return apply_filters('cosmoswp_header_layout_options', $cosmoswp_header_layout_options);
    }
endif;

if (!function_exists('cosmoswp_login_register_options')) :

    /**
     * login/Register options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_login_register_options
     *
     */
    function cosmoswp_login_register_options() {
        $cosmoswp_login_register_options = array(
            'link'      => esc_html__('Link', 'cosmoswp'),
            'shortcode' => esc_html__('Shortcode', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_login_register_options', $cosmoswp_login_register_options);
    }
endif;

if (!function_exists('cosmoswp_header_social_icon_shape_options')) :

    /**
     * Social Icon Shape options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_header_social_icon_shape_options
     *
     */
    function cosmoswp_header_social_icon_shape_options() {
        $cosmoswp_header_social_icon_shape_options = array(
            'circle' => esc_html__('circle', 'cosmoswp'),
            'square' => esc_html__('Square', 'cosmoswp'),
            'round'  => esc_html__('Round', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_header_social_icon_shape_options', $cosmoswp_header_social_icon_shape_options);
    }
endif;

if (!function_exists('cosmoswp_menu_indicator_options')) :

    /**
     * Menu Indicator options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_menu_indicator_options
     *
     */
    function cosmoswp_menu_indicator_options() {
        $cosmoswp_menu_indicator_options = array(
            'text' => esc_html__('Text', 'cosmoswp'),
            'icon' => esc_html__('Icon', 'cosmoswp'),
            'both' => esc_html__('Icon & Text', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_menu_indicator_options', $cosmoswp_menu_indicator_options);
    }
endif;

if (!function_exists('cosmoswp_search_template_options')) :

    /**
     * Menu Indicator options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_menu_indicator_options
     *
     */
    function cosmoswp_search_template_options() {
        $cosmoswp_search_template_options = array(
            'default'      => esc_html__('Default', 'cosmoswp'),
            'cwp-search-1' => esc_html__('Template 1', 'cosmoswp'),
            'cwp-search-2' => esc_html__('Template 2', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_search_template_options', $cosmoswp_search_template_options);
    }
endif;

if (!function_exists('cosmoswp_menu_display_options')) :

    /**
     * Menu display options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_menu_display_options
     *
     */
    function cosmoswp_menu_display_options() {
        $cosmoswp_menu_display_options = array(
            'cwp-left-menu-slide'  => esc_html__('Slide Left', 'cosmoswp'),
            'cwp-right-menu-slide' => esc_html__('Slide Right', 'cosmoswp'),
            'cwp-left-menu-push'   => esc_html__('Push Left', 'cosmoswp'),
            'cwp-right-menu-push'  => esc_html__('Push Right', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_menu_display_options', $cosmoswp_menu_display_options);
    }
endif;

if (!function_exists('cosmoswp_position_options')) :

    /**
     * Position options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_menu_display_options
     *
     */
    function cosmoswp_position_options() {
        $cosmoswp_position_options = array(
            'cwp-position-left'  => esc_html__('Left', 'cosmoswp'),
            'cwp-position-center' => esc_html__('Center', 'cosmoswp'),
            'cwp-position-right'   => esc_html__('Right', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_position_options', $cosmoswp_position_options);
    }
endif;

if (!function_exists('cosmoswp_contact_info_options')) :

    /**
     * Contact Info Type
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_contact_info_options
     *
     */
    function cosmoswp_contact_info_options() {
        $cosmoswp_contact_info_options = array(
            'icon' => esc_html__('Icon', 'cosmoswp'),
            'text' => esc_html__('Text', 'cosmoswp')
        );
        return apply_filters('cosmoswp_contact_info_options', $cosmoswp_contact_info_options);
    }
endif;

if (!function_exists('cosmoswp_header_border_style')) :

    /**
     * Header Border Style
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_header_border_style
     *
     */
    function cosmoswp_header_border_style() {
        $cosmoswp_header_border_style = array(
            'none'    => esc_html__('None', 'cosmoswp'),
            'solid'   => esc_html__('Solid', 'cosmoswp'),
            'dotted'  => esc_html__('Dotted', 'cosmoswp'),
            'dashed'  => esc_html__('Dashed', 'cosmoswp'),
            'double'  => esc_html__('Double', 'cosmoswp'),
            'ridge'   => esc_html__('Ridge', 'cosmoswp'),
            'inset'   => esc_html__('Inset', 'cosmoswp'),
            'outset'  => esc_html__('outset', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_header_border_style', $cosmoswp_header_border_style);
    }
endif;

if (!function_exists('cosmoswp_vertical_header_position')) :

    /**
     * vertical Header Position
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_vertical_header_position
     *
     */
    function cosmoswp_vertical_header_position() {
        $cosmoswp_vertical_header_position = array(
            'cwp-vertical-header-left'  => esc_html__('Left', 'cosmoswp'),
            'cwp-vertical-header-right' => esc_html__('Right', 'cosmoswp')
        );
        return apply_filters('cosmoswp_vertical_header_position', $cosmoswp_vertical_header_position);
    }
endif;

if (!function_exists('cosmoswp_typography_group_fields')) :

    /**
     * Typography
     * This is Typography options array
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_typography_group_fields
     *
     */
    function cosmoswp_typography_group_fields() {
        $text_tranformation_options       = array(
            'none'       => esc_html__('None', 'cosmoswp'),
            'capitalize' => esc_html__('Capitalize', 'cosmoswp'),
            'uppercase'  => esc_html__('Uppercase', 'cosmoswp'),
            'lowercase'  => esc_html__('Lowercase', 'cosmoswp'),
            'initial'    => esc_html__('Initial', 'cosmoswp'),
            'inherit'    => esc_html__('Inherit', 'cosmoswp'),
        );
        $text_decoration_options          = array(
            'none'         => esc_html__('None', 'cosmoswp'),
            'overline'     => esc_html__('Overline', 'cosmoswp'),
            'line-through' => esc_html__('Line-through', 'cosmoswp'),
            'underline'    => esc_html__('Underline', 'cosmoswp'),
        );
        $font_style_options               = array(
            'normal'  => esc_html__('Normal', 'cosmoswp'),
            'italic'  => esc_html__('Italic', 'cosmoswp'),
            'bold'    => esc_html__('Bold', 'cosmoswp'),
            'oblique' => esc_html__('Oblique', 'cosmoswp'),
        );
        $font_weight_options              = array(
            '100' => esc_html__('100', 'cosmoswp'),
            '200' => esc_html__('200', 'cosmoswp'),
            '300' => esc_html__('300', 'cosmoswp'),
            '400' => esc_html__('400', 'cosmoswp'),
            '500' => esc_html__('500', 'cosmoswp'),
            '600' => esc_html__('600', 'cosmoswp'),
            '700' => esc_html__('700', 'cosmoswp'),
            '800' => esc_html__('800', 'cosmoswp'),
            '900' => esc_html__('900', 'cosmoswp'),
        );
        $cosmoswp_typography_group_fields = array(
            'font-type'       => array(
                'type'    => 'select',
                'label'   => esc_html__('Font Type', 'cosmoswp'),
                'options' => array(
                    'system' => esc_html__('System', 'cosmoswp'),
                    'google' => esc_html__('Google', 'cosmoswp'),
                    'custom' => esc_html__('Custom', 'cosmoswp')
                ),
            ),
            'system-font'     => array(
                'type'    => 'select',
                'label'   => esc_html__('System Fonts', 'cosmoswp'),
                'options' => array()
            ),
            'google-font'     => array(
                'type'    => 'select',
                'label'   => esc_html__('Google Fonts', 'cosmoswp'),
                'options' => array(),
            ),
            'custom-font'     => array(
                'type'    => 'select',
                'label'   => esc_html__('Custom Fonts', 'cosmoswp'),
                'options' => array(),
            ),
            'font-weight'     => array(
                'type'    => 'select',
                'label'   => esc_html__('Font Weight', 'cosmoswp'),
                'options' => $font_weight_options,
            ),
            'font-style'      => array(
                'type'    => 'select',
                'label'   => esc_html__('Font Style', 'cosmoswp'),
                'options' => $font_style_options,
            ),
            'text-decoration' => array(
                'type'    => 'select',
                'label'   => esc_html__('Text Decoration', 'cosmoswp'),
                'options' => $text_decoration_options,
            ),
            'text-transform'  => array(
                'type'    => 'select',
                'label'   => esc_html__('Text Transform', 'cosmoswp'),
                'options' => $text_tranformation_options,
            ),
            'font-size'       => array(
                'type'  => 'responsive_number',
                'label' => esc_html__('Font Size (px)', 'cosmoswp'),
            ),
            'line-height'     => array(
                'type'  => 'responsive_number',
                'label' => esc_html__('Line height (px)', 'cosmoswp'),
            ),
            'letter-spacing'  => array(
                'type'  => 'responsive_number',
                'label' => esc_html__('Letter Spacing (px)', 'cosmoswp'),
            ),
        );
        return apply_filters('cosmoswp_typography_group_fields', $cosmoswp_typography_group_fields);
    }
endif;

if (!function_exists('cosmoswp_sub_typography_group_fields')) :

    /**
     * Sub Typography
     * This is Sub Typography options array
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_sub_typography_group_fields
     *
     */
    function cosmoswp_sub_typography_group_fields() {
        $text_tranformation_options           = array(
            'none'       => esc_html__('None', 'cosmoswp'),
            'capitalize' => esc_html__('Capitalize', 'cosmoswp'),
            'uppercase'  => esc_html__('Uppercase', 'cosmoswp'),
            'lowercase'  => esc_html__('Lowercase', 'cosmoswp'),
            'initial'    => esc_html__('Initial', 'cosmoswp'),
            'inherit'    => esc_html__('Inherit', 'cosmoswp'),
        );
        $text_decoration_options              = array(
            'none'         => esc_html__('None', 'cosmoswp'),
            'overline'     => esc_html__('Overline', 'cosmoswp'),
            'line-through' => esc_html__('Line-through', 'cosmoswp'),
            'underline'    => esc_html__('Underline', 'cosmoswp'),
        );
        $font_style_options                   = array(
            'normal'  => esc_html__('Normal', 'cosmoswp'),
            'italic'  => esc_html__('Italic', 'cosmoswp'),
            'bold'    => esc_html__('Bold', 'cosmoswp'),
            'oblique' => esc_html__('Oblique', 'cosmoswp'),
        );
        $cosmoswp_sub_typography_group_fields = array(
            'font-style'      => array(
                'type'    => 'select',
                'label'   => esc_html__('Font Style', 'cosmoswp'),
                'options' => $font_style_options,
            ),
            'text-decoration' => array(
                'type'    => 'select',
                'label'   => esc_html__('Text Decoration', 'cosmoswp'),
                'options' => $text_decoration_options,
            ),
            'text-transform'  => array(
                'type'    => 'select',
                'label'   => esc_html__('Text Transform', 'cosmoswp'),
                'options' => $text_tranformation_options,
            ),
        );
        return apply_filters('cosmoswp_sub_typography_group_fields', $cosmoswp_sub_typography_group_fields);
    }
endif;

if (!function_exists('cosmoswp_site_identity_placement_options')) :

    /**
     * Site identity placement options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_site_identity_placement_options
     *
     */
    function cosmoswp_site_identity_placement_options() {
        $cosmoswp_site_identity_placement_options = array(
            'left'   => esc_html__('Left', 'cosmoswp'),
            'right'  => esc_html__('Right', 'cosmoswp'),
            'center' => esc_html__('Center', 'cosmoswp')
        );
        return apply_filters('cosmoswp_site_identity_placement_options', $cosmoswp_site_identity_placement_options);
    }
endif;

if (!function_exists('cosmoswp_site_identity_beside_primary_options')) :

    /**
     * Site identity beside primary options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_site_identity_beside_primary_options
     *
     */
    function cosmoswp_site_identity_beside_primary_options() {
        $cosmoswp_site_identity_beside_primary_options = array(
            'hide'                   => esc_html__('Hide', 'cosmoswp'),
            'header-primary-menu'    => esc_html__('Primary Menu', 'cosmoswp'),
            'header-primary-sidebar' => esc_html__('Header Primary Sidebar', 'cosmoswp')
        );
        return apply_filters('cosmoswp_site_identity_beside_primary_options', $cosmoswp_site_identity_beside_primary_options);
    }
endif;

if (!function_exists('cosmoswp_site_identity_beside_secondary_options')) :

    /**
     * Site identity beside secondary options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_site_identity_beside_primary_options
     *
     */
    function cosmoswp_site_identity_beside_secondary_options() {
        $cosmoswp_site_identity_beside_secondary_options = array(
            'hide'                     => esc_html__('Hide', 'cosmoswp'),
            'header-secondary-menu'    => esc_html__('Secondary Menu', 'cosmoswp'),
            'header-secondary-sidebar' => esc_html__('Header Secondary Sidebar', 'cosmoswp')
        );
        return apply_filters('cosmoswp_site_identity_beside_secondary_options', $cosmoswp_site_identity_beside_secondary_options);
    }
endif;

if (!function_exists('cosmoswp_header_image_display')) :

    /**
     * Menu and Logo Display Options
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array $cosmoswp_header_image_display
     *
     */
    function cosmoswp_header_image_display() {
        $cosmoswp_header_image_display = array(
            'hide'         => esc_html__('Hide', 'cosmoswp'),
            'color'        => esc_html__('Background Color', 'cosmoswp'),
            'bg-image'     => esc_html__('Background Image', 'cosmoswp'),
            'normal-image' => esc_html__('Normal Image', 'cosmoswp'),
            'video'        => esc_html__('Video', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_header_image_display', $cosmoswp_header_image_display);
    }
endif;

if (!function_exists('cosmoswp_header_bi_display_options')) :

    /**
     * Header Basic Info display Options
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array $cosmoswp_header_bi_display_options
     *
     */
    function cosmoswp_header_bi_display_options() {
        $cosmoswp_header_bi_display_options = array(
            'hide'        => esc_html__('Hide', 'cosmoswp'),
            'before-menu' => esc_html__('Before Menu', 'cosmoswp'),
            'after-menu'  => esc_html__('After Menu', 'cosmoswp')
        );
        return apply_filters('cosmoswp_header_bi_display_options', $cosmoswp_header_bi_display_options);
    }
endif;

if (!function_exists('cosmoswp_header_bi_number')) :

    /**
     * Header Basic Info number
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array $cosmoswp_header_bi_number
     *
     */
    function cosmoswp_header_bi_number() {
        $cosmoswp_header_bi_number = array(
            1 => esc_html__('1', 'cosmoswp'),
            2 => esc_html__('2', 'cosmoswp'),
            3 => esc_html__('3', 'cosmoswp'),
            4 => esc_html__('4', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_header_bi_number', $cosmoswp_header_bi_number);
    }
endif;

if (!function_exists('cosmoswp_menu_special_button_options')) :

    /**
     * Menu Special Button Options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_menu_special_button_options
     *
     */
    function cosmoswp_menu_special_button_options() {
        $cosmoswp_menu_special_button_options = array(
            'hide'         => esc_html__('Hide', 'cosmoswp'),
            'link'         => esc_html__('Open Link', 'cosmoswp'),
            'link-new-tab' => esc_html__('Open Link in New Tab', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_menu_special_button_options', $cosmoswp_menu_special_button_options);
    }
endif;

if (!function_exists('cosmoswp_menu_special_button_title_options')) :

    /**
     * Menu special button title options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_menu_special_button_title_options
     *
     */
    function cosmoswp_menu_special_button_title_options() {
        $cosmoswp_menu_special_button_title_options = array(
            'text' => esc_html__('Text', 'cosmoswp'),
            'icon' => esc_html__('Icon', 'cosmoswp'),
            'both' => esc_html__('Both', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_menu_special_button_title_options', $cosmoswp_menu_special_button_title_options);
    }
endif;

if (!function_exists('cosmoswp_menu_search_options')) :

    /**
     * Menu Search Options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_menu_search_options
     *
     */
    function cosmoswp_menu_search_options() {
        $cosmoswp_menu_search_options = array(
            'hide'          => esc_html__('Hide', 'cosmoswp'),
            'wide'          => esc_html__('Wide', 'cosmoswp'),
            'icon-dropdown' => esc_html__('Icon Dropdown', 'cosmoswp'),
            'icon-wide'     => esc_html__('Icon Wide', 'cosmoswp'),
            'icon-overlay'  => esc_html__('Icon Overlay', 'cosmoswp')
        );
        return apply_filters('cosmoswp_menu_search_options', $cosmoswp_menu_search_options);
    }
endif;

if (!function_exists('cosmoswp_responsive_menu_breakpoints')) :

    /**
     * Responsive menu breakpoints
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_responsive_menu_breakpoints
     *
     */
    function cosmoswp_responsive_menu_breakpoints() {
        $cosmoswp_responsive_menu_breakpoints = array(
            '1280'   => esc_html__('From 1280px', 'cosmoswp'),
            '1080'   => esc_html__('From 1080px', 'cosmoswp'),
            '959'    => esc_html__('From 959px', 'cosmoswp'),
            '767'    => esc_html__('From 767px', 'cosmoswp'),
            '480'    => esc_html__('From 480px', 'cosmoswp'),
            '320'    => esc_html__('From 320px', 'cosmoswp'),
            'custom' => esc_html__('Custom media query', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_responsive_menu_breakpoints', $cosmoswp_responsive_menu_breakpoints);
    }
endif;

if (!function_exists('cosmoswp_responsive_menu_style')) :

    /**
     * Responsive menu style
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_responsive_menu_style
     *
     */
    function cosmoswp_responsive_menu_style() {
        $cosmoswp_responsive_menu_style = array(
            'off-canvas'  => esc_html__('Off-Canvas', 'cosmoswp'),
            'dropdown'    => esc_html__('Drop Down', 'cosmoswp'),
            'full-screen' => esc_html__('Full Screen', 'cosmoswp')
        );
        return apply_filters('cosmoswp_responsive_menu_style', $cosmoswp_responsive_menu_style);
    }
endif;

if (!function_exists('cosmoswp_off_canvas_sidebar_direction')) :

    /**
     * Off canvas direction
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_off_canvas_sidebar_direction
     *
     */
    function cosmoswp_off_canvas_sidebar_direction() {
        $cosmoswp_off_canvas_sidebar_direction = array(
            'left'  => esc_html__('Left', 'cosmoswp'),
            'right' => esc_html__('Right', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_off_canvas_sidebar_direction', $cosmoswp_off_canvas_sidebar_direction);
    }
endif;


if (!function_exists('cosmoswp_flex_align')) :

    /**
     * Flex Align
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_align
     *
     */
    function cosmoswp_flex_align() {
        $cosmoswp_flex_align = array(
            'cwp-flex-align-left'   => esc_html__('Left', 'cosmoswp'),
            'cwp-flex-align-center' => esc_html__('Center', 'cosmoswp'),
            'cwp-flex-align-right'  => esc_html__('Right', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_flex_align', $cosmoswp_flex_align);
    }
endif;

if (!function_exists('cosmoswp_submenu_display_options')) :

    /**
     * SubMenu Display Option
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_align
     *
     */
    function cosmoswp_submenu_display_options() {
        $cosmoswp_submenu_display_options = array(
            'cwp-submenu-onclick' => esc_html__('Click', 'cosmoswp'),
            'cwp-submenu-onhover' => esc_html__('Hover', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_submenu_display_options', $cosmoswp_submenu_display_options);
    }
endif;

if (!function_exists('cosmoswp_text_align')) :

    /**
     * Text Align
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_align
     *
     */
    function cosmoswp_text_align() {
        $cosmoswp_text_align = array(
            'cwp-text-left'   => esc_html__('Left', 'cosmoswp'),
            'cwp-text-center' => esc_html__('Center', 'cosmoswp'),
            'cwp-text-right'  => esc_html__('Right', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_text_align', $cosmoswp_text_align);
    }
endif;

if (!function_exists('cosmoswp_banner_content_position')) :

    /**
     * Banner COntent position
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $
     *
     */
    function cosmoswp_banner_content_position() {
        $cosmoswp_banner_content_position = array(
            'cwp-content-position-top'    => esc_html__('Top', 'cosmoswp'),
            'cwp-content-position-center' => esc_html__('Center', 'cosmoswp'),
            'cwp-content-position-bottom' => esc_html__('Bottom', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_banner_content_position', $cosmoswp_banner_content_position);
    }
endif;

if (!function_exists('cosmoswp_single_banner_title_type')) :

    /**
     * Single Banner Title
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $
     *
     */
    function cosmoswp_single_banner_title_type() {
        $cosmoswp_single_banner_title_type = array(
            'disable'      => esc_html__('Disable', 'cosmoswp'),
            'default'      => esc_html__('Default', 'cosmoswp'),
            'custom-title' => esc_html__('Custom Title', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_single_banner_title_type', $cosmoswp_single_banner_title_type);
    }
endif;

if (!function_exists('cosmoswp_single_banner_title_tag')) :

    /**
     * Single Banner Title
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $
     *
     */
    function cosmoswp_single_banner_title_tag() {
        $cosmoswp_single_banner_title_tag = array(
            'h1' => esc_html__('H1', 'cosmoswp'),
            'h2' => esc_html__('H2', 'cosmoswp'),
            'h3' => esc_html__('H3', 'cosmoswp'),
            'h4' => esc_html__('H4', 'cosmoswp'),
            'h5' => esc_html__('H5', 'cosmoswp'),
            'h6' => esc_html__('H6', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_single_banner_title_tag', $cosmoswp_single_banner_title_tag);
    }
endif;

if (!function_exists('cosmoswp_singular_post_page_banner_option')) :

    /**
     * Page/Post banner options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $
     *
     */
    function cosmoswp_singular_post_page_banner_option() {
        $cosmoswp_singular_post_page_banner_option = array(
            'hide'        => esc_html__('Hide', 'cosmoswp'),
            'default'        => esc_html__('Default', 'cosmoswp')
        );
        return apply_filters('cosmoswp_singular_post_page_banner_option', $cosmoswp_singular_post_page_banner_option);
    }
endif;


if (!function_exists('cosmoswp_icon_align')) :

    /**
     * Icon ALign
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_icon_align
     *
     */
    function cosmoswp_icon_align() {
        $cosmoswp_icon_align = array(
            'align-left'   => esc_html__('Left', 'cosmoswp'),
            'align-center' => esc_html__('Center', 'cosmoswp'),
            'align-right'  => esc_html__('Right', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_icon_align', $cosmoswp_icon_align);
    }
endif;

if (!function_exists('cosmoswp_sticky_footer_icon_position')) :

    /**
     *Stciky Footer  Icon Position
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_sticky_footer_icon_position
     *
     */
    function cosmoswp_sticky_footer_icon_position() {
        $cosmoswp_sticky_footer_icon_position = array(
            'position-left'  => esc_html__('Left', 'cosmoswp'),
            'position-right' => esc_html__('Right', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_sticky_footer_icon_position', $cosmoswp_sticky_footer_icon_position);
    }
endif;

if (!function_exists('cosmoswp_icon_position')) :

    /**
     * Icon Position
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_icon_position
     *
     */
    function cosmoswp_icon_position() {
        $cosmoswp_icon_position = array(
            'before' => esc_html__('Before', 'cosmoswp'),
            'after'  => esc_html__('After', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_icon_position', $cosmoswp_icon_position);
    }
endif;

if (!function_exists('cosmoswp_icon_four_position')) :

    /**
     * Icon Position
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_icon_four_position
     *
     */
    function cosmoswp_icon_four_position() {
        $cosmoswp_icon_four_position = array(
            'before' => esc_html__('Before', 'cosmoswp'),
            'after'  => esc_html__('After', 'cosmoswp'),
            'top'  => esc_html__('Top', 'cosmoswp'),
            'bottom'  => esc_html__('Bottom', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_icon_four_position', $cosmoswp_icon_four_position);
    }
endif;

if (!function_exists('cosmoswp_responsive_menu_off_canvas_options')) :

    /**
     * Off canvas options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_responsive_menu_off_canvas_options
     *
     */
    function cosmoswp_responsive_menu_off_canvas_options() {
        $cosmoswp_responsive_menu_off_canvas_options = array(
            'overlap' => esc_html__('Overlap', 'cosmoswp'),
            'push'    => esc_html__('Push', 'cosmoswp')
        );
        return apply_filters('cosmoswp_responsive_menu_off_canvas_options', $cosmoswp_responsive_menu_off_canvas_options);
    }
endif;

if (!function_exists('cosmoswp_site_identity_logo_options')) :

	/**
	 * Site Identity Template
	 *
	 * @since CosmosWP 1.0.0
	 *
	 * @param null
	 * @return array $cosmoswp_site_identity_logo_options
	 *
	 */
	function cosmoswp_site_identity_logo_options() {
		$cosmoswp_site_identity_logo_options = array(
			'cwp-top'    => esc_html__('Top', 'cosmoswp'),
			'cwp-right'    => esc_html__('Right', 'cosmoswp'),
			'cwp-bottom'    => esc_html__('Bottom', 'cosmoswp'),
			'cwp-left'    => esc_html__('Left', 'cosmoswp'),
		);
		return apply_filters('cosmoswp_site_identity_logo_options', $cosmoswp_site_identity_logo_options);
	}
endif;

if (!function_exists('cosmoswp_site_identity_sorting')) :

    /**
     * Site Identity Sorting
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array $cosmoswp_posttype_elements_sorting
     *
     */
    function cosmoswp_site_identity_sorting() {
        $cosmoswp_site_identity_sorting = array(
            'site-title'   => esc_html__('Site Title', 'cosmoswp'),
            'site-tagline' => esc_html__('Site Tagline', 'cosmoswp')
        );
        return apply_filters('cosmoswp_site_identity_sorting', $cosmoswp_site_identity_sorting);
    }
endif;

if (!function_exists('cosmoswp_sticky_header_options')) :

    /**
     * Sticky header options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_sticky_header_options
     *
     */
    function cosmoswp_sticky_header_options() {
        $cosmoswp_sticky_header_options = array(
            'disable'     => esc_html__('Disable', 'cosmoswp'),
            'normal'      => esc_html__('Normal', 'cosmoswp'),
            'scroll-down' => esc_html__('Scroll Down', 'cosmoswp'),
            'scroll-up'   => esc_html__('Scroll Up', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_sticky_header_options', $cosmoswp_sticky_header_options);
    }
endif;

if (!function_exists('cosmoswp_sticky_header_animation_options')) :

    /**
     * Sticky header animation options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_sticky_header_animation_options
     *
     */
    function cosmoswp_sticky_header_animation_options() {
        $cosmoswp_sticky_header_animation_options = array(
            'none'                 => esc_html__('None', 'cosmoswp'),
            'cwp-shrink-animation'     => esc_html__('Shrink', 'cosmoswp'),
            'cwp-fade-animation'       => esc_html__('Fade', 'cosmoswp'),
            'cwp-scrolldown-animation' => esc_html__('Scroll Down', 'cosmoswp')
        );
        return apply_filters('cosmoswp_sticky_header_animation_options', $cosmoswp_sticky_header_animation_options);
    }
endif;

if (!function_exists('cosmoswp_sticky_header_if_not_disable')) :

    /**
     * Check if sticky header not disable
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return boolean
     *
     */
    function cosmoswp_sticky_header_if_not_disable() {
        if ('disable' != cosmoswp_get_theme_options('sticky-header-options')) {
            return true;
        }
        return false;
    }
endif;

if (!function_exists('cosmoswp_header_top_options')) :

    /**
     * Header Top Options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_header_top_options
     *
     */
    function cosmoswp_header_top_options() {
        $cosmoswp_header_top_default_elements_display_options = array(
            'hide'    => esc_html__('Hide', 'cosmoswp'),
            'default' => esc_html__('Default', 'cosmoswp'),
            'html'    => esc_html__('HTML', 'cosmoswp')
        );
        return apply_filters('cosmoswp_header_top_options', $cosmoswp_header_top_default_elements_display_options);
    }
endif;

if (!function_exists('cosmoswp_header_top_default_elements_display_options')) :

    /**
     * Header Top Default Elements Display Options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_header_top_default_elements_display_options
     *
     */
    function cosmoswp_header_top_default_elements_display_options() {
        $cosmoswp_header_top_default_elements_display_options = array(
            'hide'  => esc_html__('Hide', 'cosmoswp'),
            'left'  => esc_html__('on Top Left', 'cosmoswp'),
            'right' => esc_html__('on Top Right', 'cosmoswp')
        );
        return apply_filters('cosmoswp_header_top_default_elements_display_options', $cosmoswp_header_top_default_elements_display_options);
    }
endif;

if (!function_exists('cosmoswp_posts_display_from')) :

    /**
     * Post display options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_posts_display_from
     *
     */
    function cosmoswp_posts_display_from() {
        $cosmoswp_posts_display_from = array(
            'recent' => esc_html__('All posts', 'cosmoswp'),
            'cat'    => esc_html__('Categories', 'cosmoswp'),
            'tag'    => esc_html__('Tags', 'cosmoswp')
        );
        return apply_filters('cosmoswp_posts_display_from', $cosmoswp_posts_display_from);
    }
endif;

if (!function_exists('cosmoswp_get_terms')) :

    /**
     * Get Terms ID and Name array
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_get_terms
     *
     */
    function cosmoswp_get_terms($args = array(), $deprecated = '', $show_option_none = true) {
        $cosmoswp_get_terms = array();

        if ($show_option_none) {
            $cosmoswp_get_terms[0] = esc_html__('Select', 'cosmoswp');
        }

        $terms = get_terms($args, $deprecated);

        if (!empty($terms) && !is_wp_error($terms)) {
            foreach ($terms as $term) {
                $id                      = absint($term->term_id);
                $name                    = esc_html($term->name);
                $cosmoswp_get_terms[$id] = $name;
            }
        }
        return apply_filters('cosmoswp_get_terms', $cosmoswp_get_terms);
    }
endif;

if (!function_exists('cosmoswp_posts_orderby')) :

    /**
     * Posts Order By
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_posts_orderby
     *
     */
    function cosmoswp_posts_orderby() {
        $cosmoswp_posts_orderby = array(
            'none'          => esc_html__('None', 'cosmoswp'),
            'ID'            => esc_html__('ID', 'cosmoswp'),
            'author'        => esc_html__('Author', 'cosmoswp'),
            'title'         => esc_html__('Title', 'cosmoswp'),
            'date'          => esc_html__('Date', 'cosmoswp'),
            'modified'      => esc_html__('Modified Date', 'cosmoswp'),
            'rand'          => esc_html__('Random', 'cosmoswp'),
            'comment_count' => esc_html__('Comment Count', 'cosmoswp'),
            'menu_order'    => esc_html__('Menu Order', 'cosmoswp')
        );
        return apply_filters('cosmoswp_posts_orderby', $cosmoswp_posts_orderby);
    }
endif;

if (!function_exists('cosmoswp_posts_order')) :

    /**
     * Order ASC DESC
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_posts_order
     *
     */
    function cosmoswp_posts_order() {
        $cosmoswp_posts_order = array(
            'ASC'  => esc_html__('ASC', 'cosmoswp'),
            'DESC' => esc_html__('DESC', 'cosmoswp')
        );
        return apply_filters('cosmoswp_posts_order', $cosmoswp_posts_order);
    }
endif;

if (!function_exists('cosmoswp_footer_full_width_display_options')) :

    /**
     * Footer full width options
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array $cosmoswp_footer_full_width_display_options
     *
     */
    function cosmoswp_footer_full_width_display_options() {
        $cosmoswp_footer_full_width_display_options = array(
            'hide'   => esc_html__('Hide', 'cosmoswp'),
            'top'    => esc_html__('Top Footer', 'cosmoswp'),
            'bottom' => esc_html__('Bottom Footer', 'cosmoswp')
        );
        return apply_filters('cosmoswp_footer_full_width_display_options', $cosmoswp_footer_full_width_display_options);
    }
endif;

if (!function_exists('cosmoswp_menu_woo_cart_options')) :

    /**
     * cosmoswp_menu_woo_cart_options
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array $cosmoswp_menu_woo_cart_options
     *
     */
    function cosmoswp_menu_woo_cart_options() {
        $cosmoswp_menu_woo_cart_options = array(
            'disable' => esc_html__('Disable', 'cosmoswp'),
            'icon'    => esc_html__('Icon', 'cosmoswp')
        );
        return apply_filters('cosmoswp_menu_woo_cart_options', $cosmoswp_menu_woo_cart_options);
    }
endif;

if (!function_exists('cosmoswp_menu_wishlist_options')) :

    /**
     * cosmoswp_menu_wishlist_options
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array $cosmoswp_menu_wishlist_options
     *
     */
    function cosmoswp_menu_wishlist_options() {
        $cosmoswp_menu_wishlist_options = array(
            'disable' => esc_html__('Disable', 'cosmoswp'),
            'icon'    => esc_html__('Icon', 'cosmoswp')
        );
        return apply_filters('cosmoswp_menu_wishlist_options', $cosmoswp_menu_wishlist_options);
    }
endif;

if (!function_exists('cosmoswp_fs_image_display_options')) :

    /**
     * Featured Slider Image Options
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array $cosmoswp_fs_image_display_options
     *
     */
    function cosmoswp_fs_image_display_options() {
        $cosmoswp_fs_image_display_options = array(
            'full-screen-bg' => esc_html__('Full Screen Background', 'cosmoswp'),
            'responsive-img' => esc_html__('Responsive Image', 'cosmoswp')
        );
        return apply_filters('cosmoswp_fs_image_display_options', $cosmoswp_fs_image_display_options);
    }
endif;

if (!function_exists('cosmoswp_slider_selection_from')) :

    /**
     * Feature slider selection
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array $cosmoswp_slider_selection_from
     *
     */
    function cosmoswp_slider_selection_from() {
        $cosmoswp_slider_selection_from = array(
            'from-page'        => esc_html__('Page/Page Repeater', 'cosmoswp'),
            'from-recent'      => esc_html__('Recents posts', 'cosmoswp'),
            'from-category'    => esc_html__('Category', 'cosmoswp'),
            'from-third-party' => esc_html__('Third Party', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_slider_selection_from', $cosmoswp_slider_selection_from);
    }
endif;

if (!function_exists('cosmoswp_feature_column_icon_or_image')) :

    /**
     * Button design options
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array $cosmoswp_feature_column_icon_or_image
     *
     */
    function cosmoswp_feature_column_icon_or_image() {
        $cosmoswp_feature_column_icon_or_image = array(
            'image'   => esc_html__('Featured Image', 'cosmoswp'),
            'icon'    => esc_html__('Featured Icon', 'cosmoswp'),
            'disable' => esc_html__('Disable', 'cosmoswp')
        );
        return apply_filters('cosmoswp_feature_column_icon_or_image', $cosmoswp_feature_column_icon_or_image);
    }
endif;

if (!function_exists('cosmoswp_site_layout_options')) :

    /**
     * Button design options
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array $cosmoswp_site_layout_options
     *
     */
    function cosmoswp_site_layout_options() {
        $cosmoswp_site_layout_options = array(
            'wide'           => esc_html__('Wide', 'cosmoswp'),
            'boxed'          => esc_html__('Boxed', 'cosmoswp'),
            'separate-boxed' => esc_html__('Separate Boxed', 'cosmoswp')
        );
        return apply_filters('cosmoswp_site_layout_options', $cosmoswp_site_layout_options);
    }
endif;

if (!function_exists('cosmoswp_button_design')) :

    /**
     * Button design options
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array $cosmoswp_button_design
     *
     */
    function cosmoswp_button_design() {
        $cosmoswp_button_design = array(
            'rectangle-button'         => esc_html__('Rectangle', 'cosmoswp'),
            'rounded-rectangle-button' => esc_html__('Rounded Rectangle', 'cosmoswp')
        );
        return apply_filters('cosmoswp_button_design', $cosmoswp_button_design);
    }
endif;


if (!function_exists('cosmoswp_feature_section_layout')) :

    /**
     * Blog layout options
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array $cosmoswp_feature_section_layout
     *
     */
    function cosmoswp_feature_section_layout() {
        $cosmoswp_feature_section_layout = array(
            'default'    => esc_html__('Default', 'cosmoswp'),
            'full-image' => esc_html__('Full Image', 'cosmoswp'),
            'hide-image' => esc_html__('Hide Image', 'cosmoswp')
        );
        return apply_filters('cosmoswp_feature_section_layout', $cosmoswp_feature_section_layout);
    }
endif;

if (!function_exists('cosmoswp_sidebar_options')) :

    /**
     * Sidebar Options
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array $cosmoswp_sidebar_options
     *
     */
    function cosmoswp_sidebar_options() {
        $cosmoswp_sidebar_options = array(
            'ful-ct' => esc_html__('Full Width Content - No Sidebar', 'cosmoswp'),
            'middle-ct' => esc_html__('Middle Column Content - No Sidebar', 'cosmoswp'),
            'ps-ct' => esc_html__('Left Primary Sidebar - Right Content', 'cosmoswp'),
            'ct-ps' => esc_html__('Left Content - Right Primary Sidebar', 'cosmoswp'),
            'ss-ct-ps' => esc_html__('Left Secondary Sidebar - Middle Content - Right Primary Sidebar', 'cosmoswp'),
            'ss-ps-ct' => esc_html__('Left Secondary Sidebar - Middle Primary Sidebar - Right Content', 'cosmoswp'),
            'ct-ps-ss' => esc_html__('Left Content - Middle Primary Sidebar - Right Secondary Sidebar', 'cosmoswp'),
        );
        if( cosmoswp_is_edit_page() ){
            $meta_options = array(
                'default' => esc_html__('Default From Customizer', 'cosmoswp')
            );
            $cosmoswp_sidebar_options = array_merge(
                $meta_options,
                $cosmoswp_sidebar_options
            );
        }
        return apply_filters('cosmoswp_sidebar_options', $cosmoswp_sidebar_options);
    }
endif;

if (!function_exists('cosmoswp_posttype_elements_sorting')) :

    /**
     * Post Type Element Option
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array $cosmoswp_posttype_elements_sorting
     *
     */
    function cosmoswp_posttype_elements_sorting() {
        $cosmoswp_posttype_elements_sorting = array(
            'featured-section' => esc_html__('Featured Section', 'cosmoswp'),
            'title'            => esc_html__('Title', 'cosmoswp'),
            'excerpt'          => esc_html__('Excerpt', 'cosmoswp'),
            'primary-meta'     => esc_html__('Primary Meta', 'cosmoswp'),
            'content'          => esc_html__('Content', 'cosmoswp'),
            'secondary-meta'   => esc_html__('Secondary Meta', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_posttype_elements_sorting', $cosmoswp_posttype_elements_sorting);
    }
endif;

if (!function_exists('cosmoswp_meta_elements_sorting')) :

    /**
     *  Meta-data one options
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array $cosmoswp_meta_elements_sorting
     *
     */
    function cosmoswp_meta_elements_sorting($posttype = 'all') {
        $cosmoswp_meta_elements_sorting = array(
            'published-date' => esc_html__('Published Date', 'cosmoswp'),
            'updated-date'   => esc_html__('Updated Date', 'cosmoswp'),
            'author'         => esc_html__('Author', 'cosmoswp'),
            'categories'     => esc_html__('Categories', 'cosmoswp'),
            'tags'           => esc_html__('Tags', 'cosmoswp'),
            'comments'       => esc_html__('Comments', 'cosmoswp'),
        );
        if ($posttype == 'page') {
            unset($cosmoswp_meta_elements_sorting['categories']);
            unset($cosmoswp_meta_elements_sorting['tags']);
        }
        return apply_filters('cosmoswp_meta_elements_sorting', $cosmoswp_meta_elements_sorting);
    }
endif;

if (!function_exists('cosmoswp_post_elements_sorting')) :

    /**
     * Post Element sorting
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array $cosmoswp_post_elements_sorting
     *
     */
    function cosmoswp_post_elements_sorting() {
        $cosmoswp_post_elements_sorting = array(
            'featured-section' => esc_html__('Featured Section', 'cosmoswp'),
            'title'            => esc_html__('Title', 'cosmoswp'),
            'published-date'   => esc_html__('Published Date', 'cosmoswp'),
            'updated-date'     => esc_html__('Updated Date', 'cosmoswp'),
            'author'           => esc_html__('Author', 'cosmoswp'),
            'cats'             => esc_html__('Cats', 'cosmoswp'),
            'tags'             => esc_html__('Tags', 'cosmoswp'),
            'comments'         => esc_html__('Comments', 'cosmoswp'),
            'content'          => esc_html__('Content', 'cosmoswp'),
            'social-share'     => esc_html__('Social Share', 'cosmoswp'),
            'navigation'       => esc_html__('Next/Prev Links', 'cosmoswp'),
            'author-box'       => esc_html__('Author Box', 'cosmoswp'),
            'related-posts'    => esc_html__('Related Posts', 'cosmoswp'),
            'comments-section' => esc_html__('Comments', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_post_elements_sorting', $cosmoswp_post_elements_sorting);
    }
endif;

if (!function_exists('cosmoswp_page_elements_sorting')) :

    /**
     * Page Element sorting
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array $cosmoswp_page_elements_sorting
     *
     */
    function cosmoswp_page_elements_sorting() {
        $cosmoswp_page_elements_sorting = array(
            'featured-section' => esc_html__('Featured Section', 'cosmoswp'),
            'title'            => esc_html__('Title', 'cosmoswp'),
            'content'          => esc_html__('Content', 'cosmoswp'),
            'comments-section' => esc_html__('Comments', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_page_elements_sorting', $cosmoswp_page_elements_sorting);
    }
endif;

if (!function_exists('cosmoswp_blog_column_number')) :

    /**
     * Blog/Archive Column Layout
     *
     * @since CosmosWP 1.3.1
     *
     * @param null
     * @return array cosmoswp_blog_column_number
     *
     */
    function cosmoswp_blog_column_number() {
        $cosmoswp_blog_column_number = array(
            '1' => esc_html__('1', 'cosmoswp'),
            '2' => esc_html__('2', 'cosmoswp'),
            '3' => esc_html__('3', 'cosmoswp'),
            '4' => esc_html__('4', 'cosmoswp'),
            '5' => esc_html__('5', 'cosmoswp'),
            '6' => esc_html__('6', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_blog_column_number', $cosmoswp_blog_column_number);
    }
endif;

if (!function_exists('cosmoswp_post_content_from')) :

    /**
     * Blog archive content options
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array $cosmoswp_post_content_from
     *
     */
    function cosmoswp_post_content_from() {
        $cosmoswp_post_content_from = array(
            'excerpt' => esc_html__('Excerpt', 'cosmoswp'),
            'content' => esc_html__('Content', 'cosmoswp')
        );
        return apply_filters('cosmoswp_post_content_from', $cosmoswp_post_content_from);
    }
endif;

if (!function_exists('cosmoswp_related_posts_layout')) :

    /**
     * Related posts layout options
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array
     *
     */
    function cosmoswp_related_posts_layout() {
        $cosmoswp_related_posts_layout = array(
            1 => 1,
            2 => 2,
            3 => 3,
            4 => 4
        );
        return apply_filters('cosmoswp_related_posts_layout', $cosmoswp_related_posts_layout);
    }
endif;

if (!function_exists('cosmoswp_single_navigation_options')) :

    /**
     * Single Navigation options
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array
     *
     */
    function cosmoswp_single_navigation_options() {
        $cosmoswp_single_navigation_options = array(
            '0'           => esc_html__('Disable', 'cosmoswp'),
            'title-only'  => esc_html__('Default ( Title )', 'cosmoswp'),
            'title-image' => esc_html__('Title and image', 'cosmoswp'),
            'image-only'  => esc_html__('Image', 'cosmoswp')
        );
        return apply_filters('cosmoswp_single_navigation_options', $cosmoswp_single_navigation_options);
    }
endif;

if (!function_exists('cosmoswp_get_image_sizes_options')) :

    /**
     * Image Size Option
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array $cosmoswp_get_image_sizes_options
     *
     */
    function cosmoswp_get_image_sizes_options($add_disable = false) {
        global $_wp_additional_image_sizes;
        $choices = array();
        if (true == $add_disable) {
            $choices['disable'] = esc_html__('No Image', 'cosmoswp');
        }
        foreach (array('thumbnail', 'medium', 'large') as $key => $_size) {
            $choices[$_size] = $_size . ' (' . get_option($_size . '_size_w') . 'x' . get_option($_size . '_size_h') . ')';
        }
        $choices['full'] = esc_html__('full (original)', 'cosmoswp');
        if (!empty($_wp_additional_image_sizes) && is_array($_wp_additional_image_sizes)) {

            foreach ($_wp_additional_image_sizes as $key => $size) {
                $choices[$key] = $key . ' (' . $size['width'] . 'x' . $size['height'] . ')';
            }

        }
        return apply_filters('cosmoswp_get_image_sizes_options', $choices);
    }
endif;

if (!function_exists('cosmoswp_breadcrumb_options')) :

    /**
     * Breadcrumb Options
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array cosmoswp_breadcrumb_options
     *
     */
    function cosmoswp_breadcrumb_options() {
        $cosmoswp_breadcrumb_options = array(
            'disable' => esc_html__('Disable', 'cosmoswp'),
        );
        if (function_exists('yoast_breadcrumb')) {
            $cosmoswp_breadcrumb_options['yoast'] = esc_html__('Yoast', 'cosmoswp');
        }
        if (function_exists('bcn_display')) {
            $cosmoswp_breadcrumb_options['bcn'] = esc_html__('Breadcrumb NavXT', 'cosmoswp');
        }
        if (class_exists('WooCommerce')) {
            $cosmoswp_breadcrumb_options['woocommerce'] = esc_html__('WooCommerce', 'cosmoswp');
        }
        return apply_filters('cosmoswp_breadcrumb_options', $cosmoswp_breadcrumb_options);
    }
endif;

if (!function_exists('cosmoswp_breadcrumb_position')) :

    /**
     * Breadcrumb Position
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array cosmoswp_breadcrumb_position
     *
     */
    function cosmoswp_breadcrumb_position() {
        $cosmoswp_breadcrumb_position = array(
            'before-banner-title' => esc_html__('Before Banner Title', 'cosmoswp'),
            'after-banner-title'  => esc_html__('After Banner Title', 'cosmoswp'),
            'before-content'      => esc_html__('Before Content', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_breadcrumb_position', $cosmoswp_breadcrumb_position);
    }
endif;

if (!function_exists('cosmoswp_pagination_options')) :

    /**
     * Pagination Options
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array cosmoswp_pagination_options
     *
     */
    function cosmoswp_pagination_options() {
        $cosmoswp_pagination_options = array(
            'disable' => esc_html__('Disable', 'cosmoswp'),
            'default' => esc_html__('Default', 'cosmoswp'),
            'numeric' => esc_html__('Numeric', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_pagination_options', $cosmoswp_pagination_options);
    }
endif;

if (!function_exists('cosmoswp_single_pagination_options')) :

    /**
     * Post Navigation Options
     *
     * @since CosmosWP 1.0.0
     *
     * @param null
     * @return array cosmoswp_single_pagination_options
     *
     */
    function cosmoswp_single_pagination_options() {
        $cosmoswp_single_pagination_options = array(
            'disable' => esc_html__('Disable', 'cosmoswp'),
            'default' => esc_html__('Default', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_single_pagination_options', $cosmoswp_single_pagination_options);
    }
endif;

if (!function_exists('cosmoswp_footer_copyright_layout_option')) :

    /**
     * Footer Copyright Layout Options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_footer_copyright_layout_option
     *
     */
    function cosmoswp_footer_copyright_layout_option() {
        $cosmoswp_footer_copyright_layout_option = array(
            'hide'   => esc_html__('Hide', 'cosmoswp'),
            'left'   => esc_html__('Left', 'cosmoswp'),
            'right'  => esc_html__('Right', 'cosmoswp'),
            'center' => esc_html__('Center', 'cosmoswp')
        );
        return apply_filters('cosmoswp_footer_copyright_layout_option', $cosmoswp_footer_copyright_layout_option);
    }
endif;

if (!function_exists('cosmoswp_footer_copyright_beside_option')) :

    /**
     * Footer copyright beside options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_footer_copyright_beside_option
     *
     */
    function cosmoswp_footer_copyright_beside_option() {
        $cosmoswp_footer_copyright_beside_option = array(
            'hide'        => esc_html__('Hide', 'cosmoswp'),
            'social'      => esc_html__('Social Links', 'cosmoswp'),
            'footer-menu' => esc_html__('Footer Menu', 'cosmoswp'),
            'widgets'     => esc_html__('Widgets', 'cosmoswp')
        );
        return apply_filters('cosmoswp_footer_copyright_beside_option', $cosmoswp_footer_copyright_beside_option);
    }
endif;

if (!function_exists('cosmoswp_footer_power_text_option')) :

    /**
     * Footer power text options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_footer_power_text_option
     *
     */
    function cosmoswp_footer_power_text_option() {
        $cosmoswp_footer_power_text_option = array(
            'hide'    => esc_html__('Hide', 'cosmoswp'),
            'default' => esc_html__('Default', 'cosmoswp'),
            'custom'  => esc_html__('Custom', 'cosmoswp')
        );
        return apply_filters('cosmoswp_footer_power_text_option', $cosmoswp_footer_power_text_option);
    }
endif;

if (!function_exists('cosmoswp_get_categories')) :

    /**
     * Get categories array
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_get_categories
     *
     */
    function cosmoswp_get_categories() {
        $cosmoswp_get_categories = array();

        $categories = get_categories(array(
            'orderby'    => 'name',
            'order'      => 'ASC',
            'hide_empty' => false,
        ));

        foreach ($categories as $category) {
            $cosmoswp_get_categories[$category->term_id] = $category->name;
        }
        return apply_filters('cosmoswp_get_categories', $cosmoswp_get_categories);
    }
endif;

if (!function_exists('cosmoswp_nav_menu_options')) :

    /**
     * Footer power text options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_nav_menu_options
     *
     */
    function cosmoswp_nav_menu_options() {
        $cosmoswp_nav_menu_options = array(
            'default' => esc_html__('Default', 'cosmoswp'),
            'custom'  => esc_html__('Custom Menu', 'cosmoswp')
        );;
        return apply_filters('cosmoswp_nav_menu_options', $cosmoswp_nav_menu_options);
    }
endif;

if (!function_exists('cosmoswp_primary_nav_menu_options')) :

    /**
     * Primary nav options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_primary_nav_menu_options
     *
     */
    function cosmoswp_primary_nav_menu_options() {
        $cosmoswp_primary_nav_menu_options = array(
            'header-primary-menu' => esc_html__('Default', 'cosmoswp'),
            'custom'              => esc_html__('Custom Menu', 'cosmoswp'),
        );;
        return apply_filters('cosmoswp_primary_nav_menu_options', $cosmoswp_primary_nav_menu_options);
    }
endif;

if (!function_exists('cosmoswp_menu_display_positions')) :

    /**
     * Footer Menu Display Position
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $footer_menu_display_positions
     *
     */
    function cosmoswp_menu_display_positions() {
        $footer_menu_display_positions = array(
            'cwp-horizontal-menu' => esc_html__('Horizontal', 'cosmoswp'),
            'cwp-vertical-menu'   => esc_html__('Vertical', 'cosmoswp')
        );;
        return apply_filters('cosmoswp_menu_display_positions', $footer_menu_display_positions);
    }
endif;

if (!function_exists('cosmoswp_get_nav_menus')) :

    /**
     * Get Nav Menus Array
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $nav_menus
     *
     */
    function cosmoswp_get_nav_menus($options = array()) {
        $cosmoswp_get_nav_menus = array();
        $nav_menus              = wp_get_nav_menus();
        foreach ($nav_menus as $menu) {
            $cosmoswp_get_nav_menus[$menu->term_id] = ucwords($menu->name);
        }
        return apply_filters('cosmoswp_get_nav_menus', $cosmoswp_get_nav_menus);
    }
endif;

if (!function_exists('cosmoswp_background_image_size_options')) :

    /**
     * Background Image Size Options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_background_image_size_options
     *
     */
    function cosmoswp_background_image_size_options() {

        $cosmoswp_background_image_size_options = array(
            'auto'    => esc_html__('Auto', 'cosmoswp'),
            'cover'   => esc_html__('Cover', 'cosmoswp'),
            'contain' => esc_html__('Contain', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_background_image_size_options', $cosmoswp_background_image_size_options);
    }
endif;

if (!function_exists('cosmoswp_background_image_position_options')) :

    /**
     * Background Image Position Options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_background_image_position_options
     *
     */
    function cosmoswp_background_image_position_options() {

        $cosmoswp_background_image_position_options = array(
            'center'        => esc_html__('Center', 'cosmoswp'),
            'left_center'   => esc_html__('Left Center', 'cosmoswp'),
            'right_center'  => esc_html__('Right Center', 'cosmoswp'),
            'top_left'      => esc_html__('Top Left', 'cosmoswp'),
            'top_right'     => esc_html__('Top Right', 'cosmoswp'),
            'top_center'    => esc_html__('Top Center', 'cosmoswp'),
            'bottom_left'   => esc_html__('Bottom Left', 'cosmoswp'),
            'bottom_right'  => esc_html__('Bottom Right', 'cosmoswp'),
            'bottom_center' => esc_html__('Bottom Center', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_background_image_position_options', $cosmoswp_background_image_position_options);
    }
endif;

if (!function_exists('cosmoswp_background_image_repeat_options')) :

    /**
     * Background Image Repeat Options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_background_image_repeat_options
     *
     */
    function cosmoswp_background_image_repeat_options() {

        $cosmoswp_background_image_repeat_options = array(
            'no-repeat' => esc_html__('No Repeat', 'cosmoswp'),
            'repeat'    => esc_html__('Repeat', 'cosmoswp'),
            'repeat-x'  => esc_html__('Repeat X', 'cosmoswp'),
            'repeat-y'  => esc_html__('Repeat Y', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_background_image_repeat_options', $cosmoswp_background_image_repeat_options);
    }
endif;

if (!function_exists('cosmoswp_background_image_attachment_options')) :

    /**
     * Background Image Attachment Options
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_background_image_attachment_options
     *
     */
    function cosmoswp_background_image_attachment_options() {

        $cosmoswp_background_image_attachment_options = array(
            'scroll' => esc_html__('Scroll', 'cosmoswp'),
            'fixed'  => esc_html__('Fixed', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_background_image_attachment_options', $cosmoswp_background_image_attachment_options);
    }
endif;

if (!function_exists('cosmoswp_contact_link_type')) :

    /**
     * Contact Link Type
     *
     * @since cosmoswp 1.0.0
     *
     * @param null
     * @return array $cosmoswp_contact_link_type
     *
     */
    function cosmoswp_contact_link_type() {

        $cosmoswp_contact_link_type = array(
            'normal-link' => esc_html__('Normal Link', 'cosmoswp'),
            'tel'         => esc_html__('Tel', 'cosmoswp'),
            'email'       => esc_html__('Email', 'cosmoswp'),
        );
        return apply_filters('cosmoswp_contact_link_type', $cosmoswp_contact_link_type);
    }
endif;


