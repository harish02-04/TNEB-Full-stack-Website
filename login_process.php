<?php
include("db/confif.php");

if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	if(empty($username) || empty($password)){
		header("Location:login.php?error=Username or password is missing");
		exit();
	}
	else{
		$sql="SELECT * from details WHERE username='$username' AND password='$password'";
		$result=mysqli_query($mysqli,$sql);
		if(mysqli_num_rows($result)){
			$row=mysqli_fetch_assoc($result);
			if($row['username']===$username && $row['password']===$password){
				
				header("Location:home.php");
				exit();
			}
			else{
				echo 'harish';
		}

      }


	}
}

 
