<?php include 'home.php';

include 'db_conn.php';

if(isset($_POST['update']))
{
    $event_id = $_POST['event_id'];
    $cate = $_POST['cate'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    
    $query ="UPDATE `events` SET `event_id`='$event_id',`category`='$cate',`title`='$title',`date`='$date',`description`='$description' WHERE `event_id`='$event_id'";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
       
        exit(0);
    }
} header('location: done.php');



?>