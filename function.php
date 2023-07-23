<?php 

  require_once 'confif.php';

  function dispaly_data(){
    global $con;
    $query = "select * from request";
    $result = mysqli_query($con,$query);
    return $result;
  }

?>