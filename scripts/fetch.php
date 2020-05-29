<?php
include 'common.php';
$query="select * from users order by name asc";
$result=mysqli_query($con,$query)or die(mysqli_error($con));
if(mysqli_num_rows($result)!=0){
echo json_encode($result->fetch_all());
}

?>