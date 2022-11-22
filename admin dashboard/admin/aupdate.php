<?php include 'home.php';

include 'db_conn.php';

if(isset($_POST['update']))
{
    $id = $_POST['user_id'];
    $user_name = $_POST['user_name'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    $query = "UPDATE `users` SET `user_name`='$user_name',`password`='$password',`name`='$name',`email`='$email' WHERE  `id`='$id'";
    $query_run = mysqli_query($conn,$query);
    header('location: done.php');

}

?>