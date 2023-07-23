<?php
include("db/confif.php");
if(isset($_POST['submit']))

{   
	$name=$_POST['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$result=mysqli_query($mysqli,"insert into details values('$username','$password','$name')");
if($result){
	echo "<script>window.alert('Login Now!!!');</script>";
	echo "<script>window.location.replace('index.php');</script>";
}
else{
	echo 'Not Inserted';
}
}
?>