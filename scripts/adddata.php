<?php
include'common.php';
// $data=$_POST['data'];
$name=$_POST['name'];
$date=$_POST['dob'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$query1="select * from users where mobile='$mobile'";
$result1=mysqli_query($con,$query1);
if(mysqli_num_rows($result1)>0){
    header("location:../AddContact.php?msg=Mobile number already Exists!");
}else{
$query="insert into users (name,date,mobile,email) values ('$name','$date','$mobile','$email')";
$result=mysqli_query($con,$query)or die(mysqli_error($con));
header('location:../AddContact.php?error=Contact Added Sucessfully!');
}
?>