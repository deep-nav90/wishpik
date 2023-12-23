@extends('website.layout.layout')
@section('title','Wishpik')


@section('content')
    <script type="text/javascript">
            (function (window, document) {
                if (navigator.userAgent.match(/(Android|iPod|iPhone|iPad|BlackBerry|IEMobile|Opera Mini)/)) {
                    document.body.className += " using-mobile-browser mobile ";
                }

                if (!("ontouchstart" in window)) {
                    var body = document.querySelector("body");
                    var winW = window.innerWidth;
                    var bodyW = body.clientWidth;

                    if (winW > bodyW + 4) {
                        body.setAttribute("style", "--scroll-bar-w: " + (winW - bodyW - 4) + "px");
                    } else {
                        body.setAttribute("style", "--scroll-bar-w: 0px");
                    }
                }
            })(window, document);
        </script>
       
        <div class="ocm-effect-wrap">
            <div class="ocm-effect-wrap-inner">
                <div id="header-space" data-header-mobile-fixed="1"></div>
                <div
                    id="header-outer"
                    data-has-menu="true"
                    data-has-buttons="no"
                    data-header-button_style="shadow_hover_scale"
                    data-using-pr-menu="true"
                    data-mobile-fixed="1"
                    data-ptnm="false"
                    data-lhe="animated_underline"
                    data-user-set-bg="#f8f8f8"
                    data-format="centered-menu"
                    data-permanent-transparent="false"
                    data-megamenu-rt="0"
                    data-remove-fixed="0"
                    data-header-resize="0"
                    data-cart="false"
                    data-transparency-option="1"
                    data-box-shadow="none"
                    data-shrink-num="6"
                    data-using-secondary="0"
                    data-using-logo="0"
                    data-logo-height="28"
                    data-m-logo-height="24"
                    data-padding="30"
                    data-full-width="true"
                    data-condense="false"
                    data-transparent-header="true"
                    data-transparent-shadow-helper="false"
                    data-remove-border="true"
                    class="transparent dark-slide entrance-animation detached at-top"
                    style="transform: translateY(0px);"
                >
                    <div id="search-outer" class="nectar">
                        <div id="search">
                            <div class="container">
                                <div id="search-box">
                                    <div class="inner-wrap">
                                        <div class="col span_12">
                                            <form role="search" action="#" method="GET" data-hs-cf-bound="true">
                                                <input type="text" name="s" id="s" value="" aria-label="Search" placeholder="Type what you&#39;re looking for" />
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="close">
                                    <a href="#">
                                        <span class="screen-reader-text">Close Search</span> <span class="close-wrap"> <span class="close-line close-line1"></span> <span class="close-line close-line2"></span> </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('website.include.topheader')
                    <div class="bg-color-stripe"></div>
                </div>
                <div id="ajax-content-wrap">
                    <div class="container-wrap" style="padding-bottom: 0px; padding-top: 0px; min-height: 595px;">
                        <div class="container main-content" role="main" style="--nectar-sticky-top-distance: 138px;">
                            <div class="row">
                                <div
                                    id="fws_6517a2cd82ed8"
                                    data-column-margin="none"
                                    data-midnight="dark"
                                    class="wpb_row vc_row-fluid vc_row top-level full-width-content vc_row-o-full-height vc_row-o-columns-middle vc_row-o-equal-height vc_row-flex vc_row-o-content-middle nectar-overflow-hidden loaded first-section"
                                    style="padding-top: 0px; padding-bottom: 0px;"
                                >
                                    <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                        <div class="inner-wrap row-bg-layer"><div class="row-bg viewport-desktop" style=""></div></div>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 dark left">
                                        <div
                                            class="vc_col-sm-6 wpb_column column_container vc_column_container col left_padding_desktop_7vw top_padding_desktop_4vw right_padding_desktop_7vw bottom_padding_desktop_6vw"
                                            data-padding-pos="all"
                                            data-has-bg-color="false"
                                            data-bg-color=""
                                            data-bg-opacity="1"
                                            data-animation=""
                                            data-delay="0"
                                        >
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div
                                                        id="fws_6517a2cd86eaa"
                                                        data-midnight=""
                                                        data-column-margin="none"
                                                        class="wpb_row vc_row-fluid vc_row inner_row right_padding_10pct top_padding_tablet_10pct top_padding_phone_16pct"
                                                        style="padding-top: 5%;"
                                                    >
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding el_spacing_0px inherit_tablet inherit_phone mobile-disable-entrance-animation animated-in"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation="fade-in-from-bottom"
                                                                data-delay="900"
                                                                style="
                                                                    transition: transform 1400ms cubic-bezier(0.33, 1, 0.68, 1) 900ms, clip-path 1400ms cubic-bezier(0.33, 1, 0.68, 1) 900ms,
                                                                        opacity 1400ms cubic-bezier(0.33, 1, 0.68, 1) 900ms;
                                                                    transform: translate3d(0px, 0px, 0px);
                                                                    opacity: 1;
                                                                "
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="nectar-highlighted-text font_size_5vw font_size_tablet_7vw font_line_height_1-1em nectar-disable-mobile-animation"
                                                                            data-style="scribble"
                                                                            data-exp="default"
                                                                            data-using-custom-color="false"
                                                                            data-animation-delay="false"
                                                                            data-color=""
                                                                            data-color-gradient=""
                                                                            style=""
                                                                        >
                                                                            <h1>
                                                                                Where marketing &amp; automation
                                                                                <em class="animated">
                                                                                    intersect.
                                                                                    <svg class="nectar-scribble basic-underline" role="presentation" viewBox="-400 -55 730 60" preserveAspectRatio="none">
                                                                                        <path
                                                                                            style="animation-duration: 0s;"
                                                                                            d="m -383.25 -6 c 55.25 -22 130.75 -33.5 293.25 -38 c 54.5 -0.5 195 -2.5 401 15"
                                                                                            stroke="#ffce59"
                                                                                            pathLength="1"
                                                                                            stroke-width="14"
                                                                                            fill="none"
                                                                                        ></path>
                                                                                    </svg>
                                                                                </em>
                                                                            </h1>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fws_6517a2cd87663" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row" style="padding-top: 3vw;">
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding column_element_direction_desktop_horizontal column_element_direction_tablet_horizontal column_element_direction_phone_horizontal el_spacing_20px inherit_tablet inherit_phone mobile-disable-entrance-animation animated-in"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation="fade-in-from-bottom"
                                                                data-delay="1100"
                                                                data-animation-offset="100%"
                                                                style="
                                                                    transition: transform 1400ms cubic-bezier(0.33, 1, 0.68, 1) 1100ms, clip-path 1400ms cubic-bezier(0.33, 1, 0.68, 1) 1100ms,
                                                                        opacity 1400ms cubic-bezier(0.33, 1, 0.68, 1) 1100ms;
                                                                    transform: translate3d(0px, 0px, 0px);
                                                                    opacity: 1;
                                                                "
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="nectar-cta alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit font_size_desktop_1-1vw font_size_tablet_14px"
                                                                            data-color="accent-color"
                                                                            data-using-bg="true"
                                                                            data-style="text-reveal-wave"
                                                                            data-display="inline"
                                                                            data-alignment="left"
                                                                            data-text-color="custom"
                                                                            style="margin-right: 1em;"
                                                                        >
                                                                            <span style="color: #ffffff;" class="nectar-button-type">
                                                                                <span class="link_wrap" style="padding-top: 0.8em; padding-right: 2em; padding-bottom: 0.8em; padding-left: 2em;">
                                                                                    <a target="_blank" class="link_text" role="button" href="#">
                                                                                        <span class="text">
                                                                                            
                                                                                            <span class="char" style="animation-delay: 0.015s;">Gets tarted</span>
                                                                                            <!-- <span class="char" style="animation-delay: 0.015s;">e</span>
                                                                                            <span class="char" style="animation-delay: 0.03s;">t</span> <span class="char" style="animation-delay: 0.045s;">s</span>
                                                                                            <span class="char" style="animation-delay: 0.06s;">t</span><span class="char" style="animation-delay: 0.075s;">a</span>
                                                                                            <span class="char" style="animation-delay: 0.09s;">r</span><span class="char" style="animation-delay: 0.105s;">t</span>
                                                                                            <span class="char" style="animation-delay: 0.12s;">e</span><span class="char" style="animation-delay: 0.135s;">d</span> -->
                                                                                        </span>
                                                                                    </a>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                        <div
                                                                            class="nectar-cta alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit has-icon font_size_desktop_1-1vw font_size_tablet_14px"
                                                                            data-color="default"
                                                                            data-using-bg="false"
                                                                            data-display="inline"
                                                                            data-style="underline"
                                                                            data-alignment="left"
                                                                            data-text-color="custom"
                                                                        >
                                                                            <span style="color: #000000;" class="nectar-button-type">
                                                                                <span class="link_wrap" style="padding-top: 4px; padding-bottom: 4px;">
                                                                                    <i>
                                                                                        <span class="im-icon-wrap">
                                                                                            <span>
                                                                                                <svg role="presentation" version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                                                                                    <path
                                                                                                        d="M14.253 30.18c-0.015 0-0.029 0-0.047-0.003-3.431-0.237-6.265-1.631-8.425-4.143-3.521-4.1-5.069-11.008-4.363-19.451 0.029-0.361 0.321-0.66 0.703-0.609 4.747 0.277 9.948 3.045 13.576 7.224 3.303 3.801 4.924 8.252 4.572 12.539-0.031 0.364-0.339 0.628-0.72 0.609-0.367-0.031-0.64-0.355-0.611-0.719 0.323-3.924-1.187-8.028-4.249-11.556-3.232-3.724-7.772-6.251-11.995-6.712-0.532 7.676 0.947 14.14 4.095 17.807 1.917 2.232 4.444 3.472 7.505 3.68 0.367 0.027 0.644 0.344 0.62 0.711-0.019 0.352-0.312 0.623-0.661 0.623zM17.748 31.361c-0.305 0-0.58-0.211-0.649-0.521-1.608-7.159-9.288-16.467-12.544-19.611-0.265-0.253-0.273-0.675-0.019-0.941 0.256-0.264 0.68-0.271 0.943-0.019 3.347 3.236 11.245 12.827 12.919 20.277 0.081 0.361-0.145 0.713-0.504 0.8-0.048 0.011-0.097 0.015-0.145 0.015zM19.671 24.289c-0.309 0-0.585-0.216-0.652-0.531-0.076-0.36 0.156-0.713 0.516-0.789 10.043-2.101 10.111-15.788 9.765-20.943-5.8 0.629-11.848 5.075-14.577 10.795-0.159 0.333-0.559 0.472-0.889 0.315-0.332-0.159-0.473-0.556-0.315-0.888 3.028-6.348 9.907-11.229 16.356-11.607 0.355-0.035 0.675 0.251 0.703 0.609 1.072 12.781-2.955 21.388-10.771 23.025-0.047 0.008-0.091 0.013-0.136 0.013zM17.747 18.057c-0.115 0-0.231-0.028-0.336-0.091-0.317-0.188-0.424-0.593-0.237-0.915 3.067-5.233 7.295-10.143 9.389-12.169 0.267-0.252 0.688-0.249 0.943 0.019 0.255 0.261 0.249 0.688-0.016 0.943-2.041 1.972-6.167 6.765-9.167 11.887-0.125 0.207-0.348 0.327-0.576 0.327z"
                                                                                                    ></path>
                                                                                                </svg>
                                                                                            </span>
                                                                                        </span>
                                                                                    </i>
                                                                                    <a class="link_text" style="border-color: #000000;" role="button" href="#features">Explore features</a>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="vc_col-sm-6 wpb_column column_container vc_column_container col column_position_relative el_spacing_0px left_padding_tablet_7vw top_padding_desktop_85px top_padding_tablet_30px right_padding_desktop_7vw right_padding_tablet_7vw bottom_padding_desktop_85px bottom_padding_tablet_0px"
                                            data-overlay-color="true"
                                            data-padding-pos="all"
                                            data-has-bg-color="false"
                                            data-bg-color=""
                                            data-bg-opacity="1"
                                            data-animation=""
                                            data-delay="0"
                                        >
                                            <div class="vc_column-inner">
                                                <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                                    <div class="column-bg-overlay"></div>
                                                    <div class="column-overlay-layer" style=""></div>
                                                </div>
                                                <div class="wpb_wrapper">
                                                    <div id="fws_6517a2cd88b4f" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row bottom_padding_phone_16pct" style="">
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding inherit_tablet inherit_phone col-overflow-hidden mobile-disable-entrance-animation nectar-mask-reveal nectar-mask-reveal-left-dir nectar-mask-reveal-straight-shape animated-in"
                                                                data-border-radius="20px"
                                                                data-overlay-color="true"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation="mask-reveal"
                                                                data-delay="0"
                                                                data-animation-easing="easeInOutCubic"
                                                                style="
                                                                    transition: transform 1400ms cubic-bezier(0.65, 0, 0.35, 1) 0ms, clip-path 1400ms cubic-bezier(0.65, 0, 0.35, 1) 0ms, opacity 1400ms cubic-bezier(0.65, 0, 0.35, 1) 0ms;
                                                                    opacity: 1;
                                                                    transform: translate3d(0px, 0px, 0px);
                                                                "
                                                            >
                                                                <div
                                                                    class="vc_column-inner"
                                                                    style="
                                                                        transition: transform 1400ms cubic-bezier(0.65, 0, 0.35, 1) 0ms, clip-path 1400ms cubic-bezier(0.65, 0, 0.35, 1) 0ms, opacity 1400ms cubic-bezier(0.65, 0, 0.35, 1) 0ms;
                                                                        opacity: 1;
                                                                        transform: translate3d(0px, 0px, 0px);
                                                                    "
                                                                >
                                                                    <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                                                        <div class="column-bg-overlay"></div>
                                                                        <div class="column-overlay-layer" style="background: radial-gradient(circle at bottom, rgb(0, 2, 255) 0%, rgb(48, 169, 255) 76%);"></div>
                                                                    </div>
                                                                    <div class="wpb_wrapper" data-scroll-animation-movement="transform_y">
                                                                        <div
                                                                            class="nectar-animated-shape width_desktop_77vw width_tablet_154vw position_desktop_absolute top_position_desktop_0px left_position_desktop_0px translate_y_desktop_-50pct translate_x_desktop_-50pct z_index_-1"
                                                                        >
                                                                            <div
                                                                                class="nectar-animated-shape__inner_wrap nectar-waypoint-el nectar-disable-mobile-animation animated-in"
                                                                                data-nectar-waypoint-el-delay="30"
                                                                                data-easing="easeInOutCubic"
                                                                                data-animation="grow-in"
                                                                            >
                                                                                <div class="nectar-animated-shape__inner">
                                                                                    <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 100 100"
                                                                                        width="100"
                                                                                        height="100"
                                                                                        preserveAspectRatio="xMidYMid meet"
                                                                                        style="width: 100%; height: 100%; overflow: hidden;"
                                                                                    >
                                                                                        <circle cx="50" cy="50" r="50" fill="#ffce59"></circle>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="img-with-aniamtion-wrap center nectar-el-parallax-scroll nectar-disable-mobile-animation"
                                                                            data-max-width="100%"
                                                                            data-max-width-mobile="default"
                                                                            data-shadow="none"
                                                                            data-animation="slide-up"
                                                                            data-scroll-animation="true"
                                                                            data-scroll-animation-movement="transform_y"
                                                                            data-scroll-animation-mobile="true"
                                                                            data-scroll-animation-intensity="-0.8"
                                                                            style="opacity: 1; transform: translateY(0px) translateZ(0px);"
                                                                        >
                                                                            <div class="inner" style="opacity: 1; transform: translate3d(0px, 0px, 0px);">
                                                                                <div
                                                                                    class="hover-wrap"
                                                                                    style="
                                                                                        transition: transform 1400ms cubic-bezier(0.65, 0, 0.35, 1) 0ms, clip-path 1400ms cubic-bezier(0.65, 0, 0.35, 1) 0ms,
                                                                                            opacity 1400ms cubic-bezier(0.65, 0, 0.35, 1) 0ms;
                                                                                        opacity: 1;
                                                                                        transform: translate3d(0px, 0px, 0px);
                                                                                    "
                                                                                >
                                                                                    <div class="hover-wrap-inner">
                                                                                        <img
                                                                                            class="img-with-animation skip-lazy animated-in"
                                                                                            data-delay="0"
                                                                                            height="560"
                                                                                            width="560"
                                                                                            data-animation="slide-up"
                                                                                            data-animation-easing="easeInOutCubic"
                                                                                            src="{{url('public/website/image/sass-guy.webp')}}"
                                                                                            alt=""
                                                                                            style="opacity: 1; transform: translate3d(0px, 0px, 0px);"
                                                                                        />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        id="fws_6517a2cd895c7"
                                                        data-midnight=""
                                                        data-column-margin="default"
                                                        class="wpb_row vc_row-fluid vc_row inner_row row_position_absolute top_position_desktop_20pct left_position_desktop_-1pct translate_x_-35pct left_position_tablet_14pct"
                                                        style="z-index: 500;"
                                                    >
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding inherit_tablet inherit_phone mobile-disable-entrance-animation animated-in"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation="fade-in-from-bottom"
                                                                data-delay="900"
                                                                data-scroll-animation="true"
                                                                data-scroll-animation-movement="default"
                                                                data-scroll-animation-mobile="true"
                                                                data-scroll-animation-intensity="1.2"
                                                                style="
                                                                    transition: transform 1400ms cubic-bezier(0.33, 1, 0.68, 1) 900ms, clip-path 1400ms cubic-bezier(0.33, 1, 0.68, 1) 900ms,
                                                                        opacity 1400ms cubic-bezier(0.33, 1, 0.68, 1) 900ms;
                                                                    transform: translate3d(0px, 0px, 0px);
                                                                    opacity: 1;
                                                                "
                                                            >
                                                                <div class="vc_column-inner" style="transform: translateY(0px) translateZ(0px);">
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="img-with-aniamtion-wrap custom-width-18vw custom-width-tablet-30vw"
                                                                            data-max-width="custom"
                                                                            data-max-width-mobile="default"
                                                                            data-border-radius="15px"
                                                                            data-shadow="custom"
                                                                            data-animation="none"
                                                                        >
                                                                            <div class="inner">
                                                                                <div class="hover-wrap" style="box-shadow: 50px 60px 60px -20px rgba(0, 0, 0, 0.175);">
                                                                                    <div class="hover-wrap-inner">
                                                                                        <img
                                                                                            class="img-with-animation skip-lazy"
                                                                                            data-delay="0"
                                                                                            height="350"
                                                                                            width="600"
                                                                                            data-animation="none"
                                                                                            src=" {{url('public/website/image/sass-sales.jpg')}}"
                                                                                            alt=""
                                                                                            srcset="
                                                                                             {{url('public/website/image/sass-sales-1.jpg')}}         600w,
                                                                                            {{url('public/website/image/sass-sales-300x175.jpg')}} 300w
                                                                                            "
                                                                                            sizes="(min-width: 1000px) 18vw, 30vw"
                                                                                        />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="nectar-lottie-wrap width_desktop_6vw alignment_center mobile_remove position_desktop_absolute top_position_desktop_6pct left_position_desktop_5pct">
                                                                            <div
                                                                                class="nectar-lottie"
                                                                                data-lottie-settings='{"trigger_type":"play","mobile_func":"remove","trigger_offset":"0.00,100.00","frame_constraint":"0.00,100.00","width_desktop":"6vw","alignment":"center","preserve_aspect_ratio":"xMidYMid meet","position_desktop":"absolute","top_position_desktop":"6%","left_position_desktop":"5%","mobile_disable_css_animation":"true","preserveaspectratio":"center","json_url":"https:\/\/assets4.lottiefiles.com\/packages\/lf20_d1q2zqsv.json","trigger_delay":"900","box_shadow_method":"filter"}'
                                                                                id="nectar-lottie-1696052543320"
                                                                            >
                                                                                <svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 500 500"
                                                                                    width="500"
                                                                                    height="500"
                                                                                    preserveAspectRatio="xMidYMid meet"
                                                                                    style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;"
                                                                                >
                                                                                    <defs>
                                                                                        <clippath id="__lottie_element_54"><rect width="500" height="500" x="0" y="0"></rect></clippath>
                                                                                        <mask id="__lottie_element_73" mask-type="alpha">
                                                                                            <g
                                                                                                transform="matrix(1.0183143615722656,-0.1687999665737152,0.1687999665737152,1.0183143615722656,290.99957275390625,267.4997863769531)"
                                                                                                opacity="1"
                                                                                                style="display: block;"
                                                                                            >
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,-36.99599838256836,-16.582000732421875)">
                                                                                                    <path
                                                                                                        fill="rgb(0,0,0)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-194.51950073242188 C107.35531616210938,-194.51950073242188 194.51950073242188,-107.35531616210938 194.51950073242188,0 C194.51950073242188,107.35531616210938 107.35531616210938,194.51950073242188 0,194.51950073242188 C-107.35531616210938,194.51950073242188 -194.51950073242188,107.35531616210938 -194.51950073242188,0 C-194.51950073242188,-107.35531616210938 -107.35531616210938,-194.51950073242188 0,-194.51950073242188z"
                                                                                                    ></path>
                                                                                                </g>
                                                                                            </g>
                                                                                        </mask>
                                                                                        <filter id="__lottie_element_78" x="0%" y="0%" width="100%" height="100%">
                                                                                            <fegaussianblur in="SourceAlpha" result="drop_shadow_1" stdDeviation="0"></fegaussianblur>
                                                                                            <feoffset dx="25" dy="0" in="drop_shadow_1" result="drop_shadow_2"></feoffset>
                                                                                            <feflood flood-color="#00ff00" flood-opacity="1" result="drop_shadow_3"></feflood>
                                                                                            <fecomposite in="drop_shadow_3" in2="drop_shadow_2" operator="in" result="drop_shadow_4"></fecomposite>
                                                                                            <femerge>
                                                                                                <femergenode></femergenode>
                                                                                                <femergenode in="SourceGraphic"></femergenode>
                                                                                            </femerge>
                                                                                            <fegaussianblur in="SourceAlpha" result="drop_shadow_1" stdDeviation="13.25"></fegaussianblur>
                                                                                            <feoffset dx="1.877213580482771" dy="11.852260087141653" in="drop_shadow_1" result="drop_shadow_2"></feoffset>
                                                                                            <feflood flood-color="#ff6b3d" flood-opacity="0.5686274509803921" result="drop_shadow_3"></feflood>
                                                                                            <fecomposite in="drop_shadow_3" in2="drop_shadow_2" operator="in" result="drop_shadow_4"></fecomposite>
                                                                                            <femerge>
                                                                                                <femergenode></femergenode>
                                                                                                <femergenode in="SourceGraphic"></femergenode>
                                                                                            </femerge>
                                                                                        </filter>
                                                                                        <mask id="__lottie_element_79" mask-type="alpha">
                                                                                            <g
                                                                                                transform="matrix(1.0183143615722656,-0.1687999665737152,0.1687999665737152,1.0183143615722656,290.99957275390625,267.4997863769531)"
                                                                                                opacity="1"
                                                                                                style="display: block;"
                                                                                            >
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,-36.99599838256836,-16.582000732421875)">
                                                                                                    <path
                                                                                                        fill="rgb(0,0,0)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-194.51950073242188 C107.35531616210938,-194.51950073242188 194.51950073242188,-107.35531616210938 194.51950073242188,0 C194.51950073242188,107.35531616210938 107.35531616210938,194.51950073242188 0,194.51950073242188 C-107.35531616210938,194.51950073242188 -194.51950073242188,107.35531616210938 -194.51950073242188,0 C-194.51950073242188,-107.35531616210938 -107.35531616210938,-194.51950073242188 0,-194.51950073242188z"
                                                                                                    ></path>
                                                                                                </g>
                                                                                            </g>
                                                                                        </mask>
                                                                                    </defs>
                                                                                    <g clip-path="url(#__lottie_element_54)">
                                                                                        <g transform="matrix(1,0,0,1,0,0)" opacity="1" style="display: block;"><rect width="500" height="500" fill="#ffffff"></rect></g>
                                                                                        <g
                                                                                            transform="matrix(1.0183143615722656,-0.1687999665737152,0.1687999665737152,1.0183143615722656,290.99957275390625,267.4997863769531)"
                                                                                            opacity="1"
                                                                                            style="display: block;"
                                                                                        >
                                                                                            <g opacity="1" transform="matrix(1,0,0,1,-36.99599838256836,-16.582000732421875)">
                                                                                                <path
                                                                                                    fill="rgb(255,243,239)"
                                                                                                    fill-opacity="1"
                                                                                                    d=" M0,-194.51950073242188 C107.35531616210938,-194.51950073242188 194.51950073242188,-107.35531616210938 194.51950073242188,0 C194.51950073242188,107.35531616210938 107.35531616210938,194.51950073242188 0,194.51950073242188 C-107.35531616210938,194.51950073242188 -194.51950073242188,107.35531616210938 -194.51950073242188,0 C-194.51950073242188,-107.35531616210938 -107.35531616210938,-194.51950073242188 0,-194.51950073242188z"
                                                                                                ></path>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g mask="url(#__lottie_element_79)" style="display: block;">
                                                                                            <g transform="matrix(1.6439800262451172,0,0,1.6439800262451172,-220.05789184570312,-237.01611328125)" opacity="1">
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,196,202.625)">
                                                                                                    <path
                                                                                                        stroke-linecap="butt"
                                                                                                        stroke-linejoin="miter"
                                                                                                        fill-opacity="0"
                                                                                                        stroke-miterlimit="10"
                                                                                                        stroke="rgb(255,255,255)"
                                                                                                        stroke-opacity="1"
                                                                                                        stroke-width="4"
                                                                                                        d=" M-43,-32.625 C-43,-32.625 43,-32.625 43,-32.625 C43,-32.625 43,32.625 43,32.625 C43,32.625 -43,32.625 -43,32.625 C-43,32.625 -43,-32.625 -43,-32.625z"
                                                                                                    ></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,282,202.625)">
                                                                                                    <path
                                                                                                        stroke-linecap="butt"
                                                                                                        stroke-linejoin="miter"
                                                                                                        fill-opacity="0"
                                                                                                        stroke-miterlimit="10"
                                                                                                        stroke="rgb(255,255,255)"
                                                                                                        stroke-opacity="1"
                                                                                                        stroke-width="4"
                                                                                                        d=" M-43,-32.625 C-43,-32.625 43,-32.625 43,-32.625 C43,-32.625 43,32.625 43,32.625 C43,32.625 -43,32.625 -43,32.625 C-43,32.625 -43,-32.625 -43,-32.625z"
                                                                                                    ></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,368,202.625)">
                                                                                                    <path
                                                                                                        stroke-linecap="butt"
                                                                                                        stroke-linejoin="miter"
                                                                                                        fill-opacity="0"
                                                                                                        stroke-miterlimit="10"
                                                                                                        stroke="rgb(255,255,255)"
                                                                                                        stroke-opacity="1"
                                                                                                        stroke-width="4"
                                                                                                        d=" M-43,-32.625 C-43,-32.625 43,-32.625 43,-32.625 C43,-32.625 43,32.625 43,32.625 C43,32.625 -43,32.625 -43,32.625 C-43,32.625 -43,-32.625 -43,-32.625z"
                                                                                                    ></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,454,202.625)">
                                                                                                    <path
                                                                                                        stroke-linecap="butt"
                                                                                                        stroke-linejoin="miter"
                                                                                                        fill-opacity="0"
                                                                                                        stroke-miterlimit="10"
                                                                                                        stroke="rgb(255,255,255)"
                                                                                                        stroke-opacity="1"
                                                                                                        stroke-width="4"
                                                                                                        d=" M-43,-32.625 C-43,-32.625 43,-32.625 43,-32.625 C43,-32.625 43,32.625 43,32.625 C43,32.625 -43,32.625 -43,32.625 C-43,32.625 -43,-32.625 -43,-32.625z"
                                                                                                    ></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,196,267.875)">
                                                                                                    <path
                                                                                                        stroke-linecap="butt"
                                                                                                        stroke-linejoin="miter"
                                                                                                        fill-opacity="0"
                                                                                                        stroke-miterlimit="10"
                                                                                                        stroke="rgb(255,255,255)"
                                                                                                        stroke-opacity="1"
                                                                                                        stroke-width="4"
                                                                                                        d=" M-43,-32.625 C-43,-32.625 43,-32.625 43,-32.625 C43,-32.625 43,32.625 43,32.625 C43,32.625 -43,32.625 -43,32.625 C-43,32.625 -43,-32.625 -43,-32.625z"
                                                                                                    ></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,282,267.875)">
                                                                                                    <path
                                                                                                        stroke-linecap="butt"
                                                                                                        stroke-linejoin="miter"
                                                                                                        fill-opacity="0"
                                                                                                        stroke-miterlimit="10"
                                                                                                        stroke="rgb(255,255,255)"
                                                                                                        stroke-opacity="1"
                                                                                                        stroke-width="4"
                                                                                                        d=" M-43,-32.625 C-43,-32.625 43,-32.625 43,-32.625 C43,-32.625 43,32.625 43,32.625 C43,32.625 -43,32.625 -43,32.625 C-43,32.625 -43,-32.625 -43,-32.625z"
                                                                                                    ></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,368,267.875)">
                                                                                                    <path
                                                                                                        stroke-linecap="butt"
                                                                                                        stroke-linejoin="miter"
                                                                                                        fill-opacity="0"
                                                                                                        stroke-miterlimit="10"
                                                                                                        stroke="rgb(255,255,255)"
                                                                                                        stroke-opacity="1"
                                                                                                        stroke-width="4"
                                                                                                        d=" M-43,-32.625 C-43,-32.625 43,-32.625 43,-32.625 C43,-32.625 43,32.625 43,32.625 C43,32.625 -43,32.625 -43,32.625 C-43,32.625 -43,-32.625 -43,-32.625z"
                                                                                                    ></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,454,267.875)">
                                                                                                    <path
                                                                                                        stroke-linecap="butt"
                                                                                                        stroke-linejoin="miter"
                                                                                                        fill-opacity="0"
                                                                                                        stroke-miterlimit="10"
                                                                                                        stroke="rgb(255,255,255)"
                                                                                                        stroke-opacity="1"
                                                                                                        stroke-width="4"
                                                                                                        d=" M-43,-32.625 C-43,-32.625 43,-32.625 43,-32.625 C43,-32.625 43,32.625 43,32.625 C43,32.625 -43,32.625 -43,32.625 C-43,32.625 -43,-32.625 -43,-32.625z"
                                                                                                    ></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,196,333.125)">
                                                                                                    <path
                                                                                                        stroke-linecap="butt"
                                                                                                        stroke-linejoin="miter"
                                                                                                        fill-opacity="0"
                                                                                                        stroke-miterlimit="10"
                                                                                                        stroke="rgb(255,255,255)"
                                                                                                        stroke-opacity="1"
                                                                                                        stroke-width="4"
                                                                                                        d=" M-43,-32.625 C-43,-32.625 43,-32.625 43,-32.625 C43,-32.625 43,32.625 43,32.625 C43,32.625 -43,32.625 -43,32.625 C-43,32.625 -43,-32.625 -43,-32.625z"
                                                                                                    ></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,282,333.125)">
                                                                                                    <path
                                                                                                        stroke-linecap="butt"
                                                                                                        stroke-linejoin="miter"
                                                                                                        fill-opacity="0"
                                                                                                        stroke-miterlimit="10"
                                                                                                        stroke="rgb(255,255,255)"
                                                                                                        stroke-opacity="1"
                                                                                                        stroke-width="4"
                                                                                                        d=" M-43,-32.625 C-43,-32.625 43,-32.625 43,-32.625 C43,-32.625 43,32.625 43,32.625 C43,32.625 -43,32.625 -43,32.625 C-43,32.625 -43,-32.625 -43,-32.625z"
                                                                                                    ></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,368,333.125)">
                                                                                                    <path
                                                                                                        stroke-linecap="butt"
                                                                                                        stroke-linejoin="miter"
                                                                                                        fill-opacity="0"
                                                                                                        stroke-miterlimit="10"
                                                                                                        stroke="rgb(255,255,255)"
                                                                                                        stroke-opacity="1"
                                                                                                        stroke-width="4"
                                                                                                        d=" M-43,-32.625 C-43,-32.625 43,-32.625 43,-32.625 C43,-32.625 43,32.625 43,32.625 C43,32.625 -43,32.625 -43,32.625 C-43,32.625 -43,-32.625 -43,-32.625z"
                                                                                                    ></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,454,333.125)">
                                                                                                    <path
                                                                                                        stroke-linecap="butt"
                                                                                                        stroke-linejoin="miter"
                                                                                                        fill-opacity="0"
                                                                                                        stroke-miterlimit="10"
                                                                                                        stroke="rgb(255,255,255)"
                                                                                                        stroke-opacity="1"
                                                                                                        stroke-width="4"
                                                                                                        d=" M-43,-32.625 C-43,-32.625 43,-32.625 43,-32.625 C43,-32.625 43,32.625 43,32.625 C43,32.625 -43,32.625 -43,32.625 C-43,32.625 -43,-32.625 -43,-32.625z"
                                                                                                    ></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,196,398.375)">
                                                                                                    <path
                                                                                                        stroke-linecap="butt"
                                                                                                        stroke-linejoin="miter"
                                                                                                        fill-opacity="0"
                                                                                                        stroke-miterlimit="10"
                                                                                                        stroke="rgb(255,255,255)"
                                                                                                        stroke-opacity="1"
                                                                                                        stroke-width="4"
                                                                                                        d=" M-43,-32.625 C-43,-32.625 43,-32.625 43,-32.625 C43,-32.625 43,32.625 43,32.625 C43,32.625 -43,32.625 -43,32.625 C-43,32.625 -43,-32.625 -43,-32.625z"
                                                                                                    ></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,282,398.375)">
                                                                                                    <path
                                                                                                        stroke-linecap="butt"
                                                                                                        stroke-linejoin="miter"
                                                                                                        fill-opacity="0"
                                                                                                        stroke-miterlimit="10"
                                                                                                        stroke="rgb(255,255,255)"
                                                                                                        stroke-opacity="1"
                                                                                                        stroke-width="4"
                                                                                                        d=" M-43,-32.625 C-43,-32.625 43,-32.625 43,-32.625 C43,-32.625 43,32.625 43,32.625 C43,32.625 -43,32.625 -43,32.625 C-43,32.625 -43,-32.625 -43,-32.625z"
                                                                                                    ></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,368,398.375)">
                                                                                                    <path
                                                                                                        stroke-linecap="butt"
                                                                                                        stroke-linejoin="miter"
                                                                                                        fill-opacity="0"
                                                                                                        stroke-miterlimit="10"
                                                                                                        stroke="rgb(255,255,255)"
                                                                                                        stroke-opacity="1"
                                                                                                        stroke-width="4"
                                                                                                        d=" M-43,-32.625 C-43,-32.625 43,-32.625 43,-32.625 C43,-32.625 43,32.625 43,32.625 C43,32.625 -43,32.625 -43,32.625 C-43,32.625 -43,-32.625 -43,-32.625z"
                                                                                                    ></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,454,398.375)">
                                                                                                    <path
                                                                                                        stroke-linecap="butt"
                                                                                                        stroke-linejoin="miter"
                                                                                                        fill-opacity="0"
                                                                                                        stroke-miterlimit="10"
                                                                                                        stroke="rgb(255,255,255)"
                                                                                                        stroke-opacity="1"
                                                                                                        stroke-width="4"
                                                                                                        d=" M-43,-32.625 C-43,-32.625 43,-32.625 43,-32.625 C43,-32.625 43,32.625 43,32.625 C43,32.625 -43,32.625 -43,32.625 C-43,32.625 -43,-32.625 -43,-32.625z"
                                                                                                    ></path>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g mask="url(#__lottie_element_73)" style="display: block;">
                                                                                            <g
                                                                                                filter="url(#__lottie_element_78)"
                                                                                                transform="matrix(0.9942242503166199,0.10732263326644897,-0.10732263326644897,0.9942242503166199,294,278)"
                                                                                                opacity="1"
                                                                                            >
                                                                                                <path
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="miter"
                                                                                                    fill-opacity="0"
                                                                                                    stroke-miterlimit="4"
                                                                                                    stroke="rgb(255,107,61)"
                                                                                                    stroke-opacity="1"
                                                                                                    stroke-width="12"
                                                                                                    d=" M-215.46600341796875,98.11799621582031 C-198.5570068359375,73.33899688720703 -177.96200561523438,40.40800094604492 -153.08599853515625,32.46900177001953 C-128.17999267578125,24.520999908447266 -97.49700164794922,57.551998138427734 -66.93099975585938,50.48400115966797 C-17.900999069213867,39.14699935913086 -17.375999450683594,-58.472999572753906 9.645999908447266,-65.37899780273438 C42.80099868774414,-73.85299682617188 66.24199676513672,-16.02899932861328 101.29000091552734,-30.121999740600586 C134.78700256347656,-43.59199905395508 140.01800537109375,-71.76499938964844 151.2050018310547,-93.16699981689453"
                                                                                                ></path>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g
                                                                                            transform="matrix(0.7126502394676208,0.07692781835794449,-0.07692781835794449,0.7126502394676208,314.4661560058594,253.35137939453125)"
                                                                                            opacity="1"
                                                                                            style="display: block;"
                                                                                        >
                                                                                            <g opacity="1" transform="matrix(1,0,0,1,-5.784999847412109,-54.582000732421875)">
                                                                                                <path
                                                                                                    fill="rgb(248,248,248)"
                                                                                                    fill-opacity="1"
                                                                                                    d=" M0,-25.256000518798828 C13.938786506652832,-25.256000518798828 25.256000518798828,-13.938786506652832 25.256000518798828,0 C25.256000518798828,13.938786506652832 13.938786506652832,25.256000518798828 0,25.256000518798828 C-13.938786506652832,25.256000518798828 -25.256000518798828,13.938786506652832 -25.256000518798828,0 C-25.256000518798828,-13.938786506652832 -13.938786506652832,-25.256000518798828 0,-25.256000518798828z"
                                                                                                ></path>
                                                                                                <path
                                                                                                    stroke-linecap="butt"
                                                                                                    stroke-linejoin="miter"
                                                                                                    fill-opacity="0"
                                                                                                    stroke-miterlimit="4"
                                                                                                    stroke="rgb(255,106,60)"
                                                                                                    stroke-opacity="1"
                                                                                                    stroke-width="16"
                                                                                                    d=" M0,-25.256000518798828 C13.938786506652832,-25.256000518798828 25.256000518798828,-13.938786506652832 25.256000518798828,0 C25.256000518798828,13.938786506652832 13.938786506652832,25.256000518798828 0,25.256000518798828 C-13.938786506652832,25.256000518798828 -25.256000518798828,13.938786506652832 -25.256000518798828,0 C-25.256000518798828,-13.938786506652832 -13.938786506652832,-25.256000518798828 0,-25.256000518798828z"
                                                                                                ></path>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g
                                                                                            style="display: block;"
                                                                                            transform="matrix(1.0809799432754517,0,0,1.0809799432754517,31.200233459472656,54.210609436035156)"
                                                                                            opacity="0.07999999972320003"
                                                                                        >
                                                                                            <g opacity="1" transform="matrix(1,0,0,1,90.14299774169922,96.18900299072266)">
                                                                                                <path
                                                                                                    fill="rgb(0,0,0)"
                                                                                                    fill-opacity="1"
                                                                                                    d=" M111.14250183105469,0 C111.14250183105469,0 111.14250183105469,0 111.14250183105469,0 C111.14250183105469,22.732484817504883 92.68548583984375,41.18949890136719 69.9530029296875,41.18949890136719 C69.9530029296875,41.18949890136719 -69.9530029296875,41.18949890136719 -69.9530029296875,41.18949890136719 C-92.68548583984375,41.18949890136719 -111.14250183105469,22.732484817504883 -111.14250183105469,0 C-111.14250183105469,0 -111.14250183105469,0 -111.14250183105469,0 C-111.14250183105469,-22.732484817504883 -92.68548583984375,-41.18949890136719 -69.9530029296875,-41.18949890136719 C-69.9530029296875,-41.18949890136719 69.9530029296875,-41.18949890136719 69.9530029296875,-41.18949890136719 C92.68548583984375,-41.18949890136719 111.14250183105469,-22.732484817504883 111.14250183105469,0z"
                                                                                                ></path>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g
                                                                                            style="display: block;"
                                                                                            transform="matrix(1.0809799432754517,0,0,1.0809799432754517,22.200225830078125,44.210609436035156)"
                                                                                            opacity="0.9999999965400004"
                                                                                        >
                                                                                            <g opacity="1" transform="matrix(1,0,0,1,90.14299774169922,96.18900299072266)">
                                                                                                <path
                                                                                                    fill="rgb(255,255,255)"
                                                                                                    fill-opacity="1"
                                                                                                    d=" M111.14250183105469,0 C111.14250183105469,0 111.14250183105469,0 111.14250183105469,0 C111.14250183105469,22.732484817504883 92.68548583984375,41.18949890136719 69.9530029296875,41.18949890136719 C69.9530029296875,41.18949890136719 -69.9530029296875,41.18949890136719 -69.9530029296875,41.18949890136719 C-92.68548583984375,41.18949890136719 -111.14250183105469,22.732484817504883 -111.14250183105469,0 C-111.14250183105469,0 -111.14250183105469,0 -111.14250183105469,0 C-111.14250183105469,-22.732484817504883 -92.68548583984375,-41.18949890136719 -69.9530029296875,-41.18949890136719 C-69.9530029296875,-41.18949890136719 69.9530029296875,-41.18949890136719 69.9530029296875,-41.18949890136719 C92.68548583984375,-41.18949890136719 111.14250183105469,-22.732484817504883 111.14250183105469,0z"
                                                                                                ></path>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g style="display: block;" transform="matrix(1.2681000232696533,0,0,1.2681000232696533,290.9263916015625,291.43310546875)" opacity="1">
                                                                                            <g opacity="1" transform="matrix(1.0945899486541748,0,0,1.0945899486541748,-191.8179931640625,-113.51399993896484)">
                                                                                                <path
                                                                                                    fill="rgb(255,106,60)"
                                                                                                    fill-opacity="1"
                                                                                                    d=" M0,-18.742000579833984 C10.343709945678711,-18.742000579833984 18.742000579833984,-10.343709945678711 18.742000579833984,0 C18.742000579833984,10.343709945678711 10.343709945678711,18.742000579833984 0,18.742000579833984 C-10.343709945678711,18.742000579833984 -18.742000579833984,10.343709945678711 -18.742000579833984,0 C-18.742000579833984,-10.343709945678711 -10.343709945678711,-18.742000579833984 0,-18.742000579833984z"
                                                                                                ></path>
                                                                                                <path
                                                                                                    stroke-linecap="butt"
                                                                                                    stroke-linejoin="miter"
                                                                                                    fill-opacity="0"
                                                                                                    stroke-miterlimit="4"
                                                                                                    stroke="rgb(255,231,220)"
                                                                                                    stroke-opacity="1"
                                                                                                    stroke-width="0"
                                                                                                    d=" M0,-18.742000579833984 C10.343709945678711,-18.742000579833984 18.742000579833984,-10.343709945678711 18.742000579833984,0 C18.742000579833984,10.343709945678711 10.343709945678711,18.742000579833984 0,18.742000579833984 C-10.343709945678711,18.742000579833984 -18.742000579833984,10.343709945678711 -18.742000579833984,0 C-18.742000579833984,-10.343709945678711 -10.343709945678711,-18.742000579833984 0,-18.742000579833984z"
                                                                                                ></path>
                                                                                            </g>
                                                                                            <g opacity="1" transform="matrix(1.1701699495315552,0,0,1.1701699495315552,-191.83799743652344,-112.38500213623047)">
                                                                                                <path
                                                                                                    fill="rgb(255,255,255)"
                                                                                                    fill-opacity="1"
                                                                                                    d=" M5.258633587647689e-16,-8.588000297546387 C5.258633587647689e-16,-8.588000297546387 7.4374260902404785,4.294000148773193 7.4374260902404785,4.294000148773193 C7.4374260902404785,4.294000148773193 -7.4374260902404785,4.294000148773193 -7.4374260902404785,4.294000148773193 C-7.4374260902404785,4.294000148773193 5.258633587647689e-16,-8.588000297546387 5.258633587647689e-16,-8.588000297546387z"
                                                                                                ></path>
                                                                                                <path
                                                                                                    stroke-linecap="butt"
                                                                                                    stroke-linejoin="miter"
                                                                                                    fill-opacity="0"
                                                                                                    stroke-miterlimit="4"
                                                                                                    stroke="rgb(255,231,220)"
                                                                                                    stroke-opacity="1"
                                                                                                    stroke-width="0"
                                                                                                    d=" M5.258633587647689e-16,-8.588000297546387 C5.258633587647689e-16,-8.588000297546387 7.4374260902404785,4.294000148773193 7.4374260902404785,4.294000148773193 C7.4374260902404785,4.294000148773193 -7.4374260902404785,4.294000148773193 -7.4374260902404785,4.294000148773193 C-7.4374260902404785,4.294000148773193 5.258633587647689e-16,-8.588000297546387 5.258633587647689e-16,-8.588000297546387z"
                                                                                                ></path>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g style="display: block;" transform="matrix(0.5924599766731262,0,0,0.5924599766731262,56.180397033691406,28.38288116455078)" opacity="1">
                                                                                            <g opacity="1" transform="matrix(1,0,0,1,92.21299743652344,205.28399658203125)">
                                                                                                <path
                                                                                                    fill="rgb(0,0,0)"
                                                                                                    fill-opacity="1"
                                                                                                    d=" M-17.69300079345703,-4.013999938964844 C-17.69300079345703,-4.013999938964844 17.69300079345703,-4.013999938964844 17.69300079345703,-4.013999938964844 C17.69300079345703,-4.013999938964844 17.69300079345703,4.013999938964844 17.69300079345703,4.013999938964844 C17.69300079345703,4.013999938964844 -17.69300079345703,4.013999938964844 -17.69300079345703,4.013999938964844 C-17.69300079345703,4.013999938964844 -17.69300079345703,-4.013999938964844 -17.69300079345703,-4.013999938964844z M-4.013999938964844,17.69300079345703 M-4.013999938964844,-17.694000244140625 C-4.013999938964844,-17.694000244140625 4.013999938964844,-17.694000244140625 4.013999938964844,-17.694000244140625 C4.013999938964844,-17.694000244140625 4.013999938964844,17.694000244140625 4.013999938964844,17.694000244140625 C4.013999938964844,17.694000244140625 -4.013999938964844,17.694000244140625 -4.013999938964844,17.694000244140625 C-4.013999938964844,17.694000244140625 -4.013999938964844,-17.694000244140625 -4.013999938964844,-17.694000244140625z"
                                                                                                ></path>
                                                                                            </g>
                                                                                            <g opacity="1" transform="matrix(1,0,0,1,137.0850067138672,204.822998046875)">
                                                                                                <path
                                                                                                    fill="rgb(0,0,0)"
                                                                                                    fill-opacity="1"
                                                                                                    d=" M-17.79599952697754,26.540000915527344 C-17.79599952697754,26.540000915527344 -17.79599952697754,19.687999725341797 -17.79599952697754,19.687999725341797 C-17.79599952697754,19.687999725341797 0.382999986410141,1.8669999837875366 0.382999986410141,1.8669999837875366 C2.121000051498413,0.11100000143051147 3.569999933242798,-1.4479999542236328 4.730000019073486,-2.812000036239624 C5.888999938964844,-4.176000118255615 6.758999824523926,-5.497000217437744 7.339000225067139,-6.775000095367432 C7.918000221252441,-8.053999900817871 8.208000183105469,-9.416999816894531 8.208000183105469,-10.866000175476074 C8.208000183105469,-12.520000457763672 7.833000183105469,-13.939000129699707 7.083000183105469,-15.12399959564209 C6.331999778747559,-16.308000564575195 5.301000118255615,-17.224000930786133 3.98799991607666,-17.871999740600586 C2.674999952316284,-18.520000457763672 1.184000015258789,-18.843000411987305 -0.4860000014305115,-18.843000411987305 C-2.2079999446868896,-18.843000411987305 -3.7160000801086426,-18.489999771118164 -5.01200008392334,-17.781999588012695 C-6.307000160217285,-17.075000762939453 -7.309000015258789,-16.072999954223633 -8.015999794006348,-14.777999877929688 C-8.723999977111816,-13.482000350952148 -9.07699966430664,-11.9399995803833 -9.07699966430664,-10.149999618530273 C-9.07699966430664,-10.149999618530273 -18.10300064086914,-10.149999618530273 -18.10300064086914,-10.149999618530273 C-18.10300064086914,-13.473999977111816 -17.3439998626709,-16.363000869750977 -15.82699966430664,-18.81800079345703 C-14.3100004196167,-21.273000717163086 -12.217000007629395,-23.17300033569336 -9.548999786376953,-24.520000457763672 C-6.881999969482422,-25.865999221801758 -3.819000005722046,-26.540000915527344 -0.35899999737739563,-26.540000915527344 C3.1530001163482666,-26.540000915527344 6.238999843597412,-25.882999420166016 8.89799976348877,-24.570999145507812 C11.557999610900879,-23.257999420166016 13.623000144958496,-21.459999084472656 15.097999572753906,-19.176000595092773 C16.57200050354004,-16.892000198364258 17.30900001525879,-14.284000396728516 17.30900001525879,-11.35200023651123 C17.30900001525879,-9.392000198364258 16.93400001525879,-7.466000080108643 16.18400001525879,-5.573999881744385 C15.434000015258789,-3.681999921798706 14.116999626159668,-1.5850000381469727 12.234000205993652,0.7160000205039978 C10.350000381469727,3.0169999599456787 7.7129998207092285,5.803999900817871 4.322000026702881,9.07699966430664 C4.322000026702881,9.07699966430664 -4.703999996185303,18.256000518798828 -4.703999996185303,18.256000518798828 C-4.703999996185303,18.256000518798828 -4.703999996185303,18.61400032043457 -4.703999996185303,18.61400032043457 C-4.703999996185303,18.61400032043457 18.101999282836914,18.61400032043457 18.101999282836914,18.61400032043457 C18.101999282836914,18.61400032043457 18.101999282836914,26.540000915527344 18.101999282836914,26.540000915527344 C18.101999282836914,26.540000915527344 -17.79599952697754,26.540000915527344 -17.79599952697754,26.540000915527344z"
                                                                                                ></path>
                                                                                            </g>
                                                                                            <g opacity="1" transform="matrix(1,0,0,1,183.38900756835938,205.32200622558594)">
                                                                                                <path
                                                                                                    fill="rgb(0,0,0)"
                                                                                                    fill-opacity="1"
                                                                                                    d=" M0,27.038000106811523 C-4.210000038146973,27.038000106811523 -7.820000171661377,25.9689998626709 -10.82800006866455,23.82900047302246 C-13.836000442504883,21.690000534057617 -16.145999908447266,18.597000122070312 -17.756999969482422,14.54800033569336 C-19.368000030517578,10.5 -20.17300033569336,5.619999885559082 -20.17300033569336,-0.09000000357627869 C-20.1560001373291,-5.800000190734863 -19.341999053955078,-10.661999702453613 -17.731000900268555,-14.675999641418457 C-16.121000289916992,-18.69099998474121 -13.810999870300293,-21.7549991607666 -10.802000045776367,-23.868000030517578 C-7.794000148773193,-25.98200035095215 -4.192999839782715,-27.038000106811523 0,-27.038000106811523 C4.192999839782715,-27.038000106811523 7.797999858856201,-25.98200035095215 10.8149995803833,-23.868000030517578 C13.833000183105469,-21.7549991607666 16.145999908447266,-18.684999465942383 17.756999969482422,-14.663000106811523 C19.368000030517578,-10.640000343322754 20.17300033569336,-5.7829999923706055 20.17300033569336,-0.09000000357627869 C20.17300033569336,5.638000011444092 19.368000030517578,10.524999618530273 17.756999969482422,14.574000358581543 C16.145999908447266,18.621999740600586 13.836000442504883,21.711000442504883 10.82800006866455,23.841999053955078 C7.820000171661377,25.972999572753906 4.210000038146973,27.038000106811523 0,27.038000106811523z M0,19.03499984741211 C3.2730000019073486,19.03499984741211 5.859000205993652,17.42099952697754 7.760000228881836,14.190999984741211 C9.66100025177002,10.961000442504883 10.611000061035156,6.199999809265137 10.611000061035156,-0.09000000357627869 C10.611000061035156,-4.249000072479248 10.175999641418457,-7.742000102996826 9.307000160217285,-10.571999549865723 C8.437999725341797,-13.401000022888184 7.210000038146973,-15.536999702453613 5.625,-16.97800064086914 C4.039999961853027,-18.417999267578125 2.1649999618530273,-19.136999130249023 0,-19.136999130249023 C-3.25600004196167,-19.136999130249023 -5.828999996185303,-17.523000717163086 -7.7210001945495605,-14.293000221252441 C-9.61299991607666,-11.062999725341797 -10.567999839782715,-6.328000068664551 -10.585000038146973,-0.09000000357627869 C-10.60200023651123,4.086999893188477 -10.180000305175781,7.5980000495910645 -9.319000244140625,10.444000244140625 C-8.458999633789062,13.291000366210938 -7.235000133514404,15.4350004196167 -5.650000095367432,16.875999450683594 C-4.065000057220459,18.31599998474121 -2.181999921798706,19.03499984741211 0,19.03499984741211z"
                                                                                                ></path>
                                                                                            </g>
                                                                                            <g opacity="1" transform="matrix(1,0,0,1,237.80999755859375,205.1820068359375)">
                                                                                                <path
                                                                                                    fill="rgb(0,0,0)"
                                                                                                    fill-opacity="1"
                                                                                                    d=" M-24.3799991607666,-13.602999687194824 C-24.3799991607666,-13.602999687194824 -24.3799991607666,-16.36400032043457 -24.3799991607666,-16.36400032043457 C-24.3799991607666,-18.409000396728516 -23.944000244140625,-20.284000396728516 -23.075000762939453,-21.98900032043457 C-22.204999923706055,-23.69300079345703 -20.944000244140625,-25.06100082397461 -19.291000366210938,-26.091999053955078 C-17.636999130249023,-27.124000549316406 -15.633999824523926,-27.638999938964844 -13.281999588012695,-27.638999938964844 C-10.878999710083008,-27.638999938964844 -8.854999542236328,-27.124000549316406 -7.210000038146973,-26.091999053955078 C-5.565000057220459,-25.06100082397461 -4.324999809265137,-23.69300079345703 -3.489000082015991,-21.98900032043457 C-2.6540000438690186,-20.284000396728516 -2.2360000610351562,-18.409000396728516 -2.2360000610351562,-16.36400032043457 C-2.2360000610351562,-16.36400032043457 -2.2360000610351562,-13.602999687194824 -2.2360000610351562,-13.602999687194824 C-2.2360000610351562,-11.557000160217285 -2.6579999923706055,-9.685999870300293 -3.502000093460083,-7.989999771118164 C-4.3460001945495605,-6.294000148773193 -5.59499979019165,-4.934999942779541 -7.248000144958496,-3.9119999408721924 C-8.901000022888184,-2.8889999389648438 -10.913000106811523,-2.378000020980835 -13.281999588012695,-2.378000020980835 C-15.685999870300293,-2.378000020980835 -17.709999084472656,-2.8889999389648438 -19.354999542236328,-3.9119999408721924 C-21,-4.934999942779541 -22.24799919128418,-6.297999858856201 -23.100000381469727,-8.003000259399414 C-23.952999114990234,-9.708000183105469 -24.3799991607666,-11.574000358581543 -24.3799991607666,-13.602999687194824z M-21.464000701904297,26.18199920654297 C-21.464000701904297,26.18199920654297 14.53600025177002,-26.18199920654297 14.53600025177002,-26.18199920654297 C14.53600025177002,-26.18199920654297 20.92799949645996,-26.18199920654297 20.92799949645996,-26.18199920654297 C20.92799949645996,-26.18199920654297 -15.071999549865723,26.18199920654297 -15.071999549865723,26.18199920654297 C-15.071999549865723,26.18199920654297 -21.464000701904297,26.18199920654297 -21.464000701904297,26.18199920654297z M-17.65399932861328,-16.36400032043457 C-17.65399932861328,-16.36400032043457 -17.65399932861328,-13.602999687194824 -17.65399932861328,-13.602999687194824 C-17.65399932861328,-12.23900032043457 -17.334999084472656,-10.99899959564209 -16.69499969482422,-9.881999969482422 C-16.055999755859375,-8.765999794006348 -14.918999671936035,-8.208000183105469 -13.281999588012695,-8.208000183105469 C-11.645999908447266,-8.208000183105469 -10.517000198364258,-8.765999794006348 -9.894000053405762,-9.881999969482422 C-9.272000312805176,-10.99899959564209 -8.961000442504883,-12.23900032043457 -8.961000442504883,-13.602999687194824 C-8.961000442504883,-13.602999687194824 -8.961000442504883,-16.36400032043457 -8.961000442504883,-16.36400032043457 C-8.961000442504883,-17.72800064086914 -9.258999824523926,-18.97599983215332 -9.855999946594238,-20.108999252319336 C-10.45300006866455,-21.243000030517578 -11.593999862670898,-21.809999465942383 -13.281999588012695,-21.809999465942383 C-14.901000022888184,-21.809999465942383 -16.03499984741211,-21.23900032043457 -16.683000564575195,-20.097000122070312 C-17.33099937438965,-18.954999923706055 -17.65399932861328,-17.709999084472656 -17.65399932861328,-16.36400032043457z M2.23799991607666,16.363000869750977 C2.23799991607666,16.363000869750977 2.23799991607666,13.60200023651123 2.23799991607666,13.60200023651123 C2.23799991607666,11.574000358581543 2.6679999828338623,9.706999778747559 3.5290000438690186,8.001999855041504 C4.389999866485596,6.297999858856201 5.646999835968018,4.926000118255615 7.300000190734863,3.885999917984009 C8.95300006866455,2.8469998836517334 10.956000328063965,2.3269999027252197 13.309000015258789,2.3269999027252197 C15.729000091552734,2.3269999027252197 17.757999420166016,2.8420000076293945 19.393999099731445,3.872999906539917 C21.0310001373291,4.90500020980835 22.270000457763672,6.2729997634887695 23.11400032043457,7.9770002365112305 C23.95800018310547,9.682000160217285 24.3799991607666,11.557000160217285 24.3799991607666,13.60200023651123 C24.3799991607666,13.60200023651123 24.3799991607666,16.363000869750977 24.3799991607666,16.363000869750977 C24.3799991607666,18.392000198364258 23.952999114990234,20.259000778198242 23.10099983215332,21.96299934387207 C22.249000549316406,23.66699981689453 21,25.040000915527344 19.356000900268555,26.079999923706055 C17.711000442504883,27.118999481201172 15.694999694824219,27.638999938964844 13.309000015258789,27.638999938964844 C10.92199993133545,27.638999938964844 8.902000427246094,27.118999481201172 7.249000072479248,26.079999923706055 C5.5960001945495605,25.040000915527344 4.3470001220703125,23.66699981689453 3.503000020980835,21.96299934387207 C2.6600000858306885,20.259000778198242 2.23799991607666,18.392000198364258 2.23799991607666,16.363000869750977z M8.91100025177002,13.60200023651123 C8.91100025177002,13.60200023651123 8.91100025177002,16.363000869750977 8.91100025177002,16.363000869750977 C8.91100025177002,17.709999084472656 9.234999656677246,18.945999145507812 9.883000373840332,20.070999145507812 C10.529999732971191,21.195999145507812 11.67300033569336,21.757999420166016 13.309000015258789,21.757999420166016 C14.961999893188477,21.757999420166016 16.100000381469727,21.200000762939453 16.722000122070312,20.08300018310547 C17.3439998626709,18.966999053955078 17.6560001373291,17.726999282836914 17.6560001373291,16.363000869750977 C17.6560001373291,16.363000869750977 17.6560001373291,13.60200023651123 17.6560001373291,13.60200023651123 C17.6560001373291,12.23900032043457 17.35700035095215,10.989999771118164 16.76099967956543,9.855999946594238 C16.163999557495117,8.722999572753906 15.012999534606934,8.156000137329102 13.309000015258789,8.156000137329102 C11.706000328063965,8.156000137329102 10.572999954223633,8.722999572753906 9.907999992370605,9.855999946594238 C9.244000434875488,10.989999771118164 8.91100025177002,12.23900032043457 8.91100025177002,13.60200023651123z"
                                                                                                ></path>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g transform="matrix(1,0,0,1,250,264)" opacity="1" style="display: block;"></g>
                                                                                    </g>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        id="fws_6517a2cd8a00b"
                                                        data-midnight=""
                                                        data-column-margin="default"
                                                        class="wpb_row vc_row-fluid vc_row inner_row row_position_absolute top_position_desktop_70pct right_position_desktop_6pct translate_x_0pct right_position_tablet_4pct"
                                                        style="z-index: 500;"
                                                    >
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding inherit_tablet inherit_phone mobile-disable-entrance-animation animated-in"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation="fade-in-from-bottom"
                                                                data-delay="1100"
                                                                data-animation-offset="120%"
                                                                data-scroll-animation="true"
                                                                data-scroll-animation-movement="default"
                                                                data-scroll-animation-mobile="true"
                                                                data-scroll-animation-intensity="2"
                                                                style="
                                                                    transition: transform 1400ms cubic-bezier(0.33, 1, 0.68, 1) 1100ms, clip-path 1400ms cubic-bezier(0.33, 1, 0.68, 1) 1100ms,
                                                                        opacity 1400ms cubic-bezier(0.33, 1, 0.68, 1) 1100ms;
                                                                    transform: translate3d(0px, 0px, 0px);
                                                                    opacity: 1;
                                                                "
                                                            >
                                                                <div class="vc_column-inner" style="transform: translateY(0px) translateZ(0px);">
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="img-with-aniamtion-wrap custom-width-15vw custom-width-tablet-30vw"
                                                                            data-max-width="custom"
                                                                            data-max-width-mobile="default"
                                                                            data-border-radius="15px"
                                                                            data-shadow="custom"
                                                                            data-animation="none"
                                                                        >
                                                                            <div class="inner">
                                                                                <div class="hover-wrap" style="box-shadow: 30px 45px 50px -20px rgba(0, 0, 0, 0.175);">
                                                                                    <div class="hover-wrap-inner">
                                                                                        <img
                                                                                            class="img-with-animation skip-lazy"
                                                                                            data-delay="0"
                                                                                            height="88"
                                                                                            width="300"
                                                                                            data-animation="none"
                                                                                            src="{{url('public/website/image/saas-user-badge.jpeg')}}"
                                                                                            alt=""
                                                                                        />
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    id="intro"
                                    data-column-margin="default"
                                    data-midnight="dark"
                                    data-top-percent="5%"
                                    data-bottom-percent="5%"
                                    class="wpb_row vc_row-fluid vc_row full-width-content vc_row-o-equal-height vc_row-flex vc_row-o-content-middle right_padding_27vw left_padding_27vw bottom_padding_tablet_12pct right_padding_tablet_20vw right_padding_phone_7vw left_padding_tablet_20vw left_padding_phone_7vw"
                                    style="padding-top: calc(100vw * 0.05); padding-bottom: calc(100vw * 0.05);"
                                >
                                    <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                        <div class="inner-wrap row-bg-layer"><div class="row-bg viewport-desktop" style=""></div></div>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 dark left">
                                        <div
                                            class="vc_col-sm-12 wpb_column column_container vc_column_container col column_position_static el_spacing_0px"
                                            data-overlay-color="true"
                                            data-padding-pos="all"
                                            data-has-bg-color="false"
                                            data-bg-color=""
                                            data-bg-opacity="1"
                                            data-animation=""
                                            data-delay="0"
                                        >
                                            <div class="vc_column-inner">
                                                <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                                    <div class="column-bg-overlay"></div>
                                                    <div class="column-overlay-layer" style=""></div>
                                                </div>
                                                <div class="wpb_wrapper">
                                                    <div id="fws_6517a2cd8a8d7" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row" style="">
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding el_spacing_0px inherit_tablet inherit_phone"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation="fade-in"
                                                                data-delay="0"
                                                                data-animation-offset="90%"
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="nectar-animated-shape width_desktop_15vw position_desktop_absolute top_position_desktop_0px left_position_desktop_0px translate_y_desktop_-33pct translate_x_desktop_-50pct z_index_-1"
                                                                        >
                                                                            <div class="nectar-animated-shape__inner_wrap" data-easing="default" data-animation="none" data-scroll-animation-movement="transform_y">
                                                                                <div
                                                                                    class="nectar-animated-shape__inner nectar-el-parallax-scroll"
                                                                                    data-scroll-animation="true"
                                                                                    data-scroll-animation-movement="transform_y"
                                                                                    data-scroll-animation-mobile="true"
                                                                                    data-scroll-animation-intensity="0.6"
                                                                                    style="transform: translateY(30.489px) translateZ(0px);"
                                                                                >
                                                                                    <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 100 100"
                                                                                        width="100"
                                                                                        height="100"
                                                                                        preserveAspectRatio="xMidYMid meet"
                                                                                        style="width: 100%; height: 100%; overflow: hidden;"
                                                                                    >
                                                                                        <circle cx="50" cy="50" r="50" fill="#ffffff"></circle>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fws_6517a2cd8ac9a" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row" style="padding-bottom: 7%;">
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding el_spacing_0px inherit_tablet inherit_phone"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation="fade-in"
                                                                data-delay="0"
                                                                data-animation-offset="90%"
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="nectar-highlighted-text font_size_3vw font_size_tablet_4vw font_size_phone_5vw font_line_height_1-4"
                                                                            data-style="scribble"
                                                                            data-exp="default"
                                                                            data-id="circle-highlight2"
                                                                            data-using-custom-color="false"
                                                                            data-animation-delay="false"
                                                                            data-color=""
                                                                            data-color-gradient=""
                                                                            style=""
                                                                        >
                                                                            <h2>
                                                                                The best customer relationship management platform for just about
                                                                                <em id="circle-highlight2">
                                                                                    everything.
                                                                                    <svg class="nectar-scribble squiggle-underline" role="presentation" viewBox="-347 -30.1947 694 96.19" preserveAspectRatio="none">
                                                                                        <path
                                                                                            style="animation-duration: 1.6s;"
                                                                                            d="M-335,54 C-335,54 -171,-58 -194,-3 C-217,52 -224.1199951171875,73.552001953125 -127,11 C-68,-27 -137,50 -33,42 C31.43899917602539,37.042999267578125 147.14700317382812,-29.308000564575195 335,2"
                                                                                            stroke="#318fff"
                                                                                            pathLength="1"
                                                                                            stroke-width="20"
                                                                                            fill="none"
                                                                                        ></path>
                                                                                    </svg>
                                                                                </em>
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fws_6517a2cd8b00b" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row" style="">
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column no-extra-padding inherit_tablet inherit_phone"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation=""
                                                                data-delay="0"
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="nectar-split-heading font_size_1-2vw font_size_tablet_16px font_line_height_1-8 markup-generated"
                                                                            data-align="default"
                                                                            data-m-align="inherit"
                                                                            data-text-effect="default"
                                                                            data-animation-type="line-reveal-by-space"
                                                                            data-animation-delay="0"
                                                                            data-animation-offset=""
                                                                            data-m-rm-animation=""
                                                                            data-stagger="true"
                                                                            data-custom-font-size="true"
                                                                            style="font-size: 1.2vw; line-height: 1.32vw;"
                                                                        >
                                                                            <p style="max-width: 90%;">
                                                                                <span><span class="inner">Convert</span></span> <span><span class="inner">leads</span></span> <span><span class="inner">into</span></span>
                                                                                <span><span class="inner">customers</span></span> <span><span class="inner">and</span></span> <span><span class="inner">then</span></span>
                                                                                <span><span class="inner">turn</span></span> <span><span class="inner">those</span></span> <span><span class="inner">customers</span></span>
                                                                                <span><span class="inner">into</span></span> <span><span class="inner">loyal</span></span> <span><span class="inner">fans</span></span>
                                                                                <span><span class="inner">of</span></span> <span><span class="inner">your</span></span> <span><span class="inner">brand</span></span>
                                                                                <span><span class="inner">by</span></span> <span><span class="inner">leveraging</span></span> <span><span class="inner">next-generation</span></span>
                                                                                <span><span class="inner">automation</span></span> <span><span class="inner">and</span></span> <span><span class="inner">AI.</span></span>
                                                                                <span><span class="inner">Yes,</span></span> <span><span class="inner">it</span></span> <span><span class="inner">really</span></span>
                                                                                <span><span class="inner">can</span></span> <span><span class="inner">be</span></span> <span><span class="inner">automated,</span></span>
                                                                                <span><span class="inner">and</span></span> <span><span class="inner">no,</span></span> <span><span class="inner">you're</span></span>
                                                                                <span><span class="inner">not</span></span> <span><span class="inner">dreaming.</span></span>
                                                                            </p>
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
                                </div>
                                <div id="fws_6517a2cd8b767" data-column-margin="default" data-midnight="light" data-nectar-animate-settings='{"animations":{"desktop":{"clipPath":{"start":"inset(0 14% 0 14% round 20px)","end":"inset(0 0% 0 0% round 0px)"}},"tablet":{"clipPath":{"start":"inset(0 0 0 0 round 0)","end":"inset(0 0 0 0 round 0.1px)"}},"phone":{"clipPath":{"start":"inset(0 0 0 0 round 0)","end":"inset(0 0 0 0 round 0.1px)"}}},"offsets":{"start":"0.00","end":"100.00","origin":"top"},"config":[]}'
                                    class="wpb_row vc_row-fluid vc_row full-width-content vc_row-o-equal-height vc_row-flex vc_row-o-content-top zindex-set"
                                    style="padding-top: 0px; padding-bottom: 0px; z-index: 100;"
                                >
                                    <div class="row-bg-wrap" data-bg-animation="clip-path" data-bg-animation-delay="" data-bg-overlay="false">
                                        <div class="inner-wrap row-bg-layer"><div class="row-bg viewport-desktop" style=""></div></div>
                                        <div class="row-bg-overlay row-bg-layer" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.478) 0%, rgba(243, 243, 243, 0) 48%);"></div>
                                    </div>
                                    <div class="video-color-overlay row-bg-layer" data-color="" style="opacity: 0.7;"></div>
                                    <div class="nectar-video-wrap row-bg-layer position-loaded" data-bg-alignment="" style="opacity: 1; width: 1267px; height: 100%;">
                                        <div class="nectar-video-inner">
                                            <video class="nectar-video-bg nectar-lazy-video" width="1800" height="700" preload="auto" loop="" autoplay="" muted="" playsinline="" style="visibility: visible; width: 1339px; height: 753px;">
                                                <source data-nectar-video-src="./image/pexels-tony-schnagl-5527750-1.mp4" type="video/mp4" />
                                            </video>
                                        </div>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 light left">
                                        <div
                                            class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding el_spacing_0px inherit_tablet inherit_phone"
                                            data-padding-pos="all"
                                            data-has-bg-color="false"
                                            data-bg-color=""
                                            data-bg-opacity="1"
                                            data-animation=""
                                            data-delay="0"
                                        >
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div
                                                        class="nectar_video_player_self_hosted wpb_video_widget wpb_content_element vc_clearfix vc_video-aspect-ratio-169 vc_video-el-width-100 vc_video-align-left tablet-aspect-43 play_button_hover"
                                                        data-border-radius="none"
                                                        data-shadow="none"
                                                    >
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_video_wrapper">
                                                                <a
                                                                    href="https://vimeo.com/118023315"
                                                                    data-play_button_color="#0a0a0a"
                                                                    data-play_button_icon_color="#ffffff"
                                                                    class="nectar_video_lightbox_trigger play_button follow_mouse"
                                                                    target="_blank"
                                                                    rel="noopener"
                                                                    data-fancybox=""
                                                                >
                                                                    <span class="screen-reader-text">Play Video</span>
                                                                    <span class="play" style="top: 0px; left: 0px; transform: translateX(633.5px) translateY(356.344px);">
                                                                        <svg
                                                                            class="inner"
                                                                            version="1.1"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="600px"
                                                                            height="800px"
                                                                            x="0px"
                                                                            y="0px"
                                                                            viewBox="0 0 600 800"
                                                                            enable-background="new 0 0 600 800"
                                                                            xml:space="preserve"
                                                                            style="transform: translateX(0px) translateY(0px);"
                                                                        >
                                                                            <path fill="none" d="M0-1.79v800L600,395L0-1.79z"></path>
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                                <video width="1280" height="720" class="nectar-video-self-hosted no-video" preload="auto" loop="" autoplay="" muted="" playsinline="" style="visibility: visible;"></video>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        id="fws_6517a2cd8bf1f"
                                                        data-midnight=""
                                                        data-column-margin="default"
                                                        class="wpb_row vc_row-fluid vc_row inner_row no-pointer-events min_width_desktop_100pct row_position_absolute bottom_position_desktop_5vw right_padding_10pct left_padding_10pct"
                                                        style="z-index: 1000;"
                                                    >
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column centered-text no-extra-padding el_spacing_5px inherit_tablet inherit_phone"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation=""
                                                                data-delay="0"
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="nectar-responsive-text font_size_desktop_2vw font_size_tablet_4vw nectar-link-underline-effect" style="color: #ffffff;"><h3>Automate your growth</h3></div>
                                                                        <div class="nectar-responsive-text font_size_desktop_1-2vw font_size_tablet_14px font_line_height_2-5 nectar-link-underline-effect" style="color: #ffffff;">
                                                                            <p>3:45 duration</p>
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
                                </div>
                                <div
                                    id="testimonials"
                                    data-column-margin="default"
                                    data-midnight="dark"
                                    data-top-percent="12%"
                                    class="wpb_row vc_row-fluid vc_row full-width-content vc_row-o-equal-height vc_row-flex vc_row-o-content-top top_padding_tablet_18pct"
                                    style="padding-top: calc(100vw * 0.12); padding-bottom: 0px;"
                                >
                                    <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                        <div class="inner-wrap row-bg-layer"><div class="row-bg viewport-desktop" style=""></div></div>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 dark left">
                                        <div
                                            class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding el_spacing_0px inherit_tablet inherit_phone"
                                            data-padding-pos="all"
                                            data-has-bg-color="false"
                                            data-bg-color=""
                                            data-bg-opacity="1"
                                            data-animation=""
                                            data-delay="0"
                                        >
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div
                                                        id="fws_6517a2cd8c8a8"
                                                        data-midnight=""
                                                        data-column-margin="default"
                                                        class="wpb_row vc_row-fluid vc_row inner_row right_padding_25vw left_padding_25vw right_padding_phone_20vw left_padding_phone_20vw"
                                                        style="padding-bottom: 5%;"
                                                    >
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column centered-text no-extra-padding inherit_tablet inherit_phone"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation=""
                                                                data-delay="0"
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="nectar-text-inline-images nectar-link-underline-effect font_size_desktop_4vw font_size_tablet_4vw font_size_phone_5vw nectar-text-inline-images--animation_circle_fade_in nectar-text-inline-images--stagger-animation font_line_height_1-4 right_margin_desktop_-6pct"
                                                                        >
                                                                            <div class="nectar-text-inline-images__inner">
                                                                                <h2>
                                                                                    Trusted by over 4,000 clients worldwide
                                                                                    <span class="nectar-text-inline-images__marker">
                                                                                        &nbsp;
                                                                                        <img
                                                                                            class="nectar-lazy nectar-text-inline-images__image"
                                                                                            src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20296%20218&#39;%2F%3E"
                                                                                            data-nectar-img-src="./image/face.jpg"
                                                                                            alt=""
                                                                                            width="296"
                                                                                            height="218"
                                                                                            style="height: 71.677px; width: 97.3229px;"
                                                                                        />
                                                                                    </span>
                                                                                    <span class="nectar-text-inline-images__marker">
                                                                                        &nbsp;
                                                                                        <img
                                                                                            class="nectar-lazy nectar-text-inline-images__image"
                                                                                            src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20285%20218&#39;%2F%3E"
                                                                                            data-nectar-img-src="./image/saas-face-2.jpeg"
                                                                                            alt=""
                                                                                            width="285"
                                                                                            height="218"
                                                                                            style="height: 71.6707px; width: 93.6979px;"
                                                                                        />
                                                                                    </span>
                                                                                    <span class="nectar-text-inline-images__marker">
                                                                                        &nbsp;
                                                                                        <img
                                                                                            class="nectar-lazy nectar-text-inline-images__image"
                                                                                            src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20279%20218&#39;%2F%3E"
                                                                                            data-nectar-img-src="./image/face-2-1.jpg"
                                                                                            alt=""
                                                                                            width="279"
                                                                                            height="218"
                                                                                            style="height: 71.6737px; width: 91.7292px;"
                                                                                        />
                                                                                    </span>
                                                                                </h2>
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
                                    </div>
                                </div>
                                <div
                                    id="fws_6517a2cd8d1f8"
                                    data-column-margin="default"
                                    data-midnight="dark"
                                    data-bottom-percent="4%"
                                    class="wpb_row vc_row-fluid vc_row full-width-content vc_row-o-equal-height vc_row-flex vc_row-o-content-top bottom_padding_tablet_8pct"
                                    style="padding-top: 0px; padding-bottom: calc(100vw * 0.04);"
                                >
                                    <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                        <div class="inner-wrap row-bg-layer"><div class="row-bg viewport-desktop" style=""></div></div>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 dark left">
                                        <div
                                            class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding el_spacing_0px inherit_tablet inherit_phone"
                                            data-padding-pos="all"
                                            data-has-bg-color="false"
                                            data-bg-color=""
                                            data-bg-opacity="1"
                                            data-animation=""
                                            data-delay="0"
                                        >
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div
                                                        class="testimonial_slider span_12 col font_size_desktop_1-3vw font_size_tablet_16px font_line_height_1-7 desktop-width-40pct border-radius-20px"
                                                        data-color="accent-color-dark"
                                                        data-rating-color="accent-color"
                                                        data-controls="next_prev_arrows"
                                                        data-add-border=""
                                                        data-autorotate=""
                                                        data-style="multiple_visible"
                                                        data-shadow="box-shadow: 40px 60px 60px -20px rgba(0,0,0,0.175);"
                                                    >
                                                        <div class="slides">
                                                            <div class="flickity-viewport">
                                                                <div class="flickity-slider">
                                                                    <blockquote>
                                                                        <div data-shadow="" class="image-icon">“</div>
                                                                        <p>
                                                                            We checked out Salient to see what all the hype was about and here we are a year later with a 30% increased bottom line! If you're looking for the latest and
                                                                            greatest, I can't recommend this CRM platform enough. <span role="none" class="bottom-arrow"></span>
                                                                        </p>
                                                                        <span class="testimonial-name">Aura Brooks</span><span class="title">Marketing Director, Owl Eyes</span>
                                                                    </blockquote>
                                                                    <blockquote>
                                                                        <div data-shadow="" class="image-icon">“</div>
                                                                        <p>
                                                                            Our productivity has noticably gone up since implementing the platform. We are now able to dedicate more time on our products while having the peace of mind that
                                                                            our customer experience has improved. <span role="none" class="bottom-arrow"></span>
                                                                        </p>
                                                                        <span class="testimonial-name">Eve Crawford</span><span class="title">CEO at ThemeNectar</span>
                                                                    </blockquote>
                                                                    <blockquote>
                                                                        <div data-shadow="" class="image-icon">“</div>
                                                                        <p>
                                                                            Salient has enhanced our user experience and allowed us to move faster than ever and our company is now positioned to scale. We've seen a rediculous growth of 80%
                                                                            in just a few months! <span role="none" class="bottom-arrow"></span>
                                                                        </p>
                                                                        <span class="testimonial-name">Jack Graham</span><span class="title">Project Manager, Coffee Inc</span>
                                                                    </blockquote>
                                                                    <blockquote>
                                                                        <div data-shadow="" class="image-icon">“</div>
                                                                        <p>
                                                                            Simply put, Salient is an excellent tool to accelerate growth and save time. We've been very pleased with the results from implementing the platform into our
                                                                            company. <span role="none" class="bottom-arrow"></span>
                                                                        </p>
                                                                        <span class="testimonial-name">Zak Reid</span><span class="title">CTO at Envato</span>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    id="how-it-works"
                                    data-column-margin="none"
                                    data-midnight="dark"
                                    data-top-percent="5%"
                                    data-bottom-percent="7%"
                                    class="wpb_row vc_row-fluid vc_row full-width-content vc_row-o-equal-height vc_row-flex vc_row-o-content-middle right_padding_7pct left_padding_7pct bottom_padding_tablet_10pct"
                                    style="padding-top: calc(100vw * 0.05); padding-bottom: calc(100vw * 0.07);"
                                >
                                    <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                        <div class="inner-wrap row-bg-layer"><div class="row-bg viewport-desktop" style=""></div></div>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 dark left">
                                        <div
                                            class="vc_col-sm-6 wpb_column column_container vc_column_container col no-extra-padding column_position_relative el_spacing_0px inherit_tablet inherit_phone"
                                            data-overlay-color="true"
                                            data-padding-pos="all"
                                            data-has-bg-color="false"
                                            data-bg-color=""
                                            data-bg-opacity="1"
                                            data-animation=""
                                            data-delay="0"
                                        >
                                            <div class="vc_column-inner">
                                                <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                                    <div class="column-bg-overlay"></div>
                                                    <div class="column-overlay-layer" style=""></div>
                                                </div>
                                                <div class="wpb_wrapper">
                                                    <div id="fws_6517a2cd8e186" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row" style="">
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                style=""
                                                                class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column bg_img_front top_padding_desktop_60vh top_padding_tablet_50vh top_padding_phone_40vh"
                                                                data-using-bg="true"
                                                                data-border-radius="20px"
                                                                data-bg-cover="true"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation=""
                                                                data-delay="0"
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div
                                                                        class="column-image-bg-wrap column-bg-layer viewport-desktop nectar-parallax-enabled"
                                                                        data-n-parallax-bg="true"
                                                                        data-parallax-speed="minimum"
                                                                        data-bg-pos="center center"
                                                                        data-bg-animation="none"
                                                                        data-bg-overlay="false"
                                                                    >
                                                                        <div class="inner-wrap">
                                                                            <div
                                                                                class="column-image-bg parallax-layer translate"
                                                                                style="height: 411.198px; will-change: auto;"
                                                                                data-nectar-img-src="./image/saas-feature-bg.jpeg"
                                                                            ></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wpb_wrapper"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        id="fws_6517a2cd8e455"
                                                        data-midnight=""
                                                        data-column-margin="default"
                                                        class="wpb_row vc_row-fluid vc_row inner_row row_position_absolute bottom_position_desktop_30px left_position_desktop_30px"
                                                        style="z-index: 500;"
                                                    >
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                style=""
                                                                class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding inherit_tablet inherit_phone col-overflow-hidden nectar-mask-reveal nectar-mask-reveal-left_bottom-dir nectar-mask-reveal-circle-shape instance-18"
                                                                data-using-bg="true"
                                                                data-border-radius="15px"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="true"
                                                                data-bg-color="#ffffff"
                                                                data-bg-opacity="1"
                                                                data-animation="mask-reveal"
                                                                data-delay="0"
                                                                data-animation-offset="95%"
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none"><div class="column-bg-overlay" style="opacity: 1; background-color: #ffffff;"></div></div>
                                                                    <div class="wpb_wrapper">
                                                                        <div class="nectar-lottie-wrap nectar-waypoint-el nectar-fade-in width_desktop_18vw width_tablet_36vw alignment_center">
                                                                            <div
                                                                                class="nectar-lottie"
                                                                                data-lottie-settings='{"trigger_type":"play","mobile_func":"default","trigger_offset":"0.00,100.00","frame_constraint":"0.00,100.00","width_desktop":"18vw","width_tablet":"36vw","alignment":"center","preserve_aspect_ratio":"xMidYMid meet","css_animation":"fade-in","preserveaspectratio":"center","json_url":"https:\/\/assets10.lottiefiles.com\/packages\/lf20_erb8mppf.json","trigger_delay":"300","box_shadow_method":"filter"}'
                                                                            ></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="vc_col-sm-6 wpb_column column_container vc_column_container col column_position_static el_spacing_30px left_padding_desktop_7vw"
                                            data-padding-pos="all"
                                            data-has-bg-color="false"
                                            data-bg-color=""
                                            data-bg-opacity="1"
                                            data-animation=""
                                            data-delay="0"
                                        >
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div id="fws_6517a2cd8e9bc" data-midnight="" data-column-margin="none" class="wpb_row vc_row-fluid vc_row inner_row right_padding_5pct top_padding_tablet_8pct" style="">
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column no-extra-padding inherit_tablet inherit_phone"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation=""
                                                                data-delay="0"
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="nectar-split-heading font_size_3vw font_line_height_1-3 markup-generated"
                                                                            data-align="default"
                                                                            data-m-align="inherit"
                                                                            data-text-effect="default"
                                                                            data-animation-type="line-reveal-by-space"
                                                                            data-animation-delay="0"
                                                                            data-animation-offset=""
                                                                            data-m-rm-animation="true"
                                                                            data-stagger="true"
                                                                            data-custom-font-size="true"
                                                                            style="font-size: 3vw; line-height: 3.3vw;"
                                                                        >
                                                                            <h2 style="color: #000000;">
                                                                                <span><span class="inner">Create</span></span> <span><span class="inner">loyal</span></span> <span><span class="inner">customers</span></span>
                                                                                <span><span class="inner">that</span></span> <span><span class="inner">love</span></span> <span><span class="inner">your</span></span>
                                                                                <span><span class="inner">brand</span></span>
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fws_6517a2cd8ed11" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row right_padding_14pct" style="">
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding inherit_tablet inherit_phone"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation="fade-in"
                                                                data-delay="0"
                                                                data-animation-easing="easeInOutQuad"
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="nectar-responsive-text font_size_min_16px font_size_desktop_1-1vw font_line_height_1-8 nectar-link-underline-effect">
                                                                            <p>
                                                                                Retention is key to successful business growth. Our platform gives your customers a better experience from start to finish in order for you to easily turn them
                                                                                into lifelong fans.
                                                                            </p>
                                                                        </div>
                                                                        <div
                                                                            class="nectar-cta alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit font_size_desktop_1-1vw font_size_tablet_16px"
                                                                            data-color="default"
                                                                            data-using-bg="false"
                                                                            data-display="block"
                                                                            data-style="underline"
                                                                            data-alignment="left"
                                                                            data-text-color="custom"
                                                                        >
                                                                            <span style="color: #ff6b3d;" class="nectar-button-type">
                                                                                <span class="link_wrap" style="padding-top: 4px; padding-bottom: 4px;">
                                                                                    <a target="_blank" class="link_text" style="border-color: #ff6b3d;" role="button" href="#">Start your trial</a>
                                                                                </span>
                                                                            </span>
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
                                </div>
                                <div
                                    id="fws_6517a2cd8f45d"
                                    data-column-margin="none"
                                    data-midnight="dark"
                                    data-top-percent="7%"
                                    data-bottom-percent="7%"
                                    class="wpb_row vc_row-fluid vc_row full-width-content vc_row-o-equal-height vc_row-flex vc_row-o-content-middle right_padding_7pct left_padding_7pct reverse_columns_column_tablet reverse_columns_column_phone bottom_padding_tablet_10pct"
                                    style="padding-top: calc(100vw * 0.07); padding-bottom: calc(100vw * 0.07);"
                                >
                                    <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                        <div class="inner-wrap row-bg-layer"><div class="row-bg viewport-desktop" style=""></div></div>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 dark left">
                                        <div
                                            class="vc_col-sm-6 wpb_column column_container vc_column_container col column_position_static el_spacing_30px left_padding_tablet_7vw right_padding_desktop_7vw right_padding_tablet_0px"
                                            data-padding-pos="all"
                                            data-has-bg-color="false"
                                            data-bg-color=""
                                            data-bg-opacity="1"
                                            data-animation=""
                                            data-delay="0"
                                        >
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div id="fws_6517a2cd8f749" data-midnight="" data-column-margin="none" class="wpb_row vc_row-fluid vc_row inner_row right_padding_5pct top_padding_tablet_8pct" style="">
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column no-extra-padding inherit_tablet inherit_phone"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation=""
                                                                data-delay="0"
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="nectar-split-heading font_size_3vw font_line_height_1-3 markup-generated"
                                                                            data-align="default"
                                                                            data-m-align="inherit"
                                                                            data-text-effect="default"
                                                                            data-animation-type="line-reveal-by-space"
                                                                            data-animation-delay="0"
                                                                            data-animation-offset=""
                                                                            data-m-rm-animation="true"
                                                                            data-stagger="true"
                                                                            data-custom-font-size="true"
                                                                            style="font-size: 3vw; line-height: 3.3vw;"
                                                                        >
                                                                            <h2 style="color: #000000;">
                                                                                <span><span class="inner">AI</span></span> <span><span class="inner">driven</span></span> <span><span class="inner">solutions</span></span>
                                                                                <span><span class="inner">for</span></span> <span><span class="inner">exceptional</span></span> <span><span class="inner">outcomes</span></span>
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fws_6517a2cd8fa7b" data-midnight="" data-column-margin="none" class="wpb_row vc_row-fluid vc_row inner_row right_padding_10pct" style="">
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding inherit_tablet inherit_phone mobile-disable-entrance-animation"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation="fade-in"
                                                                data-delay="0"
                                                                data-animation-easing="easeInOutQuad"
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="nectar-fancy-ul font_size_min_16px font_size_desktop_1-1vw font_line_height_1-6"
                                                                            data-list-icon="icon-salient-check"
                                                                            data-animation="false"
                                                                            data-animation-delay="0"
                                                                            data-color="accent-color"
                                                                            data-spacing="10px"
                                                                            data-alignment="left"
                                                                        >
                                                                            <ul>
                                                                                <li><i class="icon-default-style icon-salient-check accent-color"></i> AI-Powered marketing strategies</li>
                                                                                <li><i class="icon-default-style icon-salient-check accent-color"></i> Live customer support chat widget</li>
                                                                                <li><i class="icon-default-style icon-salient-check accent-color"></i> Automatic scaling campaign tools</li>
                                                                                <li><i class="icon-default-style icon-salient-check accent-color"></i> Adaptive testing/reporting</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div
                                                                            class="nectar-cta alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit font_size_desktop_1-1vw font_size_tablet_16px"
                                                                            data-color="default"
                                                                            data-using-bg="false"
                                                                            data-display="block"
                                                                            data-style="underline"
                                                                            data-alignment="left"
                                                                            data-text-color="custom"
                                                                        >
                                                                            <span style="color: #ff6b3d;" class="nectar-button-type">
                                                                                <span class="link_wrap" style="padding-top: 4px; padding-bottom: 4px;">
                                                                                    <a target="_blank" class="link_text" style="border-color: #ff6b3d;" role="button" href="#">View A Demo</a>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="vc_col-sm-6 wpb_column column_container vc_column_container col column_position_relative el_spacing_0px col-overflow-hidden"
                                            data-overlay-color="true"
                                            data-padding-pos="all"
                                            data-has-bg-color="false"
                                            data-bg-color=""
                                            data-bg-opacity="1"
                                            data-animation=""
                                            data-delay="0"
                                        >
                                            <div class="vc_column-inner">
                                                <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                                    <div class="column-bg-overlay"></div>
                                                    <div class="column-overlay-layer" style=""></div>
                                                </div>
                                                <div class="wpb_wrapper">
                                                    <div id="fws_6517a2cd901a1" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row" style="">
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                style=""
                                                                class="vc_col-sm-12 phone-img wpb_column column_container vc_column_container col child_column col-overflow-hidden instance-26"
                                                                data-using-bg="true"
                                                                data-border-radius="20px"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="true"
                                                                data-bg-color="#d3dbe1"
                                                                data-bg-opacity="1"
                                                                data-animation=""
                                                                data-delay="0"
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none"><div class="column-bg-overlay" style="opacity: 1; background-color: #d3dbe1;"></div></div>
                                                                    <div class="wpb_wrapper" data-scroll-animation-movement="transform_y">
                                                                        <div
                                                                            class="nectar-animated-shape width_desktop_50vw width_tablet_85vw position_desktop_absolute top_position_desktop_0px right_position_desktop_0px translate_y_desktop_-50pct translate_x_desktop_50pct z_index_-1"
                                                                        >
                                                                            <div
                                                                                class="nectar-animated-shape__inner_wrap nectar-disable-mobile-animation"
                                                                                data-nectar-waypoint-el-offset="80%"
                                                                                data-easing="easeInOutCubic"
                                                                                data-animation="none"
                                                                            >
                                                                                <div class="nectar-animated-shape__inner">
                                                                                    <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 100 100"
                                                                                        width="100"
                                                                                        height="100"
                                                                                        preserveAspectRatio="xMidYMid meet"
                                                                                        style="width: 100%; height: 100%; overflow: hidden;"
                                                                                    >
                                                                                        <circle cx="50" cy="50" r="50" fill="rgba(0,0,0,0.11)"></circle>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="img-with-aniamtion-wrap center nectar-el-parallax-scroll custom-width-60pct"
                                                                            data-max-width="custom"
                                                                            data-max-width-mobile="default"
                                                                            data-shadow="custom"
                                                                            data-animation="none"
                                                                            style="margin-top: 14%; margin-bottom: -12%;"
                                                                            data-scroll-animation="true"
                                                                            data-scroll-animation-movement="transform_y"
                                                                            data-scroll-animation-mobile="true"
                                                                            data-scroll-animation-intensity=".7"
                                                                        >
                                                                            <div class="inner">
                                                                                <div class="hover-wrap" style="filter: drop-shadow(30px 60px 60px rgba(0, 0, 0, 0.25));">
                                                                                    <div class="hover-wrap-inner">
                                                                                        <img
                                                                                            class="img-with-animation skip-lazy nectar-lazy"
                                                                                            data-delay="0"
                                                                                            height="961"
                                                                                            width="652"
                                                                                            data-animation="none"
                                                                                            data-nectar-img-src="./image/saas-phone.webp"
                                                                                            src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20652%20961&#39;%2F%3E"
                                                                                            alt=""
                                                                                            data-nectar-img-srcset="./image/saas-phone-2.webp 652w, ./image/saas-phone-204x300.png 204w"
                                                                                            sizes="(max-width: 652px) 100vw, 652px"
                                                                                            style="height: 442.178px; width: 300px;"
                                                                                        />
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    id="fws_6517a2cd90810"
                                    data-column-margin="default"
                                    data-midnight="dark"
                                    data-top-percent="7%"
                                    class="wpb_row vc_row-fluid vc_row full-width-content vc_row-o-equal-height vc_row-flex vc_row-o-content-middle right_padding_7pct left_padding_7pct top_padding_tablet_7pct bottom_padding_tablet_10pct"
                                    style="padding-top: calc(100vw * 0.07); padding-bottom: 0px;"
                                >
                                    <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                        <div class="inner-wrap row-bg-layer"><div class="row-bg viewport-desktop" style=""></div></div>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 dark left">
                                        <div
                                            class="vc_col-sm-6 wpb_column column_container vc_column_container col no-extra-padding column_position_relative el_spacing_0px inherit_tablet inherit_phone"
                                            data-overlay-color="true"
                                            data-padding-pos="all"
                                            data-has-bg-color="false"
                                            data-bg-color=""
                                            data-bg-opacity="1"
                                            data-animation=""
                                            data-delay="0"
                                        >
                                            <div class="vc_column-inner">
                                                <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                                    <div class="column-bg-overlay"></div>
                                                    <div class="column-overlay-layer" style=""></div>
                                                </div>
                                                <div class="wpb_wrapper">
                                                    <div id="fws_6517a2cd90a60" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row" style="">
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                style=""
                                                                class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column bg_img_front top_padding_desktop_60vh top_padding_tablet_50vh top_padding_phone_40vh"
                                                                data-using-bg="true"
                                                                data-border-radius="20px"
                                                                data-bg-cover="true"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation=""
                                                                data-delay="0"
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div
                                                                        class="column-image-bg-wrap column-bg-layer viewport-desktop nectar-parallax-enabled"
                                                                        data-n-parallax-bg="true"
                                                                        data-parallax-speed="minimum"
                                                                        data-bg-pos="center center"
                                                                        data-bg-animation="none"
                                                                        data-bg-overlay="false"
                                                                    >
                                                                        <div class="inner-wrap">
                                                                            <div
                                                                                class="column-image-bg parallax-layer translate"
                                                                                style="height: 411.198px; will-change: auto;"
                                                                                data-nectar-img-src="./image/surface-HVrda0rOHqk-unsplash-1.jpeg"
                                                                            ></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wpb_wrapper"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        id="fws_6517a2cd90c8d"
                                                        data-midnight=""
                                                        data-column-margin="default"
                                                        class="wpb_row vc_row-fluid vc_row inner_row row_position_absolute bottom_position_desktop_30px right_position_desktop_30px"
                                                        style="z-index: 500;"
                                                    >
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                style=""
                                                                class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding inherit_tablet inherit_phone col-overflow-hidden nectar-mask-reveal nectar-mask-reveal-right_bottom-dir nectar-mask-reveal-circle-shape instance-29"
                                                                data-using-bg="true"
                                                                data-border-radius="15px"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="true"
                                                                data-bg-color="#ffffff"
                                                                data-bg-opacity="1"
                                                                data-animation="mask-reveal"
                                                                data-delay="0"
                                                                data-animation-offset="95%"
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none"><div class="column-bg-overlay" style="opacity: 1; background-color: #ffffff;"></div></div>
                                                                    <div class="wpb_wrapper">
                                                                        <div class="nectar-lottie-wrap nectar-waypoint-el nectar-fade-in width_desktop_18vw width_tablet_36vw alignment_center">
                                                                            <div
                                                                                class="nectar-lottie"
                                                                                data-lottie-settings='{"trigger_type":"play","mobile_func":"default","trigger_offset":"0.00,100.00","frame_constraint":"0.00,100.00","width_desktop":"18vw","width_tablet":"36vw","alignment":"center","preserve_aspect_ratio":"xMidYMid meet","css_animation":"fade-in","preserveaspectratio":"center","json_url":"https:\/\/assets5.lottiefiles.com\/packages\/lf20_yvkok161.json","trigger_delay":"300","box_shadow_method":"filter"}'
                                                                            ></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="vc_col-sm-6 wpb_column column_container vc_column_container col column_position_static el_spacing_30px left_padding_desktop_7vw"
                                            data-padding-pos="all"
                                            data-has-bg-color="false"
                                            data-bg-color=""
                                            data-bg-opacity="1"
                                            data-animation=""
                                            data-delay="0"
                                        >
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div id="fws_6517a2cd91077" data-midnight="" data-column-margin="none" class="wpb_row vc_row-fluid vc_row inner_row right_padding_5pct top_padding_tablet_8pct" style="">
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column no-extra-padding inherit_tablet inherit_phone"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation=""
                                                                data-delay="0"
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="nectar-split-heading font_size_3vw font_line_height_1-3 markup-generated"
                                                                            data-align="default"
                                                                            data-m-align="inherit"
                                                                            data-text-effect="default"
                                                                            data-animation-type="line-reveal-by-space"
                                                                            data-animation-delay="0"
                                                                            data-animation-offset=""
                                                                            data-m-rm-animation="true"
                                                                            data-stagger="true"
                                                                            data-custom-font-size="true"
                                                                            style="font-size: 3vw; line-height: 3.3vw;"
                                                                        >
                                                                            <h2 style="color: #000000;">
                                                                                <span><span class="inner">Seriously</span></span> <span><span class="inner">improve</span></span> <span><span class="inner">your</span></span>
                                                                                <span><span class="inner">lead</span></span> <span><span class="inner">conversion</span></span> <span><span class="inner">rate</span></span>
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fws_6517a2cd9139c" data-midnight="" data-column-margin="none" class="wpb_row vc_row-fluid vc_row inner_row right_padding_10pct" style="">
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding inherit_tablet inherit_phone mobile-disable-entrance-animation"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation="fade-in"
                                                                data-delay="0"
                                                                data-animation-easing="easeOutQuad"
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="nectar-fancy-ul font_size_min_16px font_size_desktop_1-1vw font_line_height_1-6"
                                                                            data-list-icon="icon-salient-check"
                                                                            data-animation="false"
                                                                            data-animation-delay="0"
                                                                            data-color="accent-color"
                                                                            data-spacing="10px"
                                                                            data-alignment="left"
                                                                        >
                                                                            <ul>
                                                                                <li><i class="icon-default-style icon-salient-check accent-color"></i> Intuitive customer analytics</li>
                                                                                <li><i class="icon-default-style icon-salient-check accent-color"></i> Advertisement conversion events</li>
                                                                                <li><i class="icon-default-style icon-salient-check accent-color"></i> Automation of sales/marketing</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div
                                                                            class="nectar-cta alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit font_size_desktop_1-1vw font_size_tablet_16px"
                                                                            data-color="default"
                                                                            data-using-bg="false"
                                                                            data-display="block"
                                                                            data-style="underline"
                                                                            data-alignment="left"
                                                                            data-text-color="custom"
                                                                        >
                                                                            <span style="color: #ff6b3d;" class="nectar-button-type">
                                                                                <span class="link_wrap" style="padding-top: 4px; padding-bottom: 4px;">
                                                                                    <a target="_blank" class="link_text" style="border-color: #ff6b3d;" role="button" href="#">Start your trial</a>
                                                                                </span>
                                                                            </span>
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
                                </div>
                                <div
                                    id="fws_6517a2cd91944"
                                    data-column-margin="default"
                                    data-midnight="dark"
                                    data-top-percent="12%"
                                    data-bottom-percent="8%"
                                    class="wpb_row vc_row-fluid vc_row full-width-content vc_row-o-equal-height vc_row-flex vc_row-o-content-top right_padding_7pct left_padding_7pct top_padding_tablet_10pct"
                                    style="padding-top: calc(100vw * 0.12); padding-bottom: calc(100vw * 0.08);"
                                >
                                    <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                        <div class="inner-wrap row-bg-layer"><div class="row-bg viewport-desktop" style=""></div></div>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 dark left">
                                        <div
                                            class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding inherit_tablet inherit_phone"
                                            data-padding-pos="all"
                                            data-has-bg-color="false"
                                            data-bg-color=""
                                            data-bg-opacity="1"
                                            data-animation=""
                                            data-delay="0"
                                        >
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div
                                                        id="fws_6517a2cd91d27"
                                                        data-midnight=""
                                                        data-column-margin="default"
                                                        class="wpb_row vc_row-fluid vc_row inner_row right_padding_24pct left_padding_24pct right_padding_phone_12pct left_padding_phone_12pct"
                                                        style="padding-bottom: 3%;"
                                                    >
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column centered-text no-extra-padding inherit_tablet inherit_phone"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation=""
                                                                data-delay="0"
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="nectar-highlighted-text font_size_4vw"
                                                                            data-style="scribble"
                                                                            data-exp="default"
                                                                            data-using-custom-color="false"
                                                                            data-animation-delay="false"
                                                                            data-color=""
                                                                            data-color-gradient=""
                                                                            style=""
                                                                        >
                                                                            <h2>
                                                                                Tailored pricing plans
                                                                                <em>
                                                                                    designed
                                                                                    <svg class="nectar-scribble squiggle-underline-2" role="presentation" viewBox="-320 -70.8161 640.4 59.82" preserveAspectRatio="none">
                                                                                        <path
                                                                                            style="animation-duration: 1.1s;"
                                                                                            d="M-300,-56 C-50,-72 298,-65 300,-59 C332,-53 -239,-36 -255,-27 C-271,-18 -88,-24 91,-20"
                                                                                            stroke="#ffce59"
                                                                                            pathLength="1"
                                                                                            stroke-width="11.111111111111"
                                                                                            fill="none"
                                                                                        ></path>
                                                                                    </svg>
                                                                                </em>
                                                                                for you
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        id="fws_6517a2cd920a2"
                                                        data-midnight=""
                                                        data-column-margin="none"
                                                        class="wpb_row vc_row-fluid vc_row inner_row no-pointer-events row_position_absolute left_position_desktop_50pct rotate_desktop_350deg translate_y_-44px translate_x_170px"
                                                        style=""
                                                    >
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                class="vc_col-sm-12 vc_hidden-xs wpb_column column_container vc_column_container col child_column has-animation no-extra-padding el_spacing_5px inherit_tablet inherit_phone"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation="fade-in"
                                                                data-delay="0"
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="nectar-badge nectar-inherit-italic nectar-display-block text-color-000000 padding-amount-none badge-style-default" data-bg-color-custom="">
                                                                            <div class="nectar-badge__inner">Save 25%</div>
                                                                        </div>
                                                                        <div class="nectar-lottie-wrap width_desktop_40px alignment_left">
                                                                            <div
                                                                                class="nectar-lottie"
                                                                                data-lottie-settings='{"trigger_type":"play","mobile_func":"default","trigger_offset":"8.00,100.00","frame_constraint":"0.00,100.00","speed":"0.9","width_desktop":"40px","alignment":"left","preserve_aspect_ratio":"xMidYMid meet","preserveaspectratio":"center","json_url":"https:\/\/assets2.lottiefiles.com\/packages\/lf20_ddvwtafj.json","box_shadow_method":"filter"}'
                                                                            ></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_content_element" data-interval="0">
                                                        <div
                                                            class="wpb_wrapper tabbed clearfix"
                                                            data-style="toggle_button"
                                                            data-animation="none"
                                                            data-spacing=""
                                                            data-icon-size="24"
                                                            data-full-width-line=""
                                                            data-color-scheme="accent-color"
                                                            data-alignment="left"
                                                        >
                                                            <ul class="wpb_tabs_nav ui-tabs-nav clearfix">
                                                                <li class="tab-item active-tab">
                                                                    <a role="button" href="#tab-1686151524889-5" class="active-tab"><span>Pay Monthly</span></a>
                                                                </li>
                                                                <li class="toggle-button">
                                                                    <span role="button" class="toggle-button-inner nectar-color-accent-color nectar-bg-accent-color"><span class="circle"></span></span>
                                                                </li>
                                                                <li class="tab-item">
                                                                    <a role="button" href="#tab-1686151525010-8"><span>Pay Yearly</span></a>
                                                                </li>
                                                            </ul>
                                                            <div id="tab-pay-monthly" data-tab-icon="" class="wpb_tab ui-tabs-panel wpb_ui-tabs-hide clearfix visible-tab">
                                                                <div id="fws_6517a2cd93695" data-midnight="" data-column-margin="40px" class="wpb_row vc_row-fluid vc_row inner_row vc_row-o-equal-height vc_row-flex" style="">
                                                                    <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                                    <div class="row_col_wrap_12_inner col span_12 left">
                                                                        <div
                                                                            style="color: #ffffff; z-index: 100;"
                                                                            class="vc_col-sm-4 wpb_column column_container vc_column_container col child_column el_spacing_10px col-overflow-hidden left_padding_desktop_40px top_padding_desktop_40px right_padding_desktop_40px bottom_padding_desktop_40px instance-36"
                                                                            data-cfc="true"
                                                                            data-using-bg="true"
                                                                            data-shadow="custom"
                                                                            data-border-radius="15px"
                                                                            data-padding-pos="all"
                                                                            data-has-bg-color="true"
                                                                            data-bg-color="#ff6b3d"
                                                                            data-bg-opacity="1"
                                                                            data-animation=""
                                                                            data-delay="0"
                                                                        >
                                                                            <div class="vc_column-inner" style="box-shadow: 40px 60px 60px -20px rgba(0, 0, 0, 0.175);">
                                                                                <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                                                                    <div class="column-bg-overlay" style="opacity: 1; background-color: #ff6b3d;"></div>
                                                                                </div>
                                                                                <div class="wpb_wrapper">
                                                                                    <div
                                                                                        class="nectar-lottie-wrap width_desktop_150pct height_desktop_150pct alignment_center position_desktop_absolute top_position_desktop_0px left_position_desktop_0px translate_y_desktop_-50pct translate_x_desktop_25pct z_index_-1"
                                                                                    >
                                                                                        <div
                                                                                            class="nectar-lottie"
                                                                                            data-lottie-settings='{"trigger_type":"play","mobile_func":"default","loop":"true","trigger_offset":"0.00,100.00","frame_constraint":"0.00,100.00","speed":"0.2","width_desktop":"150%","height_desktop":"150%","alignment":"center","preserve_aspect_ratio":"xMidYMid meet","position_desktop":"absolute","top_position_desktop":"0","left_position_desktop":"0","translate_y_desktop":"-50%","translate_x_desktop":"25%","preserveaspectratio":"none","json_url":"https:\/\/assets1.lottiefiles.com\/packages\/lf20_w4NUp4.json","zindex":"-1","box_shadow_method":"filter"}'
                                                                                            id="nectar-lottie-1696052543289"
                                                                                        >
                                                                                            <svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 512 512"
                                                                                                width="512"
                                                                                                height="512"
                                                                                                preserveAspectRatio="xMidYMid meet"
                                                                                                style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;"
                                                                                            >
                                                                                                <defs>
                                                                                                    <clippath id="__lottie_element_4"><rect width="512" height="512" x="0" y="0"></rect></clippath>
                                                                                                </defs>
                                                                                                <g clip-path="url(#__lottie_element_4)">
                                                                                                    <g transform="matrix(1,0,0,1,85.5,74.5)" opacity="1" style="display: block;">
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,2.75,90.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,13.75,162.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,2.75,223.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,41.75,254.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,102.75,283.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,155.75,326.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,245.75,320.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,204.75,359.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,306.75,223.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,337.75,162.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,295.75,99.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,282.75,42.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,165.75,33.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,72.75,68.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,101.75,2.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,55.75,143.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,331.25,270.25)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2 C1.1039999723434448,-2 2,-1.1039999723434448 2,0 C2,1.1039999723434448 1.1039999723434448,2 0,2 C-1.1039999723434448,2 -2,1.1039999723434448 -2,0 C-2,-1.1039999723434448 -1.1039999723434448,-2 0,-2z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                    <g transform="matrix(1,0,0,1,256,256)" opacity="0.75" style="display: block;">
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,2.1410000324249268,0.5230000019073486)">
                                                                                                            <path
                                                                                                                stroke-linecap="butt"
                                                                                                                stroke-linejoin="miter"
                                                                                                                fill-opacity="0"
                                                                                                                stroke-miterlimit="4"
                                                                                                                stroke="rgb(235,230,217)"
                                                                                                                stroke-opacity="1"
                                                                                                                stroke-width="1"
                                                                                                                d=" M-169.06100463867188,25.951570510864258 C-163.11500549316406,129.95327758789062 -14.474956512451172,218.24002075195312 60.99042892456055,177.05714416503906 C128.99093627929688,139.94825744628906 154.99266052246094,93.9543228149414 170.47885131835938,35.95271301269531 C185.96505737304688,-22.048860549926758 125.83004760742188,-148.74258422851562 52.99071502685547,-160.2494354248047 C-47.007633209228516,-176.04696655273438 -175.0066375732422,-78.04781341552734 -169.06100463867188,25.951570510864258z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                    <g
                                                                                                        transform="matrix(0.9063078165054321,-0.4226182699203491,0.4226182699203491,0.9063078165054321,256,256)"
                                                                                                        opacity="0.75"
                                                                                                        style="display: block;"
                                                                                                    >
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,2.1410000324249268,0.5230000019073486)">
                                                                                                            <path
                                                                                                                stroke-linecap="butt"
                                                                                                                stroke-linejoin="miter"
                                                                                                                fill-opacity="0"
                                                                                                                stroke-miterlimit="3"
                                                                                                                stroke="rgb(255,255,255)"
                                                                                                                stroke-opacity="0.25"
                                                                                                                stroke-width="1"
                                                                                                                d=" M-169.06100463867188,25.951570510864258 C-163.11500549316406,129.95327758789062 -14.474956512451172,218.24002075195312 60.99042892456055,177.05714416503906 C128.99093627929688,139.94825744628906 154.99266052246094,93.9543228149414 170.47885131835938,35.95271301269531 C185.96505737304688,-22.048860549926758 125.83004760742188,-148.74258422851562 52.99071502685547,-160.2494354248047 C-47.007633209228516,-176.04696655273438 -175.0066375732422,-78.04781341552734 -169.06100463867188,25.951570510864258z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                    <g transform="matrix(1,0,0,1,256,256)" opacity="0.75" style="display: block;">
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,2.1410000324249268,0.5230000019073486)">
                                                                                                            <path
                                                                                                                stroke-linecap="butt"
                                                                                                                stroke-linejoin="miter"
                                                                                                                fill-opacity="0"
                                                                                                                stroke-miterlimit="4"
                                                                                                                stroke="rgb(235,230,217)"
                                                                                                                stroke-opacity="1"
                                                                                                                stroke-width="1"
                                                                                                                d=" M-181.06300354003906,-12.04699993133545 C-180.08399963378906,66.48300170898438 -0.4729999899864197,230.2429962158203 74.99199676513672,189.06100463867188 C142.99200439453125,151.9530029296875 169.86000061035156,63.47600173950195 156.47900390625,-8.04699993133545 C143.09800720214844,-79.56999969482422 69.85900115966797,-164.5229949951172 -15.008000373840332,-168.25 C-99.875,-171.9770050048828 -182.14100646972656,-98.52300262451172 -181.06300354003906,-12.04699993133545z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                    <g transform="matrix(1,0,0,1,256,256)" opacity="0.5" style="display: block;">
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,2.1410000324249268,0.5230000019073486)">
                                                                                                            <path
                                                                                                                stroke-linecap="butt"
                                                                                                                stroke-linejoin="miter"
                                                                                                                fill-opacity="0"
                                                                                                                stroke-miterlimit="4"
                                                                                                                stroke="rgb(235,230,217)"
                                                                                                                stroke-opacity="1"
                                                                                                                stroke-width="1"
                                                                                                                d=" M-193.06300354003906,37.952999114990234 C-181.98500061035156,170.42999267578125 1.5269999504089355,214.2429962158203 76.99199676513672,173.06100463867188 C144.99200439453125,135.9530029296875 197.86000061035156,63.47600173950195 182.47900390625,-38.047000885009766 C167.09800720214844,-139.57000732421875 85.85900115966797,-190.5229949951172 -29.007999420166016,-180.25 C-143.875,-169.9770050048828 -204.14100646972656,-94.52400207519531 -193.06300354003906,37.952999114990234z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                    <g
                                                                                                        transform="matrix(0.9063078165054321,-0.4226182699203491,0.4226182699203491,0.9063078165054321,256,256)"
                                                                                                        opacity="0.75"
                                                                                                        style="display: block;"
                                                                                                    >
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,2.1410000324249268,0.5230000019073486)">
                                                                                                            <path
                                                                                                                stroke-linecap="butt"
                                                                                                                stroke-linejoin="miter"
                                                                                                                fill-opacity="0"
                                                                                                                stroke-miterlimit="3"
                                                                                                                stroke="rgb(235,230,217)"
                                                                                                                stroke-opacity="0.25"
                                                                                                                stroke-width="1"
                                                                                                                d=" M-169.06100463867188,25.951570510864258 C-163.11500549316406,129.95327758789062 -14.474956512451172,218.24002075195312 60.99042892456055,177.05714416503906 C128.99093627929688,139.94825744628906 154.99266052246094,93.9543228149414 170.47885131835938,35.95271301269531 C185.96505737304688,-22.048860549926758 125.83004760742188,-148.74258422851562 52.99071502685547,-160.2494354248047 C-47.007633209228516,-176.04696655273438 -175.0066375732422,-78.04781341552734 -169.06100463867188,25.951570510864258z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                    <g
                                                                                                        transform="matrix(0.9063078165054321,0.4226182699203491,-0.4226182699203491,0.9063078165054321,256,256)"
                                                                                                        opacity="1"
                                                                                                        style="display: block;"
                                                                                                    >
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,2.1410000324249268,0.5230000019073486)">
                                                                                                            <path
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round"
                                                                                                                fill-opacity="0"
                                                                                                                stroke="rgb(235,230,217)"
                                                                                                                stroke-opacity="0.25"
                                                                                                                stroke-width="1"
                                                                                                                d=" M-181.06300354003906,-12.04699993133545 C-180.08399963378906,66.48300170898438 -0.4729999899864197,230.2429962158203 74.99199676513672,189.06100463867188 C142.99200439453125,151.9530029296875 169.86000061035156,63.47600173950195 156.47900390625,-8.04699993133545 C143.09800720214844,-79.56999969482422 69.85900115966797,-164.5229949951172 -15.008000373840332,-168.25 C-99.875,-171.9770050048828 -182.14100646972656,-98.52300262451172 -181.06300354003906,-12.04699993133545z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                    <g
                                                                                                        transform="matrix(0.7169100046157837,0,0,0.7351499795913696,251.71759033203125,275.4610290527344)"
                                                                                                        opacity="0.25"
                                                                                                        style="display: block;"
                                                                                                    >
                                                                                                        <g opacity="1" transform="matrix(0.9836400151252747,0,0,1,6.1479997634887695,-23.851999282836914)">
                                                                                                            <path
                                                                                                                stroke-linecap="butt"
                                                                                                                stroke-linejoin="miter"
                                                                                                                fill-opacity="0"
                                                                                                                stroke-miterlimit="4"
                                                                                                                stroke="rgb(235,230,217)"
                                                                                                                stroke-opacity="1"
                                                                                                                stroke-width="1"
                                                                                                                d=" M0,-186.14849853515625 C102.73535919189453,-186.14849853515625 186.14849853515625,-102.73535919189453 186.14849853515625,0 C186.14849853515625,102.73535919189453 102.73535919189453,186.14849853515625 0,186.14849853515625 C-102.73535919189453,186.14849853515625 -186.14849853515625,102.73535919189453 -186.14849853515625,0 C-186.14849853515625,-102.73535919189453 -102.73535919189453,-186.14849853515625 0,-186.14849853515625z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </svg>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="nectar_icon_wrap" data-style="default" data-padding="0px" data-color="white" style="">
                                                                                        <div class="nectar_icon">
                                                                                            <span class="im-icon-wrap" data-color="white" style="height: 50px; width: 50px;">
                                                                                                <span>
                                                                                                    <svg role="presentation" version="1.1" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32">
                                                                                                        <path
                                                                                                            d="M23.5 31.461h-15c-0.316 0-0.588-0.221-0.652-0.531l-2.5-12c-0.041-0.195 0.008-0.401 0.135-0.557 0.127-0.153 0.317-0.245 0.517-0.245h20c0.2 0 0.391 0.088 0.519 0.245 0.125 0.156 0.175 0.361 0.135 0.557l-2.5 12c-0.065 0.309-0.339 0.531-0.653 0.531zM9.043 30.128h13.916l2.223-10.667h-18.361l2.223 10.667zM24.667 22.128h-17.333c-0.368 0-0.667-0.3-0.667-0.667 0-0.369 0.299-0.667 0.667-0.667h17.333c0.367 0 0.667 0.297 0.667 0.667 0 0.367-0.3 0.667-0.667 0.667zM16 18.795c-0.368 0-0.667-0.3-0.667-0.667v-14.667c0-0.368 0.299-0.667 0.667-0.667s0.667 0.299 0.667 0.667v14.667c0 0.367-0.299 0.667-0.667 0.667zM15.283 16.46v0c-1.988 0-3.672-0.699-4.871-2.023-1.235-1.361-1.856-3.341-1.664-5.295 0.035-0.355 0.347-0.649 0.697-0.6 2.472 0.131 4.537 1.016 5.813 2.495 1.096 1.271 1.58 2.925 1.399 4.788-0.031 0.319-0.285 0.575-0.607 0.599-0.263 0.025-0.519 0.036-0.768 0.036zM10.048 9.932c0.019 1.361 0.503 2.676 1.352 3.609 0.94 1.036 2.281 1.584 3.883 1.584v0c0.027 0 0.053 0 0.080 0 0.008-1.253-0.371-2.359-1.112-3.217-0.925-1.072-2.401-1.761-4.203-1.976zM16.776 12.46c-0.249 0-0.505-0.011-0.771-0.033-0.32-0.028-0.576-0.28-0.607-0.597-0.18-1.861 0.304-3.519 1.399-4.789 1.279-1.479 3.341-2.364 5.813-2.492 0.356-0.045 0.663 0.248 0.696 0.597 0.193 1.953-0.428 3.932-1.664 5.296-1.196 1.32-2.879 2.019-4.867 2.019zM16.695 11.127c1.667-0.028 3.008-0.531 3.964-1.584 0.849-0.936 1.333-2.251 1.352-3.609-1.801 0.211-3.277 0.904-4.203 1.973-0.74 0.864-1.12 1.967-1.113 3.22zM15.283 8.46v0c-1.988 0-3.672-0.699-4.871-2.023-1.235-1.361-1.856-3.341-1.664-5.295 0.035-0.355 0.347-0.637 0.697-0.6 2.472 0.131 4.537 1.016 5.813 2.495 1.096 1.271 1.58 2.925 1.399 4.788-0.031 0.319-0.285 0.575-0.607 0.599-0.263 0.025-0.519 0.036-0.768 0.036zM10.048 1.932c0.019 1.361 0.503 2.676 1.352 3.609 0.94 1.036 2.281 1.584 3.883 1.584v0c0.027 0 0.053 0 0.080 0 0.008-1.253-0.371-2.359-1.112-3.217-0.925-1.072-2.401-1.761-4.203-1.976z"
                                                                                                        ></path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="nectar-responsive-text font_size_desktop_2vw font_size_tablet_3vw font_size_phone_16px font_line_height_1px nectar-link-underline-effect">
                                                                                        <p>Basic</p>
                                                                                    </div>
                                                                                    <div class="nectar-responsive-text font_size_desktop_4vw font_size_tablet_7vw font_line_height_1px nectar-link-underline-effect"><p>Free</p></div>
                                                                                    <div class="divider-wrap" data-alignment="default"><div style="height: 15px;" class="divider"></div></div>
                                                                                    <div
                                                                                        class="nectar-fancy-ul font_size_min_16px font_size_desktop_1-1vw"
                                                                                        data-list-icon="dot"
                                                                                        data-animation="false"
                                                                                        data-animation-delay="0"
                                                                                        data-spacing="10px"
                                                                                        data-alignment="left"
                                                                                    >
                                                                                        <ul>
                                                                                            <li>Live chat widget</li>
                                                                                            <li>Email marketing</li>
                                                                                            <li>Custom Forms</li>
                                                                                            <li>Traffic analytics</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="divider-wrap" data-alignment="default"><div style="height: 90px;" class="divider"></div></div>
                                                                                    <div
                                                                                        class="nectar-cta alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit position_desktop_absolute right_position_desktop_40px left_position_desktop_40px bottom_position_desktop_40px"
                                                                                        data-color="white"
                                                                                        data-using-bg="true"
                                                                                        data-style="text-reveal-wave"
                                                                                        data-display="block"
                                                                                        data-alignment="center"
                                                                                        data-text-color="custom"
                                                                                    >
                                                                                        <span style="color: #000000;" class="nectar-button-type">
                                                                                            <span class="link_wrap" style="padding-top: 0.8em; padding-right: 40px; padding-bottom: 0.8em; padding-left: 40px;">
                                                                                                <a class="link_text" role="button" href="#">
                                                                                                    <span class="text">
                                                                                                        <span class="char" style="animation-delay: 0s;">G</span><span class="char" style="animation-delay: 0.015s;">e</span>
                                                                                                        <span class="char" style="animation-delay: 0.03s;">t</span> <span class="char" style="animation-delay: 0.045s;">S</span>
                                                                                                        <span class="char" style="animation-delay: 0.06s;">t</span><span class="char" style="animation-delay: 0.075s;">a</span>
                                                                                                        <span class="char" style="animation-delay: 0.09s;">r</span><span class="char" style="animation-delay: 0.105s;">t</span>
                                                                                                        <span class="char" style="animation-delay: 0.12s;">e</span><span class="char" style="animation-delay: 0.135s;">d</span>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            style="color: #000000;"
                                                                            class="vc_col-sm-4 wpb_column column_container vc_column_container col child_column el_spacing_10px left_padding_desktop_40px top_padding_desktop_40px right_padding_desktop_40px bottom_padding_desktop_40px instance-37"
                                                                            data-cfc="true"
                                                                            data-using-bg="true"
                                                                            data-border-radius="15px"
                                                                            data-padding-pos="all"
                                                                            data-has-bg-color="true"
                                                                            data-bg-color="#ffffff"
                                                                            data-bg-opacity="1"
                                                                            data-animation=""
                                                                            data-delay="0"
                                                                        >
                                                                            <div class="vc_column-inner">
                                                                                <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                                                                    <div class="column-bg-overlay" style="opacity: 1; background-color: #ffffff;"></div>
                                                                                </div>
                                                                                <div class="wpb_wrapper">
                                                                                    <div class="nectar_icon_wrap" data-style="default" data-padding="0px" data-color="black" style="">
                                                                                        <div class="nectar_icon">
                                                                                            <span class="im-icon-wrap" data-color="black" style="height: 50px; width: 50px;">
                                                                                                <span>
                                                                                                    <svg role="presentation" version="1.1" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32">
                                                                                                        <path
                                                                                                            d="M14.253 30.18c-0.015 0-0.029 0-0.047-0.003-3.431-0.237-6.265-1.631-8.425-4.143-3.521-4.1-5.069-11.008-4.363-19.451 0.029-0.361 0.321-0.66 0.703-0.609 4.747 0.277 9.948 3.045 13.576 7.224 3.303 3.801 4.924 8.252 4.572 12.539-0.031 0.364-0.339 0.628-0.72 0.609-0.367-0.031-0.64-0.355-0.611-0.719 0.323-3.924-1.187-8.028-4.249-11.556-3.232-3.724-7.772-6.251-11.995-6.712-0.532 7.676 0.947 14.14 4.095 17.807 1.917 2.232 4.444 3.472 7.505 3.68 0.367 0.027 0.644 0.344 0.62 0.711-0.019 0.352-0.312 0.623-0.661 0.623zM17.748 31.361c-0.305 0-0.58-0.211-0.649-0.521-1.608-7.159-9.288-16.467-12.544-19.611-0.265-0.253-0.273-0.675-0.019-0.941 0.256-0.264 0.68-0.271 0.943-0.019 3.347 3.236 11.245 12.827 12.919 20.277 0.081 0.361-0.145 0.713-0.504 0.8-0.048 0.011-0.097 0.015-0.145 0.015zM19.671 24.289c-0.309 0-0.585-0.216-0.652-0.531-0.076-0.36 0.156-0.713 0.516-0.789 10.043-2.101 10.111-15.788 9.765-20.943-5.8 0.629-11.848 5.075-14.577 10.795-0.159 0.333-0.559 0.472-0.889 0.315-0.332-0.159-0.473-0.556-0.315-0.888 3.028-6.348 9.907-11.229 16.356-11.607 0.355-0.035 0.675 0.251 0.703 0.609 1.072 12.781-2.955 21.388-10.771 23.025-0.047 0.008-0.091 0.013-0.136 0.013zM17.747 18.057c-0.115 0-0.231-0.028-0.336-0.091-0.317-0.188-0.424-0.593-0.237-0.915 3.067-5.233 7.295-10.143 9.389-12.169 0.267-0.252 0.688-0.249 0.943 0.019 0.255 0.261 0.249 0.688-0.016 0.943-2.041 1.972-6.167 6.765-9.167 11.887-0.125 0.207-0.348 0.327-0.576 0.327z"
                                                                                                        ></path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="nectar-responsive-text font_size_desktop_2vw font_size_tablet_3vw font_size_phone_16px font_line_height_1px nectar-link-underline-effect">
                                                                                        <p>Premium</p>
                                                                                    </div>
                                                                                    <div class="nectar-price-typography nectar-inherit-h3 font_size_desktop_4vw font_size_tablet_7vw font_line_height_1-5">
                                                                                        <span class="before-text" style="font-size: 0.4em;">$</span><span class="price-text">29</span>
                                                                                        <span class="after-text" style="font-size: 0.4em;">/ month</span>
                                                                                    </div>
                                                                                    <div class="divider-wrap" data-alignment="default"><div style="height: 15px;" class="divider"></div></div>
                                                                                    <div
                                                                                        class="nectar-fancy-ul font_size_min_16px font_size_desktop_1-1vw"
                                                                                        data-list-icon="dot"
                                                                                        data-animation="false"
                                                                                        data-animation-delay="0"
                                                                                        data-spacing="10px"
                                                                                        data-alignment="left"
                                                                                    >
                                                                                        <ul>
                                                                                            <li>Everything in basic</li>
                                                                                            <li>Marketing automation</li>
                                                                                            <li>Advanced chatbot</li>
                                                                                            <li>Campaign management</li>
                                                                                            <li>Collaboration tools</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="divider-wrap" data-alignment="default"><div style="height: 90px;" class="divider"></div></div>
                                                                                    <div
                                                                                        class="nectar-cta alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit position_desktop_absolute right_position_desktop_40px left_position_desktop_40px bottom_position_desktop_40px"
                                                                                        data-color="accent-color"
                                                                                        data-using-bg="true"
                                                                                        data-style="text-reveal-wave"
                                                                                        data-display="block"
                                                                                        data-alignment="center"
                                                                                        data-text-color="custom"
                                                                                    >
                                                                                        <span style="color: #ffffff;" class="nectar-button-type">
                                                                                            <span class="link_wrap" style="padding-top: 0.8em; padding-right: 40px; padding-bottom: 0.8em; padding-left: 40px;">
                                                                                                <a class="link_text" role="button" href="#">
                                                                                                    <span class="text">
                                                                                                        <span class="char" style="animation-delay: 0s;">G</span><span class="char" style="animation-delay: 0.015s;">e</span>
                                                                                                        <span class="char" style="animation-delay: 0.03s;">t</span> <span class="char" style="animation-delay: 0.045s;">S</span>
                                                                                                        <span class="char" style="animation-delay: 0.06s;">t</span><span class="char" style="animation-delay: 0.075s;">a</span>
                                                                                                        <span class="char" style="animation-delay: 0.09s;">r</span><span class="char" style="animation-delay: 0.105s;">t</span>
                                                                                                        <span class="char" style="animation-delay: 0.12s;">e</span><span class="char" style="animation-delay: 0.135s;">d</span>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            style=""
                                                                            class="vc_col-sm-4 wpb_column column_container vc_column_container col child_column el_spacing_10px left_padding_desktop_40px top_padding_desktop_40px right_padding_desktop_40px bottom_padding_desktop_40px instance-38"
                                                                            data-using-bg="true"
                                                                            data-border-radius="15px"
                                                                            data-padding-pos="all"
                                                                            data-has-bg-color="true"
                                                                            data-bg-color="#ffffff"
                                                                            data-bg-opacity="1"
                                                                            data-animation=""
                                                                            data-delay="0"
                                                                        >
                                                                            <div class="vc_column-inner">
                                                                                <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                                                                    <div class="column-bg-overlay" style="opacity: 1; background-color: #ffffff;"></div>
                                                                                </div>
                                                                                <div class="wpb_wrapper">
                                                                                    <div class="nectar_icon_wrap" data-style="default" data-padding="0px" data-color="black" style="">
                                                                                        <div class="nectar_icon">
                                                                                            <span class="im-icon-wrap" data-color="black" style="height: 50px; width: 50px;">
                                                                                                <span>
                                                                                                    <svg role="presentation" version="1.1" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32">
                                                                                                        <path
                                                                                                            d="M23.5 31.769h-15c-0.316 0-0.588-0.221-0.652-0.531l-2.5-12c-0.041-0.195 0.008-0.4 0.135-0.556s0.317-0.247 0.517-0.247h20c0.2 0 0.391 0.089 0.519 0.247 0.125 0.156 0.175 0.361 0.135 0.556l-2.5 12c-0.065 0.309-0.339 0.531-0.653 0.531zM9.043 30.436h13.916l2.223-10.667h-18.361l2.223 10.667zM24.667 23.769h-17.333c-0.368 0-0.667-0.299-0.667-0.667s0.299-0.667 0.667-0.667h17.333c0.367 0 0.667 0.299 0.667 0.667s-0.3 0.667-0.667 0.667zM15.333 9.103h1.333v9.333h-1.333v-9.333zM15.464 19.436c-1.556 0-2.877-0.549-3.819-1.588-0.968-1.067-1.455-2.616-1.305-4.14 0.035-0.357 0.353-0.639 0.697-0.6 1.923 0.099 3.531 0.793 4.529 1.951 0.861 1 1.241 2.301 1.1 3.755-0.031 0.319-0.285 0.573-0.607 0.6-0.204 0.015-0.403 0.023-0.596 0.023zM11.653 14.503c0.052 0.925 0.399 1.809 0.979 2.449 0.663 0.732 1.605 1.131 2.729 1.149-0.023-0.851-0.292-1.584-0.805-2.176-0.643-0.747-1.659-1.241-2.903-1.423zM15.984 10.157c-1.747 0-3.167-1.42-3.167-3.167s1.42-3.167 3.167-3.167c1.747 0 3.167 1.42 3.167 3.167s-1.42 3.167-3.167 3.167zM15.984 5.157c-1.011 0-1.833 0.823-1.833 1.833s0.823 1.833 1.833 1.833c1.011 0 1.833-0.823 1.833-1.833s-0.821-1.833-1.833-1.833zM19.576 3.496c-0.101 0-0.203-0.023-0.3-0.072-0.329-0.165-0.461-0.565-0.297-0.895 0.167-0.329 0.033-0.735-0.295-0.9-0.331-0.163-0.732-0.028-0.896 0.299-0.167 0.329-0.567 0.459-0.895 0.296-0.329-0.165-0.461-0.567-0.295-0.895 0.496-0.985 1.699-1.381 2.685-0.887s1.383 1.7 0.887 2.687c-0.117 0.232-0.352 0.367-0.595 0.367zM21.459 8.155c-0.323 0-0.607-0.236-0.659-0.564-0.055-0.364 0.195-0.704 0.557-0.761 0.175-0.028 0.331-0.121 0.435-0.265 0.105-0.14 0.148-0.316 0.12-0.495-0.055-0.361-0.399-0.607-0.763-0.557-0.363 0.060-0.703-0.193-0.759-0.557-0.056-0.361 0.195-0.701 0.557-0.757 1.087-0.168 2.113 0.581 2.283 1.669 0.169 1.087-0.581 2.115-1.669 2.284-0.035 0.001-0.069 0.004-0.103 0.004zM19.421 13.072c-0.057 0-0.115-0.003-0.175-0.008-0.531-0.044-1.016-0.296-1.36-0.703-0.237-0.281-0.2-0.701 0.081-0.939 0.281-0.243 0.701-0.201 0.94 0.083 0.115 0.139 0.276 0.219 0.453 0.237 0.177 0.012 0.351-0.039 0.487-0.155 0.279-0.24 0.315-0.657 0.079-0.939s-0.2-0.701 0.081-0.94c0.281-0.236 0.703-0.199 0.94 0.081 0.711 0.844 0.603 2.107-0.243 2.817-0.361 0.3-0.812 0.464-1.284 0.464zM10.655 9.221c-1.063 0-1.951-0.841-1.997-1.915-0.023-0.533 0.164-1.044 0.525-1.439 0.361-0.393 0.855-0.623 1.389-0.645 0.353 0.023 0.679 0.269 0.695 0.639 0.016 0.365-0.271 0.68-0.639 0.695-0.177 0.007-0.341 0.084-0.463 0.215s-0.183 0.301-0.175 0.48c0.016 0.364 0.344 0.687 0.695 0.637 0.336 0.028 0.679 0.269 0.695 0.639 0.016 0.367-0.269 0.68-0.639 0.695-0.029-0.001-0.057 0-0.087 0zM11.916 3.963c-0.216 0-0.427-0.101-0.555-0.297-0.297-0.444-0.403-0.973-0.299-1.501 0.105-0.524 0.407-0.972 0.852-1.272 0.444-0.296 0.976-0.405 1.501-0.297 0.524 0.104 0.976 0.408 1.272 0.852 0.204 0.307 0.121 0.721-0.185 0.924-0.305 0.199-0.721 0.121-0.924-0.185-0.099-0.148-0.249-0.251-0.424-0.285-0.171-0.031-0.352 0-0.5 0.099s-0.249 0.252-0.284 0.424c-0.035 0.175 0 0.352 0.099 0.5 0.205 0.305 0.123 0.72-0.184 0.921-0.115 0.081-0.243 0.119-0.369 0.119z"
                                                                                                        ></path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="nectar-responsive-text font_size_desktop_2vw font_size_tablet_3vw font_size_phone_16px font_line_height_1px nectar-link-underline-effect">
                                                                                        <p>Platinum</p>
                                                                                    </div>
                                                                                    <div class="nectar-price-typography nectar-inherit-h3 font_size_desktop_4vw font_size_tablet_7vw font_line_height_1-5">
                                                                                        <span class="before-text" style="font-size: 0.4em;">$</span><span class="price-text">59</span>
                                                                                        <span class="after-text" style="font-size: 0.4em;">/ month</span>
                                                                                    </div>
                                                                                    <div class="divider-wrap" data-alignment="default"><div style="height: 15px;" class="divider"></div></div>
                                                                                    <div
                                                                                        class="nectar-fancy-ul font_size_min_16px font_size_desktop_1-1vw"
                                                                                        data-list-icon="dot"
                                                                                        data-animation="false"
                                                                                        data-animation-delay="0"
                                                                                        data-spacing="10px"
                                                                                        data-alignment="left"
                                                                                    >
                                                                                        <ul>
                                                                                            <li>Everything in premium</li>
                                                                                            <li>A/B testing sanbox</li>
                                                                                            <li>Custom permissions</li>
                                                                                            <li>Social media automation</li>
                                                                                            <li>Sales automation tools</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="divider-wrap" data-alignment="default"><div style="height: 90px;" class="divider"></div></div>
                                                                                    <div
                                                                                        class="nectar-cta alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit position_desktop_absolute right_position_desktop_40px left_position_desktop_40px bottom_position_desktop_40px"
                                                                                        data-color="accent-color"
                                                                                        data-using-bg="true"
                                                                                        data-style="text-reveal-wave"
                                                                                        data-display="block"
                                                                                        data-alignment="center"
                                                                                        data-text-color="custom"
                                                                                    >
                                                                                        <span style="color: #ffffff;" class="nectar-button-type">
                                                                                            <span class="link_wrap" style="padding-top: 0.8em; padding-right: 40px; padding-bottom: 0.8em; padding-left: 40px;">
                                                                                                <a class="link_text" role="button" href="#">
                                                                                                    <span class="text">
                                                                                                        <span class="char" style="animation-delay: 0s;">G</span><span class="char" style="animation-delay: 0.015s;">e</span>
                                                                                                        <span class="char" style="animation-delay: 0.03s;">t</span> <span class="char" style="animation-delay: 0.045s;">S</span>
                                                                                                        <span class="char" style="animation-delay: 0.06s;">t</span><span class="char" style="animation-delay: 0.075s;">a</span>
                                                                                                        <span class="char" style="animation-delay: 0.09s;">r</span><span class="char" style="animation-delay: 0.105s;">t</span>
                                                                                                        <span class="char" style="animation-delay: 0.12s;">e</span><span class="char" style="animation-delay: 0.135s;">d</span>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="tab-pay-yearly" data-tab-icon="" class="wpb_tab ui-tabs-panel wpb_ui-tabs-hide clearfix">
                                                                <div id="fws_6517a2cd97432" data-midnight="" data-column-margin="40px" class="wpb_row vc_row-fluid vc_row inner_row vc_row-o-equal-height vc_row-flex" style="">
                                                                    <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                                    <div class="row_col_wrap_12_inner col span_12 left">
                                                                        <div
                                                                            style="color: #ffffff; z-index: 100;"
                                                                            class="vc_col-sm-4 wpb_column column_container vc_column_container col child_column el_spacing_10px col-overflow-hidden left_padding_desktop_40px top_padding_desktop_40px right_padding_desktop_40px bottom_padding_desktop_40px instance-39"
                                                                            data-cfc="true"
                                                                            data-using-bg="true"
                                                                            data-shadow="custom"
                                                                            data-border-radius="15px"
                                                                            data-padding-pos="all"
                                                                            data-has-bg-color="true"
                                                                            data-bg-color="#ff6b3d"
                                                                            data-bg-opacity="1"
                                                                            data-animation=""
                                                                            data-delay="0"
                                                                        >
                                                                            <div class="vc_column-inner" style="box-shadow: 40px 60px 60px -20px rgba(0, 0, 0, 0.175);">
                                                                                <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                                                                    <div class="column-bg-overlay" style="opacity: 1; background-color: #ff6b3d;"></div>
                                                                                </div>
                                                                                <div class="wpb_wrapper">
                                                                                    <div
                                                                                        class="nectar-lottie-wrap width_desktop_150pct height_desktop_150pct alignment_center position_desktop_absolute top_position_desktop_0px left_position_desktop_0px translate_y_desktop_-50pct translate_x_desktop_25pct z_index_-1"
                                                                                    >
                                                                                        <div
                                                                                            class="nectar-lottie"
                                                                                            data-lottie-settings='{"trigger_type":"play","mobile_func":"default","loop":"true","trigger_offset":"0.00,100.00","frame_constraint":"0.00,100.00","speed":"0.2","width_desktop":"150%","height_desktop":"150%","alignment":"center","preserve_aspect_ratio":"xMidYMid meet","position_desktop":"absolute","top_position_desktop":"0","left_position_desktop":"0","translate_y_desktop":"-50%","translate_x_desktop":"25%","preserveaspectratio":"none","json_url":"https:\/\/assets1.lottiefiles.com\/packages\/lf20_w4NUp4.json","zindex":"-1","box_shadow_method":"filter"}'
                                                                                            id="nectar-lottie-1696052543292"
                                                                                        >
                                                                                            <svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 512 512"
                                                                                                width="512"
                                                                                                height="512"
                                                                                                preserveAspectRatio="xMidYMid meet"
                                                                                                style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;"
                                                                                            >
                                                                                                <defs>
                                                                                                    <clippath id="__lottie_element_29"><rect width="512" height="512" x="0" y="0"></rect></clippath>
                                                                                                </defs>
                                                                                                <g clip-path="url(#__lottie_element_29)">
                                                                                                    <g transform="matrix(1,0,0,1,85.5,74.5)" opacity="1" style="display: block;">
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,2.75,90.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,13.75,162.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,2.75,223.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,41.75,254.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,102.75,283.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,155.75,326.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,245.75,320.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,204.75,359.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,306.75,223.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,337.75,162.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,295.75,99.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,282.75,42.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,165.75,33.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,72.75,68.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,101.75,2.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,55.75,143.75)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,331.25,270.25)">
                                                                                                            <path
                                                                                                                fill="rgb(255,255,255)"
                                                                                                                fill-opacity="1"
                                                                                                                d=" M0,-2 C1.1039999723434448,-2 2,-1.1039999723434448 2,0 C2,1.1039999723434448 1.1039999723434448,2 0,2 C-1.1039999723434448,2 -2,1.1039999723434448 -2,0 C-2,-1.1039999723434448 -1.1039999723434448,-2 0,-2z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                    <g transform="matrix(1,0,0,1,256,256)" opacity="0.75" style="display: block;">
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,2.1410000324249268,0.5230000019073486)">
                                                                                                            <path
                                                                                                                stroke-linecap="butt"
                                                                                                                stroke-linejoin="miter"
                                                                                                                fill-opacity="0"
                                                                                                                stroke-miterlimit="4"
                                                                                                                stroke="rgb(235,230,217)"
                                                                                                                stroke-opacity="1"
                                                                                                                stroke-width="1"
                                                                                                                d=" M-169.06100463867188,25.951570510864258 C-163.11500549316406,129.95327758789062 -14.474956512451172,218.24002075195312 60.99042892456055,177.05714416503906 C128.99093627929688,139.94825744628906 154.99266052246094,93.9543228149414 170.47885131835938,35.95271301269531 C185.96505737304688,-22.048860549926758 125.83004760742188,-148.74258422851562 52.99071502685547,-160.2494354248047 C-47.007633209228516,-176.04696655273438 -175.0066375732422,-78.04781341552734 -169.06100463867188,25.951570510864258z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                    <g
                                                                                                        transform="matrix(0.9063078165054321,-0.4226182699203491,0.4226182699203491,0.9063078165054321,256,256)"
                                                                                                        opacity="0.75"
                                                                                                        style="display: block;"
                                                                                                    >
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,2.1410000324249268,0.5230000019073486)">
                                                                                                            <path
                                                                                                                stroke-linecap="butt"
                                                                                                                stroke-linejoin="miter"
                                                                                                                fill-opacity="0"
                                                                                                                stroke-miterlimit="3"
                                                                                                                stroke="rgb(255,255,255)"
                                                                                                                stroke-opacity="0.25"
                                                                                                                stroke-width="1"
                                                                                                                d=" M-169.06100463867188,25.951570510864258 C-163.11500549316406,129.95327758789062 -14.474956512451172,218.24002075195312 60.99042892456055,177.05714416503906 C128.99093627929688,139.94825744628906 154.99266052246094,93.9543228149414 170.47885131835938,35.95271301269531 C185.96505737304688,-22.048860549926758 125.83004760742188,-148.74258422851562 52.99071502685547,-160.2494354248047 C-47.007633209228516,-176.04696655273438 -175.0066375732422,-78.04781341552734 -169.06100463867188,25.951570510864258z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                    <g transform="matrix(1,0,0,1,256,256)" opacity="0.75" style="display: block;">
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,2.1410000324249268,0.5230000019073486)">
                                                                                                            <path
                                                                                                                stroke-linecap="butt"
                                                                                                                stroke-linejoin="miter"
                                                                                                                fill-opacity="0"
                                                                                                                stroke-miterlimit="4"
                                                                                                                stroke="rgb(235,230,217)"
                                                                                                                stroke-opacity="1"
                                                                                                                stroke-width="1"
                                                                                                                d=" M-181.06300354003906,-12.04699993133545 C-180.08399963378906,66.48300170898438 -0.4729999899864197,230.2429962158203 74.99199676513672,189.06100463867188 C142.99200439453125,151.9530029296875 169.86000061035156,63.47600173950195 156.47900390625,-8.04699993133545 C143.09800720214844,-79.56999969482422 69.85900115966797,-164.5229949951172 -15.008000373840332,-168.25 C-99.875,-171.9770050048828 -182.14100646972656,-98.52300262451172 -181.06300354003906,-12.04699993133545z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                    <g transform="matrix(1,0,0,1,256,256)" opacity="0.5" style="display: block;">
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,2.1410000324249268,0.5230000019073486)">
                                                                                                            <path
                                                                                                                stroke-linecap="butt"
                                                                                                                stroke-linejoin="miter"
                                                                                                                fill-opacity="0"
                                                                                                                stroke-miterlimit="4"
                                                                                                                stroke="rgb(235,230,217)"
                                                                                                                stroke-opacity="1"
                                                                                                                stroke-width="1"
                                                                                                                d=" M-193.06300354003906,37.952999114990234 C-181.98500061035156,170.42999267578125 1.5269999504089355,214.2429962158203 76.99199676513672,173.06100463867188 C144.99200439453125,135.9530029296875 197.86000061035156,63.47600173950195 182.47900390625,-38.047000885009766 C167.09800720214844,-139.57000732421875 85.85900115966797,-190.5229949951172 -29.007999420166016,-180.25 C-143.875,-169.9770050048828 -204.14100646972656,-94.52400207519531 -193.06300354003906,37.952999114990234z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                    <g
                                                                                                        transform="matrix(0.9063078165054321,-0.4226182699203491,0.4226182699203491,0.9063078165054321,256,256)"
                                                                                                        opacity="0.75"
                                                                                                        style="display: block;"
                                                                                                    >
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,2.1410000324249268,0.5230000019073486)">
                                                                                                            <path
                                                                                                                stroke-linecap="butt"
                                                                                                                stroke-linejoin="miter"
                                                                                                                fill-opacity="0"
                                                                                                                stroke-miterlimit="3"
                                                                                                                stroke="rgb(235,230,217)"
                                                                                                                stroke-opacity="0.25"
                                                                                                                stroke-width="1"
                                                                                                                d=" M-169.06100463867188,25.951570510864258 C-163.11500549316406,129.95327758789062 -14.474956512451172,218.24002075195312 60.99042892456055,177.05714416503906 C128.99093627929688,139.94825744628906 154.99266052246094,93.9543228149414 170.47885131835938,35.95271301269531 C185.96505737304688,-22.048860549926758 125.83004760742188,-148.74258422851562 52.99071502685547,-160.2494354248047 C-47.007633209228516,-176.04696655273438 -175.0066375732422,-78.04781341552734 -169.06100463867188,25.951570510864258z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                    <g
                                                                                                        transform="matrix(0.9063078165054321,0.4226182699203491,-0.4226182699203491,0.9063078165054321,256,256)"
                                                                                                        opacity="1"
                                                                                                        style="display: block;"
                                                                                                    >
                                                                                                        <g opacity="1" transform="matrix(1,0,0,1,2.1410000324249268,0.5230000019073486)">
                                                                                                            <path
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round"
                                                                                                                fill-opacity="0"
                                                                                                                stroke="rgb(235,230,217)"
                                                                                                                stroke-opacity="0.25"
                                                                                                                stroke-width="1"
                                                                                                                d=" M-181.06300354003906,-12.04699993133545 C-180.08399963378906,66.48300170898438 -0.4729999899864197,230.2429962158203 74.99199676513672,189.06100463867188 C142.99200439453125,151.9530029296875 169.86000061035156,63.47600173950195 156.47900390625,-8.04699993133545 C143.09800720214844,-79.56999969482422 69.85900115966797,-164.5229949951172 -15.008000373840332,-168.25 C-99.875,-171.9770050048828 -182.14100646972656,-98.52300262451172 -181.06300354003906,-12.04699993133545z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                    <g
                                                                                                        transform="matrix(0.7169100046157837,0,0,0.7351499795913696,251.71759033203125,275.4610290527344)"
                                                                                                        opacity="0.25"
                                                                                                        style="display: block;"
                                                                                                    >
                                                                                                        <g opacity="1" transform="matrix(0.9836400151252747,0,0,1,6.1479997634887695,-23.851999282836914)">
                                                                                                            <path
                                                                                                                stroke-linecap="butt"
                                                                                                                stroke-linejoin="miter"
                                                                                                                fill-opacity="0"
                                                                                                                stroke-miterlimit="4"
                                                                                                                stroke="rgb(235,230,217)"
                                                                                                                stroke-opacity="1"
                                                                                                                stroke-width="1"
                                                                                                                d=" M0,-186.14849853515625 C102.73535919189453,-186.14849853515625 186.14849853515625,-102.73535919189453 186.14849853515625,0 C186.14849853515625,102.73535919189453 102.73535919189453,186.14849853515625 0,186.14849853515625 C-102.73535919189453,186.14849853515625 -186.14849853515625,102.73535919189453 -186.14849853515625,0 C-186.14849853515625,-102.73535919189453 -102.73535919189453,-186.14849853515625 0,-186.14849853515625z"
                                                                                                            ></path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </svg>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="nectar_icon_wrap" data-style="default" data-padding="0px" data-color="white" style="">
                                                                                        <div class="nectar_icon">
                                                                                            <span class="im-icon-wrap" data-color="white" style="height: 50px; width: 50px;">
                                                                                                <span>
                                                                                                    <svg role="presentation" version="1.1" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32">
                                                                                                        <path
                                                                                                            d="M23.5 31.461h-15c-0.316 0-0.588-0.221-0.652-0.531l-2.5-12c-0.041-0.195 0.008-0.401 0.135-0.557 0.127-0.153 0.317-0.245 0.517-0.245h20c0.2 0 0.391 0.088 0.519 0.245 0.125 0.156 0.175 0.361 0.135 0.557l-2.5 12c-0.065 0.309-0.339 0.531-0.653 0.531zM9.043 30.128h13.916l2.223-10.667h-18.361l2.223 10.667zM24.667 22.128h-17.333c-0.368 0-0.667-0.3-0.667-0.667 0-0.369 0.299-0.667 0.667-0.667h17.333c0.367 0 0.667 0.297 0.667 0.667 0 0.367-0.3 0.667-0.667 0.667zM16 18.795c-0.368 0-0.667-0.3-0.667-0.667v-14.667c0-0.368 0.299-0.667 0.667-0.667s0.667 0.299 0.667 0.667v14.667c0 0.367-0.299 0.667-0.667 0.667zM15.283 16.46v0c-1.988 0-3.672-0.699-4.871-2.023-1.235-1.361-1.856-3.341-1.664-5.295 0.035-0.355 0.347-0.649 0.697-0.6 2.472 0.131 4.537 1.016 5.813 2.495 1.096 1.271 1.58 2.925 1.399 4.788-0.031 0.319-0.285 0.575-0.607 0.599-0.263 0.025-0.519 0.036-0.768 0.036zM10.048 9.932c0.019 1.361 0.503 2.676 1.352 3.609 0.94 1.036 2.281 1.584 3.883 1.584v0c0.027 0 0.053 0 0.080 0 0.008-1.253-0.371-2.359-1.112-3.217-0.925-1.072-2.401-1.761-4.203-1.976zM16.776 12.46c-0.249 0-0.505-0.011-0.771-0.033-0.32-0.028-0.576-0.28-0.607-0.597-0.18-1.861 0.304-3.519 1.399-4.789 1.279-1.479 3.341-2.364 5.813-2.492 0.356-0.045 0.663 0.248 0.696 0.597 0.193 1.953-0.428 3.932-1.664 5.296-1.196 1.32-2.879 2.019-4.867 2.019zM16.695 11.127c1.667-0.028 3.008-0.531 3.964-1.584 0.849-0.936 1.333-2.251 1.352-3.609-1.801 0.211-3.277 0.904-4.203 1.973-0.74 0.864-1.12 1.967-1.113 3.22zM15.283 8.46v0c-1.988 0-3.672-0.699-4.871-2.023-1.235-1.361-1.856-3.341-1.664-5.295 0.035-0.355 0.347-0.637 0.697-0.6 2.472 0.131 4.537 1.016 5.813 2.495 1.096 1.271 1.58 2.925 1.399 4.788-0.031 0.319-0.285 0.575-0.607 0.599-0.263 0.025-0.519 0.036-0.768 0.036zM10.048 1.932c0.019 1.361 0.503 2.676 1.352 3.609 0.94 1.036 2.281 1.584 3.883 1.584v0c0.027 0 0.053 0 0.080 0 0.008-1.253-0.371-2.359-1.112-3.217-0.925-1.072-2.401-1.761-4.203-1.976z"
                                                                                                        ></path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="nectar-responsive-text font_size_desktop_2vw font_size_tablet_3vw font_size_phone_16px font_line_height_1px nectar-link-underline-effect">
                                                                                        <p>Basic</p>
                                                                                    </div>
                                                                                    <div class="nectar-responsive-text font_size_desktop_4vw font_size_tablet_7vw font_line_height_1px nectar-link-underline-effect"><p>Free</p></div>
                                                                                    <div class="divider-wrap" data-alignment="default"><div style="height: 15px;" class="divider"></div></div>
                                                                                    <div
                                                                                        class="nectar-fancy-ul font_size_min_16px font_size_desktop_1-1vw"
                                                                                        data-list-icon="dot"
                                                                                        data-animation="false"
                                                                                        data-animation-delay="0"
                                                                                        data-spacing="10px"
                                                                                        data-alignment="left"
                                                                                    >
                                                                                        <ul>
                                                                                            <li>Live chat widget</li>
                                                                                            <li>Email marketing</li>
                                                                                            <li>Custom Forms</li>
                                                                                            <li>Traffic analytics</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="divider-wrap" data-alignment="default"><div style="height: 90px;" class="divider"></div></div>
                                                                                    <div
                                                                                        class="nectar-cta alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit position_desktop_absolute right_position_desktop_40px left_position_desktop_40px bottom_position_desktop_40px"
                                                                                        data-color="white"
                                                                                        data-using-bg="true"
                                                                                        data-style="text-reveal-wave"
                                                                                        data-display="block"
                                                                                        data-alignment="center"
                                                                                        data-text-color="custom"
                                                                                    >
                                                                                        <span style="color: #000000;" class="nectar-button-type">
                                                                                            <span class="link_wrap" style="padding-top: 0.8em; padding-right: 40px; padding-bottom: 0.8em; padding-left: 40px;">
                                                                                                <a class="link_text" role="button" href="#">
                                                                                                    <span class="text">
                                                                                                        <span class="char" style="animation-delay: 0s;">G</span><span class="char" style="animation-delay: 0.015s;">e</span>
                                                                                                        <span class="char" style="animation-delay: 0.03s;">t</span> <span class="char" style="animation-delay: 0.045s;">S</span>
                                                                                                        <span class="char" style="animation-delay: 0.06s;">t</span><span class="char" style="animation-delay: 0.075s;">a</span>
                                                                                                        <span class="char" style="animation-delay: 0.09s;">r</span><span class="char" style="animation-delay: 0.105s;">t</span>
                                                                                                        <span class="char" style="animation-delay: 0.12s;">e</span><span class="char" style="animation-delay: 0.135s;">d</span>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            style="color: #000000;"
                                                                            class="vc_col-sm-4 wpb_column column_container vc_column_container col child_column el_spacing_10px left_padding_desktop_40px top_padding_desktop_40px right_padding_desktop_40px bottom_padding_desktop_40px instance-40"
                                                                            data-cfc="true"
                                                                            data-using-bg="true"
                                                                            data-border-radius="15px"
                                                                            data-padding-pos="all"
                                                                            data-has-bg-color="true"
                                                                            data-bg-color="#ffffff"
                                                                            data-bg-opacity="1"
                                                                            data-animation=""
                                                                            data-delay="0"
                                                                        >
                                                                            <div class="vc_column-inner">
                                                                                <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                                                                    <div class="column-bg-overlay" style="opacity: 1; background-color: #ffffff;"></div>
                                                                                </div>
                                                                                <div class="wpb_wrapper">
                                                                                    <div class="nectar_icon_wrap" data-style="default" data-padding="0px" data-color="black" style="">
                                                                                        <div class="nectar_icon">
                                                                                            <span class="im-icon-wrap" data-color="black" style="height: 50px; width: 50px;">
                                                                                                <span>
                                                                                                    <svg role="presentation" version="1.1" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32">
                                                                                                        <path
                                                                                                            d="M14.253 30.18c-0.015 0-0.029 0-0.047-0.003-3.431-0.237-6.265-1.631-8.425-4.143-3.521-4.1-5.069-11.008-4.363-19.451 0.029-0.361 0.321-0.66 0.703-0.609 4.747 0.277 9.948 3.045 13.576 7.224 3.303 3.801 4.924 8.252 4.572 12.539-0.031 0.364-0.339 0.628-0.72 0.609-0.367-0.031-0.64-0.355-0.611-0.719 0.323-3.924-1.187-8.028-4.249-11.556-3.232-3.724-7.772-6.251-11.995-6.712-0.532 7.676 0.947 14.14 4.095 17.807 1.917 2.232 4.444 3.472 7.505 3.68 0.367 0.027 0.644 0.344 0.62 0.711-0.019 0.352-0.312 0.623-0.661 0.623zM17.748 31.361c-0.305 0-0.58-0.211-0.649-0.521-1.608-7.159-9.288-16.467-12.544-19.611-0.265-0.253-0.273-0.675-0.019-0.941 0.256-0.264 0.68-0.271 0.943-0.019 3.347 3.236 11.245 12.827 12.919 20.277 0.081 0.361-0.145 0.713-0.504 0.8-0.048 0.011-0.097 0.015-0.145 0.015zM19.671 24.289c-0.309 0-0.585-0.216-0.652-0.531-0.076-0.36 0.156-0.713 0.516-0.789 10.043-2.101 10.111-15.788 9.765-20.943-5.8 0.629-11.848 5.075-14.577 10.795-0.159 0.333-0.559 0.472-0.889 0.315-0.332-0.159-0.473-0.556-0.315-0.888 3.028-6.348 9.907-11.229 16.356-11.607 0.355-0.035 0.675 0.251 0.703 0.609 1.072 12.781-2.955 21.388-10.771 23.025-0.047 0.008-0.091 0.013-0.136 0.013zM17.747 18.057c-0.115 0-0.231-0.028-0.336-0.091-0.317-0.188-0.424-0.593-0.237-0.915 3.067-5.233 7.295-10.143 9.389-12.169 0.267-0.252 0.688-0.249 0.943 0.019 0.255 0.261 0.249 0.688-0.016 0.943-2.041 1.972-6.167 6.765-9.167 11.887-0.125 0.207-0.348 0.327-0.576 0.327z"
                                                                                                        ></path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="nectar-responsive-text font_size_desktop_2vw font_size_tablet_3vw font_size_phone_16px font_line_height_1px nectar-link-underline-effect">
                                                                                        <p>Premium</p>
                                                                                    </div>
                                                                                    <div class="nectar-price-typography nectar-inherit-h3 font_size_desktop_4vw font_size_tablet_7vw font_line_height_1-5">
                                                                                        <span class="before-text" style="font-size: 0.4em;">$</span><span class="price-text">250</span>
                                                                                        <span class="after-text" style="font-size: 0.4em;">/ year</span>
                                                                                    </div>
                                                                                    <div class="divider-wrap" data-alignment="default"><div style="height: 15px;" class="divider"></div></div>
                                                                                    <div
                                                                                        class="nectar-fancy-ul font_size_min_16px font_size_desktop_1-1vw"
                                                                                        data-list-icon="dot"
                                                                                        data-animation="false"
                                                                                        data-animation-delay="0"
                                                                                        data-spacing="10px"
                                                                                        data-alignment="left"
                                                                                    >
                                                                                        <ul>
                                                                                            <li>Everything in basic</li>
                                                                                            <li>Marketing automation</li>
                                                                                            <li>Advanced chatbot</li>
                                                                                            <li>Campaign management</li>
                                                                                            <li>Collaboration tools</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="divider-wrap" data-alignment="default"><div style="height: 90px;" class="divider"></div></div>
                                                                                    <div
                                                                                        class="nectar-cta alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit position_desktop_absolute right_position_desktop_40px left_position_desktop_40px bottom_position_desktop_40px"
                                                                                        data-color="accent-color"
                                                                                        data-using-bg="true"
                                                                                        data-style="text-reveal-wave"
                                                                                        data-display="block"
                                                                                        data-alignment="center"
                                                                                        data-text-color="custom"
                                                                                    >
                                                                                        <span style="color: #ffffff;" class="nectar-button-type">
                                                                                            <span class="link_wrap" style="padding-top: 0.8em; padding-right: 40px; padding-bottom: 0.8em; padding-left: 40px;">
                                                                                                <a class="link_text" role="button" href="#">
                                                                                                    <span class="text">
                                                                                                        <span class="char" style="animation-delay: 0s;">G</span><span class="char" style="animation-delay: 0.015s;">e</span>
                                                                                                        <span class="char" style="animation-delay: 0.03s;">t</span> <span class="char" style="animation-delay: 0.045s;">S</span>
                                                                                                        <span class="char" style="animation-delay: 0.06s;">t</span><span class="char" style="animation-delay: 0.075s;">a</span>
                                                                                                        <span class="char" style="animation-delay: 0.09s;">r</span><span class="char" style="animation-delay: 0.105s;">t</span>
                                                                                                        <span class="char" style="animation-delay: 0.12s;">e</span><span class="char" style="animation-delay: 0.135s;">d</span>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            style=""
                                                                            class="vc_col-sm-4 wpb_column column_container vc_column_container col child_column el_spacing_10px left_padding_desktop_40px top_padding_desktop_40px right_padding_desktop_40px bottom_padding_desktop_40px instance-41"
                                                                            data-using-bg="true"
                                                                            data-border-radius="15px"
                                                                            data-padding-pos="all"
                                                                            data-has-bg-color="true"
                                                                            data-bg-color="#ffffff"
                                                                            data-bg-opacity="1"
                                                                            data-animation=""
                                                                            data-delay="0"
                                                                        >
                                                                            <div class="vc_column-inner">
                                                                                <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                                                                    <div class="column-bg-overlay" style="opacity: 1; background-color: #ffffff;"></div>
                                                                                </div>
                                                                                <div class="wpb_wrapper">
                                                                                    <div class="nectar_icon_wrap" data-style="default" data-padding="0px" data-color="black" style="">
                                                                                        <div class="nectar_icon">
                                                                                            <span class="im-icon-wrap" data-color="black" style="height: 50px; width: 50px;">
                                                                                                <span>
                                                                                                    <svg role="presentation" version="1.1" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32">
                                                                                                        <path
                                                                                                            d="M23.5 31.769h-15c-0.316 0-0.588-0.221-0.652-0.531l-2.5-12c-0.041-0.195 0.008-0.4 0.135-0.556s0.317-0.247 0.517-0.247h20c0.2 0 0.391 0.089 0.519 0.247 0.125 0.156 0.175 0.361 0.135 0.556l-2.5 12c-0.065 0.309-0.339 0.531-0.653 0.531zM9.043 30.436h13.916l2.223-10.667h-18.361l2.223 10.667zM24.667 23.769h-17.333c-0.368 0-0.667-0.299-0.667-0.667s0.299-0.667 0.667-0.667h17.333c0.367 0 0.667 0.299 0.667 0.667s-0.3 0.667-0.667 0.667zM15.333 9.103h1.333v9.333h-1.333v-9.333zM15.464 19.436c-1.556 0-2.877-0.549-3.819-1.588-0.968-1.067-1.455-2.616-1.305-4.14 0.035-0.357 0.353-0.639 0.697-0.6 1.923 0.099 3.531 0.793 4.529 1.951 0.861 1 1.241 2.301 1.1 3.755-0.031 0.319-0.285 0.573-0.607 0.6-0.204 0.015-0.403 0.023-0.596 0.023zM11.653 14.503c0.052 0.925 0.399 1.809 0.979 2.449 0.663 0.732 1.605 1.131 2.729 1.149-0.023-0.851-0.292-1.584-0.805-2.176-0.643-0.747-1.659-1.241-2.903-1.423zM15.984 10.157c-1.747 0-3.167-1.42-3.167-3.167s1.42-3.167 3.167-3.167c1.747 0 3.167 1.42 3.167 3.167s-1.42 3.167-3.167 3.167zM15.984 5.157c-1.011 0-1.833 0.823-1.833 1.833s0.823 1.833 1.833 1.833c1.011 0 1.833-0.823 1.833-1.833s-0.821-1.833-1.833-1.833zM19.576 3.496c-0.101 0-0.203-0.023-0.3-0.072-0.329-0.165-0.461-0.565-0.297-0.895 0.167-0.329 0.033-0.735-0.295-0.9-0.331-0.163-0.732-0.028-0.896 0.299-0.167 0.329-0.567 0.459-0.895 0.296-0.329-0.165-0.461-0.567-0.295-0.895 0.496-0.985 1.699-1.381 2.685-0.887s1.383 1.7 0.887 2.687c-0.117 0.232-0.352 0.367-0.595 0.367zM21.459 8.155c-0.323 0-0.607-0.236-0.659-0.564-0.055-0.364 0.195-0.704 0.557-0.761 0.175-0.028 0.331-0.121 0.435-0.265 0.105-0.14 0.148-0.316 0.12-0.495-0.055-0.361-0.399-0.607-0.763-0.557-0.363 0.060-0.703-0.193-0.759-0.557-0.056-0.361 0.195-0.701 0.557-0.757 1.087-0.168 2.113 0.581 2.283 1.669 0.169 1.087-0.581 2.115-1.669 2.284-0.035 0.001-0.069 0.004-0.103 0.004zM19.421 13.072c-0.057 0-0.115-0.003-0.175-0.008-0.531-0.044-1.016-0.296-1.36-0.703-0.237-0.281-0.2-0.701 0.081-0.939 0.281-0.243 0.701-0.201 0.94 0.083 0.115 0.139 0.276 0.219 0.453 0.237 0.177 0.012 0.351-0.039 0.487-0.155 0.279-0.24 0.315-0.657 0.079-0.939s-0.2-0.701 0.081-0.94c0.281-0.236 0.703-0.199 0.94 0.081 0.711 0.844 0.603 2.107-0.243 2.817-0.361 0.3-0.812 0.464-1.284 0.464zM10.655 9.221c-1.063 0-1.951-0.841-1.997-1.915-0.023-0.533 0.164-1.044 0.525-1.439 0.361-0.393 0.855-0.623 1.389-0.645 0.353 0.023 0.679 0.269 0.695 0.639 0.016 0.365-0.271 0.68-0.639 0.695-0.177 0.007-0.341 0.084-0.463 0.215s-0.183 0.301-0.175 0.48c0.016 0.364 0.344 0.687 0.695 0.637 0.336 0.028 0.679 0.269 0.695 0.639 0.016 0.367-0.269 0.68-0.639 0.695-0.029-0.001-0.057 0-0.087 0zM11.916 3.963c-0.216 0-0.427-0.101-0.555-0.297-0.297-0.444-0.403-0.973-0.299-1.501 0.105-0.524 0.407-0.972 0.852-1.272 0.444-0.296 0.976-0.405 1.501-0.297 0.524 0.104 0.976 0.408 1.272 0.852 0.204 0.307 0.121 0.721-0.185 0.924-0.305 0.199-0.721 0.121-0.924-0.185-0.099-0.148-0.249-0.251-0.424-0.285-0.171-0.031-0.352 0-0.5 0.099s-0.249 0.252-0.284 0.424c-0.035 0.175 0 0.352 0.099 0.5 0.205 0.305 0.123 0.72-0.184 0.921-0.115 0.081-0.243 0.119-0.369 0.119z"
                                                                                                        ></path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="nectar-responsive-text font_size_desktop_2vw font_size_tablet_3vw font_size_phone_16px font_line_height_1px nectar-link-underline-effect">
                                                                                        <p>Platinum</p>
                                                                                    </div>
                                                                                    <div class="nectar-price-typography nectar-inherit-h3 font_size_desktop_4vw font_size_tablet_7vw font_line_height_1-5">
                                                                                        <span class="before-text" style="font-size: 0.4em;">$</span><span class="price-text">500</span>
                                                                                        <span class="after-text" style="font-size: 0.4em;">/ year</span>
                                                                                    </div>
                                                                                    <div class="divider-wrap" data-alignment="default"><div style="height: 15px;" class="divider"></div></div>
                                                                                    <div
                                                                                        class="nectar-fancy-ul font_size_min_16px font_size_desktop_1-1vw"
                                                                                        data-list-icon="dot"
                                                                                        data-animation="false"
                                                                                        data-animation-delay="0"
                                                                                        data-spacing="10px"
                                                                                        data-alignment="left"
                                                                                    >
                                                                                        <ul>
                                                                                            <li>Everything in premium</li>
                                                                                            <li>A/B testing sanbox</li>
                                                                                            <li>Custom permissions</li>
                                                                                            <li>Social media automation</li>
                                                                                            <li>Sales automation tools</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="divider-wrap" data-alignment="default"><div style="height: 90px;" class="divider"></div></div>
                                                                                    <div
                                                                                        class="nectar-cta alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit position_desktop_absolute right_position_desktop_40px left_position_desktop_40px bottom_position_desktop_40px"
                                                                                        data-color="accent-color"
                                                                                        data-using-bg="true"
                                                                                        data-style="text-reveal-wave"
                                                                                        data-display="block"
                                                                                        data-alignment="center"
                                                                                        data-text-color="custom"
                                                                                    >
                                                                                        <span style="color: #ffffff;" class="nectar-button-type">
                                                                                            <span class="link_wrap" style="padding-top: 0.8em; padding-right: 40px; padding-bottom: 0.8em; padding-left: 40px;">
                                                                                                <a class="link_text" role="button" href="#">
                                                                                                    <span class="text">
                                                                                                        <span class="char" style="animation-delay: 0s;">G</span><span class="char" style="animation-delay: 0.015s;">e</span>
                                                                                                        <span class="char" style="animation-delay: 0.03s;">t</span> <span class="char" style="animation-delay: 0.045s;">S</span>
                                                                                                        <span class="char" style="animation-delay: 0.06s;">t</span><span class="char" style="animation-delay: 0.075s;">a</span>
                                                                                                        <span class="char" style="animation-delay: 0.09s;">r</span><span class="char" style="animation-delay: 0.105s;">t</span>
                                                                                                        <span class="char" style="animation-delay: 0.12s;">e</span><span class="char" style="animation-delay: 0.135s;">d</span>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </span>
                                                                                        </span>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    id="fws_6517a2cd99bc0"
                                    data-column-margin="default"
                                    data-midnight="dark"
                                    data-top-percent="2%"
                                    data-bottom-percent="2%"
                                    class="wpb_row vc_row-fluid vc_row full-width-content vc_row-o-equal-height vc_row-flex vc_row-o-content-top top_margin_5pct scale_desktop_1-02 rotate_desktop_2deg nectar-overflow-hidden"
                                    style="padding-top: calc(100vw * 0.02); padding-bottom: calc(100vw * 0.02);"
                                >
                                    <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                        <div class="inner-wrap row-bg-layer"><div class="row-bg viewport-desktop using-bg-color" style="background-color: #318fff;"></div></div>
                                        <div class="row-bg-overlay row-bg-layer" style=""></div>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 dark left">
                                        <div
                                            class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding el_spacing_0px inherit_tablet inherit_phone"
                                            data-padding-pos="all"
                                            data-has-bg-color="false"
                                            data-bg-color=""
                                            data-bg-opacity="1"
                                            data-animation=""
                                            data-delay="0"
                                            data-scroll-animation="true"
                                            data-scroll-animation-movement="transform_x"
                                            data-scroll-animation-mobile="true"
                                            data-scroll-animation-intensity="-2.5"
                                        >
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div
                                                        class="nectar-scrolling-text font_size_5vw font_size_mobile_9vw custom_color text_space_medium"
                                                        data-style="default"
                                                        data-s-dir="rtl"
                                                        data-spacing="true"
                                                        data-outline-thickness="thin"
                                                        data-s-speed="slowest"
                                                        data-overflow="visible"
                                                    >
                                                        <div class="nectar-scrolling-text-inner" style="color: #0a0a0a;">
                                                            <div class="nectar-scrolling-text-inner__text-chunk">
                                                                <h2>Grow your business</h2>
                                                            </div>
                                                            <div class="nectar-scrolling-text-inner__text-chunk">
                                                                <h2>Grow your business</h2>
                                                            </div>
                                                            <div class="nectar-scrolling-text-inner__text-chunk">
                                                                <h2>Grow your business</h2>
                                                            </div>
                                                            <div class="nectar-scrolling-text-inner__text-chunk">
                                                                <h2>Grow your business</h2>
                                                            </div>
                                                            <div class="nectar-scrolling-text-inner__text-chunk">
                                                                <h2>Grow your business</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    id="fws_6517a2cd9a373"
                                    data-column-margin="default"
                                    data-midnight="dark"
                                    data-top-percent="2%"
                                    data-bottom-percent="2%"
                                    class="wpb_row vc_row-fluid vc_row full-width-content vc_row-o-equal-height vc_row-flex vc_row-o-content-top bottom_margin_5pct zindex-set scale_desktop_1-02 rotate_desktop_358deg nectar-overflow-hidden"
                                    style="padding-top: calc(100vw * 0.02); padding-bottom: calc(100vw * 0.02); z-index: 20;"
                                >
                                    <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                        <div class="inner-wrap row-bg-layer"><div class="row-bg viewport-desktop using-bg-color" style="background-color: #ffce59;"></div></div>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 dark left">
                                        <div
                                            class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding el_spacing_0px inherit_tablet inherit_phone"
                                            data-padding-pos="all"
                                            data-has-bg-color="false"
                                            data-bg-color=""
                                            data-bg-opacity="1"
                                            data-animation=""
                                            data-delay="0"
                                            data-scroll-animation="true"
                                            data-scroll-animation-movement="transform_x"
                                            data-scroll-animation-mobile="true"
                                            data-scroll-animation-intensity="2.5"
                                        >
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div
                                                        class="nectar-scrolling-text font_size_5vw font_size_mobile_9vw custom_color text_space_medium"
                                                        data-style="default"
                                                        data-s-dir="ltr"
                                                        data-spacing="true"
                                                        data-outline-thickness="thin"
                                                        data-s-speed="slowest"
                                                        data-overflow="visible"
                                                    >
                                                        <div class="nectar-scrolling-text-inner" style="color: #0a0a0a;">
                                                            <div class="nectar-scrolling-text-inner__text-chunk">
                                                                <h2>Grow your business</h2>
                                                            </div>
                                                            <div class="nectar-scrolling-text-inner__text-chunk">
                                                                <h2>Grow your business</h2>
                                                            </div>
                                                            <div class="nectar-scrolling-text-inner__text-chunk">
                                                                <h2>Grow your business</h2>
                                                            </div>
                                                            <div class="nectar-scrolling-text-inner__text-chunk">
                                                                <h2>Grow your business</h2>
                                                            </div>
                                                            <div class="nectar-scrolling-text-inner__text-chunk">
                                                                <h2>Grow your business</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    id="fws_6517a2cd9a74f"
                                    data-column-margin="default"
                                    data-midnight="dark"
                                    data-top-percent="8%"
                                    class="wpb_row vc_row-fluid vc_row full-width-section right_padding_10pct left_padding_10pct top_padding_tablet_16pct"
                                    style="padding-top: calc(100vw * 0.08); padding-bottom: 0px;"
                                >
                                    <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                        <div class="inner-wrap row-bg-layer"><div class="row-bg viewport-desktop" style=""></div></div>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 dark left">
                                        <div
                                            class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding inherit_tablet inherit_phone"
                                            data-padding-pos="all"
                                            data-has-bg-color="false"
                                            data-bg-color=""
                                            data-bg-opacity="1"
                                            data-animation=""
                                            data-delay="0"
                                        >
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div id="fws_6517a2cd9a9e7" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row" style="padding-bottom: 4%;">
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column centered-text no-extra-padding inherit_tablet inherit_phone"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation=""
                                                                data-delay="0"
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="nectar-highlighted-text font_size_3vw font_size_tablet_6vw font_line_height_1-2"
                                                                            data-style="none"
                                                                            data-exp="default"
                                                                            data-using-custom-color="false"
                                                                            data-animation-delay="false"
                                                                            data-color=""
                                                                            data-color-gradient=""
                                                                            style=""
                                                                        >
                                                                            <h1>Frequently asked questions</h1>
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
                                </div>
                                <div
                                    id="fws_6517a2cd9adcf"
                                    data-column-margin="custom"
                                    data-midnight="dark"
                                    data-top-percent="3%"
                                    data-bottom-percent="12%"
                                    data-nectar-animate-settings='{"animations":{"desktop":{"clipPath":{"start":"inset(0 0px 0px 0px round 0)","end":"inset(0 4% 4% 4% round 20px)"}},"tablet":{"clipPath":{"start":"inset(0 0 0 0 round 0)","end":"inset(0 0 0 0 round 0.1px)"}},"phone":{"clipPath":{"start":"inset(0 0 0 0 round 0)","end":"inset(0 0 0 0 round 0.1px)"}}},"offsets":{"start":"32.00","end":"50.00","origin":"bottom"},"config":{"inner_selector":".row-bg-layer"}}'
                                    class="wpb_row vc_row-fluid vc_row full-width-content vc_row-o-equal-height vc_row-flex vc_row-o-content-middle right_padding_7vw left_padding_7vw column-margin-7vw"
                                    style="padding-top: calc(100vw * 0.03); padding-bottom: calc(100vw * 0.12);"
                                >
                                    <div class="row-bg-wrap" data-bg-animation="clip-path" data-bg-animation-delay="" data-bg-overlay="false">
                                        <div class="inner-wrap row-bg-layer" style="background-color: #f8f8f8;"><div class="row-bg viewport-desktop using-bg-color" style="background-color: #f8f8f8;"></div></div>
                                    </div>
                                    <div class="nectar-shape-divider-wrap" style="height: 99%;" data-using-percent-val="true" data-height="99%" data-front="" data-style="straight_section" data-position="bottom">
                                        <svg class="nectar-shape-divider" aria-hidden="true" fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                                            <polygon points="104 10, 104 0, 0 0, 0 10"></polygon>
                                        </svg>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 dark left">
                                        <div
                                            class="vc_col-sm-6 wpb_column column_container vc_column_container col left_padding_desktop_2vw"
                                            data-padding-pos="all"
                                            data-has-bg-color="false"
                                            data-bg-color=""
                                            data-bg-opacity="1"
                                            data-animation=""
                                            data-delay="0"
                                        >
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="toggles accordion toggles--minimal-shadow" data-br="none" data-starting="default" data-style="minimal">
                                                        <div class="toggle accent-color open" data-inner-wrap="true">
                                                            <h3 class="toggle-title">
                                                                <a href="#" role="button" class="nectar-inherit-h3 toggle-heading">
                                                                    <i role="presentation" class="fa fa-minus-circle"></i>What does CRM mean?
                                                                </a>
                                                            </h3>
                                                            <div style="max-height: 150px;">
                                                                <div class="inner-toggle-wrap">
                                                                    <div class="wpb_text_column wpb_content_element">
                                                                        <div class="wpb_wrapper">
                                                                            <p>
                                                                                CRM stands for Content Relationship Management. Using a CRM platform gives everyone involved in your business a way to manage customer interactions to increase
                                                                                growth.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle accent-color" data-inner-wrap="true">
                                                            <h3 class="toggle-title">
                                                                <a href="#" role="button" class="nectar-inherit-h3 toggle-heading">
                                                                    <i role="presentation" class="fa fa-plus-circle"></i>Is it really free to start?
                                                                </a>
                                                            </h3>
                                                            <div>
                                                                <div class="inner-toggle-wrap">
                                                                    <div class="wpb_text_column wpb_content_element">
                                                                        <div class="wpb_wrapper">
                                                                            <p>
                                                                                Yes! You can opt to stay within the free tier for as long as you want to. It’s a great way to get a feel for the platform before deciding to upgrade to take
                                                                                advantage of the more advanced features.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle accent-color" data-inner-wrap="true">
                                                            <h3 class="toggle-title">
                                                                <a href="#" role="button" class="nectar-inherit-h3 toggle-heading">
                                                                    <i role="presentation" class="fa fa-plus-circle"></i>Can I import data?
                                                                </a>
                                                            </h3>
                                                            <div>
                                                                <div class="inner-toggle-wrap">
                                                                    <div class="wpb_text_column wpb_content_element">
                                                                        <div class="wpb_wrapper">
                                                                            <p>Yes! Getting your existing data in is easy. Simply export your existing customers to a .csv file and import them within a couple of clicks.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="vc_col-sm-6 wpb_column column_container vc_column_container col top_margin_tablet_10pct right_padding_desktop_2vw"
                                            data-padding-pos="all"
                                            data-has-bg-color="false"
                                            data-bg-color=""
                                            data-bg-opacity="1"
                                            data-animation=""
                                            data-delay="0"
                                        >
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div id="fws_6517a2cd9bb64" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row" style="">
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column no-extra-padding inherit_tablet inherit_phone col-overflow-hidden"
                                                                data-border-radius="15px"
                                                                data-overlay-color="true"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation=""
                                                                data-delay="0"
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                                                        <div class="column-bg-overlay"></div>
                                                                        <div class="column-overlay-layer" style="background: radial-gradient(circle at top right, rgb(255, 75, 19) 9%, rgb(255, 143, 61) 73%);"></div>
                                                                    </div>
                                                                    <div class="wpb_wrapper" data-scroll-animation-movement="transform_y">
                                                                        <div
                                                                            class="nectar-animated-shape width_desktop_65vw width_tablet_120vw position_desktop_absolute top_position_desktop_0px left_position_desktop_0px bottom_position_desktop_0px translate_y_desktop_10pct translate_x_desktop_-50pct z_index_-1"
                                                                        >
                                                                            <div class="nectar-animated-shape__inner_wrap" data-nectar-waypoint-el-offset="160%" data-easing="easeInOutCubic" data-animation="none">
                                                                                <div class="nectar-animated-shape__inner">
                                                                                    <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 100 100"
                                                                                        width="100"
                                                                                        height="100"
                                                                                        preserveAspectRatio="xMidYMid meet"
                                                                                        style="width: 100%; height: 100%; overflow: hidden;"
                                                                                    >
                                                                                        <circle cx="50" cy="50" r="50" fill="#ffce59"></circle>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="img-with-aniamtion-wrap nectar-el-parallax-scroll"
                                                                            data-max-width="100%"
                                                                            data-max-width-mobile="default"
                                                                            data-shadow="custom"
                                                                            data-animation="none"
                                                                            style="margin-top: 5%; margin-bottom: -10%;"
                                                                            data-scroll-animation="true"
                                                                            data-scroll-animation-movement="transform_y"
                                                                            data-scroll-animation-mobile=""
                                                                            data-scroll-animation-intensity="-0.8"
                                                                        >
                                                                            <div class="inner">
                                                                                <div class="hover-wrap" style="filter: drop-shadow(-25px 5px 25px rgba(0, 0, 0, 0));">
                                                                                    <div class="hover-wrap-inner">
                                                                                        <img
                                                                                            class="img-with-animation skip-lazy nectar-lazy"
                                                                                            data-delay="0"
                                                                                            height="772"
                                                                                            width="800"
                                                                                            data-animation="none"
                                                                                            data-nectar-img-src="./image/saas-girl.webp"
                                                                                            src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20800%20772&#39;%2F%3E"
                                                                                            alt=""
                                                                                            data-nectar-img-srcset="image/saas-girl.webp 800w, ./image/saas-girl-300x290.webp 300w, 
                                                                                            ./image/saas-girl-768x741.webp 768w"
                                                                                            sizes="(max-width: 800px) 100vw, 800px"
                                                                                            style="height: 456.948px; width: 473.521px;"
                                                                                        />
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nectar-global-section before-footer">
                            <div class="container normal-container row">
                                <div
                                    id="fws_6517a2cd9d15a"
                                    data-column-margin="default"
                                    data-midnight="light"
                                    data-top-percent="10%"
                                    data-bottom-percent="10%"
                                    class="wpb_row vc_row-fluid vc_row full-width-content vc_row-o-equal-height vc_row-flex vc_row-o-content-top right_padding_6vw left_padding_6vw top_padding_tablet_20pct bottom_padding_tablet_10pct first-section loaded"
                                    style="padding-top: calc(100vw * 0.1); padding-bottom: calc(100vw * 0.1);"
                                >
                                    <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                        <div class="inner-wrap row-bg-layer"><div class="row-bg viewport-desktop using-bg-color" style="background-color: #000000;"></div></div>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 light left">
                                        <div
                                            class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding el_spacing_0px inherit_tablet inherit_phone"
                                            data-padding-pos="all"
                                            data-has-bg-color="false"
                                            data-bg-color=""
                                            data-bg-opacity="1"
                                            data-animation=""
                                            data-delay="0"
                                        >
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div
                                                        id="fws_6517a2cd9d40e"
                                                        data-midnight=""
                                                        data-column-margin="default"
                                                        class="wpb_row vc_row-fluid vc_row inner_row vc_row-o-equal-height vc_row-flex vc_row-o-content-middle"
                                                        style="padding-bottom: 5%;"
                                                    >
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                class="vc_col-sm-8 vc_col-lg-8 vc_col-md-6 wpb_column column_container vc_column_container col child_column bottom_margin_phone_30px right_padding_desktop_25pct"
                                                                data-t-w-inherits="small_desktop"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation=""
                                                                data-delay="0"
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="nectar-split-heading font_size_4vw markup-generated"
                                                                            data-align="default"
                                                                            data-m-align="inherit"
                                                                            data-text-effect="default"
                                                                            data-animation-type="line-reveal-by-space"
                                                                            data-animation-delay="0"
                                                                            data-animation-offset=""
                                                                            data-m-rm-animation=""
                                                                            data-stagger="true"
                                                                            data-custom-font-size="true"
                                                                            style="font-size: 4vw; line-height: 4.4vw;"
                                                                        >
                                                                            <h2>
                                                                                <span><span class="inner">Scale</span></span> <span><span class="inner">your</span></span> <span><span class="inner">brand</span></span>
                                                                                <span><span class="inner">and</span></span> <span><span class="inner">earn</span></span> <span><span class="inner">more</span></span>
                                                                                <span><span class="inner">revenue</span></span>
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="vc_col-sm-2 vc_col-lg-2 vc_col-md-3 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding el_spacing_10px bottom_margin_tablet_0px inherit_tablet inherit_phone"
                                                                data-t-w-inherits="small_desktop"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation="fade-in-from-bottom"
                                                                data-delay="150"
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_text_column wpb_content_element">
                                                                            <div class="wpb_wrapper">
                                                                                <h5>Connect</h5>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="nectar-cta alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit font_size_desktop_1-3vw font_size_tablet_16px"
                                                                            data-color="default"
                                                                            data-using-bg="false"
                                                                            data-display="block"
                                                                            data-style="underline"
                                                                            data-alignment="left"
                                                                            data-text-color="std"
                                                                            style="margin-top: 10px;"
                                                                        >
                                                                            <h4>
                                                                                <span class="link_wrap"><a class="link_text" role="button" href="#testimonials">Testimonials</a></span>
                                                                            </h4>
                                                                        </div>
                                                                        <div
                                                                            class="nectar-cta alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit font_size_desktop_1-3vw font_size_tablet_16px"
                                                                            data-color="default"
                                                                            data-using-bg="false"
                                                                            data-display="block"
                                                                            data-style="underline"
                                                                            data-alignment="left"
                                                                            data-text-color="std"
                                                                        >
                                                                            <h4>
                                                                                <span class="link_wrap"><a class="link_text" role="button" href="#how-it-works">Features</a></span>
                                                                            </h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="vc_col-sm-2 vc_col-lg-2 vc_col-md-3 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding el_spacing_10px inherit_tablet inherit_phone"
                                                                data-t-w-inherits="small_desktop"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation="fade-in-from-bottom"
                                                                data-delay="300"
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_text_column wpb_content_element">
                                                                            <div class="wpb_wrapper">
                                                                                <h5>Contact Us</h5>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="nectar-cta alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit font_size_desktop_1-3vw font_size_tablet_16px"
                                                                            data-color="default"
                                                                            data-using-bg="false"
                                                                            data-display="block"
                                                                            data-style="underline"
                                                                            data-alignment="left"
                                                                            data-text-color="std"
                                                                            style="margin-top: 10px;"
                                                                        >
                                                                            <h4>
                                                                                <span class="link_wrap"><a class="link_text" role="button" href="#">+216 (0)40 3629 4753</a></span>
                                                                            </h4>
                                                                        </div>
                                                                        <div
                                                                            class="nectar-cta alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit font_size_desktop_1-3vw font_size_tablet_16px"
                                                                            data-color="default"
                                                                            data-using-bg="false"
                                                                            data-display="block"
                                                                            data-style="underline"
                                                                            data-alignment="left"
                                                                            data-text-color="std"
                                                                        >
                                                                            <h4>
                                                                                <span class="link_wrap"><a class="link_text" role="button" href="#">hello@wishpik.com</a></span>
                                                                            </h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fws_6517a2cd9e2f9" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row vc_row-o-equal-height vc_row-flex vc_row-o-content-top" style="">
                                                        <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div
                                                                class="vc_col-sm-8 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding bottom_margin_phone_30px inherit_tablet inherit_phone"
                                                                data-t-w-inherits="small_desktop"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation="fade-in-from-bottom"
                                                                data-delay="0"
                                                            >
                                                                <!-- <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="nectar-cta alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit font_size_desktop_1-1vw font_size_tablet_16px"
                                                                            data-color="accent-color"
                                                                            data-using-bg="true"
                                                                            data-style="text-reveal-wave"
                                                                            data-display="block"
                                                                            data-alignment="left"
                                                                            data-text-color="custom"
                                                                        >
                                                                            <h6 style="color: #ffffff;">
                                                                                <span class="link_wrap" style="padding-top: 1em; padding-right: 2em; padding-bottom: 1em; padding-left: 2em;">
                                                                                    <a class="link_text" role="button" href="#">
                                                                                        <span class="text">
                                                                                            <span class="char" style="animation-delay: 0s;">S</span><span class="char" style="animation-delay: 0.015s;">t</span>
                                                                                            <span class="char" style="animation-delay: 0.03s;">a</span><span class="char" style="animation-delay: 0.045s;">r</span>
                                                                                            <span class="char" style="animation-delay: 0.06s;">t</span> <span class="char" style="animation-delay: 0.075s;">y</span>
                                                                                            <span class="char" style="animation-delay: 0.09s;">o</span><span class="char" style="animation-delay: 0.105s;">u</span>
                                                                                            <span class="char" style="animation-delay: 0.12s;">r</span> <span class="char" style="animation-delay: 0.135s;">t</span>
                                                                                            <span class="char" style="animation-delay: 0.15s;">r</span><span class="char" style="animation-delay: 0.165s;">i</span>
                                                                                            <span class="char" style="animation-delay: 0.18s;">a</span><span class="char" style="animation-delay: 0.195s;">l</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </span>
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                            <div
                                                                class="vc_col-sm-4 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding inherit_tablet inherit_phone mobile-disable-entrance-animation"
                                                                data-t-w-inherits="small_desktop"
                                                                data-padding-pos="all"
                                                                data-has-bg-color="false"
                                                                data-bg-color=""
                                                                data-bg-opacity="1"
                                                                data-animation="fade-in-from-bottom"
                                                                data-delay="150"
                                                                data-animation-offset="110%"
                                                            >
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="nectar-responsive-text nectar-link-underline-effect">
                                                                            <p>©&nbsp; <span class="nectar-current-year">2023</span>. Website built with <a href="#">Web & seo</a>.</p>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        id="footer-outer"
                        data-cols="5"
                        data-custom-color="false"
                        data-disable-copyright="true"
                        data-matching-section-color="true"
                        data-copyright-line="false"
                        data-using-bg-img="false"
                        data-bg-img-overlay="0.8"
                        data-full-width="false"
                        data-using-widget-area="false"
                        data-link-hover="underline"
                    ></div>
                </div>
            </div>
        </div>
        <div id="slide-out-widget-area" class="slide-out-from-right" data-dropdown-func="default" data-back-txt="Back" style="padding-top: 59.5px; padding-bottom: 59.5px;">
            <div class="inner-wrap">
                <div class="inner" data-prepend-menu-mobile="false">
                    <div class="off-canvas-menu-container mobile-only" role="navigation">
                        <ul class="menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-31"><a href="#intro" aria-current="page">Our values</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-32"><a href="#testimonials" aria-current="page">Why Salient?</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-33"><a href="#how-it-works" aria-current="page">How it works</a></li>
                        </ul>
                        <ul class="menu secondary-header-items"></ul>
                    </div>
                </div>
                <div class="bottom-meta-wrap"></div>
            </div>
        </div>
        <div id="slide-out-widget-area-bg" class="slide-out-from-right dark"></div>
        <a class="slide_out_area_close hide_until_rendered" href="#">
            <span class="screen-reader-text">Close Menu</span> <span class="close-wrap"> <span class="close-line close-line1"></span> <span class="close-line close-line2"></span> </span>
        </a>
@endsection()

@section('js')

@endsection()