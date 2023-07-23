<!DOCTYPE html>
<html>
<head>
	<title>TNEB-NewConnection</title>
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


@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}

.container{
  margin: auto;
  border: 3px dashed black;
  width: 60%;

  max-width: 1300px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width:80px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}


 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}



	</style>
</head>
<body>

	<nav class="navbar">
		<div class="navdiv" id="nav">
			<div class="logo"><a href="#" style="color:white;" >⚡𝑻𝑵𝑬𝑩</a> </div>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="#" style="  background-color: white;
  color: black;border-radius: 5px;padding: 15px;">NewConnection</a></li>
				<li><a href="bill.php">Bills</a></li>
				<li><a href="request.php">Requests</a></li>

				<button id="but"><a href="index.php">Logout</a></button>
			</ul>
		</div></nav>
		<br><br>

     
  
     <center><div id="cat"> <div id="clik" style="  background-color: lightgrey; 
  width: 88%;
  border: 15px ;
  padding: 5px;
  font-size:30px">𝖥𝗈𝗋 𝖺𝗉𝗉𝗅𝗒𝗂𝗇𝗀 𝗇𝖾𝗐 𝖼𝗈𝗇𝗇𝖾𝖼𝗍𝗂𝗈𝗇,<a style="font-size: 20px;">𝒄𝒍𝒊𝒄𝒌 𝒉𝒆𝒓𝒆..</a></div><div><img src="cat.png"></div></center>






		   <div class="container" id="con" >
    <div class="title" id="temp">𝑨𝒑𝒑𝒍𝒊𝒄𝒂𝒕𝒊𝒐𝒏 𝒇𝒐𝒓 𝒏𝒆𝒘 𝒄𝒐𝒏𝒏𝒆𝒄𝒕𝒊𝒐𝒏</div>
    <div class="content" id="form">
      <form action="newconn_process.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username"  name="username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="phno" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" placeholder="Enter your Address" name="address" required>
          </div>
          <div class="input-box">
            <span class="details">Aadhaar Number</span>
            <input type="text" placeholder="Enter your aadhaar no" name="adno" required >
          </div>
                    <div class="input-box">
            <span class="details">PAN Number</span>
            <input type="text" placeholder="Enter your pan no" name="panno" required>
          </div>
                    <div class="input-box">
            <span class="details">Ownership</span>
            <input type="text" placeholder="Name of Owner" name="own" required>
          </div>
                    <div class="input-box">
            <span class="details">Communication Address</span>
            <input type="text" placeholder="Communication address" name="commadd" required>
          </div>
                    <div class="input-box">
            <span class="details">Supply Address</span>
            <input type="text" placeholder="Supply address" name="suppadd" required>
          </div>
        </div>
        <div class="gender-details">
      
    
          <span class="gender-title">Tariff Type</span>
          <div class="category">
            <label for="dot-1">
            <input type="radio" name="py" id="dot-2" value="Domestic">
            <span class="gender">Domestic</span>
          </label>
          <label for="dot-2">
            <input type="radio" name="py" id="dot-2" value="Commercial">
            <span class="gender">Commercial</span>
          </label>
          </div>
        </div>
                <div class="gender-details">

         
          <span class="gender-title">Supply Type</span>
          <div class="category">
            <label for="d1">
            <input type="radio" name="ty" id="d1">
            <span class="gender">Single-phase (2 wire 240 volts)</span>
          </label>
          <label for="d2">
            <input type="radio" name="ty" id="d2">
            <span class="gender">Three-phase (4 wire 415volts and 240 volts) </span>
          </label>
          </div>
        </div><br>
        <div class="title">𝑫𝒐𝒄𝒖𝒎𝒆𝒏𝒕𝒔 𝑹𝒆𝒒𝒖𝒊𝒓𝒆𝒅</div><br>
                           <div class="gender-details">
<pre><span class="gender-title">𝖠𝖺𝖽𝗁𝖺𝖺𝗋 𝖢𝖺𝗋𝖽</span>                 <input type="file" placeholder="Communication address" ></pre>
          </div><br>

                                      <div class="gender-details">
            <pre><span class="gender-title">𝖱𝖺𝗍𝗂𝗈𝗇 𝖢𝖺𝗋𝖽</span>                     <input type="file" placeholder="Communication address" ></pre>
          </div><br>

                                      <div class="gender-details">
            <pre><span class="gender-title">𝖯𝗋𝗈𝗉𝖾𝗋𝗍𝗒 𝖣𝗈𝖼𝗎𝗆𝖾𝗇𝗍</span>      <input type="file" placeholder="Communication address" ></pre>
          </div><br>
          <div class="gender-details">
            <pre><span class="gender-title">𝖯𝗋𝗈𝗉𝖾𝗋𝗍𝗒 𝖳𝖺𝗑 𝖱𝖾𝖼𝖾𝗂𝗉𝗍</span>   <input type="file" placeholder="Communication address" ></pre>
          </div>
        <div class="button" >
          <input type="submit" id="butt"  name="submit" value="Register">
        </div>
      </form>
    </div>
  </div>
</body>
<script>
 const p=document.getElementById('form');
 const b=document.getElementById('butt');
 const con=document.getElementById('con');
 const clik=document.getElementById('clik');
con.style.display='none';
  clik.addEventListener("click",(e)=>{
    document.getElementById('nav').style.display='none';
    document.getElementById('cat').style.display='none';
      con.style.display='block';
 })

	</script>
</html>