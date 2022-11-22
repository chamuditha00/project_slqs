<style>
/* ////////////Footer start////////////*/
:root {
    --color-primary: #feb900;
}

footer>section {
    background-color: black;
    color: white !important;
}


/* Social Media Icons */
.social-media-list {
    position: relative;
    font-size: 22px;
    text-align: center;
    width: 100%;
    margin: 0 auto;
    padding: 0;
}

.social-media-list li a {
    color: #fff;
}

.social-media-list li {
    position: relative;
    display: inline-block;
    height: 60px;
    width: 60px;
    margin: 10px 3px;
    line-height: 60px;
    border-radius: 50%;
    color: #fff;
    background-color: rgb(27, 27, 27);
    cursor: pointer;
    transition: all 0.2s ease-in-out;
}

.social-media-list li:after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 60px;
    height: 60px;
    line-height: 60px;
    border-radius: 50%;
    opacity: 0;
    box-shadow: 0 0 0 1px #fff;
    transition: all 0.2s ease-in-out;
}

.social-media-list li:hover {
    background-color: #fff;
}

.social-media-list li:hover:after {
    opacity: 1;
    transform: scale(1.12);
    transition-timing-function: cubic-bezier(0.37, 0.74, 0.15, 1.65);
}

/* icon colors socila media hoverin */
/* .social-media-list .twit:hover a {
        color: #1da1f2;
    } */

.social-media-list .fb:hover a {
    color: #4267b2;
}

.social-media-list .ln:hover a {
    color: #0a66c2;
}

.social-media-list .tw:hover a,
.social-media-list .ig:hover a {
    color: gray;
}

.social-media-list .tw:hover,
.social-media-list .ig:hover {
    background-color: rgba(255, 255, 255, 0.7);
}


#copywrite {
    background-color: black;
    color: white;
}

.social-icon-footer li>a {
    color: white;
}

.social-icon-footer li {
    list-style: none;
    display: inline-block;
}


#preloader {
    position: fixed;
    inset: 0;
    z-index: 999999;
    overflow: hidden;
    background: #fff;
    transition: all 0.6s ease-out;
}

/* #preloader:before {
    content: "";
    position: fixed;
    top: calc(50% - 30px);
    left: calc(50% - 30px);
    border: 6px solid #fff;
    border-color: var(--color-primary) transparent var(--color-primary) transparent;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    -webkit-animation: animate-preloader 1.5s linear infinite;
    animation: animate-preloader 1.5s linear infinite;
}

@-webkit-keyframes animate-preloader {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

@keyframes animate-preloader {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }

    .
} */


.admin {
    background: maroon;
    position: relative;
    padding: 10px;
    border-radius: 10px;
    transition: 0.5s;

}

.admin:hover {
    transform: scale(1.1);
    background: rgba(125, 0, 0, 0.8);
}

.admin a {
    text-decoration: none;
    color: lightgray;
}

.admin a:hover {
    color: white;

}

/* ////////////Footer end////////////*/
</style>


<!-- <div id="preloader"></div> -->

<!-- Footer -->

<footer class="text-center text-lg-start bg-white text-muted">
    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-3">
            <!-- Grid row  -->
            <div class="row pt-5" data-aos="fade-up" data-aos-duration="1800">
                <!-- transition styling when footer apearance aos -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" data-aos="zoom-in" data-aos-duration="1500">
                    <!-- Content -->
                    <!-- <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3 text-secondary"></i>Company name
                    </h6> -->
                    <p>
                        <i class="fas fa-home me-3 text-secondary"></i> Kuwait City, Kuwait
                    </p>
                    <!-- <p>
                        The Sri Lankan Professionals Association (SLPA) in the United Arab Emirates has been established
                        on 28 May 2019, under the patronage of the Consul General of Sri Lanka to Dubai and Northern
                        Emirates, Hon. Charitha Yattogoda.
                    </p> -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" data-aos="zoom-in" data-aos-duration="1500">
                    <!-- Links -->
                    <!-- <h6 class="text-uppercase fw-bold mb-4">Products</h6> -->
                    <p>
                        <i class="fas fa-envelope me-3 text-secondary"></i>
                        secretary@slqs-eng-kuwait.org
                    </p>
                    <!-- <p>
                        <a href="#!" class="text-reset">Angular</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">React</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Vue</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Laravel</a>
                    </p> -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" data-aos="zoom-in" data-aos-duration="1500">
                    <!-- Links -->
                    <!-- <h6 class="text-uppercase fw-bold mb-4">Useful links</h6> -->
                    <p>
                        <i class="fas fa-phone me-3 text-secondary"></i> +965 504 80958
                    </p>
                    <!-- <p>
                        <a href="#!" class="text-reset">Pricing</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Settings</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Orders</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Help</a>
                    </p> -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" data-aos="zoom-in"
                    data-aos-duration="1500">
                    <!-- Links -->
                    <!-- <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p>
                        <i class="fas fa-home me-3 text-secondary"></i> Kuwait City, Kuwait
                    </p>
                    <p>
                        <i class="fas fa-envelope me-3 text-secondary"></i>
                        secretary@slqs-eng-kuwait.org
                    </p>
                    <p>
                        <i class="fas fa-phone me-3 text-secondary"></i> +965 504 80958
                    </p> -->
                    <p>
                        <i class="fas fa-print me-3 text-secondary"></i> +965 504 80958
                    </p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Section:admin-->
    <section class="d-flex justify-content-center justify-content-center p-4 ">
        <!-- Right -->
        <div data-aos="zoom-in" data-aos-duration="1500">

            <div class="admin">
                <a href="#">admin</a>
            </div>


        </div>
    </section>
    <!-- Section: admin end-->



    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-center p-4 border-bottom">
        <!-- Right -->
        <div data-aos="zoom-in" data-aos-duration="1500">

            <ul class="social-media-list">


                <li class="tw"><a href="#" target="_blank" class="contact-icon ">
                        <i class="fa-brands fa-twitter"></i></a>
                </li>
                <li class="fb"><a href="https://www.facebook.com" target="_blank" class="contact-icon ">
                        <i class="fa-brands fa-square-facebook"></i></i></a>
                </li>
                <li class="ln"><a href="#" target="_blank" class="contact-icon ">
                        <i class="fa-brands fa-linkedin"></i></a>
                </li>
                <li class="ig"><a href="#" target="_blank" class="contact-icon ">
                        <i class="fa-brands fa-instagram"></i></a>
                </li>

            </ul>

            <!-- <ul class="social-icon-footer">
                <li>
                    <a href="#" target="_blank" class="sm-icon fb">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank" class="sm-icon ln">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank" class="sm-icon ytb">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank" class="sm-icon ig">
                        <i class="fa-brands fa-square-instagram"></i>
                    </a>
                </li>
            </ul> -->
        </div>
    </section>
    <!-- Section: Social media end-->



    <!-- Copyright section -->
    <div id="copywrite" class="text-center p-4">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">WebI Creation</a>
    </div>

    <!-- <div class="admin">
        <span>admin</span>
    </div> -->

    <!-- Copyright -->
</footer>
<!-- Footer end-->


<!-- ////// -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="jquery.flipster.min.js"></script>
<script>
$(".carousel").flipster({
    style: "carousel",
    spacing: -0.3,
});
</script>
<!-- //////// -->

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<!-- aos animation js scripting -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();
</script>

<script src="js/main.js"></script>
</body>

</html>