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

/* @import url("https://fonts.googleapis.com/css?family=Heebo:400,700|Open+Sans:400,700"); */

:root {
    --color: maroon;
    --transition-time: 1s;
}

* {
    box-sizing: border-box;
}


a {
    color: inherit;
}

/* card styling */
.cards-wrapper {
    display: grid;
    justify-content: center;
    align-items: center;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 4rem;
    padding: 4rem;
    margin: 0 auto;
    width: max-content;
    margin-top: 2rem;

}

.csr-card {
    transition: 0.5s;
}

.csr-card:hover {
    transform: translate3d(4px, 10px, 3px);
}

/* card interface linkable text */
.card {
    font-family: "Heebo";
    --bg-filter-opacity: 0.5;
    /* background-image: linear-gradient(rgba(0, 0, 0, var(--bg-filter-opacity)),
            rgba(0, 0, 0, var(--bg-filter-opacity))),
        var(--bg-img); */
    height: 20em;
    width: 15em;
    font-size: 1.5em;
    /* initial text color */
    color: white;
    border-radius: 1em;
    padding: 1em;
    /*margin: 2em;*/
    display: flex;
    align-items: flex-end;
    background-size: cover;
    background-position: center;
    box-shadow: 0 0 5em -1em black;
    transition: all, var(--transition-time);
    position: relative;
    overflow: hidden;
    border: 10px solid transparent;
    border-image: linear-gradient(30deg, black, white);
    border-image-slice: 1;
    border-radius: 10px;
    text-decoration: none;
}

.card:hover {
    transform: rotate(0);
}

/*event topic */
.card h1 {
    text-transform: uppercase;
    margin: 0;
    font-size: 1.5em;
    line-height: 1.2em;
    text-shadow: 2px 2px rgba(0, 0, 0, 0.7);
}


/* description */
.card p {
    font-size: 0.75em;
    font-family: "Open Sans";
    margin-top: 0.5em;
    line-height: 2em;
    text-shadow: 1px 1px rgba(0, 0, 0, 0.7);
}

/* date display */
.card .tags {
    display: flex;
}

/* card bottom date tag style */
.card .tags .tag {
    font-size: 0.75em;
    background: rgba(255, 255, 255, 0.3);
    color: #353535;
    border-radius: 0.3rem;
    padding: 0 0.5em;
    margin-right: 0.5em;
    line-height: 1.5em;
    transition: all, var(--transition-time);
}

/* card bottom date tag hovering style */
.card:hover .tags .tag {
    background: var(--color);
    color: white;
}

.card:before,
.card:after {
    content: "";
    transform: scale(0);
    transform-origin: top left;
    border-radius: 50%;
    position: absolute;
    left: -50%;
    top: -50%;
    z-index: -5;
    transition: all, var(--transition-time);
    transition-timing-function: ease-in-out;
}

.card:before {
    background: #ddd;
    width: 250%;
    height: 250%;
}

.card:after {
    background: linear-gradient(gray, white);
    width: 200%;
    height: 200%;
}

.card:hover {
    color: var(--color);
}

.card:hover:before,
.card:hover:after {
    transform: scale(1);
}

/* MEDIA QUERIES */
@media screen and (max-width: 1285px) {
    .cards-wrapper {
        grid-template-columns: 1fr 1fr;
    }
}

@media screen and (max-width: 900px) {
    .cards-wrapper {
        grid-template-columns: 1fr;
    }
}

@media screen and (max-width: 500px) {
    .cards-wrapper {
        padding: 4rem 2rem;
    }

    .card {
        max-width: calc(100vw - 4rem);
    }
}
</style>
<!-- ///////////section topic /////////////// -->

<div class="section-3 containe-fluid p-0">
    <div class="cover">
        <div class="content text-center">
            <h1>csr</h1>
            <h4>Home / Blog & Media / <span>csr</span>
                </h2>
        </div>
    </div>
</div>

<!-- //////////////  main content start /////////////// -->


<main class="main">
    <section class="cards-wrapper" data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine"
        data-aos-duration="700">
        <?php include './db_conn.php';?>
        <?php
    
    $imgs = "select * from titles where type = '1'";
    $imgs_query = mysqli_query($conn,$imgs);

    if(mysqli_num_rows($imgs_query) > 0){
        foreach($imgs_query as $result){
          ?>
        <div class="csr-card card-grid-space">
            <a class="card" href="./csrgallery.php?id=<?php echo $result['title_id'];?>"
                style="background-image: url('../admin dashboard/admin/images/<?= $result['c_img'];?>')">
                <div>
                    <h1><?php echo $result['title'];?></h1>
                    <p>
                        <?php echo $result['stitle'];?>
                    </p>
                    <div class="tags">
                        <div class="tag"><?php echo $result['date'];?></div>
                    </div>
                </div>
            </a>
        </div>
        <?php }
    }
    ?>

    </section>
</main>


<!-- //////////////  main content end /////////////// -->


<?php include 'footer.php'; ?>