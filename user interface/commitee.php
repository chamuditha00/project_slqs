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



.year {
    color: gray;
    font-style: italic;
    margin-top: 10vh;
    background: linear-gradient(black, maroon);

    box-shadow: 5px 5px rgba(0, 0, 0, 0.5), 10px 10px rgba(0, 0, 0, 0.4),
        15px 15px rgba(0, 0, 0, 0.3), 20px 20px rgba(0, 0, 0, 0.2),
        25px 25px rgba(0, 0, 0, 0.05);
    text-align: center;
    font-size: 4rem;
    transition: 0.5s;
}

.year:hover {
    transform: translate3d(-3px, -5px, 1px);

    color: white;
}

/* style for one card display */
.our-team {
    padding: 30px 0 40px;
    margin-top: 60px;
    margin-bottom: 60px;
    background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(104, 5, 5, 0.8));
    text-align: center;
    overflow: hidden;
    position: relative;
    border-radius: 10px;
    box-shadow: 5px 3px 15px 5px rgba(0, 0, 30, 0.7);
    transition: 0.5s;
    height: 350px;

}

.our-team:hover {
    transform: translate3d(2px, 12px, 8px);
    background: linear-gradient(black, maroon);

}



/* profile photo  */
.our-team .picture {
    display: inline-block;
    height: 150px;
    width: 150px;
    margin-bottom: 50px;
    z-index: 1;
    position: relative;
}

/* car background around picture style hovering*/
.our-team .picture::before {
    content: "";
    width: 100%;
    height: 0;
    border-radius: 60%;
    background: linear-gradient(black, darkgray);
    position: absolute;
    bottom: 85%;
    right: 0;
    left: 0;
    opacity: 0.9;
    transform: scale(3);
    transition: all 0.3s linear 0s;
}

.our-team:hover .picture::before {
    height: 100%;
}

/* picture hovering style */
.our-team .picture img {
    width: 100%;
    height: auto;
    border-radius: 50%;
    transform: scale(1);
    transition: all 0.9s ease 0s;
}

.our-team:hover .picture img {
    box-shadow: 0 0 0 6px lightgray;
    transform: scale(1.2);
}

/* tema memeber name and title */
.our-team .name {
    color: white;
    text-transform: uppercase;
}

.our-team .title {
    display: block;
    font-size: 18px;
    font-weight: 800;
    color: white;
    text-transform: capitalize;
}
</style>


<div class="section-3 containe-fluid p-0">
    <div class="cover">
        <div class="content text-center">
            <h1>committee</h1>
            <h4>Home / <span>committee</span>
                </h2>
        </div>
    </div>
</div>


<!-- //////////////  main content start /////////////// -->

<div class="container">
    <h1 class="year">2022</h1>
</div>
<div class="container">
    <div class="row">

        <!-- /////// -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-easing="linear"
            data-aos-duration="500">
            <div class="our-team">
                <div class="picture">
                    <img class="img-fluid" src="./assert/img 1.jpg" />
                </div>
                <div class="team-content">
                    <h3 class="name">SURANGA <br> ALAHAKOON</h3>
                    <h4 class="title">PRESDIENT</h4>
                </div>

            </div>
        </div>

        <!-- ///////// -->


        <!-- /////// -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-easing="linear"
            data-aos-duration="500">
            <div class="our-team">
                <div class="picture">
                    <img class="img-fluid" src="./assert/img 1.jpg" />
                </div>
                <div class="team-content">
                    <h3 class="name">Hiran <br> shanuka</h3>
                    <h4 class="title">general secretary</h4>
                </div>

            </div>
        </div>

        <!-- ///////// -->

        <!-- /////// -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-easing="linear"
            data-aos-duration="500">
            <div class="our-team">
                <div class="picture">
                    <img class="img-fluid" src="./assert/img 1.jpg" />
                </div>
                <div class="team-content">
                    <h3 class="name">kavinda <br> wijesinghe</h3>
                    <h4 class="title">deputy president</h4>
                </div>

            </div>
        </div>

        <!-- ///////// -->

        <!-- /////// -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-easing="linear"
            data-aos-duration="500">
            <div class="our-team">
                <div class="picture">
                    <img class="img-fluid" src="./assert/img 1.jpg" />
                </div>
                <div class="team-content">
                    <h3 class="name">duminda <br> wijesiri</h3>
                    <h4 class="title">deputy secretary</h4>
                </div>

            </div>
        </div>

        <!-- ///////// -->

        <!-- /////// -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-easing="linear"
            data-aos-duration="500">
            <div class="our-team">
                <div class="picture">
                    <img class="img-fluid" src="./assert/img 1.jpg" />
                </div>
                <div class="team-content">
                    <h3 class="name">mohammed <br> akram</h3>
                    <h4 class="title">deputy treasurer</h4>
                </div>

            </div>
        </div>

        <!-- ///////// -->



        <!-- /////// -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-easing="linear"
            data-aos-duration="500">
            <div class="our-team">
                <div class="picture">
                    <img class="img-fluid" src="./assert/img 1.jpg" />
                </div>
                <div class="team-content">
                    <h3 class="name">p. prasanna <br></h3>
                    <h4 class="title">treasurer</h4>
                </div>

            </div>
        </div>

        <!-- ///////// -->



    </div>
</div>

<?php include 'footer.php'; ?>