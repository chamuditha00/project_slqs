<?php include 'header.php'; ?>


<style>
/* section-topic */


/* 
///////////////////////////////////////////////////////////////////////// */
body {
    overflow-X: hidden;
}

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

/* <!-- //////////////  main content start /////////////// --> */

:root {
    --surface-color: #212121;
    --curve: 40;
}





.cards {
    /* grid-template-columns: repeat(auto-fit, minmax(100px, 1fr)); */
    gap: 1rem;
    margin: 4rem 2vw;
    padding: 0;
    box-shadow: 1px 4px 4rem 1rem black;
    border-radius: 40px;
    transition: 0.3s;
}


.cards:hover {
    transform: translate3d(0px, 10px, 4px);

}


.card {
    position: relative;
    display: block;
    height: 100%;
    max-height: 300px;
    min-height: 200px;
    border-radius: calc(var(--curve) * 1px);
    overflow: hidden;
    text-decoration: none;
}

.card__image {
    width: 100%;
    height: auto;
}

.card__overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1;
    border-radius: calc(var(--curve) * 1px);
    background-color: rgb(104, 5, 5);
    transform: translateY(100%);
    transition: 0.2s ease-in-out;
}

.card:hover .card__overlay {
    transform: translateY(0);
}

.card__header {
    position: relative;
    display: flex;
    align-items: center;
    gap: 1em;
    padding: 1em;
    border-radius: calc(var(--curve) * 1px) 0 0 0;
    background-color: rgb(104, 5, 5);
    transform: translateY(-100%);
    transition: 0.2s ease-in-out;
}

.card__arc {
    width: 80px;
    height: 80px;
    position: absolute;
    bottom: 100%;
    right: 0;
    z-index: 1;
}

.card__arc path {
    fill: rgb(104, 5, 5);
    d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
}

.card:hover .card__header {
    transform: translateY(0);
}

.card__thumb {
    flex-shrink: 0;
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

.card__title {
    font-size: 1.2rem;
    margin: 0 0 0.3em;
    color: darkgray;
}

.card__description {
    padding: 0 2em 2em;
    margin: 0;
    color: white;
    font-family: "MockFlowFont";
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
    overflow: hidden;
}

@media screen and (max-width: 576px) {
    .cards {
        margin: 2rem 12vw;
    }
}
</style>

<!-- ///////////section topic /////////////// -->

<div class="section-3 containe-fluid p-0">
    <div class="cover">
        <div class="content text-center">
            <h1>gallery</h1>
            <h4>Home / Blog & Media / <span>gallery</span>
                </h2>
        </div>
    </div>
</div>

<!-- //////////////  main content start /////////////// -->


<main class="main">
    <div class="row">

        <!-- /// -->
        <?php include './db_conn.php';?>
        <?php
    
    $imgs = "select * from titles where type = '0'";
    $imgs_query = mysqli_query($conn,$imgs);

    if(mysqli_num_rows($imgs_query) > 0){
        foreach($imgs_query as $result){
          ?>
        <div class=" col-12 col-sm-6 col-lg-4 col-xl-lg-3" data-aos="zoom-in" data-aos-duration="1000">
            <div class=" cards">


                <a href="./gallery.php?id=<?php echo $result['title_id'];?>" target="_parent" class="card">
                    <img src="../admin dashboard/admin/images/<?= $result['c_img'];?>" class="card__image" alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <!-- curve part right top in header -->
                            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                <path />
                            </svg>
                            <img class="card__thumb" src="./assert/img 2.jpg" alt="" />
                            <div class="card__header-text">
                                <h3 class="card__title"><?php echo $result['title'];?></h3>
                            </div>
                        </div>
                        <!-- meeta wada wachana aduwen ena widihta enter karanna hadapn -->
                        <p class="card__description">
                            <?php echo $result['stitle'];?>
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <?php
        }
      }
      ?>
        <!-- // -->


    </div>
</main>


<!-- //////////////  main content end /////////////// -->


<?php include 'footer.php'; ?>