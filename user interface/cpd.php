<?php include 'localheader.php'; ?>


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

/* main statrt */
.main .container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    max-width: 2000px;
    margin: 40px 0;
}

.main .container .card {
    position: relative;
    min-width: 320px;
    height: 440px;
    box-shadow: inset 5px 5px 5px rgba(255, 255, 255, 0.8),
        inset -5px -5px 15px rgba(0, 0, 0, 0.7), 5px 5px 15px rgba(0, 0, 0, 0.8),
        -5px -5px 15px rgba(0, 0, 0, 0.7);
    border-radius: 15px;
    margin: 30px;
    transition: 0.5s;
    background: lightgray;
}

.main .container .card .box .content a {
    background: linear-gradient(black, gray) !important;
}

.main .container .card .box {
    position: absolute;
    top: 20px;
    left: 20px;
    right: 20px;
    bottom: 20px;
    background: #2a2b2f;
    border-radius: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    transition: 0.5s;
}

.main .container .card .box:hover {
    transform: translate3d(-10px, -5px, 3px);
}

.main .container .card .box:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 50%;
    height: 100%;
    background: rgba(128, 0, 0, 0.3);
}

.main .container .card .box .content {
    padding: 20px;
    text-align: center;
}

.main .container .card .box .content h2 {
    position: absolute;
    top: -10px;
    right: 95px;
    font-size: 5rem;
    color: rgba(255, 255, 255, 0.3);
}

.main .container .card .box .content h3 {
    font-size: 1.8rem;
    color: #fff;
    z-index: 1;
    transition: 0.5s;
    margin-bottom: 15px;
}

.main .container .card .box .content p {
    font-size: 1rem;
    font-weight: 300;
    color: rgba(255, 255, 255, 0.9);
    z-index: 1;
    transition: 0.5s;
}

.main .container .card .box .content a {
    position: relative;
    display: inline-block;
    padding: 8px 20px;
    border-radius: 5px;
    text-decoration: none;
    color: lightgray;
    margin-top: 20px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    transition: 0.5s;
}

.main .container .card .box .content a:hover {
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
    background: #fff;
    color: white;
}
</style>

<!-- ///////////section topic /////////////// -->

<div class="section-3 containe-fluid p-0">
    <div class="cover">
        <div class="content text-center">
            <h1>cpd</h1>
            <h4>Members / Training & Events / <span>cpd</span>
                </h2>
        </div>
    </div>
</div>

<!-- //////////////  main content start /////////////// -->


<main class="main">
    <div class="container">


        <!-- // -->
        <?php include './db_conn.php';?>
        <?php
    
    $events = "select * from events where category = 'CPD'";
    $event_query = mysqli_query($conn,$events);

    if(mysqli_num_rows($event_query) > 0){
        foreach($event_query as $result){
                ?>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h3><?php echo $result['title'];?></h3>
                    <p><?php echo $result['description'];?></p>
                    <a href="../admin dashboard/admin/document/<?= $result['pdf'];?>">Read More</a>
                </div>
            </div>
        </div>

        <?php
        }
    }
    ?>
        <!-- /// -->





    </div>
</main>


<!-- //////////////  main content end /////////////// -->




<?php include 'footer.php'; ?>