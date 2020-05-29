<?php
include 'common.php';
$search=$_POST["search"];
$query="select * from users where name like '$search%' order by name";
$result=mysqli_query($con,$query)or die(mysqli_error($con));
if(mysqli_num_rows($result)!=0){
echo json_encode($result->fetch_all());
}

?>