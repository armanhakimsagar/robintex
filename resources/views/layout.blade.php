<!DOCTYPE html>
<!-- saved from url=(0038)  -->
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robinson</title>
    <meta name="robots" content="max-image-preview:large">

    <!-- External CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/data/custom-frontend.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/data/post-123.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/data/post-133.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/data/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/data/template-kit-export-public.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/data/post-7.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/data/fadeInUp.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/data/widget-heading.min.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/data/post-146.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/data/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/data/text-editor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/data/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/data/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/data/header-footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/data/widget-styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/data/responsive.css') }}">

    <!-- Internal CSS -->
    <style id="jkit-elements-styles">
        :root {
            --e-global-color-primary: #1b1b1b;
            --e-global-color-secondary: #6EC1E4;
            --e-global-color-text: #393939;
            --e-global-color-accent: #61CE70;
            --e-global-typography-primary-font-family: "DM Sans";
            --e-global-typography-primary-font-size: 16px;
            --e-global-typography-primary-font-weight: 400;
        }

        .elementor-146 .elementor-element.elementor-element-d0d5a32:not(.elementor-motion-effects-element-type-background),
        .elementor-146 .elementor-element.elementor-element-d0d5a32>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #F7F7F7;
            background-image: url("{{ $topBanner[0]->value }}");
            background-position: top left;
            background-repeat: no-repeat;
            background-size: cover;
        }


        .elementor-146 .elementor-element.elementor-element-a04bab4:not(.elementor-motion-effects-element-type-background),
        .elementor-146 .elementor-element.elementor-element-a04bab4>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-image: url({{ asset('storage/' . $aboutUsPage[0]->banner_one) }});
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }
    </style>

    <!-- JS Files -->

    <!-- Favicon -->
    <meta name="msapplication-TileImage" content="{{ asset('assets/data/cropped-favicon-270x270.png') }}">
</head>

