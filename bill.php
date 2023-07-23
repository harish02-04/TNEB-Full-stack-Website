<!DOCTYPE html>
<html>
<head>
	<title>TNEB-Bills</title>
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

#form-main{
	
	width:100%;
	float:left;
	padding-top:0px;
}

#form-div {
	background-color:white;
	padding-left:35px;
	padding-right:35px;
	padding-top:35px;
	padding-bottom:50px;
	width: 450px;
	float: left;
	left: 50%;
	position: absolute;
  margin-top:30px;
	margin-left: -260px;
  -moz-border-radius: 7px;
  -webkit-border-radius: 7px;
}

.feedback-input {
	color:#3c3c3c;
	font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
	font-size: 18px;
	border-radius: 0;
	border: 1px solid black;
	line-height: 22px;
	background-color: #fbfbfb;
	padding: 13px 13px 13px 54px;
	margin-bottom: 10px;
	width:100%;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
  
}



.focused{
	color:#30aed6;
	border:#30aed6 solid 3px;
}

/* Icons ---------------------------------- */
#name{
	background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}

#name:focus{
	background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
	background-size: 30px 30px;
	background-position: 8px 5px;
  background-position: 11px 8px;
	background-repeat: no-repeat;
}

#email{
	background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}

#email:focus{
	background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
	background-size: 30px 30px;
  background-position: 11px 8px;
	background-repeat: no-repeat;
}




input:hover, textarea:hover,
input:focus, textarea:focus {
	background-color:white;
}

#button-blue{
	font-family: 'Montserrat', Arial, Helvetica, sans-serif;
	float:left;
	width: 100%;
	border: #fbfbfb solid 4px;
	cursor:pointer;
	background-color: #3498db;
	color:white;
	font-size:24px;
	padding-top:22px;
	padding-bottom:22px;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}


	
.submit:hover {
	color: #3498db;
}
	
.ease {
	width: 0px;
	height: 74px;
	background-color: #fbfbfb;
	-webkit-transition: .3s ease;
	-moz-transition: .3s ease;
	-o-transition: .3s ease;
	-ms-transition: .3s ease;
	transition: .3s ease;
}
.submit{
  width:50%;
  height:50%;
}

.submit:hover .ease{
  width:100%;
  background-color:white;
}

@media only screen and (max-width: 580px) {
	#form-div{
		left: 3%;
		margin-right: 3%;
		width: 88%;
		margin-left: 0;
		padding-left: 3%;
		padding-right: 3%;
	}
}




#invoice-POS{
  box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
  padding:2mm;
  margin: 0 auto;
  width: 50%;
  border:7px double;
  background: #FFF;
} 
  
::selection {background: #f31544; color: #FFF;}
::moz-selection {background: #f31544; color: #FFF;}
h1{
  font-size: 1.5em;
  color: #222;
}
h2{font-size: 15px;}
h3{
  font-size: 1.2em;
  font-weight: 300;
  line-height: 2em;
}
p{
  font-size: .7em;
  color: #666;
  line-height: 1.2em;
}
 
#top, #mid,#bot{ /* Targets all id with 'col-' */
  border-bottom: 1px solid #EEE;
}

#top{min-height: 100px;}
#mid{min-height: 80px;} 
#bot{ min-height: 50px;}

  .bill{
      margin: auto;
  width: 70%;
  border: 0px solid black;
  padding: 10px;
  }
.clientlogo{
  float: left;
	height: 60px;
	width: 60px;
	background: url(http://michaeltruong.ca/images/client.jpg) no-repeat;
	background-size: 60px 60px;
  border-radius: 50px;
}
.but{
  width:100px;
  height:30px;
  border-radius:5px;
}
.info{
  display: block;
  //float:left;
  margin-left: 0;
}
.title{
  float: right;
}
.title p{text-align: right;} 
table{
  width: 100%;
  border-collapse: collapse;
}
td{
  //padding: 5px 0 5px 15px;
  //border: 1px solid #EEE
}
.tabletitle{
  //padding: 5px;
  font-size: .5em;
  background: #EEE;
}
.service{border-bottom: 1px solid #EEE;}
.item{width: 24mm; padding:11px;}
.itemtext{font-size: 13px;}


	</style>
</head>
<body>

	<nav class="navbar">
		<div class="navdiv" id="nav">
			<div class="logo"><a href="#" style="color:white;" >⚡𝑻𝑵𝑬𝑩</a> </div>
			<ul>
				<li><a href="home.php">Home</a></li>>
				<li><a href="newconn.php">NewConnection</a></li>
								<li><a href="#" style="  background-color: white;
  color: black;border-radius: 5px;padding: 15px;">Bills</a></li>
				<li><a href="request.php">Requests</a></li>

				<button id="but"><a href="index.php">Logout</a></button>
			</ul>
		</div>
		<br><br>


		<div  id="form-main">
  <div id="form-div">
    <form class="form" id="form1">
      <center><h1>⚡𝑻𝑵𝑬𝑩 𝙱𝚒𝚕𝚕𝚜</h1></center>
      <p class="name">
        <input name="name" type="text" class=" feedback-input" placeholder="Customer Name" id="name" />
      </p>
      
      <p class="email">
        <input name="email" type="text" class=" feedback-input" id="cus" placeholder="Customer Number" />
      </p>
      

      
      
      
    </form>

          <center><div class="submit">
        <button id="button-blue">𝑮𝒆𝒕</button>
        <div class="ease"></div></center>
      </div>
  </div>
<br><br><br>
         
</body>
<script>

var gb=document.getElementById('button-blue');
gb.addEventListener("click",(ev)=>{
	var n=document.getElementById('name').value;
var c=document.getElementById('cus').value;
	  if(n=="VAITHIYALINGAM S" && c=="TNEB989426"){
    location.replace('finbill.php');}
    else{
    	alert("Invalid Details");
    }
})
</script>
</html>