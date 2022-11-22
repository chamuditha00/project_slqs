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
@import url("https://fonts.googleapis.com/css?family=Oswald:300,400,500,700");
@import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800");

* {
    transition: 0.5s;
}


/* job card */

#services {
    margin: 2rem !important;
}

main .service-card {
    margin: 2rem 0;
    transition: 0.5s !important;
}


main .service-card:hover {
    transform: translate3d(10px, -4px, 4px) !important;
}

main .services .service-item {
    padding: 30px;
    background: linear-gradient(maroon, black, lightgray);
    height: 100%;
    box-shadow: 0 0 13px 3px black;
}

main .services .service-item .icon {
    width: 50px;
    height: 50px;
    position: relative;
    margin-bottom: 50px;
}

main .services .service-item .icon i {
    color: lightgray;
    font-size: 40px;
    transition: ease-in-out 0.3s;
    z-index: 2;
    position: relative;
    line-height: 1.8;
}

main .services .service-item .icon:before {
    position: absolute;
    content: "";
    height: 100%;
    width: 100%;
    background: gray;
    border-radius: 90px;
    z-index: 1;
    top: 13px;
    right: 0px;
    transition: 0.3s;
}

main .services .service-item h2 {
    color: var(--color-default);
    font-weight: 700;
    color: white;
    text-transform: uppercase;
    margin: 0 0 20px 0;
    padding-bottom: 8px;
    font-size: 22px;
    position: relative;
    display: inline-block;
    border-bottom: 4px solid #ebebed;
    transition: 0.3s;
}

main .services .service-item p {
    line-height: 24px;
    font-size: 15px;
    font-weight: 400;
    margin-bottom: 0;
    color: white;
}

main .services .service-item .readmore {
    margin-top: 15px;
    font-weight: 600;
    display: inline-block;
    color: black;
}

main .services .service-item:hover .icon:before {
    background: black;
}

main .services .service-item:hover h2 {
    border-color: maroon;
}
</style>


<div class="section-3 containe-fluid p-0">
    <div class="cover">
        <div class="content text-center">
            <h1>jobs in kuwait</h1>
            <h4>Home / Members / <span>jobs in kuwait</span>
                </h2>
        </div>
    </div>
</div>


<!-- //////////////  main content start /////////////// -->

<main>
    <section id="services" class="services section-bg">


        <div class="row gy-4">
            <?php include './db_conn.php';?>
            <?php
    
    $jobs = "select * from events where category = 'job in kuwait'";
    $jobs_query = mysqli_query($conn,$jobs);

    if(mysqli_num_rows($jobs_query) > 0){
        foreach($jobs_query as $result){
                ?>
            <div class="service-card col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-hand-holding-dollar"></i>
                    </div>
                    <h2><?php echo $result['title'];?></h2>
                    <p>
                        <?php echo $result['description'];?>
                    </p>
                    <a href="service-details.html" class="readmore stretched-link"> <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <!-- End Service Item -->
            <?php
        }
      }
      ?>


        </div>
        </div>
    </section>

</main>

<?php include 'footer.php'; ?>