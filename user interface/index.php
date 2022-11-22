<?php include 'header.php'; ?>

<style>
/* ////////////main ection start////////////*/

@import url("https://fonts.googleapis.com/css?family=Heebo:400,700|Open+Sans:400,700");

#carouselExampleIndicators {
    margin: 7%;
    box-shadow: 5px 5px 10px 5px rgba(0, 0, 30, 0.7);
    transition: transform 2s;
}

/* zoom out the skide container */
#carouselExampleIndicators:hover {
    transform: scale(1.1);
}

/* styling the main interface sliding user views */
.carousel-item {
    height: 70vh;
    background: linear-gradient(#362222, #950101);
    color: white;
    position: relative;
}

.carousel-inner img {
    width: 100%;
    height: 50vh;
    object-fit: cover;
}

/* prev and next button view styling */
.carousel a {
    width: 10%;
}

/* prev and next button hovering styling */
.carousel a:hover {
    background-color: rgba(0, 0, 0, 0.6);
    width: 10%;
}

/* ////////////main section end////////////*/
</style>

<!-- ///////////section 1 /////////////// -->

<div class="section-1 containe-fluid p-0">
    <div class="cover">
        <div class="content text-center">
            <h1>home</h1>
        </div>
    </div>
</div>

<!-- /* ////////////main ection start////////////*/ -->

<!-- ///////////section 2 /////////////// -->

<div class="section-2 containe-fluid pt-5">
    <div class="cover">
        <div class="content text-center">
            <h1>WELCOME TO SLQS</h1>
            <p>
                Each day on this island promises new experiences, discoveries, and
                life-long memories. With so much to do,let us help you with these
                itineraries created just for you!
            </p>
        </div>
    </div>
</div>

<!-- slider section -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <!-- these are indicate bars bottom in the slides can move -->
        <!-- always update active the first slide -->
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    </ol>

    <!-- slides content -->

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="./assert/img 3.jpg" />
            <div class="carousel-caption d-none d-md-block">
                <h5>one</h5>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Similique debitis neque unde maiores nihil
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./assert/img 6.jpg" alt="Second slide" />
            <div class="carousel-caption d-none d-md-block">
                <h5>two</h5>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Similique debitis neque unde maiores nihil
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./assert/img 3.jpg" alt="Third slide" />
            <div class="carousel-caption d-none d-md-block">
                <h5>three</h5>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Similique debitis neque unde maiores nihil
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./assert/img 5.jpg" alt="Fourth slide" />
            <div class="carousel-caption d-none d-md-block">
                <h5>four</h5>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Similique debitis neque unde maiores nihil
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./assert/img 2.jpg" alt="fiveth slide" />
            <div class="carousel-caption d-none d-md-block">
                <h5>five</h5>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Similique debitis neque unde maiores nihil
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./assert/img 5.jpg" alt="sixth slide" />
            <div class="carousel-caption d-none d-md-block">
                <h5>six</h5>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Similique debitis neque unde maiores nihil
                </p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <!-- slide left and right moving butto ns -->
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<?php include 'footer.php'; ?>