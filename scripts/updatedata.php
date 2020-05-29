<?php
include'common.php';
$id=$_GET["id"];
$name=$_POST['name'];
$date=$_POST['dob'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$query1="select * from users where mobile='$mobile' and name!='$name'";
$result1=mysqli_query($con,$query1);
if(mysqli_num_rows($result1)>0){
    header("location:../EditContact.php?msg=Mobile number already Exists!");
}else{
$query="update users set name='$name' ,date='$date',mobile='$mobile',email='$email' where id='$id'";
$result=mysqli_query($con,$query)or die(mysqli_error($con));
header('location:../EditContact.php?error=Contact Edited Successfully');
}
?>