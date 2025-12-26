<?php

/**
 * Plugin Name: Wp Chat Plugins
 * Author: ThemeAtelier
 * Version: 1.0
 * Plugin URI: http://www.wpchatplugins.com
 * Author: Wp Chat Plugins
 * Author URI: http://www.wpchatplugins.com
 * textdomain: wpchatplugins
 * Domain Path: /languages/
 */

 define('WPCP_PLUGIN_VERSION', '1.0');
 define('WPCP_PLUGIN_URL', trailingslashit(plugins_url('/', __FILE__)));

function register_wpchatplugins_widget($widgets_manager)
{
    require_once(__DIR__ . '/widgets/whatsapp-bubble.php');
    require_once(__DIR__ . '/widgets/whatsapp-button.php');
    require_once(__DIR__ . '/widgets/viber-bubble.php');
    require_once(__DIR__ . '/widgets/viber-button.php');
    require_once(__DIR__ . '/widgets/telegram-bubble.php');
    require_once(__DIR__ . '/widgets/telegram-button.php');
    $widgets_manager->register(new \WhatsApp_Bubble());
    $widgets_manager->register(new \WhatsApp_Button());
    $widgets_manager->register(new \Viber_Bubble());
    $widgets_manager->register(new \Viber_Button());
    $widgets_manager->register(new \Telegram_Bubble());
    $widgets_manager->register(new \Telegram_Button());
}
add_action('elementor/widgets/register', 'register_wpchatplugins_widget');

/**
 * Enqueue CSS
 */
function register_widget_styles()
{
    wp_register_style('bootstrap', plugins_url('assets/css/bootstrap.min.css', __FILE__));
    wp_register_style('icofont', plugins_url('assets/css/icofont.min.css', __FILE__));
    wp_register_style('fontawesome', plugins_url('assets/css/fontawesome-all.min.css', __FILE__));
    wp_register_style('sweetalert2', plugins_url('assets/css/sweetalert2.min.css', __FILE__));
    wp_register_style('whatsapp-main', plugins_url('assets/css/wHelp-main.css', __FILE__));
    wp_register_style('telegram-main', plugins_url('assets/css/teleSupport-main.css', __FILE__));
    wp_register_style('vchat-main', plugins_url('assets/css/vchat-main.css', __FILE__));
    wp_register_style('styles', plugins_url('assets/css/style.css', __FILE__));

	wp_register_script('sweetalert2', WPCP_PLUGIN_URL . 'assets/js/sweetalert2.all.min.js', array('jquery'), WPCP_PLUGIN_VERSION, true);
    wp_register_script('select-togglebutton', WPCP_PLUGIN_URL . 'assets/js/select-togglebutton.min.js', array('jquery'), WPCP_PLUGIN_VERSION, true);
    wp_register_script('moment', WPCP_PLUGIN_URL . 'assets/js/moment.min.js', array('jquery'), WPCP_PLUGIN_VERSION, true);
    wp_register_script('moment-timezone', WPCP_PLUGIN_URL . 'assets/js/moment-timezone-with-data.min.js', array('jquery'), WPCP_PLUGIN_VERSION, true);
    wp_register_script('whatsapp-main', WPCP_PLUGIN_URL . 'assets/js/wHelp-main.js', array('jquery'), WPCP_PLUGIN_VERSION, true);
    wp_register_script('telegram-main', WPCP_PLUGIN_URL . 'assets/js/teleSupport-main.js', array('jquery'), WPCP_PLUGIN_VERSION, true);
    wp_register_script('vchat-main', WPCP_PLUGIN_URL . 'assets/js/vchat-main.js', array('jquery'), WPCP_PLUGIN_VERSION, true);
    wp_register_script('custom', WPCP_PLUGIN_URL . 'assets/js/custom.js', array('jquery'), WPCP_PLUGIN_VERSION, true);
}
add_action('wp_enqueue_scripts', 'register_widget_styles');
