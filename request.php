

<?php 
     
    require_once("db/conn.php");
    $userlogin="hari9894";
        $query = " select * from apply where username= '{$userlogin}'";
    $result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
<style>   
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
}</style>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <title>TNEB-Requests</title>
</head>
<body>
    
    <div class="navdiv" id="nav">
      <div class="logo"><a href="#" style="color:white; text-decoration: none;" >⚡𝑻𝑵𝑬𝑩</a> </div>
      <ul><nav class="navbar">
                <li><a href="home.php" style="text-decoration: none;">Home</a></li>
        <li><a href="newconn.php" style="text-decoration: none;">NewConnection</a></li>
        <li><a href="bill.php" style="text-decoration: none;">Bills</a></li>
        <li><a href="#" style="  background-color: white;
  color: black;border-radius: 5px;padding: 15px; text-decoration: none;">Requests</a></li>

        <button id="but"><a href="index.php" style="text-decoration: none;">Logout</a></button>
      </ul>
    </div></nav>


























    <div class="container">
      <div class="row mt-5">
        <div class="col">
          <div class="card mt-5">
            <div class="card-header">
              <h2 class="display-6 text-center">𝑺𝒕𝒂𝒕𝒖𝒔 𝒐𝒇 𝒂𝒑𝒑𝒍𝒊𝒄𝒂𝒕𝒊𝒐𝒏𝒔</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white" id="top">
                  <td> UserName</td>
                  <td> Name</td>
                  <td> Address</td>
                  <td> Status</td>
                </tr>
                <tr>
                  <center><p id="no"></p></center>
                <?php 
                    $c=0;
                  while($row = mysqli_fetch_assoc($result))
                  { 
                    $c++;
                ?>
                  <td><?php echo $row['username']; ?></td>
                  <td style=" font-weight: bold;"><?php echo $row['name']; ?></td>
                  <td><?php echo $row['address']; ?></td>
                  <td style="color:green;">𝐈𝐧 𝐏𝐫𝐨𝐠𝐫𝐞𝐬𝐬</td>
                  <!--<td><a href="#" class="btn btn-primary">Edit</a></td>  
                  <td><a href="#" class="btn btn-danger">Delete</a></td>-->  
                </tr>
                <?php  

                  }
                
                ?>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
               <script>
                     const count=<?php echo $c; ?>; 
                     if(count==0){
                         document.getElementById('top').style.display='none';
                         document.getElementById('no').innerHTML="No applications";
                     }
                  </script>
</html>