<?php

require 'db_conn.php';

    $username = $_POST['user_name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $fullname = $_POST['name'];
    $type = $_POST['user_type'];

    $query ="INSERT INTO users (user_name,user_type,password,name,email) values
    ('$username','$type','$password','$fullname','$email')";

    $query_run = mysqli_query($conn,$query);

    if($query_run){
        $_SESSION['message'] = "successed";
        header('location: done.php');
        exit(0);
    }else{
        $_SESSION['message'] = "error";
        header('location: wrong.php');
        exit(0);
    }
