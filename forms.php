<?php

$name=$_POST['stname'];
$age=$_POST['stage'];
$gender=$_POST['gender'];
$email=$_POST['stemail'];

$con=mysqli_connect("localhost","root","","forum");


$sql="insert into registration_table (name,age,gender,emailname) values('$name','$age','$gender','$email')";

$returne=mysqli_query($con,$sql);

if($returne)
{
	echo "details added";
	
}
else
{
	echo "details not added";
}
?>


