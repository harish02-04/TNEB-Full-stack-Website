<?php
include("db/confif.php");
if(isset($_POST['submit']))

{   
	$name=$_POST['name'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$phno=$_POST['phno'];
	$address=$_POST['address'];
	$adno=$_POST['adno'];
	$panno=$_POST['panno'];
	$own=$_POST['own'];
	$commadd=$_POST['commadd'];
	$suppadd=$_POST['suppadd'];
	$result=mysqli_query($mysqli,"insert into apply values('$name','$username','$email','$phno','$address','$adno','$panno','$own','$commadd','$suppadd')");
if($result){
	echo "<script>window.location.replace('appsucc.php');</script>";

}
else{
	echo 'Not Inserted';
}
}
?>