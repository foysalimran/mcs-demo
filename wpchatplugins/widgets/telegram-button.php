<?php



class Telegram_Button extends \Elementor\Widget_Base
{

    public function get_style_depends()
    {
        return ['bootstrap', 'icofont', 'fontawesome', 'telegram-main', 'styles'];
    }

    public function get_script_depends()
    {
        return ['select-togglebutton', 'moment', 'moment-timezone', 'telegram-main', 'custom'];
    }

    public function get_name()
    {
        return 'wpchatplugins_telegram_button';
    }

    public function get_title()
    {
        return esc_html__('Telegram Button', 'wpchatplugins');
    }

    public function get_icon()
    {
        return 'eicon-button';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    public function get_keywords()
    {
        return ['telegram', 'button', 'chat', 'wpchat plugins'];
    }

    protected function render()
    {
?>
        <!-- ========== Buttons section start ========== -->
        <section id="buttons" class="buttons wpChat-demo-scroll buttons__layouts">
                <div class="container">
                    <!-- Buttons with image and info -->
                    <div class="mb-5">
                        <div class="row gx-xl-5">
                            <div class="col-md-10 col-lg-6 mx-auto mb-3 text-center">
                                <h5 class="mb-2">Buttons with image</h5>
                                <p>
                                    Buttons with your image, name and position mentioned. Also
                                    shows you active or not. Inactive button won't be clickable
                                </p>
                            </div>
                        </div>
                        <div class="d-md-flex justify-content-center gap-4">
                            <button data-number="0123456789" data-timezone="America/Los_Angeles" class="teleSupport-button-4 tg-btn-bg tg-btn-rounded teleSupportButtons mb-3 mb-md-0" data-btnavailablety='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:00-23:59", "saturday":"00:00-23:59" }'>
                                <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/client1.webp' ?>" alt="" />
                                <div class="info-wrapper">
                                    <p class="info">Robert / Sales Support</p>
                                    <p class="title">Need Help? Text via telegram</p>
                                    <p class="online">I'm available</p>
                                    <p class="offline">I'm not available</p>
                                </div>
                                <a href="https://t.me/telegram" target="_blank"></a>
                            </button>
                            <button data-number="0123456789" data-timezone="America/Los_Angeles" class="teleSupport-button-4 tg-btn-rounded teleSupportButtons" data-btnavailablety='{ "sunday":"00:00-08:30", "monday":"00:00-08:30", "tuesday":"00:00-08:30", "wednesday":"01:00-08:30", "thursday":"00:00-08:30", "friday":"00:00-08:30", "saturday":"00:00-08:30" }'>
                                <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/client2.webp' ?>" alt="" />
                                <div class="info-wrapper">
                                    <p class="info">Robert / Sales Support</p>
                                    <p class="title">Need Help? Text via telegram</p>
                                    <p class="online">I'm available</p>
                                    <p class="offline">I'm not available</p>
                                </div>
                                <a href="https://t.me/telegram" target="_blank"></a>
                            </button>
                        </div>
                    </div>
                    <!-- Buttons with small border-reduce -->
                    <div class="mb-5">
                        <div class="row gx-xl-5">
                            <div class="col-md-10 col-lg-6 mx-auto mb-3 text-center">
                                <h5 class="mb-2">Small border reduce.</h5>
                                <p>
                                    All are same style and design as like the button with image,
                                    but with small border reduce this time.
                                </p>
                            </div>
                        </div>
                        <div class="d-md-flex justify-content-center gap-4">
                            <button data-number="0123456789" data-timezone="America/Los_Angeles" class="teleSupport-button-4 tg-btn-bg teleSupportButtons mb-3 mb-md-0" data-btnavailablety='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:00-23:59", "saturday":"00:00-23:59" }'>
                                <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/client3.webp' ?>" alt="" />
                                <div class="info-wrapper">
                                    <p class="info">Robert / Sales Support</p>
                                    <p class="title">Need Help? Text via telegram</p>
                                    <p class="online">I'm available</p>
                                    <p class="offline">I'm not available</p>
                                </div>
                                <a href="https://t.me/telegram" target="_blank"></a>
                            </button>
                            <button data-number="0123456789" data-timezone="America/Los_Angeles" class="teleSupport-button-4 teleSupportButtons" data-btnavailablety='{ "sunday":"00:00-08:30", "monday":"00:00-08:30", "tuesday":"00:00-08:30", "wednesday":"01:00-08:30", "thursday":"00:00-08:30", "friday":"00:00-08:30", "saturday":"00:00-08:30" }'>
                                <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/user.webp' ?>" alt="" />
                                <div class="info-wrapper">
                                    <p class="info">Robert / Sales Support</p>
                                    <p class="title">Need Help? Text via telegram</p>
                                    <p class="online">I'm available</p>
                                    <p class="offline">I'm not available</p>
                                </div>
                                <a href="https://t.me/telegram" target="_blank"></a>
                            </button>
                        </div>
                    </div>
                    <!-- Buttons without background -->
                    <div class="mb-5">
                        <div class="row gx-xl-5">
                            <div class="col-md-10 col-lg-6 mx-auto mb-3 text-center">
                                <h5 class="mb-2">Without background</h5>
                                <p>
                                    You may want button without background color also. And we
                                    already created one for you without background.
                                </p>
                            </div>
                        </div>
                        <div class="d-md-flex justify-content-center gap-4">
                            <button data-number="0123456789" data-timezone="America/Los_Angeles" class="teleSupport-button-4 teleSupportButtons" data-btnavailablety='{ "sunday":"00:00-23:59", "monday":"00:00-23:59", "tuesday":"00:00-23:59", "wednesday":"01:00-23:59", "thursday":"00:00-23:59", "friday":"00:00-23:59", "saturday":"00:00-23:59" }'>
                                <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/common/client4.webp' ?>" alt="" />
                                <div class="info-wrapper">
                                    <p class="info">Robert / Sales Support</p>
                                    <p class="title">Need Help? Text via telegram</p>
                                    <p class="online">I'm available</p>
                                    <p class="offline">I'm not available</p>
                                </div>
                                <a href="https://t.me/telegram" target="_blank"></a>
                            </button>
                        </div>
                    </div>
                    <!-- Button with icon -->
                    <div class="mb-5">
                        <div class="row gx-xl-5">
                            <div class="col-md-10 col-lg-6 mx-auto mb-3 text-center">
                                <h5 class="mb-2">Buttons with icon</h5>
                                <p>You can have icon instead of avatar.</p>
                                <p>Also with different border reduce.</p>
                            </div>
                        </div>
                        <div class="d-md-flex justify-content-center gap-4">
                            <a href="https://t.me/telegram" target="_blank" class="teleSupport-button-3 tg-btn-bg mb-3 mb-md-0">
                                <i class="fa-brands fa-telegram"></i>How can i help
                                you?
                            </a>
                            <a href="https://t.me/telegram" target="_blank" class="teleSupport-button-3 tg-btn-bg tg-btn-rounded">
                                <i class="fa-brands fa-telegram"></i>How can i help
                                you?
                            </a>
                        </div>
                    </div>
                    <!-- Button with icon and without background -->
                    <div class="mb-5">
                        <div class="row gx-xl-5">
                            <div class="col-md-10 col-lg-6 mx-auto mb-3 text-center">
                                <h5 class="mb-2">Buttons with icon & without background.</h5>
                                <p>
                                    Incase if you want a button without icon and without
                                    background, we already have it.
                                </p>
                            </div>
                        </div>
                        <div class="d-md-flex justify-content-center gap-4">
                            <a href="https://t.me/telegram" target="_blank" class="teleSupport-button-3 tg-btn-rounded teleSupport-change-text">
                                <i class="fa-brands fa-telegram"></i>How can i help
                                you?
                            </a>
                        </div>
                    </div>
                    <!-- Button with hover effect -->
                    <div class="mb-5">
                        <div class="row gx-xl-5">
                            <div class="col-md-10 col-lg-6 mx-auto mb-3 text-center">
                                <h5 class="mb-2">Buttons with hover effect</h5>
                                <p>
                                    Buttons with hover effect is also here. add a class to buttons
                                    and any button will have this effect.
                                </p>
                            </div>
                        </div>
                        <div class="d-md-flex justify-content-center align-items-center gap-4">
                            <a href="https://t.me/telegram" target="_blank" class="teleSupport-button-2 tg-btn-rounded tg-btn-effect mb-3 mb-md-0">
                                <i class="fa-brands fa-telegram"></i>How can I help?
                            </a>
                            <a href="https://t.me/telegram" target="_blank" class="teleSupport-button-2 tg-btn-bg tg-btn-effect">
                                <i class="fa-brands fa-telegram"></i>How can I help?
                            </a>
                        </div>
                    </div>
                    <!-- Different size buttons -->
                    <div class="mb-5">
                        <div class="row gx-xl-5">
                            <div class="col-md-10 col-lg-6 mx-auto mb-3 text-center">
                                <h5 class="mb-2">Sizable Buttons</h5>
                                <p>
                                    All buttons comes with three different sizes. Adding one class
                                    will make the difference.
                                </p>
                            </div>
                        </div>
                        <div class="d-md-flex justify-content-center align-items-end gap-4">
                            <a href="https://t.me/telegram" target="_blank" class="teleSupport-button-3 tg-btn-bg tg-btn-sm mb-3 mb-md-0">
                                <i class="fa-brands fa-telegram"></i>How can I help?
                            </a>
                            <a href="https://t.me/telegram" target="_blank" class="teleSupport-button-3 tg-btn-bg mb-3 mb-md-0">
                                <i class="fa-brands fa-telegram"></i>How can I help?
                            </a>
                            <a href="https://t.me/telegram" target="_blank" class="teleSupport-button-3 tg-btn-bg tg-btn-lg">
                                <i class="fa-brands fa-telegram"></i>How can I help?
                            </a>
                        </div>
                    </div>
                </div>
        </section>
        <!-- ========== Buttons section end ========== -->
<?php
    }
}