<body
    class="home wp-singular page-template-default page page-id-146 wp-embed-responsive wp-theme-hello-elementor jkit-color-scheme hello-elementor-default elementor-default elementor-kit-7 elementor-page elementor-page-146 e--ua-isTouchDevice e--ua-blink e--ua-chrome e--ua-webkit"
    data-elementor-device-mode="desktop">


    <a class="skip-link screen-reader-text" href="">
        Skip to content </a>


    <div class="ekit-template-content-markup ekit-template-content-header ekit-template-content-theme-support">
        <div data-elementor-type="wp-post" data-elementor-id="123" class="elementor elementor-123">
            <div class="elementor-element elementor-element-776d41fd e-con-full elementor-hidden-tablet elementor-hidden-mobile e-flex e-con e-parent e-lazyloaded"
                data-id="776d41fd" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-element elementor-element-519f1e2d elementor-widget__width-auto elementor-widget elementor-widget-elementskit-header-info"
                    data-id="519f1e2d" data-element_type="widget" data-widget_type="elementskit-header-info.default">
                    <div class="elementor-widget-container">
                        <div class="ekit-wid-con">
                            <ul class="ekit-header-info">
                                <li>
                                    <a>
                                        <i aria-hidden="true" class="icon icon-map-marker1"></i>

                                        @if (isset($topElements))
                                            {{ $topElements[0]->value }}
                                        @endif
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-1524995f elementor-widget__width-auto elementor-widget elementor-widget-elementskit-social-media"
                    data-id="1524995f" data-element_type="widget" data-widget_type="elementskit-social-media.default">
                    <div class="elementor-widget-container">
                        <div class="ekit-wid-con">
                            <ul class="ekit_social_media">
                                <li class="elementor-repeater-item-4ddda0e">
                                    <a href="
                                        @if (isset($topElements)) {{ $topElements[1]->value }} @endif"
                                        aria-label="Facebook" class="facebook">

                                        <i aria-hidden="true" class="icon icon-facebook"></i>
                                    </a>
                                </li>
                                <li class="elementor-repeater-item-527b00c">
                                    <a
                                        href="
                                        @if (isset($topElements)) {{ $topElements[2]->value }} @endif">
                                        <i aria-hidden="true" class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                                <li class="elementor-repeater-item-527b00c">
                                    <a href="@if (isset($topElements)) {{ $topElements[2]->value }} @endif">
                                        <i aria-hidden="true" class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="elementor-repeater-item-527b00c">
                                    <a href="@if (isset($topElements)) {{ $topElements[3]->value }} @endif"
                                        aria-label="twitter" class="twitter">
                                        <i aria-hidden="true" class="fab fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-4259e6bd e-con-full e-flex e-con e-parent e-lazyloaded"
                data-id="4259e6bd" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-element elementor-element-55482db5 e-con-full e-flex e-con e-child"
                    data-id="55482db5" data-element_type="container"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-element elementor-element-4d309e74 e-con-full e-flex e-con e-child"
                        data-id="4d309e74" data-element_type="container">
                        <div class="elementor-element elementor-element-7d2c1eb5 e-con-full e-flex e-con e-child"
                            data-id="7d2c1eb5" data-element_type="container">
                            <div class="elementor-element elementor-element-3dae3acc elementor-widget elementor-widget-image"
                                data-id="3dae3acc" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">

                                    <a href="{{ url('/') }}">
                                        <img width="350" height="69"
                                            src="@if (isset($topElements)) {{ asset('storage/' . trim($topElements[4]->value)) }} @endif"
                                            class="attachment-full size-full wp-image-3553" alt=""
                                            decoding="async" srcset="" sizes="(max-width: 350px) 100vw, 350px">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-18286229 e-con-full e-flex e-con e-child"
                            data-id="18286229" data-element_type="container">
                            <div class="elementor-element elementor-element-c7715a5 elementor-widget elementor-widget-ekit-nav-menu"
                                data-id="c7715a5" data-element_type="widget"
                                data-widget_type="ekit-nav-menu.default">
                                <div class="elementor-widget-container">
                                    <nav class="ekit-wid-con ekit_menu_responsive_tablet"
                                        data-hamburger-icon="jki jki-burger-menu-light"
                                        data-hamburger-icon-type="icon" data-responsive-breakpoint="1024">
                                        <button class="elementskit-menu-hamburger elementskit-menu-toggler"
                                            type="button" aria-label="hamburger-icon">
                                            <i aria-hidden="true"
                                                class="ekit-menu-icon jki jki-burger-menu-light"></i> </button>
                                        <div id="ekit-megamenu-primary-menu"
                                            class="elementskit-menu-container elementskit-menu-offcanvas-elements elementskit-navbar-nav-default ekit-nav-menu-one-page-no ekit-nav-dropdown-hover"
                                            ekit-dom-added="yes">
                                            <ul id="menu-primary-menu"
                                                class="elementskit-navbar-nav elementskit-menu-po-right submenu-click-on-icon">
                                                <li id="menu-item-2232"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-146 current_page_item menu-item-2232 nav-item elementskit-mobile-builder-content active"
                                                    data-vertical-menu="750px"><a href="{{ url('/') }}"
                                                        class="ekit-menu-nav-link active">Home</a></li>


                                                <li id="menu-item-2237"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2237 nav-item elementskit-dropdown-has relative_position elementskit-dropdown-menu-default_width elementskit-mobile-builder-content"
                                                    data-vertical-menu="750px"><a href="{{ route('about.page') }}"
                                                        class="ekit-menu-nav-link ekit-menu-dropdown-toggle">About Us<i
                                                            aria-hidden="true"
                                                            class="icon icon-plus elementskit-submenu-indicator"></i></a>

                                                </li>
                                                <li id="menu-item-2237"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2237 nav-item elementskit-dropdown-has relative_position elementskit-dropdown-menu-default_width elementskit-mobile-builder-content"
                                                    data-vertical-menu="750px"><a href="{{ route('service.page') }}"
                                                        class="ekit-menu-nav-link ekit-menu-dropdown-toggle">Services<i
                                                            aria-hidden="true"
                                                            class="icon icon-plus elementskit-submenu-indicator"></i></a>

                                                </li>
                                                <li id="menu-item-2233"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2233 nav-item elementskit-dropdown-has relative_position elementskit-dropdown-menu-default_width elementskit-mobile-builder-content"
                                                    data-vertical-menu="750px"><a href=" our-portfolio/"
                                                        class="ekit-menu-nav-link ekit-menu-dropdown-toggle">Our
                                                        Portfolio<i aria-hidden="true"
                                                            class="icon icon-plus elementskit-submenu-indicator"></i></a>

                                                </li>
                                                <li id="menu-item-2229"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2229 nav-item elementskit-mobile-builder-content"
                                                    data-vertical-menu="750px"><a href="{{ route('contact.us') }}"
                                                        class="ekit-menu-nav-link">Contact Us</a></li>
                                            </ul>
                                            <div class="elementskit-nav-identity-panel"><a
                                                    class="elementskit-nav-logo" href="  " target=""
                                                    rel=""><img src="" title="mobile-logo-img"
                                                        alt="mobile-logo-img" decoding="async"></a><button
                                                    class="elementskit-menu-close elementskit-menu-toggler"
                                                    type="button">X</button></div>
                                        </div>
                                        <div
                                            class="elementskit-menu-overlay elementskit-menu-offcanvas-elements elementskit-menu-toggler ekit-nav-menu--overlay">
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-cbab8c4 elementor-widget__width-auto elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-elementskit-header-search"
                                data-id="cbab8c4" data-element_type="widget"
                                data-widget_type="elementskit-header-search.default">
                                <div class="elementor-widget-container">
                                    <div class="ekit-wid-con"> <a href=" ekit_modal-popup-cbab8c4"
                                            class="ekit_navsearch-button ekit-modal-popup"
                                            aria-label="navsearch-button">
                                            <i aria-hidden="true" class="icon icon-search11"></i> </a>
                                        <!-- language switcher strart -->
                                        <!-- xs modal -->
                                        <div class="zoom-anim-dialog mfp-hide ekit_modal-searchPanel"
                                            id="ekit_modal-popup-cbab8c4">
                                            <div class="ekit-search-panel">
                                                <!-- Polylang search - thanks to Alain Melsens -->
                                                <form role="search" method="get" class="ekit-search-group"
                                                    action=" ">
                                                    <input type="search" class="ekit_search-field"
                                                        aria-label="search-form" placeholder="Search..."
                                                        value="" name="s">
                                                    <button type="submit" class="ekit_search-button"
                                                        aria-label="search-button">
                                                        <i aria-hidden="true" class="icon icon-search11"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div><!-- End xs modal -->
                                        <!-- end language switcher strart -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-61bfed41 e-con-full elementor-hidden-tablet elementor-hidden-mobile e-flex e-con e-child"
                            data-id="61bfed41" data-element_type="container">
                            <div class="elementor-element elementor-element-89104f8 elementor-hidden-mobile elementor-widget elementor-widget-button"
                                data-id="89104f8" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-button-link elementor-size-sm"
                                            href=" contact-us/">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-icon">
                                                    <i aria-hidden="true" class="jki jki-arrow-up-right-line"></i>
                                                </span>
                                                <span class="elementor-button-text">Get In Touch </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







    @yield('content')














    <div class="ekit-template-content-markup ekit-template-content-footer ekit-template-content-theme-support">
        <div data-elementor-type="wp-post" data-elementor-id="133" class="elementor elementor-133">
            <div class="elementor-element elementor-element-3f8a36 e-flex e-con-boxed e-con e-parent e-lazyloaded"
                data-id="3f8a36" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-7621e2c4 e-con-full e-flex e-con e-child"
                        data-id="7621e2c4" data-element_type="container">
                        <div class="elementor-element elementor-element-70cb1839 e-con-full e-flex e-con e-child"
                            data-id="70cb1839" data-element_type="container">
                            <div class="elementor-element elementor-element-6b8c4ca elementor-widget elementor-widget-image"
                                data-id="6b8c4ca" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <a href="">
                                        <img width="350" height="69"
                                            src="@if (isset($topElements)) {{ asset('storage/' . trim($topElements[4]->value)) }} @endif"
                                            class="attachment-full size-full wp-image-3553" alt=""
                                            decoding="async" srcset="" sizes="(max-width: 350px) 100vw, 350px">
                                    </a>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-632280a1 elementor-widget elementor-widget-text-editor"
                                data-id="632280a1" data-element_type="widget" data-widget_type="text-editor.default">
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-075afb6 e-con-full e-flex e-con e-child"
                            data-id="075afb6" data-element_type="container">
                            <div class="elementor-element elementor-element-94e935c elementor-view-stacked elementor-shape-circle elementor-widget elementor-widget-icon"
                                data-id="94e935c" data-element_type="widget" data-widget_type="icon.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-wrapper">
                                        <div class="elementor-icon">
                                            <i aria-hidden="true" class="fas fa-phone-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-f84df0d e-con-full e-flex e-con e-child"
                                data-id="f84df0d" data-element_type="container">
                                <div class="elementor-element elementor-element-a301e59 elementor-widget elementor-widget-text-editor"
                                    data-id="a301e59" data-element_type="widget"
                                    data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        Call Us: </div>
                                </div>
                                <div class="elementor-element elementor-element-1ffa148 elementor-widget elementor-widget-heading"
                                    data-id="1ffa148" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-heading-title elementor-size-default">
                                            @if (isset($topElements))
                                                {{ $topElements[5]->value }}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-02b8b7b e-con-full e-flex e-con e-child"
                            data-id="02b8b7b" data-element_type="container">
                            <div class="elementor-element elementor-element-c2e1fd8 elementor-view-stacked elementor-shape-circle elementor-widget elementor-widget-icon"
                                data-id="c2e1fd8" data-element_type="widget" data-widget_type="icon.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-wrapper">
                                        <div class="elementor-icon">
                                            <i aria-hidden="true" class="fas fa-envelope"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-d241d73 e-con-full e-flex e-con e-child"
                                data-id="d241d73" data-element_type="container">
                                <div class="elementor-element elementor-element-fb5420c elementor-widget elementor-widget-text-editor"
                                    data-id="fb5420c" data-element_type="widget"
                                    data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        Email Us: </div>
                                </div>
                                <div class="elementor-element elementor-element-ef97c98 elementor-widget elementor-widget-heading"
                                    data-id="ef97c98" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-heading-title elementor-size-default">
                                            @if (isset($topElements))
                                                {{ $topElements[6]->value }}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-7adb60f5 e-con-full e-flex e-con e-child"
                        data-id="7adb60f5" data-element_type="container">
                        <div class="elementor-element elementor-element-1e02c22 e-con-full e-flex e-con e-child"
                            data-id="1e02c22" data-element_type="container">
                            <div class="elementor-element elementor-element-178cf156 e-con-full e-flex e-con e-child"
                                data-id="178cf156" data-element_type="container">
                                <div class="elementor-element elementor-element-7ef14868 e-con-full e-flex e-con e-child"
                                    data-id="7ef14868" data-element_type="container">
                                    <div class="elementor-element elementor-element-ec4161b elementor-view-default elementor-widget elementor-widget-icon"
                                        data-id="ec4161b" data-element_type="widget" data-widget_type="icon.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-wrapper">
                                                <div class="elementor-icon">
                                                    <i aria-hidden="true" class="jki jki-ellipsis-h-solid"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-735f5247 elementor-widget elementor-widget-heading"
                                        data-id="735f5247" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Explore Us
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-399e33b7 e-con-full e-flex e-con e-child"
                                    data-id="399e33b7" data-element_type="container">
                                    <div class="elementor-element elementor-element-1b4f06f elementor-widget elementor-widget-elementskit-page-list"
                                        data-id="1b4f06f" data-element_type="widget"
                                        data-widget_type="elementskit-page-list.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">
                                                <div class="elementor-icon-list-items ">

                                                    <div class="elementor-icon-list-item   ">
                                                        <a class="elementor-repeater-item-7fb4654 ekit_badge_left"
                                                            href="{{ route('product.page') }}" target="_blank"
                                                            rel="nofollow">
                                                            <div class="ekit_page_list_content">
                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-dot-circle"
                                                                        viewBox="0 0 512 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text">
                                                                    <span class="ekit_page_list_title_title">Our
                                                                        Project</span>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="elementor-icon-list-item   ">
                                                        <a class="elementor-repeater-item-111d30e ekit_badge_left"
                                                            href="{{ route('service.page') }}" target="_blank"
                                                            rel="nofollow">
                                                            <div class="ekit_page_list_content">
                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-dot-circle"
                                                                        viewBox="0 0 512 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text">
                                                                    <span class="ekit_page_list_title_title">Our
                                                                        Service</span>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="elementor-icon-list-item   ">
                                                        <a class="elementor-repeater-item-7be2475 ekit_badge_left"
                                                            href="{{ route('product.page') }}" target="_blank"
                                                            rel="nofollow">
                                                            <div class="ekit_page_list_content">
                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-dot-circle"
                                                                        viewBox="0 0 512 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text">
                                                                    <span class="ekit_page_list_title_title">Our
                                                                        Portfolio</span>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-79cf4fa1 e-con-full e-flex e-con e-child"
                                data-id="79cf4fa1" data-element_type="container">
                                <div class="elementor-element elementor-element-343e80ac e-con-full e-flex e-con e-child"
                                    data-id="343e80ac" data-element_type="container">
                                    <div class="elementor-element elementor-element-2ef02dd elementor-view-default elementor-widget elementor-widget-icon"
                                        data-id="2ef02dd" data-element_type="widget" data-widget_type="icon.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-wrapper">
                                                <div class="elementor-icon">
                                                    <i aria-hidden="true" class="jki jki-ellipsis-h-solid"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-5eb31385 elementor-widget elementor-widget-heading"
                                        data-id="5eb31385" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Quicklinks</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-5982b222 e-con-full e-flex e-con e-child"
                                    data-id="5982b222" data-element_type="container">
                                    <div class="elementor-element elementor-element-b280d33 elementor-widget elementor-widget-elementskit-page-list"
                                        data-id="b280d33" data-element_type="widget"
                                        data-widget_type="elementskit-page-list.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">
                                                <div class="elementor-icon-list-items ">
                                                    <div class="elementor-icon-list-item   ">
                                                        <a class="elementor-repeater-item-01d06f0 ekit_badge_left"
                                                            href="{{ route('about.page') }}" target="_blank"
                                                            rel="nofollow">
                                                            <div class="ekit_page_list_content">
                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-dot-circle"
                                                                        viewBox="0 0 512 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text">
                                                                    <span class="ekit_page_list_title_title">About
                                                                        Us</span>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="elementor-icon-list-item   ">
                                                        <a class="elementor-repeater-item-86d313d ekit_badge_left"
                                                            href="{{ url('/teams') }}" target="_blank"
                                                            rel="nofollow">
                                                            <div class="ekit_page_list_content">
                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-dot-circle"
                                                                        viewBox="0 0 512 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text">
                                                                    <span class="ekit_page_list_title_title">Our
                                                                        Team</span>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="elementor-icon-list-item   ">
                                                        <a class="elementor-repeater-item-7fb4654 ekit_badge_left"
                                                            href=" " target="_blank" rel="nofollow">
                                                            <div class="ekit_page_list_content">
                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-dot-circle"
                                                                        viewBox="0 0 512 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text">
                                                                    <span class="ekit_page_list_title_title">Contact
                                                                        Us</span>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-128640c2 e-con-full e-flex e-con e-child"
                                data-id="128640c2" data-element_type="container">

                                <div class="elementor-element elementor-element-2b3fc671 elementor-widget elementor-widget-elementskit-mail-chimp"
                                    data-id="2b3fc671" data-element_type="widget"
                                    data-widget_type="elementskit-mail-chimp.default">
                                    <div class="elementor-widget-container">
                                        <div class="ekit-wid-con">
                                            <div class="ekit-mail-chimp">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.0973078281972!2d90.41388697555888!3d23.77954898765636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c77d5719ab2f%3A0xa8f283b9e86a2c82!2sRobintex%20Group!5e0!3m2!1sen!2sbd!4v1754413974172!5m2!1sen!2sbd"
                                                    width="100%" height="200px" style="border:0;"
                                                    allowfullscreen="" loading="lazy"
                                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-11f99289 e-flex e-con-boxed e-con e-parent e-lazyloaded"
                data-id="11f99289" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-4676508a e-con-full e-flex e-con e-child"
                        data-id="4676508a" data-element_type="container">
                        <div class="elementor-element elementor-element-2320d787 elementor-widget elementor-widget-elementskit-heading"
                            data-id="2320d787" data-element_type="widget"
                            data-widget_type="elementskit-heading.default">
                            <div class="elementor-widget-container">
                                <div class="ekit-wid-con">
                                    <div
                                        class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-text_center">
                                        <p class="ekit-heading--title elementskit-section-title ">© 2025
                                            All right received Robintex-Group</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-7c4e9bb1 e-con-full e-flex e-con e-child"
                        data-id="7c4e9bb1" data-element_type="container">
                        <div class="elementor-element elementor-element-c646d20 elementor-widget elementor-widget-elementskit-social-media"
                            data-id="c646d20" data-element_type="widget"
                            data-widget_type="elementskit-social-media.default">
                            <div class="elementor-widget-container">
                                <div class="ekit-wid-con">
                                    <ul class="ekit_social_media">
                                        <li class="elementor-repeater-item-da8f4de">
                                            <a href="@if (isset($topElements)) {{ $topElements[0]->value }} @endif"
                                                aria-label="Facebook" class="f">

                                                <svg aria-hidden="true" class="e-font-icon-svg e-fab-facebook-f"
                                                    viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="elementor-repeater-item-1399011">
                                            <a href="@if (isset($topElements)) {{ $topElements[3]->value }} @endif"
                                                aria-label="Twitter" class="twitter">

                                                <svg aria-hidden="true" class="e-font-icon-svg e-fab-twitter"
                                                    viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="elementor-repeater-item-8f886e8">
                                            <a href="@if (isset($topElements)) {{ $topElements[2]->value }} @endif"
                                                aria-label="LinkedIn" class="in">

                                                <svg aria-hidden="true" class="e-font-icon-svg e-fab-linkedin-in"
                                                    viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="speculationrules">
