<?php

/**
 * Plugin Name: MCS Demo
 * Description: A demo plugin for MCS functionality.
 * Version: 1.0.1
 * Author: ThemeAtelier
 * License: GPL2
 * Text Domain: mcs-demo
 * Domain Path: /languages
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

define('MCS_DEMO_PLUGIN_VERSION', '1.0.1');
define('MCS_DEMO_PLUGIN_URL', trailingslashit(plugins_url('/', __FILE__)));


add_shortcode('mcs_demo_shortcode', 'mcs_demo_shortcode_function');

function mcs_demo_shortcode_function($atts)
{
    ob_start();
    wp_enqueue_style('icofont');
    wp_enqueue_style('mcs-main');
    wp_enqueue_style('styles');
    wp_enqueue_script('select-togglebutton');
    wp_enqueue_script('moment');
    wp_enqueue_script('moment-timezone');
    wp_enqueue_script('mcs-main');
    wp_enqueue_script('mcs-custom');
?>
    <!-- ========== Popup layout section start ========== -->

    <section class="layouts-page position-relative theme-color">
        <div class="switch-box layouts-box" style="position: absolute; top: 100px; right: 15px; z-index: 999">
            <div class="switch">
                <label id="switch">
                    <input type="checkbox" onchange="toggleTheme()" id="slider" />
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
        <div class="layouts">
            <div class="container-fluid">
                <div class="usage_examples">
                    <div class="grid grid-cols-12 gap-5" id="usage_examples">
                        <div class="col-span-12 md:col-span-5 lg:col-span-4 xl:col-span-3 p-0">
                            <div class="layouts__area">
                                <div class="layouts__wrapper">
                                    <select id="change_effect_popup">
                                        <option data-animation="#animation_1" value="1" selected=""> Fade Right </option>
                                        <option data-animation="#animation_2" value="2"> Fade Down </option>
                                        <option data-animation="#animation_4" value="4"> Fade In Scale </option>
                                        <option data-animation="#animation_5" value="5"> Rotation </option>
                                        <option data-animation="#animation_6" value="6"> Slide Fall </option>
                                        <option data-animation="#animation_7" value="7"> Slide Down </option>
                                        <option data-animation="#animation_3" value="3"> Ease Down </option>
                                        <option data-animation="#animation_8" value="8"> Rotate Left </option>
                                        <option data-animation="#animation_9" value="9"> Flip Horizontal </option>
                                        <option data-animation="#animation_10" value="10"> Flip Vertical </option>
                                        <option data-animation="#animation_11" value="11"> Flip Up </option>
                                        <option data-animation="#animation_12" value="12"> Super Scaled </option>
                                        <option data-animation="#animation_13" value="13"> Slide Up </option>
                                    </select>
                                    <div class="mcs-layouts layouts__sidebar wpChat-demo-scroll">
                                        <div class="grid grid-cols-12 gap-5">
                                            <div class="md:col-span-6 usage_example selected" data-show="#example_1">
                                                <div class="layouts__design">
                                                    <img class="img-fliud" src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/mcs-images/header-center.jpg' ?>" alt="" />
                                                    <div class="layouts__title">Header Center</div>
                                                </div>
                                            </div>
                                            <div class="md:col-span-6 usage_example" data-show="#example_2">
                                                <div class="layouts__design">
                                                    <img class="img-fliud" src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/mcs-images/header-left.jpg' ?>" alt="" />
                                                    <div class="layouts__title">Header Left</div>
                                                </div>
                                            </div>
                                            <div class="md:col-span-6 usage_example" data-show="#example_3">
                                                <div class="layouts__design">
                                                    <img class="img-fliud" src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/mcs-images/layout-list.jpg' ?>" alt="" />
                                                    <div class="layouts__title">List Layout</div>
                                                </div>
                                            </div>
                                            <div class="md:col-span-6 usage_example" data-show="#example_4">
                                                <div class="layouts__design">
                                                    <img class="img-fliud" src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/mcs-images/layout-grid.jpg' ?>" alt="" />
                                                    <div class="layouts__title">Grid Layout</div>
                                                </div>
                                            </div>
                                            <div class="md:col-span-6 usage_example" data-show="#example_5">
                                                <div class="layouts__design">
                                                    <img class="img-fliud" src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/mcs-images/left-position.jpg' ?>" alt="" />
                                                    <div class="layouts__title">Left Position</div>
                                                </div>
                                            </div>
                                            <div class="md:col-span-6 usage_example" data-show="#example_6">
                                                <div class="layouts__design">
                                                    <img class="img-fliud" src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/mcs-images/layout-dark.jpg' ?>" alt="" />
                                                    <div class="layouts__title">Dark Layout</div>
                                                </div>
                                            </div>
                                            <div class="md:col-span-6 usage_example" data-show="#example_7">
                                                <div class="layouts__design">
                                                    <img class="img-fliud" src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/mcs-images/different-color.jpg' ?>" alt="" />
                                                    <div class="layouts__title">Different Color</div>
                                                </div>
                                            </div>
                                            <div class="md:col-span-6 usage_example" data-show="#example_8">
                                                <div class="layouts__design">
                                                    <img class="img-fliud" src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/mcs-images/layout-button.jpg' ?>" alt="" />
                                                    <div class="layouts__title">Different Button</div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 mb-4 usage_example" data-show="#example_9">
                                                <div class="layouts__design">
                                                    <img class="img-fliud" src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/mcs-images/buttons.jpg' ?>" alt="" />
                                                    <div class="layouts__title">Buttons</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layouts__menu">
                                        <button class="layouts__menu-btn" onclick="myFunction()">
                                            <i class="icofont-eye-open"></i>
                                        </button>
                                        <div class="layouts__menu__area">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-6 mb-4 usage_example selected" data-show="#example_1">
                                                    <div class="layouts__menu__design">
                                                        <img class="img-fliud" src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/mcs-images/header-center.png' ?>" alt="" />
                                                        <div class="layouts__menu__title"> Header Center </div>
                                                    </div>
                                                </div>
                                                <div class="col-span-6 mb-4 usage_example" data-show="#example_2">
                                                    <div class="layouts__menu__design">
                                                        <img class="img-fliud" src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/mcs-images/header-left.png' ?>" alt="" />
                                                        <div class="layouts__menu__title"> Header Left </div>
                                                    </div>
                                                </div>
                                                <div class="col-span-6 mb-4 usage_example" data-show="#example_3">
                                                    <div class="layouts__menu__design">
                                                        <img class="img-fliud" src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/mcs-images/layout-list.png' ?>" alt="" />
                                                        <div class="layouts__menu__title"> List Layout </div>
                                                    </div>
                                                </div>
                                                <div class="col-span-6 mb-4 usage_example" data-show="#example_4">
                                                    <div class="layouts__menu__design">
                                                        <img class="img-fliud" src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/mcs-images/layout-grid.png' ?>" alt="" />
                                                        <div class="layouts__menu__title"> Grid Layout </div>
                                                    </div>
                                                </div>
                                                <div class="col-span-6 mb-4 usage_example" data-show="#example_5">
                                                    <div class="layouts__menu__design">
                                                        <img class="img-fliud" src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/mcs-images/layout-left.png' ?>" alt="" />
                                                        <div class="layouts__menu__title"> Left Position </div>
                                                    </div>
                                                </div>
                                                <div class="col-span-6 mb-4 usage_example" data-show="#example_6">
                                                    <div class="layouts__menu__design">
                                                        <img class="img-fliud" src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/mcs-images/layout-dark.png' ?>" alt="" />
                                                        <div class="layouts__menu__title"> Dark Layout </div>
                                                    </div>
                                                </div>
                                                <div class="col-span-6 mb-4 usage_example" data-show="#example_7">
                                                    <div class="layouts__menu__design">
                                                        <img class="img-fliud" src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/mcs-images/layout-color.png' ?>" alt="" />
                                                        <div class="layouts__menu__title"> Different Color </div>
                                                    </div>
                                                </div>
                                                <div class="col-span-6 mb-4 usage_example" data-show="#example_8">
                                                    <div class="layouts__menu__design">
                                                        <img class="img-fliud" src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/mcs-images/layout-button.png' ?>" alt="" />
                                                        <div class="layouts__menu__title"> Different Button </div>
                                                    </div>
                                                </div>
                                                <div class="col-span-6 mb-4 usage_example" data-show="#example_9">
                                                    <div class="layouts__menu__design">
                                                        <img class="img-fliud" src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/mcs-images/layout-button.png' ?>" alt="" />
                                                        <div class="layouts__menu__title"> Buttons </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-7 lg:col-span-8 xl:col-span-9 px-0">
                            <div class="layouts__popup">
                                <button class="mobile-view">
                                    <i class="icofont-smart-phone"></i>
                                </button>
                                <button class="desktop-view">
                                    <i class="icofont-computer"></i>
                                </button>
                                <div class="layouts__popup__wrapper">
                                    <!-- example 1 -->
                                    <div class="mSupport wpChat" id="example_1">
                                        <button class="mSupport-bubble circle-bubble circle-animation-1 example_button">
                                            <span class="open-icon">
                                                <i class="icofont-facebook-messenger"></i>
                                            </span>
                                            <span class="close-icon">
                                                <i class="icofont-close"></i>
                                            </span>
                                        </button>
                                        <div
                                            class="example_popup mSupport__popup animation13 chat-availability"
                                            data-timezone=""
                                            data-availability='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59" }'>
                                            <div class="mSupport__popup--header header-center">
                                                <div class="image">
                                                    <img src="<?php echo MCS_DEMO_PLUGIN_URL; ?>assets/common/user.webp" alt="user" />
                                                </div>
                                                <div class="info">
                                                    <h4 class="info__name">John Doe</h4>
                                                    <p class="info__title">Text now to get instant response</p>
                                                </div>
                                            </div>
                                            <div class="mSupport__popup--content">
                                                <div class="current-time"></div>
                                                <div class="sms">
                                                    <div class="sms__user">
                                                        <img src="<?php echo MCS_DEMO_PLUGIN_URL; ?>assets/common/user.webp" alt="user" />
                                                    </div>
                                                    <div class="sms__text">
                                                        <p>
                                                            Hello, Welcome to the site. Looking for the best offer? Text me by clicking below button I will be happy to find your
                                                            perfect option.
                                                        </p>
                                                    </div>
                                                </div>
                                                <button class="mSupport__send-message">
                                                    <i class="icofont-facebook-messenger"></i>Start Chat
                                                    <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Example 2 -->
                                    <div class="mSupport wpChat" id="example_2">
                                        <button class="mSupport-bubble circle-bubble circle-animation-1 example_button">
                                            <span class="open-icon">
                                                <i class="icofont-facebook-messenger"></i>
                                            </span>
                                            <span class="close-icon">
                                                <i class="icofont-close"></i>
                                            </span>
                                        </button>
                                        <div
                                            class="example_popup mSupport__popup animation13 chat-availability"
                                            data-timezone=""
                                            data-availability='{ "sunday":"00:00-00:01", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59" }'>
                                            <div class="mSupport__popup--header">
                                                <div class="image">
                                                    <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="user" />
                                                </div>
                                                <div class="info">
                                                    <h4 class="info__name">John Doe</h4>
                                                    <p class="info__title">
                                                        Text now to get instant response
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="mSupport__popup--content">
                                                <div class="current-time"></div>
                                                <div class="sms">
                                                    <div class="sms__user">
                                                        <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="user" />
                                                    </div>
                                                    <div class="sms__text">
                                                        <p>
                                                            Hello, Welcome to the site. Looking for the best offer? Text me by clicking below button I will be happy to find your perfect option.
                                                        </p>
                                                    </div>
                                                </div>
                                                <button class="mSupport__send-message" target="_blank">
                                                    <i class="icofont-facebook-messenger"></i>Start Chat
                                                    <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Example 3 -->
                                    <div class="mSupport-multi wpChat-multi" id="example_3">
                                        <button class="mSupport-bubble circle-bubble circle-animation-1 example_button">
                                            <span class="open-icon">
                                                <i class="icofont-facebook-messenger"></i>
                                            </span>
                                            <span class="close-icon">
                                                <i class="icofont-close"></i>
                                            </span>
                                        </button>
                                        <div class="example_popup mSupport-multi__popup animation3">
                                            <div class="mSupport-multi__popup--header">
                                                <h3 class="title">Need Help? Chat with us</h3>
                                                <p class="subtitle">Click one of our representatives below</p>
                                            </div>
                                            <div
                                                class="mSupport-multi__popup--content"
                                                data-search="true"
                                                id="multi-user">
                                                <div class="search">
                                                    <input
                                                        id="search-input"
                                                        onkeyup="searchUser()"
                                                        type="text"
                                                        placeholder="Search" />
                                                </div>
                                                <div class="users">
                                                    <div
                                                        class="user mSupportUserAvailability"
                                                        data-timezone=""
                                                        data-useravailability='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59" }'>
                                                        <div class="user__image">
                                                            <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="user" />
                                                        </div>
                                                        <div class="user__info">
                                                            <h5 class="user__info--name">Mia Smith</h5>
                                                            <p class="user__info--title">Sales Support</p>
                                                            <p class="user__info--online">I'm available</p>
                                                            <p class="user__info--offline">I'm not available</p>
                                                        </div>
                                                        <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                                    </div>

                                                    <div
                                                        class="user mSupportUserAvailability"
                                                        data-timezone=""
                                                        data-useravailability='{ "sunday":"00:00-5:59", "monday":"00:00-5:59", "tuesday":"00:00-5:59", "wednesday":"01:00-5:59", "thursday":"00:00-5:59", "friday":"00:01-5:59", "saturday":"00:00-5:59" }'>
                                                        <div class="user__image">
                                                            <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="user" />
                                                        </div>
                                                        <div class="user__info">
                                                            <h5 class="user__info--name">James Brown</h5>
                                                            <p class="user__info--title">Sales Support</p>
                                                            <p class="user__info--online">I'm available</p>
                                                            <p class="user__info--offline">I'm not available</p>
                                                        </div>
                                                        <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                                    </div>
                                                    <div
                                                        class="user mSupportUserAvailability"
                                                        data-timezone="America/Los_Angeles"
                                                        data-useravailability='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59" }'>
                                                        <div class="user__image">
                                                            <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="user" />
                                                        </div>
                                                        <div class="user__info">
                                                            <h5 class="user__info--name">Mia Smith</h5>
                                                            <p class="user__info--title">Sales Support</p>
                                                            <p class="user__info--online">I'm available</p>
                                                            <p class="user__info--offline">I'm not available</p>
                                                        </div>
                                                        <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                                    </div>
                                                    <div
                                                        class="user mSupportUserAvailability"
                                                        data-timezone="America/Los_Angeles"
                                                        data-useravailability='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59" }'>
                                                        <div class="user__image">
                                                            <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="user" />
                                                        </div>
                                                        <div class="user__info">
                                                            <h5 class="user__info--name">Mia Smith</h5>
                                                            <p class="user__info--title">Sales Support</p>
                                                            <p class="user__info--online">I'm available</p>
                                                            <p class="user__info--offline">I'm not available</p>
                                                        </div>
                                                        <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- example 4 -->
                                    <div class="mSupport-multi mSupport-grid wpChat-multi wpChat-grid" id="example_4">
                                        <button class="mSupport-bubble circle-bubble circle-animation-1 example_button">
                                            <span class="open-icon">
                                                <i class="icofont-facebook-messenger"></i>
                                            </span>
                                            <span class="close-icon">
                                                <i class="icofont-close"></i>
                                            </span>
                                        </button>
                                        <div class="example_popup mSupport-multi__popup animation3">
                                            <div class="mSupport-multi__popup--header">
                                                <h3 class="title">Need Help? Chat with us</h3>
                                                <p class="subtitle">Click one of our representatives below</p>
                                            </div>
                                            <div
                                                class="mSupport-multi__popup--content"
                                                data-search=""
                                                id="multi-user">
                                                <div class="search">
                                                    <input
                                                        id="search-input"
                                                        onkeyup="searchUser()"
                                                        type="text"
                                                        placeholder="Search" />
                                                </div>
                                                <div class="users">
                                                    <div
                                                        class="user mSupportUserAvailability"
                                                        data-timezone=""
                                                        data-useravailability='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-05:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59"}'>
                                                        <div class="user__image">
                                                            <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="user" />
                                                        </div>
                                                        <div class="user__info">
                                                            <h5 class="user__info--name">Mia Smith</h5>
                                                            <p class="user__info--title">Sales Support</p>
                                                            <p class="user__info--online">I'm available</p>
                                                            <p class="user__info--offline">I'm not available</p>
                                                        </div>
                                                        <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                                    </div>

                                                    <div
                                                        class="user mSupportUserAvailability"
                                                        data-timezone=""
                                                        data-useravailability='{ "sunday":"00:00-5:59", "monday":"00:00-5:59", "tuesday":"00:00-5:59", "wednesday":"01:00-23:59", "thursday":"00:00-5:59", "friday":"00:01-5:59", "saturday":"00:00-5:59" }'>
                                                        <div class="user__image">
                                                            <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="user" />
                                                        </div>
                                                        <div class="user__info">
                                                            <h5 class="user__info--name">James Brown</h5>
                                                            <p class="user__info--title">Sales Support</p>
                                                            <p class="user__info--online">I'm available</p>
                                                            <p class="user__info--offline">I'm not available</p>
                                                        </div>
                                                        <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                                    </div>
                                                    <div
                                                        class="user mSupportUserAvailability"
                                                        data-timezone="America/Los_Angeles"
                                                        data-useravailability='{ }'>
                                                        <div class="user__image">
                                                            <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="user" />
                                                        </div>
                                                        <div class="user__info">
                                                            <h5 class="user__info--name">Mia Smith</h5>
                                                            <p class="user__info--title">Sales Support</p>
                                                            <p class="user__info--online">I'm available</p>
                                                            <p class="user__info--offline">I'm not available</p>
                                                        </div>
                                                        <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                                    </div>
                                                    <div
                                                        class="user mSupportUserAvailability"
                                                        data-timezone=""
                                                        data-useravailability='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59" }'>
                                                        <div class="user__image">
                                                            <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="user" />
                                                        </div>
                                                        <div class="user__info">
                                                            <h5 class="user__info--name">Mia Smith</h5>
                                                            <p class="user__info--title">Sales Support</p>
                                                            <p class="user__info--online">I'm available</p>
                                                            <p class="user__info--offline">I'm not available</p>
                                                        </div>
                                                        <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- example 5 -->
                                    <div class="mSupport-multi mSupport-left wpChat-multi wpChat-left" id="example_5">
                                        <button class="mSupport-bubble circle-bubble circle-animation-1 example_button">
                                            <span class="open-icon">
                                                <i class="icofont-facebook-messenger"></i>
                                            </span>
                                            <span class="close-icon">
                                                <i class="icofont-close"></i>
                                            </span>
                                        </button>
                                        <div class="example_popup mSupport-multi__popup animation3">
                                            <div class="mSupport-multi__popup--header">
                                                <h3 class="title">Need Help? Chat with us</h3>
                                                <p class="subtitle">Click one of our representatives below</p>
                                            </div>
                                            <div
                                                class="mSupport-multi__popup--content"
                                                data-search=""
                                                id="multi-user">
                                                <div class="search">
                                                    <input
                                                        id="search-input"
                                                        onkeyup="searchUser()"
                                                        type="text"
                                                        placeholder="Search" />
                                                </div>
                                                <div class="users">
                                                    <div
                                                        class="user mSupportUserAvailability"
                                                        data-timezone=""
                                                        data-useravailability='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59" }'>
                                                        <div class="user__image">
                                                            <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="user" />
                                                        </div>
                                                        <div class="user__info">
                                                            <h5 class="user__info--name">Mia Smith</h5>
                                                            <p class="user__info--title">Sales Support</p>
                                                            <p class="user__info--online">I'm available</p>
                                                            <p class="user__info--offline">I'm not available</p>
                                                        </div>
                                                        <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                                    </div>

                                                    <div
                                                        class="user mSupportUserAvailability"
                                                        data-timezone=""
                                                        data-useravailability='{ "sunday":"00:00-5:59", "monday":"00:00-5:59", "tuesday":"00:00-5:59", "wednesday":"01:00-5:59", "thursday":"00:00-5:59", "friday":"00:01-5:59", "saturday":"00:00-5:59" }'>
                                                        <div class="user__image">
                                                            <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="user" />
                                                        </div>
                                                        <div class="user__info">
                                                            <h5 class="user__info--name">James Brown</h5>
                                                            <p class="user__info--title">Sales Support</p>
                                                            <p class="user__info--online">I'm available</p>
                                                            <p class="user__info--offline">I'm not available</p>
                                                        </div>
                                                        <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                                    </div>
                                                    <div
                                                        class="user mSupportUserAvailability"
                                                        data-timezone="America/Los_Angeles"
                                                        data-useravailability='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59" }'>
                                                        <div class="user__image">
                                                            <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="user" />
                                                        </div>
                                                        <div class="user__info">
                                                            <h5 class="user__info--name">Mia Smith</h5>
                                                            <p class="user__info--title">Sales Support</p>
                                                            <p class="user__info--online">I'm available</p>
                                                            <p class="user__info--offline">I'm not available</p>
                                                        </div>
                                                        <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Example 6 left side -->
                                    <div class="night-mode mSupport-multi wpChat-multi" id="example_6">
                                        <button class="mSupport-bubble circle-bubble circle-animation-1 example_button">
                                            <span class="open-icon">
                                                <i class="icofont-facebook-messenger"></i>
                                            </span>
                                            <span class="close-icon">
                                                <i class="icofont-close"></i>
                                            </span>
                                        </button>
                                        <div class="example_popup mSupport-multi__popup animation3">
                                            <div class="mSupport-multi__popup--header">
                                                <h3 class="title">Need Help? Chat with us</h3>
                                                <p class="subtitle">Click one of our representatives below</p>
                                            </div>
                                            <div
                                                class="mSupport-multi__popup--content"
                                                data-search="true"
                                                id="multi-user">
                                                <div class="search">
                                                    <input
                                                        id="search-input"
                                                        onkeyup="searchUser()"
                                                        type="text"
                                                        placeholder="Search" />
                                                </div>
                                                <div class="users">
                                                    <div
                                                        class="user mSupportUserAvailability"
                                                        data-timezone=""
                                                        data-useravailability='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59" }'>
                                                        <div class="user__image">
                                                            <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="user" />
                                                        </div>
                                                        <div class="user__info">
                                                            <h5 class="user__info--name">Mia Smith</h5>
                                                            <p class="user__info--title">Sales Support</p>
                                                            <p class="user__info--online">I'm available</p>
                                                            <p class="user__info--offline">I'm not available</p>
                                                        </div>
                                                        <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                                    </div>

                                                    <div
                                                        class="user mSupportUserAvailability"
                                                        data-timezone=""
                                                        data-useravailability='{ "sunday":"00:00-5:59", "monday":"00:00-5:59", "tuesday":"00:00-5:59", "wednesday":"01:00-5:59", "thursday":"00:00-5:59", "friday":"00:01-5:59", "saturday":"00:00-5:59" }'>
                                                        <div class="user__image">
                                                            <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="user" />
                                                        </div>
                                                        <div class="user__info">
                                                            <h5 class="user__info--name">James Brown</h5>
                                                            <p class="user__info--title">Sales Support</p>
                                                            <p class="user__info--online">I'm available</p>
                                                            <p class="user__info--offline">I'm not available</p>
                                                        </div>
                                                        <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                                    </div>
                                                    <div
                                                        class="user mSupportUserAvailability"
                                                        data-timezone="America/Los_Angeles"
                                                        data-useravailability='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59" }'>
                                                        <div class="user__image">
                                                            <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="user" />
                                                        </div>
                                                        <div class="user__info">
                                                            <h5 class="user__info--name">Mia Smith</h5>
                                                            <p class="user__info--title">Sales Support</p>
                                                            <p class="user__info--online">I'm available</p>
                                                            <p class="user__info--offline">I'm not available</p>
                                                        </div>
                                                        <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Example 7 Dark layout -->
                                    <div class="mSupport wpChat dark-mode" id="example_7">
                                        <button class="mSupport-bubble circle-bubble circle-animation-1 example_button">
                                            <span class="open-icon">
                                                <i class="icofont-facebook-messenger"></i>
                                            </span>
                                            <span class="close-icon">
                                                <i class="icofont-close"></i>
                                            </span>
                                        </button>
                                        <div
                                            class="example_popup mSupport__popup animation13 chat-availability"
                                            data-timezone=""
                                            data-availability='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59" }'>
                                            <div class="mSupport__popup--header header-center">
                                                <div class="image">
                                                    <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="user" />
                                                </div>
                                                <div class="info">
                                                    <h4 class="info__name">John Doe</h4>
                                                    <p class="info__title">Text now to get instant response</p>
                                                </div>
                                            </div>
                                            <div class="mSupport__popup--content">
                                                <div class="current-time"></div>
                                                <div class="sms">
                                                    <div class="sms__user">
                                                        <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="user" />
                                                    </div>
                                                    <div class="sms__text">
                                                        <p>
                                                            Hello, Welcome to the site. Looking for the best offer? Text me by clicking below button I will be happy to find your
                                                            perfect option.
                                                        </p>
                                                    </div>
                                                </div>
                                                <button class="mSupport__send-message" target="_blank">
                                                    <i class="icofont-facebook-messenger"></i>Start Chat
                                                    <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Example 8 -->
                                    <div class="mSupport wpChat" id="example_8">
                                        <button class="mSupport-bubble bubble mSupport-btn-bg circle-animation-1 example_button">
                                            <div class="bubble__icon bubble-animation4">
                                                <span class="bubble__icon--open">
                                                    <i class="icofont-facebook-messenger"></i>
                                                </span>
                                                <span class="bubble__icon--close">
                                                    <i class="icofont-close"></i>
                                                </span>
                                            </div>
                                            How can I help?
                                        </button>
                                        <div
                                            class="example_popup mSupport__popup animation13 chat-availability"
                                            data-timezone=""
                                            data-availability='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59" }'>
                                            <div class="mSupport__popup--header header-center">
                                                <div class="image">
                                                    <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="user" />
                                                </div>
                                                <div class="info">
                                                    <h4 class="info__name">John Doe</h4>
                                                    <p class="info__title">Text now to get instant response</p>
                                                </div>
                                            </div>
                                            <div class="mSupport__popup--content">
                                                <div class="current-time"></div>
                                                <div class="sms">
                                                    <div class="sms__user">
                                                        <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="user" />
                                                    </div>
                                                    <div class="sms__text">
                                                        <p>
                                                            Hello, Welcome to the site. Looking for the best offer? Text me by clicking below button I will be happy to find your perfect option.
                                                        </p>
                                                    </div>
                                                </div>
                                                <button
                                                    class="mSupport__send-message"
                                                    target="_blank">
                                                    <i class="icofont-facebook-messenger"></i>Start Chat
                                                    <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpChat" id="example_9">
                                        <h1 style="text-align: center">
                                            We have mainly three different type of buttons. Then, we also have three
                                            sizes and three different designs for each button.
                                        </h1>
                                        <div class="section_title">
                                            <h2>Button style 1</h2>
                                            <p>You can use this style for popup button.</p>
                                        </div>
                                        <div class="buttons_wrapper">
                                            <a href="https://www.m.me/ThemeAtelier" target="_blank" class="mSupport-button-2 mSupport-btn-bg mSupport-btn-sm">
                                                <i class="icofont-facebook-messenger"></i>How can i help you?
                                            </a>
                                            <a href="https://www.m.me/ThemeAtelier" target="_blank" class="mSupport-button-2 mSupport-btn-bg">
                                                <i class="icofont-facebook-messenger"></i>How can i help you?
                                            </a>
                                            <a href="https://www.m.me/ThemeAtelier" target="_blank" class="mSupport-button-2 mSupport-btn-bg mSupport-btn-lg">
                                                <i class="icofont-facebook-messenger"></i>How can i help you?
                                            </a>
                                            <a href="https://www.m.me/ThemeAtelier" target="_blank" class="mSupport-button-2">
                                                <i class="icofont-facebook-messenger"></i>How can i help you?
                                            </a>
                                            <a href="https://www.m.me/ThemeAtelier" target="_blank" class="mSupport-button-2 mSupport-btn-rounded"><i class="icofont-facebook-messenger"></i>How can i help you?</a>
                                        </div>

                                        <div class="section_title">
                                            <h2>Button style 2</h2>
                                            <p>You can also use this style for popup button.</p>
                                        </div>
                                        <div class="buttons_wrapper">
                                            <a
                                                href="https://www.m.me/ThemeAtelier" target="_blank"
                                                class="mSupport-button-3 mSupport-btn-rounded mSupport-btn-sm mSupport-btn-bg"><i class="icofont-facebook-messenger"></i>How can i help you?</a>
                                            <a href="https://www.m.me/ThemeAtelier" target="_blank" class="mSupport-button-3 mSupport-btn-rounded mSupport-btn-bg"><i class="icofont-facebook-messenger"></i>How can i help you?</a>
                                            <a
                                                href="https://www.m.me/ThemeAtelier" target="_blank"
                                                class="mSupport-button-3 mSupport-btn-bg mSupport-btn-rounded mSupport-btn-lg"><i class="icofont-facebook-messenger"></i>How can i help you?</a>
                                            <a href="https://www.m.me/ThemeAtelier" target="_blank" class="mSupport-button-3 mSupport-btn-bg">
                                                <i class="icofont-facebook-messenger"></i>How can i help you?
                                            </a>
                                            <a href="https://www.m.me/ThemeAtelier" target="_blank" class="mSupport-button-3">
                                                <i class="icofont-facebook-messenger"></i>How can i help you?
                                            </a>
                                            <a href="https://www.m.me/ThemeAtelier" target="_blank" class="mSupport-button-3 mSupport-btn-rounded"><i class="icofont-facebook-messenger"></i>How can i help you?</a>
                                        </div>
                                        <div class="section_title">
                                            <h2>Buttons with image and info</h2>
                                            <p>These are buttons with your or your support team members info and
                                                availability time. These are dynamic buttons. Means, it will show your
                                                active an inactive time according to time availability attributes.
                                                Inactive button are not clickable.</p>
                                        </div>
                                        <div class="buttons_wrapper">
                                            <button
                                                data-timezone="America/Los_Angeles"
                                                class="mSupport-bubble mSupport-button-4 mSupport-btn-bg mSupportButtons mSupport-btn-sm"
                                                data-btnavailablety='{ "sunday":"00:00-08:30", "monday":"00:00-08:30", "tuesday":"00:00-08:30", "wednesday":"00:00-08:00", "thursday":"00:00-23:59", "friday":"00:00-08:30", "saturday":"00:00-08:30" }'>
                                                <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="" />
                                                <div class="info-wrapper">
                                                    <p class="info">Robert / Sales Support</p>
                                                    <p class="title">Need Help? Text via messanger</p>
                                                    <p class="online">I'm available</p>
                                                    <p class="offline">I'm not available</p>
                                                </div>
                                                <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                            </button>

                                            <button
                                                data-timezone="America/Los_Angeles"
                                                class="mSupport-bubble mSupport-button-4 mSupport-btn-bg mSupportButtons"
                                                data-btnavailablety='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:00-23:59", "saturday":"00:00-23:59" }'>
                                                <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="" />
                                                <div class="info-wrapper">
                                                    <p class="info">Robert / Sales Support</p>
                                                    <p class="title">Need Help? Text via messanger</p>
                                                    <p class="online">I'm available</p>
                                                    <p class="offline">I'm not available</p>
                                                </div>
                                                <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                            </button>
                                            <button
                                                data-timezone="America/Los_Angeles"
                                                class="mSupport-bubble mSupport-button-4 mSupport-btn-bg mSupportButtons mSupport-btn-lg"
                                                data-btnavailablety='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-08:00", "friday":"00:00-23:59", "saturday":"00:00-23:59" }'>
                                                <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="" />
                                                <div class="info-wrapper">
                                                    <p class="info">Robert / Sales Support test</p>
                                                    <p class="title">Need Help? Text via messanger</p>
                                                    <p class="online">I'm available</p>
                                                    <p class="offline">I'm not available</p>
                                                </div>
                                                <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                            </button>
                                            <button
                                                data-timezone="America/Los_Angeles"
                                                class="mSupport-bubble mSupport-button-4 mSupportButtons"
                                                data-btnavailablety='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:00-23:59", "saturday":"00:00-23:59" }'>
                                                <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="" />
                                                <div class="info-wrapper">
                                                    <p class="info">Robert / Sales Support</p>
                                                    <p class="title">Need Help? Text via messanger</p>
                                                    <p class="online">I'm available</p>
                                                    <p class="offline">I'm not available</p>
                                                </div>
                                                <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                            </button>
                                            <button
                                                data-timezone="America/Los_Angeles"
                                                class="mSupport-bubble mSupport-button-4 mSupportButtons"
                                                data-btnavailablety='{ "sunday":"00:00-08:30", "monday":"00:00-08:30", "tuesday":"00:00-08:30", "wednesday":"01:00-08:30", "thursday":"00:00-08:30", "friday":"00:00-08:30", "saturday":"00:00-08:30" }'>
                                                <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="" />
                                                <div class="info-wrapper">
                                                    <p class="info">Robert / Sales Support</p>
                                                    <p class="title">Need Help? Text via messanger</p>
                                                    <p class="online">I'm available</p>
                                                    <p class="offline">I'm not available</p>
                                                </div>
                                                <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                            </button>
                                            <button
                                                data-timezone="America/Los_Angeles"
                                                class="mSupport-bubble mSupport-button-4 mSupport-btn-bg mSupport-btn-rounded mSupportButtons"
                                                data-btnavailablety='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:00-23:59", "saturday":"00:00-23:59" }'>
                                                <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="" />
                                                <div class="info-wrapper">
                                                    <p class="info">Robert / Sales Support</p>
                                                    <p class="title">Need Help? Text via messanger</p>
                                                    <p class="online">I'm available</p>
                                                    <p class="offline">I'm not available</p>
                                                </div>
                                                <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                            </button>
                                            <button
                                                data-timezone="America/Los_Angeles"
                                                class="mSupport-bubble mSupport-button-4 mSupport-btn-rounded mSupportButtons"
                                                data-btnavailablety='{ "sunday":"00:00-08:30", "monday":"00:00-08:30", "tuesday":"00:00-08:30", "wednesday":"01:00-08:30", "thursday":"00:00-08:30", "friday":"00:00-08:30", "saturday":"00:00-08:30" }'>
                                                <img src="<?php echo MCS_DEMO_PLUGIN_URL . 'assets/common/user.webp' ?>" alt="" />
                                                <div class="info-wrapper">
                                                    <p class="info">Robert / Sales Support</p>
                                                    <p class="title">Need Help? Text via messanger</p>
                                                    <p class="online">I'm available</p>
                                                    <p class="offline">I'm not available</p>
                                                </div>
                                                <a href="https://www.m.me/ThemeAtelier" target="_blank"></a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== Popup layout section end ========== -->
    </section>

<?php
    return ob_get_clean();
}

/**
 * Enqueue CSS
 */
