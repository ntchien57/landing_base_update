<!DOCTYPE html>
<html dir="ltr" lang="vi">

<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    @if (isset($header))
        <meta name="description" content="{{ $header['description'] }}" />
        <meta name="keywords" content="{{ $header['keyword'] }}" />
        <meta name="author" content="{{ $configs['site_title'] }}" />
        <meta name="copyright" content="{{ $configs['site_title'] }}">
        <meta property="og:image" content="{{ $header['og_image'] }}">
        <meta property="og:url" content="{{ Request::url() }}">
    @else
        <meta name="description" content="{{ $configs['site_title'] }}" />
        <meta name="keywords" content="{{ $configs['site_title'] }}" />
        <meta name="author" content="{{ $configs['site_title'] }}" />
        <meta name="copyright" content="{{ $configs['site_title'] }}">
        <meta property="og:image" content="{{ asset('images/thumb.jpg') }}">
        <meta property="og:url" content="{{ Request::url() }}">
    @endif

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Page Title -->
    <title>{{ $title ? $title : $configs['site_title'] }}</title>

    <link rel="shortcut icon" href="{{ asset('images/logo.jpg') }}" />


    @stack('style')




    <script type="text/javascript">
        document.documentElement.className = document.documentElement.className + ' yes-js js_active js'
    </script>
    <script>
        (function(html) {
            html.className = html.className.replace(/\bno-js\b/, 'js')
        })(document.documentElement);
    </script>
    <style>
        .animation-text {
            width: 33%;
        }

        .header_logo.header-logo {
            max-width: 150px;
        }

        @media only screen and (max-width: 768px) {
            .animation-text {
                display: none;
            }

            .header-main {
                background-color: #321428 !important;
            }
        }

        .wishlist_table .add_to_cart,
        a.add_to_wishlist.button.alt {
            border-radius: 16px;
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
        }

        .text-wrapper {
            width: 100%;
            margin: auto;
            overflow-x: hidden;
        }

        .target {
            font-weight: bold;
            color: #ffd51e;
            animation-name: rightToLeft;
            animation-duration: 4.5s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            /* animation: rightToLeft 4.5s linear infinite; */
        }

        @keyframes rightToLeft {
            0% {
                transform: translateX(200px);
            }

            100% {
                transform: translateX(-160px);
            }
        }
    </style>

    <!-- This site is optimized with the Yoast SEO plugin v7.0.3 - https://yoast.com/wordpress/plugins/seo/ -->



    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "http:\/\/mauweb.monamedia.net\/strawberrynet\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.15"
            }
        };
        ! function(a, b, c) {
            function d(a, b) {
                var c = String.fromCharCode;
                l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, a), 0, 0);
                var d = k.toDataURL();
                l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, b), 0, 0);
                var e = k.toDataURL();
                return d === e
            }

            function e(a) {
                var b;
                if (!l || !l.fillText) return !1;
                switch (l.textBaseline = "top", l.font = "600 32px Arial", a) {
                    case "flag":
                        return !(b = d([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819])) && (b = d([55356,
                            57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128,
                            56447
                        ], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203,
                            56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447
                        ]), !b);
                    case "emoji":
                        return b = d([55358, 56760, 9792, 65039], [55358, 56760, 8203, 9792, 65039]), !b
                }
                return !1
            }

            function f(a) {
                var c = b.createElement("script");
                c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }
            var g, h, i, j, k = b.createElement("canvas"),
                l = k.getContext && k.getContext("2d");
            for (j = Array("flag", "emoji"), c.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, i = 0; i < j.length; i++) c.supports[j[i]] = e(j[i]), c.supports.everything = c.supports.everything && c
                .supports[j[i]], "flag" !== j[i] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c
                    .supports[j[i]]);
            c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c
                .readyCallback = function() {
                    c.DOMReady = !0
                }, c.supports.everything || (h = function() {
                    c.readyCallback()
                }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", h, !1), a.addEventListener("load", h, !
                    1)) : (a.attachEvent("onload", h), b.attachEvent("onreadystatechange", function() {
                    "complete" === b.readyState && c.readyCallback()
                })), g = c.source || {}, g.concatemoji ? f(g.concatemoji) : g.wpemoji && g.twemoji && (f(g.twemoji), f(g
                    .wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style>
        @media only screen and (min-width: 768px) {
            .product-detail-show {
                display: flex;
            }

            .product-detail-img {
                width: 50%;
            }
        }

        @media only screen and (max-width: 768px) {
            .product-detail-show {
                display: block;
            }

            .product-detail-img {
                width: 100%;
                padding-bottom: 10px;
            }
        }
    </style>
    <link rel='stylesheet' id='dashicons-css' href="{{ asset('theme/wp-includes/css/dashicons.min.css?ver=4.9.15') }}"
        type='text/css' media='all' />
    <style id='dashicons-inline-css' type='text/css'>
        [data-font="Dashicons"]:before {
            font-family: 'Dashicons' !important;
            content: attr(data-icon) !important;
            speak: none !important;
            font-weight: normal !important;
            font-variant: normal !important;
            text-transform: none !important;
            line-height: 1 !important;
            font-style: normal !important;
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
        }
    </style>
    <link rel='stylesheet' id='menu-icons-extra-css'
        href="{{ asset('theme/wp-content/plugins/ot-flatsome-vertical-menu/libs/menu-icons/css/extra.min.css?ver=0.10.2') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='hrw-css' href="{{ asset('theme/wp-content/plugins/call-now-icon-animate/css.css') }}"
        type='text/css' media='' />
    <link rel='stylesheet' id='contact-form-7-css'
        href="{{ asset('theme/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.0.1') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='fb-messenger-style-css'
        href="{{ asset('theme/wp-content/plugins/fb-messenger/css/style.css?ver=4.9.15') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='menu-image-css'
        href="{{ asset('theme/wp-content/plugins/menu-image/menu-image.css?ver=1.1') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='ot-vertical-menu-css'
        href="{{ asset('theme/wp-content/plugins/ot-flatsome-vertical-menu/assets/css/ot-vertical-menu.css?ver=1.1.0') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof-css'
        href="{{ asset('theme/wp-content/plugins/woocommerce-products-filter/css/front.css?ver=4.9.15') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='malihu-custom-scrollbar-css'
        href="{{ asset('theme/wp-content/plugins/woocommerce-products-filter/js/malihu-custom-scrollbar/jquery.mCustomScrollbar.css?ver=4.9.15') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='icheck-jquery-color-css'
        href="{{ asset('theme/wp-content/plugins/woocommerce-products-filter/js/icheck/skins/flat/aero.css?ver=4.9.15') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='jquery-selectBox-css'
        href="{{ asset('theme/wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox.css?ver=1.2.0') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-icons-css'
        href="{{ asset('theme/wp-content/themes/flatsome/assets/css/fl-icons.css?ver=3.3') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='flatsome-woocommerce-wishlist-css'
        href="{{ asset('theme/wp-content/themes/flatsome/inc/integrations/wc-yith-wishlist/wishlist.css?ver=3.3') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='easy-social-share-buttons-css'
        href="{{ asset('theme/wp-content/plugins/easy-social-share-buttons3/assets/css/default-retina/easy-social-share-buttons.css?ver=3.7.3') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='essb-cct-style-css'
        href="{{ asset('theme/wp-content/plugins/easy-social-share-buttons3/lib/modules/click-to-tweet/assets/css/styles.css?ver=3.7.3') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='bfa-font-awesome-css'
        href='//cdn.jsdelivr.net/fontawesome/4.7.0/css/font-awesome.min.css?ver=4.7.0' type='text/css'
        media='all' />
    <link rel='stylesheet' id='flatsome-main-css'
        href="{{ asset('theme/wp-content/themes/flatsome/assets/css/flatsome.css?ver=3.4.3') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='flatsome-shop-css'
        href="{{ asset('theme/wp-content/themes/flatsome/assets/css/flatsome-shop.css?ver=3.4.3') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='flatsome-style-css'
        href="{{ asset('theme/wp-content/themes/flatsome-child/style.css?ver=3.4.3') }}" type='text/css'
        media='all' />
    <link rel='https://api.w.org/' href="{{ asset('theme/wp-json/') }}" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="{{ asset('theme/xmlrpc.php?rsd') }}" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
        href="{{ asset('theme/wp-includes/wlwmanifest.xml') }}" />
    <script type='text/javascript' src="{{ asset('theme/wp-includes/js/jquery/jquery.js?ver=1.12.4') }}"></script>
    <meta name="generator" content="WordPress 4.9.15" />
    <meta name="generator" content="WooCommerce 3.3.3" />
    <link rel='shortlink' href="{{ asset('theme/') }}" />
    <link rel="alternate" type="application/json+oembed"
        href="{{ asset('theme/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fmauweb.monamedia.net%2Fstrawberrynet%2F') }}" />
    <link rel="alternate" type="text/xml+oembed"
        href="{{ asset('theme/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fmauweb.monamedia.net%2Fstrawberrynet%2F&#038;format=xml') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}" />
    <style>
        .bg {
            opacity: 0;
            transition: opacity 1s;
            -webkit-transition: opacity 1s;
        }

        .bg-loaded {
            opacity: 1;
        }
    </style>
    <!--[if IE]><link rel="stylesheet" type="text/css" href="{{ asset('theme/wp-content/themes/flatsome/assets/css/ie-fallback.css') }}"><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script><script>
        var head = document.getElementsByTagName('head')[0],
            style = document.createElement('style');
        style.type = 'text/css';
        style.styleSheet.cssText = ':before,:after{content:none !important';
        head.appendChild(style);
        setTimeout(function() {
            head.removeChild(style);
        }, 0);
    </script><script src="{{ asset('theme/wp-content/themes/flatsome/assets/libs/ie-flexibility.js') }}"></script><![endif]-->
    <script type="text/javascript">
        WebFontConfig = {
            google: {
                families: ["Oswald:regular,regular", "Oswald:regular,regular", "Oswald:regular,regular",
                    "Dancing+Script",
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <style type="text/css">
        .essb_links_list li.essb_totalcount_item .essb_t_l_big .essb_t_nb:after,
        .essb_links_list li.essb_totalcount_item .essb_t_r_big .essb_t_nb:after {
            color: #777777;
            content: "shares";
            display: block;
            font-size: 11px;
            font-weight: normal;
            text-align: center;
            text-transform: uppercase;
            margin-top: -5px;
        }

        .essb_links_list li.essb_totalcount_item .essb_t_l_big,
        .essb_links_list li.essb_totalcount_item .essb_t_r_big {
            text-align: center;
        }

        .essb_displayed_sidebar .essb_links_list li.essb_totalcount_item .essb_t_l_big .essb_t_nb:after,
        .essb_displayed_sidebar .essb_links_list li.essb_totalcount_item .essb_t_r_big .essb_t_nb:after {
            margin-top: 0px;
        }

        .essb_displayed_sidebar_right .essb_links_list li.essb_totalcount_item .essb_t_l_big .essb_t_nb:after,
        .essb_displayed_sidebar_right .essb_links_list li.essb_totalcount_item .essb_t_r_big .essb_t_nb:after {
            margin-top: 0px;
        }

        .essb_totalcount_item_before,
        .essb_totalcount_item_after {
            display: block !important;
        }

        .essb_totalcount_item_before .essb_totalcount,
        .essb_totalcount_item_after .essb_totalcount {
            border: 0px !important;
        }

        .essb_counter_insidebeforename {
            margin-right: 5px;
            font-weight: bold;
        }

        .essb_width_columns_1 li {
            width: 100%;
        }

        .essb_width_columns_1 li a {
            width: 92%;
        }

        .essb_width_columns_2 li {
            width: 49%;
        }

        .essb_width_columns_2 li a {
            width: 86%;
        }

        .essb_width_columns_3 li {
            width: 32%;
        }

        .essb_width_columns_3 li a {
            width: 80%;
        }

        .essb_width_columns_4 li {
            width: 24%;
        }

        .essb_width_columns_4 li a {
            width: 70%;
        }

        .essb_width_columns_5 li {
            width: 19.5%;
        }

        .essb_width_columns_5 li a {
            width: 60%;
        }

        .essb_width_columns_6 li {
            width: 16%;
        }

        .essb_width_columns_6 li a {
            width: 55%;
        }

        .essb_links li.essb_totalcount_item_before,
        .essb_width_columns_1 li.essb_totalcount_item_after {
            width: 100%;
            text-align: left;
        }

        .essb_network_align_center a {
            text-align: center;
        }

        .essb_network_align_right .essb_network_name {
            float: right;
        }
    </style>
    <script type="text/javascript">
        var essb_settings = {
            "ajax_url": "http:\/\/mauweb.monamedia.net\/strawberrynet\/wp-admin\/admin-ajax.php",
            "essb3_nonce": "37ba50528f",
            "essb3_plugin_url": "http:\/\/mauweb.monamedia.net\/strawberrynet\/wp-content\/plugins\/easy-social-share-buttons3",
            "essb3_facebook_total": true,
            "essb3_admin_ajax": false,
            "essb3_internal_counter": false,
            "essb3_stats": false,
            "essb3_ga": false,
            "essb3_ga_mode": "simple",
            "essb3_counter_button_min": 0,
            "essb3_counter_total_min": 0,
            "blog_url": "http:\/\/mauweb.monamedia.net\/strawberrynet\/",
            "ajax_type": "wp",
            "essb3_postfloat_stay": false,
            "essb3_no_counter_mailprint": false,
            "essb3_single_ajax": false,
            "twitter_counter": "self",
            "post_id": 16
        };
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style id="custom-css" type="text/css">
        :root {
            --primary-color: #662d91;
        }

        /* Site Width */
        .full-width .ubermenu-nav,
        .container,
        .row {
            max-width: 1230px
        }

        .row.row-collapse {
            max-width: 1200px
        }

        .row.row-small {
            max-width: 1222.5px
        }

        .row.row-large {
            max-width: 1260px
        }

        body.framed,
        body.framed header,
        body.framed .header-wrapper,
        body.boxed,
        body.boxed header,
        body.boxed .header-wrapper,
        body.boxed .is-sticky-section {
            max-width: 1260px
        }

        .header-main {
            height: 120px
        }

        #logo img {
            max-height: 75px
        }

        #logo.main-logo {
            width: 356px;
            background-image: url("{{ asset('header-bg.png') }}");
            background-size: cover;
            padding-top: 10px;
        }

        .header-bottom {
            min-height: 40px
        }

        .header-top {
            min-height: 30px
        }

        .header-main p {
            padding-bottom: 0 !important;
        }

        .has-transparent+.page-title:first-of-type,
        .has-transparent+#main>.page-title,
        .has-transparent+#main>div>.page-title,
        .has-transparent+#main .page-header-wrapper:first-of-type .page-title {
            padding-top: 155px;
        }

        .header.show-on-scroll,
        .stuck .header-main {
            height: 90px !important
        }

        .header.show-on-scroll,
        .stuck .header-main img {
            max-height: 68px !important
        }

        .header.show-on-scroll,
        .stuck .header-main p {
            padding-bottom: 0 !important;
        }

        .header.show-on-scroll,
        .stuck .header-main .sub-logo {
            padding-top: 10px;
        }

        /* .stuck #logo img {
            max-height: 70px !important
        } */

        .search-form {
            width: 60%;
        }

        .header-bg-color,
        .header-wrapper {
            background-color: rgba(255, 255, 255, 0)
        }

        .header-bg-image {
            background: #321428;
        }

        .header-bg-image {
            background-repeat: repeat;
        }

        .header-bottom {
            background-color: #f1f1f1
        }

        .header-main .nav>li>a {
            line-height: 16px
        }

        .stuck .header-main .nav>li>a {
            line-height: 50px
        }

        .header-bottom-nav>li>a {
            line-height: 16px
        }

        @media (max-width: 549px) {
            .header-main {
                height: 70px
            }

            #logo img {
                max-height: 70px
            }
        }

        .header-top {
            background-color: rgba(255, 255, 255, 0) !important;
        }

        /* Color */
        .accordion-title.active,
        .has-icon-bg .icon .icon-inner,
        .logo a,
        .primary.is-underline,
        .primary.is-link,
        .badge-outline .badge-inner,
        .nav-outline>li.active>a,
        .nav-outline>li.active>a,
        .cart-icon strong,
        [data-color='primary'],
        .is-outline.primary {
            color: #662d91;
        }

        /* Color !important */
        [data-text-color="primary"] {
            color: #662d91 !important;
        }

        /* Background */
        .scroll-to-bullets a,
        .featured-title,
        .label-new.menu-item>a:after,
        .nav-pagination>li>.current,
        .nav-pagination>li>span:hover,
        .nav-pagination>li>a:hover,
        .has-hover:hover .badge-outline .badge-inner,
        button[type="submit"],
        .button.wc-forward:not(.checkout):not(.checkout-button),
        .button.submit-button,
        .button.primary:not(.is-outline),
        .featured-table .title,
        .is-outline:hover,
        .has-icon:hover .icon-label,
        .nav-dropdown-bold .nav-column li>a:hover,
        .nav-dropdown.nav-dropdown-bold>li>a:hover,
        .nav-dropdown-bold.dark .nav-column li>a:hover,
        .nav-dropdown.nav-dropdown-bold.dark>li>a:hover,
        .is-outline:hover,
        .tagcloud a:hover,
        .grid-tools a,
        input[type='submit']:not(.is-form),
        .box-badge:hover .box-text,
        input.button.alt,
        .nav-box>li>a:hover,
        .nav-box>li.active>a,
        .nav-pills>li.active>a,
        .current-dropdown .cart-icon strong,
        .cart-icon:hover strong,
        .nav-line-bottom>li>a:before,
        .nav-line-grow>li>a:before,
        .nav-line>li>a:before,
        .banner,
        .header-top,
        .slider-nav-circle .flickity-prev-next-button:hover svg,
        .slider-nav-circle .flickity-prev-next-button:hover .arrow,
        .primary.is-outline:hover,
        .button.primary:not(.is-outline),
        input[type='submit'].primary,
        input[type='submit'].primary,
        input[type='reset'].button,
        input[type='button'].primary,
        .badge-inner {
            background-color: #662d91;
        }

        /* Border */
        .nav-vertical.nav-tabs>li.active>a,
        .scroll-to-bullets a.active,
        .nav-pagination>li>.current,
        .nav-pagination>li>span:hover,
        .nav-pagination>li>a:hover,
        .has-hover:hover .badge-outline .badge-inner,
        .accordion-title.active,
        .featured-table,
        .is-outline:hover,
        .tagcloud a:hover,
        blockquote,
        .has-border,
        .cart-icon strong:after,
        .cart-icon strong,
        .blockUI:before,
        .processing:before,
        .loading-spin,
        .slider-nav-circle .flickity-prev-next-button:hover svg,
        .slider-nav-circle .flickity-prev-next-button:hover .arrow,
        .primary.is-outline:hover {
            border-color: #662d91
        }

        .nav-tabs>li.active>a {
            border-top-color: #662d91
        }

        /* Fill */
        .slider .flickity-prev-next-button:hover svg,
        .slider .flickity-prev-next-button:hover .arrow {
            fill: #662d91;
        }

        /* Background Color */
        [data-icon-label]:after,
        .secondary.is-underline:hover,
        .secondary.is-outline:hover,
        .icon-label,
        .button.secondary:not(.is-outline),
        .button.alt:not(.is-outline),
        .badge-inner.on-sale,
        .button.checkout,
        .single_add_to_cart_button {
            background-color: #b53788;
        }

        /* Color */
        .secondary.is-underline,
        .secondary.is-link,
        .secondary.is-outline,
        .stars a.active,
        .star-rating:before,
        .woocommerce-page .star-rating:before,
        .star-rating span:before,
        .color-secondary {
            color: #b53788
        }

        /* Color !important */
        [data-text-color="secondary"] {
            color: #b53788 !important;
        }

        /* Border */
        .secondary.is-outline:hover {
            border-color: #b53788
        }

        body {
            font-size: 100%;
        }

        body {
            font-family: "Oswald", sans-serif
        }

        body {
            font-weight: 0
        }

        .nav>li>a {
            font-family: "Oswald", sans-serif;
        }

        .nav>li>a {
            font-weight: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .heading-font,
        .off-canvas-center .nav-sidebar.nav-vertical>li>a {
            font-family: "Oswald", sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .heading-font,
        .banner h1,
        .banner h2 {
            font-weight: 0;
        }

        .alt-font {
            font-family: "Dancing Script", sans-serif;
        }

        .header:not(.transparent) .header-nav.nav>li>a {
            color: #b53788;
        }

        .header:not(.transparent) .header-bottom-nav.nav>li>a {
            color: #ffffff;
        }

        @media screen and (min-width: 550px) {
            .products .box-vertical .box-image {
                min-width: 300px !important;
                width: 300px !important;
            }
        }

        .header-main .social-icons,
        .header-main .cart-icon strong,
        .header-main .menu-title,
        .header-main .header-button>.button.is-outline,
        .header-main .nav>li>a>i:not(.icon-angle-down) {
            color: #b53788 !important;
        }

        .header-main .header-button>.button.is-outline,
        .header-main .cart-icon strong:after,
        .header-main .cart-icon strong {
            border-color: #b53788 !important;
        }

        .header-main .header-button>.button:not(.is-outline) {
            background-color: #b53788 !important;
        }

        .header-main .current-dropdown .cart-icon strong,
        .header-main .header-button>.button:hover,
        .header-main .header-button>.button:hover i,
        .header-main .header-button>.button:hover span {
            color: #FFF !important;
        }

        .header-main .menu-title:hover,
        .header-main .social-icons a:hover,
        .header-main .header-button>.button.is-outline:hover,
        .header-main .nav>li>a:hover>i:not(.icon-angle-down) {
            color: #b53788 !important;
        }

        .header-main .current-dropdown .cart-icon strong,
        .header-main .header-button>.button:hover {
            background-color: #b53788 !important;
        }

        .header-main .current-dropdown .cart-icon strong:after,
        .header-main .current-dropdown .cart-icon strong,
        .header-main .header-button>.button:hover {
            border-color: #b53788 !important;
        }

        .absolute-footer,
        html {
            background-color: #52246d
        }

        .label-new.menu-item>a:after {
            content: "New";
        }

        .label-hot.menu-item>a:after {
            content: "Hot";
        }

        .label-sale.menu-item>a:after {
            content: "Sale";
        }

        .label-popular.menu-item>a:after {
            content: "Popular";
        }
    </style>
    <style type="text/css" id="wp-custom-css">
        /*---------global-----------*/
        /*---căn đều sẳn phẩm---*/
        .has-shadow>.col>.col-inner {
            height: 100%;
        }

        .flickity-viewport .col.is-selected {
            height: 100%;
        }

        .flickity-viewport .col-inner {
            height: 100%;
        }

        .product-small.box.has-hover.box-normal.box-text-bottom {
            height: 100%;
        }

        /*---giới hạn chữ tên sản phẩm---*/
        p.name.product-title a {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            height: 38px;
        }

        /*---style product price---*/
        .price-wrapper {
            display: table;
        }

        .price-wrapper .price {
            height: 32px;
            display: table-cell;
            vertical-align: middle;
            text-align: center;
            line-height: 120%;
        }

        /*---het căn đều sẳn phẩm---*/
        /*--------end global--------*/


        /*---------header-----------*/
        .header-top .nav li a {
            color: #b53788;
            font-weight: bold;
        }

        .header-main #logo img {
            max-height: 160px;
            /* margin-top: -15px; */
            margin-left: 10px;
        }

        .header-main .form-flat input:not([type="submit"]),
        .header-main .form-flat textarea,
        .header-main .form-flat select {
            height: 37px;
            background-color: #fff;
            background-position: 99% 50%;
            color: currentColor !important;
            border-radius: 5px;
            border: solid 2px #521b76;
            margin-top: -50px;
        }

        .header-main .searchform .button.icon i {
            font-size: 1.2em;
            color: #521b76;
            margin-top: -50px;
        }

        .header-main .nav li a {
            text-transform: capitalize;
        }

        .header-main .nav li a span {
            order: 1;
            margin-left: 5px;
        }

        .header-main .nav li a .cart-icon {
            order: 0;
        }

        .header-bottom {
            background: #623381;
            background: -moz-linear-gradient(left, #623381 30%, #c62f7a 100%);
            background: -webkit-linear-gradient(left, #623381 30%, #c62f7a 100%);
            background: linear-gradient(to right, #623381 30%, #c62f7a 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#623381', endColorstr='#c62f7a', GradientType=1);
        }

        .header-bottom .nav>li {
            padding: 2px 15px;
            border-radius: 5px 5px 0 0;
            margin-top: 3px;
            margin-right: 2px;
        }

        .header-bottom .nav>li:before {
            color: #fff;
            margin-right: 5px;
        }

        .header-bottom .nav>li>a {
            font-weight: normal;
            font-size: 14px;
        }

        .header-bottom .nav>li.current-menu-item,
        .header-bottom .nav>li.current-menu-parent,
        .header-bottom .nav>li:hover {
            background-color: #fff;
        }

        .header-bottom .nav>li.current-menu-item>a,
        .header-bottom .nav>li.current-menu-parent>a,
        .header-bottom .nav>li:hover>a {
            color: #51216b !important;
        }

        .header-bottom .nav>li.current-menu-item:before,
        .header-bottom .nav>li:hover:before {
            color: #51216b !important;
        }

        /*---style Mua theo hiệu---*/
        .woof_submit_search_form_container {
            display: none;
        }

        .woof_container {
            padding-bottom: 0px;
            margin-bottom: 0px;
        }

        .woof_container select {
            box-sizing: border-box;
            border: 0px solid #ddd;
            padding: 0 15px;
            height: 2.6em;
            font-size: 14px;
            font-weight: bold;
            border-radius: 0;
            max-width: 100%;
            width: 100%;
            vertical-align: middle;
            background-color: #fff0;
            color: #fff;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0);
            transition: color .3s, border .3s, background .3s, opacity .3s;
        }

        .woof_container:hover select {
            color: #51216b;
        }

        /*---end style Mua theo hiệu---*/
        /*--------end header--------*/


        /*---------content-----------*/
        /*-----style contact form-----*/
        .sec_lien_he .form-ct {
            width: 780px;
            margin: 0 auto;
            max-width: 100%;
        }

        .sec_lien_he .form-ct .form-row {
            padding: 5px;
            float: left;
            width: 100%;
            margin-bottom: 0;
        }

        .sec_lien_he .form-ct .form-row.w50 {
            width: 50%;
        }

        .sec_lien_he input,
        .sec_lien_he textarea {
            margin-bottom: 0;
        }

        .sec_lien_he .center-txt {
            text-align: center;
        }

        .sec_lien_he .center-txt input {
            min-width: 170px;
        }

        .sec_lien_he .wpcf7-form-control:focus {
            border-color: #f8b742;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(248, 183, 66, 0.6);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(248, 183, 66, 0.6);
        }

        /*---end style contact form---*/

        /*---style filter in sidebar---*/
        ul.woocommerce-widget-layered-nav-list {
            max-height: 300px;
            overflow: auto;
            padding-right: 20px;
        }

        ul.product_list_widget {
            font-size: 14px;
        }

        /*---end style filter in sidebar---*/
        /*---style shop and product sidebar---*/
        #shop-sidebar ul,
        #product-sidebar ul,
        .sec_product .sidebar-wrapper ul {
            font-size: 14px;
            border: 1px solid #ddd;
            padding: 15px;
        }

        /*---end style shop and product sidebar---*/

        /*---style title---*/
        span.section-title-main {
            padding: 0 15px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            margin: 0px;
            letter-spacing: 6px;
            text-transform: uppercase;
        }

        .section-title b {
            display: block;
            -ms-flex: 1;
            flex: 1;
            height: 5px;
            opacity: 1;
            background-color: #0b0b0b;
        }

        .sec_featured_product .section-title b {
            background-color: #65318f;
        }

        /*---end style title---*/

        /*---style sec_banner---*/
        .sec_banner .col-inner {
            border: 0px;
            padding: 8px;
            background: #662d91;
            background: -moz-linear-gradient(-45deg, #662d91 0%, #e2195c 100%);
            background: -webkit-gradient(left top, right bottom, color-stop(0%, #662d91), color-stop(100%, #e2195c));
            background: -webkit-linear-gradient(-45deg, #662d91 0%, #e2195c 100%);
            background: -o-linear-gradient(-45deg, #662d91 0%, #e2195c 100%);
            background: -ms-linear-gradient(-45deg, #662d91 0%, #e2195c 100%);
            background: linear-gradient(135deg, #662d91 0%, #e2195c 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#662d91', endColorstr='#e2195c', GradientType=1);
        }

        /*---style sec_banner---*/

        /*---style border sec_featured_product---*/
        .sec_featured_product .flickity-viewport .col-inner {
            border: 0px;
            padding: 8px;
            background: #662d91;
            background: -moz-linear-gradient(-45deg, #662d91 0%, #e2195c 100%);
            background: -webkit-gradient(left top, right bottom, color-stop(0%, #662d91), color-stop(100%, #e2195c));
            background: -webkit-linear-gradient(-45deg, #662d91 0%, #e2195c 100%);
            background: -o-linear-gradient(-45deg, #662d91 0%, #e2195c 100%);
            background: -ms-linear-gradient(-45deg, #662d91 0%, #e2195c 100%);
            background: linear-gradient(135deg, #662d91 0%, #e2195c 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#662d91', endColorstr='#e2195c', GradientType=1);
        }

        /*---end style border sec_featured_product---*/

        /*---style trang FAQs---*/
        .sec_faqs h3.accordion_title {
            text-align: center;
        }

        .sec_faqs .accordion {
            border: 2px solid rgba(186, 40, 123, 0.75);
            border-radius: 5px;
        }

        /*---end style trang FAQs---*/
        /*--------end content--------*/


        /*---------footer-----------*/
        /*---style sec_footer_connect---*/
        .sec_footer_connect .wpcf7 p {
            padding: 0;
            margin: 0;
            display: inline-flex;
        }

        .sec_footer_connect input#email-dang-ky {
            height: 50px;
            border-radius: 5px 0 0 5px;
            margin-bottom: 0;
        }

        .sec_footer_connect input#btn-gui {
            border-radius: 0 5px 5px 0;
            background-color: #52246d;
            margin-bottom: 0;
        }

        .sec_footer_connect .footer_title h3 {
            font-size: 18px;
            font-weight: 300;
        }

        .sec_footer_connect .footer_title b {
            font-size: 30px;
            line-height: 1.1em;
            font-weight: bold;
        }

        /*---end style sec_footer_connect---*/

        /*---style footer horizontal---*/
        .mona_sidebar_footer_horizontal ul {
            list-style: none;
            padding: 0px;
            margin: 0px;
            text-transform: uppercase;
        }

        .mona_sidebar_footer_horizontal li {
            display: inline-block;
            padding-right: 20px;
            margin-top: 5px;
        }

        .mona_sidebar_footer_horizontal ul.menu>li+li,
        .mona_sidebar_footer_horizontal .widget>ul>li+li {
            border-top: 0px solid #ececec;
        }

        .mona_sidebar_footer_horizontal li a {
            padding: 5px 0px;
        }

        .mona_sidebar_footer_horizontal ul li+li {
            border-left: 1px solid #ee2c72 !important;
            padding-left: 20px;
        }

        /*---end style footer horizontal---*/
        .sec_footer_info h3 {
            font-size: 14px;
            letter-spacing: 0.09em;
            margin-bottom: 15px;
        }

        .mona_sidebar_footer_vertical ul {
            padding: 0;
            margin: 0;
        }

        .mona_sidebar_footer_vertical ul.menu>li+li,
        .mona_sidebar_footer_vertical .widget>ul>li+li {
            border-top: 0px solid #ececec;
        }

        .mona_sidebar_footer_vertical ul li a {
            padding: 3px 0;
        }

        /*--------end footer--------*/

        /*-------mobile screen-------*/
        @media (max-width: 549px) {
            .header-main {
                background-color: rgba(255, 255, 255, 0.8);
            }

            .header-main #logo img {
                max-height: 70px;
                margin: 0 auto;
            }

            .mobile-sidebar .nav-vertical>li:before {
                margin-left: 20px;
                margin-right: -10px;
            }

            .woof_container select {
                color: rgba(102, 102, 102, 0.85);
                padding: 0;
            }

            .sec_footer_info a.button.white.is-link {
                float: left;
            }

            .mona_sidebar_footer_horizontal ul li {
                border-left: 1px solid #ee2c72 !important;
                padding-left: 20px;
                margin-top: 10px;
            }
        }

        /* .btn-buynow a{
   color: rgb(208, 48, 75); font-weight:bold; font-size:20px;
   line-height: 56px;
  }

  .btn-buynow:hover a{
   color: #ffff;
  }

  .btn-buynow-img {
   border-radius: 50%;
   

  }


  .btn-buynow-img,
  .btn-buynow{
   background: rgb(192, 168, 74);
   padding: 20px;
  } */

        .btn__close {
            background-color: #b53788;
            padding: 10px 20px;
            border-radius: 4px;
            color: #fff;
            font-weight: bold;
        }

        .btn__ordernow {
            background-color: red;
            padding: 10px 20px;
            border-radius: 4px;
            color: #fff;
            font-weight: bold;
        }

        .btn__ordernow:hover,
        .btn__close:hover {
            cursor: pointer;
            color: #fff;
            box-shadow: 8px 8px 19px -3px rgba(73, 64, 64, 0.75);
            -webkit-box-shadow: 8px 8px 19px -3px rgba(73, 64, 64, 0.75);
            -moz-box-shadow: 8px 8px 19px -3px rgba(73, 64, 64, 0.75);
        }

        /*-----end mobile screen-----*/
    </style>
    <script type="text/javascript">
        var woof_is_permalink = 1;

        var woof_shop_page = "";

        var woof_really_curr_tax = {};
        var woof_current_page_link = location.protocol + '//' + location.host + location.pathname;
        //***lets remove pagination from woof_current_page_link
        woof_current_page_link = woof_current_page_link.replace(/\page\/[0-9]+/, "");
        woof_current_page_link = "{{ asset('theme/cua-hang/') }}";
        var woof_link = "{{ asset('theme/wp-content/plugins/woocommerce-products-filter/') }}";
    </script>

    <script>
        var woof_ajaxurl = "{{ asset('theme/wp-admin/admin-ajax.php') }}";

        var woof_lang = {
            'orderby': "orderby",
            'date': "date",
            'perpage': "per page",
            'pricerange': "price range",
            'menu_order': "menu order",
            'popularity': "popularity",
            'rating': "rating",
            'price': "price low to high",
            'price-desc': "price high to low"
        };

        if (typeof woof_lang_custom == 'undefined') {
            var woof_lang_custom = {}; /*!!important*/
        }

        //***

        var woof_is_mobile = 0;



        var woof_show_price_search_button = 0;
        var woof_show_price_search_type = 0;

        var woof_show_price_search_type = 0;

        var swoof_search_slug = "swoof";


        var icheck_skin = {};
        icheck_skin.skin = "flat";
        icheck_skin.color = "aero";

        var is_woof_use_chosen = 0;



        var woof_current_values = '[]';
        //+++
        var woof_lang_loading = "Loading ...";


        var woof_lang_show_products_filter = "show products filter";
        var woof_lang_hide_products_filter = "hide products filter";
        var woof_lang_pricerange = "price range";

        //+++

        var woof_use_beauty_scroll = 1;
        //+++
        var woof_autosubmit = 1;
        var woof_ajaxurl = "{{ asset('theme/wp-admin/admin-ajax.php') }}";
        /*var woof_submit_link = "";*/
        var woof_is_ajax = 0;
        var woof_ajax_redraw = 0;
        var woof_ajax_page_num = 1;
        var woof_ajax_first_done = false;
        var woof_checkboxes_slide_flag = true;


        //toggles
        var woof_toggle_type = "text";

        var woof_toggle_closed_text = "-";
        var woof_toggle_opened_text = "+";

        var woof_toggle_closed_image = "{{ asset('theme/wp-content/plugins/woocommerce-products-filter/img/plus3.png') }}";
        var woof_toggle_opened_image =
            "{{ asset('theme/wp-content/plugins/woocommerce-products-filter/img/minus3.png') }}";


        //indexes which can be displayed in red buttons panel
        var woof_accept_array = ["min_price", "orderby", "perpage", , "product_visibility", "product_cat", "product_tag",
            "pa_the-loai", "pa_thuong-hieu", "pa_xuat-xu"
        ];




        //***
        //for extensions

        var woof_ext_init_functions = null;



        var woof_overlay_skin = "default";


        jQuery(function() {
            woof_current_values = jQuery.parseJSON(woof_current_values);
            if (woof_current_values == null || woof_current_values.length == 0) {
                woof_current_values = {};
            }

        });

        function woof_js_after_ajax_done() {
            jQuery(document).trigger('woof_ajax_done');
        }
    </script>
</head>

<body
    class="home page-template page-template-page-blank page-template-page-blank-php page page-id-16 lightbox nav-dropdown-has-arrow">

    <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
    @include($theme . '.components.ordernow_modal')
    @include($theme . '.components.product_detail_modal')
    @include($theme . '.components._contact')


    <div id="wrapper">

        <header id="header" class="header has-sticky sticky-jump">
            <div class="header-wrapper">
                <div style="display: none;" id="top-bar" class="header-top hide-for-medium">
                    <div class="flex-row container">
                        <div class="flex-col hide-for-medium flex-left">
                            <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
                            </ul>
                        </div><!-- flex-col left -->

                        <div class="flex-col hide-for-medium flex-center">
                            <ul class="nav nav-center nav-small  nav-divided">
                            </ul>
                        </div><!-- center -->

                        <div class="flex-col hide-for-medium flex-right">
                            {{-- <ul class="nav top-bar-nav nav-right nav-small  nav-divided">
								<li id="menu-item-159"
									class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-159"><a
										href="{{asset('theme/theo-doi-don-hang/')}}"
										class="menu-image-title-after nav-top-link"><span class="menu-image-title">Theo
											dõi đơn hàng</span></a></li>
								<li id="menu-item-160"
									class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-160"><a
										href="{{asset('theme/lien-he/')}}"
										class="menu-image-title-after nav-top-link"><span class="menu-image-title">Liên
											hệ</span></a></li>
							</ul> --}}
                        </div><!-- .flex-col right -->


                    </div><!-- .flex-row -->
                </div><!-- #header-top -->
                <div id="masthead" class="header-main ">
                    <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

                        <!-- Logo -->
                        <div style="" class="animation-text">
                            <div class="text-wrapper">
                                <p class="target">A86 Hair Cosmetics - Chất lượng và khác biệt</p>
                            </div>
                        </div>
                        <div id="logo" class="flex-col logo main-logo"
                            style="height: 100%; background-size:cover; padding-top: 10px; text-align: center;">

                            <a style="display:flex; height: 100%;justify-content: center; "
                                href="{{ url('/') }}" title="" rel="home">
                                <img style="margin-top: 0;
                                max-height: 100px"
                                    width="356" height="75" src="{{ asset('images/logo.png') }}"
                                    class="header_logo header-logo" alt="strawberrynet" /><img width="356"
                                    height="75" src="{{ asset('images/logo.png') }}" class="header-logo-dark"
                                    alt="strawberrynet" /></a>

                            {{-- <div style="display:flex;">
                                <img style="width: 20%; height:20%" src="{{ asset('images/icon-hotline.gif') }}"
                                    alt="">
                                <div style="padding-left:20px">
                                    <p class="strong">Hotline</p>
                                    <p style="color: rgb(208, 48, 75); font-weight:bold">0397.586.221</p>
                                </div>
                            </div> --}}
                            <!-- Header logo -->

                        </div>

                        <!-- Mobile Left Elements -->
                        <div class="flex-col show-for-medium flex-left">
                            <ul class="mobile-nav nav">
                                <li class="nav-icon has-icon">
                                    <div class="header-button"> <a href="#" data-open="#main-menu"
                                            data-pos="left" data-bg="main-menu-overlay" data-color=""
                                            class="icon button circle is-outline is-small" aria-controls="main-menu"
                                            aria-expanded="false">

                                            <i class="icon-menu"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Left Elements -->
                        {{-- <div class="flex-col hide-for-medium flex-left">
                        <div id="logo" class="flex-col logo">

                            <a style="display:flex; justify-content: center" href="{{ url('/') }}"
                                title="" rel="home">
                                <img width="356" height="75" src="{{ asset('images/logo.png') }}"
                                    class="header_logo header-logo" alt="strawberrynet" /><img width="356"
                                    height="75" src="{{ asset('images/logo.png') }}" class="header-logo-dark"
                                    alt="strawberrynet" /></a>
                        </div>
                        </div> --}}

                        <!-- Right Elements -->
                        <div class="flex-col hide-for-medium flex-right">
                            <div id="logo" class="flex-col logo sub-logo">

                                {{-- <div style="display:flex; justify-content:center">
									<div class="btn-buynow-img">
										<img src="{{ asset('images/cart.png') }}" alt="">
										<i style="color:#fff; font-size:40px" class="fa fa-shopping-cart" aria-hidden="true"></i>
									</div>
									<div class="btn-buynow" style="padding-left:20px">
										<a href="">Mua sắm ngay</a>
									</div>
								</div> --}}
                                <!-- Header logo -->
                                {{-- <div style="display:flex; justify-content:center">
                                    <a href="#register-modal">
                                        <img src="{{ asset('images/ordernow.png') }}" alt="">
                                    </a>
                                </div> --}}

                                <div style="display:flex; justify-content:center">
                                    <img style="width: 20%; height:20%" src="{{ asset('images/icon-hotline.gif') }}"
                                        alt="">
                                    <div style="padding-left:20px; color: #ffd51e;">
                                        <p class="strong">Hotline</p>
                                        <p style="color: rgb(208, 48, 75); font-weight:bold; font-size: 22px;">
                                            0397.586.221</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Mobile Right Elements -->


                    </div><!-- .header-inner -->

                    <!-- Header divider -->
                    <div class="container">
                        <div class="top-divider full-width"></div>
                    </div>
                </div><!-- .header-main -->
                <div id="wide-nav" class="header-bottom wide-nav nav-dark flex-has-center hide-for-medium">
                    <div class="flex-row container">


                        <div class="flex-col hide-for-medium flex-center">
                            <ul class="nav header-nav header-bottom-nav nav-center  nav-spacing-xsmall nav-uppercase">

                                <li id="menu-item-167"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  menu-item-167 has-dropdown">
                                    <a href="{{ url('/') }}" class="menu-image-title-after nav-top-link"><span
                                            class="menu-image-title">Trang chủ</span></a>
                                </li>
                                @foreach ($categories as $category)
                                    @if (count($category->getChildrens($category->id)) > 0)
                                        <li id="menu-item-171"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  menu-item-171 has-dropdown">
                                            <a href="#{{ ktc_str_convert($category->name) }}"
                                                class="menu-image-title-after nav-top-link"><span
                                                    class="menu-image-title">{{ $category->name }}</span></a>
                                            <ul class='nav-dropdown nav-dropdown-default'>
                                                @foreach ($category->getChildrens($category->id) as $cateChild)
                                                    <li id="menu-item-172"
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-172">
                                                        <a href="{{ url('shop/' . ktc_str_convert($cateChild->name) . '_' . $cateChild->id . '.html') }}"
                                                            class="menu-image-title-after"><span
                                                                class="menu-image-title">{{ $cateChild->name }}</span></a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        <li id="menu-item-171"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  menu-item-171 has-dropdown">
                                            <a href="#{{ ktc_str_convert($category->name) }}"
                                                class="menu-image-title-after nav-top-link"><span
                                                    class="menu-image-title">{{ $category->name }}</span></a>
                                        </li>
                                    @endif
                                @endforeach

                                <li id="menu-item-174"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  menu-item-174 has-dropdown">
                                    <a href="#register-modal" class="menu-image-title-after nav-top-link"><span
                                            class="menu-image-title">Liên hệ</span></a>
                                </li>
                            </ul>
                        </div><!-- flex-col -->



                    </div><!-- .flex-row -->
                </div><!-- .header-bottom -->

                <div class="header-bg-container fill">
                    <div class="header-bg-image fill"></div>
                    <div class="header-bg-color fill"></div>
                </div><!-- .header-bg-container -->
            </div><!-- header-wrapper-->
        </header>


        <main id="main" class="">


            <div id="content" role="main" class="content-area">


                <section class="section sec_banner" id="section_718239037">
                    <div class="bg section-bg fill bg-fill  bg-loaded">





                    </div><!-- .section-bg -->

                    <div class="section-content relative">

                        <div class="row row-small" id="row-35859827">
                            <div class="col col_banner small-12 large-12" data-animate="fadeInDown">
                                <div class="col-inner">
                                    <div class="slider-wrapper relative " id="slider-514137722">
                                        <div class="slider slider-nav-simple slider-nav-normal slider-nav-light slider-nav-outside slider-style-normal"
                                            data-flickity-options='{
            "cellAlign": "center",
            "imagesLoaded": true,
            "lazyLoad": 1,
            "freeScroll": false,
            "wrapAround": true,
            "autoPlay": 6000,
            "pauseAutoPlayOnHover" : true,
            "prevNextButtons": false,
            "contain" : true,
            "adaptiveHeight" : true,
            "dragThreshold" : 5,
            "percentPosition": true,
            "pageDots": false,
            "rightToLeft": false,
            "draggable": true,
            "selectedAttraction": 0.1,
            "parallax" : 0,
            "friction": 0.6        }'>

                                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_663651398">
                                                <div class="img-inner dark">
                                                    <img width="1140" height="308"
                                                        src="{{ asset('images/A86-logo.png') }}"
                                                        class="attachment-original size-original" alt=""
                                                        srcset="{{ asset('images/A86-logo.png') }} 1140w, {{ asset('images/A86-logo.png') }} 300w, {{ asset('images/A86-logo.png') }} 768w, {{ asset('images/A86-logo.png') }} 1024w, {{ asset('images/A86-logo.png') }} 24w, {{ asset('images/A86-logo.png') }} 36w, {{ asset('images/A86-logo.png') }} 48w, {{ asset('images/A86-logo.png') }} 600w"
                                                        sizes="(max-width: 1140px) 100vw, 1140px" />
                                                </div>

                                                <style scope="scope">
                                                    #image_663651398 {
                                                        width: 100%;
                                                    }
                                                </style>
                                            </div>

                                            {{-- <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1509327898">
                                                <div class="img-inner dark">
                                                    <img width="1140" height="308"
                                                        src="{{ asset('theme/wp-content/uploads/2018/03/banner_Feb18SpecialPurchase_1140_230.jpg') }}"
                                                        class="attachment-original size-original" alt=""
                                                        srcset="{{ asset('theme/wp-content/uploads/2018/03/banner_Feb18SpecialPurchase_1140_230.jpg') }} 1140w, {{ asset('theme/wp-content/uploads/2018/03/banner_Feb18SpecialPurchase_1140_230-300x81.jpg') }} 300w, {{ asset('theme/wp-content/uploads/2018/03/banner_Feb18SpecialPurchase_1140_230-768x207.jpg') }} 768w, {{ asset('theme/wp-content/uploads/2018/03/banner_Feb18SpecialPurchase_1140_230-1024x277.jpg') }} 1024w, {{ asset('theme/wp-content/uploads/2018/03/banner_Feb18SpecialPurchase_1140_230-24x6.jpg') }} 24w, {{ asset('theme/wp-content/uploads/2018/03/banner_Feb18SpecialPurchase_1140_230-36x10.jpg') }} 36w, {{ asset('theme/wp-content/uploads/2018/03/banner_Feb18SpecialPurchase_1140_230-48x13.jpg') }} 48w, {{ asset('theme/wp-content/uploads/2018/03/banner_Feb18SpecialPurchase_1140_230-600x162.jpg') }} 600w"
                                                        sizes="(max-width: 1140px) 100vw, 1140px" />
                                                </div>

                                                <style scope="scope">
                                                    #image_1509327898 {
                                                        width: 100%;
                                                    }
                                                </style>
                                            </div>

                                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1800123916">
                                                <div class="img-inner dark">
                                                    <img width="1140" height="308"
                                                        src="{{ asset('theme/wp-content/uploads/2018/03/banner_Feb18top40_1140_230.jpg') }}"
                                                        class="attachment-original size-original" alt=""
                                                        srcset="{{ asset('theme/wp-content/uploads/2018/03/banner_Feb18top40_1140_230.jpg') }} 1140w, {{ asset('theme/wp-content/uploads/2018/03/banner_Feb18top40_1140_230-300x81.jpg') }} 300w, {{ asset('theme/wp-content/uploads/2018/03/banner_Feb18top40_1140_230-768x207.jpg') }} 768w, {{ asset('theme/wp-content/uploads/2018/03/banner_Feb18top40_1140_230-1024x277.jpg') }} 1024w, {{ asset('theme/wp-content/uploads/2018/03/banner_Feb18top40_1140_230-24x6.jpg') }} 24w, {{ asset('theme/wp-content/uploads/2018/03/banner_Feb18top40_1140_230-36x10.jpg') }} 36w, {{ asset('theme/wp-content/uploads/2018/03/banner_Feb18top40_1140_230-48x13.jpg') }} 48w, {{ asset('theme/wp-content/uploads/2018/03/banner_Feb18top40_1140_230-600x162.jpg') }} 600w"
                                                        sizes="(max-width: 1140px) 100vw, 1140px" />
                                                </div>

                                                <style scope="scope">
                                                    #image_1800123916 {
                                                        width: 100%;
                                                    }
                                                </style>
                                            </div>

                                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1339223416">
                                                <div class="img-inner dark">
                                                    <img width="1140" height="308"
                                                        src="{{ asset('theme/wp-content/uploads/2018/03/banner_lowpricefragSep17_1140_230.jpg') }}"
                                                        class="attachment-original size-original" alt=""
                                                        srcset="{{ asset('theme/wp-content/uploads/2018/03/banner_lowpricefragSep17_1140_230.jpg') }} 1140w, {{ asset('theme/wp-content/uploads/2018/03/banner_lowpricefragSep17_1140_230-300x81.jpg') }} 300w, {{ asset('theme/wp-content/uploads/2018/03/banner_lowpricefragSep17_1140_230-768x207.jpg') }} 768w, {{ asset('theme/wp-content/uploads/2018/03/banner_lowpricefragSep17_1140_230-1024x277.jpg') }} 1024w, {{ asset('theme/wp-content/uploads/2018/03/banner_lowpricefragSep17_1140_230-24x6.jpg') }} 24w, {{ asset('theme/wp-content/uploads/2018/03/banner_lowpricefragSep17_1140_230-36x10.jpg') }} 36w, {{ asset('theme/wp-content/uploads/2018/03/banner_lowpricefragSep17_1140_230-48x13.jpg') }} 48w, {{ asset('theme/wp-content/uploads/2018/03/banner_lowpricefragSep17_1140_230-600x162.jpg') }} 600w"
                                                        sizes="(max-width: 1140px) 100vw, 1140px" />
                                                </div>

                                                <style scope="scope">
                                                    #image_1339223416 {
                                                        width: 100%;
                                                    }
                                                </style>
                                            </div>

                                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_364727269">
                                                <div class="img-inner dark">
                                                    <img width="1140" height="308"
                                                        src="{{ asset('theme/wp-content/uploads/2018/03/banner_SkinMasksFeb18_1140_230.jpg') }}"
                                                        class="attachment-original size-original" alt=""
                                                        srcset="{{ asset('theme/wp-content/uploads/2018/03/banner_SkinMasksFeb18_1140_230.jpg') }} 1140w, {{ asset('theme/wp-content/uploads/2018/03/banner_SkinMasksFeb18_1140_230-300x81.jpg') }} 300w, {{ asset('theme/wp-content/uploads/2018/03/banner_SkinMasksFeb18_1140_230-768x207.jpg') }} 768w, {{ asset('theme/wp-content/uploads/2018/03/banner_SkinMasksFeb18_1140_230-1024x277.jpg') }} 1024w, {{ asset('theme/wp-content/uploads/2018/03/banner_SkinMasksFeb18_1140_230-24x6.jpg') }} 24w, {{ asset('theme/wp-content/uploads/2018/03/banner_SkinMasksFeb18_1140_230-36x10.jpg') }} 36w, {{ asset('theme/wp-content/uploads/2018/03/banner_SkinMasksFeb18_1140_230-48x13.jpg') }} 48w, {{ asset('theme/wp-content/uploads/2018/03/banner_SkinMasksFeb18_1140_230-600x162.jpg') }} 600w"
                                                        sizes="(max-width: 1140px) 100vw, 1140px" />
                                                </div>

                                                <style scope="scope">
                                                    #image_364727269 {
                                                        width: 100%;
                                                    }
                                                </style>
                                            </div>

                                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_967302016">
                                                <div class="img-inner dark">
                                                    <img width="1140" height="308"
                                                        src="{{ asset('theme/wp-content/uploads/2018/03/banner_UnboxedFeb18_1140_230.jpg') }}"
                                                        class="attachment-original size-original" alt=""
                                                        srcset="{{ asset('theme/wp-content/uploads/2018/03/banner_UnboxedFeb18_1140_230.jpg') }} 1140w, {{ asset('theme/wp-content/uploads/2018/03/banner_UnboxedFeb18_1140_230-300x81.jpg') }} 300w, {{ asset('theme/wp-content/uploads/2018/03/banner_UnboxedFeb18_1140_230-768x207.jpg') }} 768w, {{ asset('theme/wp-content/uploads/2018/03/banner_UnboxedFeb18_1140_230-1024x277.jpg') }} 1024w, {{ asset('theme/wp-content/uploads/2018/03/banner_UnboxedFeb18_1140_230-24x6.jpg') }} 24w, {{ asset('theme/wp-content/uploads/2018/03/banner_UnboxedFeb18_1140_230-36x10.jpg') }} 36w, {{ asset('theme/wp-content/uploads/2018/03/banner_UnboxedFeb18_1140_230-48x13.jpg') }} 48w, {{ asset('theme/wp-content/uploads/2018/03/banner_UnboxedFeb18_1140_230-600x162.jpg') }} 600w"
                                                        sizes="(max-width: 1140px) 100vw, 1140px" />
                                                </div>

                                                <style scope="scope">
                                                    #image_967302016 {
                                                        width: 100%;
                                                    }
                                                </style>
                                            </div> --}}

                                        </div>

                                        <div class="loading-spin dark large centered"></div>

                                        <style scope="scope">
                                        </style>
                                    </div><!-- .ux-slider-wrapper -->


                                </div>
                            </div>

                            <style scope="scope">

                            </style>
                        </div>
                    </div><!-- .section-content -->


                    <style scope="scope">
                        #section_718239037 {
                            padding-top: 45px;
                            padding-bottom: 45px;
                        }
                    </style>
                </section>

                <section class="section sec_featured_product" style="padding-top: 0 !important;">
                    <div class="section-content relative">

                        <div class="row row-small" id="row-923958885">
                            <div class="col col_banner small-12 large-12" data-animate="fadeInDown">
                                <div class="col-inner text-center">
                                    <div class="container section-title-container">
                                        <a href="{{ url('/') }}" title="" rel="home">
                                            <img width="356" height="75" src="{{ asset('images/logo.png') }}"
                                                class="header_logo header-logo" alt="strawberrynet" /><img width="356"
                                                height="75" src="{{ asset('images/logo.png') }}" class="header-logo-dark"
                                                alt="strawberrynet" /></a>
                                        <p style="font-size: 20px; margin-bottom:5px !important; color:#000"> <strong style="font-size: 26px">A86
                                                Hair Cosmetics</strong> là một trong những đơn vị tiên phong trong lĩnh
                                            vực phân phối sản phẩm mỹ phẩm chăm sóc tóc.</p>
                                        <p style="padding-top: 5px; margin-bottom:5px !important; font-size: 20px; color:#000"> Chúng tôi cam kết
                                            mang lại cho khách hàng sản phẩm <strong style="font-size: 22px;">chất
                                                lượng</strong>, <strong style="font-size: 22px;">an toàn</strong> với
                                            khách hàng và <strong style="font-size: 22px;">giá cả phải chăng</strong> .
                                        </p>
                                        <p style="padding-top: 5px; margin-bottom:5px !important; font-size: 20px; color:#000">
                                            Với hệ thống 3 miền <strong style="font-size: 22px;">Bắc - Trung -
                                                Nam</strong> khách hàng có thể nhận ngay sản phẩm với thời gian ngắn
                                            nhất.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                @foreach ($categories as $category)
                    <section class="section sec_featured_product" id="{{ ktc_str_convert($category->name) }}">
                        <div class="bg section-bg fill bg-fill  bg-loaded">
                        </div><!-- .section-bg -->

                        <div class="section-content relative">

                            <div class="row row-small" id="row-923958885">
                                <div class="col col_banner small-12 large-12" data-animate="fadeInDown">
                                    <div class="col-inner text-center">
                                        <div class="container section-title-container">
                                            <h3 class="section-title section-title-center"><b></b><span
                                                    class="section-title-main"
                                                    style="color:rgb(101, 49, 143);">{{ $category->name }}</span><b></b>
                                            </h3>
                                        </div><!-- .section-title -->


                                        <div class="row large-columns-4 medium-columns-2 small-columns-1 row-normal has-shadow row-box-shadow-1 slider row-slider slider-nav-simple slider-nav-outside slider-nav-push"
                                            data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", 
            "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : 3000}'>




                                            @if (isset($category->products) && count($category->products) > 0)
                                                @foreach ($category->products as $item)
                                                    <div class="col">
                                                        <div class="col-inner">

                                                            <div class="badge-container absolute left top z-1">
                                                            </div>
                                                            <div
                                                                class="product-small box has-hover box-normal box-text-bottom">
                                                                <div class="box-image">
                                                                    <div class="">
                                                                        <a onclick="showDescription({{ $item->id }}, '{{ $item->name }}')"
                                                                            href="#productModal">
                                                                            <img width="300" height="300"
                                                                                src="{{ asset('documents/website/' . $item->image) }}"
                                                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                alt=""
                                                                                srcset="{{ asset('documents/website/' . $item->image) }} 300w, {{ asset('documents/website/' . $item->image) }} 150w, {{ asset('documents/website/' . $item->image) }} 768w, {{ asset('documents/website/' . $item->image) }} 24w, {{ asset('documents/website/' . $item->image) }} 36w, {{ asset('documents/website/' . $item->image) }} 48w, {{ asset('documents/website/' . $item->image) }} 600w, {{ asset('documents/website/' . $item->image) }} 100w, {{ asset('documents/website/' . $item->image) }} 800w"
                                                                                sizes="(max-width: 300px) 100vw, 300px" />
                                                                        </a>
                                                                    </div>
                                                                    {{-- <div class="image-tools top right show-on-hover">
																<div class="wishlist-icon">
																	<button
																		class="wishlist-button button is-outline circle icon">
																		<i class="icon-heart"></i> </button>
																	<div class="wishlist-popup dark">
	
																		<div class="clear"></div>
																	</div>
																</div>
															</div> --}}
                                                                    <div
                                                                        class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                                    </div>
                                                                </div><!-- box-image -->

                                                                <div class="box-text text-center">
                                                                    <div class="title-wrapper">
                                                                        <p
                                                                            class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                                            {{ $category->name }} </p>
                                                                        <p class="name product-title"><a
                                                                                onclick="showDescription({{ $item->id }} , '{{ $item->name }}')"
                                                                                href="#productModal">{{ $item->name }}</a>
                                                                        </p>
                                                                    </div>
                                                                    <div class="price-wrapper">
                                                                        @if ($item->price == 0)
                                                                            <span class="price"><span
                                                                                    class="woocommerce-Price-amount amount">{{ $item->price_alternative }}</span></span>
                                                                        @else
                                                                            <span class="price"><span
                                                                                    class="woocommerce-Price-amount amount">{{ number_format($item->price) }}<span
                                                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                                                        @endif

                                                                    </div>
                                                                    <div class="add-to-cart-button"><a
                                                                            onclick="orderNow({{ $item->id }} , '{{ $item->name }}')"
                                                                            href="#register-modal" rel="nofollow"
                                                                            data-product_id="112"
                                                                            class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Đặt
                                                                            ngay</a></div>
                                                                </div><!-- box-text -->
                                                            </div><!-- box -->
                                                        </div><!-- .col-inner -->
                                                    </div><!-- col -->
                                                @endforeach
                                            @else
                                            @endif

                                        </div>


                                    </div>
                                </div>
                            </div>

                            <style scope="scope">

                            </style>
                        </div>


                        <style scope="scope">
                            #section_1117054090 {
                                padding-top: 30px;
                                padding-bottom: 30px;
                                background-color: rgb(235, 229, 241);
                            }
                        </style>
                    </section>
                @endforeach


                <section class="section sec_featured_product">
                    <div class="bg section-bg fill bg-fill  bg-loaded">
                    </div><!-- .section-bg -->

                    <div class="section-content relative">

                        <div class="row row-small" id="row-923958885">
                            <div class="col col_banner small-12 large-12" data-animate="fadeInDown">
                                <div id="text-4235153032" class="text-center">
    
    
                                    <h2>CẢM NHẬN KHÁCH HÀNG</h2>

                                    
                                </div>
                                <div class="col-inner text-center">
                                    <div class="is-border is-dashed"
                                    style="border-color:rgb(164, 164, 164);border-width:1px 1px 1px 1;">
                                </div>

                                


                                    <div class="row large-columns-3 medium-columns-2 small-columns-1 row-normal has-shadow row-box-shadow-1 slider row-slider slider-nav-simple slider-nav-outside slider-nav-push"
                                        data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", 
        "dragThreshold" : 5, "cellAlign": "left","wrapAround": false,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : 3000}'>


                                                <style>
                                                    .bdr-50{
                                                        border-radius: 50%;
                                                    }
                                                </style>
                                                <div class="col" style="padding: 30px; ">
                                                    <div class="">
                                                        <div class="badge-container absolute left top z-1">
                                                        </div>
                                                        <div style="display:flex">
                                                            <div class="">
                                                                <img class="bdr-50"  width="200" height="100" src="https://haircolorvn.com/wp-content/uploads/2021/09/comment-haircolorvn-salon-hoang-them.jpg" class="attachment-thumbnail size-thumbnail" alt="Đánh giá Salon Hoàng Thêm" loading="lazy">
                                                            </div> 
                                                            <div class="" style="padding-left: 20px">
                                                                <div class="icon-box-text p-last-0">
                                                                    <div class="star-rating"><span style="width:100%"><strong class="rating"></strong></span></div>  				<div class="testimonial-text line-height-small italic test_text first-reset last-reset is-italic">
                                                                      
                                                          
                                                          
                                                                    </div>
                                                                  </div>
                                                                  <div id="text-2093850480" class="text comment-customer" style="text-align:left !important">
		

                                                                    <p><strong>SALON TÙNG PHẠM</strong><br><em>Nhiều khách hàng của tôi cho ý kiến ok khi dùng mỹ phẩm tóc A86.</em></p>
                                                                                </div>
                                                            </div>   
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col" style="padding: 30px; ">
                                                    <div class="">
                                                        <div class="badge-container absolute left top z-1">
                                                        </div>
                                                        <div style="display:flex">
                                                            <div class="">
                                                                <img class="bdr-50"  width="200" height="100" src="https://haircolorvn.com/wp-content/uploads/2021/09/comment-haircolorvn-vien-toc-my-an.jpg" class="attachment-thumbnail size-thumbnail" alt="Đánh giá Salon Hoàng Thêm" loading="lazy">
                                                            </div> 
                                                            <div class="" style="padding-left: 20px">
                                                                <div class="icon-box-text p-last-0">
                                                                    <div class="star-rating"><span style="width:100%"><strong class="rating"></strong></span></div>  				<div class="testimonial-text line-height-small italic test_text first-reset last-reset is-italic">
                                                                      
                                                          
                                                          
                                                                    </div>
                                                                  </div>
                                                                  <div id="text-2093850480" class="text comment-customer" style="text-align:left !important">
		

                                                                    <p><strong>VIỆN TÓC MẪN AN</strong><br><em>Dòng sản phẩm khá tốt được học viện tôi tin dùng.</em></p>
                                                                                </div>
                                                            </div>   
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col" style="padding: 30px; ">
                                                    <div class="">
                                                        <div class="badge-container absolute left top z-1">
                                                        </div>
                                                        <div style="display:flex">
                                                            <div class="">
                                                                <img class="bdr-50"  width="200" height="100" src="https://haircolorvn.com/wp-content/uploads/2021/09/comment-haircolorvn-salon-van-phu.jpg" class="attachment-thumbnail size-thumbnail" alt="Đánh giá Salon Hoàng Thêm" loading="lazy">
                                                            </div> 
                                                            <div class="" style="padding-left: 20px">
                                                                <div class="icon-box-text p-last-0">
                                                                    <div class="star-rating"><span style="width:100%"><strong class="rating"></strong></span></div>  				<div class="testimonial-text line-height-small italic test_text first-reset last-reset is-italic">
                                                                      
                                                          
                                                          
                                                                    </div>
                                                                  </div>
                                                                  <div id="text-2093850480" class="text comment-customer" style="text-align:left !important">
		

                                                                    <p><strong>SALON VĂN PHÚ</strong><br><em>Khách hàng của tôi đánh giá rất tốt về mỹ phẩm tóc này.</em></p>
                                                                                </div>
                                                            </div>   
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col" style="padding: 30px; ">
                                                    <div class="">
                                                        <div class="badge-container absolute left top z-1">
                                                        </div>
                                                        <div style="display:flex">
                                                            <div class="">
                                                                <img class="bdr-50"  width="200" height="100" src="https://haircolorvn.com/wp-content/uploads/2021/09/comment-haircolorvn-salon-van-phu.jpg" class="attachment-thumbnail size-thumbnail" alt="Đánh giá Salon Hoàng Thêm" loading="lazy">
                                                            </div> 
                                                            <div class="" style="padding-left: 20px">
                                                                <div class="icon-box-text p-last-0">
                                                                    <div class="star-rating"><span style="width:100%"><strong class="rating"></strong></span></div>  				<div class="testimonial-text line-height-small italic test_text first-reset last-reset is-italic">
                                                                      
                                                          
                                                          
                                                                    </div>
                                                                  </div>
                                                                  <div id="text-2093850480" class="text comment-customer" style="text-align:left !important">
		

                                                                    <p><strong>SALON VĂN PHÚ</strong><br><em>Khách hàng của tôi đánh giá rất tốt về mỹ phẩm tóc này.</em></p>
                                                                                </div>
                                                            </div>   
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col" style="padding: 30px; ">
                                                    <div class="">
                                                        <div class="badge-container absolute left top z-1">
                                                        </div>
                                                        <div style="display:flex">
                                                            <div class="">
                                                                <img class="bdr-50"  width="200" height="100" src="https://haircolorvn.com/wp-content/uploads/2021/09/comment-haircolorvn-salon-hoang-long.jpg" class="attachment-thumbnail size-thumbnail" alt="Đánh giá Salon Hoàng Thêm" loading="lazy">
                                                            </div> 
                                                            <div class="" style="padding-left: 20px">
                                                                <div class="icon-box-text p-last-0">
                                                                    <div class="star-rating"><span style="width:100%"><strong class="rating"></strong></span></div>  				<div class="testimonial-text line-height-small italic test_text first-reset last-reset is-italic">
                                                                      
                                                          
                                                          
                                                                    </div>
                                                                  </div>
                                                                  <div id="text-2093850480" class="text comment-customer" style="text-align:left !important">
		

                                                                    <p><strong>SALON HOÀNG LONG</strong><br><em>Quá tốt, mỹ phẩm cao cấp, dùng rất ok. Giao hàng nhanh.</em></p>
                                                                                </div>
                                                            </div>   
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col" style="padding: 30px; ">
                                                    <div class="">
                                                        <div class="badge-container absolute left top z-1">
                                                        </div>
                                                        <div style="display:flex">
                                                            <div class="">
                                                                <img class="bdr-50"  width="200" height="100" src="https://haircolorvn.com/wp-content/uploads/2021/10/haircolor-tocngan-100x100.jpg" class="attachment-thumbnail size-thumbnail" alt="Đánh giá Salon Hoàng Thêm" loading="lazy">
                                                            </div> 
                                                            <div class="" style="padding-left: 20px">
                                                                <div class="icon-box-text p-last-0">
                                                                    <div class="star-rating"><span style="width:100%"><strong class="rating"></strong></span></div>  				<div class="testimonial-text line-height-small italic test_text first-reset last-reset is-italic">
                                                                      
                                                          
                                                          
                                                                    </div>
                                                                  </div>
                                                                  <div id="text-2093850480" class="text comment-customer" style="text-align:left !important">
		

                                                                    <p><strong>SALON NGỌC QUỲNH</strong><br><em>Haircolor thực sự là nơi tôi tin tưởng khi chọn mỹ phẩm tóc cao cấp.</em></p>
                                                                                </div>
                                                            </div>   
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col" style="padding: 30px; ">
                                                    <div class="">
                                                        <div class="badge-container absolute left top z-1">
                                                        </div>
                                                        <div style="display:flex">
                                                            <div class="">
                                                                <img class="bdr-50"  width="200" height="100" src="https://haircolorvn.com/wp-content/uploads/2021/09/comment-haircolorvn-salon-tung-tokio.jpg" class="attachment-thumbnail size-thumbnail" alt="Đánh giá Salon Hoàng Thêm" loading="lazy">
                                                            </div> 
                                                            <div class="" style="padding-left: 20px">
                                                                <div class="icon-box-text p-last-0">
                                                                    <div class="star-rating"><span style="width:100%"><strong class="rating"></strong></span></div>  				<div class="testimonial-text line-height-small italic test_text first-reset last-reset is-italic">
                                                                      
                                                          
                                                          
                                                                    </div>
                                                                  </div>
                                                                  <div id="text-2093850480" class="text comment-customer" style="text-align:left !important">
		

                                                                    <p><strong>SALON TÙNG TOKIO</strong><br><em>Rất Ok, mỹ phẩm tóc của Haircolor rất chất lượng, nhất là A86 và Kalispro.</em></p>
                                                                                </div>
                                                            </div>   
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col" style="padding: 30px; ">
                                                    <div class="">
                                                        <div class="badge-container absolute left top z-1">
                                                        </div>
                                                        <div style="display:flex">
                                                            <div class="">
                                                                <img class="bdr-50"  width="200" height="100" src="https://haircolorvn.com/wp-content/uploads/2021/09/comment-haircolorvn-phu-tokio.jpg" class="attachment-thumbnail size-thumbnail" alt="Đánh giá Salon Hoàng Thêm" loading="lazy">
                                                            </div> 
                                                            <div class="" style="padding-left: 20px">
                                                                <div class="icon-box-text p-last-0">
                                                                    <div class="star-rating"><span style="width:100%"><strong class="rating"></strong></span></div>  				<div class="testimonial-text line-height-small italic test_text first-reset last-reset is-italic">
                                                                      
                                                          
                                                          
                                                                    </div>
                                                                  </div>
                                                                  <div id="text-2093850480" class="text comment-customer" style="text-align:left !important">
		

                                                                    <p><strong>PHÚ TOKIO</strong><br><em>Tôi được khách hàng khen rất nhiều khi dùng A86 cho họ.</em></p>
                                                                                </div>
                                                            </div>   
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col" style="padding: 30px; ">
                                                    <div class="">
                                                        <div class="badge-container absolute left top z-1">
                                                        </div>
                                                        <div style="display:flex">
                                                            <div class="">
                                                                <img class="bdr-50"  width="200" height="100" src="https://haircolorvn.com/wp-content/uploads/2021/09/comment-haircolorvn-1.jpg" class="attachment-thumbnail size-thumbnail" alt="Đánh giá Salon Hoàng Thêm" loading="lazy">
                                                            </div> 
                                                            <div class="" style="padding-left: 20px">
                                                                <div class="icon-box-text p-last-0">
                                                                    <div class="star-rating"><span style="width:100%"><strong class="rating"></strong></span></div>  				<div class="testimonial-text line-height-small italic test_text first-reset last-reset is-italic">
                                                                      
                                                          
                                                          
                                                                    </div>
                                                                  </div>
                                                                  <div id="text-2093850480" class="text comment-customer" style="text-align:left !important">
		

                                                                    <p><strong>SALON THỦY DINO</strong><br><em>Sản phẩm thật sự tuyệt vời ngoài mong đợi.</em></p>
                                                                                </div>
                                                            </div>   
                                                        </div>
                                                    </div>
                                                </div>
                                                

                      

                                          
                        </div>

                        <style scope="scope">

                        </style>
                    </div>


                    <style scope="scope">
                        #section_1117054090 {
                            padding-top: 30px;
                            padding-bottom: 30px;
                            background-color: rgb(235, 229, 241);
                        }
                    </style>
                </section>


            </div>

        </main><!-- #main -->

        <footer id="footer" class="footer-wrapper">

            <section class="section sec_footer_connect dark" id="section_990143115">
                <div class="bg section-bg fill bg-fill  ">

                </div><!-- .section-bg -->

                <div class="section-content relative">


                    <div class="gap-element" style="display:block; height:auto; padding-top:35px" class="clearfix">
                    </div>

                    <div class="row row-small" id="row-746967565">

                        <div class="col medium-4 small-12 large-4">
                            <div class="col-inner">


                                <div class="icon-box featured-box icon-box-left text-left">
                                    <div class="icon-box-img" style="width: 95px">
                                        <div class="icon">
                                            <div class="icon-inner">
                                                <?xml version="1.0" encoding="iso-8859-1"?>

                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.com/svgjs" width="512"
                                                    height="512" x="0" y="0" viewBox="0 0 58 58"
                                                    style="enable-background:new 0 0 512 512" xml:space="preserve"
                                                    class="">
                                                    <g>
                                                        <path
                                                            d="M40.39 39.46c.23-.43-.04-.82-.18-1.03l-.07-.1c-.05-.07-.08-.11-.09-.14a3.24 3.24 0 0 1-.06-.71c-.01-.3-.02-.62-.1-.94.17-.26.11-.54.07-.69l-.06-.27c-.12-.53-.23-1.07-.48-1.6-.03-.06-.03-.16-.03-.27-.01-.19-.01-.45-.16-.71l-.05-.09c-.22-.39-.36-.64-.26-.94a.514.514 0 0 0-.07-.43c-.1-.39-.4-.57-.6-.69-.05-.03-.09-.06-.14-.09-.3-.22-.49-.55-.7-.91-.13-.22-.27-.45-.45-.68.04-.2.03-.44-.2-.6-.09-.06-.15-.11-.27-.08-.09-.12-.22-.23-.41-.32a6.22 6.22 0 0 0-1.16-.88c-.55-.32-1.09-.69-1.4-1.19-.27-.44-.6-.72-.92-.99l-.24-.2c-.1-.08-.19-.15-.23-.21-.09-.13-.18-.25-.28-.37-.34-.42-.5-.66-.38-1.04.07-.21-.02-.39-.07-.49-.2-.43-.56-.65-.85-.82-.08-.05-.16-.09-.23-.14-.44-.3-.7-.59-.85-.94-.13-.3-.29-.65-.57-.97-.03-.04-.03-.08-.01-.1.28-.27.47-.66.5-1.06.03-.5.06-.93.33-1.28.06-.07.09-.15.11-.23.27.03.53-.12.76-.45.05-.07.09-.14.14-.21.13-.2.18-.27.25-.28.52-.05.81-.35.83-.89 0-.09 0-.18-.01-.28 0-.04-.01-.11-.01-.15.1-.11.19-.23.29-.35.13-.17.25-.32.38-.44.05-.05.16-.14.22-.29.7.05 1.32-.22 1.81-.8.12-.14.17-.28.17-.43.21-.09.28-.27.34-.35a.97.97 0 0 0 .28-.24c.14.04.35.07.58-.07.25-.14.31-.33.31-.46.01-.11-.02-.31-.3-.52-.22-.16-.54-.41-1.04-.29-.56.13-.56.13-1.07-.21-.2-.13-.4-.09-.42-.08-.1-.01-.17-.06-.18-.09-.08-.24-.23-.56-.7-.64-.31-.05-.4-.15-.39-.48.02-.41-.12-.61-.29-.72 0-.02.01-.04.01-.06.22-.03.4-.2.53-.49.12-.25.27-.71.02-1-.37-.43-1.23-.57-1.73-.3-.41-.45-.93-.34-1.26-.22-.06-.03-.13-.06-.19-.08-.19-.08-.43-.18-.49-.28-.15-.23-.33-.44-.5-.65l-.15-.18a.64.64 0 0 0-.48-.28c-.14 0-.34.11-.42.22-.16.21-.42.31-.72.42l-.3.12c-.67.29-.59.79-.5 1.01-.38-.02-.7.15-.93.29a.469.469 0 0 0-.19-.18c-.25-.15-.51-.04-.67.02-.28.11-.49.32-.62.61-.11-.1-.22-.2-.33-.31-.08-.08-.24-.23-.5-.2-.21.03-.33.17-.4.26-.14-.2-.3-.32-.52-.3-.15 0-.37.07-.55.37-.1.17-.2.33-.31.49l-.07.16c-.18-.28-.43-.44-.66-.58-.27-.17-.67-.38-1.09-.25s-.64.52-.77.8c-.01.05-.03.11-.05.17s-.06.15-.08.16c-.15 0-.27.1-.35.22s-.09.3-.03.44c.02.05.07.14.11.18l.26.29c.32.36.64.73.97 1.08.07.07.11.15.14.33.01.42.19.66.54.73.06.01.13.02.21.01-.04.15-.04.3.05.45-.07.08-.15.18-.2.32-.04.12-.03.26.04.37.05.09.13.16.23.19.01.03.02.07.04.12.17.47.51.77.81 1.03l.13.12c.25.23.72.38 1.01.17.02.01.06.06.1.1.08.08.32.33.67.29.34-.04.53-.34.59-.44.09-.14.26-.25.46-.29.22-.04.43-.01.59.1.17.12.33.24.49.36-.19.09-.34.28-.42.53-.04.12-.02.26.05.37s.18.19.31.21l.14.02c.12.02.24.04.35.05-.04.24.05.39.11.47.13.15.32.21.56.19.05-.01.11-.01.16-.01-.47.2-.48.51-.44.74-.02.03-.12.1-.18.14l-.18.12c-.18-.18-.42-.26-.71-.22-.22.03-.43.04-.65.06-.1.01-.39.02-.53.28-.15.26-.01.52.07.69 0 .01-.03.05-.15.12-.11.06-.29.15-.42.38a.443.443 0 0 0 .26.65c.59.18 1.12.49 1.74 1.02.49.42 1.05.68 1.71.8.01 0 .03 0 .04.01-.01.02-.02.05-.03.07-.21.56.57 1.4.58 1.41.1.1.37.4.75.35 0 .01.01.02.01.03.35 1.02.97 1.84 1.82 2.45.02.02.04.05.07.07.1.11.23.3.54.29.02.02.04.1.06.14.04.1.08.2.13.31.1.26.25.38.4.44.01.23.03.47.05.7.04.39.25.76.56.98.14.1.31.14.48.1.04-.01.07-.02.1-.03.18.22.41.39.72.5.02.02.06.09.09.14.11.19.25.34.41.44-.02.01-.03.02-.05.03-.52.3-.31.72-.28.77.03.06.07.13.1.2.13.29.3.64.68.82.17.08.29.22.45.38l.07.07c.03.06-.01.23-.01.25-.1.03-.4.12-.48.41-.07.24.05.43.15.55a.94.94 0 0 0-.05.43v.11c.01.26.01.48-.1.65-.1.16-.17.33-.25.5-.04.09-.08.19-.13.28-.26.5-.01.8.16.94.03.02.06.05.06.17 0 .13-.02.43.22.67.27.27.32.55.17.94-.28.73-.3 1.47-.05 2.19.08.22.03.48-.03.78 0 0-.01.01-.02.03-.49-.21-.91-.09-1.27.37-.06.08-.18.24-.23.25s-.09.01-.14.02c-.17.01-.5.04-.73.31h-.05c-.11 0-.21 0-.32-.01-.25-.02-.44.04-.58.19s-.17.35-.12.59h-.01c-.25-.08-.8-.27-1.2.24-.25.03-.39.15-.46.26-.17.26-.05.55 0 .64l.06.12c.01.01.01.03.02.04-.16.4-.03.69.16.9-.05-.01-.1-.01-.13-.01h-.2c-.37 0-.84 0-1.22.4-.03 0-.11-.03-.22-.07-.3-.16-.56-.14-.78.06-.33.29-.24.63-.16.85l-.03.03c-.27.26-.35.3-.5.26-.16-.04-.31-.02-.42-.01-.36.05-.66.45-.75.64-.13.27-.05.46 0 .55l.3.48c.16.26.35.33.49.35.09.01.21 0 .34-.07.07.09.18.2.33.26-.4.36-.44.89-.46 1.3l-.06 1.11-.02.48c0 .05-.01.1-.02.16-.03.19-.07.44.04.65-.01.02-.02.04-.02.06-.07.07-.17.2-.17.4 0 .13.11.32.2.4.14.12.31.18.5.18.1 0 .21-.02.31-.05.06-.02.13-.04.2-.05.28-.06.72-.16.93-.64.01 0 .01-.01.02-.01.29-.15.49-.39.58-.69.03-.09.09-.19.33-.3.47-.22.91-.43 1.38-.56.34-.09.51-.34.62-.49.02-.03.06-.08.06-.09.03-.02.08-.06.13-.11.28.1.59.03.84-.2.27-.24.37-.55.29-.83a.47.47 0 0 0 .12-.09c.18-.16.2-.34.2-.43a.43.43 0 0 0-.02-.12c.21-.22.34-.41.29-.66a.495.495 0 0 0-.04-.13c0-.01.01-.01.01-.02.04-.05.06-.11.08-.17.03 0 .06-.01.09-.02.04-.01.09-.03.13-.07l.04.04c.14.12.31.15.53.08.62-.19 1.26-.38 1.83-.81.2-.15.28-.18.26-.18.69.12.84-.42.89-.6.04-.13.08-.13.14-.13.43.03.85-.19 1.15-.61.06-.09.18-.14.37-.21.17-.07.4-.16.58-.33.17.02.31-.01.44-.09.28-.17.31-.49.34-.74.01-.11.02-.14.05-.14.28-.08.49-.28.56-.54a.75.75 0 0 0-.01-.42c.11-.1.17-.25.15-.39 0-.08 0-.22-.08-.37-.1-.16-.09-.35-.06-.65 0-.05.01-.1.01-.16a.485.485 0 0 0 .25-.54c.14 0 .3-.07.38-.19.14-.2.23-.47-.04-.84zm-.88-.3c-.55.23-.58.65-.55.89.01.1.01.22.06.36-.07.09-.11.22-.1.4 0 .09-.01.19-.02.28-.02.22-.04.47.02.73l-.06.06c-.11.14-.31.47-.02.85-.45.21-.5.63-.53.83-.17 0-.36.07-.47.24-.05.08-.15.13-.34.2-.24.1-.55.22-.77.53-.04.06-.19.25-.35.23-.52-.04-.9.24-1.05.73-.28.02-.59.17-.83.35-.37.28-.81.44-1.3.59-.02-.01-.03-.03-.05-.04 0 0 0-.01-.01-.02-.17-.42-.44-.48-.64-.45-.1.01-.27.06-.38.21a.462.462 0 0 0-.44-.07c-.19.07-.3.26-.28.46.01.14.06.27.1.39.01.02.01.04.02.06h-.02c-.13.01-.26.06-.33.17-.08.11-.11.23-.07.36.02.12.09.25.19.33-.03.02-.06.05-.09.08l-.07-.05a2.3 2.3 0 0 0-.56-.33c-.19-.07-.41 0-.52.17s-.1.39.03.55l.59.67c-.02-.02-.04-.04-.06-.05-.29-.32-.6-.19-.69-.14s-.16.14-.2.23c-.02.04-.03.1-.04.14-.03.19.04.33.14.44-.04.05-.08.11-.11.15-.04.05-.09.12-.11.13-.55.15-1.05.39-1.54.62-.42.2-.68.47-.79.84-.02.08-.06.13-.15.17-.11.06-.33.17-.41.41-.02.07-.03.09-.22.14a.61.61 0 0 0-.11-.43c0-.04.01-.08.02-.11.01-.09.03-.18.03-.26l.02-.48c.02-.36.03-.73.06-1.16.03-.45.06-.59.26-.69.33-.17.49-.53.37-.87-.12-.36-.39-.57-.72-.57v-.01c-.17-.31-.39-.39-.55-.41-.09-.01-.21 0-.33.05l-.05-.08c0-.01 0-.02-.01-.02.03 0 .06-.01.08-.01.65.17 1.07-.23 1.34-.48l.1-.13c.12-.11.24-.29.23-.53.25.06.58.05.92-.3.06-.07.33-.07.51-.07.02.03.04.07.06.12.05.1.17.35.47.39.13.02.25-.02.35-.07.04.03.09.05.14.07.04.01.07.04.12.06l.12.07c.13.07.29.07.42 0s.22-.2.23-.35c.02-.17-.02-.31-.06-.49.05-.09.08-.22.07-.31-.03-.23-.19-.35-.27-.42l-.17-.14c-.09-.08-.19-.16-.33-.27-.06-.04-.14-.11-.12-.13.11-.2.07-.4.02-.56.07-.04.13-.1.18-.19.02-.04.04-.06.04-.07.05 0 .15.04.21.06.13.04.27.09.44.1.04 0 .09.01.13.02l.11.02c.23.05.45-.1.51-.32.05-.2.06-.38.04-.55h.23c.13 0 .47.01.56-.3.02-.01.1-.02.15-.02l.25-.03c.37-.08.59-.37.77-.6.06-.08.09-.1.09-.1.01 0 .05 0 .16.06.19.1.42.09.64-.01a1 1 0 0 0 .55-.71c.07-.37.15-.78 0-1.23-.18-.53-.17-1.05.04-1.59.27-.71.14-1.37-.33-1.9.01-.32-.09-.59-.28-.8l.12-.27c.05-.13.1-.25.17-.36.26-.4.24-.82.24-1.15v-.17c.13-.14.16-.29.15-.4 0-.1-.03-.18-.07-.26.13-.13.23-.3.28-.5.1-.38.03-.76-.18-.99l-.08-.09c-.18-.2-.39-.43-.72-.58-.09-.04-.16-.19-.23-.34.07-.04.13-.08.2-.12.28-.17.43-.5.39-.84a.568.568 0 0 0-.23-.4c-.17-.12-.35-.09-.47-.06-.04-.02-.08-.06-.14-.16-.09-.16-.23-.4-.54-.52-.27-.1-.4-.24-.47-.52a.449.449 0 0 0-.79-.17c-.01-.04-.03-.08-.03-.13-.03-.26-.04-.53-.05-.8 0-.1-.01-.35-.21-.53a.663.663 0 0 0-.28-.14l-.03-.06c-.03-.04-.04-.09-.06-.14-.08-.21-.23-.63-.76-.71l-.02-.02c-.06-.06-.12-.14-.21-.2-.71-.51-1.2-1.17-1.5-2.03-.17-.5-.48-.71-.9-.63a2.22 2.22 0 0 1-.42-.61c.12-.31.19-.56.05-.81-.15-.27-.45-.33-.77-.39-.5-.09-.91-.28-1.29-.6-.32-.27-.76-.62-1.33-.9.17-.2.24-.44.2-.7.11-.01.22-.03.32-.06.14.18.33.29.54.31s.43-.06.61-.22c.04-.04.1-.07.15-.11.19-.13.56-.37.58-.85.43-.2.6-.58.45-1.02a.906.906 0 0 0-.82-.65.729.729 0 0 0-.11-.29.711.711 0 0 0-.26-.23c.03-.06.05-.12.08-.19.05-.12.18-.53-.35-.8-.22-.18-.45-.35-.69-.51a1.62 1.62 0 0 0-1.28-.24c-.39.08-.72.28-.98.61-.18-.17-.51-.41-.95-.18a.21.21 0 0 1-.11-.04l-.14-.13c-.25-.22-.47-.41-.57-.71-.02-.07-.06-.16-.11-.26.18-.29.15-.53.04-.73l.03-.06.06-.12c.06-.13.17-.37.04-.63a.552.552 0 0 0-.28-.26.487.487 0 0 0-.04-.11c-.1-.22-.39-.3-.62-.21-.01.01-.03.01-.05.02-.07-.16-.16-.3-.27-.43-.31-.34-.62-.68-.92-1.02.12-.15.18-.31.22-.42l.05-.12c.11-.26.19-.29.2-.29 0 0 .09-.02.39.17.2.12.31.2.38.33.13.25.37.41.65.42.29.02.59-.14.76-.4l.14-.22c.05-.07.1-.15.15-.23.17.18.34.29.56.27.2-.02.33-.12.44-.27.11.1.22.21.34.31l.27.25c.11.11.28.14.42.1.15-.04.27-.16.31-.31l.05-.19c.04-.13.07-.25.11-.36.01-.02.01-.04.02-.05.06.08.13.14.22.18.2.1.44.08.66-.05.07-.04.13-.08.19-.12.23-.15.33-.22.51-.18.24.04.52-.07.7-.29s.24-.5.15-.8c.08-.04.17-.07.25-.1.27-.1.56-.21.82-.42.14.16.28.33.4.51.21.33.57.48.9.61.11.04.21.09.31.14.12.06.33.04.45-.01.32-.14.34-.1.42.01.14.2.45.47 1.04.12.09-.05.35-.03.52.03-.01.04-.03.07-.04.1-.24.05-.56.24-.63.81-.03.13-.1.36.04.6.06.1.14.17.24.23-.03.75.39 1.25 1.13 1.38.12.4.51.68.98.71h.09c.41.27.62.38.93.38-.03.03-.07.07-.1.12-.24.02-.77.09-.89.74-.02.11.02.21.08.29-.23.13-.49.17-.78.12-.13-.02-.4-.07-.61.13a.58.58 0 0 0-.17.43c-.19.17-.33.36-.47.54-.09.12-.18.24-.28.34-.22.23-.2.54-.18.77 0 .06.01.12.01.17v.05h-.02c-.52.05-.76.44-.92.69-.03.05-.06.1-.13.2a.616.616 0 0 0-.48.03c-.2.1-.34.3-.38.54-.01.03-.01.07-.01.12-.38.54-.42 1.13-.47 1.74a.8.8 0 0 1-.22.43c-.36.35-.38.93-.05 1.32.2.24.33.51.43.75.22.52.59.94 1.17 1.33.09.06.19.12.28.17.22.13.37.22.48.4-.19.78.25 1.33.57 1.73.08.1.17.21.24.32.12.18.28.3.41.41l.22.19c.29.25.55.47.74.78.41.66 1.06 1.11 1.71 1.49.36.21.69.47 1 .76.08.08.17.13.25.17 0 .16.08.32.21.4.06.04.11.07.16.09.03.07.07.13.13.2.15.19.28.4.42.63.23.4.5.84.94 1.17.07.05.14.09.21.13.15.09.19.12.2.17.01.04.02.08.03.11-.11.6.16 1.08.39 1.47l.05.08c.04.06.04.15.04.29.01.17.01.39.12.61.2.44.3.91.41 1.41l.06.28s.01.02.01.05c-.11.14-.17.36-.11.56.08.26.09.54.1.85.01.28.01.58.08.88.05.22.16.37.24.48l.1.14c.02.02.04.05.05.08-.03.1-.05.12-.07.15z"
                                                            fill="#ffffff" data-original="#000000" class="">
                                                        </path>
                                                        <path
                                                            d="M29.66 13.58c.21-.15.31-.4.27-.66l-.19-1.12.81-.79a.66.66 0 0 0 .17-.69.672.672 0 0 0-.54-.46l-1.12-.16-.5-1.02a.698.698 0 0 0-.62-.38c-.26 0-.49.15-.6.38l-.5 1.02-1.12.16a.676.676 0 0 0-.38 1.15l.81.79-.19 1.12a.68.68 0 0 0 .67.79c.11 0 .21-.03.31-.08l1.01-.53 1.01.53c.22.12.49.1.7-.05zm-1.72-1.43c-.07 0-.14.02-.21.05l-.82.43.16-.91a.468.468 0 0 0-.13-.4l-.66-.65.92-.13c.14-.02.27-.11.34-.24l.41-.83.41.83c.06.13.19.22.34.24l.92.13-.66.65a.45.45 0 0 0-.13.4l.16.91-.82-.43a.682.682 0 0 0-.23-.05z"
                                                            fill="#ffffff" data-original="#000000" class="">
                                                        </path>
                                                    </g>
                                                </svg>



                                            </div>
                                        </div>
                                    </div>
                                    <div class="icon-box-text last-reset">


                                        <div class="footer_title">
                                            <h3>Chi nhánh <b>3 miền</b><br />trên<br /><b>toàn quốc</b> </h3>
                                        </div>

                                    </div>
                                </div><!-- .icon-box -->



                            </div>
                        </div>
                        <div class="col medium-4 small-12 large-4">
                            <div class="col-inner">


                                <div class="icon-box featured-box icon-box-left text-left">
                                    <div class="icon-box-img" style="width: 110px">
                                        <div class="icon">
                                            <div class="icon-inner">
                                                <?xml version="1.0" encoding="iso-8859-1"?>
                                                <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                    y="0px" viewBox="0 0 496 496"
                                                    style="enable-background:new 0 0 496 496;" xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path
                                                                    d="M428.84,177.016c-30.776-29.264-74.024-37.768-100.84-40.136V88h-20.672l31.296-40.688L291.312,0h-86.624l-47.312,47.312
				L188.672,88H168v48.896c-26.816,2.376-70.072,10.856-100.848,40.12C43.832,199.2,32,229.264,32,266.368
				c0,147.376,94.976,224.672,99.016,227.888L133.2,496h229.6l2.184-1.744C369.024,491.04,464,413.744,464,266.368
				C464,229.264,452.168,199.2,428.84,177.016z M287.136,88H256V56h55.752L287.136,88z M308.688,40h-41.376L288,19.312L308.688,40z
				 M268.688,16L248,36.688L227.312,16H268.688z M208,19.312L228.688,40h-41.376L208,19.312z M184.248,56H240v32h-31.136L184.248,56
				z M357.056,480H138.944c-12.552-11.072-78.768-74.56-89.36-184h396.84C435.824,405.44,369.608,468.928,357.056,480z M48.512,280
				c-0.2-4.52-0.512-8.968-0.512-13.632c0-32.52,10.136-58.664,30.128-77.704C119.704,149.056,190.904,152,191.6,152.08V152H280v-16
				h-91.584c-0.44,0-0.952,0-1.448,0H184v-32h128v32c-2.112-0.032-3.744-0.024-5.104,0H296v16h8.392v0.08
				c0.744-0.064,71.72-3.136,113.424,36.528C437.84,207.656,448,233.816,448,266.368c0,4.664-0.312,9.112-0.512,13.632H48.512z" />
                                                                <path
                                                                    d="M64.024,263.872l16,0.264c0.088-5.2,0.52-10.2,1.272-14.856l-15.8-2.576C64.616,252.128,64.128,257.896,64.024,263.872z" />
                                                                <path
                                                                    d="M89.008,200.392c-8.432,8.072-14.8,17.768-18.928,28.816l14.984,5.608c3.328-8.896,8.24-16.384,15.008-22.856
				c25.848-24.76,70.912-27.632,84.112-27.92l-0.36-16C165.04,168.448,118.2,172.432,89.008,200.392z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                </svg>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="icon-box-text last-reset">


                                        <div class="footer_title">
                                            <h3>Sản phẩm <b> thương hiệu</b><br /> <br /><b>an toàn</b> sức khỏe</h3>
                                        </div>

                                    </div>
                                </div><!-- .icon-box -->



                            </div>
                        </div>
                        <div class="col medium-4 small-12 large-4">
                            <div class="col-inner">


                                <div class="icon-box featured-box icon-box-left text-left">
                                    <div class="icon-box-img" style="width: 95px">
                                        <div class="icon">
                                            <div class="icon-inner">
                                                <?xml version="1.0" encoding="iso-8859-1"?>
                                                <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                    y="0px" viewBox="0 0 512 512"
                                                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M473.779,107.368l-24.066,3.246l-31.708-21.6l59.427-70.092L449.334,0l-79.355,56.295l-27.318-18.61
			c-12.696-8.548-29.979-5.173-38.525,7.522c-4.141,6.15-5.639,13.544-4.218,20.82s5.59,13.564,11.782,17.734l27.487,18.234
			l-22.324,94.752l28.1,18.919l42.652-81.543l31.117,20.642l6.044,23.514l29.406,19.8l12.356-42.475l36.752-28.368L473.779,107.368z
			 M449.558,18.403l5.389,3.628l-49.522,58.411l-22.098-15.054L449.558,18.403z M339.388,193.662l-5.389-3.628l18.64-79.114
			l22.293,14.789L339.388,193.662z M453.381,146.636l-7.942,27.304l-7.432-5.004l-6.058-23.571L320.112,71.175
			c-2.796-1.882-4.69-4.74-5.336-8.048c-0.645-3.307,0.035-6.668,1.918-9.463c3.885-5.77,11.74-7.304,17.477-3.443l111.818,76.172
			l24.112-3.252l7.329,4.934L453.381,146.636z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M27.642,331.401l-14.39,4.707c1.614,4.932,3.402,9.877,5.315,14.696l14.071-5.586
			C30.841,340.688,29.16,336.039,27.642,331.401z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M4.379,212.891c-0.88,5.097-1.615,10.292-2.183,15.44l15.048,1.661c0.535-4.844,1.226-9.73,2.054-14.525L4.379,212.891z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M36.733,125.693c-2.656,4.439-5.21,9.017-7.589,13.607l13.441,6.966c2.239-4.316,4.641-8.623,7.139-12.798L36.733,125.693
			z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M22.404,153.343c-2.091,4.724-4.065,9.576-5.865,14.424l14.193,5.272c1.694-4.56,3.549-9.123,5.516-13.566L22.404,153.343
			z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M11.562,182.55c-1.5,4.954-2.865,10.021-4.058,15.061l14.733,3.487c1.121-4.739,2.405-9.503,3.815-14.161L11.562,182.55z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M54.332,99.984c-3.178,4.087-6.271,8.322-9.191,12.587l12.493,8.552c2.746-4.013,5.656-7.998,8.648-11.844L54.332,99.984z
			" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M16.397,273.958l-15.101,1.075c0.367,5.164,0.898,10.383,1.579,15.511l15.008-1.99
			C17.243,283.728,16.743,278.818,16.397,273.958z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M16.079,244.616l-15.12-0.745c-0.209,4.229-0.315,8.527-0.315,12.773c0,0.94,0.005,1.878,0.015,2.815l15.139-0.164
			c-0.009-0.883-0.014-1.767-0.014-2.651C15.784,252.646,15.884,248.598,16.079,244.616z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M20.257,303.027l-14.858,2.907c0.994,5.086,2.16,10.202,3.462,15.207l14.652-3.812
			C22.289,312.623,21.193,307.81,20.257,303.027z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M257.573,1.294l-0.093,15.14c4.871,0.029,9.805,0.21,14.667,0.536l1.012-15.106C267.993,1.517,262.75,1.325,257.573,1.294
			z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M180.719,12.569c-4.959,1.528-9.933,3.23-14.785,5.06l5.341,14.166c4.563-1.72,9.24-3.321,13.902-4.757L180.719,12.569z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M241.99,1.666c-5.178,0.281-10.405,0.722-15.536,1.314l1.735,15.04c4.826-0.556,9.746-0.972,14.619-1.235L241.99,1.666z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M38.476,358.699l-13.701,6.44c2.205,4.69,4.584,9.374,7.072,13.92l13.28-7.268
			C42.788,367.515,40.55,363.111,38.476,358.699z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M211.026,5.237c-5.093,0.904-10.229,1.981-15.265,3.198l3.558,14.716c4.737-1.145,9.566-2.157,14.355-3.008L211.026,5.237
			z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M507.816,214.062l-14.931,2.508c0.806,4.799,1.476,9.691,1.988,14.541l15.056-1.592
			C509.384,224.364,508.673,219.163,507.816,214.062z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M98.213,55.858c-4.068,3.201-8.092,6.57-11.959,10.013l10.068,11.307c3.64-3.241,7.425-6.411,11.254-9.423L98.213,55.858z
			" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M500.77,183.677l-14.511,4.32c1.39,4.669,2.652,9.441,3.753,14.185l14.748-3.421
			C503.59,193.717,502.248,188.642,500.77,183.677z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M123.858,38.096c-4.427,2.682-8.832,5.539-13.095,8.491l8.62,12.446c4.01-2.779,8.154-5.465,12.319-7.989L123.858,38.096z
			" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M74.927,76.592c-3.648,3.669-7.233,7.499-10.653,11.383L75.637,97.98c3.22-3.656,6.592-7.26,10.026-10.714L74.927,76.592z
			" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M151.492,23.586c-4.728,2.123-9.452,4.422-14.042,6.832l7.039,13.404c4.317-2.266,8.76-4.428,13.206-6.424L151.492,23.586
			z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M421.729,430.534c-3.525,3.361-7.2,6.657-10.925,9.799l9.763,11.572c3.958-3.339,7.864-6.843,11.609-10.414
			L421.729,430.534z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M458.893,385.302c-2.61,4.108-5.382,8.189-8.237,12.13l12.26,8.883c3.035-4.189,5.98-8.527,8.755-12.892L458.893,385.302z
			" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M441.692,409.043c-3.089,3.76-6.336,7.476-9.653,11.046l11.092,10.304c3.524-3.794,6.976-7.744,10.259-11.74
			L441.692,409.043z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M348.383,478.456c-4.503,1.877-9.12,3.638-13.728,5.234l4.955,14.306c4.899-1.698,9.812-3.57,14.6-5.566L348.383,478.456z
			" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M374.735,465.513c-4.236,2.413-8.601,4.727-12.976,6.874l6.675,13.589c4.651-2.284,9.293-4.744,13.796-7.31
			L374.735,465.513z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M399.303,449.453c-3.915,2.914-7.964,5.742-12.038,8.405l8.284,12.672c4.33-2.831,8.635-5.836,12.794-8.932
			L399.303,449.453z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M511.098,245.074l-15.125,0.675c0.161,3.612,0.243,7.277,0.243,10.894c0,1.265-0.009,2.527-0.029,3.787l15.138,0.235
			c0.021-1.338,0.031-2.679,0.031-4.023C511.355,252.803,511.268,248.91,511.098,245.074z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M495.518,275.095c-0.368,4.859-0.891,9.766-1.554,14.587l14.998,2.063c0.704-5.123,1.261-10.339,1.652-15.504
			L495.518,275.095z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M484.002,332.484c-1.535,4.616-3.235,9.248-5.054,13.767l14.046,5.652c1.934-4.806,3.743-9.734,5.375-14.644
			L484.002,332.484z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M473.067,359.666c-2.086,4.387-4.337,8.772-6.692,13.031l13.249,7.326c2.504-4.529,4.899-9.192,7.117-13.858
			L473.067,359.666z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M491.522,304.145c-0.958,4.775-2.076,9.581-3.324,14.284l14.633,3.884c1.327-5.002,2.517-10.113,3.535-15.191
			L491.522,304.145z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M52.567,384.45l-12.811,8.066c2.757,4.379,5.688,8.736,8.712,12.945l12.297-8.831
			C57.919,392.669,55.162,388.571,52.567,384.45z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M136.375,465.005l-7.551,13.122c4.483,2.58,9.105,5.054,13.735,7.354l6.734-13.56
			C144.939,469.757,140.592,467.431,136.375,465.005z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M111.909,448.865l-9.091,12.107c4.137,3.107,8.424,6.126,12.742,8.975l8.337-12.638
			C119.834,454.628,115.801,451.788,111.909,448.865z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M89.57,429.863L79.079,440.78c3.729,3.583,7.619,7.102,11.564,10.456l9.811-11.531
			C96.741,436.547,93.08,433.235,89.57,429.863z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M69.689,408.287l-11.736,9.564c3.267,4.01,6.705,7.975,10.216,11.786l11.134-10.259
			C75.998,415.793,72.764,412.061,69.689,408.287z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M162.606,478.031l-5.892,13.946c4.761,2.012,9.647,3.9,14.523,5.616l5.024-14.282
			C171.677,481.697,167.082,479.921,162.606,478.031z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M218.883,494.01l-2.321,14.962c5.111,0.792,10.318,1.437,15.475,1.918l1.404-15.075
			C228.589,495.364,223.69,494.756,218.883,494.01z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M190.238,487.749l-4.135,14.564c4.98,1.414,10.069,2.692,15.128,3.797l3.233-14.79
			C199.706,490.281,194.92,489.08,190.238,487.749z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M262.766,496.768c-4.845,0.133-9.804,0.122-14.681-0.035l-0.49,15.132c2.789,0.09,5.616,0.136,8.406,0.136
			c2.391,0,4.808-0.033,7.184-0.099L262.766,496.768z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M291.98,494.184c-4.807,0.724-9.709,1.307-14.565,1.735l1.33,15.081c5.163-0.456,10.373-1.076,15.484-1.844
			L291.98,494.184z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M320.654,488.061c-4.686,1.306-9.477,2.485-14.242,3.502l3.162,14.806c5.067-1.082,10.163-2.335,15.146-3.724
			L320.654,488.061z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M405.225,157.233l-12.559,8.454c16.813,24.978,26.293,53.84,27.66,83.892H264.075v-77.717h24.728v-15.14h-24.728V93.321
			c9.162,0.419,18.271,1.587,27.168,3.507l3.195-14.799c-12.392-2.676-25.155-4.033-37.933-4.033
			c-98.785,0-179.153,80.367-179.153,179.153c0,37.769,11.758,72.839,31.793,101.762v0.683h0.474
			c30.321,43.342,79.308,72.7,135.201,76.316c4.17,0.929,8.408,1.401,12.694,1.401c4.565,0,9.073-0.547,13.506-1.6
			c92.023-7.413,164.638-84.664,164.638-178.562C435.657,221.362,425.134,186.811,405.225,157.233z M210.736,99.642
			c-9.105,8.675-17.471,19.961-24.811,33.673c-3.916,7.315-7.448,15.147-10.578,23.407h-48.422
			C147.896,129.726,177.1,109.432,210.736,99.642z M116.46,171.862h53.75c-7.165,23.681-11.292,50.149-12.002,77.717H92.673
			C93.968,221.216,102.497,194.707,116.46,171.862z M92.672,264.719h65.496c0.556,28.294,4.702,55.477,12.042,79.736h-52.489
			C103.013,321.159,94.006,293.924,92.672,264.719z M128.523,359.594h46.825c3.129,8.26,6.661,16.091,10.578,23.407
			c6.549,12.235,13.915,22.542,21.894,30.785C176.248,403.952,148.748,384.81,128.523,359.594z M248.934,420.981
			c-0.599-0.027-1.196-0.059-1.793-0.092c-17.76-4.391-34.466-19.993-47.87-45.033c-2.756-5.149-5.305-10.585-7.648-16.262h57.31
			V420.981z M248.934,344.454h-62.868c-7.768-23.899-12.17-51.167-12.757-79.736h75.625V344.454z M248.934,249.579h-75.582
			c0.748-27.835,5.129-54.381,12.713-77.717h62.869V249.579z M248.935,156.723h-57.311c2.343-5.677,4.891-11.114,7.648-16.262
			c13.854-25.881,31.235-41.676,49.663-45.434V156.723z M264.074,264.719h77.643c-0.585,28.569-4.989,55.836-12.756,79.736h-64.888
			V264.719z M268.529,420.719c-1.48,0.108-2.964,0.194-4.454,0.261v-61.387h59.328c-2.343,5.677-4.891,11.114-7.648,16.262
			C302.514,400.593,286.049,416.115,268.529,420.719z M308.115,412.835c7.63-8.081,14.688-18.065,20.988-29.834
			c3.916-7.315,7.448-15.147,10.578-23.407h44.806C364.889,384.027,338.458,402.75,308.115,412.835z M344.817,344.454
			c7.34-24.259,11.485-51.442,12.042-79.736h63.478c-1.333,29.205-10.341,56.44-25.049,79.736H344.817z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="icon-box-text last-reset">


                                        <div class="footer_title">
                                            <h3><b>Vận Chuyển </b>đến<b> mọi nơi</b><br /> trên <b>toàn quốc!</b>
                                            </h3>
                                        </div>

                                    </div>
                                </div><!-- .icon-box -->



                            </div>
                        </div>


                        <style scope="scope">

                        </style>
                    </div>

                </div><!-- .section-content -->


                <style scope="scope">
                    #section_990143115 {
                        padding-top: 0px;
                        padding-bottom: 0px;
                    }

                    #section_990143115 .section-bg.bg-loaded {
                        background-image: url({{ asset('theme/wp-content/uploads/2018/03/bg-footer.jpg);') }}

                    }
                </style>
            </section>


            <section class="section sec_footer_info dark" id="section_2138316025">
                <div class="bg section-bg fill bg-fill  bg-loaded">

                </div><!-- .section-bg -->

                <div class="section-content relative">


                    <div class="gap-element" style="display:block; height:auto; padding-top:30px" class="clearfix">
                    </div>


                    <div class="gap-element" style="display:block; height:auto; padding-top:20px" class="clearfix">
                    </div>

                    <div class="row row-small" id="row-1585787106">

                        <div class="col medium-3 small-12 large-3 text-center">
                            <a href="{{ url('/') }}" title="" rel="home">
                                <img width="356" height="75" src="{{ asset('images/logo.png') }}"
                                    class="header_logo header-logo" alt="strawberrynet" /><img width="356"
                                    height="75" src="{{ asset('images/logo.png') }}" class="header-logo-dark"
                                    alt="strawberrynet" /></a>
                        </div>
                        <div class="col medium-5 small-12 large-5">
                            <p style="font-size: 24px"><strong>A86 Hair Cosmetics</strong> nuôi dưỡng tóc từ bên trong
                                và khơi nguồn sức sống mới cho mái tóc của bạn với mỹ phẩm chăm sóc tóc chất lượng cao
                                của chúng tôi.
                            </p>
                        </div>
                        <div class="col medium-4 small-12 large-4">
                            <div class="col-inner">

                                <h3>LIÊN HỆ NGAY VỚI CHÚNG TÔI</h3>
                                <div class="row row-collapse" id="row-1223510301">

                                    <div class="col medium-6 small-6 large-6">
                                        <div class="col-inner">

                                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1081734503">
                                                <div class="img-inner dark">
                                                    <a href="https://www.facebook.com/giangkalispro?mibextid=ZbWKwL"
                                                        target="_blank">
                                                        <img style="border-radius: 10px;" width="1405"
                                                            height="533"
                                                            src="{{ asset('images/facebook_logo.png') }}"
                                                            class="attachment-original size-original" alt=""
                                                            srcset="{{ asset('images/facebook_logo.png') }} 1405w, {{ asset('images/facebook_logo.png') }} 300w, {{ asset('images/facebook_logo.png') }} 768w, {{ asset('images/facebook_logo.png') }} 1024w, {{ asset('images/facebook_logo.png') }} 24w, {{ asset('images/facebook_logo.png') }} 36w, {{ asset('images/facebook_logo.png') }} 48w, {{ asset('images/facebook_logo.png') }} 600w"
                                                            sizes="(max-width: 1405px) 100vw, 1405px" />
                                                    </a>

                                                </div>

                                                <style scope="scope">
                                                    #image_1081734503 {
                                                        width: 75%;
                                                    }
                                                </style>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="col medium-6 small-6 large-6">
                                        <div class="col-inner">

                                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1056284445">
                                                <div class="img-inner dark">
                                                    <a href="http://zalo.me/0397586221" target="_blank">
                                                        <img style="border-radius: 10px;" width="1405"
                                                            height="533"
                                                            src="{{ asset('images/zalo_logo.png') }}"
                                                            class="attachment-original size-original" alt=""
                                                            srcset="{{ asset('images/zalo_logo.png') }} 1405w, {{ asset('images/zalo_logo.png') }} 300w, {{ asset('images/zalo_logo.png') }} 768w, {{ asset('images/zalo_logo.png') }} 1024w, {{ asset('images/zalo_logo.png') }} 24w, {{ asset('images/zalo_logo.png') }} 36w, {{ asset('images/zalo_logo.png') }} 48w, {{ asset('images/zalo_logo.png') }} 600w"
                                                            sizes="(max-width: 1405px) 100vw, 1405px" />
                                                    </a>

                                                </div>

                                                <style scope="scope">
                                                    #image_1056284445 {
                                                        width: 75%;
                                                    }
                                                </style>
                                            </div>



                                        </div>
                                    </div>


                                    <style scope="scope">

                                    </style>
                                </div>

                            </div>
                        </div>
                        <div class="col small-12 large-12">
                            <div class="col-inner">

                                <div class="is-divider divider clearfix"
                                    style="margin-top:0em;margin-bottom:0em;max-width:100%;height:5px;background-color:rgb(238, 44, 114);">
                                </div><!-- .divider -->


                            </div>
                        </div>


                        <style scope="scope">

                        </style>
                    </div>

                </div><!-- .section-content -->


                <style scope="scope">
                    #section_2138316025 {
                        padding-top: 0px;
                        padding-bottom: 0px;
                        background-color: rgb(82, 36, 109);
                    }
                </style>
            </section>


            <!-- FOOTER 1 -->


            <!-- FOOTER 2 -->



            <div class="absolute-footer dark medium-text-center small-text-center">
                <div class="container clearfix">


                    <div class="footer-primary pull-left">
                        <div class="copyright-footer">
                            &copy; All rights reserved.
                            Thiết kế website <span>&nbsp;</span><strong>AIVY JSC</strong></a>
                        </div>
                    </div><!-- .left -->
                </div><!-- .container -->
            </div><!-- .absolute-footer -->
            <a href="#top"
                class="back-to-top button invert plain is-outline hide-for-medium icon circle fixed bottom z-1"
                id="top-link"><i class="icon-angle-up"></i></a>

        </footer><!-- .footer-wrapper -->

    </div><!-- #wrapper -->

    <!-- Mobile Sidebar -->
    <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
        <div class="sidebar-menu no-scrollbar ">
            <ul class="nav nav-sidebar  nav-vertical nav-uppercase">
                <li
                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-167">
                    <a href="{{ url('/') }}" class="menu-image-title-after"><span
                            class="menu-image-title">Trang chủ</span></a>
                </li>
                @foreach ($categories as $category)
                    <li
                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-167">
                        <a href="#{{ ktc_str_convert($category->name) }}" class="menu-image-title-after"><span
                                class="menu-image-title">{{ $category->name }}</span></a>
                    </li>
                @endforeach
                <li
                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-167">
                    <a href="#register-modal" class="menu-image-title-after"><span class="menu-image-title">Liên
                            hệ</span></a>
                </li>

            </ul>
        </div><!-- inner -->
    </div><!-- #mobile-menu -->
    <!-- FB Messenger -->
    {{-- <div id="fbMsg">
        <img data-remodal-target="fb-messenger"
            src="{{ asset('theme/wp-content/plugins/fb-messenger/images/fb-messenger.png') }}">
    </div> --}}

    <div class="remodal" data-remodal-id="fb-messenger">
        <div class="fb-page" data-tabs="messages" data-href="" data-width="310" data-height="330"
            data-href="" data-small-header="true" data-hide-cover="false" data-show-facepile="true"
            data-adapt-container-width="true">
            <div class="fb-xfbml-parse-ignore">
                <blockquote>Loading...</blockquote>
            </div>
        </div>
    </div>

    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- End FB Messenger -->
    <div id="login-form-popup" class="lightbox-content mfp-hide">



        <div class="account-container lightbox-inner">

            <div class="account-login-inner">

                <h3 class="uppercase">Đăng nhập</h3>

                <form class="woocommerce-form woocommerce-form-login login" method="post">

                    <img src="" alt="">
                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                        <label for="username">Tên tài khoản hoặc địa chỉ email <span
                                class="required">*</span></label>
                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text"
                            name="username" id="username" value="" />
                    </p>
                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                        <label for="password">Mật khẩu <span class="required">*</span></label>
                        <input class="woocommerce-Input woocommerce-Input--text input-text" type="password"
                            name="password" id="password" />
                    </p>


                    <p class="form-row">
                        <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce"
                            value="db5c6ba1ea" /><input type="hidden" name="_wp_http_referer"
                            value="/strawberrynet/" />
                        <input type="submit" class="woocommerce-Button button" name="login"
                            value="Đăng nhập" />
                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
                            <input class="woocommerce-form__input woocommerce-form__input-checkbox"
                                name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>Ghi
                                nhớ mật khẩu</span>
                        </label>
                    </p>
                    <p class="woocommerce-LostPassword lost_password">
                        <a href="{{ asset('theme/tai-khoan/lost-password/') }}">Quên mật khẩu?</a>
                    </p>


                </form>
            </div><!-- .login-inner -->


        </div><!-- .account-login-container -->

    </div>
    <script type='text/javascript' src="{{ asset('theme/wp-includes/js/jquery/jquery.js?ver=1.12.4') }}"></script>
    <script type='text/javascript' src="{{ asset('theme/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1') }}">
    </script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wpcf7 = {
            "apiSettings": {
                "root": "http:\/\/mauweb.monamedia.net\/strawberrynet\/wp-json\/contact-form-7\/v1",
                "namespace": "contact-form-7\/v1"
            },
            "recaptcha": {
                "messages": {
                    "empty": "H\u00e3y x\u00e1c nh\u1eadn r\u1eb1ng b\u1ea1n kh\u00f4ng ph\u1ea3i l\u00e0 robot."
                }
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src="{{ asset('theme/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.1') }}"></script>
    <script type='text/javascript' src="{{ asset('theme/wp-content/plugins/fb-messenger/js/index.js?ver=4.9.15') }}">
    </script>
    <script type='text/javascript'
        src="{{ asset('theme/wp-content/plugins/ot-flatsome-vertical-menu/assets/js/ot-vertical-menu.js?ver=1.1.0') }}">
    </script>
    {{-- <script type='text/javascript'
        src="{{ asset('theme/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.3.3') }}">
    </script> --}}
    <script type='text/javascript'
        src="{{ asset('theme/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70') }}">
    </script>
    <script type='text/javascript'
        src="{{ asset('theme/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4') }}"></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/strawberrynet\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "http:\/\/mauweb.monamedia.net\/strawberrynet\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src="{{ asset('theme/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.3.3') }}">
    </script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
            "ajax_url": "\/strawberrynet\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "http:\/\/mauweb.monamedia.net\/strawberrynet\/?wc-ajax=%%endpoint%%",
            "cart_hash_key": "wc_cart_hash_d9f4bf14179d980f4bcf41932f3a2e8b",
            "fragment_name": "wc_fragments_d9f4bf14179d980f4bcf41932f3a2e8b"
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src="{{ asset('theme/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.3.3') }}">
    </script>
    <script type='text/javascript'
        src="{{ asset('theme/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min.js?ver=1.2.0') }}">
    </script>

    <script type='text/javascript'
        src="{{ asset('theme/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.js?ver=2.2.1') }}">
    </script>
    <script type='text/javascript'
        src="{{ asset('theme/wp-content/themes/flatsome/inc/integrations/wc-yith-wishlist/wishlist.js?ver=3.3') }}">
    </script>
    <script type='text/javascript'
        src="{{ asset('theme/wp-content/themes/flatsome/inc/extensions/flatsome-live-search/flatsome-live-search.js?ver=3.4.3') }}">
    </script>
    <script type='text/javascript' src="{{ asset('theme/wp-includes/js/hoverIntent.min.js?ver=1.8.1') }}"></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var flatsomeVars = {
            "ajaxurl": "http:\/\/mauweb.monamedia.net\/strawberrynet\/wp-admin\/admin-ajax.php",
            "rtl": "",
            "sticky_height": "70"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src="{{ asset('theme/wp-content/themes/flatsome/assets/js/flatsome.js?ver=3.4.3') }}">
    </script>
    <script type='text/javascript'
        src="{{ asset('theme/wp-content/themes/flatsome/assets/js/woocommerce.js?ver=3.4.3') }}"></script>
    <script type='text/javascript' src="{{ asset('theme/wp-includes/js/wp-embed.min.js?ver=4.9.15') }}"></script>
    <script type='text/javascript'
        src="{{ asset('theme/wp-content/plugins/woocommerce-products-filter/js/icheck/icheck.min.js?ver=4.9.15') }}">
    </script>
    <script type='text/javascript'
        src="{{ asset('theme/wp-content/plugins/woocommerce-products-filter/js/front.js?ver=4.9.15') }}"></script>
    <script type='text/javascript'
        src="{{ asset('theme/wp-content/plugins/woocommerce-products-filter/js/html_types/radio.js?ver=4.9.15') }}">
    </script>
    <script type='text/javascript'
        src="{{ asset('theme/wp-content/plugins/woocommerce-products-filter/js/html_types/checkbox.js?ver=4.9.15') }}">
    </script>
    <script type='text/javascript'
        src="{{ asset('theme/wp-content/plugins/woocommerce-products-filter/js/html_types/select.js?ver=4.9.15') }}">
    </script>
    <script type='text/javascript'
        src="{{ asset('theme/wp-content/plugins/woocommerce-products-filter/js/html_types/mselect.js?ver=4.9.15') }}">
    </script>
    <script type='text/javascript'
        src="{{ asset('theme/wp-content/plugins/woocommerce-products-filter/js/malihu-custom-scrollbar/jquery.mousewheel.min.js?ver=4.9.15') }}">
    </script>
    <script type='text/javascript'
        src="{{ asset('theme/wp-content/plugins/woocommerce-products-filter/js/malihu-custom-scrollbar/jquery.mCustomScrollbar.min.js?ver=4.9.15') }}">
    </script>
    <script type='text/javascript'
        src="{{ asset('theme/wp-content/plugins/woocommerce-products-filter/js/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js?ver=4.9.15') }}">
    </script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var _zxcvbnSettings = {
            "src": "http:\/\/mauweb.monamedia.net\/strawberrynet\/wp-includes\/js\/zxcvbn.min.js"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src="{{ asset('theme/wp-includes/js/zxcvbn-async.min.js?ver=1.0') }}"></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var pwsL10n = {
            "unknown": "M\u1eadt kh\u1ea9u m\u1ea1nh kh\u00f4ng x\u00e1c \u0111\u1ecbnh",
            "short": "R\u1ea5t y\u1ebfu",
            "bad": "Y\u1ebfu",
            "good": "Trung b\u00ecnh",
            "strong": "M\u1ea1nh",
            "mismatch": "M\u1eadt kh\u1ea9u kh\u00f4ng kh\u1edbp"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src="{{ asset('theme/wp-admin/js/password-strength-meter.min.js?ver=4.9.15') }}">
    </script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_password_strength_meter_params = {
            "min_password_strength": "3",
            "i18n_password_error": "Vui l\u00f2ng nh\u1eadp m\u1eadt kh\u1ea9u kh\u00f3 h\u01a1n.",
            "i18n_password_hint": "G\u1ee3i \u00fd: M\u1eadt kh\u1ea9u ph\u1ea3i c\u00f3 \u00edt nh\u1ea5t 12 k\u00fd t\u1ef1. \u0110\u1ec3 n\u00e2ng cao \u0111\u1ed9 b\u1ea3o m\u1eadt, s\u1eed d\u1ee5ng ch\u1eef in hoa, in th\u01b0\u1eddng, ch\u1eef s\u1ed1 v\u00e0 c\u00e1c k\u00fd t\u1ef1 \u0111\u1eb7c bi\u1ec7t nh\u01b0 ! \" ? $ % ^ & )."
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src="{{ asset('theme/wp-content/plugins/woocommerce/assets/js/frontend/password-strength-meter.min.js?ver=3.3.3') }}">
    </script>
    <style type="text/css"></style>
    <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
    <script type="text/javascript">
        var essb_clicked_lovethis = false;
        var essb_love_you_message_thanks = "Thank you for loving this.";
        var essb_love_you_message_loved = "You already love this today.";
        var essb_lovethis = function(oInstance) {
            if (essb_clicked_lovethis) {
                alert(essb_love_you_message_loved);
                return;
            }
            var element = jQuery('.essb_' + oInstance);
            if (!element.length) {
                return;
            }
            var instance_post_id = jQuery(element).attr("data-essb-postid") || "";
            var cookie_set = essb_get_lovecookie("essb_love_" + instance_post_id);
            if (cookie_set) {
                alert(essb_love_you_message_loved);
                return;
            }
            if (typeof(essb_settings) != "undefined") {
                jQuery.post(essb_settings.ajax_url, {
                    'action': 'essb_love_action',
                    'post_id': instance_post_id,
                    'service': 'love',
                    'nonce': essb_settings.essb3_nonce
                }, function(data) {
                    if (data) {
                        alert(essb_love_you_message_thanks);
                    }
                }, 'json');
            }
            essb_tracking_only('', 'love', oInstance, true);
        };
        var essb_get_lovecookie = function(name) {
            var value = "; " + document.cookie;
            var parts = value.split("; " + name + "=");
            if (parts.length == 2) return parts.pop().split(";").shift();
        };
        var essb_window = function(oUrl, oService, oInstance) {
            var element = jQuery('.essb_' + oInstance);
            var instance_post_id = jQuery(element).attr("data-essb-postid") || "";
            var instance_position = jQuery(element).attr("data-essb-position") || "";
            var wnd;
            var w = 800;
            var h = 500;
            if (oService == "twitter") {
                w = 500;
                h = 300;
            }
            var left = (screen.width / 2) - (w / 2);
            var top = (screen.height / 2) - (h / 2);
            if (oService == "twitter") {
                wnd = window.open(oUrl, "essb_share_window", "height=300,width=500,resizable=1,scrollbars=yes,top=" +
                    top + ",left=" + left);
            } else {
                wnd = window.open(oUrl, "essb_share_window", "height=500,width=800,resizable=1,scrollbars=yes,top=" +
                    top + ",left=" + left);
            }
            if (typeof(essb_settings) != "undefined") {
                if (essb_settings.essb3_stats) {
                    if (typeof(essb_handle_stats) != "undefined") {
                        essb_handle_stats(oService, instance_post_id, oInstance);
                    }
                }
                if (essb_settings.essb3_ga) {
                    essb_ga_tracking(oService, oUrl, instance_position);
                }
            }
            essb_self_postcount(oService, instance_post_id);
            var pollTimer = window.setInterval(function() {
                if (wnd.closed !== false) {
                    window.clearInterval(pollTimer);
                    essb_smart_onclose_events(oService, instance_post_id);
                }
            }, 200);
        };
        var essb_self_postcount = function(oService, oCountID) {
            if (typeof(essb_settings) != "undefined") {
                oCountID = String(oCountID);
                jQuery.post(essb_settings.ajax_url, {
                    'action': 'essb_self_postcount',
                    'post_id': oCountID,
                    'service': oService,
                    'nonce': essb_settings.essb3_nonce
                }, function(data) {
                    if (data) {}
                }, 'json');
            }
        };
        var essb_smart_onclose_events = function(oService, oPostID) {
            if (typeof(essbasc_popup_show) == 'function') {
                essbasc_popup_show();
            }
            if (typeof essb_acs_code == 'function') {
                essb_acs_code(oService, oPostID);
            }
        };
        var essb_tracking_only = function(oUrl, oService, oInstance, oAfterShare) {
            var element = jQuery('.essb_' + oInstance);
            if (oUrl == "") {
                oUrl = document.URL;
            }
            var instance_post_id = jQuery(element).attr("data-essb-postid") || "";
            var instance_position = jQuery(element).attr("data-essb-position") || "";
            if (typeof(essb_settings) != "undefined") {
                if (essb_settings.essb3_stats) {
                    if (typeof(essb_handle_stats) != "undefined") {
                        essb_handle_stats(oService, instance_post_id, oInstance);
                    }
                }
                if (essb_settings.essb3_ga) {
                    essb_ga_tracking(oService, oUrl, instance_position);
                }
            }
            essb_self_postcount(oService, instance_post_id);
            if (oAfterShare) {
                essb_smart_onclose_events(oService, instance_post_id);
            }
        };
        var essb_pinterest_picker = function(oInstance) {
            essb_tracking_only('', 'pinterest', oInstance);
            var e = document.createElement('script');
            e.setAttribute('type', 'text/javascript');
            e.setAttribute('charset', 'UTF-8');
            e.setAttribute('src', '//assets.pinterest.com/js/pinmarklet.js?r=' + Math.random() * 99999999);
            document.body.appendChild(e);
        };
    </script>
    <style type="text/css">
        /***** START: hiding submit button of the price slider ******/
        .woof_price_search_container .price_slider_amount button.button {
            display: none;
        }

        .woof_price_search_container .price_slider_amount .price_label {
            text-align: left !important;
        }

        .woof .widget_price_filter .price_slider_amount .button {
            float: left;
        }

        /***** END: hiding submit button of the price slider ******/






        .woof_edit_view {
            display: none;
        }
    </style>
    <script>
        jQuery(document).ready(function() {
            jQuery(window).on('load', function() {
                jQuery.getScript(
                    "https://cdn.jsdelivr.net/npm/sweetalert2@10.13.0/dist/sweetalert2.all.min.js",
                    function() {

                        @if (Session::has('message'))
                            console.log('abc');
                            Swal.fire({
                                text: "{{ session('message') }}",
                                icon: "success",
                                // buttonsStyling: false,
                                confirmButtonText: "Đồng ý",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                }
                            })
                        @endif
                        @if (Session::has('error'))
                            Swal.fire({
                                text: "{{ session('error') }}",
                                icon: "error",
                                // buttonsStyling: false,
                                confirmButtonText: "Đồng ý",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                }
                            })
                        @endif
                    });
            })
        });
    </script>

    <script>
        function showDescription(id, name) {
            nameProduct = document.getElementById("name-product");;
            nameProduct.value = name;

            jQuery.ajax({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                },
                cache: false,
                type: 'POST',
                dataType: 'JSON',
                data: {},
                url: 'show/description/' + id,
                success: function(results) {

                    var images = results.images;
                    var product = results.product;


                    var url = '{{ asset('documents/website') }}' + '/' + product['image'];
                    imageSingle = '<img src="' + url + '">';
                    // var urlOrther = '{{ asset('documents/website') }}' + '/' + images[1]['image'];
                    // console.log(url);
                    let imagesHtml = "";
                    images.forEach(element => {
                        var urlOrther = '{{ asset('documents/website') }}' + '/' + element['image'];
                        imagesHtml += '<img style="padding: 0 20px" src="' + urlOrther + '">';
                    });

                    let imagesHtml1 = "";
                    images.forEach(element => {
                        var urlOrther = '{{ asset('documents/website') }}' + '/' + element['image'];
                        imagesHtml1 += '<img style="width:20% !important;" src="' + urlOrther + '">';
                    });

                    // jQuery('#slider-for').html(imagesHtml);
                    // jQuery('#slider-nav').html(imagesHtml);

                    if (images.length == 0) {
                        jQuery('#productModal-content').html('<div class="product-detail-show">' +
                            '<div class="product-detail-img">' +
                            '<div class="img-single" style="padding-bottom:20px;">' +
                            imageSingle +
                            '</div>' +

                            '</div>' +
                            '<div style="padding-left:20px;">' +
                            '<h1>' + product['name'] + '</h1>' +
                            '<p>' + product['content'] + '</p>' +
                            '</div>' +

                            '</div>' +
                            '<div style="display:flex; justify-content:space-around; padding-top:20px;">' +
                            '<a href="#" class="btn__close">' + 'Đóng' + '</a>' +
                            '<a href="#register-modal" class="btn__ordernow">' + 'Đặt ngay' + '</a>' +
                            '</div>');
                    } else {
                        jQuery('#productModal-content').html('<div class="product-detail-show">' +
                            '<div class="product-detail-img">' +
                            '<div class="slider-for" id="slider-for" style="padding-bottom:20px;">' +
                            imagesHtml1 +
                            '</div>' +
                            '<div class="slider-nav" id="slider-nav">' +
                            imagesHtml +
                            '</div>' +
                            '</div>' +
                            '<div style="padding-left:20px;">' +
                            '<h1>' + product['name'] + '</h1>' +
                            '<p>' + product['content'] + '</p>' +
                            '</div>' +

                            '</div>' +
                            '<div style="display:flex; justify-content:space-around; padding-top:30px;">' +
                            '<a href="#" class="btn__close">' + 'Đóng' + '</a>' +
                            '<a href="#register-modal" class="btn__ordernow">' + 'Đặt ngay' + '</a>' +
                            '</div>');
                    }

                    if (images.length <= 3) {
                        jQuery('#slider-for').slick({
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: false,
                            fade: true,
                            autoplay: false,
                            autoplaySpeed: false,
                            asNavFor: '#slider-nav'
                        });
                        jQuery('#slider-nav').slick({
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            asNavFor: '#slider-for',
                            dots: false,
                            centerMode: false,
                            focusOnSelect: true,
                            autoplay: false,
                        });
                    } else {
                        jQuery('#slider-for').slick({
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: false,
                            fade: true,
                            autoplay: true,
                            autoplaySpeed: 2000,
                            asNavFor: '#slider-nav'
                        });
                        jQuery('#slider-nav').slick({
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            asNavFor: '#slider-for',
                            dots: false,
                            centerMode: false,
                            focusOnSelect: true,
                            autoplay: true,
                            autoplaySpeed: 2000,
                        });
                    }


                }
            });
        }
    </script>

    <script>
        function orderNow(id, name) {
            nameProduct = document.getElementById("name-product");;
            nameProduct.value = name;

            location.href = '{{ url('/') }}' + '#register-modal';

        }
    </script>




    @stack('scripts')

</body>

</html>