</script>
    <script>
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('e-lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: '200px 0px 200px 0px'
            });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>

    <!-- Styles -->
    <link rel="stylesheet" id="jeg-dynamic-style-css" href="{{ asset('assets/data/jeg-dynamic-styles.css') }}"
        media="all">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" id="font-awesome-4-shim-css" href="{{ asset('assets/data/v4-shims.min.css') }}"
        media="all">

    <!-- MediaElement JS Localization -->
    <script id="mediaelement-core-js-before">
        var mejsL10n = {
            "language": "en",
            "strings": {
                "mejs.download-file": "Download File",
                "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
                "mejs.fullscreen": "Fullscreen",
                "mejs.play": "Play",
                "mejs.pause": "Pause",
                "mejs.time-slider": "Time Slider",
                "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
                "mejs.live-broadcast": "Live Broadcast",
                "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
                "mejs.unmute": "Unmute",
                "mejs.mute": "Mute",
                "mejs.volume-slider": "Volume Slider",
                "mejs.video-player": "Video Player",
                "mejs.audio-player": "Audio Player",
                "mejs.captions-subtitles": "Captions\/Subtitles",
                "mejs.captions-chapters": "Chapters",
                "mejs.none": "None",
                "mejs.afrikaans": "Afrikaans",
                "mejs.albanian": "Albanian",
                "mejs.arabic": "Arabic",
                "mejs.belarusian": "Belarusian",
                "mejs.bulgarian": "Bulgarian",
                "mejs.catalan": "Catalan",
                "mejs.chinese": "Chinese",
                "mejs.chinese-simplified": "Chinese (Simplified)",
                "mejs.chinese-traditional": "Chinese (Traditional)",
                "mejs.croatian": "Croatian",
                "mejs.czech": "Czech",
                "mejs.danish": "Danish",
                "mejs.dutch": "Dutch",
                "mejs.english": "English",
                "mejs.estonian": "Estonian",
                "mejs.filipino": "Filipino",
                "mejs.finnish": "Finnish",
                "mejs.french": "French",
                "mejs.galician": "Galician",
                "mejs.german": "German",
                "mejs.greek": "Greek",
                "mejs.haitian-creole": "Haitian Creole",
                "mejs.hebrew": "Hebrew",
                "mejs.hindi": "Hindi",
                "mejs.hungarian": "Hungarian",
                "mejs.icelandic": "Icelandic",
                "mejs.indonesian": "Indonesian",
                "mejs.irish": "Irish",
                "mejs.italian": "Italian",
                "mejs.japanese": "Japanese",
                "mejs.korean": "Korean",
                "mejs.latvian": "Latvian",
                "mejs.lithuanian": "Lithuanian",
                "mejs.macedonian": "Macedonian",
                "mejs.malay": "Malay",
                "mejs.maltese": "Maltese",
                "mejs.norwegian": "Norwegian",
                "mejs.persian": "Persian",
                "mejs.polish": "Polish",
                "mejs.portuguese": "Portuguese",
                "mejs.romanian": "Romanian",
                "mejs.russian": "Russian",
                "mejs.serbian": "Serbian",
                "mejs.slovak": "Slovak",
                "mejs.slovenian": "Slovenian",
                "mejs.spanish": "Spanish",
                "mejs.swahili": "Swahili",
                "mejs.swedish": "Swedish",
                "mejs.tagalog": "Tagalog",
                "mejs.thai": "Thai",
                "mejs.turkish": "Turkish",
                "mejs.ukrainian": "Ukrainian",
                "mejs.vietnamese": "Vietnamese",
                "mejs.welsh": "Welsh",
                "mejs.yiddish": "Yiddish"
            }
        };
    </script>

    <!-- JS Scripts -->



    <span id="elementor-device-mode" class="elementor-screen-only"></span>

    <script id="elementor-frontend-js-after">
        var jkit_ajax_url = " ?jkit-ajax-request=jkit_elements",
            jkit_nonce = "8ca9b90128";
    </script>




</body>

</html>
