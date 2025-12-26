<?php

class WhatsApp_Bubble extends \Elementor\Widget_Base
{

    public function get_style_depends()
    {
        return ['bootstrap', 'icofont', 'fontawesome', 'whatsapp-main', 'styles'];
    }

    public function get_script_depends()
    {
        return ['select-togglebutton', 'moment', 'moment-timezone', 'whatsapp-main', 'custom'];
    }

    public function get_name()
    {
        return 'wpchatplugins_whatsapp_bubble';
    }

    public function get_title()
    {
        return esc_html__('WhatsApp Bubble', 'wpchatplugins');
    }

    public function get_icon()
    {
        return 'eicon-device-mobile';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    public function get_keywords()
    {
        return ['whatsapp', 'button', 'chat', 'wpchat plugins'];
    }

    protected function render()
    {
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
                        <div class="row" id="usage_examples">
                            <div class="col-sm-4 col-md-5 col-lg-4 col-xl-3 p-0">
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
                                        <div class="watsHelp-layouts layouts__sidebar wpChat-demo-scroll">
                                            <div class="row gx-2">
                                                <div class="col-md-6 mb-4 usage_example selected" data-show="#example_1">
                                                    <div class="layouts__design">
                                                        <img class="img-fliud" src="<?php echo plugin_dir_url(__DIR__) . 'assets/whatsapp-images/form-layout.png' ?>" alt="" />
                                                        <div class="layouts__title">Form layout</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4 usage_example" data-show="#example_2">
                                                    <div class="layouts__design">
                                                        <img class="img-fliud" src="<?php echo plugin_dir_url(__DIR__) . 'assets/whatsapp-images/header-center.png' ?>" alt="" />
                                                        <div class="layouts__title">Header Center</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4 usage_example" data-show="#example_3">
                                                    <div class="layouts__design">
                                                        <img class="img-fliud" src="<?php echo plugin_dir_url(__DIR__) . 'assets/whatsapp-images/header-left.png' ?>" alt="" />
                                                        <div class="layouts__title">Header Left</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4 usage_example" data-show="#example_4">
                                                    <div class="layouts__design">
                                                        <img class="img-fliud" src="<?php echo plugin_dir_url(__DIR__) . 'assets/whatsapp-images/layout-list.png' ?>" alt="" />
                                                        <div class="layouts__title">List Layout</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4 usage_example" data-show="#example_5">
                                                    <div class="layouts__design">
                                                        <img class="img-fliud" src="<?php echo plugin_dir_url(__DIR__) . 'assets/whatsapp-images/layout-grid.png' ?>" alt="" />
                                                        <div class="layouts__title">Grid Layout</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4 usage_example" data-show="#example_6">
                                                    <div class="layouts__design">
                                                        <img class="img-fliud" src="<?php echo plugin_dir_url(__DIR__) . 'assets/whatsapp-images/layout-left.png' ?>" alt="" />
                                                        <div class="layouts__title">Left Position</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4 usage_example" data-show="#example_7">
                                                    <div class="layouts__design">
                                                        <img class="img-fliud" src="<?php echo plugin_dir_url(__DIR__) . 'assets/whatsapp-images/layout-dark.png' ?>" alt="" />
                                                        <div class="layouts__title">Dark Layout</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4 usage_example" data-show="#example_8">
                                                    <div class="layouts__design">
                                                        <img class="img-fliud" src="<?php echo plugin_dir_url(__DIR__) . 'assets/whatsapp-images/layout-color.png' ?>" alt="" />
                                                        <div class="layouts__title">Different Color</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4 usage_example" data-show="#example_9">
                                                    <div class="layouts__design">
                                                        <img class="img-fliud" src="<?php echo plugin_dir_url(__DIR__) . 'assets/whatsapp-images/layout-button.png' ?>" alt="" />
                                                        <div class="layouts__title">Different Button</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="layouts__menu">
                                            <button class="layouts__menu-btn" onclick="myFunction()">
                                                <i class="icofont-eye-open"></i>
                                            </button>
                                            <div class="layouts__menu__area">
                                                <div class="row">
                                                    <div class="col-6 mb-4 usage_example" data-show="#example_1">
                                                        <div class="layouts__menu__design">
                                                            <img class="img-fliud" src="<?php echo plugin_dir_url(__DIR__) . 'assets/whatsapp-images/form-layout.png' ?>" alt="" />
                                                            <div class="layouts__menu__title"> Form Layout </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mb-4 usage_example selected" data-show="#example_2">
                                                        <div class="layouts__menu__design">
                                                            <img class="img-fliud" src="<?php echo plugin_dir_url(__DIR__) . 'assets/whatsapp-images/header-center.png' ?>" alt="" />
                                                            <div class="layouts__menu__title"> Header Center </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mb-4 usage_example" data-show="#example_3">
                                                        <div class="layouts__menu__design">
                                                            <img class="img-fliud" src="<?php echo plugin_dir_url(__DIR__) . 'assets/whatsapp-images/header-left.png' ?>" alt="" />
                                                            <div class="layouts__menu__title"> Header Left </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mb-4 usage_example" data-show="#example_4">
                                                        <div class="layouts__menu__design">
                                                            <img class="img-fliud" src="<?php echo plugin_dir_url(__DIR__) . 'assets/whatsapp-images/layout-list.png' ?>" alt="" />
                                                            <div class="layouts__menu__title"> List Layout </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mb-4 usage_example" data-show="#example_5">
                                                        <div class="layouts__menu__design">
                                                            <img class="img-fliud" src="<?php echo plugin_dir_url(__DIR__) . 'assets/whatsapp-images/layout-grid.png' ?>" alt="" />
                                                            <div class="layouts__menu__title"> Grid Layout </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mb-4 usage_example" data-show="#example_6">
                                                        <div class="layouts__menu__design">
                                                            <img class="img-fliud" src="<?php echo plugin_dir_url(__DIR__) . 'assets/whatsapp-images/layout-left.png' ?>" alt="" />
                                                            <div class="layouts__menu__title"> Left Position </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mb-4 usage_example" data-show="#example_7">
                                                        <div class="layouts__menu__design">
                                                            <img class="img-fliud" src="<?php echo plugin_dir_url(__DIR__) . 'assets/whatsapp-images/layout-dark.png' ?>" alt="" />
                                                            <div class="layouts__menu__title"> Dark Layout </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mb-4 usage_example" data-show="#example_8">
                                                        <div class="layouts__menu__design">
                                                            <img class="img-fliud" src="<?php echo plugin_dir_url(__DIR__) . 'assets/whatsapp-images/layout-color.png' ?>" alt="" />
                                                            <div class="layouts__menu__title"> Different Color </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mb-4 usage_example" data-show="#example_9">
                                                        <div class="layouts__menu__design">
                                                            <img class="img-fliud" src="<?php echo plugin_dir_url(__DIR__) . 'assets/whatsapp-images/layout-button.png' ?>" alt="" />
                                                            <div class="layouts__menu__title"> Different Button </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-7 col-lg-8 col-xl-9 px-0">
                                <div class="layouts__popup">
                                    <button class="mobile-view">
                                        <i class="icofont-smart-phone"></i>
                                    </button>
                                    <button class="desktop-view">
                                        <i class="icofont-computer"></i>
                                    </button>
                                    <div class="layouts__popup__wrapper">
                                        <!-- example 1 -->
                                        <div class="wHelp wpChat" id="example_1">
                                            <button class="wHelp-bubble wpChat-bubble circle-bubble circle-animation-2 example_button">
                                                <span class="open-icon"><i class="fa-brands fa-whatsapp"></i></span>
                                                <span class="close-icon"><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <div class="example_popup wHelp__popup wpChat__popup animation13 chat-availability" data-timezone="" data-availability='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59" }'>
                                                <div class="wHelp__popup--header header-center">
                                                    <div class="image">
                                                        <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/user.webp' ?>" alt="user" />
                                                    </div>
                                                    <div class="info">
                                                        <h4 class="info__name">John Doe</h4>
                                                        <p class="info__title"> Typically replies within a day </p>
                                                    </div>
                                                </div>
                                                <div class="wHelp__popup--content">
                                                    <div class="user-text">
                                                        <input id="name" type="text" placeholder="Subject" />
                                                        <textarea id="message" rows="5" type="text" placeholder="Message"></textarea>
                                                    </div>
                                                    <button class="wHelp__send-message" target="_blank">
                                                        <i class="fa-brands fa-whatsapp"></i>Send Mail <a class="WhatsApptext WhatsApptextform" href="https://wa.me/+880123456789?text=Hi, My name is nameValue. My query is- messageValue" target="_blank"></a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Example 2 -->
                                        <div class="wHelp wpChat" id="example_2">
                                            <button class="wHelp-bubble wpChat-bubble  example_button circle-bubble circle-animation-2">
                                                <span class="open-icon"><i class="fa-brands fa-whatsapp"></i></span>
                                                <span class="close-icon"><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <div class="wHelp__popup wpChat__popup example_popup animation13 chat-availability" data-timezone="" data-availability='{ "sunday":"00:00-00:01", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59" }'>
                                                <div class="wHelp__popup--header">
                                                    <div class="image">
                                                        <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/user.webp' ?>" alt="user" />
                                                    </div>
                                                    <div class="info">
                                                        <h4 class="info__name">John Doe</h4>
                                                        <p class="info__title"> Typically replies within a day </p>
                                                    </div>
                                                </div>
                                                <div class="wHelp__popup--content">
                                                    <div class="current-time"></div>
                                                    <div class="sms">
                                                        <div class="sms__user">
                                                            <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/user.webp' ?>" alt="user" />
                                                        </div>
                                                        <div class="sms__text">
                                                            <p> Hello, Welcome to the site. Please check below button for chatting me through What's
                                                                app. </p>
                                                        </div>
                                                    </div>
                                                    <button class="wHelp__send-message" target="_blank">
                                                        <i class="fa-brands fa-whatsapp"></i>Start Chat <a href="https://wa.me/+880123456789" target="_blank"></a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Example 3 -->
                                        <div class="wHelp wpChat" id="example_3">
                                            <button class="wHelp-bubble wpChat-bubble example_button circle-bubble circle-animation-2">
                                                <span class="open-icon"><i class="fa-brands fa-whatsapp"></i></span>
                                                <span class="close-icon"><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <div class="wHelp__popup wpChat__popup example_popup animation13 chat-availability" data-timezone="" data-availability='{ "sunday":"00:00-00:01", "monday":"00:00-00:59", "tuesday":"00:00-00:59", "wednesday":"01:00-00:59", "thursday":"00:00-00:59", "friday":"00:01-00:59", "saturday":"00:00-00:59" }'>
                                                <div class="wHelp__popup--header">
                                                    <div class="image">
                                                        <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/user.webp' ?>' ?>" alt="user" />
                                                    </div>
                                                    <div class="info">
                                                        <h4 class="info__name">John Doe</h4>
                                                        <p class="info__title"> Typically replies within a day </p>
                                                    </div>
                                                </div>
                                                <div class="wHelp__popup--content">

                                                    <div class="current-time"></div>
                                                    <div class="sms">
                                                        <div class="sms__user">
                                                            <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/user.webp' ?>" alt="user" />
                                                        </div>
                                                        <div class="sms__text">
                                                            <p> Hello, Welcome to the site. Please check below button for chatting me through What's
                                                                app. </p>
                                                        </div>
                                                    </div>
                                                    <button class="wHelp__send-message" target="_blank">
                                                        <i class="fa-brands fa-whatsapp"></i>Start Chat <a href="https://wa.me/+880123456789" target="_blank"></a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- example 4 -->
                                        <div class="wHelp-multi wpChat-multi" id="example_4">
                                            <button class="wHelp-bubble wpChat-bubble example_button circle-bubble circle-animation-3">
                                                <span class="open-icon"><i class="fa-brands fa-whatsapp"></i></span>
                                                <span class="close-icon"><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <div class="wHelp-multi__popup example_popup animation3">
                                                <div class="wHelp-multi__popup--header">
                                                    <h3 class="title">Need Help? Chat with us</h3>
                                                    <p class="subtitle"> Click one of our representatives below </p>
                                                </div>
                                                <div class="wHelp-multi__popup--content" data-search="true" id="multi-user">

                                                    <div class="search">
                                                        <input id="search-input" onkeyup="searchUser()" type="text" placeholder="Search" />
                                                    </div>
                                                    <div class="users">
                                                        <div class="user wHelpUserAvailability" data-timezone="" data-userAvailability='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59" }'>
                                                            <div class="user__image">
                                                                <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/user.webp' ?>" alt="user" />
                                                            </div>
                                                            <div class="user__info">
                                                                <h5 class="user__info--name">Mia Smith</h5>
                                                                <p class="user__info--title">Sales Support</p>
                                                                <p class="user__info--online">I'm online</p>
                                                                <p class="user__info--offline"> I'm not available </p>
                                                            </div>
                                                            <a href="https://wa.me/+880123456789" target="_blank"></a>
                                                        </div>
                                                        <div class="user wHelpUserAvailability" data-timezone="" data-userAvailability='{ "sunday":"00:00-5:59", "monday":"00:00-5:59", "tuesday":"00:00-5:59", "wednesday":"01:00-5:59", "thursday":"00:00-5:59", "friday":"00:01-5:59", "saturday":"00:00-5:59" }'>
                                                            <div class="user__image">
                                                                <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/user.webp' ?>" alt="user" />
                                                            </div>
                                                            <div class="user__info">
                                                                <h5 class="user__info--name">James Brown</h5>
                                                                <p class="user__info--title">Sales Support</p>
                                                                <p class="user__info--online">I'm online</p>
                                                                <p class="user__info--offline"> I'm not available </p>
                                                            </div>
                                                            <a href="https://wa.me/+880123456789" target="_blank"></a>
                                                        </div>
                                                        <div class="user wHelpUserAvailability" data-timezone="" data-userAvailability='{ "sunday":"00:00-5:59", "monday":"00:00-5:59", "tuesday":"00:00-5:59", "wednesday":"01:00-5:59", "thursday":"00:00-5:59", "friday":"00:01-5:59", "saturday":"00:00-5:59" }'>
                                                            <div class="user__image">
                                                                <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/user.webp' ?>" alt="user" />
                                                            </div>
                                                            <div class="user__info">
                                                                <h5 class="user__info--name">James Brown</h5>
                                                                <p class="user__info--title">Sales Support</p>
                                                                <p class="user__info--online">I'm online</p>
                                                                <p class="user__info--offline"> I'm not available </p>
                                                            </div>
                                                            <a href="https://wa.me/+880123456789" target="_blank"></a>
                                                        </div>
                                                        <div class="user wHelpUserAvailability" data-timezone="America/Los_Angeles" data-userAvailability='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59" }'>
                                                            <div class="user__image">
                                                                <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/user.webp' ?>" alt="user" />
                                                            </div>
                                                            <div class="user__info">
                                                                <h5 class="user__info--name">Mia Smith</h5>
                                                                <p class="user__info--title">Sales Support</p>
                                                                <p class="user__info--online">I'm online</p>
                                                                <p class="user__info--offline"> I'm not available </p>
                                                            </div>
                                                            <a href="https://wa.me/+880123456789" target="_blank"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- example 5 -->
                                        <div class="wHelp-multi wHelp-grid wpChat-multi wpChat-grid" id="example_5">
                                            <button class="wHelp-bubble wpChat-bubble example_button circle-bubble circle-animation-4">
                                                <span class="open-icon"><i class="fa-brands fa-whatsapp"></i></span>
                                                <span class="close-icon"><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <div class="wHelp-multi__popup example_popup animation3">
                                                <div class="wHelp-multi__popup--header">
                                                    <h3 class="title">Need Help? Chat with us</h3>
                                                    <p class="subtitle"> Click one of our representatives below </p>
                                                </div>
                                                <div class="wHelp-multi__popup--content" data-search="" id="multi-user">

                                                    <div class="search">
                                                        <input id="search-input" onkeyup="searchUser()" type="text" placeholder="Search" />
                                                    </div>
                                                    <div class="users">
                                                        <div class="user wHelpUserAvailability" data-timezone="" data-userAvailability='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59" }'>
                                                            <div class="user__image">
                                                                <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/user.webp' ?>" alt="user" />
                                                            </div>
                                                            <div class="user__info">
                                                                <h5 class="user__info--name">Mia Smith</h5>
                                                                <p class="user__info--title">Sales Support</p>
                                                                <p class="user__info--online">I'm online</p>
                                                                <p class="user__info--offline"> I'm not available </p>
                                                            </div>
                                                            <a href="https://wa.me/+880123456789" target="_blank"></a>
                                                        </div>
                                                        <div class="user wHelpUserAvailability" data-timezone="" data-userAvailability='{ "sunday":"00:00-5:59", "monday":"00:00-5:59", "tuesday":"00:00-5:59", "wednesday":"01:00-5:59", "thursday":"00:00-5:59", "friday":"00:01-5:59", "saturday":"00:00-5:59" }'>
                                                            <div class="user__image">
                                                                <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/user.webp' ?>" alt="user" />
                                                            </div>
                                                            <div class="user__info">
                                                                <h5 class="user__info--name">James Brown</h5>
                                                                <p class="user__info--title">Sales Support</p>
                                                                <p class="user__info--online">I'm online</p>
                                                                <p class="user__info--offline"> I'm not available </p>
                                                            </div>
                                                            <a href="https://wa.me/+880123456789" target="_blank"></a>
                                                        </div>
                                                        <div class="user wHelpUserAvailability" data-timezone="America/Los_Angeles" data-userAvailability='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59" }'>
                                                            <div class="user__image">
                                                                <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/user.webp' ?>" alt="user" />
                                                            </div>
                                                            <div class="user__info">
                                                                <h5 class="user__info--name">Mia Smith</h5>
                                                                <p class="user__info--title">Sales Support</p>
                                                                <p class="user__info--online">I'm online</p>
                                                                <p class="user__info--offline"> I'm not available </p>
                                                            </div>
                                                            <a href="https://wa.me/+880123456789" target="_blank"></a>
                                                        </div>
                                                        <div class="user wHelpUserAvailability" data-timezone="" data-userAvailability='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59" }'>
                                                            <div class="user__image">
                                                                <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/user.webp' ?>" alt="user" />
                                                            </div>
                                                            <div class="user__info">
                                                                <h5 class="user__info--name">Mia Smith</h5>
                                                                <p class="user__info--title">Sales Support</p>
                                                                <p class="user__info--online">I'm online</p>
                                                                <p class="user__info--offline"> I'm not available </p>
                                                            </div>
                                                            <a href="https://wa.me/+880123456789" target="_blank"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Example 6 left side -->
                                        <div class="wHelp-multi wHelp-left wpChat-multi wpChat-left" id="example_6">
                                            <button class="wHelp-bubble wpChat-bubble example_button circle-bubble circle-animation-2">
                                                <span class="open-icon"><i class="fa-brands fa-whatsapp"></i></span>
                                                <span class="close-icon"><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <div class="wHelp-multi__popup example_popup animation3">
                                                <div class="wHelp-multi__popup--header">
                                                    <h3 class="title">Need Help? Chat with us</h3>
                                                    <p class="subtitle"> Click one of our representatives below </p>
                                                </div>
                                                <div class="wHelp-multi__popup--content" data-search="" id="multi-user">

                                                    <div class="search">
                                                        <input id="search-input" onkeyup="searchUser()" type="text" placeholder="Search" />
                                                    </div>
                                                    <div class="users">
                                                        <div class="user wHelpUserAvailability" data-timezone="" data-userAvailability='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59" }'>
                                                            <div class="user__image">
                                                                <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/user.webp' ?>" alt="user" />
                                                            </div>
                                                            <div class="user__info">
                                                                <h5 class="user__info--name">Mia Smith</h5>
                                                                <p class="user__info--title">Sales Support</p>
                                                                <p class="user__info--online">I'm online</p>
                                                                <p class="user__info--offline"> I'm not available </p>
                                                            </div>
                                                            <a href="https://wa.me/+880123456789" target="_blank"></a>
                                                        </div>
                                                        <div class="user wHelpUserAvailability" data-timezone="" data-userAvailability='{ "sunday":"00:00-5:59", "monday":"00:00-5:59", "tuesday":"00:00-5:59", "wednesday":"01:00-5:59", "thursday":"00:00-5:59", "friday":"00:01-5:59", "saturday":"00:00-5:59" }'>
                                                            <div class="user__image">
                                                                <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/user.webp' ?>" alt="user" />
                                                            </div>
                                                            <div class="user__info">
                                                                <h5 class="user__info--name">James Brown</h5>
                                                                <p class="user__info--title">Sales Support</p>
                                                                <p class="user__info--online">I'm online</p>
                                                                <p class="user__info--offline"> I'm not available </p>
                                                            </div>
                                                            <a href="https://wa.me/+880123456789" target="_blank"></a>
                                                        </div>
                                                        <div class="user wHelpUserAvailability" data-timezone="America/Los_Angeles" data-userAvailability='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59" }'>
                                                            <div class="user__image">
                                                                <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/user.webp' ?>" alt="user" />
                                                            </div>
                                                            <div class="user__info">
                                                                <h5 class="user__info--name">Mia Smith</h5>
                                                                <p class="user__info--title">Sales Support</p>
                                                                <p class="user__info--online">I'm online</p>
                                                                <p class="user__info--offline"> I'm not available </p>
                                                            </div>
                                                            <a href="https://wa.me/+880123456789" target="_blank"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Example 7 Dark layout -->
                                        <div class="wHelp wpChat night-mode" id="example_7">
                                            <button class="wHelp-bubble wpChat-bubble example_button circle-bubble circle-animation-3">
                                                <span class="open-icon"><i class="fa-brands fa-whatsapp"></i></span>
                                                <span class="close-icon"><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <div class="wHelp__popup wpChat__popup example_popup animation13 chat-availability" data-timezone="" data-availability='{ "sunday":"00:00-00:01", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59" }'>
                                                <div class="wHelp__popup--header">
                                                    <div class="image">
                                                        <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/user.webp' ?>" alt="user" />
                                                    </div>
                                                    <div class="info">
                                                        <h4 class="info__name">John Doe</h4>
                                                        <p class="info__title"> Typically replies within a day </p>
                                                    </div>
                                                </div>
                                                <div class="wHelp__popup--content">

                                                    <div class="current-time"></div>
                                                    <div class="sms">
                                                        <div class="sms__user">
                                                            <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/user.webp' ?>" alt="user" />
                                                        </div>
                                                        <div class="sms__text">
                                                            <p> Hello, Welcome to the site. Please check below button for chatting me through What's
                                                                app. </p>
                                                        </div>
                                                    </div>
                                                    <button class="wHelp__send-message" target="_blank">
                                                        <i class="fa-brands fa-whatsapp"></i>Start Chat <a href="https://wa.me/+880123456789" target="_blank"></a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Example 8 -->
                                        <div class="wHelp wpChat dark-mode" id="example_8">
                                            <button class="wHelp-bubble wpChat-bubble example_button circle-bubble circle-animation-4">
                                                <span class="open-icon"><i class="fa-brands fa-whatsapp"></i></span>
                                                <span class="close-icon"><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <div class="wHelp__popup wpChat__popup example_popup animation13 chat-availability" data-timezone="" data-availability='{ "sunday":"00:00-00:01", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59" }'>
                                                <div class="wHelp__popup--header">
                                                    <div class="image">
                                                        <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/user.webp' ?>" alt="user" />
                                                    </div>
                                                    <div class="info">
                                                        <h4 class="info__name">John Doe</h4>
                                                        <p class="info__title"> Typically replies within a day </p>
                                                    </div>
                                                </div>
                                                <div class="wHelp__popup--content">

                                                    <div class="current-time"></div>
                                                    <div class="sms">
                                                        <div class="sms__user">
                                                            <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/user.webp' ?>" alt="user" />
                                                        </div>
                                                        <div class="sms__text">
                                                            <p> Hello, Welcome to the site. Please check below button for chatting me through What's
                                                                app. </p>
                                                        </div>
                                                    </div>
                                                    <button class="wHelp__send-message" target="_blank">
                                                        <i class="fa-brands fa-whatsapp"></i>Start Chat <a href="https://wa.me/+880123456789" target="_blank"></a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Example 9 -->
                                        <div class="wHelp wpChat" id="example_9">
                                            <button class="wHelp-bubble wpChat-bubble bubble wHelp-btn-bg example_button">
                                                <div class="bubble__icon bubble-animation4">
                                                    <span class="bubble__icon--open">
                                                        <i class="fa-brands fa-whatsapp"></i>
                                                    </span>
                                                    <span class="bubble__icon--close">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </span>
                                                </div> How can I help?
                                            </button>
                                            <div class="wHelp__popup wpChat__popup example_popup animation13 chat-availability" data-timezone="" data-availability='{ "sunday":"00:00-00:01", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:01-23:59", "saturday":"00:00-23:59" }'>
                                                <div class="wHelp__popup--header">
                                                    <div class="image">
                                                        <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/user.webp' ?>" alt="user" />
                                                    </div>
                                                    <div class="info">
                                                        <h4 class="info__name">John Doe</h4>
                                                        <p class="info__title"> Typically replies within a day </p>
                                                    </div>
                                                </div>
                                                <div class="wHelp__popup--content">

                                                    <div class="current-time"></div>
                                                    <div class="sms">
                                                        <div class="sms__user">
                                                            <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/user.webp' ?>" alt="user" />
                                                        </div>
                                                        <div class="sms__text">
                                                            <p> Hello, Welcome to the site. Please check below button for chatting me through What's
                                                                app. </p>
                                                        </div>
                                                    </div>
                                                    <button class="wHelp__send-message" target="_blank">
                                                        <i class="fa-brands fa-whatsapp"></i>Start Chat <a href="https://wa.me/+880123456789" target="_blank"></a>
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
            </div>
            <!-- ========== Popup layout section end ========== -->
        </section>

<?php
    }
}
