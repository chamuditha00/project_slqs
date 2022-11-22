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





/* SECTION REST */

a,
a:hover {
    text-decoration: none;
    transition: color 0.6s ease-in-out;
}

#pageHeaderTitle {
    margin: 2rem 0;
    text-transform: uppercase;
    text-align: center;
    font-size: 2.5rem;
}

/* Cards */
.postcard {
    flex-wrap: wrap;
    display: flex;
    box-shadow: 0px 4px 15px 7px rgba(0, 0, 0, 0.8);
    border-radius: 10px;
    margin: 3rem 0 4rem 0;
    overflow: hidden;
    position: relative;
    color: #ffffff;
    /* post card one bottom side to other corner color */
    background-color: black;
    transition: 0.4s;
}

.postcard:hover {
    transform: translate3d(0px, 14px, 2px) !important;
}

.postcard a {
    color: inherit;
}

/* topic */
.postcard h1 {
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
}

/* date font size */
.postcard .small {
    font-size: 80%;
}

/* post card title */
.postcard .postcard__title {
    font-size: 1.75rem;
}

/* side imahge */
.postcard .postcard__img {
    max-height: 500px;
    width: 100%;
    object-fit: cover;
    position: relative;
}

.postcard .postcard__img_link {
    display: contents;
}

/* bellow date bar styling */
.postcard .postcard__bar {
    width: 50px;
    height: 10px;
    margin: 10px 0;
    border-radius: 5px;
    transition: width 0.2s ease;
}

/* article content decription */
.postcard .postcard__text {
    padding: 1.5rem;
    position: relative;
    display: flex;
    flex-direction: column;
}

.postcard .postcard__preview-txt {
    overflow: hidden;
    text-overflow: ellipsis;
    text-align: justify;
    height: 100%;
}

.postcard:before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-image: linear-gradient(-70deg, red, transparent 50%);
    opacity: 1;
    border-radius: 10px;
}

/* bar transmission below date */
.postcard:hover .postcard__bar {
    width: 110px;
}

@media screen and (min-width: 769px) {
    .postcard {
        flex-wrap: inherit;
    }

    .postcard .postcard__title {
        font-size: 2rem;
    }

    .postcard .postcard__img {
        max-width: 300px;
        max-height: 100%;
        transition: transform 0.3s ease;
    }

    .postcard .postcard__text {
        padding: 3rem;
        width: 100%;
    }

    .postcard:hover .postcard__img {
        transform: scale(1.1);
    }

    .postcard:nth-child(2n + 1) {
        flex-direction: row;
    }

    .postcard:nth-child(2n + 0) {
        flex-direction: row-reverse;
    }

    /* ajust the slash bar position and rotate */
    .postcard:nth-child(2n + 1) .postcard__text::before {
        left: -25px !important;
        transform: rotate(3deg);
    }

    .postcard:nth-child(2n + 0) .postcard__text::before {
        right: -25px !important;
        transform: rotate(-3deg);
    }
}

@media screen and (min-width: 1024px) {

    /* text contetnt padding */
    .postcard__text {
        padding: 3rem 4.5rem !important;
    }

    /* slash and backslash big bar */
    .postcard__text:before {
        content: "";
        position: absolute;
        display: block;
        top: -20%;
        height: 130%;
        width: 80px;
    }

    .postcard .postcard__text:before {
        background: linear-gradient(black, lightgray);
    }
}

.Colour .postcard__title:hover {
    color: maroon;
}

/* bar bellow date  */
.Colour .postcard__bar {
    background-color: lightcoral !important;
}

.Colour::before {
    background-image: linear-gradient(-30deg,
            rgba(129, 0, 0, 0.8),
            transparent 50%);
}

.Colour:nth-child(2n)::before {
    background-image: linear-gradient(30deg,
            rgba(129, 0, 0, 0.8),
            transparent 50%);
}
</style>


<!-- ///////////section topic /////////////// -->

<div class="section-3 containe-fluid p-0">
    <div class="cover">
        <div class="content text-center">
            <h1>Article</h1>
            <h4>Home / Blog &Media / <span>Article</span>
                </h2>
        </div>
    </div>
</div>

<!-- //////////////  main content start /////////////// -->


<main class="main">
    <section class="articles">
        <div class="container py-4">
            <?php include './db_conn.php';?>
            <?php
    
    $events = "select * from events where category = 'artical'";
    $event_query = mysqli_query($conn,$events);

    if(mysqli_num_rows($event_query) > 0){
        foreach($event_query as $result){
                ?>

            <article class="postcard Colour" data-aos="zoom-in-up" data-aos-duration="800">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="../admin dashboard/admin/uploads/<?= $result['image'];?>"
                        alt="Image Title" />
                </a>

                <div class="postcard__text">
                    <h1 class="postcard__title Colour">
                        <a href="#"><?php echo $result['title'];?></a>
                    </h1>
                    <div class="postcard__subtitle small">
                        <time datetime="2020-05-25 12:00:00">
                            <i class="fas fa-calendar-alt mr-2"></i><?php echo $result['date'];?>
                        </time>
                    </div>

                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">
                        <?php echo $result['description'];?>
                    </div>
                </div>
            </article>
            <?php }
    }
    ?>

        </div>
    </section>
</main>


<!-- //////////////  main content end /////////////// -->



<?php include 'footer.php'; ?>