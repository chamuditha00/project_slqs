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

/* Importing fonts from Google */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");



/* profileS */
main .container {
    margin-top: 100px;
}

main .container .row .col-lg-4 {
    display: flex;
    justify-content: center;
    margin-bottom: 3rem;
}

main .card {
    position: relative;
    padding: 0;
    margin: 0 !important;
    border-radius: 150px;
    overflow: hidden;
    width: 280px;
    height: 340px;
    cursor: pointer;
    border: none;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.7);
}

main .card:hover {
    transform: scale(1.1);
    transition-duration: 0.5s;
}

main .card .card-image {
    width: 100%;
    max-height: 350px;
}

main .card .card-image img {
    width: 100%;
    height: 350px;
    object-fit: cover;
}

main .card .card-content {
    position: absolute;
    bottom: -250px;
    color: #fff;
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(128, 10, 10, 0.6));
    backdrop-filter: blur(15px);
    min-height: 130px;
    width: 100%;
    transition: bottom 0.4s ease-in;
    box-shadow: 0 -10px 10px rgba(128, 10, 10, 0.1);
    border-top: 1px solid rgba(234, 234, 210, 0.6);
}

main .card:hover .card-content {
    bottom: 0px;
}

main .card:hover .card-content h4,
main .card:hover .card-content h5,
main .card:hover .card-content h6 {
    transform: translateY(10px);
    opacity: 1;
}

main .card .card-content h4,
main .card .card-content h5 {
    font-size: 1.1rem;
    text-transform: uppercase;
    letter-spacing: 3px;
    text-align: center;
    transition: 0.8s;
    font-weight: 500;
    opacity: 0;
    transform: translateY(-50px);
    transition-delay: 0.3s;
}

main .card .card-content h6 {
    font-size: 0.7rem;
    text-transform: capitalize;
    letter-spacing: 3px;
    text-align: center;
    transition: 0.8s;
    font-weight: 500;
    opacity: 0;
    transform: translateY(-40px);
    transition-delay: 0.2s;
}

main .card .card-content h5 {
    transition: 0.5s;
    font-weight: 200;
    font-size: 0.8rem;
    letter-spacing: 2px;
}

main .card .card-content .social-icons {
    list-style: none;
    padding: 0;
}

@media (max-width: 991.5px) {
    main .container {
        margin-top: 20px;
    }

    main .container .row .col-lg-4 {
        margin: 20px 0px;
    }
}
</style>
<div class="section-3 containe-fluid p-0">
    <div class="cover">
        <div class="content text-center">
            <h1>index</h1>
            <h4>Home / <span>index</span>
                </h2>
        </div>
    </div>
</div>


<!-- //////////////  main content start /////////////// -->

