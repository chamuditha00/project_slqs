<?php include 'header.php'; ?>


<style>
/* <!-- //////////////  main content start /////////////// --> */


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

body {
    margin: 0;
    font-size: 1rem;
    line-height: 1.25;
}

.main .grid {
    width: 100%;
    max-width: 60rem;
    margin-top: 5rem;
    margin-bottom: 5rem;
    margin-left: auto;
    margin-right: auto;

    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    flex-direction: row;
    flex-wrap: wrap;
}

.main .grid-block {
    width: 50%;
    min-height: 11.25rem;
    padding: 1rem;
}

.main .image-grid {
    /* -webkit-transform: rotateX(0deg) rotateZ(0deg);
  transform: rotateX(0deg) rotateZ(0deg); */
    -webkit-perspective: 1000px;
    perspective: 1000px;
}

.main .image-grid .tile-link:hover .tile-img {
    top: -1rem;
    left: -1rem;
}

.main .image-grid .tile-img {
    position: relative;
    top: 0;
    left: 0;
    -webkit-transition-property: opacity, top, left, box-shadow;
    transition-property: opacity, top, left, box-shadow;
}

.main .tile-link {
    display: block;
}

.main .tile-link:hover .tile-img {
    opacity: 1;
}

.main .tile-link:hover .tile-img-link {
    display: block;
}

.main .tile-link:hover .tile-img-link:hover .tile-img {
    opacity: 0.5;
}

.main .tile-img {
    display: block;
    width: 100%;
    height: auto;
    opacity: 1;
    -webkit-transition-property: opacity;
    transition-property: opacity;
    -webkit-transition-duration: 0.125s;
    transition-duration: 0.125s;
    -webkit-transition-timing-function: ease-in;
    transition-timing-function: ease-in;
}

.main .tile-link:hover .tile-img {
    box-shadow: 5px 5px rgba(0, 0, 0, 0.4), 10px 10px rgba(0, 0, 0, 0.3),
        15px 15px rgba(0, 0, 0, 0.2), 20px 20px rgba(0, 0, 0, 0.1),
        25px 25px rgba(0, 0, 0, 0.05) !important;
}

::selection {
    color: #fff;
    background: red;
}

.main .container {
    background: transparent;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px 30px;
    box-shadow: 0px 0.5vh 5px 0px rgba(0, 0, 0, 0.5);
}

.main .container .tile {
    font-size: 50px;
    font-weight: 600;
}

.main .container p {
    font-size: 19px;
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
    <div class="grid image-grid">

        <!-- // -->
        <?php include './db_conn.php';?>
        <?php
    $id = $_GET['id'];
    $select ="SELECT * FROM `multiple-images` WHERE `title_id`='$id'";
    $que= mysqli_query($conn,$select);
    $num = mysqli_num_rows($que);

    if($num > 0){
      foreach($que as $result){
    ?>
        <div class="grid-block">
            <div class="tile">
                <a class="tile-link" href="#">
                    <img class="tile-img" src="../admin dashboard/admin/image/<?= $result['image_name'];?>"
                        alt="Image" />
                </a>
            </div>
        </div>
        <?php }
    }
    ?>
        <!-- // -->



    </div>
</main>


<!-- //////////////  main content end /////////////// -->




<?php include 'footer.php'; ?>