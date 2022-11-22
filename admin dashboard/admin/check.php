<?php

$cat = $_POST['category'];
if($cat=="1"){
    header('location: gallery.php');
}else if($cat=="2"){
    header('location: CSR.php');
}
?>