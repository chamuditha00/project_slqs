<?php include 'header.php'; ?>

<style>
/* <!-- //////////////  main content start /////////////// --> */



body {
    box-sizing: border-box;
}


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



/* for all images */
main img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Layout Structure=========================================*/

main {
    margin-top: -40px;
}


.main {
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 100vh;
    width: 100%;
}

/* Container to hold all cards in one place */
main .card_area {
    align-items: center;
    display: flex;
    flex-wrap: nowrap;
    height: 100%;
    justify-content: space-evenly;
    padding: 1rem;
}

/* Card ============================================*/

main .card-front__text-view {
    font-size: 1.5rem;
    font-weight: 800;
    margin-top: 0.2rem;

    background: -webkit-linear-gradient(white, maroon);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Area to hold an individual card */
main .card_section {
    align-items: center;
    display: flex;
    height: 100%;
    justify-content: center;
    width: 100%;
}

/* A container to hold the flip card and the inside page */
main .card {
    background-color: rgba(0, 0, 0, 0.05);
    box-shadow: 1.5rem 2rem 8rem 0.5rem black;
    height: 15rem;
    position: relative;
    transition: all 1s ease;
    width: 15rem;
}

/* Flip card - covering both the front and inside front page */

/* An outer container to hold the flip card. This excludes the inside page */
main .flip-card {
    height: 15rem;
    perspective: 100rem;
    position: absolute;
    right: 0;
    transition: all 1s ease;
    visibility: hidden;
    width: 15rem;
    z-index: 20;
}

/* The outer container's visibility is set to hidden. This is to make everything within the container NOT set to hidden  */
/* This is done so content in the inside page can be selected */
main .flip-card>* {
    visibility: visible;
}

/* An inner container to hold the flip card. This excludes the inside page */
main .flip-card__container {
    height: 100%;
    position: absolute;
    right: 0;
    transform-origin: left;
    transform-style: preserve-3d;
    transition: all 1s ease;
    width: 100%;
}

main .card-front,
main .card-back {
    backface-visibility: hidden;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}

/* Styling for the front side of the flip card */

/* container for the front side */
main .card-front {
    background: linear-gradient(to bottom, gray, black);
    height: 15rem;
    width: 15rem;
}

/* Front side's top section */
main .card-front__tp {
    align-items: center;
    clip-path: polygon(0 0, 100% 0, 100% 90%, 57% 90%, 50% 100%, 43% 90%, 0 90%);
    display: flex;
    flex-direction: column;
    height: 12rem;
    justify-content: center;
    padding: 0.75rem;
    background: linear-gradient(to bottom, white, rgb(65, 63, 66)) !important;
}

/* Front card's bottom section */
main .card-front__bt {
    align-items: center;
    display: flex;
    justify-content: center;
}

/* Styling for the back side of the flip card */

main .card-back {
    background-color: white;
    transform: rotateY(180deg);
}

/* */
main .image_container {
    clip-path: polygon(0% 0%, 100% 0%, 90% 50%, 100% 100%, 0% 100%);
    height: auto;
    height: 100%;
    object-fit: cover;
    width: 100%;
}

/* Inside page */

main .inside-page {
    background-color: maroon;
    box-shadow: inset 20rem 10px 5rem -2.5rem red;
    height: 100%;
    padding: 1rem;
    position: absolute;
    right: 0;
    transition: all 1s ease;
    width: 15rem;
    z-index: 1;
}

main .inside-page__container {
    align-items: center;
    display: flex;
    flex-direction: column;
    height: 100%;
    text-align: center;
    width: 100%;
}

/* Back cover */

/* For inside page's body text */
main .inside-page__text {
    /* padding-bottom: 0.5rem; */
    width: 100%;

    font-size: 0.9rem;
    margin-top: 0.2rem;
    color: whitesmoke;

    /* background: -webkit-linear-gradient(whitesmoke, white);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent; */
}

main .mission {
    font-size: 0.8rem;
}

/* Functionality ====================================*/

/* This is to keep the card centered (within its container) when opened */
main .card:hover {
    box-shadow: 0rem 4.7rem 8.6rem -3.2rem maroon;
    width: 30rem;
}

/* When the card is hovered, the flip card container will rotate */
main .card:hover .flip-card__container {
    transform: rotateY(-180deg);
}

/* When the card is hovered, the shadow on the inside page will shrink to the left */
main .card:hover .inside-page {
    box-shadow: inset 1rem 0px 5rem -2.5rem rgba(0, 0, 0, 0.4);
}

/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {

    main .card-front,
    main .flip-card,
    main .inside-page,
    main .card {
        width: 13rem;
        height: 15rem;
    }

    main .card:hover {
        width: 26rem;
    }
}



@media (max-width: 1050px) {
    main .c_row {
        flex-direction: column;
        margin-bottom: 10px;
        margin-left: 20px;
        margin-right: 20px;
    }





    .main {
        height: 200vh;
    }

    @media only screen and (min-width: 800px) {
        main .c_row {
            flex-direction: column;
            margin-bottom: 10px;
        }
    }
}
</style>


<!-- ///////////section topic /////////////// -->

<div class="section-3 containe-fluid p-0">
    <div class="cover">
        <div class="content text-center">
            <h1>ABOUT US</h1>
            <h4>Home / <span>about us</span>
                </h2>
        </div>
    </div>
</div>

<!-- //////////////  main content start /////////////// -->
<main class="main">
    <section class="card_area c_row">
        <!-- Card: Brief -->
        <section class="card_section c_row" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
            data-aos-duration="1000">
            <div class="card">
                <div class="flip-card">
                    <div class="flip-card__container">
                        <div class="card-front">
                            <div class="card-front__tp">
                                <img src="./assert/brief.jpg" alt="" />
                            </div>

                            <div class="card-front__bt">
                                <p class="card-front__text-view">Brief</p>
                            </div>
                        </div>

                        <div class="card-back">
                            <div class="image_container">
                                <img src="./assert/img 2.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="inside-page">
                    <div class="inside-page__container">
                        <!-- <h3 class="inside-page__heading">For snow lovers</h3> -->
                        <p class="inside-page__text">
                            The Society of Sri Lankan Quantity Surveyors and Engineers
                            (SLQS & Eng.) is the one of the leading professional society
                            in Kuwait. The Society of SLQS & Eng. is affiliated with Sri
                            Lankan Embassy in Kuwait and it is a non-profit organization.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Card: Vision -->
        <section class="card_section c_row" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
            data-aos-duration="1000">
            <div class="card">
                <div class="flip-card">
                    <div class="flip-card__container">
                        <div class="card-front">
                            <div class="card-front__tp">
                                <img src="./assert/vision.jpg" alt="" />
                            </div>

                            <div class="card-front__bt">
                                <p class="card-front__text-view">Vision</p>
                            </div>
                        </div>

                        <div class="card-back">
                            <div class="image_container">
                                <img src="./assert/img 2.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="inside-page">
                    <div class="inside-page__container">
                        <!-- <h3 class="inside-page__heading">For snow lovers</h3> -->
                        <p class="inside-page__text">
                            To be Promoted the Sri Lankan Quantity Surveyors and Engineers
                            identity delivering higher standards of the Quantity Surveying
                            and Engineering practice in Kuwait.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Card: Mission -->
        <section class="card_section c_row" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
            data-aos-duration="1000">
            <div class="card">
                <div class="flip-card">
                    <div class="flip-card__container">
                        <div class="card-front">
                            <div class="card-front__tp">
                                <img src="./assert/mission.jpg" alt="" />
                            </div>

                            <div class="card-front__bt">
                                <p class="card-front__text-view">Mission</p>
                            </div>
                        </div>
                        <div class="card-back">
                            <div class="image_container">
                                <img src="./assert/img 2.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="inside-page">
                    <div class="inside-page__container">
                        <!-- <h3 class="inside-page__heading">Mission</h3> -->
                        <p class="inside-page__text mission">
                            To uphold the status and image of Sri Lankan Quantity
                            Surveyors & Engineers and providing a platform where Sri
                            Lankan Quantity Surveyors and Engineers gather for social,
                            business, professional and career development to make the Sri
                            Lankan Quantity Surveyors and Engineer voice in Kuwait.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </section>
</main>


<!-- //////////////  main content end /////////////// -->


<?php include 'footer.php'; ?>