<?php

require 'db_conn.php';

if(isset($_FILES['image'])){
    $id=$_POST['event_id'];
    $eventcategory = $_POST['category'];
    $eventtitle = $_POST['title'];
    $event_image = $_FILES['image']['name'];
    $pdf = $_FILES['pdf']['name'];
    //rename pdf
    $pdf_extention = pathinfo($pdf, PATHINFO_EXTENSION);
    $pdfename = time().'.'.$pdf_extention;
    //rename image
    $image_extention = pathinfo($event_image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_extention;
    $event_Description  = $_POST['description'];
    $eventdate = $_POST['date'];

    $query ="INSERT INTO events (event_id,category,title,date,description,image,pdf) values
    ('$id','$eventcategory','$eventtitle','$eventdate','$event_Description','$filename','$pdf')";

    $query_run = mysqli_query($conn,$query);

    if($query_run){
        move_uploaded_file($_FILES['pdf']['tmp_name'],'document/'.$pdf);
        move_uploaded_file($_FILES['image']['tmp_name'],'uploads/'.$filename);
        $_SESSION['message'] = "successed";
        header('location: done.php');
        exit(0);
    }else{
        $_SESSION['message'] = "error";
        header('location: wrong.php');
        exit(0);
    }

}
?>