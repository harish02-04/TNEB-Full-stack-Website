<!DOCTYPE html>
<html>
<head>
	<title>TNEB-Home</title>
	<style type="text/css">
		*{
			text-decoration: none;
		}
        body{
        			margin-right: 0%;
			margin-left: 0%;
			margin-top: 0%;
			margin-bottom: 0%;
			background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
			background-repeat: no-repeat;
			  background-attachment: fixed;
  background-size: cover
        }
		.navbar{
			 font-family: calibri; padding-right: 15px;padding-left: 15px;
	
		}
		.navdiv{
			display: flex; align-items: center; justify-content: space-between;
		}
		.logo a{
			font-size: 35px; font-weight: 600; color: black;
		}
		li{
			list-style: none; display: inline-block;
		}
		li a{
			color: white; font-size: 18px; font-weight: bold; margin-right: 25px;
		}
		#but{
			background-color: red;  border-radius: 10px; padding: 10px; width: 90px;
		}
		#but a{
			color: white; font-weight: bold; font-size: 15px;
		}
		li a:hover:not(.active) {
  background-color: white;
  color: black;
  border-radius: 5px;
  padding: 15px;
}
.intro p{
	font-size: 20px;
	font-weight: bold;
	font-family: monospace;
}

	</style>
</head>
<body>

	<nav class="navbar">
		<div class="navdiv" id="nav">
			<div class="logo"><a href="#" style="color:white;" >⚡𝑻𝑵𝑬𝑩</a> </div>
			<ul>
				<li><a href="#" style="  background-color: white;
  color: black;border-radius: 5px;padding: 15px;">Home</a></li>
				<li><a href="newconn.php">NewConnection</a></li>
				<li><a href="bill.php">Bills</a></li>
				<li><a href="request.php">Requests</a></li>

				<button id="but"><a href="index.php">Logout</a></button>
			</ul>
		</div>
		<br><br><br><br><br>
	<center><div class="intro">
		<h2 style="font-size: 30px; color:white">Ｗｅｌｃｏｍｅ! <br><br>  <pre>𝑻𝒉𝒊𝒔 𝒊𝒔 𝑻𝑵𝑬𝑩 official portal<pre></h2>
		<p style="color:yellow;">	We enables you to maintain EB connections like make pay your electricity bills,apply new electricty connection etc...</p>
		<br><br>
		<h2 style="font-size: 30px; color:white">Ｌｅｔ＇ｓ　Ｇｏ!!!</h2>
	</div></center>
	<script src="home.js"></script>
</body>
</html>