<main>
    <div class="container">
        <div class="row">
            <!--  -->

            <div class="col-lg-4" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="assert/default-profile.jpg" />
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">s.d alahakoon</h4>
                        <!-- <h6>webi creation sri lanka</h6>
                        <h5>Creative Desinger</h5> -->
                    </div>
                </div>
            </div>

            <!--  -->


            <!--  -->

            <div class="col-lg-4" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="assert/default-profile.jpg" />
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">b. g. u. k. sampath</h4>
                        <!-- <h6>webi creation sri lanka</h6>
                        <h5>Creative Desinger</h5> -->
                    </div>
                </div>
            </div>

            <!--  -->


            <!--  -->

            <div class="col-lg-4" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="assert/default-profile.jpg" />
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">m. s. t. chathuranga</h4>
                        <!-- <h6>webi creation sri lanka</h6>
                        <h5>Creative Desinger</h5> -->
                    </div>
                </div>
            </div>

            <!--  -->


            <!--  -->

            <div class="col-lg-4" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="assert/default-profile.jpg" />
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">d. a. m. s. m. deegala</h4>
                        <!-- <h6>webi creation sri lanka</h6>
                        <h5>Creative Desinger</h5> -->
                    </div>
                </div>
            </div>

            <!--  -->


            <!--  -->

            <div class="col-lg-4" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="assert/default-profile.jpg" />
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">r. a. d. wijesiri</h4>
                        <!-- <h6>webi creation sri lanka</h6>
                        <h5>Creative Desinger</h5> -->
                    </div>
                </div>
            </div>

            <!--  -->



            <!--  -->

            <div class="col-lg-4" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="assert/default-profile.jpg" />
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">k. p. wijesinghe</h4>
                        <!-- <h6>webi creation sri lanka</h6>
                        <h5>Creative Desinger</h5> -->
                    </div>
                </div>
            </div>

            <!--  -->



            <!--  -->

            <div class="col-lg-4" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="assert/default-profile.jpg" />
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">r. prasanna</h4>
                        <!-- <h6>webi creation sri lanka</h6>
                        <h5>Creative Desinger</h5> -->
                    </div>
                </div>
            </div>

            <!--  -->



            <!--  -->

            <div class="col-lg-4" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="assert/default-profile.jpg" />
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">k. m. p. k. wijayabandara</h4>
                        <!-- <h6>webi creation sri lanka</h6>
                        <h5>Creative Desinger</h5> -->
                    </div>
                </div>
            </div>

            <!--  -->


            <!--  -->

            <div class="col-lg-4" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="assert/default-profile.jpg" />
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">g. r. a. s. jayarathne</h4>
                        <!-- <h6>webi creation sri lanka</h6>
                        <h5>Creative Desinger</h5> -->
                    </div>
                </div>
            </div>

            <!--  -->


            <!--  -->

            <div class="col-lg-4" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="assert/default-profile.jpg" />
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">a. u. naufel</h4>
                        <!-- <h6>webi creation sri lanka</h6>
                        <h5>Creative Desinger</h5> -->
                    </div>
                </div>
            </div>

            <!--  -->


            <!--  -->

            <div class="col-lg-4" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="assert/default-profile.jpg" />
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">a. r. m. akram</h4>
                        <!-- <h6>webi creation sri lanka</h6>
                        <h5>Creative Desinger</h5> -->
                    </div>
                </div>
            </div>

            <!--  -->

            <!--  -->

            <div class="col-lg-4" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="assert/default-profile.jpg" />
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">a. r. m. azzam</h4>
                        <!-- <h6>webi creation sri lanka</h6>
                        <h5>Creative Desinger</h5> -->
                    </div>
                </div>
            </div>

            <!--  -->

            <!--  -->

            <div class="col-lg-4" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="assert/default-profile.jpg" />
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">s. h. m. fawaz</h4>
                        <!-- <h6>webi creation sri lanka</h6>
                        <h5>Creative Desinger</h5> -->
                    </div>
                </div>
            </div>

            <!--  -->

            <!--  -->

            <div class="col-lg-4" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="assert/default-profile.jpg" />
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">g. sham</h4>
                        <!-- <h6>webi creation sri lanka</h6>
                        <h5>Creative Desinger</h5> -->
                    </div>
                </div>
            </div>

            <!--  -->

            <!--  -->

            <div class="col-lg-4" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="assert/default-profile.jpg" />
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">s. krishnaphirathap</h4>
                        <!-- <h6>webi creation sri lanka</h6>
                        <h5>Creative Desinger</h5> -->
                    </div>
                </div>
            </div>

            <!--  -->

            <!--  -->

            <div class="col-lg-4" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="assert/default-profile.jpg" />
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">a. h. mohamed asif</h4>
                        <!-- <h6>webi creation sri lanka</h6>
                        <h5>Creative Desinger</h5> -->
                    </div>
                </div>
            </div>

            <!--  -->

            <!--  -->

            <div class="col-lg-4" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="assert/default-profile.jpg" />
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">d. m. wishmin chamanga</h4>
                        <!-- <h6>webi creation sri lanka</h6>
                        <h5>Creative Desinger</h5> -->
                    </div>
                </div>
            </div>

            <!--  -->


            <!--  -->

            <div class="col-lg-4" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="assert/default-profile.jpg" />
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">m. c. fernando</h4>
                        <!-- <h6>webi creation sri lanka</h6>
                        <h5>Creative Desinger</h5> -->
                    </div>
                </div>
            </div>

            <!--  -->

            <!--  -->

            <div class="col-lg-4" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="assert/default-profile.jpg" />
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">wasanta ragalkanda</h4>
                        <!-- <h6>webi creation sri lanka</h6>
                        <h5>Creative Desinger</h5> -->
                    </div>
                </div>
            </div>

            <!--  -->




        </div>
    </div>

</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- //////////////  main content end /////////////// -->

<?php include 'footer.php'; ?>