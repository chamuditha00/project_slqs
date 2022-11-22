<?php include 'header.php'; ?>


<style>
/* section-topic */
.cover {
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
.cover .content {
    background: rgba(0, 0, 0, 0.6);
    text-transform: uppercase;
    height: 100%;
    width: 100%;
    padding-top: 25vmin;
}

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
    color: #950101;
}

/* section end */


/* <!-- //////////////  main content start /////////////// --> */

#contact {
    width: 100%;
    height: 100%;
}

.main .section-header {
    text-align: center;
    margin: 0 auto;
    padding: 40px 0;
    font: 300 60px "Oswald", sans-serif;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 6px;
}

.main .contact-wrapper {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin: 0 auto;
    padding: 20px;
    position: relative;
    max-width: 1000px;
    background-color: rgba(0, 0, 0, 0.5);
    box-shadow: 5px 5px rgba(0, 0, 0, 0.4), 10px 10px rgba(0, 0, 0, 0.3),
        15px 15px rgba(0, 0, 0, 0.2), 20px 20px rgba(0, 0, 0, 0.1),
        25px 25px rgba(0, 0, 0, 0.05);
    margin-top: 4rem;
    margin-bottom: 4rem;
}

/* Left contact page */
.main .form-horizontal {
    /*float: left;*/
    max-width: 400px;
    font-family: "Lato";
    font-weight: 400;
}

#name,
#email,
#subject {
    margin-left: -14px;
}

.main .form-control,
textarea {
    width: 400px;
    background-color: rgba(0, 0, 0, 0.7);
    color: lightgray;
    letter-spacing: 1px;
}

.main .form-group,
.main .form-control {
    transition: 0.5s;
}


.main .form-group:hover,
.main .form-control:hover {
    transform: translate3d(-2px, -3px, 1px);
}


.main .send-button {
    color: lightgray;
    background-color: maroon;
    margin-top: 15px;
    height: 38px;
    width: 400px;
    overflow: hidden;
    transition: all 0.2s ease-in-out;
}

.main .send-button:hover {
    background-color: maroon;
}

.main .send-button:active {
    background-color: lightgray !important;
}

.main .alt-send-button {
    width: 400px;
    height: 34px;
    transition: all 0.2s ease-in-out;
}

.main .send-text {
    display: block;
    margin-top: 10px;
    font: 700 12px "Lato", sans-serif;
    letter-spacing: 2px;
}

.main .alt-send-button:hover {
    transform: translate3d(0px, -29px, 0px);
}

/* Begin Right Contact Page */
.main .direct-contact-container {
    max-width: 500px;
}

/* Location, Phone, Email Section */
.main .contact-list {
    width: 500px;
    list-style-type: none;
    margin-left: 0px;
    padding-right: 20px;
}

.main .list-item {
    line-height: 4;
    color: #aaa;
}

.main .contact-text {
    font: 300 18px "Lato", sans-serif;
    letter-spacing: 1.9px;
    color: black;
}

.main .place {
    margin-left: 32px;
}

.main .phone {
    margin-left: 26px;
}

.main .gmail {
    margin-left: 23px;
}

.main .contact-text {
    color: lightgray;
    font-weight: 500;
}

.main .contact-text a {
    color: lightgray;
    text-decoration: none;
    transition-duration: 0.2s;
}

.main .contact-text a:hover {
    color: #fff;
    text-decoration: none;
}

/* Social Media Icons */
.main .social-media-list {
    position: relative;
    font-size: 22px;
    text-align: center;
    width: 100%;
    margin: 0 auto;
    padding: 0;
}

.main .social-media-list li a {
    color: #fff;
}