function register_mcs_shortcode_styles()
{
    wp_register_style('icofont', plugins_url('assets/css/icofont.min.css', __FILE__));
    wp_register_style('fontawesome', plugins_url('assets/css/fontawesome-all.min.css', __FILE__));
    wp_register_style('sweetalert2', plugins_url('assets/css/sweetalert2.min.css', __FILE__));
    wp_register_style('mcs-main', plugins_url('assets/css/mcs-main.css', __FILE__), array(), MCS_DEMO_PLUGIN_VERSION, 'all');
    wp_register_style('styles', plugins_url('assets/css/style.css', __FILE__), array(), MCS_DEMO_PLUGIN_VERSION, 'all');

    wp_register_script('sweetalert2', MCS_DEMO_PLUGIN_URL . 'assets/js/sweetalert2.all.min.js', array('jquery'), MCS_DEMO_PLUGIN_VERSION, true);
    wp_register_script('select-togglebutton', MCS_DEMO_PLUGIN_URL . 'assets/js/select-togglebutton.min.js', array('jquery'), MCS_DEMO_PLUGIN_VERSION, true);
    wp_register_script('moment', MCS_DEMO_PLUGIN_URL . 'assets/js/moment.min.js', array('jquery'), MCS_DEMO_PLUGIN_VERSION, true);
    wp_register_script('moment-timezone', MCS_DEMO_PLUGIN_URL . 'assets/js/moment-timezone-with-data.min.js', array('jquery'), MCS_DEMO_PLUGIN_VERSION, true);
    wp_register_script('mcs-main', MCS_DEMO_PLUGIN_URL . 'assets/js/mcs-main.js', array('jquery'), MCS_DEMO_PLUGIN_VERSION, true);
    wp_register_script('mcs-custom', MCS_DEMO_PLUGIN_URL . 'assets/js/custom.js', array('jquery'), MCS_DEMO_PLUGIN_VERSION, true);
}
add_action('wp_enqueue_scripts', 'register_mcs_shortcode_styles');
