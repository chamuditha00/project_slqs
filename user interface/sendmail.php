<?php

require './db_conn.php';

    $username = $_POST['name'];
    $email = $_POST['email'];
    $sub = $_POST['subject'];
    $msg = $_POST['message'];

    $query ="INSERT INTO mail (`name`,`email`,`subject`,`message`) values
    ('$username','$email','$sub','$msg')";

    $query_run = mysqli_query($conn,$query);

    if($query_run){
        $_SESSION['message'] = "successed";
        header('location: contact.php');
        exit(0);
    }else{
        $_SESSION['message'] = "error";
        header('location: sendmail.php');
        exit(0);
    }