.main .social-media-list li {
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

.main .social-media-list li:after {
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

.main .social-media-list li:hover {
    background-color: #fff;
}

.main .social-media-list li:hover:after {
    opacity: 1;
    transform: scale(1.12);
    transition-timing-function: cubic-bezier(0.37, 0.74, 0.15, 1.65);
}

/* icon colors socila media hoverin */
/* .social-media-list .twit:hover a {
        color: #1da1f2;
    } */

.main .social-media-list .fb:hover a {
    color: #4267b2;
}

.main .social-media-list .ln:hover a {
    color: #0a66c2;
}

/* .social-media-list .ig:hover a {
        color: #e1306c;
    } */

/* .copyright {
    font: 200 14px "Oswald", sans-serif;
    color: #555;
    letter-spacing: 1px;
    text-align: center;
} */

hr {
    border-color: rgba(255, 255, 255, 0.6);
}

/* Begin Media Queries*/
@media screen and (max-width: 1050px) {
    .main .contact-wrapper {
        margin: 2rem;
        display: flex;
        flex-direction: column;
    }

    .main .direct-contact-container,
    .main .form-horizontal {
        margin: 0 auto;
    }

    .main .direct-contact-container {
        margin-top: 60px;
        max-width: 450px;
    }

    .main .social-media-list li {
        height: 60px;
        width: 60px;
        line-height: 60px;
    }

    .main .social-media-list li:after {
        width: 60px;
        height: 60px;
        line-height: 60px;
    }
}

@media screen and (max-width: 569px) {

    .main .contact-wrapper {
        margin: 2rem;
    }


    .main .direct-contact-container,
    .main .form-wrapper {
        float: none;
        margin: 0 auto;
    }

    .main .form-control,
    textarea {
        margin: 0 auto;
    }



    .main .direct-contact-container {
        margin-top: 60px;
        max-width: 420px;
    }

    .main .social-media-list {
        left: 0;
    }

    .main .social-media-list li {
        height: 55px;
        width: 55px;
        line-height: 55px;
        font-size: 2rem;
    }

    .main .social-media-list li:after {
        width: 55px;
        height: 55px;
        line-height: 55px;
    }
}

@media screen and (max-width: 500px) {
    .main .alt-send-button {
        width: 100%;
    }


    .main .contact-list {
        width: 500px;
        margin-left: -45px;
    }

    .main .form-horizontal {
        /*float: left;*/
        max-width: 300px;
    }

    .main .form-control {
        width: 300px;
    }

    .main .send-button {
        width: 300px;
    }

    .main .direct-contact-container {
        margin-top: 60px;
        max-width: 320px !important;
    }

}
</style>

<!-- ///////////section topic /////////////// -->

<div class="section-3 containe-fluid p-0">
    <div class="cover">
        <div class="content text-center">
            <h1>contact US</h1>
            <h4>Home / <span>contact us</span>
                </h2>
        </div>
    </div>
</div>

<!-- //////////////  main content start /////////////// -->


<main class="main">
    <section id="contact">

        <div class="contact-wrapper" data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine"
            data-aos-duration="700">

            <!-- Left contact page -->

            <form id="contact-form" class="form-horizontal" role="form" action="sendmail.php" method="POST"
                enctype="multipart/form-data">

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="name" placeholder="NAME" name="name" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="subject" placeholder="SUBJECT" name="subject"
                            required>
                    </div>
                </div>

                <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required></textarea>

                <button class="btn btn-primary send-button" id="submit" type="submit">
                    <div class="alt-send-button">
                        <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
                    </div>

                </button>

            </form>

            <!-- right contact page -->

            <div class="direct-contact-container">

                <ul class="contact-list">
                    <li class="list-item"><i class="fa-solid fa-location-dot fa-2x"><span
                                class="contact-text place">Kuwait City, Kuwait</span></i></li>

                    <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a
                                    href="tel:1-212-555-5555" title="Give me a call">+965 504 80958</a></span></i></li>

                    <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a
                                    href="mailto:#"
                                    title="Send me an email">secretary@slqs-eng-kuwait.org</a></span></i>
                    </li>

                </ul>

                <hr>
                <ul class="social-media-list">

                    <li class="fb"><a href="#" target="_blank" class="contact-icon ">
                            <i class="fa-brands fa-square-facebook"></i></i></a>
                    </li>
                    <li class="ln"><a href="#" target="_blank" class="contact-icon ">
                            <i class="fa-brands fa-linkedin"></i></a>
                    </li>

                </ul>
                <hr>


            </div>

        </div>

    </section>

</main>


<!-- //////////////  main content end /////////////// -->

<?php include 'footer.php'; ?>