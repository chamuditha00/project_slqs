<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet" />

    <!-- Fontawesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="fonts/icomoon/style.css" />

    <link rel="stylesheet" href="css/owl.carousel.min.css" />

    <link rel="stylesheet" href="/jquery.flipster.min.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <title>HOME</title>

    <style>
    body {
        font-family: url('https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap');
        background-image: url(./assert/bgGray.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        background-position: center center;
        max-height: 60vh;
        height: 200vh;
        position: relative;
    }

    body:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        -webkit-transition: 0.3s all ease;
        -o-transition: 0.3s all ease;
        transition: 0.3s all ease;
        opacity: 0;
        visibility: hidden;
        z-index: 1;
    }

    body .offcanvas-menu:before {
        opacity: 1;
        z-index: 1002;
        visibility: visible;
    }

    p {
        color: #b3b3b3;
        font-weight: 300;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6 {
        font-family: "Quicksand", -apple-system, BlinkMacSystemFont, "Segoe UI",
            Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
            "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
            "Noto Color Emoji";
    }

    a {
        -webkit-transition: 0.3s all ease;
        -o-transition: 0.3s all ease;
        transition: 0.3s all ease;
    }

    a,
    a:hover {
        text-decoration: none !important;
    }

    .site-navbar-wrap {
        position: absolute;
        z-index: 99;
        width: 100%;
        left: 0;
    }

    /* top nav bar 4n and icon line color */
    .site-navbar-wrap a {
        color: white;
    }

    .site-navbar-wrap .site-navbar-top {
        font-size: 0.9rem;
    }

    .site-navbar-wrap .site-navbar-top .icon-envelope,
    .site-navbar-wrap .site-navbar-top .icon-phone {
        color: white;
    }

    .site-navbar-wrap .site-navbar-top .envelope,
    .site-navbar-wrap .site-navbar-top .phone {
        color: lightgray;
        font-weight: 550;
    }

    .site-navbar-wrap .site-navbar-top .envelope:hover,
    .site-navbar-wrap .site-navbar-top .phone:hover {
        color: white;
        font-weight: 600;
    }

    .site-navbar-wrap .site-navbar-top .icon-facebook:hover {
        color: #4267b2;
    }

    .site-navbar-wrap .site-navbar-top .icon-linkedin:hover {
        color: #0a66c2;
    }

    .site-navbar {
        margin-bottom: 0px;
        width: 100%;
    }

    .site-navbar .site-logo {
        font-weight: 200;
        line-height: 0;
        top: -7px;
        position: relative;
    }

    /* logo display style */
    .site-navbar .site-logo a {
        font-weight: 200;
        color: white;
        font-size: 23px;
        font-weight: bold;
        text-transform: uppercase;
    }

    .site-navbar .site-navigation .site-menu {
        margin-bottom: 0;
    }

    .site-navbar .site-navigation .site-menu a {
        text-decoration: none !important;
        display: inline-block;
        font-weight: 500;
    }

    .site-navbar .site-navigation .site-menu>li {
        display: inline-block;
        padding: 10px 5px;
    }

    /* initial nav bar topic anchor display style   */
    .site-navbar .site-navigation .site-menu>li>a {
        padding: 20px 10px;
        color: lightgray;
        font-weight: 550;
        font-size: 18px;
        text-decoration: none !important;
    }

    .site-navbar .site-navigation .site-menu>li>a.active {
        color: maroon !important;
        font-weight: 550;
    }

    .site-navbar .site-navigation .site-menu>li>a:hover {
        color: rgba(255, 255, 255, 0.7);
        font-weight: 550;
    }

    .site-navbar .site-navigation .site-menu>li:last-child {
        padding-right: 0;
    }

    .site-navbar .site-navigation .site-menu>li:last-child>a {
        padding-right: 0;
    }

    .site-navbar .site-navigation .site-menu .has-children {
        position: relative;
    }

    .site-navbar .site-navigation .site-menu .has-children>a {
        position: relative;
        padding-right: 20px;
    }

    .site-navbar .site-navigation .site-menu .has-children>a:before {
        position: absolute;
        font-size: 16px;
        top: 50%;
        right: 0;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        font-family: "icomoon";
    }



    .site-navbar .site-navigation .site-menu .has-children .dropdown {
        visibility: hidden;
        opacity: 0;
        top: 100%;
        position: absolute;
        text-align: left;
        -webkit-box-shadow: 0 0px 4px 0px rgba(0, 0, 0, 0.25);
        box-shadow: 0 0px 4px 0px rgba(0, 0, 0, 0.25);
        padding: 0px 0;
        margin-top: 20px;
        margin-left: 0px;
        background: linear-gradient(gray, white);
        -webkit-transition: 0.2s 0s;
        -o-transition: 0.2s 0s;
        transition: 0.2s 0s;
        border-radius: 4px;
    }

    .site-navbar .site-navigation .site-menu .has-children .dropdown.arrow-top {
        position: absolute;
    }

    .site-navbar .site-navigation .site-menu .has-children .dropdown a {
        font-size: 14px;
        text-transform: none;
        letter-spacing: normal;
        -webkit-transition: 0s all;
        -o-transition: 0s all;
        transition: 0s all;
        color: #343a40;
    }

    .site-navbar .site-navigation .site-menu .has-children .dropdown a.active {
        color: white;
    }

    .site-navbar .site-navigation .site-menu .has-children .dropdown .active>a {
        color: #fff !important;
    }

    .site-navbar .site-navigation .site-menu .has-children .dropdown>li {
        list-style: none;
        padding: 0;
        margin: 0;
        min-width: 200px;
    }

    .site-navbar .site-navigation .site-menu .has-children .dropdown>li:first-child>a {
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
    }

    .site-navbar .site-navigation .site-menu .has-children .dropdown>li:last-child>a {
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;
    }

    .site-navbar .site-navigation .site-menu .has-children .dropdown>li>a {
        padding: 9px 20px;
        display: block;
    }

    .site-navbar .site-navigation .site-menu .has-children .dropdown>li>a:hover {
        background: #ebeef0;
        color: maroon;
    }

    .site-navbar .site-navigation .site-menu .has-children .dropdown>li.has-children>a:before {
        content: "\e315";
        right: 20px;
    }

    .site-navbar .site-navigation .site-menu .has-children .dropdown>li.has-children>.dropdown,
    .site-navbar .site-navigation .site-menu .has-children .dropdown>li.has-children>ul {
        left: 100%;
        top: 0;
    }

    .site-navbar .site-navigation .site-menu .has-children .dropdown>li.has-children:hover>a,
    .site-navbar .site-navigation .site-menu .has-children .dropdown>li.has-children:active>a,
    .site-navbar .site-navigation .site-menu .has-children .dropdown>li.has-children:focus>a {
        background: #ebeef0;
        color: maroon;
    }

    .site-navbar .site-navigation .site-menu .has-children:hover>a,
    .site-navbar .site-navigation .site-menu .has-children:focus>a,
    .site-navbar .site-navigation .site-menu .has-children:active>a {
        color: #fff;
    }

    .site-navbar .site-navigation .site-menu .has-children:hover,
    .site-navbar .site-navigation .site-menu .has-children:focus,
    .site-navbar .site-navigation .site-menu .has-children:active {
        cursor: pointer;
    }

    .site-navbar .site-navigation .site-menu .has-children:hover>.dropdown,
    .site-navbar .site-navigation .site-menu .has-children:focus>.dropdown,
    .site-navbar .site-navigation .site-menu .has-children:active>.dropdown {
        -webkit-transition-delay: 0s;
        -o-transition-delay: 0s;
        transition-delay: 0s;
        margin-top: 0px;
        visibility: visible;
        opacity: 1;
    }

    /* ///////// screen size mobile side bar styling start //////////// */
    .site-mobile-menu {
        width: 300px;
        position: fixed;
        right: 0;
        z-index: 2000;
        padding-top: 20px;
        background: url(./assert/bgMaroon.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        height: calc(100vh);
        -webkit-transform: translateX(110%);
        -ms-transform: translateX(110%);
        transform: translateX(110%);
        -webkit-box-shadow: -10px 0 20px -10px rgba(0, 0, 0, 0.1);
        box-shadow: -10px 0 20px -10px rgba(0, 0, 0, 0.1);
        -webkit-transition: 0.3s all ease-in-out;
        -o-transition: 0.3s all ease-in-out;
        transition: 0.3s all ease-in-out;
    }

    .offcanvas-menu .site-mobile-menu {
        -webkit-transform: translateX(0%);
        -ms-transform: translateX(0%);
        transform: translateX(0%);
    }

    .site-mobile-menu .site-mobile-menu-header {
        width: 100%;
        float: left;
        padding-left: 20px;
        padding-right: 20px;
    }

    .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close {
        float: right;
        margin-top: 8px;
    }

    .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close span {
        font-size: 30px;
        display: inline-block;
        padding-left: 10px;
        padding-right: 0px;
        line-height: 1;
        cursor: pointer;
        -webkit-transition: 0.3s all ease;
        -o-transition: 0.3s all ease;
        transition: 0.3s all ease;
        color: gray;
    }

    /* close button cross color */
    .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close span:hover {
        color: white;
    }

    .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo {
        float: left;
        margin-top: 10px;
        margin-left: 0px;
    }

    .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a {
        display: inline-block;
        text-transform: uppercase;
    }

    .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a img {
        max-width: 70px;
    }

    .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a:hover {
        text-decoration: none;
    }

    .site-mobile-menu .site-mobile-menu-body {
        overflow-y: scroll;
        -webkit-overflow-scrolling: touch;
        position: relative;
        padding: 20px;
        height: calc(100vh - 52px);
        padding-bottom: 150px;
    }

    .site-mobile-menu .site-nav-wrap {
        padding: 0;
        margin: 0;
        list-style: none;
        position: relative;
    }

    .site-mobile-menu .main-menu:5th-child() {}

    .site-mobile-menu .site-nav-wrap a {
        padding: 10px 20px;
        display: block;
        position: relative;
        color: lightgray;
    }

    /* hovering color change nav topic */
    .site-mobile-menu .site-nav-wrap a.active,
    .site-mobile-menu .site-nav-wrap a:hover {
        color: white;
        font-weight: 700;
    }

    .site-mobile-menu .site-nav-wrap li {
        position: relative;
        display: block;
    }

    /* active nav topix (home) initial color*/
    .site-mobile-menu .site-nav-wrap li.active>a {
        color: white;
    }

    .site-mobile-menu .site-nav-wrap .arrow-collapse {
        position: absolute;
        right: 0px;
        top: 10px;
        z-index: 20;
        width: 36px;
        height: 36px;
        text-align: center;
        cursor: pointer;
        border-radius: 50%;
        color: white;
    }

    /* dropdown icon bg color */
    .site-mobile-menu .site-nav-wrap .arrow-collapse:hover {
        background: lightgray;
        color: black;
    }

    .site-mobile-menu .site-nav-wrap .arrow-collapse:before {
        font-size: 12px;
        z-index: 20;
        font-family: "icomoon";
        content: "\f078";
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%) rotate(-180deg);
        -ms-transform: translate(-50%, -50%) rotate(-180deg);
        transform: translate(-50%, -50%) rotate(-180deg);
        -webkit-transition: 0.3s all ease;
        -o-transition: 0.3s all ease;
        transition: 0.3s all ease;
    }

    .site-mobile-menu .site-nav-wrap .arrow-collapse.collapsed:before {
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .site-mobile-menu .site-nav-wrap>li {
        display: block;
        position: relative;
        float: left;
        width: 100%;
    }

    .site-mobile-menu .site-nav-wrap>li>a {
        padding-left: 20px;
        font-size: 20px;
    }

    .site-mobile-menu .site-nav-wrap>li>ul {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .site-mobile-menu .site-nav-wrap>li>ul>li {
        display: block;
    }

    .site-mobile-menu .site-nav-wrap>li>ul>li>a {
        padding-left: 40px;
        font-size: 16px;
    }

    .site-mobile-menu .site-nav-wrap>li>ul>li>ul {
        padding: 0;
        margin: 0;
    }

    .site-mobile-menu .site-nav-wrap>li>ul>li>ul>li {
        display: block;
    }

    .site-mobile-menu .site-nav-wrap>li>ul>li>ul>li>a {
        font-size: 16px;
        padding-left: 60px;
    }

    /* ///////// screen size mobile side bar styling end //////////// */

    /* ///////// styling after scolling start //////////// */

    .sticky-wrapper {
        position: absolute;
        z-index: 100;
        width: 100%;
    }

    .sticky-wrapper+.site-blocks-cover {
        margin-top: 96px;
    }

    .sticky-wrapper .site-navbar {
        -webkit-transition: 0.3s all ease;
        -o-transition: 0.3s all ease;
        transition: 0.3s all ease;
    }

    /* before scrolling active nav (home) DISPLAY */
    .sticky-wrapper .site-navbar ul li.active a {
        color: white;
        font-weight: 600;
    }

    /* after scroll bg color */
    .sticky-wrapper.is-sticky .site-navbar {
        backdrop-filter: blur(4px);
        background: linear-gradient(black, rgba(104, 5, 5, 0.5));
        border-bottom: 1px solid rgba(255, 255, 255, 0.25);
    }

    /* after scroll nav bar child appearance space*/
    .sticky-wrapper.is-sticky .site-navbar .site-navigation .site-menu>li {
        display: inline-block;
        padding: 10px 5px;
    }

    /* give padding except last child in nav bar */
    .sticky-wrapper.is-sticky .site-navbar .site-navigation .site-menu>li:last-child {
        padding-right: 0;
    }

    .sticky-wrapper.is-sticky .site-navbar .site-navigation .site-menu>li:last-child>a {
        padding-right: 0;
    }

    .sticky-wrapper.is-sticky .site-navbar .site-navigation .site-menu>li.has-children>a {
        padding-right: 20px;
    }

    /*after scroll inital COLOR execept active (home) nav  */
    .sticky-wrapper.is-sticky .site-navbar .site-navigation .site-menu>li>a {
        padding: 10px 10px;
        color: silver;
        font-size: 17px;
    }

    /*after scroll change color hovering main nav topic */
    .sticky-wrapper.is-sticky .site-navbar .site-navigation .site-menu>li>a:hover {
        color: whitesmoke !important;
        font-weight: 600;
    }

    /* change color nav when click and active */
    .sticky-wrapper.is-sticky .site-navbar .site-navigation .site-menu>li>a.active {
        color: yellow !important;
    }

    /*after scroll change color when active nav (home) */
    .sticky-wrapper.is-sticky .site-navbar .site-navigation .site-menu>li.active a {
        color: white;
        font-weight: 600;
    }

    /* section-1 */
    .section-1 .cover {
        margin: 0;
        width: 100%;
        height: 50vh;
        background: url(./assert/img\ 4.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        position: relative;
        display: block;
    }

    /* top image blur  */
    .section-1 .cover .content {
        background: rgba(0, 0, 0, 0.6);
        text-transform: uppercase;
        height: 100%;
        width: 100%;
        padding-top: 25vmin;
    }

    /* section-2 */
    .section-2 .cover {
        margin: 0;
        width: 100%;
        height: 50vh;
        background: url(./assert/img\ 6.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        position: relative;
        display: block;
    }

    /* top image blur  */
    .section-2 .cover .content {
        background: rgba(0, 0, 0, 0.4);
        text-transform: uppercase;
        height: 100%;
        width: 100%;
        padding-top: 25vmin;
    }

    /* for  sections */

    .cover .content>h1 {
        font-family: var(--Anton);
        font-size: 6vmin;
        color: whitesmoke;
    }

    .cover .content>h4 {
        font-family: var(--Anton);
        color: white;
        text-transform: capitalize;
    }

    .cover .content h4>span {
        letter-spacing: 2px;
        color: #950101;
        font-weight: 550;
        text-shadow: 3px 1px 3px white;
    }

    /* section end */

    /* content entering  */

    /* content ending */
    </style>
</head>

<body>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <!-- .site-mobile-menu -->

    <div class="site-navbar-wrap">
        <div class="site-navbar-top">
            <div class="container py-3">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="d-flex mr-auto">
                            <a href="#" class="d-flex align-items-center mr-4">
                                <span class="icon-envelope mr-2"></span>
                                <span class="envelope d-none d-md-inline-block">secretary@slqs-eng-kuwait.org</span>
                            </a>
                            <a href="#" class="d-flex align-items-center mr-auto">
                                <span class="icon-phone mr-2"></span>
                                <span class="phone d-none d-md-inline-block">+965 504 80958</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="mr-auto">
                            <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                            <a href="#" class="p-3 pl-0"><span class="icon-facebook"></span></a>
                            <a href="#" class="p-3 pl-0"><span class="icon-linkedin"></span></a>
                            <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-navbar site-navbar-target js-sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-2">
                        <h1 class="my-0 site-logo ,."><a href="index.html">SLQS</a></h1>
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
                                    <a href="#" class="site-menu-toggle js-menu-toggle text-white"><span
                                            class="icon-menu h3"></span></a>
                                </div>

                                <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                    <li class="active">
                                        <a href="./index.php" class="nav-link">Home</a>
                                    </li>

                                    <li class=" has-children">
                                        <a href="./aboutus.php" class="nav-link">About us</a>

                                    </li>

                                    <li class="has-children">
                                        <a href="#" class="nav-link">Members</a>
                                        <ul class="dropdown arrow-top">
                                            <li>
                                                <a href="./commitee.php" class="nav-link">Commitee</a>
                                            </li>
                                            <li>
                                                <a href="./indexpage.php" class="nav-link">Index</a>
                                            </li>
                                            <li class="has-children">
                                                <a href="./login.php">Training & Events</a>
                                            </li>
                                            <li>
                                                <a href="./jobs.php" class="nav-link">Jobs in Kuwait</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <a href="#" class="nav-link">Blog & Media</a>
                                        <ul class="dropdown arrow-top">
                                            <li>
                                                <a href="./article.php" class="nav-link">Articles</a>
                                            </li>
                                            <li>
                                                <a href="./csr.php" class="nav-link">CSR</a>
                                            </li>
                                            <li>
                                                <a href="./galleryalbum.php" class="nav-link">Gallery</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <a href="./contact.php" class="nav-link">Contact us</a>

                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>