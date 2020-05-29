<?php
include 'common.php';
$x=$_GET["id"];
$query="delete from users where id='$x'";
$result=mysqli_query($con,$query)or die(mysqli_error($con));
header('location:../index.php');

?>