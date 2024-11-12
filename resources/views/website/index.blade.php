@extends('website.layout.layout')
@section('title','Wishpik')


@section('content')
<script type="text/javascript">
    (function(window, document) {
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
<style>
    .listlogic ol, ul{
        margin-left: 0 !important;
    }
    .premium-card{
        border: 3px solid #F26B42;
    box-shadow: 20px 17px 23px 0px #F26B4233;
    background: #FFFFFF;
    }
    .nectar{
        display: flex;
    gap: 16px;
    color: #ff6b3d;
    font-size: 50px !important;
    font-weight: 700;
    margin-bottom: 30px !important;
    }
    .nectar p{
        padding-bottom: 0;
    }
    .vc_column-inner h5.vb {
    text-align: center;
    background: rgb(255, 107, 61);
    margin: -40px -40px 30px;
    border-radius: 6px 6px 0px 0px;
    padding: 10px 40px;
    font-size: 24px;
    color: white;
    font-weight: 700;
}
    .sectiom8Img {
        /* position: relative; */
    }

    .sectiom8Img .img {
        position: absolute;
        left: -110px;
        top: 50%;
        z-index: 5555;
        transform: translateY(-50%);
    }

    .section7Img .img {
        height: 600px !important;
        object-fit: cover;
        width: 100% !important;
        border-radius: 20px;
    }

    img.attachImg {
        position: absolute;
        right: -80px;
        z-index: 555;
        bottom: -55px;
    }

    .start-content__right {
        display: flex;
        justify-content: space-between;
        height: 600px;
        overflow: hidden;
    }

    ul.column.column--left {
        display: block;
        animation-duration: 55s;
    }

    .marquee-wrapper {
        display: flex;
        flex-flow: column;
        -webkit-box-pack: justify;
        justify-content: space-between;
        animation: 85s linear 0s infinite normal none running marqueeTop;
    }

    .column--middle .marquee-wrapper {
        animation: 100s linear 0s infinite normal none running marqueeBottom
    }

    .marquee-wrapper img {
        display: block;
        height: auto;
        border-radius: 20px;
        width: 100% !important;
        margin-bottom: 15px !important;
        transition: transform 0.5s ease-in-out 0s;
        transform: translateY(0px) !important;
        filter: drop-shadow(rgba(0, 0, 0, 0.08) -2.95979px -1.97319px 7.39947px) drop-shadow(rgba(0, 0, 0, 0.08) 10.8526px 8.87936px 14.3056px);
    }

    @keyframes marqueeTop {

        0% {
            transform: translate3d(0px, 0px, 0px);
        }

        100% {
            transform: translate3d(0px, -100%, 0px);
        }
    }

    @keyframes marqueeBottom {

        0% {
            transform: translate3d(0px, -100%, 0px);
        }

        100% {
            transform: translate3d(0px, 0px, 0px);
        }
    }
</style>


                <div class="container main-content" role="main" style="--nectar-sticky-top-distance: 138px;">
                    <div class="row">
                        <div
                            id="fws_6517a2cd82ed8"
                            data-column-margin="none"
                            data-midnight="dark"
                            class="wpb_row vc_row-fluid vc_row top-level full-width-content vc_row-o-full-height vc_row-o-columns-middle vc_row-o-equal-height vc_row-flex vc_row-o-content-middle nectar-overflow-hidden loaded first-section"
                            style="padding-top: 50px; padding-bottom: 0px;">
                            <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                <div class="inner-wrap row-bg-layer">
                                    <div class="row-bg viewport-desktop" style=""></div>
                                </div>
                            </div>
                            <div class="row_col_wrap_12 col span_12 dark left">
                                <div
                                    class="vc_col-sm-6 wpb_column column_container vc_column_container col left_padding_desktop_7vw top_padding_desktop_4vw right_padding_desktop_7vw bottom_padding_desktop_6vw"
                                    data-padding-pos="all"
                                    data-has-bg-color="false"
                                    data-bg-color=""
                                    data-bg-opacity="1"
                                    data-animation=""
                                    data-delay="0">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div
                                                id="fws_6517a2cd86eaa"
                                                data-midnight=""
                                                data-column-margin="none"
                                                class="wpb_row vc_row-fluid vc_row inner_row right_padding_10pct top_padding_tablet_10pct top_padding_phone_16pct"
                                                style="padding-top: 5%;">
                                                <div class="row-bg-wrap">
                                                    <div class="row-bg"></div>
                                                </div>
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
                                                                ">
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
                                                                    style="">
                                                                    <h1 style="font-size:80px">
                                                                        Bringing people
                                                                        <em class="animated">
                                                                            closer.
                                                                            <svg class="nectar-scribble basic-underline" role="presentation" viewBox="-400 -55 730 60" preserveAspectRatio="none">
                                                                                <path
                                                                                    style="animation-duration: 0s;"
                                                                                    d="m -383.25 -6 c 55.25 -22 130.75 -33.5 293.25 -38 c 54.5 -0.5 195 -2.5 401 15"
                                                                                    stroke="#ffce59"
                                                                                    pathLength="1"
                                                                                    stroke-width="14"
                                                                                    fill="none"></path>
                                                                            </svg>
                                                                        </em>
                                                                    </h1>
                                                                    <p style="font-size:18px;margin-top:30px;">Let every personalized greeting weave threads of connection, drawing family and friends closer.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="fws_6517a2cd87663" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row" style="padding-top: 3vw;">
                                                <div class="row-bg-wrap">
                                                    <div class="row-bg"></div>
                                                </div>
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
                                                                ">
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
                                                                    style="margin-right: 1em;">
                                                                    <span style="color: #ffffff;" class="nectar-button-type">
                                                                        <span class="link_wrap" style="padding-top: 0.8em; padding-right: 2em; padding-bottom: 0.8em; padding-left: 2em;">
                                                                            <a target="_blank" class="link_text" role="button" href="#">
                                                                                <span class="text">

                                                                                    <span class="char" style="animation-delay: 0.015s;">Try Whatsapp</span>
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
                                    data-delay="0">
                                    <div class="vc_column-inner">
                                        <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                            <div class="column-bg-overlay"></div>
                                            <div class="column-overlay-layer" style=""></div>
                                        </div>
                                        <div class="wpb_wrapper">
                                            <div id="fws_6517a2cd88b4f" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row bottom_padding_phone_16pct" style="">
                                                <div class="row-bg-wrap">
                                                    <div class="row-bg"></div>
                                                </div>
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
                                                                ">
                                                        <div
                                                            class="vc_column-inner"
                                                            style="
                                                                        transition: transform 1400ms cubic-bezier(0.65, 0, 0.35, 1) 0ms, clip-path 1400ms cubic-bezier(0.65, 0, 0.35, 1) 0ms, opacity 1400ms cubic-bezier(0.65, 0, 0.35, 1) 0ms;
                                                                        opacity: 1;
                                                                        transform: translate3d(0px, 0px, 0px);
                                                                    ">
                                                            <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                                                <div class="column-bg-overlay"></div>
                                                                <div class="column-overlay-layer" style="background: radial-gradient(circle at bottom, rgb(0, 2, 255) 0%, rgb(48, 169, 255) 76%);"></div>
                                                            </div>
                                                            <div class="wpb_wrapper" data-scroll-animation-movement="transform_y">
                                                                <div
                                                                    class="nectar-animated-shape width_desktop_77vw width_tablet_154vw position_desktop_absolute top_position_desktop_0px left_position_desktop_0px translate_y_desktop_-50pct translate_x_desktop_-50pct z_index_-1">
                                                                    <div
                                                                        class="nectar-animated-shape__inner_wrap nectar-waypoint-el nectar-disable-mobile-animation animated-in"
                                                                        data-nectar-waypoint-el-delay="30"
                                                                        data-easing="easeInOutCubic"
                                                                        data-animation="grow-in">
                                                                        <div class="nectar-animated-shape__inner">
                                                                            <svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 100 100"
                                                                                width="100"
                                                                                height="100"
                                                                                preserveAspectRatio="xMidYMid meet"
                                                                                style="width: 100%; height: 100%; overflow: hidden;">
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
                                                                    style="opacity: 1; transform: translateY(0px) translateZ(0px);">
                                                                    <div class="inner" style="opacity: 1; transform: translate3d(0px, 0px, 0px);">
                                                                        <div
                                                                            class="hover-wrap"
                                                                            style="
                                                                                        transition: transform 1400ms cubic-bezier(0.65, 0, 0.35, 1) 0ms, clip-path 1400ms cubic-bezier(0.65, 0, 0.35, 1) 0ms,
                                                                                            opacity 1400ms cubic-bezier(0.65, 0, 0.35, 1) 0ms;
                                                                                        opacity: 1;
                                                                                        transform: translate3d(0px, 0px, 0px);
                                                                                    ">
                                                                            <div class="hover-wrap-inner">
                                                                                <img
                                                                                    class="img-with-animation skip-lazy animated-in"
                                                                                    data-delay="0"
                                                                                    height="560"
                                                                                    width="560"
                                                                                    data-animation="slide-up"
                                                                                    data-animation-easing="easeInOutCubic"
                                                                                    src="{{url('public/auth/img/Slide 1 Image.webp')}}"
                                                                                    alt=""
                                                                                    style="opacity: 1; transform: translate3d(0px, 0px, 0px);height:800px !important;object-fit:cover" />
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
                                                style="z-index: 500;">
                                                <div class="row-bg-wrap">
                                                    <div class="row-bg"></div>
                                                </div>
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
                                                                ">
                                                        <img src="public/auth/img/01.png" alt="1" style="height: 100px;display: block;" />
                                                        <img src="public/auth/img/02.png" alt="2" style="height: 60px;display: block;margin-left:100px" />
                                                        <img src="public/auth/img/03.png" alt="3" style="height: 300px;display: block;" />
                                                        <img src="public/auth/img/04.png" alt="4" style="height: 60px;display: block;margin-left:auto" />
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
                            style="padding-top: calc(100vw * 0.05); padding-bottom: calc(100vw * 0.05);">
                            <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                <div class="inner-wrap row-bg-layer">
                                    <div class="row-bg viewport-desktop" style=""></div>
                                </div>
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
                                    data-delay="0">
                                    <div class="vc_column-inner">
                                        <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                            <div class="column-bg-overlay"></div>
                                            <div class="column-overlay-layer" style=""></div>
                                        </div>
                                        <div class="wpb_wrapper">
                                            <div id="fws_6517a2cd8a8d7" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row" style="">
                                                <div class="row-bg-wrap">
                                                    <div class="row-bg"></div>
                                                </div>
                                                <div class="row_col_wrap_12_inner col span_12 left">
                                                    <div
                                                        class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding el_spacing_0px inherit_tablet inherit_phone"
                                                        data-padding-pos="all"
                                                        data-has-bg-color="false"
                                                        data-bg-color=""
                                                        data-bg-opacity="1"
                                                        data-animation="fade-in"
                                                        data-delay="0"
                                                        data-animation-offset="90%">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div
                                                                    class="nectar-animated-shape width_desktop_15vw position_desktop_absolute top_position_desktop_0px left_position_desktop_0px translate_y_desktop_-33pct translate_x_desktop_-50pct z_index_-1">
                                                                    <div class="nectar-animated-shape__inner_wrap" data-easing="default" data-animation="none" data-scroll-animation-movement="transform_y">
                                                                        <div
                                                                            class="nectar-animated-shape__inner nectar-el-parallax-scroll"
                                                                            data-scroll-animation="true"
                                                                            data-scroll-animation-movement="transform_y"
                                                                            data-scroll-animation-mobile="true"
                                                                            data-scroll-animation-intensity="0.6"
                                                                            style="transform: translateY(30.489px) translateZ(0px);">
                                                                            <svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 100 100"
                                                                                width="100"
                                                                                height="100"
                                                                                preserveAspectRatio="xMidYMid meet"
                                                                                style="width: 100%; height: 100%; overflow: hidden;">
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
                                                <div class="row-bg-wrap">
                                                    <div class="row-bg"></div>
                                                </div>
                                                <div class="row_col_wrap_12_inner col span_12 left">
                                                    <div
                                                        class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding el_spacing_0px inherit_tablet inherit_phone"
                                                        data-padding-pos="all"
                                                        data-has-bg-color="false"
                                                        data-bg-color=""
                                                        data-bg-opacity="1"
                                                        data-animation="fade-in"
                                                        data-delay="0"
                                                        data-animation-offset="90%">
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
                                                                    style="">
                                                                    <h2>
                                                                        Never miss a moment to express
                                                                        <em id="circle-highlight2">
                                                                            yourself.
                                                                            <svg class="nectar-scribble squiggle-underline" role="presentation" viewBox="-347 -30.1947 694 96.19" preserveAspectRatio="none">
                                                                                <path
                                                                                    style="animation-duration: 1.6s;"
                                                                                    d="M-335,54 C-335,54 -171,-58 -194,-3 C-217,52 -224.1199951171875,73.552001953125 -127,11 C-68,-27 -137,50 -33,42 C31.43899917602539,37.042999267578125 147.14700317382812,-29.308000564575195 335,2"
                                                                                    stroke="#318fff"
                                                                                    pathLength="1"
                                                                                    stroke-width="20"
                                                                                    fill="none"></path>
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
                                                <div class="row-bg-wrap">
                                                    <div class="row-bg"></div>
                                                </div>
                                                <div class="row_col_wrap_12_inner col span_12 left">
                                                    <div
                                                        class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column no-extra-padding inherit_tablet inherit_phone"
                                                        data-padding-pos="all"
                                                        data-has-bg-color="false"
                                                        data-bg-color=""
                                                        data-bg-opacity="1"
                                                        data-animation=""
                                                        data-delay="0">
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
                                                                    style="font-size: 1.2vw; line-height: 1.32vw;">
                                                                    <p style="max-width: 90%;">
                                                                        At Wishpik, we believe in the power of personal connections. We understand the importance of staying connected, no matter the distance. That's why we are here to help you bridge the gap with heartfelt messages that transcend miles.
                                                                        <!--<span><span class="inner">Convert</span></span> <span><span class="inner">leads</span></span> <span><span class="inner">into</span></span>-->
                                                                        <!--<span><span class="inner">customers</span></span> <span><span class="inner">and</span></span> <span><span class="inner">then</span></span>-->
                                                                        <!--<span><span class="inner">turn</span></span> <span><span class="inner">those</span></span> <span><span class="inner">customers</span></span>-->
                                                                        <!--<span><span class="inner">into</span></span> <span><span class="inner">loyal</span></span> <span><span class="inner">fans</span></span>-->
                                                                        <!--<span><span class="inner">of</span></span> <span><span class="inner">your</span></span> <span><span class="inner">brand</span></span>-->
                                                                        <!--<span><span class="inner">by</span></span> <span><span class="inner">leveraging</span></span> <span><span class="inner">next-generation</span></span>-->
                                                                        <!--<span><span class="inner">automation</span></span> <span><span class="inner">and</span></span> <span><span class="inner">AI.</span></span>-->
                                                                        <!--<span><span class="inner">Yes,</span></span> <span><span class="inner">it</span></span> <span><span class="inner">really</span></span>-->
                                                                        <!--<span><span class="inner">can</span></span> <span><span class="inner">be</span></span> <span><span class="inner">automated,</span></span>-->
                                                                        <!--<span><span class="inner">and</span></span> <span><span class="inner">no,</span></span> <span><span class="inner">you're</span></span>-->
                                                                        <!--<span><span class="inner">not</span></span> <span><span class="inner">dreaming.</span></span>-->
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
                            style="padding-top: 0px; padding-bottom: 0px; z-index: 100;">
                            <div class="row-bg-wrap" data-bg-animation="clip-path" data-bg-animation-delay="" data-bg-overlay="false">
                                <div class="inner-wrap row-bg-layer">
                                    <div class="row-bg viewport-desktop" style=""></div>
                                </div>
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
                                    data-delay="0">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div
                                                class="nectar_video_player_self_hosted wpb_video_widget wpb_content_element vc_clearfix vc_video-aspect-ratio-169 vc_video-el-width-100 vc_video-align-left tablet-aspect-43 play_button_hover"
                                                data-border-radius="none"
                                                data-shadow="none">
                                                <div class="wpb_wrapper celecbrateWrapper">
                                                    <img src="public/auth/img/Slide 2 Image.webp" alt="img" width="100%" height="100%" />
                                                    <!--<div class="wpb_video_wrapper">-->
                                                    <!--    <a-->
                                                    <!--        href="https://vimeo.com/118023315"-->
                                                    <!--        data-play_button_color="#0a0a0a"-->
                                                    <!--        data-play_button_icon_color="#ffffff"-->
                                                    <!--        class="nectar_video_lightbox_trigger play_button follow_mouse"-->
                                                    <!--        target="_blank"-->
                                                    <!--        rel="noopener"-->
                                                    <!--        data-fancybox=""-->
                                                    <!--    >-->
                                                    <!--        <span class="screen-reader-text">Play Video</span>-->
                                                    <!--        <span class="play" style="top: 0px; left: 0px; transform: translateX(633.5px) translateY(356.344px);">-->
                                                    <!--            <svg-->
                                                    <!--                class="inner"-->
                                                    <!--                version="1.1"-->
                                                    <!--                xmlns="http://www.w3.org/2000/svg"-->
                                                    <!--                xmlns:xlink="http://www.w3.org/1999/xlink"-->
                                                    <!--                width="600px"-->
                                                    <!--                height="800px"-->
                                                    <!--                x="0px"-->
                                                    <!--                y="0px"-->
                                                    <!--                viewBox="0 0 600 800"-->
                                                    <!--                enable-background="new 0 0 600 800"-->
                                                    <!--                xml:space="preserve"-->
                                                    <!--                style="transform: translateX(0px) translateY(0px);"-->
                                                    <!--            >-->
                                                    <!--                <path fill="none" d="M0-1.79v800L600,395L0-1.79z"></path>-->
                                                    <!--            </svg>-->
                                                    <!--        </span>-->
                                                    <!--    </a>-->
                                                    <!--    <video width="1280" height="720" class="nectar-video-self-hosted no-video" preload="auto" loop="" autoplay="" muted="" playsinline="" style="visibility: visible;"></video>-->
                                                    <!--</div>-->
                                                </div>
                                            </div>
                                            <div
                                                id="fws_6517a2cd8bf1f"
                                                data-midnight=""
                                                data-column-margin="default"
                                                class="wpb_row vc_row-fluid vc_row inner_row no-pointer-events min_width_desktop_100pct row_position_absolute bottom_position_desktop_5vw right_padding_10pct left_padding_10pct"
                                                style="z-index: 1000;top:50%;">
                                                <div class="row-bg-wrap">
                                                    <div class="row-bg"></div>
                                                </div>
                                                <div class="row_col_wrap_12_inner col span_12 left">
                                                    <div
                                                        class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column centered-text no-extra-padding el_spacing_5px inherit_tablet inherit_phone"
                                                        data-padding-pos="all"
                                                        data-has-bg-color="false"
                                                        data-bg-color=""
                                                        data-bg-opacity="1"
                                                        data-animation=""
                                                        data-delay="0">
                                                        <style>
                                                            .celecbrateWrapper::before {
                                                                position: absolute;
                                                                content: "";
                                                                inset: 0;
                                                                background: rgb(0 0 0 / 10%);

                                                            }
                                                        </style>
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="nectar-responsive-text font_size_desktop_2vw font_size_tablet_4vw nectar-link-underline-effect" style="color: #ffffff;">
                                                                    <h3 style="font-size:80px;line-height:80px;">Celebrate your culture,<br /> proudly
                                                                    </h3>
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
                            id="how-it-works"
                            data-column-margin="none"
                            data-midnight="dark"
                            data-top-percent="5%"
                            data-bottom-percent="7%"
                            class="wpb_row vc_row-fluid vc_row full-width-content vc_row-o-equal-height vc_row-flex vc_row-o-content-middle right_padding_7pct left_padding_7pct reverse_columns_column_tablet reverse_columns_column_phone bottom_padding_tablet_10pct"
                            style="padding-top: calc(100vw * 0.07); padding-bottom: calc(100vw * 0.07);">
                            <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                <div class="inner-wrap row-bg-layer">
                                    <div class="row-bg viewport-desktop" style=""></div>
                                </div>
                            </div>
                            <div class="row_col_wrap_12 col span_12 dark left" style="justify-content:center">
                                <div
                                    class="vc_col-sm-4 wpb_column column_container vc_column_container col column_position_static el_spacing_30px left_padding_tablet_7vw right_padding_desktop_7vw right_padding_tablet_0px"
                                    data-padding-pos="all"
                                    data-has-bg-color="false"
                                    data-bg-color=""
                                    data-bg-opacity="1"
                                    data-animation=""
                                    data-delay="0">
                                    <div class="vc_column-inner" style="padding-right:0">
                                        <div class="wpb_wrapper">
                                            <div id="fws_6517a2cd8f749" data-midnight="" data-column-margin="none" class="wpb_row vc_row-fluid vc_row inner_row right_padding_5pct top_padding_tablet_8pct" style="">
                                                <div class="row-bg-wrap">
                                                    <div class="row-bg"></div>
                                                </div>
                                                <div class="row_col_wrap_12_inner col span_12 left">
                                                    <div
                                                        class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column no-extra-padding inherit_tablet inherit_phone"
                                                        data-padding-pos="all"
                                                        data-has-bg-color="false"
                                                        data-bg-color=""
                                                        data-bg-opacity="1"
                                                        data-animation=""
                                                        data-delay="0">
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
                                                                    style="font-size: 3vw; line-height: 3.3vw;">
                                                                    <h2 style="color: #000000;">
                                                                        Always there for you
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="fws_6517a2cd8fa7b" data-midnight="" data-column-margin="none" class="wpb_row vc_row-fluid vc_row inner_row right_padding_10pct" style="">
                                                <div class="row-bg-wrap">
                                                    <div class="row-bg"></div>
                                                </div>
                                                <div class="row_col_wrap_12_inner col span_12 left">
                                                    <div
                                                        class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding inherit_tablet inherit_phone mobile-disable-entrance-animation"
                                                        data-padding-pos="all"
                                                        data-has-bg-color="false"
                                                        data-bg-color=""
                                                        data-bg-opacity="1"
                                                        data-animation="fade-in"
                                                        data-delay="0"
                                                        data-animation-easing="easeInOutQuad">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div
                                                                    class="nectar-fancy-ul font_size_min_16px font_size_desktop_1-1vw font_line_height_1-6"
                                                                    data-list-icon="icon-salient-check"
                                                                    data-animation="false"
                                                                    data-animation-delay="0"
                                                                    data-color="accent-color"
                                                                    data-spacing="10px"
                                                                    data-alignment="left">
                                                                    <p>Express what you feel with our special WhatsApp bot that understands all your needs
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
                                <div
                                    class="vc_col-sm-4 wpb_column column_container vc_column_container col column_position_relative el_spacing_0px col-overflow-hidden"
                                    data-overlay-color="true"
                                    data-padding-pos="all"
                                    data-has-bg-color="false"
                                    data-bg-color=""
                                    data-bg-opacity="1"
                                    data-animation=""
                                    data-delay="0">
                                    <div class="vc_column-inner" style="position:unset;">
                                        <div class="text-align-center">
                                            <img src="public/auth/img/whatsapp.png" alt="img 7" class="img" />

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
                            style="padding-top: calc(100vw * 0.07); padding-bottom: calc(100vw * 0.07);padding:0">
                            <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                <div class="inner-wrap row-bg-layer">
                                    <div class="row-bg viewport-desktop" style=""></div>
                                </div>
                            </div>
                            <div class="row_col_wrap_12 col span_12 dark left">

                                <div
                                    class="vc_col-sm-6 wpb_column column_container vc_column_container col column_position_relative el_spacing_0px col-overflow-hidden"
                                    data-overlay-color="true"
                                    data-padding-pos="all"
                                    data-has-bg-color="false"
                                    data-bg-color=""
                                    data-bg-opacity="1"
                                    data-animation=""
                                    data-delay="0">
                                    <div class="vc_column-inner" style="background: white;padding: 0 20px;border-radius: 20px;">
                                        <div class="start-content__right" style="gap:30px">
                                            <ul class="column column--left ml-0">
                                                <div class="marquee-wrapper">
                                                    <img fetchpriority="high"
                                                        src="https://cdn.sanity.io/images/7hja5omh/production/ecdeca3c735cde0d974bdbf93f865d292792d11b-418x551.jpg"
                                                        alt="940f3f3922b4" style="animation-delay: 1.48292s;">
                                                    <img fetchpriority="high"
                                                        src="https://cdn.sanity.io/images/7hja5omh/production/1ce93e2e264f917ebb0fee56cb517c9f928eb724-618x814.png"
                                                        alt="84dae9f4837f" style="animation-delay: 3.81083s;">
                                                    <img fetchpriority="high"
                                                        src="https://cdn.sanity.io/images/7hja5omh/production/c3345b86b2fdd8b15ce1547efe0cd44f22f86ffd-618x814.jpg"
                                                        alt="8e1ab8e2ce66" style="animation-delay: 6.13908s;">
                                                </div>
                                                <div class="marquee-wrapper">
                                                    <img fetchpriority="high"
                                                        src="https://cdn.sanity.io/images/7hja5omh/production/ecdeca3c735cde0d974bdbf93f865d292792d11b-418x551.jpg"
                                                        alt="940f3f3922b4" style="animation-delay: 2.29854s;">
                                                    <img fetchpriority="high"
                                                        src="https://cdn.sanity.io/images/7hja5omh/production/1ce93e2e264f917ebb0fee56cb517c9f928eb724-618x814.png"
                                                        alt="84dae9f4837f" style="animation-delay: 1.86341s;">
                                                    <img fetchpriority="high"
                                                        src="https://cdn.sanity.io/images/7hja5omh/production/c3345b86b2fdd8b15ce1547efe0cd44f22f86ffd-618x814.jpg"
                                                        alt="8e1ab8e2ce66" style="animation-delay: 3.62239s;">
                                                </div>
                                            </ul>
                                            <ul class="column column--middle ml-0">
                                                <div class="marquee-wrapper">
                                                    <img fetchpriority="high"
                                                        src="https://cdn.sanity.io/images/7hja5omh/production/d456e061fee766a8e8d1f5fbf86a21595b303177-618x814.png"
                                                        alt="0cd29362659d" style="animation-delay: 5.2746s;">
                                                    <img fetchpriority="high"
                                                        src="https://cdn.sanity.io/images/7hja5omh/production/54c3763bfccfeb58d8689a734de66147c5eb242d-618x814.png"
                                                        alt="c2c6f3f6eac6" style="animation-delay: 1.9992s;">
                                                    <img fetchpriority="high"
                                                        src="https://cdn.sanity.io/images/7hja5omh/production/69b0382eccb1fe3e45d34f088e30577ac876b5d3-618x814.jpg"
                                                        alt="33f74970e992" style="animation-delay: 7.63053s;">
                                                </div>
                                                <div class="marquee-wrapper">
                                                    <img fetchpriority="high"
                                                        src="https://cdn.sanity.io/images/7hja5omh/production/d456e061fee766a8e8d1f5fbf86a21595b303177-618x814.png"
                                                        alt="0cd29362659d" style="animation-delay: 7.34652s;">
                                                    <img fetchpriority="high"
                                                        src="https://cdn.sanity.io/images/7hja5omh/production/54c3763bfccfeb58d8689a734de66147c5eb242d-618x814.png"
                                                        alt="c2c6f3f6eac6" style="animation-delay: 4.81649s;">
                                                    <img fetchpriority="high"
                                                        src="https://cdn.sanity.io/images/7hja5omh/production/69b0382eccb1fe3e45d34f088e30577ac876b5d3-618x814.jpg"
                                                        alt="33f74970e992" style="animation-delay: 4.21417s;">
                                                </div>
                                            </ul>
                                            <ul class="column column--right ml-0">
                                                <div class="marquee-wrapper">
                                                    <img fetchpriority="high"
                                                        src="https://cdn.sanity.io/images/7hja5omh/production/c3345b86b2fdd8b15ce1547efe0cd44f22f86ffd-618x814.jpg"
                                                        alt="08f39f495b0d" style="animation-delay: 6.02828s;">
                                                    <img fetchpriority="high"
                                                        src="https://cdn.sanity.io/images/7hja5omh/production/d9530357b395680af9e5b3b57a1635d5af9deb9d-618x814.png"
                                                        alt="7893a1ed5b3f" style="animation-delay: 3.29897s;">
                                                    <img fetchpriority="high"
                                                        src="https://cdn.sanity.io/images/7hja5omh/production/7bd9d58da84a11db568660274118693f80bfd805-618x814.png"
                                                        alt="f0eef0dcc259" style="animation-delay: 3.53819s;">
                                                </div>
                                                <div class="marquee-wrapper">
                                                    <img fetchpriority="high"
                                                        src="https://cdn.sanity.io/images/7hja5omh/production/c3345b86b2fdd8b15ce1547efe0cd44f22f86ffd-618x814.jpg"
                                                        alt="08f39f495b0d" style="animation-delay: 5.69416s;">
                                                    <img fetchpriority="high"
                                                        src="https://cdn.sanity.io/images/7hja5omh/production/d9530357b395680af9e5b3b57a1635d5af9deb9d-618x814.png"
                                                        alt="7893a1ed5b3f" style="animation-delay: 0.504523s;">
                                                    <img fetchpriority="high"
                                                        src="https://cdn.sanity.io/images/7hja5omh/production/7bd9d58da84a11db568660274118693f80bfd805-618x814.png"
                                                        alt="f0eef0dcc259" style="animation-delay: 3.56291s;">
                                                </div>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <div
                                    class="vc_col-sm-6 wpb_column column_container vc_column_container col column_position_static el_spacing_30px left_padding_tablet_7vw left_padding_desktop_7vw left_padding_tablet_0px"
                                    data-padding-pos="all"
                                    data-has-bg-color="false"
                                    data-bg-color=""
                                    data-bg-opacity="1"
                                    data-animation=""
                                    data-delay="0">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div id="fws_6517a2cd8f749" data-midnight="" data-column-margin="none" class="wpb_row vc_row-fluid vc_row inner_row right_padding_5pct top_padding_tablet_8pct" style="">
                                                <div class="row-bg-wrap">
                                                    <div class="row-bg"></div>
                                                </div>
                                                <div class="row_col_wrap_12_inner col span_12 left">
                                                    <div
                                                        class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column no-extra-padding inherit_tablet inherit_phone"
                                                        data-padding-pos="all"
                                                        data-has-bg-color="false"
                                                        data-bg-color=""
                                                        data-bg-opacity="1"
                                                        data-animation=""
                                                        data-delay="0">
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
                                                                    style="font-size: 3vw; line-height: 3.3vw;">
                                                                    <h2 style="color: #000000;">
                                                                        Every greeting is unique

                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="fws_6517a2cd8fa7b" data-midnight="" data-column-margin="none" class="wpb_row vc_row-fluid vc_row inner_row right_padding_10pct" style="">
                                                <div class="row-bg-wrap">
                                                    <div class="row-bg"></div>
                                                </div>
                                                <div class="row_col_wrap_12_inner col span_12 left">
                                                    <div
                                                        class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding inherit_tablet inherit_phone mobile-disable-entrance-animation"
                                                        data-padding-pos="all"
                                                        data-has-bg-color="false"
                                                        data-bg-color=""
                                                        data-bg-opacity="1"
                                                        data-animation="fade-in"
                                                        data-delay="0"
                                                        data-animation-easing="easeInOutQuad">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div
                                                                    class="nectar-fancy-ul font_size_min_16px font_size_desktop_1-1vw font_line_height_1-6"
                                                                    data-list-icon="icon-salient-check"
                                                                    data-animation="false"
                                                                    data-animation-delay="0"
                                                                    data-color="accent-color"
                                                                    data-spacing="10px"
                                                                    data-alignment="left">
                                                                    <p>
                                                                        Choose from hundreds of personalized messages and share the colors of your heritage proudly through
                                                                    </p>

                                                                </div>
                                                                <div
                                                                    class="nectar-cta alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit font_size_desktop_1-1vw font_size_tablet_16px"
                                                                    data-color="default"
                                                                    data-using-bg="false"
                                                                    data-display="block"
                                                                    data-style="underline"
                                                                    data-alignment="left"
                                                                    data-text-color="custom">
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
                            </div>
                        </div>
                        <div
                            id="fws_6517a2cd90810"
                            data-column-margin="none"
                            data-midnight="dark"
                            data-top-percent="7%"
                            data-bottom-percent="7%"
                            class="wpb_row vc_row-fluid vc_row full-width-content vc_row-o-equal-height vc_row-flex vc_row-o-content-middle right_padding_7pct left_padding_7pct reverse_columns_column_tablet reverse_columns_column_phone bottom_padding_tablet_10pct"
                            style="padding-top: calc(100vw * 0.07); padding-bottom: calc(100vw * 0.07);">
                            <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                <div class="inner-wrap row-bg-layer">
                                    <div class="row-bg viewport-desktop" style=""></div>
                                </div>
                            </div>
                            <div class="row_col_wrap_12 col span_12 dark left">
                                <div
                                    class="vc_col-sm-6 wpb_column column_container vc_column_container col column_position_static el_spacing_30px left_padding_tablet_7vw right_padding_desktop_7vw right_padding_tablet_0px"
                                    data-padding-pos="all"
                                    data-has-bg-color="false"
                                    data-bg-color=""
                                    data-bg-opacity="1"
                                    data-animation=""
                                    data-delay="0">
                                    <div class="vc_column-inner" style="padding-left:7vw">
                                        <div class="wpb_wrapper">
                                            <div id="fws_6517a2cd8f749" data-midnight="" data-column-margin="none" class="wpb_row vc_row-fluid vc_row inner_row right_padding_5pct top_padding_tablet_8pct" style="">
                                                <div class="row-bg-wrap">
                                                    <div class="row-bg"></div>
                                                </div>
                                                <div class="row_col_wrap_12_inner col span_12 left">
                                                    <div
                                                        class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column no-extra-padding inherit_tablet inherit_phone"
                                                        data-padding-pos="all"
                                                        data-has-bg-color="false"
                                                        data-bg-color=""
                                                        data-bg-opacity="1"
                                                        data-animation=""
                                                        data-delay="0">
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
                                                                    style="font-size: 3vw; line-height: 3.3vw;">
                                                                    <h2 style="color: #000000;">
                                                                        A Perfect tool for all generations
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="fws_6517a2cd8fa7b" data-midnight="" data-column-margin="none" class="wpb_row vc_row-fluid vc_row inner_row right_padding_10pct" style="">
                                                <div class="row-bg-wrap">
                                                    <div class="row-bg"></div>
                                                </div>
                                                <div class="row_col_wrap_12_inner col span_12 left">
                                                    <div
                                                        class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding inherit_tablet inherit_phone mobile-disable-entrance-animation"
                                                        data-padding-pos="all"
                                                        data-has-bg-color="false"
                                                        data-bg-color=""
                                                        data-bg-opacity="1"
                                                        data-animation="fade-in"
                                                        data-delay="0"
                                                        data-animation-easing="easeInOutQuad">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div
                                                                    class="nectar-fancy-ul font_size_min_16px font_size_desktop_1-1vw font_line_height_1-6"
                                                                    data-list-icon="icon-salient-check"
                                                                    data-animation="false"
                                                                    data-animation-delay="0"
                                                                    data-color="accent-color"
                                                                    data-spacing="10px"
                                                                    data-alignment="left">
                                                                    <p>With just a few clicks, create and share your perfect greeting in seconds directly on your WhatsApp
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
                                <div
                                    class="vc_col-sm-6 wpb_column column_container vc_column_container col column_position_relative el_spacing_0px col-overflow-hidden"
                                    data-overlay-color="true"
                                    data-padding-pos="all"
                                    data-has-bg-color="false"
                                    data-bg-color=""
                                    data-bg-opacity="1"
                                    data-animation=""
                                    data-delay="0">
                                    <div class="vc_column-inner" style="position:unset;">
                                        <div class="text-align-right" style="text-align:right">
                                            <img src="public/auth/img/Slide 6 Image.webp" alt="img 7" style="height: auto;object-fit: cover;border-radius: 20px;" />
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
                            style="padding-top: calc(100vw * 0.07); padding-bottom: calc(100vw * 0.07);">
                            <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                <div class="inner-wrap row-bg-layer">
                                    <div class="row-bg viewport-desktop" style=""></div>
                                </div>
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
                                    data-delay="0">
                                    <div class="vc_column-inner">
                                        <div class="section7Img">
                                            <img src="public/auth/img/Slide 7 Image.webp" alt="img 7" class="img" />
                                            <img src="public/auth/img/Slide 7.png" class="attachImg" />
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
                                    data-delay="0">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div id="fws_6517a2cd91077" data-midnight="" data-column-margin="none" class="wpb_row vc_row-fluid vc_row inner_row right_padding_5pct top_padding_tablet_8pct" style="">
                                                <div class="row-bg-wrap">
                                                    <div class="row-bg"></div>
                                                </div>
                                                <div class="row_col_wrap_12_inner col span_12 left">
                                                    <div
                                                        class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column no-extra-padding inherit_tablet inherit_phone"
                                                        data-padding-pos="all"
                                                        data-has-bg-color="false"
                                                        data-bg-color=""
                                                        data-bg-opacity="1"
                                                        data-animation=""
                                                        data-delay="0">
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
                                                                    style="font-size: 3vw; line-height: 3.3vw;">
                                                                    <h2 style="color: #000000;">
                                                                        Celebrate every occasion, big or small

                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="fws_6517a2cd9139c" data-midnight="" data-column-margin="none" class="wpb_row vc_row-fluid vc_row inner_row right_padding_10pct" style="">
                                                <div class="row-bg-wrap">
                                                    <div class="row-bg"></div>
                                                </div>
                                                <div class="row_col_wrap_12_inner col span_12 left">
                                                    <div
                                                        class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding inherit_tablet inherit_phone mobile-disable-entrance-animation"
                                                        data-padding-pos="all"
                                                        data-has-bg-color="false"
                                                        data-bg-color=""
                                                        data-bg-opacity="1"
                                                        data-animation="fade-in"
                                                        data-delay="0"
                                                        data-animation-easing="easeOutQuad">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div
                                                                    class="nectar-fancy-ul font_size_min_16px font_size_desktop_1-1vw font_line_height_1-6"
                                                                    data-list-icon="icon-salient-check"
                                                                    data-animation="false"
                                                                    data-animation-delay="0"
                                                                    data-color="accent-color"
                                                                    data-spacing="10px"
                                                                    data-alignment="left">
                                                                    <p>Wish Wishpik, every moment becomes a canvas for your emotions – paint it with your words.</p>
                                                                </div>
                                                                <div
                                                                    class="nectar-cta alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit font_size_desktop_1-1vw font_size_tablet_16px"
                                                                    data-color="default"
                                                                    data-using-bg="false"
                                                                    data-display="block"
                                                                    data-style="underline"
                                                                    data-alignment="left"
                                                                    data-text-color="custom">
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
                            style="padding-top: calc(100vw * 0.07); padding-bottom: calc(100vw * 0.07);padding-bottom:0">
                            <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                <div class="inner-wrap row-bg-layer">
                                    <div class="row-bg viewport-desktop" style=""></div>
                                </div>
                            </div>
                            <div class="row_col_wrap_12 col span_12 dark left">
                                <div
                                    class="vc_col-sm-6 wpb_column column_container vc_column_container col column_position_static el_spacing_30px left_padding_tablet_7vw right_padding_desktop_7vw right_padding_tablet_0px"
                                    data-padding-pos="all"
                                    data-has-bg-color="false"
                                    data-bg-color=""
                                    data-bg-opacity="1"
                                    data-animation=""
                                    data-delay="0">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div id="fws_6517a2cd8f749" data-midnight="" data-column-margin="none" class="wpb_row vc_row-fluid vc_row inner_row right_padding_5pct top_padding_tablet_8pct" style="">
                                                <div class="row-bg-wrap">
                                                    <div class="row-bg"></div>
                                                </div>
                                                <div class="row_col_wrap_12_inner col span_12 left">
                                                    <div
                                                        class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column no-extra-padding inherit_tablet inherit_phone"
                                                        data-padding-pos="all"
                                                        data-has-bg-color="false"
                                                        data-bg-color=""
                                                        data-bg-opacity="1"
                                                        data-animation=""
                                                        data-delay="0">
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
                                                                    style="font-size: 3vw; line-height: 3.3vw;">
                                                                    <h2 style="color: #000000;">
                                                                        Make greetings personal again

                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="fws_6517a2cd8fa7b" data-midnight="" data-column-margin="none" class="wpb_row vc_row-fluid vc_row inner_row right_padding_10pct" style="">
                                                <div class="row-bg-wrap">
                                                    <div class="row-bg"></div>
                                                </div>
                                                <div class="row_col_wrap_12_inner col span_12 left">
                                                    <div
                                                        class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding inherit_tablet inherit_phone mobile-disable-entrance-animation"
                                                        data-padding-pos="all"
                                                        data-has-bg-color="false"
                                                        data-bg-color=""
                                                        data-bg-opacity="1"
                                                        data-animation="fade-in"
                                                        data-delay="0"
                                                        data-animation-easing="easeInOutQuad">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div
                                                                    class="nectar-fancy-ul font_size_min_16px font_size_desktop_1-1vw font_line_height_1-6"
                                                                    data-list-icon="icon-salient-check"
                                                                    data-animation="false"
                                                                    data-animation-delay="0"
                                                                    data-color="accent-color"
                                                                    data-spacing="10px"
                                                                    data-alignment="left">
                                                                    <p>Wishpik helps you personalize your greeting with your name or your business logo.

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
                                <div
                                    class="vc_col-sm-6 wpb_column column_container vc_column_container col column_position_relative el_spacing_0px col-overflow-hidden"
                                    data-overlay-color="true"
                                    data-padding-pos="all"
                                    data-has-bg-color="false"
                                    data-bg-color=""
                                    data-bg-opacity="1"
                                    data-animation=""
                                    data-delay="0">
                                    <div class="vc_column-inner" style="position:unset;">
                                        <div class="sectiom8Img">
                                            <img src="public/auth/img/Slide 8 Image.webp" alt="img 6" style="height: 600px;
                                                width: 80%;
                                                object-fit: cover;
                                                border-radius: 20px;
                                            " />
                                            <img src="public/auth/img/Slide 8.png" alt="" class="img" />
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
                            style="padding-top: calc(100vw * 0.12); padding-bottom: 0px;">
                            <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                <div class="inner-wrap row-bg-layer">
                                    <div class="row-bg viewport-desktop" style=""></div>
                                </div>
                            </div>
                            <div class="row_col_wrap_12 col span_12 dark left">
                                <div
                                    class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding el_spacing_0px inherit_tablet inherit_phone"
                                    data-padding-pos="all"
                                    data-has-bg-color="false"
                                    data-bg-color=""
                                    data-bg-opacity="1"
                                    data-animation=""
                                    data-delay="0">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div
                                                id="fws_6517a2cd8c8a8"
                                                data-midnight=""
                                                data-column-margin="default"
                                                class="wpb_row vc_row-fluid vc_row inner_row right_padding_25vw left_padding_25vw right_padding_phone_20vw left_padding_phone_20vw"
                                                style="padding-bottom: 5%;">
                                                <div class="row-bg-wrap">
                                                    <div class="row-bg"></div>
                                                </div>
                                                <div class="row_col_wrap_12_inner col span_12 left">
                                                    <div
                                                        class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column centered-text no-extra-padding inherit_tablet inherit_phone"
                                                        data-padding-pos="all"
                                                        data-has-bg-color="false"
                                                        data-bg-color=""
                                                        data-bg-opacity="1"
                                                        data-animation=""
                                                        data-delay="0">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div
                                                                    class="nectar-text-inline-images nectar-link-underline-effect font_size_desktop_4vw font_size_tablet_4vw font_size_phone_5vw nectar-text-inline-images--animation_circle_fade_in nectar-text-inline-images--stagger-animation font_line_height_1-4 right_margin_desktop_-6pct">
                                                                    <div class="nectar-text-inline-images__inner">
                                                                        <h2>
                                                                            Trusted by over 4,000 clients worldwide
                                                                           
                                                                           
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
                            style="padding-top: 0px; padding-bottom: calc(100vw * 0.04);">
                            <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                <div class="inner-wrap row-bg-layer">
                                    <div class="row-bg viewport-desktop" style=""></div>
                                </div>
                            </div>
                            <div class="row_col_wrap_12 col span_12 dark left">
                                <div
                                    class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding el_spacing_0px inherit_tablet inherit_phone"
                                    data-padding-pos="all"
                                    data-has-bg-color="false"
                                    data-bg-color=""
                                    data-bg-opacity="1"
                                    data-animation=""
                                    data-delay="0">
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
                                                data-shadow="box-shadow: 40px 60px 60px -20px rgba(0,0,0,0.175);">
                                                <div class="slides">
                                                    <div class="flickity-viewport">
                                                        <div class="flickity-slider">
                                                            <blockquote>
                                                                <div data-shadow="" class="image-icon">“</div>
                                                                <p>
                                                                Wishpik makes sending festival greetings so easy! The templates are beautiful, and I love how I can personalize them with my name. It's perfect for sharing thoughtful wishes with friends and family. The free trial got me hooked, and now I'm a yearly subscriber! <span role="none" class="bottom-arrow"></span>
                                                                </p>
                                                                <span class="testimonial-name">Priya Malhotra</span><span class="title">28, Mumbai</span>
                                                            </blockquote>
                                                            <blockquote>
                                                                <div data-shadow="" class="image-icon">“</div>
                                                                <p>
                                                                As someone who runs a small business, Wishpik has been a game changer for me. I can quickly create professional, customized greetings for clients during festivals. It saves me so much time and adds a personal touch that my clients appreciate. <span role="none" class="bottom-arrow"></span>
                                                                </p>
                                                                <span class="testimonial-name">Rahul Verma</span><span class="title">35, Delhi</span>
                                                            </blockquote>
                                                            <blockquote>
                                                                <div data-shadow="" class="image-icon">“</div>
                                                                <p>I was looking for an easy way to send personalized festival wishes to my family spread across the world, and Wishpik is perfect! The options are endless, and it’s so user-friendly. The designs are elegant, and it’s great to see the smile on everyone’s face when they receive something personal <span role="none" class="bottom-arrow"></span>
                                                                </p>
                                                                <span class="testimonial-name">Neha Sharma</span><span class="title"> 42, Bengaluru</span>
                                                            </blockquote>
                                                            <blockquote>
                                                                <div data-shadow="" class="image-icon">“</div>
                                                                <p>I’m not very tech-savvy, but Wishpik is so simple to use! I enjoy customizing the beautiful templates for festivals, and adding my own name makes it feel special. It’s the perfect way to stay connected with my relatives during the festive season <span role="none" class="bottom-arrow"></span>
                                                                </p>
                                                                <span class="testimonial-name">Ravi Iyer</span><span class="title">56, Chennai</span>
                                                            </blockquote>
                                                            <blockquote>
                                                                <div data-shadow="" class="image-icon">“</div>
                                                                <p>Wishpik is awesome! I love how I can send creative, personalized wishes to my friends instantly. The customization options are so cool, and the free trial helped me see how easy it is. Subscribing for the yearly plan was totally worth it! <span role="none" class="bottom-arrow"></span>
                                                                </p>
                                                                <span class="testimonial-name">Ankita Joshi</span><span class="title">22, Pune</span>
                                                            </blockquote>
                                                            <blockquote>
                                                                <div data-shadow="" class="image-icon">“</div>
                                                                <p>Wishpik has made my life so much easier when it comes to festive greetings. I can choose from so many templates, and personalizing them with my logo adds a professional touch to my business communications. It's quick, efficient, and gives me one less thing to worry about! <span role="none" class="bottom-arrow"></span>
                                                                </p>
                                                                <span class="testimonial-name">Amit Patel</span><span class="title">33, Ahmedabad</span>
                                                            </blockquote>
                                                            <blockquote>
                                                                <div data-shadow="" class="image-icon">“</div>
                                                                <p>The creative freedom Wishpik offers is wonderful! I love how I can design personalized greetings for every occasion, and the process is so simple. Whether it’s Diwali or just a casual daily wish, I always find something perfect to share with my loved ones <span role="none" class="bottom-arrow"></span>
                                                                </p>
                                                                <span class="testimonial-name">Meera Kapoor</span><span class="title">45, Jaipur</span>
                                                            </blockquote>
                                                            <blockquote>
                                                                <div data-shadow="" class="image-icon">“</div>
                                                                <p>I’ve been using Wishpik for all my festive greetings, and it’s been amazing. The designs are trendy and modern, and I appreciate how easy it is to customize everything. My family and friends love receiving these unique, personal wishes from me!<span role="none" class="bottom-arrow"></span>
                                                                </p>
                                                                <span class="testimonial-name">Karan Singh</span><span class="title">29, Gurgaon
                                                                </span>
                                                            </blockquote>
                                                            <blockquote>
                                                                <div data-shadow="" class="image-icon">“</div>
                                                                <p>I’m always looking for ways to make my festival greetings stand out, and Wishpik does exactly that. The variety of templates and quotes is impressive, and the option to personalize with my name makes it feel extra special. It’s become my go-to platform for all festive occasions.<span role="none" class="bottom-arrow"></span>
                                                                </p>
                                                                <span class="testimonial-name">Sonal Deshmukh</span><span class="title">52, Nagpur</span>
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
                            id="fws_6517a2cd91944"
                            data-column-margin="default"
                            data-midnight="dark"
                            data-top-percent="12%"
                            data-bottom-percent="8%"
                            class="wpb_row vc_row-fluid vc_row full-width-content vc_row-o-equal-height vc_row-flex vc_row-o-content-top right_padding_7pct left_padding_7pct top_padding_tablet_10pct"
                            style="padding-bottom: calc(100vw * 0.08);">
                            <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                <div class="inner-wrap row-bg-layer">
                                    <div class="row-bg viewport-desktop" style=""></div>
                                </div>
                            </div>
                            <div class="row_col_wrap_12 col span_12 dark left">
                                <div
                                    class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding inherit_tablet inherit_phone"
                                    data-padding-pos="all"
                                    data-has-bg-color="false"
                                    data-bg-color=""
                                    data-bg-opacity="1"
                                    data-animation=""
                                    data-delay="0">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div
                                                id="fws_6517a2cd91d27"
                                                data-midnight=""
                                                data-column-margin="default"
                                                class="wpb_row vc_row-fluid vc_row inner_row right_padding_24pct left_padding_24pct right_padding_phone_12pct left_padding_phone_12pct"
                                                style="padding-bottom: 3%;">
                                                <div class="row-bg-wrap">
                                                    <div class="row-bg"></div>
                                                </div>
                                                <div class="row_col_wrap_12_inner col span_12 left">
                                                    <div
                                                        class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column centered-text no-extra-padding inherit_tablet inherit_phone"
                                                        data-padding-pos="all"
                                                        data-has-bg-color="false"
                                                        data-bg-color=""
                                                        data-bg-opacity="1"
                                                        data-animation=""
                                                        data-delay="0">
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
                                                                    style="">
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
                                                                                    fill="none"></path>
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
                                                style="">
                                                <div class="row-bg-wrap">
                                                    <div class="row-bg"></div>
                                                </div>
                                                <div class="row_col_wrap_12_inner col span_12 left">
                                                    <div
                                                        class="vc_col-sm-12 vc_hidden-xs wpb_column column_container vc_column_container col child_column has-animation no-extra-padding el_spacing_5px inherit_tablet inherit_phone"
                                                        data-padding-pos="all"
                                                        data-has-bg-color="false"
                                                        data-bg-color=""
                                                        data-bg-opacity="1"
                                                        data-animation="fade-in"
                                                        data-delay="0">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="nectar-badge nectar-inherit-italic nectar-display-block text-color-000000 padding-amount-none badge-style-default" data-bg-color-custom="">
                                                                    <div class="nectar-badge__inner">Save 25%</div>
                                                                </div>
                                                                <div class="nectar-lottie-wrap width_desktop_40px alignment_left">
                                                                    <div
                                                                        class="nectar-lottie"
                                                                        data-lottie-settings='{"trigger_type":"play","mobile_func":"default","trigger_offset":"8.00,100.00","frame_constraint":"0.00,100.00","speed":"0.9","width_desktop":"40px","alignment":"left","preserve_aspect_ratio":"xMidYMid meet","preserveaspectratio":"center","json_url":"https:\/\/assets2.lottiefiles.com\/packages\/lf20_ddvwtafj.json","box_shadow_method":"filter"}'></div>
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
                                                    data-alignment="left">
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
                                                            <div class="row-bg-wrap">
                                                                <div class="row-bg"></div>
                                                            </div>
                                                            <div class="row_col_wrap_12_inner col span_12 left" style="justify-content:center">
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
                                                                    data-delay="0">
                                                                    <div class="vc_column-inner" style="box-shadow: 40px 60px 60px -20px rgba(0, 0, 0, 0.175);">
                                                                        <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                                                            <div class="column-bg-overlay" style="opacity: 1; background-color: #ff6b3d;"></div>
                                                                        </div>
                                                                        <div class="wpb_wrapper">
                                                                            <div
                                                                                class="nectar-lottie-wrap width_desktop_150pct height_desktop_150pct alignment_center position_desktop_absolute top_position_desktop_0px left_position_desktop_0px translate_y_desktop_-50pct translate_x_desktop_25pct z_index_-1">
                                                                                <div
                                                                                    class="nectar-lottie"
                                                                                    data-lottie-settings='{"trigger_type":"play","mobile_func":"default","loop":"true","trigger_offset":"0.00,100.00","frame_constraint":"0.00,100.00","speed":"0.2","width_desktop":"150%","height_desktop":"150%","alignment":"center","preserve_aspect_ratio":"xMidYMid meet","position_desktop":"absolute","top_position_desktop":"0","left_position_desktop":"0","translate_y_desktop":"-50%","translate_x_desktop":"25%","preserveaspectratio":"none","json_url":"https:\/\/assets1.lottiefiles.com\/packages\/lf20_w4NUp4.json","zindex":"-1","box_shadow_method":"filter"}'
                                                                                    id="nectar-lottie-1696052543289">
                                                                                    <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 512 512"
                                                                                        width="512"
                                                                                        height="512"
                                                                                        preserveAspectRatio="xMidYMid meet"
                                                                                        style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                                                                                        <defs>
                                                                                            <clippath id="__lottie_element_4">
                                                                                                <rect width="512" height="512" x="0" y="0"></rect>
                                                                                            </clippath>
                                                                                        </defs>
                                                                                        <g clip-path="url(#__lottie_element_4)">
                                                                                            <g transform="matrix(1,0,0,1,85.5,74.5)" opacity="1" style="display: block;">
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,2.75,90.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,13.75,162.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,2.75,223.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,41.75,254.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,102.75,283.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,155.75,326.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,245.75,320.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,204.75,359.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,306.75,223.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,337.75,162.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,295.75,99.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,282.75,42.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,165.75,33.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,72.75,68.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,101.75,2.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,55.75,143.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,331.25,270.25)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2 C1.1039999723434448,-2 2,-1.1039999723434448 2,0 C2,1.1039999723434448 1.1039999723434448,2 0,2 C-1.1039999723434448,2 -2,1.1039999723434448 -2,0 C-2,-1.1039999723434448 -1.1039999723434448,-2 0,-2z"></path>
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
                                                                                                        d=" M-169.06100463867188,25.951570510864258 C-163.11500549316406,129.95327758789062 -14.474956512451172,218.24002075195312 60.99042892456055,177.05714416503906 C128.99093627929688,139.94825744628906 154.99266052246094,93.9543228149414 170.47885131835938,35.95271301269531 C185.96505737304688,-22.048860549926758 125.83004760742188,-148.74258422851562 52.99071502685547,-160.2494354248047 C-47.007633209228516,-176.04696655273438 -175.0066375732422,-78.04781341552734 -169.06100463867188,25.951570510864258z"></path>
                                                                                                </g>
                                                                                            </g>
                                                                                            <g
                                                                                                transform="matrix(0.9063078165054321,-0.4226182699203491,0.4226182699203491,0.9063078165054321,256,256)"
                                                                                                opacity="0.75"
                                                                                                style="display: block;">
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,2.1410000324249268,0.5230000019073486)">
                                                                                                    <path
                                                                                                        stroke-linecap="butt"
                                                                                                        stroke-linejoin="miter"
                                                                                                        fill-opacity="0"
                                                                                                        stroke-miterlimit="3"
                                                                                                        stroke="rgb(255,255,255)"
                                                                                                        stroke-opacity="0.25"
                                                                                                        stroke-width="1"
                                                                                                        d=" M-169.06100463867188,25.951570510864258 C-163.11500549316406,129.95327758789062 -14.474956512451172,218.24002075195312 60.99042892456055,177.05714416503906 C128.99093627929688,139.94825744628906 154.99266052246094,93.9543228149414 170.47885131835938,35.95271301269531 C185.96505737304688,-22.048860549926758 125.83004760742188,-148.74258422851562 52.99071502685547,-160.2494354248047 C-47.007633209228516,-176.04696655273438 -175.0066375732422,-78.04781341552734 -169.06100463867188,25.951570510864258z"></path>
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
                                                                                                        d=" M-181.06300354003906,-12.04699993133545 C-180.08399963378906,66.48300170898438 -0.4729999899864197,230.2429962158203 74.99199676513672,189.06100463867188 C142.99200439453125,151.9530029296875 169.86000061035156,63.47600173950195 156.47900390625,-8.04699993133545 C143.09800720214844,-79.56999969482422 69.85900115966797,-164.5229949951172 -15.008000373840332,-168.25 C-99.875,-171.9770050048828 -182.14100646972656,-98.52300262451172 -181.06300354003906,-12.04699993133545z"></path>
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
                                                                                                        d=" M-193.06300354003906,37.952999114990234 C-181.98500061035156,170.42999267578125 1.5269999504089355,214.2429962158203 76.99199676513672,173.06100463867188 C144.99200439453125,135.9530029296875 197.86000061035156,63.47600173950195 182.47900390625,-38.047000885009766 C167.09800720214844,-139.57000732421875 85.85900115966797,-190.5229949951172 -29.007999420166016,-180.25 C-143.875,-169.9770050048828 -204.14100646972656,-94.52400207519531 -193.06300354003906,37.952999114990234z"></path>
                                                                                                </g>
                                                                                            </g>
                                                                                            <g
                                                                                                transform="matrix(0.9063078165054321,-0.4226182699203491,0.4226182699203491,0.9063078165054321,256,256)"
                                                                                                opacity="0.75"
                                                                                                style="display: block;">
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,2.1410000324249268,0.5230000019073486)">
                                                                                                    <path
                                                                                                        stroke-linecap="butt"
                                                                                                        stroke-linejoin="miter"
                                                                                                        fill-opacity="0"
                                                                                                        stroke-miterlimit="3"
                                                                                                        stroke="rgb(235,230,217)"
                                                                                                        stroke-opacity="0.25"
                                                                                                        stroke-width="1"
                                                                                                        d=" M-169.06100463867188,25.951570510864258 C-163.11500549316406,129.95327758789062 -14.474956512451172,218.24002075195312 60.99042892456055,177.05714416503906 C128.99093627929688,139.94825744628906 154.99266052246094,93.9543228149414 170.47885131835938,35.95271301269531 C185.96505737304688,-22.048860549926758 125.83004760742188,-148.74258422851562 52.99071502685547,-160.2494354248047 C-47.007633209228516,-176.04696655273438 -175.0066375732422,-78.04781341552734 -169.06100463867188,25.951570510864258z"></path>
                                                                                                </g>
                                                                                            </g>
                                                                                            <g
                                                                                                transform="matrix(0.9063078165054321,0.4226182699203491,-0.4226182699203491,0.9063078165054321,256,256)"
                                                                                                opacity="1"
                                                                                                style="display: block;">
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,2.1410000324249268,0.5230000019073486)">
                                                                                                    <path
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round"
                                                                                                        fill-opacity="0"
                                                                                                        stroke="rgb(235,230,217)"
                                                                                                        stroke-opacity="0.25"
                                                                                                        stroke-width="1"
                                                                                                        d=" M-181.06300354003906,-12.04699993133545 C-180.08399963378906,66.48300170898438 -0.4729999899864197,230.2429962158203 74.99199676513672,189.06100463867188 C142.99200439453125,151.9530029296875 169.86000061035156,63.47600173950195 156.47900390625,-8.04699993133545 C143.09800720214844,-79.56999969482422 69.85900115966797,-164.5229949951172 -15.008000373840332,-168.25 C-99.875,-171.9770050048828 -182.14100646972656,-98.52300262451172 -181.06300354003906,-12.04699993133545z"></path>
                                                                                                </g>
                                                                                            </g>
                                                                                            <g
                                                                                                transform="matrix(0.7169100046157837,0,0,0.7351499795913696,251.71759033203125,275.4610290527344)"
                                                                                                opacity="0.25"
                                                                                                style="display: block;">
                                                                                                <g opacity="1" transform="matrix(0.9836400151252747,0,0,1,6.1479997634887695,-23.851999282836914)">
                                                                                                    <path
                                                                                                        stroke-linecap="butt"
                                                                                                        stroke-linejoin="miter"
                                                                                                        fill-opacity="0"
                                                                                                        stroke-miterlimit="4"
                                                                                                        stroke="rgb(235,230,217)"
                                                                                                        stroke-opacity="1"
                                                                                                        stroke-width="1"
                                                                                                        d=" M0,-186.14849853515625 C102.73535919189453,-186.14849853515625 186.14849853515625,-102.73535919189453 186.14849853515625,0 C186.14849853515625,102.73535919189453 102.73535919189453,186.14849853515625 0,186.14849853515625 C-102.73535919189453,186.14849853515625 -186.14849853515625,102.73535919189453 -186.14849853515625,0 C-186.14849853515625,-102.73535919189453 -102.73535919189453,-186.14849853515625 0,-186.14849853515625z"></path>
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
                                                                                                    d="M23.5 31.461h-15c-0.316 0-0.588-0.221-0.652-0.531l-2.5-12c-0.041-0.195 0.008-0.401 0.135-0.557 0.127-0.153 0.317-0.245 0.517-0.245h20c0.2 0 0.391 0.088 0.519 0.245 0.125 0.156 0.175 0.361 0.135 0.557l-2.5 12c-0.065 0.309-0.339 0.531-0.653 0.531zM9.043 30.128h13.916l2.223-10.667h-18.361l2.223 10.667zM24.667 22.128h-17.333c-0.368 0-0.667-0.3-0.667-0.667 0-0.369 0.299-0.667 0.667-0.667h17.333c0.367 0 0.667 0.297 0.667 0.667 0 0.367-0.3 0.667-0.667 0.667zM16 18.795c-0.368 0-0.667-0.3-0.667-0.667v-14.667c0-0.368 0.299-0.667 0.667-0.667s0.667 0.299 0.667 0.667v14.667c0 0.367-0.299 0.667-0.667 0.667zM15.283 16.46v0c-1.988 0-3.672-0.699-4.871-2.023-1.235-1.361-1.856-3.341-1.664-5.295 0.035-0.355 0.347-0.649 0.697-0.6 2.472 0.131 4.537 1.016 5.813 2.495 1.096 1.271 1.58 2.925 1.399 4.788-0.031 0.319-0.285 0.575-0.607 0.599-0.263 0.025-0.519 0.036-0.768 0.036zM10.048 9.932c0.019 1.361 0.503 2.676 1.352 3.609 0.94 1.036 2.281 1.584 3.883 1.584v0c0.027 0 0.053 0 0.080 0 0.008-1.253-0.371-2.359-1.112-3.217-0.925-1.072-2.401-1.761-4.203-1.976zM16.776 12.46c-0.249 0-0.505-0.011-0.771-0.033-0.32-0.028-0.576-0.28-0.607-0.597-0.18-1.861 0.304-3.519 1.399-4.789 1.279-1.479 3.341-2.364 5.813-2.492 0.356-0.045 0.663 0.248 0.696 0.597 0.193 1.953-0.428 3.932-1.664 5.296-1.196 1.32-2.879 2.019-4.867 2.019zM16.695 11.127c1.667-0.028 3.008-0.531 3.964-1.584 0.849-0.936 1.333-2.251 1.352-3.609-1.801 0.211-3.277 0.904-4.203 1.973-0.74 0.864-1.12 1.967-1.113 3.22zM15.283 8.46v0c-1.988 0-3.672-0.699-4.871-2.023-1.235-1.361-1.856-3.341-1.664-5.295 0.035-0.355 0.347-0.637 0.697-0.6 2.472 0.131 4.537 1.016 5.813 2.495 1.096 1.271 1.58 2.925 1.399 4.788-0.031 0.319-0.285 0.575-0.607 0.599-0.263 0.025-0.519 0.036-0.768 0.036zM10.048 1.932c0.019 1.361 0.503 2.676 1.352 3.609 0.94 1.036 2.281 1.584 3.883 1.584v0c0.027 0 0.053 0 0.080 0 0.008-1.253-0.371-2.359-1.112-3.217-0.925-1.072-2.401-1.761-4.203-1.976z"></path>
                                                                                            </svg>
                                                                                        </span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="nectar-responsive-text font_size_desktop_2vw font_size_tablet_3vw font_size_phone_16px font_line_height_1px nectar-link-underline-effect">
                                                                                <p>Starter</p>
                                                                            </div>
                                                                            <div class="nectar-responsive-text font_size_desktop_4vw font_size_tablet_7vw font_line_height_1px nectar-link-underline-effect">
                                                                                <p>Free</p>
                                                                            </div>
                                                                            <div class="divider-wrap" data-alignment="default">
                                                                                <div style="height: 15px;" class="divider"></div>
                                                                            </div>
                                                                            <div
                                                                                class="nectar-fancy-ul font_size_min_16px font_size_desktop_1-1vw"
                                                                                data-list-icon="dot"
                                                                                data-animation="false"
                                                                                data-animation-delay="0"
                                                                                data-spacing="10px"
                                                                                data-alignment="left">
                                                                                <ul>
                                                                                    <li>Send wishes directly to your friends and family</li>
                                                                                    <li>Limited templates</li>
                                                                                    <li>With watermark</li>
                                                                                    <li>5 downloads</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="divider-wrap" data-alignment="default">
                                                                                <div style="height: 90px;" class="divider"></div>
                                                                            </div>
                                                                            <div
                                                                                class="nectar-cta alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit position_desktop_absolute right_position_desktop_40px left_position_desktop_40px bottom_position_desktop_40px"
                                                                                data-color="white"
                                                                                data-using-bg="true"
                                                                                data-style="text-reveal-wave"
                                                                                data-display="block"
                                                                                data-alignment="center"
                                                                                data-text-color="custom">
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
                                                                    data-delay="0">
                                                                    <div class="vc_column-inner">
                                                                        <h5 class="vb">Best Value</h5>
                                                                        <div class="column-bg-overlay-wrap premium-card column-bg-layer" data-bg-animation="none">
                                                                            <div class="column-bg-overlay" style="opacity: 1; background-color: #ffffff;"></div>
                                                                        </div>
                                                                        <div class="wpb_wrapper">
                                                                            
                                                                            <div class="nectar nectar-responsive-text font_size_desktop_2vw font_size_tablet_3vw font_size_phone_16px font_line_height_1px nectar-link-underline-effect">
                                                                                <p class="pb-0">Premium</p>
                                                                                <div class="nectar_icon_wrap" data-style="default" data-padding="0px" data-color="black" style="">
                                                                                <div class="nectar_icon">
                                                                                    <span class="im-icon-wrap" data-color="black" style="height: 50px; width: 50px;">
                                                                                        <span>
                                                                                            <svg role="presentation" version="1.1" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32">
                                                                                                <path
                                                                                                    d="M14.253 30.18c-0.015 0-0.029 0-0.047-0.003-3.431-0.237-6.265-1.631-8.425-4.143-3.521-4.1-5.069-11.008-4.363-19.451 0.029-0.361 0.321-0.66 0.703-0.609 4.747 0.277 9.948 3.045 13.576 7.224 3.303 3.801 4.924 8.252 4.572 12.539-0.031 0.364-0.339 0.628-0.72 0.609-0.367-0.031-0.64-0.355-0.611-0.719 0.323-3.924-1.187-8.028-4.249-11.556-3.232-3.724-7.772-6.251-11.995-6.712-0.532 7.676 0.947 14.14 4.095 17.807 1.917 2.232 4.444 3.472 7.505 3.68 0.367 0.027 0.644 0.344 0.62 0.711-0.019 0.352-0.312 0.623-0.661 0.623zM17.748 31.361c-0.305 0-0.58-0.211-0.649-0.521-1.608-7.159-9.288-16.467-12.544-19.611-0.265-0.253-0.273-0.675-0.019-0.941 0.256-0.264 0.68-0.271 0.943-0.019 3.347 3.236 11.245 12.827 12.919 20.277 0.081 0.361-0.145 0.713-0.504 0.8-0.048 0.011-0.097 0.015-0.145 0.015zM19.671 24.289c-0.309 0-0.585-0.216-0.652-0.531-0.076-0.36 0.156-0.713 0.516-0.789 10.043-2.101 10.111-15.788 9.765-20.943-5.8 0.629-11.848 5.075-14.577 10.795-0.159 0.333-0.559 0.472-0.889 0.315-0.332-0.159-0.473-0.556-0.315-0.888 3.028-6.348 9.907-11.229 16.356-11.607 0.355-0.035 0.675 0.251 0.703 0.609 1.072 12.781-2.955 21.388-10.771 23.025-0.047 0.008-0.091 0.013-0.136 0.013zM17.747 18.057c-0.115 0-0.231-0.028-0.336-0.091-0.317-0.188-0.424-0.593-0.237-0.915 3.067-5.233 7.295-10.143 9.389-12.169 0.267-0.252 0.688-0.249 0.943 0.019 0.255 0.261 0.249 0.688-0.016 0.943-2.041 1.972-6.167 6.765-9.167 11.887-0.125 0.207-0.348 0.327-0.576 0.327z"></path>
                                                                                            </svg>
                                                                                        </span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            </div>
                                                                            <div class="nectar-price-typography nectar-inherit-h3 font_size_desktop_4vw font_size_tablet_7vw font_line_height_1-5">
                                                                                <span class="before-text" style="font-size: 0.4em;">$</span><span class="price-text">29</span>
                                                                                <span class="after-text" style="font-size: 0.4em;">/ month</span>
                                                                            </div>
                                                                            <div class="divider-wrap" data-alignment="default">
                                                                                <div style="height: 15px;" class="divider"></div>
                                                                            </div>
                                                                            <div
                                                                                class="nectar-fancy-ul font_size_min_16px font_size_desktop_1-1vw"
                                                                                data-list-icon="dot"
                                                                                data-animation="false"
                                                                                data-animation-delay="0"
                                                                                data-spacing="10px"
                                                                                data-alignment="left">
                                                                                <ul>
                                                                                    <li>Send wishes directly to your friends and family</li>
                                                                                    <li>1000’s of templates</li>
                                                                                    <li>No watermark</li>
                                                                                    <li>Unlimited downloads</li>
                                                                                    <li>12 months access</li>
                                                                                    <li>Change name</li>
                                                                                    <li>WhatsApp reminders</li>
                                                                                    <li>Access to offers and updates</li>
                                                                                    <li>Live support</li>
                                                                                    <li>Download history</li>

                                                                                </ul>
                                                                            </div>
                                                                            <div class="divider-wrap" data-alignment="default">
                                                                                <div style="height: 90px;" class="divider"></div>
                                                                            </div>
                                                                            <div
                                                                                class="nectar-cta alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit position_desktop_absolute right_position_desktop_40px left_position_desktop_40px bottom_position_desktop_40px"
                                                                                data-color="accent-color"
                                                                                data-using-bg="true"
                                                                                data-style="text-reveal-wave"
                                                                                data-display="block"
                                                                                data-alignment="center"
                                                                                data-text-color="custom">
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
                                                                <!--<div-->
                                                                <!--    style=""-->
                                                                <!--    class="vc_col-sm-4 wpb_column column_container vc_column_container col child_column el_spacing_10px left_padding_desktop_40px top_padding_desktop_40px right_padding_desktop_40px bottom_padding_desktop_40px instance-38"-->
                                                                <!--    data-using-bg="true"-->
                                                                <!--    data-border-radius="15px"-->
                                                                <!--    data-padding-pos="all"-->
                                                                <!--    data-has-bg-color="true"-->
                                                                <!--    data-bg-color="#ffffff"-->
                                                                <!--    data-bg-opacity="1"-->
                                                                <!--    data-animation=""-->
                                                                <!--    data-delay="0"-->
                                                                <!-->
                                                                        <!--    <div class="vc_column-inner">-->
                                                                <!--        <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">-->
                                                                <!--            <div class="column-bg-overlay" style="opacity: 1; background-color: #ffffff;"></div>-->
                                                                <!--        </div>-->
                                                                <!--        <div class="wpb_wrapper">-->
                                                                <!--            <div class="nectar_icon_wrap" data-style="default" data-padding="0px" data-color="black" style="">-->
                                                                <!--                <div class="nectar_icon">-->
                                                                <!--                    <span class="im-icon-wrap" data-color="black" style="height: 50px; width: 50px;">-->
                                                                <!--                        <span>-->
                                                                <!--                            <svg role="presentation" version="1.1" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32">-->
                                                                <!--                                <path-->
                                                                <!--                                    d="M23.5 31.769h-15c-0.316 0-0.588-0.221-0.652-0.531l-2.5-12c-0.041-0.195 0.008-0.4 0.135-0.556s0.317-0.247 0.517-0.247h20c0.2 0 0.391 0.089 0.519 0.247 0.125 0.156 0.175 0.361 0.135 0.556l-2.5 12c-0.065 0.309-0.339 0.531-0.653 0.531zM9.043 30.436h13.916l2.223-10.667h-18.361l2.223 10.667zM24.667 23.769h-17.333c-0.368 0-0.667-0.299-0.667-0.667s0.299-0.667 0.667-0.667h17.333c0.367 0 0.667 0.299 0.667 0.667s-0.3 0.667-0.667 0.667zM15.333 9.103h1.333v9.333h-1.333v-9.333zM15.464 19.436c-1.556 0-2.877-0.549-3.819-1.588-0.968-1.067-1.455-2.616-1.305-4.14 0.035-0.357 0.353-0.639 0.697-0.6 1.923 0.099 3.531 0.793 4.529 1.951 0.861 1 1.241 2.301 1.1 3.755-0.031 0.319-0.285 0.573-0.607 0.6-0.204 0.015-0.403 0.023-0.596 0.023zM11.653 14.503c0.052 0.925 0.399 1.809 0.979 2.449 0.663 0.732 1.605 1.131 2.729 1.149-0.023-0.851-0.292-1.584-0.805-2.176-0.643-0.747-1.659-1.241-2.903-1.423zM15.984 10.157c-1.747 0-3.167-1.42-3.167-3.167s1.42-3.167 3.167-3.167c1.747 0 3.167 1.42 3.167 3.167s-1.42 3.167-3.167 3.167zM15.984 5.157c-1.011 0-1.833 0.823-1.833 1.833s0.823 1.833 1.833 1.833c1.011 0 1.833-0.823 1.833-1.833s-0.821-1.833-1.833-1.833zM19.576 3.496c-0.101 0-0.203-0.023-0.3-0.072-0.329-0.165-0.461-0.565-0.297-0.895 0.167-0.329 0.033-0.735-0.295-0.9-0.331-0.163-0.732-0.028-0.896 0.299-0.167 0.329-0.567 0.459-0.895 0.296-0.329-0.165-0.461-0.567-0.295-0.895 0.496-0.985 1.699-1.381 2.685-0.887s1.383 1.7 0.887 2.687c-0.117 0.232-0.352 0.367-0.595 0.367zM21.459 8.155c-0.323 0-0.607-0.236-0.659-0.564-0.055-0.364 0.195-0.704 0.557-0.761 0.175-0.028 0.331-0.121 0.435-0.265 0.105-0.14 0.148-0.316 0.12-0.495-0.055-0.361-0.399-0.607-0.763-0.557-0.363 0.060-0.703-0.193-0.759-0.557-0.056-0.361 0.195-0.701 0.557-0.757 1.087-0.168 2.113 0.581 2.283 1.669 0.169 1.087-0.581 2.115-1.669 2.284-0.035 0.001-0.069 0.004-0.103 0.004zM19.421 13.072c-0.057 0-0.115-0.003-0.175-0.008-0.531-0.044-1.016-0.296-1.36-0.703-0.237-0.281-0.2-0.701 0.081-0.939 0.281-0.243 0.701-0.201 0.94 0.083 0.115 0.139 0.276 0.219 0.453 0.237 0.177 0.012 0.351-0.039 0.487-0.155 0.279-0.24 0.315-0.657 0.079-0.939s-0.2-0.701 0.081-0.94c0.281-0.236 0.703-0.199 0.94 0.081 0.711 0.844 0.603 2.107-0.243 2.817-0.361 0.3-0.812 0.464-1.284 0.464zM10.655 9.221c-1.063 0-1.951-0.841-1.997-1.915-0.023-0.533 0.164-1.044 0.525-1.439 0.361-0.393 0.855-0.623 1.389-0.645 0.353 0.023 0.679 0.269 0.695 0.639 0.016 0.365-0.271 0.68-0.639 0.695-0.177 0.007-0.341 0.084-0.463 0.215s-0.183 0.301-0.175 0.48c0.016 0.364 0.344 0.687 0.695 0.637 0.336 0.028 0.679 0.269 0.695 0.639 0.016 0.367-0.269 0.68-0.639 0.695-0.029-0.001-0.057 0-0.087 0zM11.916 3.963c-0.216 0-0.427-0.101-0.555-0.297-0.297-0.444-0.403-0.973-0.299-1.501 0.105-0.524 0.407-0.972 0.852-1.272 0.444-0.296 0.976-0.405 1.501-0.297 0.524 0.104 0.976 0.408 1.272 0.852 0.204 0.307 0.121 0.721-0.185 0.924-0.305 0.199-0.721 0.121-0.924-0.185-0.099-0.148-0.249-0.251-0.424-0.285-0.171-0.031-0.352 0-0.5 0.099s-0.249 0.252-0.284 0.424c-0.035 0.175 0 0.352 0.099 0.5 0.205 0.305 0.123 0.72-0.184 0.921-0.115 0.081-0.243 0.119-0.369 0.119z"-->
                                                                <!--                                ></path>-->
                                                                <!--                            </svg>-->
                                                                <!--                        </span>-->
                                                                <!--                    </span>-->
                                                                <!--                </div>-->
                                                                <!--            </div>-->
                                                                <!--            <div class="nectar-responsive-text font_size_desktop_2vw font_size_tablet_3vw font_size_phone_16px font_line_height_1px nectar-link-underline-effect">-->
                                                                <!--                <p>Platinum</p>-->
                                                                <!--            </div>-->
                                                                <!--            <div class="nectar-price-typography nectar-inherit-h3 font_size_desktop_4vw font_size_tablet_7vw font_line_height_1-5">-->
                                                                <!--                <span class="before-text" style="font-size: 0.4em;">$</span><span class="price-text">59</span>-->
                                                                <!--                <span class="after-text" style="font-size: 0.4em;">/ month</span>-->
                                                                <!--            </div>-->
                                                                <!--            <div class="divider-wrap" data-alignment="default"><div style="height: 15px;" class="divider"></div></div>-->
                                                                <!--            <div-->
                                                                <!--                class="nectar-fancy-ul font_size_min_16px font_size_desktop_1-1vw"-->
                                                                <!--                data-list-icon="dot"-->
                                                                <!--                data-animation="false"-->
                                                                <!--                data-animation-delay="0"-->
                                                                <!--                data-spacing="10px"-->
                                                                <!--                data-alignment="left"-->
                                                                <!--            >-->
                                                                <!--                <ul>-->
                                                                <!--                    <li>Everything in premium</li>-->
                                                                <!--                    <li>A/B testing sanbox</li>-->
                                                                <!--                    <li>Custom permissions</li>-->
                                                                <!--                    <li>Social media automation</li>-->
                                                                <!--                    <li>Sales automation tools</li>-->
                                                                <!--                </ul>-->
                                                                <!--            </div>-->
                                                                <!--            <div class="divider-wrap" data-alignment="default"><div style="height: 90px;" class="divider"></div></div>-->
                                                                <!--            <div-->
                                                                <!--                class="nectar-cta alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit position_desktop_absolute right_position_desktop_40px left_position_desktop_40px bottom_position_desktop_40px"-->
                                                                <!--                data-color="accent-color"-->
                                                                <!--                data-using-bg="true"-->
                                                                <!--                data-style="text-reveal-wave"-->
                                                                <!--                data-display="block"-->
                                                                <!--                data-alignment="center"-->
                                                                <!--                data-text-color="custom"-->
                                                                <!--            >-->
                                                                <!--                <span style="color: #ffffff;" class="nectar-button-type">-->
                                                                <!--                    <span class="link_wrap" style="padding-top: 0.8em; padding-right: 40px; padding-bottom: 0.8em; padding-left: 40px;">-->
                                                                <!--                        <a class="link_text" role="button" href="#">-->
                                                                <!--                            <span class="text">-->
                                                                <!--                                <span class="char" style="animation-delay: 0s;">G</span><span class="char" style="animation-delay: 0.015s;">e</span>-->
                                                                <!--                                <span class="char" style="animation-delay: 0.03s;">t</span> <span class="char" style="animation-delay: 0.045s;">S</span>-->
                                                                <!--                                <span class="char" style="animation-delay: 0.06s;">t</span><span class="char" style="animation-delay: 0.075s;">a</span>-->
                                                                <!--                                <span class="char" style="animation-delay: 0.09s;">r</span><span class="char" style="animation-delay: 0.105s;">t</span>-->
                                                                <!--                                <span class="char" style="animation-delay: 0.12s;">e</span><span class="char" style="animation-delay: 0.135s;">d</span>-->
                                                                <!--                            </span>-->
                                                                <!--                        </a>-->
                                                                <!--                    </span>-->
                                                                <!--                </span>-->
                                                                <!--            </div>-->
                                                                <!--        </div>-->
                                                                <!--    </div>-->
                                                                <!--</div>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="tab-pay-yearly" data-tab-icon="" class="wpb_tab ui-tabs-panel wpb_ui-tabs-hide clearfix">
                                                        <div id="fws_6517a2cd97432" data-midnight="" data-column-margin="40px" class="wpb_row vc_row-fluid vc_row inner_row vc_row-o-equal-height vc_row-flex" style="">
                                                            <div class="row-bg-wrap">
                                                                <div class="row-bg"></div>
                                                            </div>
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
                                                                    data-delay="0">
                                                                    <div class="vc_column-inner" style="box-shadow: 40px 60px 60px -20px rgba(0, 0, 0, 0.175);">
                                                                        <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                                                            <div class="column-bg-overlay" style="opacity: 1; background-color: #ff6b3d;"></div>
                                                                        </div>
                                                                        <div class="wpb_wrapper">
                                                                            <div
                                                                                class="nectar-lottie-wrap width_desktop_150pct height_desktop_150pct alignment_center position_desktop_absolute top_position_desktop_0px left_position_desktop_0px translate_y_desktop_-50pct translate_x_desktop_25pct z_index_-1">
                                                                                <div
                                                                                    class="nectar-lottie"
                                                                                    data-lottie-settings='{"trigger_type":"play","mobile_func":"default","loop":"true","trigger_offset":"0.00,100.00","frame_constraint":"0.00,100.00","speed":"0.2","width_desktop":"150%","height_desktop":"150%","alignment":"center","preserve_aspect_ratio":"xMidYMid meet","position_desktop":"absolute","top_position_desktop":"0","left_position_desktop":"0","translate_y_desktop":"-50%","translate_x_desktop":"25%","preserveaspectratio":"none","json_url":"https:\/\/assets1.lottiefiles.com\/packages\/lf20_w4NUp4.json","zindex":"-1","box_shadow_method":"filter"}'
                                                                                    id="nectar-lottie-1696052543292">
                                                                                    <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 512 512"
                                                                                        width="512"
                                                                                        height="512"
                                                                                        preserveAspectRatio="xMidYMid meet"
                                                                                        style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                                                                                        <defs>
                                                                                            <clippath id="__lottie_element_29">
                                                                                                <rect width="512" height="512" x="0" y="0"></rect>
                                                                                            </clippath>
                                                                                        </defs>
                                                                                        <g clip-path="url(#__lottie_element_29)">
                                                                                            <g transform="matrix(1,0,0,1,85.5,74.5)" opacity="1" style="display: block;">
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,2.75,90.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,13.75,162.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,2.75,223.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,41.75,254.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,102.75,283.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,155.75,326.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,245.75,320.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,204.75,359.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,306.75,223.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,337.75,162.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,295.75,99.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,282.75,42.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,165.75,33.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,72.75,68.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,101.75,2.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,55.75,143.75)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2.5 C1.38100004196167,-2.5 2.5,-1.38100004196167 2.5,0 C2.5,1.38100004196167 1.38100004196167,2.5 0,2.5 C-1.38100004196167,2.5 -2.5,1.38100004196167 -2.5,0 C-2.5,-1.38100004196167 -1.38100004196167,-2.5 0,-2.5z"></path>
                                                                                                </g>
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,331.25,270.25)">
                                                                                                    <path
                                                                                                        fill="rgb(255,255,255)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M0,-2 C1.1039999723434448,-2 2,-1.1039999723434448 2,0 C2,1.1039999723434448 1.1039999723434448,2 0,2 C-1.1039999723434448,2 -2,1.1039999723434448 -2,0 C-2,-1.1039999723434448 -1.1039999723434448,-2 0,-2z"></path>
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
                                                                                                        d=" M-169.06100463867188,25.951570510864258 C-163.11500549316406,129.95327758789062 -14.474956512451172,218.24002075195312 60.99042892456055,177.05714416503906 C128.99093627929688,139.94825744628906 154.99266052246094,93.9543228149414 170.47885131835938,35.95271301269531 C185.96505737304688,-22.048860549926758 125.83004760742188,-148.74258422851562 52.99071502685547,-160.2494354248047 C-47.007633209228516,-176.04696655273438 -175.0066375732422,-78.04781341552734 -169.06100463867188,25.951570510864258z"></path>
                                                                                                </g>
                                                                                            </g>
                                                                                            <g
                                                                                                transform="matrix(0.9063078165054321,-0.4226182699203491,0.4226182699203491,0.9063078165054321,256,256)"
                                                                                                opacity="0.75"
                                                                                                style="display: block;">
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,2.1410000324249268,0.5230000019073486)">
                                                                                                    <path
                                                                                                        stroke-linecap="butt"
                                                                                                        stroke-linejoin="miter"
                                                                                                        fill-opacity="0"
                                                                                                        stroke-miterlimit="3"
                                                                                                        stroke="rgb(255,255,255)"
                                                                                                        stroke-opacity="0.25"
                                                                                                        stroke-width="1"
                                                                                                        d=" M-169.06100463867188,25.951570510864258 C-163.11500549316406,129.95327758789062 -14.474956512451172,218.24002075195312 60.99042892456055,177.05714416503906 C128.99093627929688,139.94825744628906 154.99266052246094,93.9543228149414 170.47885131835938,35.95271301269531 C185.96505737304688,-22.048860549926758 125.83004760742188,-148.74258422851562 52.99071502685547,-160.2494354248047 C-47.007633209228516,-176.04696655273438 -175.0066375732422,-78.04781341552734 -169.06100463867188,25.951570510864258z"></path>
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
                                                                                                        d=" M-181.06300354003906,-12.04699993133545 C-180.08399963378906,66.48300170898438 -0.4729999899864197,230.2429962158203 74.99199676513672,189.06100463867188 C142.99200439453125,151.9530029296875 169.86000061035156,63.47600173950195 156.47900390625,-8.04699993133545 C143.09800720214844,-79.56999969482422 69.85900115966797,-164.5229949951172 -15.008000373840332,-168.25 C-99.875,-171.9770050048828 -182.14100646972656,-98.52300262451172 -181.06300354003906,-12.04699993133545z"></path>
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
                                                                                                        d=" M-193.06300354003906,37.952999114990234 C-181.98500061035156,170.42999267578125 1.5269999504089355,214.2429962158203 76.99199676513672,173.06100463867188 C144.99200439453125,135.9530029296875 197.86000061035156,63.47600173950195 182.47900390625,-38.047000885009766 C167.09800720214844,-139.57000732421875 85.85900115966797,-190.5229949951172 -29.007999420166016,-180.25 C-143.875,-169.9770050048828 -204.14100646972656,-94.52400207519531 -193.06300354003906,37.952999114990234z"></path>
                                                                                                </g>
                                                                                            </g>
                                                                                            <g
                                                                                                transform="matrix(0.9063078165054321,-0.4226182699203491,0.4226182699203491,0.9063078165054321,256,256)"
                                                                                                opacity="0.75"
                                                                                                style="display: block;">
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,2.1410000324249268,0.5230000019073486)">
                                                                                                    <path
                                                                                                        stroke-linecap="butt"
                                                                                                        stroke-linejoin="miter"
                                                                                                        fill-opacity="0"
                                                                                                        stroke-miterlimit="3"
                                                                                                        stroke="rgb(235,230,217)"
                                                                                                        stroke-opacity="0.25"
                                                                                                        stroke-width="1"
                                                                                                        d=" M-169.06100463867188,25.951570510864258 C-163.11500549316406,129.95327758789062 -14.474956512451172,218.24002075195312 60.99042892456055,177.05714416503906 C128.99093627929688,139.94825744628906 154.99266052246094,93.9543228149414 170.47885131835938,35.95271301269531 C185.96505737304688,-22.048860549926758 125.83004760742188,-148.74258422851562 52.99071502685547,-160.2494354248047 C-47.007633209228516,-176.04696655273438 -175.0066375732422,-78.04781341552734 -169.06100463867188,25.951570510864258z"></path>
                                                                                                </g>
                                                                                            </g>
                                                                                            <g
                                                                                                transform="matrix(0.9063078165054321,0.4226182699203491,-0.4226182699203491,0.9063078165054321,256,256)"
                                                                                                opacity="1"
                                                                                                style="display: block;">
                                                                                                <g opacity="1" transform="matrix(1,0,0,1,2.1410000324249268,0.5230000019073486)">
                                                                                                    <path
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round"
                                                                                                        fill-opacity="0"
                                                                                                        stroke="rgb(235,230,217)"
                                                                                                        stroke-opacity="0.25"
                                                                                                        stroke-width="1"
                                                                                                        d=" M-181.06300354003906,-12.04699993133545 C-180.08399963378906,66.48300170898438 -0.4729999899864197,230.2429962158203 74.99199676513672,189.06100463867188 C142.99200439453125,151.9530029296875 169.86000061035156,63.47600173950195 156.47900390625,-8.04699993133545 C143.09800720214844,-79.56999969482422 69.85900115966797,-164.5229949951172 -15.008000373840332,-168.25 C-99.875,-171.9770050048828 -182.14100646972656,-98.52300262451172 -181.06300354003906,-12.04699993133545z"></path>
                                                                                                </g>
                                                                                            </g>
                                                                                            <g
                                                                                                transform="matrix(0.7169100046157837,0,0,0.7351499795913696,251.71759033203125,275.4610290527344)"
                                                                                                opacity="0.25"
                                                                                                style="display: block;">
                                                                                                <g opacity="1" transform="matrix(0.9836400151252747,0,0,1,6.1479997634887695,-23.851999282836914)">
                                                                                                    <path
                                                                                                        stroke-linecap="butt"
                                                                                                        stroke-linejoin="miter"
                                                                                                        fill-opacity="0"
                                                                                                        stroke-miterlimit="4"
                                                                                                        stroke="rgb(235,230,217)"
                                                                                                        stroke-opacity="1"
                                                                                                        stroke-width="1"
                                                                                                        d=" M0,-186.14849853515625 C102.73535919189453,-186.14849853515625 186.14849853515625,-102.73535919189453 186.14849853515625,0 C186.14849853515625,102.73535919189453 102.73535919189453,186.14849853515625 0,186.14849853515625 C-102.73535919189453,186.14849853515625 -186.14849853515625,102.73535919189453 -186.14849853515625,0 C-186.14849853515625,-102.73535919189453 -102.73535919189453,-186.14849853515625 0,-186.14849853515625z"></path>
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
                                                                                                    d="M23.5 31.461h-15c-0.316 0-0.588-0.221-0.652-0.531l-2.5-12c-0.041-0.195 0.008-0.401 0.135-0.557 0.127-0.153 0.317-0.245 0.517-0.245h20c0.2 0 0.391 0.088 0.519 0.245 0.125 0.156 0.175 0.361 0.135 0.557l-2.5 12c-0.065 0.309-0.339 0.531-0.653 0.531zM9.043 30.128h13.916l2.223-10.667h-18.361l2.223 10.667zM24.667 22.128h-17.333c-0.368 0-0.667-0.3-0.667-0.667 0-0.369 0.299-0.667 0.667-0.667h17.333c0.367 0 0.667 0.297 0.667 0.667 0 0.367-0.3 0.667-0.667 0.667zM16 18.795c-0.368 0-0.667-0.3-0.667-0.667v-14.667c0-0.368 0.299-0.667 0.667-0.667s0.667 0.299 0.667 0.667v14.667c0 0.367-0.299 0.667-0.667 0.667zM15.283 16.46v0c-1.988 0-3.672-0.699-4.871-2.023-1.235-1.361-1.856-3.341-1.664-5.295 0.035-0.355 0.347-0.649 0.697-0.6 2.472 0.131 4.537 1.016 5.813 2.495 1.096 1.271 1.58 2.925 1.399 4.788-0.031 0.319-0.285 0.575-0.607 0.599-0.263 0.025-0.519 0.036-0.768 0.036zM10.048 9.932c0.019 1.361 0.503 2.676 1.352 3.609 0.94 1.036 2.281 1.584 3.883 1.584v0c0.027 0 0.053 0 0.080 0 0.008-1.253-0.371-2.359-1.112-3.217-0.925-1.072-2.401-1.761-4.203-1.976zM16.776 12.46c-0.249 0-0.505-0.011-0.771-0.033-0.32-0.028-0.576-0.28-0.607-0.597-0.18-1.861 0.304-3.519 1.399-4.789 1.279-1.479 3.341-2.364 5.813-2.492 0.356-0.045 0.663 0.248 0.696 0.597 0.193 1.953-0.428 3.932-1.664 5.296-1.196 1.32-2.879 2.019-4.867 2.019zM16.695 11.127c1.667-0.028 3.008-0.531 3.964-1.584 0.849-0.936 1.333-2.251 1.352-3.609-1.801 0.211-3.277 0.904-4.203 1.973-0.74 0.864-1.12 1.967-1.113 3.22zM15.283 8.46v0c-1.988 0-3.672-0.699-4.871-2.023-1.235-1.361-1.856-3.341-1.664-5.295 0.035-0.355 0.347-0.637 0.697-0.6 2.472 0.131 4.537 1.016 5.813 2.495 1.096 1.271 1.58 2.925 1.399 4.788-0.031 0.319-0.285 0.575-0.607 0.599-0.263 0.025-0.519 0.036-0.768 0.036zM10.048 1.932c0.019 1.361 0.503 2.676 1.352 3.609 0.94 1.036 2.281 1.584 3.883 1.584v0c0.027 0 0.053 0 0.080 0 0.008-1.253-0.371-2.359-1.112-3.217-0.925-1.072-2.401-1.761-4.203-1.976z"></path>
                                                                                            </svg>
                                                                                        </span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="nectar-responsive-text font_size_desktop_2vw font_size_tablet_3vw font_size_phone_16px font_line_height_1px nectar-link-underline-effect">
                                                                                <p>Basic</p>
                                                                            </div>
                                                                            <div class="nectar-responsive-text font_size_desktop_4vw font_size_tablet_7vw font_line_height_1px nectar-link-underline-effect">
                                                                                <p>Free</p>
                                                                            </div>
                                                                            <div class="divider-wrap" data-alignment="default">
                                                                                <div style="height: 15px;" class="divider"></div>
                                                                            </div>
                                                                            <div
                                                                                class="nectar-fancy-ul font_size_min_16px font_size_desktop_1-1vw"
                                                                                data-list-icon="dot"
                                                                                data-animation="false"
                                                                                data-animation-delay="0"
                                                                                data-spacing="10px"
                                                                                data-alignment="left">
                                                                                <ul>
                                                                                    <li>Live chat widget</li>
                                                                                    <li>Email marketing</li>
                                                                                    <li>Custom Forms</li>
                                                                                    <li>Traffic analytics</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="divider-wrap" data-alignment="default">
                                                                                <div style="height: 90px;" class="divider"></div>
                                                                            </div>
                                                                            <div
                                                                                class="nectar-cta alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit position_desktop_absolute right_position_desktop_40px left_position_desktop_40px bottom_position_desktop_40px"
                                                                                data-color="white"
                                                                                data-using-bg="true"
                                                                                data-style="text-reveal-wave"
                                                                                data-display="block"
                                                                                data-alignment="center"
                                                                                data-text-color="custom">
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
                                                                    data-delay="0">
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
                                                                                                    d="M14.253 30.18c-0.015 0-0.029 0-0.047-0.003-3.431-0.237-6.265-1.631-8.425-4.143-3.521-4.1-5.069-11.008-4.363-19.451 0.029-0.361 0.321-0.66 0.703-0.609 4.747 0.277 9.948 3.045 13.576 7.224 3.303 3.801 4.924 8.252 4.572 12.539-0.031 0.364-0.339 0.628-0.72 0.609-0.367-0.031-0.64-0.355-0.611-0.719 0.323-3.924-1.187-8.028-4.249-11.556-3.232-3.724-7.772-6.251-11.995-6.712-0.532 7.676 0.947 14.14 4.095 17.807 1.917 2.232 4.444 3.472 7.505 3.68 0.367 0.027 0.644 0.344 0.62 0.711-0.019 0.352-0.312 0.623-0.661 0.623zM17.748 31.361c-0.305 0-0.58-0.211-0.649-0.521-1.608-7.159-9.288-16.467-12.544-19.611-0.265-0.253-0.273-0.675-0.019-0.941 0.256-0.264 0.68-0.271 0.943-0.019 3.347 3.236 11.245 12.827 12.919 20.277 0.081 0.361-0.145 0.713-0.504 0.8-0.048 0.011-0.097 0.015-0.145 0.015zM19.671 24.289c-0.309 0-0.585-0.216-0.652-0.531-0.076-0.36 0.156-0.713 0.516-0.789 10.043-2.101 10.111-15.788 9.765-20.943-5.8 0.629-11.848 5.075-14.577 10.795-0.159 0.333-0.559 0.472-0.889 0.315-0.332-0.159-0.473-0.556-0.315-0.888 3.028-6.348 9.907-11.229 16.356-11.607 0.355-0.035 0.675 0.251 0.703 0.609 1.072 12.781-2.955 21.388-10.771 23.025-0.047 0.008-0.091 0.013-0.136 0.013zM17.747 18.057c-0.115 0-0.231-0.028-0.336-0.091-0.317-0.188-0.424-0.593-0.237-0.915 3.067-5.233 7.295-10.143 9.389-12.169 0.267-0.252 0.688-0.249 0.943 0.019 0.255 0.261 0.249 0.688-0.016 0.943-2.041 1.972-6.167 6.765-9.167 11.887-0.125 0.207-0.348 0.327-0.576 0.327z"></path>
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
                                                                            <div class="divider-wrap" data-alignment="default">
                                                                                <div style="height: 15px;" class="divider"></div>
                                                                            </div>
                                                                            <div
                                                                                class="nectar-fancy-ul font_size_min_16px font_size_desktop_1-1vw"
                                                                                data-list-icon="dot"
                                                                                data-animation="false"
                                                                                data-animation-delay="0"
                                                                                data-spacing="10px"
                                                                                data-alignment="left">
                                                                                <ul>
                                                                                    <li>Everything in basic</li>
                                                                                    <li>Marketing automation</li>
                                                                                    <li>Advanced chatbot</li>
                                                                                    <li>Campaign management</li>
                                                                                    <li>Collaboration tools</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="divider-wrap" data-alignment="default">
                                                                                <div style="height: 90px;" class="divider"></div>
                                                                            </div>
                                                                            <div
                                                                                class="nectar-cta alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit position_desktop_absolute right_position_desktop_40px left_position_desktop_40px bottom_position_desktop_40px"
                                                                                data-color="accent-color"
                                                                                data-using-bg="true"
                                                                                data-style="text-reveal-wave"
                                                                                data-display="block"
                                                                                data-alignment="center"
                                                                                data-text-color="custom">
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
                                                                    data-delay="0">
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
                                                                                                    d="M23.5 31.769h-15c-0.316 0-0.588-0.221-0.652-0.531l-2.5-12c-0.041-0.195 0.008-0.4 0.135-0.556s0.317-0.247 0.517-0.247h20c0.2 0 0.391 0.089 0.519 0.247 0.125 0.156 0.175 0.361 0.135 0.556l-2.5 12c-0.065 0.309-0.339 0.531-0.653 0.531zM9.043 30.436h13.916l2.223-10.667h-18.361l2.223 10.667zM24.667 23.769h-17.333c-0.368 0-0.667-0.299-0.667-0.667s0.299-0.667 0.667-0.667h17.333c0.367 0 0.667 0.299 0.667 0.667s-0.3 0.667-0.667 0.667zM15.333 9.103h1.333v9.333h-1.333v-9.333zM15.464 19.436c-1.556 0-2.877-0.549-3.819-1.588-0.968-1.067-1.455-2.616-1.305-4.14 0.035-0.357 0.353-0.639 0.697-0.6 1.923 0.099 3.531 0.793 4.529 1.951 0.861 1 1.241 2.301 1.1 3.755-0.031 0.319-0.285 0.573-0.607 0.6-0.204 0.015-0.403 0.023-0.596 0.023zM11.653 14.503c0.052 0.925 0.399 1.809 0.979 2.449 0.663 0.732 1.605 1.131 2.729 1.149-0.023-0.851-0.292-1.584-0.805-2.176-0.643-0.747-1.659-1.241-2.903-1.423zM15.984 10.157c-1.747 0-3.167-1.42-3.167-3.167s1.42-3.167 3.167-3.167c1.747 0 3.167 1.42 3.167 3.167s-1.42 3.167-3.167 3.167zM15.984 5.157c-1.011 0-1.833 0.823-1.833 1.833s0.823 1.833 1.833 1.833c1.011 0 1.833-0.823 1.833-1.833s-0.821-1.833-1.833-1.833zM19.576 3.496c-0.101 0-0.203-0.023-0.3-0.072-0.329-0.165-0.461-0.565-0.297-0.895 0.167-0.329 0.033-0.735-0.295-0.9-0.331-0.163-0.732-0.028-0.896 0.299-0.167 0.329-0.567 0.459-0.895 0.296-0.329-0.165-0.461-0.567-0.295-0.895 0.496-0.985 1.699-1.381 2.685-0.887s1.383 1.7 0.887 2.687c-0.117 0.232-0.352 0.367-0.595 0.367zM21.459 8.155c-0.323 0-0.607-0.236-0.659-0.564-0.055-0.364 0.195-0.704 0.557-0.761 0.175-0.028 0.331-0.121 0.435-0.265 0.105-0.14 0.148-0.316 0.12-0.495-0.055-0.361-0.399-0.607-0.763-0.557-0.363 0.060-0.703-0.193-0.759-0.557-0.056-0.361 0.195-0.701 0.557-0.757 1.087-0.168 2.113 0.581 2.283 1.669 0.169 1.087-0.581 2.115-1.669 2.284-0.035 0.001-0.069 0.004-0.103 0.004zM19.421 13.072c-0.057 0-0.115-0.003-0.175-0.008-0.531-0.044-1.016-0.296-1.36-0.703-0.237-0.281-0.2-0.701 0.081-0.939 0.281-0.243 0.701-0.201 0.94 0.083 0.115 0.139 0.276 0.219 0.453 0.237 0.177 0.012 0.351-0.039 0.487-0.155 0.279-0.24 0.315-0.657 0.079-0.939s-0.2-0.701 0.081-0.94c0.281-0.236 0.703-0.199 0.94 0.081 0.711 0.844 0.603 2.107-0.243 2.817-0.361 0.3-0.812 0.464-1.284 0.464zM10.655 9.221c-1.063 0-1.951-0.841-1.997-1.915-0.023-0.533 0.164-1.044 0.525-1.439 0.361-0.393 0.855-0.623 1.389-0.645 0.353 0.023 0.679 0.269 0.695 0.639 0.016 0.365-0.271 0.68-0.639 0.695-0.177 0.007-0.341 0.084-0.463 0.215s-0.183 0.301-0.175 0.48c0.016 0.364 0.344 0.687 0.695 0.637 0.336 0.028 0.679 0.269 0.695 0.639 0.016 0.367-0.269 0.68-0.639 0.695-0.029-0.001-0.057 0-0.087 0zM11.916 3.963c-0.216 0-0.427-0.101-0.555-0.297-0.297-0.444-0.403-0.973-0.299-1.501 0.105-0.524 0.407-0.972 0.852-1.272 0.444-0.296 0.976-0.405 1.501-0.297 0.524 0.104 0.976 0.408 1.272 0.852 0.204 0.307 0.121 0.721-0.185 0.924-0.305 0.199-0.721 0.121-0.924-0.185-0.099-0.148-0.249-0.251-0.424-0.285-0.171-0.031-0.352 0-0.5 0.099s-0.249 0.252-0.284 0.424c-0.035 0.175 0 0.352 0.099 0.5 0.205 0.305 0.123 0.72-0.184 0.921-0.115 0.081-0.243 0.119-0.369 0.119z"></path>
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
                                                                            <div class="divider-wrap" data-alignment="default">
                                                                                <div style="height: 15px;" class="divider"></div>
                                                                            </div>
                                                                            <div
                                                                                class="nectar-fancy-ul font_size_min_16px font_size_desktop_1-1vw"
                                                                                data-list-icon="dot"
                                                                                data-animation="false"
                                                                                data-animation-delay="0"
                                                                                data-spacing="10px"
                                                                                data-alignment="left">
                                                                                <ul>
                                                                                    <li>Everything in premium</li>
                                                                                    <li>A/B testing sanbox</li>
                                                                                    <li>Custom permissions</li>
                                                                                    <li>Social media automation</li>
                                                                                    <li>Sales automation tools</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="divider-wrap" data-alignment="default">
                                                                                <div style="height: 90px;" class="divider"></div>
                                                                            </div>
                                                                            <div
                                                                                class="nectar-cta alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit position_desktop_absolute right_position_desktop_40px left_position_desktop_40px bottom_position_desktop_40px"
                                                                                data-color="accent-color"
                                                                                data-using-bg="true"
                                                                                data-style="text-reveal-wave"
                                                                                data-display="block"
                                                                                data-alignment="center"
                                                                                data-text-color="custom">
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
                            class="wpb_row vc_row-fluid vc_row full-width-content vc_row-o-equal-height vc_row-flex vc_row-o-content-top nectar-overflow-hidden"
                            style="padding-top: calc(100vw * 0.02); padding-bottom: calc(100vw * 0.02);">

                            <div class="row_col_wrap_12 col span_12 dark left">
                                <div
                                    class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding el_spacing_0px inherit_tablet inherit_phone w-100"
                                    data-padding-pos="all"
                                    data-has-bg-color="false"
                                    data-bg-color=""
                                    data-bg-opacity="1"
                                    data-animation=""
                                    data-delay="0"
                                    data-scroll-animation="true"
                                    data-scroll-animation-movement="transform_x"
                                    data-scroll-animation-mobile="true"
                                    data-scroll-animation-intensity="-2.5">
                                    <div class="text-align-center" style="width:100%">
                                        <h2 style="margin-bottom: 60px;font-weight: 700;">Why Vecteezy?</h3>
                                            <div class="row_col_wrap_12 col span_12 dark left">
                                                <div class="vc_col-sm-4 wpb_column column_container vc_column_container col no-extra-padding el_spacing_0px inherit_tablet inherit_phone m-0" style="margin:0">
                                                    <div class="wrapper">
                                                        <span style="margin-bottom: 20px;display: block;">
                                                            <svg role="presentation" version="1.1" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32">
                                                                <path d="M23.5 31.461h-15c-0.316 0-0.588-0.221-0.652-0.531l-2.5-12c-0.041-0.195 0.008-0.401 0.135-0.557 0.127-0.153 0.317-0.245 0.517-0.245h20c0.2 0 0.391 0.088 0.519 0.245 0.125 0.156 0.175 0.361 0.135 0.557l-2.5 12c-0.065 0.309-0.339 0.531-0.653 0.531zM9.043 30.128h13.916l2.223-10.667h-18.361l2.223 10.667zM24.667 22.128h-17.333c-0.368 0-0.667-0.3-0.667-0.667 0-0.369 0.299-0.667 0.667-0.667h17.333c0.367 0 0.667 0.297 0.667 0.667 0 0.367-0.3 0.667-0.667 0.667zM16 18.795c-0.368 0-0.667-0.3-0.667-0.667v-14.667c0-0.368 0.299-0.667 0.667-0.667s0.667 0.299 0.667 0.667v14.667c0 0.367-0.299 0.667-0.667 0.667zM15.283 16.46v0c-1.988 0-3.672-0.699-4.871-2.023-1.235-1.361-1.856-3.341-1.664-5.295 0.035-0.355 0.347-0.649 0.697-0.6 2.472 0.131 4.537 1.016 5.813 2.495 1.096 1.271 1.58 2.925 1.399 4.788-0.031 0.319-0.285 0.575-0.607 0.599-0.263 0.025-0.519 0.036-0.768 0.036zM10.048 9.932c0.019 1.361 0.503 2.676 1.352 3.609 0.94 1.036 2.281 1.584 3.883 1.584v0c0.027 0 0.053 0 0.080 0 0.008-1.253-0.371-2.359-1.112-3.217-0.925-1.072-2.401-1.761-4.203-1.976zM16.776 12.46c-0.249 0-0.505-0.011-0.771-0.033-0.32-0.028-0.576-0.28-0.607-0.597-0.18-1.861 0.304-3.519 1.399-4.789 1.279-1.479 3.341-2.364 5.813-2.492 0.356-0.045 0.663 0.248 0.696 0.597 0.193 1.953-0.428 3.932-1.664 5.296-1.196 1.32-2.879 2.019-4.867 2.019zM16.695 11.127c1.667-0.028 3.008-0.531 3.964-1.584 0.849-0.936 1.333-2.251 1.352-3.609-1.801 0.211-3.277 0.904-4.203 1.973-0.74 0.864-1.12 1.967-1.113 3.22zM15.283 8.46v0c-1.988 0-3.672-0.699-4.871-2.023-1.235-1.361-1.856-3.341-1.664-5.295 0.035-0.355 0.347-0.637 0.697-0.6 2.472 0.131 4.537 1.016 5.813 2.495 1.096 1.271 1.58 2.925 1.399 4.788-0.031 0.319-0.285 0.575-0.607 0.599-0.263 0.025-0.519 0.036-0.768 0.036zM10.048 1.932c0.019 1.361 0.503 2.676 1.352 3.609 0.94 1.036 2.281 1.584 3.883 1.584v0c0.027 0 0.053 0 0.080 0 0.008-1.253-0.371-2.359-1.112-3.217-0.925-1.072-2.401-1.761-4.203-1.976z"></path>
                                                            </svg>
                                                        </span>
                                                        <h3>Fresh Content everyday</h3>
                                                    </div>
                                                </div>
                                                <div class="vc_col-sm-4 wpb_column column_container vc_column_container col no-extra-padding el_spacing_0px inherit_tablet inherit_phone m-0" style="margin:0">
                                                    <div class="wrapper">
                                                        <span style="margin-bottom: 20px;display: block;">
                                                            <svg role="presentation" version="1.1" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32">
                                                                <path d="M23.5 31.461h-15c-0.316 0-0.588-0.221-0.652-0.531l-2.5-12c-0.041-0.195 0.008-0.401 0.135-0.557 0.127-0.153 0.317-0.245 0.517-0.245h20c0.2 0 0.391 0.088 0.519 0.245 0.125 0.156 0.175 0.361 0.135 0.557l-2.5 12c-0.065 0.309-0.339 0.531-0.653 0.531zM9.043 30.128h13.916l2.223-10.667h-18.361l2.223 10.667zM24.667 22.128h-17.333c-0.368 0-0.667-0.3-0.667-0.667 0-0.369 0.299-0.667 0.667-0.667h17.333c0.367 0 0.667 0.297 0.667 0.667 0 0.367-0.3 0.667-0.667 0.667zM16 18.795c-0.368 0-0.667-0.3-0.667-0.667v-14.667c0-0.368 0.299-0.667 0.667-0.667s0.667 0.299 0.667 0.667v14.667c0 0.367-0.299 0.667-0.667 0.667zM15.283 16.46v0c-1.988 0-3.672-0.699-4.871-2.023-1.235-1.361-1.856-3.341-1.664-5.295 0.035-0.355 0.347-0.649 0.697-0.6 2.472 0.131 4.537 1.016 5.813 2.495 1.096 1.271 1.58 2.925 1.399 4.788-0.031 0.319-0.285 0.575-0.607 0.599-0.263 0.025-0.519 0.036-0.768 0.036zM10.048 9.932c0.019 1.361 0.503 2.676 1.352 3.609 0.94 1.036 2.281 1.584 3.883 1.584v0c0.027 0 0.053 0 0.080 0 0.008-1.253-0.371-2.359-1.112-3.217-0.925-1.072-2.401-1.761-4.203-1.976zM16.776 12.46c-0.249 0-0.505-0.011-0.771-0.033-0.32-0.028-0.576-0.28-0.607-0.597-0.18-1.861 0.304-3.519 1.399-4.789 1.279-1.479 3.341-2.364 5.813-2.492 0.356-0.045 0.663 0.248 0.696 0.597 0.193 1.953-0.428 3.932-1.664 5.296-1.196 1.32-2.879 2.019-4.867 2.019zM16.695 11.127c1.667-0.028 3.008-0.531 3.964-1.584 0.849-0.936 1.333-2.251 1.352-3.609-1.801 0.211-3.277 0.904-4.203 1.973-0.74 0.864-1.12 1.967-1.113 3.22zM15.283 8.46v0c-1.988 0-3.672-0.699-4.871-2.023-1.235-1.361-1.856-3.341-1.664-5.295 0.035-0.355 0.347-0.637 0.697-0.6 2.472 0.131 4.537 1.016 5.813 2.495 1.096 1.271 1.58 2.925 1.399 4.788-0.031 0.319-0.285 0.575-0.607 0.599-0.263 0.025-0.519 0.036-0.768 0.036zM10.048 1.932c0.019 1.361 0.503 2.676 1.352 3.609 0.94 1.036 2.281 1.584 3.883 1.584v0c0.027 0 0.053 0 0.080 0 0.008-1.253-0.371-2.359-1.112-3.217-0.925-1.072-2.401-1.761-4.203-1.976z"></path>
                                                            </svg>
                                                        </span>
                                                        <h3>Ready to share everything</h3>
                                                    </div>
                                                </div>
                                                <div class="vc_col-sm-4 wpb_column column_container vc_column_container col no-extra-padding el_spacing_0px inherit_tablet inherit_phone m-0" style="margin:0">
                                                    <div class="wrapper">
                                                        <span style="margin-bottom: 20px;display: block;">
                                                            <svg role="presentation" version="1.1" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32">
                                                                <path d="M23.5 31.461h-15c-0.316 0-0.588-0.221-0.652-0.531l-2.5-12c-0.041-0.195 0.008-0.401 0.135-0.557 0.127-0.153 0.317-0.245 0.517-0.245h20c0.2 0 0.391 0.088 0.519 0.245 0.125 0.156 0.175 0.361 0.135 0.557l-2.5 12c-0.065 0.309-0.339 0.531-0.653 0.531zM9.043 30.128h13.916l2.223-10.667h-18.361l2.223 10.667zM24.667 22.128h-17.333c-0.368 0-0.667-0.3-0.667-0.667 0-0.369 0.299-0.667 0.667-0.667h17.333c0.367 0 0.667 0.297 0.667 0.667 0 0.367-0.3 0.667-0.667 0.667zM16 18.795c-0.368 0-0.667-0.3-0.667-0.667v-14.667c0-0.368 0.299-0.667 0.667-0.667s0.667 0.299 0.667 0.667v14.667c0 0.367-0.299 0.667-0.667 0.667zM15.283 16.46v0c-1.988 0-3.672-0.699-4.871-2.023-1.235-1.361-1.856-3.341-1.664-5.295 0.035-0.355 0.347-0.649 0.697-0.6 2.472 0.131 4.537 1.016 5.813 2.495 1.096 1.271 1.58 2.925 1.399 4.788-0.031 0.319-0.285 0.575-0.607 0.599-0.263 0.025-0.519 0.036-0.768 0.036zM10.048 9.932c0.019 1.361 0.503 2.676 1.352 3.609 0.94 1.036 2.281 1.584 3.883 1.584v0c0.027 0 0.053 0 0.080 0 0.008-1.253-0.371-2.359-1.112-3.217-0.925-1.072-2.401-1.761-4.203-1.976zM16.776 12.46c-0.249 0-0.505-0.011-0.771-0.033-0.32-0.028-0.576-0.28-0.607-0.597-0.18-1.861 0.304-3.519 1.399-4.789 1.279-1.479 3.341-2.364 5.813-2.492 0.356-0.045 0.663 0.248 0.696 0.597 0.193 1.953-0.428 3.932-1.664 5.296-1.196 1.32-2.879 2.019-4.867 2.019zM16.695 11.127c1.667-0.028 3.008-0.531 3.964-1.584 0.849-0.936 1.333-2.251 1.352-3.609-1.801 0.211-3.277 0.904-4.203 1.973-0.74 0.864-1.12 1.967-1.113 3.22zM15.283 8.46v0c-1.988 0-3.672-0.699-4.871-2.023-1.235-1.361-1.856-3.341-1.664-5.295 0.035-0.355 0.347-0.637 0.697-0.6 2.472 0.131 4.537 1.016 5.813 2.495 1.096 1.271 1.58 2.925 1.399 4.788-0.031 0.319-0.285 0.575-0.607 0.599-0.263 0.025-0.519 0.036-0.768 0.036zM10.048 1.932c0.019 1.361 0.503 2.676 1.352 3.609 0.94 1.036 2.281 1.584 3.883 1.584v0c0.027 0 0.053 0 0.080 0 0.008-1.253-0.371-2.359-1.112-3.217-0.925-1.072-2.401-1.761-4.203-1.976z"></path>
                                                            </svg>
                                                        </span>
                                                        <h3>Personalised greetings</h3>
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
                            style="padding-top: calc(100vw * 0.02); padding-bottom: calc(100vw * 0.02);">
                            <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                <div class="inner-wrap row-bg-layer">
                                    <div class="row-bg viewport-desktop using-bg-color" style="background-color: #318fff;"></div>
                                </div>
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
                                    data-scroll-animation-intensity="-2.5">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div
                                                class="nectar-scrolling-text font_size_5vw font_size_mobile_9vw custom_color text_space_medium"
                                                data-style="default"
                                                data-s-dir="rtl"
                                                data-spacing="true"
                                                data-outline-thickness="thin"
                                                data-s-speed="slowest"
                                                data-overflow="visible">
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
                            style="padding-top: calc(100vw * 0.02); padding-bottom: calc(100vw * 0.02); z-index: 20;">
                            <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                <div class="inner-wrap row-bg-layer">
                                    <div class="row-bg viewport-desktop using-bg-color" style="background-color: #ffce59;"></div>
                                </div>
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
                                    data-scroll-animation-intensity="2.5">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div
                                                class="nectar-scrolling-text font_size_5vw font_size_mobile_9vw custom_color text_space_medium"
                                                data-style="default"
                                                data-s-dir="ltr"
                                                data-spacing="true"
                                                data-outline-thickness="thin"
                                                data-s-speed="slowest"
                                                data-overflow="visible">
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
                            style="padding-top: calc(100vw * 0.08); padding-bottom: 0px;">
                            <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                                <div class="inner-wrap row-bg-layer">
                                    <div class="row-bg viewport-desktop" style=""></div>
                                </div>
                            </div>
                            <div class="row_col_wrap_12 col span_12 dark left">
                                <div
                                    class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding inherit_tablet inherit_phone"
                                    data-padding-pos="all"
                                    data-has-bg-color="false"
                                    data-bg-color=""
                                    data-bg-opacity="1"
                                    data-animation=""
                                    data-delay="0">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div id="fws_6517a2cd9a9e7" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row" style="padding-bottom: 4%;">
                                                <div class="row-bg-wrap">
                                                    <div class="row-bg"></div>
                                                </div>
                                                <div class="row_col_wrap_12_inner col span_12 left">
                                                    <div
                                                        class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column centered-text no-extra-padding inherit_tablet inherit_phone"
                                                        data-padding-pos="all"
                                                        data-has-bg-color="false"
                                                        data-bg-color=""
                                                        data-bg-opacity="1"
                                                        data-animation=""
                                                        data-delay="0">
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
                                                                    style="">
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
                            style="padding-top: calc(100vw * 0.03); padding-bottom: calc(100vw * 0.12);">
                            <div class="row-bg-wrap" data-bg-animation="clip-path" data-bg-animation-delay="" data-bg-overlay="false">
                                <div class="inner-wrap row-bg-layer" style="background-color: #f8f8f8;">
                                    <div class="row-bg viewport-desktop using-bg-color" style="background-color: #f8f8f8;"></div>
                                </div>
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
                                    data-delay="0">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="toggles accordion toggles--minimal-shadow" data-br="none" data-starting="default" data-style="minimal">
                                                <div class="toggle accent-color open" data-inner-wrap="true">
                                                    <h3 class="toggle-title">
                                                        <a href="#" role="button" class="nectar-inherit-h3 toggle-heading">
                                                            <i role="presentation" class="fa fa-minus-circle"></i>What is Wishpik?
                                                        </a>
                                                    </h3>
                                                    <div style="max-height: 150px;">
                                                        <div class="inner-toggle-wrap">
                                                            <div class="wpb_text_column wpb_content_element">
                                                                <div class="wpb_wrapper">
                                                                    <p>Wishpik is an online subscription service that allows you to create personalized festival and daily wishes. You can choose a template from our curated selection, add a quotation, and customize the design with your name or logo.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="toggle accent-color" data-inner-wrap="true">
                                                    <h3 class="toggle-title">
                                                        <a href="#" role="button" class="nectar-inherit-h3 toggle-heading">
                                                            <i role="presentation" class="fa fa-plus-circle"></i>How does the free trial work?
                                                        </a>
                                                    </h3>
                                                    <div>
                                                        <div class="inner-toggle-wrap">
                                                            <div class="wpb_text_column wpb_content_element">
                                                                <div class="wpb_wrapper">
                                                                    <p>We offer up to 5 free greeting downloads as part of our trial. You can fully explore our platform, create your personalized wishes, and download them during the trial period. After the 5 free downloads, you’ll need to subscribe for continued access.

                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="toggle accent-color" data-inner-wrap="true">
                                                    <h3 class="toggle-title">
                                                        <a href="#" role="button" class="nectar-inherit-h3 toggle-heading">
                                                            <i role="presentation" class="fa fa-plus-circle"></i>What is included in the yearly subscription?
                                                        </a>
                                                    </h3>
                                                    <div>
                                                        <div class="inner-toggle-wrap">
                                                            <div class="wpb_text_column wpb_content_element">
                                                                <div class="wpb_wrapper">
                                                                    <p>The yearly subscription gives you unlimited access to our vast collection of templates, quotes, and design tools. You can create and download an unlimited number of personalized greetings for festivals and daily occasions.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- new code -->
                                                <div class="toggle accent-color" data-inner-wrap="true">
                                                    <h3 class="toggle-title">
                                                        <a href="#" role="button" class="nectar-inherit-h3 toggle-heading">
                                                            <i role="presentation" class="fa fa-plus-circle"></i>How do I create a wish using Wishpik?

                                                        </a>
                                                    </h3>
                                                    <div>
                                                        <div class="inner-toggle-wrap">
                                                            <div class="wpb_text_column wpb_content_element">
                                                                <div class="wpb_wrapper">
                                                                    <p>Creating a wish with Wishpik is easy:</p>
                                                                    <ul>
                                                                        <ol>Select a template from our curated library.
                                                                        </ol>
                                                                        <ol>Choose a quotation that fits the occasion.</ol>
                                                                        <ol>Personalize the design by adding your name or logo.</ol>
                                                                        <ol>Download your customized greeting.</ol>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <!-- end code -->
                                                    <!-- new code -->
                                                <div class="toggle accent-color" data-inner-wrap="true">
                                                    <h3 class="toggle-title">
                                                        <a href="#" role="button" class="nectar-inherit-h3 toggle-heading">
                                                            <i role="presentation" class="fa fa-plus-circle"></i>Can I change my personalized wish after downloading it?

                                                        </a>
                                                    </h3>
                                                    <div>
                                                        <div class="inner-toggle-wrap">
                                                            <div class="wpb_text_column wpb_content_element">
                                                                <div class="wpb_wrapper">
                                                                    <p>Once you've downloaded a wish, it can't be edited. However, you can create and download a new wish at any time.
                                                                    </p>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <!-- end code -->
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
                                    data-delay="0">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div id="fws_6517a2cd9bb64" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row" style="">
                                                <div class="row-bg-wrap">
                                                    <div class="row-bg"></div>
                                                </div>
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
                                                        data-delay="0">
                                                        <div class="vc_column-inner">
                                                            <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                                                <div class="column-bg-overlay"></div>
                                                                <div class="column-overlay-layer" style="background: radial-gradient(circle at top right, rgb(255, 75, 19) 9%, rgb(255, 143, 61) 73%);"></div>
                                                            </div>
                                                            <div class="wpb_wrapper" data-scroll-animation-movement="transform_y">
                                                                <div
                                                                    class="nectar-animated-shape width_desktop_65vw width_tablet_120vw position_desktop_absolute top_position_desktop_0px left_position_desktop_0px bottom_position_desktop_0px translate_y_desktop_10pct translate_x_desktop_-50pct z_index_-1">
                                                                    <div class="nectar-animated-shape__inner_wrap" data-nectar-waypoint-el-offset="160%" data-easing="easeInOutCubic" data-animation="none">
                                                                        <div class="nectar-animated-shape__inner">
                                                                            <svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 100 100"
                                                                                width="100"
                                                                                height="100"
                                                                                preserveAspectRatio="xMidYMid meet"
                                                                                style="width: 100%; height: 100%; overflow: hidden;">
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
                                                                    data-scroll-animation-intensity="-0.8">
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
                                                                                    style="height: 456.948px; width: 473.521px;" />
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