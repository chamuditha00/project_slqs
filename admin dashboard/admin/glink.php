<?php
$ab=$_POST['title'];

echo $ab;
header( "Location:addgimage.php?id=$ab" );
?>